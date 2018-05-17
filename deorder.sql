-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 10:15 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamelo`
--

-- --------------------------------------------------------

--
-- Table structure for table `deorder`
--

CREATE TABLE `deorder` (
  `id_order` int(11) NOT NULL,
  `nama_cust` varchar(255) NOT NULL,
  `id_item` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `id_topping` int(11) NOT NULL,
  `topping` varchar(255) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deorder`
--

INSERT INTO `deorder` (`id_order`, `nama_cust`, `id_item`, `item`, `id_topping`, `topping`, `no_hp`, `jumlah`, `total_harga`, `alamat`) VALUES
(1, 'Berta', 2, 'Marshmellow Ice Cream Strawberry Delight', 4, 'koko crunch', '085649026764', 3, 0, 'Jalan K.H. Ahmad Dahlan 64'),
(2, 'Meli', 2, 'Marshmellow Ice Cream Strawberry Delight', 4, 'koko crunch', '08500000000', 3, 0, 'Jalan di Kediri'),
(3, 'Luli', 5, 'Soft Ice Cream Strawberry', 2, 'Oreo', '08500032000', 5, 0, 'Jalan di Kota di Jawa Timur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deorder`
--
ALTER TABLE `deorder`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deorder`
--
ALTER TABLE `deorder`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
