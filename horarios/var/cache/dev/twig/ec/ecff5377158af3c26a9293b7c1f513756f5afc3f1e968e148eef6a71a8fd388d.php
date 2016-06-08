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
            'modal' => array($this, 'block_modal'),
            'alert' => array($this, 'block_alert'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a9d4827c498c258a5f5ed82151e29641ee416095af01209ad81178bb749a02f = $this->env->getExtension("native_profiler");
        $__internal_6a9d4827c498c258a5f5ed82151e29641ee416095af01209ad81178bb749a02f->enter($__internal_6a9d4827c498c258a5f5ed82151e29641ee416095af01209ad81178bb749a02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaogHorariosBundle::layout.html.twig"));

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
        // line 14
        echo "    </head>

    <body>        
        ";
        // line 17
        $this->displayBlock('modal', $context, $blocks);
        // line 18
        echo "   
        ";
        // line 19
        $this->displayBlock('alert', $context, $blocks);
        // line 20
        echo "   
        ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "        <div class=\"row\">
            <div class=\"col-md-2\"></div>
            <div class=\"col-md-8\">";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
            <div class=\"col-md-2\"></div>            
        </div>
        ";
        // line 29
        $this->displayBlock('footer', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>";
        
        $__internal_6a9d4827c498c258a5f5ed82151e29641ee416095af01209ad81178bb749a02f->leave($__internal_6a9d4827c498c258a5f5ed82151e29641ee416095af01209ad81178bb749a02f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_07222f46831fa7e58473420e19167a995979917dfffbd30ab6411e603ecf0033 = $this->env->getExtension("native_profiler");
        $__internal_07222f46831fa7e58473420e19167a995979917dfffbd30ab6411e603ecf0033->enter($__internal_07222f46831fa7e58473420e19167a995979917dfffbd30ab6411e603ecf0033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creacion de horarios";
        
        $__internal_07222f46831fa7e58473420e19167a995979917dfffbd30ab6411e603ecf0033->leave($__internal_07222f46831fa7e58473420e19167a995979917dfffbd30ab6411e603ecf0033_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_58fe7d5d8f68835838049aec51adcff13c673bf34cde8be4390db92208401311 = $this->env->getExtension("native_profiler");
        $__internal_58fe7d5d8f68835838049aec51adcff13c673bf34cde8be4390db92208401311->enter($__internal_58fe7d5d8f68835838049aec51adcff13c673bf34cde8be4390db92208401311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "        ";
        
        $__internal_58fe7d5d8f68835838049aec51adcff13c673bf34cde8be4390db92208401311->leave($__internal_58fe7d5d8f68835838049aec51adcff13c673bf34cde8be4390db92208401311_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2d217511b79ac6a0f9e76745e960e918a47a901656a41e503fb7eb49a92bd67 = $this->env->getExtension("native_profiler");
        $__internal_f2d217511b79ac6a0f9e76745e960e918a47a901656a41e503fb7eb49a92bd67->enter($__internal_f2d217511b79ac6a0f9e76745e960e918a47a901656a41e503fb7eb49a92bd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_f2d217511b79ac6a0f9e76745e960e918a47a901656a41e503fb7eb49a92bd67->leave($__internal_f2d217511b79ac6a0f9e76745e960e918a47a901656a41e503fb7eb49a92bd67_prof);

    }

    // line 17
    public function block_modal($context, array $blocks = array())
    {
        $__internal_322cd174f3080e63cc5bce16c1c806f3ede640a7b591eab26b502d953087ffcc = $this->env->getExtension("native_profiler");
        $__internal_322cd174f3080e63cc5bce16c1c806f3ede640a7b591eab26b502d953087ffcc->enter($__internal_322cd174f3080e63cc5bce16c1c806f3ede640a7b591eab26b502d953087ffcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 18
        echo "        ";
        
        $__internal_322cd174f3080e63cc5bce16c1c806f3ede640a7b591eab26b502d953087ffcc->leave($__internal_322cd174f3080e63cc5bce16c1c806f3ede640a7b591eab26b502d953087ffcc_prof);

    }

    // line 19
    public function block_alert($context, array $blocks = array())
    {
        $__internal_bb30a8449251745a9fa3d35aa6edbe361da939c9bda32d42053c11bde4748e28 = $this->env->getExtension("native_profiler");
        $__internal_bb30a8449251745a9fa3d35aa6edbe361da939c9bda32d42053c11bde4748e28->enter($__internal_bb30a8449251745a9fa3d35aa6edbe361da939c9bda32d42053c11bde4748e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alert"));

        // line 20
        echo "        ";
        
        $__internal_bb30a8449251745a9fa3d35aa6edbe361da939c9bda32d42053c11bde4748e28->leave($__internal_bb30a8449251745a9fa3d35aa6edbe361da939c9bda32d42053c11bde4748e28_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_4964d9f0af8c8b3ab6f3a4d499e796de3a20e2436947beb2e6fddba4b3493abb = $this->env->getExtension("native_profiler");
        $__internal_4964d9f0af8c8b3ab6f3a4d499e796de3a20e2436947beb2e6fddba4b3493abb->enter($__internal_4964d9f0af8c8b3ab6f3a4d499e796de3a20e2436947beb2e6fddba4b3493abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "            ";
        $this->loadTemplate("CaogHorariosBundle::/general/header.html.twig", "CaogHorariosBundle::layout.html.twig", 22)->display($context);
        // line 23
        echo "        ";
        
        $__internal_4964d9f0af8c8b3ab6f3a4d499e796de3a20e2436947beb2e6fddba4b3493abb->leave($__internal_4964d9f0af8c8b3ab6f3a4d499e796de3a20e2436947beb2e6fddba4b3493abb_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cc6b34d7b0f6599dec365cf8d4a1555a6237a196a004ec684fc0cbff77f8255 = $this->env->getExtension("native_profiler");
        $__internal_8cc6b34d7b0f6599dec365cf8d4a1555a6237a196a004ec684fc0cbff77f8255->enter($__internal_8cc6b34d7b0f6599dec365cf8d4a1555a6237a196a004ec684fc0cbff77f8255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8cc6b34d7b0f6599dec365cf8d4a1555a6237a196a004ec684fc0cbff77f8255->leave($__internal_8cc6b34d7b0f6599dec365cf8d4a1555a6237a196a004ec684fc0cbff77f8255_prof);

    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fe3c5c49a845e2166576647e1add812f18649f59dcdc081c4c1d29b726f68b0b = $this->env->getExtension("native_profiler");
        $__internal_fe3c5c49a845e2166576647e1add812f18649f59dcdc081c4c1d29b726f68b0b->enter($__internal_fe3c5c49a845e2166576647e1add812f18649f59dcdc081c4c1d29b726f68b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 30
        echo "            ";
        $this->loadTemplate("CaogHorariosBundle::/general/footer.html.twig", "CaogHorariosBundle::layout.html.twig", 30)->display($context);
        // line 31
        echo "        ";
        
        $__internal_fe3c5c49a845e2166576647e1add812f18649f59dcdc081c4c1d29b726f68b0b->leave($__internal_fe3c5c49a845e2166576647e1add812f18649f59dcdc081c4c1d29b726f68b0b_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa17de78bb8ad3a06f050e58a238d33cb66a920c76d2d883fe0c11d5f51a5d4a = $this->env->getExtension("native_profiler");
        $__internal_fa17de78bb8ad3a06f050e58a238d33cb66a920c76d2d883fe0c11d5f51a5d4a->enter($__internal_fa17de78bb8ad3a06f050e58a238d33cb66a920c76d2d883fe0c11d5f51a5d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_fa17de78bb8ad3a06f050e58a238d33cb66a920c76d2d883fe0c11d5f51a5d4a->leave($__internal_fa17de78bb8ad3a06f050e58a238d33cb66a920c76d2d883fe0c11d5f51a5d4a_prof);

    }

    public function getTemplateName()
    {
        return "CaogHorariosBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 34,  208 => 33,  202 => 32,  195 => 31,  192 => 30,  186 => 29,  175 => 26,  168 => 23,  165 => 22,  159 => 21,  152 => 20,  146 => 19,  139 => 18,  133 => 17,  124 => 12,  119 => 11,  113 => 10,  106 => 9,  100 => 8,  88 => 5,  80 => 36,  77 => 32,  75 => 29,  69 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 19,  55 => 18,  53 => 17,  48 => 14,  45 => 10,  43 => 8,  37 => 5,  31 => 1,);
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
/*             <link href="{{ asset('public/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/*             <link href="{{ asset('public/css/bootstrap-theme.min.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>        */
/*         {% block modal %}*/
/*         {% endblock %}   */
/*         {% block alert %}*/
/*         {% endblock %}   */
/*         {% block header %}*/
/*             {% include 'CaogHorariosBundle::/general/header.html.twig' %}*/
/*         {% endblock %}*/
/*         <div class="row">*/
/*             <div class="col-md-2"></div>*/
/*             <div class="col-md-8">{% block body %}{% endblock %}</div>*/
/*             <div class="col-md-2"></div>            */
/*         </div>*/
/*         {% block footer %}*/
/*             {% include 'CaogHorariosBundle::/general/footer.html.twig' %}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
