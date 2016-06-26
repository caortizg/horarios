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
        $__internal_59d3086efcbcfeb36ec7451aa716336a6a2cdd9e8136095e390d0bc72ae7046a = $this->env->getExtension("native_profiler");
        $__internal_59d3086efcbcfeb36ec7451aa716336a6a2cdd9e8136095e390d0bc72ae7046a->enter($__internal_59d3086efcbcfeb36ec7451aa716336a6a2cdd9e8136095e390d0bc72ae7046a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_59d3086efcbcfeb36ec7451aa716336a6a2cdd9e8136095e390d0bc72ae7046a->leave($__internal_59d3086efcbcfeb36ec7451aa716336a6a2cdd9e8136095e390d0bc72ae7046a_prof);

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
