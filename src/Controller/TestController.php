<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController {

    public function index() {
        dd("Ca fonctionne aussi");
    }
    /*
    *@Route(/test/{age<\d+>?0}, name="test", methods={"GET","POST"}, host="localhost",schemes={"http","https"})
    */
    public function test(Request $request, $age) {
        
        // $request = Request:: createFromGlobals();
        
        //  $age = $request->attributes->get("age", 0);
        //  return new Response("Vous avez $age ans.");

        // if (!empty($_GET["age"])){
        // $age = $_GET["age"];
        // }
        
        dd("Ca fonctionne, vous avez $age ans.");
    }
}
