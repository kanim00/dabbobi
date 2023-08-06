-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 05:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dabbobi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'kelvin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `livestock`
--

CREATE TABLE `livestock` (
  `animal_id` int(11) NOT NULL,
  `animal_type` text NOT NULL,
  `breed` text NOT NULL,
  `cost_price` double DEFAULT NULL,
  `selling_price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestock`
--

INSERT INTO `livestock` (`animal_id`, `animal_type`, `breed`, `cost_price`, `selling_price`) VALUES
(5, 'dngkdgnkdnsd', 'jneknkdjg', 46, 73.6),
(8, 'sokoto red', 'jnldafjlag', 13, 20.8);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `animal_id` int(11) NOT NULL,
  `animal_name` text NOT NULL,
  `animal_breed` text NOT NULL,
  `cost_price` double NOT NULL,
  `supplier_name` text NOT NULL,
  `puchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`animal_id`, `animal_name`, `animal_breed`, `cost_price`, `supplier_name`, `puchase_date`) VALUES
(6, 'sfaddsgd', 'agddgagd', 222, 'dggd', '0000-00-00'),
(8, 'snffsda', 'ajnfjdnsdf', 45, 'ndfduuuuubs', '0000-00-00'),
(9, 'cow', 'Sokoto red', 50, 'richyrich', '0000-00-00'),
(11, 'goat', 'sokoto', 34, 'kwame adwo', '0000-00-00'),
(12, 'meow', 'jumbo', 15, 'avjfakkkk', '0000-00-00'),
(13, 'meow', 'jumbo', 15, 'avjfakkkk', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `animal_id` int(11) NOT NULL,
  `animal_name` text NOT NULL,
  `animal_breed` text NOT NULL,
  `selling_price` double NOT NULL,
  `sale_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`animal_id`, `animal_name`, `animal_breed`, `selling_price`, `sale_date`) VALUES
(1, 'sokoto red', 'jnldafjlag', 20.8, '0000-00-00'),
(2, 'cow', 'Sokoto red', 80, '0000-00-00'),
(3, 'cow', 'Sokoto red', 80, '0000-00-00'),
(4, 'sokoto red', 'jnldafjlag', 20.8, '0000-00-00'),
(5, 'cow', 'Sokoto red', 80, '0000-00-00'),
(6, 'ajfdasd', 'hhfsdds', 22.4, '0000-00-00'),
(7, 'meow', 'jumbo', 24, '0000-00-00'),
(8, 'meow', 'jumbo', 24, '0000-00-00'),
(9, 'goat', 'sokoto', 54.4, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` text NOT NULL,
  `staff_contact` varchar(50) DEFAULT NULL,
  `staff_address` text DEFAULT NULL,
  `staff_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_contact`, `staff_address`, `staff_password`) VALUES
(1, 'richy', '0249883728', 'kumasi', 'kelvin.anim@gmail.com'),
(2, 'richy', '0277856237', 'accra', 'staffid'),
(3, 'sam', '0277856237', 'Teshie Nungua', 'SAm123');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` text NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `contact`, `address`) VALUES
(1, 'georgeooo', '0249883728', 'acraaaa'),
(2, 'kwame', '1234', 'lateh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `livestock`
--
ALTER TABLE `livestock`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `livestock`
--
ALTER TABLE `livestock`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
