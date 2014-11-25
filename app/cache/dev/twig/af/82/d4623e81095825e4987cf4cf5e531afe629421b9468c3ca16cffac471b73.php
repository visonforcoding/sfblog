<?php

/* CwpAdminBundle:Blog:addBlog.html.twig */
class __TwigTemplate_af82d4623e81095825e4987cf4cf5e531afe629421b9468c3ca16cffac471b73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CwpAdminBundle:Layout:base.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
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

    // line 2
    public function block_javascript($context, array $blocks = array())
    {
        // line 3
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/ueditor/ueditor.config.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/ueditor/ueditor.all.js"), "html", null, true);
        echo "\" ></script>
    <script href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/ueditor/lang/zh-cn/zh-cn.js"), "html", null, true);
        echo "\" ></script>
";
    }

    // line 7
    public function block_crumbs($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"page-title\">添加博文</h1>
    <ul class=\"breadcrumb\">
        <li><a href=\"index.html\">Home</a> </li>
        <li><a href=\"users.html\">Users</a> </li>
        <li class=\"active\">jsmith</li>
    </ul>
";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <br>
            <form class=\"form-horizontal\" role=\"form\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">标题</label>
                    <div class=\"col-sm-4\">
                        <input name=\"title\" type=\"type\" class=\"form-control\" id=\"inputEmail3\" >
                    </div>
                    ";
        // line 25
        $this->env->loadTemplate("CwpUtilBundle:Form:error.html.twig")->display(array_merge($context, array("field" => "title")));
        // line 26
        echo "                </div>
                <div class=\"form-group\">
                    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">类别</label>
                    <div class=\"col-sm-8\">
                        <select name=\"pid\" class=\"form-control\">
                            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catlist"]) ? $context["catlist"] : $this->getContext($context, "catlist")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 32
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "html", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">封面</label>
                    <div class=\"col-sm-8\">
                        <div id=\"tdimgcover\" style=\"display: inline-block\">
                            <div class=\"showImg\" style=\"height:163px;\">
                                <div id=\"discover\" class=\"showImgC\">

                                </div>
                                <div id=\"btnimgcover\">
                                    <input type=\"button\" style=\"width: 133px;\" class=\"btn btn-primary\" id=\"coverBtn\" value=\"上传图片\" />
                                </div>
                                <input type=\"hidden\" name=\"cover\" id=\"cover\" value=\"{\$Rs['fcover']}\" />
                            </div>
                            <script id=\"covereditor\"></script>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">引言</label>
                    <div class=\"col-sm-8\">
                        <textarea name=\"guide\" class=\"form-control\" rows=\"3\"></textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">内容</label>
                    <div class=\"col-sm-8\">
                        <script class=\"editor\" id=\"content\" name=\"content\" type=\"text/plain\"></script>
                        <script type=\"text/javascript\">
                            var editor = UE.getEditor('content');
                        </script>
                    </div>
            
                </div>
                <div class=\"form-group\">
                    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">seo关键字</label>
                    <div class=\"col-sm-4\">
                        <input name=\"keywords\" type=\"text\" class=\"form-control\" id=\"inputEmail3\" >
                    </div>
                             ";
        // line 75
        $this->env->loadTemplate("CwpUtilBundle:Form:error.html.twig")->display(array_merge($context, array("field" => "content")));
        // line 76
        echo "                </div>         
                <div class=\"form-group\">
                    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">seo描述</label>
                    <div class=\"col-sm-8\">
                        <textarea name=\"description\" class=\"form-control\" rows=\"3\"></textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\"></label>
                    <div class=\"col-sm-8\">
                        <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
                    </div>
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
    <script type=\"text/javascript\">
        /*图片上传*/
        \$(function () {
            initImageUpload('covereditor', 'cover', 'discover', 'coverBtn');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "CwpAdminBundle:Blog:addBlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 76,  143 => 75,  100 => 34,  88 => 32,  84 => 31,  77 => 26,  75 => 25,  64 => 16,  61 => 15,  51 => 8,  48 => 7,  42 => 5,  38 => 4,  33 => 3,  30 => 2,);
    }
}
