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
                <a href=\"#\" onclick=\"window.open('";
        // line 47
        echo $this->env->getExtension('routing')->getPath("tableUser");
        echo "','name','height=500,width=800')\">Tìm Nhanh</a>
                ";
        // line 49
        echo "            </div>
            
        </div>
        <div class=\"form-actions text-right\">
             ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </div>
    </div>
</div>
";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

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
        return array (  141 => 57,  134 => 53,  128 => 49,  124 => 47,  120 => 46,  116 => 45,  111 => 43,  104 => 39,  100 => 38,  95 => 36,  88 => 32,  84 => 31,  79 => 29,  72 => 25,  68 => 24,  63 => 22,  56 => 18,  52 => 17,  47 => 15,  44 => 14,  38 => 11,  34 => 9,  32 => 8,  23 => 2,  19 => 1,);
    }
}
