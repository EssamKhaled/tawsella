<?php

/* FrontendBundle:MyRides:index.html.twig */
class __TwigTemplate_322023c2f55407976617055f4866c5892626e2ca41df1e2f1bb51afe8bf8de8c extends Twig_Template
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
        echo "<div class=\"col-md-12 col-sm-12\">
    <h1 class=\"ar\">
        توصيلاتي المقدمة                    
    </h1>
    <div class=\"goods-page\">
        <div class=\"goods-data clearfix\">
            <div class=\"table-wrapper-responsive\">
                <table summary=\"Shopping cart\">
                    <tbody>
                        <tr>
                            <th class=\"goods-page-image\">#</th>
                            <th class=\"goods-page-description ar\">الوصف</th>
                            <th class=\"goods-page-quantity ar\">مناطق فى طريقك</th>
                            <th class=\"goods-page-ref-no ar\">مقاعد متاحة</th>
                            <th class=\"goods-page-price ar\">اجرة الراكب</th>
                        </tr>
                        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "                        <tr>
                            <td class=\"goods-page-image\">
                                ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "
                            </td>
                            <td class=\"goods-page-description\" style=\"width:40%\">
                                <h3 class=\"txt-color-orange\">
                                    <span class=\"ar\">من</span>
                                    <span class=\"ar\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "rideFrom"), "nameAr"), "html", null, true);
            echo "</span> |
                                    <span class=\"ar\">الى</span>
                                    <span class=\"ar\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "rideTo"), "nameAr"), "html", null, true);
            echo "</span>                                     
                                </h3>
                                <p>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "departureDate"), "html", null, true);
            echo "</p>
                                <em class=\"ar\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "notes"), "html", null, true);
            echo "</em>
                            </td>
                            <td class=\"goods-page-quantity\">
                                <span class=\"ar\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "stopOver"), "html", null, true);
            echo "</span>
                            </td>
                            <td class=\"goods-page-ref-no\">
                                ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "availableSeats"), "html", null, true);
            echo "
                                <span class=\"ar\">مقعد</span>
                            </td>
                            <td class=\"goods-page-price\">
                                <strong>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price"), "html", null, true);
            echo "</strong>
                                <span class=\"ar\"> جنيه للفرد</span>
                            </td>
                            <td>
                                <a href=\"#basic\" data-toggle=\"modal\" class=\"btn red ar pull-right\" style=\"margin-right:10px;\">حذف</a>
                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offer-ride-edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn blue ar pull-right\">تعديل</a>
                      
                                <div class=\"modal fade\" id=\"basic\" tabindex=\"-1\" role=\"basic\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-body ar\">
                                                     هل انت متاكد انك تود حذف هذه التوصيله؟
                                            </div>
                                            <div class=\"modal-footer\">
                                                
                                                <a data-dismiss=\"modal\" class=\"btn red ar pull-right\" style=\"margin-right: 10px;\">لا</a>                                                
                                                <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offer-ride-delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn blue ar pull-right\" style=\"color: #fff!important\">نعم</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        
                    </tbody></table>
            </div>

        </div>
    </div>
</div>\t
";
    }

    // line 78
    public function block_page_level_styles($context, array $blocks = array())
    {
        // line 79
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/css/smoothness/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/rateit/src/rateit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput-rtl.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">         
";
    }

    // line 88
    public function block_page_level_script($context, array $blocks = array())
    {
        // line 89
        echo "

<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/admin/pages/scripts/components-pickers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>               
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>                   
";
    }

    // line 99
    public function block_documentReady($context, array $blocks = array())
    {
        // line 100
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        Layout.init(); // init current layout
        Metronic.init();
        ComponentsPickers.init();
        Layout.initUniform();
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:MyRides:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 100,  238 => 99,  232 => 96,  228 => 95,  224 => 94,  220 => 93,  216 => 92,  212 => 91,  208 => 89,  205 => 88,  199 => 85,  195 => 84,  191 => 83,  187 => 82,  183 => 81,  179 => 80,  174 => 79,  171 => 78,  160 => 69,  136 => 59,  122 => 48,  114 => 43,  107 => 39,  101 => 36,  95 => 33,  91 => 32,  86 => 30,  81 => 28,  73 => 23,  69 => 21,  52 => 20,  34 => 4,  31 => 3,);
    }
}
