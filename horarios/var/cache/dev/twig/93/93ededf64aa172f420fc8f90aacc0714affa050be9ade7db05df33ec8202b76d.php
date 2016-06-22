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
        $__internal_669b45068e96c64c1206272e86471545587d09563a8fa45789731fbb4f153cc2 = $this->env->getExtension("native_profiler");
        $__internal_669b45068e96c64c1206272e86471545587d09563a8fa45789731fbb4f153cc2->enter($__internal_669b45068e96c64c1206272e86471545587d09563a8fa45789731fbb4f153cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_669b45068e96c64c1206272e86471545587d09563a8fa45789731fbb4f153cc2->leave($__internal_669b45068e96c64c1206272e86471545587d09563a8fa45789731fbb4f153cc2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_60914848332f6f237766bb514234ceaf22ab664d5e2f4654d9142cf4372cd37d = $this->env->getExtension("native_profiler");
        $__internal_60914848332f6f237766bb514234ceaf22ab664d5e2f4654d9142cf4372cd37d->enter($__internal_60914848332f6f237766bb514234ceaf22ab664d5e2f4654d9142cf4372cd37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_60914848332f6f237766bb514234ceaf22ab664d5e2f4654d9142cf4372cd37d->leave($__internal_60914848332f6f237766bb514234ceaf22ab664d5e2f4654d9142cf4372cd37d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4e30a32f0b264b2ce7e89a63e2739952243d16fe03b39098d20241fade12a0d = $this->env->getExtension("native_profiler");
        $__internal_c4e30a32f0b264b2ce7e89a63e2739952243d16fe03b39098d20241fade12a0d->enter($__internal_c4e30a32f0b264b2ce7e89a63e2739952243d16fe03b39098d20241fade12a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c4e30a32f0b264b2ce7e89a63e2739952243d16fe03b39098d20241fade12a0d->leave($__internal_c4e30a32f0b264b2ce7e89a63e2739952243d16fe03b39098d20241fade12a0d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fff9b5d2061113d52d1ab76db668fd3653a489a3813f6fc01d10dfb59ce5c443 = $this->env->getExtension("native_profiler");
        $__internal_fff9b5d2061113d52d1ab76db668fd3653a489a3813f6fc01d10dfb59ce5c443->enter($__internal_fff9b5d2061113d52d1ab76db668fd3653a489a3813f6fc01d10dfb59ce5c443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fff9b5d2061113d52d1ab76db668fd3653a489a3813f6fc01d10dfb59ce5c443->leave($__internal_fff9b5d2061113d52d1ab76db668fd3653a489a3813f6fc01d10dfb59ce5c443_prof);

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
