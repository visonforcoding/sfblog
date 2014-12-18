<?php

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

class BlogController extends BackendController {

    public function catListAction() {

        $BlogcatRepository = $this->getDoctrine()->getRepository('CwpUtilBundle:BlogCategory');
        $catList = $BlogcatRepository->findAll();
        $total = count($catList);
        $Page = new Page2($total);  //分页类
        $Page->pageShow = array('first' => '首页', 'ending' => '尾页', 'up' => '&laquo;', 'down' => '&raquo;', 'GoTo' => '确定');
        $Page->pageType = '%up%%numberF%%omitEA%%E%%down%';
        $show = $Page->pageShow();
        //分页查询
        $query = $BlogcatRepository->createQueryBuilder('C')
                ->orderBy('C.id', 'desc')
                ->setFirstResult($Page->pageStart)
                ->setMaxResults($Page->pageSize)
                ->getQuery();
        $rows = $query->getResult();
        return $this->render('CwpAdminBundle:Blog:catList.html.twig', array(
                    'show' => $show,
                    'rows' => $rows
        ));
    }

    /**
     * 添加博客类别
     * @return type
     */
    public function addCatAction(Request $request) {
        $BlogCatgory = new BlogCategory();
        $form = $this->createForm(new BlogcatType, $BlogCatgory);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $pid = $request->get('pid');
                $pid = empty($pid) ? 0 : $pid;  //暂未解决field 为entity 添加默认值的方法补救
                $name = $form->get('name')->getData();
                $BlogCatgory->setPid($pid);
                $BlogCatgory->setName($name);
                $em = $this->getDoctrine()->getManager();
                $em->persist($BlogCatgory);
                $em->flush();
                if (empty($BlogCatgory->getId())) {
                    return $this->render('CwpUtilBundle:Jump:error.html.twig', array(
                                'redirectUrl' => $this->generateUrl('cwp_admin_addcat'),
                                'time' => '3',
                                'message' => '发生错误！'));
                } else {
                    return $this->render('CwpUtilBundle:Jump:success.html.twig', array(
                                'redirectUrl' => $this->generateUrl('cwp_admin_blogcatlist'),
                                'time' => '3',
                                'message' => '添加成功!',));
                }
            }
        }

        return $this->render('CwpAdminBundle:Blog:addCat.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * 博文管理
     * @return type
     */
    public function blogListAction() {
        $BlogRepository = $this->getDoctrine()->getRepository('CwpBlogBundle:Blog');
        $blogList = $BlogRepository->findAll();
        return $this->render('CwpAdminBundle:Blog:blog_list.html.twig', array(
                    'blogs' => $blogList
        ));
    }

    public function addBlogAction(Request $request) {
        $Blog = new Blog();
        $user = $this->getUser();   //当前用户，博文作者
        $em = $this->getDoctrine()->getManager();
        $BlogCategoryRepository = $this->getDoctrine()->getRepository('CwpUtilBundle:BlogCategory');
        $query_blogcat = $BlogCategoryRepository->createQueryBuilder('B')
                ->getQuery();
        $blogCatList = $query_blogcat->getArrayResult();
        $util = $this->get('cwp_util');
        $blogCatFormatList = $util->tree($blogCatList);
        $success = false;
        if ($request->getMethod() == 'POST') {
            $pid = $request->get('category');
            $category = $BlogCategoryRepository->findOneById($pid);
            $Blog->setTitle($request->get('title'));
            $Blog->setCategory($category);
            $Blog->setCover($request->get('cover'));
            $Blog->setGuide($request->get('guide'));
            $Blog->setContent($request->get('content'));
            $Blog->setKeywords($request->get('keywords'));
            $Blog->setDescription($request->get('description'));
            $Blog->setAuthor($user);
            
            //验证表单
            $validator = $this->get('validator');
            $errors = $validator->validate($Blog);
            if (count($errors) > 0) {
                $error = $errors[0];
                return $this->error($error->getMessage(), '', true);
            }
            $em->persist($Blog);
            $em->flush();
            if ($Blog->getId()) {
                $success = true;
            }
            if ($success) {
                return $this->success('添加成功！', 'cwp_admin_bloglist', true);
            } else {
                return $this->error();
            }
        }
        return $this->render('CwpAdminBundle:Blog:blog_add.html.twig', array(
                    'catlist' => $blogCatFormatList
        ));
    }

    public function blogUpdateAction(Request $request) {
        $blog_id = $request->get('blog_id');
        $em = $this->getDoctrine()->getManager();
        $cur_blog = $em->getRepository('CwpBlogBundle:Blog')->findOneById($blog_id);  //当前博文
        //获取菜单集
        $BlogCategoryRepository = $em->getRepository('CwpUtilBundle:BlogCategory');
        $query_blogcat = $BlogCategoryRepository->createQueryBuilder('B')
                ->getQuery();
        $blogCatList = $query_blogcat->getArrayResult();
        $util = $this->get('cwp_util');
        $blogCatFormatList = $util->tree($blogCatList);
        $success = false;
        if ($request->getMethod() == 'POST') {
            $pid = $request->get('category');
            $category = $BlogCategoryRepository->findOneById($pid);
            $cur_blog->setTitle($request->get('title'));
            $cur_blog->setCategory($category);
            $cur_blog->setCover($request->get('cover'));
            $cur_blog->setGuide($request->get('guide'));
            $cur_blog->setContent($request->get('content'));
            $cur_blog->setKeywords($request->get('keywords'));
            $cur_blog->setDescription($request->get('description'));
            //验证
            $validator = $this->get('validator');
            $errors = $validator->validate($cur_blog);
            if (count($errors) > 0) {
                $error = $errors[0];
                return $this->error($error->getMessage(), '', true);
            }
            $em->flush();
            if ($cur_blog->getId()) {
                $success = true;
            }
            if ($success) {
                return $this->success('更新成功！', 'cwp_admin_bloglist', true);
            } else {
                return $this->error();
            }
        }
        return $this->render('CwpAdminBundle:Blog:blog_update.html.twig', array(
                    'catlist' => $blogCatFormatList,
                    'cur_blog' => $cur_blog
        ));
    }

}
