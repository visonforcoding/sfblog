<?php

/* CwpUtilBundle:Form:error.html.twig */
class __TwigTemplate_afd5968bf695da0c3085b429a233e2d6993690b12cee3e97293e14afc8c04f35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('form_errors', $context, $blocks);
    }

    public function block_form_errors($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 5
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "            <span class=\"error-info\">错误：";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CwpUtilBundle:Form:error.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  36 => 6,  31 => 5,  28 => 4,  26 => 3,  20 => 2,);
    }
}
