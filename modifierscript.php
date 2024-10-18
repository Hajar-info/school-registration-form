<?php 
 include("login.php");

$id=$_POST["id"];
$Nom= $_POST["nom"];
$Prenom= $_POST["prenom"];
$Date_de_naissance= $_POST["date_de_naissance"];
$Genre= $_POST["sexe"];
$Ville= $_POST["ville"];
$adresse= $_POST["adresse"];
$email = $_POST["email"];
$tele = $_POST["tele"];
$Note_Generale	= $_POST["note_generale"];
$Branches= $_POST["branches"];
$Votre_motivation= $_POST["votre_motivation"];
$Mot_de_Passe= $_POST["mot_de_passe"];


  //add a la base de donnee 
  $sql = "UPDATE etudiant SET nom='$Nom',prenom='$Prenom', date_de_naissance='$Date_de_naissance', sexe='$Genre', ville='$Ville', 
  adresse='$adresse', email='$email', tele='$tele', note_generale='$Note_Generale',  branches='$Branches',  votre_motivation='$Votre_motivation', mot_de_passe='$Mot_de_Passe' 
  WHERE id_etud='$id'";

  $result = mysqli_query($conn, $sql);
  if (!$result){
  	die('Invalid query:' .mysqli_error());

  } else{
      header("location:lister.php?updated");
    }

  // close the connection
  mysqli_close($conn);
?>