-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 02:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('vivek', 'vivek@5678');

-- --------------------------------------------------------

--
-- Table structure for table `bestsale`
--

CREATE TABLE `bestsale` (
  `cake_id` int(11) NOT NULL,
  `cake_title` varchar(70) NOT NULL,
  `flavour` varchar(30) NOT NULL,
  `half_price` int(11) NOT NULL,
  `1kg_price` int(11) NOT NULL,
  `2kg_price` int(11) NOT NULL,
  `veg` varchar(11) NOT NULL,
  `colour` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bestsale`
--

INSERT INTO `bestsale` (`cake_id`, `cake_title`, `flavour`, `half_price`, `1kg_price`, `2kg_price`, `veg`, `colour`) VALUES
(501, 'Chocolate With Dark Cream', 'chocolate', 499, 849, 1499, 'veg', 'brown'),
(502, 'Strawberry With Extra Cream', 'Strawberry', 399, 749, 1349, 'non-veg', 'red'),
(503, 'Vanilla With White Chocolate', 'vanilla', 549, 1149, 1999, 'veg', 'white'),
(504, 'Black Forest Imbedded In Chocolate', 'Black Forest', 749, 1399, 2499, 'non-veg', 'black');

-- --------------------------------------------------------

--
-- Table structure for table `cakedetail`
--

CREATE TABLE `cakedetail` (
  `cake_id` int(3) NOT NULL,
  `description` varchar(100) NOT NULL,
  `flavour` varchar(20) NOT NULL,
  `flavour_id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `half_price` int(10) NOT NULL,
  `onekg_price` int(10) NOT NULL,
  `twokg_price` int(10) NOT NULL,
  `veg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cakedetail`
--

INSERT INTO `cakedetail` (`cake_id`, `description`, `flavour`, `flavour_id`, `color`, `half_price`, `onekg_price`, `twokg_price`, `veg`) VALUES
(1, 'Chocolate Truffle Delicious Half Kg', 'chocolate', 1, 'brown', 1999, 3499, 5999, 'veg'),
(8, 'Black Forest Cake With Mix-Fruit Half Kg', 'black forest', 2, 'black', 499, 899, 1699, 'non-veg'),
(9, 'Chocolate Cake With Strawberry Half Kg', 'Chocolate', 1, 'red', 449, 749, 1399, 'non-veg'),
(10, 'Cake With Extra Chocolate Half Kg', 'Black Forest', 2, 'brown', 600, 1200, 2100, 'veg'),
(11, 'Chocolate With Extra Cream Half Kg', 'Chocolate', 1, 'brown', 399, 749, 1399, 'veg'),
(12, 'Chocolate Dark-Creamy Cake', 'Chocolate', 1, 'black', 550, 1049, 1799, 'non-veg'),
(13, 'Chocolate With Red-Velvet', 'Chocolate', 1, 'red', 1199, 1999, 3499, 'veg'),
(14, 'Dark Chocolate With White Cream', 'Chocolate', 1, 'White', 699, 1299, 2449, 'veg'),
(15, 'Butterscotch With Extra Butter', 'Butterscotch', 3, 'brown', 499, 899, 1749, 'veg'),
(16, 'Truffle Cake With Mixed_Fruit', 'Truffle', 5, 'red', 449, 799, 1500, 'non-veg'),
(17, 'Red Velvet With Cherry', 'red velvet', 6, 'red', 399, 749, 1300, 'non-veg'),
(18, 'Red Velvet With Dark Chocolate', 'red velvet', 6, 'red', 449, 899, 1999, 'veg'),
(19, 'Combination Of Red Velvet and Mix-Fruit', 'red velvet', 6, 'blue', 599, 1149, 2099, 'veg'),
(20, 'Mix Fruit With Pineapple', 'mix fruit', 7, 'Orange', 399, 699, 1249, 'veg'),
(21, 'Cake With Extra Apple Flavour', 'mix fruit', 7, 'Yellow', 449, 899, 1749, 'non-veg'),
(22, 'Mix Fruit With Extra Cream', 'mix fruit', 7, 'orange', 499, 899, 1749, 'non-veg'),
(23, 'Vanilla With Extra White Cream', 'vanilla', 8, 'white', 749, 1299, 2499, 'veg'),
(24, 'Vanilla Cake With Fluid Of Cream', 'vanilla', 8, 'White', 599, 1149, 2099, 'non-veg'),
(25, 'Vanilla With Drop Of Chocolate', 'vanilla', 8, 'brown', 349, 649, 1199, 'veg'),
(26, 'Red Velvet ', 'Red Velvet', 6, 'red', 2100, 3999, 7499, 'non-veg'),
(27, 'Combination Of Red Velvet and Pineapple', 'Red Velvet', 6, 'yellow', 2299, 3999, 7249, 'veg'),
(28, 'Strawberry With Extra Cherry', 'Strawberry', 9, 'red', 999, 1799, 3400, 'non-veg'),
(29, 'Strawberry Birthday Cake', 'Strawberry', 9, 'Red', 1499, 2799, 3449, 'non-veg'),
(30, 'Strawberry Special Cake', 'Strawberry', 9, 'orange', 699, 1349, 2549, 'non-veg'),
(31, 'Truffle Cake of Chocolate', 'Truffle', 5, 'black', 2300, 4349, 7999, 'veg'),
(32, 'Pineapple Flavour Cake', 'Pineapple', 4, 'yellow', 499, 749, 1399, 'veg'),
(33, 'Pineapple With Extra Pineapple', 'Pineapple', 4, 'orange', 1199, 2249, 4149, 'non-veg'),
(34, 'Butterscotch Extra Butter', 'Butterscotch', 3, 'brown', 2149, 4099, 7449, 'veg'),
(35, 'Butterscotch With Chocolate', 'Butterscotch', 3, 'yellow', 1299, 2100, 3999, 'non-veg');

-- --------------------------------------------------------

--
-- Table structure for table `customcake`
--

CREATE TABLE `customcake` (
  `sr_no` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_time` time NOT NULL,
  `address` varchar(40) NOT NULL,
  `flavour` varchar(20) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `colour` varchar(15) NOT NULL,
  `shape` varchar(20) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customcake`
--

INSERT INTO `customcake` (`sr_no`, `name`, `contact`, `delivery_date`, `delivery_time`, `address`, `flavour`, `weight`, `colour`, `shape`, `message`) VALUES
(1, 'Vivek Verma', 1857463522, '2023-06-13', '17:49:00', 'Nalasopara Achole Road', 'choclate', '2kg', 'red', 'circle', 'Vivek'),
(2, 'Satyam Tiwari', 198762536, '2022-04-21', '14:20:00', 'Vasai Vasant Vihar', 'mix Fruit', '1/2kg', 'yellow', 'square', 'Amit'),
(3, 'Chandresh raj', 1876567898, '2023-06-07', '07:00:00', 'nalasopara west', 'vanilla', '5kg', 'pink', 'traingle', 'Chandresh'),
(4, 'Shubam Pandey', 1987654327, '2023-06-08', '01:42:00', 'goregaon', 'strawberry', '2kg', 'green', 'heart', 'Happy Anniversary'),
(5, 'Shreya Thakur', 1987654327, '2023-06-08', '01:42:00', 'goregaon Khau Gali', 'pipnapple', '2kg', 'green', 'square', 'Happy Birthday'),
(6, 'Anil Kapoor', 1987654327, '2023-06-08', '01:42:00', 'goregaon', 'strawberry', '2kg', 'green', 'circle', 'Anil'),
(7, 'JAckie Shroff', 12876757, '0000-00-00', '00:00:00', 'Churchgate Rich Villa', 'choclate', '1kg', 'red', 'triple floor', 'Jackie Shroff'),
(8, 'Akshay Kumar', 1987654320, '2023-06-04', '00:45:00', 'juhu chopati', 'mix fruit', '2kg', 'green', 'circle', 'Beloved Son'),
(9, 'Saif Ali Khan', 853546534, '2023-05-06', '16:00:00', 'Boriwali New Link', 'strawberry', '4kg', 'red', 'heart', 'Happy Valentine'),
(10, 'Ajay Devgan', 93234434, '2023-06-12', '18:30:00', 'Bhayander Gala Nagar', 'chocolate', '3kg', 'brown', 'square', 'Ajay'),
(11, 'Govinda', 198735276, '0000-00-00', '12:30:00', 'Nalasopar Paras Nagar', 'Black Forest', '2kg', 'black', 'double floor', 'Best Wishes'),
(12, 'Tiger Shroff', 98126473, '2023-06-16', '08:00:00', 'london tower', 'chocolate', '1kg', 'brown', 'traingle', 'Beloved Daughter'),
(13, 'Sunny Deol', 123324567, '2023-06-16', '00:00:00', 'london tower', 'chocolate', '2kg', 'brown', 'circle', 'Sunny '),
(14, 'SHahrukh Khan', 123412249, '2023-06-09', '17:28:00', 'dhaka bangladesh', 'vanilla', '5kg', 'white', 'heart', 'Dear Shahrukh'),
(15, 'Jagdish Chaudhary', 123789432, '0000-00-00', '00:00:00', 'nalasopara pragati nagar', 'butterscotch', '2kg', 'yellow', 'circle', 'Dear Wife'),
(41, 'Sanjay', 198273645, '2023-06-15', '20:00:00', 'pune', 'vanilla', '2kg', 'white', 'square', 'Happy Birthday Sanjay'),
(42, '', 0, '0000-00-00', '00:00:00', '', 'black forest', '', '', '', ''),
(43, '', 0, '0000-00-00', '00:00:00', '', 'black forest', '', '', '', ''),
(44, '', 0, '0000-00-00', '00:00:00', '', '', '', '', '', ''),
(45, '', 0, '0000-00-00', '00:00:00', '', '', '', '', '', ''),
(46, '', 0, '0000-00-00', '00:00:00', '', '', '', '', '', ''),
(47, 'raju', 186425362, '2023-06-01', '15:35:00', 'Safale east', 'double_floor', '2kg', 'Yellow', 'square', 'Happy Birthday Jatin'),
(48, 'Shayam', 989898989, '2023-06-30', '18:00:00', 'Nalasopara sunshine garden', 'Mix Fruit', '2kg', 'red', 'traingle', 'Komal'),
(49, 'Gaurav', 1092874635, '2023-06-07', '20:00:00', 'om shanti chaal', 'Chocolate', '3kg', 'Brown', 'double_floor', 'Deepak'),
(50, 'jatin', 975318264, '2023-06-04', '23:59:00', 'pargati house ', 'Red Velvet', '2kg', 'red', 'traingle', 'jatin'),
(51, 'Vinit', 135792468, '2023-06-25', '00:30:00', 'Kotputli amai', 'Pineappla', '3kg', 'Yellow', 'triple_floor', 'Vinit'),
(52, 'Govardhan', 123454321, '2023-06-01', '22:20:00', 'Antela Jaipur', 'Chocolate', '2kg', 'Black', 'square', 'AHppy Birthday'),
(53, '', 0, '0000-00-00', '00:00:00', '', '', '', '', '', ''),
(54, '', 0, '0000-00-00', '00:00:00', '', '', '', '', '', ''),
(55, 'gajanan', 198888243, '2023-06-25', '15:00:00', 'Dube state nalasopara', 'Truffle', '5kg', 'black', 'triple_floor', 'Surya'),
(56, 'raju', 1222333444, '2023-07-08', '22:59:00', 'santosh bhavan nalasopara', 'Red Velvet', '2kg', 'red', 'square', 'dear raju');

-- --------------------------------------------------------

--
-- Table structure for table `flavour`
--

CREATE TABLE `flavour` (
  `flavour_id` int(11) NOT NULL,
  `flavour` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flavour`
--

INSERT INTO `flavour` (`flavour_id`, `flavour`) VALUES
(1, 'Chocolate'),
(2, 'Black Forest'),
(3, 'Butterscotch'),
(4, 'Pineapple'),
(5, 'Truffle'),
(6, 'Red Velvet'),
(7, 'Mix Fruit'),
(8, 'Vanilla'),
(9, 'Strawberry');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `srno` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `contact` int(255) NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_time` time NOT NULL,
  `address` text NOT NULL,
  `cake_weight` varchar(10) NOT NULL,
  `cake_id` int(3) NOT NULL,
  `buying_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`srno`, `name`, `contact`, `delivery_date`, `delivery_time`, `address`, `cake_weight`, `cake_id`, `buying_time`) VALUES
(1, 'Vivek', 1654321980, '0000-00-00', '00:00:00', 'A/15,Om Shanti Chaal', '', 0, '0000-00-00 00:00:00.000000'),
(2, 'end', 3434, '2023-06-16', '00:00:00', 'ff', '', 0, '0000-00-00 00:00:00.000000'),
(3, 'abhimanyu', 175643645, '2023-06-08', '00:00:00', 'bhayander', '', 0, '0000-00-00 00:00:00.000000'),
(4, 'abhimanyu', 175643645, '2023-06-08', '00:00:00', 'bhayander', '', 0, '0000-00-00 00:00:00.000000'),
(22, 'abhimanyu', 175643645, '2023-06-08', '00:00:00', 'bhayander', '', 0, '0000-00-00 00:00:00.000000'),
(23, 'abhimanyu', 175643645, '2023-06-08', '00:00:00', 'bhayander', '', 0, '0000-00-00 00:00:00.000000'),
(24, 'abhimanyu', 175643645, '2023-06-08', '00:00:00', 'bhayander', '', 0, '0000-00-00 00:00:00.000000'),
(25, 'Suraj', 1212121212, '2023-06-30', '00:00:00', 'palghar west', '', 0, '0000-00-00 00:00:00.000000'),
(26, 'Suraj', 1212121212, '2023-06-30', '00:00:00', 'palghar west', '', 0, '0000-00-00 00:00:00.000000'),
(27, 'Suraj', 1212121212, '2023-06-30', '00:00:00', 'palghar west', '', 0, '0000-00-00 00:00:00.000000'),
(28, 'deewan', 1231231234, '2023-06-30', '00:00:00', 'achole road', '', 0, '0000-00-00 00:00:00.000000'),
(39, 'gagan', 876543, '2023-06-10', '00:00:00', 'chandan naka', '1Kg', 15, '0000-00-00 00:00:00.000000'),
(40, '', 0, '0000-00-00', '00:00:00', '', '', 15, '0000-00-00 00:00:00.000000'),
(41, 'raju', 1234123412, '2023-06-04', '18:20:00', 'don lane', '1Kg', 10, '2023-06-07 06:45:45.000000'),
(42, 'shahruk khan', 1987654323, '2023-06-30', '18:40:00', 'mannat palace', '1/2Kg', 18, '2023-06-07 07:07:37.000000'),
(43, 'Vivek Verma', 1234567890, '2023-06-03', '22:30:00', 'Nalasopara East', '1/2Kg', 9, '2023-06-07 12:55:50.000000'),
(44, 'Sanjay', 198273645, '2023-06-24', '19:00:00', 'Pune', '1Kg', 502, '2023-06-07 13:23:42.000000'),
(45, 'Sanjay', 198273645, '2023-06-24', '19:00:00', 'Pune', '1Kg', 502, '2023-06-07 13:24:13.000000'),
(46, 'Sanjay', 198273645, '2023-06-24', '19:00:00', 'Pune', '1Kg', 502, '2023-06-07 13:24:56.000000'),
(47, '', 0, '0000-00-00', '00:00:00', '', '', 502, '2023-06-07 13:25:09.000000'),
(48, 'jagdish', 0, '0000-00-00', '00:00:00', 'new york', '2Kg', 502, '2023-06-07 13:25:31.000000'),
(49, '', 0, '0000-00-00', '00:00:00', '', '', 502, '2023-06-07 13:25:50.000000'),
(50, 'button', 11111, '0000-00-00', '00:00:00', 'aaaaa', '1/2Kg', 502, '2023-06-07 13:26:12.000000'),
(51, 'Sangeeta', 1928277772, '2023-06-04', '23:16:00', 'Nashik', '1Kg', 15, '2023-06-07 13:43:20.000000'),
(52, 'Gaurav', 1234543217, '2023-06-30', '23:20:00', 'Palghar', '2Kg', 16, '2023-06-07 13:46:15.000000'),
(53, 'Gaurav', 1234543217, '2023-06-30', '23:20:00', 'Palghar', '2Kg', 16, '2023-06-07 13:46:49.000000'),
(54, 'Gulabi', 987615243, '2023-07-14', '20:50:00', 'Vaitarna', '1Kg', 502, '2023-06-07 13:48:11.000000'),
(55, 'Gulabi', 987615243, '2023-07-14', '20:50:00', 'Vaitarna', '1Kg', 502, '2023-06-07 13:53:51.000000'),
(56, 'Gulabi', 987615243, '2023-07-14', '20:50:00', 'Vaitarna', '1Kg', 502, '2023-06-07 13:54:48.000000'),
(57, 'Gulabi', 987615243, '2023-07-14', '20:50:00', 'Vaitarna', '1Kg', 502, '2023-06-07 13:55:20.000000'),
(58, 'Gulabi', 987615243, '2023-07-14', '20:50:00', 'Vaitarna', '1Kg', 502, '2023-06-07 13:56:41.000000'),
(59, 'Gulabi', 987615243, '2023-07-14', '20:50:00', 'Vaitarna', '1Kg', 502, '2023-06-07 13:57:22.000000'),
(60, 'Gulabi', 987615243, '2023-07-14', '20:50:00', 'Vaitarna', '1Kg', 502, '2023-06-07 13:58:28.000000'),
(61, 'Gulabi', 987615243, '2023-07-14', '20:50:00', 'Vaitarna', '1Kg', 502, '2023-06-07 13:59:54.000000'),
(62, 'Gulabi', 987615243, '2023-07-14', '20:50:00', 'Vaitarna', '1Kg', 502, '2023-06-07 14:00:25.000000'),
(63, 'Gulabi', 987615243, '2023-07-14', '20:50:00', 'Vaitarna', '1Kg', 502, '2023-06-07 14:00:59.000000'),
(64, 'Gulabi', 987615243, '2023-07-14', '20:50:00', 'Vaitarna', '1Kg', 502, '2023-06-07 14:01:28.000000'),
(65, 'Gulabi', 987615243, '2023-07-14', '20:50:00', 'Vaitarna', '1Kg', 502, '2023-06-07 14:02:11.000000'),
(66, '', 0, '0000-00-00', '00:00:00', '', '', 501, '2023-06-07 14:06:46.000000'),
(67, '', 0, '0000-00-00', '00:00:00', '', '', 19, '2023-06-07 14:08:21.000000'),
(68, '', 0, '0000-00-00', '00:00:00', '', '', 19, '2023-06-07 14:08:55.000000'),
(69, '', 0, '0000-00-00', '00:00:00', '', '', 10, '2023-06-09 07:11:13.000000'),
(70, 'raju', 1222333444, '2023-06-29', '21:01:00', 'bilal pada vasai', '1Kg', 33, '2023-06-14 13:31:18.000000');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `query_no` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `query` varchar(200) NOT NULL,
  `query_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`query_no`, `name`, `contact`, `query`, `query_time`) VALUES
(1, 'jatin', 1234567890, 'Cake is delivered in distorted manner', '2023-06-09 18:30:00'),
(2, 'payal', 192837465, 'Cake is not delivered as order', '2023-06-10 07:03:32'),
(4, 'ee', 34, 'binod', '2023-06-10 07:10:06'),
(6, 'geeta', 1982534, 'Cake is so smelly', '2023-06-10 07:10:52'),
(13, 'ee', 34, 'binod', '2023-06-10 07:13:21'),
(14, '', 0, '', '2023-06-13 12:03:13'),
(15, 'raju', 1222333444, 'Cake is not tasty', '2023-06-14 13:30:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestsale`
--
ALTER TABLE `bestsale`
  ADD PRIMARY KEY (`cake_id`);

--
-- Indexes for table `cakedetail`
--
ALTER TABLE `cakedetail`
  ADD PRIMARY KEY (`cake_id`);

--
-- Indexes for table `customcake`
--
ALTER TABLE `customcake`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `flavour`
--
ALTER TABLE `flavour`
  ADD PRIMARY KEY (`flavour_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`query_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestsale`
--
ALTER TABLE `bestsale`
  MODIFY `cake_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;

--
-- AUTO_INCREMENT for table `cakedetail`
--
ALTER TABLE `cakedetail`
  MODIFY `cake_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `customcake`
--
ALTER TABLE `customcake`
  MODIFY `sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `flavour`
--
ALTER TABLE `flavour`
  MODIFY `flavour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `query_no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
