<?php
include('../model/Travellerdb.php');

$pid = $_POST['pid1'];

if ($pid != "") {
  $connection = new db();
  $conobj = $connection->OpenCon();

  $MyQuery = $connection->SearchPackage($conobj, "package", $pid);

  if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>Package ID</th><th>Package Name</th><th>Package Description</th><th>Package Cost</th><th>Starting Date</th><th>Ending Date</th></tr>";
    // output data of each row
    while ($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>" . $row["pid"] . "</td><td>" . $row["pname"] . "</td><td>" . $row["pdesc"] . "</td><td>" . $row["cost"] . "</td><td>" . $row["sdate"] . "</td><td>" . $row["edate"] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
} else {
  echo "please enter something";
}
