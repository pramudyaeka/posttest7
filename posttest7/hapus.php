<?php

require 'koneksi.php';

$id = $_GET['nomor'];

$result = mysqli_query($conn, "DELETE FROM data_customer WHERE nomor = '$id'");

if ( $result )
{
    echo "
      <script>
        alert('Data berhasil dihapus');
        document.location.href = 'kelola.php';
      </script>  
    ";
}
else
{
    echo "
      <script>
        alert('Data gagal dihapus');
        document.location.href = 'kelola.php';
      </script>  
    ";
}
?>