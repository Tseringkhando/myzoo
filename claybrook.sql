-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 07:12 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `animal_health_records`
--

CREATE TABLE `animal_health_records` (
  `animal_id` int(11) NOT NULL,
  `medical_condition` text,
  `treatment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `birds`
--

CREATE TABLE `birds` (
  `bird_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `nest_construction_method` varchar(50) DEFAULT NULL,
  `clutch_size` int(11) NOT NULL,
  `wingspan_in_metres` double(11,2) NOT NULL,
  `ability_to_fly` enum('Yes','No') NOT NULL,
  `plumage_colour_variants` varchar(50) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deaths`
--

CREATE TABLE `deaths` (
  `animal_id` int(11) NOT NULL,
  `death_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cause` text NOT NULL,
  `incineration_date` date DEFAULT NULL,
  `incineration_location` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fishes`
--

CREATE TABLE `fishes` (
  `fish_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fish_average_body_temperature` double(11,2) DEFAULT NULL,
  `water_type` enum('Salt','Fresh') NOT NULL,
  `fish_colour_variants` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `location` varchar(20) NOT NULL,
  `vacant` enum('Y','N') NOT NULL,
  `dimension_sqft` double(11,2) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location`, `vacant`, `dimension_sqft`, `date_created`) VALUES
(1, 'MNAE-123', 'N', 5.00, '2020-07-03 18:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `mammals`
--

CREATE TABLE `mammals` (
  `mammal_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `gestational_period_months` int(11) NOT NULL,
  `average_body_temperature` double(11,2) DEFAULT NULL,
  `mammal_category` enum('Prototheria','Metatheria','Eutheria') NOT NULL,
  `color_variants` int(11) DEFAULT NULL,
  `is_archive` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reptiles_amphibians`
--

CREATE TABLE `reptiles_amphibians` (
  `reptile_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `reproduction_type` enum('Egg Layer','Livebearer') NOT NULL,
  `rep_average_clutch_size` int(11) DEFAULT NULL,
  `rep_average_offspring` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'visitor');

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `id` int(11) NOT NULL,
  `specie_name` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_archived` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`id`, `specie_name`, `date_created`, `is_archived`) VALUES
(1, 'Mammaleis', '2020-07-03 11:52:30', 0),
(2, 'Animalis', '2020-07-03 11:54:46', 0),
(3, 'New spcie', '2020-07-03 12:04:58', 0),
(4, 'New spcie', '2020-07-03 12:15:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `specie_categories`
--

CREATE TABLE `specie_categories` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_archived` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specie_categories`
--

INSERT INTO `specie_categories` (`id`, `category`, `date_created`, `is_archived`) VALUES
(1, 'Mammal', '2020-06-26 18:55:26', 0),
(2, 'Bird', '2020-06-26 19:00:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_name` varchar(50) DEFAULT NULL,
  `is_existing_customer` enum('Yes','No') NOT NULL DEFAULT 'No',
  `primary_contact` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `sponsorship_band` enum('A','B','C','D','E') DEFAULT NULL,
  `is_archive` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `sinage_area_percentage` double(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_animals`
--

CREATE TABLE `sponsor_animals` (
  `animal_id` int(11) NOT NULL,
  `sponsor_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `animal_id` int(11) NOT NULL,
  `transfer_date` date DEFAULT NULL,
  `transfer_destination` varchar(50) DEFAULT NULL,
  `transfer_reason` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `is_logged_in` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `gender` enum('Male','Female','Others') DEFAULT NULL,
  `dob` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `joined_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_archive` tinyint(1) NOT NULL DEFAULT '0',
  `role` enum('admin','visitor','sponsor') NOT NULL DEFAULT 'visitor'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `is_logged_in`, `date_created`, `firstname`, `lastname`, `gender`, `dob`, `joined_date`, `is_archive`, `role`) VALUES
(1, 'test@gmail.com', '$2y$10$tttVJVTjkIR2woqWwCWbFuoCtZs57b26.RrE6vYE4Fu6VPHhrZyFK', 0, '2020-06-22 20:13:00', '', '', 'Male', '2020-07-02 19:47:34', '0000-00-00 00:00:00', 0, 'admin'),
(9, 'test2@gmail.com', '$2y$10$.GCSmlXzhjIIAPLxrQvMy.XJO0vyzjKrCokN5hlY9Usgw4vnZQwXm', 0, '2020-07-02 19:47:09', '123', '123', 'Female', '2020-07-26 18:15:00', '0000-00-00 00:00:00', 0, 'visitor'),
(10, 'test3@gmail.com', '$2y$10$w7MGQX4tt1EYi1JdXajYVODMLffEbE2JHhu/8CMM/Pl92gDmGGQ/S', 0, '2020-07-03 12:54:27', 'TSering', 'khando', 'Female', '2020-07-20 18:15:00', '0000-00-00 00:00:00', 0, 'admin'),
(16, 'test4@gmail.com', '$2y$10$wHdLYrd5tdqZOypdpmD2.eLPrfi8OY800YiR7BM8jNwp7DcNBNILW', 0, '2020-07-05 16:43:13', 'adf', 'fa', 'Female', '2020-07-06 18:15:00', '2020-07-05 16:43:13', 0, 'sponsor');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`, `date_created`) VALUES
(1, 1, '2020-06-24 17:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` enum('Male','Female','Others') NOT NULL,
  `dob` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `joined_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_archive` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zookeepers`
--

CREATE TABLE `zookeepers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` enum('Male','Female','Others') NOT NULL,
  `dob` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `joined_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_archive` tinyint(1) NOT NULL DEFAULT '0'
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
-- Indexes for table `animal_health_records`
--
ALTER TABLE `animal_health_records`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `birds`
--
ALTER TABLE `birds`
  ADD PRIMARY KEY (`bird_id`),
  ADD KEY `birds_ibfk_1` (`animal_id`);

--
-- Indexes for table `deaths`
--
ALTER TABLE `deaths`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `fishes`
--
ALTER TABLE `fishes`
  ADD PRIMARY KEY (`fish_id`),
  ADD KEY `animal_id` (`animal_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mammals`
--
ALTER TABLE `mammals`
  ADD PRIMARY KEY (`mammal_id`),
  ADD KEY `mammals_ibfk_1` (`animal_id`);

--
-- Indexes for table `reptiles_amphibians`
--
ALTER TABLE `reptiles_amphibians`
  ADD PRIMARY KEY (`reptile_id`),
  ADD KEY `animal_id` (`animal_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specie_categories`
--
ALTER TABLE `specie_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sponsor_animals`
--
ALTER TABLE `sponsor_animals`
  ADD KEY `sponsor_id` (`sponsor_id`),
  ADD KEY `sponsor_animals_ibfk_1` (`animal_id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visitors_ibfk_1` (`user_id`);

--
-- Indexes for table `zookeepers`
--
ALTER TABLE `zookeepers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `birds`
--
ALTER TABLE `birds`
  MODIFY `bird_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fishes`
--
ALTER TABLE `fishes`
  MODIFY `fish_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mammals`
--
ALTER TABLE `mammals`
  MODIFY `mammal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reptiles_amphibians`
--
ALTER TABLE `reptiles_amphibians`
  MODIFY `reptile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `species`
--
ALTER TABLE `species`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `specie_categories`
--
ALTER TABLE `specie_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `zookeepers`
--
ALTER TABLE `zookeepers`
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

--
-- Constraints for table `animal_health_records`
--
ALTER TABLE `animal_health_records`
  ADD CONSTRAINT `animal_health_records_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `birds`
--
ALTER TABLE `birds`
  ADD CONSTRAINT `birds_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `deaths`
--
ALTER TABLE `deaths`
  ADD CONSTRAINT `deaths_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `fishes`
--
ALTER TABLE `fishes`
  ADD CONSTRAINT `fishes_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `mammals`
--
ALTER TABLE `mammals`
  ADD CONSTRAINT `mammals_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `reptiles_amphibians`
--
ALTER TABLE `reptiles_amphibians`
  ADD CONSTRAINT `reptiles_amphibians_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD CONSTRAINT `sponsors_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sponsor_animals`
--
ALTER TABLE `sponsor_animals`
  ADD CONSTRAINT `sponsor_animals_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `sponsor_animals_ibfk_2` FOREIGN KEY (`sponsor_id`) REFERENCES `sponsors` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `transfers`
--
ALTER TABLE `transfers`
  ADD CONSTRAINT `transfers_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animals` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `visitors_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zookeepers`
--
ALTER TABLE `zookeepers`
  ADD CONSTRAINT `zookeepers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
