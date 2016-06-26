<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_881b691bbed6a7e629cd4d14148e29018c7c9bd706fc08a28aeb6358265d0f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a81c9ca1b83cbea15baf949209fac24a0abfb184bb95f0f05c35ad84886279e = $this->env->getExtension("native_profiler");
        $__internal_2a81c9ca1b83cbea15baf949209fac24a0abfb184bb95f0f05c35ad84886279e->enter($__internal_2a81c9ca1b83cbea15baf949209fac24a0abfb184bb95f0f05c35ad84886279e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a81c9ca1b83cbea15baf949209fac24a0abfb184bb95f0f05c35ad84886279e->leave($__internal_2a81c9ca1b83cbea15baf949209fac24a0abfb184bb95f0f05c35ad84886279e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac50cb0a515770b84226b70c786496b11d122eb969a7c93231e4c32abe3dbf07 = $this->env->getExtension("native_profiler");
        $__internal_ac50cb0a515770b84226b70c786496b11d122eb969a7c93231e4c32abe3dbf07->enter($__internal_ac50cb0a515770b84226b70c786496b11d122eb969a7c93231e4c32abe3dbf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac50cb0a515770b84226b70c786496b11d122eb969a7c93231e4c32abe3dbf07->leave($__internal_ac50cb0a515770b84226b70c786496b11d122eb969a7c93231e4c32abe3dbf07_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d28f2a0495f786a1128bdb5eded9a31a3375decac652daf5cdbf5c0b5ddd9c9 = $this->env->getExtension("native_profiler");
        $__internal_9d28f2a0495f786a1128bdb5eded9a31a3375decac652daf5cdbf5c0b5ddd9c9->enter($__internal_9d28f2a0495f786a1128bdb5eded9a31a3375decac652daf5cdbf5c0b5ddd9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d28f2a0495f786a1128bdb5eded9a31a3375decac652daf5cdbf5c0b5ddd9c9->leave($__internal_9d28f2a0495f786a1128bdb5eded9a31a3375decac652daf5cdbf5c0b5ddd9c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8cf058f8152e403c4820c9804a436eeec03f8b34763ffbb4c787ea0d41ed34e = $this->env->getExtension("native_profiler");
        $__internal_d8cf058f8152e403c4820c9804a436eeec03f8b34763ffbb4c787ea0d41ed34e->enter($__internal_d8cf058f8152e403c4820c9804a436eeec03f8b34763ffbb4c787ea0d41ed34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8cf058f8152e403c4820c9804a436eeec03f8b34763ffbb4c787ea0d41ed34e->leave($__internal_d8cf058f8152e403c4820c9804a436eeec03f8b34763ffbb4c787ea0d41ed34e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
