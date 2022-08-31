<?php
include('../model/db.php');

$user = $_POST['pname'];

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetPackageBypname($conobj,"package",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>pname</th><th>pdesc</th><th>cost</th><th>sdate</th><th>edate</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["pname"]."</td><td>".$row["pdesc"]."</td><td>".$row["cost"]."</td><td>".$row["sdate"]."</td><td>".$row["edate"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter something";
}
?>