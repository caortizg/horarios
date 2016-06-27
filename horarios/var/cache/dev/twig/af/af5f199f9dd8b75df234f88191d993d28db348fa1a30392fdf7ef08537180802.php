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
        $__internal_0c3dbe75766fbffcbb76ee055e483e0d8e4c52ee8ced22e04a43116df52d0a91 = $this->env->getExtension("native_profiler");
        $__internal_0c3dbe75766fbffcbb76ee055e483e0d8e4c52ee8ced22e04a43116df52d0a91->enter($__internal_0c3dbe75766fbffcbb76ee055e483e0d8e4c52ee8ced22e04a43116df52d0a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0c3dbe75766fbffcbb76ee055e483e0d8e4c52ee8ced22e04a43116df52d0a91->leave($__internal_0c3dbe75766fbffcbb76ee055e483e0d8e4c52ee8ced22e04a43116df52d0a91_prof);

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
