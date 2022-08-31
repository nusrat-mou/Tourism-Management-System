<?php include "../control/myaction.php"; ?>
<?php include "../control/packagecontroller.php"; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/managepackage.css">
<script src="../JS/viewpackage.js"></script>

<script>
function showmyuser() {
  var pid1=  document.getElementById("pid1").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "../control/searchPackage.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("pid1="+pid1);
}

</script>
</head>
<body>

<div class="container">
  <div class="nav-bar">
    <a href="../../index.php">Home</a>
    <a href="../view/pageone.php">Dashboard</a>
  </div>
  <div class="innerbox">
    <form action = "" method = "post" onkeyup="showmyuser()">
      <input type="text" name="pid" placeholder="Enter Package ID" id="pid1"/><?php echo $validatepid1 ?><p id="errorpid1" ></p>
      <div class="button">
        <input type="submit" value="Show All Packages" name="showallpackage">
      </div>
    </form>
    <div class="bottombox1">
      <h4>Search by Package ID</h4>
      <hr>
      <p id="mytext"></p>
    </div>
    <div class="bottombox2">
      <?php
        if($GLOBALS["flag1"]==1)
        {
          $data = file_get_contents("../control/packagedata.json");
          $mydata = json_decode($data);
          foreach($mydata as $myobject)
          {
            foreach($myobject as $key=>$value)
            {
              echo $key.": ".$value."<br>";
            }
            echo "<br><br>"; 
          }
      }
    ?>
    </div>
  </div>
</div>

</body>
</html>
