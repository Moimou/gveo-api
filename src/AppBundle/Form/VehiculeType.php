<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehiculeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('matricule')
        ->add('lastIndex')
        ->add('chauffeur')
        ->add('description')
        ->add('coutAchat')
        ->add('dateMiseEnCirculation','datetime', array(
              'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'invalid_message' => 'Validation date',
                'error_bubbling' => true,
                'input' => 'datetime' # return a Datetime object (*)
            ))
        ->add('marque','entity',array('class' => 'AppBundle:Marque'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Vehicule',
            'csrf_protection' => false,
            'allow_extra_fields' => true
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_vehicule';
    }


}
