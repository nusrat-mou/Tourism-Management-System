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
$validatepid1 = "";
$validateBookPackage = "";
$validateCancelPackage = "";
$validateActivateId = "";
$validateguideid1 = "";
$validateguideid2 = "";
$validateCancelguide = "";

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
        $validateradio = "Please select at least one radio";
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

    if (!move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_file)) {
        $validateimage = "sorry, there was an error uploading file";
    }
}

if (isset($_POST["login"])) {
    if (empty($_REQUEST["password"]) || (strlen($_REQUEST["password"]) < 6)) {
        $validatepassword = "You must enter a valid password";
    }

    if (empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["email"])) {
        $validateemail = "You must enter email";
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
        $validateradio = "Please select at least one radio";
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

    $target_file = "../IMG/" . $_FILES["updateImage"]["name"];

    $target_file = "../IMG/" . $_FILES["updateImage"]["name"];

    if (!move_uploaded_file($_FILES["updateImage"]["tmp_name"], $target_file)) {
        $validateimage = "sorry, there was an error uploading file";
    }
}

if (isset($_POST["searchpackageid"])) {
    if (empty($_POST["pid"])) {
        $validatepid1 = "Invalid package id";
    }
}

if (isset($_POST["bookpackage"])) {
    if (empty($_POST["bookid"])) {
        $validateBookPackage = "Enter Package Id correctly";
    }
}

if (isset($_POST["cancelbooking"])) {
    if (empty($_POST["cancelid"])) {
        $validateCancelPackage = "Enter Package Id correctly";
    }
}

if (isset($_POST["activate"])) {
    if (empty($_POST["email"])) {
        $validateActivateId = "Enter your id correctly";
    }

    if (empty($_REQUEST["password"]) || (strlen($_REQUEST["password"]) < 6)) {
        $validatepassword = "You must enter a valid password";
    }
}


if (isset($_POST["searchguideid"])) {
    if (empty($_POST["guideid"])) {
        $validateguideid1 = "Enter Guide id correctly";
    }
}

if (isset($_POST["bookGuide"])) {
    if (empty($_POST["guidebookid"])) {
        $validateguideid2 = "Enter Guide id correctly";
    }
}

if (isset($_POST["cancelguide"])) {
    if (empty($_POST["cancelguideid"])) {
        $validateCancelguide = "Enter Package Id correctly";
    }
}
