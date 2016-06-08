<?php

/* CaogHorariosBundle:User:register.html.twig */
class __TwigTemplate_7f06f80287f98d3a7f28ec3388971a6681374860a632d5ace60884915456fdc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "CaogHorariosBundle:User:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CaogHorariosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46b9add07f13ade302007aa4f5784859112c8b4a4d99c0310448fc9dbccc4bda = $this->env->getExtension("native_profiler");
        $__internal_46b9add07f13ade302007aa4f5784859112c8b4a4d99c0310448fc9dbccc4bda->enter($__internal_46b9add07f13ade302007aa4f5784859112c8b4a4d99c0310448fc9dbccc4bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:User:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b9add07f13ade302007aa4f5784859112c8b4a4d99c0310448fc9dbccc4bda->leave($__internal_46b9add07f13ade302007aa4f5784859112c8b4a4d99c0310448fc9dbccc4bda_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_895bd48ef6893ea61b3503ed724966d2dc34c4b1d0608015e365831da047e3d5 = $this->env->getExtension("native_profiler");
        $__internal_895bd48ef6893ea61b3503ed724966d2dc34c4b1d0608015e365831da047e3d5->enter($__internal_895bd48ef6893ea61b3503ed724966d2dc34c4b1d0608015e365831da047e3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Registrar usuario</h1>
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
    <div class=\" col-md-6\">
    <div class=\"input-group\">
        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "</span>
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control col-md-6", "aria-describedby" => "basic-addon3")));
        echo "
    </div></div>
    
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'errors');
        echo "
    <div class=\" col-md-6\">
    <div class=\"input-group\">
        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'label');
        echo "</span>
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
    </div></div>
    
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'errors');
        echo "
    <div class=\" col-md-12\">
    <div class=\"input-group\">
        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'label');
        echo "</span>
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
    </div>
    
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success col-md-12")));
        echo "
    </div>
    
    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
";
        
        $__internal_895bd48ef6893ea61b3503ed724966d2dc34c4b1d0608015e365831da047e3d5->leave($__internal_895bd48ef6893ea61b3503ed724966d2dc34c4b1d0608015e365831da047e3d5_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle:User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  100 => 28,  94 => 25,  90 => 24,  84 => 21,  78 => 18,  74 => 17,  68 => 14,  62 => 11,  58 => 10,  52 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'CaogHorariosBundle::layout.html.twig' %}*/
/* {% block body %}*/
/*     <h1>Registrar usuario</h1>*/
/*     {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/*     */
/*     {{ form_errors(form.nombre) }}*/
/*     <div class=" col-md-6">*/
/*     <div class="input-group">*/
/*         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.nombre) }}</span>*/
/*         {{ form_widget(form.nombre, { 'attr': {'class': 'form-control col-md-6','aria-describedby': 'basic-addon3'} }) }}*/
/*     </div></div>*/
/*     */
/*     {{ form_errors(form.apellidos) }}*/
/*     <div class=" col-md-6">*/
/*     <div class="input-group">*/
/*         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.apellidos) }}</span>*/
/*         {{ form_widget(form.apellidos, { 'attr': {'class': 'form-control','aria-describedby': 'basic-addon3'} }) }}*/
/*     </div></div>*/
/*     */
/*     {{ form_errors(form.edad) }}*/
/*     <div class=" col-md-12">*/
/*     <div class="input-group">*/
/*         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.edad) }}</span>*/
/*         {{ form_widget(form.edad, { 'attr': {'class': 'form-control','aria-describedby': 'basic-addon3'} }) }}*/
/*     </div>*/
/*     */
/*     {{ form_widget(form.save, { 'attr': {'class': 'btn btn-success col-md-12'} }) }}*/
/*     </div>*/
/*     */
/*     {{ form_end(form) }}*/
/*     */
/* {% endblock %}*/
