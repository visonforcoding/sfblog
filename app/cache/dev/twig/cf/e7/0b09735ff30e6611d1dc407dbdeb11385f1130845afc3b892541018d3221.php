<?php

/* CwpAdminBundle:Layout:base.html.twig */
class __TwigTemplate_cfe70b09735ff30e6611d1dc407dbdeb11385f1130845afc3b892541018d3221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'crumbs' => array($this, 'block_crumbs'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!doctype html>
<html lang=\"en\"><head>
        <meta charset=\"utf-8\">
        <title>Seven-baby 后台管理系统</title>
        <meta content=\"IE=edge,chrome=1\" http-equiv=\"X-UA-Compatible\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/jquery-1.11.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/bootstrap/js/jquery.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/css/theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/css/premium.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/css/style.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/ueditor/ueditor.config.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/ueditor/ueditor.all.js"), "html", null, true);
        echo "\" ></script>
        <script href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/ueditor/lang/zh-cn/zh-cn.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\">
            document.domain = \"sevenbaby.test\";
        </script>
    ";
        // line 23
        $this->displayBlock('css', $context, $blocks);
        // line 24
        $this->displayBlock('js', $context, $blocks);
        // line 25
        echo "</head>
<body class=\" theme-blue\">
    <!-- Demo page code -->
    <script type=\"text/javascript\">
        \$(function () {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if (match)
                var color = match[1];
            if (color) {
                \$('body').removeClass(function (index, css) {
                    return (css.match(/\\btheme-\\S+/g) || []).join(' ')
                })
                \$('body').addClass('theme-' + color);
            }

            \$('[data-popover=\"true\"]').popover({html: true});

        });
    </script>
    <style type=\"text/css\">
        .clear{
            clear:both;
        }
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>
    <script type=\"text/javascript\">
        \$(function () {
            var uls = \$('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            \$('#main-menu').append(uls.clone());
        });
    </script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"../assets/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"../assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"../assets/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"../assets/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"../assets/ico/apple-touch-icon-57-precomposed.png\">
    <!--[if lt IE 7 ]> <body class=\"ie ie6\"> <![endif]-->
    <!--[if IE 7 ]> <body class=\"ie ie7 \"> <![endif]-->
    <!--[if IE 8 ]> <body class=\"ie ie8 \"> <![endif]-->
    <!--[if IE 9 ]> <body class=\"ie ie9 \"> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> 
    <!--<![endif]-->
    <div class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"\" href=\"/index.php\"><span class=\"navbar-brand\"><span class=\"fa fa-paper-plane\"></span> sfblog</span></a>
        </div>
        <div class=\"navbar-collapse collapse\" style=\"height: 1px;\">
            <ul id=\"main-menu\" class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown hidden-xs\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"glyphicon glyphicon-user padding-right-small\" style=\"position:relative;top: 3px;\"></span>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                        <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"./\">个人信息</a></li>
                        <li class=\"divider\"></li>
                        <li class=\"dropdown-header\">Admin Panel</li>
                        <li><a href=\"./\">Users</a></li>
                        <li><a href=\"./\">Security</a></li>
                        <li><a tabindex=\"-1\" href=\"./\">Payments</a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"sign-in.html\">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class=\"sidebar-nav\">
    <ul>
        <li><a href=\"#\" data-target=\".dashboard-menu\" class=\"nav-header\" data-toggle=\"collapse\"><i class=\"fa fa-fw fa-dashboard\"></i> 管理面板<i class=\"fa fa-collapse\"></i></a></li>
        <li><ul class=\"dashboard-menu nav nav-list collapse\">
                <li><a href=\"index.html\"><span class=\"fa fa-caret-right\"></span> Main</a></li>
            </ul></li>
        <li><a href=\"#\" data-target=\".user-menu\" class=\"nav-header\" data-toggle=\"collapse\"><i class=\"fa fa-fw fa-user\"></i> 用户管理<i class=\"fa fa-collapse\"></i></a></li>
        <li><ul class=\"user-menu nav nav-list collapse \">
                <li><a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("cwp_admin_userlist");
        echo "\"><span class=\"fa fa-caret-right\"></span>管理员管理</a></li>
                <li ><a href=\"{:U('Admin/user/add')}\"><span class=\"fa fa-caret-right\"></span>添加管理员</a></li>
            </ul>
        </li>
        <li><a href=\"#\" data-target=\".content-menu\" class=\"nav-header\" data-toggle=\"collapse\"><i class=\"fa fa-fw fa-book\"></i> 内容管理<i class=\"fa fa-collapse\"></i></a></li>
        <li><ul class=\"content-menu nav nav-list collapse \">
                <li><a href=\"{:U('Admin/blog/about')}\"><span class=\"fa fa-caret-right\"></span>关于</a></li>
                <li ><a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("cwp_admin_blogcatlist");
        echo "\"><span class=\"fa fa-caret-right\"></span>类别管理</a></li>
                <li ><a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("cwp_admin_bloglist");
        echo "\"><span class=\"fa fa-caret-right\"></span>博文管理</a></li>
            </ul>
        </li>
    </ul>
</div>
<div class=\"content\">
    <div class=\"header\">
        ";
        // line 136
        $this->displayBlock('crumbs', $context, $blocks);
        // line 138
        echo "    </div>
    <div class=\"main-content\">
        ";
        // line 140
        $this->displayBlock('main', $context, $blocks);
        // line 142
        echo "        <footer>
            <hr>
            <p class=\"pull-right\"> <a href=\"http://www.phpone.cn\" target=\"_blank\">后会无期</a> by <a href=\"mailto:caowenpeng1990@126.com\" target=\"_blank\">vison allen</a></p>
            <p>© 2014 <a href=\"http://www.phpone.cn\" target=\"_blank\">phpone.cn</a></p>
        </footer>
    </div>
</div>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
        \$(\"[rel=tooltip]\").tooltip();
        \$(function () {
            \$('.demo-cancel-click').click(function () {
                return false;
            });
        });
</script>
<script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/js/lib.js"), "html", null, true);
        echo "\" ></script>
</body>
</html>
";
    }

    // line 23
    public function block_css($context, array $blocks = array())
    {
    }

    // line 24
    public function block_js($context, array $blocks = array())
    {
    }

    // line 136
    public function block_crumbs($context, array $blocks = array())
    {
        // line 137
        echo "        ";
    }

    // line 140
    public function block_main($context, array $blocks = array())
    {
        // line 141
        echo "        ";
    }

    public function getTemplateName()
    {
        return "CwpAdminBundle:Layout:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 141,  259 => 140,  255 => 137,  252 => 136,  247 => 24,  242 => 23,  234 => 158,  222 => 149,  213 => 142,  211 => 140,  207 => 138,  205 => 136,  195 => 129,  191 => 128,  181 => 121,  152 => 95,  80 => 25,  78 => 24,  76 => 23,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  23 => 2,);
    }
}
