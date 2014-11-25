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
                    'label' => '名称',
                    'required' => false,
                 ))
                ->add('category', 'entity', array(
                    'class' => 'CwpUtilBundle:BlogCategory',
                    'property' => 'name',
                    'label' => '博客分类',
                    'required' => false
                ))
                ->add('guide', 'textarea', array(
                    'label' => '引言',
                    'required' => false
                ))
               ->add('content', 'image', array(
                    'label' => '内容',
                    'required' => false,
                ))

                ->add('keywords', 'text', array(
                    'label' => 'seo关键字',
                    'required' => false,
                ))
                ->add('description', 'textarea', array(
                    'label' => 'seo描述',
                    'required' => false,
                ))
                ->getForm();
    }

    public function getName() {
        return '';
    }

}
