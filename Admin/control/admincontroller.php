<?php include "../model/Admindb.php"; ?>

<?php

$fname = $email = $dob = $password = $radio1 = $radio2 = $radio3 = $address = "";
$validateFindid = "";
$validateaid = "";
$st = "";
if (isset($_POST['activate'])) {

    if (!empty($_POST["aid"])) {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $q = $connection->GetAdmin($conobj, "admin", $_POST["aid"]);
        if ($q->num_rows > 0) {
            $st = $connection->GetStatusAdmin($conobj, "admin", $_POST["aid"]);
            $row = $st->fetch_assoc();
            if ($row["status"] == "disabled" || $row["status"] == "blocked") {
                $userQuery = $connection->ActivateAdmin($conobj, "admin", $_POST["aid"]);
                if ($userQuery) {
                    $st = "Your Id has been activated successfully";
                }
            } else {
                $st = "ID is already activated";
            }
        } else {
            $st = "ID not found";
        }
    } else {
        $validateaid = "Enter a valid ID";
    }
}

if (isset($_POST["Find"])) {

    if (!empty($_POST["findid"])) {
        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->GetAdmin($conobj, "admin", $_POST["findid"]);

        if ($userQuery->num_rows > 0) {
            while ($row = $userQuery->fetch_assoc()) {
                $fname = $row["FullName"];
                $email = $row["Email"];
                $password = $row["Password"];
                $dob = $row["DOB"];
                $address = $row["Address"];
                if ($row["Gender"] == "Female") {
                    $radio2 = "checked";
                } else if ($row["Gender"] == "Male") {
                    $radio1 = "checked";
                } else {
                    $radio3 = "checked";
                }
            }
        } else {
            $st = "ID not found";
        }
        $connection->CloseCon($conobj);
    } else {
        $validateFindid = "Enter a valid Admin ID";
    }
}


if (isset($_POST['disableFull'])) {
    if (!empty($_POST["aid"])) {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $q = $connection->GetAdmin($conobj, "admin", $_POST["aid"]);
        if ($q->num_rows > 0) {
            $userQuery = $connection->DeleteAdmin($conobj, "admin", $_POST["aid"]);
            if ($userQuery) {
                $st = "ID Delete successfully";
            } else {
                $st = "ID Deletion Failed";
            }
            $connection->CloseCon($conobj);
        } else {
            $st = "ID not found";
        }
    } else {
        $validateaid = "Enter a valid ID";
    }
}

if (isset($_POST["disableTemp"])) {
    if (!empty($_POST["aid"])) {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $q = $connection->GetAdmin($conobj, "admin", $_POST["aid"]);
        if ($q->num_rows > 0) {
            $st = $connection->GetStatusAdmin($conobj, "admin", $_POST["aid"]);
            $row = $st->fetch_assoc();
            if ($row["status"] == "enabled" || $row["status"] == "blocked") {
                $userQuery = $connection->DisableAdmin($conobj, "admin", $_POST["aid"]);

                if ($userQuery) {
                    $st = "ID Deactivated successfully";
                } else {
                    $st = "ID Deactivation Failed";
                }
            } else {
                $st = "ID is already disabled";
            }
            $connection->CloseCon($conobj);
        } else {
            $st = "ID not found";
        }
    } else {
        $validateaid = "Enter a valid ID";
    }
}


if (isset($_POST['block'])) {
    if (!empty($_POST["aid"])) {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $q = $connection->GetAdmin($conobj, "admin", $_POST["aid"]);
        if ($q->num_rows > 0) {
            $st = $connection->GetStatusAdmin($conobj, "admin", $_POST["aid"]);
            $row = $st->fetch_assoc();
            if ($row["status"] == "enabled" || $row["status"] == "disabled") {
                $userQuery = $connection->BlockAdmin($conobj, "admin", $_POST["aid"]);
                if ($userQuery) {
                    $st = "ID has been blocked successfully";
                } else {
                    $st = "ID could not be blocked";
                }
            } else {
                $st = "ID is already blocked";
            }
            $connection->CloseCon($conobj);
        } else {
            $st = "ID not found";
        }
    } else {
        $validateaid = "Enter a valid ID";
    }
}

if (isset($_POST['register'])) {

    if (empty($_POST['FullName']) || empty($_POST['Email']) ||  empty($_POST['Password']) || empty($_POST['gender']) || empty($_POST['Address']) || empty($_POST['DOB']) || empty($_POST["wexp"])) {
        $error  = "Input given is invalid";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $check = $connection->CheckAdminPresence($conobj, "admin", $_POST["Email"]);
        if ($check == 0) {
            $ee = "";
            if ($_POST['wexp'] == "opt1") {
                $ee = "Less than 1 Year";
            } else if ($_POST['wexp'] == "opt2") {
                $ee = "1 Year";
            } else if ($_POST['wexp'] == "opt3") {
                $ee = "2 Years or More";
            }
            $userQuery = $connection->InsertAdmin($conobj, "admin", $_POST["FullName"], $_POST['Email'], $_POST['Password'], $_POST['DOB'], $_POST['gender'], $_POST['Address'], $ee, "enabled");

            if ($userQuery) {
                $st =  "Inserted";
            }
        } else {
            $st = "Username with this email already exists";
        }
        $connection->CloseCon($conobj);
    }
}

if (isset($_POST['update'])) {

    if (empty($_POST['FullName']) || empty($_POST['Email']) ||  empty($_POST['Password']) || empty($_POST['gender']) || empty($_POST['Address']) || empty($_POST['DOB'])) {
        $error  = "Input given is invalid";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $q1 = $connection->Getaid($conobj, "admin", $_POST["Email"]);
        if ($q1->num_rows > 0) {
            $ee = "";
            if ($_POST['wexp'] == "opt1") {
                $ee = "Less than 1 Year";
            } else if ($_POST['wexp'] == "opt2") {
                $ee = "1 Year";
            } else if ($_POST['wexp'] == "opt3") {
                $ee = "2 Years or More";
            }
            $userQuery = $connection->UpdateAdmin($conobj, "admin", $_POST["FullName"], $_POST['Email'], $_POST['Password'], $_POST['DOB'], $_POST['gender'], $_POST['Address'], $ee);

            if ($userQuery) {
                $st = "Update Successfull";
            } else {
                $st = "Username with this email already exists";
            }
            $connection->CloseCon($conobj);
        } else {
            $st = "ID not found";
        }
    }
}

session_start();

// store session data
if (isset($_POST['login'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $st = "Username or Password is invalid";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->CheckUser($conobj, "admin", $email, $password);
        if ($userQuery) {
            if ($userQuery->num_rows > 0) {
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $password;
            } else {
                $st = "Email or Password is invalid";
            }
        }
        $connection->CloseCon($conobj);
    }
}


?>