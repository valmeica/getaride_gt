-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2016 at 04:16 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gt_getaride`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `Accounts_id` int(30) NOT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Phone` varchar(30) DEFAULT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Accounts_id`, `lastname`, `firstname`, `Email`, `Gender`, `Phone`, `Username`, `Password`, `role`) VALUES
(0, NULL, NULL, NULL, NULL, NULL, 'admin', 'admin', 1),
(1, 'Smith', 'John4', 'js@ggc.edu', 'Male', '678-987-6543', 'jsmith', '123456', 0),
(2, 'Johns', 'Marry', 'jm@ggc.edu', 'Female', '678-123-4567', 'jm', '123456', 0),
(3, 'user', 'user12', 'user23', 'male', '123555', 'user', '1234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pick_up`
--

CREATE TABLE `pick_up` (
  `Pick_up_id` int(30) NOT NULL,
  `Student_id` int(30) DEFAULT NULL,
  `Volunteer_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_id` int(30) NOT NULL,
  `St_level` varchar(30) DEFAULT NULL,
  `Major` varchar(30) DEFAULT NULL,
  `accounts_id` int(30) DEFAULT NULL,
  `Airport_pickup` char(3) DEFAULT NULL,
  `Require_housing` char(3) DEFAULT NULL,
  `Arriving_Flight_Nr` varchar(30) DEFAULT NULL,
  `Arriving_Date` date DEFAULT NULL,
  `Arriving_Time` varchar(30) DEFAULT NULL,
  `Offer_Pickup` char(3) DEFAULT NULL,
  `Departing_Flight_Nr` varchar(30) DEFAULT NULL,
  `Luggage_amount` int(30) DEFAULT NULL,
  `Host_Address` varchar(30) DEFAULT NULL,
  `Host_Contact` varchar(30) DEFAULT NULL,
  `Nights_Stayng` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_id`, `St_level`, `Major`, `accounts_id`, `Airport_pickup`, `Require_housing`, `Arriving_Flight_Nr`, `Arriving_Date`, `Arriving_Time`, `Offer_Pickup`, `Departing_Flight_Nr`, `Luggage_amount`, `Host_Address`, `Host_Contact`, `Nights_Stayng`) VALUES
(1, 'Junior', 'IT', 1, 'Yes', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `Volunteer_id` int(30) NOT NULL,
  `accounts_id` int(30) DEFAULT NULL,
  `Affiliation` varchar(30) DEFAULT NULL,
  `Period_Preference` varchar(30) DEFAULT NULL,
  `luggage` int(30) DEFAULT NULL,
  `Offer_Pickup` char(3) DEFAULT NULL,
  `Offer_Housing` char(3) DEFAULT NULL,
  `Pick_up_limit` int(30) DEFAULT NULL,
  `Housing_address` varchar(30) DEFAULT NULL,
  `Volunteer_contact` varchar(30) DEFAULT NULL,
  `Nights_offering` int(30) DEFAULT NULL,
  `Max_guests` int(30) DEFAULT NULL,
  `Trip_rounds` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`Volunteer_id`, `accounts_id`, `Affiliation`, `Period_Preference`, `luggage`, `Offer_Pickup`, `Offer_Housing`, `Pick_up_limit`, `Housing_address`, `Volunteer_contact`, `Nights_offering`, `Max_guests`, `Trip_rounds`) VALUES
(1, 2, 'Kamilah', 'Morning', 2, 'Yes', 'Yes', 5, NULL, NULL, NULL, NULL, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Accounts_id`);

--
-- Indexes for table `pick_up`
--
ALTER TABLE `pick_up`
  ADD PRIMARY KEY (`Pick_up_id`),
  ADD KEY `Pickup_Student_id_pk` (`Student_id`),
  ADD KEY `Pickup_Volunteer_ID_pk` (`Volunteer_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_id`),
  ADD KEY `Student_acc_acc_id_pk` (`accounts_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`Volunteer_id`),
  ADD KEY `volunteer_acc_id_pk` (`accounts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pick_up`
--
ALTER TABLE `pick_up`
  MODIFY `Pick_up_id` int(30) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pick_up`
--
ALTER TABLE `pick_up`
  ADD CONSTRAINT `Pickup_Student_id_pk` FOREIGN KEY (`Student_id`) REFERENCES `student` (`Student_id`),
  ADD CONSTRAINT `Pickup_Volunteer_ID_pk` FOREIGN KEY (`Volunteer_id`) REFERENCES `volunteer` (`Volunteer_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `Student_acc_acc_id_pk` FOREIGN KEY (`accounts_id`) REFERENCES `accounts` (`Accounts_id`);

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `volunteer_acc_id_pk` FOREIGN KEY (`accounts_id`) REFERENCES `accounts` (`Accounts_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
