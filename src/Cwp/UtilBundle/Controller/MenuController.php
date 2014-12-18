<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2014-12-1 20:54:14 by 曹文鹏 , caowenpeng1990@126.com
 */

namespace Cwp\UtilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Cwp\UtilBundle\Controller\BackendController;
use Symfony\Component\HttpFoundation\Response;
use Cwp\UtilBundle\Entity\Menu;

class MenuController extends BackendController {

    
    /**
     * 菜单显示
     * @return type
     */
    public function showMenuAction() {
        $util = $this->get('cwp_util');
        $menu_data = $util->fast_cache('menu');  //获取
        $request = $this->container->get('request');
        $path = $request->server->get('REDIRECT_URL');
        $path_arr = explode('/', $path);
        $path_len = count($path_arr);
        $top_index = (int) ($path_len - 2);
        $path_top = $path_arr[$top_index];
        foreach ($menu_data as $key => $value) {
            if ($path_top == $value['node']) {
                $menu_data[$key]['path_top'] = true;
            }
            if (isset($value['child'])) {
                foreach ($menu_data[$key]['child'] as $k => $v) {
                    if ($path == $this->generateUrl($v['node'])) {
                        $menu_data[$key]['child'][$k]['path_sec'] = true;
                    }
                }
            }
        }
        return $this->render('CwpUtilBundle:Layout:menu.html.twig', array(
                    'menus' => $menu_data,));
    }

    
    /**
     * 持久化菜单数据
     */
    public function init_menu() {
        $em = $this->getDoctrine()->getManager();
        //获取菜单结果集
        $MenuRepositoryQuery = $em->getRepository('CwpUtilBundle:Menu')->createQueryBuilder('M')
                ->where('M.isMenu = 1 and M.status = 1')
                ->getQuery();
        $menu_list = $MenuRepositoryQuery->getArrayResult();
        $util = $this->get('cwp_util');
        $format_menu = $util->get_menu($menu_list);
        $format_menu = array_values($format_menu);
        // 按Rank排序
        foreach ($format_menu as $key => $value) {
            $Rank[$key] = $value['rank'];
        }
        array_multisort($Rank, SORT_ASC, $format_menu);
        $util->fast_cache('menu', $format_menu);
    }

    
    /**
     * 显示面包屑
     * @return type
     */
    public function showCrumbAction() {
        $request = $this->container->get('request');

        $path = $request->server->get('REDIRECT_URL');

        $path_arr = explode('/', $path);
        $path_len = count($path_arr);
        $top_index = (int) ($path_len - 2);
        $path_top = $path_arr[$top_index];
        $route_arr = $this->get('router')->match($path);
        $route = $route_arr['_route'];
        $em = $this->getDoctrine()->getManager();
        //获取菜单结果集
        $top_menu = $em->getRepository('CwpUtilBundle:Menu')->findOneByNode($path_top);
        $sec_menu = $em->getRepository('CwpUtilBundle:Menu')->findOneByNode($route);
        return $this->render('CwpUtilBundle:Layout:crumb.html.twig', array(
                    'top_menu' => $top_menu,
                    'sec_menu' => $sec_menu,
        ));
    }

}
