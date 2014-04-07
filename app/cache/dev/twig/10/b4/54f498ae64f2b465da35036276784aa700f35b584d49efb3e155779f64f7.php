<?php

/* AcmePermissionBundle:Admin:initialData.html.twig */
class __TwigTemplate_10b454f498ae64f2b465da35036276784aa700f35b584d49efb3e155779f64f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmePermissionBundle::Admin/baseAdmin.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmePermissionBundle::Admin/baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascript($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "de641a8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de641a8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/de641a8_part_1_autosize_1.js");
            // line 6
            echo "        
     <script type=\"text/javascript\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>        
    ";
            // asset "de641a8_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de641a8_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/de641a8_part_1_inputlimit.min_2.js");
            // line 6
            echo "        
     <script type=\"text/javascript\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>        
    ";
            // asset "de641a8_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de641a8_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/de641a8_part_1_inputmask_3.js");
            // line 6
            echo "        
     <script type=\"text/javascript\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>        
    ";
            // asset "de641a8_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de641a8_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/de641a8_part_1_listbox_4.js");
            // line 6
            echo "        
     <script type=\"text/javascript\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>        
    ";
            // asset "de641a8_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de641a8_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/de641a8_part_1_multiselect_5.js");
            // line 6
            echo "        
     <script type=\"text/javascript\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>        
    ";
            // asset "de641a8_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de641a8_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/de641a8_part_1_select2.min_6.js");
            // line 6
            echo "        
     <script type=\"text/javascript\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>        
    ";
            // asset "de641a8_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de641a8_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/de641a8_part_1_switch.min_7.js");
            // line 6
            echo "        
     <script type=\"text/javascript\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>        
    ";
            // asset "de641a8_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de641a8_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/de641a8_part_1_tags.min_8.js");
            // line 6
            echo "        
     <script type=\"text/javascript\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>        
    ";
            // asset "de641a8_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de641a8_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/de641a8_part_1_uniform.min_9.js");
            // line 6
            echo "        
     <script type=\"text/javascript\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>        
    ";
            // asset "de641a8_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de641a8_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/de641a8_part_1_validate.min_10.js");
            // line 6
            echo "        
     <script type=\"text/javascript\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>        
    ";
        } else {
            // asset "de641a8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_de641a8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/de641a8.js");
            // line 6
            echo "        
     <script type=\"text/javascript\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>        
    ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "     
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"tabbable page-tabs\">
      <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#inside\" data-toggle=\"tab\"><i class=\"icon-checkbox-partial\"></i> Tạo mới người dùng</a></li>
        <li class=\"\"><a href=\"#outside\" data-toggle=\"tab\"><i class=\"icon-checkbox-unchecked\"></i> Tạo mới lĩnh vực hành chính</a></li>
        <li class=\"\"><a href=\"#advanced\" data-toggle=\"tab\"><i class=\"icon-checkmark3\"></i> Tạo mới thủ tục hành chính</a></li>
        ";
        // line 18
        echo "      </ul>
      <div class=\"tab-content\">
        <!-- First tab content -->
        <div class=\"tab-pane fade active in\" id=\"inside\">
            ";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmePermissionBundle:Permission:createUser"));
        echo "
        </div>
        <div class=\"tab-pane fade\" id=\"outside\">
            ";
        // line 25
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmePermissionBundle:Permission:createLinhvuc"));
        echo "
        </div>
        <div class=\"tab-pane fade\" id=\"advanced\">
            ";
        // line 28
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmePermissionBundle:Permission:createTTHC"));
        echo "
         </div>
       ";
        // line 36
        echo "        <!-- /third tab content -->
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmePermissionBundle:Admin:initialData.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 36,  170 => 28,  164 => 25,  158 => 22,  152 => 18,  145 => 11,  142 => 10,  137 => 8,  131 => 7,  128 => 6,  121 => 7,  118 => 6,  112 => 7,  109 => 6,  103 => 7,  100 => 6,  94 => 7,  91 => 6,  85 => 7,  82 => 6,  76 => 7,  73 => 6,  67 => 7,  64 => 6,  58 => 7,  55 => 6,  49 => 7,  46 => 6,  40 => 7,  37 => 6,  32 => 3,  29 => 2,);
    }
}
