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
        $__internal_d2630064f03e7a89794737d4213b4b9ce5672d219d77ab5e2b4bf1cb8ddc8d14 = $this->env->getExtension("native_profiler");
        $__internal_d2630064f03e7a89794737d4213b4b9ce5672d219d77ab5e2b4bf1cb8ddc8d14->enter($__internal_d2630064f03e7a89794737d4213b4b9ce5672d219d77ab5e2b4bf1cb8ddc8d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2630064f03e7a89794737d4213b4b9ce5672d219d77ab5e2b4bf1cb8ddc8d14->leave($__internal_d2630064f03e7a89794737d4213b4b9ce5672d219d77ab5e2b4bf1cb8ddc8d14_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4d29d6c3cb963049280e849d7480da4e3aa2f3799343902b8cda8faf19e2cac = $this->env->getExtension("native_profiler");
        $__internal_d4d29d6c3cb963049280e849d7480da4e3aa2f3799343902b8cda8faf19e2cac->enter($__internal_d4d29d6c3cb963049280e849d7480da4e3aa2f3799343902b8cda8faf19e2cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d4d29d6c3cb963049280e849d7480da4e3aa2f3799343902b8cda8faf19e2cac->leave($__internal_d4d29d6c3cb963049280e849d7480da4e3aa2f3799343902b8cda8faf19e2cac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce2c99ada3c0f0e829b6c736eee7ddcad71ea6c89b38d2e43e3ac03897041129 = $this->env->getExtension("native_profiler");
        $__internal_ce2c99ada3c0f0e829b6c736eee7ddcad71ea6c89b38d2e43e3ac03897041129->enter($__internal_ce2c99ada3c0f0e829b6c736eee7ddcad71ea6c89b38d2e43e3ac03897041129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ce2c99ada3c0f0e829b6c736eee7ddcad71ea6c89b38d2e43e3ac03897041129->leave($__internal_ce2c99ada3c0f0e829b6c736eee7ddcad71ea6c89b38d2e43e3ac03897041129_prof);

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
