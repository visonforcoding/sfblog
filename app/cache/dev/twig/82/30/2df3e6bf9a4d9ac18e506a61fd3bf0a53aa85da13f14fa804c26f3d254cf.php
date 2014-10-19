<?php

/* CwpAdminBundle:Index:index.html.twig */
class __TwigTemplate_82302df3e6bf9a4d9ac18e506a61fd3bf0a53aa85da13f14fa804c26f3d254cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "CwpAdminBundle:Index:index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Index:index page</h1>
";
    }

    public function getTemplateName()
    {
        return "CwpAdminBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
