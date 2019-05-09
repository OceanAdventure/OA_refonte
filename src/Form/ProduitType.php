<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Image', FileType::class)
            ->add('titre_principal', TextType::class)
            ->add('titre_secondaire', TextType::class)
            ->add('condition_reglement', TextareaType::class)
            ->add('prix', IntegerType::class)
            ->add('nb_cours', IntegerType::class)
            ->add('descrition', TextareaType::class)
            ->add('destination', TextType::class)
            ->add('sport', TextType::class)
            ->add('particulier')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
