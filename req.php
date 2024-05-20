
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Mon compte </title>
        <link href="deco.css" rel="Stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/43a066436c.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
        include 'header.php'
      ?>
    
    <div class="content">
<?php
include'conn.php';

  $nom = $_GET["nom"];
  $prenom = $_GET["prenom"];
  $email = $_GET["adresse"];
  $password = $_GET["mdp"];
  $tel = $_GET["num"];

  $req=" insert into Utilisateurs(Nom,Prenom,Adresse_e_mail,Mot_de_passe,Numero_de_telephone)
        values('$nom','$prenom','$email','$password',$tel)";



$data =   connexion_requete($req);
  echo"<a5><div id=\"msg\">compte crée avec succès</a5></div>";

  ?>
  <script>
		function cacherTexte() {
			document.getElementById("msg").style.display = "none";
      
		}
	</script>
  <script>
      setTimeout(cacherTexte, 900);
  </script>
  </div>
  <div class="contentA"></div>
  <div class="contentB"></div>
  <?php
        include 'footer.php'
      ?>

    </body>
</html>