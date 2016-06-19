<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f1319fcc7677b31159b5456f64bd17f8e6db1ba2be4532a967c9190e2e61c0e0 extends Twig_Template
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
        $__internal_7c64cc00730aa896fb0d8227329d73d44354c5f7a221f0a2a1ccd5c2a732795e = $this->env->getExtension("native_profiler");
        $__internal_7c64cc00730aa896fb0d8227329d73d44354c5f7a221f0a2a1ccd5c2a732795e->enter($__internal_7c64cc00730aa896fb0d8227329d73d44354c5f7a221f0a2a1ccd5c2a732795e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7c64cc00730aa896fb0d8227329d73d44354c5f7a221f0a2a1ccd5c2a732795e->leave($__internal_7c64cc00730aa896fb0d8227329d73d44354c5f7a221f0a2a1ccd5c2a732795e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
