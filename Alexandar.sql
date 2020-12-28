-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2020 at 07:30 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Alexandar`
--

-- --------------------------------------------------------

--
-- Table structure for table `carers`
--

CREATE TABLE `carers` (
  `customer_id` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `given_name` text NOT NULL,
  `family_name` text NOT NULL,
  `columns` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carers`
--

INSERT INTO `carers` (`customer_id`, `pin`, `given_name`, `family_name`, `columns`) VALUES
('1111111111', '$2y$10$UsPmgtNEHbZ4hDY8BgyKqeUVWPL2xI/Bx/Z0sNT1KTo.qxpoM02W2', 'Suvendu Roy', 'Sukhendu Roy', '4'),
('2222222222', '$2y$10$/LqVrhj740o7nVlAoueRkeNrz3Hu6dOQmKK.dtGahf8aY9S.7b20i', 'Alexandar Roy', 'Alex Roy', '5'),
('3333333333', '$2y$10$6usSP25Xf3rbW1mOwlUQTeyiLzn0gIMFTBXhp1Yqk1LJifPhIyHGO', 'Tom Hollande', 'Hollande', '6'),
('8670947090', '$2y$10$kx7ia5qMucP8FEP1hx3c1.589wElTRE7SzYlb..DbxnRy41ni8Ihu', 'Koushik', 'Roy', ''),
('9989998989', '$2y$10$aL9WHQK21mirDInC0Wjep.7mW3isqEu5ETCRInMzYEfR8ddKgQaZu', 'Priya Dey', 'Dey', '2');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `family_name` text NOT NULL,
  `date_of_birth` text NOT NULL,
  `gender` text NOT NULL,
  `daily_message` text NOT NULL,
  `customer_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`family_name`, `date_of_birth`, `gender`, `daily_message`, `customer_id`) VALUES
('Roy', 'Bubun', 'Male', 'He is a good boy', '1234567890'),
('Roy Bhavan', '07/04/1998', 'Male', 'Good Speaking power', '8670947090'),
('Sukhendu Roy', '19/11/2020', 'Male', 'Well in studies and needs to take attention in studies', '1111111111'),
('Hollande', '12/11/2013', 'Female', 'This is a demo message', '3333333333'),
('Axie', 'Katch', 'Male', 'Demo Message', '2222222222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carers`
--
ALTER TABLE `carers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD KEY `customer_id_fk` (`customer_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child`
--
ALTER TABLE `child`
  ADD CONSTRAINT `child_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `carers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
