<?php
include('../control/logincheck.php');

if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
    header("location: pageone.php");
}
?>
<?php include "../control/action.php"; ?>

<!DOCTYPE html>
<html>
<head>
<script src="../js/login.js"></script>
<title>Guide Login</title>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>
<body>
<div class="container">
<div class="header">

  <br>
  <br>
  <br>
  <br>
 <h2>Log in</h2>

 
 <br>


</div>
</div>
</div>
<div class="header">
<div class="innerbox">
<form  onsubmit="return validateloginForm()" method = "post">
 <input type="text" name="username" id="username" placeholder="Enter Username"><p id="errorusername"></p><?php echo $validateusername?></p><br>
<input type="password" name="password" id="password" placeholder="Enter Password"><p id="errorpassword"></p><?php echo $validatepassword?><br>
<input type="submit" name="Login" value="Login"><br>
Or
<div id="signup">
  <ul>
    <li> <a href="SignUp.php">Sign Up</a></li>
</ul>
    
</div>
<br>
<br>
<br>
<br>


Go back to Dashboard? <a href="../../index.php">Back</a>

</form>

</div>
</div>

</body>
</html>
