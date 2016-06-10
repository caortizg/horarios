<?php

/* CaogHorariosBundle::/general/alert.html.twig */
class __TwigTemplate_2c208d8e2c21e2c487a833495898f1567e6734b2454041870d6842e2953cf987 extends Twig_Template
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
        $__internal_279b9c76f168305ca64e881d54347ac711d5224d5ce0db424cf5c981bfc100bf = $this->env->getExtension("native_profiler");
        $__internal_279b9c76f168305ca64e881d54347ac711d5224d5ce0db424cf5c981bfc100bf->enter($__internal_279b9c76f168305ca64e881d54347ac711d5224d5ce0db424cf5c981bfc100bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle::/general/alert.html.twig"));

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
        
        $__internal_279b9c76f168305ca64e881d54347ac711d5224d5ce0db424cf5c981bfc100bf->leave($__internal_279b9c76f168305ca64e881d54347ac711d5224d5ce0db424cf5c981bfc100bf_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle::/general/alert.html.twig";
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
