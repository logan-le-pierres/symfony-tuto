<?php

namespace App\Controller;

use App\Taxes\Calculator;
use App\Taxes\Detector;
use Twig\Environment;
use Cocur\Slugify\Slugify;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {

        protected $calculator;
        // protected $logger;


        public function __construct( LoggerInterface $logger, Calculator $calculator, Slugify $slugify, Detector $detector )
        {
            dump($detector->detect(101));
            dump($detector->detect(10));
            dump($slugify->slugify("Salut comment tu vas ?"));
            $this->calculator = $calculator;
            $logger->error("Mon message de log!");
        }
    


    // public function __construct(LoggerInterface $logger)
    // {
    //     $this->logger = $logger;
    // }

    /** 
     * @Route("/hello/{name?world}", name="hello", methods={"GET","POST"}, schemes={"http", "https"})
     */
    public function hello(Request $request, $name, Environment $twig)
    {
        dump($twig);
        //  $this->logger->error("Mon message de log");
       
        $tva = $this->calculator->calcul(100);
        dump($tva);
        return new Response("Hello $name");
    }
}