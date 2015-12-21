<?php

/* ::base.html.twig */
class __TwigTemplate_8e858a322ae446c1fa02a9bdc0339a0d7a710070ed6a9db5e804167f5ab49045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_tags' => array($this, 'block_html_tags'),
            'metas' => array($this, 'block_metas'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_tags' => array($this, 'block_body_tags'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'documentReady' => array($this, 'block_documentReady'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $this->displayBlock('html_tags', $context, $blocks);
        // line 3
        echo "    <head>
        ";
        // line 4
        $this->displayBlock('metas', $context, $blocks);
        // line 5
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body ";
        // line 9
        $this->displayBlock('body_tags', $context, $blocks);
        echo ">
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('documentReady', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
    }

    // line 2
    public function block_html_tags($context, array $blocks = array())
    {
        echo "<html>";
    }

    // line 4
    public function block_metas($context, array $blocks = array())
    {
        echo "<meta charset=\"UTF-8\" />";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 9
    public function block_body_tags($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 12
    public function block_documentReady($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 11,  91 => 9,  74 => 4,  62 => 13,  56 => 11,  54 => 10,  50 => 9,  42 => 6,  37 => 5,  35 => 4,  32 => 3,  30 => 2,  27 => 1,  304 => 120,  299 => 116,  294 => 117,  292 => 116,  287 => 114,  283 => 113,  279 => 112,  275 => 111,  271 => 110,  264 => 106,  260 => 105,  252 => 103,  247 => 101,  239 => 97,  228 => 89,  223 => 77,  217 => 71,  212 => 93,  206 => 90,  204 => 89,  191 => 78,  189 => 77,  182 => 72,  146 => 40,  139 => 51,  135 => 50,  131 => 49,  119 => 46,  115 => 45,  111 => 44,  106 => 12,  104 => 40,  100 => 39,  89 => 34,  85 => 33,  81 => 31,  78 => 30,  44 => 7,  41 => 5,  278 => 140,  266 => 131,  256 => 104,  251 => 121,  210 => 92,  200 => 79,  195 => 76,  185 => 70,  175 => 67,  165 => 61,  157 => 57,  153 => 57,  150 => 56,  147 => 55,  138 => 49,  132 => 48,  125 => 44,  118 => 43,  107 => 35,  99 => 30,  93 => 29,  86 => 6,  71 => 18,  67 => 16,  59 => 12,  53 => 13,  46 => 6,  40 => 5,  36 => 4,  377 => 211,  374 => 210,  368 => 207,  364 => 206,  360 => 205,  356 => 204,  352 => 203,  348 => 202,  344 => 200,  341 => 199,  335 => 196,  331 => 195,  327 => 194,  323 => 193,  319 => 192,  315 => 191,  310 => 190,  307 => 121,  291 => 176,  282 => 170,  272 => 162,  270 => 159,  258 => 150,  248 => 120,  246 => 140,  235 => 131,  233 => 92,  221 => 119,  219 => 116,  194 => 93,  192 => 90,  180 => 71,  178 => 78,  166 => 68,  164 => 66,  151 => 55,  149 => 53,  136 => 42,  127 => 48,  123 => 47,  120 => 38,  117 => 37,  113 => 36,  105 => 31,  102 => 30,  96 => 10,  92 => 27,  88 => 26,  84 => 25,  80 => 5,  76 => 23,  72 => 28,  68 => 2,  64 => 20,  60 => 19,  57 => 18,  55 => 17,  43 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
