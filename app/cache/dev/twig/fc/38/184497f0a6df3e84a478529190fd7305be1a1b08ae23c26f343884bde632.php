<?php

/* AcmePermissionBundle:Admin:permission.html.twig */
class __TwigTemplate_fc38184497f0a6df3e84a478529190fd7305be1a1b08ae23c26f343884bde632 extends Twig_Template
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
            // asset "1ab215a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1ab215a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1ab215a_datatables.min_1.js");
            // line 5
            echo "        
     <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>        
    ";
        } else {
            // asset "1ab215a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1ab215a") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1ab215a.js");
            // line 5
            echo "        
     <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>        
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "     
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "     <div class=\"tabbable page-tabs\">
      <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#inside\" data-toggle=\"tab\"><i class=\"icon-checkbox-partial\"></i> Tạo mới vai trò xử lý</a></li>
        <li class=\"\"><a href=\"#outside\" data-toggle=\"tab\"><i class=\"icon-checkbox-unchecked\"></i> Vai trò xử lý</a></li>
      </ul>
      <div class=\"tab-content\">
        <!-- First tab content -->
        <div class=\"tab-pane fade active in\" id=\"inside\">
            ";
        // line 18
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmePermissionBundle:Permission:createVaitro"));
        echo "
        </div>
        <div class=\"tab-pane fade\" id=\"outside\">
            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo " 
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h6 class=\"panel-title\"><i class=\"icon-table\"></i> Bảng phân quyền</h6>
                </div>
                <div class=\"datatable\">
                    <div id=\"DataTables_Table_0_wrapper\" class=\"dataTables_wrapper\" role=\"grid\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <td>ID</td>
                                    <td>Username</td>
                                    <td>Vai Trò</td>
                                    <td>Thủ Tục Hành Chính</td>
                                    <td>Sửa</td>
                                    <td>Xóa</td>
                                </thead>
                            ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vaitroxuly"]) ? $context["vaitroxuly"] : $this->getContext($context, "vaitroxuly")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["func"]) {
            // line 40
            echo "                                ";
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2) == 0)) {
                // line 41
                echo "                                <tr class=\"odd\">
                                ";
            } else {
                // line 43
                echo "                                <tr class=\"even\">
                                ";
            }
            // line 45
            echo "                                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["func"]) ? $context["func"] : $this->getContext($context, "func")), "id"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["func"]) ? $context["func"] : $this->getContext($context, "func")), "user"), "username"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["func"]) ? $context["func"] : $this->getContext($context, "func")), "vaitro"), "name"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["func"]) ? $context["func"] : $this->getContext($context, "func")), "tthc"), "nametthc"), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editPermission", array("id" => $this->getAttribute((isset($context["func"]) ? $context["func"] : $this->getContext($context, "func")), "id"))), "html", null, true);
            echo "\">Edit</a></td>
                                    <td>";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vaitro"), $this->getAttribute((isset($context["func"]) ? $context["func"] : $this->getContext($context, "func")), "id"), array(), "array"), 'widget');
            echo "</td>
                                </tr>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['func'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                            </table>
                        </div>            
                        <div class=\"form-actions text-right\">
                            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        <!-- /third tab content -->
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmePermissionBundle:Admin:permission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 61,  175 => 56,  170 => 53,  153 => 50,  149 => 49,  145 => 48,  141 => 47,  137 => 46,  132 => 45,  128 => 43,  124 => 41,  121 => 40,  104 => 39,  84 => 22,  80 => 21,  74 => 18,  64 => 10,  61 => 9,  56 => 7,  50 => 6,  47 => 5,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
