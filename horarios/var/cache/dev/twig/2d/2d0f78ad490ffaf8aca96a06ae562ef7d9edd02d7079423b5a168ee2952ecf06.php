<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2dd570c33897022473ef664088d291381e0a156bddcb880a8f15372d779056ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_077d6f1eb63ecf271af2f7923e59f9388ea29954bcbe56e4c1e54f90f32c7500 = $this->env->getExtension("native_profiler");
        $__internal_077d6f1eb63ecf271af2f7923e59f9388ea29954bcbe56e4c1e54f90f32c7500->enter($__internal_077d6f1eb63ecf271af2f7923e59f9388ea29954bcbe56e4c1e54f90f32c7500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_077d6f1eb63ecf271af2f7923e59f9388ea29954bcbe56e4c1e54f90f32c7500->leave($__internal_077d6f1eb63ecf271af2f7923e59f9388ea29954bcbe56e4c1e54f90f32c7500_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_451ca5a10dd8839e041218683662b65d940c5f7c80936c8d3fa291730f055932 = $this->env->getExtension("native_profiler");
        $__internal_451ca5a10dd8839e041218683662b65d940c5f7c80936c8d3fa291730f055932->enter($__internal_451ca5a10dd8839e041218683662b65d940c5f7c80936c8d3fa291730f055932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_451ca5a10dd8839e041218683662b65d940c5f7c80936c8d3fa291730f055932->leave($__internal_451ca5a10dd8839e041218683662b65d940c5f7c80936c8d3fa291730f055932_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_833af14e32d962bd3db68e8f18c5df90f7ca23fac995710f473a68d6bc193908 = $this->env->getExtension("native_profiler");
        $__internal_833af14e32d962bd3db68e8f18c5df90f7ca23fac995710f473a68d6bc193908->enter($__internal_833af14e32d962bd3db68e8f18c5df90f7ca23fac995710f473a68d6bc193908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_833af14e32d962bd3db68e8f18c5df90f7ca23fac995710f473a68d6bc193908->leave($__internal_833af14e32d962bd3db68e8f18c5df90f7ca23fac995710f473a68d6bc193908_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
