-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 03:32 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `statu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `pwd` varchar(30) COLLATE utf8_bin NOT NULL,
  `phone` int(11) NOT NULL,
  `adresse` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `name`, `email`, `pwd`, `phone`, `adresse`) VALUES
(2, 'dali', 'dali@gmail.com', '123456', 123456, 'El Alia'),
(3, 'Dali Kebair', 'el alia', '55454881', 0, '123456'),
(4, 'taher Said', 'el alia', '11222333', 0, '123456'),
(5, 'taher Said', 'el alia', '55454881', 0, '123456'),
(6, 'taher Said', 'el alia', '11222333', 0, '123456'),
(7, 'Dali Kebair', 'medalikebair@gmail.com', '123456', 11222333, 'el alia'),
(8, 'montasar', 'montasar@gmai.com', '789456', 204703365, 'el alia'),
(9, 'Khaled Abbes', 'khaled@gmail.com', '123456', 26566194, 'El Alia'),
(10, 'Houssem Troudi', 'toudi@gmail.com', '$2y$10$GwRUrYc5iXg47s.Zxd5STO1', 23349082, 'EL Khitmine'),
(11, 'Houssem Troudi', 'troudi@gmail.com', '$2y$10$/BvjbK7igV4U3/xAIS1G0ev', 23349082, 'EL Khitmine'),
(12, 'Khaled Abbes', 'khaled2@gmail.com', '$2y$10$e29Xlld.t4uuImbQCfGMy.p', 26566194, 'El Alia'),
(13, 'momen', 'momen@gmail.com', '$2y$10$Bgang.6ETPjJpfOaj0.5pu6', 11222333, 'alia');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `description` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `name`, `phone`, `email`, `password`, `description`) VALUES
(1, 'montassar', 92985271, 'amosiwar@gmail.com', '123456', ''),
(2, 'taher', 12345678, 'taher2@gmail.com', '123456', 'admin'),
(5, 'rafike', 22789456, 'rafike7016@gmail.com', 'qwertyu', ''),
(6, 'abdel rahime', 98745632, 'taher2@gmail.com', '123456', ''),
(7, 'taher', 987562, 'taha_dias@yahoo.fr', '6', ''),
(8, 'mohsen ', 9587456, 'taher2@gmail.com', '123456', ''),
(9, 'mohsen', 20703365, 'taha_dias@yahoo.fr', '7894556', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `num` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `msg` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`num`, `cid`, `subject`, `msg`) VALUES
(1, 2, 'erreur', 'votre cite web n\'est pas fonctionnelle '),
(2, 8, 'erreur', 'mooo');

-- --------------------------------------------------------

--
-- Table structure for table `ordere`
--

CREATE TABLE `ordere` (
  `oid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `Cid` int(11) NOT NULL,
  `Quantity_product` int(25) NOT NULL,
  `Odate` datetime NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Delivery` tinyint(1) NOT NULL,
  `Vehicle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `price` double(10,5) NOT NULL,
  `file` text COLLATE utf8_bin NOT NULL,
  `categorie` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `description`, `price`, `file`, `categorie`) VALUES
(58, 'sgffds', 'fhjvgv', 25.00000, 'dishes_4.jpg', ''),
(60, 'dfgdf', 'ghj', 22.00000, 'dishes_4.jpg', ''),
(61, 'dfgdf', 'ghj', 22.00000, 'dishes_4.jpg', ''),
(63, 'salade', 'salade avec sauce de tomate pure', 12.00000, 'dishes_4.jpg', ''),
(64, 'salade', 'salade avec sauce de tomate pure', 12.00000, 'dishes_4.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `vehicle_number` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vid`, `status`, `vehicle_number`) VALUES
(3, 1, '147896'),
(4, 0, '11111'),
(5, 1, '022222'),
(6, 14523263, '0'),
(7, 147852, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`,`pid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`num`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `ordere`
--
ALTER TABLE `ordere`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `pid_product` (`pid`),
  ADD KEY `cid_customer` (`Cid`),
  ADD KEY `num_vehicule` (`Vehicle`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ordere`
--
ALTER TABLE `ordere`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ordere`
--
ALTER TABLE `ordere`
  ADD CONSTRAINT `cid_customer` FOREIGN KEY (`Cid`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `num_vehicule` FOREIGN KEY (`Vehicle`) REFERENCES `vehicle` (`vid`),
  ADD CONSTRAINT `pid_product` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
