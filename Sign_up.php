<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up Page</title>
    </head>

    <body>
        <div id="box">
            <form method="post" style="text-align: center;">
                <h2 style = "color : white">LOGIN</h2>
                <input type="text" name="Email" placeholder="Email" id="email" >
                <br><br>
                <input type="password" name="Password" placeholder="Password" id="password">
                <br><br>
                <input type="text" name="Name" placeholder="Name" id="name">
                <br><br>
                <input type="number" name="Phone" placeholder="Phone" id="phone">
                <br><br>
                <input type="submit" value="Sign Up" id="signUp">
                <br>
                <p style =" font-size: 15px;">Already have an account yet?
                <a href="sign_in.php" style ="color : white; font-weight: bold;">Sign in</a>
                </p>
                
            </form>
        
        </div>
    </body>
    <style>
       
        body{
          
            background-image: url('Image/Damri_Tracker.jpeg');
            background-repeat : no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        form{
            height: 450px;
            width: 500px;
            background-color: rgba(black,0.13);
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            padding: 50px 35px;
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
</html>