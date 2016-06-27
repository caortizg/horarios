<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5d4d91c13bef690cee53b25a0f7048fa24bbf58df48bd1a279e25fc6d20fb6f7 extends Twig_Template
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
        $__internal_5247dc62f7cc46170faf76c2531c145e62fb1753c53cfb28d61c43a2e44e9461 = $this->env->getExtension("native_profiler");
        $__internal_5247dc62f7cc46170faf76c2531c145e62fb1753c53cfb28d61c43a2e44e9461->enter($__internal_5247dc62f7cc46170faf76c2531c145e62fb1753c53cfb28d61c43a2e44e9461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5247dc62f7cc46170faf76c2531c145e62fb1753c53cfb28d61c43a2e44e9461->leave($__internal_5247dc62f7cc46170faf76c2531c145e62fb1753c53cfb28d61c43a2e44e9461_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
