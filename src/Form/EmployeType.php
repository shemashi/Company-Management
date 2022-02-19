<?php

namespace App\Form;

use App\Entity\Employe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('email')
            ->add('cnss')
            ->add('adresse')
            ->add('phone')
            ->add('statue')
            ->add('genre')
            ->add('rib')
            ->add('banque')
            ->add('cin')
            ->add('dateNaissance')
            ->add('profile')
            ->add('dateEmploi')
            ->add('salaire')
            ->add('typeContrat')
            ->add('etat')
            ->add('cv')
            ->add('division')
            ->add('service')
            ->add('role')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employe::class,
        ]);
    }
}
