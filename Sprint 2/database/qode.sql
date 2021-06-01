-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 02:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qode`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pengqurban`
--

CREATE TABLE `data_pengqurban` (
  `id` int(11) NOT NULL,
  `no_hp_p` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_sq` varchar(255) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `nama_hewan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `keterangan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pengqurban`
--

INSERT INTO `data_pengqurban` (`id`, `no_hp_p`, `tanggal`, `nama_sq`, `foto_ktp`, `nama_hewan`, `jumlah`, `harga`, `bukti_pembayaran`, `keterangan`) VALUES
(31, '085361713661', '2021-05-31', 'Azzahra Geubrina binti Fulan', 'b8eb462a-39b0-4aee-bcf0-ba5f9c9cd716.jpeg', 'Sapi', 1, 'Rp.  2.000.000', '1 (1) (1).png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `no_hp`, `password`, `nama`) VALUES
(12, '085361713661', '$2y$10$tvzPJaRo2i0DSieRUMVsvOWEQMOzAiEl54t8teJuATrA1HVVIkolW', 'Azzahra Geubrina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pengqurban`
--
ALTER TABLE `data_pengqurban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_hp` (`no_hp`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pengqurban`
--
ALTER TABLE `data_pengqurban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
