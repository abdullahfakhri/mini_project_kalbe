-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2025 at 10:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project_kalbe`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_ca_analyses`
--

CREATE TABLE `m_ca_analyses` (
  `id` int(11) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `last_updated_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `parameter_id` int(11) DEFAULT NULL,
  `method_id` int(11) DEFAULT NULL,
  `sample_type_id` int(11) DEFAULT NULL,
  `lead_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_ca_methods`
--

CREATE TABLE `m_ca_methods` (
  `id` int(11) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `last_updated_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_ca_parameters`
--

CREATE TABLE `m_ca_parameters` (
  `id` int(11) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT current_timestamp(),
  `last_updated_by` varchar(100) DEFAULT NULL,
  `last_updated_on` datetime DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_ca_parameters`
--

INSERT INTO `m_ca_parameters` (`id`, `created_by`, `created_on`, `last_updated_by`, `last_updated_on`, `is_active`, `code`, `description`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 'BAB', 'Bioassay and Biochemistry'),
(2, NULL, NULL, NULL, NULL, NULL, 'BML', 'Biomolecular'),
(3, 'budi', '2025-08-21 08:15:52', 'budi', '2025-08-20 08:15:52', NULL, 'CDT', 'Comparative Dissolution Testing'),
(6, NULL, NULL, NULL, NULL, NULL, 'MBY', 'Microbiology'),
(7, NULL, NULL, NULL, NULL, NULL, 'MDA', 'Media'),
(8, NULL, NULL, NULL, NULL, NULL, 'OTH', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `m_ca_sample_types`
--

CREATE TABLE `m_ca_sample_types` (
  `id` int(11) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `last_updated_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_ca_sample_types`
--

INSERT INTO `m_ca_sample_types` (`id`, `created_by`, `created_on`, `last_updated_by`, `last_updated_on`, `is_active`, `code`, `description`) VALUES
(1, 'Budi', '2025-08-21 08:15:52', 'budi', '2025-08-20 08:15:52', NULL, 'BCT', 'Bacterial'),
(2, NULL, NULL, NULL, NULL, NULL, 'BIC', 'Bioindicator Sample'),
(4, 'Eden', NULL, NULL, NULL, NULL, 'DFT', 'Disinfectant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_ca_analyses`
--
ALTER TABLE `m_ca_analyses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `parameter_id` (`parameter_id`),
  ADD KEY `method_id` (`method_id`),
  ADD KEY `sample_type_id` (`sample_type_id`);

--
-- Indexes for table `m_ca_methods`
--
ALTER TABLE `m_ca_methods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `m_ca_parameters`
--
ALTER TABLE `m_ca_parameters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `m_ca_sample_types`
--
ALTER TABLE `m_ca_sample_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_ca_analyses`
--
ALTER TABLE `m_ca_analyses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_ca_methods`
--
ALTER TABLE `m_ca_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_ca_parameters`
--
ALTER TABLE `m_ca_parameters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `m_ca_sample_types`
--
ALTER TABLE `m_ca_sample_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_ca_analyses`
--
ALTER TABLE `m_ca_analyses`
  ADD CONSTRAINT `m_ca_analyses_ibfk_1` FOREIGN KEY (`parameter_id`) REFERENCES `m_ca_parameters` (`id`),
  ADD CONSTRAINT `m_ca_analyses_ibfk_2` FOREIGN KEY (`method_id`) REFERENCES `m_ca_methods` (`id`),
  ADD CONSTRAINT `m_ca_analyses_ibfk_3` FOREIGN KEY (`sample_type_id`) REFERENCES `m_ca_sample_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
