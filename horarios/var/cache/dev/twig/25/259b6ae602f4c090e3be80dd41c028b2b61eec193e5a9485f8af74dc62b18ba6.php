<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_465560c1f5f5d013a0e2216022754a5aae38ee0ca67f04e0e949cca8bd601198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_0f9291f7851d2d29beffe074c8380e03d7eb268c0d6a25fd912509f32121484f = $this->env->getExtension("native_profiler");
        $__internal_0f9291f7851d2d29beffe074c8380e03d7eb268c0d6a25fd912509f32121484f->enter($__internal_0f9291f7851d2d29beffe074c8380e03d7eb268c0d6a25fd912509f32121484f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f9291f7851d2d29beffe074c8380e03d7eb268c0d6a25fd912509f32121484f->leave($__internal_0f9291f7851d2d29beffe074c8380e03d7eb268c0d6a25fd912509f32121484f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_638d78196ec34db9a3ceff5f635df3b2b474eb4060c8ae8b70d4fa3288a10a0c = $this->env->getExtension("native_profiler");
        $__internal_638d78196ec34db9a3ceff5f635df3b2b474eb4060c8ae8b70d4fa3288a10a0c->enter($__internal_638d78196ec34db9a3ceff5f635df3b2b474eb4060c8ae8b70d4fa3288a10a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_638d78196ec34db9a3ceff5f635df3b2b474eb4060c8ae8b70d4fa3288a10a0c->leave($__internal_638d78196ec34db9a3ceff5f635df3b2b474eb4060c8ae8b70d4fa3288a10a0c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49a1a45eee969557a1db3c28921425b0129af6b00498a0b3a202c7a64293f2ba = $this->env->getExtension("native_profiler");
        $__internal_49a1a45eee969557a1db3c28921425b0129af6b00498a0b3a202c7a64293f2ba->enter($__internal_49a1a45eee969557a1db3c28921425b0129af6b00498a0b3a202c7a64293f2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49a1a45eee969557a1db3c28921425b0129af6b00498a0b3a202c7a64293f2ba->leave($__internal_49a1a45eee969557a1db3c28921425b0129af6b00498a0b3a202c7a64293f2ba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8513ea55c43260225cdeafd08e925c59752db7b4fe120191d736eaa755b6f661 = $this->env->getExtension("native_profiler");
        $__internal_8513ea55c43260225cdeafd08e925c59752db7b4fe120191d736eaa755b6f661->enter($__internal_8513ea55c43260225cdeafd08e925c59752db7b4fe120191d736eaa755b6f661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8513ea55c43260225cdeafd08e925c59752db7b4fe120191d736eaa755b6f661->leave($__internal_8513ea55c43260225cdeafd08e925c59752db7b4fe120191d736eaa755b6f661_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
