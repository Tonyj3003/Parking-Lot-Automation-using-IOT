<?php
session_start();
require 'update_slots.php';
if (!$_SESSION['email']) {
    header("location: admin_login.php");
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Smart Parking</title>
    <link rel="icon" href="assets/img/ny.jpg" />

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header class="header black-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a class="logo" href="index.php"><b>Smart Parking</b></a>
                </div>
                <div class="col-md-9 text-right">
                    <ul class="nav top-menu">
                        <li><a class="logout" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <aside>
        <div class="nav-wrap">
            <ul class="nav">
                <li>
                    <div class="user">
                        <img src="assets/img/assistant-144.png" alt="User Image" class="img-circle">
                        <h5><?php echo $_SESSION['email']; ?></h5>
                    </div>
                </li>
                <li><a href="blank.php">Upload New Parkings</a></li>
                <li><a href="attendant.php">Add New Parking Attendant</a></li>
                <li><a href="basic_table.php">Parkings</a></li>
                <li><a href="basic_table2.php">Attendants</a></li>
                <li><a href="admin_request.php">Requests</a></li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-9 main-chart">
                    <!-- Your main content goes here -->
                </div>
            </div>
        </section>
    </section>

    <!-- JavaScript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/common-scripts.js"></script>
</body>
</html>
<?php
}
?>
