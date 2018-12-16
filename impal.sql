-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Des 2018 pada 23.05
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nama`, `email`, `username`, `password`) VALUES
('daryannor', 'daryannor@gmail.com', 'root', 'root');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_makanan`
--

CREATE TABLE `daftar_makanan` (
  `id_makanan` int(3) NOT NULL,
  `makanan` varchar(50) NOT NULL,
  `harga_makanan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_makanan`
--

INSERT INTO `daftar_makanan` (`id_makanan`, `makanan`, `harga_makanan`) VALUES
(1, 'Ayam Goreng', 8000),
(2, 'Ayam Geprek', 10000),
(3, 'Ayam Rica-Rica', 11000),
(4, 'Ayam Penyet', 11000),
(5, 'Telur Dadar', 4000),
(6, 'Telur Mata Sapi', 4000),
(7, 'Tahu Goreng', 1000),
(8, 'Orek Tempe', 1000),
(9, 'Tempe Goreng', 1000),
(10, 'Lele Goreng', 7000),
(11, 'Bawal Goreng', 7000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_minuman`
--

CREATE TABLE `daftar_minuman` (
  `id_minuman` int(3) NOT NULL,
  `minuman` varchar(50) NOT NULL,
  `harga_minuman` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_minuman`
--

INSERT INTO `daftar_minuman` (`id_minuman`, `minuman`, `harga_minuman`) VALUES
(1, 'Ice Tea', 2500),
(2, 'Hot Tea', 2500),
(3, 'Lemon Tea', 5000),
(4, 'Ice Coklat', 6000),
(5, 'Hot Coklat', 5500),
(6, 'Kopi ABC', 4000),
(7, 'Kopi Good Day', 4000),
(8, 'Apple Juice', 7000),
(9, 'Mango Juice', 7500),
(10, 'Strawberry Juice', 7000),
(11, 'Grape Juice', 7500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(5) NOT NULL,
  `food` longtext NOT NULL,
  `quant_food` int(5) NOT NULL,
  `drink` longtext NOT NULL,
  `quant_drink` int(5) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `total_harga` int(15) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `food`, `quant_food`, `drink`, `quant_drink`, `date`, `location`, `total_harga`, `username`) VALUES
(12, 'Ayam Geprek;', 2, 'Hot Tea;', 2, '2018-12-04', 'a', 25000, '0'),
(13, 'Ayam Goreng;Ayam Geprek;Ayam Rica-Rica;Ayam Penyet;Telur Dadar;Telur Mata Sapi;Tahu Goreng;Orek Tempe;Tempe Goreng;Lele Goreng;Bawal Goreng;', 515, 'Ice Tea;Hot Tea;Lemon Tea;Ice Coklat;Hot Coklat;Kopi ABC;Kopi Good Day;Apple Juice;Mango Juice;Strawberry Juice;Grape Juice;', 528, '1983-09-02', 'Lorem voluptatum aspernatur culpa qui esse omnis e', 5939000, 'bowo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `id_pesanan` int(5) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pesanan`, `tanggal_transaksi`, `total`) VALUES
(1, 12, '2018-12-04', 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`name`, `email`, `username`, `password`) VALUES
('admin', 'admin@gmail.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_makanan`
--
ALTER TABLE `daftar_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `daftar_minuman`
--
ALTER TABLE `daftar_minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_makanan`
--
ALTER TABLE `daftar_makanan`
  MODIFY `id_makanan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `daftar_minuman`
--
ALTER TABLE `daftar_minuman`
  MODIFY `id_minuman` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
