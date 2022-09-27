<?php
    require './maison.php';
    $villa = new Maison("Keffen", 50, 30, 3);
    echo '<p>La surface de Villa '.$villa->nomMaison.' est égale à : '.$villa->surface().' m2</p>';
?>