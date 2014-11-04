<?php

/* CwpUtilBundle:Layout:base.html.twig */
class __TwigTemplate_d89a0179919ccc9a395eda3fd072a1049fb9502981219724b23a7bb23deb2e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/css/base.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    </head>
    <body class=\"theme-blue\">
        ";
        // line 12
        $this->displayBlock('main', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        // line 13
        echo "            
        ";
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
        return array (  61 => 13,  58 => 12,  53 => 6,  47 => 15,  45 => 12,  39 => 9,  35 => 8,  31 => 7,  27 => 6,  21 => 2,);
    }
}
