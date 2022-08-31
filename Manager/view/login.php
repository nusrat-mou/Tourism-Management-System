<?php include "../Control/action.php"; ?>
<?php
include('../Control/logincheck.php');

if(isset($_SESSION['email']) && isset($_SESSION['password']))
{
    header("location: view.php");
}

?>
<!DOCTYPE html>
<head>
    <title>Manager Login</title>
    <script src="../JS/login.js"></script>
    <link rel="stylesheet" href="../css/log.css" type="text/css">


</head>
        <body>
          <div class="box">
            <h1>Manager Login</h1>
            <form action = "" onsubmit="return validateForm()" method = "post">

            <div class="textbox">
                <input type="text" name="email" id="email"/><?php echo $validateusername; ?></td><p id="erroremail"></p></td>                
                <input type="password" name="password" id="password"/><?php echo $validatepassword; ?></td><p id="errorpassword"></p></td>
            </div>
            <input type="Submit" name="login" value="Login" id="login"/>
            
            
            </form>
         </div>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="../JS/jquery.js"></script>
    
        </body>
</html>
