<?php

namespace Mairie\MairieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class Acte_de_naissanceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom')
        ->add('prenom')
        ->add('sexe', ChoiceType::class, array(
            'choices'  => array(
                '' => '',
                'Masculin' => 'Masculin',
                'Feminin' => 'Feminin',
            ),
        ))
        ->add('dateNaissance')
        ->add('lieuNaissance')
        ->add('region', EntityType::class, array(
            'class'        => 'MairieMairieBundle:region',
            'choice_label' => 'nom_region',
            'label'        => 'region',
            'expanded'     => false,
            'required'   => false,
            ))
        ->add('commune')
        ->add('prenomPere')
        ->add('nomMere')
        ->add('prenomMere')
        ->add('prenomSo')
        ->add('nomSo');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mairie\MairieBundle\Entity\Acte_de_naissance'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mairie_mairiebundle_acte_de_naissance';
    }


}
