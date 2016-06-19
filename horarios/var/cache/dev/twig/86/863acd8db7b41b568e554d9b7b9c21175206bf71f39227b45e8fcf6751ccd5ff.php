<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e9d916c264449989ddfc6f66e0067dc08fc5590052894d270e7f743d5d73ede8 extends Twig_Template
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
        $__internal_4ecab60a517a3166635babc5ce845ea340bd56e76d4e6211931fff91b4b9c456 = $this->env->getExtension("native_profiler");
        $__internal_4ecab60a517a3166635babc5ce845ea340bd56e76d4e6211931fff91b4b9c456->enter($__internal_4ecab60a517a3166635babc5ce845ea340bd56e76d4e6211931fff91b4b9c456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4ecab60a517a3166635babc5ce845ea340bd56e76d4e6211931fff91b4b9c456->leave($__internal_4ecab60a517a3166635babc5ce845ea340bd56e76d4e6211931fff91b4b9c456_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
