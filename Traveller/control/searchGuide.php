<?php
include('../model/Travellerdb.php');

$user = $_POST['gid1'];

if ($user != "") {
  $connection = new db();
  $conobj = $connection->OpenCon();

  $MyQuery = $connection->SearchGuide($conobj, "guide", $user);

  if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>FullName</th><th>Email</th><th>NID</th><th>Gender</th><th>DOB</th><th>Language</th></tr>";
    // output data of each row
    while ($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>" . $row["FullName"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["NID"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["DOB"] . "</td><td>" . $row["language"] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
} else {
  echo "please enter something";
}
