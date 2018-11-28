-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 12:16 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(6, 'cuppccino'),
(7, 'ice coffee'),
(8, 'cold'),
(9, 'coffee'),
(10, 'birthday cake');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tb_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cash_status` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tb_name`, `user_name`, `cash_status`, `created_at`) VALUES
(14, 'No.1', 'phyoe', NULL, '2018-11-26 23:51:49'),
(15, 'No.1', 'phyoe', NULL, '2018-11-26 23:53:55'),
(18, 'No.4', 'Kyaw', NULL, '2018-11-27 06:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `order_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_title`, `order_price`, `qty`, `order_id`) VALUES
(10, 'ice coffee', 1300, 1, 4),
(11, 'chocolate cake', 25000, 1, 4),
(12, 'small cake', 2000, 1, 4),
(13, 'avocado milkshake', 1800, 1, 5),
(14, 'hawaiian sunshine milkshake', 1600, 1, 5),
(15, 'banana milkshake', 1500, 1, 5),
(16, 'black and gold wedding cake', 40000, 1, 6),
(17, 'coffee', 1000, 1, 6),
(18, 'ice coffee', 1300, 2, 7),
(19, 'coffee', 1000, 2, 7),
(20, 'white cake', 20000, 1, 7),
(21, 'strawberry milkshake', 1500, 1, 7),
(22, 'chocolate cake', 25000, 1, 8),
(23, 'cuppuccino', 1500, 1, 9),
(24, 'ice coffee', 1300, 1, 9),
(25, 'strawberry milkshake', 1500, 1, 9),
(26, 'ice coffee', 1300, 1, 10),
(27, 'cuppuccino', 1500, 1, 11),
(28, 'ice coffee', 1300, 1, 11),
(29, 'strawberry cake', 20000, 1, 12),
(30, 'ice coffee', 1300, 2, 13),
(31, 'ice coffee', 1300, 2, 14),
(32, 'cuppuccino', 1500, 2, 15),
(33, 'ice coffee', 1300, 1, 15),
(34, 'strawberry milkshake', 1500, 3, 16),
(35, 'coffee', 1000, 3, 16),
(36, 'ice coffee', 1300, 2, 16),
(37, 'cuppuccino', 1500, 3, 16),
(38, 'white cake', 20000, 1, 16),
(39, 'strawberry milkshake', 1500, 1, 17),
(40, 'coffee', 1000, 1, 17),
(41, 'cuppuccino', 1500, 2, 18),
(42, 'ice coffee', 1300, 1, 18),
(43, 'strawberry milkshake', 1500, 1, 18),
(44, 'coffee', 1000, 1, 18),
(45, 'ice coffee', 800, 1, 18),
(46, 'kitty cake', 120000, 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `cover`, `cat_id`, `created_at`) VALUES
(12, 'cuppuccino', 1500, 'capppuccino.jpeg', 6, '2017-11-17 19:50:31'),
(13, 'ice coffee', 1300, 'ice coffee.jpeg', 7, '2017-11-17 19:51:14'),
(14, 'strawberry milkshake', 1500, 'strawberry 1.jpeg', 8, '2017-11-17 19:52:04'),
(15, 'coffee', 1000, 'coffee2.jpg', 9, '2017-11-17 19:52:27'),
(16, 'ice coffee', 800, 'images.jpeg', 7, '2017-11-17 19:54:09'),
(32, 'kitty cake', 120000, 'cake4.jpeg', 10, '2018-11-27 06:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_role` int(11) DEFAULT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `user_role`, `phone`, `created_at`) VALUES
(4, 'Kyaw', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 0, '09876567857', '2018-11-26 21:49:53'),
(5, 'Zin ', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1, '09574444333', '2018-11-26 21:50:07'),
(6, 'Phyoe', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 2, '09888777666', '2018-11-26 21:50:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
