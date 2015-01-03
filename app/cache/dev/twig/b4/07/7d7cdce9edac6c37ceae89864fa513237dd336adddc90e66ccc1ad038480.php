<?php

/* CwpBlogBundle:Layout:base.html.twig */
class __TwigTemplate_b4077d7cdce9edac6c37ceae89864fa513237dd336adddc90e66ccc1ad038480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'css' => array($this, 'block_css'),
            'slider' => array($this, 'block_slider'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!doctype html>
<html class=\"no-js\">

    <head>
        <meta charset=\"utf-8\"/>
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        <link rel=\"stylesheet\" media=\"all\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/style.css"), "html", null, true);
        echo "\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <!-- Adding \"maximum-scale=1\" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->\t\t

        <!-- JS -->
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/custom.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/tabs.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/css3-mediaqueries.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/jquery.columnizer.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Isotope -->
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Lof slider -->
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/jquery.easing.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/lof-slider.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/lof-slider.css"), "html", null, true);
        echo "\" media=\"all\"  /> 
        <!-- ENDS slider -->

        <!-- Tweet -->
     ";
        // line 35
        echo "        <!-- ENDS Tweet -->

        <!-- superfish -->
        <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/superfish.css"), "html", null, true);
        echo "\" /> 
        <!-- ENDS superfish -->

        <!-- prettyPhoto -->
        <script  src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/prettyPhoto/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/prettyPhoto/css/prettyPhoto.css"), "html", null, true);
        echo "\"  media=\"screen\" />
        <!-- ENDS prettyPhoto -->

        <!-- poshytip -->
        <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/poshytip-1.1/src/tip-twitter/tip-twitter.css"), "html", null, true);
        echo "\"  />
        <link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"), "html", null, true);
        echo "\"  />
        <script  src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/poshytip-1.1/src/jquery.poshytip.min.js"), "html", null, true);
        echo "\"></script>
        <!-- ENDS poshytip -->

        <!-- JCarousel -->
        <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/carousel.css"), "html", null, true);
        echo "\" /> 
        <!-- ENDS JCarousel -->

        <!-- GOOGLE FONTS -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'> -->

        <!-- modernizr -->
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/modernizr.js"), "html", null, true);
        echo "\"></script>

        <!-- SKIN -->
        <link rel=\"stylesheet\" media=\"all\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/skin.css"), "html", null, true);
        echo "\"/>

        <!-- Less framework -->
        <link rel=\"stylesheet\" media=\"all\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/lessframework.css"), "html", null, true);
        echo "\"/>

        <!-- flexslider -->
        <link rel=\"stylesheet\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/flexslider.css"), "html", null, true);
        echo "\" >
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <!--icomoon-->
        <link rel=\"stylesheet\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/icomoon/style.css"), "html", null, true);
        echo "\" >
          ";
        // line 74
        $this->displayBlock('javascript', $context, $blocks);
        // line 75
        echo "        ";
        $this->displayBlock('css', $context, $blocks);
        // line 78
        echo "    </head>
    <body class=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo "\">
        <!-- HEADER -->
        <header>
            <div class=\"wrapper cf\">
                <div id=\"logo\">
                    <a href=\"index.html\"><img  src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/logo.png"), "html", null, true);
        echo "\" alt=\"Simpler\"></a>
                </div>
                <!-- nav -->
                <ul id=\"nav\" class=\"sf-menu\">
                    <li ";
        // line 88
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "home")) {
            echo "class=\"current-menu-item\"";
        }
        echo "><a href=\"/index\">首页</a></li>
                    <li ";
        // line 89
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "blog")) {
            echo "class=\"current-menu-item\"";
        }
        echo "><a  href=\"";
        echo $this->env->getExtension('routing')->getPath("cwp_blog_bloglist");
        echo "\">博客</a></li>
                    <li><a href=\"page.html\">关于</a>
                    </li>
                    <li><a href=\"portfolio.html\">WORK</a></li>
                    <li><a href=\"contact.html\">CONTACT</a></li>
                </ul>
                <div id=\"combo-holder\"></div>
                <!-- ends nav -->
                <!-- SLIDER -->\t\t\t\t
            ";
        // line 98
        $this->displayBlock('slider', $context, $blocks);
        // line 99
        echo "            <!-- ENDS SLIDER -->
        </div>
    </header>
