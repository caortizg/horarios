<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_637c7c4b30e1777ca306b92d14a5890dbda608c2792d0124383b7c5dc50bf513 extends Twig_Template
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
        $__internal_c52e4561d2ba82f039a01bbf1add11e548145a27e003ef39ff535b6d0e5aef31 = $this->env->getExtension("native_profiler");
        $__internal_c52e4561d2ba82f039a01bbf1add11e548145a27e003ef39ff535b6d0e5aef31->enter($__internal_c52e4561d2ba82f039a01bbf1add11e548145a27e003ef39ff535b6d0e5aef31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c52e4561d2ba82f039a01bbf1add11e548145a27e003ef39ff535b6d0e5aef31->leave($__internal_c52e4561d2ba82f039a01bbf1add11e548145a27e003ef39ff535b6d0e5aef31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
