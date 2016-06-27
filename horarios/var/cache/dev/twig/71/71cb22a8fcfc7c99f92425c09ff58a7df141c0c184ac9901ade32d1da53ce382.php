<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6c3671751b507ceb866049954e74dc424d15878e29fe4ebe5a95a06fca35a0f5 extends Twig_Template
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
        $__internal_fc779be7e4fbedcbfece3de99c04cf32b742266cb43c944e5dc96704e21f0e9f = $this->env->getExtension("native_profiler");
        $__internal_fc779be7e4fbedcbfece3de99c04cf32b742266cb43c944e5dc96704e21f0e9f->enter($__internal_fc779be7e4fbedcbfece3de99c04cf32b742266cb43c944e5dc96704e21f0e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_fc779be7e4fbedcbfece3de99c04cf32b742266cb43c944e5dc96704e21f0e9f->leave($__internal_fc779be7e4fbedcbfece3de99c04cf32b742266cb43c944e5dc96704e21f0e9f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
