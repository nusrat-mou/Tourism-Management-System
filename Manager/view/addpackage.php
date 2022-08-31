<?php
include ('../Control/addpackagecheck.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add package</title>
        <link rel="stylesheet" href="..\css\style.css" type="text/css">
        <script src="../JS/addpackage.js"></script>

    </head>
    <body>
        <div class="main">
            <div class="package">
                <h2>Add Package</h2>

                <form action="" method="post" onsubmit="return validateForm()" >
                    <label>Package Name</label>
                    <input type="text" name="pname" id="pname" placeholder="Package Name"><td> <p id="errorpname"></p></td>
                    <label>Package Description</label>
                    <textarea name="pdesc" id="pdesc" cols="30" rows="10"></textarea><td> <p id="errorpdesc"></p></td>
                    <label>Starting Date</label>
                    <input type="date" name="sdate" id="sdate" placeholder="Starting Date"><td> <p id="errorsdate"></p></td>
                    <label>Ending Date</label>
                    <input type="date" name="edate" id="edate" placeholder="Ending Date"><td> <p id="erroredate"></p></td>
                    <label>Cost</label>
                    <input type="text" name="cost" id="cost" placeholder="Cost"><td> <p id="errorcost"></p></td>
                    <input type="submit" name="submit" value="Add Package" id="submit" />
                
                </form>
                
            </div>
        </div>
    </body>
</html>