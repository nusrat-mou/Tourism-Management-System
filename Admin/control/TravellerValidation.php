<?php
$validatename = "";
$validateemail = "";
$validateradio = "";
$validatepass = "";
$validatedate = "";
$validatepassword = "";
$validatephone = "";
$validateage = "";
$validateimage = "";
$validatestatus = "";
$validatetid = "";
$validateDeleteId1 = "";
$validateDeleteId2 = "";
$validateDeleteId3 = "";
$validatefindid = "";

if (isset($_POST["register"])) {

    if (empty($_REQUEST["fullname"]) || (strlen($_REQUEST["fullname"]) < 3)) {
        $validatename = "You must enter name";
    }

    if (empty($_REQUEST["password"]) || (strlen($_REQUEST["password"]) < 6)) {
        $validatepassword = "You must enter a valid password";
    }

    if (empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["email"])) {
        $validateemail = "You must enter email";
    }

    if (!isset($_REQUEST["gender"])) {
        $validateradio = "Please select gender";
    }

    if (empty($_REQUEST["date"])) {
        $validatedate = "You must enter your date of birth correctly";
    } else {
        $age = floor((time() - strtotime($_POST["date"])));
        if ($age < 536112000)  //536112000 = 17 years
        {
            $validatedate = "You must be aged atleast 17";
        }
    }

    if (empty($_REQUEST["pn"]) || (strlen($_REQUEST["pn"]) < 9)) {
        $validatepass = "You must enter a valid passport number";
    }

    if (empty($_REQUEST["phone"]) || (strlen($_REQUEST["phone"]) < 11)) {
        $validatephone = "You must enter a valid phone number";
    }

    if (!empty($_FILES["pimage"])) {
        $target_file = "../IMG/" . $_FILES["pimage"]["name"];

        if (!move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_file)) {
            $validateimage = "sorry, there was an error uploading file";
        }
    } else {
        $validateimage = "You must select an image";
    }

    if (empty($_POST["status"]) || $_POST["status"] != "blocked" || $_POST["status"] != "enabled" || $_POST["status"] != "disabled") {
        $validatestatus = "Enter valid status";
    }
}


if (isset($_POST["update"])) {

    if (empty($_REQUEST["fullname"]) || (strlen($_REQUEST["fullname"]) < 3)) {
        $validatename = "You must enter name";
    }

    if (empty($_REQUEST["password"]) || (strlen($_REQUEST["password"]) < 6)) {
        $validatepassword = "You must enter a valid password";
    }

    if (empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["email"])) {
        $validateemail = "You must enter email";
    }

    if (!isset($_REQUEST["gender"])) {
        $validateradio = "Please select gender";
    }

    if (empty($_REQUEST["date"])) {
        $validatedate = "You must enter your date of birth correctly";
    } else {
        $age = floor((time() - strtotime($_POST["date"])));
        if ($age < 536112000)  //536112000 = 17 years
        {
            $validatedate = "You must be aged atleast 17";
        }
    }

    if (empty($_REQUEST["pn"]) || (strlen($_REQUEST["pn"]) < 9)) {
        $validatepass = "You must enter a valid passport number";
    }

    if (empty($_REQUEST["phone"]) || (strlen($_REQUEST["phone"]) < 11)) {
        $validatephone = "You must enter a valid phone number";
    }


    $target_file = "../IMG/" . $_FILES["pimage"]["name"];

    if (empty($target_file)) {
        $validateimage = "sorry, there was an error uploading file";
    }

    if (empty($_POST["status"]) || $_POST["status"] != "blocked" || $_POST["status"] != "enabled" || $_POST["status"] != "disabled") {
        $validatestatus = "Enter valid status";
    }
}

if (isset($_POST["activate"])) {
    if (empty($_REQUEST["fullname"]) || (strlen($_REQUEST["fullname"]) < 3)) {
        $validatename = "You must enter name";
    }

    if (empty($_REQUEST["password"]) || (strlen($_REQUEST["password"]) < 6)) {
        $validatepassword = "You must enter a valid password";
    }

    if (empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["email"])) {
        $validateemail = "You must enter email";
    }

    if (!isset($_REQUEST["gender"])) {
        $validateradio = "Please select gender";
    }

    if (empty($_REQUEST["date"])) {
        $validatedate = "You must enter your date of birth correctly";
    } else {
        $age = floor((time() - strtotime($_POST["date"])));
        if ($age < 536112000)  //536112000 = 17 years
        {
            $validatedate = "You must be aged atleast 17";
        }
    }

    if (empty($_REQUEST["pn"]) || (strlen($_REQUEST["pn"]) < 9)) {
        $validatepass = "You must enter a valid passport number";
    }

    if (empty($_REQUEST["phone"]) || (strlen($_REQUEST["phone"]) < 11)) {
        $validatephone = "You must enter a valid phone number";
    }

    if (!empty($_FILES["pimage"])) {
        $target_file = "../IMG/" . $_FILES["pimage"]["name"];

        if (!move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_file)) {
            $validateimage = "sorry, there was an error uploading file";
        }
    } else {
        $validateimage = "You must select an image";
    }

    if (empty($_POST["status"]) || $_POST["status"] != "blocked" || $_POST["status"] != "enabled" || $_POST["status"] != "disabled") {
        $validatestatus = "Enter valid status";
    }
}
