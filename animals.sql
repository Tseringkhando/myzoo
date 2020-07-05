-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 08:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `claybrook`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `specie_id` int(11) NOT NULL,
  `specie_category_id` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `gender` enum('Female','Male') NOT NULL,
  `dob` timestamp NULL DEFAULT NULL,
  `date_joined_zoo` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `captivity_wild` enum('captivity','wild') NOT NULL,
  `location_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_sponsored` tinyint(1) NOT NULL DEFAULT '0',
  `is_for_sponsorship` tinyint(1) NOT NULL DEFAULT '0',
  `is_sick` tinyint(1) NOT NULL DEFAULT '0',
  `is_dead` tinyint(1) NOT NULL DEFAULT '0',
  `is_transferred` tinyint(1) NOT NULL DEFAULT '0',
  `is_archived` tinyint(1) NOT NULL DEFAULT '0',
  `height_metres` int(11) NOT NULL,
  `weight_kg` int(11) NOT NULL,
  `age_months` int(11) DEFAULT NULL,
  `dietary` text,
  `natural_habitat` varchar(50) DEFAULT NULL,
  `global_population` varchar(50) DEFAULT NULL,
  `animal_photo` text,
  `life_span_months` int(11) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `animal_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specie_id` (`specie_id`),
  ADD KEY `spcide_category_id` (`specie_category_id`),
  ADD KEY `location_id` (`location_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`specie_id`) REFERENCES `species` (`id`),
  ADD CONSTRAINT `animals_ibfk_2` FOREIGN KEY (`specie_category_id`) REFERENCES `specie_categories` (`id`),
  ADD CONSTRAINT `animals_ibfk_3` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
