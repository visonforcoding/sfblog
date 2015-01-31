<?php

/* CwpUtilBundle:Layout:crumb.html.twig */
class __TwigTemplate_63e2aae8d8bbb7a8e8457b5cf7a341e2c18364e6e0a1b1f7369f89935b941b2f extends Twig_Template
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
        // line 2
        echo "<ul class=\"breadcrumb\">
    <li>
        <i class=\"";
        // line 4
        if (array_key_exists("top_menu", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["top_menu"]) ? $context["top_menu"] : $this->getContext($context, "top_menu")), "class", array()), "html", null, true);
        }
        echo "\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["top_menu"]) ? $context["top_menu"] : $this->getContext($context, "top_menu")), "name", array()), "html", null, true);
        echo "
        <span class=\"divider\">&raquo;</span>
    </li>
    <li>
        <a href=\"#\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sec_menu"]) ? $context["sec_menu"] : $this->getContext($context, "sec_menu")), "name", array()), "html", null, true);
        echo "</a>
    </li>
</ul>

<h1 id=\"main-heading\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sec_menu"]) ? $context["sec_menu"] : $this->getContext($context, "sec_menu")), "name", array()), "html", null, true);
        echo " <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sec_menu"]) ? $context["sec_menu"] : $this->getContext($context, "sec_menu")), "remark", array()), "html", null, true);
        echo "</span>
</h1>";
    }

    public function getTemplateName()
    {
        return "CwpUtilBundle:Layout:crumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  34 => 8,  23 => 4,  19 => 2,);
    }
}
