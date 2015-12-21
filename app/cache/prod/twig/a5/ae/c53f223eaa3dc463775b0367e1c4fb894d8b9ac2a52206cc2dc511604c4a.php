<?php

/* FrontendBundle:AccountInfo:index.html.twig */
class __TwigTemplate_a5aec53f223eaa3dc463775b0367e1c4fb894d8b9ac2a52206cc2dc511604c4a extends Twig_Template
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
        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("account-info-update");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal\">
            <div class=\"content-form-page padding-top-20\">
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName"), 'errors');
            echo "    
                    </div>    
                ";
        }
        // line 19
        echo " 

                <!-------- (Messages) --------------->
                ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "                    <div class=\"note note-success ar\">                    
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flashMessage"]) ? $context["flashMessage"] : null)), "html", null, true);
            echo "
                    </div> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                <!-------- (End Messages) ---------->

                <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> الاسم الاول </label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group\" style=\"padding-bottom:10px\">                            
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName"), 'widget', array("attr" => array("class" => "form-control")));
        // line 36
        echo "                             
                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-user\"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> الاسم الاخير </label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group\" style=\"padding-bottom:10px\">                            
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName"), 'widget', array("attr" => array("class" => "form-control")));
        // line 49
        echo "                             
                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-user\"></i>
                            </span>
                        </div>
                    </div>
                </div> 
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> تاريخ الميلاد</label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group\" style=\"padding-bottom:10px\">                            
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateOfBirth"), 'widget', array("attr" => array("class" => "form-control date-picker")));
        // line 62
        echo "                             
                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-calendar\"></i>
                            </span>
                        </div>
                    </div>
                </div> 
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> نوع السيارة</label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group\" style=\"padding-bottom:10px\">                            
                            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "carType"), 'widget', array("attr" => array("class" => "form-control")));
        // line 75
        echo "                             
                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-car\"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> رقم الجوال  </label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group\" style=\"padding-bottom:10px\">                            
                            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mobile"), 'widget', array("attr" => array("class" => "form-control")));
        // line 88
        echo "                             
                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-phone\"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class=\"content-form-page padding-top-20\">
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> رابط الفيس بوك  </label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group\" style=\"padding-bottom:10px\">                            
                            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "facebookUrl"), 'widget', array("attr" => array("class" => "form-control")));
        // line 104
        echo "                             
                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-facebook\"></i>
                            </span>
                        </div>
                    </div>
                </div>  
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> رابط تويتر </label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group\" style=\"padding-bottom:10px\">                            
                            ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "twitterUrl"), 'widget', array("attr" => array("class" => "form-control")));
        // line 117
        echo "                             
                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-twitter\"></i>
                            </span>
                        </div>
                    </div>
                </div> 
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> رابط جوجل بلس </label>
                    <div class=\"col-lg-8\">
                        <div class=\"input-group\" style=\"padding-bottom:10px\">                            
                            ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "googlePlusUrl"), 'widget', array("attr" => array("class" => "form-control")));
        // line 130
        echo "                             
                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-google-plus\"></i>
                            </span>
                        </div>
                    </div>
                </div>                 
            </div>
            <br>
            <div class=\"content-form-page padding-top-20\">
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\">الموسيقى </label>
                    <div class=\"col-lg-1\"><span class=\"music prefs tip\"></span></div>
                    <div class=\"col-lg-8\">
                        <div class=\"radio-list\">
                            ";
        // line 145
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "music"));
        foreach ($context['_seq'] as $context["_key"] => $context["music"]) {
            // line 146
            echo "                                 ";
            $context["index"] = $this->getAttribute($this->getAttribute((isset($context["music"]) ? $context["music"] : null), "vars"), "value");
            // line 147
            echo "                                     <label class=\"radio-inline ar\">
                                        ";
            // line 148
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["music"]) ? $context["music"] : null), 'widget');
            echo "                                               
                                        ";
            // line 149
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["music"]) ? $context["music"] : null), 'label');
            echo "
                                     </label>&nbsp;
                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['music'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                             
                        </div>
                    </div>
                </div>  
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> القطط او الكلاب </label>
                    <div class=\"col-lg-1\"><span class=\"pet prefs tip\"></span></div>
                    <div class=\"col-lg-8\">
                        <div class=\"radio-list\">
                            ";
        // line 160
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pets"));
        foreach ($context['_seq'] as $context["_key"] => $context["pets"]) {
            // line 161
            echo "                                 ";
            $context["index"] = $this->getAttribute($this->getAttribute((isset($context["pets"]) ? $context["pets"] : null), "vars"), "value");
            // line 162
            echo "                                     <label class=\"radio-inline ar\">
                                        ";
            // line 163
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["pets"]) ? $context["pets"] : null), 'widget');
            echo "                                               
                                        ";
            // line 164
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["pets"]) ? $context["pets"] : null), 'label');
            echo "
                                     </label>&nbsp;
                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                             
                        </div>
                    </div>
                </div> 
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\"> التدخين </label>
                    <div class=\"col-lg-1\"><span class=\"smoking prefs tip\"></span></div>                    
                    <div class=\"col-lg-4\">
                        <div class=\"radio-list\">
                            ";
        // line 175
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "smoking"));
        foreach ($context['_seq'] as $context["_key"] => $context["smoking"]) {
            // line 176
            echo "                                 ";
            $context["index"] = $this->getAttribute($this->getAttribute((isset($context["smoking"]) ? $context["smoking"] : null), "vars"), "value");
            // line 177
            echo "                                     <label class=\"radio-inline ar\">
                                        ";
            // line 178
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["smoking"]) ? $context["smoking"] : null), 'widget');
            echo "                                               
                                        ";
            // line 179
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["smoking"]) ? $context["smoking"] : null), 'label');
            echo "
                                     </label>&nbsp;
                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smoking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                        </div>
                    </div>
                    
                </div>                 
            </div>
            <br>
            <div class=\"content-form-page padding-top-20\" style=\"display: none;\">
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label ar\">صورتك الشخصية</label>
                    <div class=\"col-lg-8\">
                        <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                            <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
                                <img src=\"";
        // line 194
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "image") == null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/img/no-image.jpg"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/account_info/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "image"), "html", null, true);
        }
        echo "\" alt=\"\"/>
                            </div>
                            <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div>
                            <div>
                                <span class=\"btn default btn-file\">
                                    <span class=\"fileinput-new ar\">
                                        اختر صورتك الشخصية
                                    </span>
                                    <span class=\"fileinput-exists ar\">
                                        تغيير 
                                    </span>
                                    ";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image"), 'widget');
        echo "
                                </span>
                                <a href=\"#\" class=\"btn red fileinput-exists ar\" data-dismiss=\"fileinput\">
                                    حذف
                                </a>
                            </div>
                        </div>
                        <div class=\"clearfix margin-top-10\">
                            <div class=\"label label-danger ar\">
                                ملحوظة
                            </div>
                            <br>
                            <div class=\"ar padding-top-10\">
                                من فضلك تاكد من ان وجهك يمكن التعرف عليه (بدون نظارات) للصور الخاصة بك لتتم الموافقة عليها.
                                <br>
                                 تأكد من تحميل ملف PNG أو JPG. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"content-form-page padding-top-20\">
                ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                <div class=\"form-group\">
                    <div class=\"col-lg-8 col-md-offset-2\">
                        <button class=\"btn btn-primary pull-right ar\" style=\"margin-left: 15px;\" type=\"submit\">
                            تحديث
                        </button>
                    </div>
                </div>             
            </div>
                
           
            </form>



        
    </div>
