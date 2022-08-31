<?php include "../control/myaction.php"; ?>
<?php include "../control/guidecontroller.php"; ?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../css/manageguide.css">
  <script src="../JS/cancelguide.js"></script>
</head>

<body>

  <div class="container">
    <div class="nav-bar">
      <a href="../../index.php">Home</a>
      <a href="../view/pageone.php">Dashboard</a>
    </div>
    <div class="innerbox">
      <form action="" method="post" onsubmit="return validateForm()">
        Cancel Booking
        <input type="number" name="cancelguideid" placeholder="Enter Package ID" id="gid3" /><?php echo $validateCancelguide ?><p id="errorgid3"></p>
        <input type="submit" value="Cancel Booking" name="cancelguide" id="cancel">
      </form>
    </div>
    <div class="message">
      <?php echo $guidest ?>
    </div>
  </div>

</body>

</html>