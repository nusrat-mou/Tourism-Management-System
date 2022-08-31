<?php include "../control/SearchPackage.php"; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Results</title>
<link rel="stylesheet" type="text/css" href="../css/viewresultcss.css">
</head>

<body>
  
  <div class="body">
    <div class="header">
    <h2>Search for Products </h2>

    <form action = "" method = "post">
      <input type="text" name="tgid" placeholder="Enter Traveller Guide ID"/><br>
        <input type="submit" value="Search by ID" name="searchid"><br>
        <input type="submit" value="Show All Packages" name="showall">
    </form>
    <br>
   

    <script>
function showmyuser() {
  var tgid=  document.getElementById("tgid").value;
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
  xhttp.open("POST", "/Project/Guide/control/getuser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("tgid="+tgid);


}

</script>
</head>



<h3>Find Detail of User by Traveller Guide Id: </h3>

  <input type="text" id="tgid" onkeyup="showmyuser()"> <br>
  <button onclick="showmyuser()">Search</button>

<p id="mytext"></p>


Go back to previous page? <a href="../view/pageone.php">Back</a><br>
</div>
</div>
</body>
</html>
