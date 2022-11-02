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
    <h1>FORM TAMPILAN PEMESANAN</h1>
    <div class="tampilanform">

        <br>    
        <p><?php $nama = $_POST['nama'];echo "Nama Customer : ".$nama."<br>";?></p>
        <p><?php $barang =$_POST['gitar']; echo "Barang Yang Dipesan : ".$barang."<br>";?></p>
        <p><?php $jumlah = $_POST['jumlah']; echo "Jumlah Barang Yang Dipesan : ".$jumlah."<br>";?></p>
        <p><?php $alamat = $_POST['alamat'];echo "Alamat Pemesan : ".$alamat."<br>";?></p>
        <p><?php  $pembayaran = $_POST['pembayaran'];echo "Metode Pembayaran : ".$pembayaran."<br>";?></p>
        <p><?php $pemesanan = $_POST['pemesanan'];echo "Tanggal Pemesanan : ".$pemesanan."<br> <br>";?></p>
        

    </div>

<footer class="footer">
        <h3>Melody Guitar Store</h3>
        <p> Diatas merupakan posttest web pertemuan ke 2 yang sudah saya kerjakan
            <br>
            Sampai Jumpa Lagi !
            <br>
        </p>
        <h4>Copyright 2022 - Pranata Eka Pramudya</h4>
    </footer>
    <script src="main.js"></script>
</body>
</html>