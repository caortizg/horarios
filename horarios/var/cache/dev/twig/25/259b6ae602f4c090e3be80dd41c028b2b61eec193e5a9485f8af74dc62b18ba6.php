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
        $__internal_4ef8aa33a26691c6f3251181b3b9691085c8b710545007eb0e3f55ae632e9842 = $this->env->getExtension("native_profiler");
        $__internal_4ef8aa33a26691c6f3251181b3b9691085c8b710545007eb0e3f55ae632e9842->enter($__internal_4ef8aa33a26691c6f3251181b3b9691085c8b710545007eb0e3f55ae632e9842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ef8aa33a26691c6f3251181b3b9691085c8b710545007eb0e3f55ae632e9842->leave($__internal_4ef8aa33a26691c6f3251181b3b9691085c8b710545007eb0e3f55ae632e9842_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_625f25bec45b51a9f393dd794dae13764ef69f60add840073b31346fa5377a3c = $this->env->getExtension("native_profiler");
        $__internal_625f25bec45b51a9f393dd794dae13764ef69f60add840073b31346fa5377a3c->enter($__internal_625f25bec45b51a9f393dd794dae13764ef69f60add840073b31346fa5377a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_625f25bec45b51a9f393dd794dae13764ef69f60add840073b31346fa5377a3c->leave($__internal_625f25bec45b51a9f393dd794dae13764ef69f60add840073b31346fa5377a3c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5f5f1515f06bafa1b161e549ab98cfd6e530abebaaf316c7de26b472c136ed1 = $this->env->getExtension("native_profiler");
        $__internal_e5f5f1515f06bafa1b161e549ab98cfd6e530abebaaf316c7de26b472c136ed1->enter($__internal_e5f5f1515f06bafa1b161e549ab98cfd6e530abebaaf316c7de26b472c136ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5f5f1515f06bafa1b161e549ab98cfd6e530abebaaf316c7de26b472c136ed1->leave($__internal_e5f5f1515f06bafa1b161e549ab98cfd6e530abebaaf316c7de26b472c136ed1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35780758455134452f884094d06ff3ae546bbe13bb272779e04901ca9338d886 = $this->env->getExtension("native_profiler");
        $__internal_35780758455134452f884094d06ff3ae546bbe13bb272779e04901ca9338d886->enter($__internal_35780758455134452f884094d06ff3ae546bbe13bb272779e04901ca9338d886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_35780758455134452f884094d06ff3ae546bbe13bb272779e04901ca9338d886->leave($__internal_35780758455134452f884094d06ff3ae546bbe13bb272779e04901ca9338d886_prof);

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
