<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Mes réservations </title>
        <link href="deco.css" rel="Stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/43a066436c.js" crossorigin="anonymous"></script>
    </head>
    
   

    <?php
        include 'header.php';
      ?>
        <div class="content">
          <div class="formulaire"> 
            <form action="req7.php" method="GET">
            <h1>Mes réservations</h1>
            <div class="social-media">
             <p><i class="fa-brands fa-google"></i></p>
             <p><i class="fa-brands fa-facebook"></i></p>
             <p><i class="fa-brands fa-instagram"></i></p>
             <p><i class="fa-brands fa-twitter"></i></p>
            </div>
             <p class="choose-email "> <a5>Bienvenue! veuillez saisir votre email et votre numéro de vol</a5>  </p>
             <div class="inputs ">
               <input type="email" name="email" placeholder="Email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"  required >
               <input type="text" name="num" placeholder="Numéro de vol" required>
             </div>
             <p class="inscription"> Je n'ai pas de <span>compte</span>, je m'en  <a href="new user.php" ><span></span>crée</span></a>  un.</p>
             <div align="center">
              <button class="button">Trouver ma réservation</button>
             </div> 
      

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