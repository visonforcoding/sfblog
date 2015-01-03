<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2014-12-1 20:54:14 by 曹文鹏 , caowenpeng1990@126.com
 */

namespace Cwp\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cwp\UtilBundle\Entity\BlogCategory;
use Cwp\BlogBundle\Entity\Blog;
use Symfony\Component\HttpFoundation\Request;
use Cwp\UtilBundle\Form\Type\BlogcatType;
use Cwp\BlogBundle\Form\Type\BlogType;
use Cwp\UtilBundle\Utils\Page\Page2;
use Cwp\UtilBundle\Controller\BackendController;
use Symfony\Component\HttpFoundation\Response;
use Cwp\UtilBundle\Entity\Menu;

class MenuController extends BackendController {

    public function menuListAction() {
       

        $em = $this->getDoctrine()->getManager();
        //获取菜单结果集
        $MenuRepositoryQuery = $em->getRepository('CwpUtilBundle:Menu')->createQueryBuilder('M')
                ->getQuery();
        $menu_list = $MenuRepositoryQuery->getArrayResult();
        $util = $this->get('cwp_util');
        $menu_format_list = $util->tree($menu_list);
        return $this->render('CwpAdminBundle:Menu:menu_list.html.twig', array(
                    'menus' => $menu_format_list
        ));
    }

    /**
     * 添加菜单节点
     * @return type
     */
    public function addMenuAction(Request $request) {
        $request = $this->container->get('request');
        $route = $request->get('_route');
        $url = $this->generateUrl($route);

        $em = $this->getDoctrine()->getManager();
        //获取菜单结果集
        $MenuRepositoryQuery = $em->getRepository('CwpUtilBundle:Menu')->createQueryBuilder('M')
                ->getQuery();
        $menu_list = $MenuRepositoryQuery->getArrayResult();
        $util = $this->get('cwp_util');
        $menu_format_list = $util->tree($menu_list);
        if ($request->getMethod() == 'POST') {
            $Menu = new Menu();
            $Menu->setName($request->get('Name'));
            $Menu->setPid($request->get('Pid'));
            $Menu->setNode((string) $request->get('Node'));
            $Menu->setClass($request->get('Class'));
            $Menu->setIsMenu($request->get('IsMenu'));
            $Menu->setRemark((string) $request->get('Remark'));
            $Menu->setRank((int) $request->get('Rank'));
            $Menu->setStatus($request->get('Status'));
            //验证
            $validator = $this->get('validator');
            $errors = $validator->validate($Menu);
            if (count($errors) > 0) {
                $error = $errors[0];
                return $this->error($error->getMessage(), '', true);
            }
            $em->persist($Menu);
            $em->flush();
            if ($Menu->getId()) {
                $this->get('cwp_menu')->init_menu(); //更新菜单缓存   
                return $this->success('添加成功！', 'cwp_admin_menulist', true);
            } else {
                return $this->error('', '', true);
            }
        }
        return $this->render('CwpAdminBundle:Menu:menu_add.html.twig', array(
                    'menus' => $menu_format_list
        ));
    }

    /**
     * 节点修改
     * @param Request $request
     * @return type
     */
    public function menuUpdateAction(Request $request) {
        $menu_id = $request->get('menu_id');
        $em = $this->getDoctrine()->getManager();
        //获取菜单结果集
        $cur_menu = $em->getRepository('CwpUtilBundle:Menu')->findOneById($menu_id);
        $MenuRepositoryQuery = $em->getRepository('CwpUtilBundle:Menu')->createQueryBuilder('M')
                ->getQuery();
        $menu_list = $MenuRepositoryQuery->getArrayResult();
        $util = $this->get('cwp_util');
        $menu_format_list = $util->tree($menu_list);
        if ($request->getMethod() == 'POST') {
            $cur_menu->setName($request->get('Name'));
            $cur_menu->setPid($request->get('Pid'));
            $cur_menu->setNode((string) $request->get('Node'));
            $cur_menu->setClass($request->get('Class'));
            $cur_menu->setIsMenu($request->get('IsMenu'));
            $cur_menu->setRemark((string) $request->get('Remark'));
            $cur_menu->setRank((int) $request->get('Rank'));
            $cur_menu->setStatus($request->get('Status'));
            //验证
            $validator = $this->get('validator');
            $errors = $validator->validate($cur_menu);
            if (count($errors) > 0) {
                $error = $errors[0];
                return $this->error($error->getMessage(), '', true);
            }
            $em->persist($cur_menu);
            $em->flush();
            if ($cur_menu->getId()) {
                $this->get('cwp_menu')->init_menu(); //更新菜单缓存   
                return $this->success('更新成功！', 'cwp_admin_menulist', true);
            } else {
                return $this->error('', '', true);
            }
        }
        return $this->render('CwpAdminBundle:Menu:menu_update.html.twig', array(
                    'menus' => $menu_format_list,
                    'cur_menu' => $cur_menu
        ));
    }

