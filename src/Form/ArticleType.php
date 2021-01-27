<?php

namespace App\Form;

use App\Entity\Forme;
use App\Entity\Genres;
use App\Entity\Option;
use App\Entity\Article;
use App\Entity\Marques;
use App\Entity\Couleurs;
use App\Entity\Matieres;
use App\Entity\Categories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Denomination')
            ->add('Description')
            ->add('Prix')
            ->add('Disponibilite')
            ->add('ImageFile', FileType::class, [
                'required' => true,
            ])
            ->add('Options', EntityType::class, array(
                'class'=>Option::class,
                'choice_label'=> 'options',
                'label' => 'Option',
                'multiple' => false,
            ))
            ->add('Genres', EntityType::class, array(
                'class'=>Genres::class,
                'choice_label'=> 'Genre',
                'label' => 'Genre',
                'multiple' => false,
            ))
            ->add('Categories', EntityType::class, array(
                'class'=>Categories::class,
                'choice_label'=> 'Categorie',
                'label' => 'Categorie',
                'multiple' => false,
            ))
            ->add('Forme', EntityType::class, array(
                'class'=>Forme::class,
                'choice_label'=> 'Formes',
                'label' => 'Formes',
                'multiple' => false,
            ))
            ->add('Couleurs', EntityType::class, array(
                'class'=>Couleurs::class,
                'choice_label'=> 'Couleur',
                'label' => 'Couleur',
                'multiple' => false,
            ))
            ->add('Marques', EntityType::class, array(
                'class'=>Marques::class,
                'choice_label'=> 'Marque',
                'label' => 'Marque',
                'multiple' => false,
            ))
            ->add('Matieres', EntityType::class, array(
                'class'=>Matieres::class,
                'choice_label'=> 'Matiere',
                'label' => 'Matiere',
                'multiple' => false,
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
