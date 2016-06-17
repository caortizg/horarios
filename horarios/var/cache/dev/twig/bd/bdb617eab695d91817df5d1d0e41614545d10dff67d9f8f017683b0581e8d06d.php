<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_eedaf92e56cc89617a858686810a5ff1d0abd68e6e213061c65fd1d30902a0ea extends Twig_Template
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
        $__internal_9505312ab5f4f62a492ede3f95a559c86a5a3d815e2ae41e4706238ffd16711d = $this->env->getExtension("native_profiler");
        $__internal_9505312ab5f4f62a492ede3f95a559c86a5a3d815e2ae41e4706238ffd16711d->enter($__internal_9505312ab5f4f62a492ede3f95a559c86a5a3d815e2ae41e4706238ffd16711d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9505312ab5f4f62a492ede3f95a559c86a5a3d815e2ae41e4706238ffd16711d->leave($__internal_9505312ab5f4f62a492ede3f95a559c86a5a3d815e2ae41e4706238ffd16711d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
