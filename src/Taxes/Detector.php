<?php

namespace App\Taxes;


    class Detector {
        public $detector;

        public function detect(int $detector){

            if ($detector < 100){
                return true;
            
            }
            return false;
        }
    }