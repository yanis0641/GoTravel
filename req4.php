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
        <form action="req5.php" method="POST">
            <?php
              include'conn.php';

        
              
                

             if(isset($_GET['checkboxa'])){
              $checkboxa = $_GET['checkboxa'];
              $Prix =  $_SESSION['var'];
              
              echo'<p><a5>Prix total à payer: '.$Prix.' €</a5></p>';
                  
             }else{

              if(isset($_GET['checkboxb']) && isset($_GET['checkboxc'])){
                $checkboxa=$_GET['checkboxb'];
                $checkboxc = $_GET['checkboxc'];
                $Prix1=$_SESSION['var1'];
                $Prix2=$_SESSION['var2'];
                $PrixTotal = $Prix1 + $Prix2; 
                
                echo'<p><a5>Prix total à payer:'.$PrixTotal.'€</a5></p>';
              

              }else
              {
                    if(isset($_GET['checkboxb'])){
                $checkboxa=$_GET['checkboxb'];
                $Prix1=$_SESSION['var1'];
                echo'<p><a5>Prix total à payer :'.$Prix1.'€</a5></p>';
                
              
              }else{
                    if(isset($_GET['checkboxc'])){
                $checkboxc = $_GET['checkboxc'];
                $Prix2=$_SESSION['var2'];
                echo'<p><a5>Prix total à payer:  '.$Prix2.' €</a5></p>';
               
                
              }
            }
             }
            }   
             if (isset($_GET['checkboxa']) || isset($_GET['checkboxb']) || isset($_GET['checkboxc'])) {
    
              echo '<button type="submit" class="button">Accéder au paiement</button>';
            } else {
              echo '<a5>Vous devez choisir votre vol avant d\'accéder au paiement.</a5>';
            }
            ?>
            </form>
            

                    

          
           

     </div>

    
    <?php
    include 'footer.php'
    ?>

 </body>
</html>