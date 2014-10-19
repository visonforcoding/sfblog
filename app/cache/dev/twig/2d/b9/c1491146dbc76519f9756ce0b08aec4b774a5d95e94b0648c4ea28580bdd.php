<?php

/* CwpAdminBundle:Default:index.html.twig */
class __TwigTemplate_2db9c1491146dbc76519f9756ce0b08aec4b774a5d95e94b0648c4ea28580bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "，哈哈!
";
    }

    public function getTemplateName()
    {
        return "CwpAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
