<?php
session_start(); 

include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="../css/pagetwocss.css">
</head>

<body>
  <div class="body">
    <div class="header">
<h2>Profile Page</h2>
<?php
$radio1=$radio2=$radio3="";
$fullname=$email="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"guide",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
     
      
      $fullname=$row["FullName"];
      $email=$row["Email"];
      $password=$row["Password"];
      $pn= $row["NID"];
      $date= $row["DOB"];
     
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}
   
  } 
  

}
  else {
    echo "0 results";

    
   
  }


?>



<h3> Update Form </h3>

<form action="" method="POST">
Full name: <input type='text' name='fullname' value="<?php echo $fullname; ?>" > <br>

Email : <input type='text' name='email' value="<?php echo $email; ?>" > <br>

Password : <input type='password' name='password' value="<?php echo $password; ?>" > <br>


NID : <input type='text' name='pn' value="<?php echo $pn; ?>" > <br>


DOB : <input type='date' name='date' value="<?php echo $date; ?>" > <br>

Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other
     
     <br>
     <input name='update' type='submit' value='Update'>  
     </form>
     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a><br>

<a href="../control/logout.php"> logout</a>
</div>
</div>
</body>
</html>