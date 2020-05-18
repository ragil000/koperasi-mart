-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2020 at 08:53 PM
-- Server version: 10.3.22-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pold7656_db_koperasi`
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
(1, 'Polres', 'admin', '9700fcc9b4666c6e18135e073a98b3ff'),
(2, 'Ragil', 'rmy000', '202cb962ac59075b964b07152d234b70');

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
(25, 'Agus', 'agus', '202cb962ac59075b964b07152d234b70', '2020-02-14'),
(26, 'Namawin Samal', 'anggota', '2e2a21d40a9d946a226fa0619c2ceb11', '2020-02-14'),
(27, 'Dwiyanto', 'anggota', '05a5cf06982ba7892ed2a6d38fe832d6', '2020-02-14'),
(28, 'Muhamad Idris', 'ketua', '03bb49c4967e385423f1cf1af92dfcbc', '2020-02-16'),
(29, 'Dada Waskito', 'anggota', '2d95666e2649fcfc6e3af75e09f5adb9', '2020-02-16'),
(30, 'Sainudin', 'anggota', 'bc7316929fe1545bf0b98d114ee3ecb8', '2020-02-16'),
(31, 'Hajar astul aswat', 'anggota', '81dc9bdb52d04dc20036dbd8313ed055', '2020-02-16'),
(32, 'Deni dwiyanto', 'anggota', 'ea6b2efbdd4255a9f1b3bbc6399b58f4', '2020-02-16'),
(34, 'Agus nur priyanto', 'anggota', '4b2770de9b8e1d12df1be94c096cfc29', '2020-02-16'),
(35, 'Muh. Ali akbar', 'anggota', '81b073de9370ea873f548e31b8adc081', '2020-02-16'),
(36, 'Skerum fajar', 'anggota', 'd81f9c1be2e08964bf9f24b15f0e4900', '2020-02-16'),
(37, 'Erfiana enso', 'anggota', '250cf8b51c773f3f8dc8b4be867a9a02', '2020-02-16'),
(38, 'Asharelki', 'anggota', '68053af2923e00204c3ca7c6a3150cf7', '2020-02-16'),
(39, 'Harisman', 'anggota', 'f1c1592588411002af340cbaedd6fc33', '2020-02-16'),
(40, 'Siti saodah', 'anggota', '934b535800b1cba8f96a5d72f72f1611', '2020-02-16'),
(41, 'Komang sunarti', 'anggota', '550a141f12de6341fba65b0ad0433500', '2020-02-16'),
(42, 'Hasriani yasafat', 'anggota', '6074c6aa3488f3c2dddff2a7ca821aab', '2020-02-16'),
(43, 'Ernawati', 'anggota', 'ae5eb824ef87499f644c3f11a7176157', '2020-02-16'),
(44, 'Ningsih', 'anggota', '8aa903e40952a84bd7177ad2daeb5962', '2020-02-16'),
(45, 'Ramdan', 'anggota', '1e48c4420b7073bc11916c6c1de226bb', '2020-02-16'),
(46, 'Munika', 'anggota', '1bc0249a6412ef49b07fe6f62e6dc8de', '2020-02-16'),
(47, 'Muh. Akibar', 'anggota', '13205e4cafe4bb29ecece11630180308', '2020-02-16'),
(48, 'Erwin ', 'anggota', 'd0fb963ff976f9c37fc81fe03c21ea7b', '2020-02-16'),
(49, 'Samsudin', 'anggota', '05a70454516ecd9194c293b0e415777f', '2020-02-16'),
(50, 'Subuhan', 'anggota', '06964dce9addb1c5cb5d6e3d9838f733', '2020-02-16'),
(51, 'Rajit', 'anggota', 'f5c3dd7514bf620a1b85450d2ae374b1', '2020-02-16'),
(52, 'Dwi rahayu ningsih', 'anggota', '20d135f0f28185b84a4cf7aa51f29500', '2020-02-16'),
(53, 'Suheni', 'anggota', '87f4d79e36d68c3031ccf6c55e9bbd39', '2020-02-16'),
(54, 'Rahman Supri', 'anggota', '698d51a19d8a121ce581499d7b701668', '2020-02-16'),
(55, 'Baharudin', 'anggota', 'c5b2cebf15b205503560c4e8e6d1ea78', '2020-02-16'),
(56, 'Sumitra', 'anggota', '84ddfb34126fc3a48ee38d7044e87276', '2020-02-16'),
(57, 'Nurlisa Yuliani', 'anggota', 'dcf5218d992cbfef01e6c657344106be', '2020-02-16'),
(58, 'Validator', 'anggota', 'a7852c7a8198c77650d10fb3175db1f8', '2020-02-18');

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
(3, 'minuman'),
(4, 'makanan'),
(5, 'parfum'),
(14, 'kebutuhanpokok'),
(15, 'sirup');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_tb_keranjang` int(11) NOT NULL,
  `id_tb_produk` int(11) DEFAULT NULL,
  `id_tb_anggota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id_tb_keranjang`, `id_tb_produk`, `id_tb_anggota`) VALUES
