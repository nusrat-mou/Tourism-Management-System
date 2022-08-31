<?php
include('../control/admincontroller.php');

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
  header("location: AdminHome.php");
}
?>

<?php include "../control/action.php"; ?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="../css/AdminLogin.css">
</head>

<body>
  <div class="container">
    <div class="nav-bar">
      <a href="../../index.php">Home</a>
    </div>
    <div class="message">
      <?php echo $st; ?>
    </div>
    <div class="innerbox">
      <form action="" method="post">
        <input type="text" name="email" id="email" placeholder="Email" /><?php echo $validateemail ?><p id="erroremail"></p>
        <input type="password" name="password" placeholder="Password" id="pass" /><?php echo $validatePassword  ?><p id="errorpass"></p>
        <div class="button1">
          <input type="submit" name="login" value="Sign In" class="btn1" />
        </div>
      </form>
    </div>
  </div>
</body>

</html>