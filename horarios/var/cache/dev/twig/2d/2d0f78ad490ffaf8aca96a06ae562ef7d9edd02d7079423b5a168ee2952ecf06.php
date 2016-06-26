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
        $__internal_33094ba07852acf3233c222af59c000f0b6288d4fdc65bd95d9978d301df68cd = $this->env->getExtension("native_profiler");
        $__internal_33094ba07852acf3233c222af59c000f0b6288d4fdc65bd95d9978d301df68cd->enter($__internal_33094ba07852acf3233c222af59c000f0b6288d4fdc65bd95d9978d301df68cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33094ba07852acf3233c222af59c000f0b6288d4fdc65bd95d9978d301df68cd->leave($__internal_33094ba07852acf3233c222af59c000f0b6288d4fdc65bd95d9978d301df68cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7520ea20fff038e9e784a8809d04a59b12117bd2c01c3d703ed1d8a17dbd0827 = $this->env->getExtension("native_profiler");
        $__internal_7520ea20fff038e9e784a8809d04a59b12117bd2c01c3d703ed1d8a17dbd0827->enter($__internal_7520ea20fff038e9e784a8809d04a59b12117bd2c01c3d703ed1d8a17dbd0827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7520ea20fff038e9e784a8809d04a59b12117bd2c01c3d703ed1d8a17dbd0827->leave($__internal_7520ea20fff038e9e784a8809d04a59b12117bd2c01c3d703ed1d8a17dbd0827_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_18c2bc11c80e114cfeb1680ab4746ed30d1cf770a84087cb6c2a2855f130e830 = $this->env->getExtension("native_profiler");
        $__internal_18c2bc11c80e114cfeb1680ab4746ed30d1cf770a84087cb6c2a2855f130e830->enter($__internal_18c2bc11c80e114cfeb1680ab4746ed30d1cf770a84087cb6c2a2855f130e830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_18c2bc11c80e114cfeb1680ab4746ed30d1cf770a84087cb6c2a2855f130e830->leave($__internal_18c2bc11c80e114cfeb1680ab4746ed30d1cf770a84087cb6c2a2855f130e830_prof);

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
