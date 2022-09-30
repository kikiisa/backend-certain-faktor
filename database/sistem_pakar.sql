-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 30, 2022 at 02:48 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` char(50) NOT NULL,
  `full_name` varchar(75) NOT NULL,
  `email` char(75) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` enum('dokter','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `full_name`, `email`, `password`, `jabatan`) VALUES
(2, 'Bagus', 'Bagus Prihadi Putra', 'bajingan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(3, 'kikiisa', 'Mohamad Rizky Isa', 'kikiisa89@gmail.com', 'ce3c1b0fc6488705b66268b84dc3cf19', 'dokter');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` int(11) NOT NULL,
  `id_penyakit` int(13) NOT NULL,
  `nama_gejala` char(255) NOT NULL,
  `nilai_cf` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `id_penyakit`, `nama_gejala`, `nilai_cf`) VALUES
(18, 1, 'Keluarnya nanah dari penis/Vagina (tetesan cairan) berwarna putih, kuning, krem atau kehijau-hijauan).', '0.6'),
(19, 1, 'Bengkak dan kemerahan pada bukaan penis.', '0.68'),
(20, 1, 'Sakit tenggorokan yang datang terus-menerus.', '0.2'),
(21, 1, 'Rasa nyeri dan panas ketika buang air kecil atau ejakulasi.', '0.4'),
(22, 1, 'Munculnya rasa sakit dan bengkak di area sekitar testis.', '0.55'),
(23, 1, 'Demam.', '0.2'),
(24, 1, 'Rasa terbakar atau panas di tenggorokan (ketika sudah melakukan oral seks).', '0.45'),
(25, 3, 'Keluarnya nanah dari penis/Vagina (tetesan cairan) berwarna putih, kuning, krem atau kehijau-hijauan).', '0.58'),
(26, 3, 'Rasa nyeri dan panas ketika buang air kecil atau ejakulasi.', '0.2'),
(27, 3, 'Munculnya rasa sakit dan bengkak di area sekitar testis.', '0.6'),
(28, 3, 'Munculnya rasa sakit dan bengkak di area sekitar testis.', '0.6'),
(29, 3, 'Demam.', '0.37'),
(30, 3, 'Rasa gatal atau rasa tidak nyaman di daerah penis atau Vagina', '0.49'),
(31, 3, 'Pembengkakan kelenjar getah bening.', '0.66'),
(32, 3, 'Rasa nyeri ketika melakukan hubungan seksual.', '0.6'),
(33, 3, 'Keputihan yang tidak biasa', '0.79'),
(34, 4, 'Rasa nyeri dan panas ketika buang air kecil atau ejakulasi.', '0.58'),
(36, 4, 'Rasa gatal atau rasa tidak nyaman di daerah penis atau Vagina', '0.4'),
(38, 4, 'Demam.', '0.38'),
(39, 4, 'Pembengkakan kelenjar getah bening.', '0.48'),
(40, 4, 'Koreng atau luka kering', '0.79'),
(41, 5, 'Sakit tenggorokan yang datang terus-menerus.', '0.52'),
(42, 5, 'Rasa nyeri dan panas ketika buang air kecil atau ejakulasi.', '0.4'),
(43, 5, 'Munculnya bengkak kecil di daerah kemaluan.', '0.65'),
(44, 5, 'Nyeri otot dan sendi', '0.38'),
(45, 5, 'Ruam coklat kemerahan', '0.6'),
(46, 5, 'Demam.', '0.28'),
(47, 5, 'Rasa gatal atau rasa tidak nyaman di daerah penis atau Vagina', '0.56'),
(48, 5, 'Penurunan berat badan', '0.57'),
(49, 5, 'Tubuh terasa lemah dan tidak nyaman', '0.6'),
(50, 5, 'Ada luka berisi nanah atau luka lembab, seperti kutil.', '0.8'),
(51, 6, 'Bengkak dan kemerahan pada bukaan penis.', '0.67'),
(52, 6, 'Rasa nyeri dan panas ketika buang air kecil atau ejakulasi.', '0.43'),
(53, 6, 'Rasa gatal atau rasa tidak nyaman di daerah penis atau Vagina', '0.59'),
(54, 6, 'Bercak putih di ujung penis', '0.89');

-- --------------------------------------------------------

--
-- Table structure for table `tb_passien`
--

CREATE TABLE `tb_passien` (
  `id_passien` int(11) NOT NULL,
  `nama_passien` varchar(75) NOT NULL,
  `gender` enum('pria','wanita') NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat_passien` text NOT NULL,
  `diagnosa_nilai` char(13) NOT NULL,
  `nama_penyakit` varchar(75) NOT NULL,
  `usia` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_passien`
--

INSERT INTO `tb_passien` (`id_passien`, `nama_passien`, `gender`, `telepon`, `alamat_passien`, `diagnosa_nilai`, `nama_penyakit`, `usia`) VALUES
(10, 'Mohamad Irfan Arsyad', 'pria', '', 'Suwawa ', '70', 'Klamidia', ''),
(11, 'Irvan Maulana', 'pria', '', 'Suwawa', '84', 'Klamidia', ''),
(12, 'Ayu Nadjamudin', 'wanita', '', 'suwawa', '82', 'Sifilis', ''),
(13, 'Mohamad Adin Pakaya', 'pria', '', 'suwawa', '71', 'Sifilis', ''),
(14, 'Mohamad Ayidin Lateka', 'pria', '08239409094', 'Limboto Bolihuangga', '71', 'Sifilis', ''),
(15, 'unknown', 'pria', 'unknown', 'suwawa', '80', 'Klamidia', ''),
(16, 'unknown', 'wanita', 'unknown', 'suwawa', '82', 'herpes', ''),
(17, 'unknown', 'wanita', 'unknown', 'jakarta', '70', 'herpes', ''),
(18, 'unknown', 'wanita', 'unknown', 'Pinogu', '78', 'Sifilis', ''),
(19, 'unknown', 'wanita', 'unknown', 'test', '100', 'Klamidia', ''),
(20, 'unknown', 'pria', 'unknown', 'testing', '60', 'herpes', ''),
(21, 'unknown', 'pria', 'unknown', 'Suwawa', '67', 'Klamidia', ''),
(22, 'unknown', 'pria', 'unknown', 'suwawa', '62', 'Klamidia', ''),
(23, 'unknown', 'pria', 'unknown', 'suwawa', '85', 'herpes', ''),
(24, 'unknown', 'pria', 'unknown', 'moutong', '72', 'Klamidia', ''),
(25, 'unknown', 'pria', 'unknown', 'Suwawa', '47', 'Gonore', '15-20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(75) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `nama_penyakit`, `description`) VALUES
(1, 'Gonore', '<h3><strong>Pengertian Penyakit Gonore</strong></h3>\r\n\r\n<p>Gonore atau kencing nanah adalah suatu penyakit menular seksual yang dapat terjadi pada pria maupun wanita. Penyakit ini disebabkan oleh bakteri bernama Neisseria Gonorrhoeae atau Gonococcus yang terbilang sangat menular. Bakteri tersebut berbahaya karena dapat menyerang bagian dubur, serviks (leher rahim), uretra (saluran kencing dan sperma), mata, dan tenggorokan.</p>\r\n\r\n<h3><strong>Pencegahan Penyakit Gonore</strong></h3>\r\n\r\n<ol>\r\n	<li>Gunakan kondom saat berhubungan sex</li>\r\n	<li>Batasi Jumlah pasangan Sex</li>\r\n	<li>Tidak berganti ganti pasangan</li>\r\n	<li>Tidak melakukan hubungan sex diluar nikah</li>\r\n</ol>\r\n\r\n<h3><strong>Penanganan Penyakit Gonore</strong></h3>\r\n\r\n<ol>\r\n	<li>Pemberian suntikan antibiotik dan obat oral pada pengindap dan pasanganya.</li>\r\n	<li>Tidak di anjurkan semenatara waktu untuk melakukan hubungan seksual sampai perawatan di nyatakan sembuh</li>\r\n	<li>Melakukan pemeriksaan rutin 1-2 minggu untuk memastikan bakterinya telah hilang sepenuhnya</li>\r\n</ol>\r\n\r\n<h3>&nbsp;</h3>\r\n'),
(3, 'Klamidia', '<h3><strong>Pencegahan Penyakit Klamidia</strong></h3>\r\n\r\n<ol>\r\n	<li>Gunakan kondom saat berhubungan sex</li>\r\n	<li>Batasi Jumlah pasangan Sex</li>\r\n	<li>Tidak berganti ganti pasangan</li>\r\n	<li>Tidak melakukan hubungan sex diluar nikah</li>\r\n</ol>\r\n\r\n<h3><strong>Penanganan Penyakit Klamidia</strong></h3>\r\n\r\n<ol>\r\n	<li>Pemberian suntikan antibiotik .</li>\r\n	<li>Tidak di anjurkan semenatara waktu untuk melakukan hubungan seksual sampai perawatan di nyatakan sembuh</li>\r\n	<li>Melakukan pemeriksaan rutin 1-2 minggu untuk memastikan bakterinya telah hilang sepenuhnya</li>\r\n</ol>\r\n'),
(4, 'herpes', '<h3><strong>Pencegahan Penyakit Herpes</strong></h3>\r\n\r\n<ol>\r\n	<li>Gunakan kondom saat berhubungan sex</li>\r\n	<li>Bersikap terbuka</li>\r\n	<li>Tidak berganti ganti pasangan</li>\r\n	<li>Tidak melakukan hubungan sex diluar nikah</li>\r\n	<li>Hindari berhubungan intim dengan seseorang yang memiliki luka pada kelamin</li>\r\n</ol>\r\n\r\n<h3><strong>Penanganan Penyakit Herpes</strong></h3>\r\n\r\n<ol>\r\n	<li>Pemberian obat-obatan antivirus</li>\r\n	<li>Kultur virus untuk mendeteksi virus herpes</li>\r\n	<li>Pemeriksaan Tzank mengambil sampel dari ruam kulit</li>\r\n	<li>Tes antibodi</li>\r\n</ol>\r\n'),
(5, 'Sifilis', '<h3><strong>Pencegahan Penyakit Sipilis</strong></h3>\r\n\r\n<ol>\r\n	<li>Gunakan kondom saat berhubungan sex</li>\r\n	<li>Tidak berganti ganti pasangan</li>\r\n	<li>Tidak melakukan hubungan sex diluar nikah</li>\r\n	<li>Melakukan pemeriksaan atau skrining terhadap penyakit&nbsp; sifilis</li>\r\n</ol>\r\n\r\n<h3><strong>Penanganan Penyakit Sipilis</strong></h3>\r\n\r\n<ol>\r\n	<li>Pemberian antibiotik yang dosisnya sesuai kondisi penderita</li>\r\n	<li>Selama pengobatan tidak boleh melakukan hubungan seksual</li>\r\n	<li>Bersikap Terbuka</li>\r\n	<li>Melakukan tes darah secara berkala.</li>\r\n</ol>\r\n'),
(6, 'Infeksi jamur', ''),
(7, 'Trikomoniasis', ''),
(8, 'Vulvovaginitis', ''),
(9, 'Servisitis', ''),
(10, 'Kutil Kelamin', ''),
(11, 'HIV', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `nama_pertanyaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `nama_pertanyaan`) VALUES
(5, 'Keluarnya nanah dari penis/Vagina (tetesan cairan) berwarna putih, kuning, krem atau kehijau-hijauan).'),
(6, 'Bengkak dan kemerahan pada bukaan penis.'),
(7, 'Sakit tenggorokan yang datang terus-menerus.'),
(8, 'Rasa nyeri dan panas ketika buang air kecil atau ejakulasi.'),
(9, 'Munculnya rasa sakit dan bengkak di area sekitar testis.'),
(10, 'Demam.'),
(11, 'Rasa terbakar atau panas di tenggorokan (ketika sudah melakukan oral seks).'),
(12, 'Rasa gatal atau rasa tidak nyaman di daerah penis atau Vagina '),
(13, 'Pembengkakan kelenjar getah bening.'),
(14, 'Rasa nyeri ketika melakukan hubungan seksual.'),
(15, 'Keputihan yang tidak biasa'),
(16, 'Koreng atau luka kering '),
(17, 'Sakit kepala.'),
(18, 'Ada luka berisi nanah atau luka lembab, seperti kutil.'),
(19, 'Munculnya bengkak kecil di daerah kemaluan.'),
(20, 'Nyeri otot dan sendi'),
(21, 'Ruam coklat kemerahan '),
(22, 'Penurunan berat badan'),
(23, 'Tubuh terasa lemah dan tidak nyaman'),
(24, 'Rambut rontok, terutama pada alis, bulu mata, dan kulit kepala.'),
(25, 'Ada luka kecil terbuka pada selaput lendir pada lapisan kulit.'),
(26, 'Bercak putih di ujung penis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tb_passien`
--
ALTER TABLE `tb_passien`
  ADD PRIMARY KEY (`id_passien`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_passien`
--
ALTER TABLE `tb_passien`
  MODIFY `id_passien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
