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

       
	<div class="formulaire">
	<form action="req6.php" method="post">

    <h1> Paiement</h1>
    <div class="inputs">
		<label>
		<input type="text"  name="nom" placeholder="Nom" required>
        </label>

        <label>
		<input type="text"  name="prenom" placeholder="Prénom" required>
        </label>

        <label>
		<input type="email"  name="email" placeholder="Email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Veuillez saisir une adresse e-mail valide" required>
        </label>
	
		<label>
		<input type="tel" name="telephone" placeholder="Téléphone" pattern="^0[1-9][0-9]{8}$" title="Veuillez saisir un numéro de téléphone valide" required>
        </label>

		<label>
		<input type="text"  name="carte_credit" placeholder="Numéro de Carte de Crédit" required>
        </label>

		<label>
		<input type="text" name="expiration" placeholder="Date d'Expiration (MM/AA)" required>
        </label>

		<label>
		<input type="text" name="cvv" placeholder="CVV" required><br><br>
        </label>
        </div>
        
		<input type="submit" value="Payer" class="button">
	
        </form>
        </div>
        

     </div>
    
    <?php
    include 'footer.php'
    ?>

 </body>
</html>