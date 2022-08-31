<?php include "../control/travellercontroller.php"; ?>
<?php include "../control/TravellerValidation.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/TravellerDashboard.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <a href="../../index.php">Home</a>
            <a href="AdminHome.php">Admin Dashboard</a>
        </div>
        <div class="message">
            <?php echo $st; ?>
        </div>
        <div class="innerbox">

            <form action="" method="post">
                <input type="text" name="findid" placeholder="Enter Traveller ID" /><?php echo $validatefindid;  ?>
                <input type="submit" value="Search Traveller" name="Find" id="find">
            </form>
            <form action="" method="post" enctype="multipart/form-data">
                <?php
                if (!empty($target_file)) {
                    echo "<img src=" . $target_file . " width=140px height=140px> ";
                }
                ?>
                <input type="text" name="fullname" value="<?php echo $fname; ?>" placeholder="Full Name" /><?php echo $validatename  ?>
                <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"><?php echo $validateemail ?>
                <?php
                if (!empty($validateDeleteId1)) {
                    echo $validateDeleteId1;
                }
                if (!empty($validateDeleteId2)) {
                    echo $validateDeleteId2;
                }
                if (!empty($validateDeleteId3)) {
                    echo $validateDeleteId3;
                }
                ?>
                <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password" /><?php echo $validatepassword ?>
                <input type="text" name="pn" value="<?php echo $passportNo; ?>" placeholder="Passport Number" /><?php echo $validatepass ?>
                <input type="text" name="phone" value="<?php echo $phoneNo; ?>" placeholder="Phone number" /><?php echo $validatephone ?>
                <input type='date' name='date' value="<?php echo $dob; ?>" placeholder="DOB"><?php echo $validatedate ?>
                <input type="file" name="pimage" value="<?php echo $picture; ?>"><?php echo $validateimage ?>

                <div class="bottombox">
                    <input type='radio' name='gender' value='male' <?php echo $radio2; ?>>Male
                    <input type='radio' name='gender' value='female' <?php echo $radio1; ?>>Female
                    <input type='radio' name='gender' value='other' <?php $radio3; ?>> Other
                    <?php echo $validateradio  ?>
                </div>
                <input type="submit" value="Update" name="update" class="btn1">
                <input type="submit" value="New" name="register" class="btn1">
        </div>
        </form>
    </div>
    </div>
</body>

</html>