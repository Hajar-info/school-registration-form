<?php
include("login.php");

$res = mysqli_query($conn, "SELECT * FROM etudiant");
if (!$res) {
    echo "Error: " . mysqli_error($conn);
}
$mesg = "";
if (isset($_GET['ajouter'])) {
    $mesg = "Record added successfully!";
}
if (isset($_GET['updated'])) {
    $mesg = "Record updated successfully!";
}
if (isset($_GET['supprimer'])) {
    $mesg = "Record deleted successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of All Students</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="listerstyle.css"> <!-- Link to your CSS file -->
</head>
<body style="text-align: center;">
    <p><?php echo "Info: " . $mesg; ?></p>
    <a href="Formulaire.php" class="btn">Add Students</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Family Name</th>
                <th>First Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>City</th>
                <th>Address</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>General Grade</th>
                <th>Fields of Study</th>
                <th>Motivation</th>
                <th>Password</th>
                <th>Modification</th>
                <th>Deletion</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (mysqli_num_rows($res) > 0) {
                while ($tab = mysqli_fetch_assoc($res)) {
            ?>
            <tr>
                <td><?php echo $tab['id_etud']; ?></td>
                <td><?php echo $tab['nom']; ?></td>
                <td><?php echo $tab['prenom']; ?></td>
                <td><?php echo $tab['date_de_naissance']; ?></td>
                <td><?php echo $tab['sexe']; ?></td>
                <td><?php echo $tab['ville']; ?></td>
                <td><?php echo $tab['adresse']; ?></td>
                <td><?php echo $tab['email']; ?></td>
                <td><?php echo $tab['tele']; ?></td>
                <td><?php echo $tab['note_generale']; ?></td>
                <td><?php echo $tab['branches']; ?></td>
                <td><?php echo $tab['votre_motivation']; ?></td>
                <td><?php echo $tab['mot_de_passe']; ?></td>

                <td><a href="modification.php?id=<?php echo $tab['id_etud']; ?>" title="Modify">
               <i class="fas fa-edit"></i>
               </a> </td>
               <td><a href="suppression.php?id=<?php echo $tab['id_etud']; ?>" title="Delete" onclick="return confirm('Are you really going to delete?')">
               <i class="fas fa-trash-alt"></i>
              </a> </td>

            </tr>
            <?php 
                } // end while
            } else {
                echo "<tr><td colspan='15'>0 results</td></tr>";
            }
            mysqli_close($conn);
            ?>
        </tbody>
    </table>

    
<footer>
    <div class="footer-content">
        <div class="contact-info">
            <p>Email: contactschool@gmail.com</p>
            <p>Phone: +212 67 87 98 657</p>
            <p>Address: 123 School St, City, Country</p>
        </div>
        <div class="copyright">
            <p>&copy; 2024 School Name. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>
