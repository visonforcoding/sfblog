<?php

namespace Cwp\UtilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cwp\UtilBundle\Entity\Author;

class CategoryController extends Controller
{
    public function addCatAction(){
        $author = new Author();
        // ... do something to the $author object
        //$name = NULL;
        //$author->setName($name);

        $validator = $this->get('validator');
        $errors = $validator->validate($author);

        if (count($errors) > 0) {
            /*
             * Uses a __toString method on the $errors variable which is a
             * ConstraintViolationList object. This gives us a nice string
             * for debugging
             */
            $errorsString = (string) $errors;
            echo "$errorsString";
           // return new Response($errorsString);
        }
        exit();
    }
}
