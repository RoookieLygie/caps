-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 05:20 AM
-- Server version: 10.6.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u288427758_DayoTravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'wakeell', 'malik@gmail.com', '1234567'),
(2, 'alaran', '', 'alaran@gmail.com'),
(3, 'alaran', 'alaran@gmail.com', 'alaran'),
(4, 'kola', 'malik@gmail.com', 'kola'),
(5, 'dare', 'dare@gmail.com', 'dare');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `fullname` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'update', 'update@gmail.com', 'update'),
(13, 'karim', 'karim@gmail.com', 'karim'),
(14, 'Test', '1toon.info@gmail.com', '123456'),
(15, 'rookie', 'rookie109@gmail.com', 'lyzzapatacsil109'),
(16, 'wakeel', 'wakeel@gmail.com', '1234'),
(17, 'Marc Joesan', 'marxie@gmail.com', '123456'),
(18, 'Jeca Gamboa', 'jecagamboa11@gmail.com', '0123');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_booking2`
--

CREATE TABLE `reserve_booking2` (
  `id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `cp_num` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `days_and_nights` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `adult_count` varchar(100) NOT NULL,
  `kid_count` varchar(100) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `trav_date` varchar(100) NOT NULL,
  `trav_time` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `req_id` varchar(200) NOT NULL,
  `package` varchar(200) NOT NULL,
  `review` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `canc` varchar(200) NOT NULL,
  `payments` varchar(200) NOT NULL,
  `p_date` varchar(100) NOT NULL,
  `p_method` varchar(100) NOT NULL,
  `fm2` varchar(100) NOT NULL,
  `em2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserve_booking2`
--

