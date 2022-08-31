<?php
session_start();
if (empty($_SESSION["username"])) {
    header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="../css/pageonecss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>

    <script>
        $(document).ready(function() {
            $("#flip").click(function() {
                $("#panel").slideToggle("slow");

            });
        });
    </script>
</head>

<body>
    <div class="body">
        <div class="header">
            <div class="navbar">

                <div id="flip"> Click to slide the panel down or up</div>
                <div id="panel">
                    <a href="../../index.php">Home</a>
                    <div class="dropdown-container">
                        <a href="#"> Profile</a>
                        <div class="dropdown-content">
                            <a href="pagetwo.php"> My Profile</a>
                        </div>
                    </div>


                    <div class="dropdown-container">
                        <a href="#">Request</a>
                        <div class="dropdown-content">
                            <a href="ViewPackage.php">View Results</a>
                            <a href="ConfirmForm.php">Confirm</a>
                            <a href="CancelForm.php">Cancel</a>
                            <a href="DeleteId.php">Delete Account</a>
                        </div>
                    </div>



                    <div class="dropdown-container">
                        <a href="#"> Contact us</a>
                        <div class="dropdown-content">
                            <a href="https://www.facebook.com/"> Facebook</a>
                            <a href="https://accounts.google.com/signup/v2/webcreateaccount?hl=en&flowName=GlifWebSignIn&flowEntry=SignUp">Email</a>
                        </div>
                    </div>

                    <a href="../control/logout.php">Logout</a>

                </div>
            </div>




            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            Hii, <h3> <?php echo $_SESSION["username"]; ?></h3>

            <br />

            <h1>Welcome!!</h1>





            <br />



        </div>
    </div>

</body>

</html>