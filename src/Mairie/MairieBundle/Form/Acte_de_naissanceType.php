<?php

namespace Mairie\MairieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Acte_de_naissanceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('prenom')->add('sexe')->add('dateNaissance')->add('lieuNaissance')->add('region')->add('departement')->add('commune')->add('nomPere')->add('nomMere')->add('prenomMere')->add('prenomSo')->add('nomSo');
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
