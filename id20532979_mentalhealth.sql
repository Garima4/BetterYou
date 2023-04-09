-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2023 at 02:50 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20532979_mentalhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(60) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pass`, `fullname`, `phone`, `email`) VALUES
('admin', '12345', 'Admin Admin', '9988767654', 'admin23@gmail.com'),
('tania', '1234', 'tania ahuja', '8877676543', 'tania.vmmeducation@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `patient_name` varchar(120) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `app_date` date NOT NULL,
  `time_slot` varchar(20) NOT NULL,
  `hp_id` int(11) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL,
  `next_app_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `patient_name`, `contactno`, `age`, `gender`, `app_date`, `time_slot`, `hp_id`, `pemail`, `status`, `next_app_date`) VALUES
(31, 'Kane Smith', '8329575', 23, 'Others', '2023-04-07', '11:00', 1, 'ksmith@gmail.com', 'booked', NULL),
(32, 'Kane Smith', '759285', 21, 'Others', '2023-04-08', '11:00', 1, 'ksmith@gmail.com', 'visited', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `msg_from` varchar(100) NOT NULL,
  `msg_to` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `message`, `msg_from`, `msg_to`, `date_time`) VALUES
(1, 'hello', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 12:07:46'),
(2, 'hgjgj', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 12:24:01'),
(3, 'cvvcvc', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 12:25:09'),
(4, 'hello', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 12:40:03'),
(5, 'jhbhjsjhdg', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 12:44:48'),
(6, 'how are you ?', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 12:51:32'),
(7, 'hjjbj', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 12:52:43'),
(8, 'nghgh', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 13:00:47'),
(9, 'xascsc', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:04:49'),
(10, 'ccsdc', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:05:16'),
(11, 'sxscdsc', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:05:42'),
(12, 'cscdac', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:06:58'),
(13, 'sacdscsdc', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:07:22'),
(14, 'xascsacs', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:07:56'),
(15, 'cscdc', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:08:56'),
(16, 'c fvfd', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:12:10'),
(17, 'd sd d ', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:12:29'),
(18, 'sccada', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:15:16'),
(19, 'ascca', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:17:54'),
(20, 'fdvfdvfd', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:25:56'),
(21, 'djvdvmbsvdsvmbdsvmbdsv bjdsvjbsdvmbs bdsvjbdsvjbdsv jbdsvbjsdvjbs ', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:26:19'),
(22, 'sd ds', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:28:55'),
(23, ' s ds s', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:29:00'),
(24, 'scdsd', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 13:30:10'),
(25, 'hlo', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 13:30:16'),
(26, 'hi', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:30:28'),
(27, 'oyee', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 13:33:25'),
(28, 'haan bol', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:33:33'),
(29, 'sccscc', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:37:34'),
(30, 'vdvdsv', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 13:38:12'),
(31, 'dvdvs', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:38:16'),
(32, 'hh', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 13:38:23'),
(33, 'ii', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:38:32'),
(34, '', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 13:38:39'),
(35, 'scdscs', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 13:39:13'),
(36, 'hlo bhai', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 13:39:47'),
(37, 'haan bhai', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:40:06'),
(38, 'abc', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:41:04'),
(39, 'xyz', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 13:41:09'),
(40, 'hello baby', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 13:49:28'),
(41, 'cdcdac', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:54:47'),
(42, 'scdcdsc', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 13:55:13'),
(43, 'ddssd', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:55:23'),
(44, 'scacac', 'tania23@gmail.com', 'tania_ahuja23@yahoo.com', '2023-03-29 13:55:32'),
(45, 'oyee', 'tania_ahuja23@yahoo.com', 'tania23@gmail.com', '2023-03-29 13:55:42'),
(46, 'Hello how are you??', 'tania_ahuja23@yahoo.com', 'ksmith@gmail.com', '2023-04-06 10:34:44'),
(47, 'I am good', 'ksmith@gmail.com', 'tania_ahuja23@yahoo.com', '2023-04-06 10:35:59'),
(48, 'How is your day?', 'tania_ahuja23@yahoo.com', 'ksmith@gmail.com', '2023-04-06 11:13:25'),
(49, 'How are you di', 'tania_ahuja23@yahoo.com', 'ksmith@gmail.com', '2023-04-06 13:24:34'),
(50, 'i am good', 'ksmith@gmail.com', 'tania_ahuja23@yahoo.com', '2023-04-06 13:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `help_provider`
--

CREATE TABLE `help_provider` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `available_hours` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help_provider`
--

INSERT INTO `help_provider` (`id`, `name`, `email`, `password`, `phone`, `available_hours`) VALUES
(1, 'Tania Ahuja', 'tania_ahuja23@yahoo.com', '33333', '9988767654', '11-20'),
(2, 'Nirbhay Sharma', 'nirbhay.sharmad@gmail.com', '111', '87686876877', '09-14'),
(3, 'Kanika Kanika', '05mahajankanika@gmail.com', '19556', '7576576571', '10-17');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `description`, `datetime`) VALUES
(4, 'Online Weekly Session', 'Register now to join the online session.', '2023-04-06 09:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `email` varchar(80) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `blood_group` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`email`, `password`, `name`, `contactno`, `address`, `blood_group`) VALUES
('bvcbv@jhg.com', '12345', 'jhgjgj', '989898989', 'jghgjh', 'B+'),
('joesmith@gmail.com', '12345', 'Joe Smith', '6', '176 street', 'A+'),
('jsmith@gmail.com', 'Hello@1234', 'Joe Smith', '99', '172 queen street', 'A+'),
('ksmith@gmail.com', '123', 'Kane smith', '346', '135 queen street', 'A+'),
('ma@gmail.com', '12345', 'person', '1', 'jgyfyfffuf', 'B+'),
('mahip130101@gmail.com', 'ABC1235', 'Maahi ', '4168264052', '5\r\nBarnes crescent', 'B+'),
('shruti21@gmail.com', '22222', 'Shruti SS', '8787656543', 'ade', 'B+'),
('subhratosingh@gmail.com', '123', 'Subhrato Singh', '8198850602', 'mai kyu btauuu...', 'B+'),
('sunidhii.sh107@gmail.com', '12345', 'Sunidhi Sunidhi', '9988787878', 'asr.', 'A-'),
('tania23@gmail.com', '1234', 'Tania Ahuja', '988767654', 'asr', 'B+'),
('vasu99@gmail.com', '123', 'vasu ', '9876765654', 'asr.', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `hp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `date`, `hp_id`) VALUES
(2, 'what is your daily routine ?', '2023-03-30', 1),
(3, 'how your mood in the morning when you wake up ?', '2023-03-30', 1),
(4, 'New Question ...', '2023-03-31', 2);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `rep_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `question` int(11) NOT NULL,
  `patient` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`rep_id`, `answer`, `date`, `question`, `patient`) VALUES
(1, 'hello', '2023-03-30', 2, 'tania23@gmail.com'),
(2, 'hello hello', '2023-03-30', 3, 'tania23@gmail.com'),
(3, 'new answer.....', '2023-03-31', 4, 'tania23@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `doc_id` (`hp_id`),
  ADD KEY `userid` (`pemail`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_provider`
--
ALTER TABLE `help_provider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hp_id` (`hp_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`rep_id`),
  ADD KEY `question` (`question`),
  ADD KEY `patient` (`patient`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `help_provider`
--
ALTER TABLE `help_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `rep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`hp_id`) REFERENCES `help_provider` (`id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`pemail`) REFERENCES `patients` (`email`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`hp_id`) REFERENCES `help_provider` (`id`);

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`patient`) REFERENCES `patients` (`email`),
  ADD CONSTRAINT `replies_ibfk_2` FOREIGN KEY (`question`) REFERENCES `questions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
