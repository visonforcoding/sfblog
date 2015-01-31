<?php

/**
 * Encoding     :   UTF-8
 * Created on   :   2014-12-30 0:12:25 by 曹文鹏 , caowenpeng1990@126.com
 */

namespace Cwp\UtilBundle\EventListener;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\Request;

class RunActListener {

    protected $securityContext;

    public function __construct(SecurityContextInterface $securityContext) {
        $this->securityContext = $securityContext;
    }

    public function onRunAct(FilterControllerEvent $event) {
        $request = $event->getRequest();
        $ajax = $request->isXmlHttpRequest();
        if (preg_match('/^\/admin/', $request->getRequestUri())) {
            $routeName = $request->get('_route');
            if ($this->securityContext->isGranted(array($routeName))) {
                
            } else {
                //throw new \Symfony\Component\Security\Core\Exception\AccessDeniedException();
                // throw new AccessDeniedHttpException('This action needs a valid token!');
//                $redirectUrl = 'http://www.baidu.com';

                $reffeer = $request->server->get('HTTP_REFERER');
//                $reffeer_route = $request
                $data['info'] = '您没有权限操作！';
                $data['status'] = false;
                if ($ajax) {
                    $event->setController(
                            function() use ($data) {
                        return new JsonResponse($data);
                    });
                } else {
                    $event->setController(
                            function() use ($data) {
                        return new Response('<b>您没有足够的访问权限!</b><script>setTimeout("window.history.back(-1)",2000)</script>');
                    });
//                    $session = $request->getSession();
                    //$request_obj = new Request();
                    //$new_request = $request_obj->duplicate();
                    //$new_request->setRequestUri = '/util/forbidden';
//                    $request->server->set('REQUEST_URI', '/util/forbidden');
//                    $request->initialize($event->getRequest()->query->all(), $event->getRequest()->request->all(), $event->getRequest()->attributes->all(), $event->getRequest()->cookies->all(), $event->getRequest()->files->all(), $event->getRequest()->server->all(), $event->getRequest()->getContent());
//                    $new_request = Request::create('/util/forbidden','GET',array(''));
//                    $new_request->setSession($session);
//                    $kernel = $event->getKernel();
//                    $response = $kernel->handle($new_request);
//                    $response->send();
//                    $kernel->terminate($new_request, $response);
//                            $controller = $event->getController();
//                            $controller[0]->forbiddenAction();
                    return;
                    // throw new AccessDeniedHttpException('This action needs a valid token!');
                }
//                echo "您没有权限";
//                exit();
//                $response = new Response();
//                $response->setStatusCode(Response::HTTP_OK);
//                $response->setContent('您没有足够的权限访问！');
//                return Response::create($response);
            }
        }
        //if($request->get('requestUri'))
    }

}
