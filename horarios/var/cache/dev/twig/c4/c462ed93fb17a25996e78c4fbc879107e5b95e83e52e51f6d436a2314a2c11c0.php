<?php

/* CaogHorariosBundle:User/Actividad:vincular.html.twig */
class __TwigTemplate_a1ea0a4724e8f615fb51807e0f154afbdddd6205de0f4f92db651d029d58f7ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CaogHorariosBundle::layout.html.twig", "CaogHorariosBundle:User/Actividad:vincular.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CaogHorariosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66b687da9352fe44f89d6c547674fdeec2844b033cdb1ebd812b0412b5d27322 = $this->env->getExtension("native_profiler");
        $__internal_66b687da9352fe44f89d6c547674fdeec2844b033cdb1ebd812b0412b5d27322->enter($__internal_66b687da9352fe44f89d6c547674fdeec2844b033cdb1ebd812b0412b5d27322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle:User/Actividad:vincular.html.twig"));

        // line 2
        $context["idList"] = "listCompanies";
        // line 3
        $context["titleBody"] = "Franja horaria";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66b687da9352fe44f89d6c547674fdeec2844b033cdb1ebd812b0412b5d27322->leave($__internal_66b687da9352fe44f89d6c547674fdeec2844b033cdb1ebd812b0412b5d27322_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_62083a64ca4f00b624b520d351eee384b79c9c0968747756707ca607fc059402 = $this->env->getExtension("native_profiler");
        $__internal_62083a64ca4f00b624b520d351eee384b79c9c0968747756707ca607fc059402->enter($__internal_62083a64ca4f00b624b520d351eee384b79c9c0968747756707ca607fc059402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "            <div class=\"alert alert-success\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "actividad_franja_vincular")));
        echo "
        ";
        // line 14
        $context["dias"] = array("1" => "Lunes", "2" => "Martes", "3" => "Miercoles", "4" => "Jueves", "5" => "Viernes", "6" => "Sabado", "7" => "Domingo");
        // line 15
        echo "        
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "            ";
            $context["aux"] = 0;
            // line 18
            echo "            ";
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
                // line 19
                echo "                ";
                if (($this->getAttribute($context["franja"], "actFraDia", array()) == ($context["i"] + 1))) {
                    // line 20
                    echo "                    ";
                    if (((isset($context["aux"]) ? $context["aux"] : $this->getContext($context, "aux")) == 0)) {
                        // line 21
                        echo "                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")), ($context["i"] + 1), array(), "array"), "html", null, true);
                        echo "</div>
                        <div class=\"panel-body\">
                    ";
                    }
                    // line 24
                    echo "                                    
                            <div class=\"col-md-4\">
                                <div class=\"panel panel-primary\" id=\"franja_";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\">
                                    <div class=\"panel-body\">
                                        <button type=\"button\" class=\"close eliminarFranja\" id=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
                                        <div id=\"actividad_franja_vincular_actividadfranja_";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\">
                                            <div class=\"input-group col-md-12\">
                                                <span class=\"input-group-addon\" id=\"basic-addon3\"><label class=\"labelForm  required \" for=\"actividad_franja_vincular_actividadfranja_";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "_actFraDia\">Dia:</label></span>
                                                <select id=\"actividad_franja_vincular_actividadfranja_";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "_actFraDia\" name=\"actividad_franja_vincular[actividadfranja][";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "][actFraDia]\" required=\"required\" class=\"inputForm form-control\" data-error=\"Por favor selecciona una opción.\">
                                                    <option value=\"\" >Seleccione</option>
                                                    ";
                    // line 34
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["dias"]) ? $context["dias"] : $this->getContext($context, "dias")));
                    foreach ($context['_seq'] as $context["key"] => $context["dia"]) {
                        // line 35
                        echo "                                                        <option value=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
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
                    // line 37
                    echo "                                                </select>
                                            </div>
                                            <div class=\"input-group col-md-12\">
                                                <span class=\"input-group-addon\" id=\"basic-addon3\"><label class=\"labelForm required\" for=\"actividad_franja_vincular_actividadfranja_";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "_actFraDuracion\">Duración:</label></span>
                                                <input type=\"text\" id=\"actividad_franja_vincular_actividadfranja_";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "_actFraDuracion\" name=\"actividad_franja_vincular[actividadfranja][";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "][actFraDuracion]\" required=\"required\" class=\"inputForm form-control\" data-error=\"Por favor completa este campo.\" maxlength=\"300\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["franja"], "actFraDuracion", array()), "html", null, true);
                    echo "\">
                                            </div>
                                            <div class=\"input-group col-md-12\">
                                                <span class=\"input-group-addon\" id=\"basic-addon3\">
                                                <label class=\"labelForm required\" for=\"actividad_franja_vincular_actividadfranja_";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "_actHoraInicio\">Hora de inicio:  </label>
                                                </span>
                                                <input type=\"time\" id=\"actividad_franja_vincular_actividadfranja_";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "_actHoraInicio\" name=\"actividad_franja_vincular[actividadfranja][";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "][actHoraInicio]\" required=\"required\" class=\"inputForm form-control\" data-error=\"Por favor completa este campo.\" maxlength=\"10\" placeholder=\"AAAA-MM-DD\" value=\"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["franja"], "actHoraInicio", array()), "H:i"), "html", null, true);
                    echo "\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    ";
                    // line 53
                    $context["aux"] = 1;
                    // line 54
                    echo "                ";
                }
                // line 55
                echo "            ";
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
            // line 56
            echo "            ";
            if (((isset($context["aux"]) ? $context["aux"] : $this->getContext($context, "aux")) == 1)) {
                // line 57
                echo "                        </div>
                    </div>
            ";
            }
            // line 60
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    <div class=\"panel panel-default\">

        <ul class=\"actividadfranja\" data-prototype=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actividadfranja", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
            
        </ul>  
        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>


