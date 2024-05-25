-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 11:10 AM
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
-- Database: `barangay_id_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `marital_status` varchar(20) DEFAULT NULL,
  `emergency_contact_name` varchar(100) DEFAULT NULL,
  `emergency_contact_phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `first_name`, `last_name`, `address`, `birthdate`, `photo`, `email`, `phone`, `gender`, `occupation`, `nationality`, `marital_status`, `emergency_contact_name`, `emergency_contact_phone`) VALUES
(6, 'John Mark', 'Sarabia', 'Brgy. Pasig, Sara Iloilo', '2001-08-31', 'uploads/410413515_942153344190635_937474619472494669_n.jpg', 'jboysarabia31@gmail.com', '12312312312', 'Male', 'student', 'Filipino', 'Single', 'my sister', '12312312312'),
(7, 'Natoy', 'Natuyawan', 'Brgy. Kantunan ', '2024-05-24', 'uploads/phonehub.png', 'jboysarabia31@gmail.com', '1231231231', 'Other', 'Student', 'Filipino', 'Single', 'ako to', '1231231231'),
(8, 'Micah', 'Sarabia', 'Brgy. Pasig', '2005-04-08', 'uploads/phonehub.png', 'jboysarabia0@gmail.com', '09469334956', 'Mentally D', 'Student', 'Filipino', 'Single', 'si kwan', '09999999999'),
(9, 'Sherly', 'Almelia', 'Brgy. Bagacay', '1780-05-25', 'uploads/phonehub.png', 'almelia@gmail.com', '1231231213', 'Mentally D', 'Student', 'Filipino', 'Widowed', 'si jorel', '12312312321'),
(10, 'Sherly', 'Almelia', 'Brgy. Bagacay, San Dionisio, Iloilo', '2024-05-25', 'uploads/FB_IMG_1670045919665.jpg', 'jboysarabia0@gmail.com', '1231231213', 'Female', 'Student', 'Filipino', 'Single', 'si jorel', '09999999999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
