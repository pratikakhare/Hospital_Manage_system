-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 10:59 AM
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
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE `appoint` (
  `id` int(20) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `dname` varchar(200) NOT NULL,
  `depart` varchar(200) NOT NULL,
  `appo` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `problem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`id`, `pname`, `dname`, `depart`, `appo`, `time`, `problem`) VALUES
(1, 'Kunal Pandya', 'MS Dhoni', 'Neurologist', '2024-04-09', '06:00 PM - 07:00 PM', 'headack'),
(2, 'Hardik Pandya', 'MS Dhoni', 'Genral Physician', '2024-04-16', '01:00 PM - 02:00 PM', 'loveriya'),
(5, 'devansh patil', 'Alia', 'Ortho', '2024-06-01', '06:00 PM - 07:00 PM', 'eye problem');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `experiance` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `special` varchar(200) DEFAULT NULL,
  `availability` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `experiance`, `phone`, `special`, `availability`) VALUES
(1, 'Dr. MS Dhoni', '2', '7293921515', 'Ortho', 'Available'),
(2, 'Dr. virat kohli', '10', '1234567890', 'Ortho', 'Not-Available'),
(3, 'Dr. Alia', '1', '9370075241', 'Genral Physician', 'Not-Available'),
(4, 'Dr. Rohit Shama', '1', '7895642130', 'Ortho', 'Not-Available'),
(7, 'Dr. Abhi', '5', '1234567890', 'Genral Physician', 'Not-Available');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(1, 'virat', 'virat@123', '$2y$10$jIBgN7Rg7KEi2sCWKhac3.jNfs3OFiSRQZ.hICwN88hABYFjQEaUu'),
(2, 'pratik', 'pratik@123', '123'),
(3, 'Dipak', 'dipak@123', '1234'),
(4, '', 'dipak@123', ''),
(5, 'renukabal', 'renu@123', '000'),
(7, 'amravati', 'amt@gmail.com', '123'),
(8, 'sir', 'sir@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `age` varchar(200) DEFAULT NULL,
  `dob` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `dob`, `phone`, `email`, `gender`) VALUES
(4, 'Kunal Pandya', '21', '2002-06-04', '8530456789', 'hardik@gmail.com', 'male'),
(9, 'Pranav Mule', '23', '2024-05-23', '6359012030', 'pranav@123', 'male'),
(10, 'devansh patil', '22', '2024-05-02', '9982634587', 'devansh@gmail.com', 'male'),
(11, 'sir', '36', '2024-04-30', '1234567890', 'sir@gmail.com', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
