<?php
include('../model/db.php');


 $error="";

if (isset($_POST['submit'])) 
{
if (empty($_POST['pname'])) 
{
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();


$userQuery=$connection->UpdatePackage($conobj,"package",$_POST['pname'],$_POST['pdesc'],$_POST['sdate'],$_POST['edate'],$_POST["cost"]);

if($userQuery==TRUE)
{
    echo "update successful"; 
    
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>