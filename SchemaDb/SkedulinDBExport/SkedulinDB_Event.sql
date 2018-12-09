-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 05:49 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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
('5c07638432213', 'Rapat Pimpinan II', '2018-12-10', '01:00:00', '12:00:00'),
('5c0c9dd658291', '', '0000-00-00', '00:00:00', '00:00:00'),
('5c0c9ddae5596', '', '0000-00-00', '00:00:00', '00:00:00'),
('5c0c9e12aa4e5', '', '0000-00-00', '00:00:00', '00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
