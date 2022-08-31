<?php
include('../model/db.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['login'])) 
{
  if (empty($_POST['email']) || empty($_POST['password'])) 
  {
    $error = "email or Password is invalid";
  }
  else
  {
    $email=$_POST['email'];
    $password=$_POST['password'];

    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->CheckManager($conobj,"manager",$email,$password);

    if ($userQuery->num_rows > 0) 
    {
      $_SESSION["email"] = $email;
      $_SESSION["password"] = $password;
    }
    else 
    {
      $error = "email or Password is invalid";
    }
    $connection->CloseCon($conobj);

  }
}


?>
