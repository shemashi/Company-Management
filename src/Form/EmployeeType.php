<?php

namespace App\Form;

use App\Entity\Employee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Employee1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomEmp')
            ->add('prenomEmp')
            ->add('email')
            ->add('cnss')
            ->add('adresse')
            ->add('telephone')
            ->add('status')
            ->add('genre')
            ->add('rib')
            ->add('nomBank')
            ->add('cin')
            ->add('datenais',DateType::Class, array(
                'widget' => 'choice',
                'years' => range(date('Y')-100, date('Y')+100),
                'months' => range(date('m'), 12),
                'days' => range(date('d'), 31),
              ))
            ->add('profile',ChoiceType::class, array(
                'choices'  => array(
                    'chef de service' => 'chef de service',
                    'chef de division' => 'chef de division',
                    'employer' => 'employer',
                  
                )))
            ->add('salaire')
            ->add('dateEmp',DateType::Class, array(
                'widget' => 'choice',
                'years' => range(date('Y')-99, date('Y')+99),
                'months' => range(date('m'), 15),
                'days' => range(date('d'), 35),
              ))
            ->add('etatEmp',ChoiceType::class, array(
                'choices'  => array(
                    'encore employer' => 'encore employer',
                    'a quitter' => 'a quitter',
                    'a deceder' => 'a deceder',
                    'retraite' => 'retraite',
                    )))
            ->add('prime')
            ->add('credit')
            ->add('idService')
            ->add('idDivision')
            ->add('role')
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employee::class,
        ]);
    }
}
