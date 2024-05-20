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
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
   





     // Vérifier si l'utilisateur existe dans la base de données
    $conn = mysqli_connect("localhost", "root", "root", "gotravel");
if(isset($_SESSION['vol1'])){
    $numvol1=$_SESSION['vol1'];
    $req1 = "INSERT INTO Reservations (Nom, prenom, Num_vol, Prix_total, Id_Vol, Id_Utilis) 
    SELECT '$nom', '$prenom', '$numvol1', 
    (SELECT Prix from Vols WHERE Numero_de_vol = '$numvol1' ), 
    (SELECT Id_Vol FROM Vols WHERE Numero_de_vol = '$numvol1'), 
    (SELECT Id_Utilis FROM Utilisateurs WHERE Nom = '$nom' AND prenom = '$prenom' AND Adresse_e_mail = '$email')";
 

 mysqli_query($conn, $req1);
 echo'<a5>votre vol a été bien réservé</a5>';
}else{

if(isset($_SESSION['vol2']) && isset($_SESSION['vol3'])){
    $numvol2=$_SESSION['vol2'];
    $numvol3= $_SESSION['vol3'];
    $req1 = "INSERT INTO Reservations (Nom, prenom, Num_vol, Prix_total, Id_Vol, Id_Utilis) 
    SELECT '$nom', '$prenom', '$numvol2', 
    (SELECT Prix from Vols WHERE Numero_de_vol = '$numvol2' ), 
    (SELECT Id_Vol FROM Vols WHERE Numero_de_vol = '$numvol2'), 
    (SELECT Id_Utilis FROM Utilisateurs WHERE Nom = '$nom' AND prenom = '$prenom' AND Adresse_e_mail = '$email')";
     
mysqli_query($conn, $req1);


    $req2 = "INSERT INTO Reservations (Nom, prenom, Num_vol, Prix_total, Id_Vol, Id_Utilis) 
    SELECT '$nom', '$prenom', '$numvol3', 
    (SELECT Prix from Vols WHERE Numero_de_vol = '$numvol3' ), 
    (SELECT Id_Vol FROM Vols WHERE Numero_de_vol = '$numvol3'), 
    (SELECT Id_Utilis FROM Utilisateurs WHERE Nom = '$nom' AND prenom = '$prenom' AND Adresse_e_mail = '$email')";
     
mysqli_query($conn, $req2);
echo'<a5>votre vol a été bien réservé</a5>';
}else{

    $numvol2=$_SESSION['vol2'];
    if(isset($numvol2)){
        $req1 = "INSERT INTO Reservations (Nom, prenom, Num_vol, Prix_total, Id_Vol, Id_Utilis) 
        SELECT '$nom', '$prenom', '$numvol2', 
        (SELECT Prix from Vols WHERE Numero_de_vol = '$numvol2' ), 
        (SELECT Id_Vol FROM Vols WHERE Numero_de_vol = '$numvol2'), 
        (SELECT Id_Utilis FROM Utilisateurs WHERE Nom = '$nom' AND prenom = '$prenom' AND Adresse_e_mail = '$email')";
        mysqli_query($conn, $req1);
        echo'<a5>votre vol a été bien réservé</a5>';

   
    
   
        

}else{ 
    $numvol3= $_SESSION['vol3'];
    if(isset($numvol3)){
        $req2 = "INSERT INTO Reservations (Nom, prenom, Num_vol, Prix_total, Id_Vol, Id_Utilis) 
        SELECT '$nom', '$prenom', '$numvol3', 
        (SELECT Prix from Vols WHERE Numero_de_vol = '$numvol3' ), 
        (SELECT Id_Vol FROM Vols WHERE Numero_de_vol = '$numvol3'), 
        (SELECT Id_Utilis FROM Utilisateurs WHERE Nom = '$nom' AND prenom = '$prenom' AND Adresse_e_mail = '$email')";
        mysqli_query($conn, $req2);
        echo'<a5>votre vol a été bien réservé</a5>';
}
    }

 


 



    
}
    // Fermer la connexion à la base de données
    mysqli_close($conn);
}
}
?>
     </div>



     <?php
    include 'footer.php'
    ?>
    </body>
</html>