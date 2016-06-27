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
        $__internal_33f81034a77b575755375001b3338cf67363bfb4c8f67b833d413a434b9da54c = $this->env->getExtension("native_profiler");
        $__internal_33f81034a77b575755375001b3338cf67363bfb4c8f67b833d413a434b9da54c->enter($__internal_33f81034a77b575755375001b3338cf67363bfb4c8f67b833d413a434b9da54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_33f81034a77b575755375001b3338cf67363bfb4c8f67b833d413a434b9da54c->leave($__internal_33f81034a77b575755375001b3338cf67363bfb4c8f67b833d413a434b9da54c_prof);

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
