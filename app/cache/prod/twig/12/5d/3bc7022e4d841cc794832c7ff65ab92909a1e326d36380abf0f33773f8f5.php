<?php

/* FrontendBundle:MyRides:edit.html.twig */
class __TwigTemplate_125d3bc7022e4d841cc794832c7ff65ab92909a1e326d36380abf0f33773f8f5 extends Twig_Template
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
        <div class=\"content-form-page\">
            <h1 class=\"ar\">
               تعديل توصيله\t\t\t\t
            </h1>
                
            ";
        // line 17
        if ((!$this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "vars"), "valid"))) {
            // line 18
            echo "                <div class=\"note note-danger ar>                    
                    ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors');
            echo "
                    ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "rideFrom"), 'errors');
            echo "
                    ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "rideTo"), 'errors');
            echo "    
                    ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "stopOver"), 'errors');
            echo "
                    ";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "departureDate"), 'errors');
            echo "
                    ";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "returnDate"), 'errors');
            echo "
                    ";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "price"), 'errors');
            echo "
                    ";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "availableSeats"), 'errors');
            echo "
                    ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "womenOnly"), 'errors');
            echo "
                    ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "notes"), 'errors');
            echo "                        
                </div>
            ";
        }
        // line 30
        echo "                
            <form role=\"form\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offer-ride-update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo " method=\"post\" class=\"form-horizontal form-without-legend\">
                <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label\"></label>\t
                    <div class=\"col-lg-8\">\t\t\t\t
                        <div class=\"radio-list\">
                            ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "rideType"));
        foreach ($context['_seq'] as $context["_key"] => $context["rideType"]) {
            // line 38
            echo "                                 ";
            $context["index"] = $this->getAttribute($this->getAttribute((isset($context["rideType"]) ? $context["rideType"] : null), "vars"), "value");
            // line 39
            echo "                                     <label class=\"radio-inline ar\">
                                        ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["rideType"]) ? $context["rideType"] : null), 'widget');
            echo "                                                                                              
                                        ";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["rideType"]) ? $context["rideType"] : null), 'label');
            echo "
                                     </label>&nbsp;
                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rideType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                             
                        </div>
                    </div>
                </div>\t\t\t\t  
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> من<span class=\"require\"> *</span></label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group\" style=\"padding-bottom:10px\"> 
                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-map-marker\" style=\"color:green\"></i>
                            </span>                            
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "rideFrom"), 'widget', array("attr" => array("class" => "form-control select2me ar"), "empty_value" => "-- اختر مكان المغادرة --"));
        // line 56
        echo "                         
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> الي <span class=\"require\">*</span></label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-map-marker\" style=\"color:red\"></i>
                            </span>                            
                            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "rideTo"), 'widget', array("attr" => array("class" => "form-control select2me ar"), "empty_value" => "-- اختر مكان الوصول --"));
        // line 69
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\">
                        مناطق فى طريقك

                    </label>
                    <div class=\"col-lg-8\">
                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "stopOver"), 'widget', array("attr" => array("class" => "form-control tags")));
        // line 81
        echo "                                                
                        <p class=\"help-block ar\" style=\"font-size:11px;\">
                             ادخل المناطق الرئيسية التي سوف تمر من خلالها ثم اضغط  Enter 
                        </p>                    
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\" > تاريخ المغادرة <span class=\"require\">*</span></label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group date form_datetime\">
                            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "departureDate"), 'widget', array("attr" => array("class" => "form-control", "readonly" => "readonly")));
        // line 94
        echo "   
                            <span class=\"input-group-btn\">
                                <button class=\"btn default date-set\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label\"></label>\t
                    <div class=\"col-lg-8\">\t\t\t\t
                        <div class=\"checkbox-list\">
                            <label class=\"ar\">
                                <input type=\"checkbox\" name=\"roundTrip\" id=\"round-trip\" ";
        // line 106
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "returnDate") != "")) {
            echo "checked=\"checked\"";
        }
        echo "> 
                                ذهاب وعودة
                            </label>
                        </div>
                    </div>
                </div>

                <div class=\"form-group\" id=\"round-trip-row\" style=\"";
        // line 113
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "returnDate") == "")) {
            echo "display: none;";
        }
        echo "\">
                    <label class=\"col-lg-2 control-label ar\"> تاريخ العودة  </label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group date form_datetime\">
                            ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "returnDate"), 'widget', array("attr" => array("class" => "form-control", "readonly" => "readonly")));
        // line 120
        echo "  
                            <span class=\"input-group-btn\">
                                <button class=\"btn default date-set\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label ar\"> اجرة الراكب </label>
                    <div class=\"col-md-8\">
                        ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "price"), 'widget', array("attr" => array("class" => "form-control")));
        // line 132
        echo "  
                        <p class=\"help-block ar\" style=\"font-size:11px;\">
                             جنيه مصري
                        </p>                              
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label ar\"> عدد المقاعد  </label>
                    <div class=\"col-md-8\">
                        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "availableSeats"), 'widget', array("attr" => array("class" => "form-control")));
        // line 143
        echo "                                             
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label\"></label>\t
                    <div class=\"col-lg-8\">\t\t\t\t
                        <div class=\"checkbox-list\">
                            <label class=\"ar\">
                                ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "womenOnly"), 'widget');
        echo "                                  
للنساء فقط                                
                            </label>
                        </div>
                    </div>
                </div>                    
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> ملاحظات </label>
                    <div class=\"col-lg-8\">
                        ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "notes"), 'widget', array("attr" => array("class" => "form-control", "rows" => "6")));
        // line 163
        echo "                          
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label\"></label>\t
                    <div class=\"col-lg-8\">\t\t\t\t
                        <div class=\"checkbox-list\">
                            <label class=\"ar\">
                                ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "xterms"), 'widget');
        echo " 
                                أقر بأني أحمل رخصة قيادة سارية المفعول
                            </label>
                        </div>
                    </div>
                </div>
                ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-8 col-md-offset-2 padding-left-0 padding-top-20\">
                        <button class=\"btn btn-primary ar\" type=\"submit\">
                            تعديل
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>\t
";
    }

    // line 190
    public function block_page_level_styles($context, array $blocks = array())
    {
        // line 191
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/css/smoothness/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/rateit/src/rateit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">         
";
    }

    // line 200
    public function block_page_level_script($context, array $blocks = array())
    {
        // line 201
        echo "    
    
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/admin/pages/scripts/components-pickers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>                   
";
    }

    // line 211
    public function block_documentReady($context, array $blocks = array())
    {
        // line 212
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
                    
                    \$('#offer_ride_returnDate').val('');
                    \$('#round-trip-row').hide();                    
                }
                
            });

        });
        </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:MyRides:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 212,  387 => 211,  381 => 208,  377 => 207,  373 => 206,  369 => 205,  365 => 204,  361 => 203,  357 => 201,  354 => 200,  348 => 197,  344 => 196,  340 => 195,  336 => 194,  332 => 193,  328 => 192,  323 => 191,  320 => 190,  304 => 177,  295 => 171,  285 => 163,  283 => 160,  271 => 151,  261 => 143,  259 => 141,  248 => 132,  246 => 130,  234 => 120,  232 => 117,  223 => 113,  211 => 106,  197 => 94,  195 => 91,  183 => 81,  181 => 79,  169 => 69,  167 => 67,  154 => 56,  152 => 54,  139 => 43,  130 => 41,  126 => 40,  123 => 39,  120 => 38,  116 => 37,  105 => 31,  102 => 30,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  57 => 18,  55 => 17,  43 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
