<?php

/* CwpAdminBundle:User:access_config.html.twig */
class __TwigTemplate_30e4dc3463c977520e9891c1bd23829340ac926c0cc25fef1cbfbc138868f6c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CwpUtilBundle:Layout:layout.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
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
    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row-fluid\">
        <div class=\"span12 widget\">
            <div class=\"widget\">
                <div class=\"widget-header\">
                    <span class=\"title\">权限配置</span>
                </div>
                <div class=\"widget-content form-container\">
                    <form id=\"validate-1\" class=\"form-horizontal\" method=\"post\">
                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"picklist-ex\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "name", array()), "html", null, true);
        echo "权限配置</label>
                            <div class=\"controls\" id=\"access\">
                                ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nodes"]) ? $context["nodes"] : $this->getContext($context, "nodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 18
            echo "                                    <label class=\"checkbox\">
                                        ";
            // line 19
            if (($this->getAttribute($context["node"], "sort", array()) != 0)) {
                // line 20
                echo "                                            <input type=\"checkbox\" ";
                if ($this->getAttribute($context["node"], "checked", array(), "any", true, true)) {
                    echo "checked";
                }
                echo " class=\"uniform\" name=\"node[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["node"], "id", array()), "html", null, true);
                echo "\" />";
                echo twig_escape_filter($this->env, $this->getAttribute($context["node"], "name", array()), "html", null, true);
                echo " 
                                        ";
            } elseif (($this->getAttribute($context["node"], "sort", array()) == 0)) {
                // line 22
                echo "                                             ----";
                echo twig_escape_filter($this->env, $this->getAttribute($context["node"], "name", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 24
            echo "                                    </label>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                            </div>
                        </div>
                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary\">保存</button>
                            <button class=\"btn\" type=\"reset\">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    ";
    }

    // line 37
    public function block_script($context, array $blocks = array())
    {
        // line 38
        echo "        <!-- Bootstrap FileInput -->
        <!--<script src=\"custom-plugins/bootstrap-fileinput.min.js></script>-->

        <!-- Select2 -->
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/select2/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- Validation -->
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/validate/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/validate/localization/messages_zh.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script>
            \$(function () {
                \$(\"#validate-1\").validate({
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
        return "CwpAdminBundle:User:access_config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 46,  117 => 45,  111 => 42,  105 => 38,  102 => 37,  88 => 26,  81 => 24,  75 => 22,  63 => 20,  61 => 19,  58 => 18,  54 => 17,  49 => 15,  38 => 6,  35 => 5,  30 => 3,);
    }
}