";
        
        $__internal_62083a64ca4f00b624b520d351eee384b79c9c0968747756707ca607fc059402->leave($__internal_62083a64ca4f00b624b520d351eee384b79c9c0968747756707ca607fc059402_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c32de3cb322b53ade0f17abf7c7b03366acc6eb314a62a3f403c2225b1d9cce3 = $this->env->getExtension("native_profiler");
        $__internal_c32de3cb322b53ade0f17abf7c7b03366acc6eb314a62a3f403c2225b1d9cce3->enter($__internal_c32de3cb322b53ade0f17abf7c7b03366acc6eb314a62a3f403c2225b1d9cce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/funciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/horarios/empresa/actividadVincular.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_c32de3cb322b53ade0f17abf7c7b03366acc6eb314a62a3f403c2225b1d9cce3->leave($__internal_c32de3cb322b53ade0f17abf7c7b03366acc6eb314a62a3f403c2225b1d9cce3_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle:User/Actividad:vincular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 75,  274 => 74,  269 => 73,  263 => 72,  251 => 67,  247 => 66,  241 => 63,  237 => 61,  231 => 60,  226 => 57,  223 => 56,  209 => 55,  206 => 54,  204 => 53,  191 => 47,  186 => 45,  175 => 41,  171 => 40,  166 => 37,  151 => 35,  147 => 34,  140 => 32,  136 => 31,  131 => 29,  127 => 28,  122 => 26,  118 => 24,  112 => 22,  109 => 21,  106 => 20,  103 => 19,  85 => 18,  82 => 17,  78 => 16,  75 => 15,  73 => 14,  69 => 13,  66 => 12,  57 => 9,  53 => 7,  49 => 6,  46 => 5,  40 => 4,  33 => 1,  31 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'CaogHorariosBundle::layout.html.twig' %}*/
/* {% set idList = 'listCompanies' %}*/
/* {% set titleBody = 'Franja horaria' %}*/
/* {% block body %}*/
/*     <div class="row">*/
/*         {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*             <div class="alert alert-success">*/
/*                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>*/
/*                 {{flashMessage}}*/
/*             </div>*/
/*         {% endfor%}*/
/*     </div>*/
/*         {{ form_start(form,{'attr':{'id':'actividad_franja_vincular'} } ) }}*/
/*         {% set dias = {'1': 'Lunes','2':'Martes','3':'Miercoles','4':'Jueves','5':'Viernes','6':'Sabado','7':'Domingo'} %}*/
/*         */
/*         {% for i in 0..6 %}*/
/*             {% set aux = 0 %}*/
/*             {% for franja in franjas %}*/
/*                 {% if franja.actFraDia == i+1 %}*/
/*                     {% if aux == 0 %}*/
/*                     <div class="panel panel-primary">*/
/*                         <div class="panel-heading">{{ dias[i+1] }}</div>*/
/*                         <div class="panel-body">*/
/*                     {% endif%}                                    */
/*                             <div class="col-md-4">*/
/*                                 <div class="panel panel-primary" id="franja_{{ loop.index }}">*/
/*                                     <div class="panel-body">*/
/*                                         <button type="button" class="close eliminarFranja" id="{{ loop.index }}"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>*/
/*                                         <div id="actividad_franja_vincular_actividadfranja_{{ loop.index }}">*/
/*                                             <div class="input-group col-md-12">*/
/*                                                 <span class="input-group-addon" id="basic-addon3"><label class="labelForm  required " for="actividad_franja_vincular_actividadfranja_{{ loop.index }}_actFraDia">Dia:</label></span>*/
/*                                                 <select id="actividad_franja_vincular_actividadfranja_{{ loop.index }}_actFraDia" name="actividad_franja_vincular[actividadfranja][{{ loop.index }}][actFraDia]" required="required" class="inputForm form-control" data-error="Por favor selecciona una opción.">*/
/*                                                     <option value="" >Seleccione</option>*/
/*                                                     {% for key,dia in dias %}*/
/*                                                         <option value="{{key}}" {% if key == franja.actFraDia %}{{'selected="selected"'}}{% endif %}>{{dia}}</option>     */
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                             <div class="input-group col-md-12">*/
/*                                                 <span class="input-group-addon" id="basic-addon3"><label class="labelForm required" for="actividad_franja_vincular_actividadfranja_{{ loop.index }}_actFraDuracion">Duración:</label></span>*/
/*                                                 <input type="text" id="actividad_franja_vincular_actividadfranja_{{ loop.index }}_actFraDuracion" name="actividad_franja_vincular[actividadfranja][{{ loop.index }}][actFraDuracion]" required="required" class="inputForm form-control" data-error="Por favor completa este campo." maxlength="300" value="{{franja.actFraDuracion}}">*/
/*                                             </div>*/
/*                                             <div class="input-group col-md-12">*/
/*                                                 <span class="input-group-addon" id="basic-addon3">*/
/*                                                 <label class="labelForm required" for="actividad_franja_vincular_actividadfranja_{{ loop.index }}_actHoraInicio">Hora de inicio:  </label>*/
/*                                                 </span>*/
/*                                                 <input type="time" id="actividad_franja_vincular_actividadfranja_{{ loop.index }}_actHoraInicio" name="actividad_franja_vincular[actividadfranja][{{ loop.index }}][actHoraInicio]" required="required" class="inputForm form-control" data-error="Por favor completa este campo." maxlength="10" placeholder="AAAA-MM-DD" value="{{franja.actHoraInicio|date('H:i')}}">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                     {% set aux = 1 %}*/
/*                 {% endif%}*/
/*             {% endfor%}*/
/*             {% if aux == 1 %}*/
/*                         </div>*/
/*                     </div>*/
/*             {% endif%}*/
/*         {% endfor%}*/
/*     <div class="panel panel-default">*/
/* */
/*         <ul class="actividadfranja" data-prototype="{{ form_widget(form.actividadfranja.vars.prototype)|e}}">*/
/*             */
/*         </ul>  */
/*         {{ form_errors(form) }}*/
/*         {{ form_end(form)}}*/
/*     </div>*/
/* */
/* */
/* {%endblock%}*/
/* {% block javascripts %}*/
/*     {{parent()}}    */
/*     <script src="{{ asset('public/js/funciones.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('public/js/horarios/empresa/actividadVincular.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
