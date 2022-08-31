<?php
session_start(); 
if(empty($_SESSION["email"])) 
{
header("Location: ../view/login.php"); 
}

?>

<?php
 $cookie_value="";
 $cookie_name = "user";
 $cookie_value =  $_SESSION["email"];
 if(!isset( $_COOKIE[$cookie_name]))
 {
     echo "You are a new user";
     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
 }
else
 {
     echo "You have visited this site before";
 }
?>


<!DOCTYPE html>
<html>
<body>
<h1>Dashboard</h1>
<hr>


<h5>Do you want <a href="addpackage.php"> ADD package</a></h5>
<h5>Do you want to go to <a href="update.php"> update package</a></h5>
<h5>Do you want to go to <a href="search.php"> search package</a></h5>
<h5>Do you want <a href="show.php"> show package</a></h5>
<h5>Do you want to go to <a href="delete.php"> Delete package</a></h5>
<h5>Do you want logout <a href="../Control/logout.php"> Logout</a></h5>
 

</body>
</html>

