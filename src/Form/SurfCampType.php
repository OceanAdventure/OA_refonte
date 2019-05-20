<?php

namespace App\Form;

use App\Entity\SurfCamp;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SurfCampType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('destination')
            ->add('titre1')
            ->add('miniDescription')
            ->add('image1')
            ->add('galerie')
            ->add('image2')
            ->add('sstitre2')
            ->add('sstext2')
            ->add('image3')
            ->add('sstitre3')
            ->add('sstext3')
            ->add('galerie2')
            ->add('prestation')
            ->add('enumeration')
            ->add('guidePratiqueDestination')
            ->add('texteInfo')
            ->add('googleMap')
            ->add('tarif')
            ->add('horsSaisonText')
            ->add('saisonText')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SurfCamp::class,
        ]);
    }
}
