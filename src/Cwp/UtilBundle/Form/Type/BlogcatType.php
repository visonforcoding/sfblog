<?php

/*
 * 博客类别表单类型
 */

namespace Cwp\UtilBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BlogcatType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('pid', 'entity', array(
                    'class' => 'CwpUtilBundle:BlogCategory',
                    'property' => 'name',
                    'label' => '博客分类',
                    'empty_value' => '根',
                    //'empty_data' => array('根' => '0'),
                    'data'=>array('根'=>'0'),
                    'required'=>false
                   
                ))
                ->add('name', 'text', array('required' => false,
                    'label' => '名称'))
                ->getForm();
    }

    public function getName() {
        return '';
    }

}
