<?php

namespace Cwp\UtilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * 后端公共控制器
 */
class BackendController extends Controller {

    /**
     * 执行操作成功的跳转页
     * @param type $message
     * @param type $route
     * @param type $isAjax
     * @return JsonResponse
     */
    protected function success($message = '操作成功！', $route = '', $isAjax = false) {
        if (empty($route)) {
            $request = $this->container->get('request');
            $reffeer = $request->server->get('HTTP_REFERER');
            $url = $reffeer;
        } else {
            $url = $this->generateUrl($route);
        }
        if (is_bool($isAjax) && $isAjax == TRUE) {
            $output['url'] = $url;
            $output['info'] = $message;
            $output['status'] = true;
            return new JsonResponse($output);
        } else {
            $time = $isAjax==false?3:$isAjax;
        }
        return $this->render('CwpUtilBundle:Jump:success.html.twig', array(
                    'redirectUrl' => $url,
                    'time' => $time,
                    'message' => $message,));
    }

    /**
     * 
     * @param type $message
     * @param type $route
     * @param type $isAjax
     * @return JsonResponse
     */
    protected function error( $message = '发生错误了！',$route='',$isAjax =false    ) {
        if (empty($route)) {
            $url = 'javascript:history.back(-1);';
        } else {
            $url = $this->generateUrl($route);
        }
        if (is_bool($isAjax) && $isAjax == TRUE) {
            $output['url'] = $url;
            $output['info'] = $message;
            $output['status'] = false;
            return new JsonResponse($output);
        } else {
            $time = $isAjax==false?3:$isAjax;
        }
        return $this->render('CwpUtilBundle:Jump:error.html.twig', array(
                    'redirectUrl' => $url,
                    'time' => $time,
                    'message' => $message,));
    }

}
