<?php include('myaction.php'); ?>
<?php include('../model/Travellerdb.php'); ?>
<?php
session_start();
$guidest = "";
if (isset($_POST['bookGuide'])) {
    if (empty($validateguideid)) {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $q1 =  $connection->GetGuide($conobj, "guide", $_POST["guidebookid"]);
        if ($q1->num_rows > 0) {
            $q = $connection->GetTraveller($conobj, "traveller", $_SESSION["email"]);
            $row = $q->fetch_assoc();
            $tid = $row["TravellerId"];
            $status = "pending";
            $userQuery = $connection->BookGuide($conobj, "travguide", $tid, $_POST["guidebookid"], $status);

            if ($userQuery) {
                $guidest = "Booking successfull";
            } else {
                $guidest = "Booking Failed";
            }
        } else {
            $guidest = "Guide not found";
        }
    }
}
?>

<?php
$gid = $gname = $gemail = $gnid = $gender = $dob = $lan = "";
$flag1 = 0;
if (isset($_POST['searchguideid'])) {
    if (empty($validateguideid1)) {
        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->SearchGuide($conobj, "guide", $_POST["guideid"]);
        if ($userQuery->num_rows > 0) {
            // output data of each row
            while ($row = $userQuery->fetch_assoc()) {
                if ($row["status"] == "disabled") {
                    continue;
                }
                $gid = $row["GuideId"];
                $gname = $row["FullName"];
                $gemail = $row["Email"];
                $gnid = $row["NID"];
                $gender = $row["gender"];
                $dob = $row["DOB"];
                $lan = $row["language"];

                $formdata = array(
                    'Guide ID' => $gid,
                    'Name' =>  $gname,
                    'Email' =>  $gemail,
                    'NID' => $gnid,
                    'Gender' => $gender,
                    'DOB' => $dob,
                    'Language' => $lan
                );

                $tempJSONdata[] = $formdata;

                $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

                if (file_put_contents("../control/guide.json", $jsondata)) {
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

if (isset($_POST['showallguide'])) {
    $connection = new db();
    $conobj = $connection->OpenCon();

    $userQuery = $connection->ShowAllGuide($conobj, "guide");
    if ($userQuery->num_rows > 0) {
        // output data of each row
        while ($row = $userQuery->fetch_assoc()) {
            if ($row["status"] == "disabled") {
                continue;
            }
            $gid = $row["GuideId"];
            $gname = $row["FullName"];
            $gemail = $row["Email"];
            $gnid = $row["NID"];
            $gender = $row["gender"];
            $dob = $row["DOB"];
            $lan = $row["language"];

            $formdata = array(
                'Guide ID' => $gid,
                'Name' =>  $gname,
                'Email' =>  $gemail,
                'NID' => $gnid,
                'Gender' => $gender,
                'DOB' => $dob,
                'Language' => $lan
            );

            //  $existingdata = file_get_contents('../control/guide.json');
            //  $tempJSONdata = json_decode($existingdata);
            $tempJSONdata[] = $formdata;

            $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

            if (file_put_contents("../control/guide.json", $jsondata)) {
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

<?php

if (isset($_POST['cancelguide'])) {
    if (empty($validateCancelguide)) {
        $connection = new db();
        $conobj = $connection->OpenCon();
        $q1 =  $connection->GetGuide($conobj, "travguide", $_POST["cancelguideid"]);
        if ($q1->num_rows > 0) {
            $userQuery = $connection->CancelGuide($conobj, "travguide", $_POST["cancelguideid"]);

            if ($userQuery) {
                $guidest = "Booking Cancelled";
            } else {
                $guidest = "Booking Cancellation Failed";
            }
        } else {
            $guidest = "Guide not found";
        }
    }
}

?>