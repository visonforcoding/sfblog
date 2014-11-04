<?php

namespace Cwp\AdminBundle\Controller;

use Cwp\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cwp\UtilBundle\Utils\Page\Page2;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller {

    public function userlistAction() {
  
        $UserRepository = $this->getDoctrine()->getRepository('CwpUserBundle:User');
        $userList = $UserRepository->findAll();
        $total = count($userList);
        $Page = new Page2($total);  //分页类
        $Page->pageShow = array('first' => '首页', 'ending' => '尾页', 'up' => '&laquo;', 'down' => '&raquo;', 'GoTo' => '确定');
        $Page->pageType = '%up%%numberF%%omitEA%%E%%down%';
        $show = $Page->pageShow();
        //分页查询
        $query = $UserRepository->createQueryBuilder('U')
                ->orderBy('U.id', 'desc')
                ->setFirstResult($Page->pageStart)
                ->setMaxResults($Page->pageSize)
                ->getQuery();
        $users = $query->getResult();
        return $this->render('CwpAdminBundle:User:userlist.html.twig', array(
                    'show' => $show,
                    'users' => $users
        ));
    }
    
    public function addUserAction(){
        return $this->render('CwpAdminBundle:User:addUser.html.twig',array(
            
        ));
    }
    
    public function doAddUserAction(Request $request){
        $username = $request->get('username');
        var_dump($username);
        exit();
    }

}
