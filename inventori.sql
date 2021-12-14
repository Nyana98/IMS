-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 05:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `asset_id` int(11) NOT NULL,
  `asset_image` text NOT NULL,
  `asset_barcode` varchar(100) NOT NULL,
  `asset_name` varchar(100) NOT NULL,
  `model_asset` varchar(100) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `categories_name` varchar(200) NOT NULL,
  `quantity` int(100) NOT NULL,
  `asset_status` enum('Available','Not Available') NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`asset_id`, `asset_image`, `asset_barcode`, `asset_name`, `model_asset`, `brand_name`, `categories_name`, `quantity`, `asset_status`, `created_date`, `created_by`, `updated_by`) VALUES
(5, '', 'pp009', 'LASER', 'laser', 'EPSON', 'LASERJET', 99, 'Available', '0000-00-00', '', ''),
(9, '', 'M123', 'MOUSE', 'MOUSE', 'EPSON', 'LASERJET', 11, 'Not Available', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `asset_request`
--

CREATE TABLE `asset_request` (
  `reqas_id` int(100) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_no` varchar(100) NOT NULL,
  `staff_dept` varchar(100) NOT NULL,
  `order_description` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `model_asset` varchar(100) NOT NULL,
  `asset_name` varchar(100) NOT NULL,
  `asset_barcode` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_code` varchar(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `brand_active` int(11) NOT NULL,
  `brand_status` enum('Available','Not Available') NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(225) NOT NULL,
  `updated_by` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_code`, `brand_name`, `brand_active`, `brand_status`, `created_date`, `created_by`, `updated_by`) VALUES
(2, 'EPS 002', 'EPSON', 1, 'Available', '0000-00-00', '', ''),
(3, 'CAN 001', 'CANON', 0, 'Available', '0000-00-00', '', ''),
(4, 'HP 001', 'HP', 0, 'Available', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_code` varchar(20) NOT NULL,
  `categories_name` varchar(100) NOT NULL,
  `categories_active` int(11) NOT NULL,
  `categories_status` enum('Available','Not Available') NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(225) NOT NULL,
  `updated_by` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_code`, `categories_name`, `categories_active`, `categories_status`, `created_date`, `created_by`, `updated_by`) VALUES
(1, 'INK 001', 'LASERJET', 1, 'Available', '2021-11-09', 'ADMIN', 'ADMIN'),
(3, 'LAP 001', 'NOTEBOOK', 0, 'Available', '0000-00-00', '', ''),
(4, 'LAP 002', 'LAPTOP', 0, 'Available', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `inrequest_details`
--

CREATE TABLE `inrequest_details` (
  `inreq_id` int(11) NOT NULL,
  `reqin_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inrequest_details`
--

INSERT INTO `inrequest_details` (`inreq_id`, `reqin_id`, `product_name`, `quantity`) VALUES
(31, NULL, 'INK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_request`
--

CREATE TABLE `inventory_request` (
  `reqin_id` int(11) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_no` varchar(100) NOT NULL,
  `staff_dept` varchar(100) NOT NULL,
  `order_description` varchar(100) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory_request`
--

INSERT INTO `inventory_request` (`reqin_id`, `staff_name`, `staff_no`, `staff_dept`, `order_description`, `created_date`) VALUES
(15, 'yana', 'Z123', 'IT', '11', '0011-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_no` int(11) NOT NULL,
  `staff_dept` varchar(100) NOT NULL,
  `order_description` varchar(225) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(225) NOT NULL,
  `updated_by` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `staff_name`, `staff_no`, `staff_dept`, `order_description`, `created_date`, `created_by`, `updated_by`) VALUES
(3, '0000-00-00', 'yana', 0, '', '', '0000-00-00', '', ''),
(4, '2200-02-22', 'alia', 0, 'IT', 'HI', '0000-00-00', '', ''),
(5, '2022-10-10', 'HI', 0, 'IT', 'HI', '0000-00-00', '', ''),
(6, '0000-00-00', 'aqaq', 0, '', '', '0000-00-00', '', ''),
(7, '2022-01-01', 'YANA', 112, 'IT', 'LALALA', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_barcode` varchar(20) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `model_type` varchar(100) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `categories_name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `active` int(11) NOT NULL,
  `product_status` enum('Available','Not Available') NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(225) NOT NULL,
  `updated_by` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_image`, `product_barcode`, `product_name`, `model_type`, `brand_name`, `categories_name`, `quantity`, `active`, `product_status`, `created_date`, `created_by`, `updated_by`) VALUES
(48, '', '202020', 'printer', 'printer', '', '', '11', 0, 'Not Available', '0000-00-00', '', ''),
(51, '71071-laser.jpg', '112', 'laser', 'laser', 'EPSON', 'LASERJET', '22', 0, 'Available', '0000-00-00', '', ''),
(52, '96079-mouse.jfif', 'M123', 'MOUSE', 'HP', 'HP', 'NOTEBOOK', '11', 0, 'Available', '0000-00-00', '', ''),
(53, '92609-printer.png', '1', '1', '1', 'EPSON', 'LASERJET', '1', 0, 'Available', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `img_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_name`, `capacity`, `info`, `img_path`) VALUES
(1, '11', '11', '111', 'BTM ZPP (06) 30 NOVEMBER 2021.png');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(225) NOT NULL,
  `supplier_address` varchar(225) NOT NULL,
  `supplier_contact` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(225) NOT NULL,
  `updated_by` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_contact`, `created_date`, `created_by`, `updated_by`) VALUES
(1, 'HP', 'SELANGOR', 135858563, '0000-00-00', '', ''),
(2, 'CANON', 'SELANGOR', 135858563, '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`asset_id`);

--
-- Indexes for table `asset_request`
--
ALTER TABLE `asset_request`
  ADD PRIMARY KEY (`reqas_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `inrequest_details`
--
ALTER TABLE `inrequest_details`
  ADD PRIMARY KEY (`inreq_id`);

--
-- Indexes for table `inventory_request`
--
ALTER TABLE `inventory_request`
  ADD PRIMARY KEY (`reqin_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `asset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `asset_request`
--
ALTER TABLE `asset_request`
  MODIFY `reqas_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inrequest_details`
--
ALTER TABLE `inrequest_details`
  MODIFY `inreq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `inventory_request`
--
ALTER TABLE `inventory_request`
  MODIFY `reqin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
