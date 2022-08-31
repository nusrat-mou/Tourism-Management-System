<?php
session_start();
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
    <link rel="stylesheet" href="../css/AdminHome.css">
</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <div class="dropdown">
                <a href="#" id="Admin">Admin</a>
                <div class="dropdown-content" id="show1">
                    <a href="CreateUpdateAdmin.php">Insert Admin</a>
                    <a href="viewAdmin.php">View Admin</a>
                    <a href="CreateUpdateAdmin.php">Update Admin</a>
                    <a href="viewAdmin.php">Manage ID</a>
                </div>
            </div>

            <div class="dropdown2">
                <a href="#" id="traveller">Traveller</a>
                <div class="dropdown-content2" id="show2">
                    <a href="CreateUpdateTraveller.php">Insert Traveller</a>
                    <a href="viewTraveller.php">View Traveller</a>
                    <a href="CreateUpdateTraveller.php">Update Traveller</a>
                    <a href="viewTraveller.php">Manage ID</a>
                </div>
            </div>

            <div class="dropdown3">
                <a href="#" id="profile">Profile</a>
                <div class="dropdown-content3" id="show3">
                    <a href="AdminProfile.php" id="myprofile">My Profile</a>
                    <a href="../control/logout.php" id="logout">Logout</a>
                </div>
            </div>


            <a href="GuideDashboard.php" id="guide">Guide</a>
            <a href="ManagerForm.php" id="manager">Add Manager</a>
        </div>
        <div class="message">
            <h4></h4>
            <?php echo "<h2>$welcome</h2>" ?>
        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../JS/animation.js"></script>
</body>

</html>