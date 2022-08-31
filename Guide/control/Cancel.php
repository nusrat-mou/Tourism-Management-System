<?php
include('../model/db.php');

$error="";
if(isset($_POST["cancel"]))
{
    if(empty($_POST['tgid'])||empty($_POST['TravellerId'])||empty($_POST['GuideId']))
    {
        $error="input given is invalid";
        echo $error;
        echo "<br>";
    }else
    {
        $connection = new db();
        $conobj=$connection->OpenCon();

        $userQuery = $connection->CancelUser($conobj,"travguide",$_POST['tgid']);

        if($userQuery==TRUE)
        {
            echo "Request Cancelled";
            echo "<br>";
            
        } 
        else
        {
            echo "Could not cancel request";
        }
        $connection->CloseCon($conobj);
    }
}
?>