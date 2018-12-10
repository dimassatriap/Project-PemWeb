-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 01:43 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skedulindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_id` varchar(25) NOT NULL,
  `Event_nama` varchar(250) DEFAULT NULL,
  `Event_tanggal` date DEFAULT NULL,
  `Event_start` time DEFAULT NULL,
  `Event_stop` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_id`, `Event_nama`, `Event_tanggal`, `Event_start`, `Event_stop`) VALUES
('5', 'Rapat Pimpinan I', '2018-12-04', NULL, NULL),
('5c07629ca5f05', 'Rapat Pimpinan I', '0000-00-00', '00:00:00', '00:00:00'),
('5c07635fba078', 'Rapat Pimpinan I', '0000-00-00', '00:00:00', '00:00:00'),
('5c07638432213', 'Rapat Pimpinan II', '2018-12-10', '01:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `Jadwal_Id` date DEFAULT NULL,
  `Person_Id` int(10) DEFAULT NULL,
  `Event_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Person_Id` int(10) NOT NULL,
  `Person_nama` varchar(250) DEFAULT NULL,
  `Person_status` varchar(250) DEFAULT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Person_Id`, `Person_nama`, `Person_status`, `password`) VALUES
(17007, 'Dimas Satria', 'Mhs', 'tole'),
(17015, 'Dimas Satria Prakoso', NULL, 'tole');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD KEY `Person_Id` (`Person_Id`),
  ADD KEY `Event_id` (`Event_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Person_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `Person_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17016;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `Jadwal_ibfk_1` FOREIGN KEY (`Person_Id`) REFERENCES `person` (`Person_Id`),
  ADD CONSTRAINT `Jadwal_ibfk_2` FOREIGN KEY (`Event_id`) REFERENCES `event` (`Event_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
