<!DOCTYPE html>

<html>
<!-- <?php
    // session_start();
    // include 'koneksi.php';

    // if(!isset($_SESSION['login']))
    // {
        // header('index.php');
        // exit;
    // }
?> -->
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
                        <li><a href="kelola.php">Manage</a></li>
                        <li id="katalog"><a href="">Catalogue</a></li>
                        <li><a href="logout.php">Logout</a></li>
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
   
    <section>
        <div class="guitar-category">
            <h2 id="kategori1"> ELECTRIC GUITAR </h2>
        </div>
        <div class="image-row">
            
            <div class="image">
                <img src="Gambar/yamaha pac112j.jpg" alt="Yamaha Pacifica 112 J">
                <h3>Yamaha Pacifica 112 J</h3>
                <p>IDR 2.499.000,00</p>
                <h4><a href=""id="nama">Buy Now</a></h4>
            </div>
            <div class="image">
                <img src="Gambar/ibanez grx40.jpg" alt="Ibanez GRX-40">
                <h3>Ibanez GRX-40</h3>
                <p>IDR 2.699.000,00</p>
                <h4><a href=""id="nama">Buy Now</a></h4>
            </div>
            <div class="image">
                <img src="Gambar/Squier Affinity Strat.jpg" alt="Squier Affinity Stratocaster">
                <h3>Squier Affinity Stratocaster</h3>
                <p>IDR 3.199.000,00</p>
                <h4><a href=""id="nama">Buy Now</a></h4>
            </div>
            <div class="image">
                <img src="Gambar/Fender telecaster.jpg" alt="Fender Player Telecaster">
                <h3>Fender Player Telecaster</h3>
                <p>IDR 13.199.000,00</p>
                <h4><a href=""id="nama">Buy Now</a></h4>
            </div>
        </div>
    </section>
    <section>
        <div class="guitar-category">
            <h2 id="kategori2">Acoustic Guitar</h2>
        </div>
        <div class="image-row">
            
            <div class="image">
                <img src="Gambar/Cort AD810E OP.jpg" alt="Cort AD-810-E-OP">
                <h3>Cort AD-810-E-OP</h3>
                <p>IDR 1.199.000,00</p>
                <h4><a href=""id="nama">Buy Now</a></h4>
            </div>
            <div class="image">
                <img src="Gambar/Yamaha F310.jpg" alt="Yamaha F310">
                <h3>Yamaha F310</h3>
                <p>IDR 2.699.000,00</p>
                <h4><a href=""id="nama">Buy Now</a></h4>
            </div>
            <div class="image">
                <img src="Gambar/Martin D-12-01.jpg" alt="Martin D-12-01">
                <h3>Martin D-12-01</h3>
                <p>IDR 11.949.000,00</p>
                <h4><a href=""id="nama">Buy Now</a></h4>
            </div>
            <div class="image">
                <img src="Gambar/Taylor 214-CE.jpg" alt="Taylor 214-CE">
                <h3>Taylor 214-CE</h3>
                <p>IDR 18.249.000,00</p>
                <h4><a href=""id="nama">Buy Now</a></h4>
            </div>
        </div>
    </section>

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