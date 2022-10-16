-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 09:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penyelenggara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `penyelenggara`
--

CREATE TABLE `penyelenggara` (
  `id_penyelenggara` int(11) NOT NULL,
  `nama_penyelenggara` varchar(50) NOT NULL,
  `nama_event` varchar(50) NOT NULL,
  `email_penyelenggara` varchar(50) NOT NULL,
  `sosmed_penyelenggara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelenggara`
--

INSERT INTO `penyelenggara` (`id_penyelenggara`, `nama_penyelenggara`, `nama_event`, `email_penyelenggara`, `sosmed_penyelenggara`) VALUES
(37, 'Museum Nasional', 'ImersifA', 'musnas@gmail.com', 'instagram.com/museumnasional'),
(38, 'Museum Nasional', 'Galeri Nasional', 'musnas@gmail.com', 'instagram.com/museumnasional'),
(39, 'Pandora Box', 'Train To Apocalypse', 'pandorabox@gmail.com', 'instagram.com/pandorabox'),
(40, 'HeyFest 2022', 'Festival Lagu Laguan', 'heyfest2022@gmail.com', 'instagram.com/heyfest2022'),
(41, 'Ancol', 'Dufan Night', 'ancol@gmail.com', 'instagram.com/ancol'),
(42, 'Kebun Raya Bogor', 'Glow Kebun Raya Bogor', 'kebunrayabogor@gmail.com', 'instagram.com/kebunrayabogor'),
(43, 'Jakarta Internasional Expo', 'Djakarta Warehouse Project 2022', 'jakartaie@gmail.com', 'instagram.com/jktinternasionalexpo'),
(44, 'The Bali Bible', 'Soundset', 'Thebalibible@gmail.com', 'instagram.com/thebiblebali'),
(45, 'The Marvel', 'Marvel Studio Exhibition', 'marvelexhibition@gmail.com', 'instagram.com/themarvel'),
(46, 'Jakarta Sneakers Day', 'Jakarta Sneakers Day', 'jakartasneakersday@gmail.com', 'instagram.com/jsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `penyelenggara`
--
ALTER TABLE `penyelenggara`
  ADD PRIMARY KEY (`id_penyelenggara`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penyelenggara`
--
ALTER TABLE `penyelenggara`
  MODIFY `id_penyelenggara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
