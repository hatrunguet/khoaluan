<?php

/* AcmePermissionBundle::Admin/baseAdmin.html.twig */
class __TwigTemplate_270314c1e6149c1997bc1ab128e1dbf5efb9ca0c061d273716d1777640c0b0d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'control' => array($this, 'block_control'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Dịch Vụ Công - Khóa Luận Tốt Nghiệp</title>
";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9caa9fd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9caa9fd_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9caa9fd_bootstrap.min_1.css");
            // line 9
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "9caa9fd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9caa9fd_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9caa9fd_styles.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "9caa9fd_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9caa9fd_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9caa9fd_londinium-theme.min_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "9caa9fd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9caa9fd") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9caa9fd.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "  
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js\"></script>
        <script>
                \$(document).ready(function () {
                \$(\"li\").click(function () {
                \$('li > ul').not(\$(this).children(\"ul\")).hide();
                \$(this).children(\"ul\").toggle();
            });
            });
        </script>
        ";
        // line 21
        $this->displayBlock('javascript', $context, $blocks);
        // line 23
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3f41bee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f41bee_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3f41bee_part_1_application_1.js");
            // line 28
            echo "        
         <script type=\"text/javascript\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        
        ";
            // asset "3f41bee_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f41bee_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3f41bee_part_1_application_blank_2.js");
            // line 28
            echo "        
         <script type=\"text/javascript\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        
        ";
            // asset "3f41bee_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f41bee_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3f41bee_part_1_bootstrap.min_3.js");
            // line 28
            echo "        
         <script type=\"text/javascript\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        
        ";
        } else {
            // asset "3f41bee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f41bee") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3f41bee.js");
            // line 28
            echo "        
         <script type=\"text/javascript\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        
        ";
        }
        unset($context["asset_url"]);
        // line 31
        echo "        


       
</head>
<body class=\"sidebar-wide\">
<!-- Navbar -->
<div class=\"navbar navbar-inverse\" role=\"navigation\">
  <div class=\"navbar-header\"><a class=\"navbar-brand\" href=\"#\">Control Panel</a></div>
  <ul class=\"nav navbar-nav collapse\" id=\"navbar-menu\">
    <li><a href=\"#\"><span>Trang Chủ</span></a></li>
    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span>Danh Mục</span> <b class=\"caret\"></b></a>
      <ul class=\"dropdown-menu dropdown-menu-right\">
        <li><a href=\"#\"></a></li>
        <li><a href=\"#\"></a></li>
\t\t<li><a href=\"#\"></a></li>
\t\t<li><a href=\"#\"></a></li>
      </ul>
    </li>
  </ul>
  <ul class=\"nav navbar-nav navbar-right collapse\" id=\"navbar-icons\">
    <li class=\"user dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span>Xin Chào ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "</span><i class=\"caret\"></i></a>
      <ul class=\"dropdown-menu dropdown-menu-right icons-right\">
        <li><a href=\"#\">Profile</a></li>
        <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
      </ul>
    </li>
  </ul>
</div>
<!-- /navbar -->
<!-- Page container -->
<div class=\"page-container\">
  <!-- Sidebar -->
  <div class=\"sidebar collapse\">
    <div class=\"sidebar-content\">
      <!-- Main navigation -->
      <ul class=\"navigation\">
        ";
        // line 68
        $this->displayBlock('control', $context, $blocks);
        // line 70
        echo "       
      </ul>
      <!-- /main navigation -->
    </div>
  </div>
  <!-- /sidebar -->
  <!-- Page content -->
  <div class=\"page-content\">
      <div class=\"page-header\">
      <div class=\"page-title\">
        <h3>Khởi tạo dữ liệu cho hệ thống <small>Basic/advanced form components</small></h3>
      </div>
      <div id=\"reportrange\" class=\"range\">
        <div class=\"visible-xs header-element-toggle\"><a class=\"btn btn-primary btn-icon\"><i class=\"icon-calendar\"></i></a></div>
        <div class=\"date-range\"><i>26</i> <b><i>Feb</i> <i>2014</i></b><em> - </em><i>27</i> <b><i>Mar</i> <i>2014</i></b></div>
        <span class=\"label label-danger\">9</span></div>    
        </div>
        ";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "\t<!-- nội dung ở đây -->
\t<div class=\"footer clearfix\">
      <div class=\"pull-left\">&copy; 2014. Dịch Vụ Công - Khóa Luận Tốt Nghiệp</div>
    </div>
    <!-- /footer -->
  </div>
  <!-- /page content -->
</div>
<!-- /page container -->
</body>
</html>";
    }

    // line 21
    public function block_javascript($context, array $blocks = array())
    {
        // line 22
        echo "        ";
    }

    // line 68
    public function block_control($context, array $blocks = array())
    {
        echo "            
            ";
        // line 69
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmePermissionBundle:Default:groupFuncView"));
        echo "
        ";
    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        echo "Welcome Admin";
    }

    public function getTemplateName()
    {
        return "AcmePermissionBundle::Admin/baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 87,  213 => 69,  208 => 68,  204 => 22,  201 => 21,  187 => 88,  185 => 87,  166 => 70,  164 => 68,  148 => 55,  142 => 52,  119 => 31,  112 => 29,  109 => 28,  101 => 29,  98 => 28,  91 => 29,  88 => 28,  81 => 29,  78 => 28,  73 => 23,  71 => 21,  58 => 10,  28 => 5,  22 => 1,  183 => 61,  175 => 56,  170 => 53,  153 => 50,  149 => 49,  145 => 48,  141 => 47,  137 => 46,  132 => 45,  128 => 43,  124 => 41,  121 => 40,  104 => 39,  84 => 22,  80 => 21,  74 => 18,  64 => 10,  61 => 9,  56 => 7,  50 => 6,  47 => 5,  40 => 6,  37 => 5,  32 => 9,  29 => 2,);
    }
}
