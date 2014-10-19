<?php

namespace Cwp\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('CwpAdminBundle:Index:index.html.twig', array(
                // ...
            ));    }

    public function loginAction()
    {
        return $this->render('CwpAdminBundle:Index:login.html.twig', array(
                // ...
            ));    }

}
