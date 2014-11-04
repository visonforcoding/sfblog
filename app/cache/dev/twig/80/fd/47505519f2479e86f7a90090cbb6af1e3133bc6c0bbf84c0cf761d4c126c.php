<?php

/* CwpAdminBundle:User:addUser.html.twig */
class __TwigTemplate_80fd47505519f2479e86f7a90090cbb6af1e3133bc6c0bbf84c0cf761d4c126c extends Twig_Template
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
        echo "    <h1 class=\"page-title\">添加管理员</h1>
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
        echo "    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">个人信息</a></li>
    </ul>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <br>
                    <form id=\"tab\" action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("cwp_admin_doadduser");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"action\" value=\"{\$action}\"/>
                        <input type=\"hidden\" name=\"classname\" value=\"{\$classname}\" />
                        <input type=\"hidden\" name=\"setreferer\" value=\"{\$setreferer}\" />
                        <input type=\"hidden\" name=\"id\" value=\"{\$id}\" />
                        <div class=\"form-group\">
                            <label>用户名</label>
                            <input type=\"text\" name=\"username\" value=\"\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label>昵称</label>
                            <input type=\"text\" name=\"nickname\" value=\"\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label>密码</label>
                            <input type=\"password\" name=\"pwd\" value=\"\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label>确认密码</label>
                            <input type=\"password\" name=\"pwd2\" value=\"\" class=\"form-control\">
                        </div>
                        <div class=\"btn-toolbar list-toolbar\">
                            <button type=\"\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> 确定</button>
                            <a href=\"#myModal\" data-toggle=\"modal\" class=\"btn btn-danger\">重置</a>
                        </div>
                    </form>

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
        return "CwpAdminBundle:User:addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 20,  45 => 13,  42 => 12,  32 => 5,  29 => 4,);
    }
}
