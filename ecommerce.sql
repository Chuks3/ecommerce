-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 02:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--
CREATE DATABASE IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ecommerce`;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Apple'),
(2, 'DELL'),
(3, 'HP'),
(4, 'LG'),
(5, 'Samsung'),
(6, 'Sony');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `categ_id` int(100) NOT NULL,
  `categ_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categ_id`, `categ_title`) VALUES
(1, 'Cameras'),
(2, 'Computers'),
(3, 'iPads'),
(4, 'Laptops'),
(5, 'Mobiles'),
(6, 'Tablets');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `prod_id` int(100) NOT NULL,
  `categ_id` int(100) NOT NULL,
  `brand_id` int(100) NOT NULL,
  `prod_title` varchar(50) NOT NULL,
  `prod_price` int(10) NOT NULL,
  `prod_descript` text NOT NULL,
  `prod_img` text NOT NULL,
  `prod_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `categ_id`, `brand_id`, `prod_title`, `prod_price`, `prod_descript`, `prod_img`, `prod_keywords`) VALUES
(1, 1, 6, 'Sony Camera ', 30000, '', 'son-cam2.jpg', 'sony, camera '),
(2, 2, 5, 'Samsung Computer ', 50000, '', 'sam-desk.jpg', 'Samsung, computer'),
(3, 2, 2, 'Dell Computer', 50000, '', 'dell-desk.jpg', 'dell, computer '),
(4, 2, 3, 'HP Computer', 50000, '', 'hp-desk.jpeg', 'hp, computer '),
(5, 2, 1, 'Apple Computer', 250000, '', 'idesk2.jpg', 'apple, computer '),
(6, 3, 1, 'Ipad', 45000, '', 'ipad.jpeg', 'apple, pads, ipads'),
(7, 1, 4, 'LG Camera ', 20000, '', 'lg-cam2.jpg', 'lg, camera '),
(8, 2, 4, 'LG Computer ', 50000, '', 'lg-desk.jpg', 'lg, computer '),
(9, 4, 1, 'MacBook Laptop', 250000, '', 'mac-air.jpg', 'mac, book, laptop '),
(10, 4, 2, 'Dell Laptop', 150000, '', 'dell-lap.jpg', 'dell, laptop '),
(11, 4, 3, 'HP Laptop', 165000, '', 'hp-lap.jpg', 'hp, laptop'),
(13, 1, 5, 'Samsung Camera', 30000, '', 'sam-cam.gif', 'Samsung, camera '),
(14, 3, 5, 'Samsung pad', 45000, '', 'sam-pad2.jpg', 'sam, samsung, pads'),
(15, 2, 6, 'Sony Computer', 130000, '', 'sony-desk.jpg', 'sony, computer, destop'),
(16, 5, 1, 'iPhone 14 Pro Max', 337000, 'It has slow mode features, slick design, durable battery, excellent camera, etc.', 'iphone-14pro.jpg', 'apple, iphone, 14, pro, max'),
(17, 5, 2, 'Dell Venue', 75000, '', 'dell-venue.jpg', 'dell, venue, mobile'),
(18, 5, 3, 'HP Mobile', 72000, '', 'hp-mobile.png', 'hp, mobile'),
(19, 5, 5, 'Samsung Galaxy M53', 186000, '', 'galaxy-m53.jpg', 'samsung, galaxy, mobile'),
(20, 4, 5, 'Samsung Galaxy Book3', 250000, '', 'sam-lap.jpg', 'sam, samsung, laptop, book3, galaxy '),
(21, 4, 4, 'LG Gram 15', 130000, '', 'lg-gram15.jpg', 'lg, gram, laptop'),
(22, 4, 6, 'Sony VAIO Laptop', 138500, '', 'sony-vaio.jpg', 'sony, vaio, laptop'),
(25, 5, 6, 'Sony Xperia 5', 156000, '', 'sony-xperia5.jpg', 'sony, xperia, mobile, phone'),
(26, 1, 1, 'Apple Smart Cam', 199100, '', 'AppleiCam.jpeg', 'apple, smart, camera ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categ_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categ_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
