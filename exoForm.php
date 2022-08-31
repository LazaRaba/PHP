Créer un formulaire html qui va contenir les éléments suivants :
action ="" method="post"
-les inputs de type ="text" nom, prenom, login, (name : nom, prenom, login)
-input de type="email" mail, (name : mail)
-input de type="password" password, (name : password)
-input de type="date" date, (name : date)
-input de type="submit" ajouter (name : submit),
NB pensez à ajouter un attribut name sur chaque input.

Partie PHP :
vérifier le clic sur le bouton submit (afficher si ce n'est pas cliqué),
vérifier si tous les inputs sont bien remplis,
afficher un message si il ne sont pas tous remplis,
afficher un message si tous les champs sont rempli :
Le compte $_POST['mail'] à été ajouté le $_POST['date'] (modifié)
[14:05]
Bonus : formater la date avec le pattern suivant  : jour num jour, mois, année (4 chiffres) : Mardi 31/08/2022 (modifié)


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
        <p><input type="text" name="nom"></p>
        <p><input type="text" name="prenom"></p>
        <p><input type="text" name="login"></p>
        <p><input type="email" name="mail"></p>
        <p><input type="password" name="password"></p>
        <p><input type="date" name="date"></p>
        <p><input type="submit" value="ajouter" name="submit"></p>
    </form>
</body>
</html>
<!-- Partie PHP :
vérifier le clic sur le bouton submit (afficher si ce n'est pas cliqué),
vérifier si tous les inputs sont bien remplis,
afficher un message si il ne sont pas tous remplis,
afficher un message si tous les champs sont rempli :
Le compte $_POST['mail'] à été ajouté le $_POST['date'] 
Bonus : formater la date avec le pattern suivant  : jour num jour, mois, année (4 chiffres) : Mardi 31/08/2022  -->

<!-- Method 1 QUENTIN-->
<?php
    if((isset($_POST['submit']))){
        if(!empty($_POST['nom']) AND !empty($_POST['prenom'])  AND !empty($_POST['login']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['date'])){
            $jourTrad = ['Lundi' => "Monday", 'Mardi' => "Tuesday",'Mercredi' => "Wednesday",'Jeudi' => "Thursday",'Vendredi' => "Friday",'Samedi' => "Saturday",'Dimanche' => "Sunday"];
            $maDate = new DateTime($_POST['date']);
            $jour = $maDate->format("l");
            foreach($jourTrad as $key => $value){
                if ($jour == $value){
                    $jour = $key;
                }
            }
            // echo '<p>Le compte '.$_POST['mail'].' a été ajouté le '.$_POST['date'].'</p>'
            // echo '<p>Le compte '.$_POST['mail'].' a été ajouté  '.date("l d/m/Y", new DateTime($_POST['date'])).'</p>';
            echo '<p>Le compte '.$_POST['mail'].' a été ajouté le '. $jour ." " .$maDate->format("d/m/Y") .'</p>';
        }
        else{
            echo '<p>Veuillez remplir tous les champs</p>';
        }
    }
    
?>

<!-- Method 2--Mathieu Formateur -->

<?php
    $tab =['Lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'Samedi', 'Dimanche'];
    //clic sur le bouton
    if(isset($_POST['submit'])){
        //test si les champs sont remplis
        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) 
        AND !empty($_POST['login']) AND !empty($_POST['date']) 
        AND !empty($_POST['mail']) AND !empty($_POST['password'])){
            $date = new DateTime($_POST['date']);
            echo '<p>le compte '.$_POST['mail'].' a été ajouté le : '.$tab[$date->format('N')-1].' '.$date->format('d/n/Y').'</p>';
        }
        //test si les champs sont vides
        else{
            echo '<p>Veuillez remplir tous les champs</p>';
        }
    }
    //test si le bouton n'est pas cliqué
    else{
        echo '<p>Pour ajouter un utilisateur 
        cliquez sur le bouton ajouter</p>';
    }
?>