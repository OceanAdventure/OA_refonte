<?php

namespace App\Form;

use App\Entity\SurfCampFuert;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class SurfCampFuertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('grandTitre')
            ->add('grandTitreEn')
            ->add('grandTitreEs')
            ->add('grandTitreIt')
            ->add('titreAccroche', CKEditorType::class)
            ->add('titreAccrocheEn', CKEditorType::class)
            ->add('titreAccrocheEs', CKEditorType::class)
            ->add('titreAccrocheIt', CKEditorType::class)
            ->add('paragraphe1', CKEditorType::class)
            ->add('paragraphe1En', CKEditorType::class)
            ->add('paragraphe1Es', CKEditorType::class)
            ->add('paragraphe1It', CKEditorType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SurfCampFuert::class,
        ]);
    }
}
