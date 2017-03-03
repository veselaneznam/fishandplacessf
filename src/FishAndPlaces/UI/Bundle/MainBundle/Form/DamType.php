<?php

namespace FishAndPlaces\UI\Bundle\MainBundle\Form;

use FishAndPlaces\Application\Dam\DamRepresenter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DamType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => DamRepresenter::class,
            ));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dam')
            ->add('name', TextType::class, array('mapped' => false))
            ->add('location', TextType::class, array('mapped' => false))
            ->add('is_active', CheckboxType::class, array('mapped' => false))
            ->add('price_pro_person', TextType::class, array('mapped' => false))
            ->add('image', ImageType::class, array('mapped' => false))
            ->add('save', SubmitType::class)
        ;
    }
}
