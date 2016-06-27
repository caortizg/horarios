<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2dd570c33897022473ef664088d291381e0a156bddcb880a8f15372d779056ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_040ec9f440b14f37c92647c884e1c432b10399fecde6d51f28da9681278bc1ba = $this->env->getExtension("native_profiler");
        $__internal_040ec9f440b14f37c92647c884e1c432b10399fecde6d51f28da9681278bc1ba->enter($__internal_040ec9f440b14f37c92647c884e1c432b10399fecde6d51f28da9681278bc1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_040ec9f440b14f37c92647c884e1c432b10399fecde6d51f28da9681278bc1ba->leave($__internal_040ec9f440b14f37c92647c884e1c432b10399fecde6d51f28da9681278bc1ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67aa1fe4348af1aa250b9219a36cdec8493882e901b939db89b05f54f4004ccc = $this->env->getExtension("native_profiler");
        $__internal_67aa1fe4348af1aa250b9219a36cdec8493882e901b939db89b05f54f4004ccc->enter($__internal_67aa1fe4348af1aa250b9219a36cdec8493882e901b939db89b05f54f4004ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_67aa1fe4348af1aa250b9219a36cdec8493882e901b939db89b05f54f4004ccc->leave($__internal_67aa1fe4348af1aa250b9219a36cdec8493882e901b939db89b05f54f4004ccc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e48d9b51a37f8d18418b4585878eb3914736c841853c0e52ce2666b8463377b8 = $this->env->getExtension("native_profiler");
        $__internal_e48d9b51a37f8d18418b4585878eb3914736c841853c0e52ce2666b8463377b8->enter($__internal_e48d9b51a37f8d18418b4585878eb3914736c841853c0e52ce2666b8463377b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e48d9b51a37f8d18418b4585878eb3914736c841853c0e52ce2666b8463377b8->leave($__internal_e48d9b51a37f8d18418b4585878eb3914736c841853c0e52ce2666b8463377b8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
