<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Registration Form </title>
  <link rel="stylesheet" href="Formulairestyle.css">

</head>
<body>
    
<h1> 
  <center> <h3><B>Registration Form for the School👨🏻‍🎓 </B></h3></center>
</h1>
 

<form method ="post" action="ajout.php"> 


  <table border="0">

  <tr>
    <td><label> Family Name:  <span class="required" style="color: red;">*</span>   </label></td> 
    <td><input type="text" name= "nom" size=" 20" placeholder="Enter your Family Name" required/></td>
  </tr>

  <tr>
    <td><label> First Name:  <span class="required" style="color: red;">*</span>   </label></td>
    <td><input type="text" name= "prenom" size="20"  placeholder="Enter your First Name" required/></td>
  </tr>

  <tr> 
    <td>
      <label> Date of Birth: <span class="required" style="color: red;">*</span>  </label>
    </td>

    <td>
    <div style="display: flex; gap: 10px;">

      <select name="ddnj">
        <option> 1</option>
        <option> 2</option>
        <option> 3</option>
        <option> 4</option>
        <option> 5</option>
        <option> 6</option>
        <option> 7</option>
        <option> 8</option>
        <option> 9</option>
        <option> 10</option>
        <option> 11</option>
        <option> 12</option>
        <option> 13</option>
        <option> 14</option>
        <option> 15</option>
        <option> 16</option>
        <option> 17</option>
        <option> 18</option>
        <option> 19</option>
        <option> 20</option>
        <option> 21</option>
        <option> 22</option>
        <option> 23</option>
        <option> 24</option>
        <option> 25</option>
        <option> 26</option>
        <option> 27</option>
        <option> 28</option>
        <option> 29</option>
        <option> 30</option>
        <option> 31</option>
      </select>

      <select name="ddnA">
        <option> 1990 </option>
        <option> 1991 </option>
        <option> 1992 </option>
        <option> 1993 </option>
        <option> 1994 </option>
        <option> 1995 </option>
        <option> 1996 </option>
        <option> 1997 </option>
        <option> 1998 </option>
        <option> 1999 </option>
        <option> 2000 </option>
        <option> 2001 </option>
        <option >2002 </option>
        <option> 2003 </option>
        <option> 2004 </option>
        <option> 2005 </option>
      </select>

      <select name ="ddnM">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
      </select>
</div>

    </td>
  </tr>

  <tr>
    <td><label>Gender:  <span class="required" style="color: red;">*</span> </label></td>
    <td>
      Female<input type="radio" name="sexe" value="Female" required>
      Male<input type="radio" name="sexe" value="Male" required>
      Other<input type="radio" name="sexe" value="Other" required>
    </td>
  </tr>

  <tr>
    <td><label> City:  <span class="required" style="color: red;">*</span> </label></td> 
    <td><input type="text" name="ville" size="20" placeholder="Enter your City" required /></td>
	</tr>
  	<!---- thats what i add------------------------------------------------------------------>
  <tr>
    <td><label> Adress:  <span class="required" style="color: red;">*</span> </label></td> 
    <td><input type="text" name="adresse" size="20" placeholder="Enter your Own Adress" required/></td>
	</tr>

  <tr>
    <td><label> Email:  <span class="required" style="color: red;">*</span> </label></td> 
    <td><input type="text" name="email" size="20" placeholder="Enter your Email" required/></td>
	</tr>

  <tr>
    <td><label> Phone Number:  <span class="required" style="color: red;">*</span> </label></td> 
    <td><input type="text" name="tele" size="20" placeholder="Enter your Phone Number" required/></td>
	</tr>
<!---------------------------------------------------------------------------------------------->
  <tr>
    <td><label> General Grade: <span class="required" style="color: red;">*</span> </label></td> 
    <td><input type="text" name="note_generale" size="20" placeholder="Enter your General Grade" required/></td>
  </tr>

    <td>
      <label> Fields of Study:<span class="required">*</span> </label>
    </td>
    <td>
      <select name="branches" >
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
    	<textarea name="votre_motivation" rows="4" cols="20"></textarea>
    </td>
  </tr>
  <tr> 
    <td><label> Password: <span class="required"  style="color: red;">*</span> </label></td> 
    <td><input type="password" name="mot_de_passe" required></td>
  </tr>

  <tr> 
    <td><label> Photo: </label></td> 
    <td><input type="File" name="Photo" ></td>
  </tr>

  <tr>
    <td><input type="submit" value="Save"></td>
    <td><input type="reset" value="Delete"></td>
    <td><input type ="button" value ="Back" onclick ="history.go(-1)"></td>
  </tr>

  </table>
</form>


</body>


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


</html>