<?php

/*
 * 博客表单类型
 */

namespace Cwp\BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BlogType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('title', 'text', array(
                    'label' => '名称'))
                ->add('category', 'entity', array(
                    'class' => 'CwpUtilBundle:BlogCategory',
                    'property' => 'name',
                    'label' => '博客分类',
                ))
                ->add('guide', 'textarea', array(
                    'label' => '引言'
                ))
                ->add('cover', 'text', array(
                    'label' => '封面'
                ))
                ->add('content', 'textarea', array(
                    'label' => '内容'
                ))
                ->add('keywords', 'text', array(
                    'label' => '内容'
                ))
                ->add('description', 'textarea', array(
                    'label' => '内容'
                ))
                ->getForm();
    }

    public function getName() {
        return '';
    }

}
