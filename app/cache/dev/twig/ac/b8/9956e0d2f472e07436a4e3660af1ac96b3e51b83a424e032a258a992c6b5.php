<?php

/* CwpUtilBundle:Layout:menu.html.twig */
class __TwigTemplate_acb89956e0d2f472e07436a4e3660af1ac96b3e51b83a424e032a258a992c6b5 extends Twig_Template
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
        // line 2
        echo "<!--菜单-->
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 4
            echo "    <li ";
            if (($this->getAttribute($context["menu"], "path_top", array(), "any", true, true) && ($this->getAttribute($context["menu"], "path_top", array()) == true))) {
                echo "class=\"active\" ";
            }
            echo ">
    <span title=\"Table\">
        <i class=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "class", array()), "html", null, true);
            echo "\"></i>
        <span class=\"nav-title\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "name", array()), "html", null, true);
            echo "</span>
    </span>
    <ul class=\"inner-nav\">
        ";
            // line 10
            if ($this->getAttribute($context["menu"], "child", array(), "any", true, true)) {
                // line 11
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "child", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 12
                    echo "        <li ";
                    if (($this->getAttribute($context["value"], "path_sec", array(), "any", true, true) && ($this->getAttribute($context["value"], "path_sec", array()) == true))) {
                        echo "class=\"active\"";
                    }
                    echo ">
            <a href=\"";
                    // line 13
                    echo $this->env->getExtension('routing')->getPath($this->getAttribute($context["value"], "node", array()));
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "class", array()), "html", null, true);
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        ";
            }
            // line 16
            echo "    </ul>
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "CwpUtilBundle:Layout:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  70 => 15,  58 => 13,  51 => 12,  46 => 11,  44 => 10,  38 => 7,  34 => 6,  26 => 4,  22 => 3,  19 => 2,);
    }
}
