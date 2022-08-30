<?php
    // $nbr1 = 10;
    // $nbr2 = 20;
    // $nbr2 = 50;
    // $nbr1 = 26;
    // $nbr1 = $nbr2 ;
    // //version 1
    // echo "nombre 1 : $nbr1 , nomnbre 2 : $nbr2";
    // //version 2
    // echo 'nombre 1 : '.$nbr1.' , nombre 2 : '.$nbr2.'';

    // // exercice 2
    // $nbr1 = 10;
    // $nbr2 = 13;
    // // AND on peut l'ecrire &&(en JS), OR (|| en JS)
    // if($nbr1>$nbr2 AND $nbr1 !=0 AND $nbr2 !=0){
    //     echo 'Le nombre 1 est le plus grand';
    // }
    // else if($nbr1 == $nbr2){
    //     echo 'Le nombre 1 et 2  sont identiques';
    // }
    // else{
    //     echo 'Le nombre 2 est le plus grand';
    // }
    // // une fonction permet de repeter un bout de code(dans php on utilise pas la fonction fleché)
    
    // exercice 3

    // $nbr1 = 10;
    // $nbr2 = 13;
    // // on peut forcer le typage avec (int ou string ex: int $nbr1 = 10;) et restera un entier a vie
    
    

    // testNbr(60,50);
    // function testNbr($nb1, $nb2){
    //     if($nb1>$nb2 AND $nb1 !=0 AND $nb2 !=0){
    //         echo 'Le nombre 1 est le plus grand';
    //     }
    //     else if($nb1 == $nb2){
    //         echo 'Le nombre 1 et 2  sont identiques';
    //     }
    //     else{
    //         echo 'Le nombre 2 est le plus grand';
    //     }
    // }





// exercice 4
// function testNbr($nb1, $nb2){
//     //test si nbr1 est le plus grand
//     if($nb1>$nb2 AND $nb1 !=0 AND $nb2 !=0){
//         echo 'Le nombre 1 est le plus grand';
//     }
//     else if($nb1 == $nb2){
//         echo 'Les nombres 1 et 2 sont identiques';
//     }
//     else{
//         echo 'Le nombre 2 est le plus grand';
//     }
// }
// ou
//appel de fonction avec un autre fichier fonction.php

//pour appeler le script (fichier) d'une fonction par exemple:
// include './functions.php';
// testNbr(60, 50);

// Exercice fonctions et conditions :
// -Créer une fonction qui prend en entrée 3 valeurs et renvoie la somme des 3 valeurs.
// echo som(4,2,6);
// function som($x, $y, $z){
//     return ($x+$y+$z);
// }
echo moyenne(10,9,15);
function moyenne($a,$b,$c):float{
    return($a+$b+$c)/3;
}
?>