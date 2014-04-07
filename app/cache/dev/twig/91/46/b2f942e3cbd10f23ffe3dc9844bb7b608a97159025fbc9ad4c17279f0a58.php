<?php

/* AcmePermissionBundle:Default:groupFuncView.html.twig */
class __TwigTemplate_9146b2f942e3cbd10f23ffe3dc9844bb7b608a97159025fbc9ad4c17279f0a58 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gfunctions"]) ? $context["gfunctions"] : $this->getContext($context, "gfunctions")));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 2
            echo "    <li>
       <a class=\"expand\"><span>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["g"]) ? $context["g"] : $this->getContext($context, "g")), "name"), "html", null, true);
            echo "</span></a>
            <ul>
                ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["g"]) ? $context["g"] : $this->getContext($context, "g")), "functions"));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 6
                echo "                <li>
                   <a href=\"";
                // line 7
                echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "path"));
                echo "\" class=\"expand\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "name"), "html", null, true);
                echo "</span></a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            </ul>
    </li>    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmePermissionBundle:Default:groupFuncView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  49 => 10,  38 => 7,  35 => 6,  31 => 5,  26 => 3,  23 => 2,  19 => 1,  219 => 87,  213 => 69,  208 => 68,  204 => 22,  201 => 21,  187 => 88,  185 => 87,  166 => 70,  164 => 68,  148 => 55,  142 => 52,  119 => 31,  112 => 29,  109 => 28,  101 => 29,  98 => 28,  91 => 29,  88 => 28,  81 => 29,  78 => 28,  73 => 23,  71 => 21,  58 => 10,  28 => 5,  22 => 1,  183 => 61,  175 => 56,  170 => 53,  153 => 50,  149 => 49,  145 => 48,  141 => 47,  137 => 46,  132 => 45,  128 => 43,  124 => 41,  121 => 40,  104 => 39,  84 => 22,  80 => 21,  74 => 18,  64 => 10,  61 => 9,  56 => 7,  50 => 6,  47 => 5,  40 => 6,  37 => 5,  32 => 9,  29 => 2,);
    }
}
