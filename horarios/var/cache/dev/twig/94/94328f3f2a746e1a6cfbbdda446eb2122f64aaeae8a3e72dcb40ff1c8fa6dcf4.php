<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cb4d9ca618b386af1c5341699d71366a055a1800780b1040b969fb9d21562ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_d748a561fc5d91051d6c0e0ad7dc47d4ea0e6ca71a06bf6ff9743b99984c1f0f = $this->env->getExtension("native_profiler");
        $__internal_d748a561fc5d91051d6c0e0ad7dc47d4ea0e6ca71a06bf6ff9743b99984c1f0f->enter($__internal_d748a561fc5d91051d6c0e0ad7dc47d4ea0e6ca71a06bf6ff9743b99984c1f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d748a561fc5d91051d6c0e0ad7dc47d4ea0e6ca71a06bf6ff9743b99984c1f0f->leave($__internal_d748a561fc5d91051d6c0e0ad7dc47d4ea0e6ca71a06bf6ff9743b99984c1f0f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20a6e2c2de80f46323adbec443a180667111b09e87724f829ee4febace931464 = $this->env->getExtension("native_profiler");
        $__internal_20a6e2c2de80f46323adbec443a180667111b09e87724f829ee4febace931464->enter($__internal_20a6e2c2de80f46323adbec443a180667111b09e87724f829ee4febace931464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_20a6e2c2de80f46323adbec443a180667111b09e87724f829ee4febace931464->leave($__internal_20a6e2c2de80f46323adbec443a180667111b09e87724f829ee4febace931464_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef406cbfe4af185633ffc26fc9f41ff7b1632e983b3ca46668c8a2db9faad53c = $this->env->getExtension("native_profiler");
        $__internal_ef406cbfe4af185633ffc26fc9f41ff7b1632e983b3ca46668c8a2db9faad53c->enter($__internal_ef406cbfe4af185633ffc26fc9f41ff7b1632e983b3ca46668c8a2db9faad53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ef406cbfe4af185633ffc26fc9f41ff7b1632e983b3ca46668c8a2db9faad53c->leave($__internal_ef406cbfe4af185633ffc26fc9f41ff7b1632e983b3ca46668c8a2db9faad53c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bf55d0a82648f99496fc333ea4a7345e274401656b18e38d2ff17175ed30fe1 = $this->env->getExtension("native_profiler");
        $__internal_4bf55d0a82648f99496fc333ea4a7345e274401656b18e38d2ff17175ed30fe1->enter($__internal_4bf55d0a82648f99496fc333ea4a7345e274401656b18e38d2ff17175ed30fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4bf55d0a82648f99496fc333ea4a7345e274401656b18e38d2ff17175ed30fe1->leave($__internal_4bf55d0a82648f99496fc333ea4a7345e274401656b18e38d2ff17175ed30fe1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
