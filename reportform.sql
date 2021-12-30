-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 11:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `episurv`
--

-- --------------------------------------------------------

--
-- Table structure for table `reportform`
--

CREATE TABLE `reportform` (
  `id` int(30) NOT NULL,
  `location` varchar(200) NOT NULL,
  `age` int(4) NOT NULL,
  `tribe` varchar(200) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `symptomsStart` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `symptoms` varchar(200) NOT NULL,
  `traveller` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reportform`
--

INSERT INTO `reportform` (`id`, `location`, `age`, `tribe`, `gender`, `symptomsStart`, `email`, `symptoms`, `traveller`) VALUES
(1, 'Anambra', 50, 'Ibadan', '', 'yesterday', 'timmcgraw1408@gmail.', 'cough', 'yes'),
(2, 'ibadan', 23, 'Yoruba', '', '', '', '', ''),
(3, 'ibadan', 23, 'Yoruba', '', 'yesterday', 'juniorjohn140@gmail,', 'malaria', 'yes'),
(4, 'ibadan', 23, 'Yoruba', '', 'yesterday', 'juniorjohn140@gmail,', 'malaria', 'yes'),
(5, 'ibadan', 23, 'Yoruba', '', 'yesterday', 'juniorjohn140@gmail,', 'malaria', 'yes'),
(6, 'Anambra', 50, 'Ibadan', '', 'yesterday', 'timmcgraw1408@gmail.', 'cough', 'no'),
(7, 'apete', 22, 'igbo', '', 'today', 'chieunice@gmail.com', 'cough', 'yes'),
(8, 'Ouagadougou', 27, 'Efik', '', 'Three Weeks Ago', 'moronfoladan@gmail.c', 'corona symptomps gen', 'no'),
(9, 'Anambra', 50, 'Ibadan', '', 'yesterday', 'moronfoladan@gmail.com', 'corona symptomps generally', 'no'),
(10, 'ibadan', 30, 'Ibadan', '', 'Three Weeks Ago', 'jerryhooper2376@gmail.com', 'cough', 'no'),
(11, 'Anambra', 50, 'Enugu', '', 'December', 'politekc@gmail.com', 'cough', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reportform`
--
ALTER TABLE `reportform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reportform`
--
ALTER TABLE `reportform`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
