<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_449921413571025d510acae673be6ac6e269197ea458c79c17b88ae45abce4b2 extends Twig_Template
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
        $__internal_f928f637c11a7c3f942ad3a2429ff1f7b0aca060a8393be104b0f7b4412d2d8b = $this->env->getExtension("native_profiler");
        $__internal_f928f637c11a7c3f942ad3a2429ff1f7b0aca060a8393be104b0f7b4412d2d8b->enter($__internal_f928f637c11a7c3f942ad3a2429ff1f7b0aca060a8393be104b0f7b4412d2d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f928f637c11a7c3f942ad3a2429ff1f7b0aca060a8393be104b0f7b4412d2d8b->leave($__internal_f928f637c11a7c3f942ad3a2429ff1f7b0aca060a8393be104b0f7b4412d2d8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
