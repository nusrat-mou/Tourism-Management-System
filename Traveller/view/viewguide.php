<?php include "../control/myaction.php"; ?>
<?php include "../control/guidecontroller.php"; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/manageguide.css">
<script src="../JS/viewguide.js"></script>
<script>
function showmyuser() {
  var gid1=  document.getElementById("gid1").value;
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
  xhttp.open("POST", "../control/searchGuide.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("gid1="+gid1);


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
      <input type="text" name="guideid" placeholder="Enter Guide ID" id="gid1"/><?php echo $validateguideid1 ?><p id="errorgid1" ></p>
      <div class="button">
       <input type="submit" value="Show All Guide" name="showallguide">
      </div>
    </form>
    <div class="bottombox1">
      <h4>Search by Guide ID</h4>
      <hr>
      <p id="mytext"></p>
    </div>
    <div class="bottombox2">
      <?php
        if($GLOBALS["flag1"]==1)
        {
          $data = file_get_contents("../control/guide.json");
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
