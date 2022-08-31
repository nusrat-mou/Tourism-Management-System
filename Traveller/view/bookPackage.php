<?php include "../control/myaction.php"; ?>
<?php include "../control/packagecontroller.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../css/managepackage.css">
  <script src="../JS/bookpackage.js"></script>
</head>

<body>

  <div class="container">
    <div class="nav-bar">
      <a href="../../index.php">Home</a>
      <a href="../view/pageone.php">Dashboard</a>
    </div>
    <div class="innerbox">
      <form action="" method="post" onsubmit="return validateForm()">
        <input type="number" name="bookid" placeholder="Enter package ID" id="pid2" /><?php echo $validateBookPackage ?><p id="errorpid2"></p>
        <input type="submit" value="Book Now" name="bookpackage" id="book">
      </form>
    </div>
    <div class="message">
      <?php echo $pkgstatus ?>
    </div>
  </div>

</body>

</html>