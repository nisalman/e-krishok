-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 07:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `image`, `price`) VALUES
(1, 'Mango', 'fruits', 'images/home/gallery1.jpg', '50'),
(2, 'berry', 'fruits', 'images/home/gallery2.jpg', '60'),
(3, 'Jackfruit', 'fruits', 'images/home/gallery3.jpg', '30'),
(4, 'Bean', 'veg', 'images/home/gallery7.jpg', '10'),
(5, 'cauliflower', 'veg', 'images/home/gallery5.jpg', '15'),
(6, 'Tomato', 'veg', 'images/home/gallery6.jpg', '20'),
(7, 'All Spice', 'spice', 'images/home/gallery9.jpg', '200'),
(8, 'Ginger', 'spice', 'images/home/gallery11.jpg', '35'),
(9, 'Elache', 'spice', 'images/home/gallery12.jpg', '50'),
(10, 'Milk', 'milk', 'images/home/gallery13.jpg', '80'),
(11, 'card', 'milk', 'images/home/gallery14.jpg', '120'),
(12, 'Ghee', 'milk', 'images/home/gallery16.jpg', '250'),
(13, 'Rice', 'rice', 'images/home/gallery17.jpg', '60'),
(14, 'Pulse', 'rice', 'images/home/gallery18.jpg', '100'),
(15, 'Egg', 'rice', 'images/home/gallery20.jpg', '36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'auncon', 'auncon@gmail.com', '$2y$10$b078jPtti7ttTt6m7Fitbu8jahyU./0FBvmf1H1UUOAh/jFHm.Kkm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