INSERT INTO `reserve_booking2` (`id`, `fullname`, `cp_num`, `email`, `days_and_nights`, `province`, `destination`, `adult_count`, `kid_count`, `vehicle`, `trav_date`, `trav_time`, `street`, `status`, `price`, `req_id`, `package`, `review`, `date`, `canc`, `payments`, `p_date`, `p_method`, `fm2`, `em2`) VALUES
(15, 'Gabiel Alvi', '09515408978', '1toon.info@gmail.com', '2 Days & 1 Night', 'benguet', '', '2', '1', 'Company preferred', '2024-04-20', '17:00', 'CH2W+WCJ, Baguio, Benguet, Philippines  ', '2', '40000', '65b212dd7b7ab4994', 'baguio', '', '2024-01-25', '1', 'paid', '2024-01-25', 'G cash', 'Gabiel Alvin O. Aquino', 'captoon19.empsychos.info@gmail.com'),
(16, 'Gabiel Alvi', '09515408978', '1toon.info@gmail.com', '2 Days & 1 Night', 'benguet', 'iloilo, Baluarte', '5', '3', 'Company preferred', '2024-04-16', '16:00', 'CJC4+94P, T. Bugallon St, Baguio, Benguet, Philippines  ', '2', '5000', '65b2138d5b6482220', '', '', '2024-01-25', '', 'paid', '2024-01-25', 'Gcash', 'Gabiel Alvin O. Aquino', 'captoon19.empsychos.info@gmail.com'),
(17, 'Gabiel Alvi', '09093095799', '1toon.info@gmail.com', '2 Days & 1 Night', 'lkega', '', '2', '2', 'Company preferred', '2024-09-23', '21:00', 'CH5X+6GV, SM Baguio Rd, Baguio, Benguet, Philippines  ', '2', '35000', '65b23e89adbfb1296', 'vigan', 'nice!!', '2024-01-25', '', 'paid', '2024-01-30', 'G cash', 'Marc Joesan ', '1toon.info@gmail.com'),
(18, 'Marc Joesan', '09093095791', 'marxie@gmail.com', '2 Days & 1 Night', 'Pangasinan', '', '2', '2', 'Furtuner', '2024-02-14', '00:00', 'CH5X+6GV, SM Baguio Rd, Baguio, Benguet, Philippines  ', '2', '', '65b298f015a286627', 'baguio', '', '2024-01-25', '', '', '', '', 'Marc Joesan', 'marxie@gmail.com'),
(19, 'update', '09090909099', 'update@gmail.com', '2 Days & 1 Night', '', '', '2', '1', 'CBSTC Modern Jeep', '2024-01-20', '07:28', 'No 1 Zone 1 Papa Eleye Olomi Academy Ibadan, Ibadan 201103, Oyo, Nigeria  ', '2', '', '65b744ce6a2e93702', 'alaminos', '', '2024-01-29', '', 'paid', '2024-01-29', 'G cash', 'abdulwakeel', 'alaran@gmail.com'),
(20, 'update', '09154345678', 'update@gmail.com', '2 Days & 1 Night', '3', 'abakaliki', '1', '2', 'Vios', '2024-01-24', '12:11', 'W8JV+RF La Caramicua, Mich., Mexico  ', '1', '', '65b78743d2ce72509', '', '', '2024-01-29', '', '', '', '', 'kolawoel', 'cole@yahoo.com'),
(21, 'update', '09134353456', 'update@gmail.com', '2 Days & 1 Night', 'Oyo', 'kolajo', '2', '3', 'Hiace', '2024-01-16', '12:16', '8 olomi academy Ibadan, Ibadan 200258, Oyo, Nigeria  ', '2', '40000', '65b7882481dcc1771', '', '', '2024-01-29', '', 'paid', '2024-01-29', 'Credit Card', 'taofeeq', 'taofweq@gmail.com'),
(22, 'update', '09154345678', 'update@gmail.com', '2 Days & 1 Night', '3', 'abakaliki', '1', '2', 'Vios', '2024-01-24', '12:11', 'W8JV+RF La Caramicua, Mich., Mexico  ', '1', '', '65b79db2618a11181', '', '', '2024-01-29', '1', '', '', '', 'kolawoel', 'cole@yahoo.com'),
(23, 'update', '09134353456', 'update@gmail.com', '2 Days & 1 Night', 'Oyo', 'kolajo', '2', '3', 'Hiace', '2024-01-16', '12:16', '8 olomi academy Ibadan, Ibadan 200258, Oyo, Nigeria  ', '1', '', '65b7a014c76145159', '', '', '2024-01-29', '', '', '', '', 'taofeeq', 'taofweq@gmail.com'),
(24, 'Gabiel Alvi', '09106699700', '1toon.info@gmail.com', '2 Days & 1 Night', '', '', '5', '3', 'Company preferred', '2024-02-02', '08:41', 'CH2W+WCJ, Baguio, Benguet, Philippines  ', '1', '', '65b845a5868179347', 'baguio', '', '2024-01-30', '', '', '', '', 'LY', '1toon.info@gmail.com'),
(25, 'update', '09134309859', 'update@gmail.com', '2 Days & 1 Night', '', '', '1', '2', 'Vios', '2024-01-26', '05:41', '503 3rd St, Winona, KS 67764, USA  ', '2', '', '65b87cbf85e328043', 'baguio', '', '2024-01-30', '', 'paid', '2024-01-30', 'Gcash', 'abdul', 'abdul@gmail.com'),
(26, 'update', '09134353456', 'update@gmail.com', '2 Days & 1 Night', 'Oyo', 'kolajo', '2', '3', 'Vios', '2024-01-26', '05:43', '6FX3+96 Carangano, Guanajuato, Mexico  ', '2', '1000', '65b87cfb23e622733', '', '', '2024-01-30', '', 'paid', '2024-01-30', 'Gcash', 'taofeeq', 'taofweq@gmail.com'),
(27, 'Jeca Gamboa', '09129472316', 'jecagamboa11@gmail.com', '2 Days & 1 Night', '', '', '2', '1', 'Innova', '2024-02-09', '13:15', 'SM City Baguio Luneta Hill, Upper Session Rd, Baguio, Benguet, Philippines  ', '2', '', '65b88208868613696', 'alaminos', '', '2024-01-30', '', 'paid', '2024-01-30', 'G cash', 'Jeca Gamboa', 'jecagamboa11@gmail.com'),
(28, 'Test', '09106699700', '1toon.info@gmail.com', '2 Days & 1 Night', '', '', '1', '0', 'Company preferred', '2024-02-09', '16:04', 'CH2W+WCJ, Baguio, Benguet, Philippines  ', '2', '', '65b8db5a94b592401', 'baguio', '', '2024-01-30', '', 'paid', '2024-01-30', 'G cash', 'LY', '1toon.info@gmail.com'),
(29, 'Test', '09106699700', '1toon.info@gmail.com', '2 Days & 1 Night', 'baguio', 'baguio,, baguio', '2', '0', 'Company preferred', '2024-02-07', '07:26', 'VMQM+58 Bakun, Benguet, Philippines  ', '2', '', '65b8dc5ddbc669015', '', '', '2024-01-30', '', 'paid', '2024-01-30', 'Gcash', 'LY', '1toon.info@gmail.com'),
(30, 'Jeca Gamboa', '09129472316', 'jecagamboa11@gmail.com', '3 Days & 2 Nights', '', '', '2', '0', 'Vios', '2024-02-01', '12:35', 'SM City Baguio Luneta Hill, Upper Session Rd, Baguio, Benguet, Philippines  ', '2', '', '65b8ddf232d383705', 'alaminos', '', '2024-01-30', '', 'paid', '2024-01-30', 'G cash', 'Jeca Gamboa', 'jecagamboa11@gmail.com'),
(31, 'Jeca Gamboa', '09129472316', 'jecagamboa11@gmail.com', '2 Days & 1 Night', 'Benguet', 'Atok', '4', '0', 'Company preferred', '2024-02-10', '10:35', 'SM City Baguio Luneta Hill, Upper Session Rd, Baguio, Benguet, Philippines  ', '2', '10000', '65b8de758a5f66466', '', '', '2024-01-30', '', 'paid', '2024-01-30', 'Credit Card', 'Jeca Gamboa', 'jecagamboa11@gmail.com'),
(32, 'Test', '09093095799', '1toon.info@gmail.com', '2 Days & 1 Night', '', '', '2', '0', 'Company preferred', '2024-08-22', '00:00', 'X6PM+MP Bugallon, Pangasinan, Philippines  ', '2', '', '65b8e6b167ad97249', 'baguio', '', '2024-01-30', '', 'paid', '2024-01-30', 'G cash', 'Marc Joesan ', '1toon.info@gmail.com'),
(33, 'Test', '09093095799', '1toon.info@gmail.com', '2 Days & 1 Night', 'Pangasinan', 'Manaoag', '2', '2', 'Company preferred', '2024-02-22', '00:00', '7HQP+X9 Nasugbu, Batangas, Philippines  ', '2', '5000', '65b8e8262225b1154', '', '', '2024-01-30', '', 'paid', '2024-01-30', 'Gcash', 'Marc Joesan ', '1toon.info@gmail.com'),
(34, 'Test', '09515408978', '1toon.info@gmail.com', '2 Days & 1 Night', '', '', '5', '2', 'Vios', '2024-01-02', '13:44', '168, Baguio, Benguet, Philippines  ', '2', '', '65b8e83acedd14037', 'baguio', '', '2024-01-30', '', 'paid', '2024-01-30', 'G cash', 'Gabiel Alvin O. Aquino', 'captoon19.empsychos.info@gmail.com'),
(35, 'Test', '09515408978', '1toon.info@gmail.com', '2 Days & 1 Night', '', '', '5', '2', 'Company preferred', '2024-01-17', '23:24', 'AP62, Ambiong Rd, La Trinidad, Benguet, Philippines  ', '2', '', '65b8ea848de358175', 'baguio', '', '2024-01-30', '', 'paid', '2024-01-30', '', 'Gabiel Alvin O. Aquino', 'captoon19.empsychos.info@gmail.com'),
(36, 'Test', '09515408978', '1toon.info@gmail.com', '2 Days & 1 Night', 'benguet', 'iloilo', '5', '3', 'Company preferred', '1999-04-05', '04:05', 'XMXJ+QM Asingan, Pangasinan, Philippines  ', '2', '8000', '65b8ecad3a6e02531', '', '', '2024-01-30', '', '', '', '', 'Gabiel Alvin O. Aquino', 'captoon19.empsychos.info@gmail.com'),
(37, 'update', '09134309867', 'update@gmail.com', '2 Days & 1 Night', '', '', '7', '3', 'Company preferred', '2024-01-26', '13:55', '6MXW+94 La Puerta Quemada, Jalisco, Mexico  ', '2', '1000', '65b8f097110523417', 'baguio', '', '2024-01-30', '', 'paid', '2024-01-30', 'Credit Card', 'alaba', 'alaba@gmail.com'),
(38, 'update', '09134357678', 'update@gmail.com', '2 Days & 1 Night', '', '', '9', '6', 'Furtuner', '2024-01-24', '14:32', '67QX65CH+VV  ', '2', '35000', '65b8f93748e204997', 'baguio', '', '2024-01-30', '', 'paid', '2024-01-30', 'Credit Card', 'ABDULMALIK ABDULWAKEEL', 'abdulmalikabdulwakeel7@gmail.com'),
(39, 'update', '08033845583', 'update@gmail.com', '3 Days & 2 Nights', '', '', '2', '3', 'Vios', '2024-01-26', '14:50', '366R+PV Mexico, MO, USA  ', '2', '500', '65b8fd2db0aa74045', 'vigan', '', '2024-01-30', '', 'paid', '2024-01-30', 'Credit Card', 'bakri', 'bakri@gmail.com'),
(40, 'update', '08033845583', 'update@gmail.com', '2 Days & 1 Night', 'olo', 'adamawa, yola', '1', '3', 'Vios', '2024-01-27', '19:49', '2970 Daisy Rd, Coulterville, IL 62237, USA  ', '2', '2000', '65b8fe7737ca69313', '', '', '2024-01-30', '', 'paid', '2024-01-30', 'Gcash', 'bakri2', 'bakri2@gmail.com'),
(41, 'Test', '09106699700', '1toon.info@gmail.com', '2 Days & 1 Night', '', '', '1', '1', 'Company preferred', '2024-02-03', '04:21', 'CH2W+WCJ, Baguio, Benguet, Philippines  ', '2', '4500', '65b9aebd56fd83002', 'baguio', '', '2024-01-31', '', 'paid', '2024-01-31', 'Gcash', 'Test', '1toon.info@gmail.com'),
(42, 'Test', '09515408978', '1toon.info@gmail.com', '2 Days & 1 Night', '', '', '5', '2', 'Company preferred', '2024-04-23', '02:01', 'HQ7C+5F Bokod, Benguet, Philippines  ', '2', '8000', '65b9bac8621321940', 'baguio', '', '2024-01-31', '', 'paid', '2024-01-31', 'Gcash', 'Gabiel Alvin O. Aquino', 'captoon19.empsychos.info@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_booking3`
--

CREATE TABLE `reserve_booking3` (
  `id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `cp_num` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `days_and_nights` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `adult_count` varchar(100) NOT NULL,
  `kid_count` varchar(100) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `trav_date` varchar(100) NOT NULL,
  `trav_time` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `req_id` varchar(200) NOT NULL,
  `package` varchar(200) NOT NULL,
  `review` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `canc` varchar(200) NOT NULL,
  `payments` varchar(200) NOT NULL,
  `p_date` varchar(100) NOT NULL,
  `p_method` varchar(100) NOT NULL,
  `fn2` varchar(100) NOT NULL,
  `em2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserve_booking3`
--

INSERT INTO `reserve_booking3` (`id`, `fullname`, `cp_num`, `email`, `days_and_nights`, `province`, `destination`, `adult_count`, `kid_count`, `vehicle`, `trav_date`, `trav_time`, `street`, `status`, `price`, `req_id`, `package`, `review`, `date`, `canc`, `payments`, `p_date`, `p_method`, `fn2`, `em2`) VALUES
(1, 'update', '09134309878', 'update@gmail.com', '2 Days & 1 Night', 'pap', '', '12', '12', 'Hiace', '2024-01-19', '18:48', 'WVC5+5P Octupilla, Hgo., Mexico  ', '1', '', '65b14cf7050024500', 'vigan', '', '2024-01-24', '', '', '', '', '', ''),
(2, 'update', '09134309878', 'update@gmail.com', '3 Days & 2 Nights', 'pap', '', '8', '3', 'Hiace', '2024-01-22', '21:54', '69XX+99 La Campechana, Guanajuato, Mexico  ', '1', '', '65b14f4b66f3f7738', 'sagada', '', '2024-01-24', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `carname` varchar(255) NOT NULL,
  `carvid` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user`, `carname`, `carvid`, `date`, `status`) VALUES
(1, '16', 'baguio', '1', '2024-01-24', '0'),
(2, '16', 'alaminos', '2', '2024-01-24', '0'),
(3, '16', 'vigan', '3', '2024-01-24', '0'),
(4, '16', 'sagada', '4', '2024-01-24', '0'),
(5, '15', 'baguio', '1', '2024-01-26', '1'),
(6, '14', 'sagada', '4', ' 2024-01-25', '0'),
(7, '15', 'sagada', '4', ' 2024-01-26', '1'),
(8, '1', 'alaminos', '2', ' 2024-01-29', '1'),
(9, '1', 'baguio', '1', ' 2024-01-29', '1'),
(10, '18', 'baguio', '1', ' 2024-01-30', '0'),
(11, '14', 'baguio', '1', ' 2024-01-30', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve_booking2`
--
ALTER TABLE `reserve_booking2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve_booking3`
--
ALTER TABLE `reserve_booking3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reserve_booking2`
--
ALTER TABLE `reserve_booking2`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `reserve_booking3`
--
ALTER TABLE `reserve_booking3`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
