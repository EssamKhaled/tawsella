<?php

/* FrontendBundle:Home:index.html.twig */
class __TwigTemplate_fea597523a512c5c0c72a46d0d4c20d6109986ddc59d01e27666df18fd05bec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::landingLayout.html.twig");

        $this->blocks = array(
            'layoutInputs' => array($this, 'block_layoutInputs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle::landingLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_layoutInputs($context, array $blocks = array())
    {
        // line 4
        echo "<form role=\"form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("offer-ride-search-result");
        echo "\" method=\"get\" >
    <h4 class=\"ar\">
        <i class=\"fa fa-search\"></i>&nbsp;
        ابحث عن توصيله
    </h4>    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"input-group ar\" style=\"padding-bottom:10px\">
                <span class=\"input-group-addon\" style=\"background:#fff;\">
                    <i class=\"fa fa-map-marker\" style=\"position:initial;color:green\"></i>
                </span>
                <select name=\"rideFrom\" class=\"form-control select2me ar\" data-placeholder=\"من\">
                    <option class=\"ar\" value=\" \">من</option>
                    ";
        // line 17
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Widgets:getCitiesWidget"));
        echo "
                </select>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"input-group\" style=\"padding-bottom:10px\">
                <span class=\"input-group-addon\" style=\"background:#fff;\">
                    <i class=\"fa fa-map-marker\" style=\"position:initial;color:#e6400c\"></i>
                </span>
                <select name=\"rideTo\" class=\"form-control select2me ar\" data-placeholder=\"الي\">
                    <option class=\"ar\" value=\" \">الي</option>
                    ";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Widgets:getCitiesWidget"));
        echo "
                </select>
            </div>
        </div>            
    </div>\t\t\t\t
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"input-group move_left\">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-primary\" type=\"submit\">

                        <span class=\"ar\">
                            بحث\t\t\t\t\t\t\t\t\t
                        </span>
                        <li class=\"fa fa-search\"></li>\t\t\t\t\t\t\t\t
                    </button>
                </span>
            </div>\t\t\t
        </div>\t\t
    </div>
    <!-- /.row -->
</form>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 30,  48 => 17,  31 => 4,  28 => 3,);
    }
}
