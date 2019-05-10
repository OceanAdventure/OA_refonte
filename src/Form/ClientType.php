<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class, ['label' => false])
            ->add('nom', TextType::class, ['label' => false])
            ->add('niveau', ChoiceType::class, [
                'choices'  => [
                    'Débutant' => 'debutant',
                    'Intermediaire (WaterStart, tirer des bords' => 'intermediaire',
                    'Autonome' => 'autonome',
                    'J\'accompagne mon enfant' => 'accompagateur',
                ]])
            ->add('mail', EmailType::class, ['label' => false])
            ->add('telephone', TextType::class, ['label' => false])
            ->add('type_chambre', ChoiceType::class, [
                'choices' => [
                    'Collective' => 'collective',
                    'Privée' => 'privee',
                ], 'multiple' => false, 'label' => 'user.type_ch'])
            ->add('type_activite', ChoiceType::class, [
                'choices'  => [
                    'Kite' => 'kite',
                    'Surf' => 'surf',
                ],'multiple' => false, 'label' => 'user.type_act'])
            ->add('date_arr', DateType::class, ['label' => false, 'data' => new \DateTime()])
            ->add('nuitee', IntegerType::class, ['label' => false, 'attr' => ['value' => 7],])
            ->add('nb_personne', IntegerType::class, ['label' => false, 'attr' => ['value' => 1],])
            ->add('message', TextareaType::class, ['label' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
