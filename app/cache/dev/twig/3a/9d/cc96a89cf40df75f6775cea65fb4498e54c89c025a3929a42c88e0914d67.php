<?php

/* CwpUtilBundle:Form:editor.html.twig */
class __TwigTemplate_3a9dcc96a89cf40df75f6775cea65fb4498e54c89c025a3929a42c88e0914d67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'file_widget' => array($this, 'block_file_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_file_widget($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        ";
        // line 5
        if ((!(null === (isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url"))))) {
            // line 6
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url"))), "html", null, true);
            echo "\"/>
        ";
        }
        // line 8
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CwpUtilBundle:Form:editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  41 => 6,  39 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
