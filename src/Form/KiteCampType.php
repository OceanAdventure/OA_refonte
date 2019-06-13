<?php

namespace App\Form;

use App\Entity\KiteCamp;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class KiteCampType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule')
            ->add('GrandTitre', CKEditorType::class)
            ->add('GrandTitreEn', CKEditorType::class)
            ->add('description', CKEditorType::class)
            ->add('descriptionEn', CKEditorType::class)
            ->add('image', FileType::class, ['data_class' => null])
            ->add('galerie', CKEditorType::class)
            ->add('image2', FileType::class, ['data_class' => null])
            ->add('ssTitre2', CKEditorType::class)
            ->add('ssTitre2En', CKEditorType::class)
            ->add('ssText2', CKEditorType::class)
            ->add('ssText2En', CKEditorType::class)
            ->add('image3', FileType::class, ['data_class' => null])
            ->add('ssTitre3', CKEditorType::class)
            ->add('ssTitre3En', CKEditorType::class)
            ->add('galerie2', CKEditorType::class)
            ->add('textInfo', CKEditorType::class)
            ->add('textInfoEn', CKEditorType::class)
            ->add('enumeration', CKEditorType::class)
            ->add('enumerationEn', CKEditorType::class)
            ->add('guidePratiqueDestination', CKEditorType::class)
            ->add('guidePratiqueDestinationEn', CKEditorType::class)
            ->add('text', CKEditorType::class)
            ->add('textEn', CKEditorType::class)
            ->add('googleMap')
            ->add('niveauText', CKEditorType::class)
            ->add('niveauTextEn', CKEditorType::class)
            ->add('locationText', CKEditorType::class)
            ->add('locationTextEn', CKEditorType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => KiteCamp::class,
        ]);
    }
}
