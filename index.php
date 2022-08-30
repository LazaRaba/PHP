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
Exercice fonctions et conditions :
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
