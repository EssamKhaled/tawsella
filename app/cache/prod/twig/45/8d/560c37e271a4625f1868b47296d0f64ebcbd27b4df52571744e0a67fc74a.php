<?php

/* FrontendBundle:Widgets:cities.html.twig */
class __TwigTemplate_458d560c37e271a4625f1868b47296d0f64ebcbd27b4df52571744e0a67fc74a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 2
            echo "    <option class=\"ar\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nameAr"), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Widgets:cities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,  101 => 11,  91 => 9,  74 => 4,  62 => 13,  56 => 11,  54 => 10,  50 => 9,  42 => 6,  37 => 5,  35 => 4,  32 => 3,  30 => 2,  27 => 1,  304 => 120,  299 => 116,  294 => 117,  292 => 116,  287 => 114,  283 => 113,  279 => 112,  275 => 111,  271 => 110,  264 => 106,  260 => 105,  252 => 103,  247 => 101,  239 => 97,  228 => 89,  223 => 77,  217 => 71,  212 => 93,  206 => 90,  204 => 89,  191 => 78,  189 => 77,  182 => 72,  146 => 40,  139 => 51,  135 => 50,  131 => 49,  119 => 46,  115 => 45,  111 => 44,  106 => 12,  104 => 40,  100 => 39,  89 => 34,  85 => 33,  81 => 31,  78 => 30,  44 => 7,  41 => 5,  278 => 140,  266 => 131,  256 => 104,  251 => 121,  210 => 92,  200 => 79,  195 => 76,  185 => 70,  175 => 67,  165 => 61,  157 => 57,  153 => 57,  150 => 56,  147 => 55,  138 => 49,  132 => 48,  125 => 44,  118 => 43,  107 => 35,  99 => 30,  93 => 29,  86 => 6,  71 => 18,  67 => 16,  59 => 12,  53 => 13,  46 => 6,  40 => 5,  36 => 4,  377 => 211,  374 => 210,  368 => 207,  364 => 206,  360 => 205,  356 => 204,  352 => 203,  348 => 202,  344 => 200,  341 => 199,  335 => 196,  331 => 195,  327 => 194,  323 => 193,  319 => 192,  315 => 191,  310 => 190,  307 => 121,  291 => 176,  282 => 170,  272 => 162,  270 => 159,  258 => 150,  248 => 120,  246 => 140,  235 => 131,  233 => 92,  221 => 119,  219 => 116,  194 => 93,  192 => 90,  180 => 71,  178 => 78,  166 => 68,  164 => 66,  151 => 55,  149 => 53,  136 => 42,  127 => 48,  123 => 47,  120 => 38,  117 => 37,  113 => 36,  105 => 31,  102 => 30,  96 => 10,  92 => 27,  88 => 26,  84 => 25,  80 => 5,  76 => 23,  72 => 28,  68 => 2,  64 => 20,  60 => 19,  57 => 18,  55 => 17,  43 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
