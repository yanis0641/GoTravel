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
         
    <div class="page">
            
      <?php
        include 'header.php';
      ?>
     

      
                            

            <div class="content">

            <div class="formualire">
            <form action="req2.php" method="GET"> 
                <p><h1>Vols</h1></p> 
                <input type="radio" name="demo5-a" class="demo5" id="demo5-a" value="aller-retour">
                    <label for="demo5-a"> <a5>Aller-Retour</a5></label>
        
                <input type="radio" name="demo5-b" class="demo5" id="demo5-b"  value="simple">
                    <label for="demo5-b"><a5>Aller-simple</a5></label>

    
    
                <p> 
               
  <label> 
    
    <div class="select-container">
    <select name="Depart_de">   
      <option value="">D'où partez-vous?</option>
      <?php
        include 'conn.php';
        $req="SELECT DISTINCT  Ville FROM Aeroports inner join Vols on Aeroports.Ville= Vols.Arrivée order by ville;";
        $data = connexion_requete($req);
        while ($row = mysqli_fetch_array($data)) {
          echo '<option value="'.$row['Ville'].'">'.$row['Ville'].'</option>';
        }  
      ?>   
    </select>
    </div>
  </label>
                     
  <br>

  <label>  
    
    <div class="select-container">
    <select name="Arrivee_a"> 
     <option value="">   Où  allez  - vous ?</option>
      <?php
        $req = "SELECT DISTINCT Id_Aero, Ville FROM Aeroports inner join Vols on Aeroports.Ville= Vols.Arrivée order by ville;";
        $data = connexion_requete($req);
        while ($row = mysqli_fetch_array($data)) {
          echo '<option value="'.$row['Ville'].'">'.$row['Ville'].'</option>';
        }  
      ?>   
    </select>
    </div>
  </label> 
  
</p>
 
                </p>
               

                 <p>     <label> <a5>Départ le</a5>
                            <input type="date" name="aller">
                     </label>
                     
                 <div id="champs-retour">
                     <label >   <a5> Retour le </a5>
                             <input type="date" name="retour">
                     </label>
                 </div>
                </p>
                <P>
                    <button class="button" type="submit"> Rechercher des vols</button>
                </P>
            </form>
            </div>   
            </div>

            
            <div class="contentA">
              <p><img src="1.png"> <br> <a3>Assistance </a3><br> GoTravel est un centre d’assistance ayant les réponses à toutes vos questions pour voyager sans stress. </p>
                <p> <img src="2.png"> <br> <a3>Faites confiance à notre expertise </a3><br> Rejoignez notre communauté grandissante comptant 14 millions de voyageurs heureux par an.</p>
              <p> <img src="3.png"> <br> <a3>Voyagez malin, appréciez plus </a3><br> Que vous recherchiez un vol direct, un vol de dernière minute ou un vol tôt le matin, GoTravel a le vol qu’il vous faut.</p>

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
<script>
                var radioSimple = document.querySelector('input[value="simple"]');
var radioRetour = document.querySelector('input[value="aller-retour"]');
var champsRetour = document.querySelector('#champs-retour');

// Au chargement de la page, on cache le champ "Date de retour"
champsRetour.style.display = 'none';

// Lorsque l'utilisateur clique sur le bouton "Vol simple"
radioSimple.addEventListener('click', function() {
  // On cache le champ "Date de retour"
  champsRetour.style.display = 'none';
});

// Lorsque l'utilisateur clique sur le bouton "Aller-retour"
radioRetour.addEventListener('click', function() {
  // On affiche le champ "Date de retour"
  champsRetour.style.display = 'block';
});

</script>

  
    </div>
            
    </body>
</html>