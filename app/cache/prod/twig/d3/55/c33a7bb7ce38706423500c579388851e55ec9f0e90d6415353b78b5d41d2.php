<?php

/* FrontendBundle:Widgets:profileMenu.html.twig */
class __TwigTemplate_d355c33a7bb7ce38706423500c579388851e55ec9f0e90d6415353b78b5d41d2 extends Twig_Template
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
        echo "<ul class=\"list-group margin-bottom-25 sidebar-menu\">
    <li class=\"list-group-item clearfix ";
        // line 2
        if (("fos_user_profile_show" == (isset($context["route"]) ? $context["route"] : null))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" class=\"ar\"><i class=\"fa fa-angle-right\"></i> الرئيسية</a></li>
    <li class=\"list-group-item clearfix ";
        // line 3
        if ((("fos_user_profile_edit" == (isset($context["route"]) ? $context["route"] : null)) || ("fos_user_change_password" == (isset($context["route"]) ? $context["route"] : null)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"ar\"><i class=\"fa fa-angle-right\"></i> بيانات حسابك</a></li>            
    <li class=\"list-group-item clearfix ";
        // line 4
        if (("account-info-edit" == (isset($context["route"]) ? $context["route"] : null))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("account-info-edit");
        echo "\" class=\"ar\"><i class=\"fa fa-angle-right\"></i> بيانات شخصية</a></li>            
</ul>   ";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Widgets:profileMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  30 => 3,  22 => 2,  19 => 1,  197 => 108,  194 => 107,  188 => 104,  184 => 103,  180 => 102,  176 => 101,  172 => 100,  168 => 99,  164 => 97,  161 => 96,  155 => 93,  151 => 92,  147 => 91,  143 => 90,  139 => 89,  135 => 88,  130 => 87,  127 => 86,  58 => 20,  44 => 9,  40 => 8,  34 => 4,  31 => 3,);
    }
}
