<?php

/* CwpAdminBundle:Blog:blog_add.html.twig */
class __TwigTemplate_e2d95732f5ed7c0b8b89e8def4b9e10eb59b4b8a1cf05c8f6c068a08ad59fa45 extends Twig_Template
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

    // line 2
    public function block_javascript($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- ueditor -->
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/ueditor/ueditor.config.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/ueditor/ueditor.all.js"), "html", null, true);
        echo "\" ></script>
    <script href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/ueditor/lang/zh-cn/zh-cn.js"), "html", null, true);
        echo "\" ></script>    
";
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"row-fluid\">

        <div class=\"span12 widget\">
            <div class=\"widget-header\">
                <span class=\"title\">博文修改</span>
            </div>
            <div class=\"widget-content form-container\">
                <form id=\"validate-1\" class=\"form-vertical\" method=\"post\">
                    <div class=\"control-group\">
                        <label class=\"control-label\">标题 <span class=\"required\">*</span></label>
                        <div class=\"controls\">
                            <input type=\"text\" name=\"title\"  class=\"span12\">
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">父节点<span class=\"required\">*</span></label>
                        <div class=\"controls\">
                            <select id=\"input01\" name=\"category\" class=\"span12\">
                                <option value=\"0\">顶级</option>
                                ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catlist"]) ? $context["catlist"] : $this->getContext($context, "catlist")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 29
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "html", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"input05\">引言</label>
                        <div class=\"controls\">
                            <textarea class=\"span12\" name=\"guide\" id=\"input05\" rows=\"3\"></textarea>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"input05\">封面</label>
                        <div class=\"controls\">
                            <div id=\"tdimgcover\" style=\"display: inline-block\">
                                <div class=\"showImg\" style=\"height:163px;\">
                                    <div id=\"discover\" class=\"showImgC\">
                                    </div>
                                    <div id=\"btnimgcover\">
                                        <input type=\"button\" style=\"width: 133px;\" class=\"btn btn-primary\" id=\"coverBtn\" value=\"上传图片\" />
                                    </div>
                                    <input type=\"hidden\" name=\"cover\" id=\"cover\"  />
                                </div>
                                <script id=\"covereditor\"></script>
                            </div>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">内容</label>
                        <div class=\"controls\">
                            <!-- 加载编辑器的容器 -->
                            <script id=\"container\" name=\"content\" type=\"text/plain\"></script>
                            <!-- 实例化编辑器 -->
                            <script type=\"text/javascript\">
                                var ue = UE.getEditor('container');
                            </script>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">seo关键字<span class=\"required\">*</span></label>
                        <div class=\"controls\">
                            <input type=\"text\" name=\"keywords\"  class=\"span12\">
                        </div>
                    </div>
                              <div class=\"control-group\">
                        <label class=\"control-label\" for=\"input05\">seo描述</label>
                        <div class=\"controls\">
                            <textarea class=\"span12\" name=\"description\" id=\"input05\" rows=\"3\"></textarea>
                        </div>
                    </div>
                    <div class=\"form-actions\">
                        <input type=\"submit\" value=\"确认\" class=\"btn btn-primary pull-right\">
                    </div>
                </form>
            </div>

        </div>
    </div>
";
    }

    // line 88
    public function block_script($context, array $blocks = array())
    {
        // line 89
        echo "    <!-- Bootstrap FileInput -->
    <!--<script src=\"custom-plugins/bootstrap-fileinput.min.js></script>-->

    <!-- Select2 -->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/select2/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Validation -->
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/validate/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/validate/localization/messages_zh.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script>
      \$(function () {
                         /*图片上传*/
                                                        \$(function () {
                                                            initImageUpload('covereditor', 'cover', 'discover', 'coverBtn');
                                                        });
                                                        \$(\"#validate-1\").validate({
                                                            rules: {
                                                                title: {
                                                                    required: true
                                                                },
                                                                guide: {
                                                                    required: true
                                                                },
                                                                keywords: {
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
        return "CwpAdminBundle:Blog:blog_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 97,  165 => 96,  159 => 93,  153 => 89,  150 => 88,  90 => 31,  78 => 29,  74 => 28,  53 => 9,  50 => 8,  44 => 6,  40 => 5,  36 => 4,  33 => 3,  30 => 2,);
    }
}
