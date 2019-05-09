<?php

namespace App\Form;

use App\Entity\Contact;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;


class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class, ['label' => false] )
            ->add('nom', TextType::class, ['label' => false])
            ->add('telephone', TextType::class, ['label' => false])
            ->add('mail', EmailType::class, ['label' => false])
            ->add('sujet', TextType::class, ['label' => false])
            ->add('message', TextareaType::class, ['label' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => contact::class,
        ]);
    }
    
}

