-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2020 at 09:32 AM
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
  `id` int(11) NOT NULL,
  `messages` text DEFAULT NULL,
  `message_at` timestamp NULL DEFAULT current_timestamp(),
  `img_sending` varchar(255) DEFAULT '.',
  `user_id` int(11) DEFAULT NULL,
  `room` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `messages`, `message_at`, `img_sending`, `user_id`, `room`) VALUES
(420, 'hkuh', '2020-07-18 05:29:18', 'images/imgs/20-07-18_', 5, 3287),
(421, '', '2020-07-18 05:29:56', 'images/imgs/20-07-18_new-binge-drinking.jpg', 5, 3287),
(422, 'iyihoi', '2020-07-18 05:30:16', 'images/imgs/20-07-18_', 2, 3287),
(423, 'fwe', '2020-07-18 05:48:58', 'images/imgs/20-07-18_', 5, 3287),
(424, 'few', '2020-07-18 05:49:07', 'images/imgs/20-07-18_', 2, 3287),
(425, 'few', '2020-07-18 05:52:54', 'images/imgs/20-07-18_', 2, 3287),
(426, 'fwe', '2020-07-18 05:52:56', 'images/imgs/20-07-18_', 5, 3287),
(427, '', '2020-07-18 05:53:29', 'images/imgs/20-07-18_sara.png', 5, 3287),
(428, 'ffwef', '2020-07-18 05:53:34', 'images/imgs/20-07-18_', 5, 3287),
(429, 'fwef', '2020-07-18 05:53:38', 'images/imgs/20-07-18_', 2, 3287),
(430, 'fe', '2020-07-18 05:56:22', 'images/imgs/20-07-18_', 5, 3287),
(431, 'fwef', '2020-07-18 05:59:02', 'images/imgs/20-07-18_', 2, 3287),
(432, 'fe', '2020-07-18 05:59:11', 'images/imgs/20-07-18_', 5, 3287),
(433, 'fwef', '2020-07-18 06:07:53', 'images/imgs/20-07-18_', 2, 3287),
(434, 'fe', '2020-07-18 06:07:56', 'images/imgs/20-07-18_', 5, 3287),
(435, 'fwef', '2020-07-18 06:08:38', 'images/imgs/20-07-18_', 5, 3287),
(436, 'fwefweffwe', '2020-07-18 06:08:42', 'images/imgs/20-07-18_', 2, 3287),
(437, 'fwefwefwfwefwef', '2020-07-18 06:08:50', 'images/imgs/20-07-18_', 5, 3287),
(438, 'fwefwefwef', '2020-07-18 06:08:54', 'images/imgs/20-07-18_', 2, 3287),
(439, '', '2020-07-18 06:09:08', 'images/imgs/20-07-18_Karma Second Act main art.jpg', 5, 3287),
(440, '', '2020-07-18 06:09:16', 'images/imgs/20-07-18_sara.png', 2, 3287),
(441, '', '2020-07-18 06:19:00', 'images/imgs/20-07-18_sara.png', 2, 3287),
(442, '', '2020-07-18 06:19:03', 'images/imgs/20-07-18_Karma Second Act main art.jpg', 5, 3287),
(443, '', '2020-07-18 06:20:59', 'images/imgs/20-07-18_Karma Second Act main art.jpg', 5, 3287),
(444, 'fwefwef', '2020-07-18 06:21:03', 'images/imgs/20-07-18_', 5, 3287),
(445, 'fwefwef', '2020-07-18 06:21:06', 'images/imgs/20-07-18_', 2, 3287),
(446, '', '2020-07-18 06:21:13', 'images/imgs/20-07-18_new-binge-drinking.jpg', 5, 3287),
(447, 'lhioiofwefw', '2020-07-18 06:21:20', 'images/imgs/20-07-18_', 2, 3287),
(448, '', '2020-07-18 06:46:42', 'images/imgs/20-07-18_new-binge-drinking.jpg', 5, 3287),
(449, '', '2020-07-18 06:46:50', 'images/imgs/20-07-18_new-binge-drinking.jpg', 5, 3287),
(450, '', '2020-07-18 06:47:35', 'images/imgs/20-07-18_new-binge-drinking.jpg', 5, 3287),
(451, '', '2020-07-18 06:47:42', 'images/imgs/20-07-18_new-binge-drinking.jpg', 5, 3287),
(452, '', '2020-07-18 06:48:06', 'images/imgs/20-07-18_new-binge-drinking.jpg', 5, 3287),
(453, '666', '2020-07-18 06:48:33', 'images/imgs/20-07-18_', 5, 3287),
(454, 'ddd', '2020-07-18 06:48:40', 'images/imgs/20-07-18_', 2, 3287),
(455, 'ddd', '2020-07-18 06:54:51', 'images/imgs/20-07-18_', 2, 3287),
(456, 'ddd', '2020-07-18 06:55:11', 'images/imgs/20-07-18_', 2, 3287),
(457, 'ddd', '2020-07-18 06:55:35', 'images/imgs/20-07-18_', 2, 3287),
(458, 'ddd', '2020-07-18 06:56:07', 'images/imgs/20-07-18_', 2, 3287),
(459, 'ddd', '2020-07-18 06:56:22', 'images/imgs/20-07-18_', 2, 3287),
(460, 'ddd', '2020-07-18 06:57:38', 'images/imgs/20-07-18_', 2, 3287),
(461, '666', '2020-07-18 07:00:15', 'images/imgs/20-07-18_', 5, 3287),
(462, '666', '2020-07-18 07:01:01', 'images/imgs/20-07-18_', 5, 3287),
(463, '666', '2020-07-18 07:01:28', 'images/imgs/20-07-18_', 5, 3287),
(464, '666', '2020-07-18 07:02:33', 'images/imgs/20-07-18_', 5, 3287),
(465, '666', '2020-07-18 07:03:23', 'images/imgs/20-07-18_', 5, 3287),
(466, '666', '2020-07-18 07:04:40', 'images/imgs/20-07-18_', 5, 3287),
(467, '666', '2020-07-18 07:05:16', 'images/imgs/20-07-18_', 5, 3287),
(468, '666', '2020-07-18 07:05:38', 'images/imgs/20-07-18_', 5, 3287),
(469, '666', '2020-07-18 07:07:53', 'images/imgs/20-07-18_', 5, 3287),
(470, '666', '2020-07-18 07:08:32', 'images/imgs/20-07-18_', 5, 3287),
(471, '666', '2020-07-18 07:09:11', 'images/imgs/20-07-18_', 5, 3287),
(472, '666', '2020-07-18 07:09:49', 'images/imgs/20-07-18_', 5, 3287),
(473, '666', '2020-07-18 07:10:23', 'images/imgs/20-07-18_', 5, 3287),
(474, '666', '2020-07-18 07:10:30', 'images/imgs/20-07-18_', 5, 3287),
(475, 'fwefwef', '2020-07-18 07:10:36', 'images/imgs/20-07-18_', 5, 3287),
(476, 'fwefwef', '2020-07-18 07:11:56', 'images/imgs/20-07-18_', 5, 3287),
(477, 'fwefwef', '2020-07-18 07:12:23', 'images/imgs/20-07-18_', 5, 3287),
(478, 'fwefwef', '2020-07-18 07:12:50', 'images/imgs/20-07-18_', 5, 3287),
(479, 'fwefwef', '2020-07-18 07:13:01', 'images/imgs/20-07-18_', 5, 3287),
(480, 'fwefw', '2020-07-18 07:21:03', 'images/imgs/20-07-18_', 5, 3287),
(481, '32', '2020-07-18 07:21:06', 'images/imgs/20-07-18_', 5, 3287),
(482, 'fwef', '2020-07-18 07:21:12', 'images/imgs/20-07-18_', 2, 3287),
(483, '32', '2020-07-18 07:24:01', 'images/imgs/20-07-18_', 5, 3287),
(484, '32', '2020-07-18 07:24:14', 'images/imgs/20-07-18_', 5, 3287),
(485, '32', '2020-07-18 07:24:58', 'images/imgs/20-07-18_', 5, 3287),
(486, '32', '2020-07-18 07:25:35', 'images/imgs/20-07-18_', 5, 3287),
(487, '32', '2020-07-18 07:26:05', 'images/imgs/20-07-18_', 5, 3287),
(488, '32', '2020-07-18 07:26:50', 'images/imgs/20-07-18_', 5, 3287),
(489, '32', '2020-07-18 07:29:53', 'images/imgs/20-07-18_', 5, 3287),
(490, '32', '2020-07-18 07:30:20', 'images/imgs/20-07-18_', 5, 3287),
(491, '32', '2020-07-18 07:30:26', 'images/imgs/20-07-18_', 5, 3287);

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
  `day_3` text DEFAULT NULL,
  `rand_value` int(11) NOT NULL,
  `session_id` varchar(40) DEFAULT NULL,
  `times1_day1` varchar(20) DEFAULT NULL,
  `times2_day1` varchar(20) DEFAULT NULL,
  `times3_day1` varchar(20) DEFAULT NULL,
  `times1_day2` varchar(20) DEFAULT NULL,
  `times2_day2` varchar(20) DEFAULT NULL,
  `times3_day2` varchar(20) DEFAULT NULL,
  `times1_day3` varchar(20) DEFAULT NULL,
  `times2_day3` varchar(20) DEFAULT NULL,
  `times3_day3` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `dr_name`, `dr_clinic_address`, `dr_specialization`, `dr_degree`, `phone`, `fees`, `bio`, `img`, `area`, `signin_id`, `day_1`, `day_2`, `day_3`, `rand_value`, `session_id`, `times1_day1`, `times2_day1`, `times3_day1`, `times1_day2`, `times2_day2`, `times3_day2`, `times1_day3`, `times2_day3`, `times3_day3`) VALUES
