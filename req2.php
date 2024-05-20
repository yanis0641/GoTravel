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
             include'header.php';
         ?>
        
     
        
         <div class="content">
         <form action="req4.php" method="GET">
        
           
                <?php
                    include'conn.php';
                    

                   
                    
                    $depart = $_GET['Depart_de'];
                    $arrivé = $_GET['Arrivee_a'];
                    $aller = $_GET['aller'];
                    $retour = $_GET['retour'];
                    
$date_format_sql1 = date("Y-m-d", strtotime(str_replace('/', '-', $aller))); // convertir la date en format SQL

$date_format_sql2= date("Y-m-d", strtotime(str_replace('/', '-',  $retour))); // convertir la date en format SQL




        if (isset($_GET['demo5-b'])) {   
                $radio2 = $_GET['demo5-b'];
                $req1="select Compagnie_aerienne,Numero_de_vol,Depart,Arrivée,Date_du_vol,heure_de_départ,heure_arrivée,Duree,Prix
                from Vols where Depart='$depart' and Arrivée='$arrivé' and Date_du_vol='$date_format_sql1';";
                
                $data =  connexion_requete($req1);
                

                if ($data) {
                    if (mysqli_num_rows($data) > 0) {
                      
                       
                        
                        

                echo '<table id="customers">';
                echo "<tr> 
                        <th class=\"colonne\">Vol</th>
                        <th class=\"colonne\">Compagnie aérienne</th>
                        <th class=\"colonne\">N° de vol</th>
                        <th class=\"colonne\">Départ</th>
                        <th class=\"colonne\">Arrivée</th>
                        <th class=\"colonne\">Date du vol</th>
                        <th class=\"colonne\">Heure de départ</th>
                        <th class=\"colonne\">Heure d'arrivée</th>
                        <th class=\"colonne\">Durée</th>
                        <th class=\"colonne\">Prix</th></tr>";

            while ($row = mysqli_fetch_assoc($data)) {
                        echo "<tr>";
                        echo "<td class=\"colonne\">" . 'Aller simple'. "</td>";
                        echo "<td class=\"colonne\">" . $row['Compagnie_aerienne'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Numero_de_vol'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Depart'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Arrivée'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Date_du_vol'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['heure_de_départ'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['heure_arrivée'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Duree'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Prix'] .'€'. "</td>";
                        echo "</tr>";
                        $prix = $row['Prix'] ;
                        $_SESSION['var'] = $prix;

                       $numvol1= $row['Numero_de_vol'];
                       $_SESSION['vol1']=$numvol1;
            }
            echo "</table><br>";

           


            



    
            echo '<p><label><input  type="checkbox" name="checkboxa" ><a5>Choisir ce vol</a5></label></p><br>';
            
            if (mysqli_num_rows($data) > 0){
               
                echo '<p> <button type="submit" class="button">Acheter</button> </p>';
             
             } 
           
        } else {

            echo "<tr> <a5>Il n'y a pas de disponibilité sur les vols/dates sélectionnés. Veuillez modifier votre sélection</a5></tr><br>";
        }
    }
            }
            else{
                        // Si 'demo5-a' n'est pas défini, affecter une valeur par défaut à $radio1
                        $radio2 = '';
            }


            $value = 0;

            if (isset($_GET['demo5-a'])){

                $radio1 = $_GET['demo5-a'];
                $req1="select Compagnie_aerienne,Numero_de_vol,Depart,Arrivée,Date_du_vol,heure_de_départ,heure_arrivée,Duree,Prix
                from Vols where Depart='$depart' and Arrivée='$arrivé' and Date_du_vol='$date_format_sql1';";
                
                
                $data = connexion_requete($req1);
                if ($data) {
                    if (mysqli_num_rows($data) > 0) {
                    
                
                
                echo "<p><table id=\"customers\">";
                echo "<tr>
                
                        <th class=\"colonne\">Vol</th>
                        <th class=\"colonne\">Compagnie aérienne</th>
                        <th class=\"colonne\">N° de vol</th>
                        <th class=\"colonne\">Départ</th>
                        <th class=\"colonne\">Arrivée</th>
                        <th class=\"colonne\">Date du vol</th>
                        <th class=\"colonne\">Heure de départ</th>
                        <th class=\"colonne\">Heure d'arrivée</th>
                        <th class=\"colonne\">Durée</th>
                        <th class=\"colonne\">Prix</th></tr>";

            while ($row = mysqli_fetch_assoc($data)) {
                        echo "<tr>";
                        echo "<td class=\"colonne\">" . 'Aller'. "</td>";
                        echo "<td class=\"colonne\">" . $row['Compagnie_aerienne'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Numero_de_vol'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Depart'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Arrivée'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Date_du_vol'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['heure_de_départ'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['heure_arrivée'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Duree'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Prix'] .'€'. "</td>";
                        echo "</tr>";
                        $prix1 = $row['Prix'] ;
                        $_SESSION['var1'] = $prix1;

                        $numvol2= $row['Numero_de_vol'];
                        $_SESSION['vol2']=$numvol2;

            }
                        echo "</table><p><br>";

                      
                        echo '<p><label><input type="checkbox" name="checkboxb"><a5>Choisir ce vol aller</a5></label></p><br>';
                        $value++;
                       
            
            
            
        } else {
            echo "<p><a5>Il n'y a pas de disponibilité pour le vol aller sélectionné. Veuillez modifier votre sélection </a5></p><br>";
            
        }
    }
                

                $req2="select Compagnie_aerienne,Numero_de_vol,Depart,Arrivée,Date_du_vol,heure_de_départ,heure_arrivée,Duree,Prix
                from Vols where Arrivée='$depart' and Depart='$arrivé' and Date_du_vol='$date_format_sql2';";
                $data = connexion_requete($req2);
                if ($data) {
                    if (mysqli_num_rows($data) > 0) {
                        
                        
                        
                
                  
            
            while ($row = mysqli_fetch_assoc($data)) {
                echo "<p><table id=\"customers\">";
                echo "<tr>
                
                        <th class=\"colonne\">Vol</th>
                        <th class=\"colonne\">Compagnie aérienne</th>
                        <th class=\"colonne\">N° de vol</th>
                        <th class=\"colonne\">Départ</th>
                        <th class=\"colonne\">Arrivée</th>
                        <th class=\"colonne\">Date du vol</th>
                        <th class=\"colonne\">Heure de départ</th>
                        <th class=\"colonne\">Heure d'arrivée</th>
                        <th class=\"colonne\">Durée</th>
                        <th class=\"colonne\">Prix</th></tr>";

                        echo "<tr>";
                        echo "<td class=\"colonne\">" . 'Retour'. "</td>";
                        echo "<td class=\"colonne\">" . $row['Compagnie_aerienne'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Numero_de_vol'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Depart'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Arrivée'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Date_du_vol'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['heure_de_départ'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['heure_arrivée'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Duree'] . "</td>";
                        echo "<td class=\"colonne\">" . $row['Prix'] .'€'. "</td>";
                        echo "</tr>";
                        $prix2 = $row['Prix'] ;
                        $_SESSION['var2'] = $prix2;

                        $numvol3= $row['Numero_de_vol'];
                        $_SESSION['vol3']=$numvol3;
                         }
                        echo "</table></p><br>";


                       

                        echo '<p><label><input type="checkbox" name="checkboxc" ><a5>Choisir ce vol retour</a5></label></p><br>';
                        $value++;

                    }          
                     else {
            echo "<p><a5>Il n'y a pas de disponibilité pour le vol retour sélectionné. Veuillez modifier votre sélection<a5></p><br>";
            
         }   
        }
  
               
            }else{
                // Si 'demo5-b' n'est pas défini, affecter une valeur par défaut à $radio2
                $radio1 = '';
            }


            if($value==1 or $value==2){
                echo '<p> <button type="submit" class="button">Acheter</button> </p>';

            }

            
                ?>
                
                </form>
         </div>
   

        
         <?php
            include'footer.php'; 
         ?>

    </body>

</html>