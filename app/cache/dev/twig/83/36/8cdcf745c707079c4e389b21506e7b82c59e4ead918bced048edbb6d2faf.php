<?php

/* CwpBlogBundle:Index:index.html.twig */
class __TwigTemplate_83368cdcf745c707079c4e389b21506e7b82c59e4ead918bced048edbb6d2faf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CwpBlogBundle:Layout:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'slider' => array($this, 'block_slider'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CwpBlogBundle:Layout:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["page"] = "home";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "小绾的博客";
    }

    // line 4
    public function block_slider($context, array $blocks = array())
    {
        // line 5
        echo "   
";
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
    <!-- ENDS HEADER -->
    <!-- MAIN -->
    <div id=\"main\">
        <div class=\"wrapper cf\">
            <!-- featured -->
            <div class=\"home-featured\">

                <ul id=\"filter-buttons\">
                    <li><a href=\"#\" data-filter=\"*\" class=\"selected\">show all</a></li>
                        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catList"]) ? $context["catList"] : $this->getContext($context, "catList")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 19
            echo "                        <li><a href=\"#\" data-filter=\".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </ul>
                <!-- Filter container -->
                <div id=\"filter-container\" class=\"cf\">
                    ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catList"]) ? $context["catList"] : $this->getContext($context, "catList")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 25
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blogList"]) ? $context["blogList"] : $this->getContext($context, "blogList")));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                // line 26
                echo "                            ";
                if (($context["cat"] == $this->getAttribute($context["blog"], "category", array()))) {
                    // line 27
                    echo "                                <figure class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
                    echo "\">
                                    <a href=\"/blog/single-";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "id", array()), "html", null, true);
                    echo "\" class=\"thumb\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "cover", array()), "html", null, true);
                    echo "\" alt=\"alt\" /></a>
                                    <figcaption>
                                        <a href=\"/blog/single-";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "id", array()), "html", null, true);
                    echo "\"><h3 class=\"heading\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
                    echo "</h3></a>
                                            ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "guide", array()), "html", null, true);
                    echo "
                                    </figcaption>
                                </figure>
                            ";
                }
                // line 35
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </div><!-- ENDS Filter container -->
            </div>
            <!-- ENDS featured -->
        </div><!-- ENDS WRAPPER -->
    </div>
    <!-- ENDS MAIN -->
";
    }

    public function getTemplateName()
    {
        return "CwpBlogBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 37,  124 => 36,  118 => 35,  111 => 31,  105 => 30,  98 => 28,  93 => 27,  90 => 26,  85 => 25,  81 => 24,  76 => 21,  65 => 19,  61 => 18,  49 => 8,  46 => 7,  41 => 5,  38 => 4,  32 => 3,  27 => 2,);
    }
}
