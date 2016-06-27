<?php

/* @CaogHorarios/User/Actividad/list.html.twig */
class __TwigTemplate_ebfb21f7ff1a6e1d1b248cab6557faa00ca82f53cd784fecaeb8ba2fc802463b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CaogHorariosBundle::/general/listBase.html.twig", "@CaogHorarios/User/Actividad/list.html.twig", 3);
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
        $__internal_edbb6554465bd25d75d13d5a9f50762112b7439ccc7bbd16bd34ad5e4a58da12 = $this->env->getExtension("native_profiler");
        $__internal_edbb6554465bd25d75d13d5a9f50762112b7439ccc7bbd16bd34ad5e4a58da12->enter($__internal_edbb6554465bd25d75d13d5a9f50762112b7439ccc7bbd16bd34ad5e4a58da12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/User/Actividad/list.html.twig"));

        // line 1
        $context["idList"] = "listCompanies";
        // line 2
        $context["titleBody"] = "Actividades";
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edbb6554465bd25d75d13d5a9f50762112b7439ccc7bbd16bd34ad5e4a58da12->leave($__internal_edbb6554465bd25d75d13d5a9f50762112b7439ccc7bbd16bd34ad5e4a58da12_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_841e3c7768133763454bd87d38a8de14406d2ce0c71f7331b56b889a8b3708ce = $this->env->getExtension("native_profiler");
        $__internal_841e3c7768133763454bd87d38a8de14406d2ce0c71f7331b56b889a8b3708ce->enter($__internal_841e3c7768133763454bd87d38a8de14406d2ce0c71f7331b56b889a8b3708ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/fullcalendar-2.8.0/lib/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
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
        
        $__internal_841e3c7768133763454bd87d38a8de14406d2ce0c71f7331b56b889a8b3708ce->leave($__internal_841e3c7768133763454bd87d38a8de14406d2ce0c71f7331b56b889a8b3708ce_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dc03a983c834f372928df96361c7726c9eefa5825a91178d36a13832c40ae3d = $this->env->getExtension("native_profiler");
        $__internal_4dc03a983c834f372928df96361c7726c9eefa5825a91178d36a13832c40ae3d->enter($__internal_4dc03a983c834f372928df96361c7726c9eefa5825a91178d36a13832c40ae3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4dc03a983c834f372928df96361c7726c9eefa5825a91178d36a13832c40ae3d->leave($__internal_4dc03a983c834f372928df96361c7726c9eefa5825a91178d36a13832c40ae3d_prof);

    }

    // line 70
    public function block_theadList($context, array $blocks = array())
    {
        $__internal_523ed11bf5e05d0e0b7fab8bd9006c5285750c3bc7e0c0e0c90f33fe9a42339a = $this->env->getExtension("native_profiler");
        $__internal_523ed11bf5e05d0e0b7fab8bd9006c5285750c3bc7e0c0e0c90f33fe9a42339a->enter($__internal_523ed11bf5e05d0e0b7fab8bd9006c5285750c3bc7e0c0e0c90f33fe9a42339a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theadList"));

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
        
        $__internal_523ed11bf5e05d0e0b7fab8bd9006c5285750c3bc7e0c0e0c90f33fe9a42339a->leave($__internal_523ed11bf5e05d0e0b7fab8bd9006c5285750c3bc7e0c0e0c90f33fe9a42339a_prof);

    }

    // line 81
    public function block_tbodyList($context, array $blocks = array())
    {
        $__internal_ef57eb2b2a54d4308212956d287726bb3d43cf491011768d8a662c036b619d4e = $this->env->getExtension("native_profiler");
        $__internal_ef57eb2b2a54d4308212956d287726bb3d43cf491011768d8a662c036b619d4e->enter($__internal_ef57eb2b2a54d4308212956d287726bb3d43cf491011768d8a662c036b619d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbodyList"));

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
        
        $__internal_ef57eb2b2a54d4308212956d287726bb3d43cf491011768d8a662c036b619d4e->leave($__internal_ef57eb2b2a54d4308212956d287726bb3d43cf491011768d8a662c036b619d4e_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/User/Actividad/list.html.twig";
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
/*     <script src="{{ asset('public/fullcalendar-2.8.0/lib/jquery.min.js') }}" type="text/javascript"></script>*/
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
