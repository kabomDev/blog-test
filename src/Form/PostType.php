<?php

namespace App\Form;

use App\Entity\Tag;
use App\Entity\Post;
use App\Entity\Category;
use App\Form\Type\TagType;
use App\Form\Type\AddressType;
use PhpParser\Parser\Multiple;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use App\Form\DataTransformer\TagsTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PostType extends AbstractType
{
    protected TagsTransformer $tagsTransformer;

    public function __construct(TagsTransformer $tagsTransformer)
    {
        $this->tagsTransformer = $tagsTransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => "Titre de l'article",
                'attr' => [
                    'class' => 'toto',
                    'placeholder' => "le titre de l'article"
                ],
                'help' => "Soyez percutant et concis"
            ])
            // ->add('address', AddressType::class, [
            //     'mapped' => false, //permet de dire de ne pas chercher dans l'entité Post
            //     'with_country' => false //par defaut c'est true
            // ])
            ->add('tags', EntityType::class, [
                'label' => 'Etiquettes',
                'class' => Tag::class,
                'choice_label' => 'title',
                'multiple' => true,
                'expanded' => true,
                'by_reference' => true
            ])
            ->add('content', TextareaType::class, [
                'label' => "contenu de l'article",
                'attr' => [
                    'placeholder' => "Faites envie avec une belle histoire"
                ],
                'help' => "Soignez la mise en forme"
            ])
            ->add('image', UrlType::class, [
                'label' => "Url de l'image",
                'attr' => [
                    'placeholder' => "Adresse Url de l'image"
                ],
                'help' => "choisissez une jolie image"

            ])
            ->add('category', EntityType::class, [
                'label' => "Catégorie de l'article",
                'class' => Category::class,
                // 'choice_label' => 'title'
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.title', 'ASC');
                },
                'choice_label' => function (Category $c) {
                    return sprintf('%s-%s', $c->getId(), $c->getTitle());
                }
            ]);
        // ->add('submit', SubmitType::class, [
        //     'label' => 'créer'
        // ])
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class
        ]);
    }
}
