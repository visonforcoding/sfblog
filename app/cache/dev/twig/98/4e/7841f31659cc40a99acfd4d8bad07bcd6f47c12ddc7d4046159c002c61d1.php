<?php

/* CwpBlogBundle:Index:blog_read.html.twig */
class __TwigTemplate_984e7841f31659cc40a99acfd4d8bad07bcd6f47c12ddc7d4046159c002c61d1 extends Twig_Template
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
        .wrapper {
            width: 1020px;
        }
        #posts-list {
            width: 720px;
        }
        #posts-list article .box {
            background: #F8F5F2;
        }
        #posts-list article .box .excerpt {
            float: none;
            width: 100%;
        }
        #posts-list article .box {
            padding-right: 20px;
        }
    </style>";
    }

    // line 34
    public function block_main($context, array $blocks = array())
    {
        // line 35
        echo "        <!-- MAIN -->
        <div id=\"main\">
            <div class=\"wrapper cf\">
                <!-- masthead -->
                ";
        // line 42
        echo "                <!-- ENDS masthead -->
                <!-- posts list -->
                <div id=\"posts-list\" class=\"cf\">        \t
                    <!-- Standard -->
                    <article class=\"format-standard\">
                        ";
        // line 50
        echo "                        <div class=\"box cf\">
                            <div class=\"entry-date\"><div class=\"number\">";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "ctime", array()), "d"), "html", null, true);
        echo "</div><div class=\"month\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "ctime", array()), "M"), "html", null, true);
        echo "</div></div>
                            <div class=\"excerpt\">
                                <div class=\"post-heading\" >";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</div>
                                <div class=\"post-bar\">
                                    <span class=\"icon-user\"><a href=\"#\"> ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "author", array()), "html", null, true);
        echo "</a></span>
                                    <span class=\"icon-tag\"><a href=\"#\"> ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "category", array()), "name", array()), "html", null, true);
        echo "</a></span>
                                    <span class=\"icon-calendar\"><a href=\"#\"> ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "ctime", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</a></span>
                                </div>
                                <div class=\"entry-content\">
                                    ";
        // line 60
        echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "content", array());
        echo "
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- ENDS  Standard -->
                    <!-- comments list -->
                    <div id=\"comments-wrap\">
                        <!-- 多说评论框 start -->
                        <div class=\"ds-thread\" data-thread-key=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "\" data-url=\"http://sfblog/blog/single-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()), "html", null, true);
        echo "\"></div>
                        <!-- 多说评论框 end -->
                        <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
                        <script type=\"text/javascript\">
                            var duoshuoQuery = {short_name: \"caowenpeng1990\"};
                            (function () {
                                var ds = document.createElement('script');
                                ds.type = 'text/javascript';
                                ds.async = true;
                                ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                                ds.charset = 'UTF-8';
                                (document.getElementsByTagName('head')[0]
                                        || document.getElementsByTagName('body')[0]).appendChild(ds);
                            })();
                        </script>
                        <!-- 多说公共JS代码 end -->
                    </div>
                    <!-- ENDS Respond -->
                </div>
                <!-- ENDS posts list -->
                <!-- sidebar -->
                <aside id=\"sidebar\">
                    ";
        // line 91
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
        return "CwpBlogBundle:Index:blog_read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 91,  141 => 69,  129 => 60,  123 => 57,  119 => 56,  115 => 55,  110 => 53,  103 => 51,  100 => 50,  93 => 42,  87 => 35,  84 => 34,  63 => 16,  60 => 15,  49 => 8,  45 => 7,  42 => 6,  39 => 5,  33 => 4,  28 => 3,);
    }
}
