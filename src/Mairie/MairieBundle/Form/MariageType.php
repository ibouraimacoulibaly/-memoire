<?php

namespace Mairie\MairieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MariageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomEpoux')->add('prenomEpoux')->add('dateNaissanceEpoux')->add('lieuNaissanceEpoux')->add('addresseEpoux')->add('nomEpouse')->add('prenomEpouse')->add('dateNaissanceEpouse')->add('lieuNaissanceEpouse')->add('addresseEpouse')->add('dateMariage')->add('lieuMariage');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mairie\MairieBundle\Entity\Mariage'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mairie_mairiebundle_mariage';
    }


}
