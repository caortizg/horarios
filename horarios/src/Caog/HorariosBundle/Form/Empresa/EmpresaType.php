<?php

namespace Caog\HorariosBundle\Form\Empresa;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Description of EmpresaType
 *
 * @author Carlos
 */
class EmpresaType  extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre', TextType::class)
                ->add('pais', TextType::class)
                ->add('departamento', TextType::class)
                ->add('ciudad', TextType::class)
                ->add('localidad', TextType::class)
                ->add('direccion', TextType::class)
                ->add('save', SubmitType::class, array('label' => 'Crear empresa'));
    }

    public function getName() {
        return 'Empresa';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Caog\HorariosBundle\Entity\Empresa',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'intention'       => 'empresa_item',
        ));
    }

}
