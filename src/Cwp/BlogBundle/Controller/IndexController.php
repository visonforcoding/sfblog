<?php

namespace Cwp\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('CwpBlogBundle:Index:index.html.twig', array(
                // ...
            ));    }

}
