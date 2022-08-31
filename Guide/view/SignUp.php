<?php

include("../control/SignUpCheck.php");
include("../control/actionsignup.php");
?>

<!DOCTYPE html>
<html>
<head>

<script src="../js/Signup.js"></script>
<title>Sign Up Page</title>
<link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
  <body>
  <div class="container">

    <hr>
    <div class="header">
    <div class="innerbox">
    <h1>Create Your Guide Account</h1>
    <form  onsubmit="return validateSignUpForm()" method = "post">
          <input type="text" name="fullname" id="fullname" placeholder="Enter Your Fullname" /><p id="errorfullname"></p><?php echo $validatename?>
          <input type="text" name="email" id="email" placeholder="Enter your email" /><p id="erroremail"></p><?php echo $validateemail?>
          <input type="password" name="password" id="password" placeholder="Enter your password" /><p id="errorpassword"></p><?php echo $validatepassword?>
          <input type="text" name="pn" id="pn" placeholder="Enter your NID" /><p id="errorpn"></p><?php echo $validatepn?><br>

  
          <input type="radio" name="gender" id="g1" value="male"/>Male
          <input type="radio" name="gender" id="g2" value="female"/>Female
          <input type="radio" name="gender" id="g3"value="other"/>Other
            <p id="errorgender"></p>
            <?php echo $validateradio?>
     
            
          <input type="date" name="date" id="date" ><p id="errordate"></p><?php echo $validatedate?>
        
          <input type="checkbox" name="language" id="l1" value="English" />English
          <input type="checkbox" name="language" id="l2" value="Bangla" />Bangla
          <input type="checkbox" name="language" id="l3" value="Hindi" /> Hindi
          <p id="errorcheckbox"></p>
          <?php echo $validatecheckbox?>

    
        <div class="input[type=submit]"> 
          
            <input type="submit" name="SignUp" value="Sign Up"  />
          
</div>
    </form>
    Go back to previous page?<a href="login.php">Back</a>
   
</div>
</div>
    <br>
    
  </body>
</html