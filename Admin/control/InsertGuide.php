<?php
include('../model/Guidedb.php');


$error = "";

if (isset($_POST['Register'])) {
    if (empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['pn']) || empty($_POST['gender']) || empty($_POST['date']) || empty($_POST['language'])) {
        $error = "input given is invalid";
        echo $error;
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->InsertGuide($conobj, "guide", $_POST['fullname'], $_POST['email'], $_POST['password'], $_POST['pn'], $_POST['gender'], $_POST['date'], $_POST['language'], "enabled");
        if ($userQuery == TRUE) {
            echo "data updated";
        } else {
            echo "could not update";
        }
        $connection->CloseCon($conobj);
    }
}
