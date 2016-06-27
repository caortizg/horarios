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
        $__internal_6ad8fff601e98f595a32ef69aa831691284a26a5e266499cbecc0044cbba5cc4 = $this->env->getExtension("native_profiler");
        $__internal_6ad8fff601e98f595a32ef69aa831691284a26a5e266499cbecc0044cbba5cc4->enter($__internal_6ad8fff601e98f595a32ef69aa831691284a26a5e266499cbecc0044cbba5cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:User:Actividad/list.html.twig"));

        // line 1
        $context["idList"] = "listCompanies";
        // line 2
        $context["titleBody"] = "Actividades";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad8fff601e98f595a32ef69aa831691284a26a5e266499cbecc0044cbba5cc4->leave($__internal_6ad8fff601e98f595a32ef69aa831691284a26a5e266499cbecc0044cbba5cc4_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff68cc40ed7627f11c84cf44dc00d540e50c06fcd5bae6542cdc59bc0e88fd29 = $this->env->getExtension("native_profiler");
        $__internal_ff68cc40ed7627f11c84cf44dc00d540e50c06fcd5bae6542cdc59bc0e88fd29->enter($__internal_ff68cc40ed7627f11c84cf44dc00d540e50c06fcd5bae6542cdc59bc0e88fd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ff68cc40ed7627f11c84cf44dc00d540e50c06fcd5bae6542cdc59bc0e88fd29->leave($__internal_ff68cc40ed7627f11c84cf44dc00d540e50c06fcd5bae6542cdc59bc0e88fd29_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb35074d4fdea1bbf399154a3b715d3cbd6758e2aaadea9a126d2ba9e382d866 = $this->env->getExtension("native_profiler");
        $__internal_cb35074d4fdea1bbf399154a3b715d3cbd6758e2aaadea9a126d2ba9e382d866->enter($__internal_cb35074d4fdea1bbf399154a3b715d3cbd6758e2aaadea9a126d2ba9e382d866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div id='calendar'>
        
    </div>
    <div class=\"row\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 62
            echo "            <div class=\"alert alert-success\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
            // line 64
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_cb35074d4fdea1bbf399154a3b715d3cbd6758e2aaadea9a126d2ba9e382d866->leave($__internal_cb35074d4fdea1bbf399154a3b715d3cbd6758e2aaadea9a126d2ba9e382d866_prof);

    }

    // line 70
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_0757f652a0262cc87aa5ed89f9c00b0d6e7d1b7f232dbb8d47df09cecfe8f6dd = $this->env->getExtension("native_profiler");
        $__internal_0757f652a0262cc87aa5ed89f9c00b0d6e7d1b7f232dbb8d47df09cecfe8f6dd->enter($__internal_0757f652a0262cc87aa5ed89f9c00b0d6e7d1b7f232dbb8d47df09cecfe8f6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

        // line 71
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
        
        $__internal_0757f652a0262cc87aa5ed89f9c00b0d6e7d1b7f232dbb8d47df09cecfe8f6dd->leave($__internal_0757f652a0262cc87aa5ed89f9c00b0d6e7d1b7f232dbb8d47df09cecfe8f6dd_prof);

    }

    // line 81
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_f5d393565bef0ffbeb55b7e9f032a78de722339b98318f924dbfd749521b2814 = $this->env->getExtension("native_profiler");
        $__internal_f5d393565bef0ffbeb55b7e9f032a78de722339b98318f924dbfd749521b2814->enter($__internal_f5d393565bef0ffbeb55b7e9f032a78de722339b98318f924dbfd749521b2814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

        // line 82
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actividades"]) ? $context["actividades"] : $this->getContext($context, "actividades")));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 83
            echo "        <tr>
            <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "tipo", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "prioridad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "pais", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Departamento", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Ciudad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Localidad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["actividad"], "Direccion", array()), "html", null, true);
            echo "</td>
            <td>
                <a class=\"btn btn-success\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caog_horarios_usuario_actividad_vincular", array("id" => $this->getAttribute($context["actividad"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> Informacion</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f5d393565bef0ffbeb55b7e9f032a78de722339b98318f924dbfd749521b2814->leave($__internal_f5d393565bef0ffbeb55b7e9f032a78de722339b98318f924dbfd749521b2814_prof);

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
        return array (  222 => 93,  217 => 91,  213 => 90,  209 => 89,  205 => 88,  201 => 87,  197 => 86,  193 => 85,  189 => 84,  186 => 83,  181 => 82,  175 => 81,  159 => 71,  153 => 70,  142 => 67,  133 => 64,  129 => 62,  125 => 61,  76 => 14,  70 => 13,  61 => 10,  57 => 9,  53 => 8,  48 => 7,  42 => 6,  35 => 3,  33 => 2,  31 => 1,  11 => 3,);
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
/*     <div id='calendar'>*/
/*         */
/*     </div>*/
/*     <div class="row">*/
/*         {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*             <div class="alert alert-success">*/
/*                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>*/
/*                 {{flashMessage}}*/
/*             </div>*/
/*         {% endfor%}*/
/*         {{ parent() }}*/
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
