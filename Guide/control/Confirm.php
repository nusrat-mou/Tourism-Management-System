<?php
include('../model/db.php');

$error="";
if(isset($_POST["confirm"]))
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

        $userQuery = $connection->ConfirmUser($conobj,"travguide",$_POST['tgid']);

        if($userQuery==TRUE)
        {
            echo "Request Confirmed";
            echo "<br>";
            
        } 
        else
        {
            echo "Could not confirm request";
        }
        $connection->CloseCon($conobj);
    }
}
?>