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
        $__internal_02c8428ee23c2d14170c4650749e3cb6d8699fe7375c46a3a09b31af90172fa6 = $this->env->getExtension("native_profiler");
        $__internal_02c8428ee23c2d14170c4650749e3cb6d8699fe7375c46a3a09b31af90172fa6->enter($__internal_02c8428ee23c2d14170c4650749e3cb6d8699fe7375c46a3a09b31af90172fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_02c8428ee23c2d14170c4650749e3cb6d8699fe7375c46a3a09b31af90172fa6->leave($__internal_02c8428ee23c2d14170c4650749e3cb6d8699fe7375c46a3a09b31af90172fa6_prof);

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
