<?php include "../control/myaction.php"; ?>
<?php include "../control/guidecontroller.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Document</title>
  <link rel="stylesheet" href="../css/managepackage.css">
  <script src="../JS/bookguide.js"></script>
</head>

<body>
  <div class="container">
    <div class="nav-bar">
      <a href="../../index.php">Home</a>
      <a href="../view/pageone.php">Dashboard</a>
    </div>
    <div class="innerbox">
      <form action="" method="post" onsubmit="return validateForm()">
        <input type="number" name="guidebookid" placeholder="Enter Guide ID" id="gid2" /><?php echo $validateguideid2 ?><p id="errorgid2"></p>
        <input type="submit" value="Book Now" name="bookGuide" id="bookguide">
      </form>
    </div>
    <div class="message">
      <?php echo $guidest ?>
    </div>
  </div>
</body>

</html>