<?php

/* CwpUtilBundle:Jump:error.html.twig */
class __TwigTemplate_ea0bab5a77c2ed2f88357e0c891db3ddcc4de6043fe8a74914fe71e72e849835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CwpUtilBundle:Layout:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CwpUtilBundle:Layout:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "操作提示页";
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"message-box\">
        <div class=\"message\">
            <h1>";
        // line 6
        echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
        echo "</h1>
        </div>
        <div class=\"pic\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/images/common/cry.png"), "html", null, true);
        echo "\"/></div>
        <div class=\"clear\"></div>
        <div class=\"redirect\">
            页面<span id=\"time\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "html", null, true);
        echo "</span>后<a id=\"href\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["redirectUrl"]) ? $context["redirectUrl"] : $this->getContext($context, "redirectUrl")), "html", null, true);
        echo "\">跳转</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CwpUtilBundle:Jump:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  47 => 8,  42 => 6,  38 => 4,  35 => 3,  29 => 2,);
    }
}
