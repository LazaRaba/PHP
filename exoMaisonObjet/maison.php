<?php
    class Maison{
        public $nomMaison;
        public $longueur;
        public $largeur;
        public $nbrEtage;
        public function __construct($nom, $long, $larg, $etage){
            $this->nomMaison =$nom;
            $this->longueur =$long;
            $this->largeur =$larg;
            $this->nbrEtage=$etage;
        }
        //methods
        public function surface(){
            return $this->longueur * $this->largeur * $this->nbrEtage;
        }
    }
?>