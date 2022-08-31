<?php
    echo '<h3> hello world </h3>';
    // print('hello world');
    echo 'mama';
    $text = "mathieu";
    echo $text;
    ?>
    /*Créer un fichier php variable.php :
-à l'intérieur du fichier vous allez exécuter l'algo suivant :
créer 2 variables :
(nbr1 donner comme valeur 10),
(nbr2 donner comme valeur 13),
nbr2 donner 50,
nbr1 donner 26,
nbr1 donner nbr2,
afficher avec echo la valeur de nbr1 et nbr2
*/
<?php
    $nbr1 = 10;
    $nbr2 = 13;
    $nbr2 = 50;
    $nbr1 = 26;
    $nbr1 = $nbr2;
    //version 1
    echo "nombre 1 : $nbr1 , nombre 2 : $nbr2";
    //version 2
    echo 'nombre 1 : '.$nbr1.' , nombre 2 : '.$nbr2.'';
?>
/*Exemple de fonction avec paramètre :*/

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
    /*Exemple avec un include :*/
    include './functions.php';
    testNbr(10, 50);
?>

//EXERCICE SUR LES FONCTIONS:

-Créer une fonction qui prend en entrée 3 valeurs et renvoie la somme des 3 valeurs.
<?php
    //affichage du résultat de la fonction somme 
    echo 'le résultat est égal à : '.somme(10,15,22);
    //fonction somme qui retourne un nombre entier (sans les virgules)
    function somme($nbr1, $nbr2, $nbr3):int{
        return $nbr1 + $nbr2 + $nbr3;
    }
?>
-Créer une fonction qui prend en entrée 3 valeurs et renvoie la moyenne de celle-ci.
<?
    function moyenne($nbr1, $nbr2, $nbr3):int{
        return ($nbr1 + $nbr2 + $nbr3)/3;
    }
    function moyenneV2($nbr1, $nbr2, $nbr3):int{
        return somme($nbr1, $nbr2, $nbr3)/3;
    }
?>
// Exemple de tableau + boucle pour le parcourir :
<?php
    //tableau indéxé
    $tab2 = [];
    $tab2[0] = 'Adrar';
    $tab2[1] = 'test';
    //parcourir un tableau indéxé
    foreach($tab2 as $value){
        echo $value.'<br>';
    }
    //tableau associatif
    $tab3 = ['nom' => 'Mithridate','prenom' => '', 'age' => ''];
    $tab3['prenom'] = 'Mathieu';
    $tab3['age'] = 43;
    $tab3['telephone'] = '0601020304';
    //parcourir un tableau associatif (nom de colonne (key) et contenu (value))
    foreach($tab3 as $key => $value){
        echo 'Le '.$key. ' : '.$value.'<br>';
    }
?>
Correction exercice 1 et 2 :
Valeur Max et Min
<?php
    $tab = [5, 11, 8, 22, 36, 42, 3, 78, 1, 29];
    //retourne la valeur minimale d'un tableau
    function minValue($tableau){
        $min = $tableau[0];
        foreach($tableau as $value){
            if($value<$min){
                $min = $value;
            }
            else{
                $min = $min;
            }
        }
        return $min;
    }
    //retourne la valeur maximale d'un tableau
    function maxValue($tableau){
        $max = 0;
        foreach($tableau as $value){
            if($value>$max){
                $max = $value;
            }
            else{
                $max = $max;
            }
        }
        return $max;
    }
    echo 'La valeur minimale est : '.minValue($tab).'<br>';    
    echo 'La valeur maximamle est : '.maxValue($tab).'<br>';    
?>

//CALCUL MOYENNE D'UN TABLEAU
<?php
    $tab = [0, 5, 12, 15];
    // pour connaitre la taille du tableau 
    // $nbrColonne = count($tab);

    $moyenne = array_sum($tab)/count($tab);
    echo 'la moyenne est : ' .$moyenne;

    // 2 Eme methode
    // $sum = 0;
    // function moyenneTab($tab){
    //     $somme = 0;
    //     foreach($tab as  $value){
    //         $somme = $somme + $value;  
    //     }
    //     return $somme/count($tab);
    // }
    // echo 'la moyenne est égale à : ' .moyenneTab($tab).'<br>';
?>