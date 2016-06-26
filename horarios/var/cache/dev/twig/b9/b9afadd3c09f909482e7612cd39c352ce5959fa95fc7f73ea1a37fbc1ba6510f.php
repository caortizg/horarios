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
        $__internal_f97ea36db94f45c91576037b2755d3b9fce286ff297462276a2688c22a360c0b = $this->env->getExtension("native_profiler");
        $__internal_f97ea36db94f45c91576037b2755d3b9fce286ff297462276a2688c22a360c0b->enter($__internal_f97ea36db94f45c91576037b2755d3b9fce286ff297462276a2688c22a360c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f97ea36db94f45c91576037b2755d3b9fce286ff297462276a2688c22a360c0b->leave($__internal_f97ea36db94f45c91576037b2755d3b9fce286ff297462276a2688c22a360c0b_prof);

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