(2, 'kamel ahmed sayed', '343st wefwsef wfewef fw', 'eyes', '', '41200303020101', '80', 'this is something about kamel ahmed', 'images/imgs/chat_Karma Second Act main art.jpg', '', 2, '2020-07-18', '', '', 623512, '084818837488991980311789607689', '09:00', '11:00', '13:30', '', '', '', '', '', ''),
(3, 'gamel esmael khalel', '50 st el reyad street', 'deramatology', 'professor', '23423423243', '300', 'this is something about gamel esmael.', 'images/imgs/chat_', 'misr el gededa', 3, '2020-07-20', '', '', 507432, '', '', NULL, '', '', NULL, '', '', '', ''),
(4, 'hamed ahmed kamel', '54 st jfwe wfefwef', 'eyes', 'student', '23423423243', '139', 'this is something about hamed ahmed', 'images/imgs/chat_professor-512.png', 'zamalek', 4, '2020-07-12', '2020-07-14', '', 15602, '032853299552974453147875762380', '01:30', '07:00', '12:00', '00:57', '01:00', '21:30', '', '', ''),
(5, 'khaled ebrahim el sayed', '30 st khaled ebn el waled', 'batna', 'student', '503434010102', '200', 'this is something about khaled ebrahim doctor of batna.', 'images/imgs/chat_new-binge-drinking.jpg', 'alex', 5, '2020-07-12', '2020-07-14', '2020-07-23', 801380, '', '14:00', '16:30', '21:30', '14:00', '18:30', '22:00', '11:30', '16:30', '20:30'),
(6, 'tamer sayed khaled', '50 st el reyad street', 'eyes', 'student', '41200303020101', '400', 'this is something about tamer', 'images/imgs/chat_Karma Second Act main art.jpg', 'naser city', 6, '2020-07-14', '2020-07-16', '', 376504, '442137809749128649188805286572', '02:00', '13:00', '21:00', '18:00', '08:00', '23:00', '', '', '');

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
(2, 'this is something about sara', 'panadol\r\noxifree', 5, 2, '2020-06-29 03:47:51', 'sarapt'),
(3, 'this si something new about this patients miss. sara!', 'novalgin\r\nesperin\r\ntom', 5, 2, '2020-06-29 03:47:54', 'sarapt'),
(4, 'fwefwefweffwef', 'fwefwefwef', 1, 2, '2020-06-19 03:50:03', NULL);

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
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(25) DEFAULT NULL,
  `fees_dr` int(11) DEFAULT NULL,
  `trans_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `invoice_number`, `fees_dr`, `trans_date`) VALUES
(1, 'r17t9x2h7ijecewrhblj', NULL, '2020-07-13 04:04:43'),
(8, '7zv36ixw3t71e3dlmhcp', 139, '2020-07-13 04:27:19'),
(9, 'kofngsjfoqfwfeabs5gx', 139, '2020-07-13 04:33:28'),
(10, 'hqwaskr98cfi3i4r7v1f', 139, '2020-07-13 05:16:41'),
(11, '7tl0t3247f4eyqecwbvo', 139, '2020-07-13 05:17:46'),
(12, 'yiia8adr9l27jw325yco', 139, '2020-07-13 05:18:42'),
(13, 'mox6legsjwfkbwz3jsc2', 139, '2020-07-13 21:31:21'),
(14, 'jbd3d33udfvh669ua8l1', 139, '2020-07-13 21:37:09'),
(15, 'fb554gsmwbtj9d1gwlfv', 139, '2020-07-13 23:00:00'),
(16, '0gtoxwiq9le8wyuv0yfu', 200, '2020-07-14 00:17:08'),
(17, 'gagctsngu34zshezj49v', 200, '2020-07-14 21:58:12'),
(18, 'w5dbo8ivy77wu77viyia', 400, '2020-07-14 22:09:35'),
(19, 'gw40tt4f0plsez0ghv29', 400, '2020-07-14 23:30:16'),
(20, 'oeot15vpxipzflz4ebvg', 400, '2020-07-15 03:54:39'),
(21, 'olrzo3ozfkglx6f0exog', 80, '2020-07-15 04:24:25'),
(22, 'alw171budhr40c2skqpd', 80, '2020-07-15 04:27:15'),
(23, 'am1ml1x7ikgh1hao2svv', 80, '2020-07-15 04:30:35'),
(24, 'qz1yukarr3udlp7xgbmw', 400, '2020-07-15 04:34:22'),
(25, 'zlpg5s2akudc2p1dcjxo', 400, '2020-07-15 04:37:18'),
(26, 'e2ylexyb7bsrdtxoy51u', 80, '2020-07-15 04:41:00'),
(27, 'ykf253vlit58cpfeskm8', 80, '2020-07-15 18:59:48'),
(28, 'p52m0tcicfhe2vpyplx6', 80, '2020-07-15 19:09:26'),
(29, '2hb9zc55vizq8xceu9v1', 400, '2020-07-15 19:11:10'),
(30, 'zk5twmno374ckza4heuz', 400, '2020-07-15 19:11:49'),
(31, 'dj5zj1rvabr3dcrvpsor', 400, '2020-07-15 19:15:13'),
(32, '431yk5a5ll9nfsp5qhkr', 400, '2020-07-15 19:18:22'),
(33, 'niby7vri97w0nwk05sjl', 80, '2020-07-15 19:26:15'),
(34, 'ova9c7yapmt91dd7van5', 400, '2020-07-15 19:35:33'),
(35, 'c0ywq8nah2a8wabh4nlx', 80, '2020-07-15 20:36:11'),
(36, 'w13hlf4ck3kr8mmal55v', 80, '2020-07-15 20:42:31'),
(37, 's4oawn9mvkuje94f2bpc', 80, '2020-07-15 23:51:45'),
(38, 'rr37h4gr5xuew4ns4bev', 80, '2020-07-16 00:20:15'),
(39, '4v7cxdb86lp1plw8wqle', 80, '2020-07-16 00:25:52'),
(40, '9gh8thojmbquibwimkm5', 80, '2020-07-16 00:31:44'),
(41, 'pdsylf4wq6t6y6087k36', 80, '2020-07-16 00:32:59'),
(42, 'zeah6bqruwnirirv9y75', 80, '2020-07-16 00:36:41'),
(43, 'kl8gr3dsrohfqkzka6io', 80, '2020-07-16 00:38:19'),
(44, '0byt3ca4a8c5el7npa5v', 80, '2020-07-16 00:41:16'),
(45, '5dxuyirleoixashlyvzb', 80, '2020-07-16 00:44:41'),
(46, 'av47wycmzjniaeyfhzu3', 80, '2020-07-16 00:45:13'),
(47, 'o31jke89jd11bxd28rva', 80, '2020-07-16 00:46:32'),
(48, 'nbb5takhtmx091l3ehdh', 80, '2020-07-16 00:50:10'),
(49, 'p28uwbbm1m54015m0udh', 80, '2020-07-16 00:51:30'),
(50, 'wxyiorvl9fegpeqyyemd', 80, '2020-07-16 00:53:17'),
(51, '4055md8qep9k56urgkgb', 80, '2020-07-16 00:56:50'),
(52, '3w01phx26fw0vc9dz4vs', 80, '2020-07-16 01:01:17'),
(53, '0t1wr8ge5jwdylh4uv2r', 80, '2020-07-16 01:02:37'),
(54, 'lte2r6g8ky8vs6eo3dq8', 80, '2020-07-16 01:04:45'),
(55, '6vxbin4kvd9tpm1rqjnj', 80, '2020-07-16 01:07:30'),
(56, 'j8iasw6xz2sh94384dfr', 80, '2020-07-16 01:11:10'),
(57, '3jinj4okq062s6xrjxpx', 80, '2020-07-16 01:13:36'),
(58, 'fgc94ze19x02wejzj79w', 80, '2020-07-16 01:15:05'),
(59, 'govktyr50fvrf3anasde', 80, '2020-07-16 01:32:08'),
(60, 'rm4nxobh4xb4aotn08eg', 80, '2020-07-16 01:35:50'),
(61, '3c60k6uhw94pbye69y8o', 80, '2020-07-16 01:39:51'),
(62, 'hff0vfuxpfp13nj8azte', 80, '2020-07-16 01:40:45'),
(63, '4upkldwrantxw204ulwd', 80, '2020-07-16 01:41:07'),
(64, '8v8gw0u7skehrixfez12', 80, '2020-07-16 01:42:16'),
(65, '3iefpodeqfjr8v2r27b7', 80, '2020-07-16 01:44:07'),
(66, '7l0oxpzotmpztubjvdwy', 80, '2020-07-16 02:05:40'),
(67, '9p1m82ysizfdb616zf3r', 80, '2020-07-16 02:09:47'),
(68, 'rz927qyubzvsaxic1c9a', 80, '2020-07-16 02:25:35'),
(69, 'y21mzsi299zefmwikoau', 80, '2020-07-18 00:13:26'),
(70, '9zbwsge1o1qf67zxeh5y', 80, '2020-07-18 00:22:25'),
(71, '5nvaurqchsnj88xhxmx2', 80, '2020-07-18 00:33:08'),
(72, 'lj0r676d3r3ma2esuvs1', 80, '2020-07-18 00:36:23'),
(73, 'ji7ho8k4xacz501p5eju', 80, '2020-07-18 01:28:43'),
(74, 'rjnb1gxx5t2k0gj8nteu', 80, '2020-07-18 02:01:15'),
(75, 'sp7o4c8bd3j2khvu4uib', 80, '2020-07-18 02:22:18');

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
(1, 'Seif', 802639, 'hd0t1x', 'approved'),
(2, 'Abd elma3bod', 903240, 'g6ray3', 'approved'),
(3, 'ezaby', 853678, 'mdf3cp', 'approved'),
(5, 'Seif', 958572, 'pkdg3u', 'approved'),
(6, 'Abd elma3bod', 131346, '71wauh', 'approved'),
(7, 'Fakhry', 134602, 'kpz09s', 'approved'),
(8, 'Abd elma3bod', 933042, 'on6041', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `profile_patients`
--

CREATE TABLE `profile_patients` (
  `id` int(11) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `mobile` varchar(14) DEFAULT NULL,
  `batholigical_case` varchar(50) DEFAULT NULL,
  `blood_group` varchar(4) DEFAULT NULL,
  `pharmacy_id` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT './imgs/nopic.png',
  `id_signup` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dr_id` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `rand_value` int(11) DEFAULT NULL,
  `session_id` varchar(40) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_patients`
--

INSERT INTO `profile_patients` (`id`, `address`, `mobile`, `batholigical_case`, `blood_group`, `pharmacy_id`, `img`, `id_signup`, `email`, `dr_id`, `weight`, `height`, `rand_value`, `session_id`, `username`) VALUES
(1, '43fewefwefewf', ' 525324242342', 'urgent', ' o+', 1, 'images/imgs/chat_professor-512.png', 1, 'wahed@gmail.com', 2, 80, 190, 156231, '180816970287539254773832834915', NULL),
(2, '20st kamal ebrahim', '344664643341', ' normal', ' o+', 2, 'images/imgs/chat_sara.png', 2, 'hoda@gmail.com', 2, 90, 190, 941452, '065737640649393877599125653109', NULL),
(3, 'medan meky mouse', '34564634634112', 'helw awi', 'O+', 3, 'images/imgs/chat_sara.png', 3, 'nawal@gmail.com', 2, 70, 140, 870879, NULL, NULL),
(5, '20st kamal ebrahim', ' 525324242342', ' normal', ' o+', 5, 'images/imgs/chat_sara.png', 5, 'sara@gmail.com', 2, 90, 190, 814770, '643888123780822052672030134093', 'sarapts_gmail.com'),
(6, NULL, NULL, NULL, NULL, 6, './imgs/nopic.png', 6, 'mahmoud@gmail.com', 2, NULL, NULL, 189593, '', NULL),
(7, '43fewefwefewf', '+201016236244', 'urgent', ' o+', 7, 'images/imgs/chat_professor-512.png', 7, 'khaledes@gmail.com', 2, 90, 190, 569286, '', 'khaledespts_gmail.com'),
(8, '43fewefwefewf', '344664643341', ' normal', 'O+', 8, 'images/imgs/chat_Karma Second Act main art.jpg', 8, 'samy@gmail.com', 2, 80, 180, 369232, '496137046993168800838043035641', 'samy79343_pts');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `rating` int(1) NOT NULL,
  `comments` text DEFAULT NULL,
  `id_signup` int(11) NOT NULL,
  `id_doctor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedual`
--

CREATE TABLE `schedual` (
  `id` int(11) NOT NULL,
  `sch_date` date DEFAULT NULL,
  `sch_day` varchar(50) DEFAULT NULL,
  `dr_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `sch_time` time DEFAULT NULL,
  `invoice_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedual`
