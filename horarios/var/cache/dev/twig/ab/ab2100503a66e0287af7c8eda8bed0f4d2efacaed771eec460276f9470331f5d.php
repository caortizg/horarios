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
        $__internal_54fc014f86b29ff5a5f46738d7be1a0bb8e91db37111a15962cc2eea171099bd = $this->env->getExtension("native_profiler");
        $__internal_54fc014f86b29ff5a5f46738d7be1a0bb8e91db37111a15962cc2eea171099bd->enter($__internal_54fc014f86b29ff5a5f46738d7be1a0bb8e91db37111a15962cc2eea171099bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54fc014f86b29ff5a5f46738d7be1a0bb8e91db37111a15962cc2eea171099bd->leave($__internal_54fc014f86b29ff5a5f46738d7be1a0bb8e91db37111a15962cc2eea171099bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3b66cd6d72d18167e5ee0ba21321f9bae20b409316480ccb008c057e5320a55 = $this->env->getExtension("native_profiler");
        $__internal_f3b66cd6d72d18167e5ee0ba21321f9bae20b409316480ccb008c057e5320a55->enter($__internal_f3b66cd6d72d18167e5ee0ba21321f9bae20b409316480ccb008c057e5320a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f3b66cd6d72d18167e5ee0ba21321f9bae20b409316480ccb008c057e5320a55->leave($__internal_f3b66cd6d72d18167e5ee0ba21321f9bae20b409316480ccb008c057e5320a55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a250c3ab239b74609d17b434780064e26157a3d66944311e38198922213190f = $this->env->getExtension("native_profiler");
        $__internal_8a250c3ab239b74609d17b434780064e26157a3d66944311e38198922213190f->enter($__internal_8a250c3ab239b74609d17b434780064e26157a3d66944311e38198922213190f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8a250c3ab239b74609d17b434780064e26157a3d66944311e38198922213190f->leave($__internal_8a250c3ab239b74609d17b434780064e26157a3d66944311e38198922213190f_prof);

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
