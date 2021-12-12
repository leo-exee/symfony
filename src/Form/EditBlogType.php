<?php

namespace App\Form;

use App\Entity\Blog;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class EditBlogType
 * @package App\Form
 * Formulaire de modification d'article
 */

class EditBlogType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     * Création du formulaire de modification d'article
     */

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('date', DateType::class,array(
                'label_attr' => array('style' => 'display:none'),
                'attr' => array('style' => 'display:none'),
                'years' => range(2000,2022),
                'data' => new \DateTime('now'),
            ))
            ->add('content', TextareaType::class, array(
                    'attr' => array('rows' => '15'),
                ))
            ->add('img', HiddenType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Blog::class,
        ]);
    }
}
