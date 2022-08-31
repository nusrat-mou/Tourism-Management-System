<?php
include("../control/GuideValidation.php");



?>


<!DOCTYPE html>
<html>

<head>
  <title>View Guide</title>
  <link rel="stylesheet" type="text/css" href="../css/ViewGuide.css">

</head>

<body>

  <script>
    function showmyuser() {
      var email = document.getElementById("email").value;
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("mytext").innerHTML = this.responseText;
        } else {
          document.getElementById("mytext").innerHTML = this.status;
        }
      };
      xhttp.open("POST", "/Project/Admin/control/getuser.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("email=" + email);


    }
  </script>



  <div class="body">
    <div class="header">
      <div class="navbar">


        <a href="../../index.php">Home</a>
        <a href="../view/GuideDashboard.php"> Dashboard</a>
      </div>

      <br>
      <br>
      <h3>Search by email: </h3>
    </div>
  </div>

  <div class="header">
    <div class="innerbox">

      <input type="text" id="email" onkeyup="showmyuser()"> <br>
      <button onclick="showmyuser()">Search</button>

      <p id="mytext"></p>


      <a href="GuideDashboard.php">Back </a>
    </div>
  </div>
</body>

</html>