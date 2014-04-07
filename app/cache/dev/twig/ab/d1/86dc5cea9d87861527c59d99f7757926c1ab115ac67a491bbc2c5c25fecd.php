<?php

/* AcmePermissionBundle:Admin:createTTHC.html.twig */
class __TwigTemplate_abd186dc5cea9d87861527c59d99f7757926c1ab115ac67a491bbc2c5c25fecd extends Twig_Template
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
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<div class=\"panel panel-success\">
    <div class=\"panel-heading\">
        <h6 class=\"panel-title\"><i class=\"icon-bubble4\"></i> Tạo mới thủ tục hành chính</h6>
    </div>
    <div class=\"panel-body\">
        ";
        // line 9
        if ((!twig_test_empty(((array_key_exists("alert", $context)) ? (_twig_default_filter((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")))) : (""))))) {
            // line 10
            echo "        <div class=\"alert alert-success fade in block-inner\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 15
        echo "        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nametthc"), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nametthc"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nametthc"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idlinhvuc"), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idlinhvuc"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idlinhvuc"), 'errors');
        echo "
            </div>
        </div>
         <div class=\"form-group\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iddonvithuly"), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iddonvithuly"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iddonvithuly"), 'errors');
        echo "
            </div>
        </div>
    </div>
</div>
";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
    }

    public function getTemplateName()
    {
        return "AcmePermissionBundle:Admin:createTTHC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 38,  88 => 34,  83 => 31,  79 => 29,  72 => 25,  68 => 24,  63 => 22,  56 => 18,  52 => 17,  44 => 14,  38 => 11,  34 => 9,  23 => 2,  138 => 56,  130 => 51,  123 => 47,  119 => 46,  114 => 44,  107 => 40,  98 => 37,  87 => 32,  75 => 26,  71 => 25,  66 => 23,  59 => 19,  50 => 16,  47 => 15,  41 => 12,  35 => 9,  26 => 3,  22 => 2,  19 => 1,  174 => 36,  169 => 28,  163 => 25,  157 => 22,  151 => 18,  145 => 11,  142 => 10,  137 => 8,  131 => 7,  128 => 6,  121 => 7,  118 => 6,  112 => 7,  109 => 6,  103 => 39,  100 => 6,  94 => 7,  91 => 33,  85 => 7,  82 => 30,  76 => 7,  73 => 6,  67 => 7,  64 => 6,  58 => 7,  55 => 18,  49 => 7,  46 => 6,  40 => 7,  37 => 10,  32 => 8,  29 => 2,);
    }
}
