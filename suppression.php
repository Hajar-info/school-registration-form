<?php
	include("login.php");


	$id = $_GET["id"];
	$sql = "DELETE FROM etudiant WHERE id_etud='$id'";
	$result = mysqli_query($conn, $sql);
	if (!$result){
		 die('Invalid query:' .mysqli_error());

	} else{
    	header("location:lister.php?supprimer");
    }

	// close the connection
	mysqli_close($conn);
?>