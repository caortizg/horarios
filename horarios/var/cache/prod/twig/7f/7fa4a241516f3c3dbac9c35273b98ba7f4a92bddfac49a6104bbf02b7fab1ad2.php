<?php

/* CaogHorariosBundle:Empresa:register.html.twig */
class __TwigTemplate_9227b5b8eb95a7de23305b9db2a50e9928fd159feba7b4e16199c92593028fe9 extends Twig_Template
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
        // line 2
        $context["titleBody"] = "Registrar Empresa";
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
        <div class=\"panel-heading\">Datos empresariales</div>
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'errors');
        echo "
                <div class=\" col-md-12\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo "</span>
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget', array("attr" => array("class" => "form-control col-md-6", "aria-describedby" => "basic-addon3")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pais", array()), 'errors');
        echo "
                <div class=\" col-md-4\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pais", array()), 'label');
        echo "</span>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pais", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>

                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "departamento", array()), 'errors');
        echo "
                <div class=\" col-md-4\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "departamento", array()), 'label');
        echo "</span>
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "departamento", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>

                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'errors');
        echo "
                <div class=\" col-md-4\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'label');
        echo "</span>
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ciudad", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>
            </div><br>
            <div class=\"row\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "localidad", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "localidad", array()), 'label');
        echo "</span>
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "localidad", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>

                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'errors');
        echo "
                <div class=\" col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon3\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'label');
        echo "</span>
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()), 'widget', array("attr" => array("class" => "form-control", "aria-describedby" => "basic-addon3")));
        echo "
                    </div></div>
            </div>
        </div>
    </div>



    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success col-md-12")));
        echo "
</div>

";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
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
        return array (  163 => 69,  157 => 66,  146 => 58,  142 => 57,  136 => 54,  130 => 51,  126 => 50,  120 => 47,  113 => 43,  109 => 42,  103 => 39,  97 => 36,  93 => 35,  87 => 32,  81 => 29,  77 => 28,  71 => 25,  58 => 15,  54 => 14,  48 => 11,  39 => 5,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
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
