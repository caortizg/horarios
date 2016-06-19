<?php

/* @CaogHorarios/Empresa/Actividad/vincular.html.twig */
class __TwigTemplate_31d1545ea14d3fdff882756af0c9d613421ade0d9815c4578f67d60b6ade242f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "@CaogHorarios/Empresa/Actividad/vincular.html.twig", 1);
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
        $__internal_2053fa87755bc6078c35159adff50040cacf80be499caf3b7eeb6214ddd94cdc = $this->env->getExtension("native_profiler");
        $__internal_2053fa87755bc6078c35159adff50040cacf80be499caf3b7eeb6214ddd94cdc->enter($__internal_2053fa87755bc6078c35159adff50040cacf80be499caf3b7eeb6214ddd94cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/Empresa/Actividad/vincular.html.twig"));

        // line 2
        $context["idList"] = "listCompanies";
        // line 3
        $context["titleBody"] = "Vincular información";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2053fa87755bc6078c35159adff50040cacf80be499caf3b7eeb6214ddd94cdc->leave($__internal_2053fa87755bc6078c35159adff50040cacf80be499caf3b7eeb6214ddd94cdc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_199947d7243032ec19922f99e31a8b726e66511e682156c4272a853cb26b5a93 = $this->env->getExtension("native_profiler");
        $__internal_199947d7243032ec19922f99e31a8b726e66511e682156c4272a853cb26b5a93->enter($__internal_199947d7243032ec19922f99e31a8b726e66511e682156c4272a853cb26b5a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <script type=\"text/javascript\">
        
            // Obtiene la ul que contiene la colección de etiquetas
    
    
    // configura una enlace \"Agregar una etiqueta\"
    var \$addTagLink = \$('<a href=\"#\" class=\"btn btn-success add_tag_link\" title=\"Agregar\">+</a>');
    var \$newLinkLi = \$('<li></li>').append(\$addTagLink);

    \$(document).ready(function() {  
        // Añade el ancla \"Agregar una etiqueta\" y las etiquetas li y ul
        var collectionHolder = \$('ul.actividadfranja');
        collectionHolder.append(\$newLinkLi);
        \$(\"#actividad_franja_vincular_actividadfranja\").parent().remove();

        // cuenta las entradas actuales en el formulario (p. ej. 2),
        // la usa como índice al insertar un nuevo elemento (p. ej. 2)
        collectionHolder.data('index', collectionHolder.find(':input').length);

        \$addTagLink.on('click', function(e) {
            // evita crear el enlace con una \"#\" en la URL
            e.preventDefault();

            // añade una nueva etiqueta form (ve el siguiente bloque de código)
            addTagForm(collectionHolder, \$newLinkLi);
        });
    });
    function addTagForm(collectionHolder, \$newLinkLi) {
        // Obtiene los datos del prototipo explicado anteriormente
        var prototype = collectionHolder.data('prototype');

        // Consigue el nuevo índice
        var index = collectionHolder.data('index');

        // Sustituye el '__name__' en el prototipo HTML para que
        // en su lugar sea un número basado en cuántos elementos hay
        var newForm = prototype.replace(/__name__/g, index);

        // Incrementa en uno el índice para el siguiente elemento
        collectionHolder.data('index', index + 1);

        // Muestra el formulario en la página en un elemento li,
        // antes del enlace 'Agregar una etiqueta'
        var \$newFormLi = \$('<li></li>').append(newForm);
        \$newLinkLi.before(\$newFormLi);
        addTagFormDeleteLink(\$newFormLi);
    }
    function addTagFormDeleteLink(\$tagFormLi) {
    var \$removeFormA = \$('<a href=\"#\" class=\"btn btn-danger\" title=\"Eliminar\">-</a>');
    \$tagFormLi.append(\$removeFormA);

    \$removeFormA.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // remove the li for the tag form
        \$tagFormLi.remove();
    });
}
    </script>
    
    <div class=\"panel panel-default\">
    <div class=\"row\"> </div>
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 69
            echo "                    <div class=\"alert alert-success\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        ";
            // line 71
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    <div class=\"row\"> &nbsp; </div>
    ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "actividad_franja_vincular")));
        echo "
        ";
        // line 76
        $context["dias"] = array("1" => "Lunes", "2" => "Martes", "3" => "Miercoles", "4" => "Jueves", "5" => "Viernes", "6" => "Sabado", "7" => "Domingo");
        // line 77
        echo "        
        <ul class=\"actividadfranja\" data-prototype=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actividadfranja", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["franjas"]) ? $context["franjas"] : $this->getContext($context, "franjas")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["franja"]) {
            // line 80
            echo "            <li>
            <div id=\"actividad_franja_vincular_actividadfranja_";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                <div><label class=\"labelForm  required\" for=\"actividad_franja_vincular_actividadfranja_";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "_actFraDia\">Dia:</label>
                    <select id=\"actividad_franja_vincular_actividadfranja_";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "_actFraDia\" name=\"actividad_franja_vincular[actividadfranja][";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "][actFraDia]\" required=\"required\" class=\"inputForm\" data-error=\"Por favor selecciona una opción.\">
                        <option value=\"\" >Seleccione</option>
                        ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")));
            foreach ($context['_seq'] as $context["key"] => $context["dia"]) {
                echo " 
                            <option value=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["franja"], "actFraDia", array()), "html", null, true);
                echo "\" ";
                if (($context["key"] == $this->getAttribute($context["franja"], "actFraDia", array()))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["dia"], "html", null, true);
                echo "</option>     
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['dia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                        
                    </select>
                </div>
                <div>
                    <label class=\"labelForm required\" for=\"actividad_franja_vincular_actividadfranja_";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "_actFraDuracion\">Duración:</label>
                    <input type=\"text\" id=\"actividad_franja_vincular_actividadfranja_";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "_actFraDuracion\" name=\"actividad_franja_vincular[actividadfranja][";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "][actFraDuracion]\" required=\"required\" class=\"inputForm\" data-error=\"Por favor completa este campo.\" maxlength=\"300\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["franja"], "actFraDuracion", array()), "html", null, true);
            echo "\">
                </div>
                <div>
                    <label class=\"labelForm required\" for=\"actividad_franja_vincular_actividadfranja_";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "_actHoraInicio\">Hora de inicio:  </label>
                    <input type=\"time\" id=\"actividad_franja_vincular_actividadfranja_";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "_actHoraInicio\" name=\"actividad_franja_vincular[actividadfranja][";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "][actHoraInicio]\" required=\"required\" class=\"inputForm\" data-error=\"Por favor completa este campo.\" maxlength=\"10\" placeholder=\"AAAA-MM-DD\" value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["franja"], "actHoraInicio", array()), "H:s:i"), "html", null, true);
            echo "\">
                </div>
            </div>
            <a href=\"#\" class=\"btn btn-danger\" title=\"Eliminar\">-</a>
            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['franja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "        </ul>  
    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 105
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

  
";
        
        $__internal_199947d7243032ec19922f99e31a8b726e66511e682156c4272a853cb26b5a93->leave($__internal_199947d7243032ec19922f99e31a8b726e66511e682156c4272a853cb26b5a93_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/Empresa/Actividad/vincular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 105,  249 => 104,  246 => 103,  222 => 97,  218 => 96,  208 => 93,  204 => 92,  198 => 88,  184 => 86,  178 => 85,  171 => 83,  167 => 82,  163 => 81,  160 => 80,  143 => 79,  139 => 78,  136 => 77,  134 => 76,  130 => 75,  127 => 74,  118 => 71,  114 => 69,  110 => 68,  45 => 5,  39 => 4,  32 => 1,  30 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'CaogHorariosBundle::layout.html.twig' %}*/
/* {% set idList = 'listCompanies' %}*/
/* {% set titleBody = 'Vincular información' %}*/
/* {% block body %}*/
/*     <script type="text/javascript">*/
/*         */
/*             // Obtiene la ul que contiene la colección de etiquetas*/
/*     */
/*     */
/*     // configura una enlace "Agregar una etiqueta"*/
/*     var $addTagLink = $('<a href="#" class="btn btn-success add_tag_link" title="Agregar">+</a>');*/
/*     var $newLinkLi = $('<li></li>').append($addTagLink);*/
/* */
/*     $(document).ready(function() {  */
/*         // Añade el ancla "Agregar una etiqueta" y las etiquetas li y ul*/
/*         var collectionHolder = $('ul.actividadfranja');*/
/*         collectionHolder.append($newLinkLi);*/
/*         $("#actividad_franja_vincular_actividadfranja").parent().remove();*/
/* */
/*         // cuenta las entradas actuales en el formulario (p. ej. 2),*/
/*         // la usa como índice al insertar un nuevo elemento (p. ej. 2)*/
/*         collectionHolder.data('index', collectionHolder.find(':input').length);*/
/* */
/*         $addTagLink.on('click', function(e) {*/
/*             // evita crear el enlace con una "#" en la URL*/
/*             e.preventDefault();*/
/* */
/*             // añade una nueva etiqueta form (ve el siguiente bloque de código)*/
/*             addTagForm(collectionHolder, $newLinkLi);*/
/*         });*/
/*     });*/
/*     function addTagForm(collectionHolder, $newLinkLi) {*/
/*         // Obtiene los datos del prototipo explicado anteriormente*/
/*         var prototype = collectionHolder.data('prototype');*/
/* */
/*         // Consigue el nuevo índice*/
/*         var index = collectionHolder.data('index');*/
/* */
/*         // Sustituye el '__name__' en el prototipo HTML para que*/
/*         // en su lugar sea un número basado en cuántos elementos hay*/
/*         var newForm = prototype.replace(/__name__/g, index);*/
/* */
/*         // Incrementa en uno el índice para el siguiente elemento*/
/*         collectionHolder.data('index', index + 1);*/
/* */
/*         // Muestra el formulario en la página en un elemento li,*/
/*         // antes del enlace 'Agregar una etiqueta'*/
/*         var $newFormLi = $('<li></li>').append(newForm);*/
/*         $newLinkLi.before($newFormLi);*/
/*         addTagFormDeleteLink($newFormLi);*/
/*     }*/
/*     function addTagFormDeleteLink($tagFormLi) {*/
/*     var $removeFormA = $('<a href="#" class="btn btn-danger" title="Eliminar">-</a>');*/
/*     $tagFormLi.append($removeFormA);*/
/* */
/*     $removeFormA.on('click', function(e) {*/
/*         // prevent the link from creating a "#" on the URL*/
/*         e.preventDefault();*/
/* */
/*         // remove the li for the tag form*/
/*         $tagFormLi.remove();*/
/*     });*/
/* }*/
/*     </script>*/
/*     */
/*     <div class="panel panel-default">*/
/*     <div class="row"> </div>*/
/*                 {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*                     <div class="alert alert-success">*/
/*                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>*/
/*                         {{flashMessage}}*/
/*                     </div>*/
/*                 {% endfor%}*/
/*     <div class="row"> &nbsp; </div>*/
/*     {{ form_start(form,{'attr':{'id':'actividad_franja_vincular'} } ) }}*/
/*         {% set dias = {'1': 'Lunes','2':'Martes','3':'Miercoles','4':'Jueves','5':'Viernes','6':'Sabado','7':'Domingo'} %}*/
/*         */
/*         <ul class="actividadfranja" data-prototype="{{ form_widget(form.actividadfranja.vars.prototype)|e}}">*/
/*             {% for franja in franjas %}*/
/*             <li>*/
/*             <div id="actividad_franja_vincular_actividadfranja_{{ loop.index }}">*/
/*                 <div><label class="labelForm  required" for="actividad_franja_vincular_actividadfranja_{{ loop.index }}_actFraDia">Dia:</label>*/
/*                     <select id="actividad_franja_vincular_actividadfranja_{{ loop.index }}_actFraDia" name="actividad_franja_vincular[actividadfranja][{{ loop.index }}][actFraDia]" required="required" class="inputForm" data-error="Por favor selecciona una opción.">*/
/*                         <option value="" >Seleccione</option>*/
/*                         {% for key,dia in dias %} */
/*                             <option value="{{franja.actFraDia}}" {% if key == franja.actFraDia %}{{'selected="selected"'}}{% endif %}>{{dia}}</option>     */
/*                         {% endfor %}*/
/*                         */
/*                     </select>*/
/*                 </div>*/
/*                 <div>*/
/*                     <label class="labelForm required" for="actividad_franja_vincular_actividadfranja_{{ loop.index }}_actFraDuracion">Duración:</label>*/
/*                     <input type="text" id="actividad_franja_vincular_actividadfranja_{{ loop.index }}_actFraDuracion" name="actividad_franja_vincular[actividadfranja][{{ loop.index }}][actFraDuracion]" required="required" class="inputForm" data-error="Por favor completa este campo." maxlength="300" value="{{franja.actFraDuracion}}">*/
/*                 </div>*/
/*                 <div>*/
/*                     <label class="labelForm required" for="actividad_franja_vincular_actividadfranja_{{ loop.index }}_actHoraInicio">Hora de inicio:  </label>*/
/*                     <input type="time" id="actividad_franja_vincular_actividadfranja_{{ loop.index }}_actHoraInicio" name="actividad_franja_vincular[actividadfranja][{{ loop.index }}][actHoraInicio]" required="required" class="inputForm" data-error="Por favor completa este campo." maxlength="10" placeholder="AAAA-MM-DD" value="{{franja.actHoraInicio|date('H:s:i')}}">*/
/*                 </div>*/
/*             </div>*/
/*             <a href="#" class="btn btn-danger" title="Eliminar">-</a>*/
/*             </li>*/
/*         {% endfor%}*/
/*         </ul>  */
/*     {{ form_errors(form) }}*/
/*     {{ form_end(form)}}*/
/*     </div>*/
/* */
/*   */
/* {%endblock%}*/
/* */
