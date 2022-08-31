<?php
include ('../Control/updatecheck.php');
?>



<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="..\css\style.css" type="text/css">

    </head>
    <body>
        <div class="main">
            <div class="package">
                <h2>Update Package</h2>

                <form action="" method="post" onsubmit="return validateForm()" >
                    <label>Package Name</label>
                    <input type="text" name="pname" id="pname" placeholder="Package Name">
                    <label>Package Description</label>
                    <textarea name="pdesc" id="pdesc" cols="30" rows="10"></textarea><td> 
                    <label>Starting Date</label>
                    <input type="date" name="sdate" id="sdate" placeholder="Starting Date"><td>
                    <label>Ending Date</label>
                    <input type="date" name="edate" id="edate" placeholder="Ending Date">
                    <label>Cost</label>
                    <input type="text" name="cost" id="cost" placeholder="Cost">
                    <input type="submit" name="submit" value="Update Package" id="submit" />
                
                </form>
                
            </div>
        </div>





    </body>
</html>