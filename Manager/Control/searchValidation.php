<?php 
include "..\model\db.php";
$connection=new db();
$error="";

if(isset($_REQUEST['search']))
{
    
    if(empty($_POST['pid']))
    {
        $error=" It can not empty !!";
    }

    else 
    {
        $pid=$_POST['pid'];
        $conobj=$connection->OpenCon();

        $SearPackage=$connection->SearchPackage($conobj,"package",$_POST["pid"]);

        if ($SearPackage->num_rows > 0) {
            
        
            // output data of each row
            while($row = $SearPackage->fetch_assoc())
             {
                echo "Package Name : ".$row["pname"]."<br>";
                echo "Package Description : ".$row["pdesc"]."<br>";
                echo "Cost : ".$row["cost"]."<br>";
                echo "Package Starting date : ".$row["sdate"]."<br>";
                echo "Package Ending date : ".$row["edate"]."<br>";
                
            }
        }
    }
}






?>
