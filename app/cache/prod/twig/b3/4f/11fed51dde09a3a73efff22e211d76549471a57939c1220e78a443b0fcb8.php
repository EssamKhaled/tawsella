<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b34f11fed51dde09a3a73efff22e211d76549471a57939c1220e78a443b0fcb8 extends Twig_Template
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
        echo "    <div class=\"note note-success\">
        <h4 class=\"ar\">
            <i class=\"fa fa-check\"></i>&nbsp;
            شكرا لك علي استخدام توصيله
        </h4>
    </div> 
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
