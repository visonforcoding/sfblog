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
                            'errors'=>$errorsList
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
