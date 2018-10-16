<?php

namespace Mairie\MairieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class MariageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('numero_resgistre')
        ->add('nomEpoux')
        ->add('prenomEpoux')
        ->add('dateNaissanceEpoux', DateType::class)
        ->add('lieuNaissanceEpoux')
        ->add('addresseEpoux')
        ->add('nomEpouse')
        ->add('prenomEpouse')
        ->add('dateNaissanceEpouse', DateType::class)
        ->add('lieuNaissanceEpouse')
        ->add('addresseEpouse')
        ->add('dateMariage', DateType::class)
        ->add('region')
        ->add('proffessoinEpoux')
        ->add('proffessoinEpouse')
        ->add('nomEtPrenomsMere')
        ->add('nomEtPrenomsPere')
        ->add('departement')
        ->add('commune')
        ->add('nomO')
        ->add('dateDeclaration')
        ->add('lieuMariage')
        ->add('situationMatrimondiale')
        ->add('regimeMatrimondiale')
        
        ;
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
