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

<div class="information">
<?php
  include'conn.php';
    
    // Récupérer les données du formulaire
    $email= $_GET['email'];
    $num = $_GET['num'];
   
    
    
    $req = "SELECT * FROM Reservations r, Utilisateurs u
    WHERE u.Adresse_e_mail = '$email'
    AND r.Num_vol = '$num'
    AND u.Nom = r.Nom
    AND u.Prenom = r.prenom ;";
    
    $data = connexion_requete($req);

if ($data) {
 
    if (mysqli_num_rows($data) > 0) {
    
    


echo "<p><table id=\"customers\">";
echo "<tr>

        <th class=\"colonne\">Id_Reserv</th>
        <th class=\"colonne\">Nom</th>
        <th class=\"colonne\">prenom</th>
        <th class=\"colonne\">Num_vol</th>
        <th class=\"colonne\">Date_de_reservation</th>
        <th class=\"colonne\">Prix_total</th>
        <th class=\"colonne\">Id_Vol</th>
        <th class=\"colonne\">Id_Utilis</th>
      </tr>";

while ($row = mysqli_fetch_assoc($data)) {
    
        echo "<tr>";
        echo "<td class=\"colonne\">" . $row['Id_Reserv'] . "</td>";
        echo "<td class=\"colonne\">" . $row['Nom'] . "</td>";
        echo "<td class=\"colonne\">" . $row['prenom'] . "</td>";
        echo "<td class=\"colonne\">" . $row['Num_vol'] . "</td>";
        echo "<td class=\"colonne\">" . $row['Date_de_reservation'] . "</td>";
        echo "<td class=\"colonne\">" . $row['Prix_total'] . "</td>";
        echo "<td class=\"colonne\">" . $row['Id_Vol'] . "</td>";
        echo "<td class=\"colonne\">" . $row['Id_Utilis'] . "</td>";
        echo "</tr>";
    }
    echo "</table><p><br>";
}


}


?>
</div>

<?php
    include 'footer.php';
?>