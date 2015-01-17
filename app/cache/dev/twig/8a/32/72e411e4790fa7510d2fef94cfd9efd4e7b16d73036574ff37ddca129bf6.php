<?php

/* CwpBlogBundle:Index:about.html.twig */
class __TwigTemplate_8a3272e411e4790fa7510d2fef94cfd9efd4e7b16d73036574ff37ddca129bf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CwpBlogBundle:Layout:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'slider' => array($this, 'block_slider'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CwpBlogBundle:Layout:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["page"] = "about";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "小绾的博客";
    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/bootstrap.min.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/css/profile.css"), "html", null, true);
        echo "\" >
";
    }

    // line 8
    public function block_slider($context, array $blocks = array())
    {
        // line 9
        echo "
";
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
    <!-- ENDS HEADER -->
    <!-- MAIN -->
    <div id=\"main\">
        <div class=\"wrapper cf\">
            <div class=\"profile\">
                <div class=\"clearfix\">
                    <div class=\"profile-head clearfix\">
                        <div class=\"profile-info pull-left\">
                            <h1 class=\"profile-username\">曹 麦 穗 (小绾)</h1>
                            <ul class=\"profile-attributes\">
                                <li><i class=\"icon-map-marker\"></i> 中国 广东 深圳</li>
                                <li><i class=\"icon-briefcase\"></i> phper, ccna,h3cne</li>
                            </ul>
                        </div>
                        <div class=\"btn-toolbar pull-right\">
                            <a href=\"#\" class=\"btn btn-primary\"><i class=\"icon-envelope\"></i> 给我发邮件</a>
                            <a href=\"#\" class=\"btn btn-success\"><i class=\"icon-users\"></i> 工作邀请？</a>
                        </div>
                    </div>
                    <div class=\"profile-sidebar\">
                        <div class=\"thumbnail\">
                            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/images/me.png"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"profile-content\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"profile\">
                                <h4 class=\"sub\"><span>About Me</span></h4>
                                <p>13年毕业了，网络工程专业，拿着CCNA和H3CNE仅有的两个网络工程师认证证书开始去找软件工作。哈哈~~~</p>

                                <p>现从事PHP程序工作，喜欢计算机相关的一切。爱捣鼓，爱折腾。</p>

                                <p>C语言、java、C#、python等也略有尝试，对编程语言都有极大的兴趣。</p>

                                <p>就到这吧，不知道写啥了。</p>
                                <h4 class=\"sub\"><span>Job Experience</span></h4>
                                <ul>
                                    <li>13年7月毕业,本科,网络工程</li>
                                    <li>工作....</li>
                                </ul>

                                <h4 class=\"sub\"><span>Contact Me</span></h4>
                                <address>
                                    中国, 广东,深圳市区,福田区<br>
                                    <abbr title=\"Phone\">P:</abbr> (123) 456-7890<br>
                                    <abbr title=\"Email\">E:</abbr> <a href=\"#\">caowenpeng1990@126.com</a>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ENDS MAIN -->
";
    }

    public function getTemplateName()
    {
        return "CwpBlogBundle:Index:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  64 => 12,  61 => 11,  56 => 9,  53 => 8,  47 => 6,  42 => 5,  39 => 4,  33 => 3,  28 => 2,);
    }
}
