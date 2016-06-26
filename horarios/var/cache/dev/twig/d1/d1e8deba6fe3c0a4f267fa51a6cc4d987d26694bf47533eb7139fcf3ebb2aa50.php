<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_359b34f5765bd6f4925c91658ecca8a0f33ebcc10bc343fe714cf8e211264233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecd733cc9e0bc09426ff5478c83d7ab3886b049d4bd54ef9a0c53e14812ca1f3 = $this->env->getExtension("native_profiler");
        $__internal_ecd733cc9e0bc09426ff5478c83d7ab3886b049d4bd54ef9a0c53e14812ca1f3->enter($__internal_ecd733cc9e0bc09426ff5478c83d7ab3886b049d4bd54ef9a0c53e14812ca1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecd733cc9e0bc09426ff5478c83d7ab3886b049d4bd54ef9a0c53e14812ca1f3->leave($__internal_ecd733cc9e0bc09426ff5478c83d7ab3886b049d4bd54ef9a0c53e14812ca1f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2937bb2980aa92ba009f33ea39245ebcfa9ea7e1992ac549c5bf987a86cea7d = $this->env->getExtension("native_profiler");
        $__internal_d2937bb2980aa92ba009f33ea39245ebcfa9ea7e1992ac549c5bf987a86cea7d->enter($__internal_d2937bb2980aa92ba009f33ea39245ebcfa9ea7e1992ac549c5bf987a86cea7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d2937bb2980aa92ba009f33ea39245ebcfa9ea7e1992ac549c5bf987a86cea7d->leave($__internal_d2937bb2980aa92ba009f33ea39245ebcfa9ea7e1992ac549c5bf987a86cea7d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b7072147b6a597e2ae39f97180dec949753fb622c4087611ba04b3775f8f845 = $this->env->getExtension("native_profiler");
        $__internal_6b7072147b6a597e2ae39f97180dec949753fb622c4087611ba04b3775f8f845->enter($__internal_6b7072147b6a597e2ae39f97180dec949753fb622c4087611ba04b3775f8f845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6b7072147b6a597e2ae39f97180dec949753fb622c4087611ba04b3775f8f845->leave($__internal_6b7072147b6a597e2ae39f97180dec949753fb622c4087611ba04b3775f8f845_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5bcd8607dd2ac1cb17773e1369c36c99eb97ec6efa6b415faad26bb0ae73905 = $this->env->getExtension("native_profiler");
        $__internal_e5bcd8607dd2ac1cb17773e1369c36c99eb97ec6efa6b415faad26bb0ae73905->enter($__internal_e5bcd8607dd2ac1cb17773e1369c36c99eb97ec6efa6b415faad26bb0ae73905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e5bcd8607dd2ac1cb17773e1369c36c99eb97ec6efa6b415faad26bb0ae73905->leave($__internal_e5bcd8607dd2ac1cb17773e1369c36c99eb97ec6efa6b415faad26bb0ae73905_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
