<?php

/* CaogHorariosBundle::layout.html.twig */
class __TwigTemplate_5381bab555ff349e25035e64fe5fcc34edf9e26c8acec4b708ca856032a41f44 extends Twig_Template
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
        $__internal_c8aa88f5c0a30e41140fa053b9ffe5135637cfa0295257671e580431b25b05d4 = $this->env->getExtension("native_profiler");
        $__internal_c8aa88f5c0a30e41140fa053b9ffe5135637cfa0295257671e580431b25b05d4->enter($__internal_c8aa88f5c0a30e41140fa053b9ffe5135637cfa0295257671e580431b25b05d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle::layout.html.twig"));

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
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </head>

    <body>        
        ";
        // line 23
        $this->displayBlock('modal', $context, $blocks);
        // line 25
        echo "        <div class=\"row\">     
            ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 28
        echo "            
        </div>
        <div class=\"row\">
            <div class=\"col-md-2\"></div>
            <div class=\"col-md-8\"> 
            ";
        // line 33
        $this->displayBlock('alert', $context, $blocks);
        // line 34
        echo "            ";
        $this->displayBlock('titleBody', $context, $blocks);
        // line 39
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "            </div>
            <div class=\"col-md-2\"></div>            
        </div>
        <div class=\"row\">
            ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "        </div>
        
    </body>
</html>";
        
        $__internal_c8aa88f5c0a30e41140fa053b9ffe5135637cfa0295257671e580431b25b05d4->leave($__internal_c8aa88f5c0a30e41140fa053b9ffe5135637cfa0295257671e580431b25b05d4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e589e84d8b9e4e10e1219aa773356c3459f2c6a0db09d73c68e93d9f7b2207d8 = $this->env->getExtension("native_profiler");
        $__internal_e589e84d8b9e4e10e1219aa773356c3459f2c6a0db09d73c68e93d9f7b2207d8->enter($__internal_e589e84d8b9e4e10e1219aa773356c3459f2c6a0db09d73c68e93d9f7b2207d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_e589e84d8b9e4e10e1219aa773356c3459f2c6a0db09d73c68e93d9f7b2207d8->leave($__internal_e589e84d8b9e4e10e1219aa773356c3459f2c6a0db09d73c68e93d9f7b2207d8_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_09f125b937fb045f74c659a62814ac1cf95c81e1e75d2606f5d1a42e65d354ca = $this->env->getExtension("native_profiler");
        $__internal_09f125b937fb045f74c659a62814ac1cf95c81e1e75d2606f5d1a42e65d354ca->enter($__internal_09f125b937fb045f74c659a62814ac1cf95c81e1e75d2606f5d1a42e65d354ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_09f125b937fb045f74c659a62814ac1cf95c81e1e75d2606f5d1a42e65d354ca->leave($__internal_09f125b937fb045f74c659a62814ac1cf95c81e1e75d2606f5d1a42e65d354ca_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e84d897fe40d0b0f96418566514c4dbefbdb70b41f61889cd00372313a053f3 = $this->env->getExtension("native_profiler");
        $__internal_9e84d897fe40d0b0f96418566514c4dbefbdb70b41f61889cd00372313a053f3->enter($__internal_9e84d897fe40d0b0f96418566514c4dbefbdb70b41f61889cd00372313a053f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        ";
        
        $__internal_9e84d897fe40d0b0f96418566514c4dbefbdb70b41f61889cd00372313a053f3->leave($__internal_9e84d897fe40d0b0f96418566514c4dbefbdb70b41f61889cd00372313a053f3_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6def0138b6aed7711dc8c0c6de8d1bb3cfaebd8ca2b457edd1d9b31b1bcdf02d = $this->env->getExtension("native_profiler");
        $__internal_6def0138b6aed7711dc8c0c6de8d1bb3cfaebd8ca2b457edd1d9b31b1bcdf02d->enter($__internal_6def0138b6aed7711dc8c0c6de8d1bb3cfaebd8ca2b457edd1d9b31b1bcdf02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">urlBase = '";
        // line 18
        echo $this->env->getExtension('routing')->getPath("caog_horarios_homepage");
        echo "'</script>
        ";
        
        $__internal_6def0138b6aed7711dc8c0c6de8d1bb3cfaebd8ca2b457edd1d9b31b1bcdf02d->leave($__internal_6def0138b6aed7711dc8c0c6de8d1bb3cfaebd8ca2b457edd1d9b31b1bcdf02d_prof);

    }

    // line 23
    public function block_modal($context, array $blocks = array())
    {
        $__internal_1273145b26978e68c9146c77da52ea432d4eb5e2dd62e20b3736a9daf3db91c9 = $this->env->getExtension("native_profiler");
        $__internal_1273145b26978e68c9146c77da52ea432d4eb5e2dd62e20b3736a9daf3db91c9->enter($__internal_1273145b26978e68c9146c77da52ea432d4eb5e2dd62e20b3736a9daf3db91c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 24
        echo "        ";
        
        $__internal_1273145b26978e68c9146c77da52ea432d4eb5e2dd62e20b3736a9daf3db91c9->leave($__internal_1273145b26978e68c9146c77da52ea432d4eb5e2dd62e20b3736a9daf3db91c9_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_607217bdd798bd4ff9577263c086ee0aef2f4c51b557906e2ee0778c63c1c26f = $this->env->getExtension("native_profiler");
        $__internal_607217bdd798bd4ff9577263c086ee0aef2f4c51b557906e2ee0778c63c1c26f->enter($__internal_607217bdd798bd4ff9577263c086ee0aef2f4c51b557906e2ee0778c63c1c26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "CaogHorariosBundle::layout.html.twig", 27)->display($context);
        // line 28
        echo "            ";
        
        $__internal_607217bdd798bd4ff9577263c086ee0aef2f4c51b557906e2ee0778c63c1c26f->leave($__internal_607217bdd798bd4ff9577263c086ee0aef2f4c51b557906e2ee0778c63c1c26f_prof);

    }

    // line 33
    public function block_alert($context, array $blocks = array())
    {
        $__internal_e0742370a15e58da2d8afe712b519cd5a324a0b0782ce5a4f231efed3296af33 = $this->env->getExtension("native_profiler");
        $__internal_e0742370a15e58da2d8afe712b519cd5a324a0b0782ce5a4f231efed3296af33->enter($__internal_e0742370a15e58da2d8afe712b519cd5a324a0b0782ce5a4f231efed3296af33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "CaogHorariosBundle::layout.html.twig", 33)->display($context);
        
        $__internal_e0742370a15e58da2d8afe712b519cd5a324a0b0782ce5a4f231efed3296af33->leave($__internal_e0742370a15e58da2d8afe712b519cd5a324a0b0782ce5a4f231efed3296af33_prof);

    }

    // line 34
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_39ba7371481e453434260310127a64965430de231860340a9984aa11668379f8 = $this->env->getExtension("native_profiler");
        $__internal_39ba7371481e453434260310127a64965430de231860340a9984aa11668379f8->enter($__internal_39ba7371481e453434260310127a64965430de231860340a9984aa11668379f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

        // line 35
        echo "                <div class=\"page-header\">
                    <h1>";
        // line 36
        if (array_key_exists("titleBody", $context)) {
            echo twig_escape_filter($this->env, (isset($context["titleBody"]) ? $context["titleBody"] : $this->getContext($context, "titleBody")), "html", null, true);
        } else {
            echo "Horarios";
        }
        echo "</h1>
                </div>
            ";
        
        $__internal_39ba7371481e453434260310127a64965430de231860340a9984aa11668379f8->leave($__internal_39ba7371481e453434260310127a64965430de231860340a9984aa11668379f8_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_8629bc75b10e1d372cbdcac43e8ffa030fad9b35cd62bc69b7f73db9353fbf3b = $this->env->getExtension("native_profiler");
        $__internal_8629bc75b10e1d372cbdcac43e8ffa030fad9b35cd62bc69b7f73db9353fbf3b->enter($__internal_8629bc75b10e1d372cbdcac43e8ffa030fad9b35cd62bc69b7f73db9353fbf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8629bc75b10e1d372cbdcac43e8ffa030fad9b35cd62bc69b7f73db9353fbf3b->leave($__internal_8629bc75b10e1d372cbdcac43e8ffa030fad9b35cd62bc69b7f73db9353fbf3b_prof);

    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4ea609ba3271f701b22b996d88a9fb4d7da3c037e3da9f2a3f674bfb02e1ce9f = $this->env->getExtension("native_profiler");
        $__internal_4ea609ba3271f701b22b996d88a9fb4d7da3c037e3da9f2a3f674bfb02e1ce9f->enter($__internal_4ea609ba3271f701b22b996d88a9fb4d7da3c037e3da9f2a3f674bfb02e1ce9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 45
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "CaogHorariosBundle::layout.html.twig", 45)->display($context);
        // line 46
        echo "            ";
        
        $__internal_4ea609ba3271f701b22b996d88a9fb4d7da3c037e3da9f2a3f674bfb02e1ce9f->leave($__internal_4ea609ba3271f701b22b996d88a9fb4d7da3c037e3da9f2a3f674bfb02e1ce9f_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  254 => 46,  251 => 45,  245 => 44,  234 => 39,  220 => 36,  217 => 35,  211 => 34,  199 => 33,  192 => 28,  189 => 27,  183 => 26,  176 => 24,  170 => 23,  161 => 18,  157 => 17,  152 => 16,  146 => 15,  137 => 13,  133 => 12,  128 => 11,  122 => 10,  115 => 9,  109 => 8,  97 => 5,  87 => 47,  85 => 44,  79 => 40,  76 => 39,  73 => 34,  71 => 33,  64 => 28,  62 => 26,  59 => 25,  57 => 23,  52 => 20,  49 => 15,  46 => 10,  44 => 8,  38 => 5,  32 => 1,);
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