(20, 30, 58);

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
  `tb_produk_deskripsi` text DEFAULT NULL,
  `tb_produk_gambar` varchar(150) DEFAULT NULL,
  `tb_produk_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_tb_produk`, `tb_produk_nama`, `tb_produk_harga_asli`, `tb_produk_harga_jual`, `tb_produk_jumlah_old`, `tb_produk_jumlah`, `tb_produk_deskripsi`, `tb_produk_gambar`, `tb_produk_tgl`) VALUES
(30, 'Yuzu Isotonic 350 Ml', 5500, 6000, 20, 20, 'Yuzu Isotonic merupakan minuman yang dapat menggantikan cairan tubuh yang hilang saat beraktivitas dan pada saat tubuh mengeluarkan keringat.', '1581696299.jpg', '2020-02-14'),
(31, 'Teh Pucuk 350 Ml', 4500, 5000, 10, 10, 'Teh pucuk harum merupakan minuman teh rasa melati dalam kemasan botol yang mudah untuk dibawa-bawa.', '1581696435.jpg', '2020-02-14'),
(32, 'Kopiko 78c', 6500, 7000, 5, 5, 'Kopiko 78c merupakan minuman kopi indonesia dari kopiko yang terbuat dari biji kopi pilihan.', '1581696527.jpg', '2020-02-14'),
(33, 'AQUA 600 ML', 4500, 5000, 25, 25, 'Aqua adalah salah satu merek air minum dalam kemasan.', '1581696631.jpg', '2020-02-14'),
(34, 'My Tea450 Ml', 7500, 8000, 11, 11, 'My Tea adalah minuman siap saji yang dihasilkan dari daun teh dengan kualitas terbaik yang tumbuh diperkebunan teh.', '1581696743.jpg', '2020-02-14'),
(36, 'Coca-Cola 390 Ml', 6500, 700, 27, 27, 'Coca-cola adalah minuman ringan berkarbonasi', '1581697149.jpg', '2020-02-14'),
(37, 'Fresh Tea Apple 500 Ml', 7500, 8000, 19, 19, 'Fresh Tea Apple yaitu minuman teh sia minum rasa apel yang unik dan asli dari bahan baku berkualitas.', '1581697362.jpg', '2020-02-14'),
(38, 'Pokka Teh Leci 450 Ml', 5500, 6000, 17, 17, 'Pokka Minuman Teh Lychee 350Ml Pokka lychee tea, Minuman teh rasa lychee. Dibuat dengan daun teh pilihan dan sari buah. Minuman lychee tea yang praktis untuk menghilangkan haus dan menyegarkan harimu.', '1581697823.jpg', '2020-02-14'),
(39, 'Teh Gelas 350 Ml', 4500, 5000, 16, 16, 'Teh Gelas kemasan botol dikemas menggunakan proses berteknologi tinggi PET Aseptic Cold Filling Technology dan Ultra High Temperature, yang memastikan produk tetap higienis dan rasa tetap terjaga.', '1581697940.jpg', '2020-02-14'),
(40, 'Karachi Habibah 75 Ml', 30500, 31000, 2, 2, 'BLACK PARFUM ORIGINAL UNTUK PRIA MURAH BERKUALITAS ', '1581750470.jpg', '2020-02-15'),
(41, 'Minyak Zaitun 75 Ml', 16500, 17000, 6, 6, 'Mustika Ratu Minyak Zaitun adalah salah satu produk dari Mustika Ratu. Terbuat dari minyak Biji Zaitun serta Aromatic Essential Rose dan Jasmine Oil yang berguna untuk perawatan kulit badan dan untuk pijat. Baik digunakan sebagai pelembab untuk melembutkan kulit kering dan bersisik agar kulit tampak halus dan lembut.', '1581750643.jpg', '2020-02-15'),
(42, 'Spalding Parfumed talc', 14500, 15000, 3, 3, 'Spalding Parfumed Talc (Bedak Ber-Parfum) 90gr Memberi kelembutan dan memelihara kulit andaterasa halus dan nyaman', '1581751074.jpg', '2020-02-15'),
(43, 'Classic pomade 75g', 19500, 20000, 7, 7, 'Pomade dengan gaya rambut classic yang tampak rapi dan berkilau. \r\nDiformulasikan dengan ekstrak ginseng untuk menjaga rambut tetap sehat dan kuat.', '1581751180.jpg', '2020-02-15'),
(44, 'Romeo Jupiter 100 Ml', 25500, 26000, 5, 5, 'Shantos Romeo Perfume Spray Jupiter\r\nPerfect combination of Woody, fresh, musky, green citrus, \r\nmaskulin, and bergamot, suitable for active and dynamic man.\r\nNetto 100 mL', '1581751904.jpg', '2020-02-15'),
(45, 'Sunslik 170 Ml', 15500, 16000, 7, 7, 'Rangkaian produk perawatan rambut dari Sunsilk untuk rambut hitam berkilau, halus & lembut, segar, bebas ketombe, bebas rontok, dan bervolume setiap hari!', '1581752183.jpg', '2020-02-15'),
(46, 'Shampo Clear 70 Ml', 11500, 12000, 2, 2, 'Rangkaian Shampo CLEAR untuk solusi anti ketombe bagi pria dan wanita. Ask The Expert. Solusi Masalah Rambut. Solusi Kulit Kepala Sehat.', '1581752374.jpg', '2020-02-15'),
(47, 'Parfume pall mall 75 Ml', 18000, 18500, 18, 18, 'Parfum Kualitas Export dengan keharuman yang exclusive. Tampilan mewah dan menawan. \r\nKeharuman yang khas dan tahan lama akan membuat anda menjadi lebih percaya diri.', '1581752541.jpg', '2020-02-15'),
(48, 'Parfum izzi 60 Ml', 10500, 11000, 7, 7, 'Rangkaian produk wewangian Body Mist dengan wangi yang menyegarkan dan tahan lama serta dibuat dari bahan perfume terbaik dan diproses secara halal. ', '1581752761.jpg', '2020-02-15'),
(51, 'margan coco pandan', 23500, 24000, 7, 7, 'Marjan Boudoin Syrup Cocopandan adalah sirup rasa kelapa pandan. Sirupnya kental dengan rasa yang mewah, murni, dan menyegarkan.', '1581754332.jpg', '2020-02-15'),
(52, 'margan melon 450 ml', 23500, 24000, 3, 3, 'Marjan Boudoin Syrup melon adalah sirup rasa melon . Sirupnya kental dengan rasa yang mewah, murni, dan menyegarkan.', '1581754398.jpg', '2020-02-15'),
(53, 'Sirup ABC 525 Ml', 20500, 21000, 31, 31, 'BC Syrup Squash Delight Orange adalah sirup dengan rasa Jeruk Florida yang segar', '1581754498.jpg', '2020-02-15'),
(54, 'Khong guan 300 g', 13000, 13500, 13, 13, 'Khong Guanc merupakan wafer dengan isi krim coklat yang \r\nkelezatan dan kerenyahannya pas di lidah Anda.', '1581754964.jpg', '2020-02-15'),
(55, 'Siip', 5500, 6000, 6, 6, 'Extrudad snack berbahan dasar jagung berbentuk stik dan bite size, \r\ndipadukan dengan bumbu jagung bakar melimpah.', '1581755107.jpg', '2020-02-15'),
(56, 'Qtela ', 5500, 6000, 14, 14, 'Keripik singkong Qtela terbuat dari singkong pilihan yang diolah secara modern \r\ndan higienis serta dipadukan dengan bumbu berkualitas sehingga \r\nmenjadikan Qtela sangat renyah dan nikmat.\r\n', '1581755391.jpg', '2020-02-15'),
(57, 'Garuda Rosta', 7500, 8000, 17, 17, 'Garuda kacang panggang rosta dengan rasa bawang', '1581755505.jpg', '2020-02-15'),
(58, 'Blue Band 1 Kg', 44500, 45000, 9, 9, 'Margarin spesial untuk kue penuh kelezatan butter, Blue Band Cake & Cookie merupakan \r\nperpaduan sempurna margarin dan butter, sehingga memberi kue-kue Ibu aroma harum \r\ndan rasa yang lembut khas butter, tanpa perlu menggunakan butter.', '1581819026.jpg', '2020-02-16'),
(59, 'Mila Serbaguna 1 Kg', 10500, 11000, 15, 15, 'Mila Tepung Serbaguna 1kg merupakan tepung terigu berkualitas yang dapat dipakai untuk membuat aneka variasi makanan. Dibuat menggunakan gandum berkualitas yang berasal dari Amerika, Kanada dan Australia serta diolah dengan mesin berteknologi tinggi yang berasal dari Switzerland untuk menghasilkan tepung terigu berkualitas. ', '1581819225.jpg', '2020-02-16'),
(60, 'Gulaku 1 kg', 14500, 15000, 10, 10, 'Gulaku Gula Tebu Premium Gula pasir putih produksi nasional yang berkualitas lebih putih dan lebih jernih. Terbuat dari tebu alami yang berkualitas.', '1581819375.jpg', '2020-02-16'),
(61, 'Kecap Manis Sedap 600 Ml', 16500, 17000, 13, 13, 'Kecap Manis Sedap 600 Ml, Kecap Sedaap ini diolah secara higienis melalui pemurnian ganda, sehingga menghasilkan kecap dengan cita rasa sempurna. Kecap sedaap ini lebih gurih, lembut, lezat dan meresap dengan dalam seluruh masakan Anda.', '1581819730.jpg', '2020-02-16');

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
(36, 30, 3),
(37, 31, 3),
(38, 32, 3),
(39, 33, 3),
(40, 34, 3),
(42, 36, 3),
(43, 37, 3),
(44, 38, 3),
(45, 39, 3),
(46, 40, 5),
(47, 41, 5),
(48, 42, 5),
(49, 43, 2),
(50, 44, 5),
(51, 45, 6),
(52, 46, 6),
(53, 47, 5),
(54, 48, 5),
(57, 51, 15),
(58, 52, 15),
(59, 53, 15),
(60, 54, 4),
(61, 55, 4),
(62, 56, 4),
(63, 57, 4),
(64, 58, 14),
(65, 59, 14),
(66, 60, 14),
(67, 61, 14);

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_simpanan`
--

CREATE TABLE `tb_simpanan` (
  `id_tb_simpanan` int(11) NOT NULL,
  `id_tb_anggota` int(11) NOT NULL,
  `tb_simpanan_jumlah` double NOT NULL,
  `tb_simpanan_jenis` enum('pokok','wajib') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_simpanan`
--

INSERT INTO `tb_simpanan` (`id_tb_simpanan`, `id_tb_anggota`, `tb_simpanan_jumlah`, `tb_simpanan_jenis`) VALUES
(1, 25, 200000, 'wajib'),
(2, 25, 170000, 'pokok');

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
-- Indexes for table `tb_simpanan`
--
ALTER TABLE `tb_simpanan`
  ADD PRIMARY KEY (`id_tb_simpanan`);

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
  MODIFY `id_tb_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_tb_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_tb_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_tb_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_tb_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tb_relasi_kategori`
--
ALTER TABLE `tb_relasi_kategori`
  MODIFY `id_tb_relasi_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tb_relasi_transaksi`
--
ALTER TABLE `tb_relasi_transaksi`
  MODIFY `id_tb_relasi_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29409;

--
-- AUTO_INCREMENT for table `tb_simpanan`
--
ALTER TABLE `tb_simpanan`
  MODIFY `id_tb_simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_tb_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
