<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8d19306d1a8860f90bf7f581da1a33dd3ed550c37c7b27a8fbc72d060b57f09d extends Twig_Template
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
        $__internal_ca5a094c2b146727a59716322b3d33cdad36408e7eae114c0edf47d158f33416 = $this->env->getExtension("native_profiler");
        $__internal_ca5a094c2b146727a59716322b3d33cdad36408e7eae114c0edf47d158f33416->enter($__internal_ca5a094c2b146727a59716322b3d33cdad36408e7eae114c0edf47d158f33416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ca5a094c2b146727a59716322b3d33cdad36408e7eae114c0edf47d158f33416->leave($__internal_ca5a094c2b146727a59716322b3d33cdad36408e7eae114c0edf47d158f33416_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
