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
        $__internal_be796d85366a0feb51232fdd30a713abfd15acc63d809a09d52b95d8659547d5 = $this->env->getExtension("native_profiler");
        $__internal_be796d85366a0feb51232fdd30a713abfd15acc63d809a09d52b95d8659547d5->enter($__internal_be796d85366a0feb51232fdd30a713abfd15acc63d809a09d52b95d8659547d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be796d85366a0feb51232fdd30a713abfd15acc63d809a09d52b95d8659547d5->leave($__internal_be796d85366a0feb51232fdd30a713abfd15acc63d809a09d52b95d8659547d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f4e83d9fdc9b82ad7b16eaa5a6cec17643532121ea13a7fdcfbff43d98d6c7a = $this->env->getExtension("native_profiler");
        $__internal_1f4e83d9fdc9b82ad7b16eaa5a6cec17643532121ea13a7fdcfbff43d98d6c7a->enter($__internal_1f4e83d9fdc9b82ad7b16eaa5a6cec17643532121ea13a7fdcfbff43d98d6c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1f4e83d9fdc9b82ad7b16eaa5a6cec17643532121ea13a7fdcfbff43d98d6c7a->leave($__internal_1f4e83d9fdc9b82ad7b16eaa5a6cec17643532121ea13a7fdcfbff43d98d6c7a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f5b0b8f5fb17596520d5ceb29c96c41e8afd06b7f825c1b6aff989e6c696a49 = $this->env->getExtension("native_profiler");
        $__internal_2f5b0b8f5fb17596520d5ceb29c96c41e8afd06b7f825c1b6aff989e6c696a49->enter($__internal_2f5b0b8f5fb17596520d5ceb29c96c41e8afd06b7f825c1b6aff989e6c696a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f5b0b8f5fb17596520d5ceb29c96c41e8afd06b7f825c1b6aff989e6c696a49->leave($__internal_2f5b0b8f5fb17596520d5ceb29c96c41e8afd06b7f825c1b6aff989e6c696a49_prof);

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
