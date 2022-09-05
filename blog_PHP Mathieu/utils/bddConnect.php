<?php
   //connexion à la base de données
   //Stockés dans une variable la connection, à la place de localhost on peut mettre l'adresse IP si c heberger en ligne
   $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root','',// root = login par defaut de mysql
   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
