-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 03:37 AM
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
  `alamat` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deorder`
--

INSERT INTO `deorder` (`id_order`, `nama_cust`, `id_item`, `item`, `id_topping`, `topping`, `no_hp`, `jumlah`, `total_harga`, `alamat`, `tanggal`) VALUES
(1, 'Berta', 2, 'Marshmellow Ice Cream Strawberry Delight', 4, 'koko crunch', '085649026764', 3, 0, 'Jalan K.H. Ahmad Dahlan 64', NULL),
(2, 'Meli', 2, 'Marshmellow Ice Cream Strawberry Delight', 4, 'koko crunch', '08500000000', 3, 0, 'Jalan di Kediri', NULL);

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
  `total_pembelian` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_keuangan`
--

INSERT INTO `laporan_keuangan` (`tanggal`, `id_item`, `item`, `id_topping`, `topping`, `jumlah_pembelian`, `total_pembelian`, `id`) VALUES
('2018-05-09', 2, 'Marshmellow Ice Cream Strawberry Delight', 5, 'choco chips', 4, 28000, 1),
('2018-05-10', 6, 'Soft Ice Cream Green Tea', 8, 'hello panda', 2, 10000, 2),
('2018-05-11', 3, 'Soft Ice Cream Oreo', 4, 'koko crunch', 10, 50000, 3),
('2018-05-26', 5, 'Soft Ice Cream Strawberry', 5, 'choco chips', 5, 25000, 4),
('2018-05-09', 6, 'Soft Ice Cream Green Tea', 5, 'choco chips', 9, 45000, 5),
('2018-05-16', 1, 'Marshmellow Ice Cream Classic Choco', 4, 'koko crunch', 3, 21000, 6),
('2018-05-19', 4, 'Soft Ice Cream Milo', 3, 'chacha', 3, 15000, 8),
('2018-05-17', 1, 'Marshmellow Ice Cream Classic Choco', 2, 'Oreo', 9, 63000, 9),
('2018-05-16', 5, 'Soft Ice Cream Strawberry', 6, 'yuppy', 5, 25000, 10),
('2018-05-24', 4, 'Soft Ice Cream Milo', 5, 'choco chips', 11, 55000, 11),
('2018-05-14', 6, 'Soft Ice Cream Green Tea', 2, 'Oreo', 3, 15000, 12),
('2018-05-23', 4, 'Soft Ice Cream Milo', 4, 'koko crunch', 14, 70000, 27),
(NULL, 2, 'Marshmellow Ice Cream Strawberry Delight', 4, 'koko crunch', 3, 21000, 28),
(NULL, 2, 'Marshmellow Ice Cream Strawberry Delight', 4, 'koko crunch', 3, 21000, 29),
(NULL, 5, 'Soft Ice Cream Strawberry', 2, 'Oreo', 5, 25000, 30);

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
  `id_topping` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
('b8683d3e-5a69-11e8-b97a-54ab3ab4ad0f', 'Berta Kartika Chandra', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

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
-- Indexes for table `deorder`
--
ALTER TABLE `deorder`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  ADD PRIMARY KEY (`id`),
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
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `topping`
--
ALTER TABLE `topping`
  ADD PRIMARY KEY (`id_topping`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deorder`
--
ALTER TABLE `deorder`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_item` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `preorder`
--
ALTER TABLE `preorder`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
