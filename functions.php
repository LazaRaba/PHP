<!-- on peut reutiliser la fonction -->
<?php
    function testNbr($nb1, $nb2){
        //test si nbr1 est le plus grand
        if($nb1>$nb2 AND $nb1 !=0 AND $nb2 !=0){
            echo 'Le nombre 1 est le plus grand';
        }
        else if($nb1 == $nb2){
            echo 'Les nombres 1 et 2 sont identiques';
        }
        else{
            echo 'Le nombre 2 est le plus grand';
        }
    }
    // exo syntaxe

    function som($x, $y, $z){
        return ($x+$y+$z);
    }
?>
<!-- -Créer une fonction qui prend en entrée 3 valeurs et renvoie la moyenne de celle-ci. -->
<?
    function moyenne($nbr1, $nbr2, $nbr3):int{
        return ($nbr1 + $nbr2 + $nbr3)/3;
    }
    function moyenneV2($nbr1, $nbr2, $nbr3):int{
        return somme($nbr1, $nbr2, $nbr3)/3;
    }
?>