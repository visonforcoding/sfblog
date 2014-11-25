<?php

/* CwpUtilBundle:Form:editor.html.twig */
class __TwigTemplate_3a9dcc96a89cf40df75f6775cea65fb4498e54c89c025a3929a42c88e0914d67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'editor_widget' => array($this, 'block_editor_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_editor_widget($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
<script class=\"editor hasEditor\" id=\"info\" name=\"info\" type=\"text/plain\"></script>
                <script type=\"text/javascript\">
                   var editor = UE.getEditor('info');
 </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CwpUtilBundle:Form:editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  28 => 2,);
    }
}
