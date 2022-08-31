<?php
class db
{
    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "project";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        
        return $conn;
    }
    function CheckPresence($conn,$table,$email)
    {
        $result = $conn->query("SELECT TravellerId FROM traveller WHERE Email='$email'");
        if ($result->num_rows > 0) 
        {
            return 1;
        } 
        else 
        {
            return 0;
        }
    }
    
    function CheckUser($conn,$table,$email,$password)
    {
        $result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $email."' AND Password='". $password."'");
        return $result;
    }

    function SearchUser($conn,$table,$email)
    {
        $result = $conn->query("SELECT * FROM traveller WHERE Email='$email'");
        return $result;
    }

    function ShowAll($conn,$table)
    {
        $result = $conn->query("SELECT * FROM  $table");
        return $result;
    }

    function UpdateUser($conn,$table,$fname,$email,$password,$passportNo,$phoneNo,$dob,$gender,$picture)
    {
        $sql = "UPDATE $table SET FullName='$fname', Email='$email',Password='$password',PassportNumber='$passportNo',PhoneNumber='$phoneNo',DOB='$dob',Gender='$gender',ProfilePicture='$picture' WHERE Email='$email'";

        if ($conn->query($sql) === TRUE) 
        {
            $result= TRUE;
        } 
        else 
        {
            $result= FALSE ;
        }
        return  $result;
    }

    function InsertUser($conn,$table,$fname,$email,$password,$passportNo,$phoneNo,$DOB,$gender,$picture,$status)
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
        $res = $conn->query($sql);//execute query
        if($res)
        {
            echo "new record inserted"; 
        }
        else 
        { 
            echo "error occurred"; 
        }
    }

    function BookPackage($conn,$table,$TravellerId,$packageid)
    {
        $res = $conn->query("INSERT INTO $table VALUES('',$TravellerId,$packageid)");
        if($res)
        {
            echo "new record inserted"; 
        }
        else 
        { 
            echo "error occurred"; 
        }
    }

    function GetTraveller($conn,$table,$Email)
    {
        $sql = "SELECT TravellerId FROM traveller WHERE Email='$Email'";
        $result = $conn->query($sql);
        return $result;
    }

    function GetImage($conn,$table,$Email)
    {
        $sql = "SELECT ProfilePicture FROM traveller WHERE Email='$Email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        return $row["ProfilePicture"];
    }

    function CheckCar($conn,$table,$carId)
    {
        $result = $conn->query("SELECT * FROM cartrav WHERE CarId='$carId'");
        if ($result->num_rows > 0) 
        {
            return 1;
        } 
        else 
        {
            return 0;
        }
    }

    function SearchPackage($conn,$table,$packageid)
    {
        $result = $conn->query("SELECT * FROM package WHERE pid='$packageid'");
        return $result;
    }

    function ShowAllPackage($conn,$table)
    {
       $result = $conn->query("SELECT * FROM  $table");
       return $result;
    }

    function GetPid($conn,$table,$tid)
    {
       $result = $conn->query("SELECT pid FROM  $table WHERE TravellerId=$tid");
       return $result;
    }

    function ShowBookedPackage($conn,$table,$packageid)
    {
       $result = $conn->query("SELECT * FROM  $table WHERE pid=$packageid");
       return $result;
    }

    function CancelPackage($conn,$table,$packageid)
    {
        $res = $conn->query("DELETE FROM $table WHERE tpId=$packageid");
        if($res)
        {
            echo "Deleted"; 
        }
        else 
        { 
            echo "error occurred"; 
        }
    }

    function GetPackage($conn,$table,$packageid)
    {
       $result = $conn->query("SELECT * FROM  $table WHERE pid=$packageid");
       return $result;
    }

    function DeleteUser($conn,$table,$email)
    {
        $res = $conn->query("DELETE FROM $table WHERE Email='$email'");
        if($res)
        {
            echo "Deleted"; 
            header("location: ../control/logout.php");
            
        }
        else 
        { 
            echo "error occurred"; 
        }
    }

    function GetStatus($conn,$table,$email,$password)
    {
       $result = $conn->query("SELECT status FROM  $table WHERE Email='$email' AND Password='$password'");
       return $result;
    }

    function DisableUser($conn,$table,$email)
    {
        $st="disabled";
        $sql = "UPDATE $table SET status='$st' WHERE Email='$email'";

        if ($conn->query($sql) === TRUE) 
        {
            $result= TRUE;
        } 
        else 
        {
            $result= FALSE ;
        }
        return  $result;
    }

    function ActivateUser($conn,$table,$email)
    {
        $st="enabled";
        $sql = "UPDATE $table SET status='$st' WHERE Email='$email'";

        if ($conn->query($sql) === TRUE) 
        {
            $result= TRUE;
        } 
        else 
        {
            $result= FALSE ;
        }
        return  $result;
    }

    function BookGuide($conn,$table,$TravellerId,$guideid,$status)
    {
        $res = $conn->query("INSERT INTO $table VALUES('',$TravellerId,$guideid,'$status')");
        if($res)
        {
            echo "new record inserted"; 
        }
        else 
        { 
            echo "error occurred"; 
        }
    }

    function SearchGuide($conn,$table,$guideid)
    {
        $result = $conn->query("SELECT * FROM $table WHERE GuideId='$guideid'");
        return $result;
    }

    function ShowAllGuide($conn,$table)
    {
       $result = $conn->query("SELECT * FROM  $table");
       return $result;
    }

    function CancelGuide($conn,$table,$guideid)
    {
        $res = $conn->query("DELETE FROM $table WHERE tgid=$guideid");
        if($res)
        {
            echo "Deleted"; 
        }
        else 
        { 
            echo "error occurred"; 
        }
    }

    function ShowGuideStatus($conn,$table,$travellerid)
    {
       $result = $conn->query("SELECT * FROM  $table WHERE TravellerId=$travellerid");
       return $result;
    }
        
    function CloseCon($conn)
    {
        $conn -> close();
    }
}
?>