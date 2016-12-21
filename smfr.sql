-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 04:32 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smfr`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('ad80f17f9143c95a92550c3d74e7569a9f58726c', '::1', 1482289273, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323238393237333b),
('a7e7c4432e34d760749e0e9d5a9e71b4e2287e81', '::1', 1482289586, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323238393538363b),
('5c3a8eba16d4ce5482038234670f94f1ca8f75db', '::1', 1482290086, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323239303038363b),
('5014920de33eff632fece1d62f80939fb557df1a', '::1', 1482290549, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323239303534393b757365726e616d657c733a353a2261646d696e223b69734c6f67696e7c623a313b),
('a4d73f89b805022ca8774bc3908144eef9a86f4c', '::1', 1482290852, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323239303835323b757365726e616d657c733a353a2261646d696e223b69734c6f67696e7c623a313b),
('0ce8d9753f1fb4cd436ac3139764d8c6f8df4255', '::1', 1482291084, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438323239313035303b);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`, `keterangan`) VALUES
(1, 'Jakarta', 'Perangkat Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `perangkat`
--

CREATE TABLE `perangkat` (
  `id_perangkat` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `nama_perangkat` varchar(255) NOT NULL,
  `ip_address` varchar(25) NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perangkat`
--

INSERT INTO `perangkat` (`id_perangkat`, `id_kota`, `nama_perangkat`, `ip_address`, `latitude`, `longitude`, `keterangan`) VALUES
(1, 1, 'TCI GSP', '192.168.6.10', '-6.1792578', '106.8194389', ''),
(2, 1, 'TCI Maninjau', '192.168.8.20', '-6.3196569', '106.8189852', ''),
(3, 1, 'TCI Bambu Larangan', '192.168.9.20', '-6.2328654', '106.6702488', ''),
(4, 1, 'TCI Rorotan', '192.168.10.20', '-6.145177', '106.9369523', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `id_perangkat` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `id_perangkat`, `waktu`, `status`) VALUES
(1, 1, '2016-07-21 22:17:02', 1),
(2, 1, '2016-07-21 22:29:21', 1),
(3, 1, '2016-07-21 22:31:14', 1),
(4, 1, '2016-07-21 22:34:32', 0),
(5, 1, '2016-07-21 22:53:15', 0),
(6, 1, '2016-07-21 22:53:40', 0),
(7, 1, '2016-07-21 22:54:40', 0),
(8, 1, '2016-07-21 22:55:40', 1),
(9, 3, '2016-07-22 07:28:07', 0),
(10, 2, '2016-07-22 09:55:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `last_login`) VALUES
('admin', '15a3ee4d76896984d7aebe9c3d4d3a3d', 'admin@lensmfr.com', '2016-12-21 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `perangkat`
--
ALTER TABLE `perangkat`
  ADD PRIMARY KEY (`id_perangkat`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `perangkat`
--
ALTER TABLE `perangkat`
  MODIFY `id_perangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
