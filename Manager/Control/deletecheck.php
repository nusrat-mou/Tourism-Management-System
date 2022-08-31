<?php
include('../model/db.php');
?>

<?php

if(isset($_POST['delete']))
{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->DeleteUser($conobj,"package",$_POST["pid"]);
    
   
}
?>