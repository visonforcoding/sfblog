<?php

/* CwpAdminBundle:User:group_list.html.twig */
class __TwigTemplate_407931558a7508a5d0b74be795bcc3da20f4e03ff2bd2691da871976017e67ad extends Twig_Template
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

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row-fluid\">
        <div class=\"span12 widget\">
            <div class=\"widget-header\">
                <span class=\"title\">群组管理</span>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("cwp_admin_groupadd");
        echo "\" class=\"btn\"><i class=\"icol-add\"></i> 添加群组</a>
            </div>
            <div class=\"widget-content table-container\">
                <table id=\"demo-dtable-02\" class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>名称</th>
                            <th>路径</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            echo "    
                        <tr>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "roles", array()), "html", null, true);
            echo "</td>
                            <td class=\"action-col\">
                                <span class=\"btn-group\">
                                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cwp_admin_accessconfig", array("group_id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"查看拥有权限\" class=\"btn btn-small\"><i class=\"icon-search\"></i></a>
                                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cwp_admin_groupupdate", array("group_id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-small\"><i class=\"icon-pencil\"></i></a>#}
                                    <a  menu_id=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\" class=\"del-button btn btn-small\"><i class=\"icon-trash\"></i></a>
                                </span>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    <tfoot>
                        <tr>
                            <th>Country</th>
                            <th>Death rate</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 43
    public function block_script($context, array $blocks = array())
    {
        // line 44
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
                        var menu_id = \$obj.attr('menu_id');
                        \$.ajax({
                            url: \"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("cwp_admin_menudel");
        echo "\",
                            type: 'post',
                            dataType: 'json',
                            data: {'menu_id': menu_id},
                            success: function (msg) {
                                \$.msgbox(msg.info);
                                window.location.reload();
                            }
                        });
                    }
                }
                );
            });
        });
      </script>
";
    }

    public function getTemplateName()
    {
        return "CwpAdminBundle:User:group_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 58,  105 => 44,  102 => 43,  88 => 32,  77 => 27,  73 => 26,  69 => 25,  63 => 22,  59 => 21,  52 => 19,  38 => 8,  32 => 4,  29 => 3,);
    }
}
