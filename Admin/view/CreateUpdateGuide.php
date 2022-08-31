<?php
session_start();

include('../control/GuideUpdateCheck.php');


if (empty($_SESSION["email"])) // Destroying All Sessions

?>

<!DOCTYPE html>
<html>

<head>
  <title>Update Guide</title>
  <link rel="stylesheet" type="text/css" href="../css/GuideUpdate.css">

</head>

<body>
  <div class="body">
    <div class="header">

      <h2>Profile Page</h2>
    </div>
  </div>
  <div class="header">
    <div class="innerbox">

      Hii, <h3><?php echo $_SESSION["email"]; ?></h3>
      <br>Your Profile Page.
      <br><br>


      <?php
      $radio1 = $radio2 = $radio3 = "";
      $fullname = $email = $password = $pn = "";

      if (isset($_POST["Find"])) {
        $connection = new db();
        $conobj = $connection->OpenCon();

        $userQuery = $connection->GetGuide($conobj, "guide", $_POST["findid"]);

        if ($userQuery->num_rows > 0) {

          // output data of each row
          while ($row = $userQuery->fetch_assoc()) {


            $fullname = $row["FullName"];
            $email = $row["Email"];
            $password = $row["Password"];
            $pn = $row["NID"];
            $date = $row["DOB"];

            if ($row["gender"] == "female") {
              $radio1 = "checked";
            } else if ($row["gender"] == "male") {
              $radio2 = "checked";
            } else {
              $radio3 = "checked";
            }
          }
        } else {
          echo "0 results";
        }
      }


      ?>


      <form action="" method="post">
        <input type="text" name="findid" placeholder="Enter Guide ID" />
        <input type="submit" value="Search Guide" name="Find" id="find">
      </form>
      <h3> Update Form </h3>
      <br>
      <br>

      <form action="" method="POST">
        Full name: <input type='text' name='fullname' value="<?php echo $fullname; ?>">

        Email : <input type='text' name='email' value="<?php echo $email; ?>">

        Password : <input type='password' name='password' value="<?php echo $password; ?>">


        NID : <input type='text' name='pn' value="<?php echo $pn; ?>">


        DOB : <input type='date' name='date' value="<?php echo $date; ?>">

        Gender:
        <input type='radio' name='gender' value='female' <?php echo $radio1; ?>>Female
        <input type='radio' name='gender' value='male' <?php echo $radio2; ?>>Male
        <input type='radio' name='gender' value='other' <?php $radio3; ?>> Other

        <input name='update' type='submit' value='Update'>
      </form>
      <?php echo $error; ?>
      <br>
      <br>
      <a href="../view/GuideDashboard.php">Back </a><br>

    </div>
  </div>
</body>

</html>