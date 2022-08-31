<?php include "../model/Admindb.php"; ?>

<?php

$validatetid = "";
$fname = $email = $passportNo = $phoneNo = $dob = $password = $radio1 = $radio2 = $radio3 = $target_file = $status = "";
$st = "";
if (isset($_POST['register'])) {
    if (empty($_POST['fullname']) || empty($_POST['email']) ||  empty($_POST['password']) || empty($_POST['pn']) || empty($_POST['phone']) || empty($_POST['date']) || empty($_POST['gender']) || empty($_FILES['pimage']['name'])) {
        $error  = "Input given is invalid";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $imageLocation = "../IMG/" . $_FILES["pimage"]["name"];
        $check = $connection->CheckTravellerPresence($conobj, "traveller", $_POST["email"]);
        if ($check == 0) {
            $userQuery = $connection->InsertTraveller($conobj, "traveller", $_POST["fullname"], $_POST['email'], $_POST['password'], $_POST['pn'], $_POST['phone'], $_POST['date'], $_POST['gender'], $imageLocation, "enabled");

            if ($userQuery) {
                move_uploaded_file($_FILES["pimage"]["tmp_name"], $imageLocation);
                $st = "Inserted";
            }
        } else {
            $st = "Username with this email already exists";
        }
        $connection->CloseCon($conobj);
    }
}


if (isset($_POST['update'])) {
    if (empty($_POST['fullname']) || empty($_POST['email']) ||  empty($_POST['password']) || empty($_POST['pn']) || empty($_POST['phone']) || empty($_POST['date']) || empty($_POST['gender'])) {
        $error  = "Input given is invalid";
    } else {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $tid = $connection->GetTid($conobj, "traveller", $_POST["email"]);
        if ($tid->num_rows > 0) {
            $row = $tid->fetch_assoc();
            $q = $connection->GetTraveller($conobj, "traveller", $row["TravellerId"]);

            if ($q->num_rows > 0) {

                if (!empty($_FILES["pimage"]["name"])) {
                    $imageLocation = "../IMG/" . $_FILES["pimage"]["name"];
                } else {
                    $imageLocation = $connection->GetImage($conobj, "traveller", $_POST["email"]);
                }

                $userQuery = $connection->UpdateTraveller($conobj, "traveller", $_POST["fullname"], $_POST["email"], $_POST["password"], $_POST["pn"], $_POST["phone"], $_POST["date"], $_POST["gender"], $imageLocation, "enabled");
                if ($userQuery == TRUE) {
                    $st = "update successful";
                } else {
                    $st = "could not update";
                }
                $connection->CloseCon($conobj);
            } else {
                $st = "ID not found";
            }
        } else {
            $st = "ID not found";
        }
    }
}


if (isset($_POST['activate'])) {

    if (!empty($_POST["tid"])) {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $q = $connection->GetTraveller($conobj, "traveller", $_POST["tid"]);

        if ($q->num_rows > 0) {
            $st = $connection->GetStatusTraveller($conobj, "traveller", $_POST["tid"]);
            $row = $st->fetch_assoc();
            if ($row["status"] == "disabled" || $row["status"] == "blocked") {
                $userQuery = $connection->ActivateTraveller($conobj, "traveller", $_POST["tid"]);
                if ($userQuery) {
                    $st = "Your Id has been activated successfully";
                } else {
                    $st = "This id is already activated";
                }
            } else {
                $st = "ID is already activated";
            }
        } else {
            $st = "ID not found";
        }
    } else {
        $validatetid = "Enter a valid Traveller ID";
    }
}

if (isset($_POST["Find"])) {


    if (!empty($_POST["findid"])) {
        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->GetTraveller($conobj, "traveller", $_POST["findid"]);

        if ($userQuery->num_rows > 0) {
            while ($row = $userQuery->fetch_assoc()) {
                $fname = $row["FullName"];
                $email = $row["Email"];

                $password = $row["Password"];
                $passportNo = $row["PassportNumber"];
                $phoneNo = $row["PhoneNumber"];
                $dob = $row["DOB"];
                $picture = $row["ProfilePicture"];
                $status = $row["status"];

                $target_file = "$picture";
                if ($row["Gender"] == "female") {
                    $radio1 = "checked";
                } else if ($row["Gender"] == "male") {
                    $radio2 = "checked";
                } else {
                    $radio3 = "checked";
                }
            }

            //echo "<img src=".$target_file." width=200px height=200px> ";
        } else {
            $st = "ID not found";
        }
        $connection->CloseCon($conobj);
    } else {
        $st = "Enter a valid Traveller ID";
    }
}



if (isset($_POST['disableFull'])) {
    if (!empty($_POST["tid"])) {

        $connection = new db();
        $conobj = $connection->OpenCon();
        $q = $connection->GetTraveller($conobj, "traveller", $_POST["tid"]);

        if ($q->num_rows > 0) {
            $userQuery = $connection->DeleteTraveller($conobj, "traveller", $_POST["tid"]);
            if ($userQuery) {
                $st = "ID Deleted Succesfully";
            } else {
                $st = "ID Deletion Failed";
            }
            $connection->CloseCon($conobj);
        } else {
            $st = "ID not found";
        }
    } else {
        $validatetid = "Enter a valid Traveller ID";
    }
}

if (isset($_POST["disableTemp"])) {
    if (!empty($_POST["tid"])) {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $q = $connection->GetTraveller($conobj, "traveller", $_POST["tid"]);

        if ($q->num_rows > 0) {
            $st1 = $connection->GetStatusTraveller($conobj, "traveller", $_POST["tid"]);
            $row = $st1->fetch_assoc();

            if ($row["status"] == "enabled" || $row["status"] == "blocked") {
                $userQuery = $connection->DisableTraveller($conobj, "traveller", $_POST["tid"]);

                if ($userQuery) {
                    $st = "ID has been disabled";
                } else {
                    $st = "ID disabled Successfully";
                }
                $connection->CloseCon($conobj);
            } else {
                $st = "ID is already disabled";
            }
        } else {
            $st = "ID not found";
        }
    } else {
        $validatetid = "Enter a valid Traveller ID";
    }
}


if (isset($_POST['block'])) {
    if (!empty($_POST["tid"])) {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $q = $connection->GetTraveller($conobj, "traveller", $_POST["tid"]);

        if ($q->num_rows > 0) {
            $st = $connection->GetStatusTraveller($conobj, "traveller", $_POST["tid"]);
            $row = $st->fetch_assoc();

            if ($row["status"] == "enabled" || $row["status"] == "disabled") {
                $userQuery = $connection->BlockTraveller($conobj, "traveller", $_POST["tid"]);
                if ($userQuery) {
                    $st = "ID Blocked Successfully";
                } else {
                    $st = "ID Block Failed";
                }
                $connection->CloseCon($conobj);
            } else {
                $st = "ID is already blocked";
            }
        } else {
            $st = "ID not found";
        }
    } else {
        $validatetid = "Enter a valid Traveller ID";
    }
}

?>