<?php

/* FrontendBundle:OfferRide:available.html.twig */
class __TwigTemplate_9f99ce70df0e929c120c5be69d724d1e05b321b0abafc16c0f61805184f4f98a extends Twig_Template
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
        <div class=\"content-search margin-bottom-20\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h1 class=\"ar\">
                        نتائج البحث\t\t\t\t\t\t\t
                        &nbsp;<span class=\"number txt-color-orange\" style=\"font-size:20px!important\">( ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount"), "html", null, true);
        echo " )</span>
                    </h1>
                    ";
        // line 18
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount") == 0)) {
            // line 19
            echo "                        <br>
                        <h5 class=\"ar\">
عفوا لا توجد توصيلات بهذا البحث                        
                        </h5>
                    ";
        }
        // line 24
        echo "                </div>
                <div class=\"col-md-8\">
                    <form action=\"#\">
                        <div class=\"col-md-5\"></div>
                        <div class=\"col-md-4\"></div>\t
                        <div class=\"col-md-3\" style=\"display: none;\">
                            <div class=\"input-group\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary\" type=\"submit\">

                                        <span class=\"ar\">
                                            اطلب توصيله\t\t\t\t\t\t\t\t\t\t\t\t\t
                                        </span>
                                        <li class=\"fa fa-bullhorn\"></li>\t\t\t\t\t\t\t\t
                                    </button>
                                </span>
                            </div>\t\t\t
                        </div>

                    </form>
                </div>
            </div>
        </div>
                      
            <div class=\"row product-list\">
                
                ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 51
            echo "                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"product-item\">
                            <div class=\"sidebar-products clearfix no-padding\">
                                <h2 class=\"ar\">
                                    ";
            // line 55
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "firstName") != null)) {
                // line 56
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "firstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "lastName"), "html", null, true);
                echo "                                        
                                    ";
            } else {
                // line 58
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "html", null, true);
                echo " 
                                    ";
            }
            // line 60
            echo "    
                                </h2>
                                <div class=\"item\">
                                    <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offer-ride-more-details", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 64
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "image") == null)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/img/user-man-driver-72.png"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/account_info/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "image"), "html", null, true);
            }
            echo "\" alt=\"\"/>
                                    </a>
                                    <h3 style=\"margin-top: -9px;margin-right: 80px!important;\">
                                         ";
            // line 67
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "dateOfBirth"), 6, null)), "html", null, true);
            echo "
                                        <span class=\"ar\">
                                            سنه\t\t\t\t\t\t\t\t\t\t
                                        </span>
                                    </h3>
                                    <div class=\"price\" style=\"margin-right: 80px!important;display: none;\">
                                        <li class=\"fa fa-star-o\"></li>
                                        <li class=\"fa fa-star-o\"></li>
                                        <li class=\"fa fa-star\"></li>
                                        <li class=\"fa fa-star\"></li>
                                        <li class=\"fa fa-star\"></li>
                                    </div>
                                    <div class=\"\">
                                        <span class=\"";
            // line 80
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "smoking") == false)) {
                echo "no-";
            }
            echo "smoking prefs tip\"></span>
                                        <span class=\"";
            // line 81
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "pets") == false)) {
                echo "no-";
            }
            echo "pet prefs tip\"></span>
                                        <span class=\"";
            // line 82
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "music") == false)) {
                echo "no-";
            }
            echo "music prefs tip\"></span>
                                    </div>
                                </div>
                            </div>\t\t\t\t
                            <h3>
                                ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "departureDate"), "html", null, true);
            echo "
                            </h3>
                            <div style=\"margin-top:-10px\">
                                <li class=\"fa fa-map-marker\" style=\"color:green\"></li>&nbsp;
                                <span class=\"ar\">
                                    من\t\t\t\t\t\t\t
                                </span>:&nbsp;
                                ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "rideFrom"), "html", null, true);
            echo " &nbsp;
                            </div>
                            <div>
                                <li class=\"fa fa-map-marker\" style=\"color:red\"></li>&nbsp;
                                <span class=\"ar\">
                                    الي\t\t\t\t\t\t
                                </span>:&nbsp;
                                ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "rideTo"), "nameAr"), "html", null, true);
            echo " &nbsp;
                            </div>
                            
                            <h3 class=\"txt-color-orange\">
                                <li class=\"fa fa-car\"></li> 
                                ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "user"), "accountInfo"), "carType"), "html", null, true);
            echo "
                            </h3>
                            <div style=\"margin-top:-10px\">
                                ";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "availableSeats"), "html", null, true);
            echo "
                                <span class=\"ar\">
                                    مقاعد متبقيه\t\t\t\t\t
                                </span>
                            </div>\t\t\t\t\t  \t\t\t\t\t  \t\t  
                            <div class=\"pi-price\">";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price"), "html", null, true);
            echo " <span class=\"ar\">جنيه للفرد</span></div>
                            <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offer-ride-more-details", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-default add2cart ar\">
                                المزيد\t\t\t\t\t\t\t\t
                            </a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "      

            </div>            
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4 items-info number\"></div>
                <div class=\"col-md-8 col-sm-8\">
                    <div class=\"pagination pull-right number\">
                        ";
        // line 128
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
                    </div>
                </div>
            </div>   
    </div>

";
    }

    // line 137
    public function block_page_level_styles($context, array $blocks = array())
    {
        // line 138
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/css/smoothness/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/rateit/src/rateit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">         
";
    }

    // line 147
    public function block_page_level_script($context, array $blocks = array())
    {
        // line 148
        echo "    
    
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/admin/pages/scripts/components-pickers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>                   
";
    }

    // line 158
    public function block_documentReady($context, array $blocks = array())
    {
        // line 159
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
        return "FrontendBundle:OfferRide:available.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 159,  325 => 158,  319 => 155,  315 => 154,  311 => 153,  307 => 152,  303 => 151,  299 => 150,  295 => 148,  292 => 147,  286 => 144,  282 => 143,  278 => 142,  274 => 141,  270 => 140,  266 => 139,  261 => 138,  258 => 137,  247 => 128,  238 => 121,  226 => 115,  222 => 114,  214 => 109,  208 => 106,  200 => 101,  190 => 94,  180 => 87,  170 => 82,  164 => 81,  158 => 80,  142 => 67,  131 => 64,  127 => 63,  122 => 60,  116 => 58,  108 => 56,  106 => 55,  100 => 51,  96 => 50,  68 => 24,  61 => 19,  59 => 18,  54 => 16,  43 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
