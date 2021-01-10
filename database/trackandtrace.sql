-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 03:25 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trackandtrace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_code` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_cont` varchar(255) NOT NULL,
  `company_addr` varchar(255) NOT NULL,
  `company_city` varchar(255) NOT NULL,
  `company_state` varchar(255) NOT NULL,
  `company_type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_code`, `company_name`, `company_email`, `company_cont`, `company_addr`, `company_city`, `company_state`, `company_type`, `created_at`, `update_at`) VALUES
(1, '', 'sk traders pvt ltd', 'sk@gmail.com', '0987654321', 'kandivali', 'mumbai', 'maharashtra', '', '2020-06-11 09:01:47', '2020-06-18 01:59:13'),
(9888, '', 'decoration pvt ltd', 'decor@gmail.com', '1234567890', '', '', '', 'Trader', '2020-06-12 09:29:22', '2020-06-18 07:17:37'),
(9889, '', 'ram pvt ltd', 'ram@gmail.com', '1234567890', '', '', '', 'import', '2020-06-12 09:30:06', '2020-06-18 07:17:37'),
(9890, '71707147', 'akproduction', 'cak@gmail.com', '7654321890', 'virar', 'gujrat', 'maharashtra', 'Trader', '2020-06-12 09:39:42', '2020-06-18 07:17:37'),
(9891, '08560815', 'rajhansh corporation', 'rp@gmail.com', '1234567880', 'nsp', 'goa', 'maharashtra', '', '2020-06-12 09:55:08', '2020-06-18 09:45:06'),
(9892, '18250676', 'ramesh pvt ltd', 'ramesh@gmail.com', '9876543210', 'mumbai', 'mumbai', 'maharashtra', 'Transport', '2020-06-14 23:49:21', '2020-06-18 07:17:37'),
(9893, '75417669', 'hp pvt ltd', 'hp@gmail.com', '0987654321', 'nallasopara east', 'mumbai', 'maharashtra', 'Transport', '2020-06-18 09:39:02', '2020-06-18 09:47:06'),
(9894, '13599953', 'issco pvt ltd', 'issco@gmail.com', '1234567890', '', '', '', 'Trader', '2020-06-22 02:16:20', '2020-06-22 07:46:20'),
(9895, '68294865', 'qwerty', 'qwerty@gmail.com', '1234567890', '', '', '', 'import', '2020-06-22 07:41:07', '2020-06-22 13:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `company_user`
--

CREATE TABLE `company_user` (
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_user`
--

INSERT INTO `company_user` (`user_id`, `company_id`, `user_name`, `user_email`, `user_password`, `status`, `created_at`, `update_at`) VALUES
(1, 1, 'skmart pvt ltd', 'skmart@gmail.com', '12345', '1', '2020-06-12 06:36:56', '2020-06-18 09:20:38'),
(2, 9891, 'Ram Gopal Trader\'s', 'ram@gmail.com', '12345', '1', '2020-06-13 15:13:33', '2020-06-18 09:35:16'),
(3, 9891, 'roopa', 'roopa@gmail.com', '', '1', '2020-06-14 00:58:50', '2020-06-18 09:35:16'),
(4, 9888, 'decoration pvt ltd', 'decor@gmail.com', '12345', '1', '2020-06-14 01:01:01', '2020-06-18 09:35:16'),
(5, 9889, 'ramshayam pvt ltd', 'ram1@gmail.com', 'md5(12345)', '1', '2020-06-14 01:01:51', '2020-06-18 04:10:03'),
(6, 9890, 'rak@gmail.com', 'rk@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0', '2020-06-14 01:02:32', '2020-06-18 09:35:16'),
(7, 9889, 'ram pvt ltd', 'ram1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0', '2020-06-16 00:50:02', '2020-06-18 09:35:16'),
(8, 9894, 'issco ', 'issco@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1', '2020-06-22 02:19:38', '2020-06-22 07:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `reference_master`
--

CREATE TABLE `reference_master` (
  `Reference_id` int(11) NOT NULL,
  `Booking_number` int(11) NOT NULL,
  `Shipping_bill_number` varchar(100) NOT NULL,
  `Menifest_HBL_number` varchar(100) NOT NULL,
  `HBL_number` int(11) NOT NULL,
  `Container_number` int(11) NOT NULL,
  `Shipping_invoice_number` varchar(100) NOT NULL,
  `MAWB_number` varchar(100) NOT NULL,
  `HAWB_number` varchar(100) NOT NULL,
  `OBL_number` varchar(100) NOT NULL,
  `OBL_date` date NOT NULL,
  `Packages` varchar(100) NOT NULL,
  `Weight` varchar(100) NOT NULL,
  `Volume` varchar(100) NOT NULL,
  `Origin` varchar(100) NOT NULL,
  `Final_Destination` varchar(100) NOT NULL,
  `BL_Type` varchar(100) NOT NULL,
  `Shipment_status` varchar(100) NOT NULL,
  `Internal_Package` varchar(100) NOT NULL,
  `External_Package` varchar(100) NOT NULL,
  `DO_number` varchar(100) NOT NULL,
  `DO_Order_date` date NOT NULL,
  `IGM_number` varchar(100) NOT NULL,
  `IGM_date` date NOT NULL,
  `Local_IGM_number` varchar(100) NOT NULL,
  `Local_IGM_date` date NOT NULL,
  `company_id` int(11) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference_master`
--

INSERT INTO `reference_master` (`Reference_id`, `Booking_number`, `Shipping_bill_number`, `Menifest_HBL_number`, `HBL_number`, `Container_number`, `Shipping_invoice_number`, `MAWB_number`, `HAWB_number`, `OBL_number`, `OBL_date`, `Packages`, `Weight`, `Volume`, `Origin`, `Final_Destination`, `BL_Type`, `Shipment_status`, `Internal_Package`, `External_Package`, `DO_number`, `DO_Order_date`, `IGM_number`, `IGM_date`, `Local_IGM_number`, `Local_IGM_date`, `company_id`, `added_at`) VALUES
(2, 3243, '', '', 68783, 5523, '', '', '', '34', '2020-06-27', '344', '34', '343', '333', '3343', '', '3434', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 1, '2020-06-22 10:56:28'),
(3, 648648333, '1313141', '434342553', 525252, 25252525, '25252', '52553442', '1434422', '525323', '2020-06-23', '12312', '42232', '322', 'Goa', 'Gujrat', '34431', '432243', '4', '54', '324234', '2020-06-24', '342342', '2020-06-15', '4324', '2020-06-11', 1, '2020-06-22 11:09:00'),
(4, 13324, '123456', '23424232', 424242, 0, '', '88888', '', '34343', '2020-06-16', '686868', '66', '323', '33', '22', '', '332', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 1, '2020-06-23 01:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `reference_milestone`
--

CREATE TABLE `reference_milestone` (
  `Milestone_id` int(11) NOT NULL,
  `Milestone` varchar(100) NOT NULL,
  `Milestone_date` date NOT NULL,
  `Reference_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference_milestone`
--

INSERT INTO `reference_milestone` (`Milestone_id`, `Milestone`, `Milestone_date`, `Reference_id`) VALUES
(1, 'arrival', '2020-06-24', 2),
(2, 'devliverd', '2020-06-24', 2),
(3, 'qwerty', '2020-06-24', 2),
(4, 'qwerty', '2020-06-24', 2),
(5, 'pickup', '2020-06-26', 2),
(6, 'dasds', '2020-06-24', 2),
(7, 'dgds', '2020-06-18', 4),
(8, '667', '2020-06-24', 4),
(9, 'rty', '2020-06-24', 2),
(10, 'tat', '2020-06-24', 2),
(11, 'haha', '2020-06-24', 3),
(12, 'er', '2020-06-24', 3),
(13, 'ys', '2020-06-25', 2),
(15, 'rajma', '2020-06-23', 3),
(16, 'efhf', '2020-06-24', 2),
(17, 'whwh', '2020-06-16', 4),
(18, 'ys', '2020-06-25', 2),
(19, 'adsad', '2020-06-11', 4),
(20, 'nns', '2020-06-18', 4),
(21, 'arrived at', '2020-06-26', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `phone`, `email`) VALUES
(1, 'atul', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(2, 'a', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(3, 'b', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(4, 'c', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(5, 'd', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(6, 'e', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(7, 'atul', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(8, 'a', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(9, 'b', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(10, 'c', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(11, 'd', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(12, 'e', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(13, 'atul', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(14, 'a', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(15, 'b', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(16, 'c', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(17, 'd', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(18, 'e', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(19, 'atul', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(20, 'a', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(21, 'b', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(22, 'c', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(23, 'd', 'chaturvedi', '1234567890', 'ak@gmail.com'),
(24, 'e', 'chaturvedi', '1234567890', 'ak@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_user`
--
ALTER TABLE `company_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `reference_master`
--
ALTER TABLE `reference_master`
  ADD PRIMARY KEY (`Reference_id`),
  ADD UNIQUE KEY `HBL_number` (`HBL_number`),
  ADD UNIQUE KEY `Booking_number` (`Booking_number`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `reference_milestone`
--
ALTER TABLE `reference_milestone`
  ADD PRIMARY KEY (`Milestone_id`),
  ADD KEY `Reference_id` (`Reference_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9896;

--
-- AUTO_INCREMENT for table `company_user`
--
ALTER TABLE `company_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reference_master`
--
ALTER TABLE `reference_master`
  MODIFY `Reference_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `reference_milestone`
--
ALTER TABLE `reference_milestone`
  MODIFY `Milestone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_user`
--
ALTER TABLE `company_user`
  ADD CONSTRAINT `company_user_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `reference_master`
--
ALTER TABLE `reference_master`
  ADD CONSTRAINT `reference_master_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `reference_milestone`
--
ALTER TABLE `reference_milestone`
  ADD CONSTRAINT `reference_milestone_ibfk_1` FOREIGN KEY (`Reference_id`) REFERENCES `reference_master` (`Reference_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
