-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 05:54 AM
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
-- Database: `apsms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Full_Name` varchar(150) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Full_Name`, `Username`, `Password`) VALUES
('Admin Atim', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `s_no` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `img` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`s_no`, `category_name`, `img`, `description`) VALUES
(11, 'Peas', 'Category_439.jpg', 'Good quality peas.'),
(12, 'Rice', 'Category_466.jpg', 'Best quality rice.'),
(13, 'Groundnuts', 'Category_166.jpg', 'Best groundnuts from soroti.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `s_no` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(150) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`s_no`, `product_name`, `description`, `price`, `img`, `category_id`) VALUES
(3, 'Super Rice', 'New brand from Busia.', '45000.00', 'Product_839.jpg', 12),
(4, 'Groundnuts', 'Soroti-made.', '45000.00', 'Product_660.jpg', 13),
(5, 'Magumba', 'Big groundnuts.', '32000.00', 'Product_308.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `s_no` int(11) NOT NULL,
  `FullName` varchar(150) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`s_no`, `FullName`, `Address`, `Contact`, `Username`, `Password`) VALUES
(1, 'Atim Abel Atim', 'Tororo Town', '0736352425', 'atim', 'atim'),
(5, 'Opoya Ponsiano', 'Here', '0785634231', 'opoya', '9ec3e938f4399e3443e980e2c'),
(6, 'New User', 'New Place', '0778654523', 'new', '22af645d1859cb5ca6da0c484'),
(7, 'tarma', 'tororo', '0787826150', 'tarma', '5a718e12e8c7eb2ee00bfe8ac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `s_no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
