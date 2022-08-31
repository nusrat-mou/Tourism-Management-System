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
        $result = $conn->query("SELECT * FROM " . $table . " WHERE Email='" . $username . "' AND Password='" . $password . "'");
        return $result;
    }


    function ShowAll($conn, $table)
    {
        $result = $conn->query("SELECT * FROM  $table");
        return $result;
    }

    function UpdateUser($conn, $table, $username, $firstname, $email, $gender, $dob)
    {
        $sql = "UPDATE $table SET firstname='$firstname', email='$email', gender='$gender',dob='$dob' WHERE username='$username'";

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

    function ShowAllUser($conn, $table)
    {
        $result = $conn->query("SELECT * FROM  $table");
        return $result;
    }

    function GetTraveller($conn, $table, $travellerid)
    {
        $sql = "SELECT * FROM $table WHERE TravellerId='$travellerid'";
        $result = $conn->query($sql);
        return $result;
    }

    function GetAdmin($conn, $table, $adminid)
    {
        $sql = "SELECT * FROM $table WHERE AdminId='$adminid'";
        $result = $conn->query($sql);
        return $result;
    }


    function GetTid($conn, $table, $email)
    {
        $sql = "SELECT TravellerId FROM $table WHERE Email='$email'";
        $result = $conn->query($sql);
        return $result;
    }

    function Getaid($conn, $table, $email)
    {
        $sql = "SELECT AdminId FROM $table WHERE Email='$email'";
        $result = $conn->query($sql);
        return $result;
    }

    function DisableTraveller($conn, $table, $tid)
    {
        $st = "disabled";
        $sql = "UPDATE $table SET status='$st' WHERE TravellerId=$tid";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }

    function DisableAdmin($conn, $table, $aid)
    {
        $st = "disabled";
        $sql = "UPDATE $table SET status='$st' WHERE AdminId=$aid";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }

    function DeleteTraveller($conn, $table, $tid)
    {
        $res = $conn->query("DELETE FROM $table WHERE TravellerId='$tid'");
        return $res;
    }

    function DeleteAdmin($conn, $table, $aid)
    {
        $res = $conn->query("DELETE FROM $table WHERE AdminId='$aid'");
        return $res;
    }


    function GetImage($conn, $table, $Email)
    {
        $sql = "SELECT ProfilePicture FROM traveller WHERE Email='$Email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        return $row["ProfilePicture"];
    }

    function UpdateTraveller($conn, $table, $fname, $email, $password, $passportNo, $phoneNo, $dob, $gender, $picture, $status)
    {
        $sql = "UPDATE $table SET FullName='$fname', Email='$email',Password='$password',PassportNumber='$passportNo',PhoneNumber='$phoneNo',DOB='$dob',Gender='$gender',ProfilePicture='$picture',status='$status' WHERE Email='$email'";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }

    function CheckTravellerPresence($conn, $table, $email)
    {
        $result = $conn->query("SELECT TravellerId FROM traveller WHERE Email='$email'");
        if ($result->num_rows > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function InsertTraveller($conn, $table, $fname, $email, $password, $passportNo, $phoneNo, $DOB, $gender, $picture, $status)
    {
        $sql = "INSERT INTO $table(Fullname,Email,Password,PassportNumber,PhoneNumber,DOB,Gender,ProfilePicture,status) VALUES (
        '$fname', 
        '$email' ,
        '$password',
        '$passportNo',
        '$phoneNo',
        '$DOB',
        '$gender',
        '$picture',
        '$status'
         )";
        $res = $conn->query($sql); //execute query
        return $res;
    }

    function GetStatusTraveller($conn, $table, $tid)
    {
        $result = $conn->query("SELECT * FROM  $table WHERE TravellerId='$tid'");
        return $result;
    }

    function GetStatusAdmin($conn, $table, $aid)
    {
        $result = $conn->query("SELECT * FROM  $table WHERE AdminId='$aid'");
        return $result;
    }

    function ActivateTraveller($conn, $table, $tid)
    {
        $st = "enabled";
        $sql = "UPDATE $table SET status='$st' WHERE TravellerId='$tid'";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }

    function ActivateAdmin($conn, $table, $aid)
    {
        $st = "enabled";
        $sql = "UPDATE $table SET status='$st' WHERE AdminId='$aid'";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }

    function BlockTraveller($conn, $table, $tid)
    {
        $st = "blocked";
        $sql = "UPDATE $table SET status='$st' WHERE TravellerId='$tid'";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }

    function BlockAdmin($conn, $table, $aid)
    {
        $st = "blocked";
        $sql = "UPDATE $table SET status='$st' WHERE AdminId='$aid'";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }

    function ViewAdmin($conn, $table, $adminid)
    {
        $result = $conn->query("SELECT * FROM $table WHERE AdminId='$adminid'");
        return $result;
    }

    function CheckAdminPresence($conn, $table, $email)
    {
        $result = $conn->query("SELECT * FROM $table WHERE Email='$email'");
        if ($result->num_rows > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    function InsertAdmin($conn, $table, $fname, $email, $password, $DOB, $gender, $address, $wexp, $status)
    {
        $sql = "INSERT INTO $table VALUES('','$fname','$email','$password','$DOB','$gender','$address','$wexp',
        '$status')";
        $res = $conn->query($sql); //execute query
        return $res;
    }

    function UpdateAdmin($conn, $table, $fname, $email, $password, $DOB, $gender, $address, $wexp)
    {
        $sql = "UPDATE $table SET FullName='$fname', Email='$email',Password='$password',DOB='$DOB',Gender='$gender',Address='$address',WorkExperience='$wexp' WHERE Email='$email'";
        $res = $conn->query($sql); //execute query
        return $res;
    }



    function CloseCon($conn)
    {
        $conn->close();
    }
}
