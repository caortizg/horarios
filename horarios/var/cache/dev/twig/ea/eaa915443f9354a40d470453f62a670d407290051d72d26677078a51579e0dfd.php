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
        $__internal_a9f595350f0192b6100741876d23d9c38b3aefc6fa61b332c36c833bb245356c = $this->env->getExtension("native_profiler");
        $__internal_a9f595350f0192b6100741876d23d9c38b3aefc6fa61b332c36c833bb245356c->enter($__internal_a9f595350f0192b6100741876d23d9c38b3aefc6fa61b332c36c833bb245356c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a9f595350f0192b6100741876d23d9c38b3aefc6fa61b332c36c833bb245356c->leave($__internal_a9f595350f0192b6100741876d23d9c38b3aefc6fa61b332c36c833bb245356c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ace88948abcc6ef8b7c72a97cb8458b8174e33aa0ee1a8fd8eb3927821eaa62 = $this->env->getExtension("native_profiler");
        $__internal_5ace88948abcc6ef8b7c72a97cb8458b8174e33aa0ee1a8fd8eb3927821eaa62->enter($__internal_5ace88948abcc6ef8b7c72a97cb8458b8174e33aa0ee1a8fd8eb3927821eaa62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5ace88948abcc6ef8b7c72a97cb8458b8174e33aa0ee1a8fd8eb3927821eaa62->leave($__internal_5ace88948abcc6ef8b7c72a97cb8458b8174e33aa0ee1a8fd8eb3927821eaa62_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53c812b7bcd59c12ba787cfce6a823b807a4155690c7e948c1b8ecf95ed4aa80 = $this->env->getExtension("native_profiler");
        $__internal_53c812b7bcd59c12ba787cfce6a823b807a4155690c7e948c1b8ecf95ed4aa80->enter($__internal_53c812b7bcd59c12ba787cfce6a823b807a4155690c7e948c1b8ecf95ed4aa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_53c812b7bcd59c12ba787cfce6a823b807a4155690c7e948c1b8ecf95ed4aa80->leave($__internal_53c812b7bcd59c12ba787cfce6a823b807a4155690c7e948c1b8ecf95ed4aa80_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6a4e02d5a769448e35bc0a49389c6991365add8ec0a5403adbccd2588292283 = $this->env->getExtension("native_profiler");
        $__internal_d6a4e02d5a769448e35bc0a49389c6991365add8ec0a5403adbccd2588292283->enter($__internal_d6a4e02d5a769448e35bc0a49389c6991365add8ec0a5403adbccd2588292283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6a4e02d5a769448e35bc0a49389c6991365add8ec0a5403adbccd2588292283->leave($__internal_d6a4e02d5a769448e35bc0a49389c6991365add8ec0a5403adbccd2588292283_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_473bee82ded3af51688aeebaac237f27c50b21f8984547d7185c6bda0d3760be = $this->env->getExtension("native_profiler");
        $__internal_473bee82ded3af51688aeebaac237f27c50b21f8984547d7185c6bda0d3760be->enter($__internal_473bee82ded3af51688aeebaac237f27c50b21f8984547d7185c6bda0d3760be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_473bee82ded3af51688aeebaac237f27c50b21f8984547d7185c6bda0d3760be->leave($__internal_473bee82ded3af51688aeebaac237f27c50b21f8984547d7185c6bda0d3760be_prof);

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
