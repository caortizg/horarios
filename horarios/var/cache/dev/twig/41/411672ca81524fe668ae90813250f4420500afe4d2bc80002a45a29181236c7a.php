<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ce99e7fb27103a76f8a00307f34547c23f72af30dc1dfc386d804f3bb02a8d2f extends Twig_Template
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
        $__internal_70c6b11f17337c3ae78660e046476395fd80c8592c001e549e4a3acc3292cf91 = $this->env->getExtension("native_profiler");
        $__internal_70c6b11f17337c3ae78660e046476395fd80c8592c001e549e4a3acc3292cf91->enter($__internal_70c6b11f17337c3ae78660e046476395fd80c8592c001e549e4a3acc3292cf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_70c6b11f17337c3ae78660e046476395fd80c8592c001e549e4a3acc3292cf91->leave($__internal_70c6b11f17337c3ae78660e046476395fd80c8592c001e549e4a3acc3292cf91_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
