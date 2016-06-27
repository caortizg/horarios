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
        $__internal_2e7d2e7080bef4639ce1e7400388c5bfda246012170039ca3bcd454558b7e825 = $this->env->getExtension("native_profiler");
        $__internal_2e7d2e7080bef4639ce1e7400388c5bfda246012170039ca3bcd454558b7e825->enter($__internal_2e7d2e7080bef4639ce1e7400388c5bfda246012170039ca3bcd454558b7e825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2e7d2e7080bef4639ce1e7400388c5bfda246012170039ca3bcd454558b7e825->leave($__internal_2e7d2e7080bef4639ce1e7400388c5bfda246012170039ca3bcd454558b7e825_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_83c8157a71810e976a20fdfcc2814b6e1f9df3a286a4d03cf5c8bea4827869f1 = $this->env->getExtension("native_profiler");
        $__internal_83c8157a71810e976a20fdfcc2814b6e1f9df3a286a4d03cf5c8bea4827869f1->enter($__internal_83c8157a71810e976a20fdfcc2814b6e1f9df3a286a4d03cf5c8bea4827869f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_83c8157a71810e976a20fdfcc2814b6e1f9df3a286a4d03cf5c8bea4827869f1->leave($__internal_83c8157a71810e976a20fdfcc2814b6e1f9df3a286a4d03cf5c8bea4827869f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d59a34291d31250608ca3d6b319782afe0567ce603b49b55f6d42980e635859a = $this->env->getExtension("native_profiler");
        $__internal_d59a34291d31250608ca3d6b319782afe0567ce603b49b55f6d42980e635859a->enter($__internal_d59a34291d31250608ca3d6b319782afe0567ce603b49b55f6d42980e635859a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d59a34291d31250608ca3d6b319782afe0567ce603b49b55f6d42980e635859a->leave($__internal_d59a34291d31250608ca3d6b319782afe0567ce603b49b55f6d42980e635859a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_05ed154dcfb5dc065d62a67da126af81a8bea7499acc3c18773ea6d19b930038 = $this->env->getExtension("native_profiler");
        $__internal_05ed154dcfb5dc065d62a67da126af81a8bea7499acc3c18773ea6d19b930038->enter($__internal_05ed154dcfb5dc065d62a67da126af81a8bea7499acc3c18773ea6d19b930038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_05ed154dcfb5dc065d62a67da126af81a8bea7499acc3c18773ea6d19b930038->leave($__internal_05ed154dcfb5dc065d62a67da126af81a8bea7499acc3c18773ea6d19b930038_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b61273f6acbce09f11dc889c945b5465e8adfc52ba3750463a507da78ccf6754 = $this->env->getExtension("native_profiler");
        $__internal_b61273f6acbce09f11dc889c945b5465e8adfc52ba3750463a507da78ccf6754->enter($__internal_b61273f6acbce09f11dc889c945b5465e8adfc52ba3750463a507da78ccf6754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_b61273f6acbce09f11dc889c945b5465e8adfc52ba3750463a507da78ccf6754->leave($__internal_b61273f6acbce09f11dc889c945b5465e8adfc52ba3750463a507da78ccf6754_prof);

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
