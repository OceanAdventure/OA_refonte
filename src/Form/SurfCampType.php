<?php

namespace App\Form;

use App\Entity\SurfCamp;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class SurfCampType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('destination')
            ->add('titre1', CKEditorType::class)
            ->add('miniDescription', CKEditorType::class)
            ->add('image1', FileType::class, ['data_class' => null])
            ->add('galerie', CKEditorType::class)
            ->add('image2', FileType::class, ['data_class' => null])
            ->add('sstitre2', CKEditorType::class)
            ->add('sstext2', CKEditorType::class)
            ->add('image3', FileType::class, ['data_class' => null])
            ->add('sstitre3', CKEditorType::class)
            ->add('sstext3',CKEditorType::class)
            ->add('galerie2', CKEditorType::class)
            ->add('prestation', CKEditorType::class)
            ->add('enumeration', CKEditorType::class)
            ->add('guidePratiqueDestination', CKEditorType::class)
            ->add('texteInfo', CKEditorType::class)
            ->add('googleMap')
            ->add('tarif')
            ->add('horsSaisonText', CKEditorType::class)
            ->add('saisonText', CKEditorType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SurfCamp::class,
        ]);
    }
}
