<?php

/* CwpAdminBundle:Blog:blogList.html.twig */
class __TwigTemplate_a75280321041674f5616b3fb9f796db35f14dd261974093b08b5b351bf1ddd49 extends Twig_Template
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
        echo "    <h1 class=\"page-title\">博文管理</h1>
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
        echo $this->env->getExtension('routing')->getPath("cwp_admin_addblog");
        echo "\"><i class=\"fa fa-plus\"></i>添加博文</a>
        <button class=\"btn btn-default\">导入</button>
        <button class=\"btn btn-default\">导出</button>
        <div class=\"btn-group\">
        </div>
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>#</th>
                <th>标题</th>
                <th>分类</th>
                <th>创建时间</th>
                <th>更新时间</th>
                <th>作者</th>
                <th>点击量</th>
                <th style=\"width: 3.5em;\">操作</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : $this->getContext($context, "rows")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["row"], "ctime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["row"], "updatetime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "hits", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

    <ul class=\"pagination\">
        ";
        // line 52
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
        return "CwpAdminBundle:Blog:blogList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 52,  136 => 48,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  99 => 37,  95 => 36,  91 => 35,  88 => 34,  71 => 33,  48 => 13,  45 => 12,  42 => 11,  32 => 4,  29 => 3,);
    }
}
