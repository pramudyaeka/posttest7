<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="Gambar/Melody.ico">
    <title>SIGN UP - MELODY GUITAR STORE</title>
    <link rel="stylesheet" href="stylelogin.css">
    <script src = "main.js"></script>
</head>
<body>
    <div class="center">
        <h1>Sign Up</h1>
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
        <div class = "txt_field">
            <input type="password" name="cpassword" required>
            <span></span>
            <label>Password Confirmation</label>
        </div> 
           <input type="submit"name="registration" value="Sign Up">

    <?php
        require 'koneksi.php';

       if(isset($_POST['registration']))
       {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if($password == $cpassword)
        {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $result   = mysqli_query($conn,"SELECT username from user WHERE username = '$username'");
            
            if(mysqli_fetch_assoc($result))
            {
                echo "
                <script>
                    alert('Username Telah Digunakan, Silahkan Cari Lagi !');
                    document.location.href = 'registrasi.php';
                </script>";
            }
            else
            {
                $sql = "INSERT INTO user VALUES ('','$username','$password')";
                $result = mysqli_query($conn,$sql);

                if(mysqli_affected_rows($conn) > 0)
                {
                    echo "
                    <script>
                        alert(' Registrasi Telah Berhasil !');
                        document.location.href = 'login.php';
                    </script>";
                }
                else
                {
                    echo "
                    <script>
                        alert(' Registrasi Gagal !');
                        document.location.href = 'registrasi.php';
                    </script>";
                }
            }
        
        }
        else
        {
            echo "<script>
            alert('Konfirmasi Password Anda Tidak Sesuai !');
            document.location.href = 'registrasi.php';
            </script>";
        }
       }
    ?> 
        </form>
        
    </div>
</body>
</html>