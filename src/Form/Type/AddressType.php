<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AddressType extends AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('street', TextType::class, [
                'label' => 'adresse'
            ])
            ->add('zip', TextType::class, [
                'label' => 'Code postal'
            ]);

        //on fait une condition pour afficher ou non la case pays
        if ($options['with_country']) {
            $builder->add('country', ChoiceType::class, [
                'label' => 'Pays',
                'choices' => [
                    'France' => 'FR',
                    'Belgique' => 'BE',
                    'Italie' => 'IT'
                ]
            ]);
        }
    }

    //on surcharge les options
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'with_country' => true
        ]);
    }
}
