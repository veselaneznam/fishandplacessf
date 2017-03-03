<?php

namespace FishAndPlaces\UI\Bundle\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('image')
            ->add('imageDescription', TextareaType::class, array('mapped' => false))
            ->add('imageTag', TextareaType::class, array('mapped' => false))
            ->add('ImgSrc', FileType::class, array('mapped' => false))
        ;
    }
}
