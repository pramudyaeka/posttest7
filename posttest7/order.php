<?php
require'koneksi.php';

if (isset($_POST['tambah']))
{
    $nama       = htmlspecialchars($_POST["nama"]);
    $jenis_barang      = htmlspecialchars($_POST["jenis_barang"]);
    $jumlah_barang     = htmlspecialchars($_POST["jumlah_barang"]);
    $alamat     = htmlspecialchars($_POST["alamat"]);
    $metode_pembayaran = htmlspecialchars($_POST["metode_pembayaran"]);
    $tanggal_pemesanan  = htmlspecialchars($_POST["tanggal_pemesanan"]);
    $foto_barang = htmlspecialchars($_POST["foto_barang"]);

    $sql = "INSERT INTO data_customer VALUES ('','$nama','$jenis_barang','$jumlah_barang','$alamat','$metode_pembayaran','$tanggal_pemesanan','$foto_barang')";

    $result = mysqli_query($conn, $sql);

    if ( $result ) 
    {
        echo"
            <script>
                alert('Data berhasil ditambah');
                document.location.href = 'kelola.php';
            </script>
        ";
    }
    else
    {
        echo"
            <script>
                alert('Data gagal ditambah');
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
                        <td> <br> Nama Costumer</td>
                        <td> <br> :</td>
                        <td> <br> <input type="text" maxlength="100" name="nama" size="50" required=""></td>
                    </tr>
                    <tr>
                        <td> <br> Jenis Barang</td>
                        <td> <br> :</td>
                        <td> <br> <input type="radio" name="jenis_barang" value="Gitar Elektrik"> Gitar Elektrik
                                    <input type="radio" name="jenis_barang" value="Gitar Akustik"> Gitar Akustik</td>

                    </tr>
                    <tr>
                        <td> <br> Jumlah Barang</td>
                        <td> <br> :</td>
                        <td> <br> <input type="number" name="jumlah_barang" required="">
                    </tr>
                    <tr>
                        <td> <br> Alamat Costumer</td>
                        <td> <br> :</td>
                        <td> <br> <textarea name="alamat" required=""></textarea></td>
                    </tr>
                    <tr>
                        <td> <br> Metode Pembayaran</td>
                        <td> <br> :</td>
                        <td> <br> <input type="radio" name="metode_pembayaran" value="Credit" required=""> Credit &emsp;
                        <input type="radio" name="metode_pembayaran" value="Cash" required=""> Cash</td>
                    </tr>
                    <tr>
                        <td> <br> Tanggal Pemesanan </td>
                        <td> <br> :</td>
                        <td> <br> <input type="date" name="tanggal_pemesanan" >
                    </tr>
                    <tr>
                        <td> <br> Foto Barang </td>
                        <td> <br> :</td>
                        <td> <br> <input type = "file" name="foto_barang" required = "">
                    </tr>
                    <tr>
                        <td colspan="4"> <br> <br> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Order" name = "tambah"> | | <input type="reset" value="Reset" name = "batal"> </td>
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