<?php include "../control/AdminValidation.php"; ?>
<?php include "../control/admincontroller.php"; ?>


<?php

$fname = $email = $dob = $password = $radio1 = $radio2 = $radio3 = $address = "";
$connection = new db();
$conobj = $connection->OpenCon();

$aid = $connection->Getaid($conobj, "admin", $_SESSION["email"]);
$row = $aid->fetch_assoc();
$userQuery = $connection->GetAdmin($conobj, "admin", $row["AdminId"]);

if ($userQuery->num_rows > 0) {
    while ($row = $userQuery->fetch_assoc()) {
        $fname = $row["FullName"];
        $email = $row["Email"];
        $password = $row["Password"];
        $dob = $row["DOB"];
        $address = $row["Address"];
        if ($row["Gender"] == "Female") {
            $radio2 = "checked";
        } else if ($row["Gender"] == "Male") {
            $radio1 = "checked";
        } else {
            $radio3 = "checked";
        }
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Update or Register Admin</title>
    <link rel="stylesheet" href="../css/AdminCreateUpdate.css">
</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <a href="../../index.php">Home</a>
            <a href="AdminHome.php">Admin Dashboard</a>
        </div>
        <div class="message1">
            <?php echo $st; ?>
        </div>
        <div class="innerbox">
            <form action="" method="POST">
                <input type="text" name="FullName" placeholder="Enter Full Name" value="<?php echo $fname; ?>"> <?php echo $validatefname ?>
                <input type="text" name="Email" placeholder="Enter Email" value="<?php echo $email; ?>"><?php echo $validateEmail ?>
                <input type="text" name="Password" placeholder="Enter Password" value="<?php echo $password; ?>"> <?php echo $validatePassword ?>
                <input type="date" name="DOB" placeholder="Choose DOB" value="<?php echo $dob; ?>"><?php echo $validateDOB ?>
                <div class="bottombox">
                    <input type="radio" name="gender" value='Male' <?php echo $radio1; ?>>Male
                    <input type="radio" name="gender" value='Female' <?php echo $radio2; ?>>Female
                    <input type="radio" name="gender" value='Other' <?php $radio3; ?>>Other
                    <?php echo $validateGender ?>
                </div>
                <input type="text" name="Address" placeholder="Enter Address" value="<?php echo $address; ?>"> <?php echo $validateAddress ?>
                <select id="wexp" name="wexp">
                    <option value="">Work Experience</option>
                    <option value="opt1">Less than 1 Year</option>
                    <option value="opt2">1 Year</option>
                    <option value="opt3">2 Years or More</option>
                </select>
                <?php echo $validateExp ?>
                <div class="button1">
                    <input type="submit" value="Update" name="update" class="btn1">
                </div>
            </form>
        </div>
    </div>
</body>

</html>