<?php

/* ::base.html.twig */
class __TwigTemplate_6ea0900187a95b2dc1e3f59317e153b328dcf6872d56f81923620d100ae1973c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e28d048fcc638a59f4354200b2239b4b990afb2f681930c17be2c12c4d31705b = $this->env->getExtension("native_profiler");
        $__internal_e28d048fcc638a59f4354200b2239b4b990afb2f681930c17be2c12c4d31705b->enter($__internal_e28d048fcc638a59f4354200b2239b4b990afb2f681930c17be2c12c4d31705b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_e28d048fcc638a59f4354200b2239b4b990afb2f681930c17be2c12c4d31705b->leave($__internal_e28d048fcc638a59f4354200b2239b4b990afb2f681930c17be2c12c4d31705b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_723565e222e553492a9a3079eeb80ab22c7cbab8ed6c34d2306b9ca35b381b3c = $this->env->getExtension("native_profiler");
        $__internal_723565e222e553492a9a3079eeb80ab22c7cbab8ed6c34d2306b9ca35b381b3c->enter($__internal_723565e222e553492a9a3079eeb80ab22c7cbab8ed6c34d2306b9ca35b381b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_723565e222e553492a9a3079eeb80ab22c7cbab8ed6c34d2306b9ca35b381b3c->leave($__internal_723565e222e553492a9a3079eeb80ab22c7cbab8ed6c34d2306b9ca35b381b3c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee9184e5131d2089d1f6e6bb8d7d6482dde8181ed3e2c1676961861452503dc5 = $this->env->getExtension("native_profiler");
        $__internal_ee9184e5131d2089d1f6e6bb8d7d6482dde8181ed3e2c1676961861452503dc5->enter($__internal_ee9184e5131d2089d1f6e6bb8d7d6482dde8181ed3e2c1676961861452503dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ee9184e5131d2089d1f6e6bb8d7d6482dde8181ed3e2c1676961861452503dc5->leave($__internal_ee9184e5131d2089d1f6e6bb8d7d6482dde8181ed3e2c1676961861452503dc5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2f01c05a89b8d59c34fa52d7c247a39fd47089b115b97a4dc011025e622d787 = $this->env->getExtension("native_profiler");
        $__internal_d2f01c05a89b8d59c34fa52d7c247a39fd47089b115b97a4dc011025e622d787->enter($__internal_d2f01c05a89b8d59c34fa52d7c247a39fd47089b115b97a4dc011025e622d787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d2f01c05a89b8d59c34fa52d7c247a39fd47089b115b97a4dc011025e622d787->leave($__internal_d2f01c05a89b8d59c34fa52d7c247a39fd47089b115b97a4dc011025e622d787_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7342cde6bfdce1820a144925a21c2d25a1c1556a548d119fe93277c82236a08b = $this->env->getExtension("native_profiler");
        $__internal_7342cde6bfdce1820a144925a21c2d25a1c1556a548d119fe93277c82236a08b->enter($__internal_7342cde6bfdce1820a144925a21c2d25a1c1556a548d119fe93277c82236a08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_7342cde6bfdce1820a144925a21c2d25a1c1556a548d119fe93277c82236a08b->leave($__internal_7342cde6bfdce1820a144925a21c2d25a1c1556a548d119fe93277c82236a08b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 12,  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 13,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
