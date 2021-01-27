<?php

namespace App\Form;

use App\Entity\Men;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('TitleShop')
            ->add('SubtitleShop')
            ->add('imageFile', FileType::class, [
                'required'=> true,
            ])
            ->add('titleEx')
            ->add('TextEx')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Men::class,
        ]);
    }
}
