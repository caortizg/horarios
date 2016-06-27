<?php

/* CaogHorariosBundle:User:Actividad/list.html.twig */
class __TwigTemplate_58cd55c16124626224b629d97bbc0e4566d641b0966a7ec5db05530a565ae304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CaogHorariosBundle::/general/listBase.html.twig", "CaogHorariosBundle:User:Actividad/list.html.twig", 3);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'theadList' => array($this, 'block_theadList'),
            'tbodyList' => array($this, 'block_tbodyList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CaogHorariosBundle::/general/listBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2871d16418bd1f53d3e16862a09eee9b37de7a532d58af460bf4ebc9e084d74 = $this->env->getExtension("native_profiler");
        $__internal_c2871d16418bd1f53d3e16862a09eee9b37de7a532d58af460bf4ebc9e084d74->enter($__internal_c2871d16418bd1f53d3e16862a09eee9b37de7a532d58af460bf4ebc9e084d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:User:Actividad/list.html.twig"));

        // line 1
        $context["idList"] = "listCompanies";
        // line 2
        $context["titleBody"] = "Actividades";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2871d16418bd1f53d3e16862a09eee9b37de7a532d58af460bf4ebc9e084d74->leave($__internal_c2871d16418bd1f53d3e16862a09eee9b37de7a532d58af460bf4ebc9e084d74_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d176608da7ece61c6a89cc17dcc20d08fc5e419685e089b71dc1729c0d9fc29e = $this->env->getExtension("native_profiler");
        $__internal_d176608da7ece61c6a89cc17dcc20d08fc5e419685e089b71dc1729c0d9fc29e->enter($__internal_d176608da7ece61c6a89cc17dcc20d08fc5e419685e089b71dc1729c0d9fc29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/fullcalendar-2.8.0/lib/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/fullcalendar-2.8.0/fullcalendar.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/fullcalendar-2.8.0/lang-all.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_d176608da7ece61c6a89cc17dcc20d08fc5e419685e089b71dc1729c0d9fc29e->leave($__internal_d176608da7ece61c6a89cc17dcc20d08fc5e419685e089b71dc1729c0d9fc29e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_286eb1e6499e8497872fe69adcfae8f05e912e0f9f16de5e7815a4f8cb9cbe0b = $this->env->getExtension("native_profiler");
        $__internal_286eb1e6499e8497872fe69adcfae8f05e912e0f9f16de5e7815a4f8cb9cbe0b->enter($__internal_286eb1e6499e8497872fe69adcfae8f05e912e0f9f16de5e7815a4f8cb9cbe0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
\t\tvar currentLangCode = 'es';

\t\t// build the language selector's options
\t\t\$.each(\$.fullCalendar.langs, function(langCode) {
\t\t\t\$('#lang-selector').append(
\t\t\t\t\$('<option/>')
\t\t\t\t\t.attr('value', langCode)
\t\t\t\t\t.prop('selected', langCode == currentLangCode)
\t\t\t\t\t.text(langCode)
\t\t\t);
\t\t});

\t\t// rerender the calendar when the selected option changes
\t\t\$('#lang-selector').on('change', function() {
\t\t\tif (this.value) {
\t\t\t\tcurrentLangCode = this.value;
\t\t\t\t\$('#calendar').fullCalendar('destroy');
\t\t\t\trenderCalendar();
\t\t\t}
\t\t});

\t\tfunction renderCalendar() {
\t\t\t\$('#calendar').fullCalendar({
\t\t\t\theader: {
\t\t\t\t\tleft: 'prev,next today',
\t\t\t\t\tcenter: 'title',
\t\t\t\t\tright: 'month,agendaWeek,agendaDay'
\t\t\t\t},
\t\t\t\tdefaultDate: '2016-06-12',
\t\t\t\tlang: currentLangCode,
\t\t\t\tbuttonIcons: false, // show the prev/next text
\t\t\t\tweekNumbers: true,
\t\t\t\teditable: true,
\t\t\t\teventLimit: true, // allow \"more\" link when too many events
\t\t\t\t
\t\t\t});
\t\t}

\t\trenderCalendar();
\t});
    </script>
    
    <div class=\"row\">
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 60
            echo "            <div class=\"alert alert-success\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
            // line 62
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    </div>
    <div id='calendar'>
        
    </div>
";
        
        $__internal_286eb1e6499e8497872fe69adcfae8f05e912e0f9f16de5e7815a4f8cb9cbe0b->leave($__internal_286eb1e6499e8497872fe69adcfae8f05e912e0f9f16de5e7815a4f8cb9cbe0b_prof);

    }

    // line 71
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_a1de930f5eed05b5b6ae1bf165d1460ea3bfe5af71b9f6ff159428c5359d8639 = $this->env->getExtension("native_profiler");
        $__internal_a1de930f5eed05b5b6ae1bf165d1460ea3bfe5af71b9f6ff159428c5359d8639->enter($__internal_a1de930f5eed05b5b6ae1bf165d1460ea3bfe5af71b9f6ff159428c5359d8639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

        // line 72
        echo "    <th>Nombre</th>
    <th>Tipo</th>
    <th>Prioridad</th>
    <th>Pais</th>
    <th>Departamento</th>
    <th>Ciudad</th>
    <th>Localidad</th>
    <th>Direccion</th>
    <th>Opciones</th>
";
        
        $__internal_a1de930f5eed05b5b6ae1bf165d1460ea3bfe5af71b9f6ff159428c5359d8639->leave($__internal_a1de930f5eed05b5b6ae1bf165d1460ea3bfe5af71b9f6ff159428c5359d8639_prof);

    }

    // line 82
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_1a4ebb2075bf8c7fe6a10517de4bf83c05a99ac5b9990f0fd815b54281b72c4d = $this->env->getExtension("native_profiler");
        $__internal_1a4ebb2075bf8c7fe6a10517de4bf83c05a99ac5b9990f0fd815b54281b72c4d->enter($__internal_1a4ebb2075bf8c7fe6a10517de4bf83c05a99ac5b9990f0fd815b54281b72c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

        // line 83
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actividades"]) ? $context["actividades"] : $this->getContext($context, "actividades")));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 84
            echo "        <tr>
            <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "tipo", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "prioridad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "pais", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Departamento", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Ciudad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Localidad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Direccion", array()), "html", null, true);
            echo "</td>
            <td>
                <a class=\"btn btn-success\" href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caog_horarios_usuario_actividad_vincular", array("id" => $this->getAttribute($context["actividad"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> Informacion</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1a4ebb2075bf8c7fe6a10517de4bf83c05a99ac5b9990f0fd815b54281b72c4d->leave($__internal_1a4ebb2075bf8c7fe6a10517de4bf83c05a99ac5b9990f0fd815b54281b72c4d_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle:User:Actividad/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 94,  218 => 92,  214 => 91,  210 => 90,  206 => 89,  202 => 88,  198 => 87,  194 => 86,  190 => 85,  187 => 84,  182 => 83,  176 => 82,  160 => 72,  154 => 71,  140 => 65,  131 => 62,  127 => 60,  123 => 59,  76 => 14,  70 => 13,  61 => 10,  57 => 9,  53 => 8,  48 => 7,  42 => 6,  35 => 3,  33 => 2,  31 => 1,  11 => 3,);
    }
}
/* {% set idList = 'listCompanies' %}*/
/* {% set titleBody = 'Actividades' %}*/
/* {% extends 'CaogHorariosBundle::/general/listBase.html.twig' %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     {{parent()}}*/
/*     <script src="{{ asset('public/fullcalendar-2.8.0/lib/moment.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('public/fullcalendar-2.8.0/fullcalendar.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('public/fullcalendar-2.8.0/lang-all.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function() {*/
/* 		var currentLangCode = 'es';*/
/* */
/* 		// build the language selector's options*/
/* 		$.each($.fullCalendar.langs, function(langCode) {*/
/* 			$('#lang-selector').append(*/
/* 				$('<option/>')*/
/* 					.attr('value', langCode)*/
/* 					.prop('selected', langCode == currentLangCode)*/
/* 					.text(langCode)*/
/* 			);*/
/* 		});*/
/* */
/* 		// rerender the calendar when the selected option changes*/
/* 		$('#lang-selector').on('change', function() {*/
/* 			if (this.value) {*/
/* 				currentLangCode = this.value;*/
/* 				$('#calendar').fullCalendar('destroy');*/
/* 				renderCalendar();*/
/* 			}*/
/* 		});*/
/* */
/* 		function renderCalendar() {*/
/* 			$('#calendar').fullCalendar({*/
/* 				header: {*/
/* 					left: 'prev,next today',*/
/* 					center: 'title',*/
/* 					right: 'month,agendaWeek,agendaDay'*/
/* 				},*/
/* 				defaultDate: '2016-06-12',*/
/* 				lang: currentLangCode,*/
/* 				buttonIcons: false, // show the prev/next text*/
/* 				weekNumbers: true,*/
/* 				editable: true,*/
/* 				eventLimit: true, // allow "more" link when too many events*/
/* 				*/
/* 			});*/
/* 		}*/
/* */
/* 		renderCalendar();*/
/* 	});*/
/*     </script>*/
/*     */
/*     <div class="row">*/
/*         {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*             <div class="alert alert-success">*/
/*                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>*/
/*                 {{flashMessage}}*/
/*             </div>*/
/*         {% endfor%}*/
/*         {{ parent() }}*/
/*     </div>*/
/*     <div id='calendar'>*/
/*         */
/*     </div>*/
/* {% endblock %}*/
/* {% block theadList %}*/
/*     <th>Nombre</th>*/
/*     <th>Tipo</th>*/
/*     <th>Prioridad</th>*/
/*     <th>Pais</th>*/
/*     <th>Departamento</th>*/
/*     <th>Ciudad</th>*/
/*     <th>Localidad</th>*/
/*     <th>Direccion</th>*/
/*     <th>Opciones</th>*/
/* {% endblock %}*/
/* {% block tbodyList %}*/
/*     {% for actividad in actividades  %}*/
/*         <tr>*/
/*             <td>{{actividad.nombre}}</td>*/
/*             <td>{{actividad.tipo}}</td>*/
/*             <td>{{actividad.prioridad}}</td>*/
/*             <td>{{actividad.pais}}</td>*/
/*             <td>{{actividad.Departamento}}</td>*/
/*             <td>{{actividad.Ciudad}}</td>*/
/*             <td>{{actividad.Localidad}}</td>*/
/*             <td>{{actividad.Direccion}}</td>*/
/*             <td>*/
/*                 <a class="btn btn-success" href="{{path('caog_horarios_usuario_actividad_vincular', {'id': actividad.id})}}"><i class="glyphicon glyphicon-plus"></i> Informacion</a>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
