<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c5599b2e3bf9e72e129f87937c06876c0bc7706a66c85ddd1a3d7c3d062e8e3b extends Twig_Template
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
        $__internal_5312dee4452e6547c79632b0e4f786cb7470fe17589e4d998c762eddb608bb93 = $this->env->getExtension("native_profiler");
        $__internal_5312dee4452e6547c79632b0e4f786cb7470fe17589e4d998c762eddb608bb93->enter($__internal_5312dee4452e6547c79632b0e4f786cb7470fe17589e4d998c762eddb608bb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5312dee4452e6547c79632b0e4f786cb7470fe17589e4d998c762eddb608bb93->leave($__internal_5312dee4452e6547c79632b0e4f786cb7470fe17589e4d998c762eddb608bb93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
