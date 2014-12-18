<?php

/* CwpAdminBundle:User:userlist.html.twig */
class __TwigTemplate_37d4ffe3489e638f391254d8a68a2e818669cf28420374b281ab2f278e57bad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CwpUtilBundle:Layout:layout.html.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CwpUtilBundle:Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row-fluid\">
        <div class=\"span12 widget\">
            <div class=\"widget-header\">
                <span class=\"title\">管理员</span>
                <a href=\"{:U('User/admin_add')}\" class=\"btn\"><i class=\"icol-add\"></i> 添加管理员</a>
            </div>
            <div class=\"widget-content table-container\">
                <table id=\"demo-dtable-02\" class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>用户名</th>
                            <th>角色</th>
                            <th>创建时间</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    <volist name=\"admins\" id=\"v\">
                    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            echo "    
                        <tr>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                            <td>{\$v.Name}</td>
                            <td>{\$v.Ctime}</td>
                            <td>{\$v.Status}</td>
                            <td class=\"action-col\">
                                <span class=\"btn-group\">
                                    <a href=\"{:U('user/access_config',array('role_id'=>\$v['Id']))}\" title=\"查看拥有权限\" class=\"btn btn-small\"><i class=\"icon-search\"></i></a>
                                    <a href=\"{:U('user/admin_update',array('admin_id'=>\$v['Id']))}\" class=\"btn btn-small\"><i class=\"icon-pencil\"></i></a>
                                    <a href=\"#\" node_id=\"{\$v.Id}\" class=\"del-button btn btn-small\"><i class=\"icon-trash\"></i></a>
                                </span>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    <tfoot>
                        <tr>
                            <th>Country</th>
                            <th>Death rate</th>
                            <th>Population aged 0-14</th>
                            <th>Population aged 15-64</th>
                            <th>Population aged 65++</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 51
    public function block_script($context, array $blocks = array())
    {
        // line 52
        echo "    <script>
        \$(function () {
            \$('.del-button').on('click', function (e) {
                var \$obj = \$(this);
                \$.msgbox(\"你确定要删除这条记录?\", {
                    type: \"confirm\",
                    buttons: [
                        {type: \"submit\", value: \"是的\"},
                        {type: \"cancel\", value: \"取消\"}
                    ]
                }, function (result) {
                    if (result === '是的') {
                        var node_id = \$obj.attr('node_id');
                        \$.ajax({
                            url: \"{:U('user/role_del')}\",
                            type: 'post',
                            dataType: 'json',
                            data: {'node_id': node_id},
                            success: function (msg) {
                                \$.msgbox(msg.info);
                            }
                        });
                    }
                }
                );

            });

        });
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
        return array (  99 => 52,  96 => 51,  79 => 37,  60 => 24,  53 => 22,  32 => 3,  29 => 2,);
    }
}
