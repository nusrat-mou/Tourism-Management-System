<!DOCTYPE html>
<html>

<head>
    <title>GuideDashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/GuideDashboard.css">
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
                    <a href="AdminHome.php">Home</a>
                    <a href="GuideForm.php">Create Guide</a>
                    <a href="viewGuide.php"> View Guide</a>
                    <a href="CreateUpdateGuide.php"> Update Guide</a>
                    <a href="DeleteGuide.php"> Delete Guide</a>


                </div>
            </div>


            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>








            <h1><i>Dashboard!!!</i></h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>



            <a href="../view/AdminHome.php">Back </a>
        </div>
    </div>



</body>

</html>