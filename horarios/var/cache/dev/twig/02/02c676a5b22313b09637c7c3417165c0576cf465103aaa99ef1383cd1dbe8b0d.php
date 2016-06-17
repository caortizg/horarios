<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b69925fec3d4cbbe84a2c2a199b16d65d2478fd0887396ed37d442be1e62e6b5 extends Twig_Template
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
        $__internal_54c5c4873cd0f8bb412b4bc9515d839ed0c7023e8c76cb9ec03e636895c8b55e = $this->env->getExtension("native_profiler");
        $__internal_54c5c4873cd0f8bb412b4bc9515d839ed0c7023e8c76cb9ec03e636895c8b55e->enter($__internal_54c5c4873cd0f8bb412b4bc9515d839ed0c7023e8c76cb9ec03e636895c8b55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_54c5c4873cd0f8bb412b4bc9515d839ed0c7023e8c76cb9ec03e636895c8b55e->leave($__internal_54c5c4873cd0f8bb412b4bc9515d839ed0c7023e8c76cb9ec03e636895c8b55e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
