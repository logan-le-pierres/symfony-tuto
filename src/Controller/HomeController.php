<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(EntityManagerInterface $em)
    {
        $productRepository = $em->getRepository(Product::class);

        // 1/Permet de creer creer un nouveau produit (ici)
        // $product = new Product;

        // $product->setName('Table en métal');
        // $product->setPrice(2500);
        // $product->setSlug('Table-en-métal');

        // $em->persist($product);
        // $em->flush();

        // 2/ 
        $product = $productRepository->find(2);
        $product->setPrice(4500);
        $em->flush();
        dd($product);

        return $this->render("home.html.twig");
        
    }
}
