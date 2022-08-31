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

            $userQuery=$connection->GetPid($conobj,"travpack",$tid);
            while($row = $userQuery->fetch_assoc())
            {
                $pid=$row["pid"];
                $Bookedpackage=$connection->ShowBookedPackage($conobj,"package",$pid);

                while($row = $Bookedpackage->fetch_assoc()) 
                {
                    $pkgid=$row["pid"];
                    $pname=$row["pname"];
                    $pdesc=$row["pdesc"];
                    $pprice=$row["cost"];
                    $sdate=$row["sdate"];
                    $edate=$row["edate"];

                    echo  "PID: ".$pkgid."<br>";
                    echo  "Package Name: ".$pname."<br>";
                    echo  "Package Description: ".$pdesc."<br>";
                    echo  "Package Cost: ".$pprice."<br>";
                    echo  "Starting Date: ".$sdate."<br>";
                    echo  "Ending Date: ".$edate."<br>";
                    echo "<br><br>";
                } 
            }
        ?>
  </div>
</div>

</body>
</html>


