<?php
include('../control/send.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Manager Registration Form</title>
    <link rel="stylesheet" href="../css/ManagerForm.css" type="text/css">
    <script src="..\JS\manager.js"></script>

</head>

<body>
    <div class="main">
        <div class="register">
            <h2>Manager Registration Form</h2>
            <form action="" onsubmit="return validateForm()" method="Post">
                <label>Fullname</label>
                <br>
                <input type="text" name="fullname" id="fullname" placeholder="Enter your Fullname">
                <td>
                    <p id="errorfullname"></p>
                </td>
                <br><br>
                <label>Email</label>
                <br>
                <input type="text" name="email" id="email" placeholder="Enter your Email">
                <td>
                    <p id="erroremail"></p>
                </td>
                <br><br>
                <label>NID</label>
                <br>
                <input type="text" name="nid" id="nid" placeholder="Enter your NID">
                <td>
                    <p id="errornid"></p>
                </td>
                <br><br>
                <label>DOB</label>
                <br>

                <input type="date" name="date" id="date" placeholder="Enter your DOB">
                <td>
                    <p id="errordate"></p>
                </td>
                <br><br>

                <label>Password</label>
                <br>
                <input type="text" name="password" id="password" placeholder="Enter your Password">
                <td>
                    <p id="errorpassword"></p>
                </td>
                <br><br>

                <label>Education</label>
                <br>
                <input type="text" name="edu" id="edu" placeholder="Enter your Education">
                <td>
                    <p id="erroredu"></p>
                </td>
                <br><br>

                <label>Experience</label>
                <br>
                <input type="text" name="exp" id="exp" placeholder="Enter your Experience">
                <td>
                    <p id="errorexp"></p>
                </td>
                <br><br>
                <div class="gender">
                    <label>Gender</label>
                    <br>
                    <input type="radio" name="gender" id="m" value="m" />Male
                    <input type="radio" name="gender" id="f" value="f" />Female<td>
                        <p id="errorgender"></p>
                    </td>
                </div>
                <br><br>
                <input type="submit" name="signup" value="Sign Up" id="submit" />

                <a href="updatemanager.php">Update Form</a>




            </form>
        </div>
    </div>
</body>

</html>