<!-- -Créer une page de formulaire dans laquelle on aura 3 champs de formulaire de type nombre :
1 champ de formulaire qui demande un prix HT d’un article,
1 champ de formulaire qui demande le nombre d’article,
1 champ de formulaire qui demande le taux de TVA,
-Afficher dans cette même page le prix TTC (prix HT*taux TVA*quantité) avec un affichage du style :
Le prix TTC est égal à : valeur €. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p><input type="text" name="prixHt" placeholder="Prix Hors taxe"></p>
        <p><input type="text" name="nbArticle" placeholder="Nombre d'article"></p>
        <p><input type="text" name="tva" placeholder="TVA"></p>
        <p><input type="submit" value="ajouter" name="submit"></p>
    </form>
</body>
</html>

<?php
    if((isset($_POST['submit']))){
        $prixHt = $_POST['prixHt'];
        $nbArticle = $_POST['nbArticle'];
        $tva = $_POST['tva'];

        if ($tva < 1){
            $tva += 1;
        }else if ($tva > 10){
            $tva = $tva/100+1;
        }
        echo 'le prix TTC est :' .$prixHt * $tva * $nbArticle;
    }
?>