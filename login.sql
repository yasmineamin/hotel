-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 08:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booked_hist`
--

CREATE TABLE `booked_hist` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` tinyint(1) NOT NULL,
  `breakfast` tinyint(1) NOT NULL,
  `lunch` tinyint(1) NOT NULL,
  `snacks` tinyint(1) NOT NULL,
  `dinner` tinyint(1) NOT NULL,
  `swimming` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_hist`
--

INSERT INTO `booked_hist` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `price`, `book_id`) VALUES
(1022065229, 'habiba', '4957305820485', 'delux_2', '2022-05-03', '2022-05-13', 10, 1, 1, 1, 0, 1, 1, 1200, 123467);

-- --------------------------------------------------------

--
-- Table structure for table `book_id`
--

CREATE TABLE `book_id` (
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_id`
--

INSERT INTO `book_id` (`book_id`) VALUES
(42);

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_booking`
--

CREATE TABLE `confirmed_booking` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `mobile_phone` int(20) NOT NULL,
  `role` enum('guest','recep','quality') NOT NULL DEFAULT 'guest',
  `gender` enum('male','female','prefer not to say') NOT NULL,
  `national_id` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `username`, `email`, `password`, `cpassword`, `mobile_phone`, `role`, `gender`, `national_id`) VALUES
(2, 'yasmin', 'mostafa', 'yasmin', 'yasmin@hotmail.com', '123', '123', 11111111, 'quality', 'female', 0x5b76616c75652d31315d),
(3, 'habiba', 'hefny', 'habiba', 'habiba@gmail.com', '0000', '0000', 101229310, 'recep', 'female', 0x5b76616c75652d31315d),
(4, 'yasmin', 'mostafa', 'yasmin', 'yasmin2012653@miuegy', '123', '123', 100388569, '', 'female', ''),
(5, 'huda', 'amr', 'huda', 'huda@hotmail.com', '1234', '1234', 11111111, '', 'female', ''),
(6, 'yasmin', 'mostafa', 'yaso', 'yasmin@hotmail.com', '444', '444', 123345678, '', 'female', ''),
(7, 'yassminnnn', 'mosstafaaa', 'yasmin', 'yasmin2012653@miuegy', '123', '123', 1232345634, '', 'female', 0x6765745f66696c655f636f6e74656e742829),
(8, 'yassminnnn', 'mosstafaaa', 'yasmin', 'yasmin2012653@miuegy', '123', '123', 1232345634, '', 'female', 0x6765745f66696c655f636f6e74656e742829),
(9, 'habiba', 'hefny', 'habuba', 'habiba@gmail.com', '123', '123', 1232345634, '', 'female', 0x6765745f66696c655f636f6e74656e742829),
(10, 'yassminnnn', 'mostafa', 'yasoo', 'yasmin2012653@miuegy', '123', '123', 100388569, '', 'female', 0x6765745f66696c655f636f6e74656e742829),
(11, 'yassminnnn', 'mostafa', 'yasoo', 'yasmin2012653@miuegy', '123', '123', 100388569, '', 'female', 0x6765745f66696c655f636f6e74656e742829),
(12, 'yassminnnn', 'mostafa', 'yasoo', 'yasmin2012653@miuegy', '123', '123', 100388569, '', 'female', 0x6765745f66696c655f636f6e74656e742829),
(13, 'yassminnnn', 'mostafa', 'yasoo', 'yasmin2012653@miuegy', '123', '123', 100388569, '', 'female', 0x6765745f66696c655f636f6e74656e742829),
(14, 'yassminnnn', 'mostafa', 'yasoo', 'yasmin2012653@miuegy', '123', '123', 100388569, '', 'female', 0x6765745f66696c655f636f6e74656e742829),
(15, 'yassminnnn', 'mostafa', 'yasoo', 'yasmin2012653@miuegy', '123', '123', 100388569, '', 'female', 0x6765745f66696c655f636f6e74656e742829),
(16, 'yasmin', 'mosstafaaa', 'yyyyy', 'yasmin@hotmail.com', '345', '345', 1232345634, '', 'female', 0x6765745f66696c655f636f6e74656e742829),
(17, 'yasmin', 'mosstafaaa', 'yyyyy', 'yasmin@hotmail.com', '345', '345', 1232345634, 'guest', 'female', ''),
(18, 'yasmin', 'mosstafaaa', 'yyyyy', 'yasmin@hotmail.com', '345', '345', 1232345634, 'guest', 'female', ''),
(19, 'yasmin', 'mosstafaaa', 'yss', 'yasmin@gmail.com', '123', '123', 100388569, 'guest', 'female', ''),
(20, 'yasmin', 'mosstafaaa', 'yss', 'yasmin@gmail.com', '123', '123', 100388569, 'guest', 'female', ''),
(21, 'yasmin', 'mosstafaaa', 'yss', 'yasmin@gmail.com', '123', '123', 100388569, 'guest', 'female', ''),
(22, 'yasmin', 'mosstafaaa', 'yss', 'yasmin@gmail.com', '123', '123', 100388569, 'guest', 'female', ''),
(23, 'yasmin', 'mosstafaaa', 'yss', 'yasmin@gmail.com', '123', '123', 100388569, 'guest', 'female', ''),
(24, 'yassminnnn', 'mosstafaaa', 'yasmin_mostafa', 'yasmin@hotmail.com', '1234', '1234', 100388569, 'guest', 'female', ''),
(25, 'yassminnnn', 'mosstafaaa', 'yasmin_mostafa', 'yasmin@hotmail.com', '1234', '1234', 100388569, 'guest', 'female', ''),
(26, 'yassminnnn', 'mosstafaaa', 'yasmin_mostafa', 'yasmin@hotmail.com', '1234', '1234', 100388569, 'guest', 'female', ''),
(27, 'yassminnnn', 'mosstafaaa', 'yasmin_mostafa', 'yasmin@hotmail.com', '1234', '1234', 100388569, 'guest', 'female', ''),
(28, 'yassminnnn', 'mosstafaaa', 'yasmin_mostafa', 'yasmin@hotmail.com', '1234', '1234', 100388569, 'guest', 'female', ''),
(29, 'yassminnnn', 'mosstafaaa', 'yasmin_mostafa', 'yasmin@hotmail.com', '1234', '1234', 100388569, 'guest', 'female', ''),
(30, 'yassminnnn', 'mosstafaaa', 'yasmin_mostafa', 'yasmin@hotmail.com', '1234', '1234', 100388569, 'guest', 'female', ''),
(31, 'yassmeen', 'mostafa', 'yasmost', 'yasmin2012653@miuegy', '123', '123', 100388569, 'guest', 'female', 0x646f776e6c6f6164202833292e6a7067),
(32, 'malak', 'maged', 'malak_maged', 'malak@gmail.com', '123', '123', 1785476481, 'guest', 'female', 0x646f776e6c6f6164202834292e6a7067),
(33, 'huda', 'ahmed', 'huda_ahmed', 'huda@hotmail.com', '0000', '0000', 100388569, 'guest', 'female', 0x646f776e6c6f6164202838292e6a7067),
(34, 'jana', 'ahmed', 'jojaa22', 'jana@gmail.com', 'joja22', 'joja22', 1008006780, 'guest', '', 0x646f776e6c6f6164202831292e6a7067),
(35, 'jana', 'ahmed', 'jojaa22', 'jana@gmail.com', '000', '000', 1008006780, 'guest', '', 0x646f776e6c6f6164202831292e6a7067),
(36, 'jana', 'ahmed', 'jojaa22', 'jana@gmail.com', '000', '000', 1008006780, 'guest', '', 0x646f776e6c6f6164202831292e6a7067),
(37, 'yaso', 'most', 'yasoo', 'yas@gmail.com', '123', '123', 1008006780, 'guest', 'female', 0x646f776e6c6f6164202832292e6a7067),
(38, 'yaso', 'ahmed', 'yasoo', 'yas@gmail.com', '123', '123', 1008006780, 'guest', 'female', 0x646f776e6c6f6164202835292e6a7067),
(39, 'yaso', 'most', 'yasoo', 'yas@gmail.com', '000', '000', 1008006780, 'guest', 'female', 0x646f776e6c6f6164202837292e6a7067),
(40, 'jana', 'most', 'yasmin', 'yas@gmail.com', '123', '123', 1008006780, 'guest', 'female', 0x646f776e6c6f6164202836292e6a7067),
(41, 'jana', 'most', 'yasmin', 'yas@gmail.com', '123', '123', 1008006780, 'guest', 'female', 0x646f776e6c6f6164202836292e6a7067),
(42, 'jana', 'most', 'yasmin', 'yas@gmail.com', '123', '123', 1008006780, 'guest', 'female', 0x646f776e6c6f6164202836292e6a7067),
(43, 'mostafa', 'amin', 'most', 'mostafa@gmail.com', '123', '123', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202838292e6a7067),
(44, 'mostafa', 'ahmed', 'most', 'most123', '123', '123', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202837292e6a7067),
(45, 'mostafa', 'amin', 'most', 'mostafa@gmail.com', '000', '000', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202837292e6a7067),
(46, 'mostafa', 'amin', 'most', 'mostafa@gmail.com', '000', '000', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202837292e6a7067),
(47, 'mostafa', 'amin', 'most', 'mostafa@gmail.com', '000', '000', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202837292e6a7067),
(48, 'yaso', 'amin', 'most', 'mostafa@gmail.com', '999', '999', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202837292e6a7067),
(49, 'mostafa', 'amin', 'most', 'mostafa@gmail.com', '123', '123', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202838292e6a7067),
(50, 'rania', 'amin', 'most', 'mostafa@gmail.com', '000', '000', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202838292e6a7067),
(51, 'rania', 'ahmed', 'most', 'mostafa@gmail.com', '000', '000', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202838292e6a7067),
(52, 'rania', 'ahmed', 'most', 'mostafa@gmail.com', '000', '000', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202838292e6a7067),
(53, 'rania', 'ahmed2', 'most', 'mostafa@gmail.com', '000', '000', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202838292e6a7067),
(54, 'rania', 'ahmed2', 'most', 'mostafa@gmail.com', '000', '000', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202838292e6a7067),
(55, 'rania', 'ahmed2', 'most', 'mostafa@gmail.com', '000', '000', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202838292e6a7067),
(56, 'rania', 'ahmed2', 'most', 'mostafa@gmail.com', '000', '000', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202838292e6a7067),
(57, 'rania', 'ahmed2', 'most', 'mostafa@gmail.com', '111', '111', 1008006780, 'guest', 'male', 0x646f776e6c6f6164202838292e6a7067),
(58, 'mohamed', 'amin', 'mooo', 'mihamed@gmail.com', '123', '123', 1008006780, 'guest', 'female', 0x646f776e6c6f6164202836292e6a7067),
(59, 'yasminnnnn', 'mostafaaaa', 'yaso', 'yas@miu.com', '123', '123', 1008006780, 'guest', 'female', 0x646f776e6c6f6164202836292e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL,
  `payment_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `id` int(11) NOT NULL,
  `usname` varchar(11) NOT NULL,
  `pass` int(11) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`id`, `usname`, `pass`, `status`) VALUES
