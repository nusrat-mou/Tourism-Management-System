<?php
include('../model/Guidedb.php');


$error = "";
if (isset($_POST["update"])) {
    if (empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['pn']) || empty($_POST['gender']) || empty($_POST['date'])) {
        $error = "input given is invalid";
        echo $error;
        echo "<br>";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->UpdateUser($conobj, "guide", $_POST['fullname'], $_POST['email'], $_POST['password'], $_POST['pn'], $_POST['gender'], $_POST['date']);

        if ($userQuery == TRUE) {
            echo "update successful";
            echo "<br>";
        } else {
            echo "could not update";
        }
        $connection->CloseCon($conobj);
    }
}
