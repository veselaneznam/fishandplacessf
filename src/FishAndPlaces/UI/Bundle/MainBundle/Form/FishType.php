<?php

namespace FishAndPlaces\UI\Bundle\MainBundle\Form;

use FishAndPlaces\Domain\Fish\Model\Fish;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FishType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
            'data_class' => Fish::class,
        ));
    }
}
