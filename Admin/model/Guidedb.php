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
        $result = $conn->query("SELECT * FROM " . $table . " WHERE email='" . $username . "' AND password='" . $password . "'");
        return $result;
    }

    function ShowAll($conn, $table)
    {
        $result = $conn->query("SELECT * FROM  $table");
        return $result;
    }

    function GetGuide($conn, $table, $gid)
    {
        $result = $conn->query("SELECT * FROM  $table WHERE GuideId='$gid'");
        return $result;
    }


    function UpdateUser($conn, $table, $fullname, $email, $password, $pn, $gender, $date)
    {
        $sql = "UPDATE $table SET  FullName='$fullname', Email='$email', Password='$password', NID='$pn',gender='$gender',DOB='$date' WHERE email='$email'";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }
    function SearchPackage($conn, $table, $gid)
    {
        $result = $conn->query("SELECT * FROM $table WHERE GuideId='$gid'");
        return $result;
    }

    function ShowAllPackage($conn, $table)
    {
        $result = $conn->query("SELECT * FROM  $table");
        return $result;
    }
    function ConfirmUser($conn, $table, $tgid)
    {
        $user = "confirmed";
        $sql =  "UPDATE $table SET status='$user' WHERE tgid=$tgid";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }
    function CancelUser($conn, $table, $tgid)
    {
        $user = "cancelled";
        $sql =  "UPDATE $table SET status='$user' WHERE tgid=$tgid";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }
    function DeleteUser($conn, $table, $email)
    {
        $user = "deleted";
        $sql = "DELETE FROM $table  WHERE email='$email'";


        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }
    function DeleteGuideUser($conn, $table, $email)
    {
        $user = "deleted";
        $sql = "DELETE FROM $table  WHERE email='$email'";


        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }



    function InsertGuide($conn, $table, $fullname, $email, $password, $pn, $gender, $date, $language, $status)
    {
        $result = $conn->query("INSERT INTO $table VALUES('','$fullname','$email','$password','$pn','$gender','$date','$language','$status')");
        return $result;
    }
    function GetUserByEmail($conn, $table, $email)
    {

        $result = $conn->query("SELECT * FROM $table WHERE email='$email'");
        return $result;
    }




    function CloseCon($conn)
    {
        $conn->close();
    }
}
