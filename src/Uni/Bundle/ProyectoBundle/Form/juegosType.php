<?php

namespace Uni\Bundle\ProyectoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class juegosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tituloJue')
            ->add('descJue')
            ->add('compJue')
            ->add('fotoJue')
            ->add('juecat')
            ->add('jueplat')
            ->add('juenots')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\Bundle\ProyectoBundle\Entity\juegos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_bundle_proyectobundle_juegos';
    }
}
