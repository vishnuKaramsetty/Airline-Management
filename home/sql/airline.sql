-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 12:40 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `checks`
--

CREATE TABLE `checks` (
  `user_id` varchar(15) NOT NULL,
  `flight_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checks`
--

INSERT INTO `checks` (`user_id`, `flight_id`) VALUES
('sunny', '121'),
('nitck', '122'),
('hari', '124'),
('sunny', '124'),
('hari', '125'),
('nitck', '125'),
('sunny', '125'),
('swathi', '125'),
('sunny', '126'),
('sunny', '555'),
('sunny', '999');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city` varchar(15) NOT NULL,
  `state` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city`, `state`) VALUES
('bangalore', 'karanataka'),
('calicut', 'kerala'),
('delhi', 'delhi'),
('hyderabad', 'ap'),
('kolkata', 'westbengal'),
('mumbai', 'maharashtra'),
('trivandrum', 'kerala'),
('vizag', 'ap');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_id` varchar(10) NOT NULL,
  `fname` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_id`, `fname`) VALUES
('121', 'air_asia'),
('122', 'air_asia'),
('123', 'air_asia'),
('124', 'air_indigo'),
('125', 'air_indigo'),
('126', 'air_indigo'),
('127', 'spacejet'),
('222', 'dinesh airlines'),
('555', 'bluwhale'),
('999', 'king_fisher');

-- --------------------------------------------------------

--
-- Table structure for table `modifiees`
--

CREATE TABLE `modifiees` (
  `staffid` varchar(30) NOT NULL,
  `flightid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `fname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mobnumber` varchar(10) DEFAULT NULL,
  `adharnumber` varchar(10) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`fname`, `lname`, `age`, `gender`, `mobnumber`, `adharnumber`, `booking_id`) VALUES
('ty', 'yt', 65, 'male', '566', '5555555555', 24),
('hi', 'ela', 33, 'male', '21', '3333333333', 25),
('dr', 'rd', 3, 'female', '3333333333', '2333333333', 26),
('w', 'ew', 32, 'female', '2', '2222222222', 28),
('sesd', 'sd', 12, 'male', '2', '2222222222', 29),
('sai', 'kumar', 23, 'male', '3333333333', '2222222222', 30),
('raghu', 'sir', 34, 'male', '6878763287', '7623786874', 41),
('raghu', 'sir', 34, 'male', '6878763287', '7623786874', 41),
('sai', 'kumar', 12, 'male', '1234567890', '2345678987', 42),
('mani', 'kanta', 23, 'male', '7666666666', '4354444444', 43),
('hari', 'kiran', 34, 'male', '6576565565', '6565656565', 44),
('sai', 'kumar', 34, 'male', '6566256565', '7676868768', 45),
('dinesh', 'sunny', 20, 'male', '9704442000', '1234567890', 46),
('hello', 'sunny', 20, 'male', '9177332000', '9704442000', 47),
('diya', 'diya', 3, 'male', '9009000000', '7888888888', 48),
('dinesh', 'sunny', 34, 'male', '1111111111', '2222222222', 49),
('swathi', 'narsinga', 27, 'female', '8522900770', '9298437739', 50),
('nagamani', 'narsinga', 34, 'female', '3244444444', '3333333333', 51),
('ncsdf', 'ncdsfsd', 45, 'male', '3453444433', '2222222222', 52),
('sudi', 'sudheer', 23, 'male', '3333333333', '2121111111', 54),
('rashmi', 'gau', 32, 'female', '3798794793', '1151515151', 55),
('vrshini', 'hashd', 21, 'male', '1937287322', '1263687216', 55),
('neney', 'hid', 12, 'male', '1233333333', '2333333333', 58);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `user_id` varchar(30) NOT NULL,
  `pswd` varchar(30) DEFAULT NULL,
  `hint` varchar(30) DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`user_id`, `pswd`, `hint`, `user`) VALUES
('dinesh', '1234', 'Natural number', 'STAFF'),
('sai', '123', 'Natural number', 'STAFF');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `booking_id` int(11) NOT NULL,
  `flight_id` varchar(10) DEFAULT NULL,
  `depart_city` varchar(30) DEFAULT NULL,
  `arrival_city` varchar(30) DEFAULT NULL,
  `intermediate_city` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `on_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`booking_id`, `flight_id`, `depart_city`, `arrival_city`, `intermediate_city`, `username`, `on_date`) VALUES
