<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2b45a1e3de6b633eb36dbaf397f539f737d7edf9c4af8e7566f18c6775e43fb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::base.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'page_level_styles' => array($this, 'block_page_level_styles'),
            'page_level_script' => array($this, 'block_page_level_script'),
            'documentReady' => array($this, 'block_documentReady'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row margin-bottom-40\">
    
    <div class=\"sidebar col-md-3 col-sm-5\">
        ";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Widgets:getProfileMenuWidget", array("route" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"))));
        echo "              
        ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Widgets:getLatestRidesWidget"));
        echo "
    </div>
    
    <div class=\"col-md-9 col-sm-7\">
        
        <div class=\"content-form-page\">
            ";
        // line 14
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "valid"))) {
            echo "                  
                <div class=\"note note-danger ar\">
                    ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
                    ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username"), 'errors');
            echo "
                    ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'errors');
            echo "
                    ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "current_password"), 'errors');
            echo "
                </div>    
            ";
        }
        // line 21
        echo "            
            <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal form-without-legend\">
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> إسم المستخدم</label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group\" style=\"padding-bottom:10px\">                            
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username"), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off")));
        // line 30
        echo "                             
                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-user\"></i>
                            </span>                                
                        </div>                            
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\">البريد الإلكتروني</label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group\" style=\"padding-bottom:10px\">                            
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget', array("attr" => array("class" => "form-control")));
        // line 43
        echo "                             
                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-envelope\"></i>
                            </span>
                        </div>
                    </div>
                </div>                    
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\">كلمة المرور الحالية</label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group\" style=\"padding-bottom:10px\">                            
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "current_password"), 'widget', array("attr" => array("class" => "form-control")));
        // line 56
        echo "                             
                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-lock\"></i>
                            </span>
                        </div>
                    </div>
                </div>          
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-8 col-md-offset-2\">
                        <button class=\"btn btn-primary pull-right ar\" style=\"margin-left: 15px;\" type=\"submit\">
                            تحديث
                        </button>
                        <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" class=\"ar pull-right padding-right-30 padding-top-10\">
                            تغير كلمة المرور
                        </a>
                    </div>
                </div>
            </form>        
        </div>



        
    </div>
</div>    
";
    }

    // line 84
    public function block_page_level_styles($context, array $blocks = array())
    {
        // line 85
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/css/smoothness/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/rateit/src/rateit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">         
";
    }

    // line 94
    public function block_page_level_script($context, array $blocks = array())
    {
        // line 95
        echo "    
    
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/admin/pages/scripts/components-pickers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>                   
";
    }

    // line 105
    public function block_documentReady($context, array $blocks = array())
    {
        // line 106
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            Layout.init(); // init current layout
            Metronic.init();
            ComponentsPickers.init();
            Layout.initUniform();
            \$('.tags').tagsInput({
                width: 'auto',
                'defaultText': '',
                'onAddTag': function() {
                    //alert(1);
                },
            });
            
            
            \$(\"#round-trip\").click(function(){
                var isChecked = \$('#round-trip').is(':checked'); 
                if(isChecked === true){
                    \$('#round-trip-row').show();                    
                }
                else{
                    \$('#round-trip-row').hide();                    
                }
                
            });

        });
        </script>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 106,  223 => 105,  217 => 102,  213 => 101,  209 => 100,  205 => 99,  201 => 98,  197 => 97,  193 => 95,  190 => 94,  184 => 91,  180 => 90,  176 => 89,  172 => 88,  168 => 87,  164 => 86,  159 => 85,  156 => 84,  138 => 69,  129 => 63,  120 => 56,  118 => 54,  105 => 43,  103 => 41,  90 => 30,  88 => 27,  78 => 22,  75 => 21,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  52 => 14,  43 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
