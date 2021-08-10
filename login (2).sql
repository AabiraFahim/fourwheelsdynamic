-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 05:29 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `cname`, `address`, `phone_no`, `email`, `invoice_no`) VALUES
(3, 'mariam khan', 'PECHS block 4', 2147483647, 'mariam123@gmail.com', 'INV-01'),
(5, 'khadija ', 'malir', 2147483647, 'khadija123@gmail.com', 'INV-02'),
(6, 'aliza', 'DHA', 2147483647, 'aliza123@gmail.com', 'INV-03'),
(7, 'deenah', 'bahadurabad', 2147483647, 'deenah@gmail.com', 'INV-04'),
(8, 'hasan', 'tariq road', 2147483647, 'deenah@gmail.com', 'INV-05'),
(9, 'amna nazir', 'PECHS block 5', 2147483647, 'amnanazir@gmail.com', 'INV-06');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `Part_No` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `Part_Name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`Part_No`, `category`, `Part_Name`, `quantity`, `price`) VALUES
('CL-1', 'clutch', 'Cover Assy, Clutch', 6, '700'),
('CL-10', 'clutch', 'Spring', 13, '700'),
('CL-11', 'clutch', 'Arm, Clutch Release', 14, '2000'),
('CL-12', 'clutch', 'Washer', 4, '8000'),
('CL-13', 'clutch', 'Nut', 8, '1000'),
('CL-14', 'clutch', 'Spring, Release Arm Return', 17, '6000'),
('CL-2', 'clutch', 'Bolt', 4, '2000'),
('CL-3', 'clutch', 'Lock Washer', 10, '1000'),
('CL-4', 'clutch', 'Disc, Clutch', 9, '6000'),
('CL-5', 'clutch', 'Bearing, Release', 4, '5000'),
('CL-6', 'clutch', 'Retainer, Release Bearing', 4, '650'),
('CL-7', 'clutch', 'Spring', 8, '550'),
('CL-8', 'clutch', 'Shaft, Clutch Release', 23, '1000'),
('CL-9', 'clutch', 'Bush', 42, '500'),
('CR-1', 'carburetar', 'Radiator, Assy', 10, '150'),
('CR-10', 'carburetar', 'Motor, Cooling Fan', 45, '190'),
('CR-11', 'carburetar', 'Shroud, Fan', 80, '500'),
('CR-12', 'carburetar', 'Tank, Water Reservior', 5, '120'),
('CR-13', 'carburetar', 'Cap, Water Reservior Tank', 8, '230'),
('CR-14', 'carburetar', 'Rubber, Water Reservior Tank', 64, '550'),
('CR-15', 'carburetar', 'Hose', 13, '500'),
('CR-16', 'carburetar', 'Clip', 15, '200'),
('CR-17', 'carburetar', 'Bracket Radiator Mounting Upper', 12, '345'),
('CR-2', 'carburetar', 'Cap', 9, '150'),
('CR-3', 'carburetar', 'Bracket, Radiator Support', 6, '400'),
('CR-4', 'carburetar', 'Bolt', 4, '1500'),
('CR-5', 'carburetar', 'Rubber, Radiator Support', 12, '300'),
('CR-6', 'carburetar', 'Switch, Thermo Fan', 15, '490'),
('CR-7', 'carburetar', 'O Ring', 34, '320'),
('CR-8', 'carburetar', 'Fan, Engine Cooling', 23, '210'),
('CR-9', 'carburetar', 'Nut', 14, '210'),
('CY-1', 'cylinder head', 'Head, Cylinder', 10, '500'),
('CY-10', 'cylinder head', 'Gasket, Cylinder Head Cover', 8, '550'),
('CY-11', 'cylinder head', 'Cap, Oil Filter', 23, '1000'),
('CY-12', 'cylinder head', 'Hose, Breather', 42, '500'),
('CY-13', 'cylinder head', 'Valve, PCV', 13, '700'),
('CY-14', 'cylinder head', 'Joint, PCV Hose', 5, '2000'),
('CY-15', 'cylinder head', 'Hose, PCV', 14, '2000'),
('CY-16', 'cylinder head', 'Clip', 15, '8000'),
('CY-17', 'cylinder head', 'Plug, Spark', 4, '1000'),
('CY-18', 'cylinder head', 'Case, Distributor', 8, '6000'),
('CY-19', 'cylinder head', 'Gasket, Distributor Case', 17, '5000'),
('CY-2', 'cylinder head', 'Guide, Valve', 6, '700'),
('CY-22', 'cylinder head', 'Bolt', 11, '200'),
('CY-23', 'cylinder head', 'Pin', 9, '2000'),
('CY-3', 'cylinder head', 'Plug', 4, '2000'),
('CY-6', 'cylinder head', 'Gasket, Cylinder Head', 10, '1000'),
('CY-7', 'cylinder head', 'Cover, Cylinder Head', 9, '6000'),
('CY-8', 'cylinder head', 'Washer', 4, '150'),
('EM-1', 'engine mounting', 'MOUNTING, engine front', 10, '150'),
('EM-10', 'engine mounting', 'SPACER, member', 45, '190'),
('EM-11', 'engine mounting', 'MOUNTING, transmission', 80, '500'),
('EM-12', 'engine mounting', 'BRACKET, transmission mounting', 5, '120'),
('EM-13', 'engine mounting', 'MOUNTING, engine rear', 8, '230'),
('EM-14', 'engine mounting', 'BRACKET, rear mounting', 64, '550'),
('EM-15', 'engine mounting', 'Engine Member Bracket Rear', 13, '500'),
('EM-16', 'engine mounting', 'Engine Member Bracket Front', 15, '200'),
('EM-2', 'engine mounting', 'WASHER', 9, '150'),
('EM-3', 'engine mounting', 'NUT', 6, '400'),
('EM-4', 'engine mounting', 'BRACKET, engine front mounting', 4, '1500'),
('EM-5', 'engine mounting', 'BOLT', 12, '300'),
('EM-6', 'engine mounting', 'LOCK WASHER', 15, '50'),
('EM-7', 'engine mounting', 'STIFFNER, mounting bracket', 34, '320'),
('EM-8', 'engine mounting', 'MEMBER, engine mounting', 23, '210'),
('EM-9', 'engine mounting', 'CUSHION, member', 14, '210'),
('RR-1', 'radiator', 'Radiator, Assy', 6, '700'),
('RR-10', 'radiator', 'Nut', 23, '1000'),
('RR-11', 'radiator', 'Motor, Cooling Fan', 42, '500'),
('RR-12', 'radiator', 'Shroud, Fan', 13, '700'),
('RR-14', 'radiator', 'Tank, Water Reservior', 14, '2000'),
('RR-15', 'radiator', 'Cap, Water Reservior Tank', 15, '2000'),
('RR-16', 'radiator', 'Rubber, Water Reservior Tank', 4, '8000'),
('RR-17', 'radiator', 'Hose', 8, '1000'),
('RR-18', 'radiator', 'Clip', 17, '6000'),
('RR-19', 'radiator', 'Bracket Radiator Mounting Upper', 20, '5000'),
('RR-2', 'radiator', 'Cap', 4, '2000'),
('RR-4', 'radiator', 'Bracket, Radiator Support', 2, '8000'),
('RR-5', 'radiator', 'Bolt', 10, '1000'),
('RR-6', 'radiator', 'Rubber, Radiator Support', 9, '6000'),
('RR-7', 'radiator', 'Switch, Thermo Fan', 4, '5000'),
('RR-8', 'radiator', 'O Ring', 4, '650'),
('RR-9', 'radiator', 'Fan, Engine Cooling', 8, '550'),
('TR-1', 'transmission', 'Shaft, Input', 22, '450'),
('TR-10', 'transmission', 'Nut', 23, '1000'),
('TR-11', 'transmission', 'Gear, Counter Shaft 1st', 42, '500'),
('TR-12', 'transmission', 'Roller', 13, '200'),
('TR-13', 'transmission', 'Washer', 14, '2000'),
('TR-14', 'transmission', 'Ball ', 15, '2000'),
('TR-15', 'transmission', 'Spacer', 4, '8000'),
('TR-16', 'transmission', 'Bearing', 8, '50'),
('TR-17', 'transmission', 'Gear, Counter Shaft 2nd', 17, '6000'),
('TR-18', 'transmission', 'Gear, Counter Shaft 3rd', 20, '5000'),
('TR-19', 'transmission', 'Spring', 34, '420'),
('TR-2', 'transmission', 'Bearing, RH', 6, '700'),
('TR-20', 'transmission', 'Gear, Counter Shaft 4th', 33, '320'),
('TR-21', 'transmission', 'Hub, Low Speed Synchronizer', 21, '300'),
('TR-22', 'transmission', 'Sleeve, Low Speed Synchronizer', 23, '4440'),
('TR-23', 'transmission', 'Ring, Low Gear', 3, '2220'),
('TR-24', 'transmission', 'Spring. Low', 4, '2100'),
('TR-25', 'transmission', 'Ring, 2nd Gear', 5, '5430'),
('TR-26', 'transmission', 'Key', 13, '5600'),
('TR-27', 'transmission', 'Hub, High Speed Synchronizer', 45, '4500'),
('TR-28', 'transmission', 'Sleeve, High Speed Synchronizer', 22, '3330'),
('TR-29', 'transmission', 'Ring, High Speed', 3, '3200'),
('TR-3', 'transmission', 'Seal, Oil', 4, '2000'),
('TR-30', 'transmission', 'Gear, Reverse Idler', 21, '4400'),
('TR-31', 'transmission', 'Shaft, Reverse Gear', 33, '3200'),
('TR-32', 'transmission', 'Pin', 4, '1200'),
('TR-33', 'transmission', 'Gear, Speedometer Drive', 13, '1300'),
('TR-34', 'transmission', 'Gear, Speedometer Driven', 13, '120'),
('TR-35', 'transmission', 'Case, Speedometer Gear', 34, '450'),
('TR-4', 'transmission', 'Bearing, LH', 2, '8000'),
('TR-5', 'transmission', 'C Ring', 10, '1000'),
('TR-6', 'transmission', 'Plug, LH Bearing', 9, '6000'),
('TR-7', 'transmission', 'Shaft, Counter', 4, '1000'),
('TR-8', 'transmission', 'Bearing, RH', 4, '650'),
('TR-9', 'transmission', 'Plug, RH Bearing', 8, '550');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `Part_No` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `amount` int(255) NOT NULL,
  `subtotal` int(255) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `date`, `Part_No`, `products`, `price`, `quantity`, `amount`, `subtotal`, `discount`, `total`) VALUES
('INV-01', '2021-08-01', 'CY-22', 'bolt', '200', '2', 400, 400, '0', 400),
('INV-02', '2021-08-02', 'CY-8', 'washer', '150', '2', 4300, 300, '0', 300),
('INV-03', '2021-08-02', 'EM-6', 'lockwasher', '50', '2', 100, 100, '0', 100),
('INV-04', '2021-08-02', 'CY-6', 'Gasket, Cylinder Head', '1000', '1', 1000, 1000, '100', 900),
('INV-05', '2021-08-03', 'TR-12', 'roller', '200', '4', 800, 800, '0', 800),
('INV-06', '2021-08-03', 'TR-16', 'bearing', '50', '2', 100, 100, '0', 100),
('INV-07', '2021-08-03', 'TR-7', 'Shaft, Counter', '1000', '1', 1000, 1000, '0', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password_` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`First_Name`, `Last_Name`, `Email`, `Password_`) VALUES
('Aabira', 'Fahim', 'aabira20jul@gmail.com', 'aabira123'),
('Fizza', 'Maryam', 'fizzamariyam47@gmail.com', 'fizza123'),
('sara', 'ahmed', 'saraahmed@gmail.com', 'sara123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`Part_No`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
