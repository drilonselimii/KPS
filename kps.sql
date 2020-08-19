-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2017 at 12:21 AM
-- Server version: 5.7.16-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kps`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imgid` int(11) NOT NULL,
  `id` varchar(10) DEFAULT NULL,
  `image` longblob NOT NULL,
  `text` varchar(5000) DEFAULT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imgid`, `id`, `image`, `text`, `name`) VALUES
(1, NULL, '', NULL, ''),
(2, NULL, '', NULL, ''),
(3, NULL, '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(10) NOT NULL,
  `emri` varchar(20) NOT NULL,
  `mbiemri` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fjalekalimi` varchar(30) NOT NULL,
  `ditelindja` varchar(10) NOT NULL,
  `gjinia` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emri`, `mbiemri`, `email`, `fjalekalimi`, `ditelindja`, `gjinia`) VALUES
('100000', 'Lule', 'Ahmedi', 'luleahmedi@uni-pr.edu', 'realmadrid', '', ''),
('1000000005', 'drilon', 'selimi', 'drila6@hotmail.com', 'drilonselimi', '1995-01-01', 'Mashkull'),
('100001', 'Isak', 'Shabani', 'isakshabani@uni-pr.edu', 'cakucaku1', '', ''),
('100002', 'Blerim', 'Rexha', 'blerimrexha@uni-pr.edu', 'karate-ks', '', ''),
('1010000000', 'Blerta', 'Mehani', 'blerta_mehani@live.com', 'blerta123', '1996-10-14', 'Femer'),
('1020000000', 'Ramadan', 'Mehani', 'dan_mehani@live.com', '19021962', '1980-02-19', 'Mashkull'),
('1100000000', 'asddsa', 'asdlasd', 'mascdasmdc@fkmscd.com', 'aaaaaaaa', '1995-01-01', 'Mashkull'),
('1200000000', 'blend', 'mehani', 'blendmehani@live.com', 'blendi123', '1995-01-01', 'Mashkull'),
('1230000000', 'drilon', 'selimi', 'drila@live.com', 'qqqqqqqq', '1995-01-01', 'Mashkull'),
('200000', 'Ylli', 'Sadikaj', 'yllisadikaj@uni-pr.edu', 'pp30pike', '', ''),
('200001', 'Korab', 'Rrmoku', 'korabrrmoku@uni-pr.edu', 'manunited', '', ''),
('200002', 'Dardan', 'Shabani', 'dardanshabani@uni-pr.edu', 'dardi123', '', ''),
('3210000000', 'blend', 'mehani', 'blendimehani@sdc.com', 'blendi123', '1995-01-01', 'Mashkull');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imgid`),
  ADD KEY `id_idx` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
