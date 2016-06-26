<?php

/* @CaogHorarios/general/alert.html.twig */
class __TwigTemplate_cfec967f777d3bd59a17db6dd1898a35f1da41e1ea2c9338f19098013f9b4496 extends Twig_Template
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
        $__internal_c489cb35590957be0168a8be9d09471070e5fa66f4599b0519155b2ee9efbe81 = $this->env->getExtension("native_profiler");
        $__internal_c489cb35590957be0168a8be9d09471070e5fa66f4599b0519155b2ee9efbe81->enter($__internal_c489cb35590957be0168a8be9d09471070e5fa66f4599b0519155b2ee9efbe81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/general/alert.html.twig"));

        // line 1
        if (array_key_exists("alertPR", $context)) {
            // line 2
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alertPR"]) ? $context["alertPR"] : $this->getContext($context, "alertPR")), "type", array()), "html", null, true);
            echo "\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alertPR"]) ? $context["alertPR"] : $this->getContext($context, "alertPR")), "message", array()), "html", null, true);
            echo "
    </div>
";
        }
        
        $__internal_c489cb35590957be0168a8be9d09471070e5fa66f4599b0519155b2ee9efbe81->leave($__internal_c489cb35590957be0168a8be9d09471070e5fa66f4599b0519155b2ee9efbe81_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/general/alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if alertPR is defined %}*/
/*     <div class="alert alert-{{alertPR.type}}" role="alert">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         {{alertPR.message}}*/
/*     </div>*/
/* {% endif %}*/
