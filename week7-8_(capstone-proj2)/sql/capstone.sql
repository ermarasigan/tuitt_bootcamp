-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 06:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `picks`
--

CREATE TABLE `picks` (
  `id` int(11) NOT NULL,
  `songid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `deleted` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picks`
--

INSERT INTO `picks` (`id`, `songid`, `userid`, `deleted`) VALUES
(14, NULL, 1, 'Y'),
(16, NULL, 1, 'Y'),
(18, NULL, 2, 'Y'),
(20, 16, 2, 'Y'),
(21, 16, 1, 'Y'),
(22, NULL, 1, NULL),
(23, 27, 1, NULL),
(24, 24, 1, NULL),
(25, 25, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `year` char(4) NOT NULL,
  `bpm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `year`, `bpm`) VALUES
(13, 'test', 'lorem', '2016', 78),
(16, 'Despacito', 'Justin Bieber', '2017', 88),
(24, 'Despacito', 'Luis Fonsi ft Daddy Yankee', '2017', 88),
(25, 'Despacito', 'Kristel Fulgar', '2017', 88),
(27, 'Despacito', 'Boyce Avenue', '2017', 88),
(28, 'Despacito', 'Ruel Lafuente', '2017', 88),
(29, 'Desthpathito', 'Coco Martin', '2017', 88);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `birthday`) VALUES
(1, 'Emman', '4f26aeafdb2367620a393c973eddbe8f8b846ebd', 'admin', '1992-10-03'),
(2, 'Sano', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'regular', '1993-12-15'),
(3, 'asdas', '930a0029225aa4c28b8ef095b679285eaae27078', 'regular', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `picks`
--
ALTER TABLE `picks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `songid` (`songid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniquesong` (`title`,`artist`,`year`);
ALTER TABLE `songs` ADD FULLTEXT KEY `songs_fulltext` (`title`,`artist`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `picks`
--
ALTER TABLE `picks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `picks`
--
ALTER TABLE `picks`
  ADD CONSTRAINT `picks_ibfk_1` FOREIGN KEY (`songid`) REFERENCES `songs` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `picks_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
