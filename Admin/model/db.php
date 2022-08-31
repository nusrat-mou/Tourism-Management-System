<?php
class db
{

    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "project";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

        return $conn;
    }
    function CheckUser($conn, $table, $username, $password)
    {
        $result = $conn->query("SELECT * FROM " . $table . " WHERE username='" . $username . "' AND password='" . $password . "'");
        return $result;
    }


    function InsertGuide($conn, $table, $fullname, $email, $pass, $pn, $gender, $date, $language, $status)
    {
        $result = $conn->query("INSERT INTO $table VALUES('','$fullname','$email','$pass','$pn','$gender','$date','$language','$status')");
        return $result;
    }


    function ShowAll($conn, $table)
    {
        $result = $conn->query("SELECT * FROM  $table");
        return $result;
    }

    function manager($conn, $table, $fullname, $password, $gender, $pn, $date, $email, $edu, $exp)
    {
        $result = $conn->query("INSERT INTO $table VALUES('','$fullname','$password','$gender','$pn','$date','$email','$edu','$exp')");
        return $result;
    }

    function UpdateUser($conn, $table, $fullname, $email, $password, $gender, $pn, $date, $edu, $exp)
    {
        $sql = "UPDATE $table SET FullName='$fullname', Password='$password',gender='$gender',NID='$pn',DOB='$date',Email='$email',Education='$edu',Experience='$exp' WHERE Email='$email'";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }

    function ViewTraveller($conn, $table, $travellerid)
    {
        $result = $conn->query("SELECT * FROM $table WHERE TravellerId='$travellerid'");
        return $result;
    }


    function CloseCon($conn)
    {
        $conn->close();
    }
}
