-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2018 at 03:27 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
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
(5, 'wedding cake'),
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
(9, 'Four', 'aungaung', NULL, '2018-05-04 15:53:57'),
(11, 'No.3', 'aungaung', NULL, '2018-05-04 17:53:55'),
(12, 'No.4', 'aungaung', NULL, '2018-05-04 21:31:35');

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
(29, 'strawberry cake', 20000, 1, 12);

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
(17, 'chocolate cake', 25000, '1_piggy-cake.jpg', 10, '2017-11-17 19:55:51'),
(18, 'white cake', 20000, '60th-birthday-cake-ideas-for-mom-450x300.jpg', 10, '2017-11-17 19:56:29'),
(19, 'small cake', 2000, '900_809431s70N_hot-chocolate-cocoa-cupcake-toppers.jpg', 10, '2017-11-17 19:57:12'),
(20, 'black and gold wedding cake', 40000, 'black and gold wedding cake.jpeg', 5, '2017-11-17 19:57:55'),
(21, 'strawberry cake', 20000, 'cake1.jpeg', 10, '2017-11-17 19:58:36'),
(22, 'sky blue cake', 18000, 'cake2.jpeg', 10, '2017-11-17 19:59:10'),
(23, 'christmas cake', 21000, 'cake3.jpeg', 10, '2017-11-17 20:00:22'),
(29, 'chocolate nutella cupcakes recipe', 20000, 'chocolate nutella cupcakes recipe.jpeg', 10, '2017-11-17 20:04:31'),
(30, 'small wedding cake', 40000, 'small weding cake.jpeg', 5, '2017-11-17 20:05:11'),
(31, 'small batch cheese forcting', 3000, 'Small-Batch-Cream-Cheese-Frosting-and-Chocolate-Heart-Decorations-for-Cupcakes-1024x680edited.jpg', 10, '2017-11-17 20:06:17');

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
(1, 'aungaung', 'ed991b466915e44d4c80e97a9f1be676b64a31f7', 0, '09425399', '2017-11-11 11:49:50'),
(2, 'cashier', 'a5b42198e3fb950b5ab0d0067cbe077a41da1245', 1, '09255760378', '2017-11-12 09:09:10'),
(3, 'waiter', 'bda55eb01505bf9c8d7684bcb0c1f1124f64efa9', 2, '09255927460', '2017-11-12 09:09:49');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
