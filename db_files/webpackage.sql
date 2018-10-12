-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 08:49 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpackage`
--

-- --------------------------------------------------------

--
-- Table structure for table `package_book`
--

CREATE TABLE `package_book` (
  `booking_id` int(25) NOT NULL,
  `pack_id` int(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `requirements` varchar(250) NOT NULL,
  `booking_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_book`
--

INSERT INTO `package_book` (`booking_id`, `pack_id`, `name`, `phone`, `email`, `requirements`, `booking_status`) VALUES
(1, 2, 'Sumit Maharjan', 2147483647, 'timusumit@gmail.com', 'a', ''),
(2, 2, 'Sumit Maharjan', 2147483647, 'timusumit@gmail.com', 'more specific instructions given', ''),
(3, 1, 'Ramesh', 78945612, 'timusumit@gmail.com', 'asdfds', ''),
(4, 1, 'Sumit Maharjan', 111, 'sadf', 'sdfsdaf', ''),
(5, 0, 'Sumit Maharjan', 2147483647, 'timusumit@gmail.com', 'sfda', ''),
(6, 0, 'sdfsdf', 0, 'sdfasadf', 'sadf', ''),
(7, 0, 'Sumit Maharjan', 111, 'abc@gmail.com', 'aa', ''),
(8, 1, 'Sumit Maharjan', 2147483647, 'timusumit@gmail.com', 'zczxc', ''),
(9, 0, 'sadf', 2147483647, 'timusumit@gmail.com', 'sdfsadf', ''),
(10, 1, 'Sumit Maharjan', 2147483647, 'timusumit@gmail.com', 'ssafdsfas', ''),
(11, 1, 'Sumit Maharjan', 2147483647, 'timusumit@gmail.com', 'sfasf', ''),
(12, 2, 'Ramesh', 2147483647, 'r@rt.com', 'tesst ing', ''),
(13, 2, 'sdfadf', 0, 'sadfsadf', 'sadfad', ''),
(14, 2, 'Prerana', 123456, 'thapa@gmail.com', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `package_setup`
--

CREATE TABLE `package_setup` (
  `package_id` int(15) NOT NULL,
  `package_name` varchar(150) NOT NULL,
  `package_features` blob NOT NULL,
  `package_price` int(25) NOT NULL,
  `package_offer_price` int(25) NOT NULL,
  `best_for` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_setup`
--

INSERT INTO `package_setup` (`package_id`, `package_name`, `package_features`, `package_price`, `package_offer_price`, `best_for`) VALUES
(2, 'Static Basic Pack', 0x3c756c3e0d0a093c6c693e53746174696320576562736974653c2f6c693e0d0a093c6c693e53696e676c6520506167652044657369676e3c2f6c693e0d0a093c6c693e47616c6c65727920496e636c756465643c2f6c693e0d0a093c6c693e34204d656e75204974656d733c2f6c693e0d0a093c6c693e3c7374726f6e673e467265652057656220486f7374696e673c2f7374726f6e673e3c2f6c693e0d0a093c6c693e3c7374726f6e673e4672656520282e6e7020526567697374726174696f6e293c2f7374726f6e673e3c2f6c693e0d0a3c2f756c3e0d0a, 4500, 2499, 'Simple Portfolio');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(150) NOT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `email`, `password`, `updated_at`) VALUES
(9, 'Sumit', 'nurse@ent.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-08-03 08:40:36'),
(10, 'sumit', 'timusumit@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-08-03 10:42:51'),
(11, 'dhruba', 'dhruba@ramesh.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-08-07 06:54:23'),
(12, 'akhabar', 'sakhabar@gmail.com', 'e6e061838856bf47e1de730719fb2609', '2018-08-13 12:11:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package_book`
--
ALTER TABLE `package_book`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `package_setup`
--
ALTER TABLE `package_setup`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package_book`
--
ALTER TABLE `package_book`
  MODIFY `booking_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `package_setup`
--
ALTER TABLE `package_setup`
  MODIFY `package_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
