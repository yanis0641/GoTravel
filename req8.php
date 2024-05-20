<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Accueil </title>
        <link href="deco.css" rel="Stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/43a066436c.js" crossorigin="anonymous"></script>
        
    </head>
    <body>
    <?php
        include 'header.php';
    ?>
    <div class="formation">
<?php

// On démarre la session

session_start ();



// On détruit les variables de notre session

session_unset ();



// On détruit notre session

session_destroy ();



// On redirige le visiteur vers la page d'accueil

header ('location: Accueil.php');


?>
</div>

 <?php
    include 'footer.php';
 ?>