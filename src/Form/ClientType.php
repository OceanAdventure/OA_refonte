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
            ->add('prenom', TextType::class)
            ->add('nom', TextType::class)
            ->add('mail', EmailType::class)
            ->add('niveau', ChoiceType::class, [
                'choices'  => [
                    'Débutant' => 'debutant',
                    'Intermediaire (WaterStart, tirer des bords' => 'intermediaire',
                    'Autonome' => 'autonome',
                    'J\'accompagne mon enfant' => 'accompagateur',
                ]])
            ->add('telephone', TextType::class)
            ->add('type_chambre', ChoiceType::class, [
                'choices'  => [
                    'Collective' => 'collective',
                    'Privée' => 'privee',
                ]])
            ->add('type_activite', ChoiceType::class, [
                'choices'  => [
                    'Kite' => 'kite',
                    'Surf' => 'surf',
                ]])
            ->add('date_arr', DateType::class, ['label' => 'Date d\'arrivée', 'data' => new \DateTime()])
            ->add('nuitee', IntegerType::class, ['label' => 'Nuitée', 'attr' => ['value' => 7],])
            ->add('nb_personne', IntegerType::class, ['label' => 'Nombre de personnes', 'attr' => ['value' => 1],])
            ->add('message', TextareaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
