<?php

namespace Mairie\MairieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class NaissanceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
        ->add('prenom')
        ->add('numeroRegistre')
        ->add('region')
        ->add('departement')
        ->add('commune')
        ->add('etatCivil')
        ->add('dateNaissance', DateType::class)
        ->add('lieuNaissance')
        ->add('prenomPere')
        ->add('prenomMere')
        ->add('nomMere')
        ->add('prenomSO')
        ->add('nomSO');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mairie\MairieBundle\Entity\Naissance'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mairie_mairiebundle_naissance';
    }


}
