<?php
include "../control/GuideValidation.php";
include "../control/InsertGuide.php"; ?>

<!DOCTYPE html>
<html>

<head>
  <script src="../js/CreateGuide.js"></script>
  <title>Registration form</title>
  <link rel="stylesheet" type="text/css" href="../css/GuideForm.css">
</head>

<body>
  <div class="body">
    <div class="header">
      <h1>Create Guide ID</h1>
    </div>
  </div>

  <div class="header">
    <div class="innerbox">
      <form onsubmit="return validateGuideForm()" method="post">

        <input type="text" name="fullname" id="fullname" placeholder="Enter your fullname" />
        <p id="errorfullname"></p><?php echo $validatename  ?>
        <input type="text" name="email" id="email" placeholder="Enter your email" />
        <p id="erroremail"></p><?php echo $validateemail ?>
        <input type="password" name="password" id="password" placeholder="Enter your password" />
        <p id="errorpassword"></p><?php echo $validatepassword  ?>
        <input type="text" name="pn" id="pn" placeholder="Enter your NID" />
        <p id="errorpn"></p><?php echo $validatepass ?>
        Gender: <br> <br>
        Male <input type="radio" name="gender" id="g1" value="male" />
        Female<input type="radio" name="gender" id="g2" value="female" />
        Other<input type="radio" name="gender" id="g3" value="other" />
        <p id="errorgender"></p>
        <?php echo $validateradio  ?>
        <br>

        <input type="date" name="date" id="date" placeholder="Enter your date of birth">
        <p id="errordate"></p><?php echo $validatedate  ?>


        Language: <br> <br>
        English<input type="checkbox" name="language" id="l1" value="English" />
        Bangla<input type="checkbox" name="language" id="l2" value="Bangla" />
        Hindi<input type="checkbox" name="language" id="l3" value="Hindi" />

        <p id="errorcheckbox"></p>

        <?php echo $validatecheckbox  ?>

        <div class=" input[type=submit]">
          <input type="submit" name="Register" value="Register" />
        </div>
        <div class="input[type=reset]">
          <input type="reset" name="Reset" />

        </div>
      </form>
      Go back to Dashboard?<a href="GuideDashboard.php">Back</a>

    </div>
  </div>
  <br>

</body>

</html>