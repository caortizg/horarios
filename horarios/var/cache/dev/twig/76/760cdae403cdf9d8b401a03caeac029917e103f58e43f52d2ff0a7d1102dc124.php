<?php

/* CaogHorariosBundle:User:register.html.twig */
class __TwigTemplate_aac329d1b773c3d9ae77a1affadbc6f7c126f1bf0a438c99a340df73c4ca7b74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "CaogHorariosBundle:User:register.html.twig", 2);
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
        $__internal_ca8e8798b55c160dd88ad80ade932f487cfb393a23e9c84f0ad0cb0ee1d56da9 = $this->env->getExtension("native_profiler");
        $__internal_ca8e8798b55c160dd88ad80ade932f487cfb393a23e9c84f0ad0cb0ee1d56da9->enter($__internal_ca8e8798b55c160dd88ad80ade932f487cfb393a23e9c84f0ad0cb0ee1d56da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:User:register.html.twig"));

        // line 1
        $context["titleBody"] = "Registrar usuario";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca8e8798b55c160dd88ad80ade932f487cfb393a23e9c84f0ad0cb0ee1d56da9->leave($__internal_ca8e8798b55c160dd88ad80ade932f487cfb393a23e9c84f0ad0cb0ee1d56da9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89fc67eedac2180ab91a2544fc7f4bab6912991d5a40b097169ca0c91f809945 = $this->env->getExtension("native_profiler");
        $__internal_89fc67eedac2180ab91a2544fc7f4bab6912991d5a40b097169ca0c91f809945->enter($__internal_89fc67eedac2180ab91a2544fc7f4bab6912991d5a40b097169ca0c91f809945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Datos personales</div>
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
                    </div></div>

                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'label');
        echo "</span>
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>
            </div><br>
            <div class=\"row\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'errors');
        echo "
                <div class=\" col-md-12\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'label');
        echo "</span>
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>
            </div><br>
        </div>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Datos de residencia</div>
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
            </div><br>
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
        
        $__internal_89fc67eedac2180ab91a2544fc7f4bab6912991d5a40b097169ca0c91f809945->leave($__internal_89fc67eedac2180ab91a2544fc7f4bab6912991d5a40b097169ca0c91f809945_prof);

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
        return array (  205 => 84,  199 => 81,  188 => 73,  184 => 72,  178 => 69,  172 => 66,  168 => 65,  162 => 62,  155 => 58,  151 => 57,  145 => 54,  139 => 51,  135 => 50,  129 => 47,  123 => 44,  119 => 43,  113 => 40,  100 => 30,  96 => 29,  90 => 26,  83 => 22,  79 => 21,  73 => 18,  67 => 15,  63 => 14,  57 => 11,  48 => 5,  43 => 4,  37 => 3,  30 => 2,  28 => 1,  11 => 2,);
    }
}
/* {% set titleBody = 'Registrar usuario' %}*/
/* {% extends 'CaogHorariosBundle::layout.html.twig' %}*/
/* {% block body %}*/
/*     {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Datos personales</div>*/
/*         <div class="panel-body">*/
/*             <div class="row">*/
/*                 {{ form_errors(form.nombre) }}*/
/*                 <div class=" col-md-6">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.nombre) }}</span>*/
/*                         {{ form_widget(form.nombre, { 'attr': {'class': 'form-control col-md-6','aria-describedby': 'basic-addon3'} }) }}*/
/*                     </div></div>*/
/* */
/*                 {{ form_errors(form.apellidos) }}*/
/*                 <div class=" col-md-6">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.apellidos) }}</span>*/
/*                         {{ form_widget(form.apellidos, { 'attr': {'class': 'form-control','aria-describedby': 'basic-addon3'} }) }}*/
/*                     </div></div>*/
/*             </div><br>*/
/*             <div class="row">*/
/*                 {{ form_errors(form.edad) }}*/
/*                 <div class=" col-md-12">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon3">{{ form_label(form.edad) }}</span>*/
/*                         {{ form_widget(form.edad, { 'attr': {'class': 'form-control','aria-describedby': 'basic-addon3'} }) }}*/
/*                     </div></div>*/
/*             </div><br>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Datos de residencia</div>*/
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
/*             </div><br>*/
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
