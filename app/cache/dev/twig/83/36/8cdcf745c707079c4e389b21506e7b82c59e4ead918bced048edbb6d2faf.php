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
        echo "    <div id=\"home-slider\" class=\"lof-slidecontent\">
        <div class=\"preload\"><div></div></div>
        <!-- slider content --> 
        <div class=\"main-slider-content\" >
            <ul class=\"sliders-wrap-inner\">
                <li>
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/01.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                    <div class=\"slider-description\">
                        <h4>Lorem ipsum dolor</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                            <a class=\"link\" href=\"#\">Read more </a>
                        </p>
                    </div>
                </li>
                <li>
                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/02.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                    <div class=\"slider-description\">
                        <h4>Lorem ipsum dolor</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                            <a class=\"link\" href=\"#\">Read more </a>
                        </p>
                    </div>
                </li>
                <li>
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/03.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                    <div class=\"slider-description\">
                        <h4>Lorem ipsum dolor</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                            <a class=\"link\" href=\"#\">Read more </a>
                        </p>
                    </div>
                </li>
                <li>
                    <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/04.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                    <div class=\"slider-description\">
                        <h4>Lorem ipsum dolor</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                            <a class=\"link\" href=\"#\">Read more </a>
                        </p>
                    </div>
                </li>
                <li>
                    <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/05.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                    <div class=\"slider-description\">
                        <h4>Lorem ipsum dolor</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                            <a class=\"link\" href=\"#\">Read more </a>
                        </p>
                    </div>
                </li>
                <li>
                    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/06.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                    <div class=\"slider-description\">
                        <h4>Lorem ipsum dolor</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                            <a class=\"link\" href=\"#\">Read more </a>
                        </p>
                    </div>
                </li>
                <li>
                    <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/07.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                    <div class=\"slider-description\">
                        <h4>Lorem ipsum dolor</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                            <a class=\"link\" href=\"#\">Read more </a>
                        </p>
                    </div>
                </li>
            </ul>  \t
        </div>
        <!-- ENDS slider content --> 
        <!-- slider nav -->
        <div class=\"navigator-content\">
            <div class=\"navigator-wrapper\">
                <ul class=\"navigator-wrap-inner\">
                    <li><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/01_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                    <li><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/02_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                    <li><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/03_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                    <li><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/04_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                    <li><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/05_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                    <li><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/06_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                    <li><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/01_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                </ul>
            </div>
            <div class=\"button-next\">Next</div>
            <div  class=\"button-previous\">Previous</div>
            <!-- REMOVED TILL FIXED <div class=\"button-control\"><span>STOP</span></div> -->
        </div> 
        <!-- slider nav -->
    </div> 
";
    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        // line 97
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
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catList"]) ? $context["catList"] : $this->getContext($context, "catList")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 108
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
        // line 110
        echo "                </ul>
                <!-- Filter container -->
                <div id=\"filter-container\" class=\"cf\">
                    ";
        // line 113
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catList"]) ? $context["catList"] : $this->getContext($context, "catList")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 114
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blogList"]) ? $context["blogList"] : $this->getContext($context, "blogList")));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                // line 115
                echo "                            ";
                if (($context["cat"] == $this->getAttribute($context["blog"], "category", array()))) {
                    // line 116
                    echo "                                <figure class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
                    echo "\">
                                    <a href=\"/blog/single-";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "id", array()), "html", null, true);
                    echo "\" class=\"thumb\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "cover", array()), "html", null, true);
                    echo "\" alt=\"alt\" /></a>
                                    <figcaption>
                                        <a href=\"project.html\"><h3 class=\"heading\">";
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
                    echo "</h3></a>
                                            ";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "guide", array()), "html", null, true);
                    echo "
                                    </figcaption>
                                </figure>
                            ";
                }
                // line 124
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
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
        return array (  259 => 126,  253 => 125,  247 => 124,  240 => 120,  236 => 119,  229 => 117,  224 => 116,  221 => 115,  216 => 114,  212 => 113,  207 => 110,  196 => 108,  192 => 107,  180 => 97,  177 => 96,  163 => 86,  159 => 85,  155 => 84,  151 => 83,  147 => 82,  143 => 81,  139 => 80,  121 => 65,  109 => 56,  97 => 47,  85 => 38,  73 => 29,  61 => 20,  49 => 11,  41 => 5,  38 => 4,  32 => 3,  27 => 2,);
    }
}
