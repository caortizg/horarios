<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5806e55b213ca6f09969e1689f0df2760648af884870e19cdf135820c6910842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53479bc1ab08789f9cd9e3c5759877dc2909e2ca7a59271d6d4209d665558092 = $this->env->getExtension("native_profiler");
        $__internal_53479bc1ab08789f9cd9e3c5759877dc2909e2ca7a59271d6d4209d665558092->enter($__internal_53479bc1ab08789f9cd9e3c5759877dc2909e2ca7a59271d6d4209d665558092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_53479bc1ab08789f9cd9e3c5759877dc2909e2ca7a59271d6d4209d665558092->leave($__internal_53479bc1ab08789f9cd9e3c5759877dc2909e2ca7a59271d6d4209d665558092_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
