<?php include "../control/myaction.php"; ?>
<?php include "../control/travellercontroller.php"; ?>

<!DOCTYPE html>
<html>

<head>
  <title>Registration form</title>
  <link rel="stylesheet" href="../css/Signup.css">
  <script src="../JS/signupvalidation.js"></script>
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
      <h1>Sign Up</h1>
      <div class="form">
        <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
          <input type="text" name="fullname" placeholder="Full Name" id="fname" /><?php echo $validatename  ?><p id="errorfname"></p>
          <input type="text" name="email" placeholder="Email" id="email" /><?php echo $validateemail ?><p id="erroremail"></p>
          <input type="password" name="password" placeholder="Password" id="pass" /><?php echo $validatepassword  ?><p id="errorpass"></p>
          <input type="text" name="pn" placeholder="Passport Number" id="passport" /><?php echo $validatepass  ?><p id="errorpassport"></p>
          <input type="text" name="phone" placeholder="Phone number" id="phone" /><?php echo $validatephone  ?><p id="errorphone"></p>
          <input type="date" name="date" placeholder="DOB" id="dob"><?php echo $validatedate  ?><p id="errordob"></p>
          <input type="file" name="pimage" id="filetoupload">
          <p id="errorfile"></p>

          <div class="bottombox">
            <?php echo $validateradio  ?>
            <input type="radio" name="gender" value="male" id="male" />Male
            <input type="radio" name="gender" value="female" id="female" />female
            <input type="radio" name="gender" value="other" id="other" />other
            <p id="errorgender"></p>
          </div>
          <input type="submit" name="register" value="Sign Up" id="signup" />
          Already Have an Account?<a href="login.php">Log in</a>
        </form>
      </div>
    </div>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../JS/signup.js"></script>

</html>