<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4594e3e098c64f74c377cb1dff479c1cf044bf409d7599af4c8b5569113ce6f2 extends Twig_Template
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
        $__internal_264ed3b87663adbd461c6d7851dfe73b28cfce4a087429098b62064c19af4b49 = $this->env->getExtension("native_profiler");
        $__internal_264ed3b87663adbd461c6d7851dfe73b28cfce4a087429098b62064c19af4b49->enter($__internal_264ed3b87663adbd461c6d7851dfe73b28cfce4a087429098b62064c19af4b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_264ed3b87663adbd461c6d7851dfe73b28cfce4a087429098b62064c19af4b49->leave($__internal_264ed3b87663adbd461c6d7851dfe73b28cfce4a087429098b62064c19af4b49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
