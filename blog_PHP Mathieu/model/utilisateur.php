<?php
    function createUser($bdd,$nom, $prenom, $mail, $password){
        try {
            $req = $bdd->query("INSERT INTO utilisateur(nom_util, prenom_util, mail_util,
             password_util)VALUES('$nom', '$prenom', '$mail', '$password')");
        } 
        catch (Exception $e) 
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    function createUserV2($bdd,$nom, $prenom, $mail, $password){
        try {
            $req = $bdd->prepare("INSERT INTO utilisateur(nom_util, prenom_util, mail_util,
            password_util)VALUES(:nom, :prenom, :mail, :pwd)");//C'est comme des variables avec des pointer
            $req->execute([
                'nom'=> $nom,
                'prenom'=> $prenom,
                'mail'=> $mail,
                'pwd'=> $password
                ]);
        } 
        catch (Exception $e) 
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    //Modele V3 celle a utilisé car plus secure
    function createUserV3($bdd,$nom, $prenom, $mail, $password){
        try {
            $req = $bdd->prepare("INSERT INTO utilisateur(nom_util, prenom_util, mail_util,
            password_util)VALUES(?, ?, ?, ?)");//on amis "?" car on attend que les 4 champs sont obligatoire pour le remplissage 
            $req->bindParam(1, $nom, PDO::PARAM_STR);// PARAM_STR :preciser ce que l'on attend ici par ex c'est du STRING 
            $req->bindParam(2, $prenom, PDO::PARAM_STR); //2 = Rang de ce qu'on veut atteindre "?", $prenom =variable
            $req->bindParam(3, $mail, PDO::PARAM_STR);
            $req->bindParam(4, $password, PDO::PARAM_STR);
            $req->execute();//envoi la requette 
        } 
        catch (Exception $e) //$e c'est nom qui a été choisi, par convention "e".
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    //fonction qui retourne un tableau associatif d'un utilisateur null (ex :?string)
    //Verification si "mail" a été déja utiliser pour la création d'un compte(pour eviter le doublon)
    //Cette fonction peut etre utiliser aussi pour la verification de compte en mode connection
    function showUserByMail($bdd, $mail):?array{//'?array' Soit tu me renvoi un tableau soit tu me renvoi null
        try {
            //stocker et évaluer la requête
            $req = $bdd->prepare("SELECT id_util, nom_util, prenom_util,
            mail_util, password_util FROM utilisateur WHERE mail_util = ?");
            //binder la valeur $mail au ?
            $req->bindParam(1, $mail, PDO::PARAM_STR);
            //exécuter la requête
            $req->execute();
            //stocker dans $data le résultat de la requête (tableau associatif)
            //$data recupère la variable $req dans notre exemple : (:nom, :prenom, :mail, :pwd).
            $data = $req->fetchAll(PDO::FETCH_ASSOC);// fetch traduction :récuperer  // FETCH_ASSOC on attend au retour un tableau associatif
            //retourner le tableau associatif
            return $data;
        } 
        catch (Exception $e) 
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
?> 