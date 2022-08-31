//<?php
// Tableau Indexé
    $tab = [];
    $tab2 = array();
    $tab[0] = 'mathieu';
    $tab2[0] = 'adrar';
    // echo $tab2[0];

//Tableau associatif
    $tab3 = ['nom'=> 'Mithriglo','prenom', 'age' => ''];
    $tab3['prenom'] = 'Mathieu';
    $tab3['age'] = 43;
    $tab3['telephone'] = '0600200020'; //on l'a mis dans '' sinon php va convertir 
    echo $tab3['telephone'];

//BOUCLE 
    foreach($tab3 as $value){
        echo $value.'<br>';
    }
//PARCOURIR UN TABLEAU ASSOCIATIF 
    foreach($tab3 as $key => $value){
        echo 'le '.$key.' : ' .$value.  '<br>';  
    }
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