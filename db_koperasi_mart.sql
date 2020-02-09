-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 12:04 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_koperasi_mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_tb_akun` int(11) NOT NULL,
  `tb_akun_nama` varchar(35) DEFAULT NULL,
  `tb_akun_username` varchar(15) DEFAULT NULL,
  `tb_akun_password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_tb_akun`, `tb_akun_nama`, `tb_akun_username`, `tb_akun_password`) VALUES
(1, 'Polres', 'admin', '9700fcc9b4666c6e18135e073a98b3ff');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_tb_anggota` int(11) NOT NULL,
  `tb_anggota_nama` varchar(30) DEFAULT NULL,
  `tb_anggota_username` varchar(15) DEFAULT NULL,
  `tb_anggota_password` varchar(32) DEFAULT NULL,
  `tb_anggota_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_tb_anggota`, `tb_anggota_nama`, `tb_anggota_username`, `tb_anggota_password`, `tb_anggota_tgl`) VALUES
(3, 'anggota', 'anggota', '202cb962ac59075b964b07152d234b70', '2020-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_tb_kategori` int(11) NOT NULL,
  `tb_kategori_nama` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_tb_kategori`, `tb_kategori_nama`) VALUES
(1, 'wanita'),
(2, 'laki - laki');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_tb_keranjang` int(11) NOT NULL,
  `id_tb_produk` int(11) DEFAULT NULL,
  `id_tb_anggota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_tb_produk` int(11) NOT NULL,
  `tb_produk_nama` varchar(25) DEFAULT NULL,
  `tb_produk_harga_asli` int(11) DEFAULT NULL,
  `tb_produk_harga_jual` int(11) DEFAULT NULL,
  `tb_produk_jumlah_old` int(11) DEFAULT NULL,
  `tb_produk_jumlah` int(11) DEFAULT NULL,
  `tb_produk_deskripsi` text,
  `tb_produk_gambar` varchar(150) DEFAULT NULL,
  `tb_produk_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_tb_produk`, `tb_produk_nama`, `tb_produk_harga_asli`, `tb_produk_harga_jual`, `tb_produk_jumlah_old`, `tb_produk_jumlah`, `tb_produk_deskripsi`, `tb_produk_gambar`, `tb_produk_tgl`) VALUES
(18, 'Miyako Dispenser', 180000, 200000, 4, 4, 'Model dispenser ini memberikan kemudahan bagi pengguna terutama saat hendak mengganti galon yang telah habis airnya. Pengguna tidak perlu kerepotan mengangkat galon yang penuh dengan air.', '1581283360.jpg', '2020-02-09'),
(19, 'Setrika Kris', 100000, 130000, 6, 6, 'Setrika 300 Watt memiliki lapisan heating element yang terbuat dari bahan yang berkualitas, dilapisi dnegan lapisan anti lengket dan lebih kuat.', '1581283441.jpg', '2020-02-09'),
(20, 'Sepatu Panarybody', 250000, 300000, 3, 3, 'Sepatu Sneakers Panarybody Official Shop dikategorikan sepatu untuk Pria, Sepatu Import dari Cina, dan langsung dibuat dari pabrik, barang pertama, kualitas sangat baik, harga terjangkau.', '1581283558.jpg', '2020-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_relasi_kategori`
--

CREATE TABLE `tb_relasi_kategori` (
  `id_tb_relasi_kategori` int(11) NOT NULL,
  `id_tb_produk` int(11) DEFAULT NULL,
  `id_tb_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_relasi_kategori`
--

INSERT INTO `tb_relasi_kategori` (`id_tb_relasi_kategori`, `id_tb_produk`, `id_tb_kategori`) VALUES
(20, 18, 1),
(21, 19, 1),
(22, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_relasi_transaksi`
--

CREATE TABLE `tb_relasi_transaksi` (
  `id_tb_relasi_transaksi` int(11) NOT NULL,
  `id_tb_transaksi` int(11) DEFAULT NULL,
  `id_tb_produk` int(11) DEFAULT NULL,
  `id_tb_anggota` int(11) DEFAULT NULL,
  `tb_relasi_transaksi_banyak` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_relasi_transaksi`
--

INSERT INTO `tb_relasi_transaksi` (`id_tb_relasi_transaksi`, `id_tb_transaksi`, `id_tb_produk`, `id_tb_anggota`, `tb_relasi_transaksi_banyak`) VALUES
(29404, 4, 18, 3, 2),
(29405, 4, 19, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_tb_transaksi` int(11) NOT NULL,
  `tb_transaksi_kode` varchar(55) DEFAULT NULL,
  `tb_transaksi_alamat` varchar(250) DEFAULT NULL,
  `tb_transaksi_kredit_old` int(11) DEFAULT NULL,
  `tb_transaksi_kredit` int(11) DEFAULT NULL,
  `tb_transaksi_metode` varchar(15) DEFAULT NULL,
  `tb_transaksi_nama` varchar(35) DEFAULT NULL,
  `tb_transaksi_bayar` int(11) DEFAULT NULL,
  `tb_transaksi_ket` varchar(15) DEFAULT NULL,
  `tb_transaksi_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_tb_transaksi`, `tb_transaksi_kode`, `tb_transaksi_alamat`, `tb_transaksi_kredit_old`, `tb_transaksi_kredit`, `tb_transaksi_metode`, `tb_transaksi_nama`, `tb_transaksi_bayar`, `tb_transaksi_ket`, `tb_transaksi_tgl`) VALUES
(4, 'KD-1581286797', '', 0, 0, 'transfer', 'anggota', 530000, 'masuk', '2020-02-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_tb_akun`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_tb_anggota`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_tb_kategori`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_tb_keranjang`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_tb_produk`);

--
-- Indexes for table `tb_relasi_kategori`
--
ALTER TABLE `tb_relasi_kategori`
  ADD PRIMARY KEY (`id_tb_relasi_kategori`);

--
-- Indexes for table `tb_relasi_transaksi`
--
ALTER TABLE `tb_relasi_transaksi`
  ADD PRIMARY KEY (`id_tb_relasi_transaksi`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_tb_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_tb_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_tb_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_tb_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_tb_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_tb_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_relasi_kategori`
--
ALTER TABLE `tb_relasi_kategori`
  MODIFY `id_tb_relasi_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_relasi_transaksi`
--
ALTER TABLE `tb_relasi_transaksi`
  MODIFY `id_tb_relasi_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29406;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_tb_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