(9, 'yasmine', 123, 'Inactive'),
(10, 'user3', 889, 'Inactive'),
(11, 'ali', 333, 'Active'),
(12, 'nourhan', 1313, 'Active'),
(13, 'sama', 324, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `capacity` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `room_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rooms_count`
--

CREATE TABLE `rooms_count` (
  `room_type` varchar(20) NOT NULL,
  `available_rooms` int(11) NOT NULL,
  `occupied_rooms` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_book_id`
--

CREATE TABLE `temp_book_id` (
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_room`
--

CREATE TABLE `temp_room` (
  `phone` int(11) NOT NULL,
  `idproof` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_session`
--

CREATE TABLE `temp_session` (
  `phone` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_session`
--

INSERT INTO `temp_session` (`phone`, `password`, `name`, `email`, `idproof`, `dob`) VALUES
(1022065229, '123', 'habiba', 'habibahefny@gmail.com', '4957305820485', '2022-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `user_room_book`
--

CREATE TABLE `user_room_book` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(8) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_room_book`
--

INSERT INTO `user_room_book` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `status`, `price`, `book_id`, `dat`) VALUES
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 1, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 2, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', 'Single bed', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0', 'true', 'false', 'false', 'false', 'false', 'Waiting', 0, 3, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', 'Single bed', '2021-06-06 00:00:00', '2022-02-22 00:00:00', 21, '0', 'true', 'false', 'false', 'false', 'false', 'Waiting', 24150, 4, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 5, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 6, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 7, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 8, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 9, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'false', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 10, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'false', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 11, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'false', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 12, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'false', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 13, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'false', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 14, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'false', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 15, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'false', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 16, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'true', 'false', 'true', 'false', 'false', 'false', 'Waiting', 0, 17, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'true', 'false', 'true', 'false', 'false', 'false', 'Waiting', 0, 18, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'true', 'false', 'false', 'true', 'false', 'false', 'Waiting', 0, 19, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'true', 'false', 'false', 'true', 'false', 'false', 'Waiting', 0, 20, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'true', 'false', 'false', 'true', 'false', 'false', 'Waiting', 0, 21, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'true', 'false', 'false', 'true', 'false', 'false', 'Waiting', 0, 22, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'true', 'false', 'false', 'true', 'false', 'false', 'Waiting', 0, 23, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'true', 'false', 'false', 'true', 'false', 'false', 'Waiting', 0, 24, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'true', 'false', 'false', 'true', 'false', 'false', 'Waiting', 0, 25, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', 'Single bed', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'true', 'false', 'false', 'true', 'false', 'false', 'Waiting', 0, 26, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', 'Single bed', '2022-06-11 00:00:00', '2022-06-14 00:00:00', 3, 'true', 'false', 'false', 'true', 'false', 'false', 'Waiting', 4260, 27, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', 'Single bed', '2022-06-11 00:00:00', '2022-06-14 00:00:00', 3, 'true', 'false', 'false', 'true', 'false', 'false', 'Waiting', 4260, 28, '2022-06-11 16:34:19'),
(0, '', '', 'Single bed', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'false', 'false', 'false', 'false', 'false', 'false', 'Waiting', 0, 29, '2022-06-11 16:34:19'),
(11111111, 'yasmin', '2', 'Single bed', '2022-06-11 00:00:00', '2022-06-14 00:00:00', 3, 'true', 'false', 'true', 'false', 'false', 'false', 'Waiting', 4800, 30, '2022-06-11 16:34:19'),
(11111111, 'yasmin', '2', 'Double bed', '2022-06-11 00:00:00', '2022-06-15 00:00:00', 4, 'false', 'true', 'false', 'false', 'true', 'false', 'Waiting', 8800, 31, '2011-06-22 04:39:09'),
(11111111, 'yasmin', '2', 'Four bed', '2022-06-11 00:00:00', '2022-06-14 00:00:00', 3, 'false', 'false', 'false', 'false', 'true', 'false', 'Waiting', 9750, 32, '2022-06-06 04:40:55'),
(11111111, 'yasmin', '2', 'Double bed', '2022-06-11 00:00:00', '2022-06-20 00:00:00', 9, 'true', 'false', 'false', 'false', 'false', 'false', 'Waiting', 18900, 33, '2022-06-11 04:42:24'),
(0, '', '', 'Four bed', '2022-06-18 00:00:00', '2022-06-25 00:00:00', 7, 'false', 'false', 'false', 'false', 'false', 'true', 'Waiting', 23100, 34, '2022-06-11 04:48:55'),
(0, '', '', 'Single bed', '2022-06-18 00:00:00', '2022-06-30 00:00:00', 12, 'false', 'false', 'false', 'false', 'true', 'false', 'Waiting', 15000, 35, '2022-06-11 05:10:05'),
(0, '', '', 'Double bed', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'false', 'true', 'false', 'false', 'false', 'false', 'Waiting', 0, 36, '2022-06-11 05:12:04'),
(0, '', '', 'Four bed', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'false', 'false', 'false', 'false', 'false', 'true', 'Waiting', 0, 37, '2022-06-11 05:13:08'),
(1232345634, 'yasmin', '7', 'Single bed', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'false', 'true', 'false', 'false', 'false', 'false', 'Waiting', 0, 38, '2022-06-11 05:26:30'),
(0, '', '', 'Double bed', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'false', 'false', 'false', 'false', 'true', 'false', 'Waiting', 0, 39, '2022-06-11 05:28:35'),
(0, '', '', 'Single bed', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'false', 'false', 'false', 'false', 'false', 'true', 'Waiting', 0, 40, '2022-06-11 05:50:31'),
(1232345634, 'yasmin', '7', 'Double bed', '2022-06-18 00:00:00', '2022-06-25 00:00:00', 7, 'false', 'false', 'false', 'true', 'false', 'true', 'Waiting', 15540, 41, '2022-06-11 06:02:44'),
(1022065229, 'habiba', '4957305820485', 'delux_2', '2022-05-03 00:00:00', '2022-05-13 00:00:00', 10, '3', '3', '3', '3', '3', '3', 'good', 1200, 123467, '2022-06-11 16:34:19'),
(1022065229, 'habiba', '4957305820485', 'Double bed', '2022-05-04 00:00:00', '2022-05-26 00:00:00', 22, '0', 'true', 'true', 'true', 'true', 'true', 'Waiting', 70840, 123468, '2022-06-11 16:34:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_hist`
--
ALTER TABLE `booked_hist`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_id`
--
ALTER TABLE `book_id`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `confirmed_booking`
--
ALTER TABLE `confirmed_booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `rooms_count`
--
ALTER TABLE `rooms_count`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `temp_book_id`
--
ALTER TABLE `temp_book_id`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `user_room_book`
--
ALTER TABLE `user_room_book`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_hist`
--
ALTER TABLE `booked_hist`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123468;

--
-- AUTO_INCREMENT for table `book_id`
--
ALTER TABLE `book_id`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `confirmed_booking`
--
ALTER TABLE `confirmed_booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms_count`
--
ALTER TABLE `rooms_count`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_book_id`
--
ALTER TABLE `temp_book_id`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_room_book`
--
ALTER TABLE `user_room_book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123470;
COMMIT;
