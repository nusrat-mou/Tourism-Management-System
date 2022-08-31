<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
    $formdata = array(
    );
    $tempJSONdata[] = $formdata;

    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
    file_put_contents("../view/data.json", $jsondata);  
    setcookie("user", "", time() - 3600);
    header("Location: ../view/login.php"); // Redirecting To Home Page
}
?>

