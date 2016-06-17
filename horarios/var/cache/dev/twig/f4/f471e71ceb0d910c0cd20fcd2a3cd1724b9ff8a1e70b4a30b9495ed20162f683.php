<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b448e9b7f12b5b768c96865a55779780fa44a2d6408c483880b7d9bc560d1c13 extends Twig_Template
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
        $__internal_7d3131cabdbb4b7afefb628c6a0fdefa541bbe18fffcddefa95701fbafe29519 = $this->env->getExtension("native_profiler");
        $__internal_7d3131cabdbb4b7afefb628c6a0fdefa541bbe18fffcddefa95701fbafe29519->enter($__internal_7d3131cabdbb4b7afefb628c6a0fdefa541bbe18fffcddefa95701fbafe29519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7d3131cabdbb4b7afefb628c6a0fdefa541bbe18fffcddefa95701fbafe29519->leave($__internal_7d3131cabdbb4b7afefb628c6a0fdefa541bbe18fffcddefa95701fbafe29519_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
