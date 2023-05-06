-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 12:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `mycrud2`
--

CREATE TABLE `mycrud2` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Reg_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mycrud2`
--

INSERT INTO `mycrud2` (`id`, `name`, `course`, `email`, `Reg_Date`) VALUES
(4, 'Prossy Hope', 'Medicine', 'prossyhope@gmail.com', '2022-11-24 08:27:57'),
(6, 'Akorabirungi Lutgard', 'Nursing', 'akorabirungi22@gmail.com', '2022-11-26 14:16:14'),
(7, 'Ankunda Sedra', 'Designing', 'ankundasedra@gmail.com', '2022-11-24 08:27:57'),
(8, 'Bareche Agnes', 'BCOM', 'barecheagnes@gmail.com', '2022-11-24 08:27:57'),
(9, 'Abenaitwe Renah', 'BCOM', 'abenaitwe11@gmail.com', '2022-11-24 08:27:57'),
(11, 'Karugaba Benson', 'medicine', 'karugaba@gmail.com', '2022-11-24 08:27:57'),
(12, 'Niwagaba Derrick', 'Lab management', 'niwagaba22@gmail.com', '2022-11-24 08:27:57'),
(17, 'Elton Hodges', 'In voluptate volupta', 'ziqifym@mailinator.com', '2022-11-24 08:27:57'),
(20, 'Kiona Stuart', 'Reprehenderit neque', 'xewyq@mailinator.com', '2022-11-24 08:27:57'),
(21, 'Karugaba Simon', 'Business administration', 'karugaba@gmail.com', '2022-11-24 08:27:57'),
(22, 'Agabire Nicholus', 'Civil ngineering', 'agabire@gmail.com', '2022-11-24 08:27:57'),
(23, 'Kisakye Daisy', 'Medicine', 'kisakyedaisy@gmail.com', '2022-11-24 08:27:57'),
(24, 'Aijuka Emily', 'Bussiness Administration', 'aijukaemily2@gmail.com', '2022-11-24 08:29:56'),
(26, 'Dustin Jacobs', 'Dolor cum facere con', 'baradoc@mailinator.com', '2022-11-30 18:56:07'),
(27, 'Warwita catheline', 'nursing', 'catheline@gmail.com', '2022-11-30 18:56:54'),
(28, 'Najjemba Emily', 'software engineering', 'emilynajjemba11@gmail.com', '2023-01-14 07:10:46'),
(29, 'Murungi  \"chris\"', 'Medicine', 'chrismurungi@gmail.com', '2023-01-14 07:12:09'),
(30, 'Aineembabazi christine', 'BCOM', 'ainesasi@gmail.com', '2023-01-14 07:15:04'),
(31, 'Charde Mcdowell', 'Reiciendis occaecat ', 'qunemyl@mailinator.com', '2023-04-12 07:21:33'),
(33, 'Muhwezi Albert', 'Software Engineeering', 'albertmuhwezi22@gmail.com', '2023-04-12 07:59:46'),
(34, 'Dj Seven Apangu', 'VFX', 'apanguseven33@gmail.com', '2023-04-12 08:03:26'),
(35, 'Ronald Reagan Kasujja', 'Vs code', 'kasujjaronald@gmail.com', '2023-04-12 08:04:59'),
(36, 'Kombowa Joseph', 'Chilling', 'kombowajoseph66@gmail.com', '2023-04-12 08:16:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mycrud2`
--
ALTER TABLE `mycrud2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mycrud2`
--
ALTER TABLE `mycrud2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
