<?php
require 'koneksi.php';
$id = $_GET['nomor'];

$result = mysqli_query($conn, "SELECT * FROM data_customer WHERE nomor='$id'");
$posttest = [];

while ($row = mysqli_fetch_assoc($result)) {
    $posttest[] = $row;
}

$mhs = $posttest[0];

if (isset($_POST['tambah']))
{
    $nama               = htmlspecialchars($_POST['nama']);
    $jenis_barang       = htmlspecialchars($_POST['jenis_barang']);
    $jumlah_barang      = htmlspecialchars($_POST['jumlah_barang']);
    $alamat             = htmlspecialchars($_POST['alamat']);
    $metode_pembayaran  = htmlspecialchars($_POST['metode_pembayaran']);
    $tanggal_pemesanan  = htmlspecialchars($_POST['tanggal_pemesanan']);
    $foto_barang        = htmlspecialchars($_POST['foto_barang']);

    $sql = "UPDATE data_customer SET 
            nama                = '$nama',
            jenis_barang        = '$jenis_barang',
            jumlah_barang       = '$jumlah_barang',
            alamat              = '$alamat',
            metode_pembayaran   = '$metode_pembayaran',
            tanggal_pemesanan   = '$tanggal_pemesanan',
            foto_barang         = '$foto_barang'
            WHERE nomor = '$id';
            ";

    $result = mysqli_query($conn, $sql);

    if ( $result ) 
    {
        echo"
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'kelola.php';
            </script>
        ";
    }
    else
    {
        echo"
            <script>
                alert('Data gagal diubah');
                document.location.href = 'order.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>

<html>

<head>
    <link rel="icon" href="Gambar/Melody.ico">
    <title >Melody Guitar Store</title>
    <link rel ="stylesheet" href = "style.css">
    <script src="main.js"></script>
</head>
<body>
    <header>
        <nav>
        <div class="wrap">
                <div class="logo"><a href="index.php"><img src="Gambar/Melody.png"></a></div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="order.php">Order</a></li>
                        <li id="katalog"><a href="">Catalogue</a></li>
                        <label id="ubah"></label>
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>
    </header>
    

    <div class="wrap">
        <section class="banner">
            <img src="Gambar/Banner.png"width="100%"></p>
        </section>
    </div>

    <div align="center" class="formulir">
            <form action="" method="post">
                <table border="0" width="80%">
                    <tr class="judul">
                        <td colspan="4" align="center">
                            <strong>
                                <font size="5"> 
                                    <p>Order Gitar!</p>
                                </font>
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <input type="hidden" name="id" value="<?php echo $nomor; ?>">  
                        <td> <br> Nama Costumer</td>
                        <td> <br> :</td>
                        <td> <br> <input type="text" maxlength="100" name="nama" size="50" required="" value ="<?php echo $mhs['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td> <br> Jenis Barang</td>
                        <td> <br> :</td>
                        <td><br> <select name="jenis_barang" required ="" value = "<?php echo $mhs['jenis_barang']; ?>">
                            <option value="Gitar Elektrik">Gitar Elektrik</option>
                            <option value="Gitar Akustik">Gitar Akustik</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td> <br> Jumlah Barang</td>
                        <td> <br> :</td>
                        <td> <br> <input type="number" name="jumlah_barang" required=""value ="<?php echo $mhs['jumlah_barang']; ?>">
                    </tr>
                    <tr>
                        <td> <br> Alamat Costumer</td>
                        <td> <br> :</td>
                        <td> <br> <textarea name="alamat" required="" value = "<?php echo $mhs['alamat']; ?>"></textarea></td>
                    </tr>
                    <tr>
                        <td> <br> Metode Pembayaran</td>
                        <td> <br> :</td>
                        <td><br> <select name="metode_pembayaran" required ="" value = "<?php echo $mhs['metode_pembayaran']; ?>">
                            <option value="Cash">Cash</option>
                            <option value="Credit">Credit</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td> <br> Tanggal Pemesanan </td>
                        <td> <br> :</td>
                        <td> <br> <input type="date" name="tanggal_pemesanan" required = "" value = "<?php echo $mhs['tanggal_pemesanan']; ?>" >
                    </tr>
                    <tr>
                        <td> <br> Foto Barang </td>
                        <td> <br> :</td>
                        <td> <br> <input type = "file" name="foto_barang" required = "" value ="<?php echo $mhs['foto_barang']; ?>">
                    </tr>
                    <tr>
                        <td colspan="4"> <br> <br> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name = "tambah" value = "Tambah"></td>
                    </tr>
                </table>
            </form>
        </div>

    <footer class="footer">
        <h3>Melody Guitar Store</h3>
        <p>
            <br>
            Sampai Jumpa Lagi !
            <br>
        </p>
        <h4>Copyright 2022 - Pranata Eka Pramudya</h4>
    </footer>
    <script src="main.js"></script>
</body>
</html>