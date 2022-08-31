<?php 
include('../model/Travellerdb.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../css/managepackage.css">
</head>
<body>

<div class="container">
  <div class="nav-bar">
    <a href="../../index.php">Home</a>
    <a href="../view/pageone.php">Dashboard</a>
  </div>
  <div class="booked">
        <?php
            $connection = new db();
            $conobj=$connection->OpenCon();

            $q=$connection->GetTraveller($conobj,"traveller",$_SESSION["email"]);
            $row = $q->fetch_assoc();
            $tid=$row["TravellerId"];

            $userQuery=$connection->ShowGuideStatus($conobj,"travguide",$tid);
            while($row = $userQuery->fetch_assoc())
            {

                    $gid=$row["GuideId"];
                    $st=$row["status"];

                    echo  "Guide ID: ".$gid."<br>";
                    echo  "Guide Status: ".$st."<br>";
                    echo "<br><br>";

            }
        ?>
  </div>
</div>

</body>
</html>


