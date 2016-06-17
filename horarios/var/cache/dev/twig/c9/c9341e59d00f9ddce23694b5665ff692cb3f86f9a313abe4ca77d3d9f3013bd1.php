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
        $__internal_9161e2e8d4ea7a8ef2c7255532e1778a21fad80582849396fed9d1cb987ea18a = $this->env->getExtension("native_profiler");
        $__internal_9161e2e8d4ea7a8ef2c7255532e1778a21fad80582849396fed9d1cb987ea18a->enter($__internal_9161e2e8d4ea7a8ef2c7255532e1778a21fad80582849396fed9d1cb987ea18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9161e2e8d4ea7a8ef2c7255532e1778a21fad80582849396fed9d1cb987ea18a->leave($__internal_9161e2e8d4ea7a8ef2c7255532e1778a21fad80582849396fed9d1cb987ea18a_prof);

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