(24, '555', 'hyderabad', 'mumbai', '', 'sunny', '0000-00-00'),
(25, '124', 'kolkata', 'hyderabad', '', 'sunny', '0000-00-00'),
(26, '124', 'kolkata', 'hyderabad', '', 'sunny', '0000-00-00'),
(28, '124', 'kolkata', 'hyderabad', '', 'sunny', '0000-00-00'),
(29, '124', 'kolkata', 'hyderabad', '', 'sunny', '0000-00-00'),
(30, '124', 'kolkata', 'calicut', 'hyderabad', 'sunny', '0000-00-00'),
(33, '121', 'calicut', 'hyderabad', '', 'sunny', '0000-00-00'),
(41, '555', 'hyderabad', 'mumbai', '', 'sunny', '0000-00-00'),
(42, '125', 'hyderabad', 'bangalore', '', 'nitck', '0000-00-00'),
(43, '122', 'calicut', 'bangalore', '', 'nitck', '0000-00-00'),
(44, '125', 'hyderabad', 'bangalore', '', 'hari', '0000-00-00'),
(45, '124', 'kolkata', 'hyderabad', '', 'hari', '0000-00-00'),
(46, '555', 'hyderabad', 'mumbai', '', 'sunny', '0000-00-00'),
(47, '555', 'hyderabad', 'mumbai', '', 'sunny', '0000-00-00'),
(48, '126', 'hyderabad', 'calicut', '', 'sunny', '0000-00-00'),
(49, '126', 'hyderabad', 'calicut', '', 'sunny', '0000-00-00'),
(50, '125', 'hyderabad', 'bangalore', '', 'swathi', '0000-00-00'),
(51, '125', 'hyderabad', 'bangalore', '', '', '0000-00-00'),
(52, '124', 'hyderabad', 'calicut', '', 'sunny', '0000-00-00'),
(53, '124', 'hyderabad', 'calicut', '', 'sunny', '0000-00-00'),
(54, '125', 'hyderabad', 'bangalore', '', 'sunny', '0000-00-00'),
(55, '125', 'hyderabad', 'bangalore', '', 'sunny', '0000-00-00'),
(58, '121', 'hyderabad', 'vizag', '', 'sunny', '2020-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE `travels` (
  `flight_id` varchar(10) NOT NULL,
  `departure_city` varchar(15) NOT NULL,
  `arrival_city` varchar(15) NOT NULL,
  `arrival_time` time DEFAULT NULL,
  `departure_time` time NOT NULL,
  `doj` date NOT NULL,
  `available_seats_eco` int(11) DEFAULT NULL,
  `class_Economy` varchar(30) DEFAULT NULL,
  `available_seats_bus` int(11) DEFAULT NULL,
  `class_Business` varchar(30) DEFAULT NULL,
  `available_seats_first` int(11) DEFAULT NULL,
  `class_First` varchar(30) DEFAULT NULL,
  `filled_seats` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travels`
--

INSERT INTO `travels` (`flight_id`, `departure_city`, `arrival_city`, `arrival_time`, `departure_time`, `doj`, `available_seats_eco`, `class_Economy`, `available_seats_bus`, `class_Business`, `available_seats_first`, `class_First`, `filled_seats`) VALUES
('121', 'bangalore', 'hyderabad', '16:00:00', '09:15:00', '2019-10-29', 30, 'Economy', 3, 'Business', 41, 'First', 54),
('121', 'bangalore', 'hyderabad', '00:32:00', '09:18:00', '2019-12-21', 43, 'Economy', 32, 'Business', 23, 'First', 0),
('121', 'calicut', 'bangalore', '16:00:00', '09:15:00', '2019-10-29', 31, 'Economy', 3, 'Business', 41, 'First', 53),
('121', 'calicut', 'hyderabad', '16:00:00', '07:15:00', '2019-10-12', 65, 'Economy', 42, 'Business', 44, 'First', 22),
('121', 'calicut', 'hyderabad', '16:00:00', '08:15:00', '2019-04-12', 71, 'Economy', 24, 'Business', 44, 'First', 45),
('121', 'calicut', 'hyderabad', '16:00:00', '11:15:00', '2019-10-29', 71, 'Economy', 24, 'Business', 44, 'First', 55),
('121', 'calicut', 'hyderabad', '16:00:00', '12:15:00', '2019-12-25', 65, 'Economy', 54, 'Business', 44, 'First', 18),
('121', 'calicut', 'vizag', '00:32:00', '00:32:00', '2019-12-12', 12, 'Economy', 34, 'Business', 15, 'First', 0),
('121', 'calicut', 'vizag', '09:45:00', '21:45:00', '2018-10-29', 44, 'Economy', 44, 'Business', 23, 'First', 0),
('121', 'delhi', 'hyderabad', '21:21:00', '14:09:00', '2018-10-29', 23, 'Economy', 43, 'Business', 23, 'First', 0),
('121', 'hyderabad', 'vizag', '15:21:00', '00:22:00', '2019-12-12', 11, 'Economy', 12, 'Business', 12, 'First', 1),
('122', 'calicut', 'bangalore', '10:00:00', '08:15:00', '2019-10-29', 49, 'Economy', 77, 'Business', 44, 'First', 47),
('124', 'hyderabad', 'calicut', '16:25:00', '08:15:00', '2019-10-29', 63, 'Economy', 21, 'Business', 36, 'First', 62),
('124', 'kolkata', 'hyderabad', '18:00:00', '11:15:00', '2019-10-29', 52, 'Economy', 10, 'Business', 42, 'First', 75),
('125', 'hyderabad', 'bangalore', '17:00:00', '10:15:00', '2019-10-29', 67, 'Economy', 43, 'Business', 41, 'First', 53),
('126', 'bangalore', 'hyderabad', '21:10:00', '15:45:00', '2019-02-12', 23, 'Economy', 32, 'Business', 43, 'First', 0),
('126', 'bangalore', 'vizag', '21:43:00', '07:06:00', '2019-03-12', 43, 'Economy', 34, 'Business', 56, 'First', 0),
('126', 'hyderabad', 'calicut', '05:25:00', '02:15:00', '2019-10-29', 75, 'Economy', 41, 'Business', 44, 'First', 79),
('127', 'delhi', 'hyderabad', '23:00:00', '22:15:00', '2019-10-29', 13, 'Economy', 14, 'Business', 44, 'First', 74),
('555', 'hyderabad', 'mumbai', '23:25:00', '18:15:00', '2019-10-29', 64, 'Economy', 63, 'Business', 44, 'First', 40),
('999', 'hyderabad', 'vizag', '11:45:00', '12:45:00', '2019-01-09', 34, 'Economy', 12, 'Business', 12, 'First', 0),
('999', 'mumbai', 'bangalore', '11:00:00', '08:15:00', '2019-10-29', 13, 'Economy', 2, 'Business', 44, 'First', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` varchar(15) NOT NULL,
  `pswd` varchar(15) DEFAULT NULL,
  `hint` varchar(15) DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `pswd`, `hint`, `user`) VALUES
