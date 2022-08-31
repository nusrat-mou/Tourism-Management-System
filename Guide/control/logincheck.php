<?php
include('../model/db.php');
session_start();
 $error="";
// store session data
if (isset($_POST['Login'])) 
{
    if (empty($_POST['username']) || empty($_POST['password'])) 
    {
        $error = "Username or Password is invalid";
    }
    else
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

        $connection = new db();
        $conobj=$connection->OpenCon();

        $userQuery=$connection->CheckUser($conobj,"guide",$username,$password);
       
        
            
            if($userQuery->num_rows > 0)
            {
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;
            }
            else
            {
                $error = "Username or Password is invalid";
                echo $error;
            

            }
            
        
        $connection->CloseCon($conobj);
    }
}


?>