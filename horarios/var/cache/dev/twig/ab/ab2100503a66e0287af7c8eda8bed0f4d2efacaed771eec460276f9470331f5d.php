<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a32313fd830e1a69fddcd474d2de8b7efd07fbf07be04d3027a3e77f05a52725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_c028a6b7b10261f20e7cdd4ffd2e11f241461580fe229b04b11c5428d8b9f94f = $this->env->getExtension("native_profiler");
        $__internal_c028a6b7b10261f20e7cdd4ffd2e11f241461580fe229b04b11c5428d8b9f94f->enter($__internal_c028a6b7b10261f20e7cdd4ffd2e11f241461580fe229b04b11c5428d8b9f94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c028a6b7b10261f20e7cdd4ffd2e11f241461580fe229b04b11c5428d8b9f94f->leave($__internal_c028a6b7b10261f20e7cdd4ffd2e11f241461580fe229b04b11c5428d8b9f94f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_061ae85fc0a7b9cdcb4a4c9f304ef75f5ad6a797ce9e2f174c59ca745734493f = $this->env->getExtension("native_profiler");
        $__internal_061ae85fc0a7b9cdcb4a4c9f304ef75f5ad6a797ce9e2f174c59ca745734493f->enter($__internal_061ae85fc0a7b9cdcb4a4c9f304ef75f5ad6a797ce9e2f174c59ca745734493f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_061ae85fc0a7b9cdcb4a4c9f304ef75f5ad6a797ce9e2f174c59ca745734493f->leave($__internal_061ae85fc0a7b9cdcb4a4c9f304ef75f5ad6a797ce9e2f174c59ca745734493f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2e6ad48022c8c90d03727531b45c6f68802026f9dd33a08a6c6195d92b95af1 = $this->env->getExtension("native_profiler");
        $__internal_c2e6ad48022c8c90d03727531b45c6f68802026f9dd33a08a6c6195d92b95af1->enter($__internal_c2e6ad48022c8c90d03727531b45c6f68802026f9dd33a08a6c6195d92b95af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c2e6ad48022c8c90d03727531b45c6f68802026f9dd33a08a6c6195d92b95af1->leave($__internal_c2e6ad48022c8c90d03727531b45c6f68802026f9dd33a08a6c6195d92b95af1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
