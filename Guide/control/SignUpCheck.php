<?php
include('../model/db.php');


$error="";

if(isset($_POST["SignUp"]))

{
   
    if(empty($_POST['fullname'])||empty($_POST['email'])||empty($_POST['password'])||empty($_POST['pn'])||empty($_POST['gender'])||empty($_POST['date'])||empty($_POST['language']))
    {
        $error="input given is invalid";
        echo $error;
        echo "<br>";
    }else
    {
        $connection = new db();
        $conobj=$connection->OpenCon();

        $userQuery = $connection->InsertGuide($conobj,"guide",$_POST['fullname'],$_POST['email'],$_POST['password'],$_POST['pn'],$_POST['gender'],$_POST['date'],$_POST['language'],'pending');

        if($userQuery==TRUE)
        {
            echo "data updated";
            echo "<br>";
            
        } 
        else
        {
            echo "could not update data";
        }
        $connection->CloseCon($conobj);
    }
}
?>