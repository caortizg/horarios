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
        $__internal_63eb9fe7c78d0f15e721d561c99348969bfb6762d4ba92460b87704942a70d5c = $this->env->getExtension("native_profiler");
        $__internal_63eb9fe7c78d0f15e721d561c99348969bfb6762d4ba92460b87704942a70d5c->enter($__internal_63eb9fe7c78d0f15e721d561c99348969bfb6762d4ba92460b87704942a70d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63eb9fe7c78d0f15e721d561c99348969bfb6762d4ba92460b87704942a70d5c->leave($__internal_63eb9fe7c78d0f15e721d561c99348969bfb6762d4ba92460b87704942a70d5c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7d57bbe888ad5fe57f99c54f64d2021ffad18cdaf0141dce64dba0cdd728971 = $this->env->getExtension("native_profiler");
        $__internal_b7d57bbe888ad5fe57f99c54f64d2021ffad18cdaf0141dce64dba0cdd728971->enter($__internal_b7d57bbe888ad5fe57f99c54f64d2021ffad18cdaf0141dce64dba0cdd728971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b7d57bbe888ad5fe57f99c54f64d2021ffad18cdaf0141dce64dba0cdd728971->leave($__internal_b7d57bbe888ad5fe57f99c54f64d2021ffad18cdaf0141dce64dba0cdd728971_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_faf6b3f8feab8d00b7f226a9f13324daff75d6ae5a528341c434e1631b3f7ec8 = $this->env->getExtension("native_profiler");
        $__internal_faf6b3f8feab8d00b7f226a9f13324daff75d6ae5a528341c434e1631b3f7ec8->enter($__internal_faf6b3f8feab8d00b7f226a9f13324daff75d6ae5a528341c434e1631b3f7ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_faf6b3f8feab8d00b7f226a9f13324daff75d6ae5a528341c434e1631b3f7ec8->leave($__internal_faf6b3f8feab8d00b7f226a9f13324daff75d6ae5a528341c434e1631b3f7ec8_prof);

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
