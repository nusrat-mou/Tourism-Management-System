<?php
include('../model/Admindb.php');

$user = $_POST['aid'];

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->ViewAdmin($conobj,"admin",$user);


if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>Admin ID</th><th>Full Name</th><th>Email</th><th>Password</th><th>DOB</th><th>Gender</th><th>Address</th><th>WorkExperience</th><th>Status</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["AdminId"]."</td><td>".$row["FullName"]."</td><td>".$row["Email"]."</td><td>".$row["Password"]."</td><td>".$row["DOB"]."</td><td>".$row["Gender"]."</td><td>".$row["Address"]."</td><td>".$row["WorkExperience"]."</td><td>".$row["status"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter something";
}