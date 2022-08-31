<?php include "../control/myaction.php"; ?>
<?php include "../control/travellercontroller.php"; ?>
<?php
//show profile data

$fname = $email = $passportNo = $phoneNo = $dob = $password = $radio1 = $radio2 = $radio3 = $target_file = "";

$connection = new db();
$conobj = $connection->OpenCon();


$userQuery = $connection->CheckUser($conobj, "traveller", $_SESSION["email"], $_SESSION["password"]);

if ($userQuery->num_rows > 0) {
  while ($row = $userQuery->fetch_assoc()) {
    $fname = $row["FullName"];
    $email = $row["Email"];
    $password = $row["Password"];
    $passportNo = $row["PassportNumber"];
    $phoneNo = $row["PhoneNumber"];
    $dob = $row["DOB"];
    $picture = $row["ProfilePicture"];

    $target_file = "$picture";
    if ($row["Gender"] == "female") {
      $radio1 = "checked";
    } else if ($row["Gender"] == "male") {
      $radio2 = "checked";
    } else {
      $radio3 = "checked";
    }
  }

  // echo "<img src=".$target_file." width=200px height=200px> ";
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Registration form</title>
  <link rel="stylesheet" href="../css/profile.css">
  <script src="../JS/profile.js"></script>
</head>

<body>
  <div class="container">
    <div class="nav-bar">
      <a href="../../index.php">Home</a>
      <a href="../view/pageone.php">Dashboard</a>
    </div>
    <!-- <h1>Personal Details</h1> -->
    <div class="innerbox">
      <div class="message">
        <?php echo $st ?>
      </div>
      <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <?php echo "<img src=" . $target_file . " width=140px height=140px> "; ?>
        <input type="text" name="fullname" value="<?php echo $fname; ?>" id="fname" /><?php echo $validatename  ?><p id="errorfname"></p>
        <input type="text" name="password" value="<?php echo $password; ?>" id="pass" /><?php echo $validatepassword ?><p id="errorpass"></p>
        <input type="text" name="pn" value="<?php echo $passportNo; ?>" id="passport" /><?php echo $validatepass ?><p id="errorpassport"></p>
        <input type="text" name="phone" value="<?php echo $phoneNo; ?>" id="phone" /><?php echo $validatephone ?><p id="errorphone"></p>
        <input type='date' name='date' value="<?php echo $dob; ?>" id="dob"><?php echo $validatedate ?><p id="errordob"></p>
        <input type="file" name="updateImage" value="1.jpg" id="errorfile">
        <p id="errorfile"></p>

        <div class="bottombox">
          <?php echo $validateradio  ?>
          <input type='radio' name='gender' value='male' <?php echo $radio2; ?> id="male">Male
          <input type='radio' name='gender' value='female' <?php echo $radio1; ?> id="female">Female
          <input type='radio' name='gender' value='other' <?php $radio3; ?> id="other"> Other
          <p id="errorgender"></p>
        </div>
        <div class="button">
          <input type="submit" value="Update" name="update" class="btn1">
          <input type="submit" value="Deactivate ID" name="disableTemp" class="btn1">
          <input type="submit" value="Delete ID" name="disableFull" class="btn1">
        </div>
      </form>
    </div>
  </div>
</body>

</html>