
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2025 at 10:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poultry_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `flocks`
--

CREATE TABLE `flocks` (
  `Flock_id` int(30) NOT NULL,
  `Egg_productions` int(11) NOT NULL,
  `Mortality_count` int(11) NOT NULL,
  `Date` int(11) NOT NULL,
  `Water_consuption` double NOT NULL,
  `Feed_Consuption` double NOT NULL,
  `Healthy_notes` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flocks`
--

INSERT INTO `flocks` (`Flock_id`, `Egg_productions`, `Mortality_count`, `Date`, `Water_consuption`, `Feed_Consuption`, `Healthy_notes`) VALUES
(4, 60, 70, 8, 6.09, 7, 'we should try by all means to make sure that we prevent our flocks from beign infercted with diseases so that we avoid high mortality count');

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `Flock_id` int(11) NOT NULL,
  `Disease_name` varchar(50) NOT NULL,
  `Treatment/medicine` varchar(50) NOT NULL,
  `Number_of_birds` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Notes` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`Flock_id`, `Disease_name`, `Treatment/medicine`, `Number_of_birds`, `Date`, `Notes`) VALUES
(5, 'fowl pox', 'fowl pox vaccine', 45, '0000-00-00', 'treatment has no specific cure but can insure that iodine is appliedon sores and prevent mosquitoes bites');

-- --------------------------------------------------------

--
-- Table structure for table `metrics`
--

CREATE TABLE `metrics` (
  `Flock_id` int(30) NOT NULL,
  `Egg_productions` int(11) NOT NULL,
  `Mortality_count` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Water_consumption` double NOT NULL,
  `Feed_Consumption` double NOT NULL,
  `Healthy_notes` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metrics`
--

INSERT INTO `metrics` (`Flock_id`, `Egg_productions`, `Mortality_count`, `Date`, `Water_consumption`, `Feed_Consumption`, `Healthy_notes`) VALUES
(3, 40, 50, '2025-04-02', 6.41, 4, 'some notes');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `Flock_id` int(11) NOT NULL,
  `Inventory` varchar(200) NOT NULL,
  `Egg_production` int(11) NOT NULL,
  `Feed_reports` varchar(200) NOT NULL,
  `Transaction` double NOT NULL,
  `Health` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`Flock_id`, `Inventory`, `Egg_production`, `Feed_reports`, `Transaction`, `Health`) VALUES
(2, 'feed', 30, '4 bags of feed taken', 0, 'fit');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Flock_id` int(11) NOT NULL,
  `Transaction_Type` varchar(200) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Date` date NOT NULL,
  `notes` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Flock_id`, `Transaction_Type`, `Amount`, `Date`, `notes`) VALUES
(2, 'bird sale', 150, '0000-00-00', 'a boiler was sold');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `F_name` varchar(30) NOT NULL,
  `L_name` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Farm_name` varchar(30) NOT NULL,
  `Phone_number` int(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`F_name`, `L_name`, `Email`, `Farm_name`, `Phone_number`, `password`) VALUES
('rhoda', 'sakala', 'sakalarhoda16@gmail.com', 'RFarm', 777974609, 'rhoda5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flocks`
--
ALTER TABLE `flocks`
  ADD PRIMARY KEY (`Flock_id`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`Flock_id`);

--
-- Indexes for table `metrics`
--
ALTER TABLE `metrics`
  ADD PRIMARY KEY (`Flock_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`Flock_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flocks`
--
ALTER TABLE `flocks`
  MODIFY `Flock_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `Flock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `metrics`
--
ALTER TABLE `metrics`
  MODIFY `Flock_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `Flock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Phone_number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=777974610;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
