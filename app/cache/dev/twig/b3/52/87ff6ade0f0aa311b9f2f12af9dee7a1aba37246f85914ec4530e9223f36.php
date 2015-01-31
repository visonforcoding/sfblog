<?php

/* CwpAdminBundle:Layout:layout.html.twig */
class __TwigTemplate_b35287ff6ade0f0aa311b9f2f12af9dee7a1aba37246f85914ec4530e9223f36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav_bar' => array($this, 'block_nav_bar'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/lib/jquery-1.11.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/css/theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpadmin/css/premium.css"), "html", null, true);
        echo "\">
    </head>
    <body class=\"theme-blue\">
        ";
        // line 13
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 15
        echo "        <div>
            ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 23
            echo "            ";
        }
        // line 24
        echo "        </div>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 26
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 27
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 28
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        <div>
            ";
        // line 34
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 36
        echo "        </div>
    </body>
</html>
";
    }

    // line 13
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 14
        echo "        ";
    }

    // line 34
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 35
        echo "            ";
    }

    public function getTemplateName()
    {
        return "CwpAdminBundle:Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 35,  126 => 34,  122 => 14,  119 => 13,  112 => 36,  110 => 34,  106 => 32,  100 => 31,  91 => 28,  86 => 27,  81 => 26,  77 => 25,  74 => 24,  71 => 23,  65 => 19,  61 => 18,  56 => 17,  54 => 16,  51 => 15,  49 => 13,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  27 => 6,  21 => 2,);
    }
}
