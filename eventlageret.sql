-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2018 at 07:31 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventlageret`
--

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `id` int(6) UNSIGNED NOT NULL,
  `city` varchar(40) DEFAULT NULL,
  `addresse` varchar(100) DEFAULT NULL,
  `antal` int(11) DEFAULT NULL,
  `navn` varchar(100) DEFAULT NULL,
  `telefornummer` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `kommentar` varchar(450) DEFAULT NULL,
  `speakers` varchar(10) DEFAULT NULL,
  `dj` varchar(10) DEFAULT NULL,
  `lys` varchar(10) DEFAULT NULL,
  `beerpong` varchar(10) DEFAULT NULL,
  `stodband` varchar(10) DEFAULT NULL,
  `betingelser` varchar(10) DEFAULT NULL,
  `sspeakers` varchar(100) DEFAULT NULL,
  `anleg` varchar(100) DEFAULT NULL,
  `soundboks` varchar(100) DEFAULT NULL,
  `dato` date DEFAULT NULL,
  `tid` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`id`, `city`, `addresse`, `antal`, `navn`, `telefornummer`, `email`, `kommentar`, `speakers`, `dj`, `lys`, `beerpong`, `stodband`, `betingelser`, `sspeakers`, `anleg`, `soundboks`, `dato`, `tid`) VALUES
(1, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', NULL, NULL),
(2, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-22', NULL),
(3, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-07', '20:20:00'),
(4, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-07', '21:12:00'),
(5, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-07', '21:12:00'),
(6, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-07', '21:12:00'),
(7, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-08', '12:33:00'),
(8, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-08', '12:33:00'),
(9, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-08', '12:33:00'),
(10, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-08', '12:33:00'),
(11, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'true', 'false', 'Nej', 'false', 'false', 'false', 'true', 'true', 'false', '2018-12-08', '12:33:00'),
(12, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'true', 'false', 'Ja', 'false', 'false', 'false', 'true', 'false', 'false', '2018-12-08', '12:33:00'),
(13, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-15', '22:22:00'),
(14, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-13', '03:03:00'),
(15, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'true', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-13', '03:03:00'),
(16, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Ja', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-29', '23:23:00'),
(17, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Ja', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-29', '23:23:00'),
(18, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'false', 'false', 'Ja', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-29', '23:23:00'),
(19, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'true', 'true', 'none', 'false', 'false', 'false', 'true', 'true', 'true', '2018-12-15', '23:23:00'),
(20, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'true', 'true', 'hidden', 'false', 'false', 'false', 'true', 'true', 'true', '2018-12-15', '23:23:00'),
(21, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'true', 'true', 'Nej', 'false', 'false', 'false', 'true', 'true', 'true', '2018-12-15', '23:23:00'),
(22, 'Ballerup', 'Her', 100, 'Andreas', 12345567, 'asd@ads.dk', 'HEJ', 'true', 'true', 'Nej', 'false', 'false', 'false', 'true', 'true', 'true', '2018-12-15', '23:23:00'),
(23, 'wfwef', 'fewf', 2323, 'fewf', 2323, 'ewfewf', 'fwefwe', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-30', '23:32:00'),
(24, 'fwef', 'fwef', 2323, 'wfefw', 2323, 'fwefwe', 'Nej', 'false', 'false', 'Nej', 'false', 'false', 'true', 'false', 'false', 'false', '2018-12-15', '23:23:00'),
(25, 'fwef', 'fwef', 2323, 'wfefw', 2323, 'fwefwe', 'Nej', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-15', '23:23:00'),
(26, 'fwef', 'fwef', 2323, 'wfefw', 2323, 'fwefwe', 'Nej', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-15', '23:23:00'),
(27, 'fwef', 'fwef', 2323, 'wfefw', 2323, 'fwefwe', 'Nej', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-15', '23:23:00'),
(28, 'fwef', 'fwef', 2323, 'wfefw', 2323, 'fwefwe', 'Nej', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-15', '23:23:00'),
(29, 'fwef', 'fwef', 2323, 'wfefw', 2323, 'fwefwe', 'Nej', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-15', '23:23:00'),
(30, 'fwef', 'fwef', 2323, 'wfefw', 2323, 'fwefwe', 'Nej', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-15', '23:23:00'),
(31, 'fwef', 'fwef', 2323, 'wfefw', 2323, 'fwefwe', 'Nej', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-15', '23:23:00'),
(32, 'fwef', 'fwef', 2323, 'wfefw', 2323, 'fwefwe', 'Nej', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-15', '23:23:00'),
(33, 'ewfwefwef', 'wefwefwef', 3223, 'wefwefwef', 322323, 'wefwefwef', 'Nej', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-30', '23:23:00'),
(34, 'ewfwefwef', 'wefwefwef', 3223, 'wefwefwef', 322323, 'wefwefwef', 'Nej', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-30', '23:23:00'),
(35, 'ewfwefwef', 'wefwefwef', 3223, 'wefwefwef', 322323, 'wefwefwef', 'wefwefwefwef', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-30', '23:23:00'),
(36, 'ewfwefwef', 'wefwefwef', 3223, 'wefwefwef', 322323, 'wefwefwef', 'wefwefwefwef', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-30', '23:23:00'),
(37, 'ewfwefwef', 'wefwefwef', 3223, 'wefwefwef', 322323, 'wefwefwef', 'wefwefwefwef', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-30', '23:23:00'),
(38, 'fwefefw', 'fwefwef', 3223, 'fwefw', 3223, 'fwefwef', '', 'false', 'false', 'Nej', 'false', 'false', 'true', 'false', 'false', 'false', '2018-12-15', '23:23:00'),
(39, 'fwefefw', 'fwefwef', 3223, 'fwefw', 3223, 'fwefwef', 'fewfwefwefef\r\nfewfwefwefwef\r\nwefwefwefwefw\r\nfwefwefwefwrgrwgrwgw\r\nrgergrge', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2018-12-15', '23:23:00'),
(40, 'fwefwe', 'efwefew', 0, 'efwefw', 2323, 'dvsdv', '', 'false', 'false', 'Nej', 'false', 'false', 'true', 'false', 'false', 'false', '2018-12-14', '23:23:00'),
(41, 'fwefwe', 'efwefew', 0, 'efwefw', 2323, 'dvsdv', '', 'false', 'false', 'Nej', 'false', 'false', 'true', 'false', 'false', 'false', '2018-12-14', '23:23:00'),
(42, 'Stenløse', 'byvej', 60, 'andreas', 66666666, 'Seeger01@hotmail.com', '', 'false', 'true', 'Nej', 'true', 'false', 'true', 'false', 'true', 'false', '2018-12-30', '22:00:00'),
(43, 'ølstykke', 'svandholm vænge', 50, 'michael', 20540180, 'michael.seeger@hotmail.com', 'dj i 4 timer\r\nprimært julemusik', 'false', 'false', 'Nej', 'false', 'false', 'true', 'false', 'false', 'false', '2019-01-10', '20:00:00'),
(44, 'ølstykke', 'svandholm vænge', 50, 'michael', 20540180, 'michael.seeger@hotmail.com', 'dj i 4 timer\r\nprimært julemusik', 'false', 'false', 'Nej', 'false', 'false', 'false', 'false', 'false', 'false', '2019-01-10', '20:00:00'),
(45, 'wefwef', 'fewf', 343, 'fwefw', 2323, 'wefwe', 'fwefwef', 'false', 'false', 'Ja', 'false', 'false', 'true', 'false', 'false', 'false', '2023-12-19', '00:23:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
