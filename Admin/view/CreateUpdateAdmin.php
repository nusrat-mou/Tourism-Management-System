<?php include "../control/admincontroller.php"; ?>
<?php include "../control/AdminValidation.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Update or Register Admin</title>
    <link rel="stylesheet" href="../css/AdminCreateUpdate.css">
    <script src="../JS/AdminSignupValidation.js"></script>
</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <a href="../../index.php">Home</a>
            <a href="AdminHome.php">Admin Dashboard</a>
        </div>
        <div class="innerbox">
            <form action="" method="post">
                <input type="text" name="findid" placeholder="Enter Admin ID" /><?php echo $validateFindid ?>
                <input type="submit" value="Search Admin" name="Find" id="find">
            </form>
            <div class="message">
                <?php echo $st; ?>
            </div>
            <form action="" method="POST" onsubmit="return validateForm()" name="form">
                <input type="text" name="FullName" id="FullName" placeholder="Enter Full Name" value="<?php echo $fname; ?>"> <?php echo $validatefname ?><p id="errorfname"></p>
                <input type="text" name="Email" id="Email" placeholder="Enter Email" value="<?php echo $email; ?>"><?php echo $validateEmail ?><p id="erroremail"></p>
                <input type="text" name="Password" id="Password" placeholder="Enter Password" value="<?php echo $password; ?>"> <?php echo $validatePassword ?><p id="errorpass"></p>
                <input type="date" name="DOB" id="DOB" placeholder="Choose DOB" value="<?php echo $dob; ?>"><?php echo $validateDOB ?><p id="errordob"></p>
                <div class="bottombox">
                    <input type="radio" name="gender" id="male" value='Male' <?php echo $radio1; ?>>Male
                    <input type="radio" name="gender" id="female" value='Female' <?php echo $radio2; ?>>Female
                    <input type="radio" name="gender" id="other" value='Other' <?php $radio3; ?>>Other
                    <?php echo $validateGender ?>
                </div>
                <p id="errorgender"></p>
                <input type="text" name="Address" id="Address" placeholder="Enter Address" value="<?php echo $address; ?>"> <?php echo $validateAddress ?><p id="erroraddress"></p>
                <select id="wexp" name="wexp">
                    <p id="errorexp"></p>
                    <option value="">Work Experience</option>
                    <option value="opt1" id="opt1">Less than 1 Year</option>
                    <option value="opt2" id="opt2">1 Year</option>
                    <option value="opt3" id="opt3">2 Years or More</option>
                </select>
                <?php echo $validateExp ?>
                <div class="button1">
                    <input type="submit" value="Update" name="update" class="btn1">
                    <input type="submit" value="New" name="register" class="btn1">
                </div>
            </form>
        </div>
    </div>
</body>

</html>