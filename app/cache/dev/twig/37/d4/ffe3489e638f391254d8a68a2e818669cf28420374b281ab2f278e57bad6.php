<?php

/* CwpAdminBundle:User:userlist.html.twig */
class __TwigTemplate_37d4ffe3489e638f391254d8a68a2e818669cf28420374b281ab2f278e57bad6 extends Twig_Template
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

    // line 3
    public function block_crumbs($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"page-title\">管理员管理</h1>
    <ul class=\"breadcrumb\">
        <li><a href=\"index.html\">Home</a> </li>
        <li><a href=\"users.html\">Users</a> </li>
        <li class=\"active\">jsmith</li>
    </ul>
";
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"btn-toolbar list-toolbar\">
        <a class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("cwp_admin_adduser");
        echo "\"><i class=\"fa fa-plus\"></i>添加管理员</a>
        <button class=\"btn btn-default\">导入</button>
        <button class=\"btn btn-default\">导出</button>
        <div class=\"btn-group\">
        </div>
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>#</th>
                <th>用户名</th>
                <th>Email</th>
                <th>上次登录时间</th>
                <th>角色</th>
                <th style=\"width: 3.5em;\">操作</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 32
            echo "            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "lastLogin", array()), "date", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"__APP__/user/add/action/edit/id/{\$v.id}.html\"><i class=\"fa fa-pencil\"></i></a>
                    <a  role=\"button\" onclick='del(\"Admin\",\"{\$v.id}\")' oid=\"{\$v.id}\"><i class=\"fa fa-trash-o\"></i></a>
                </td>
            </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    <ul class=\"pagination\">
        ";
        // line 48
        echo (isset($context["show"]) ? $context["show"] : $this->getContext($context, "show"));
        echo "
    </ul>

    <div class=\"modal small fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h3 id=\"myModalLabel\">Delete Confirmation</h3>
                </div>
                <div class=\"modal-body\">
                    <p class=\"error-text\"><i class=\"fa fa-warning modal-icon\"></i>你确定你要删除么？</p>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-default\" data-dismiss=\"modal\" aria-hidden=\"true\">取消</button>
                    <button class=\"btn btn-danger\" id=\"del-btn\" onclick=\"del()\">删除</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$(function(){
            
        });
        function del(classname,id){
            \$('#myModal').modal('show');
        };
    </script>
";
    }

    public function getTemplateName()
    {
        return "CwpAdminBundle:User:userlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  126 => 44,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  86 => 32,  69 => 31,  48 => 13,  45 => 12,  42 => 11,  32 => 4,  29 => 3,);
    }
}
