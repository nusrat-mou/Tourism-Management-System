<?php
include('../control/updatecheck.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Manager Registration Form</title>
    <link rel="stylesheet" href="../css/ManagerForm.css" type="text/css">
    <script src="..\js\manager.js"></script>

</head>

<body>
    <div class="main">
        <div class="register">
            <h2>Manager Update Form</h2>
            <form action="" onsubmit="return validateForm()" method="Post">
                <label>Fullname</label>

                <input type="text" name="fullname" id="fullname" placeholder="Enter your Fullname">
                <td>
                    <p id="errorfullname"></p>
                </td>

                <label>Email</label>

                <input type="text" name="email" id="email" placeholder="Enter your Email">
                <td>
                    <p id="erroremail"></p>
                </td>

                <label>NID</label>

                <input type="text" name="nid" id="nid" placeholder="Enter your NID">
                <td>
                    <p id="errornid"></p>
                </td>

                <label>DOB</label>


                <input type="date" name="date" id="date" placeholder="Enter your DOB">
                <td>
                    <p id="errordate"></p>
                </td>


                <label>Password</label>

                <input type="text" name="pass" id="pass" placeholder="Enter your Password">
                <td>
                    <p id="errorpassword"></p>
                </td>


                <label>Education</label>

                <input type="text" name="edu" id="edu" placeholder="Enter your Education">
                <td>
                    <p id="erroredu"></p>
                </td>


                <label>Experience</label>

                <input type="text" name="exp" id="exp" placeholder="Enter your Experience">
                <td>
                    <p id="errorexp"></p>
                </td>
                <div class="gender">
                    <label>Gender</label>

                    <input type="radio" name="gender" id="m" value="m" />Male
                    <input type="radio" name="gender" id="f" value="f" />Female<td>
                        <p id="errorgender"></p>
                    </td>
                </div>
                <input type="submit" name="signup" value="Sign Up" id="submit" />





            </form>
        </div>
    </div>
</body>

</html>