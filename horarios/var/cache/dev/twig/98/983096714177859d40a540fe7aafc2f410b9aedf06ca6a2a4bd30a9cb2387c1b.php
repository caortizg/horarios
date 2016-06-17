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
        $__internal_7f228c1d9b664b84d65884a3d786bfdad6bc5280ea995e828f599ecb2d4bdec7 = $this->env->getExtension("native_profiler");
        $__internal_7f228c1d9b664b84d65884a3d786bfdad6bc5280ea995e828f599ecb2d4bdec7->enter($__internal_7f228c1d9b664b84d65884a3d786bfdad6bc5280ea995e828f599ecb2d4bdec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7f228c1d9b664b84d65884a3d786bfdad6bc5280ea995e828f599ecb2d4bdec7->leave($__internal_7f228c1d9b664b84d65884a3d786bfdad6bc5280ea995e828f599ecb2d4bdec7_prof);

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
