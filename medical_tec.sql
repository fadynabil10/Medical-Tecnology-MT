-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2020 at 01:26 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

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
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id _ch` int(11) NOT NULL,
  `output` text NOT NULL,
  `message_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `img_sending` varchar(255) NOT NULL,
  `id_dr` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `dr_name` varchar(100) DEFAULT NULL,
  `dr_clinic_address` varchar(100) DEFAULT NULL,
  `dr_specialization` varchar(50) DEFAULT NULL,
  `dr_degree` varchar(50) DEFAULT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `fees` varchar(100) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'images/imgs/nopic.png',
  `area` varchar(255) DEFAULT NULL,
  `signin_id` int(11) DEFAULT NULL,
  `day_1` text DEFAULT NULL,
  `day_2` text DEFAULT NULL,
  `day_3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `dr_name`, `dr_clinic_address`, `dr_specialization`, `dr_degree`, `phone`, `fees`, `bio`, `img`, `area`, `signin_id`, `day_1`, `day_2`, `day_3`) VALUES
(6, 'sameh serag el den', '30 st mohamed sayed', 'eyes', '', '454534534', '400', 'this is something about serag', 'images/imgs/chat_', '', 6, '2020-06-01T14:34', '', '2020-06-04T15:35'),
(7, 'kamal waheed esmael', '54 st jfwe wfefwef', 'eyes', '', '56543s5345342', '100', 'this is kamal waheed', 'images/imgs/chat_', '', 7, '2020-06-02T02:18', '2020-06-06T15:00', '');

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
  `date_of_exam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients_doctor`
--

CREATE TABLE `patients_doctor` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacian`
--

CREATE TABLE `pharmacian` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pharm_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacian`
--

INSERT INTO `pharmacian` (`id`, `name`, `username`, `password`, `pharm_name`) VALUES
(1, 'sameh kamel', 'samoha', 'b14aeea7f189818427bf390842350ff3', 'el ezaby'),
(2, 'samy samir', 'samysamir', '1473472d898aaed1a0758f2aebfbb5f4', 'Fakhry');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `id` int(11) NOT NULL,
  `pharmacy_name` varchar(100) NOT NULL,
  `random_id` int(11) NOT NULL,
  `coupon` varchar(6) NOT NULL,
  `code_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`id`, `pharmacy_name`, `random_id`, `coupon`, `code_status`) VALUES
(1, 'ezaby', 837508, 'hg8vjb', 'Approved'),
(2, 'ezaby', 525285, 'h31v0i', 'Approved'),
(3, 'Shefaa', 149547, 'kqetm3', 'Approved'),
(4, 'Abd elma3bod', 729080, 'ain2vs', 'Approved'),
(5, 'Fakhry', 345239, 'tdhbwc', 'Approved'),
(6, 'Fakhry', 932425, 'z2u0vw', 'Expired'),
(7, 'Abd elma3bod', 198890, 'bs2oxv', 'Expired'),
(9, 'Abd elma3bod', 208878, '7wbtjd', 'Expired'),
(10, 'Khayreya', 272767, 'birl65', 'Expired'),
(11, 'Abd elma3bod', 161985, 'xi6e5y', 'Approved'),
(13, 'Shefaa', 250649, 'aw5gb3', 'Approved'),
(14, 'Khayreya', 430453, 'f8wben', 'Expired'),
(15, 'ezaby', 457849, 'hwbqak', 'Expired'),
(16, 'Khayreya', 930291, 'fr8lmo', 'Approved'),
(18, 'Fakhry', 800075, 'j59o1x', 'Expired'),
(22, 'Fakhry', 788537, 'g6wubs', 'Approved'),
(24, 'Shefaa', 275328, '0wvp3o', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `profile_patients`
--

CREATE TABLE `profile_patients` (
  `id` int(11) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `mobile` varchar(14) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `batholigical_case` varchar(50) DEFAULT NULL,
  `blood_group` varchar(4) DEFAULT NULL,
  `pharmacy_id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT './imgs/nopic.png',
  `id_signup` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `rating` int(1) NOT NULL,
  `comments` text DEFAULT NULL,
  `id_doctor` int(11) NOT NULL,
  `id_signup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedual`
--

CREATE TABLE `schedual` (
  `id` int(11) NOT NULL,
  `sch_date` datetime NOT NULL,
  `sch_day` varchar(50) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `username`, `password`, `role`) VALUES
(2, 'saleh', '2de5313a1fb57a516d79e456a07c139d', 'admin'),
(6, 'samehserag', 'b14aeea7f189818427bf390842350ff3', 'doctor'),
(7, 'kamalwahed', '4e9d77cdbaf447d95f4ec1020dbd5101', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `activation_code` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `img_p` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `f_name`, `l_name`, `email`, `gender`, `password`, `dob`, `activation_code`, `status`, `img_p`) VALUES
(1, 'sara', 'ahmed', 'sara@gmail.com', 'female', 'ff9a13c71b9edb604ecd334d575a6c00', '1999-10-10', '', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id _ch`),
  ADD KEY `chat_ibfk_1` (`id_dr`),
  ADD KEY `chat_ibfk_2` (`p_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_ibfk_1` (`signin_id`);

--
-- Indexes for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medical_record_ibfk_1` (`p_id`),
  ADD KEY `medical_record_ibfk_2` (`dr_id`);

--
-- Indexes for table `patients_doctor`
--
ALTER TABLE `patients_doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `dr_id` (`dr_id`);

--
-- Indexes for table `pharmacian`
--
ALTER TABLE `pharmacian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_patients`
--
ALTER TABLE `profile_patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_ibfk_1` (`pharmacy_id`),
  ADD KEY `id_signup` (`id_signup`),
  ADD KEY `profile_patients_ibfk_3` (`dr_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_doctor` (`id_doctor`),
  ADD KEY `rates_ibfk_3` (`id_signup`);

--
-- Indexes for table `schedual`
--
ALTER TABLE `schedual`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patient_id` (`patient_id`),
  ADD KEY `dr_id` (`dr_id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id _ch` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients_doctor`
--
ALTER TABLE `patients_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pharmacian`
--
ALTER TABLE `pharmacian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedual`
--
ALTER TABLE `schedual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`id_dr`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `profile_patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`signin_id`) REFERENCES `signin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD CONSTRAINT `medical_record_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `profile_patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medical_record_ibfk_2` FOREIGN KEY (`dr_id`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patients_doctor`
--
ALTER TABLE `patients_doctor`
  ADD CONSTRAINT `patients_doctor_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `profile_patients` (`id`),
  ADD CONSTRAINT `patients_doctor_ibfk_2` FOREIGN KEY (`dr_id`) REFERENCES `doctor` (`id`);

--
-- Constraints for table `profile_patients`
--
ALTER TABLE `profile_patients`
  ADD CONSTRAINT `profile_patients_ibfk_1` FOREIGN KEY (`pharmacy_id`) REFERENCES `pharmacy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profile_patients_ibfk_2` FOREIGN KEY (`id_signup`) REFERENCES `signup` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profile_patients_ibfk_3` FOREIGN KEY (`dr_id`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_ibfk_3` FOREIGN KEY (`id_signup`) REFERENCES `signup` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedual`
--
ALTER TABLE `schedual`
  ADD CONSTRAINT `schedual_ibfk_1` FOREIGN KEY (`dr_id`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedual_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `profile_patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;