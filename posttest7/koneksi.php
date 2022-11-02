<?php 
    $conn = mysqli_connect("localhost", "root", "", "posttest");


    if (!$conn) {
        die("Gagal terhubung ke database" . mysqli_connect_error());
    }
?>