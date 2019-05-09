<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class, ['label' => false])
            ->add('nom', TextType::class, ['label' => false])
            ->add('mail', EmailType::class, ['label' => false])
            ->add('niveau', ChoiceType::class, [
                'choices'  => [
                    'Débutant' => 'debutant',
                    'Intermediaire (WaterStart, tirer des bords' => 'intermediaire',
                    'Autonome' => 'autonome',
                    'J\'accompagne mon enfant' => 'accompagateur',
                ]])
            ->add('telephone', TextType::class, ['label' => false])
            ->add('type_chambre', ChoiceType::class, ['label' => false], [
                'choices'  => [
                    'Collective' => 'collective',
                    'Privée' => 'privee',
                ]])
            ->add('type_activite', ChoiceType::class, ['label' => false], [
                'choices'  => [
                    'Kite' => 'kite',
                    'Surf' => 'surf',
                ]])
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
