<?php

namespace App\Controller;

use App\Taxes\Calculator;
use App\Taxes\Detector;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Flex\Unpack\Result;
use Twig\Environment;

class HelloController extends AbstractController
{

        // protected $calculator;
        // protected $logger;
        protected $twig;


        // public function __construct( LoggerInterface $logger, Calculator $calculator, Slugify $slugify, Detector $detector, Environment $twig )
        // {
        //     // dump($detector->detect(101));
        //     // dump($detector->detect(10));
        //     // dump($slugify->slugify("Salut comment tu vas ?"));
        //     // $this->calculator = $calculator;
        //     // $logger->error("Mon message de log!");
        //     $this->twig = $twig;
        // }
    


    // public function __construct(LoggerInterface $logger)
    // {
    //     $this->logger = $logger;
    // }

    /** 
     * @Route("/hello/{name?world}", name="hello", methods={"GET","POST"}, schemes={"http", "https"})
     */
    public function hello($name = "World")
    {
        // dump($twig);
        //  $this->logger->error("Mon message de log");
        // $tva = $this->calculator->calcul(100);
        // dump($tva);
        // $html = $this->twig->render('hello2.html.twig',[
        //     'name' => $name,
            // 'formateur1' =>['prenom' => 'Lior', 'nom' => 'Chamla'],
            // 'formateur2' =>['prenom' => 'Jijou', 'nom' => 'Pagan']
            // 'ages' => [12,18,29,15],
            // 'formateur' => [
            //     'prenom' => 'Lior',
            //     'nom' => 'Chamla',
            //     'age' => 33
            // ]
        // ]);

        // return new Response($html);
        return $this->render('hello2.html.twig',[
            'name' => $name]);


    }
/**
 * @Route("/example", name="example")
 */
    public function example()
    {
        return $this->render('example.html.twig',['age'=>33]);
    }

    // protected function render(string $path, array $variable = [])
    // {
    //     $html = $this->twig->render($path, $variable);
    //         return new Response($html);
    // }


}