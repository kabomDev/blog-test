<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Tag;
use App\Entity\Post;
use App\Entity\Category;
use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');
        $faker->addProvider(new \Bluemmb\Faker\PicsumPhotosProvider($faker));

        $titles = ['Sport', 'Actualité', 'Automobile', 'Technologie'];

        $tags = [];

        foreach ($titles as $title) {
            $tag = new Tag;
            $tag->setTitle($title);
            $tags[] = $tag;
            $manager->persist($tag);
        }

        for ($c = 0; $c < 4; $c++) {
            $category = new Category;
            $category->setTitle($faker->catchPhrase);

            $manager->persist($category);

            for ($i = 0; $i < 20; $i++) {
                $post = new Post;
                $post->setTitle($faker->catchPhrase)
                    ->setContent($faker->paragraphs(5, true))
                    ->setCreatedAt($faker->dateTimeBetween('-6 months'))
                    ->setCategory($category)
                    ->setImage($faker->imageUrl(400, 400, true));

                for ($c = 0; $c < mt_rand(0, 4); $c++) {
                    $comment = new Comment;

                    $comment
                        ->setAuthor($faker->userName)
                        ->setContent($faker->paragraphs(2, true))
                        ->setCreatedAt($faker->dateTimeBetween('-6 months'))
                        ->setPost($post);

                    $manager->persist($comment);
                }

                $postTags = $faker->randomElements($tags, mt_rand(0, 3));

                foreach ($postTags as $postTag) {
                    $post->addTag($postTag);
                }

                $manager->persist($post);
            }
        }



        $manager->flush();
    }
}
