<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fec965706094edeb4d9170ede22880d9ade6ba264d082f010a3530f3fbf18639 extends Twig_Template
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
        $__internal_7f28074263d2dbb0bb7210b82f47351789ee228c3edf87289861bb7fbc7635bb = $this->env->getExtension("native_profiler");
        $__internal_7f28074263d2dbb0bb7210b82f47351789ee228c3edf87289861bb7fbc7635bb->enter($__internal_7f28074263d2dbb0bb7210b82f47351789ee228c3edf87289861bb7fbc7635bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7f28074263d2dbb0bb7210b82f47351789ee228c3edf87289861bb7fbc7635bb->leave($__internal_7f28074263d2dbb0bb7210b82f47351789ee228c3edf87289861bb7fbc7635bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */