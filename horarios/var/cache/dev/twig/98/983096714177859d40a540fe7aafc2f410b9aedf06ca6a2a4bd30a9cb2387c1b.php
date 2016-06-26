<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5051eb53d122f6b8781d860cf92e172cb0e09dfd421a6eff19c3ca6afaf724e5 extends Twig_Template
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
        $__internal_32c614620a81bd6f7103a0cfe02faf3483a8ac9205d1a1c229d76264dfe9fbd0 = $this->env->getExtension("native_profiler");
        $__internal_32c614620a81bd6f7103a0cfe02faf3483a8ac9205d1a1c229d76264dfe9fbd0->enter($__internal_32c614620a81bd6f7103a0cfe02faf3483a8ac9205d1a1c229d76264dfe9fbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_32c614620a81bd6f7103a0cfe02faf3483a8ac9205d1a1c229d76264dfe9fbd0->leave($__internal_32c614620a81bd6f7103a0cfe02faf3483a8ac9205d1a1c229d76264dfe9fbd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
