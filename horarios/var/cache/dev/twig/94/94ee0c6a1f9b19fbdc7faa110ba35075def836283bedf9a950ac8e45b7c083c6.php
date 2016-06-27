<?php

/* CaogHorariosBundle::/general/alert.html.twig */
class __TwigTemplate_5a780fa482419cd0ce49494bc80318ab523aecc5fdb5781a4c93f50289e7e573 extends Twig_Template
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
        $__internal_b29bc302f9953a59f92f00116db457e0409b0b2bee0879ee94090b4bd8a32107 = $this->env->getExtension("native_profiler");
        $__internal_b29bc302f9953a59f92f00116db457e0409b0b2bee0879ee94090b4bd8a32107->enter($__internal_b29bc302f9953a59f92f00116db457e0409b0b2bee0879ee94090b4bd8a32107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle::/general/alert.html.twig"));

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
        
        $__internal_b29bc302f9953a59f92f00116db457e0409b0b2bee0879ee94090b4bd8a32107->leave($__internal_b29bc302f9953a59f92f00116db457e0409b0b2bee0879ee94090b4bd8a32107_prof);

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
