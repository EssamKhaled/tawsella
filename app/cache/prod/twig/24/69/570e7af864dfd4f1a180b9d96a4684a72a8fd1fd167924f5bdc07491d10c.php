<?php

/* FrontendBundle::base.html.twig */
class __TwigTemplate_2469570e7af864dfd4f1a180b9d96a4684a72a8fd1fd167924f5bdc07491d10c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LayoutBundle:Frontend:mainLayout.html.twig");

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'logout' => array($this, 'block_logout'),
            'footer' => array($this, 'block_footer'),
            'searchBox' => array($this, 'block_searchBox'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LayoutBundle:Frontend:mainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        echo " 
    ";
        // line 4
        if ((!$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"))) {
            echo "       
        <li ";
            // line 5
            if (twig_in_filter("/login", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"))) {
                echo "class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"ar\">
                دخول \t\t\t\t  
            </a>
        </li>
        <li ";
            // line 10
            if (twig_in_filter("/register", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"))) {
                echo "class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"ar\">
                مستخدم جديد  \t\t\t\t  
            </a>
        </li> 
    ";
        } else {
            // line 16
            echo "        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" href=\"#\">
                ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "html", null, true);
            echo "            
                <span class=\"fa fa-angle-down\"></span>
            </a>

            <!-- BEGIN DROPDOWN MENU -->
            <ul class=\"dropdown-menu\">
                <li ";
            // line 24
            if (twig_in_filter("/my-rides", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"))) {
                echo "class=\"active\"";
            }
            echo ">
                    <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("my-rides");
            echo "\" class=\"ar\" style=\"font-size:10px!important\">
توصيلاتي المقدمة                    
                    </a>                
                </li>
                <li ";
            // line 29
            if (twig_in_filter("/profile", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"))) {
                echo "class=\"active\"";
            }
            echo ">
                    <a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\" class=\"ar\" style=\"font-size:10px!important\">
الملف الشخصي                        
                    </a>                 
                </li>
                <li>
                    <a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"ar\" style=\"font-size:10px!important\">
                        تسجل الخروج
                    </a>                
                </li>
            </ul>
            <!-- END DROPDOWN MENU -->
        </li>        
    ";
        }
        // line 43
        echo "    <li ";
        if (twig_in_filter("/offer-ride/new/", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"))) {
            echo "class=\"active\"";
        }
        echo ">
        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("offer-ride");
        echo "\" class=\"ar\">
            قدم توصيله\t\t\t\t
        </a>
    </li>
    <li ";
        // line 48
        if (twig_in_filter("/offer-ride/available/", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"))) {
            echo "class=\"active\"";
        }
        echo ">
        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("offer-ride-available");
        echo "\" class=\"ar\">
            التوصيلات المتاحة\t\t\t\t
        </a>
    </li>    
";
    }

    // line 55
    public function block_logout($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user")) {
            // line 57
            echo "        <li class=\"langs-block\">
            <a href=\"javascript:void(0);\" class=\"current\">
                ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "html", null, true);
            echo "            
                <span class=\"fa fa-angle-down\"></span>                
            </a>
            <div class=\"langs-block-others-wrapper\">
                <div class=\"langs-block-others\">
                    <a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("my-rides");
            echo "\" class=\"ar ";
            if (twig_in_filter("/my-rides", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"))) {
                echo "txt-color-orange";
            }
            echo "\" style=\"font-size:10px!important\">
توصيلاتي المقدمة                    
                    </a>
                    <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\" class=\"ar ";
            if (twig_in_filter("/profile", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"))) {
                echo "txt-color-orange";
            }
            echo "\" style=\"font-size:10px!important\">
الملف الشخصي                        
                    </a>                        
                    <a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"ar\" style=\"font-size:10px!important\">
                        تسجل الخروج
                    </a>
                </div>
            </div>
        </li>           
    ";
        }
        // line 76
        echo "    
";
    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        echo "        
    <div class=\"footer footer-light\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- BEGIN COPYRIGHT -->
                <div class=\"col-md-6 col-sm-6\">
                    ";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " © Tawsella.com. ALL Rights Reserved
                </div>
                <!-- END COPYRIGHT -->
                <!-- BEGIN PAYMENTS -->
                <div class=\"col-md-6 col-sm-6\">
                    <ul class=\"list-unstyled list-inline pull-right footer-social\" style=\"padding-bottom: 0px;\">                      
                        <li><a href=\"https://www.facebook.com/tawsella\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"\"><i class=\"fa fa-google-plus\"></i></a></li>\t
                        <li><a href=\"\"><i class=\"fa fa-linkedin\"></i></a></li>
                    </ul> 
                    <ul class=\"list-unstyled list-inline pull-right footer-social\">
                        <li>
                            <a href=\"\" class=\"ar ar-11\">
                                شروط الإستخدام\t\t\t\t\t\t\t\t
                            </a>
                        </li>
                        <li>
                            <a href=\"\" class=\"ar ar-11\">
                                الاسئلة الشائعة\t\t\t\t\t\t\t\t\t
                            </a>
                        </li>
                        <li class=\"footer-social-sep\">
                            <a href=\"\" class=\"ar ar-11\">
                                حول الموقع\t\t\t\t\t\t\t\t
                            </a>
                        </li> 
                    </ul>                      
                </div>
                <!-- END PAYMENTS -->
            </div>
        </div>
    </div>    
";
    }

    // line 120
    public function block_searchBox($context, array $blocks = array())
    {
        // line 121
        echo "    
        
    <div class=\"search-box\" style=\"width:315px;\">
        <form role=\"form\" action=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("offer-ride-search-result");
        echo "\" method=\"get\" >
            <div class=\"input-group ar\" style=\"padding-bottom:10px\">
                <span class=\"input-group-addon\" style=\"background:#fff;\">
                    <i class=\"fa fa-map-marker\" style=\"position:initial;color:green\"></i>
                </span>
                <select name=\"rideFrom\" class=\"form-control select2me ar\" data-placeholder=\"من\">
                    <option class=\"ar\" value=\" \">من</option>
                    ";
        // line 131
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Widgets:getCitiesWidget"));
        echo "
                </select>
            </div>\t
            <div class=\"input-group\" style=\"padding-bottom:10px\">
                <span class=\"input-group-addon\" style=\"background:#fff;\">
                    <i class=\"fa fa-map-marker\" style=\"position:initial;color:#e6400c\"></i>
                </span>
                <select name=\"rideTo\" class=\"form-control select2me ar\" data-placeholder=\"الي\">
                    <option class=\"ar\" value=\" \">الي</option>
                    ";
        // line 140
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Widgets:getCitiesWidget"));
        echo "
                </select>
            </div>\t\t\t\t\t\t\t\t\t\t
            <div class=\"input-group move_left\">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-primary\" type=\"submit\">

                        <span class=\"ar\">
                            بحث\t\t\t\t\t\t\t\t\t
                        </span>
                        <li class=\"fa fa-search\"></li>\t\t\t\t\t\t\t\t
                    </button>
                </span>
            </div>\t\t\t\t  \t\t\t  
        </form>
    </div>      
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 140,  266 => 131,  256 => 124,  251 => 121,  210 => 85,  200 => 79,  195 => 76,  185 => 70,  175 => 67,  165 => 64,  157 => 59,  153 => 57,  150 => 56,  147 => 55,  138 => 49,  132 => 48,  125 => 44,  118 => 43,  107 => 35,  99 => 30,  93 => 29,  86 => 25,  71 => 18,  67 => 16,  59 => 11,  53 => 10,  46 => 6,  40 => 5,  36 => 4,  377 => 211,  374 => 210,  368 => 207,  364 => 206,  360 => 205,  356 => 204,  352 => 203,  348 => 202,  344 => 200,  341 => 199,  335 => 196,  331 => 195,  327 => 194,  323 => 193,  319 => 192,  315 => 191,  310 => 190,  307 => 189,  291 => 176,  282 => 170,  272 => 162,  270 => 159,  258 => 150,  248 => 120,  246 => 140,  235 => 131,  233 => 129,  221 => 119,  219 => 116,  194 => 93,  192 => 90,  180 => 80,  178 => 78,  166 => 68,  164 => 66,  151 => 55,  149 => 53,  136 => 42,  127 => 40,  123 => 39,  120 => 38,  117 => 37,  113 => 36,  105 => 31,  102 => 30,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  57 => 18,  55 => 17,  43 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
