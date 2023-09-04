-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 04:37 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`id`, `name`, `Email`, `Address`, `mobile`) VALUES
(1, 'ajay', 'asdfa@gmail.com', 'easfsd', 2147483647),
(2, 'Sarvesh Baing', 'sarvesh@gmail.com', 'kolhapur', 2147483647),
(3, 'Ajay Anat Valapkar', 'sarvesh@gmail.com', 'sadavali', 2147483647),
(4, 'bhavesh sawnat', 'sawant@gmail.com', 'devarukh', 2030506080),
(8, 'ajay', 'asdfa@gmail.com', 'khed', 2147483647),
(9, 'abhishek', 'asdfa@gmail.com', 'kolhapur', 2147483647),
(10, 'pashya bhai', 'pashy@gmail.com', 'ambav', 2147483647),
(11, 'pashya bhai', 'pashy@gmail.com', 'ambav', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `contact_user`
--

CREATE TABLE `contact_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_user`
--

INSERT INTO `contact_user` (`id`, `name`, `email`, `mobile_no`, `message`) VALUES
(1, 'Ajay Anat Valapkar', 'valapkar@gmail.com', 2147483647, '           it is really good technology\r\n         '),
(2, 'Ajay Anat Valapkar', 'valapkar@gmail.com', 2147483647, '           it is really good technology\r\n         '),
(3, 'Ajay Anat Valapkar', 'valapkar@gmail.com', 2147483647, '           it is really good technology\r\n         '),
(4, 'abhishek', 'khotumesh@yahoo.com', 2147483647, '           \r\n         nfdhifhinl');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(100) NOT NULL,
  `name` varchar(190) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `usertype` varchar(100) DEFAULT NULL,
  `profile` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `username`, `password`, `email`, `phone`, `address`, `usertype`, `profile`) VALUES
