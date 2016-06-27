<?php

namespace Caog\HorariosBundle\Form\Usuario;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

/**
 * Description of ActividadType
 *
 * @author Carlos
 */
class ActividadUsuarioType  extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre', TextType::class)
                ->add('tipo', ChoiceType::class,array(
                        'choices'  => array(
                            '1-Privada' => '1',
                            '2-Publica' => '2',
                        ),
                    )
                )
                ->add('prioridad', ChoiceType::class,array(
                        'choices'  => array(
                            '1' => 1,
                            '2' => 2,
                            '3' => 3,
                            '4' => 4,
                            '5' => 5,
                            '6' => 6,
                            '7' => 7,
                            '8' => 8,
                            '8' => 9,
                            '10' => 10,
                        ),
                    )
                )
                ->add('pais', TextType::class)
                ->add('departamento', TextType::class)
                ->add('ciudad', TextType::class)
                ->add('localidad', TextType::class)
                ->add('direccion', TextType::class)
                ->add('empresa',  EntityType::class,array(
                    // query choices from this entity
                    'class' => 'CaogHorariosBundle:Empresa',

                    // use the User.username property as the visible option string
                    'choice_label' => 'nombre',
                    'placeholder'=>'Seleccione',
                    'required'=>false,
                ))
                ->add('save', SubmitType::class, array('label' => 'Crear actividad'));
    }

    public function getName() {
        return 'Actividadempresa';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Caog\HorariosBundle\Entity\ActividadUsuario',
        ));
    }

}
