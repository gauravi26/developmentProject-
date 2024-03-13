-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 02:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `PhoneNumber` varchar(15) DEFAULT NULL,
  `RegistrationDate` date DEFAULT NULL,
  `PremiumMember` tinyint(1) DEFAULT NULL,
  `Balance` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `RegistrationDate`, `PremiumMember`, `Balance`) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '123-456-7890', '2024-01-01', 1, '200.50'),
(2, 'Jane', 'Doe', 'jane.doe@example.com', '098-765-4321', '2024-02-01', 0, '100.25'),
(3, 'Jim', 'Beam', 'jim.beam@example.com', '111-222-3333', '2024-03-01', 1, '300.75'),
(4, 'Alice', 'Smith', 'alice.smith@example.com', '222-333-4444', '2024-04-01', 0, '150.00'),
(5, 'Bob', 'Johnson', 'bob.johnson@example.com', '333-444-5555', '2024-05-01', 1, '250.50'),
(6, 'Charlie', 'Williams', 'charlie.williams@example.com', '444-555-6666', '2024-06-01', 0, '350.75'),
(7, 'David', 'Brown', 'david.brown@example.com', '555-666-7777', '2024-07-01', 1, '450.25'),
(8, 'Eve', 'Jones', 'eve.jones@example.com', '666-777-8888', '2024-08-01', 0, '550.50'),
(9, 'Frank', 'Miller', 'frank.miller@example.com', '777-888-9999', '2024-09-01', 1, '650.75'),
(10, 'Grace', 'Davis', 'grace.davis@example.com', '888-999-1111', '2024-10-01', 0, '750.25'),
(11, 'Harry', 'Garcia', 'harry.garcia@example.com', '999-111-2222', '2024-11-01', 1, '850.50'),
(12, 'Ivy', 'Rodriguez', 'ivy.rodriguez@example.com', '111-222-3333', '2024-12-01', 0, '950.75'),
(13, 'Jack', 'Wilson', 'jack.wilson@example.com', '222-333-4444', '2025-01-01', 1, '1050.25'),
(14, 'Kate', 'Martinez', 'kate.martinez@example.com', '333-444-5555', '2025-02-01', 0, '1150.50'),
(15, 'Luke', 'Anderson', 'luke.anderson@example.com', '444-555-6666', '2025-03-01', 1, '1250.75'),
(16, 'Mia', 'Taylor', 'mia.taylor@example.com', '555-666-7777', '2025-04-01', 0, '1350.25'),
(17, 'Nick', 'Thomas', 'nick.thomas@example.com', '666-777-8888', '2025-05-01', 1, '1450.50'),
(18, 'Olivia', 'Hernandez', 'olivia.hernandez@example.com', '777-888-9999', '2025-06-01', 0, '1550.75');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
