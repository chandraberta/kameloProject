-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 07:36 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'malasngoding', '10406c1d7b7421b1a56f0d951e952a95'),
(2, 'admin', '0192023A7BBD73250516F069DF18B500');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_keuangan`
--

CREATE TABLE `laporan_keuangan` (
  `tanggal` date DEFAULT NULL,
  `id_item` int(11) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `id_topping` int(11) DEFAULT NULL,
  `topping` varchar(255) DEFAULT NULL,
  `jumlah_pembelian` int(11) DEFAULT NULL,
  `total_pembelian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_keuangan`
--

INSERT INTO `laporan_keuangan` (`tanggal`, `id_item`, `item`, `id_topping`, `topping`, `jumlah_pembelian`, `total_pembelian`) VALUES
('2018-05-15', 4, 'Soft Ice Cream Milo', 5, 'choco chips', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_item` int(4) NOT NULL,
  `item` varchar(255) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_item`, `item`, `harga`) VALUES
(1, 'Marshmellow Ice Cream Classic Choco', '6000'),
(2, 'Marshmellow Ice Cream Strawberry Delight', '6000'),
(3, 'Soft Ice Cream Oreo', '4000'),
(4, 'Soft Ice Cream Milo', '4000'),
(5, 'Soft Ice Cream Strawberry', '4000'),
(6, 'Soft Ice Cream Green Tea', '4000');

-- --------------------------------------------------------

--
-- Table structure for table `preorder`
--

CREATE TABLE `preorder` (
  `id_order` int(11) NOT NULL,
  `nama_cust` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `topping` varchar(255) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `id_item` int(11) DEFAULT NULL,
  `id_topping` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preorder`
--

INSERT INTO `preorder` (`id_order`, `nama_cust`, `item`, `topping`, `jumlah`, `no_hp`, `id_item`, `id_topping`) VALUES
(1, 'Berta', 'Soft Ice Cream Green Tea', 'Oreo', 1, '085649026764', 6, 2),
(2, 'Meli', 'Soft Ice Cream Strawberry', 'koko crunch', 2, '0865656565665', 5, 4),
(3, 'Chandra', 'Marshmellow Ice Cream Classic Choco', 'Tanpa topping', 2, '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `topping`
--

CREATE TABLE `topping` (
  `id_topping` int(11) NOT NULL,
  `n_topping` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topping`
--

INSERT INTO `topping` (`id_topping`, `n_topping`, `harga`) VALUES
(1, 'Tanpa topping', 0),
(2, 'Oreo', 1000),
(3, 'chacha', 1000),
(4, 'koko crunch', 1000),
(5, 'choco chips', 1000),
(6, 'yuppy', 1000),
(7, 'chocolatos', 1000),
(8, 'hello panda', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  ADD KEY `id_item` (`id_item`),
  ADD KEY `id_topping` (`id_topping`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `preorder`
--
ALTER TABLE `preorder`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_item` (`id_item`),
  ADD KEY `id_topping` (`id_topping`);

--
-- Indexes for table `topping`
--
ALTER TABLE `topping`
  ADD PRIMARY KEY (`id_topping`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_item` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `preorder`
--
ALTER TABLE `preorder`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topping`
--
ALTER TABLE `topping`
  MODIFY `id_topping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  ADD CONSTRAINT `laporan_keuangan_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `menu` (`id_item`),
  ADD CONSTRAINT `laporan_keuangan_ibfk_2` FOREIGN KEY (`id_topping`) REFERENCES `topping` (`id_topping`);

--
-- Constraints for table `preorder`
--
ALTER TABLE `preorder`
  ADD CONSTRAINT `preorder_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `menu` (`id_item`),
  ADD CONSTRAINT `preorder_ibfk_2` FOREIGN KEY (`id_topping`) REFERENCES `topping` (`id_topping`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
