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
        $__internal_cd0ba9ebb520b959c0496ff033650aa91372f2b7be3655424e4c8fc33a5da7f3 = $this->env->getExtension("native_profiler");
        $__internal_cd0ba9ebb520b959c0496ff033650aa91372f2b7be3655424e4c8fc33a5da7f3->enter($__internal_cd0ba9ebb520b959c0496ff033650aa91372f2b7be3655424e4c8fc33a5da7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd0ba9ebb520b959c0496ff033650aa91372f2b7be3655424e4c8fc33a5da7f3->leave($__internal_cd0ba9ebb520b959c0496ff033650aa91372f2b7be3655424e4c8fc33a5da7f3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96e972224b28189fc37efbf2069642148b62d8cca4fcf9bd05b30f86d6e404cb = $this->env->getExtension("native_profiler");
        $__internal_96e972224b28189fc37efbf2069642148b62d8cca4fcf9bd05b30f86d6e404cb->enter($__internal_96e972224b28189fc37efbf2069642148b62d8cca4fcf9bd05b30f86d6e404cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_96e972224b28189fc37efbf2069642148b62d8cca4fcf9bd05b30f86d6e404cb->leave($__internal_96e972224b28189fc37efbf2069642148b62d8cca4fcf9bd05b30f86d6e404cb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_270489ccc7c725c4d07aedb3fc70e164fdda73a0af07727ea4ba4eb7dd40d99a = $this->env->getExtension("native_profiler");
        $__internal_270489ccc7c725c4d07aedb3fc70e164fdda73a0af07727ea4ba4eb7dd40d99a->enter($__internal_270489ccc7c725c4d07aedb3fc70e164fdda73a0af07727ea4ba4eb7dd40d99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_270489ccc7c725c4d07aedb3fc70e164fdda73a0af07727ea4ba4eb7dd40d99a->leave($__internal_270489ccc7c725c4d07aedb3fc70e164fdda73a0af07727ea4ba4eb7dd40d99a_prof);

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
