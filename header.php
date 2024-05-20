
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>footer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="style.css" rel="Stylesheet" type="text/css">
  </head>
  <body>
    
    
    

<div class="header">
            <div class="logo"> <a1> GoTravel </a1></div>
                <ul>
                    <li><a href="Accueil.php">Accueil</a></li>
                    <li><a href="Mes réservations.php">Mes reservations</a></li>
                    <li><a href="Nos distinations.php">Nos distinations</a></li>
                    <li><a href="Services client.php">Informations</a></li>
                    <li><a href="Mon compte.php"> Mon compte</a></li>
                   

                   
                <?php
                session_start();
                if( isset($_SESSION['email']) && isset($_SESSION['password'])){
                 echo' <li><a href="req8.php">Se déconnecter</a></li>';
                 $nom=$_SESSION['Nom'];
                 $prenom=  $_SESSION['Prenom'];
                 echo "<li><a>Bienvenue, {$nom} {$prenom}</a> </li>";
                }
                 ?>
                 </ul> 
                 
 </div>
 </body>
</html>