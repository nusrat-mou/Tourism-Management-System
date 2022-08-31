<?php include "../control/myaction.php"; ?>
<?php include "../control/packagecontroller.php"; ?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../css/managepackage.css">
  <script src="../JS/cancelpackage.js"></script>
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
        <input type="number" name="cancelid" placeholder="Enter Package ID" id="pid3" /><?php echo $validateCancelPackage ?><p id="errorpid3"></p>
        <input type="submit" value="Cancel Booking" name="cancelbooking" id="cancel">
      </form>
    </div>
    <div class="message">
      <?php echo $pkgstatus ?>
    </div>
  </div>

</body>

</html>