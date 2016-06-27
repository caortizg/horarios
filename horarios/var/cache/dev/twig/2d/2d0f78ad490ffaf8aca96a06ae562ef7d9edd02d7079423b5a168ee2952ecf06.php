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
        $__internal_17808844a2921e317e277e076e399313b9395ca10478309b070797e295536dd8 = $this->env->getExtension("native_profiler");
        $__internal_17808844a2921e317e277e076e399313b9395ca10478309b070797e295536dd8->enter($__internal_17808844a2921e317e277e076e399313b9395ca10478309b070797e295536dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17808844a2921e317e277e076e399313b9395ca10478309b070797e295536dd8->leave($__internal_17808844a2921e317e277e076e399313b9395ca10478309b070797e295536dd8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8942c6562e0a6470dee8eed3f65d5d65d29b548fe69306cd0bf141bec860585 = $this->env->getExtension("native_profiler");
        $__internal_f8942c6562e0a6470dee8eed3f65d5d65d29b548fe69306cd0bf141bec860585->enter($__internal_f8942c6562e0a6470dee8eed3f65d5d65d29b548fe69306cd0bf141bec860585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f8942c6562e0a6470dee8eed3f65d5d65d29b548fe69306cd0bf141bec860585->leave($__internal_f8942c6562e0a6470dee8eed3f65d5d65d29b548fe69306cd0bf141bec860585_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd649aab05e463684a60d439844c4c8de78b0bb84d1c8d6ece0eb7980d78a48d = $this->env->getExtension("native_profiler");
        $__internal_fd649aab05e463684a60d439844c4c8de78b0bb84d1c8d6ece0eb7980d78a48d->enter($__internal_fd649aab05e463684a60d439844c4c8de78b0bb84d1c8d6ece0eb7980d78a48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fd649aab05e463684a60d439844c4c8de78b0bb84d1c8d6ece0eb7980d78a48d->leave($__internal_fd649aab05e463684a60d439844c4c8de78b0bb84d1c8d6ece0eb7980d78a48d_prof);

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
