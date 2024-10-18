<?php
  include("login.php");

  $id = $_GET['id'];
  $res = mysqli_query($conn, "SELECT * FROM etudiant WHERE id_etud='$id'");
  if (!$res){
    echo "Ereur : " . mysqli_error($conn);
  }
  $tab = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title> Registration Form </title>
    <link rel="stylesheet" href="modificationstyle.css">

  </head>
  <body>
  	<form action="modifierscript.php" method="post">
  	<input type="hidden" name="id" value= "<?php  echo $tab['id_etud'];?>">
  	<table border="2" width="50%">
  	<tr>
      <th colspan="2">
        <center>
  	   <h1> Modification of the Form </h1>
        </center>
      </th>
    </tr>

    <tr> 
      <td width="30%">Family Name:</td>
      <td width="70%"><input type="text" name="nom" value="<?php echo $tab['nom'];?>"></td>
    </tr>

    <tr>
  	  <td width="30%">First Name:</td>
  	  <td width="70%"><input type="text"name="prenom" value="<?php echo $tab['prenom'];?>"></td>
    </tr>

    <tr>
	  <td width="30%">Date of Birth:</td>
      <td width="70%"><input type="text" name="date_de_naissance" value="<?php echo $tab['date_de_naissance'];?>"/></td>
    </tr>

    <tr>
      <td><label>Gender:</label></td>
      <td>
        <!--  ?php echo $tab['sexe'];?><input type="radio" name="sexe" value="<?php echo $tab['sexe'];?>" checked="checked"  --->


        Female <input type="radio" name="sexe" value="Female">
        Male   <input type="radio" name="sexe" value="Male">
        Other  <input type="radio" name="sexe" value="Other">
      </td>
    </tr>


    <tr>
        <td><label> City: </label></td> 
        <td><input type="text" name="ville" size="20" value="<?php echo $tab['ville'];?>"  /></td>
    </tr>

    <tr>
        <td><label> Adress: </label></td> 
        <td><input type="text" name="adresse" size="20" value="<?php echo $tab['adresse'];?>" /></td>
    </tr>

    <tr>
        <td><label> Email: </label></td> 
        <td><input type="text" name="email" size="20" value="<?php echo $tab['email'];?>"  /></td>
    </tr>

    <tr>
        <td><label> Phone Number: </label></td> 
        <td><input type="text" name="tele" size="20" value="<?php echo $tab['tele'];?>"  /></td>
    </tr>

    <tr>
        <td><label> General Grade: </label></td> 
        <td><input type="text" name="note_generale" size="20" value="<?php echo $tab['note_generale'];?>"  /></td>
    </tr>

    <tr>
    <td>
      <label> Fields of Study: </label>
    </td>
    <td>
      <select name="branches">
        <option selected="selected"><?php echo $tab['branches'];?></option>
        <option> choose Field of Study </option>
        <option value="Computer Science ">Computer Science </option>  
        <option value="Mechanical Engineering">Mechanical Engineering</option>  
        <option value= "Electrical Engineering">Electrical Engineering</option>
        <option value="Civil Engineering"> Civil Engineering</option>
        <option value="Business Administration">Business Administration</option>
        <option value="Nursing "> Nursing</option>
        <option value="International Relations ">International Relations</option>
        <option value=" Biology">Biology</option>  
        <option value=" Architecture"> Architecture </option>  
      </select>
    </td>
  </tr>

   

    <tr>
      <td>
        <label> Motivation: </label>
      </td> 
      <td> 
        <textarea name="votre_motivation" rows="4" cols="20"><?php echo $tab['votre_motivation'];?></textarea>
      </td>
    </tr>
    <tr> 
      <td><label> Password: </label></td> 
      <td><input type="password" name="mot_de_passe" value="<?php echo $tab['mot_de_passe'];?>"></td>
    </tr>
    <tr> 
      <td><input type="submit" value="Update"></td>
    </tr>
</table>
</form>

<?php
  // close the connection
  mysqli_close($conn);
?>

</body>
</html>