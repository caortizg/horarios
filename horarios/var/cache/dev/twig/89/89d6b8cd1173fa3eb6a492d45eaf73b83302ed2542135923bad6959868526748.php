<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_91cadb4fe12169e9a7d512065886c8b50f021817a62eda0be47a3b8d2349f53f extends Twig_Template
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
        $__internal_6ba6c70f1de4347d17ec1a2fd3bc0cd47a8fd03752ed099dcd4cfa397aa6796f = $this->env->getExtension("native_profiler");
        $__internal_6ba6c70f1de4347d17ec1a2fd3bc0cd47a8fd03752ed099dcd4cfa397aa6796f->enter($__internal_6ba6c70f1de4347d17ec1a2fd3bc0cd47a8fd03752ed099dcd4cfa397aa6796f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_6ba6c70f1de4347d17ec1a2fd3bc0cd47a8fd03752ed099dcd4cfa397aa6796f->leave($__internal_6ba6c70f1de4347d17ec1a2fd3bc0cd47a8fd03752ed099dcd4cfa397aa6796f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