--

INSERT INTO `schedual` (`id`, `sch_date`, `sch_day`, `dr_id`, `p_id`, `sch_time`, `invoice_number`) VALUES
(165, '2020-07-15', 'Wednesday', 2, 5, '02:00:00', 'ykf253vlit58cpfeskm8'),
(166, '2020-07-15', 'Wednesday', 2, 5, '02:00:00', 'p52m0tcicfhe2vpyplx6'),
(167, '2020-07-15', 'Wednesday', 6, 5, '18:00:00', '2hb9zc55vizq8xceu9v1'),
(168, '2020-07-15', 'Wednesday', 6, 5, '18:00:00', 'zk5twmno374ckza4heuz'),
(169, '2020-07-15', 'Wednesday', 6, 5, '18:00:00', 'dj5zj1rvabr3dcrvpsor'),
(170, '2020-07-15', 'Wednesday', 6, 5, '21:30:00', '431yk5a5ll9nfsp5qhkr'),
(171, '2020-07-15', 'Wednesday', 2, 5, '02:00:00', 'niby7vri97w0nwk05sjl'),
(172, '2020-07-15', 'Wednesday', 6, 5, '18:00:00', 'ova9c7yapmt91dd7van5'),
(173, '2020-07-15', 'Wednesday', 2, 5, '02:00:00', 'c0ywq8nah2a8wabh4nlx'),
(174, '2020-07-15', 'Wednesday', 2, 5, '02:00:00', 'w13hlf4ck3kr8mmal55v'),
(175, '2020-07-16', 'Thursday', 2, 8, '02:00:00', 's4oawn9mvkuje94f2bpc'),
(176, '2020-07-16', 'Thursday', 2, 1, '02:00:00', 'rr37h4gr5xuew4ns4bev'),
(177, '2020-07-16', 'Thursday', 2, 1, '02:00:00', '4v7cxdb86lp1plw8wqle'),
(178, '2020-07-16', 'Thursday', 2, 1, '02:00:00', '9gh8thojmbquibwimkm5'),
(179, '2020-07-16', 'Thursday', 2, 1, '02:00:00', 'pdsylf4wq6t6y6087k36'),
(180, '2020-07-16', 'Thursday', 2, 1, '11:30:00', 'zeah6bqruwnirirv9y75'),
(181, '2020-07-16', 'Thursday', 2, 1, '02:00:00', 'kl8gr3dsrohfqkzka6io'),
(182, '2020-07-16', 'Thursday', 2, 1, '11:30:00', '0byt3ca4a8c5el7npa5v'),
(183, '2020-07-16', 'Thursday', 2, 1, '11:30:00', '5dxuyirleoixashlyvzb'),
(184, '2020-07-16', 'Thursday', 2, 1, '17:00:00', 'av47wycmzjniaeyfhzu3'),
(185, '2020-07-16', 'Thursday', 2, 1, '02:00:00', 'o31jke89jd11bxd28rva'),
(186, '2020-07-16', 'Thursday', 2, 1, '02:00:00', 'nbb5takhtmx091l3ehdh'),
(187, '2020-07-16', 'Thursday', 2, 1, '17:00:00', 'p28uwbbm1m54015m0udh'),
(188, '2020-07-16', 'Thursday', 2, 1, '11:30:00', 'wxyiorvl9fegpeqyyemd'),
(189, '2020-07-16', 'Thursday', 2, 1, '11:30:00', '4055md8qep9k56urgkgb'),
(190, '2020-07-16', 'Thursday', 2, 1, '17:00:00', '3w01phx26fw0vc9dz4vs'),
(191, '2020-07-16', 'Thursday', 2, 1, '17:00:00', '0t1wr8ge5jwdylh4uv2r'),
(192, '2020-07-16', 'Thursday', 2, 1, '17:00:00', 'lte2r6g8ky8vs6eo3dq8'),
(193, '2020-07-16', 'Thursday', 2, 1, '17:00:00', '6vxbin4kvd9tpm1rqjnj'),
(194, '2020-07-16', 'Thursday', 2, 8, '02:00:00', 'j8iasw6xz2sh94384dfr'),
(195, '2020-07-16', 'Thursday', 2, 8, '02:00:00', '3jinj4okq062s6xrjxpx'),
(196, '2020-07-16', 'Thursday', 2, 8, '02:00:00', 'fgc94ze19x02wejzj79w'),
(197, '2020-07-16', 'Thursday', 2, 8, '02:00:00', 'govktyr50fvrf3anasde'),
(198, '2020-07-16', 'Thursday', 2, 8, '02:00:00', 'rm4nxobh4xb4aotn08eg'),
(199, '2020-07-16', 'Thursday', 2, 8, '02:00:00', '3c60k6uhw94pbye69y8o'),
(200, '2020-07-16', 'Thursday', 2, 8, '02:00:00', 'hff0vfuxpfp13nj8azte'),
(201, '2020-07-16', 'Thursday', 2, 8, '17:00:00', '4upkldwrantxw204ulwd'),
(202, '2020-07-16', 'Thursday', 2, 8, '17:00:00', '8v8gw0u7skehrixfez12'),
(203, '2020-07-16', 'Thursday', 2, 8, '02:00:00', '3iefpodeqfjr8v2r27b7'),
(204, '2020-07-16', 'Thursday', 2, 8, '02:00:00', '7l0oxpzotmpztubjvdwy'),
(205, '2020-07-16', 'Thursday', 2, 8, '04:12:00', '9p1m82ysizfdb616zf3r'),
(206, '2020-07-16', 'Thursday', 2, 8, '02:00:00', 'rz927qyubzvsaxic1c9a'),
(207, '2020-07-18', 'Saturday', 2, 5, '04:30:00', 'y21mzsi299zefmwikoau'),
(208, '2020-07-18', 'Saturday', 2, 5, '02:00:00', '9zbwsge1o1qf67zxeh5y'),
(209, '2020-07-18', 'Saturday', 2, 5, '03:00:00', '5nvaurqchsnj88xhxmx2'),
(210, '2020-07-18', 'Saturday', 2, 5, '03:00:00', 'lj0r676d3r3ma2esuvs1'),
(211, '2020-07-18', 'Saturday', 2, 5, '03:00:00', 'ji7ho8k4xacz501p5eju'),
(212, '2020-07-18', 'Saturday', 2, 5, '03:00:00', 'rjnb1gxx5t2k0gj8nteu'),
(213, '2020-07-18', 'Saturday', 2, 5, '03:00:00', 'sp7o4c8bd3j2khvu4uib');

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
(1, 'saleh', '2de5313a1fb57a516d79e456a07c139d', 'admin'),
(2, 'kamelahmed', '3c6d894e2e1ba6ccb48bfe75afde755f', 'doctor'),
(3, 'gamelesmael', '9e28fdf106a837a0225b22b9807099c2', 'doctor'),
(4, 'hamedahmed', '5c5131bedc34f5ee557b45d37a260fea', 'doctor'),
(5, 'khaledebrahim', '2d52ad0f0b92dba08368e065ae6d700e', 'doctor'),
(6, 'temersayed', '66835ad4a2b42ecc15219461decaf652', 'doctor');

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
(1, 'wahed', 'ahmed', 'wahed@gmail.com', 'male', '0740ec9c1b420c51b2f5dc0c406f69db', '1999-10-11', '', 1, 'images/imgs/chat_professor-512.png'),
(2, 'hoda', 'ahmed', 'hoda@gmail.com', 'female', '7128981814b661ecad1e818fb533266c', '1999-10-11', '', 1, 'images/imgs/chat_sara.png'),
(3, 'nawal', 'ahmed', 'nawal@gmail.com', 'female', '360741c09576168bdc94529c51c79621', '1990-10-10', '', 1, 'images/imgs/chat_sara.png'),
(4, 'sameh', 'omar', 'sameh@gmail.com', 'male', 'b14aeea7f189818427bf390842350ff3', '1990-10-11', '4BK41TZ22L9IBROCCG98X7020PY0BX86', 0, 'images/imgs/chat_sara.png'),
(5, 'sara', 'kamel', 'sara@gmail.com', 'female', 'ff9a13c71b9edb604ecd334d575a6c00', '1999-10-11', '', 1, 'images/imgs/chat_sara.png'),
(6, 'mahmoud', 'ahmed', 'mahmoud@gmail.com', 'male', '13eeb5df33279098f8b30fdae4dde72a', '1999-10-10', '', 1, './imgs/nopic.png'),
(7, 'khaled', 'esmael', 'khaledes@gmail.com', 'male', '2d52ad0f0b92dba08368e065ae6d700e', '1977-10-10', '', 1, 'images/imgs/chat_professor-512.png'),
(8, 'samy', 'samer', 'samy@gmail.com', 'male', '10162be63243cfc503aea084275e3c78', '1977-10-10', '', 1, 'images/imgs/chat_Karma Second Act main art.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_chat`
--

CREATE TABLE `users_chat` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `type_user` varchar(20) DEFAULT NULL,
  `room` int(11) DEFAULT NULL,
  `current_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_chat`
--

INSERT INTO `users_chat` (`id`, `username`, `type_user`, `room`, `current_reg`, `user_id`) VALUES
(15, 'kamelahmed', 'doctor', 3287, '2020-07-18 00:36:23', 2),
(16, 'sarapts_gmail.com', 'patients', 3287, '2020-07-18 00:36:23', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_ibfk_1` (`signin_id`),
  ADD KEY `day_1` (`day_1`(768)),
  ADD KEY `day_2` (`day_2`(768)),
  ADD KEY `day_3` (`day_3`(768));

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
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `rates_ibfk_3` (`id_signup`);

--
-- Indexes for table `schedual`
--
ALTER TABLE `schedual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dr_id` (`dr_id`),
  ADD KEY `p_id` (`p_id`) USING BTREE;

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
-- Indexes for table `users_chat`
--
ALTER TABLE `users_chat`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT for table `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patients_doctor`
--
ALTER TABLE `patients_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `pharmacian`
--
ALTER TABLE `pharmacian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedual`
--
ALTER TABLE `schedual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_chat`
--
ALTER TABLE `users_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

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
  ADD CONSTRAINT `schedual_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `profile_patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedual_ibfk_3` FOREIGN KEY (`dr_id`) REFERENCES `doctor` (`id`),
  ADD CONSTRAINT `schedual_ibfk_4` FOREIGN KEY (`p_id`) REFERENCES `profile_patients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