    public function menuDelAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $menu_id = $request->get('menu_id');
        $menu = $em->getRepository('CwpUtilBundle:Menu')->findOneById($menu_id);
        if ($menu) {
            $em->remove($menu);
            $em->flush();
            if (!$menu->getId()) {
                //得不到ID 删除成功
                $this->get('cwp_menu')->init_menu(); //更新菜单缓存   
                return $this->success('删除成功！', 'cwp_admin_menulist', true);
            }
        } else {
            return $this->error('', '', true);
        }
    }

    /**
     * 博文管理
     * @return type
     */
    public function blogListAction() {
        $BlogRepository = $this->getDoctrine()->getRepository('CwpBlogBundle:Blog');
        $blogList = $BlogRepository->findAll();
        $total = count($blogList);
        $Page = new Page2($total);  //分页类
        $Page->pageShow = array('first' => '首页', 'ending' => '尾页', 'up' => '&laquo;', 'down' => '&raquo;', 'GoTo' => '确定');
        $Page->pageType = '%up%%numberF%%omitEA%%E%%down%';
        $show = $Page->pageShow();
        //分页查询
        $query = $BlogRepository->createQueryBuilder('B')
                ->orderBy('B.id', 'desc')
                ->setFirstResult($Page->pageStart)
                ->setMaxResults($Page->pageSize)
                ->getQuery();
        $rows = $query->getResult();
        return $this->render('CwpAdminBundle:Blog:blogList.html.twig', array(
                    'show' => $show,
                    'rows' => $rows
        ));
    }

    public function addBlogAction(Request $request) {
        $Blog = new Blog();
        $em = $this->getDoctrine()->getManager();
        $BlogCategoryRepository = $this->getDoctrine()->getRepository('CwpUtilBundle:BlogCategory');
        $query_blogcat = $BlogCategoryRepository->createQueryBuilder('B')
                ->getQuery();
        $blogCatList = $query_blogcat->getArrayResult();
        $util = $this->get('cwp_util');
        $blogCatFormatList = $util->tree($blogCatList);
        $success = false;
        if ($request->getMethod() == 'POST') {
            $pid = $request->get('pid');
            $category = $BlogCategoryRepository->findOneById($pid);
            $Blog->setTitle($request->get('title'));
            $Blog->setCategory($category);
            $Blog->setCover($request->get('cover'));
            $Blog->setGuide($request->get('guide'));
            $Blog->setContent($request->get('content'));
            $Blog->setKeywords($request->get('keywords'));
            $Blog->setDescription($request->get('description'));
            $validator = $this->get('validator');
            $errors = $validator->validate($Blog);
            if (count($errors) > 0) {
                $errorsList = array();
                foreach ($errors as $value) {
                    $field = $value->getPropertyPath();
                    $message = $value->getMessage();
                    $errorsList[][$field] = $message;
                }
                return $this->render('CwpAdminBundle:Blog:addBlog.html.twig', array(
                            'catlist' => $blogCatFormatList,
                            'errors' => $errorsList
                ));
            }
            $em->persist($Blog);
            $em->flush();
            if ($Blog->getId()) {
                $success = true;
            }
            if ($success) {
                return $this->success('cwp_admin_bloglist');
            } else {
                return $this->error();
            }
        }
        return $this->render('CwpAdminBundle:Blog:addBlog.html.twig', array(
                    'catlist' => $blogCatFormatList
        ));
    }

}
