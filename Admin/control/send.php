<?php
include('../model/db.php');


$error = "";

if (isset($_POST['signup'])) {
    if (empty($_POST['fullname']) || empty($_POST['password']) || empty($_POST['gender']) || empty($_POST['nid']) || empty($_POST['date']) || empty($_POST['email']) || empty($_POST['edu']) || empty($_POST['exp'])) {
        $error = "input given is invalid";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->manager($conobj, "manager", $_POST["fullname"], $_POST['email'], $_POST['password'], $_POST['gender'], $_POST['nid'], $_POST["edu"], $_POST["exp"], $_POST["date"]);
        if ($userQuery == TRUE) {
            echo "Data insertrd";
        } else {
            echo "could not update";
        }
        $connection->CloseCon($conobj);
    }
}
