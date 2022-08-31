<?php include("myaction.php"); ?>
<?php include('../model/Travellerdb.php'); ?>

<?php
$pkgstatus = "";
session_start();

if (isset($_POST['bookpackage'])) {
    if (empty($validateBookPackage)) {
        $connection = new db();
        $conobj = $connection->OpenCon();

        $q = $connection->GetTraveller($conobj, "traveller", $_SESSION["email"]);
        $q1 =  $connection->GetPackage($conobj, "package", $_POST["bookid"]);
        if ($q1->num_rows > 0) {
            $row = $q->fetch_assoc();
            $tid = $row["TravellerId"];
            $userQuery = $connection->BookPackage($conobj, "travpack", $tid, $_POST["bookid"]);
            if ($userQuery) {
                $pkgstatus = "Package Booked Succesfully";
            } else {
                $pkgstatus = "Package Booking Failed";
            }
        } else {
            $pkgstatus = "Package not found";
        }
    }
}

?>

<?php

if (isset($_POST['cancelbooking'])) {
    if (empty($validateCancelPackage)) {
        $connection = new db();
        $conobj = $connection->OpenCon();

        $q =  $connection->GetPackage($conobj, "package", $_POST["cancelid"]);
        if ($q->num_rows > 0) {
            $userQuery = $connection->CancelPackage($conobj, "travpack", $_POST["cancelid"]);
            if ($userQuery) {
                $pkgstatus = "Package canceled";
            } else {
                $pkgstatus = "Package cancel failed";
            }
        } else {
            $pkgstatus = "Package not found";
        }
    }
}

?>

<?php
$pkgid = $pname = $pdesc = $pcat = $dob = $pprice = $picture = "";
$flag1 = 0;
if (isset($_POST['searchpackageid'])) {
    if (empty($validatepid1)) {
        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->SearchPackage($conobj, "package", $_POST["pid"]);
        if ($userQuery->num_rows > 0) {

            while ($row = $userQuery->fetch_assoc()) {
                $pkgid = $row["pid"];
                $pname = $row["pname"];
                $pdesc = $row["pdesc"];
                $pprice = $row["pcost"];

                $formdata = array(
                    'Package ID' => $pkgid,
                    'Package Name' =>  $pname,
                    'Package Description' =>  $pdesc,
                    'Package Price' => $pprice
                );

                $tempJSONdata[] = $formdata;

                $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

                if (file_put_contents("../control/packagedata.json", $jsondata)) {
                    $GLOBALS["flag1"] = 1;
                } else {
                    echo "no data saved";
                }
            }
        } else {
            echo "0 results";
        }
    }
}

if (isset($_POST['showallpackage'])) {
    $connection = new db();
    $conobj = $connection->OpenCon();


    $userQuery = $connection->ShowAllPackage($conobj, "package");
    if ($userQuery->num_rows > 0) {

        while ($row = $userQuery->fetch_assoc()) {
            $pkgid = $row["pid"];
            $pname = $row["pname"];
            $pdesc = $row["pdesc"];
            $pprice = $row["cost"];
            $sdate = $row["sdate"];
            $edate = $row["edate"];

            $formdata = array(
                'Package ID' => $pkgid,
                'Package Name' =>  $pname,
                'Package Description' =>  $pdesc,
                'Package Price' => $pprice,
                'Starting Date' => $sdate,
                'Ending Date' => $edate
            );

            $tempJSONdata[] = $formdata;

            $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

            if (file_put_contents("../control/packagedata.json", $jsondata)) {
                $GLOBALS["flag1"] = 1;
            } else {
                echo "no data saved";
            }
        }
    } else {
        echo "0 results";
    }
}

?>