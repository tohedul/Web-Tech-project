-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 06:16 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guideme`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `comment`, `user_name`) VALUES
(41, 'sajek', '\r\n			hello sajek	\r\n			', ''),
(43, 'inani', '\r\n			Beautiful inani beach	\r\n			', ''),
(44, 'martin', 'Beautiful st. martin\r\n				\r\n			', ''),
(45, 'sajek', 'Beautiful sajek valley\r\n				\r\n			', ''),
(46, 'jaflong', '\r\n		beautiful jaflong		\r\n			', ''),
(47, 'ratargul', 'beautiful ratargul\r\n				\r\n			', ''),
(48, 'bisnakandi', 'beautiful bisnakandi\r\n				\r\n			', ''),
(49, 'cox', '\r\n				\r\n			', ''),
(50, 'inani', 'sdfs\r\n				\r\n			', ''),
(51, 'inani', 'sdfs\r\n				\r\n			', ''),
(52, 'inani', '\r\n	\r\nhello			\r\n			', ''),
(53, 'cox', 'Beautiful place\r\n				\r\n			', ''),
(54, 'cox', 'hello\r\n				\r\n			', '');

-- --------------------------------------------------------

--
-- Table structure for table `edu`
--

CREATE TABLE `edu` (
  `id` int(11) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `link` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edu`
--

INSERT INTO `edu` (`id`, `dept`, `name`, `pic`, `link`) VALUES
(2, 'cse', 'buet', 'buet.jpg', 'http://www.buet.ac.bd'),
(3, 'cse', 'sust', 'sust.jpg', 'http://www.sust.edu'),
(4, 'eee', 'aiub', 'aiub.jpg', 'http://www.aiub.edu'),
(5, 'eee', 'buet', 'buet.jpg', 'http://www.buet.ac.bd'),
(6, 'medi_study', 'akmmch', 'Neuro2.jpg', 'http://www.akmmch.com'),
(7, 'medi_study', 'afmc', 'Armed.jpg', 'http://afmc.edu.bd'),
(8, 'bba', 'nsu', 'nsu.jpg', 'http://www.northsouth.edu'),
(9, 'bba', 'ewu', 'ew.jpg', 'http://www.ewubd.edu');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `area` varchar(15) NOT NULL,
  `detail` longtext NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` int(14) NOT NULL,
  `website` varchar(30) NOT NULL,
  `comment` longtext,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `area`, `detail`, `address`, `phone_no`, `website`, `comment`, `img`) VALUES
(1, 'Seagull Hotel Cox\'s Bazar', 'Cox\'s Bazar', 'Overlooking the Bay of Bengal, this sleek hotel with a smoked-glass facade is a minutes\' walk through trees to Cox\'s Bazar Beach. \r\n\r\nBright, relaxed rooms feature cable TV and minifridges. Suites add separate living rooms and balconies. Most offer bay views, and 1 has a glass-roof living/dining area. Room service is available 24/7.\r\n\r\nParking is complimentary. There are 6 restaurants and bars, including a rooftop Italian eatery, and a bar beside an outdoor pool. There\'s also a spa, a gym and direct access to a private beach. Breakfast is available.', 'Soghundha Point, Hotel Motel Zone, Cox\'s Bazaar Sea Beach, Cox\'s Bazar', 34162480, 'www.seagullhotelbd.com', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `medi`
--

CREATE TABLE `medi` (
  `id` int(11) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `name` varchar(35) NOT NULL,
  `pic` varchar(40) NOT NULL,
  `link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medi`
--

INSERT INTO `medi` (`id`, `dept`, `name`, `pic`, `link`) VALUES
(1, 'cardi', 'labaid', 'LabAid.jpg', 'http://labaidgroup.com/special'),
(2, 'cardi', 'JatioHreedRogHospital', 'JatioHreedRogHospital.jpg', 'http://www.nhf.org.bd'),
(3, 'ortho', 'nitorbd', 'ortho1.jpg', 'http://nitorbd.com'),
(4, 'ortho', 'dlmch', 'ortho2.jpg', 'http://dlmch.edu.bd'),
(5, 'neuro', 'nins', 'National_neuroScience.jpg', 'http://www.nins.com.bd/nins/'),
(6, 'neuro', 'akmmch', 'neuro2.jpg', 'http://www.akmmch.com'),
(7, 'gyne', 'squarehospital', 'Gyno1.jpg', 'https://www.squarehospital.com'),
(13, 'cardi', 'Apollo Hospital', '', 'www.apollodhaka.com/'),
(14, 'cardi', 'Apollo Hospital', '', 'www.apollodhaka.com/'),
(15, 'cardi', 'Apollo Hospital', '', 'www.apollodhaka.com/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(5) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `user_name`, `password`, `user_type`, `gender`, `dob`) VALUES
(2, 'user 1', 'user1@guideme.com', 'user1', 'user123', 'user', 'male', '2000-02-25'),
(3, 'Tohedul Islum', 'admin1@guideme.com', 'admin', 'admin123', 'admin', 'male', '1995-10-30'),
(4, 'admin', 'admin@gmail.com', 'admin12', 'admin12', 'admin', 'male', '2000-02-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `medi`
--
ALTER TABLE `medi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `edu`
--
ALTER TABLE `edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medi`
--
ALTER TABLE `medi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
