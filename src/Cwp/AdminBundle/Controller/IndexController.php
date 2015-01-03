<?php

namespace Cwp\AdminBundle\Controller;

use Cwp\UtilBundle\Controller\BackendController;

class IndexController extends BackendController {

    public function indexAction() {
        //$this->checkAcl();
        // $this->get('cwp_menu')->init_menu();
        return $this->render('CwpAdminBundle:Index:index.html.twig', array(
                        // ...
        ));
    }

    public function loginAction() {
        return $this->render('CwpAdminBundle:Index:login.html.twig', array(
                        // ...
        ));
    }

}
