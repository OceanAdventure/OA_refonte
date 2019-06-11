<?php

namespace App\Form;

use App\Entity\SurfCamp;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SurfCampType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('destination')
            ->add('titre1', CKEditorType::class)
            ->add('titre1En', CKEditorType::class)
            ->add('miniDescription', CKEditorType::class)
            ->add('miniDescriptionEn', CKEditorType::class)
            ->add('image1', FileType::class, ['data_class' => null])
            ->add('galerie', CKEditorType::class)
            ->add('image2', FileType::class, ['data_class' => null])
            ->add('sstitre2', CKEditorType::class)
            ->add('sstitre2En', CKEditorType::class)
            ->add('sstext2', CKEditorType::class)
            ->add('sstext2En', CKEditorType::class)
            ->add('image3', FileType::class, ['data_class' => null])
            ->add('sstitre3', CKEditorType::class)
            ->add('sstitre3En', CKEditorType::class)
            ->add('sstext3',CKEditorType::class)
            ->add('sstext3En',CKEditorType::class)
            ->add('galerie2', CKEditorType::class)
            ->add('prestation', CKEditorType::class)
            ->add('prestationEn', CKEditorType::class)
            ->add('enumeration', CKEditorType::class)
            ->add('enumerationEn', CKEditorType::class)
            ->add('guidePratiqueDestination', CKEditorType::class)
            ->add('guidePratiqueDestinationEn', CKEditorType::class)
            ->add('texteInfo', CKEditorType::class)
            ->add('texteInfoEn', CKEditorType::class)
            ->add('googleMap')
            ->add('tarif')
            ->add('horsSaisonText', CKEditorType::class)
            ->add('horsSaisonTextEn', CKEditorType::class)
            ->add('saisonText', CKEditorType::class)
            ->add('saisonTextEn', CKEditorType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SurfCamp::class,
        ]);
    }
}
