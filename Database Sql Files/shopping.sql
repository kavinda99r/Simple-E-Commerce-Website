-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 03:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `description`, `image`, `price`) VALUES
(1, 'Apple iPhone 15 Pro Max', '1.jpg', 454990),
(2, 'Apple iPhone 15 Pro', '2.jpg', 367990),
(3, 'Apple iPhone 15 Plus', '3.jpg', 334990),
(4, 'Samsung Galaxy M55', '4.jpg', 145000),
(5, 'Samsung Galaxy A55', '5.jpg', 167990),
(6, 'Samsung Galaxy M15', '6.jpg', 62990),
(7, 'Samsung Galaxy M14', '7.jpg', 36990),
(8, 'Xiaomi Redmi Note 13 Pro+', '8.jpg', 119990),
(9, 'Xiaomi Redmi Note 13', '9.jpg', 69990),
(10, 'Xiaomi Redmi Note 13 Pro', '10.jpg', 89990);

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE `product2` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product2`
--

INSERT INTO `product2` (`id`, `description`, `image`, `price`) VALUES
(11, 'HP PROBOOK 450 G8', '11.jpg', 281750),
(12, 'HP 255 G8 RYZEN 5 5500U', '12.jpg', 229885),
(13, 'ASUS VIVOBOOK 15 X1502ZA I7-1260P', '13.jpg', 329000),
(14, 'ASUS VIVOBOOK PRO 15 OLED 7 5800H', '14.jpg', 589000),
(15, 'ASUS VIVOBOOK GO 15 E1504FA R5-7520U', '15.jpg', 199900),
(16, 'ASUS VIVOBOOK 15 OLED M513UA R7-5700U', '16.jpg', 267850),
(17, 'MACBOOK AIR M1', '17.jpg', 269000),
(18, 'MACBOOK AIR M3', '18.jpg', 375000),
(19, 'MACBOOK AIR M2', '19.jpg', 399900),
(20, 'MACBOOK PRO 13    ', '20.jpg', 489000),
(21, 'ACER ASPIRE A315|I3-1215U', '21.jpg', 149900),
(22, 'ACER ASPIRE A15-51P CORE 5-120U', '22.jpg', 224000),
(23, 'MSI MODERN 15 - B13M I3-1315U', '23.jpg', 179100),
(24, 'MSI MODERN 15 - B12M I7-1255U', '24.jpg', 285000);

-- --------------------------------------------------------

--
-- Table structure for table `product3`
--

CREATE TABLE `product3` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product3`
--

INSERT INTO `product3` (`id`, `description`, `image`, `price`) VALUES
(25, 'RTX 3050 verto', '25.jpg', 74000),
(26, 'RTX 3060 TWIN EDGE', '26.jpg', 225000),
(27, 'RTX 4060 Windforce', '27.jpg', 202000),
(28, 'RTX 4060 OC Edition', '28.jpg', 189000),
(29, 'GTX 1650', '29.jpg', 65500),
(30, 'RTX 4060 TI', '30.jpg', 173000),
(31, 'RTX 3050 VENTUS', '31.jpg', 114500),
(32, 'RTX 4060 TI gaming x', '32.jpg', 224000);

-- --------------------------------------------------------

--
-- Table structure for table `product4`
--

CREATE TABLE `product4` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product4`
--

INSERT INTO `product4` (`id`, `description`, `image`, `price`) VALUES
(33, 'AKG hand free', '33.jpg', 500),
(34, 'Gzsp high bass headset', '34.jpg', 750),
(35, 'Mi Handsfree', '35.jpg', 1450),
(36, 'BENGOO Gaming Mouse Wired', '36.jpg', 2750),
(37, 'Redragon Gaming Mouse wireless', '37.jpeg', 5000),
(38, 'Wired RGB Gaming Mouse', '38.jpg', 8500),
(39, 'Mechanical Gaming Keyboard 87 Keys', '39.jpg', 10000),
(40, 'Kafuty-1 MC-689 USB Wired Keyboard', '40.jpg', 5000),
(41, 'Mechanical Keyboard, Full RGB 75% Gaming Keyboard with Red Switches', '41.jpg', 14000),
(42, '10W USB Powered Computer Speakers', '42.jpg', 12000),
(43, 'PC Speakers with 6 Lighting Modes', '43.jpeg', 10000),
(44, 'Creative T15 Wireless Speakers', '44.jpg', 8500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product3`
--
ALTER TABLE `product3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product4`
--
ALTER TABLE `product4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product2`
--
ALTER TABLE `product2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product3`
--
ALTER TABLE `product3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product4`
--
ALTER TABLE `product4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
