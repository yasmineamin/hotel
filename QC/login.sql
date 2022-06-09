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
(1);

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
  `mobile_phone` int(11) NOT NULL,
  `role` enum('guest','recep','quality') NOT NULL,
  `gender` enum('male','female','prefer not to say') NOT NULL,
  `national_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_room_book`
--

INSERT INTO `user_room_book` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `status`, `price`, `book_id`) VALUES
(1022065229, 'habiba', '4957305820485', 'delux_2', '2022-05-03', '2022-05-13', 10, '3', '3', '3', '3', '3', '3', 'good', 1200, 123467),
(1022065229, 'habiba', '4957305820485', 'Double bed', '2022-05-04', '2022-05-26', 22, 'true', 'true', 'true', 'true', 'true', 'true', 'Waiting', 70840, 123468);

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
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `confirmed_booking`
--
ALTER TABLE `confirmed_booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

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
COMMIT
