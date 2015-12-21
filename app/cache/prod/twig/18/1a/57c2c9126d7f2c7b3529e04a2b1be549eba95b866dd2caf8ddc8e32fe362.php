<?php

/* LayoutBundle:Frontend:mainLayout.html.twig */
class __TwigTemplate_181a57c2c9126d7f2c7b3529e04a2b1be549eba95b866dd2caf8ddc8e32fe362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'html_tags' => array($this, 'block_html_tags'),
            'metas' => array($this, 'block_metas'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'page_level_styles' => array($this, 'block_page_level_styles'),
            'body_tags' => array($this, 'block_body_tags'),
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
            'searchBox' => array($this, 'block_searchBox'),
            'container' => array($this, 'block_container'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'page_level_script' => array($this, 'block_page_level_script'),
            'documentReady' => array($this, 'block_documentReady'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_html_tags($context, array $blocks = array())
    {
        // line 6
        echo "    <!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
    <!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang=\"en\"><!--<![
    <!--<![endif]-->
";
    }

    // line 13
    public function block_metas($context, array $blocks = array())
    {
        echo "  
    <meta charset=\"utf-8\" />
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <meta content=\"قدم توصيله وخد اشخاص موثوق فيهم يشاركوك الطريق, او دور علي توصيله وهتلاقي اشخاص رايحين نفس مشوارك\" name=\"description\">
    <meta content=\"توصيله,car share,car pooling,car sharing\" name=\"keywords\">
    <meta content=\"Essam-Khaled\" name=\"author\">

    <meta property=\"og:site_name\" content=\"Tawsella\">
    <meta property=\"og:title\" content=\"استمتع مع كل توصيله\">
    <meta property=\"og:description\" content=\"قدم توصيله وخد اشخاص موثوق فيهم يشاركوك الطريق, او دور علي توصيله وهتلاقي اشخاص رايحين نفس مشوارك\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:image\" content=\"http://tawsella.com/bundles/layout/assets/frontend/layout/img/logos/logo-shop-orange.jpg\"><!-- link to image for socio -->
    <meta property=\"og:url\" content=\"http://tawsella.com/\">
";
    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        echo " Tawsella ";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 31
        echo "
    <!-- Global styles START --> 
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Global styles END --> 
   
    <!-- Page level plugin styles START -->
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-select/bootstrap-select-rtl.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/select2/select2-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">    
    ";
        // line 40
        $this->displayBlock('page_level_styles', $context, $blocks);
        // line 41
        echo "    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/css/components-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/css/plugins-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>  
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/layout/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/css/style-shop.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/css/style-layer-slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/layout/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/layout/css/themes/orange.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style-color\">
    <link href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/layout/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Theme styles END -->
";
    }

    // line 40
    public function block_page_level_styles($context, array $blocks = array())
    {
    }

    // line 55
    public function block_body_tags($context, array $blocks = array())
    {
        echo "class=\"ecommerce\"";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        echo "   
  <!-- BEGIN HEADER -->
  <div class=\"header\">
      <div class=\"container\">
          <a class=\"site-logo\" href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/layout/img/logos/logo-shop-orange.jpg"), "html", null, true);
        echo "\" alt=\"Tawsella\"></a>

          <a href=\"javascript:void(0);\" class=\"mobi-toggler\"><i class=\"fa fa-bars\"></i></a>

          <!-- BEGIN CART -->
          <!--END CART -->

          <!-- BEGIN NAVIGATION -->
          <div class=\"header-navigation\">
              <ul>
                  ";
        // line 71
        $this->displayBlock('nav', $context, $blocks);
        // line 72
        echo "
                  <!-- BEGIN TOP SEARCH -->
                  <li class=\"menu-search\">
                      <span class=\"sep\"></span>
                      <i class=\"fa fa-search search-btn\"></i>
                      ";
        // line 77
        $this->displayBlock('searchBox', $context, $blocks);
        // line 78
        echo "                  </li>
                  <!-- END TOP SEARCH -->
              </ul>
          </div>
          <!-- END NAVIGATION -->
      </div>
  </div>
  <!-- Header END -->

  <div class=\"main\">
      <div class=\"container\">
          ";
        // line 89
        $this->displayBlock('container', $context, $blocks);
        // line 90
        echo "      </div>
  </div>
  ";
        // line 92
        $this->displayBlock('footer', $context, $blocks);
        // line 93
        echo "
";
    }

    // line 71
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 77
    public function block_searchBox($context, array $blocks = array())
    {
    }

    // line 89
    public function block_container($context, array $blocks = array())
    {
    }

    // line 92
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        echo "       

    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>  
    <![endif]-->
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-1.11.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>        
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>           
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/layout/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/select2/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    ";
        // line 116
        $this->displayBlock('page_level_script', $context, $blocks);
        // line 117
        echo "    <!-- END PAGE LEVEL JAVASCRIPTS -->
";
    }

    // line 116
    public function block_page_level_script($context, array $blocks = array())
    {
    }

    // line 120
    public function block_documentReady($context, array $blocks = array())
    {
        // line 121
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            Metronic.init();
            Layout.init();      
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "LayoutBundle:Frontend:mainLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 120,  299 => 116,  294 => 117,  292 => 116,  287 => 114,  283 => 113,  279 => 112,  275 => 111,  271 => 110,  264 => 106,  260 => 105,  252 => 103,  247 => 101,  239 => 97,  228 => 89,  223 => 77,  217 => 71,  212 => 93,  206 => 90,  204 => 89,  191 => 78,  189 => 77,  182 => 72,  146 => 40,  139 => 51,  135 => 50,  131 => 49,  119 => 46,  115 => 45,  111 => 44,  106 => 41,  104 => 40,  100 => 39,  89 => 34,  85 => 33,  81 => 31,  78 => 30,  44 => 6,  41 => 5,  278 => 140,  266 => 131,  256 => 104,  251 => 121,  210 => 92,  200 => 79,  195 => 76,  185 => 70,  175 => 67,  165 => 61,  157 => 57,  153 => 57,  150 => 56,  147 => 55,  138 => 49,  132 => 48,  125 => 44,  118 => 43,  107 => 35,  99 => 30,  93 => 29,  86 => 25,  71 => 18,  67 => 16,  59 => 11,  53 => 13,  46 => 6,  40 => 5,  36 => 4,  377 => 211,  374 => 210,  368 => 207,  364 => 206,  360 => 205,  356 => 204,  352 => 203,  348 => 202,  344 => 200,  341 => 199,  335 => 196,  331 => 195,  327 => 194,  323 => 193,  319 => 192,  315 => 191,  310 => 190,  307 => 121,  291 => 176,  282 => 170,  272 => 162,  270 => 159,  258 => 150,  248 => 120,  246 => 140,  235 => 131,  233 => 92,  221 => 119,  219 => 116,  194 => 93,  192 => 90,  180 => 71,  178 => 78,  166 => 68,  164 => 66,  151 => 55,  149 => 53,  136 => 42,  127 => 48,  123 => 47,  120 => 38,  117 => 37,  113 => 36,  105 => 31,  102 => 30,  96 => 38,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 28,  68 => 21,  64 => 20,  60 => 19,  57 => 18,  55 => 17,  43 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