";
        // line 102
        $this->displayBlock('main', $context, $blocks);
        // line 103
        echo "<!-- FOOTER -->
<footer>
    <div class=\"wrapper cf\">
        <!-- widgets -->
        <ul  class=\"widget-cols cf\">
            <li class=\"first-col\">
                <div class=\"widget-block\">
                    <h4>RECENT POSTS</h4>
                    <div class=\"recent-post cf\">
                        <a href=\"#\" class=\"thumb\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/54x54.gif"), "html", null, true);
        echo "\" alt=\"Post\" /></a>
                        <div class=\"post-head\">
                            <a href=\"#\">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                        </div>
                    </div>
                    <div class=\"recent-post cf\">
                        <a href=\"#\" class=\"thumb\"><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/54x54.gif"), "html", null, true);
        echo "\" alt=\"Post\" /></a>
                        <div class=\"post-head\">
                            <a href=\"#\">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                        </div>
                    </div>
                    <div class=\"recent-post cf\">
                        <a href=\"#\" class=\"thumb\"><img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/54x54.gif"), "html", null, true);
        echo "\" alt=\"Post\" /></a>
                        <div class=\"post-head\">
                            <a href=\"#\">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class=\"second-col\">

                <div class=\"widget-block\">
                    <h4>ABOUT</h4>
                    <p>Folder it's completely free this means you don't have to pay anything <a href=\"http://luiszuno.com/blog/license\" tar >read license</a>.</p> 
                    <p>Visit <a href=\"http://templatecreme.com/\" >Template Creme</a> and find the most beautiful free templates up to date.</p>
                </div>

            </li>

            <li class=\"third-col\">

                <div class=\"widget-block\">
                    <div id=\"tweets\" class=\"footer-col tweet\">
                        <h4>TWITTER WIDGET</h4>
                    </div>
                </div>
            </li>
            <li class=\"fourth-col\">

                <div class=\"widget-block\">
                    <h4>CATEGORIES</h4>
                    <ul>
                        <li class=\"cat-item\"><a href=\"#\" >Design</a></li>
                        <li class=\"cat-item\"><a href=\"#\" >Photo</a></li>
                        <li class=\"cat-item\"><a href=\"#\" >Art</a></li>
                        <li class=\"cat-item\"><a href=\"#\" >Game</a></li>
                        <li class=\"cat-item\"><a href=\"#\" >Film</a></li>
                        <li class=\"cat-item\"><a href=\"#\" >TV</a></li>
                    </ul>
                </div>

            </li>\t
        </ul>
        <!-- ENDS widgets -->\t


        <!-- bottom -->
        <div class=\"footer-bottom\">
            <div class=\"left\">by <a href=\"http://luiszuno.com\" >luiszuno.com</a></div>
            <ul id=\"social-bar\" class=\"cf sb\">
                <li><a href=\"http://www.facebook.com\"  title=\"Become a fan\" class=\"facebook\">Facebbok</a></li>
                <li><a href=\"http://www.twitter.com\" title=\"Follow my tweets\" class=\"twitter\"></a></li>
                <li><a href=\"http://plus.google.com\" title=\"Enter my circles\" class=\"plus\"></a></li>
            </ul>
        </div>\t
        <!-- ENDS bottom -->

    </div>
</footer>
<!-- ENDS FOOTER -->
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 74
    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 75
    public function block_css($context, array $blocks = array())
    {
        // line 76
        echo "      
        ";
    }

    // line 98
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 102
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CwpBlogBundle:Layout:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 102,  339 => 98,  334 => 76,  331 => 75,  326 => 74,  321 => 7,  256 => 124,  247 => 118,  238 => 112,  227 => 103,  225 => 102,  220 => 99,  218 => 98,  202 => 89,  196 => 88,  189 => 84,  181 => 79,  178 => 78,  175 => 75,  173 => 74,  169 => 73,  164 => 71,  160 => 70,  154 => 67,  148 => 64,  142 => 61,  132 => 54,  128 => 53,  121 => 49,  117 => 48,  113 => 47,  106 => 43,  102 => 42,  95 => 38,  90 => 35,  83 => 29,  79 => 28,  75 => 27,  69 => 24,  63 => 21,  59 => 20,  55 => 19,  51 => 18,  47 => 17,  39 => 12,  31 => 7,  24 => 2,);
    }
}
