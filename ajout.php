<?php
include("login.php");

$Nom = $_POST["nom"];
$Prenom = $_POST["prenom"];
$Date_de_naissance= $_POST["ddnA"]."-".$_POST["ddnM"]."-".$_POST["ddnj"];
$Genre = $_POST["sexe"];
$Ville = $_POST["ville"];
$adresse = $_POST["adresse"];
$email = $_POST["email"];
$tele = $_POST["tele"];
$Note_Generale = $_POST["note_generale"];
$Branches = $_POST["branches"]; 
$Mot_de_Passe= $_POST["mot_de_passe"];
$Votre_motivation= $_POST["votre_motivation"];

//add to database
$sql = "INSERT INTO etudiant (nom, prenom, date_de_naissance, sexe, ville,  adresse,email, tele, note_generale,branches, mot_de_passe, votre_motivation) 
VALUES ('$Nom', '$Prenom','$Date_de_naissance', '$Genre','$Ville','$adresse', '$email', '$tele', '$Note_Generale', '$Branches', '$Mot_de_Passe', '$Votre_motivation')";

$result = mysqli_query($conn, $sql);

if ($result){
      header("location:lister.php?ajouter");
} else {
  echo "Ereur : " . mysqli_error($conn);
}

mysqli_close($conn);
?>