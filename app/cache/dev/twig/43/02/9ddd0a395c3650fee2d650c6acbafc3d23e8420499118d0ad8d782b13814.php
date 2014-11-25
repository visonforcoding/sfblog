<?php

/* CwpAdminBundle:Blog:addCat.html.twig */
class __TwigTemplate_43029ddd0a395c3650fee2d650c6acbafc3d23e8420499118d0ad8d782b13814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CwpAdminBundle:Layout:base.html.twig");

        $this->blocks = array(
            'crumbs' => array($this, 'block_crumbs'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CwpAdminBundle:Layout:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_crumbs($context, array $blocks = array())
    {
        // line 5
        echo "    <h1 class=\"page-title\">添加博文分类</h1>
    <ul class=\"breadcrumb\">
        <li><a href=\"index.html\">Home</a> </li>
        <li><a href=\"users.html\">Users</a> </li>
        <li class=\"active\">jsmith</li>
    </ul>
";
    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <br>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 18
        echo "            <div class=\"form-group\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pid", array()), 'label');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pid", array()), 'errors');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pid", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                 ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
            </div>
            <div class=\"form-group btn-toolbar list-toolbar\">
                <label></label>
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> 确定</button>
                <a href=\"#myModal\" data-toggle=\"modal\" class=\"btn btn-danger\">重置</a>
            </div>
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>

    <div class=\"modal small fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h3 id=\"myModalLabel\">Delete Confirmation</h3>
                </div>
                <div class=\"modal-body\">

                    <p class=\"error-text\"><i class=\"fa fa-warning modal-icon\"></i>你确定要删除么？</p>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-default\" data-dismiss=\"modal\" aria-hidden=\"true\">取消</button>
                    <button class=\"btn btn-danger\" data-dismiss=\"modal\">删除</button>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "CwpAdminBundle:Blog:addCat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  79 => 26,  75 => 25,  71 => 24,  65 => 21,  61 => 20,  57 => 19,  54 => 18,  50 => 16,  45 => 13,  42 => 12,  32 => 5,  29 => 4,);
    }
}
