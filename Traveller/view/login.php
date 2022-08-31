<?php
include('../control/travellercontroller.php');

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
  header("location: pageone.php");
}
?>

<?php include "../control/myaction.php"; ?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="../css/login.css">
  <script src="../JS/loginvalidation.js"></script>
</head>

<body>
  <div class="container">
    <div class="nav-bar">
      <a href="../../index.php" id="Home">Home</a>
    </div>
    <div class="message">
      <?php echo $st ?>
    </div>
    <div class="innerbox">
      <form action="" method="post" onsubmit="return validateForm()">
        <input type="text" name="email" id="email" placeholder="Email" /><?php echo $validateemail ?><p id="erroremail"></p>
        <input type="password" name="password" placeholder="Password" id="pass" /><?php echo $validatepassword  ?><p id="errorpass"></p>
        <div class="button">
          <input type="submit" name="login" value="Sign In" id="signin" />
          <input type="submit" value="Activate Now" name="activate" id="activate">
        </div>
        Don't have an account?<a href="TravellerSignup.php">Sign Up</a>
      </form>
    </div>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../JS/login.js"></script>

</html>