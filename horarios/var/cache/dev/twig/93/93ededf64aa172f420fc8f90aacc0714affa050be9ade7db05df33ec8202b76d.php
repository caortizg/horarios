<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_10d3e0c02b146443016de7cf35de3369288c48c9ca00b709c5aef5ca1cc3bb83 extends Twig_Template
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
        $__internal_8524d94d86d24a9a2fda8be70a6915f0438cf63bc0782279632def4d04c7cab0 = $this->env->getExtension("native_profiler");
        $__internal_8524d94d86d24a9a2fda8be70a6915f0438cf63bc0782279632def4d04c7cab0->enter($__internal_8524d94d86d24a9a2fda8be70a6915f0438cf63bc0782279632def4d04c7cab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8524d94d86d24a9a2fda8be70a6915f0438cf63bc0782279632def4d04c7cab0->leave($__internal_8524d94d86d24a9a2fda8be70a6915f0438cf63bc0782279632def4d04c7cab0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c98db8c896416eb577f917e352dfce1204f2b865db0264c1ce5e4abc1853eaf = $this->env->getExtension("native_profiler");
        $__internal_5c98db8c896416eb577f917e352dfce1204f2b865db0264c1ce5e4abc1853eaf->enter($__internal_5c98db8c896416eb577f917e352dfce1204f2b865db0264c1ce5e4abc1853eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5c98db8c896416eb577f917e352dfce1204f2b865db0264c1ce5e4abc1853eaf->leave($__internal_5c98db8c896416eb577f917e352dfce1204f2b865db0264c1ce5e4abc1853eaf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d22187000baaacbaa8c5fb3dea20240d4cdb61c21d64c3350bea1c5a1b2cf343 = $this->env->getExtension("native_profiler");
        $__internal_d22187000baaacbaa8c5fb3dea20240d4cdb61c21d64c3350bea1c5a1b2cf343->enter($__internal_d22187000baaacbaa8c5fb3dea20240d4cdb61c21d64c3350bea1c5a1b2cf343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d22187000baaacbaa8c5fb3dea20240d4cdb61c21d64c3350bea1c5a1b2cf343->leave($__internal_d22187000baaacbaa8c5fb3dea20240d4cdb61c21d64c3350bea1c5a1b2cf343_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc7e5e9f5384684175d27259d0d0d64c70296779ac0d67920cedb3e1011433f8 = $this->env->getExtension("native_profiler");
        $__internal_fc7e5e9f5384684175d27259d0d0d64c70296779ac0d67920cedb3e1011433f8->enter($__internal_fc7e5e9f5384684175d27259d0d0d64c70296779ac0d67920cedb3e1011433f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fc7e5e9f5384684175d27259d0d0d64c70296779ac0d67920cedb3e1011433f8->leave($__internal_fc7e5e9f5384684175d27259d0d0d64c70296779ac0d67920cedb3e1011433f8_prof);

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
