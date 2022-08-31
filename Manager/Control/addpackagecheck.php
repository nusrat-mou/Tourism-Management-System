<?php
include('../model/db.php');

if(isset($_POST["submit"])){
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->addpackage($conobj,"package",$_POST['pname'],$_POST['pdesc'],$_POST['cost'],$_POST['sdate'],$_POST["edate"]);

if($userQuery==TRUE)
{
    echo "Updated"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);
}

?>
