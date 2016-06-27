<?php

/* CaogHorariosBundle::layout.html.twig */
class __TwigTemplate_fc052d9291555bc13cdf65c06640fd937599de8167acdf464b35fbbcb9167611 extends Twig_Template
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
        $__internal_b5ebde83567fef7a65d90c1df66a9adfa7f552b74ce73f55be7a37877248e848 = $this->env->getExtension("native_profiler");
        $__internal_b5ebde83567fef7a65d90c1df66a9adfa7f552b74ce73f55be7a37877248e848->enter($__internal_b5ebde83567fef7a65d90c1df66a9adfa7f552b74ce73f55be7a37877248e848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle::layout.html.twig"));

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
        
        $__internal_b5ebde83567fef7a65d90c1df66a9adfa7f552b74ce73f55be7a37877248e848->leave($__internal_b5ebde83567fef7a65d90c1df66a9adfa7f552b74ce73f55be7a37877248e848_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab438740ffdb5a757b10d8dfe41cfe6978bace43e473f2c4c301b050538822a9 = $this->env->getExtension("native_profiler");
        $__internal_ab438740ffdb5a757b10d8dfe41cfe6978bace43e473f2c4c301b050538822a9->enter($__internal_ab438740ffdb5a757b10d8dfe41cfe6978bace43e473f2c4c301b050538822a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_ab438740ffdb5a757b10d8dfe41cfe6978bace43e473f2c4c301b050538822a9->leave($__internal_ab438740ffdb5a757b10d8dfe41cfe6978bace43e473f2c4c301b050538822a9_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_f759b4e525e1751e2393af427dab7813ea8244dd6cca06c9c4c49b74e8c0d3a4 = $this->env->getExtension("native_profiler");
        $__internal_f759b4e525e1751e2393af427dab7813ea8244dd6cca06c9c4c49b74e8c0d3a4->enter($__internal_f759b4e525e1751e2393af427dab7813ea8244dd6cca06c9c4c49b74e8c0d3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_f759b4e525e1751e2393af427dab7813ea8244dd6cca06c9c4c49b74e8c0d3a4->leave($__internal_f759b4e525e1751e2393af427dab7813ea8244dd6cca06c9c4c49b74e8c0d3a4_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17822cbb7e650249589a7c3fa9549482b7949dee1d261dc22c84232ae7c82d04 = $this->env->getExtension("native_profiler");
        $__internal_17822cbb7e650249589a7c3fa9549482b7949dee1d261dc22c84232ae7c82d04->enter($__internal_17822cbb7e650249589a7c3fa9549482b7949dee1d261dc22c84232ae7c82d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_17822cbb7e650249589a7c3fa9549482b7949dee1d261dc22c84232ae7c82d04->leave($__internal_17822cbb7e650249589a7c3fa9549482b7949dee1d261dc22c84232ae7c82d04_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2fb586d3865496e3499f7784e8be42dfc0937f7db29ec2e5425ecd166981fa2f = $this->env->getExtension("native_profiler");
        $__internal_2fb586d3865496e3499f7784e8be42dfc0937f7db29ec2e5425ecd166981fa2f->enter($__internal_2fb586d3865496e3499f7784e8be42dfc0937f7db29ec2e5425ecd166981fa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2fb586d3865496e3499f7784e8be42dfc0937f7db29ec2e5425ecd166981fa2f->leave($__internal_2fb586d3865496e3499f7784e8be42dfc0937f7db29ec2e5425ecd166981fa2f_prof);

    }

    // line 24
    public function block_modal($context, array $blocks = array())
    {
        $__internal_66d037a971c2540da5d04072c0e7568645f61811e9122046349474781f075a4e = $this->env->getExtension("native_profiler");
        $__internal_66d037a971c2540da5d04072c0e7568645f61811e9122046349474781f075a4e->enter($__internal_66d037a971c2540da5d04072c0e7568645f61811e9122046349474781f075a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 25
        echo "        ";
        
        $__internal_66d037a971c2540da5d04072c0e7568645f61811e9122046349474781f075a4e->leave($__internal_66d037a971c2540da5d04072c0e7568645f61811e9122046349474781f075a4e_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_94fbc6df7b7502cdb50afdb3312bd566443ee005f368f371e1b5b80805919bb5 = $this->env->getExtension("native_profiler");
        $__internal_94fbc6df7b7502cdb50afdb3312bd566443ee005f368f371e1b5b80805919bb5->enter($__internal_94fbc6df7b7502cdb50afdb3312bd566443ee005f368f371e1b5b80805919bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "CaogHorariosBundle::layout.html.twig", 28)->display($context);
        // line 29
        echo "            ";
        
        $__internal_94fbc6df7b7502cdb50afdb3312bd566443ee005f368f371e1b5b80805919bb5->leave($__internal_94fbc6df7b7502cdb50afdb3312bd566443ee005f368f371e1b5b80805919bb5_prof);

    }

    // line 34
    public function block_alert($context, array $blocks = array())
    {
        $__internal_b817514e16834b47493656d807958cc5a19cb0e9cf088ae696fa0afdcfb72631 = $this->env->getExtension("native_profiler");
        $__internal_b817514e16834b47493656d807958cc5a19cb0e9cf088ae696fa0afdcfb72631->enter($__internal_b817514e16834b47493656d807958cc5a19cb0e9cf088ae696fa0afdcfb72631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        $this->loadTemplate("CaogHorariosBundle::/general/alert.html.twig", "CaogHorariosBundle::layout.html.twig", 34)->display($context);
        
        $__internal_b817514e16834b47493656d807958cc5a19cb0e9cf088ae696fa0afdcfb72631->leave($__internal_b817514e16834b47493656d807958cc5a19cb0e9cf088ae696fa0afdcfb72631_prof);

    }

    // line 35
    public function block_titleBody($context, array $blocks = array())
    {
        $__internal_f4be0f1200e5d07f0a95817e78e0aa1378074cc83b727e2035be386781460fe3 = $this->env->getExtension("native_profiler");
        $__internal_f4be0f1200e5d07f0a95817e78e0aa1378074cc83b727e2035be386781460fe3->enter($__internal_f4be0f1200e5d07f0a95817e78e0aa1378074cc83b727e2035be386781460fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleBody"));

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
        
        $__internal_f4be0f1200e5d07f0a95817e78e0aa1378074cc83b727e2035be386781460fe3->leave($__internal_f4be0f1200e5d07f0a95817e78e0aa1378074cc83b727e2035be386781460fe3_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_86dd26cf015a9e48db95a6b30d7a13efd272c27f241532b9d01579c8bc3f8750 = $this->env->getExtension("native_profiler");
        $__internal_86dd26cf015a9e48db95a6b30d7a13efd272c27f241532b9d01579c8bc3f8750->enter($__internal_86dd26cf015a9e48db95a6b30d7a13efd272c27f241532b9d01579c8bc3f8750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_86dd26cf015a9e48db95a6b30d7a13efd272c27f241532b9d01579c8bc3f8750->leave($__internal_86dd26cf015a9e48db95a6b30d7a13efd272c27f241532b9d01579c8bc3f8750_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_58fb95f3056af00c2870f076a0548f9d32c50a016007f13a743fbc744b7b2686 = $this->env->getExtension("native_profiler");
        $__internal_58fb95f3056af00c2870f076a0548f9d32c50a016007f13a743fbc744b7b2686->enter($__internal_58fb95f3056af00c2870f076a0548f9d32c50a016007f13a743fbc744b7b2686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 46
        echo "                ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "CaogHorariosBundle::layout.html.twig", 46)->display($context);
        // line 47
        echo "            ";
        
        $__internal_58fb95f3056af00c2870f076a0548f9d32c50a016007f13a743fbc744b7b2686->leave($__internal_58fb95f3056af00c2870f076a0548f9d32c50a016007f13a743fbc744b7b2686_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle::layout.html.twig";
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
