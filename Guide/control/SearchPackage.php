<?php include('../model/db.php');?>

<?php
$tgid=$tid=$gid="";

if(isset($_POST['searchid']))
{

        $connection = new db();
        $conobj=$connection->OpenCon();

        $userQuery=$connection->SearchPackage($conobj,"travguide",$_POST["tgid"]);
        if ($userQuery->num_rows > 0) 
        {
            echo $userQuery->num_rows." result found";
            echo  "<br><br>";
            // output data of each row
            while($row = $userQuery->fetch_assoc()) 
            {
                $tgid=$row["tgid"];
                $tid=$row["TravellerId"];
                $gid=$row["GuideId"];
                

                echo  "tgid: ".$tgid."<br>";
                echo  "TravellerId: ".$tid."<br>";
                echo  "GuideId: ".$gid."<br>";
                
            } 
        }
        else 
        {
            echo "0 results";
        }
 
}

if(isset($_POST['showall']))
{
    $connection = new db();
    $conobj=$connection->OpenCon();


    $userQuery=$connection->ShowAllPackage($conobj,"travguide");
    if ($userQuery->num_rows > 0) 
    {
        echo $userQuery->num_rows." result found";
        echo  "<br><br>";
        // output data of each row
        while($row = $userQuery->fetch_assoc()) 
        {
            $tgid=$row["tgid"];
            $tid=$row["TravellerId"];
            $gid=$row["GuideId"];
            

            echo  "tgid: ".$tgid."<br>";
            echo  "TravellerId: ".$tid."<br>";
            echo  "GuideId: ".$gid."<br>";
            
        } 
    }
    else 
    {
        echo "0 results";
    }

}

?>