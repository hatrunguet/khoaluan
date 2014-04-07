<?php

/* AcmePermissionBundle:Admin:createVaitro.html.twig */
class __TwigTemplate_863753afe6751b80bed89fd71829d8709a8ebd86352a786301ebd27a69ff0dc3 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<div class=\"panel panel-success\">
    <div class=\"panel-heading\">
        <h6 class=\"panel-title\"><i class=\"icon-bubble4\"></i> Tạo mới vai trò xử lý</h6>
    </div>
    <div class=\"panel-body\">
        ";
        // line 8
        if ((!twig_test_empty(((array_key_exists("alert", $context)) ? (_twig_default_filter((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")))) : (""))))) {
            // line 9
            echo "        <div class=\"alert alert-success fade in block-inner\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 14
        echo "        <div class=\"form-group\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tthc"), "nametthc"), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tthc"), "nametthc"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tthc"), "nametthc"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tthc"), "idlinhvuc"), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tthc"), "idlinhvuc"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tthc"), "idlinhvuc"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tthc"), "iddonvithuly"), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tthc"), "iddonvithuly"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tthc"), "iddonvithuly"), 'errors');
        echo "
            </div>
        </div>
         <div class=\"form-group\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vaitro"), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vaitro"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vaitro"), 'errors');
        echo "
            </div>
        </div>
         <div class=\"form-group\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'errors');
        echo "
            </div>
            <input type=\"text\" />
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("tableUser");
        echo "\" onclick=\"return openInParent('";
        echo $this->env->getExtension('routing')->getPath("tableUser");
        echo "')\">Link to popup</a>
        </div>
        <div class=\"form-actions text-right\">
             ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
            ";
        // line 54
        echo "        </div>
    </div>
</div>
";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<script>
  function openInParent(url) {
        newwindow=window.open(url,'name','height=600,width=600');
\tif (window.focus) {newwindow.focus()}
\treturn false;
  }
</script>
";
    }

    public function getTemplateName()
    {
        return "AcmePermissionBundle:Admin:createVaitro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 57,  138 => 54,  134 => 52,  126 => 49,  120 => 46,  116 => 45,  111 => 43,  100 => 38,  95 => 36,  79 => 29,  72 => 25,  68 => 24,  63 => 22,  52 => 17,  44 => 14,  34 => 9,  57 => 13,  49 => 10,  38 => 11,  35 => 6,  31 => 5,  26 => 3,  23 => 2,  19 => 1,  219 => 87,  213 => 69,  208 => 68,  204 => 22,  201 => 21,  187 => 88,  185 => 87,  166 => 70,  164 => 68,  148 => 55,  142 => 52,  119 => 31,  112 => 29,  109 => 28,  101 => 29,  98 => 28,  91 => 29,  88 => 32,  81 => 29,  78 => 28,  73 => 23,  71 => 21,  58 => 10,  28 => 5,  22 => 1,  183 => 61,  175 => 56,  170 => 53,  153 => 50,  149 => 49,  145 => 48,  141 => 47,  137 => 46,  132 => 45,  128 => 43,  124 => 41,  121 => 40,  104 => 39,  84 => 31,  80 => 21,  74 => 18,  64 => 10,  61 => 9,  56 => 18,  50 => 6,  47 => 15,  40 => 6,  37 => 5,  32 => 8,  29 => 2,);
    }
}
