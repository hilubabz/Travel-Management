<?php
                include("database.php");

                if(isset($_POST['submit'])){
                    $name=$_POST['username'];
                    $pw=$_POST['password'];
                
                $sql1="select * from login where username='$name' AND password='$pw'";
                $result1=mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result1) > 0){
                    echo "Logged in";
                }
                else{
                
                    echo "Invalid username or password";
                }
                }
                ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
    <div style="display: flex; justify-content: center;">
        <img src="Images/Logo.png" alt="" height="200px" width="270px">
    </div>
    <div align="center">
        <form action="login.php" method="POST" style="width: 1000px;">
            <fieldset>
                <legend style="font-size: 1.5rem; font-weight: bold;">Welcome to Gaidim</legend>
                <div align="left" style="width: 500px;">
                    <big><b>Username</b></big><br>
                    <input name='username' type="text" class="login-box">
                </div><br><br><br>
                <div align="left" style="width: 500px;">
                    <big><b>Password</b></big><br>
                    <input name='password' type="text" class="login-box">
                </div><br><br>
                <div align="left" style="width: 500px;">
                    <p style="text-decoration: underline; font-weight: bold;">Forgot Password?</p>

                </div><br>
                <div align="center">
                    <input type="submit" name="submit" value="Sign in" style="padding: 10px 30px 10px 30px; background-color: black; color: white; font-size: 1.2rem;">
                </div><br><br>
                <div align="center">
                    <a href='signup.php'><p style="border: none; color: blue; background-color: white; cursor: pointer;">Dont have an account? Sign up</p></a>
                </div><br><br>
            </fieldset>
        </form>
    </div>
</body>
</html>