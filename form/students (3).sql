-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 10.123.0.85:3307
-- Generation Time: Mar 28, 2019 at 08:21 PM
-- Server version: 5.7.23
-- PHP Version: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n4thann_wdv`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_login_username` varchar(128) DEFAULT NULL,
  `student_first_name` varchar(128) DEFAULT NULL,
  `student_last_name` varchar(128) DEFAULT NULL,
  `student_program` varchar(128) DEFAULT NULL,
  `student_secondary_program` varchar(128) DEFAULT NULL,
  `student_website_address` varchar(128) DEFAULT NULL,
  `student_personal_email` varchar(128) DEFAULT NULL,
  `student_linkedin_profile` varchar(128) DEFAULT NULL,
  `student_hometown` varchar(128) DEFAULT NULL,
  `student_career_goals` varchar(128) DEFAULT NULL,
  `student_hobbies` varchar(128) DEFAULT NULL,
  `student_secondary_website_address` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
