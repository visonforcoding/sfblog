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
            'body' => array($this, 'block_body'),
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
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/jquery.tweet.css"), "html", null, true);
        echo "\" media=\"all\"  /> 
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/tweet/jquery.tweet.js"), "html", null, true);
        echo "\" ></script> 
        <!-- ENDS Tweet -->

        <!-- superfish -->
        <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/superfish.css"), "html", null, true);
        echo "\" /> 
        <script  src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/superfish-1.4.8/js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/superfish-1.4.8/js/superfish.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/superfish-1.4.8/js/supersubs.js"), "html", null, true);
        echo "\"></script>
        <!-- ENDS superfish -->

        <!-- prettyPhoto -->
        <script  src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/prettyPhoto/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/prettyPhoto/css/prettyPhoto.css"), "html", null, true);
        echo "\"  media=\"screen\" />
        <!-- ENDS prettyPhoto -->

        <!-- poshytip -->
        <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/poshytip-1.1/src/tip-twitter/tip-twitter.css"), "html", null, true);
        echo "\"  />
        <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"), "html", null, true);
        echo "\"  />
        <script  src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/poshytip-1.1/src/jquery.poshytip.min.js"), "html", null, true);
        echo "\"></script>
        <!-- ENDS poshytip -->

        <!-- JCarousel -->
        <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/carousel.css"), "html", null, true);
        echo "\" /> 
        <!-- ENDS JCarousel -->

        <!-- GOOGLE FONTS -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'> -->

        <!-- modernizr -->
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/modernizr.js"), "html", null, true);
        echo "\"></script>

        <!-- SKIN -->
        <link rel=\"stylesheet\" media=\"all\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/skin.css"), "html", null, true);
        echo "\"/>

        <!-- Less framework -->
        <link rel=\"stylesheet\" media=\"all\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/lessframework.css"), "html", null, true);
        echo "\"/>

        <!-- flexslider -->
        <link rel=\"stylesheet\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/flexslider.css"), "html", null, true);
        echo "\" >
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>

    </head>
    <body class=\"home\">
       ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 78
    public function block_body($context, array $blocks = array())
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
        return array (  198 => 78,  193 => 7,  188 => 79,  186 => 78,  179 => 74,  175 => 73,  169 => 70,  163 => 67,  157 => 64,  147 => 57,  143 => 56,  136 => 52,  132 => 51,  128 => 50,  121 => 46,  117 => 45,  110 => 41,  106 => 40,  102 => 39,  98 => 38,  91 => 34,  87 => 33,  80 => 29,  76 => 28,  72 => 27,  66 => 24,  60 => 21,  56 => 20,  52 => 19,  48 => 18,  44 => 17,  36 => 12,  28 => 7,  21 => 2,);
    }
}
