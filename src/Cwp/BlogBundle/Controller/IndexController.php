<?php

namespace Cwp\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Cwp\UtilBundle\Utils\Page\Page2;

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

    public function blogRightAction() {
        $em = $this->getDoctrine()->getManager();
        $BlogRepo = $this->getDoctrine()->getRepository('CwpBlogBundle:Blog');
        $query_blog = $BlogRepo->createQueryBuilder('B')
                ->getQuery();
        $blog_list = $query_blog->getResult();
        $BlogCatRepository = $this->getDoctrine()->getRepository('CwpUtilBundle:BlogCategory');
        $query_blogcat = $BlogCatRepository->createQueryBuilder('B')
                ->getQuery();
        $blogCatList = $query_blogcat->getArrayResult();


        foreach ($blogCatList as $key => $value) {
            $blogCatList[$key]['nums'] = 0;
        }

        //算出每个类别的博文数量
        foreach ($blogCatList as $key => $value) {
            foreach ($blog_list as $v) {
                if ($value['id'] == $v->getCategory()->getId()) {
                    $blogCatList[$key]['nums'] ++;
                }
            }
        }
        $util = $this->get('cwp_util');
        $blogCatFormatList = $util->tree($blogCatList);
        return $this->render('CwpBlogBundle:Index:blog_right.html.twig', array(
                    'cat_list' => $blogCatFormatList
        ));
    }

    /**
     * 博客阅读
     * @param type $blog_id
     * @return type
     */
    public function blogReadAction($blog_id) {
        $BlogRepository = $this->getDoctrine()->getRepository('CwpBlogBundle:Blog');
        $curBlog = $BlogRepository->findOneById($blog_id);
        return $this->render('CwpBlogBundle:Index:blog_read.html.twig', array(
                    'blog' => $curBlog,
        ));
    }

    public function blogListAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $catId = $request->get('cat_id');
        $parameter = array();
        $where = '';
        if (!empty($catId)) {
            //DQL
            $BlogCatRepository = $this->getDoctrine()->getRepository('CwpUtilBundle:BlogCategory');
            $category = $BlogCatRepository->findOneById($catId);
            $where = 'WHERE b.category = :category';
            $parameter = array('category' => $category);
        }
        $count_dql = 'SELECT b FROM CwpBlogBundle:Blog b ' . $where;
        $query_count = $em->createQuery($count_dql);
        if (!empty($catId)) {
            $query_count->setParameters($parameter);
        }
        $blog_total = $query_count->getResult();

        $Page = new Page2(count($blog_total), 5, 5);
        $Page->pageShow = array('first' => '首页', 'ending' => '尾页', 'up' => '上一页', 'down' => '下一页', 'GoTo' => '确定');
        $Page->pageType = '%up%%numberF%%omitEA%%E%%down%<li>共%pageToatl%页 到第%input%页</li><li>%GoTo%</li>';

        $list_dql = 'SELECT b FROM CwpBlogBundle:Blog b ' . $where . ' order by b.ctime desc  ';
        $query_list = $em->createQuery($list_dql);
        if (!empty($catId)) {
            $query_list->setParameters($parameter);
        }
        $query_list->setFirstResult($Page->pageStart);
        $query_list->setMaxResults($Page->pageStop);        
        $blog_list = $query_list->getResult();
        return $this->render('CwpBlogBundle:Index:blog_list.html.twig', array(
                    'blogs' => $blog_list,
                    'nav' => $Page->pageShow()
        ));
    }
    
    public function aboutAction(){
          return $this->render('CwpBlogBundle:Index:about.html.twig', array(
              
        ));
    }
}
