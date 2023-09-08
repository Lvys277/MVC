-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 03:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(2, 'Ivans Zuwantam S.Kom', 'Laki-laki', 'Trenggalek'),
(5, 'Estri Handayani, SPd', 'Perempuan', 'Trenggalek'),
(7, 'Wahyu Tri Wulansari, S.Pd', 'Perempuan', 'Trenggalek'),
(19, 'Fikrotu Dwi F., S.Pd', 'Perempuan', 'Trenggalek'),
(23, 'Ervi Rahmawati, S.T', 'Perempuan', 'Trenggalek'),
(24, 'Novi Dyah Puspitasari. S.Pd', 'Perempuan', 'Trenggalek'),
(25, 'Labib Fayumi, S.Kom', 'Laki-laki', 'Trenggalek'),
(26, 'Safira Maya Shovie. S.Pd', 'Perempuan', 'Trenggalek'),
(27, 'Puad Nur Iskandar', 'Laki-laki', 'Trenggalek');

-- --------------------------------------------------------

--
-- Table structure for table `data_keahlian`
--

CREATE TABLE `data_keahlian` (
  `id` int(11) NOT NULL,
  `keahlian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_keahlian`
--

INSERT INTO `data_keahlian` (`id`, `keahlian`) VALUES
(3, 'Desain Permodelan dan Informasi Bangunan (DPIB)'),
(7, 'Teknik Pemanasan Tata Udara dan Pendinginan (TPTUP)'),
(8, 'Teknik Pengelasan (TP)'),
(9, 'Kuliner'),
(10, 'Akutansi'),
(21, 'Rekayasa Perangkat Lunak (RPL)'),
(22, 'Teknik Kontruksi dan Perumahan (TKP)');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama`, `jenis_kelamin`, `alamat`, `gambar`) VALUES
(1, 'Eka Nanda Susila', 'laki-laki', 'Pule', '870-WhatsApp Image 2023-08-30 at 14.47.22 (1).jpeg'),
(2, 'Arkan Arya Reza Maulana', 'Laki-laki', 'Suruh', '110-WhatsApp Image 2023-09-07 at 21.31.11.jpeg'),
(3, 'Alvin Top Ahmad Djaelani', 'Laki-laki', 'Trenggalek', '406-WhatsApp Image 2023-09-07 at 21.30.54.jpeg'),
(57, 'Dimas Wahyu', 'Laki-laki', 'Trenggalek', '208-WhatsApp Image 2023-09-07 at 21.31.05 (2).jpeg'),
(63, 'Aditya Dwi Purnomo', 'Laki-laki', 'Pule', '835-WhatsApp Image 2023-09-07 at 21.31.09.jpeg'),
(64, 'Dimas Sunar', 'Laki-laki', 'Trenggalek', '636-WhatsApp Image 2023-09-07 at 21.31.06.jpeg'),
(65, 'Dick Eka Ajidimarta', 'Laki-laki', 'Trenggalek', '215-WhatsApp Image 2023-09-07 at 21.31.01.jpeg'),
(66, 'Alfinanda Rangga Satriya', 'Laki-laki', 'Pule', '312-WhatsApp Image 2023-09-07 at 21.31.06 (2).jpeg'),
(67, 'Alfian Zaki', 'Laki-laki', 'Trenggalek', '993-WhatsApp Image 2023-09-07 at 21.31.03.jpeg'),
(68, 'Aditiya Fajar', 'Laki-laki', 'Trenggalek', '78-WhatsApp Image 2023-09-07 at 21.30.59.jpeg'),
(69, 'Cello Javan', 'Laki-laki', 'Trenggalek', '4-WhatsApp Image 2023-09-07 at 21.31.10.jpeg'),
(70, 'Desta Catur', 'Laki-laki', 'Trenggalek', '754-WhatsApp Image 2023-09-07 at 21.31.07.jpeg'),
(71, 'Ahmad Fadli Ardianto', 'Laki-laki', 'Trenggalek', '396-WhatsApp Image 2023-09-07 at 21.31.00.jpeg'),
(72, 'Achmad Rozaki', 'Laki-laki', 'Trenggalek', '384-WhatsApp Image 2023-09-07 at 21.31.08 (1).jpeg'),
(77, 'Aan Fatkhurohman', 'Laki-laki', 'Pule', '892-WhatsApp Image 2023-09-07 at 21.31.09 (2).jpeg'),
(84, 'Ade Tata Subekti', 'Laki-laki', 'Trenggalek', '184-WhatsApp Image 2023-09-07 at 21.31.08 (2).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_keahlian`
--
ALTER TABLE `data_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `data_keahlian`
--
ALTER TABLE `data_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
