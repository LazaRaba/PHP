<?php
//attributs
    class Vehicule{
        public $nomVehicule;
        public $nbrRoue;
        public $vitesse;
        public function __construct($nom, $nbr, $vit){
            $this->nomVehicule =$nom;
            $this->nbrRoue =$nbr;
            $this->vitesse =$vit;
        }
//methodes
        public function demarrage(){
            echo "$this->nomVehicule fait vroum !!!!";
        }
        //transformer en string (car on peut pas utiliser 'echo' dans classe mais var dump)
        public function __toString()
        {
            return $this->nbrRoue;
        }
    }
?>