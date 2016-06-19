<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_23edd09e436de3b60b073d028ccdeafc288bbd8fd831fc4f2fc808253ccf8d5d extends Twig_Template
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
        $__internal_1e2ffc9e3ab5f157ddda2cdac5d32b14e48c42bef7c476d4bfc47df2d82bba2d = $this->env->getExtension("native_profiler");
        $__internal_1e2ffc9e3ab5f157ddda2cdac5d32b14e48c42bef7c476d4bfc47df2d82bba2d->enter($__internal_1e2ffc9e3ab5f157ddda2cdac5d32b14e48c42bef7c476d4bfc47df2d82bba2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1e2ffc9e3ab5f157ddda2cdac5d32b14e48c42bef7c476d4bfc47df2d82bba2d->leave($__internal_1e2ffc9e3ab5f157ddda2cdac5d32b14e48c42bef7c476d4bfc47df2d82bba2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
