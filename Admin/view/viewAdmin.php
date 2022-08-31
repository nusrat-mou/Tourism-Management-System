<?php include "../control/admincontroller.php" ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../css/viewAdmin.css">
</head>

<body>

  <script>
    function showmyuser() {
      var aid = document.getElementById("aid").value;
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("mytext").innerHTML = this.responseText;
        } else {
          document.getElementById("mytext").innerHTML = this.status;
        }
      };
      xhttp.open("POST", "../control/viewAdmin.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("aid=" + aid);


    }
  </script>

  <div class="container">
    <div class="nav-bar">
      <a href="../../index.php" id="Home">Home</a>
      <a href="AdminHome.php">Admin Dashboard</a>
    </div>
    <div class="innerbox">
      <div class="bottombox1">
        <p id="mytext"></p>
      </div>
      <div class="message">
        <?php echo $st; ?>
      </div>
      <form action="" method="post">
        <input type="text" name="aid" id="aid" placeholder="Enter Admin ID" onkeyup="showmyuser()" /><?php echo $validateaid ?>
        <div class="button2">
          <input type="submit" value="Delete Admin" name="disableFull" class="btn1">
          <input type="submit" value="Disable Admin" name="disableTemp" class="btn2">
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