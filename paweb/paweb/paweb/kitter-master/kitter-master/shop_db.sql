-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 11:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(13, 'Me-o Adult', '50', 'makanan14.png', '1'),
(14, 'Me-o Seafood', '45', 'makanan13.png', '1'),
(15, 'Me-o Tuna', '24000', 'makanan12.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `flat` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'asa', '121', 'asd@jsnd.com', 'cash on delivery', 'sdaa', 'ads', 'sdf', 'asdsad', 'asddas', 'saq2', 'p (9) ', '9'),
(2, 'sads', '121', 'ajii@gmail.com', 'cash on delivery', 'sddas', 'adsdas', 'adsas', 'adsda', 'Indonesia', 'awd12', 'p (9) ', '9'),
(3, 'a', '12', 'admin@gmail.com', 'cash on delivery', '', '', 'sada', 'asd', 'Indonesia', '12333', 'Me-o Tuna (1) ', '24'),
(4, 'adsas', '9778', 'asda@gmail.com', 'cash on delivery', '', '', 'qwqw', 'sdaad', 'qw11e', '1234', 'Me-o Tuna (5) ', '120'),
(5, 'qw', '12', 'sad@gmail.com', 'cash on delivery', '', '', 'sad', 'sdaads', 'sa', '12', 'Me-o Adult (1) , Me-o Seafood (1) , Me-o Tuna (1) ', '24095'),
(6, 'qw', '12', 'sad@gmail.com', 'cash on delivery', '', '', 'sad', 'sdaads', 'sa', '12', 'Me-o Adult (1) , Me-o Seafood (1) , Me-o Tuna (1) ', '24095'),
(7, 'qw', '12', 'sad@gmail.com', 'cash on delivery', '', '', 'sad', 'sdaads', 'sa', '12', 'Me-o Adult (1) , Me-o Seafood (1) , Me-o Tuna (1) ', '24095');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(16, 'Me-o Tuna', '40000', 'makanan12.png'),
(17, 'Me-o Adult', '50000', 'makanan14.png'),
(18, 'Me-o Seafood', '45000', 'makanan13.png'),
(19, 'Brit care - Activity Support', '153000', 'makanan9.png'),
(20, 'Brit care - Power & Vitality', '160000', 'makanan10.png'),
(22, 'Play-toy tower', '94500', 'product-5.jpg'),
(23, 'Kalung kucing', '12000', 'kalungkucing.jpg'),
(24, 'Tumbler Treat Ball', '115000', 'tumblertoy'),
(25, 'Brit care - Healthy & Shiny Coat', '192500', 'makanan7.png'),
(27, 'Brit care - Sensitive', '137900', 'makanan6.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `user_type`, `password`) VALUES
(1, 'user', 'user@gmail.com', 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(2, 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'user3', 'user3@gmail.com', 'user', '92877af70a45fd6a2ed7fe81e1236b78');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
