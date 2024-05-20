<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Créer un compte </title>
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
                <div class="formulaire"> 
                    <form action="req.php" methode="GET">
                        <h1> Créer un compte</h1>
              <div class="social-media">
               <p><i class="fa-brands fa-google"></i></p>
               <p><i class="fa-brands fa-facebook"></i></p>
               <p><i class="fa-brands fa-instagram"></i></p>
               <p><i class="fa-brands fa-twitter"></i></p>
              </div>

               <div class="inputs">
                 <input type="text" placeholder="Nom" required name="nom">
                 <input type="text" placeholder="Prénom" required name="prenom">
                 <input type="text" placeholder="Adresse é-mail" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Veuillez saisir une adresse e-mail valide" required name="adresse">
                 <input type="password" placeholder="Mot de passe" required name="mdp">
                 <input type="password" placeholder="Confirmation du mot de passe" required>
                 <input type="tel" placeholder="Numéro de téléphone" pattern="^0[1-9][0-9]{8}$" title="Veuillez saisir un numéro de téléphone valide"  name="num">
               </div>
              <button type="submit" class="button">Créer un compte</button>
                    </form>
            </div>
        </div>
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