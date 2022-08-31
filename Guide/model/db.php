<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "project";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
 $result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $username."' AND Password='". $password."'");
 return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
 

 function UpdateUser($conn,$table,$fullname,$email,$password,$pn,$date,$gender)
 {
     $sql = "UPDATE $table SET  Fullname='$fullname', Password='$password', NID='$pn', DOB='$date', gender='$gender' WHERE Email='$email'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }
 function SearchPackage($conn,$table,$tgid)
    {
        $result = $conn->query("SELECT * FROM $table WHERE tgid='$tgid'");
        return $result;
    }

    function ShowAllPackage($conn,$table)
    {
       $result = $conn->query("SELECT * FROM  $table");
       return $result;
    }
    function ConfirmUser($conn,$table,$tgid)
    {
        $user="confirmed";
        $sql =  "UPDATE $table SET status='$user' WHERE tgid=$tgid";

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
    function CancelUser($conn,$table,$tgid)
    {
        $user="cancelled";
        $sql =  "UPDATE $table SET status='$user' WHERE tgid=$tgid";

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
    function DeleteUser($conn,$table,$email)
{
     $user="deleted";
     $sql = "DELETE FROM $table  WHERE Email='$email'";
     

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }
 function GetUserByTgid($conn,$table, $tgid)
 {
$result = $conn->query("SELECT * FROM  $table WHERE tgid='$tgid'");
 return $result;
 }
    
    function InsertGuide($conn,$table,$fullname,$email,$password,$pn,$gender,$date,$language,$status)
    {
        $result = $conn->query("INSERT INTO $table VALUES('','$fullname','$email','$password','$pn','$gender','$date','$language','$status')");
        return $result;
    }
 
   

    

function CloseCon($conn)
 {
 $conn -> close();
 }
}

    
?>