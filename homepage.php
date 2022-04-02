<?php 

require 'koneksi/koneksi.php'; 
// include 'sign_in.php';

session_start();
 
if (!isset($_SESSION['email'])) {
    echo '<script>alert("Anda harus login terlebih dahulu !")</script>';
    echo "<meta http-equiv='refresh' content='0 url=sign_in.php'>";
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <script type="text/javascript" src="asset/js/jquery.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.js"></script>
        <!-- Data Tables -->
    <script type="text/javascript" src="asset/DataTables/media/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="asset/DataTables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="asset/DataTables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/DataTables/media/css/dataTables.bootstrap.min.css">
    <script type="text/javascript" src="asset/DataTables/media/js/dataTables.bootstrap.min.js"></script>
</head>
<body style="margin: 0 auto;">
    <nav class="navbar navbar-inverse" style="border-radius: 0px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="homepage.php">Damtrack</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#">Schedule</a></li>
                    <li><a href="#">Halte</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="admin.php"><span class="glyphicon glyphicon-user"></span> <?php echo "Selamat Datang, " . $_SESSION['name'] ." !"; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php">Logout</a></li>
                            <li><a href="profile.php">Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>