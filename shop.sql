-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2016 at 12:37 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_price` varchar(5) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `item_price`, `user_id`) VALUES
(22, 1, '11.45', 1),
(25, 13, '27.95', 1),
(26, 2, '15.49', 2),
(27, 11, '10.95', 2),
(28, 5, '8.95', 2),
(30, 11, '10.95', 4),
(31, 6, '15.95', 4),
(32, 2, '15.49', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(5) NOT NULL,
  `product_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_image`, `product_name`, `product_price`, `product_info`) VALUES
(1, 'product_images/1.jpg', 'Bleach: Kon Plush', '11.45', 'Official licensed Bleach plush from Great Eastern Entertainment.\r\n\r\nMade with high quality materials.\r\n\r\nSize: 8"'),
(2, 'product_images/2.jpg', 'Bleach: Ulquiorra Plush', '15.49', 'Official Bleach plush from Great Eastern Entertainment. Learn More'),
(3, 'product_images/3.jpg', 'Domo Kun: 9 Inch Domo Plush', '16.99', 'He''s a mysterious creature that was hatch from an egg. He has monster-like features but he conceals a gentle soul in a body of pure fluff.\r\n\r\nSize: 9"'),
(4, 'product_images/4.jpg', 'Fullmetal Alchemist: Alphonse Plush', '12.45', 'Official licensed plush from Great Eastern Entertainment.\r\n\r\nMade with high quality materials.'),
(5, 'product_images/5.jpg', 'Gurren Lagann: Boota Plush', '8.95', 'Official licensed plush from Great Eastern Entertainment.\r\n\r\nMade with high quality materials.'),
(6, 'product_images/6.jpg', 'Inuyasha: Kirara Plush', '15.95', 'Official licensed Inuyasha plush from Great Eastern Entertainment.\r\n\r\nMade with high quality materials.\r\n\r\nSize: 9"'),
(7, 'product_images/7.jpg', 'Specter Plush', '7.99', 'From Tanpopo Volume 2, Kuro, also known as Poodle, has transformed into Specter.\r\n\r\nThis plush follows the original black Kuro Poodle plush and also stands 7 inch tall.'),
(8, 'product_images/8.jpg', 'Tenchi Muyo GXP: Fuku 9 Inch Plush', '27.99', 'Official licensed plush from Great Eastern Entertainment.'),
(9, 'product_images/9.jpg', 'Totoro: Blue 5.5 Inch Fluffy Plush', '15.99', 'Imported from Japan. Authentic Totoro plush approved by Studio Ghibli. \r\n\r\nDesigned by Sun Arrow. \r\n\r\nSize: 5.5"'),
(10, 'product_images/10.jpg', 'Tsubasa: Mokona Plush', '16.95', 'Official licensed plush from Great Eastern Entertainment.\r\n\r\nMade with high quality materials.'),
(11, 'product_images/11.jpg', 'xxxHolic: Black Mokona Plush', '10.95', 'Official licensed plush from Great Eastern Entertainment.\r\n\r\nMade with high quality materials.\r\n\r\nSize: 6"'),
(12, 'product_images/12.jpg', 'Dissidia Final Fantasy Trading Arts Figure: Sephiroth', '16.95', 'Official Square Enix product imported from Japan. \r\n\r\nThe Dissidia: Final Fantasy Trading Arts figures bring the characters of the video game to life with detailed sculpts.\r\n\r\nCollect them all and let the magic of Final Fantasy enchant you all over again.\r\n\r\nBlister card packaging. \r\n\r\nSize: 6 7/8" tall'),
(13, 'product_images/13.jpg', 'Kingdom Hearts II: Jack Skellington Play Arts Action Figure (Nightmare Before Christmas)', '27.95', 'Imported from Japan!.\r\n\r\nThe "Pumpkin King" himself, Jack Skellington and his faithful dog Zero make their Play Arts debut.\r\n\r\nA little bit cute, a little bit scary, this highly detailed figure is sure to make an excellent gift for any season of the year.\r\n\r\nBlister card packaging.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `user_name`, `password`) VALUES
(1, 'test', 'test', 'test', 'test', '$2y$10$uCWFdhIEDIlCECloFVQgGutvR.tzdbi4pqShIY.RJiGPpJhrHIZ32'),
(2, 'anime', 'anime', 'anime', 'anime', '$2y$10$heUY7bo1qXKct63XYwfdSejIG7ja7V3bTOb8PEh8BVlm5UBlPGGQi'),
(3, 'Ð¦ÐµÑ†Ð¾', 'ÐÑ‚Ð°Ð½Ð°ÑÐ¾Ð²', '.,', 'ceco', '$2y$10$Wzh36GWXC5.y0MHCLm/iVeaT978Ztr6NkSi/7qc4UBP0.3RWN4DpG'),
(4, 'abv', 'abv', 'abv', 'abv', '$2y$10$ijZd.4u7W4Q2ECY4sfEDx.5abSQAobsuvV1rgB6x/GyJnSrcbPdmC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
