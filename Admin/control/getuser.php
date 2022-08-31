<?php
include('../model/Guidedb.php');

$user = $_POST['email'];

if($user!="")
{
   
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByEmail($conobj,"guide",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>GuideID</th><th>fullname</th><th>email</th><th>password</th><th>NID</th><th>gender</th><th>DOB</th><th>language</th><th>status</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["GuideId"]."</td><td>".$row["FullName"]."</td><td>".$row["Email"]."</td><td>".$row["Password"]."</td>.<td>".$row["NID"]."</td><td>".$row["gender"]."</td><td>".$row["DOB"]."</td><td>".$row["language"]."</td><td>".$row["status"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter something";
}
