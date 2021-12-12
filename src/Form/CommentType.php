<?php

namespace App\Form;

use App\Entity\Blog;
use App\Entity\Comment;
use App\Repository\BlogRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CommentType
 * @package App\Form
 * Formulaire de commentaire
 */

class CommentType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     * Création du formulaire d'ajout de commentaire
     */

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('comment', TextareaType::class, array(
                'attr' => array('rows' => '5'),
            ))
            ->add('blog', EntityType::class,array(
                'attr' => array('style' => 'display:none'),
                'class' => blog::class,
                'label' => ' ',
                'choice_label' => function ($blog) {
                    return $blog->getId();
                }
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
