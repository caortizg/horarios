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
        $__internal_d8050bf9956da5485bd4d211d932f34f16936ac922036dca42ab014cbea72f07 = $this->env->getExtension("native_profiler");
        $__internal_d8050bf9956da5485bd4d211d932f34f16936ac922036dca42ab014cbea72f07->enter($__internal_d8050bf9956da5485bd4d211d932f34f16936ac922036dca42ab014cbea72f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8050bf9956da5485bd4d211d932f34f16936ac922036dca42ab014cbea72f07->leave($__internal_d8050bf9956da5485bd4d211d932f34f16936ac922036dca42ab014cbea72f07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_718bf5b4f082a5d409ac6e39cc470eff5c1b6b3d061749d083082e4b0b9f7968 = $this->env->getExtension("native_profiler");
        $__internal_718bf5b4f082a5d409ac6e39cc470eff5c1b6b3d061749d083082e4b0b9f7968->enter($__internal_718bf5b4f082a5d409ac6e39cc470eff5c1b6b3d061749d083082e4b0b9f7968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_718bf5b4f082a5d409ac6e39cc470eff5c1b6b3d061749d083082e4b0b9f7968->leave($__internal_718bf5b4f082a5d409ac6e39cc470eff5c1b6b3d061749d083082e4b0b9f7968_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b40e5b594a771413ef89cc3a3f027bfbd901d5ba87ef298eada6e54c814c73a = $this->env->getExtension("native_profiler");
        $__internal_9b40e5b594a771413ef89cc3a3f027bfbd901d5ba87ef298eada6e54c814c73a->enter($__internal_9b40e5b594a771413ef89cc3a3f027bfbd901d5ba87ef298eada6e54c814c73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9b40e5b594a771413ef89cc3a3f027bfbd901d5ba87ef298eada6e54c814c73a->leave($__internal_9b40e5b594a771413ef89cc3a3f027bfbd901d5ba87ef298eada6e54c814c73a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_15b5dc3798a547592998e00ec9f64ac3077c05ee23b2e5644bc25ceefe3ced7e = $this->env->getExtension("native_profiler");
        $__internal_15b5dc3798a547592998e00ec9f64ac3077c05ee23b2e5644bc25ceefe3ced7e->enter($__internal_15b5dc3798a547592998e00ec9f64ac3077c05ee23b2e5644bc25ceefe3ced7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_15b5dc3798a547592998e00ec9f64ac3077c05ee23b2e5644bc25ceefe3ced7e->leave($__internal_15b5dc3798a547592998e00ec9f64ac3077c05ee23b2e5644bc25ceefe3ced7e_prof);

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
