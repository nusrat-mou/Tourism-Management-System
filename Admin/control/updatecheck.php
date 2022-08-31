<?php
include('../model/db.php');


$error = "";

if (isset($_POST['signup'])) {
    if (empty($_POST['fullname'])) {
        $error = "input given is invalid";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();


        $userQuery = $connection->UpdateUser($conobj, "manager", $_POST['fullname'], $_POST['email'], $_POST['pass'], $_POST['gender'], $_POST['nid'], $_POST['edu'], $_POST['exp'], $_POST["date"]);

        if ($userQuery == TRUE) {
            echo "update successful";
        } else {
            echo "could not update";
        }
        $connection->CloseCon($conobj);
    }
}
