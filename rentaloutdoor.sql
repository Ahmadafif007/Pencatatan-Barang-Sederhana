-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 01:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentaloutdoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `alatrental`
--

CREATE TABLE `alatrental` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alatrental`
--

INSERT INTO `alatrental` (`id`, `nama`, `jenis`, `kategori`, `harga`, `gambar`) VALUES
(1, 'Tas Carrier', 'Eiger 70L', 'Perlengkapan Pribadi', 'Rp.30.000', 'tas.jpeg'),
(2, 'Kompor', 'Kompor Mawar', 'Alat Masak', 'Rp.10.000', 'kompormawar.jpeg'),
(3, 'Tenda', 'Borneo 4 Kapasitas 4', 'Tenda', 'Rp.40.000', 'tenda.jpeg'),
(4, 'Tenda', 'Tendaki kapasitas 2', 'Tenda', 'Rp.20.000', 'tendaki.jpeg'),
(5, 'Flyseat', 'Flyseat 2x3 m', 'Lain - lain', 'Rp.10.000', 'flysheet.jpeg'),
(6, 'Kompor', 'Kompor Kotak', 'Alat Masak', 'Rp.8.000', 'komporkotak.jpeg'),
(7, 'Matras', 'Matras Foil', 'Lain - lain', 'Rp.8.000', 'matrasfoil.jpeg'),
(8, 'Lampu Tenda', 'Lampu Tenda + baterai', 'Lain - lain', 'Rp.12.000', 'lamputenda.jpeg'),
(9, 'Sleeping Bag (SB)', 'SB Bulu Angsa', 'Perlengkapan Pribadi', 'Rp.25.000', 'sb.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'wildan', '$2y$10$LN/d4oL/oU0SoK/A.4Qnv.nWiVEbTC/wsDSaVWuT9udk4yYJdHZvq'),
(5, 'afif', '$2y$10$YJhFR4PM4fTWoIXScjYJfuIQNg9VCjHNioZkKL1rk5YLrxdegI/d6'),
(6, 'ahmad', '$2y$10$lC7N.UmWY8tTvKN4C.ykBOc66JanUd4mnG1gvPfWEZ8NgKbVLFUCK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alatrental`
--
ALTER TABLE `alatrental`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alatrental`
--
ALTER TABLE `alatrental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
