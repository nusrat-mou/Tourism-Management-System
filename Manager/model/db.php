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
 function CheckManager($conn,$table,$email,$password)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $email."' AND Password='". $password."'");
    return $result;
 }


 function manager($conn,$table,$fullname,$password,$pn,$email,$date,$exp,$edu)
 {
$result = $conn->query("INSERT INTO $table VALUES('','$fullname','$password','$gender','$pn','$email','$date','$edu','$exp)");
 return $result;
 }


 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function UpdateUser($conn,$table,$fullname,$email,$password,$gender,$date,$pm,$edu,$exp)
 {
     $sql = "UPDATE $table SET fullname='$fulltname', email='$email', password='$password',gender='$gender',DOB='$date',edu='$edu',exp='$exp'WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }
 function SearchPackage($conn,$table,$pid)
 {
$result = $conn->query("SELECT * FROM $table WHERE pid-'$pid'");

 return $result;
 }

 function GetPackageBypname($conn,$table,$pname)
 {
$result = $conn->query("SELECT * FROM $table WHERE pname='$pname'");

 return $result;
 }

function addpackage($conn,$table,$pname,$pdesc,$cost,$sdate,$edate)
{
    $result = $conn->query("INSERT INTO $table VALUES('','$pname','$pdesc','$cost','$sdate','$edate')");
    return $result;
}

 function UpdatePackage($conn,$table,$pname,$pdesc,$sdate,$edate,$cost)
 {
     $sql = "UPDATE $table SET pname='$pname', sdate='$sdate', edate='$edate',cost='$cost',pdesc='$pdesc' WHERE pname='$pname'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }
 function DeleteUser($conn,$table,$pid)
 {
    $res = $conn->query("DELETE FROM $table WHERE pid='$pid'");
    return $res;

 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>