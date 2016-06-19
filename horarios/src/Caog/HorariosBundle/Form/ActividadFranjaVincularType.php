<?php

namespace Caog\HorariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ActividadFranjaVincularType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder->add('actividadfranja', CollectionType::class, array(
            'entry_type' => ActividadFranjaType::class,
             'allow_add'    => true,
             'by_reference' => false,
        ));
        $builder->add('save', SubmitType::class, array(
            'label' => 'Almacenar',
            'attr'=>array('class'=>'btn btn-success',)
            )
        
        );
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
//            'data_class' => 'Caog\HorariosBundle\Entity\ActividadEmpresa'
        )); 
    }
}
