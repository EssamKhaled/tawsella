<?php

/* FrontendBundle:OfferRide:moreDetails.html.twig */
class __TwigTemplate_3bc4970d53c360caab341a0d24ee5bd33881d715478a76bc65430dec189db8a8 extends Twig_Template
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Widgets:getFilterWidget"));
        echo "      
        ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Widgets:getLatestRidesWidget"));
        echo "
    </div>  
    <div class=\"col-md-9 col-sm-7\">
        <div class=\"product-page\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4\" style=\"border-left: 1px solid #f4f4f4;min-height: 235px;\">
                    <div class=\"\">
                        <div class=\"\">
                            <img src=\"";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "image") == null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/img/user-man-driver-72.png"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/account_info/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "image"), "html", null, true);
        }
        echo "\" class=\"img-responsive\" alt=\"\"/>                            
                        </div>
                        <h4 class=\"ar\" style=\"padding-top:10px\">
                            ";
        // line 19
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "firstName") != null)) {
            // line 20
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "lastName"), "html", null, true);
            echo "                                        
                            ";
        } else {
            // line 22
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "html", null, true);
            echo " 
                            ";
        }
        // line 23
        echo "                        
                        </h4>
                        <h5>
                            ";
        // line 26
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "dateOfBirth"), 6, null)), "html", null, true);
        echo "
                            <span class=\"ar\">
                                سنه\t\t\t\t\t\t\t\t\t\t
                            </span>
                            <span class=\"txt-color-orange pull-right\" style=\"display: none;\">
                                <li class=\"fa fa-star-o\"></li>
                                <li class=\"fa fa-star-o\"></li>
                                <li class=\"fa fa-star-o\"></li>
                                <li class=\"fa fa-star-o\"></li>
                                <li class=\"fa fa-star\"></li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                            </span>\t\t\t\t\t\t
                        </h5>
                        <h5>
                            <i class=\"fa fa-phone\"></i>&nbsp;
                            <span style=\"text-align:left\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "mobile"), "html", null, true);
        echo "</span>
                        </h5>\t\t\t\t\t\t\t\t
                        <ul class=\"social-icons\">
                            ";
        // line 43
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "facebookUrl")) {
            echo "<li><a class=\"facebook\" target=\"_blank\" data-original-title=\"facebook\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "facebookUrl"), "html", null, true);
            echo "\"></a></li>";
        }
        // line 44
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "twitterUrl")) {
            echo "<li><a class=\"twitter\" target=\"_blank\" data-original-title=\"twitter\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "twitterUrl"), "html", null, true);
            echo "\"></a></li>";
        }
        // line 45
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "googlePlusUrl")) {
            echo "<li><a class=\"googleplus\" target=\"_blank\" data-original-title=\"googleplus\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "googlePlusUrl"), "html", null, true);
            echo "\"></a></li>";
        }
        echo "                   
                        </ul>
                        <button class=\"btn btn-primary ar\" style=\"display: none;\">
                            <li class=\"fa fa-envelope\"></li>&nbsp;
                            ارسل رسالة الى السائق
                        </button>\t\t\t\t\t\t\t  
                    </div>

                </div>
                <div class=\"col-md-8 col-sm-8\">
                    <h1>
                        <span class=\"ar\">
                            من\t\t\t\t\t\t\t
                        </span>:&nbsp;
                        ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "rideFrom"), "nameAr"), "html", null, true);
        echo " &nbsp;
                        
                        <span class=\"ar\">
                            الي\t\t\t\t\t\t
                        </span>:&nbsp;
                        ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "rideTo"), "nameAr"), "html", null, true);
        echo " &nbsp;                        
                    </h1>
                        
                    <div class=\"pull-right\">
                        <span class=\"";
        // line 68
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "smoking") == false)) {
            echo "no-";
        }
        echo "smoking prefs tip\"></span>
                        <span class=\"";
        // line 69
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "pets") == false)) {
            echo "no-";
        }
        echo "pet prefs tip\"></span>
                        <span class=\"";
        // line 70
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "music") == false)) {
            echo "no-";
        }
        echo "music prefs tip\"></span>
                    </div>\t\t\t\t\t\t\t  
                    <h4>
                         ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "departureDate"), "html", null, true);
        echo "
                    </h4>\t\t\t\t\t\t  
                    <div class=\"price-availability-block clearfix\">
                        <div class=\"price\">
                            <strong>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price"), "html", null, true);
        echo "</strong>
                            <em class=\"ar\">
                                جنيه للفرد\t\t\t\t\t\t\t  
                            </em>
                        </div>
                        <div class=\"availability\">
                            ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "availableSeats"), "html", null, true);
        echo "
                            <span class=\"ar\">
                                مقاعد متبقيه\t\t\t\t\t\t\t\t\t
                            </span>
                            <span style=\"padding-right: 10px;\">
                                ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "availableSeats")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 89
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/img/empty-seat.png"), "html", null, true);
            echo "\">
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                                
                                \t\t\t\t\t\t\t\t\t\t\t\t\t
                            </span>
                        </div>

                    </div>

                    <div class=\"description\">
                        <p class=\"ar\">
                            ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "notes"), "html", null, true);
        echo "                            
                        </p>
                    </div>

                    <div class=\"product-page-cart\">
                        <div class=\"product-quantity\" style=\"display: none;\">
                            <div class=\"input-group bootstrap-touchspin input-group-sm\"><span class=\"input-group-btn\"><button class=\"btn quantity-down bootstrap-touchspin-down\" type=\"button\"><i class=\"fa fa-angle-down\"></i></button></span><span class=\"input-group-addon bootstrap-touchspin-prefix\" style=\"display: none;\"></span><input id=\"product-quantity\" type=\"number\" value=\"1\" readonly=\"\" class=\"form-control input-sm\" style=\"display: block;\"><span class=\"input-group-addon bootstrap-touchspin-postfix\" style=\"display: none;\"></span><span class=\"input-group-btn\"><button class=\"btn quantity-up bootstrap-touchspin-up\" type=\"button\"><i class=\"fa fa-angle-up\"></i></button></span></div>
                        </div>
                        <button class=\"btn btn-primary ar\" style=\"display: none;\">
                            احجز مقعد
                        </button>

                        <h4 style=\"padding-top:15px\">
                            <span class=\"ar\">
                                السيارة
                            </span>
                            : ";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "carType"), "html", null, true);
        echo "
                        </h4>                        
                    </div>


                </div>


            </div>
        </div>   
    </div>

";
    }

    // line 130
    public function block_page_level_styles($context, array $blocks = array())
    {
        // line 131
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/css/smoothness/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/rateit/src/rateit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">         
";
    }

    // line 140
    public function block_page_level_script($context, array $blocks = array())
    {
        // line 141
        echo "    
    
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/admin/pages/scripts/components-pickers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>                   
";
    }

    // line 151
    public function block_documentReady($context, array $blocks = array())
    {
        // line 152
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
        return "FrontendBundle:OfferRide:moreDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 152,  330 => 151,  324 => 148,  320 => 147,  316 => 146,  312 => 145,  308 => 144,  304 => 143,  300 => 141,  297 => 140,  291 => 137,  287 => 136,  283 => 135,  279 => 134,  275 => 133,  271 => 132,  266 => 131,  263 => 130,  246 => 115,  227 => 99,  216 => 90,  207 => 89,  203 => 88,  195 => 83,  186 => 77,  179 => 73,  171 => 70,  165 => 69,  159 => 68,  152 => 64,  144 => 59,  122 => 45,  115 => 44,  109 => 43,  103 => 40,  86 => 26,  81 => 23,  75 => 22,  67 => 20,  65 => 19,  54 => 16,  43 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
