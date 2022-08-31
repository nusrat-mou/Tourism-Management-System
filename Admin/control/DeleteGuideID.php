<?php
include('../model/Guidedb.php');

$error="";
if(isset($_POST["delete"]))
{
    if(empty($_POST['email']))
    {
        $error="input given is invalid";
        echo $error;
        echo "<br>";
    }else
    {
        $connection = new db();
        $conobj=$connection->OpenCon();

        $userQuery = $connection->DeleteGuideUser($conobj,"guide",$_POST['email']);

        if($userQuery==TRUE)
        {
            echo "User deleted successfully";
            echo "<br>";
            
        } 
        else
        {
            echo "Could not delete user please try again";
        }
        $connection->CloseCon($conobj);
    }
}
?>