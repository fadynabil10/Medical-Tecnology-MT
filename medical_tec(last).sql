-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 01:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_tec`
--

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

CREATE TABLE `medical_record` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `medicines` text NOT NULL,
  `p_id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `date_of_exam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username_mr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_record`
--

INSERT INTO `medical_record` (`id`, `description`, `medicines`, `p_id`, `dr_id`, `date_of_exam`, `username_mr`) VALUES
(2, 'this is something about sara', 'panadol\r\noxifree', 5, 2, '2020-07-18 12:56:03', 'sarapts_gmail.com'),
(3, 'this si something new about this patients miss. sara!', 'novalgin\r\nesperin\r\ntom', 5, 2, '2020-07-18 12:56:06', 'sarapts_gmail.com'),
(5, 'fewwef', 'fwefwe', 5, 4, '2020-07-22 22:08:55', 'sara50694_pts'),
(6, 'fwefwef', 'fweffwe', 5, 4, '2020-07-22 22:09:00', 'sara50694_pts'),
(7, 'fefewfwef', 'fwefweffwefwefwefwefwef', 5, 4, '2020-07-22 22:09:26', 'sara50694_pts'),
(8, 'fefewfwef', 'fwefweffwefwefwefwefwef', 5, 4, '2020-07-22 22:09:57', 'sara50694_pts'),
(9, 'fwefwef', 'fwefwef', 5, 4, '2020-07-22 22:10:13', 'sara50694_pts'),
(10, 'fewfwewefwefwefwef', 'fwefewfwef', 5, 4, '2020-07-22 23:24:40', 'sara50694_pts'),
(11, 'this is something about koko', 'novalgin\r\noxifree', 5, 4, '2020-07-22 23:28:45', 'sara50694_pts'),
(12, 'fwefwef', 'fwefwef', 5, 4, '2020-07-22 23:49:02', 'sara50694_pts'),
(13, 'fwefwef', 'fwefwef', 5, 4, '2020-07-23 22:44:49', 'sara69080_pts'),
(14, 'fwefwef', 'fwefwef', 5, 4, '2020-07-23 22:45:15', 'sara69080_pts'),
(15, 'fwefwef', 'fwefwef', 5, 4, '2020-07-23 22:47:27', 'sara69080_pts'),
(16, 'this is patients is a very crazy', 'novalgin\r\noxifree\r\n', 1, 4, '2020-07-26 01:11:09', ''),
(17, 'this case is not dangrous but it may take some medicines because of his teeth ', 'antibayotic\r\nstrepsils\r\npanadool', 9, 8, '2020-07-26 21:42:59', 'mona90151_pts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medical_record_ibfk_1` (`p_id`),
  ADD KEY `medical_record_ibfk_2` (`dr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD CONSTRAINT `medical_record_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `profile_patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medical_record_ibfk_2` FOREIGN KEY (`dr_id`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
