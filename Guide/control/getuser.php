<?php
include('../model/db.php');

$user = $_POST['tgid'];

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByTgid($conobj,"travguide",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>tgid</th><th>TravellerId</th><th>GuideId</th><th>status</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["tgid"]."</td><td>".$row["TravellerId"]."</td><td>".$row["GuideId"]."</td><td>".$row["status"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter something";
}
