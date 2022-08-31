<?php
include('../model/db.php');

$user = $_POST['tid'];

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->ViewTraveller($conobj,"traveller",$user);


if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>Traveller ID</th><th>Full Name</th><th>Email</th><th>Password</th><th>Passport Number</th><th>Phone Number</th><th>DOB</th><th>Gender</th><th>Status</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["TravellerId"]."</td><td>".$row["FullName"]."</td><td>".$row["Email"]."</td><td>".$row["Password"]."</td><td>".$row["PassportNumber"]."</td><td>".$row["PhoneNumber"]."</td><td>".$row["DOB"]."</td><td>".$row["Gender"]."</td><td>".$row["status"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter something";
}