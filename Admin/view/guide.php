<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GuideUser";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pass = isset($_POST['Password']) ? $_POST['Password'] : '';
$NID = isset($_POST['pn']) ? $_POST['pn'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$DOB = isset($_POST['date']) ? $_POST['date'] : '';

$sql = "INSERT INTO User(fullname,email,pass,NID,gender,DOB) VALUES('$fullname','$email','$pass','$NID','$gender','$DOB')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
