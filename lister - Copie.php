<?php
  include("login.php");
  $res=mysqli_query($login,"SELECT * FROM etudiant");
  if (isset($_GET['ajouter'])){
  	  $mesg="Record added successfully!";
  }
  if (isset($_GET['updated'])){
  	    $mesg="Record updated successfully!";

  }
  if (isset($_GET['supprimer'])){
  	$mesg="Record deleted successfully!";
  }
  ?>
  <!DOCTYPE html>
  <html>
    <head>
    	   <title>List of all students</title>

   </head>
   <body  style="text-align: center";>
   <p><?php echo "info:".$mesg;?></p>
   <a href="Formulaire.php">Add students</a>
   <table border="1">
   	 <thead>
   	 	<tr>
   	 		<th> id </th>
   	 		<th> Family Name</th>
   	 		<th> First Name </th>
   	 		<th> Date of Birth</th>
   	 		<th> Gender</th>
   	 		<th> City </th>
   	 		<th> Address</th>
   	 		<th> Email </th>
   	 		<th> Phone Number</th>
			<th> General Grade </th>
			<th> Fields of Study</th>
			<th> Motivation </th>
			<th> Password </th>
   	 		<th> Modification</th>
   	 		<th> Deletion</th>
   	 	</tr>

   	 </thead>
   	 <tbody>
   	 	<?php 
   	 	  while ($tab= mysqli_fetch_assoc($res)){?>
   	 	<tr>
   	     <td><?php echo $tab['id_etud'];?></td>
   	 	 <td><?php echo $tab['nom'];?></td>   	 		
   	 	 <td><?php echo $tab['prenom'];?></td>
	     <td><?php echo $tab['date_de_naissance'];?></td>
   	 	 <td><?php echo $tab['sexe'];?></td>
		 <td><?php echo $tab['ville'];?></td>
   	 	 <td><?php echo $tab['adresse'];?></td>
		<td><?php echo $tab['email'];?></td>
		<td><?php echo $tab['tele'];?></td>
        <td><?php echo $tab['note_generale'];?></td>
   	     <td><?php echo $tab['branches'];?></td>
			<td><?php echo $tab['votre_motivation'];?></td>

   	     <td><?php echo $tab['mot_de_passe'];?></td>
		 
   	     <td><a href="modification.php?id=<?php echo $tab['id_etud'];?>"  >Modification</a></td>
   	     <td><a href="suppression.php?id=<?php echo $tab['id_etud'];?>" onclick="return confirm('you deleted this')"  >Deletion</a></td>
   	 </tr>
   	<?php }
   	 ?>

   	 </tbody>
   	</table>
   </body>
   </html>
   