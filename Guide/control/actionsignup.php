<?php
$validatename="";
$validateemail="";
$validatepassword="";
$validatepn="";
$validateradio="";
$validatedate="";
$validatecheckbox="";
$validatestatus="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{

    if(empty($_REQUEST["fullname"]) || (strlen($_REQUEST["fullname"])<3))
    {
        $validatename = "You must enter name";

    }
    
    if(empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["email"]))
    {
        $validateemail = "You must enter email";
    }


    if(empty($_REQUEST["password"]) || (strlen($_REQUEST["password"])<6))
    {
        $validatepassword = "You must enter a valid password";

    }
    if(empty($_REQUEST["pn"]) || (strlen($_REQUEST["pn"])<9))
    {
        $validatepn = "You must enter a valid passport number";

    }
    if(!isset($_REQUEST["gender"]))
    {
        $validateradio = "Please select at least one radio";
    }

    if(empty($_REQUEST["date"]))
    {
        $validatedate = "You must enter your date of birth correctly";

    }
    
    if(!isset($_REQUEST["language"]) )
        {
        $validatecheckbox = "You must select atlease one valid language";

    }
}

    

?>