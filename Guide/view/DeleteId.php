<?php

include("../control/Delete.php");
?>

<?php

$email = $_SESSION["username"];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Delete id </title>
    <link rel="stylesheet" type="text/css" href="../css/Deleteid.css">
</head>

<body>
    <div class="body">
        <div class="header">
            <h2> Do you want to permanently delete your user ID? </h2>
            <form action="" method="post">
                <input type="text" name="email" placeholder="Enter your email" value="<?php echo $email; ?>" disabled><br>
                <input type="submit" value="Delete Account" name="delete"> <br>

                Do you want to go back to login page?<a href="login.php">Back</a>
            </form>
        </div>
    </div>

</body>

</html>