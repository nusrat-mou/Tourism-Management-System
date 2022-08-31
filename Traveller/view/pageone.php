<?php
session_start();

if (empty($_SESSION["email"])) {
    header("Location: login.php");
}

?>

<?php
$cookie_value = "";
$cookie_name = "user";
$cookie_value =  $_SESSION["email"];
$welcome = "";
if (!isset($_COOKIE[$cookie_name])) {
    $welcome = "Welcome to our website " . $_SESSION["email"];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
} else {
    $welcome = "Welcome back " . $_SESSION["email"];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <a href="../../index.php" id="Home">Home</a>

            <div class="dropdown">
                <a href="#" id="package">Package</a>
                <div class="dropdown-content" id="show1">
                    <a href="viewpackage.php">View Package</a>
                    <a href="bookPackage.php">Book Package</a>
                    <a href="Booked.php">View Booked Package</a>
                    <a href="cancelbooking.php">Cancel Package</a>
                </div>
            </div>

            <div class="dropdown2">
                <a href="#" id="guide">Guide</a>
                <div class="dropdown-content2" id="show2">
                    <a href="BookGuide.php">Book Guide</a>
                    <a href="viewguide.php">View Guide</a>
                    <a href="cancelguide.php">Cancel Guide</a>
                    <a href="viewBookedGuide.php">View Guide Status</a>
                </div>
            </div>

            <div class="dropdown3">
                <a href="#" id="profile">Profile</a>
                <div class="dropdown-content3" id="show3">
                    <a href="Profile.php" id="myprofile">My Profile</a>
                    <a href="../control/logout.php" id="logout">Logout</a>
                </div>
            </div>
        </div>
        <div class="message">
            <h4></h4>
            <?php echo "<h2>$welcome</h2>" ?>
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../JS/TravellerDashboard.js"></script>

</html>