-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 04:59 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `addnewuser`
--

CREATE TABLE IF NOT EXISTS `addnewuser` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_number` int(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addservice`
--

CREATE TABLE IF NOT EXISTS `addservice` (
  `service_name` varchar(20) NOT NULL,
  `service_cost` int(10) NOT NULL,
  `service_time` int(5) NOT NULL,
  `service_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addservice`
--

INSERT INTO `addservice` (`service_name`, `service_cost`, `service_time`, `service_type`) VALUES
('Cleaing', 500, 3, 'Exterior'),
('battery repairing', 700, 3, 'Electrical'),
('Engine Reparing', 900, 7, 'Engine');

-- --------------------------------------------------------

--
-- Table structure for table `addservicecenter`
--

CREATE TABLE IF NOT EXISTS `addservicecenter` (
  `branch_name` varchar(20) NOT NULL,
  `contact_number` text NOT NULL,
  `manager_name` text NOT NULL,
  `email` varchar(15) NOT NULL,
  `add1` varchar(30) NOT NULL,
  `add2` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(40) NOT NULL,
  `pincode` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addservicecenter`
--

INSERT INTO `addservicecenter` (`branch_name`, `contact_number`, `manager_name`, `email`, `add1`, `add2`, `city`, `state`, `pincode`, `country`) VALUES
('vasai motor', '0', 'mr.abc', 'abc@gmail.com', 'near new english school', 'parnaka vasai', 'Mumbai', 'maharshytra', '401303', ''),
('AK Motors', 'INIDA', 'mr.rodrigues', 'abc@gmail.com', 'M.B. Estate Road ', 'Near Dmart Virar WEST', 'Mumbai', 'maharshtra', '402303', 'INIDA');

-- --------------------------------------------------------

--
-- Table structure for table `adduser`
--

CREATE TABLE IF NOT EXISTS `adduser` (
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `contact_number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addvehicle`
--

CREATE TABLE IF NOT EXISTS `addvehicle` (
  `Name` varchar(20) NOT NULL,
  `chassis_no` varchar(20) NOT NULL,
  `vehicle_no` text NOT NULL,
  `branch` varchar(50) NOT NULL,
  `user_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addvehicle`
--

INSERT INTO `addvehicle` (`Name`, `chassis_no`, `vehicle_no`, `branch`, `user_name`) VALUES
('bajaj Moto', '935488', '0', '0', '0'),
('Bulet', '3546', 'MH04-234', '4', 'hem'),
('', '', '', '1', 'vin');

-- --------------------------------------------------------

--
-- Table structure for table `bookslot`
--

CREATE TABLE IF NOT EXISTS `bookslot` (
  `userid` int(30) NOT NULL,
  `vehicle` varchar(10) NOT NULL,
  `service_center` varchar(15) NOT NULL,
  `service` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookslot`
--

INSERT INTO `bookslot` (`userid`, `vehicle`, `service_center`, `service`) VALUES
(3, 'Honda Horn', 'D service cente', 'Full Service,Fuel,Electrical,'),
(0, 'Honda Horn', 'D service cente', 'Full Service,Fuel,Electrical,'),
(3, 'FZ-S', 'vasai motor', 'Full Service,Fuel,tyre,');

-- --------------------------------------------------------

--
-- Table structure for table `changepass`
--

CREATE TABLE IF NOT EXISTS `changepass` (
  `password` varchar(20) NOT NULL,
  `re_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_number` int(15) NOT NULL,
  `comments` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`userid` int(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`) VALUES
(1, 'vin', '123'),
(3, 'hem', '1010');

-- --------------------------------------------------------

--
-- Table structure for table `recoverpass`
--

CREATE TABLE IF NOT EXISTS `recoverpass` (
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE IF NOT EXISTS `userreg` (
`userid` int(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `contactno` text NOT NULL,
  `addressline1` varchar(50) NOT NULL,
  `addressline2` varchar(50) NOT NULL,
  `area` varchar(20) NOT NULL,
  `landmark` varchar(15) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(8) NOT NULL,
  `country` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`userid`, `firstname`, `lastname`, `username`, `contactno`, `addressline1`, `addressline2`, `area`, `landmark`, `city`, `state`, `pincode`, `country`, `email`) VALUES
(1, 'vinit', 'dabake', 'vin', '2147483647', 'B-04 Siddhtek so. Phoolpdaa road', 'Virar EAST', 'JP NAgar', '', 'Mumbai', 'maharshytra', 401305, 'INDIA', 'vinit@gmail.com'),
(3, 'Hem', 'Sevak', 'hem', '909646', 'mahte wadi cohwk', 'Dahisar EAST', 'NP nagar', '', 'Mumbai', 'maharshytra', 401203, 'INDIA', 'vinit@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
 ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `userid` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
MODIFY `userid` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
