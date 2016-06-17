<?php

namespace Caog\HorariosBundle\Form\Usuario;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Description of UsuarioType
 *
 * @author Carlos
 */
class UsuarioType  extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre', TextType::class)
                ->add('apellidos', TextType::class)
                ->add('edad', NumberType::class)
                ->add('pais', TextType::class)
                ->add('departamento', TextType::class)
                ->add('ciudad', TextType::class)
                ->add('localidad', TextType::class)
                ->add('direccion', TextType::class)
                ->add('save', SubmitType::class, array('label' => 'Crear usuario'));
    }

    public function getName() {
        return 'Usuario';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Caog\HorariosBundle\Entity\Usuario',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'intention'       => 'usuario_item',
        ));
    }

}
