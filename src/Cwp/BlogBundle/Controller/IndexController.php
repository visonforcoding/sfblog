<?php

namespace Cwp\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller {

    /**
     * 首页
     * @return type
     */
    public function indexAction() {
        $BlogcatRepository = $this->getDoctrine()->getRepository('CwpUtilBundle:BlogCategory');
        $catList = $BlogcatRepository->findAll();  //博文类别结果集

        $BlogRepository = $this->getDoctrine()->getRepository('CwpBlogBundle:Blog');
        $blogList = $BlogRepository->findAll();  //所有博文结果集
        return $this->render('CwpBlogBundle:Index:index.html.twig', array(
                    'catList' => $catList,
                    'blogList' => $blogList
        ));
    }

    public function blogAction() {
        
    }

    public function blogReadAction($blog_id) {
        $BlogRepository = $this->getDoctrine()->getRepository('CwpBlogBundle:Blog');
        $curBlog = $BlogRepository->findOneById($blog_id);
        return $this->render('CwpBlogBundle:Index:blog_read.html.twig', array(
                    'blog' => $curBlog,
        ));
    }

}
