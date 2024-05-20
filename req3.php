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
             
<div class="content">
<?php

// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Récupérer les données du formulaire
    $username = $_POST["email"];
    $password = $_POST["password"];
    

   
    
    
    // Vérifier si l'utilisateur existe dans la base de données
    $conn = mysqli_connect("localhost", "root", "root", "gotravel");
    $query = "SELECT * FROM Utilisateurs WHERE Adresse_e_mail = '$username' AND Mot_de_passe= '$password' ;";
    $result = mysqli_query($conn, $query);

        $_SESSION['email']= $_POST["email"];
        $_SESSION['password']= $_POST["password"];
    
    if(mysqli_num_rows($result) > 0){
        // Utilisateur trouvé
        echo"<a5><div id=\"msg\">connecté</div></a5>";
        
    } else{
        // Utilisateur non trouvé
        $erreur = "Nom d'utilisateur ou mot de passe incorrect.";
        header("Location: Mon compte.php?erreur=" . urlencode($erreur));
        exit;
    }
    
    // Fermer la connexion à la base de données
    mysqli_close($conn);
}

?>
<?php 
                    if(isset($_GET['erreur'])){
                    $erreur = $_GET['erreur'];
                    echo '<div class="erreur">' . $erreur . '</div>';

                    }
            ?>
<form action="req8.php">

<P>
    <?php
   
   if (mysqli_num_rows($result) > 0) {
    echo '<table id="customers">';
    echo "<tr> 
            <th class=\"colonne\">Nom</th>
            <th class=\"colonne\">Prénom</th>
            <th class=\"colonne\">Email</th>
            <th class=\"colonne\">Mot de passe</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td class=\"colonne\">" . $row['Nom'] . "</td>";
        echo "<td class=\"colonne\">" . $row['Prenom'] . "</td>";
        echo "<td class=\"colonne\">" . $row['Adresse_e_mail'] . "</td>";
        echo "<td class=\"colonne\">" . $row['Mot_de_passe'] . "</td>";
        echo "</tr>";
        $_SESSION['Nom'] =$row['Nom'];
        $_SESSION['Prenom']= $row['Prenom'];
    }
    echo '</table>';
}

    ?>
    <br>
    <br>
    <br>
    <button class="button" type="submit"> se déconnecter</button>
 </P>
</form>

</div>
<script>
		function cacherTexte() {
			document.getElementById("msg").style.display = "none";
      
		}
	</script>
  <script>
      setTimeout(cacherTexte, 900);
  </script>
<div class="contentB">

<section id="destinations">
                            <div class="distinations-group">

                   
                                    <div class="destinations-item alger">                 
                                            <div class="overlay">
                                                <span class="prix">Dès 110€</span>
                                                <span class="nom">Alger</span>
                                                
                                            </div>
                                    </div>

                                    <div class="destinations-item oran"> 
                                            <div class="overlay">
                                                <span class="prix">Dès 120€</span>
                                                <span class="nom">Oran</span>
                                               
                                            </div>
                                    </div>

                                     <div class="destinations-item  bejaia"> 
                                             <div class="overlay">
                                                <span class="prix">Dès 130€</span>
                                                <span class="nom">Béjaia</span>
                                                
                                            </div>
                                    </div>

                                    <div class="destinations-item  annaba"> 
                                            <div class="overlay">
                                                <span class="prix">Dès 140€</span>
                                                <span class="nom">Annaba</span>
                                                
                                             </div>
                                    </div>

                                    <div class="destinations-item  constantine"> 
                                            <div class="overlay">
                                                <span class="prix">Dès 150€</span>
                                                 <span class="nom">Constantine</span>
                                                    
                
                                             </div>
                                     </div>

                                     <div class="destinations-item  paris"> 
                                        <div class="overlay">
                                            <span class="prix">Dès 160€</span>
                                             <span class="nom">Paris</span>
                                            
                                         </div>
                                     </div>

                                     <div class="destinations-item marseille"> 
                                        <div class="overlay">
                                            <span class="prix">Dès 170€</span>
                                             <span class="nom">Marseille</span>
                                            
                                         </div>
                                     </div>

                                     <div class="destinations-item  lyon"> 
                                        <div class="overlay">
                                            <span class="prix">Dès 200€</span>
                                             <span class="nom">Lyon</span>
                                        
                                         </div>
                                     </div>
                                     <div class="destinations-item  lille"> 
                                        <div class="overlay">
                                            <span class="prix">Dès 180€</span>
                                             <span class="nom">Lille</span>
                                            
                                         </div>
                                     </div>


                             </div>
                       </section>
</div>

<?php
    include 'footer.php'
?>

 </body>
</html>