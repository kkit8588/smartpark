-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 04:49 AM
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
-- Database: `smartpark_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `clients_id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `plate_number` varchar(100) NOT NULL,
  `entry_zone` varchar(24) NOT NULL,
  `status` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`clients_id`, `unique_id`, `client_name`, `plate_number`, `entry_zone`, `status`) VALUES
(1, 0, 'asd', 'asd', 'A', 'In'),
(2, 0, '', '', 'Select Entry Zone', 'Select Status'),
(3, 0, 'asd', 'asd', 'Select Entry Zone', 'Select Status'),
(4, 0, 'asd', 'AKJH32', 'A', 'In'),
(5, 722304591, 'asd', 'AKJH32', 'A', 'In'),
(6, 1637347971, 'asd', 'AKJH32', 'A', 'In'),
(7, 1623215793, 'asd', 'asd', 'B', 'Out'),
(8, 1521938100, 'asd', 'asd', 'B', 'Out'),
(9, 4, 'asdd', 'asdd', 'A', 'In'),
(10, 78676, 'asdd', 'asdd', 'A', 'In'),
(11, 99531, 'asddd', 'asdd', 'A', 'In'),
(12, 90286, 'asd', 'asddd', 'B', 'Out'),
(13, 65678, 'asdasd', 'asd', 'B', 'In'),
(14, 45538, 'asdasd', 'asd', 'B', 'In'),
(15, 64743, 'asdasd', 'asd', 'B', 'In'),
(16, 42378, 'Client Name:', 'Plate Number:', 'A', 'In'),
(17, 35131, 'Ken Narag', 'AKJH32', 'A', 'In');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `history_id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `plate_number` varchar(255) NOT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time DEFAULT NULL,
  `client_name` varchar(50) NOT NULL,
  `entry_zone` varchar(24) NOT NULL,
  `vehicle_type` varchar(24) NOT NULL,
  `parking_date` date NOT NULL DEFAULT current_timestamp(),
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`history_id`, `unique_id`, `plate_number`, `time_in`, `time_out`, `client_name`, `entry_zone`, `vehicle_type`, `parking_date`, `amount`) VALUES
(1, 64743, 'asd', '16:56:00', '17:56:00', 'asdasd', 'B', '0.20', '2024-01-21', 0),
(2, 42378, 'Plate Number:', '17:16:00', '18:16:00', 'Client Name:', 'A', '0.20', '2024-01-21', 12),
(3, 35131, 'AKJH32', '20:06:00', '22:07:00', 'Ken Narag', 'A', '0.20', '2024-01-22', 24.2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penalty`
--

CREATE TABLE `tbl_penalty` (
  `penalty_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `exceeding_time` int(11) NOT NULL,
  `fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_platenum`
--

CREATE TABLE `tbl_platenum` (
  `platenum_id` int(11) NOT NULL,
  `plate_number` int(11) NOT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`id`, `username`, `email`, `password`) VALUES
(12, 'admin', 'admin@gmail.com', '$2y$10$uN.t7SvM5q5sJvH54sMoGOZK5kVf6sZhAkcP/5QhUyfwWhPZwnixS'),
(13, 'newadmin', 'troilussedoguio@gmail.com', '$2y$10$6UjJg87HUid1N8lOZFQZ0.0/odEdl5Nxvy0FlDSmOQcfzCv9vmQha'),
(14, 'students', 'troilussedoguio@gmail.com', '$2y$10$Nv0jhl9xBFSE3MM6kPqf1O0WkklRUa9OqJiGCxIdjjpBvCfOFEyge');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_space`
--

CREATE TABLE `tbl_space` (
  `space_id` int(11) NOT NULL,
  `slots` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `tnx_id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `plate_number` varchar(50) NOT NULL,
  `vehicle_type` varchar(24) NOT NULL,
  `time_in` time NOT NULL DEFAULT current_timestamp(),
  `time_out` time NOT NULL,
  `amount` float NOT NULL,
  `parking_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`tnx_id`, `unique_id`, `plate_number`, `vehicle_type`, `time_in`, `time_out`, `amount`, `parking_date`) VALUES
(3, 3, 'asd', '0.20', '14:35:00', '15:35:00', 12, '2024-01-21'),
(4, 3, 'asd', '0.20', '14:36:00', '15:36:00', 12, '2024-01-21'),
(5, 3, 'asd', '0.20', '14:37:00', '16:37:00', 24, '2024-01-21'),
(6, 3, 'asd', '0.20', '14:39:00', '14:39:00', 0, '2024-01-21'),
(7, 3, 'asd', '0.20', '14:39:00', '15:39:00', 12, '2024-01-21'),
(8, 2, '', '0.20', '14:41:00', '15:41:00', 12, '2024-01-21'),
(9, 3, 'asd', '0.20', '14:42:00', '15:42:00', 12, '2024-01-21'),
(10, 4, 'AKJH32', '0.20', '14:58:00', '15:58:00', 12, '2024-01-21'),
(11, 4, 'AKJH32', '0.20', '15:00:00', '16:00:00', 12, '2024-01-21'),
(12, 64743, 'asd', '0.20', '16:56:00', '17:56:00', 12, '2024-01-21'),
(13, 42378, 'Plate Number:', '0.20', '17:15:00', '18:15:00', 12, '2024-01-21'),
(14, 42378, 'Plate Number:', '0.20', '17:16:00', '18:16:00', 12, '2024-01-21'),
(15, 35131, 'AKJH32', '0.20', '20:06:00', '22:07:00', 24.2, '2024-01-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`clients_id`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `tbl_penalty`
--
ALTER TABLE `tbl_penalty`
  ADD PRIMARY KEY (`penalty_id`);

--
-- Indexes for table `tbl_platenum`
--
ALTER TABLE `tbl_platenum`
  ADD PRIMARY KEY (`platenum_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_space`
--
ALTER TABLE `tbl_space`
  ADD PRIMARY KEY (`space_id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`tnx_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `clients_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_penalty`
--
ALTER TABLE `tbl_penalty`
  MODIFY `penalty_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_platenum`
--
ALTER TABLE `tbl_platenum`
  MODIFY `platenum_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_space`
--
ALTER TABLE `tbl_space`
  MODIFY `space_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `tnx_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
