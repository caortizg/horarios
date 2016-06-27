<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_0155daea8af7973b5c686bf1223f16dd48a4e260e5ee8dffc775b6acb0e92eb5 extends Twig_Template
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
        $__internal_85768360bfc00e2d8e92d3d76c41ac3276b242fbdd51a6789f7c3596c245715a = $this->env->getExtension("native_profiler");
        $__internal_85768360bfc00e2d8e92d3d76c41ac3276b242fbdd51a6789f7c3596c245715a->enter($__internal_85768360bfc00e2d8e92d3d76c41ac3276b242fbdd51a6789f7c3596c245715a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_85768360bfc00e2d8e92d3d76c41ac3276b242fbdd51a6789f7c3596c245715a->leave($__internal_85768360bfc00e2d8e92d3d76c41ac3276b242fbdd51a6789f7c3596c245715a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
