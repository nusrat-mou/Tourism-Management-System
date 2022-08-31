<?php
include('../model/db.php');
session_start();
$error = "";
if (isset($_POST["delete"])) {
    if (empty($_SESSION['username'])) {
        $error = "input given is invalid";
        echo $error;
        echo "<br>";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->DeleteUser($conobj, "guide", $_SESSION['username']);

        if ($userQuery == TRUE) {
            echo "User deleted successfully";
            echo "<br>";
        } else {
            echo "Could not delete user please try again";
        }
        $connection->CloseCon($conobj);
    }
}
