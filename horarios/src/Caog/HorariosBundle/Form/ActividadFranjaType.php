<?php

namespace Caog\HorariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class ActividadFranjaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('actFraDia', ChoiceType::class, array(
                    'choices' => array(
                        'Lunes'=>'1', 
                        'Martes'=>'2', 
                        'Miercoles'=>'3',
                        'Jueves'=>'4',
                        'Viernes'=>'5',
                        'Sabado'=>'6',
                        'Domingo'=>'7'
                        ),
                    'label_attr' => array('class' => 'labelForm '),
                    'attr' => array('class' => 'inputForm', 'data-error' => 'Por favor selecciona una opción.'),
                    'data' => null,
                    'label' => 'Dia:',
                    'placeholder' => 'Seleccione',
                    'required' => true,
                    'data' => null,
                ))
            ->add('actFraDuracion', NumberType::class, array(
                    'label_attr' => array('class' => 'labelForm'),
                    'attr' => array('class' => 'inputForm', 'data-error' => 'Por favor completa este campo.', 'maxlength' => '300',),
                    'data' => null,
                    'label' => 'Duración:',
                    'required' => true,
                    'data' => null,
                ))
            ->add('actHoraInicio',TimeType::class, array(
                    'label_attr' => array('class' => 'labelForm'),
                    'attr' => array('class' => 'inputForm', 'data-error' => 'Por favor completa este campo.', 'maxlength' => '10', 'placeholder' => 'AAAA-MM-DD'),
                    'label' => 'Hora de inicio:  ',
                    'widget' => 'single_text',
                    'required' => true,
                    'data' => null,
                ))
//            ->add('usuResponsable')
//            ->add('actFraEstado')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caog\HorariosBundle\Entity\ActividadFranja'
        )); 
    }
}
