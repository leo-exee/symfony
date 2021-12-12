<?php

namespace App\Form;

use App\Entity\Blog;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class BlogType
 * @package App\Form
 * Formulaire d'ajout d'article
 */

class BlogType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     * Création du formulaire d'ajout d'article
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
            ->add('img', FileType::class, [
                'mapped' => false,
                'label' => 'Picture',
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'image/*'
                        ],
                        'mimeTypesMessage' => 'Please upload a valid document',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Blog::class,
        ]);
    }
}
