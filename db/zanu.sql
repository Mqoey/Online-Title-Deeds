-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 05:06 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zanu`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(8) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `password`, `fname`, `lname`, `gender`, `email`, `is_active`, `role`) VALUES
(10514726, '$2y$10$jI64CHs3.9ADcHWrFKFnTuvnu5566L.V/jaZdQyr1NtltsClIcMGe', 'John', 'Doe', 'Male', 'mndlovu@axissol.com', 1, 'admin'),
(10821517, '$2y$10$jI64CHs3.9ADcHWrFKFnTuvnu5566L.V/jaZdQyr1NtltsClIcMGe', 'John', 'Nyama', 'Male', 'jnyama@gmail.com', 1, 'client');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `id_no` varchar(20) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `department` varchar(100) NOT NULL,
  `province_id` int(4) NOT NULL,
  `district` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `cell` varchar(10) NOT NULL,
  `position` varchar(20) NOT NULL,
  `position_for` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `id_no`, `firstname`, `lastname`, `DOB`, `gender`, `department`, `province_id`, `district`, `branch`, `cell`, `position`, `position_for`) VALUES
(10716906, '08-2026116w14', 'Mqondisi', 'Ndlovu', '2021-04-11', 'Female', 'Men', 2, 'dist2', 'branch2', 'cellC', 'Chairman', 'None'),
(36674848, '08-2026116w14', 'Mqondisi', 'Ndlovu', '2021-04-11', 'Female', 'Men', 2, 'dist2', 'branch2', 'cellC', 'Chairman', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`province_id`, `province_name`) VALUES
(1, 'Harare'),
(2, 'Bulawayo'),
(3, 'Mash East'),
(4, 'Mash Central'),
(5, 'Mash West'),
(6, 'Masvingo'),
(7, 'Midlands'),
(8, 'Mat North'),
(9, 'Mat South');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deeds`
--

CREATE TABLE `tbl_deeds` (
  `deed_number` int(11) NOT NULL,
  `first_name` varchar(450) NOT NULL,
  `email` varchar(450) DEFAULT NULL,
  `phone` varchar(450) DEFAULT NULL,
  `address` varchar(450) DEFAULT NULL,
  `province` varchar(450) NOT NULL,
  `id_number` varchar(450) NOT NULL,
  `property` varchar(501) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_deeds`
--

INSERT INTO `tbl_deeds` (`deed_number`, `first_name`, `email`, `phone`, `address`, `province`, `id_number`, `property`, `status`) VALUES
(1, 'Mqondisi Ndlovu', 'mndlovu', '0772783880', 'avondale', 'Harare', '082026114w14', '', 0),
(2, 'mh', 'fdb', 'sbsrb', 'wgg', 'sssssg', 'wwwwwt', '', 0),
(3, 'Mqondisi Ndlovu', 'mndlovu@axissol.com', '0772783880', '14 Arundale Road', '1', 'mndlovu@axissol.com', '', 0),
(4, 'Mqondisi Ndlovu', 'mndlovu@axissol.com', '0772783880', '14 Arundale Road', '1', 'mndlovu@axissol.com', '', 0),
(5, 'Mqondisi Ndlovu', 'mndlovu@axissol.com', '0772783880', '14 Arundale Road', '1', 'mndlovu@axissol.com', '', 0),
(6, 'Mqondisi Ndlovu', 'mndlovu@axissol.com', '0772783880', '14 Arundale Road', '1', 'mndlovu@axissol.com', '', 1),
(7, 'Mqondisi Ndlovu', 'mndlovu@axissol.com', '0772783880', '14 Arundale Road', 'Harare', 'mndlovu@axissol.com', '', 1),
(8, 'Mqondisi Ndlovu', 'mndlovu@axissol.com', '0772783880', '14 Arundale Road', 'Harare', 'mndlovu@axissol.com', 'hjh', 1),
(9, 'Mike', 'blessing@kamifatech.co.zw', '', '7 Ringate Road Rhodesville', 'Harare', 'blessing@kamifatech.co.zw', 'byo', 1),
(10, 'Theo', 'rohim.systems@gmail.com', '0998877666', '17810 Emhlangeni', 'Harare', 'rohim.systems@gmail.com', 'Mutare', 1),
(11, 'Mike', 'mndlovu@axissol.com', '0772783880', '14 Arundale Road', 'Harare', 'mndlovu@axissol.com', 'Mutare', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `tbl_deeds`
--
ALTER TABLE `tbl_deeds`
  ADD PRIMARY KEY (`deed_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_deeds`
--
ALTER TABLE `tbl_deeds`
  MODIFY `deed_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
