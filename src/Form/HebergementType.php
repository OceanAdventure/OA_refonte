<?php

namespace App\Form;

use App\Entity\Hebergement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class HebergementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('grandTitre', CKEditorType::class)
            ->add('grandTitreEn', CKEditorType::class)
            ->add('grandTitreEs', CKEditorType::class)
            ->add('grandTitreIt', CKEditorType::class)
            ->add('situation')
            ->add('descriptionSsTitre', CKEditorType::class)
            ->add('descriptionSsTitreEn', CKEditorType::class)
            ->add('descriptionSsTitreEs', CKEditorType::class)
            ->add('descriptionSsTitreIt', CKEditorType::class)
            ->add('image1', FileType::class, ['data_class' => null])
            ->add('typeDeChambre', CKEditorType::class)
            ->add('typeDeChambreEn', CKEditorType::class)
            ->add('typeDeChambreEs', CKEditorType::class)
            ->add('typeDeChambreIt', CKEditorType::class)
            ->add('ssText', CKEditorType::class)
            ->add('ssTextEn', CKEditorType::class)
            ->add('ssTextEs', CKEditorType::class)
            ->add('ssTextIt', CKEditorType::class)
            ->add('galerie', CKEditorType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Hebergement::class,
        ]);
    }
}
