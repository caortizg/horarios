<?php

/* CaogHorariosBundle:Empresa/Actividad:register.html.twig */
class __TwigTemplate_3ab528cca18bc140b8343aa1eab29a6fb1a69fbf331d2ba459411d6e94c76b4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "CaogHorariosBundle:Empresa/Actividad:register.html.twig", 1);
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
        // line 2
        if ( !array_key_exists("titleBody", $context)) {
            $context["titleBody"] = "Registrar Actividada - Empresa";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Datos de la actividad</div>
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo "</span>
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget', array("attr" => array("class" => "form-control col-md-6", "aria-describedby" => "basic-addon3")));
        echo "
                    </div>
                </div>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tipo", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tipo", array()), 'label');
        echo "</span>
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tipo", array()), 'widget', array("attr" => array("class" => "form-control col-md-6", "aria-describedby" => "basic-addon3")));
        echo "
                    </div>
                </div>
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prioridad", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prioridad", array()), 'label');
        echo "</span>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prioridad", array()), 'widget', array("attr" => array("class" => "form-control col-md-6", "aria-describedby" => "basic-addon3")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pais", array()), 'errors');
        echo "
                <div class=\" col-md-4\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pais", array()), 'label');
        echo "</span>
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pais", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>

                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "departamento", array()), 'errors');
        echo "
                <div class=\" col-md-4\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "departamento", array()), 'label');
        echo "</span>
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "departamento", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>

                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'errors');
        echo "
                <div class=\" col-md-4\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'label');
        echo "</span>
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>
            </div><br>
            <div class=\"row\">
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "localidad", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "localidad", array()), 'label');
        echo "</span>
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "localidad", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>

                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'label');
        echo "</span>
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>
            </div>
        </div>
    </div>



    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success col-md-12")));
        echo "
</div>

";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle:Empresa/Actividad:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 84,  192 => 81,  181 => 73,  177 => 72,  171 => 69,  165 => 66,  161 => 65,  155 => 62,  148 => 58,  144 => 57,  138 => 54,  132 => 51,  128 => 50,  122 => 47,  116 => 44,  112 => 43,  106 => 40,  92 => 29,  88 => 28,  82 => 25,  76 => 22,  72 => 21,  66 => 18,  60 => 15,  56 => 14,  50 => 11,  41 => 5,  36 => 4,  33 => 3,  29 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'CaogHorariosBundle::layout.html.twig' %}*/
/* {% if titleBody is not defined %}{% set titleBody = 'Registrar Actividada - Empresa' %}{% endif %}*/
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