</div>    
";
    }

    // line 247
    public function block_page_level_styles($context, array $blocks = array())
    {
        // line 248
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/css/smoothness/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/rateit/src/rateit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">         
    <link href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datepicker/css/datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">             
    <link href=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 259
    public function block_page_level_script($context, array $blocks = array())
    {
        // line 260
        echo "    
    
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/admin/pages/scripts/components-pickers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
    <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>                   
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>

    
";
    }

    // line 273
    public function block_documentReady($context, array $blocks = array())
    {
        // line 274
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
        return "FrontendBundle:AccountInfo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 274,  482 => 273,  474 => 268,  470 => 267,  466 => 266,  462 => 265,  458 => 264,  454 => 263,  450 => 262,  446 => 260,  443 => 259,  437 => 256,  433 => 255,  429 => 254,  425 => 253,  421 => 252,  417 => 251,  413 => 250,  409 => 249,  404 => 248,  401 => 247,  378 => 227,  353 => 205,  334 => 194,  320 => 182,  311 => 179,  307 => 178,  304 => 177,  301 => 176,  297 => 175,  286 => 166,  277 => 164,  273 => 163,  270 => 162,  267 => 161,  263 => 160,  252 => 151,  243 => 149,  239 => 148,  236 => 147,  233 => 146,  229 => 145,  212 => 130,  210 => 128,  197 => 117,  195 => 115,  182 => 104,  180 => 102,  164 => 88,  162 => 86,  149 => 75,  147 => 73,  134 => 62,  132 => 60,  119 => 49,  117 => 47,  104 => 36,  102 => 34,  93 => 27,  84 => 24,  81 => 23,  77 => 22,  72 => 19,  66 => 17,  62 => 16,  57 => 14,  50 => 12,  43 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
