<?php
$validateUsername="";
$validatePassword="";
$validateUsername=$validatePassword="";
$validatename="";
$validateemail="";
$validateradio="";
$validatepass="";
$validatedate="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    if(empty($_REQUEST["password"]) || (strlen($_REQUEST["password"])<6))
    {
        $validatePassword = "Please enter a valid password";
    }

    
    if(empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["email"]))
    {
        $validateemail = "You must enter email";
    }

    if(!isset($_REQUEST["gender"]))
    {
        $validateradio = "Please select at least one radio";
    }

    if(empty($_REQUEST["date"]))
    {
        $validatedate = "You must enter your date of birth correctly";

    }

    if(empty($_REQUEST["pn"]) || (strlen($_REQUEST["pn"])<9))
    {
        $validatepass = "You must enter a valid passport number";

    }

    if(empty($_REQUEST["fullname"]) || (strlen($_REQUEST["fullname"])<3))
    {
        $validatename = "You must enter name";

    }
}

?>

