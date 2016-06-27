<?php

/* base.html.twig */
class __TwigTemplate_6204e9542afbc8296602e2cd42d99ff6183b84193197bd581653808e11f0bc03 extends Twig_Template
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
        $__internal_0d502c4fa988c9ac9a8df7d93c6d3eeb8b39de56cb06c71a3fa8d21b6f821743 = $this->env->getExtension("native_profiler");
        $__internal_0d502c4fa988c9ac9a8df7d93c6d3eeb8b39de56cb06c71a3fa8d21b6f821743->enter($__internal_0d502c4fa988c9ac9a8df7d93c6d3eeb8b39de56cb06c71a3fa8d21b6f821743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0d502c4fa988c9ac9a8df7d93c6d3eeb8b39de56cb06c71a3fa8d21b6f821743->leave($__internal_0d502c4fa988c9ac9a8df7d93c6d3eeb8b39de56cb06c71a3fa8d21b6f821743_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac045f859e382703e6a0c8cadd970a40576b5d78737f685e70ac26b496d5481b = $this->env->getExtension("native_profiler");
        $__internal_ac045f859e382703e6a0c8cadd970a40576b5d78737f685e70ac26b496d5481b->enter($__internal_ac045f859e382703e6a0c8cadd970a40576b5d78737f685e70ac26b496d5481b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ac045f859e382703e6a0c8cadd970a40576b5d78737f685e70ac26b496d5481b->leave($__internal_ac045f859e382703e6a0c8cadd970a40576b5d78737f685e70ac26b496d5481b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9473ac01e4361891fccbd54cd4959c074dccdcd2a258ab20bb058e36d520fc7 = $this->env->getExtension("native_profiler");
        $__internal_e9473ac01e4361891fccbd54cd4959c074dccdcd2a258ab20bb058e36d520fc7->enter($__internal_e9473ac01e4361891fccbd54cd4959c074dccdcd2a258ab20bb058e36d520fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e9473ac01e4361891fccbd54cd4959c074dccdcd2a258ab20bb058e36d520fc7->leave($__internal_e9473ac01e4361891fccbd54cd4959c074dccdcd2a258ab20bb058e36d520fc7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_445cb1b08f33ba2ced02d71bf2c49b81cfff0e0f65b72c7f26405a5ab6b98cb3 = $this->env->getExtension("native_profiler");
        $__internal_445cb1b08f33ba2ced02d71bf2c49b81cfff0e0f65b72c7f26405a5ab6b98cb3->enter($__internal_445cb1b08f33ba2ced02d71bf2c49b81cfff0e0f65b72c7f26405a5ab6b98cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_445cb1b08f33ba2ced02d71bf2c49b81cfff0e0f65b72c7f26405a5ab6b98cb3->leave($__internal_445cb1b08f33ba2ced02d71bf2c49b81cfff0e0f65b72c7f26405a5ab6b98cb3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e34ecdf1bedfd5daca04f9e3b5adfe3cabf22f38b7328506dc45325c93353e81 = $this->env->getExtension("native_profiler");
        $__internal_e34ecdf1bedfd5daca04f9e3b5adfe3cabf22f38b7328506dc45325c93353e81->enter($__internal_e34ecdf1bedfd5daca04f9e3b5adfe3cabf22f38b7328506dc45325c93353e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_e34ecdf1bedfd5daca04f9e3b5adfe3cabf22f38b7328506dc45325c93353e81->leave($__internal_e34ecdf1bedfd5daca04f9e3b5adfe3cabf22f38b7328506dc45325c93353e81_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
