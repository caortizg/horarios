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
        $__internal_49d0a1773a59f19f20e3c6632f59743b305ec68bfbc2b2b7ea4dd8344f98ce0b = $this->env->getExtension("native_profiler");
        $__internal_49d0a1773a59f19f20e3c6632f59743b305ec68bfbc2b2b7ea4dd8344f98ce0b->enter($__internal_49d0a1773a59f19f20e3c6632f59743b305ec68bfbc2b2b7ea4dd8344f98ce0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_49d0a1773a59f19f20e3c6632f59743b305ec68bfbc2b2b7ea4dd8344f98ce0b->leave($__internal_49d0a1773a59f19f20e3c6632f59743b305ec68bfbc2b2b7ea4dd8344f98ce0b_prof);

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
