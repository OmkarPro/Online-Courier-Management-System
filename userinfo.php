<?php
if (isset($_POST['user_id'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "courier_management_system";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " .  $conn->connect_error);
    }
    $sql = "SELECT * FROM `portal` where user_id = '$_POST[user_id]'";
    $res = $conn->query($sql);
    $rows = $res->fetch_assoc();
    if ($rows != NULL && ($rows['Password']) == $_POST['Password']) {
        $sql1 = "Select Cus_Name from `customer` where user_id = '$_POST[user_id]'";
        $res1 = $conn->query($sql1);
        $row1 = $res1->fetch_assoc();
        $cname = $row1['Cus_Name'];
        session_start();
        $_SESSION['myuserid'] = $_POST['user_id'];
    } else {
        echo "<script>alert('Wrong Credentials entered!!');</script>";
        header("Location: index.php", true, 301);

        // exit();
        // echo "Sorry!! No Such Entry Exists!!!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        img {
            width : 90%;
            height : 775px !important;
            margin-left :auto;
            margin-right :auto;
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">A1-COURIERS</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="new.php">Try a New</a></li>
                <li><a href="past.php">Past Couriers</a></li>
                <!-- <li><a href="#">Track Courier</a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
	<?php
                if(isset($cname)) {
              ?>
                <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome!! <?php echo " $cname" ?></a></li>
                <li class="active"><a href="userlogin.php">Logout</a></li>
              <?php
              }
                else {
              ?>
                <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome Back!!</a></li>
                <li class="active"><a href="userlogin.php">Logout</a></li>
              <?php
              }
              ?>
            </ul>
        </div>
    </nav>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/trynew.jpg" alt="Los Angeles">
            </div>

            <div class="item">
                <img src="img/pastcouriers.jpg" alt="Chicago">
            </div>

            <div class="item">
                <img src="img/track.jpg" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>

        <?php
        if(isset($cname))
        echo "<script>alert('You are successfully Logged In');</script>"?>
    </div>
</body>

</html>
