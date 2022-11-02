<?php
session_start();
require 'koneksi.php';

if(isset ($_SESSION['login']))
{
    header("Location : index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="Gambar/Melody.ico">
    <title>LOGIN - MELODY GUITAR STORE</title>
    <link rel="stylesheet" href="stylelogin.css">
    <script src = "main.js"></script>
    <title>Sign In</title>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <?php
            if (isset($error))
            {
                echo"<p style = 'color : red;'>Username Atau Password Anda Salah !</p>";
            }
        ?>
        <form action="" method="POST">
        <div class = "txt_field">
            <input type="text" name="username" required>
            <span></span>
            <label>Username</label>
        </div> 
        <div class = "txt_field">
            <input type="password" name="password" required>
            <span></span>
            <label>Password</label>
        </div> 
           <input type="submit"name="login" value="Login">
        <div class = signup_link> Don't Have Account ? <a href="registrasi.php">Sign Up Here <br> </a></div>
            
        
    <?php
        require 'koneksi.php';
        if(isset($_POST['login']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $result = mysqli_query($conn, "SELECT * from user WHERE username = '$username'");

            if(mysqli_num_rows($result) === 1)
            {
                $row = mysqli_fetch_assoc($result);

                if (password_verify($password, $row['password']))
                {
                    $_SESSION['login'] = true;

                    header("Location:index.php");
                    exit;
                }
            }
            $error = true;
        }
    ?> 
        </form>
        
    </div>
</body>
</html>