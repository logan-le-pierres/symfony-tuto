<?php

namespace App\Taxes;


    class Detector {
        protected $seuil;

        public function __construct(float $seuil){

            $this->seuil = $seuil;

        }

        public function detect(int $prix){

            

            if ($prix < $this->seuil){
                return true;
            
            }
            return false;
        }
    }