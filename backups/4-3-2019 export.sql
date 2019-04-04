-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 06:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolioday`
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
  `student_secondary_website_address` varchar(128) DEFAULT NULL,
  `student_image_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_login_username`, `student_first_name`, `student_last_name`, `student_program`, `student_secondary_program`, `student_website_address`, `student_personal_email`, `student_linkedin_profile`, `student_hometown`, `student_career_goals`, `student_hobbies`, `student_secondary_website_address`, `student_image_link`) VALUES
(1, 'nphifer', 'Nathan', 'Phifer', 'Web Development', NULL, 'http://n8te.org', 'nephifer@dmacc.edu', 'google.com', 'Ankeny', 'Nothin much', 'My hobbies', 'http://github.com/nephifey', 'Nathan Phifer.jpg'),
(2, 'rbanwart', 'Robert', 'Banwart', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(3, 'cbleeker', 'Cristina', 'Bleeker', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Christina Bleeker.jpg'),
(4, 'sbuljubasic', 'Smail', 'Buljubasic', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Smail Buljubasic.jpg'),
(5, 'adamman', 'Augusta', 'Damman', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Augusta Damman.jpg'),
(6, 'jedmundson', 'Jordan', 'Edmundson', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jordan Edmundson.jpg'),
(7, 'melkashif', 'Marwa', 'Elkashif', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marwa Elkashif.jpg'),
(8, 'ielson', 'Isaac', 'Elson', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Isaac Elson.jpg'),
(9, 'sfletcher', 'Sophia', 'Fletcher', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sophia Fletcher.jpg'),
(10, 'hfoster', 'Heather', 'Foster', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Heather Foster.jpg'),
(11, 'nfrantz', 'Naomi', 'Frantz', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Naomi Frantz.jpg'),
(12, 'ehurt', 'Emily', 'Hurt', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(13, 'mjackson', 'Mikayla', 'Jackson', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mikayla Jackson.jpg'),
(14, 'djohnson', 'Dakota', 'Johnson', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dakota Johnson.jpg'),
(15, 'ejohnson', 'Emily', 'Johnson', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(16, 'sjones', 'Samuel', 'Jones', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(17, 'llarson', 'Loralyn', 'Larson', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Loralyn Larson.jpg'),
(18, 'amathis', 'Anne', 'Mathis', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Anne Mathis.jpg'),
(19, 'cmcgraw', 'Chase', 'Mcgraw', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(20, 'aotis', 'Abigail', 'Otis', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Abigail Otis.jpg'),
(21, 'spehl', 'Skyla', 'Pehl', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Skyla Pehl.jpg'),
(22, 'pramos', 'Pablo', 'Ramos', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pablo Ramos.jpg'),
(23, 'kryan', 'Katie', 'Ryan', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Katie Ryan.jpg'),
(24, 'jsampson', 'Jessica', 'Sampson', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jessica Sampson.jpg'),
(25, 'rscheel', 'Rachel', 'Scheel', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rachel Scheel.jpg'),
(26, 'psnitkey', 'Paige', 'Snitkey', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Paige Snitkey.jpg'),
(27, 'kstrohman', 'Kelsey', 'Strohman', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kelsey Strohman.jpg'),
(28, 'jvalenzuela', 'Jerson', 'Valenzuela', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jerson Valenzuela.jpg'),
(29, 'tvu', 'Tran', 'Vu', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tran Vu.jpg'),
(30, 'hwebb', 'Harley', 'Webb', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(31, 'bwildt', 'Bailey', 'Wildt', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bailey Wildt.jpg'),
(32, 'lwilson', 'Lauren', 'Wilson', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lauren Wilson.jpg'),
(33, 'mwiseman', 'Micalah', 'Wiseman', 'Graphic Design', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Micalah Wiseman.jpg'),
(36, 'abrown', 'Ashley', 'Brown', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ashley Brown.jpg'),
(37, 'aferguson', 'Auna', 'Ferguson', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Auna Ferguson.jpg'),
(38, 'tgarland', 'Tim', 'Garland', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tim Garland.jpg'),
(39, 'jgreen', 'Jacob', 'Green', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(40, 'mgwennap', 'Meredith', 'Gwennap', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Meredith Gwennap.jpg'),
(41, 'ahuynh', 'Amber', 'Hyunh', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Amber Huynh.jpg'),
(42, 'rklein', 'Rachel', 'Klein', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rachel Klein.jpg'),
(43, 'elehman', 'Emma', 'Lehman', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Emma Lehman.jpg'),
(44, 'amccarthy', 'Aaron', 'McCarthy', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(45, 'fmccarville', 'Finn', 'McCarville', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Finn McCarville.jpg'),
(46, 'lmccormick-mollman', 'Lisa', 'McCormick-Mollman', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lisa McCormick-Mollman.jpg'),
(47, 'rmccreary', 'Rick', 'McCreary', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rick McCreary.jpg'),
(48, 'cmeyer', 'Caleb', 'Meyer', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Caleb Meyer.jpg'),
(49, 'hneubauer', 'Holly', 'Neubauer', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Holly Neubauer.jpg'),
(50, 'spatterson', 'Shelby', 'Patterson', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Shelby Patterson.jpg'),
(51, 'spetty', 'Sierra', 'Petty', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sierra Petty.jpg'),
(52, 'esims', 'Evelyn', 'Sims', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(53, 'bthompson', 'Bethany', 'Thompson', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bethany Thompson.jpg'),
(54, 'rtourney', 'Rose', 'Tourney', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rose Tourney.jpg'),
(55, 'kvogel', 'Katharine', 'Vogel', 'Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Katharine Vogel.jpg'),
(56, 'jdiercks', 'John', 'Diercks', 'Web Development', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'John Diercks.jpg'),
(57, 'jmitchell', 'Jessica', 'Mitchell', 'Web Development', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jessica Mitchell.jpg'),
(58, 'cnichols', 'Connor', 'Nichols', 'Web Development', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Connor Nichols.jpg'),
(59, 'qphong', 'Quang', 'Phong', 'Web Development', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Quang Phong.jpg'),
(60, 'trichards', 'Taylor', 'Richards', 'Web Development', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Taylor Richards.jpg'),
(61, 'rhanson', 'Rebecca', 'Hanson', 'Web Development', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rebecca Hanson.jpg'),
(62, 'dandersen', 'Dane', 'Andersen', 'Animation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dane Andersen.jpg'),
(63, 'kbetts', 'Kaitlyn', 'Betts', 'Animation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kaitlyn Betts.jpg'),
(64, 'cbrendiinger', 'Caleb', 'Brendlinger', 'Animation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Caleb Brendlinger.jpg'),
(65, 'bcory', 'Brandon', 'Cory', 'Animation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(66, 'mcurry', 'Michael', 'Curry', 'Animation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(67, 'kday', 'Kyler', 'Day', 'Animation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kyler Day.jpg'),
(68, 'shodza', 'Semiu', 'Hodza', 'Animation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(69, 'jkenkel', 'Joel', 'Kenkel', 'Animation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Joel Kenkel.jpg'),
(70, 'pkobussen', 'Piet', 'Kobussen', 'Animation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Piet Kobussen.jpg'),
(71, 'arobles', 'Alexis', 'Robles', 'Animation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Alexis Robles.jpg'),
(72, 'ethompson', 'Emily', 'Thompson', 'Animation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Emily Thompson.jpg'),
(73, 'ludrovich', 'Larson', 'Udrovich', 'Animation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Larson Udrovich.jpg'),
(74, 'dwilliams', 'Dominic', 'Williams', 'Animation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dominic Williams.jpg'),
(75, 'eceban', 'Ecaterina(Katya)', 'Ceban', 'Video Production', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(76, 'jparker', 'Jason', 'Parker', 'Video Production', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(77, 'sronteze', 'Scott', 'Ronteze', 'Video Production', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

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
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
