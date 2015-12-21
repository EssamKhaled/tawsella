<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2cfbb2ee9d7e5ce83c6845382c35c85f1a7a213c0b0287efbad1be2061eea0f9 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"post\">   
    <h4 class=\"ar\">
        <i class=\"fa fa-lock\"></i>&nbsp;
        انشاء حساب جديد
    </h4>    
            ";
        // line 9
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors')) {
            // line 10
            echo "    <div class=\"note note-danger\">
        <button class=\"close\" data-dismiss=\"alert\"></button>
        <span class=\"ar\">";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "</span>
    </div>
            ";
        }
        // line 14
        echo "                 

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"input-group\" style=\"padding-bottom:10px\">                        
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username"), 'widget', array("attr" => array("class" => "form-control ar", "placeholder" => "اسم المستخدم")));
        // line 22
        echo "                            

                    <span class=\"input-group-addon\" style=\"background:#fff;\">
                        <i class=\"fa fa-user\"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"input-group\" style=\"padding-bottom:10px\">                        
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget', array("attr" => array("class" => "form-control ar", "placeholder" => "البريد الالكتروني")));
        // line 36
        echo "                            

                        <span class=\"input-group-addon\" style=\"background:#fff;\">
                            <i class=\"fa fa-envelope\"></i>
                        </span>
                    </div>
                </div>
            </div>                
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"input-group\" style=\"padding-bottom:10px\">                        
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control ar", "placeholder" => "كلمة المرور")));
        // line 50
        echo "                            

                            <span class=\"input-group-addon\" style=\"background:#fff;\">
                                <i class=\"fa fa-lock\"></i>
                            </span>
                        </div>
                    </div>
                </div> 
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"input-group\" style=\"padding-bottom:10px\">                        
                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control ar", "placeholder" => "تأكيد")));
        // line 64
        echo "                            

                                <span class=\"input-group-addon\" style=\"background:#fff;\">
                                    <i class=\"fa fa-lock\"></i>
                                </span>
                            </div>
                        </div>
                    </div>  
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"input-group move_left\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" type=\"submit\">
                                        <span class=\"ar\">
                                            انشاء
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
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 72,  108 => 64,  106 => 61,  93 => 50,  91 => 47,  78 => 36,  76 => 33,  63 => 22,  61 => 19,  54 => 14,  48 => 12,  44 => 10,  42 => 9,  31 => 4,  28 => 3,);
    }
}
