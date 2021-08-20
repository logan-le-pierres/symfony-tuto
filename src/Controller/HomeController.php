<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormFactoryInterface;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(EntityManagerInterface $em)
    {
        // $productRepository = $em->getRepository(Product::class);

        // 1/Permet de creer creer un nouveau produit (ici)
        // $product = new Product;

        // $product->setName('Table en métal');
        // $product->setPrice(2500);
        // $product->setSlug('Table-en-métal');

        // $em->persist($product);
        // $em->flush();

        // 2/ 
        // $product = $productRepository->find(2);
        // $product->setPrice(4500);
        // $em->flush();
        // dd($product);

        return $this->render("home.html.twig");
    }}
    // /**
    //  * @Route("/admin", name="admin_create")
    //  */
//     public function create(FormFactoryInterface $factory)
//     {

//         $builder = $factory->createBuilder();

//         $builder->add('Identifiant_:', TextType::class, [
//             'label' => 'Nom du produit',
//             'attr' => ['class' => 'form-control', 'placeholder' => 'Tapez le nom du produit']
//         ])
//             ->add('Mot_de_passe_:', TextareaType::class, [
//                 'label' => 'Description courte',
//                 'attr' => [
//                     'class' => 'form-control',
//                     'placeholder' => 'Tapez une description assez courte mais parlante'
//                 ]
//             ]);

//         // $options = [];

//         // foreach ($categoryRepository->findAll() as $category) {
//         //     $options[$category->getName()] = $category->getId();
//         // }
//         // dd($options);

//         // $builder->add('Produit', ChoiceType::class, [
//         //     'label' => 'Categorie',
//         //     'attr' => ['class' => 'form-control'],
//         //     'placeholder' => '--Choisir votre catégorie--',
//         //     'choices' => [
//         //         'Categorie 1' => 1,
//         //         'Categorie 2' => 2

//         //     ]
//         // ]);


//     //     $form = $builder->getForm();

//     //     $formView = $form->createView();

//     //     return $this->render("create.html.twig", [
//     //         'formView' => $formView
//     //     ]);
//     // }

//     // /** 
//     // *@Route("/admin/{id}/edit", name"product_edit") 
//     // */
//     // public function edit($id, ProductRepository $productrepository){
//     //         $product =$productrepository->find($id);
//     //         return $this->render('create.html.twig',[
//     //             'product' => $product
//     //         ]);

//     // }
// }
