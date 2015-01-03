<?php

/* CwpUtilBundle:Layout:base.html.twig */
class __TwigTemplate_d89a0179919ccc9a395eda3fd072a1049fb9502981219724b23a7bb23deb2e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'css' => array($this, 'block_css'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
          <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/css/base.css"), "html", null, true);
        echo "\">
    ";
        // line 6
        $this->displayBlock('javascript', $context, $blocks);
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 8
        echo "<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js></script>
<![endif]-->
<script type=\"text/javascript\">
    document.domain = \"sfblog\";
</script>
<title>sfblog</title>

</head>
<body>

";
        // line 20
        $this->displayBlock('main', $context, $blocks);
        // line 21
        echo "<!-- Core Scripts -->
<script src=\"assets/js/libs/jquery-1.8.2.min.js\"></script>
</body>

</html>
";
    }

    // line 6
    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CwpUtilBundle:Layout:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  66 => 7,  61 => 6,  52 => 21,  50 => 20,  36 => 8,  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
