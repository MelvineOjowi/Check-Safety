<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title>  
form
</title> 
<link rel="stylesheet" href="style.css">  
</head>  
<body>  
<form method="post" action="connection.php">  
<div class="container" >  
<center>  <h1>Register Form</h1> </center>  
    
<hr>  
<label for="fn"> Firstname </label>   
<input type="text" id="fn" name="firstname" placeholder= "firstname" size="15" required />   
<label for="mn"> Middlename: </label>   
<input type="text" id="mn" name="middlename" placeholder="middlename" size="15" required />   
<label for="ln"> Lastname: </label>    
<input type="text" id="ln" name="lastname" placeholder="lastname" size="15"required />   
  

<label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other
  
<br>
<label for="phn">   
Phone :  
</label>  
<input type="text" name="phone" placeholder="Country Code"  value="254" size="3"/>   
  
<label for="em">   
Email  
</label>  
<input type="text" id="em" placeholder="Enter Email"  name="email" required>  

<label for="pass">   
password  
</label>  
<input type="password" class="pass" id="pass" placeholder="Enter password"  name="password" required>  
     
<button type="submit" name="submit" value="submit">Submit</button>  
</div>  
</form>  
</body>  
</html>  
