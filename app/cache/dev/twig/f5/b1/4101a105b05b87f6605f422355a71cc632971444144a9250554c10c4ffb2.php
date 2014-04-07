<?php

/* AcmePermissionBundle:Admin:tableUser.html.twig */
class __TwigTemplate_f5b14101a105b05b87f6605f422355a71cc632971444144a9250554c10c4ffb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9caa9fd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9caa9fd_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9caa9fd_bootstrap.min_1.css");
            // line 5
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "9caa9fd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9caa9fd_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9caa9fd_styles.min_2.css");
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "9caa9fd_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9caa9fd_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9caa9fd_londinium-theme.min_3.css");
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "9caa9fd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9caa9fd") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9caa9fd.css");
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 6
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
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "05545f9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_05545f9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/05545f9_part_1_application_1.js");
            // line 22
            echo "        
         <script type=\"text/javascript\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        
        ";
            // asset "05545f9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_05545f9_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/05545f9_part_1_application_blank_2.js");
            // line 22
            echo "        
         <script type=\"text/javascript\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        
        ";
            // asset "05545f9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_05545f9_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/05545f9_part_1_bootstrap.min_3.js");
            // line 22
            echo "        
         <script type=\"text/javascript\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        
        ";
            // asset "05545f9_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_05545f9_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/05545f9_datatables.min_2.js");
            // line 22
            echo "        
         <script type=\"text/javascript\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        
        ";
        } else {
            // asset "05545f9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_05545f9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/05545f9.js");
            // line 22
            echo "        
         <script type=\"text/javascript\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        
        ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "          
";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "<script>
    function xong() 
    { 
\tvar radios = document.getElementsByName('form[vaitro]');

\tfor (var i = 0, length = radios.length; i < length; i++) {
\t    if (radios[i].checked) {
\t        // do whatever you want with the checked radio
\t        opener.document.getElementById('vaitroxuly_user').value= radios[i].value;
                //opener.document.getElementById('vaitroxuly_user').value= radios[i].id;
    \t\tclose();
\t        // only one radio can be logically checked, don't check the rest
\t        break;
\t    }
\t}
    }  
    function closewindow(){
\twindow.close();
}
     </script>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "     ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo " 
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h6 class=\"panel-title\"><i class=\"icon-table\"></i> Bảng người dùng</h6>
                </div>
               ";
        // line 36
        echo "                <div class=\"datatable\">
                    <div id=\"DataTables_Table_0_wrapper\" class=\"dataTables_wrapper\" role=\"grid\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <td></td>
                                    <td>ID</td>
                                    <td>Username</td>
                                </thead>
                            ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "                                ";
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2) == 0)) {
                // line 47
                echo "                                <tr class=\"odd\">
                                ";
            } else {
                // line 49
                echo "                                <tr class=\"even\">
                                ";
            }
            // line 51
            echo "                                    <td>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vaitro"), $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), array(), "array"), 'widget');
            echo "</td>
                                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
            echo "</td>
                                    <td id=\"children_user\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                            </table>
                        </div>            
                        <div class=\"form-actions text-right\">
                            <input type=\"button\" value=\"Chọn\" onclick=\"xong();\" />  
                            <input type=\"button\" value=\"Đóng\" onclick=\"closewindow();\" />
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmePermissionBundle:Admin:tableUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 65,  229 => 56,  212 => 53,  208 => 52,  203 => 51,  199 => 49,  195 => 47,  192 => 46,  175 => 45,  164 => 36,  156 => 28,  151 => 27,  148 => 26,  124 => 67,  122 => 26,  119 => 25,  112 => 23,  109 => 22,  101 => 23,  98 => 22,  91 => 23,  88 => 22,  81 => 23,  78 => 22,  71 => 23,  68 => 22,  64 => 17,  51 => 6,  25 => 5,  20 => 1,);
    }
}
