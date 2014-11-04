<?php

namespace Cwp\UtilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CwpUtilBundle:Default:index.html.twig', array('name' => $name));
    }
}
