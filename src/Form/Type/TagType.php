<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use App\Form\DataTransformer\TagsTransformer;
use Symfony\Component\Form\Extension\Core\Type\TextType;

//on peut creer son propre type 
class TagType extends AbstractType
{
    protected TagsTransformer $tagsTransformer;

    public function __construct(TagsTransformer $tagsTransformer)
    {
        $this->tagsTransformer = $tagsTransformer;
    }

    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer($this->tagsTransformer);
    }

    //on fait appel au type qu'on veut qu'il s'apparente, ici on veut
    //que se soit du texte
    public function getParent()
    {
        return TextType::class;
    }
}
