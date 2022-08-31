<?php
include('../model/Travellerdb.php');
session_start();

$error = "";
$st = "";
// store session data
if (isset($_POST['login'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->CheckUser($conobj, "traveller", $email, $password);
        $status = $connection->GetStatus($conobj, "traveller", $email, $password);
        $row = $status->fetch_assoc();
        if ($userQuery->num_rows > 0 && $row["status"] == "enabled") {
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
        } else if ($userQuery->num_rows > 0 && $row["status"] == "disabled") {
            $st = "Your account is disabled currently";
        } else {
            $st = "Email or Password is invalid";
        }
        $connection->CloseCon($conobj);
    }
}


?>

<?php

if (isset($_POST['register'])) {
    if (empty($_POST['fullname']) || empty($_POST['email']) ||  empty($_POST['password']) || empty($_POST['pn']) || empty($_POST['phone']) || empty($_POST['date']) || empty($_POST['gender']) || empty($_FILES['pimage']['name'])) {
        echo "Input given is invalid";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $imageLocation = "../IMG/" . $_FILES["pimage"]["name"];
        $check = $connection->CheckPresence($conobj, "traveller", $_POST["email"]);
        if ($check == 0) {
            $userQuery = $connection->InsertUser($conobj, "traveller", $_POST["fullname"], $_POST['email'], $_POST['password'], $_POST['pn'], $_POST['phone'], $_POST['date'], $_POST['gender'], $imageLocation, "enabled");

            if ($userQuery) {
                move_uploaded_file($_FILES["pimage"]["tmp_name"], $imageLocation);
                $st =  "Sign Up successfull";
            }
        } else {
            $st =  "Username with this email already exists";
        }
        $connection->CloseCon($conobj);
    }
}

?>

<?php

if (isset($_POST['update'])) {
    if (!empty($validateage) || !empty($validatename) || !empty($validateradio) || !empty($validatepass) || !empty($validatedate) || !empty($validatepassword) || !empty($validatephone)) {
        $st = "input given is invalid";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        if (!empty($_FILES["updateImage"]["name"])) {
            $imageLocation = "../IMG/" . $_FILES["updateImage"]["name"];
        } else {
            $imageLocation = $connection->GetImage($conobj, "traveller", $_SESSION["email"]);
        }

        $userQuery = $connection->UpdateUser($conobj, "traveller", $_POST["fullname"], $_SESSION["email"], $_POST["password"], $_POST["pn"], $_POST["phone"], $_POST["date"], $_POST["gender"], $imageLocation);
        if ($userQuery == TRUE) {
            $st =  "update successful";
            $_SESSION["password"] = $_POST["password"];
        } else {
            $st = "could not update";
        }
        $connection->CloseCon($conobj);
    }
}

?>

<?php
$Idstatus = "";
if (isset($_POST['disableFull'])) {
    $connection = new db();
    $conobj = $connection->OpenCon();

    $userQuery = $connection->DeleteUser($conobj, "traveller", $_SESSION["email"]);
    if ($userQuery) {
        header("location: ../control/logout.php");
    } else {
        $Idstatus = "ID deletion Failed";
    }
}
if (isset($_POST["disableTemp"])) {
    $connection = new db();
    $conobj = $connection->OpenCon();

    $userQuery = $connection->DisableUser($conobj, "traveller", $_SESSION["email"]);

    if ($userQuery) {
        header("location: ../control/logout.php");
    } else {
        $Idstatus = "ID disable Failed";
    }
}

?>

<?php

if (isset($_POST['activate'])) {
    if (empty($validateActivateId) && empty($validatepassword)) {
        $connection = new db();
        $conobj = $connection->OpenCon();

        $st1 = $connection->GetStatus($conobj, "traveller", $_POST["email"], $_POST["password"]);
        if ($st1->num_rows > 0) {
            $row = $st1->fetch_assoc();
            if ($row["status"] == "disabled") {
                $userQuery = $connection->ActivateUser($conobj, "traveller", $_POST["email"]);
                if ($userQuery) {
                    $st = "ID activated succesfully";
                } else {
                    $st = "ID activatation Failed";
                }
            } else if ($row["status"] == "blocked") {
                $st = "Please contact Admin";
            } else {
                $st = "This id is already activated";
            }
        } else {
            $st = "ID not found";
        }
    }
}


?>