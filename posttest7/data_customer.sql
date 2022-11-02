-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2022 pada 03.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_customer`
--

CREATE TABLE `data_customer` (
  `nomor` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `jumlah_barang` int(3) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `metode_pembayaran` varchar(30) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `foto_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_customer`
--

INSERT INTO `data_customer` (`nomor`, `nama`, `jenis_barang`, `jumlah_barang`, `alamat`, `metode_pembayaran`, `tanggal_pemesanan`, `foto_barang`) VALUES
(3, 'Ahmadd', 'Gitar Elektrik', 2, 'd', 'Cash', '2022-10-19', '1548665452144.jpg'),
(6, 'Abdul', 'Gitar Akustik', 2, 'Jalan Legian Bali', 'Credit', '2022-10-21', ''),
(7, 'Pranata Eka', 'Gitar Elektrik', 3, 'Jalan Poros Kebon Agung', 'Credit', '2021-11-10', ''),
(8, 'Eka', 'Gitar Akustik', 1, 'Jalan Itu', 'Cash', '2022-05-05', '1548665452144.jpg'),
(9, 'Iqbal', 'Gitar Akustik', 1, 'Jalan KarangAsam', 'Cash', '2020-11-11', 'pisang.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_customer`
--
ALTER TABLE `data_customer`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_customer`
--
ALTER TABLE `data_customer`
  MODIFY `nomor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
