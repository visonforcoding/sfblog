<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9541ced363df9cb540fa2035fcbf239fb2151432cf18cd7bf98f1ad80040d9e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CwpAdminBundle:Layout:layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'nav_bar' => array($this, 'block_nav_bar'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CwpAdminBundle:Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 3
        echo "    <style>
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>
    <div class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"navbar-header\">
            <a class=\"\" href=\"index.html\"><span class=\"navbar-brand\"><span class=\"fa fa-paper-plane\"></span>sfblog</span></a></div>

        <div class=\"navbar-collapse collapse\" style=\"height: 1px;\">

        </div>
    </div>
";
    }

    // line 20
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 22
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 24
        echo "
    <div class=\"dialog\">
        <div class=\"panel panel-default\">
            <p class=\"panel-heading no-collapse\">后台登录</p>
            <div class=\"panel-body\">
                <form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                    <div class=\"form-group\">
                        <label for=\"username\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" class=\"form-control span12\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"password\" id=\"password\" class=\"form-control span12 form-control\" name=\"_password\" required=\"required\" />
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                    <label for=\"remember_me\" class=\"remember-me\"><input type=\"checkbox\" name=\"remember_me\"> ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"clearfix\"></div>
                </form>
            </div>
        </div>
        <p class=\"pull-right\" style=\"\"><a href=\"http://www.portnine.com\" target=\"blank\" style=\"font-size: .75em; margin-top: .25em;\">联系管理员</a></p>
        <p><a href=\"reset-password.html\">忘记密码?</a></p>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 41,  102 => 40,  96 => 37,  90 => 34,  86 => 33,  80 => 30,  76 => 29,  69 => 24,  63 => 22,  60 => 21,  57 => 20,  40 => 3,  37 => 2,  11 => 1,);
    }
}
