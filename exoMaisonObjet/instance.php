<?php
    //importer la classe
    require './classe.php';
    //instance & affectation de valeurs
    $clio = new Vehicule("clio", 4, 160);
    $twingo = new Vehicule("bmw", 4, 200);
    //affecter des valeurs à l'objet
    /*$clio->nomVehicule = "clio";
    $clio->nbrRoue = 4;
    $clio->vitesse = 160;*/
    //appel de la fonction
    $clio->demarrage();
    //afficher dans le navigateur
    echo($clio);
    //affecter des valeurs à l'objet
    // $twingo->nomVehicule="twingo";
    // $clio->nbrRoue = 4;
    // $clio->vitesse = 140;
    echo '<br>';
    //appel de la fonction
    $twingo->demarrage();
    
?>