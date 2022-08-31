<?php
$validateusername="";
$validatepassword="";

$v1=$v2="";
$username=$password=$fullname=$email="";
if(isset($_POST["Login"]))
{
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
   
    if(empty($_REQUEST["username"]) ||!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$username))
    {
        $validateusername="You must enter an username or email";

    }
    else
    {
        $username=$_REQUEST["username"];
    }
    if(empty($_REQUEST["password"]) || (strlen($_REQUEST["password"])<6))
{
    $validatepassword = "Please enter a valid password";
}


}
?>