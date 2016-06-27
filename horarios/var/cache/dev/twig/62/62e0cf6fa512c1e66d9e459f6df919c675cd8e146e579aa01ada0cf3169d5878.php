<?php

/* @CaogHorarios/Empresa/Actividad/register.html.twig */
class __TwigTemplate_0b36a46e9e3e837f68ae9bf9ec50c32bde2be05ac92a44e9109f631c8d08cd97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "@CaogHorarios/Empresa/Actividad/register.html.twig", 1);
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
        $__internal_99200c769abf412560729a1255f5f9866d7eaae285a4e87d5b14bdc7c61718a1 = $this->env->getExtension("native_profiler");
        $__internal_99200c769abf412560729a1255f5f9866d7eaae285a4e87d5b14bdc7c61718a1->enter($__internal_99200c769abf412560729a1255f5f9866d7eaae285a4e87d5b14bdc7c61718a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/Empresa/Actividad/register.html.twig"));

        // line 2
        if ( !array_key_exists("titleBody", $context)) {
            $context["titleBody"] = "Registrar Actividad - Empresa";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99200c769abf412560729a1255f5f9866d7eaae285a4e87d5b14bdc7c61718a1->leave($__internal_99200c769abf412560729a1255f5f9866d7eaae285a4e87d5b14bdc7c61718a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44d0ecc0f0275849d4539c244be508ffcfcd743f8568f283b4a95aeda3fd2b60 = $this->env->getExtension("native_profiler");
        $__internal_44d0ecc0f0275849d4539c244be508ffcfcd743f8568f283b4a95aeda3fd2b60->enter($__internal_44d0ecc0f0275849d4539c244be508ffcfcd743f8568f283b4a95aeda3fd2b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Datos de la actividad</div>
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "</span>
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control col-md-6", "aria-describedby" => "basic-addon3")));
        echo "
                    </div>
                </div>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'label');
        echo "</span>
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control col-md-6", "aria-describedby" => "basic-addon3")));
        echo "
                    </div>
                </div>
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prioridad", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prioridad", array()), 'label');
        echo "</span>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prioridad", array()), 'widget', array("attr" => array("class" => "form-control col-md-6", "aria-describedby" => "basic-addon3")));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Datos de localizacion</div>
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'errors');
        echo "
                <div class=\" col-md-4\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'label');
        echo "</span>
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>

                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departamento", array()), 'errors');
        echo "
                <div class=\" col-md-4\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departamento", array()), 'label');
        echo "</span>
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departamento", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>

                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'errors');
        echo "
                <div class=\" col-md-4\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'label');
        echo "</span>
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>
            </div><br>
            <div class=\"row\">
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localidad", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localidad", array()), 'label');
        echo "</span>
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localidad", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>

                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label');
        echo "</span>
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>
            </div>
        </div>
    </div>



    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success col-md-12")));
        echo "
</div>

";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_44d0ecc0f0275849d4539c244be508ffcfcd743f8568f283b4a95aeda3fd2b60->leave($__internal_44d0ecc0f0275849d4539c244be508ffcfcd743f8568f283b4a95aeda3fd2b60_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/Empresa/Actividad/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 84,  201 => 81,  190 => 73,  186 => 72,  180 => 69,  174 => 66,  170 => 65,  164 => 62,  157 => 58,  153 => 57,  147 => 54,  141 => 51,  137 => 50,  131 => 47,  125 => 44,  121 => 43,  115 => 40,  101 => 29,  97 => 28,  91 => 25,  85 => 22,  81 => 21,  75 => 18,  69 => 15,  65 => 14,  59 => 11,  50 => 5,  45 => 4,  39 => 3,  32 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'CaogHorariosBundle::layout.html.twig' %}*/
/* {% if titleBody is not defined %}{% set titleBody = 'Registrar Actividad - Empresa' %}{% endif %}*/
/* {% block body %}*/
/*     {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Datos de la actividad</div>*/
/*         <div class="panel-body">*/
/*             <div class="row">*/
/*                 {{ form_errors(form.nombre) }}*/
/*                 <div class=" col-md-6">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.nombre) }}</span>*/
/*                         {{ form_widget(form.nombre, { 'attr': {'class': 'form-control col-md-6','aria-describedby': 'basic-addon3'} }) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 {{ form_errors(form.tipo) }}*/
/*                 <div class=" col-md-6">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.tipo) }}</span>*/
/*                         {{ form_widget(form.tipo, { 'attr': {'class': 'form-control col-md-6','aria-describedby': 'basic-addon3'} }) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 {{ form_errors(form.prioridad) }}*/
/*                 <div class=" col-md-6">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.prioridad) }}</span>*/
/*                         {{ form_widget(form.prioridad, { 'attr': {'class': 'form-control col-md-6','aria-describedby': 'basic-addon3'} }) }}*/
/*                     </div>*/
/*                 </div>*/
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
