<?php

namespace Cwp\UtilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * 后端公共控制器
 */
class UtilController extends Controller {

    /**
     * 无限分类的简单格式化
     * @param type $list
     * @param type $pid
     * @param type $key_val
     * @param type $pid_val
     * @param type $level
     * @param type $html
     * @return type
     */
    public function tree($list, $pid = 0, $key_val = 'id', $pid_val = 'pid', $level = 0, $html = '--') {
        $tree = array();
        foreach ($list as $v) {
            if ($v[$pid_val] == $pid) {
                $v['sort'] = $level;
                $v['html'] = str_repeat($html, $level);
                $tree[] = $v;
                $tree = array_merge($tree, self::tree($list, $v[$key_val], $key_val, $pid_val, $level + 1, $html));
            }
        }
        return $tree;
    }

    public function get_menu($list, $pid_key = 'pid', $id_key = 'id') {
        foreach ($list as $key => $value) {
            foreach ($list as $k => $v) {
                if ($value[$id_key] == $v[$pid_key]) {
                    $list[$key]['child'][] = $v;
                    unset($list[$k]);
                }
            }
        }
        $list = array_values($list);
        return $list;
    }

    public function fast_cache($name, $value = '', $path = DATA_PATH) {
        error_reporting(0);
        $filename = $path . $name . '.php';
        if ('' !== $value) {
            if (is_null($value)) {
                // 删除缓存
            } else {
                //开始缓存数据
                $cache_file = fopen($filename, 'wb+');
                fwrite($cache_file, serialize($value));
            }
        } else {
            $cache_file = fopen($filename, 'rb');
            $content = fread($cache_file, filesize($filename));
            return unserialize($content);
        }
    }

}
