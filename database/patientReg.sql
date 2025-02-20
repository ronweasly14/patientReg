-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2025 at 09:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patientReg`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `patient_id` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `archive_status` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`patient_id`, `lname`, `fname`, `mname`, `dob`, `created_at`, `updated_at`, `archive_status`) VALUES
('1', 'makabenta', 'jay', 'mac', '2025-02-16', NULL, NULL, 0),
('2', 'almeria', 'ivan', 'j', '1990-12-12', NULL, NULL, 0),
('patient-1197968520', 'almeria', 'ivan jay', 'm', '2025-02-16', '02/16/2025-11:55 pm', NULL, 0),
('patient-1364130150', 'almeria', 'ivan jay', 'sales', '2000-05-12', '02/16/2025-11:51 pm', NULL, 0),
('patient-1422288122', 'gurion', 'alrichyyy', 'amlan', '2025-02-04', '02/17/2025-08:51 am', NULL, 1),
('patient-1422765097', 'makabenta', 'tri', 'sales', '2002-05-01', '02/16/2025-01:42 pm', NULL, 1),
('patient-1719842942', 'nas', 'breed', 'c', '2000-01-02', '02/16/2025-01:39 pm', NULL, 1),
('patient-271275335', 'nas', 'rkkkk', 'm', '2025-02-17', '02/17/2025-12:24 am', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`patient_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