('asd', 'asd', 'king', 'CUSTOMER'),
('hari', 'hari', 'name', 'CUSTOMER'),
('nitck', '123', 'xn', 'CUSTOMER'),
('suhas', 'suhas', 'suhas', 'CUSTOMER'),
('sunny', '12345', 'natural numbers', 'CUSTOMER'),
('swathi', 'swathi123', 'name', 'CUSTOMER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checks`
--
ALTER TABLE `checks`
  ADD PRIMARY KEY (`flight_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `modifiees`
--
ALTER TABLE `modifiees`
  ADD PRIMARY KEY (`staffid`,`flightid`),
  ADD KEY `flightid` (`flightid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `flight_id` (`flight_id`);

--
-- Indexes for table `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`flight_id`,`departure_city`,`arrival_city`,`departure_time`),
  ADD KEY `arrival_city` (`arrival_city`),
  ADD KEY `departure_city` (`departure_city`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checks`
--
ALTER TABLE `checks`
  ADD CONSTRAINT `checks_ibfk_1` FOREIGN KEY (`flight_id`) REFERENCES `flight` (`flight_id`),
  ADD CONSTRAINT `checks_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`);

--
-- Constraints for table `modifiees`
--
ALTER TABLE `modifiees`
  ADD CONSTRAINT `modifiees_ibfk_1` FOREIGN KEY (`staffid`) REFERENCES `staff` (`user_id`),
  ADD CONSTRAINT `modifiees_ibfk_2` FOREIGN KEY (`flightid`) REFERENCES `flight` (`flight_id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`flight_id`) REFERENCES `flight` (`flight_id`);

--
-- Constraints for table `travels`
--
ALTER TABLE `travels`
  ADD CONSTRAINT `travels_ibfk_1` FOREIGN KEY (`flight_id`) REFERENCES `flight` (`flight_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `travels_ibfk_2` FOREIGN KEY (`arrival_city`) REFERENCES `city` (`city`) ON DELETE CASCADE,
  ADD CONSTRAINT `travels_ibfk_3` FOREIGN KEY (`departure_city`) REFERENCES `city` (`city`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
