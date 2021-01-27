<?php

namespace App\Form;

use App\Entity\Women;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WomenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('TitleShop')
            ->add('SubtitleShop')
            ->add('imageFile', FileType::class, [
                'required'=> true,
            ])
            ->add('TitleEx')
            ->add('TextEx')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Women::class,
        ]);
    }
}
