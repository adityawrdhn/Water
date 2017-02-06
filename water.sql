-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jun 2015 pada 04.43
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `water`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_macamtipe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pakar`
--

CREATE TABLE IF NOT EXISTS `tb_pakar` (
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `FOTO` varchar(100) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pakar`
--

INSERT INTO `tb_pakar` (`USERNAME`, `PASSWORD`, `NAMA`, `FOTO`) VALUES
('admin', 'admin', 'ADMIN', 'admin.jpg'),
('adit', 'adit', 'Adit', 'admin.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE IF NOT EXISTS `tb_pengguna` (
  `ID_PENGGUNA` int(10) NOT NULL AUTO_INCREMENT,
  `NAMA` varchar(50) NOT NULL,
  `PEKERJAAN` varchar(50) NOT NULL,
  `JENIS_KELAMIN` varchar(50) NOT NULL,
  `UMUR` varchar(5) NOT NULL,
  `WAKTU_TES` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TIPE` varchar(50) NOT NULL,
  `AFFECT` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_PENGGUNA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`ID_PENGGUNA`, `NAMA`, `PEKERJAAN`, `JENIS_KELAMIN`, `UMUR`, `WAKTU_TES`, `TIPE`, `AFFECT`) VALUES
(12, 'Adit', 'Mahasiswa', 'Laki-Laki', '21', '2016-06-01 15:03:51', 'Fresh, very soft water', 'Ideal drinking water from reverse osmosis with excellent taste. Prefer to fresh water fish, Aquatic '),
(17, 'Aditt', 'Petani', 'Laki-Laki', '23', '2016-06-01 15:38:30', 'Fresh, very soft water', 'Excellent drinking water from carbon filtration, mountain springs. Prefer to fresh water fish, Aquat'),
(18, 'Aditt', 'Tukang Sepik', 'Laki-Laki', '21', '2016-06-01 00:16:20', 'Fresh, very soft water', 'Ideal drinking water from reverse osmosis with excellent taste. Prefer to fresh water fish, Aquatic ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sayap`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal`
--
CREATE TABLE IF NOT EXISTS `tb_soal` (
  `ID_SOAL` int(10) NOT NULL AUTO_INCREMENT,
  `SOAL` varchar(200) NOT NULL,
  `TIPE` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_SOAL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data untuk tabel `tb_soal`
--

INSERT INTO `tb_soal` (`ID_SOAL`, `SOAL`, `TIPE`) VALUES
(1, 'Masukkan Nilai Ph.\n', ''),
(2, 'Masukkan Nilai TDS.\n', ''),
(3, 'Masukkan Nilai EC.\n', ''),
(4, 'Masukkan Nilai T.\n', '');


-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tipe`
--

CREATE TABLE IF NOT EXISTS `tb_tipe` (
  `ID_TIPE` int(11) NOT NULL,
  `TIPE` varchar(100) NOT NULL,
  `AFFECT` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_TIPE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tipe`
--

INSERT INTO `tb_tipe` (`ID_TIPE`, `NAMA`, `AFFECT`) VALUES
(1, 'Fresh, very soft water', 'Ideal drinking water from reverse osmosis with excellent taste. Prefer to fresh water fish, Aquatic'),
(2, 'Fresh, very soft water', 'Excellent drinking water from carbon filtration, mountain springs. Prefer to fresh water fish, Aquat'),
(3, 'Fresh Water', 'Excellent tap water with typical human taste Prefer to fresh water fish, Aquatic life.'),
(4, 'Fresh Water with a Bitter Taste, Mere Acidic Water, Surface Water', 'Acceptable for fresh water fish, plants and cattle'),
(5, 'Neutral Water, Fresh and Soft Water', 'Excellent and ideal drinking water from reverse osmosis, Acceptable for fresh water fish'),
(6, 'Neutral Water, Fresh and Soft Water', 'Ideal bottled drinking water from carbon filtration, Acceptable for fresh water fish'),
(7, 'Fresh Water and Neutral Water', 'Excellent tap water with typical human taste (medium to hard), Prefer to fresh water fish'),
(8, 'Hard to Very Hard and Good Fresh Water', 'Unpleasant taste, presence no serious burden to live stock, Prefer to fresh water fish'),
(9, 'Fair Fresh Water', 'Presence no serious burden to live stock'),
(10, 'Poor Fresh Water', 'Presence no serious burden to live stock'),
(11, 'Severe Acidic Water', 'Bitter metallic taste and corrosion'),
(12, 'Acid Water', 'If the Temperature in degree Celcius increases it means the pH level will be decreased. As a result'),
(13, 'Alkaline Water', 'If the Temperature in degree Celcius decreases it means the pH level will be increased. As a result'),
(14, 'Slightly Saline Water, Mildly Basic', 'Unacceptable for live stock, should affect health or performance but may cause temporary mild diarrh')
(15, 'Moderately Saline Water, Mildly Basic', 'May cause diarrhea'),
(16, 'Brackish to Highly Brackish Water, Mildly Basic', 'Safety for adult ruminants, avoided for Cattles and Baby Calves'),
(17, 'Saline to Highly Saline Water, Mildly Basic', 'Should be avoided, young animals can be affected'),
(18, 'Sea Water, contains high degree of salts', 'Acceptable for sea fish, sea animals and sea plants'),
(19, 'Brine, Mildly Basic', 'Unsafe, Should not be used under any conditions'),
(20, 'Severely Alkaline Water, Hard Water', 'Soda like taste, should be avoided'),
(21, 'Rain Water', 'If pH is <5.2 it may cause acid rain');

-- --------------------------------------------------------

--
-- Table structure for table `data_training`
--

CREATE TABLE `tb_training` (
  `NO` int(11) NOT NULL,
  `PH` int(10) NOT NULL,
  `TDS` bigint(255) NOT NULL,
  `EC` bigint(255) NOT NULL,
  `T` int(100) NOT NULL,
  `TIPE` varchar(100) NOT NULL,
  `AFFECT` varchar(100) NOT NULL,
  `CLASS` varchar(20) NOT NULL,
  PRIMARY KEY(`NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_training`
--

INSERT INTO `tb_training` (`N0`, `PH`, `TDS`, `EC`, `T`, `TIPE`, `AFFECT`, `CLASS`) VALUES
(1, 7, 0, 42, 21, 'Fresh, Very soft water', 'Ideal drinking water from reverse osmosis with excellent taste. Prefer to fresh water fish, Aquatic ', '1'),
(2, 7, 13, 52, 24, 'Fresh, Very soft water', 'Ideal drinking water from reverse osmosis with excellent taste. Prefer to fresh water fish, Aquatic ', '1'),
(3, 7, 26, 62, 27, 'Fresh, Very soft water', 'Ideal drinking water from reverse osmosis with excellent taste. Prefer to fresh water fish, Aquatic ', '1'),
(4, 7, 39, 72, 30, 'Fresh, Very soft water', 'Ideal drinking water from reverse osmosis with excellent taste. Prefer to fresh water fish, Aquatic ', '1'),
(5, 7, 50, 82, 32, 'Fresh, Very soft water', 'Ideal drinking water from reverse osmosis with excellent taste. Prefer to fresh water fish, Aquatic ', '1'),
(6, 7, 50, 82, 21, 'Fresh, Very soft water', 'Excellent drinking water from carbon filtration, mountain springs. Prefer to fresh water fish, Aquat', '2'),
(7, 7, 70, 123, 24, 'Fresh, Very soft water', 'Excellent drinking water from carbon filtration, mountain springs. Prefer to fresh water fish, Aquat', '2'),
(8, 7, 90, 164, 27, 'Fresh, Very soft water', 'Excellent drinking water from carbon filtration, mountain springs. Prefer to fresh water fish, Aquat', '2'),
(9, 7, 110, 205, 30, 'Fresh, Very soft water', 'Excellent drinking water from carbon filtration, mountain springs. Prefer to fresh water fish, Aquat', '2'),
(10, 7, 130, 250, 32, 'Fresh, Very soft water', 'Excellent drinking water from carbon filtration, mountain springs. Prefer to fresh water fish, Aquat', '2'),
(11, 7, 150, 250, 21, 'Fresh Water', 'Excellent tap water with typical human taste Prefer to fresh water fish, Aquatic life.', '3'),
(12, 7, 188, 315, 24, 'Fresh Water', 'Excellent tap water with typical human taste Prefer to fresh water fish, Aquatic life.', '3'),
(13, 7, 226, 380, 27, 'Fresh Water', 'Excellent tap water with typical human taste Prefer to fresh water fish, Aquatic life.', '3'),
(14, 7, 264, 445, 30, 'Fresh Water', 'Excellent tap water with typical human taste Prefer to fresh water fish, Aquatic life.', '3'),
(15, 7, 300, 500, 32, 'Fresh Water', 'Excellent tap water with typical human taste Prefer to fresh water fish, Aquatic life.', '3'),
(16, 7, 300, 500, 21, 'Fresh Water with a Bitter Taste, Mere Acidic Water, Surface Water', 'Acceptable for fresh water fish, plants and cattle', '4'),
(17, 7, 525, 875, 24, 'Fresh Water with a Bitter Taste, Mere Acidic Water, Surface Water', 'Acceptable for fresh water fish, plants and cattle', '4'),
(18, 7, 750, 1250, 27, 'Fresh Water with a Bitter Taste, Mere Acidic Water, Surface Water', 'Acceptable for fresh water fish, plants and cattle', '4'),
(19, 7, 975, 1625, 30, 'Fresh Water with a Bitter Taste, Mere Acidic Water, Surface Water', 'Acceptable for fresh water fish, plants and cattle', '4'),
(20, 7, 1200, 2000, 32, 'Fresh Water with a Bitter Taste, Mere Acidic Water, Surface Water', 'Acceptable for fresh water fish, plants and cattle', '4'),
(21, 7, 0, 42, 21, 'Neutral Water, Fresh and Soft Water', 'Excellent and ideal drinking water from reverse osmosis, Acceptable for fresh water fish', '5'),
(22, 7, 13, 52, 24, 'Neutral Water, Fresh and Soft Water', 'Excellent and ideal drinking water from reverse osmosis, Acceptable for fresh water fish', '5'),
(23, 7, 25, 62, 27, 'Neutral Water, Fresh and Soft Water', 'Excellent and ideal drinking water from reverse osmosis, Acceptable for fresh water fish', '5'),
(24, 7, 38, 72, 30, 'Neutral Water, Fresh and Soft Water', 'Excellent and ideal drinking water from reverse osmosis, Acceptable for fresh water fish', '5'),
(25, 8, 50, 82, 32, 'Neutral Water, Fresh and Soft Water', 'Excellent and ideal drinking water from reverse osmosis, Acceptable for fresh water fish', '5'),
(26, 7, 50, 82, 21, 'Neutral Water, Fresh and Soft Water', 'Ideal bottled drinking water from carbon filtration, Acceptable for fresh water fish', '6'),
(27, 7, 75, 124, 24, 'Neutral Water, Fresh and Soft Water', 'Ideal bottled drinking water from carbon filtration, Acceptable for fresh water fish', '6'),
(28, 7, 100, 166, 27, 'Neutral Water, Fresh and Soft Water', 'Ideal bottled drinking water from carbon filtration, Acceptable for fresh water fish', '6'),
(29, 7, 125, 208, 30, 'Neutral Water, Fresh and Soft Water', 'Ideal bottled drinking water from carbon filtration, Acceptable for fresh water fish', '6'),
(30, 8, 150, 250, 32, 'Neutral Water, Fresh and Soft Water', 'Ideal bottled drinking water from carbon filtration, Acceptable for fresh water fish', '6'),
(31, 7, 150, 250, 21, 'Fresh Water and Neutral Water', 'Excellent tap water with typical human taste (medium to hard), Prefer to fresh water fish', '7'),
(32, 7, 188, 313, 24, 'Fresh Water and Neutral Water', 'Excellent tap water with typical human taste (medium to hard), Prefer to fresh water fish', '7'),
(33, 7, 225, 375, 27, 'Fresh Water and Neutral Water', 'Excellent tap water with typical human taste (medium to hard), Prefer to fresh water fish', '7'),
(34, 7, 263, 438, 30, 'Fresh Water and Neutral Water', 'Excellent tap water with typical human taste (medium to hard), Prefer to fresh water fish', '7'),
(35, 8, 300, 500, 32, 'Fresh Water and Neutral Water', 'Excellent tap water with typical human taste (medium to hard), Prefer to fresh water fish', '7'),
(36, 7, 300, 500, 21, 'Hard to Very Hard and Good Fresh Water', 'Unpleasant taste, presence no serious burden to live stock, Prefer to fresh water fish', '8'),
(37, 7, 375, 625, 24, 'Hard to Very Hard and Good Fresh Water', 'Unpleasant taste, presence no serious burden to live stock, Prefer to fresh water fish', '8'),
(38, 7, 450, 750, 27, 'Hard to Very Hard and Good Fresh Water', 'Unpleasant taste, presence no serious burden to live stock, Prefer to fresh water fish', '8'),
(39, 7, 525, 875, 30, 'Hard to Very Hard and Good Fresh Water', 'Unpleasant taste, presence no serious burden to live stock, Prefer to fresh water fish', '8'),
(40, 8, 600, 1000, 32, 'Hard to Very Hard and Good Fresh Water', 'Unpleasant taste, presence no serious burden to live stock, Prefer to fresh water fish', '8'),
(41, 7, 600, 1000, 21, 'Fair Fresh Water', 'Presence no serious burden to live stock', '9'),
(42, 7, 675, 1125, 24, 'Fair Fresh Water', 'Presence no serious burden to live stock', '9'),
(43, 7, 750, 1250, 27, 'Fair Fresh Water', 'Presence no serious burden to live stock', '9'),
(44, 7, 825, 1375, 30, 'Fair Fresh Water', 'Presence no serious burden to live stock', '9'),
(45, 8, 900, 1500, 32, 'Fair Fresh Water', 'Presence no serious burden to live stock', '9'),
(46, 7, 900, 1500, 21, 'Poor Fresh Water', 'Presence no serious burden to live stock', '10'),
(47, 7, 975, 1625, 24, 'Poor Fresh Water', 'Presence no serious burden to live stock', '10'),
(48, 7, 1050, 1750, 27, 'Poor Fresh Water', 'Presence no serious burden to live stock', '10'),
(49, 7, 1125, 1875, 30, 'Poor Fresh Water', 'Presence no serious burden to live stock', '10'),
(50, 8, 1200, 2000, 32, 'Poor Fresh Water', 'Presence no serious burden to live stock', '10'),
(51, 1, 0, 250, 21, 'Severe Acidic Water', 'Bitter metallic taste and corrosion', '11'),
(52, 2, 75, 313, 24, 'Severe Acidic Water', 'Bitter metallic taste and corrosion', '11'),
(53, 4, 150, 375, 27, 'Severe Acidic Water', 'Bitter metallic taste and corrosion', '11'),
(54, 5, 225, 438, 30, 'Severe Acidic Water', 'Bitter metallic taste and corrosion', '11'),
(55, 7, 300, 500, 32, 'Severe Acidic Water', 'Bitter metallic taste and corrosion', '11'),
(56, 7, 0, 0, 32, 'Acid Water', 'If the Temperature in degree Celcius increases it means the pH level will be decreased. As a result ', '12'),
(57, 7, 13, 0, 0, 'Acid Water', 'If the Temperature in degree Celcius increases it means the pH level will be decreased. As a result ', '12'),
(58, 7, 25, 0, 0, 'Acid Water', 'If the Temperature in degree Celcius increases it means the pH level will be decreased. As a result ', '12'),
(59, 7, 38, 0, 0, 'Acid Water', 'If the Temperature in degree Celcius increases it means the pH level will be decreased. As a result ', '12'),
(60, 7, 50, 82, 0, 'Acid Water', 'If the Temperature in degree Celcius increases it means the pH level will be decreased. As a result ', '12'),
(61, 7, 0, 0, 0, 'Alkaline Water', 'If the Temperature in degree Celcius decreases it means the pH level will be increased. As a result ', '13'),
(62, 7, 13, 0, 0, 'Alkaline Water', 'If the Temperature in degree Celcius decreases it means the pH level will be increased. As a result ', '13'),
(63, 7, 25, 0, 0, 'Alkaline Water', 'If the Temperature in degree Celcius decreases it means the pH level will be increased. As a result ', '13'),
(64, 7, 38, 0, 0, 'Alkaline Water', 'If the Temperature in degree Celcius decreases it means the pH level will be increased. As a result ', '13'),
(65, 7, 50, 82, 21, 'Alkaline Water', 'If the Temperature in degree Celcius decreases it means the pH level will be increased. As a result ', '13'),
(66, 8, 1200, 2000, 21, 'Slightly Saline Water, Mildly Basic', 'Unacceptable for live stock, should affect health or performance but may cause temporary mild diarrh', '14'),
(67, 8, 1650, 2750, 24, 'Slightly Saline Water, Mildly Basic', 'Unacceptable for live stock, should affect health or performance but may cause temporary mild diarrh', '14'),
(68, 8, 2100, 3500, 27, 'Slightly Saline Water, Mildly Basic', 'Unacceptable for live stock, should affect health or performance but may cause temporary mild diarrh', '14'),
(69, 8, 2550, 4250, 30, 'Slightly Saline Water, Mildly Basic', 'Unacceptable for live stock, should affect health or performance but may cause temporary mild diarrh', '14'),
(70, 8, 3000, 5000, 32, 'Slightly Saline Water, Mildly Basic', 'Unacceptable for live stock, should affect health or performance but may cause temporary mild diarrh', '14'),
(71, 8, 3000, 5000, 21, 'Moderately Saline Water, Mildly Basic', 'May cause diarrhea', '15'),
(72, 8, 3500, 5750, 24, 'Moderately Saline Water, Mildly Basic', 'May cause diarrhea', '15'),
(73, 8, 4000, 6500, 27, 'Moderately Saline Water, Mildly Basic', 'May cause diarrhea', '15'),
(74, 8, 4500, 7250, 30, 'Moderately Saline Water, Mildly Basic', 'May cause diarrhea', '15'),
(75, 8, 5000, 8000, 32, 'Moderately Saline Water, Mildly Basic', 'May cause diarrhea', '15'),
(76, 8, 5000, 8000, 21, 'Brackish to Highly Brackish Water, Mildly Basic', 'Safety for adult ruminants, avoided for Cattles and Baby Calves', '16'),
(77, 8, 7500, 12250, 24, 'Brackish to Highly Brackish Water, Mildly Basic', 'Safety for adult ruminants, avoided for Cattles and Baby Calves', '16'),
(78, 8, 10000, 16500, 27, 'Brackish to Highly Brackish Water, Mildly Basic', 'Safety for adult ruminants, avoided for Cattles and Baby Calves', '16'),
(79, 8, 12500, 20750, 30, 'Brackish to Highly Brackish Water, Mildly Basic', 'Safety for adult ruminants, avoided for Cattles and Baby Calves', '16'),
(80, 8, 15000, 25000, 32, 'Brackish to Highly Brackish Water, Mildly Basic', 'Safety for adult ruminants, avoided for Cattles and Baby Calves', '16'),
(81, 8, 15000, 25000, 21, 'Saline to Highly Saline Water, Mildly Basic', 'Should be avoided, young animals can be affected', '17'),
(82, 8, 18750, 31250, 24, 'Saline to Highly Saline Water, Mildly Basic', 'Should be avoided, young animals can be affected', '17'),
(83, 8, 22500, 37500, 27, 'Saline to Highly Saline Water, Mildly Basic', 'Should be avoided, young animals can be affected', '17'),
(84, 8, 26250, 43750, 30, 'Saline to Highly Saline Water, Mildly Basic', 'Should be avoided, young animals can be affected', '17'),
(85, 8, 30000, 50000, 32, 'Saline to Highly Saline Water, Mildly Basic', 'Should be avoided, young animals can be affected', '17'),
(86, 8, 30000, 50000, 21, 'Sea Water, contains high degree of salts', 'Acceptable for sea fish, sea animals and sea plants', '18'),
(87, 8, 32500, 53750, 24, 'Sea Water, contains high degree of salts', 'Acceptable for sea fish, sea animals and sea plants', '18'),
(88, 8, 35000, 57500, 27, 'Sea Water, contains high degree of salts', 'Acceptable for sea fish, sea animals and sea plants', '18'),
(89, 8, 37500, 61250, 30, 'Sea Water, contains high degree of salts', 'Acceptable for sea fish, sea animals and sea plants', '18'),
(90, 8, 40000, 65000, 32, 'Sea Water, contains high degree of salts', 'Acceptable for sea fish, sea animals and sea plants', '18'),
(91, 8, 40000, 65000, 21, 'Brine, Mildly Basic', 'Unsafe, Should not be used under any conditions', '19'),
(92, 8, 105000, 173750, 24, 'Brine, Mildly Basic', 'Unsafe, Should not be used under any conditions', '19'),
(93, 8, 170000, 282500, 27, 'Brine, Mildly Basic', 'Unsafe, Should not be used under any conditions', '19'),
(94, 8, 235000, 391250, 30, 'Brine, Mildly Basic', 'Unsafe, Should not be used under any conditions', '19'),
(95, 8, 300000, 500000, 32, 'Brine, Mildly Basic', 'Unsafe, Should not be used under any conditions', '19'),
(96, 8, 40000, 65000, 21, 'Severely Alkaline Water, Hard Water', 'Soda like taste, should be avoided', '20'),
(97, 9, 50000, 75000, 24, 'Severely Alkaline Water, Hard Water', 'Soda like taste, should be avoided', '20'),
(98, 9, 60000, 85000, 27, 'Severely Alkaline Water, Hard Water', 'Soda like taste, should be avoided', '20'),
(99, 9, 70000, 95000, 30, 'Severely Alkaline Water, Hard Water', 'Soda like taste, should be avoided', '20'),
(100, 9, 80000, 105000, 32, 'Severely Alkaline Water, Hard Water', 'Soda like taste, should be avoided', '20'),
(101, 5, 10, 17, 21, 'Rain Water', 'If pH is <5.2 it may cause acid rain', '21'),
(102, 5, 11, 19, 24, 'Rain Water', 'If pH is <5.2 it may cause acid rain', '21'),
(103, 6, 13, 21, 27, 'Rain Water', 'If pH is <5.2 it may cause acid rain', '21'),
(104, 6, 14, 23, 30, 'Rain Water', 'If pH is <5.2 it may cause acid rain', '21'),
(105, 6, 15, 25, 32, 'Rain Water', 'If pH is <5.2 it may cause acid rain', '21');

--
-- Indexes for dumped tables
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
