<?php

/* CwpAdminBundle:Menu:menu_update.html.twig */
class __TwigTemplate_c51b0ee506302143d08d880243285fe3b2c52c7c000a02ce57c9d5698dbcacc5 extends Twig_Template
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
                <span class=\"title\">添加节点</span>
            </div>
            <div class=\"widget-content form-container\">
                <form id=\"validate-1\" class=\"form-horizontal\" method=\"post\">
                    <div class=\"control-group\">
                        <label class=\"control-label\">节点名称 <span class=\"required\">*</span></label>
                        <div class=\"controls\">
                            <input type=\"text\" name=\"Name\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cur_menu"]) ? $context["cur_menu"] : $this->getContext($context, "cur_menu")), "name", array()), "html", null, true);
        echo "\" class=\"span12\">
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">父节点<span class=\"required\">*</span></label>
                        <div class=\"controls\">
                            <select id=\"input01\" name=\"Pid\" class=\"span12\">
                                <option value=\"0\">顶级</option>
                                ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 23
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["cur_menu"]) ? $context["cur_menu"] : $this->getContext($context, "cur_menu")), "pid", array()) == $this->getAttribute($context["menu"], "id", array()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "html", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "name", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">路径<span class=\"required\">*</span></label>
                        <div class=\"controls\">
                            <input type=\"text\" name=\"Node\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cur_menu"]) ? $context["cur_menu"] : $this->getContext($context, "cur_menu")), "node", array()), "html", null, true);
        echo "\" class=\"span12\">
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">样式</label>
                        <div class=\"controls\">
                            <input type=\"text\" name=\"Class\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cur_menu"]) ? $context["cur_menu"] : $this->getContext($context, "cur_menu")), "class", array()), "html", null, true);
        echo "\" class=\"span12\">
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">排序</label>
                        <div class=\"controls\">
                            <input type=\"text\" name=\"Rank\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cur_menu"]) ? $context["cur_menu"] : $this->getContext($context, "cur_menu")), "rank", array()), "html", null, true);
        echo "\" class=\"span12\">
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"input05\">备注</label>
                        <div class=\"controls\">
                            <textarea class=\"span12\" name=\"Remark\"  id=\"input05\" rows=\"3\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cur_menu"]) ? $context["cur_menu"] : $this->getContext($context, "cur_menu")), "remark", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">是否显示在菜单</label>
                        <div class=\"controls\">
                            <label class=\"radio\">
                                <input type=\"radio\" data-provide=\"ibutton\" value=\"1\" name=\"IsMenu\" data-label-on=\"ON\" 
                                  ";
        // line 57
        if (($this->getAttribute((isset($context["cur_menu"]) ? $context["cur_menu"] : $this->getContext($context, "cur_menu")), "isMenu", array()) == 1)) {
            echo "checked ";
        }
        echo "      data-label-off=\"OFF\" checked>
                                显示
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" data-provide=\"ibutton\" value=\"0\" name=\"IsMenu\" data-label-on=\"ON\" 
                                    ";
        // line 62
        if (($this->getAttribute((isset($context["cur_menu"]) ? $context["cur_menu"] : $this->getContext($context, "cur_menu")), "isMenu", array()) == 0)) {
            echo "checked ";
        }
        echo "   data-label-off=\"OFF\">
                                不显示
                            </label>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">状态</label>
                        <div class=\"controls\">
                            <label class=\"radio\">
                                <input type=\"radio\" data-provide=\"ibutton\" value=\"1\" name=\"Status\" data-label-on=\"ON\" 
                                       data-label-off=\"OFF\"  ";
        // line 72
        if (($this->getAttribute((isset($context["cur_menu"]) ? $context["cur_menu"] : $this->getContext($context, "cur_menu")), "status", array()) == 1)) {
            echo "checked ";
        }
        echo ">
                                启用
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" data-provide=\"ibutton\" value=\"0\" name=\"Status\" data-label-on=\"ON\" 
                                  ";
        // line 77
        if (($this->getAttribute((isset($context["cur_menu"]) ? $context["cur_menu"] : $this->getContext($context, "cur_menu")), "status", array()) == 0)) {
            echo "checked ";
        }
        echo "     data-label-off=\"OFF\">
                                禁用
                            </label>
                        </div>
                    </div>
                    <div class=\"form-actions\">
                        <input type=\"submit\" value=\"Validate Me\" class=\"btn btn-primary pull-right\">
                    </div>
                </form>
            </div>

        </div>
    </div>
";
    }

    // line 91
    public function block_script($context, array $blocks = array())
    {
        // line 92
        echo "    <!-- Bootstrap FileInput -->
    <!--<script src=\"custom-plugins/bootstrap-fileinput.min.js></script>-->

    <!-- Select2 -->
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/select2/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Validation -->
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/validate/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/validate/localization/messages_zh.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Demo Scripts -->
    <script>
        \$(function () {
            \$(\"#validate-1\").validate({
                rules: {
                    Name: {
                        required: true
                    },
                    Path: {
                        required: true
                    },
                },
                invalidHandler: function (form, validator) {
                    var errors = validator.numberOfInvalids();
                    if (errors) {
                        var message = errors == 1
                                ? 'You missed 1 field. It has been highlighted'
                                : 'You missed ' + errors + ' fields. They have been highlighted';
                        \$(\"#da-ex-val1-error\").html(message).show();
                    } else {
                        \$(\"#da-ex-val1-error\").hide();
                    }
                },
                submitHandler: function (form) {
                    \$.ajax({
                        type: \$(form).attr('method'),
                        url: \$(form).attr('action'),
                        data: \$(form).serialize(),
                        dataType: 'json',
                        success: function (msg) {
                            if (typeof msg === 'object') {
                                if (msg.status) {
                                    alert(msg.info);
                                    window.location.href = msg.url;
                                } else {
                                    \$.msgbox(msg.info, {type: \"error\"});
                                }
                            }
                        }
                    });
                    return false; // required 
                }
            });

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "CwpAdminBundle:Menu:menu_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 100,  192 => 99,  186 => 96,  180 => 92,  177 => 91,  157 => 77,  147 => 72,  132 => 62,  122 => 57,  111 => 49,  102 => 43,  93 => 37,  84 => 31,  76 => 25,  60 => 23,  56 => 22,  45 => 14,  32 => 3,  29 => 2,);
    }
}
