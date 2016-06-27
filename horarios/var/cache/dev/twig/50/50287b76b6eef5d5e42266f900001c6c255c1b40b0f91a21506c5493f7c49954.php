<?php

/* @CaogHorarios/layout.html.twig */
class __TwigTemplate_35c2c6b1ed846895d5006c2b2e859c4ea6fb7f6d1b70ce9229dfd53c01c99ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'modal' => array($this, 'block_modal'),
            'header' => array($this, 'block_header'),
            'alert' => array($this, 'block_alert'),
            'titleBody' => array($this, 'block_titleBody'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3085cbe4c4792f06961102d0ef7857140b6e40d050f5c62ff5acfc7a430f29f3 = $this->env->getExtension("native_profiler");
        $__internal_3085cbe4c4792f06961102d0ef7857140b6e40d050f5c62ff5acfc7a430f29f3->enter($__internal_3085cbe4c4792f06961102d0ef7857140b6e40d050f5c62ff5acfc7a430f29f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CaogHorarios/layout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"Creacion de horarios\">
        <meta name=\"author\" content=\"Carlos A. Ortiz - Jaime B. Robles\">
        ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </head>

    <body>        
        ";
        // line 24
        $this->displayBlock('modal', $context, $blocks);
        // line 26
        echo "        <div class=\"row\">     
            ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "            
        </div>
        <div class=\"row\">
            <div class=\"col-md-2\"></div>
            <div class=\"col-md-8\"> 
            ";
        // line 34
        $this->displayBlock('alert', $context, $blocks);
        // line 35
        echo "            ";
        $this->displayBlock('titleBody', $context, $blocks);
        // line 40
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </div>
            <div class=\"col-md-2\"></div>            
        </div>
        <div class=\"row\">
            ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "        </div>
        
    </body>
</html>";
        
        $__internal_3085cbe4c4792f06961102d0ef7857140b6e40d050f5c62ff5acfc7a430f29f3->leave($__internal_3085cbe4c4792f06961102d0ef7857140b6e40d050f5c62ff5acfc7a430f29f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f5c2e471f7355d88a1570c6790523c493abe72796feccdaba5d1cb398592909 = $this->env->getExtension("native_profiler");
        $__internal_5f5c2e471f7355d88a1570c6790523c493abe72796feccdaba5d1cb398592909->enter($__internal_5f5c2e471f7355d88a1570c6790523c493abe72796feccdaba5d1cb398592909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_5f5c2e471f7355d88a1570c6790523c493abe72796feccdaba5d1cb398592909->leave($__internal_5f5c2e471f7355d88a1570c6790523c493abe72796feccdaba5d1cb398592909_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c15a0584cd6c74574ecd73392fbf6ab8be83370547bef8d932a5ce1e77be95c = $this->env->getExtension("native_profiler");
        $__internal_0c15a0584cd6c74574ecd73392fbf6ab8be83370547bef8d932a5ce1e77be95c->enter($__internal_0c15a0584cd6c74574ecd73392fbf6ab8be83370547bef8d932a5ce1e77be95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_0c15a0584cd6c74574ecd73392fbf6ab8be83370547bef8d932a5ce1e77be95c->leave($__internal_0c15a0584cd6c74574ecd73392fbf6ab8be83370547bef8d932a5ce1e77be95c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_569ec237ee04b90fc4cbab50783a7bb05fa93a23a98c20cfb64b294c73f25a7b = $this->env->getExtension("native_profiler");
        $__internal_569ec237ee04b90fc4cbab50783a7bb05fa93a23a98c20cfb64b294c73f25a7b->enter($__internal_569ec237ee04b90fc4cbab50783a7bb05fa93a23a98c20cfb64b294c73f25a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/actividad.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
             <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/fullcalendar-2.8.0/fullcalendar.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_569ec237ee04b90fc4cbab50783a7bb05fa93a23a98c20cfb64b294c73f25a7b->leave($__internal_569ec237ee04b90fc4cbab50783a7bb05fa93a23a98c20cfb64b294c73f25a7b_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3c8fea002c7ad0a6da0bcbe886e6bb196b5661442ec5bd1b14236a9a376dcdc = $this->env->getExtension("native_profiler");
        $__internal_a3c8fea002c7ad0a6da0bcbe886e6bb196b5661442ec5bd1b14236a9a376dcdc->enter($__internal_a3c8fea002c7ad0a6da0bcbe886e6bb196b5661442ec5bd1b14236a9a376dcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">urlBase = '";
        // line 19
        echo $this->env->getExtension('routing')->getPath("caog_horarios_homepage");
        echo "'</script>
        ";
        
        $__internal_a3c8fea002c7ad0a6da0bcbe886e6bb196b5661442ec5bd1b14236a9a376dcdc->leave($__internal_a3c8fea002c7ad0a6da0bcbe886e6bb196b5661442ec5bd1b14236a9a376dcdc_prof);

    }

    // line 24
    public function block_modal($context, array $blocks = array())
    {
        $__internal_1943a1d726777ab4139a9de8fdf6d3080a415ff6faa0662eaff9c396d7fbc06e = $this->env->getExtension("native_profiler");
        $__internal_1943a1d726777ab4139a9de8fdf6d3080a415ff6faa0662eaff9c396d7fbc06e->enter($__internal_1943a1d726777ab4139a9de8fdf6d3080a415ff6faa0662eaff9c396d7fbc06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 25
        echo "        ";
        
        $__internal_1943a1d726777ab4139a9de8fdf6d3080a415ff6faa0662eaff9c396d7fbc06e->leave($__internal_1943a1d726777ab4139a9de8fdf6d3080a415ff6faa0662eaff9c396d7fbc06e_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_6eee37339bea31016098ba8f6656724509272102ab554d62be90d3b230c12cd5 = $this->env->getExtension("native_profiler");
        $__internal_6eee37339bea31016098ba8f6656724509272102ab554d62be90d3b230c12cd5->enter($__internal_6eee37339bea31016098ba8f6656724509272102ab554d62be90d3b230c12cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "@CaogHorarios/layout.html.twig", 28)->display($context);
        // line 29
        echo "            ";
        
        $__internal_6eee37339bea31016098ba8f6656724509272102ab554d62be90d3b230c12cd5->leave($__internal_6eee37339bea31016098ba8f6656724509272102ab554d62be90d3b230c12cd5_prof);

    }

    // line 34
    public function block_alert($context, array $blocks = array())
    {
        $__internal_481c2dec5a46b86dfd52777cabbbc8620caef01c822c80a020be4fe3807fa038 = $this->env->getExtension("native_profiler");
        $__internal_481c2dec5a46b86dfd52777cabbbc8620caef01c822c80a020be4fe3807fa038->enter($__internal_481c2dec5a46b86dfd52777cabbbc8620caef01c822c80a020be4fe3807fa038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "@CaogHorarios/layout.html.twig", 34)->display($context);
        
        $__internal_481c2dec5a46b86dfd52777cabbbc8620caef01c822c80a020be4fe3807fa038->leave($__internal_481c2dec5a46b86dfd52777cabbbc8620caef01c822c80a020be4fe3807fa038_prof);

    }

    // line 35
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_f0be5efa708a95d34bb34ab4df18d229734848a748c8fef66103e8a4b3feb181 = $this->env->getExtension("native_profiler");
        $__internal_f0be5efa708a95d34bb34ab4df18d229734848a748c8fef66103e8a4b3feb181->enter($__internal_f0be5efa708a95d34bb34ab4df18d229734848a748c8fef66103e8a4b3feb181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

        // line 36
        echo "                <div class=\"page-header\">
                    <h1>";
        // line 37
        if (array_key_exists("titleBody", $context)) {
            echo twig_escape_filter($this->env, (isset($context["titleBody"]) ? $context["titleBody"] : $this->getContext($context, "titleBody")), "html", null, true);
        } else {
            echo "Horarios";
        }
        echo "</h1>
                </div>
            ";
        
        $__internal_f0be5efa708a95d34bb34ab4df18d229734848a748c8fef66103e8a4b3feb181->leave($__internal_f0be5efa708a95d34bb34ab4df18d229734848a748c8fef66103e8a4b3feb181_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c46feca690f10864d9373acfeeee72bda4535d0e7a057c33b1c261525156bd0 = $this->env->getExtension("native_profiler");
        $__internal_9c46feca690f10864d9373acfeeee72bda4535d0e7a057c33b1c261525156bd0->enter($__internal_9c46feca690f10864d9373acfeeee72bda4535d0e7a057c33b1c261525156bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c46feca690f10864d9373acfeeee72bda4535d0e7a057c33b1c261525156bd0->leave($__internal_9c46feca690f10864d9373acfeeee72bda4535d0e7a057c33b1c261525156bd0_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ee818fb7b6ceae45199cec0dd8f670b8e8e940fdb61ca68aa80076c4e14a27d6 = $this->env->getExtension("native_profiler");
        $__internal_ee818fb7b6ceae45199cec0dd8f670b8e8e940fdb61ca68aa80076c4e14a27d6->enter($__internal_ee818fb7b6ceae45199cec0dd8f670b8e8e940fdb61ca68aa80076c4e14a27d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 46
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "@CaogHorarios/layout.html.twig", 46)->display($context);
        // line 47
        echo "            ";
        
        $__internal_ee818fb7b6ceae45199cec0dd8f670b8e8e940fdb61ca68aa80076c4e14a27d6->leave($__internal_ee818fb7b6ceae45199cec0dd8f670b8e8e940fdb61ca68aa80076c4e14a27d6_prof);

    }

    public function getTemplateName()
    {
        return "@CaogHorarios/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  258 => 47,  255 => 46,  249 => 45,  238 => 40,  224 => 37,  221 => 36,  215 => 35,  203 => 34,  196 => 29,  193 => 28,  187 => 27,  180 => 25,  174 => 24,  165 => 19,  161 => 18,  156 => 17,  150 => 16,  141 => 14,  137 => 13,  133 => 12,  128 => 11,  122 => 10,  115 => 9,  109 => 8,  97 => 5,  87 => 48,  85 => 45,  79 => 41,  76 => 40,  73 => 35,  71 => 34,  64 => 29,  62 => 27,  59 => 26,  57 => 24,  52 => 21,  49 => 16,  46 => 10,  44 => 8,  38 => 5,  32 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="es">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}Creacion de horarios{% endblock %}</title>*/
/*         <meta name="description" content="Creacion de horarios">*/
/*         <meta name="author" content="Carlos A. Ortiz - Jaime B. Robles">*/
/*         {% block head %}*/
/*         {% endblock %}*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('public/css/bootstrap-theme.min.css') }}" type="text/css" rel="stylesheet" />*/
/*             <link href="{{ asset('public/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/*             <link href="{{ asset('public/css/actividad.css') }}" type="text/css" rel="stylesheet" />*/
/*              <link href="{{ asset('public/fullcalendar-2.8.0/fullcalendar.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*             <script type="text/javascript">urlBase = '{{path('caog_horarios_homepage')}}'</script>*/
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>        */
/*         {% block modal %}*/
/*         {% endblock %}*/
/*         <div class="row">     */
/*             {% block header %}*/
/*                 {% include 'CaogHorariosBundle::/general/header.html.twig' %}*/
/*             {% endblock %}            */
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-2"></div>*/
/*             <div class="col-md-8"> */
/*             {% block alert %}{% include 'CaogHorariosBundle::/general/alert.html.twig' %}{% endblock %}*/
/*             {% block titleBody %}*/
/*                 <div class="page-header">*/
/*                     <h1>{%if titleBody is defined %}{{titleBody}}{%else%}Horarios{%endif%}</h1>*/
/*                 </div>*/
/*             {% endblock %}*/
/*             {% block body %}{% endblock %}*/
/*             </div>*/
/*             <div class="col-md-2"></div>            */
/*         </div>*/
/*         <div class="row">*/
/*             {% block footer %}*/
/*                 {% include 'CaogHorariosBundle::/general/footer.html.twig' %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         */
/*     </body>*/
/* </html>*/
