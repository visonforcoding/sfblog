<?php

/* CwpAdminBundle:Index:login.html.twig */
class __TwigTemplate_f2aeca2a2fca801ab69d5c6e8739cd4869e0b65e50c1f1630c0217065d3d5e34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"zh\"><head>
    <meta charset=\"utf-8\">
    <title>后台管理登录</title>
    <meta content=\"IE=edge,chrome=1\" http-equiv=\"X-UA-Compatible\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/jquery-1.11.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/css/theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/css/premium.css"), "html", null, true);
        echo "\">
</head>
<body class=\" theme-blue\">
    <!-- Demo page code -->
    <script type=\"text/javascript\">
        \$(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                \$('body').removeClass(function (index, css) {
                    return (css.match (/\\btheme-\\S+/g) || []).join(' ')
                });
                \$('body').addClass('theme-' + color);
            }
            \$('[data-popover=\"true\"]').popover({html: true});
        });
    </script>
    <style type=\"text/css\">
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
        \$(function() {
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
          <a class=\"\" href=\"index.html\"><span class=\"navbar-brand\"><span class=\"fa fa-paper-plane\"></span>Seven-baby</span></a></div>

        <div class=\"navbar-collapse collapse\" style=\"height: 1px;\">

        </div>
      </div>
    </div>
    


  <div class=\"dialog\">
    <div class=\"panel panel-default\">
        <p class=\"panel-heading no-collapse\">后台登录</p>
        <div class=\"panel-body\">
         <form action=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
               <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <div class=\"form-group\">
                    <label for=\"username\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" class=\"form-control span12\" name=\"_username\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                </div>
                <div class=\"form-group\">
               <label for=\"password\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password"), "html", null, true);
        echo "</label>
                 <input type=\"password\" id=\"password\" class=\"form-control span12 form-control\" name=\"_password\" required=\"required\" />
                </div>
                <button type=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
        echo "</button>
                <label class=\"_remember_me\"><input type=\"checkbox\" name=\"_remember_me\" value=\"on\"> ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me"), "html", null, true);
        echo "</label>
                <div class=\"clearfix\"></div>
            </form>
        </div>
    </div>
    <p class=\"pull-right\" style=\"\"><a href=\"http://www.portnine.com\" target=\"blank\" style=\"font-size: .75em; margin-top: .25em;\">联系管理员</a></p>
    <p><a href=\"reset-password.html\">忘记密码?</a></p>
</div>



    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(\"[rel=tooltip]\").tooltip();
        \$(function() {
            \$('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  
</body></html>
";
    }

    public function getTemplateName()
    {
        return "CwpAdminBundle:Index:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 108,  150 => 97,  146 => 96,  140 => 93,  134 => 90,  130 => 89,  125 => 87,  121 => 86,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
