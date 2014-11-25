<?php

namespace Cwp\UtilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * 后端公共控制器
 */
class BackendController extends Controller {

    /**
     * 
     * @param type $list
     * @param type $pid
     * @param type $level
     * @param type $html
     * @return type
     */
    protected function tree($list, $pid = 0, $level = 0, $html = '--') {
        $tree = array();
        foreach ($list as $v) {
            if ($v['pid'] == $pid) {
                $v['sort'] = $level;
                $v['html'] = str_repeat($html, $level);
                $tree[] = $v;
                $tree = array_merge($tree, self::tree($list, $v['id'], $level + 1, $html));
            }
        }
        return $tree;
    }

    /**
     * 执行操作成功的跳转页
     * @param type $route
     * @param type $message
     * @param type $time
     * @return type
     */
    protected function success($route = '', $message = '操作成功！', $time = '3') {
        if (empty($route)) {
            $url = $_REQUEST['HTTP_REFERER'];
        } else {
            $url = $this->generateUrl($route);
        }
        return $this->render('CwpUtilBundle:Jump:success.html.twig', array(
                    'redirectUrl' => $url,
                    'time' => $time,
                    'message' => $message,));
    }

    /**
     * 执行操作错误的跳转页
     * @param type $route
     * @param type $message
     * @param type $time
     * @return type
     */
    protected function error($route = '', $message = '发生错误了！', $time = '3') {
        if (empty($route)) {
            $url = 'javascript:history.back(-1);';
        } else {
            $url = $this->generateUrl($route);
        }
        return $this->render('CwpUtilBundle:Jump:error.html.twig', array(
                    'redirectUrl' => $url,
                    'time' => $time,
                    'message' => $message,));
    }

}
