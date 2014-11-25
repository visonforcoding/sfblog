<?php
namespace Cwp\UtilBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * 后端公共控制器
 */
class UtilController extends Controller {

    public function tree($list, $pid = 0, $level = 0, $html = '--') {
        $tree = array();
        foreach ($list as $v) {
            if ($v['pid'] == $pid) {
                $v['sort'] = $level; 
                $v['html'] = str_repeat($html, $level);
                $tree[] = $v;
                $tree = array_merge($tree, self::tree($list,$v['id'],$level+1,$html));
            }
        }
        return $tree;
    }

}