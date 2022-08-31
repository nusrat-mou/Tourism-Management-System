<?php include "../control/TravellerValidation.php"; ?>
<?php include "../control/travellercontroller.php"; ?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../css/viewtraveller.css">
</head>

<body>

  <script>
    function showmyuser() {
      var tid = document.getElementById("tid").value;
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("mytext").innerHTML = this.responseText;
        } else {
          document.getElementById("mytext").innerHTML = this.status;
        }
      };
      xhttp.open("POST", "../control/viewtraveller.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("tid=" + tid);


    }
  </script>

  <div class="container">
    <div class="nav-bar">
      <a href="../../index.php" id="Home">Home</a>
      <a href="AdminHome.php">Admin Dashboard</a>
    </div>
    <div class="innerbox">

      <div class="bottombox1">
        <h4>Search by Traveller ID</h4>
        <hr>
        <p id="mytext"></p>
      </div>
      <div class="message">
        <?php echo $st; ?>
      </div>
      <form action="" method="post">
        <input type="text" name="tid" id="tid" placeholder="Enter Traveller ID" onkeyup="showmyuser()" /><?php echo $validatetid ?>
        <p id="mytext"></p>
        <div class="button2">
          <input type="submit" value="Delete Traveller" name="disableFull" class="btn1">
          <input type="submit" value="Disable Traveller" name="disableTemp" class="btn2">
        </div>
        <div class="button3">
          <input type="submit" value="Activate" name="activate" class="btn1">
          <input type="submit" value="Block" name="block" class="btn2">
        </div>
      </form>

    </div>
  </div>
</body>

</html>