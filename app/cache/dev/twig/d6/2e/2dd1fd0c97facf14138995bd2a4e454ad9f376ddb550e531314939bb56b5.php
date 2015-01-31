<?php

/* CwpBlogBundle:Index:blog_right.html.twig */
class __TwigTemplate_d62e2dd1fd0c97facf14138995bd2a4e454ad9f376ddb550e531314939bb56b5 extends Twig_Template
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
        echo "<ul>
    <li class=\"block\">
        <h4>Text Widget</h4>
        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. 
    </li>

    <li class=\"block\">
        <h4>Categories</h4>
        <ul>
            ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cat_list"]) ? $context["cat_list"] : $this->getContext($context, "cat_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 12
            echo "            <li class=\"cat-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cwp_blog_bloglist", array("cat_id" => $this->getAttribute($context["cat"], "id", array()))), "html", null, true);
            echo "\" title=\"title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "html", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
            echo "<span class=\"post-counter\"> (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "nums", array()), "html", null, true);
            echo ")</span></a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ul>
    </li>

    <li class=\"block\">
        <h4>Archives</h4>
        <ul>
            <li class=\"cat-item\"><a href=\"#\" title=\"title\">January</a></li>
            <li class=\"cat-item\"><a href=\"#\" title=\"title\">February</a></li>
            <li class=\"cat-item\"><a href=\"#\" title=\"title\">March</a></li>
        </ul>
    </li>

</ul>";
    }

    public function getTemplateName()
    {
        return "CwpBlogBundle:Index:blog_right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  34 => 12,  30 => 11,  19 => 2,);
    }
}