(1, 'admin', 'super admin', 'admin', NULL, NULL, NULL, 'admin', 'upload/3_1521639658.jpg'),
(2, 'cpp', 'codeprojects', '123456', NULL, NULL, NULL, 'user', 'upload/7015951-3d-funny-animal_1521603987.jpg'),
(14, 'today', 'today', 'today', 'today', NULL, NULL, 'user', 'upload/vehicle_1521645370.png'),
(15, 'Ajay', 'Valapkar', '12345', '12345', NULL, NULL, 'user', NULL),
(16, 'Ajay', 'Valapkar', '12345', '12345', NULL, NULL, 'user', NULL),
(17, 'bhavesh', 'bhavesh', '54321', '54321', NULL, NULL, 'user', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `new_donar`
--

CREATE TABLE `new_donar` (
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `Adhar` bigint(20) NOT NULL,
  `Issue_date` date NOT NULL,
  `D_address` varchar(200) NOT NULL,
  `Birth_date` date NOT NULL,
  `B_group` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_donar`
--

INSERT INTO `new_donar` (`full_name`, `email`, `phone`, `Adhar`, `Issue_date`, `D_address`, `Birth_date`, `B_group`, `gender`) VALUES
('Seema Ravindra khatu', 'khatu@gmail.com', '9078675634', 123432156778, '2022-05-29', 'pune', '1999-05-27', 'A-', 'Female'),
('Abhijit Patere', 'patere@gmail.com', '8087658020', 123456789963, '2022-05-13', 'sadavali', '2002-05-20', 'B-', '  Male'),
('Omkar Anant Deravankar', 'omkar@gmail.com', '8087569856', 123456921563, '2022-05-13', 'Mumbai', '2000-05-26', 'AB+', '  Male'),
('Abhishek Borage', 'abhishek@gmail.com', '8054664646', 123465789125, '2022-05-19', 'kolhapur', '2022-05-05', 'O+', '  Male'),
('hdjaj g geuuigi', 'adip@gmail.com', '1236547895', 123654789321, '2022-09-08', 'avjejg gfk  igggkhl', '2022-09-13', 'B+', '  Male'),
('Arpita Vinayak Badirake ', 'arpita@gmail.com', '9876542310', 159632478523, '2022-05-06', 'Tumbad', '2004-02-24', 'B-', 'Female'),
('Sonali Vijay Bhagane', 'sonali@gmail.com', '9632145875', 456321789156, '2022-05-27', 'kankavli', '2022-05-17', 'A+', 'Female'),
('Rihini Rajaram Oak', 'oak@gmail.com', '9087654536', 741258963156, '2022-05-21', 'Suseri', '1998-05-04', 'AB-', 'Female'),
('Bubbly Amburle', 'rupali@gmail.com', '7352535323', 747483833912, '2022-05-25', 'Dandeli', '2009-01-27', 'O+', 'Female'),
('Aniket Anant valapkar', 'valapkara@gmail.com', '7896541230', 789654123214, '2022-09-27', 'bdjjsgfsgfkgkugigdggig', '2022-09-08', 'O-', '  Male'),
('Rupesh Gavade', 'rupesh@gmail.com', '8087658020', 879654123698, '2022-05-15', 'rajapur', '2022-05-19', 'AB+', '  Male'),
('Sonali Vijay Bhagane', 'sonali@gmail.com', '8087658020', 896132547869, '2022-05-12', 'kankavli', '2022-05-29', 'A+', 'Female'),
('Sonali Vijay Bhagane', 'sonali@gmail.com', '8087956232', 916630163464, '2022-05-06', 'kolhapur', '2022-05-18', 'B+', 'Female'),
('Bharat Dinesh Bhagane', 'bharat@gmail.com', '8956231475', 963258741236, '2022-05-06', 'Khari', '2003-06-15', 'B+', '  Male'),
('Sankita Ramachandra Manake ', 'sankita@gmail.com', '8087658020', 987412365563, '2022-05-20', 'Savanas', '2000-01-27', 'O+', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `requester`
--

CREATE TABLE `requester` (
  `requester_id` int(100) NOT NULL,
  `patient_name` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `blood_group` varchar(100) DEFAULT NULL,
  `unit_blood` varchar(100) DEFAULT NULL,
  `hospital_name` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `contact_person` varchar(120) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_no` varchar(200) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `member_fk` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requester`
--

INSERT INTO `requester` (`requester_id`, `patient_name`, `gender`, `blood_group`, `unit_blood`, `hospital_name`, `date`, `contact_person`, `address`, `email`, `contact_no`, `reason`, `member_fk`, `image`) VALUES
(6, 'markcpp', 'female', 'b+', '2', 'Lanka Hospital', '0000-00-00', 'Hamad', 'Kandy', 'codeprojects@gmail.com', 'sdsadsad', 'Colombo', 'mhdcpj', 'upload/7015951-3d-funny-animal_1521728863.jpg'),
(8, 'abhishek', 'male', 'a+', '', '', '0000-00-00', '', '', '', '', '', 'Valapkar', ''),
(9, 'ajay', 'male', 'a+', '', '', '0000-00-00', '', '', '', '', '', 'Valapkar', ''),
(10, 'yash', 'male', 'a+', '', '', '0000-00-00', '', '', '', '', '', 'Valapkar', '');

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

CREATE TABLE `request_blood` (
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `Adhar` bigint(20) NOT NULL,
  `Issue_date` date NOT NULL,
  `D_address` varchar(300) NOT NULL,
  `Birth_date` date NOT NULL,
  `B_group` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_blood`
--

INSERT INTO `request_blood` (`full_name`, `email`, `phone`, `Adhar`, `Issue_date`, `D_address`, `Birth_date`, `B_group`, `gender`) VALUES
('Yash Ashok Karanjvkar', 'yashkar@gmail.com', 2147483647, 123698745563, '2022-05-21', 'nate', '2003-09-09', 'O+', '  Male'),
('Shreyas Chavan', 'chavan@gmail.com', 2147483647, 156324987523, '2022-05-14', 'mandavi', '2000-05-20', 'AB+', '  Male'),
('varad tandale', 'varad@gmail.com', 2147483647, 516234987456, '2022-05-19', 'Rasalgad', '2000-05-26', 'B+', '  Male'),
('Sarvesh Dipak Baing', 'sarvesh@gmail.com', 2147483647, 613259847156, '2022-05-27', 'kankavli', '2022-05-26', 'O+', '  Male'),
('Manisha Manohar Lanjekar', 'manish@gmail.com', 2147483647, 963258741236, '2022-05-07', 'jaitapur', '2003-05-21', 'O-', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(100) NOT NULL,
  `state_code` varchar(100) DEFAULT NULL,
  `state_name` varchar(100) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_code`, `state_name`, `description`) VALUES
(36, '84603', 'Kandyd', 'New data been added'),
(37, 'CLM', 'Western', 'Province');

-- --------------------------------------------------------

--
-- Table structure for table `success`
--

CREATE TABLE `success` (
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `Adhar` bigint(20) NOT NULL,
  `Issue_date` date NOT NULL,
  `D_address` varchar(300) NOT NULL,
  `Birth_date` date NOT NULL,
  `B_group` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `success`
--

INSERT INTO `success` (`full_name`, `email`, `phone`, `Adhar`, `Issue_date`, `D_address`, `Birth_date`, `B_group`, `gender`) VALUES
('Abhijit Ashok Patere', 'abhishek@gmail.com', 2147483647, 32165498716, '2022-05-19', 'rajapur', '2022-05-26', 'B+', '  Male'),
('Rupali Ramesh Visapurkar', 'rupali@gmail.com', 2147483647, 1937628456234, '2022-05-19', 'mulgaon', '2000-04-18', 'A+', 'Female'),
('Sanika Dinesh Padvekar', 'sanika@gmai.com', 2147483647, 789034565434, '2022-05-28', 'mulashi', '2022-05-12', 'AB-', 'Female'),
('Arpita Vinayak Badirke', 'arpita@gmail.com', 2147483647, 2536147896, '2022-05-19', 'suseri', '2000-08-17', 'O+', 'Female'),
('Nilesh Yash Karanjavkar', 'nilesh@gmail.com', 2147483647, 123654789852, '2022-05-26', 'shirshi', '2000-05-02', 'AB+', '  Male'),
('Abhishek Borage', 'abhishek@gmail.com', 2147483647, 632112369874, '2022-05-19', 'nashik', '2000-05-19', 'A+', '  Male'),
('kanishka Tushar Goltkar', 'tushar@gmail.com', 2147483647, 987412365987, '2022-05-05', 'kumbhave', '1996-05-26', 'AB-', 'Female'),
('Sarvesh Baing', 'sarvesh@gmail.com', 2147483647, 789654123369, '2022-05-14', 'khed', '2000-05-18', 'AB+', '  Male'),
('Abhijit Ashok Patere', 'patere@gmail.com', 2147483647, 123654789963, '2022-05-28', 'sadavali', '2002-02-01', 'O-', '  Male'),
('Aditya Patayane', 'adip@gmail.com', 2147483647, 9874563210213, '2022-08-30', 'bakbkd', '2022-08-23', 'B+', '  Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_user`
--
ALTER TABLE `contact_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`,`username`);

--
-- Indexes for table `new_donar`
--
ALTER TABLE `new_donar`
  ADD PRIMARY KEY (`Adhar`);
ALTER TABLE `new_donar` ADD FULLTEXT KEY `B_group` (`B_group`);

--
-- Indexes for table `requester`
--
ALTER TABLE `requester`
  ADD PRIMARY KEY (`requester_id`),
  ADD KEY `member_fk` (`member_fk`);

--
-- Indexes for table `request_blood`
--
ALTER TABLE `request_blood`
  ADD PRIMARY KEY (`Adhar`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_user`
--
ALTER TABLE `contact_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `requester`
--
ALTER TABLE `requester`
  MODIFY `requester_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
