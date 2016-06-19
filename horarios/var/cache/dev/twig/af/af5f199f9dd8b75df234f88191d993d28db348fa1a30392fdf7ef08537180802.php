<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9316d9fd25784b87ebe0081864de6a1a8462a3c40f1c6c8cf571556ab9b8aeec extends Twig_Template
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
        $__internal_bffe0cb84c5e19121fdbaa43128b8405e3d12ccffb690d9b277639ce9a2af3fa = $this->env->getExtension("native_profiler");
        $__internal_bffe0cb84c5e19121fdbaa43128b8405e3d12ccffb690d9b277639ce9a2af3fa->enter($__internal_bffe0cb84c5e19121fdbaa43128b8405e3d12ccffb690d9b277639ce9a2af3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bffe0cb84c5e19121fdbaa43128b8405e3d12ccffb690d9b277639ce9a2af3fa->leave($__internal_bffe0cb84c5e19121fdbaa43128b8405e3d12ccffb690d9b277639ce9a2af3fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
