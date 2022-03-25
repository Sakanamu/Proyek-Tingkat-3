<?php 
 
include 'koneksi/koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign In Page</title>
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
        <style>
       
       body{
           background-image: url('Image/Damri_Tracker.jpeg');
           background-repeat : no-repeat;
           background-attachment: fixed;
           background-size: cover;
       }

       .formregis{
           /*height: 450px;
           width: 500px;*/
           background-color: rgba(black,0.13);
           position: absolute;
           margin-top: 100px;
           border-radius: 20px;
           backdrop-filter: blur(10px);
           border: 2px solid rgba(255,255,255,0.1);
           box-shadow: 0 0 40px rgba(8,7,16,0.6);
           }
       input::placeholder{ 
           color: white; 
           padding-left: 10px; 
       }
       input{
           background : #938B4B;
           border : 2px;
           border-radius: 10px;
           width: 420px;
           height: 50px;
           color : white;
           
       }
       #signUp{
           background: linear-gradient(to right, #FFF068, #FFA48F);
           color: #fff;
           border: 1px ;
           border-radius: 20px;
           width: 200px;
           height: 40px;
           
       }  
   </style>
    <body>
        <div id="box">
            <div class="formregis col-md-6 col-md-offset-3">
                <form action="" method="POST" style="text-align: center;">
                    <div class="row">
                    <div class=" col-md-10 col-md-offset-1">
                        <h2 style = "color : white">Login</h2><br>
                        <input type="email" class="form-control" name="email" placeholder="Email" id="email" value="<?php echo $email; ?>" required>
                        <br><br>
                        <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                        <br><br>
                        <!-- <input type="submit" value="Sign Up" id="signUp"> -->
                        <button name="submit" class="btn btn-md btn-info form-control" style="float: left;"><b>Sign In</b> </button>
                        <br>
                        </p>
                    </div>
                    </div>
                </form><br/>
                <p style ="color: #D6D6D6; text-align: center; font-size: 15px;">Doesn't have an account yet?
                <a href="sign_up.php" style ="color : white; font-weight: bold;">Sign Up</a>
            </div>
        </div>
    </body>
</html>