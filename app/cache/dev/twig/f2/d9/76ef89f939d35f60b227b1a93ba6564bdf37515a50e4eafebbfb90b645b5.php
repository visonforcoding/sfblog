<?php

/* CwpBlogBundle:Index:blog_list.html.twig */
class __TwigTemplate_f2d976ef89f939d35f60b227b1a93ba6564bdf37515a50e4eafebbfb90b645b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CwpBlogBundle:Layout:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'css' => array($this, 'block_css'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CwpBlogBundle:Layout:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page"] = "blog";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "小绾的博客";
    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        // line 6
        echo "    <!-- ueditor -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/ueditor/third-party/SyntaxHighlighter/shCore.js"), "html", null, true);
        echo "\" ></script>
    <script>
        \$(function () {
            SyntaxHighlighter.all();
        })
    </script>
";
    }

    // line 15
    public function block_css($context, array $blocks = array())
    {
        // line 16
        echo "    <style>

    </style>";
    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        // line 20
        echo "        <!-- MAIN -->
        <div id=\"main\">
            <div class=\"wrapper cf\">
                <!-- posts list -->
                <div id=\"posts-list\" class=\"cf\">        
                    <!-- Standard -->
                    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 27
            echo "                    <article class=\"format-standard\">
                        <div class=\"feature-image\">
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cwp_blog_blogread", array("blog_id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "cover", array()), "html", null, true);
            echo "\" alt=\"Alt text\" />
                            </a>
                        </div>
                        <div class=\"box cf\">
                            <div class=\"entry-date\"><div class=\"number\">";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "ctime", array()), "d"), "html", null, true);
            echo "</div><div class=\"month\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "ctime", array()), "M"), "html", null, true);
            echo "</div></div>
                            <div class=\"excerpt\">
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cwp_blog_blogread", array("blog_id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\" class=\"post-heading\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "</a>
                                <p>";
            // line 37
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["blog"], "content", array())), 0, 200), "html", null, true);
            echo "......</p>
                                <p><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cwp_blog_blogread", array("blog_id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\" class=\"learnmore\">查看更多</a></p>
                            </div>
                            <div class=\"meta\">
                                <span class=\"format\">Post</span>
                                <span class=\"user\"><a href=\"#\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "author", array()), "html", null, true);
            echo " </a></span>
";
            // line 44
            echo "                                <span class=\"tags\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cwp_blog_bloglist", array("cat_id" => $this->getAttribute($this->getAttribute($context["blog"], "category", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["blog"], "category", array()), "name", array()), "html", null, true);
            echo "</a></span>
                            </div>
                        </div>
                    </article>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    <!-- ENDS  Standard -->
                    <!-- page-navigation -->
                    <div class=\"page-navigation cf\">
                        <ul>
                        ";
        // line 53
        echo (isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav"));
        echo "
                        </ul>
                    </div>
                    <!--ENDS page-navigation -->
                </div>
                <!-- ENDS posts list -->

                <!-- sidebar -->
                <aside id=\"sidebar\">
                    ";
        // line 62
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CwpBlogBundle:Index:blogRight"));
        echo "
                </aside>
                <!-- ENDS sidebar -->


            </div><!-- ENDS WRAPPER -->
        </div>
        <!-- ENDS MAIN -->

    ";
    }

    public function getTemplateName()
    {
        return "CwpBlogBundle:Index:blog_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 62,  147 => 53,  141 => 49,  127 => 44,  123 => 42,  116 => 38,  112 => 37,  106 => 36,  99 => 34,  92 => 30,  88 => 29,  84 => 27,  80 => 26,  72 => 20,  69 => 19,  63 => 16,  60 => 15,  49 => 8,  45 => 7,  42 => 6,  39 => 5,  33 => 4,  28 => 3,);
    }
}
