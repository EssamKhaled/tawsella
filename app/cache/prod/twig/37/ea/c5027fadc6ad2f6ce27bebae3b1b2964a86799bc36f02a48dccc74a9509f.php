<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_37eac5027fadc6ad2f6ce27bebae3b1b2964a86799bc36f02a48dccc74a9509f extends Twig_Template
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
        echo "
";
        // line 6
        echo "<form role=\"form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">   
    <h4 class=\"ar\">
        <i class=\"fa fa-lock\"></i>&nbsp;
        الدخول الى حسابك الشخصى            
    </h4>
    ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 12
            echo "        <div class=\"note note-danger\">
            <button class=\"close\" data-dismiss=\"alert\"></button>
            <span class=\"ar\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</span>
        </div>
    ";
        }
        // line 16
        echo "         
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />        
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"input-group\" style=\"padding-bottom:10px\">
                <input type=\"text\" name=\"_username\" autocomplete=\"off\" class=\"form-control ar\" placeholder=\"البريد الالكتروني\">
                <span class=\"input-group-addon\" style=\"background:#fff;\">
                    <i class=\"fa fa-user\"></i>
                </span>
            </div>
        </div>
    </div>
    <div class=\"row\">  
        <div class=\"col-md-12\">
            <div class=\"input-group\" style=\"padding-bottom:10px\">
                <input type=\"password\" name=\"_password\" autocomplete=\"off\" class=\"form-control ar\" placeholder=\"كلمة المرور\">
                <span class=\"input-group-addon\" style=\"background:#fff;\">
                    <i class=\"fa fa-lock\"></i>
                </span>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"input-group move_left\">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" type=\"submit\">
                        <span class=\"ar\">
                            دخول
                        </span>\t\t\t\t\t\t\t\t
                    </button>
                </span>
            </div>\t\t\t
        </div>\t\t
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  55 => 16,  49 => 14,  45 => 12,  43 => 11,  34 => 6,  31 => 4,  28 => 3,);
    }
}
