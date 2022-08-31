<?php
include "..\model\db.php";
$connection=new db();
$conobj=$connection->OpenCon();

$SearchPackage=$connection->ShowAll($conobj,"package");

if ($SearchPackage->num_rows > 0) {

    // output data of each row
    while($row = $SearchPackage->fetch_assoc()) {

      
      echo "Package Name : ".$row["pname"]."<br>";
      echo "Package Description : ".$row["pdesc"]."<br>";
      echo "Cost : ".$row["cost"]."<br>";


      echo "Package Starting date : ".$row["sdate"]."<br>";
      echo "Package Ending date : ".$row["edate"]."<br>";
      

    }
}

?>