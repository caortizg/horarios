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
        $__internal_abf2e77d07058b4cbe49bff67f16378dc77f391e82112d9c9a13db89f1592062 = $this->env->getExtension("native_profiler");
        $__internal_abf2e77d07058b4cbe49bff67f16378dc77f391e82112d9c9a13db89f1592062->enter($__internal_abf2e77d07058b4cbe49bff67f16378dc77f391e82112d9c9a13db89f1592062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_abf2e77d07058b4cbe49bff67f16378dc77f391e82112d9c9a13db89f1592062->leave($__internal_abf2e77d07058b4cbe49bff67f16378dc77f391e82112d9c9a13db89f1592062_prof);

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
