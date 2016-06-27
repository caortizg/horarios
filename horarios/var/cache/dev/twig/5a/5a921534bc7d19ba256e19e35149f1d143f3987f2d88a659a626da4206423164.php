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
        $__internal_31a519b7edad246ec9112d592001f964ef57f31d1a2fc226a03b78cb5550be84 = $this->env->getExtension("native_profiler");
        $__internal_31a519b7edad246ec9112d592001f964ef57f31d1a2fc226a03b78cb5550be84->enter($__internal_31a519b7edad246ec9112d592001f964ef57f31d1a2fc226a03b78cb5550be84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:User:Actividad/list.html.twig"));

        // line 1
        $context["idList"] = "listCompanies";
        // line 2
        $context["titleBody"] = "Actividades";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31a519b7edad246ec9112d592001f964ef57f31d1a2fc226a03b78cb5550be84->leave($__internal_31a519b7edad246ec9112d592001f964ef57f31d1a2fc226a03b78cb5550be84_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8a5fa41ef73534ae1f7b154b5edb3c6994b019b43a80c7fc5bf95a53eb146c5 = $this->env->getExtension("native_profiler");
        $__internal_b8a5fa41ef73534ae1f7b154b5edb3c6994b019b43a80c7fc5bf95a53eb146c5->enter($__internal_b8a5fa41ef73534ae1f7b154b5edb3c6994b019b43a80c7fc5bf95a53eb146c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b8a5fa41ef73534ae1f7b154b5edb3c6994b019b43a80c7fc5bf95a53eb146c5->leave($__internal_b8a5fa41ef73534ae1f7b154b5edb3c6994b019b43a80c7fc5bf95a53eb146c5_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_5768a0aeefc9223c415bc8e8032de92e3145c7f0d005e777ecaedc8c05aed2e7 = $this->env->getExtension("native_profiler");
        $__internal_5768a0aeefc9223c415bc8e8032de92e3145c7f0d005e777ecaedc8c05aed2e7->enter($__internal_5768a0aeefc9223c415bc8e8032de92e3145c7f0d005e777ecaedc8c05aed2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5768a0aeefc9223c415bc8e8032de92e3145c7f0d005e777ecaedc8c05aed2e7->leave($__internal_5768a0aeefc9223c415bc8e8032de92e3145c7f0d005e777ecaedc8c05aed2e7_prof);

    }

    // line 71
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_c8fbcd53207193b463a78c9513d15aa4226bf2a6d669f2bff60316c39edb5e90 = $this->env->getExtension("native_profiler");
        $__internal_c8fbcd53207193b463a78c9513d15aa4226bf2a6d669f2bff60316c39edb5e90->enter($__internal_c8fbcd53207193b463a78c9513d15aa4226bf2a6d669f2bff60316c39edb5e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

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
        
        $__internal_c8fbcd53207193b463a78c9513d15aa4226bf2a6d669f2bff60316c39edb5e90->leave($__internal_c8fbcd53207193b463a78c9513d15aa4226bf2a6d669f2bff60316c39edb5e90_prof);

    }

    // line 82
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_1cf531f239dc14733c754bd7ca76317bd9b122d25328959c9fa62fc360c197ad = $this->env->getExtension("native_profiler");
        $__internal_1cf531f239dc14733c754bd7ca76317bd9b122d25328959c9fa62fc360c197ad->enter($__internal_1cf531f239dc14733c754bd7ca76317bd9b122d25328959c9fa62fc360c197ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

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
                ";
            // line 94
            if (($this->getAttribute($context["actividad"], "tipo", array()) == 1)) {
                // line 95
                echo "                    <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caog_horarios_usuario_actividad_vincular", array("id" => $this->getAttribute($context["actividad"], "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-plus\"></i> Informacion</a>
                ";
            }
            // line 97
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1cf531f239dc14733c754bd7ca76317bd9b122d25328959c9fa62fc360c197ad->leave($__internal_1cf531f239dc14733c754bd7ca76317bd9b122d25328959c9fa62fc360c197ad_prof);

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
        return array (  231 => 97,  225 => 95,  223 => 94,  218 => 92,  214 => 91,  210 => 90,  206 => 89,  202 => 88,  198 => 87,  194 => 86,  190 => 85,  187 => 84,  182 => 83,  176 => 82,  160 => 72,  154 => 71,  140 => 65,  131 => 62,  127 => 60,  123 => 59,  76 => 14,  70 => 13,  61 => 10,  57 => 9,  53 => 8,  48 => 7,  42 => 6,  35 => 3,  33 => 2,  31 => 1,  11 => 3,);
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
/*                 {% if actividad.tipo == 1%}*/
/*                     <a class="btn btn-success" href="{{path('caog_horarios_usuario_actividad_vincular', {'id': actividad.id})}}"><i class="glyphicon glyphicon-plus"></i> Informacion</a>*/
/*                 {% endif %}*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
