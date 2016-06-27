<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_eedaf92e56cc89617a858686810a5ff1d0abd68e6e213061c65fd1d30902a0ea extends Twig_Template
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
        $__internal_b8f85235b69081993737bbe1e29ac6281a99383182d14da44d380e74f947ab82 = $this->env->getExtension("native_profiler");
        $__internal_b8f85235b69081993737bbe1e29ac6281a99383182d14da44d380e74f947ab82->enter($__internal_b8f85235b69081993737bbe1e29ac6281a99383182d14da44d380e74f947ab82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b8f85235b69081993737bbe1e29ac6281a99383182d14da44d380e74f947ab82->leave($__internal_b8f85235b69081993737bbe1e29ac6281a99383182d14da44d380e74f947ab82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
