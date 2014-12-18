<?php

/* CwpAdminBundle:Blog:blog_update.html.twig */
class __TwigTemplate_310a42ea7a7337f0c2ee739fc211921280c01764fa7549bd0220fcd5321cc5d2 extends Twig_Template
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
                            <input type=\"text\" name=\"title\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cur_blog"]) ? $context["cur_blog"] : $this->getContext($context, "cur_blog")), "title", array()), "html", null, true);
        echo "\" class=\"span12\">
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
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["cur_blog"]) ? $context["cur_blog"] : $this->getContext($context, "cur_blog")), "category", array()), "id", array()) == $this->getAttribute($context["cat"], "id", array()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
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
                            <textarea class=\"span12\" name=\"guide\" id=\"input05\" rows=\"3\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cur_blog"]) ? $context["cur_blog"] : $this->getContext($context, "cur_blog")), "guide", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"input05\">封面</label>
                        <div class=\"controls\">
                            <div id=\"tdimgcover\" style=\"display: inline-block\">
                                <div class=\"showImg\" style=\"height:163px;\">
                                    <div id=\"discover\" class=\"showImgC\">
                                        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cur_blog"]) ? $context["cur_blog"] : $this->getContext($context, "cur_blog")), "cover", array()), "html", null, true);
        echo "\" />
                                    </div>
                                    <div id=\"btnimgcover\">
                                        <input type=\"button\" style=\"width: 133px;\" class=\"btn btn-primary\" id=\"coverBtn\" value=\"上传图片\" />
                                    </div>
                                    <input type=\"hidden\" name=\"cover\" id=\"cover\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cur_blog"]) ? $context["cur_blog"] : $this->getContext($context, "cur_blog")), "cover", array()), "html", null, true);
        echo "\" />
                                </div>
                                <script id=\"covereditor\"></script>
                            </div>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">内容</label>
                        <div class=\"controls\">
                            <!-- 加载编辑器的容器 -->
                            <script id=\"container\" name=\"content\" type=\"text/plain\">";
        // line 61
        echo $this->getAttribute((isset($context["cur_blog"]) ? $context["cur_blog"] : $this->getContext($context, "cur_blog")), "content", array());
        echo "</script>
                            <!-- 实例化编辑器 -->
                            <script type=\"text/javascript\">
                                var ue = UE.getEditor('container');
                            </script>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">seo关键字<span class=\"required\">*</span></label>
                        <div class=\"controls\">
                            <input type=\"text\" name=\"keywords\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cur_blog"]) ? $context["cur_blog"] : $this->getContext($context, "cur_blog")), "keywords", array()), "html", null, true);
        echo "\" class=\"span12\">
                        </div>
                    </div>
                              <div class=\"control-group\">
                        <label class=\"control-label\" for=\"input05\">seo描述</label>
                        <div class=\"controls\">
                            <textarea class=\"span12\" name=\"description\" id=\"input05\" rows=\"3\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cur_blog"]) ? $context["cur_blog"] : $this->getContext($context, "cur_blog")), "description", array()), "html", null, true);
        echo "</textarea>
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

    // line 89
    public function block_script($context, array $blocks = array())
    {
        // line 90
        echo "    <!-- Bootstrap FileInput -->
    <!--<script src=\"custom-plugins/bootstrap-fileinput.min.js></script>-->

    <!-- Select2 -->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/select2/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Validation -->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/validate/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 98
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
        return "CwpAdminBundle:Blog:blog_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 98,  191 => 97,  185 => 94,  179 => 90,  176 => 89,  160 => 77,  151 => 71,  138 => 61,  125 => 51,  117 => 46,  105 => 37,  97 => 31,  81 => 29,  77 => 28,  66 => 20,  53 => 9,  50 => 8,  44 => 6,  40 => 5,  36 => 4,  33 => 3,  30 => 2,);
    }
}
