<?php

/* CwpUtilBundle:Form:error.html.twig */
class __TwigTemplate_afd5968bf695da0c3085b429a233e2d6993690b12cee3e97293e14afc8c04f35 extends Twig_Template
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
        if (array_key_exists("errors", $context)) {
            // line 3
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 4
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 5
                    echo "            ";
                    if ($this->getAttribute($context["error"], (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), array(), "array", true, true)) {
                        // line 6
                        echo "                <span class=\"error-info\">错误：";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["error"], (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), array(), "array"), "html", null, true);
                        echo "</span>
            ";
                    }
                    // line 8
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "CwpUtilBundle:Form:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  38 => 8,  32 => 6,  29 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }
}
