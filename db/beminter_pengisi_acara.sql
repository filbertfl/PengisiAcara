-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 01:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beminter_pengisi_acara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `id_ukm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nrp`, `id_ukm`) VALUES
(1, 'C14200184', 2);

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id` int(11) NOT NULL,
  `nama_panitia` varchar(64) NOT NULL,
  `deskripsi_panitia` varchar(1000) NOT NULL,
  `contact_person` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `request_info` varchar(1000) NOT NULL,
  `status` varchar(1) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `id_panitia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ukm`
--

CREATE TABLE `ukm` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `contact_person` varchar(24) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `logo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ukm`
--

INSERT INTO `ukm` (`id`, `nama`, `deskripsi`, `contact_person`, `foto`, `logo`) VALUES
(1, 'UKM Dance', 'Insert Description Here...', 'Insert Contact Here...', ';upload/blank.png', 'upload/blank.png'),
(2, 'UKM Paduan Suara', 'Insert Description Here...', 'Insert Contact Here...', ';upload/blank.png', 'upload/blank.png'),
(3, 'UKM Dekorasi', 'Insert Description Here...', 'Insert Contact Here...', ';upload/blank.png', 'upload/blank.png'),
(4, 'UKM Teater', 'Insert Description Here...', 'Insert Contact Here...', ';upload/blank.png', 'upload/blank.png'),
(5, 'UKM Vocal Group', 'Insert Description Here...', 'Insert Contact Here...', ';upload/blank.png', 'upload/blank.png'),
(6, 'UKM Ilustrasi', 'Insert Description Here...', 'Insert Contact Here...', ';upload/blank.png', 'upload/blank.png'),
(7, 'UKM Martografi', 'Insert Description Here...', 'Insert Contact Here...', ';upload/blank.png', 'upload/blank.png'),
(8, 'UKM Modeling', 'Insert Description Here...', 'Insert Contact Here...', ';upload/blank.png', 'upload/blank.png'),
(9, 'UKM Club Orchestra', 'Insert Description Here...', 'Insert Contact Here...', ';upload/blank.png', 'upload/blank.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
