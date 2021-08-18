<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker= Factory::create('fr_FR');
        $faker->addProvider(new \Liior\Faker\Prices($faker));

       for($p = 0; $p<100;$p++){
           $product = new Product;
           $product->setName($faker->sentence())
                   ->setSlug($faker->slug())
                   ->setPrice($faker->price(4000, 20000));
            $manager->persist($product);
       }

        $manager->flush();
    }
}
