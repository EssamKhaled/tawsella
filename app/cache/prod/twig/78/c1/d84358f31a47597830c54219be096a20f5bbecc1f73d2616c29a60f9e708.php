<?php

/* FrontendBundle::landingLayout.html.twig */
class __TwigTemplate_78c1d84358f31a47597830c54219be096a20f5bbecc1f73d2616c29a60f9e708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::base.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'layoutInputs' => array($this, 'block_layoutInputs'),
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
        echo "<div class=\"row margin-bottom-40 \">
    <div class=\"col-md-4 col-sm-4\">
        ";
        // line 6
        $this->displayBlock('layoutInputs', $context, $blocks);
        // line 7
        echo "    </div>
    <div class=\"col-md-8 col-sm-8\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-12\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/assets/frontend/pages/img/car-share.png"), "html", null, true);
        echo "\" alt=\"Tawsella\" style=\"width:210px;\" class=\"responsive\">\t
                <br><br>\t\t\t  \t
            </div>
            <div class=\"col-md-9 col-sm-12\">
                <h1 class=\"txt-color-orange ar\">
                    محتاج توصيله ؟\t\t\t\t\t\t\t
                </h1>
                <p class=\"ar\">
                    تعبت من كتر المواصلات وانت رايح شغلك او مشوارك؟
                </p>
                <p class=\"ar\">
                    ولا تعبت من السواقة وزهقت من الزحام ودماغك تعبت من التفكير والتركيز في الطريق                          
                </p>
                <p class=\"ar\">
                    ولا عندك عربية ومصاريفها كترت عليك وعندك كراسي زيادة؟                          
                </p>
                <p class=\"ar\">
                    قدم توصيله وخد اشخاص موثوق فيهم يشاركوك الطريق, او دور علي توصيله وهتلاقي اشخاص رايحين نفس مشوارك
                </p>
            </div>\t\t\t\t  
        </div>
    </div>
</div>
<div class=\"row service-box\">
    <div class=\"col-md-4 col-sm-4\">
        <div class=\"service-box-heading\">
            <em><i class=\"fa fa-dollar blue\"></i></em>
            <span class=\"ar\">
                وفر فلوسك ووقتك
            </span>
        </div>
        <p class=\"ar\">
            سواء كنت صاحب عربية او عايز تروح مشوار وبتركب اكتر من مواصلة
            <br>
            توصيله هتوفرلك فلوسك ووقتك وجهدك لانها ارخص واسرع من الاتوبيس والقطار والميكروباص                  
        </p>
    </div>
    <div class=\"col-md-4 col-sm-4\">
        <div class=\"service-box-heading\">
            <em><i class=\"fa fa-smile-o red\"></i></em>
            <span class=\"ar\">
                استمتع مع كل توصيله              \t
            </span>
        </div>
        <p class=\"ar\">
            هتتعرف علي اشخاص جدد من خلال توصيله وممكن تلاقي من بينهم اصحاب بجد
            <br>
            واكيد بدل ما بتكون لوحدك كل يوم هتكون سعيد لما تلاقي حد معاك بيشاركك المشوار
        </p>
    </div>
    <div class=\"col-md-4 col-sm-4\">
        <div class=\"service-box-heading\">
            <em><i class=\"fa fa-support green\"></i></em>
            <span class=\"ar\">
                شارك في دعم الاقتصاد
            </span>
        </div>
        <p class=\"ar\">
            توصيله بتساهم في دعم الاقتصاد المصري من خلال توفير جزء من دعم الحكومة للبنزين نتيجة تقليل عدد العربيات في الطريق وكمية العوادم المنبعثة من العربيات وتصبح بيئة نظيفة بدون تلوث
        </p>
    </div>
</div>
";
    }

    // line 6
    public function block_layoutInputs($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontendBundle::landingLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 6,  44 => 11,  38 => 7,  36 => 6,  32 => 4,  29 => 3,  64 => 30,  48 => 17,  31 => 4,  28 => 3,);
    }
}
