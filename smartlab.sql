-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 07:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `dr_id` int(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`dr_id`, `p_id`, `title`, `fname`, `lname`, `degree`, `mobile`, `email`, `address`, `active`) VALUES
(1, 10, 'Dr.', 'Vivek', 'Kumar', 'M.B.B.S.', '9087678903', 'vivek@gmail.com', 'Lucknow', 'true'),
(2, 11, 'Dr.', 'Vishal', 'Dhiman', 'M.D.', '4567845678', 'vishal@gmail.com', 'Mumbai', 'true'),
(3, 12, 'Dr.', 'Sahil', 'Sharma', 'M.D.', '4567845678', 'sahil@gmail.com', 'Mumbai', 'true'),
(4, 13, 'Dr.', 'Shivam', 'Rathore', 'M.S.', '1234512345', 'shivam@gmail.com', 'Kolkata', 'false'),
(5, 14, 'Dr.', 'Ritik', 'Verma', 'M.S.', '1234512345', 'ritik@gmail.com', 'Kolkata', 'false'),
(6, 15, 'Dr.', 'Jishnu', 'Mittal', 'M.B.B.S.', '9087678903', 'jishnu@gmail.com', 'Lucknow', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `years` varchar(255) NOT NULL,
  `months` varchar(255) NOT NULL,
  `p_days` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `p_date` varchar(255) NOT NULL,
  `curr_time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `title`, `fname`, `lname`, `aadhar`, `email`, `mobile`, `years`, `months`, `p_days`, `p_address`, `report`, `gender`, `p_date`, `curr_time`) VALUES
(10, 'Mr.', 'Anirudh', 'Gupta', '123412341234', 'anirudh@gmail.com', '1234123456', '1', '2', '3', 'New Delhi', 'true', 'Male', '12-10-2022', '16:57:03'),
(11, 'Mr.', 'Vishad', 'Tyagi', '123456789012', 'vishad@gmail.com', '1234567890', '1', '2', '3', 'New Delhi', 'false', 'Male', '12-10-2022', '16:57:51'),
(12, 'Mr.', 'Chirag', 'Gupta', '123451234567', 'chirag@gmail.com', '1231231234', '2', '7', '8', 'Mumbai', 'true', 'Male', '12-10-2022', '16:58:38'),
(13, 'Mr.', 'Aryan', 'Goel', '345634563456', 'aryan@gmail.com', '8908908900', '5', '7', '8', 'Lucknow', 'true', 'Male', '12-10-2022', '16:59:59'),
(14, 'Mr.', 'Nakul', 'Sharma', '234562345678', 'nakul@gmail.com', '1234512345', '8', '8', '8', 'Bihar', 'true', 'Male', '12-10-2022', '17:00:53'),
(15, 'Mrs.', 'Sneha', 'Wadhwa', '345678903456', 'sneha@gmail.com', '5675675675', '8', '9', '1', 'Mumbai', 'true', 'Female', '12-10-2022', '17:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `test_desc` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `cat_id`, `p_id`, `name`, `test_desc`, `price`, `created_at`) VALUES
(1, 2, 10, 'USG', '2D Echo', 1800, '2022-10-13 09:38:20'),
(2, 1, 10, 'LAB', 'ABG', 100, '2022-10-13 09:38:20'),
(3, 2, 10, 'USG', 'Follicular Study', 1200, '2022-10-13 09:38:20'),
(4, 2, 10, 'USG', 'Color Doppler (Fetus)', 1000, '2022-10-13 09:38:20'),
(5, 4, 10, 'XRAY', 'Abdomen (AP, Erect)', 1800, '2022-10-13 09:38:20'),
(6, 4, 11, 'XRAY', 'Abdomen (AP, Erect)', 180, '2022-10-13 09:38:20'),
(7, 4, 11, 'XRAY', 'Ankle (AP)', 170, '2022-10-13 09:38:20'),
(8, 4, 11, 'XRAY', 'Arm (AP)', 180, '2022-10-13 09:38:20'),
(9, 2, 12, 'USG', '2D Echo', 1800, '2022-10-13 09:38:20'),
(10, 1, 12, 'LAB', 'ABG', 100, '2022-10-13 09:38:20'),
(11, 4, 13, 'XRAY', 'Abdomen (AP, Erect)', 1800, '2022-10-13 09:38:20'),
(12, 2, 13, 'USG', 'Color Doppler (Fetus)', 1000, '2022-10-13 09:38:20'),
(13, 1, 13, 'LAB', 'ABG', 100, '2022-10-13 09:38:20'),
(14, 6, 14, 'ECG', 'ECG', 250, '2022-10-13 09:38:20'),
(15, 6, 14, 'ECG', 'ECG Outdoor', 300, '2022-10-13 09:38:20'),
(16, 7, 14, 'CT SCAN', 'Brain', 2200, '2022-10-13 09:38:20'),
(17, 7, 15, 'CT SCAN', 'Brain', 2200, '2022-10-13 09:38:20'),
(18, 7, 15, 'CT SCAN', 'Dorsal Spine', 2200, '2022-10-13 09:38:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`dr_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `dr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
