<?php

namespace Cwp\AdminBundle\Controller;

use Cwp\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Cwp\UtilBundle\Controller\BackendController;
use Cwp\UserBundle\Entity\Group;

class UserController extends BackendController {

    public function userlistAction() {

        $em = $this->getDoctrine()->getManager();
        $userList = $em->getRepository('CwpUserBundle:User')->findAll();
        return $this->render('CwpAdminBundle:User:user_list.html.twig', array(
                    'users' => $userList
        ));
    }

    public function userAddAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == 'POST') {
            $user_manager = $this->get('fos_user.user_manager');
            $user = $user_manager->createUser();
            $user->setUsername($request->get('username'));
            $user->setEmail($request->get('email'));
            $user->setPlainPassword($request->get('password'));
            $user->addRole('ROLE_ADMIN');
            $user->setEnabled(true);
            $groups = $request->get('group');
            foreach ($groups as $group) {
                $group_obj = $em->getRepository('CwpUserBundle:Group')->findOneById($group);
                $user->addGroup($group_obj);
            }
            //验证表单
            $validator = $this->get('validator');
            $errors = $validator->validate($user);
            if (count($errors) > 0) {
                $error = $errors[0];
                return $this->error($error->getMessage(), '', true);
            }
            $em->persist($user);
            $em->flush();

            if ($user->getId()) {
                return $this->success('添加成功！', 'cwp_admin_userlist', true);
            } else {
                return $this->success('添加失败！', '', true);
            }
        }
        $group_list = $em->getRepository('CwpUserBundle:Group')->findAll();
        if (empty($group_list)) {
            return $this->error('必须先添加一个群组', 'cwp_admin_groupadd');
        }
        return $this->render('CwpAdminBundle:User:user_add.html.twig', array(
                    'groups' => $group_list
        ));
    }

    public function userDelAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $user_id = $request->get('user_id');
        $user = $em->getRepository('CwpUserBundle:User')->findOneById($user_id);
        if ($user) {
            $em->remove($user);
            $em->flush();
            if (!$user->getId()) {
                //得不到ID 删除成功
                return $this->success('删除成功！', 'cwp_admin_menulist', true);
            }
        } else {
            return $this->error('', '', true);
        }
    }

    /**
     * 群组管理
     * @return type
     */
    public function groupListAction() {
        $em = $this->getDoctrine()->getManager();
        $group_list = $em->getRepository('CwpUserBundle:Group')->findAll();
        return $this->render('CwpAdminBundle:User:group_list.html.twig', array(
                    'groups' => $group_list
        ));
    }

    public function groupAddAction(Request $request) {
        if ($request->getMethod() == 'POST') {

            $name = $request->get('name');
            $Group = new Group($name, array());   //为什么要构造一个
            $Group->setName($name);
            $Group->setRoles(array());
            //验证表单
            $validator = $this->get('validator');
            $errors = $validator->validate($Group);
            if (count($errors) > 0) {
                $error = $errors[0];
                return $this->error($error->getMessage(), '', true);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($Group);
            $em->flush();

            if ($Group->getId()) {
                return $this->success('添加成功！', 'cwp_admin_grouplist', true);
            } else {
                return $this->error('添加失败', '', true);
            }
        }

        return $this->render('CwpAdminBundle:User:group_add.html.twig', array(
        ));
    }

    public function accessConfigAction(Request $requet) {
        $group_id = $requet->get('group_id');
        $em = $this->getDoctrine()->getManager();
        $group = $em->getRepository('CwpUserBundle:Group')->findOneById($group_id);
        $group_nodes = $group->getNodes();
        if ($requet->getMethod() == 'POST') {
            $nodes = $requet->get('node');
            $group_nodes_ids = array();
            foreach ($group_nodes as $value) {
                $group_nodes_ids[] = $value->getId();
            }
            $update_flag = false;
            foreach ($group_nodes_ids as $value) {
                if (!in_array($value, $nodes)) {
                    //删掉的   
                    $menu = $em->getRepository('CwpUtilBundle:Menu')->findOneById($value);
                    $group->removeNode($menu);
                    $em->flush();
                    $update_flag = true;
                }
            }
            foreach ($nodes as $value) {
                //新增的
                if (!in_array($value, $group_nodes_ids)) {
                    $menu = $em->getRepository('CwpUtilBundle:Menu')->findOneById($value);
                    $group->addNode($menu);
                    $em->flush();
                    $update_flag = true;
                }
            }

            if ($update_flag) {
                return $this->success('配置成功！', 'cwp_admin_grouplist', true);
            } else {
                return $this->error('未更新内容！', '', true);
            }
        }
        //获取菜单结果集
        $MenuRepositoryQuery = $em->getRepository('CwpUtilBundle:Menu')->createQueryBuilder('M')
                ->getQuery();
        $menu_list = $MenuRepositoryQuery->getArrayResult();
        $util = $this->get('cwp_util');
        $menu_format_list = $util->tree($menu_list);

        foreach ($group_nodes as $value) {
            foreach ($menu_format_list as $k => $v) {
                if ($value->getId() == $v['id']) {
                    $menu_format_list[$k]['checked'] = true;
                }
            }
        }
        return $this->render('CwpAdminBundle:User:access_config.html.twig', array(
                    'group' => $group,
                    'nodes' => $menu_format_list
        ));
    }

}
