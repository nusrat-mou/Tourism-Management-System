<?php
include "..\Control\searchValidation.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search Here</title>
        <link rel="stylesheet"  href="..\css\search.css">
        <script>
            function showmyuser() {
              var pname=  document.getElementById("pname").value;
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
              xhttp.open("POST", "../Control/getpackage.php", true);
              xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhttp.send("pname="+pname);
            
            
            }
        </script>
    </head>
    <body>
        <form  action="" method="POST">
            <input type="text" name="pname" id="pname" placeholder="Package name" onkeyup="showmyuser()"><?php echo $error; ?>
            <p id="mytext"></p>

        </form>
    </body>
</html>