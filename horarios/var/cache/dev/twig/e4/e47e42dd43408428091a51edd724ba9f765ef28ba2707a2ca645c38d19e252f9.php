<?php

/* CaogHorariosBundle:Empresa:register.html.twig */
class __TwigTemplate_08c87b6b48fab6f4061aa03f294bd5fd3657cf569ac374fc648aa1ae12e68f31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "CaogHorariosBundle:Empresa:register.html.twig", 1);
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
        $__internal_d854ddffacd9b42ef097b4092de98a9b5a938720738f7bb702c7c2a127061653 = $this->env->getExtension("native_profiler");
        $__internal_d854ddffacd9b42ef097b4092de98a9b5a938720738f7bb702c7c2a127061653->enter($__internal_d854ddffacd9b42ef097b4092de98a9b5a938720738f7bb702c7c2a127061653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:Empresa:register.html.twig"));

        // line 2
        $context["titleBody"] = "Registrar Empresa";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d854ddffacd9b42ef097b4092de98a9b5a938720738f7bb702c7c2a127061653->leave($__internal_d854ddffacd9b42ef097b4092de98a9b5a938720738f7bb702c7c2a127061653_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a20e253bfd752cd538c02c7f28c5bb525bc5216be1e1388a9767f4dd65e874ce = $this->env->getExtension("native_profiler");
        $__internal_a20e253bfd752cd538c02c7f28c5bb525bc5216be1e1388a9767f4dd65e874ce->enter($__internal_a20e253bfd752cd538c02c7f28c5bb525bc5216be1e1388a9767f4dd65e874ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Datos empresariales</div>
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
                <div class=\" col-md-12\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "</span>
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control col-md-6", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>
            </div>
        </div>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Datos de localizacion</div>
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'errors');
        echo "
                <div class=\" col-md-4\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'label');
        echo "</span>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>

                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departamento", array()), 'errors');
        echo "
                <div class=\" col-md-4\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departamento", array()), 'label');
        echo "</span>
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departamento", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>

                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'errors');
        echo "
                <div class=\" col-md-4\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'label');
        echo "</span>
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>
            </div><br>
            <div class=\"row\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localidad", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localidad", array()), 'label');
        echo "</span>
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localidad", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>

                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label');
        echo "</span>
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>
            </div>
        </div>
    </div>



    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success col-md-12")));
        echo "
</div>

";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_a20e253bfd752cd538c02c7f28c5bb525bc5216be1e1388a9767f4dd65e874ce->leave($__internal_a20e253bfd752cd538c02c7f28c5bb525bc5216be1e1388a9767f4dd65e874ce_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle:Empresa:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 69,  166 => 66,  155 => 58,  151 => 57,  145 => 54,  139 => 51,  135 => 50,  129 => 47,  122 => 43,  118 => 42,  112 => 39,  106 => 36,  102 => 35,  96 => 32,  90 => 29,  86 => 28,  80 => 25,  67 => 15,  63 => 14,  57 => 11,  48 => 5,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'CaogHorariosBundle::layout.html.twig' %}*/
/* {% set titleBody = 'Registrar Empresa' %}*/
/* {% block body %}*/
/*     {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Datos empresariales</div>*/
/*         <div class="panel-body">*/
/*             <div class="row">*/
/*                 {{ form_errors(form.nombre) }}*/
/*                 <div class=" col-md-12">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.nombre) }}</span>*/
/*                         {{ form_widget(form.nombre, { 'attr': {'class': 'form-control col-md-6','aria-describedby': 'basic-addon3'} }) }}*/
/*                     </div></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Datos de localizacion</div>*/
/*         <div class="panel-body">*/
/*             <div class="row">*/
/*                 {{ form_errors(form.pais) }}*/
/*                 <div class=" col-md-4">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.pais) }}</span>*/
/*                         {{ form_widget(form.pais, { 'attr': {'class': 'form-control','aria-describedby': 'basic-addon3'} }) }}*/
/*                     </div></div>*/
/* */
/*                 {{ form_errors(form.departamento) }}*/
/*                 <div class=" col-md-4">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.departamento) }}</span>*/
/*                         {{ form_widget(form.departamento, { 'attr': {'class': 'form-control','aria-describedby': 'basic-addon3'} }) }}*/
/*                     </div></div>*/
/* */
/*                 {{ form_errors(form.ciudad) }}*/
/*                 <div class=" col-md-4">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.ciudad) }}</span>*/
/*                         {{ form_widget(form.ciudad, { 'attr': {'class': 'form-control','aria-describedby': 'basic-addon3'} }) }}*/
/*                     </div></div>*/
/*             </div><br>*/
/*             <div class="row">*/
/*                 {{ form_errors(form.localidad) }}*/
/*                 <div class=" col-md-6">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.localidad) }}</span>*/
/*                         {{ form_widget(form.localidad, { 'attr': {'class': 'form-control','aria-describedby': 'basic-addon3'} }) }}*/
/*                     </div></div>*/
/* */
/*                 {{ form_errors(form.direccion) }}*/
/*                 <div class=" col-md-6">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.direccion) }}</span>*/
/*                         {{ form_widget(form.direccion, { 'attr': {'class': 'form-control','aria-describedby': 'basic-addon3'} }) }}*/
/*                     </div></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/*     {{ form_widget(form.save, { 'attr': {'class': 'btn btn-success col-md-12'} }) }}*/
/* </div>*/
/* */
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
