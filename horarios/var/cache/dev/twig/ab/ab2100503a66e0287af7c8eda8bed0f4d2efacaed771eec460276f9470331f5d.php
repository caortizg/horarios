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
        $__internal_e5f9a329d98b4e6aa05aeb9a373ac38480c79feecec9e251892db994551657ed = $this->env->getExtension("native_profiler");
        $__internal_e5f9a329d98b4e6aa05aeb9a373ac38480c79feecec9e251892db994551657ed->enter($__internal_e5f9a329d98b4e6aa05aeb9a373ac38480c79feecec9e251892db994551657ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5f9a329d98b4e6aa05aeb9a373ac38480c79feecec9e251892db994551657ed->leave($__internal_e5f9a329d98b4e6aa05aeb9a373ac38480c79feecec9e251892db994551657ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d85904d16a7e9f2800d54acf4335820ffee9ce95a2e4705c29d72b843cc69f43 = $this->env->getExtension("native_profiler");
        $__internal_d85904d16a7e9f2800d54acf4335820ffee9ce95a2e4705c29d72b843cc69f43->enter($__internal_d85904d16a7e9f2800d54acf4335820ffee9ce95a2e4705c29d72b843cc69f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d85904d16a7e9f2800d54acf4335820ffee9ce95a2e4705c29d72b843cc69f43->leave($__internal_d85904d16a7e9f2800d54acf4335820ffee9ce95a2e4705c29d72b843cc69f43_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f9e878f36c5e8241d757b5b240146ec98dc49354c6f5a2650b101b68fef3959 = $this->env->getExtension("native_profiler");
        $__internal_3f9e878f36c5e8241d757b5b240146ec98dc49354c6f5a2650b101b68fef3959->enter($__internal_3f9e878f36c5e8241d757b5b240146ec98dc49354c6f5a2650b101b68fef3959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3f9e878f36c5e8241d757b5b240146ec98dc49354c6f5a2650b101b68fef3959->leave($__internal_3f9e878f36c5e8241d757b5b240146ec98dc49354c6f5a2650b101b68fef3959_prof);

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
