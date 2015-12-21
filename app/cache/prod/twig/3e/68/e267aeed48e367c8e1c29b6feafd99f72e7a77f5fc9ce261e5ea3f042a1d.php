<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3e68e267aeed48e367c8e1c29b6feafd99f72e7a77f5fc9ce261e5ea3f042a1d extends Twig_Template
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
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Widgets:getProfileMenuWidget", array("route" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method"))));
        echo "    
        ";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Widgets:getLatestRidesWidget"));
        echo "            
    </div>
    
    <div class=\"col-md-9 col-sm-7\">
        <div class=\"content-form-page\">
            
            <a href=\"#\" class=\"icon-btn\" style=\"height: 85px;\">
                <i class=\"fa fa-calendar txt-color-orange\" style=\"font-size:25px!important\"></i>
                <div class=\"ar\" style=\"padding-left: 10px;padding-right: 10px;\">
                   تاريخ اخر دخول
                   <br>
                   <span style=\"font-family: Arial;\">";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "lastLogin"), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>
                </div>
            </a> 
            
            <div style=\"display: none;\">
            <br>
            <a href=\"#\" class=\"icon-btn\" style=\"height: 85px;\" >
                <i class=\"fa fa-times-circle txt-color-orange\" style=\"font-size:25px!important\"></i>
                <div class=\"ar\" style=\"padding-left: 10px;padding-right: 10px;\">
                   التحقق من
                   <br>
                   البريد الإلكتروني
                </div>
            </a>
            <a href=\"#\" class=\"icon-btn\" style=\"height: 85px;\">
                <i class=\"fa fa-calendar txt-color-orange\" style=\"font-size:25px!important\"></i>
                <div class=\"ar\" style=\"padding-left: 10px;padding-right: 10px;\">
                   تاريخ التسجيل
                   <br>
                   <span style=\"font-family: Arial;\">08 August 2014</span>
                </div>
            </a>             
            <br><br>
            <a href=\"#\" class=\"icon-btn\">
                <i class=\"fa fa-envelope txt-color-orange\" style=\"font-size:25px!important\"></i>
                <div class=\"ar\" style=\"padding-left: 10px;padding-right: 10px;\">
                   رسائل جديدة
                </div>
                <span class=\"badge\" style=\"background: #e18604!important;font-weight: 800!important;\">
                   12
                </span>
            </a>     
            <a href=\"#\" class=\"icon-btn\">
                <i class=\"fa fa-bullhorn txt-color-orange\" style=\"font-size:25px!important\"></i>
                <div class=\"ar\" style=\"padding-left: 10px;padding-right: 10px;\">
                   إخطارات جديدة
                </div>
                <span class=\"badge\" style=\"background: #e18604!important;font-weight: 800!important;\">
                   12
                </span>
            </a>
            <a href=\"#\" class=\"icon-btn\">
                <i class=\"fa fa-map-marker txt-color-orange\" style=\"font-size:25px!important\"></i>
                <div class=\"ar\" style=\"padding-left: 10px;padding-right: 10px;\">
                   توصيلات مقدمة
                </div>
                <span class=\"badge\" style=\"background: #e18604!important;font-weight: 800!important;\">
                   12
                </span>
            </a>   
            <a href=\"#\" class=\"icon-btn\">
                <i class=\"fa fa-thumbs-up txt-color-orange\" style=\"font-size:25px!important\"></i>
                <div class=\"ar\" style=\"padding-left: 10px;padding-right: 10px;\">
                   تقييم
                </div>
                <span class=\"badge\" style=\"background: #e18604!important;font-weight: 800!important;\">
                   12
                </span>
            </a>  
            </div>
        </div>
       
    </div>
</div>    
";
    }

    // line 86
    public function block_page_level_styles($context, array $blocks = array())
    {
        // line 87
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/css/smoothness/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/rateit/src/rateit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">         
";
    }

    // line 96
    public function block_page_level_script($context, array $blocks = array())
    {
        // line 97
        echo "    
    
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/admin/pages/scripts/components-pickers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>                   
";
    }

    // line 107
    public function block_documentReady($context, array $blocks = array())
    {
        // line 108
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
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 108,  194 => 107,  188 => 104,  184 => 103,  180 => 102,  176 => 101,  172 => 100,  168 => 99,  164 => 97,  161 => 96,  155 => 93,  151 => 92,  147 => 91,  143 => 90,  139 => 89,  135 => 88,  130 => 87,  127 => 86,  58 => 20,  44 => 9,  40 => 8,  34 => 4,  31 => 3,);
    }
}
