-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 07:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `document`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin@', 'admin'),
('admin@', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `caste`
--

CREATE TABLE `caste` (
  `id` int(200) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` int(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `Cdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `caste`
--

INSERT INTO `caste` (`id`, `firstname`, `lastname`, `contact`, `gender`, `Cdate`) VALUES
(1, 'dnyaneshvar', 'jadhav', 2147483647, 'Male', '2022-05-01'),
(2, 'himanshu', 'sonawane', 2147483647, 'Male', '2022-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `dom`
--

CREATE TABLE `dom` (
  `id` int(200) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` int(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `Cdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dom`
--

INSERT INTO `dom` (`id`, `firstname`, `lastname`, `contact`, `gender`, `Cdate`) VALUES
(1, 'dnyaneshvar', 'jadhav', 2147483647, 'Male', '0000-00-00'),
(3, 'himanshu', 'sonawane', 2147483647, 'Male', '2022-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(200) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` int(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `Cdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `firstname`, `lastname`, `contact`, `gender`, `Cdate`) VALUES
(1, 'dnyaneshvar', 'jadhav', 2147483647, 'Male', '0000-00-00'),
(2, 'dnyaneshvar', 'jadhav', 2147483647, 'Male', '0000-00-00'),
(3, 'himanshu', 'sonawane', 2147483647, 'Male', '2022-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `nation`
--

CREATE TABLE `nation` (
  `id` int(200) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` int(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `Cdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nation`
--

INSERT INTO `nation` (`id`, `firstname`, `lastname`, `contact`, `gender`, `Cdate`) VALUES
(1, 'dnyaneshvar', 'sonawane', 2147483647, 'Male', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `noncreamy`
--

CREATE TABLE `noncreamy` (
  `id` int(200) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` int(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `Cdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noncreamy`
--

INSERT INTO `noncreamy` (`id`, `firstname`, `lastname`, `contact`, `gender`, `Cdate`) VALUES
(1, 'dnyaneshvar', 'jadhav', 2147483647, 'Male', '0000-00-00'),
(2, 'himanshu', 'sonawane', 2147483647, 'Male', '2022-05-02'),
(3, 'himanshu', 'sonawane', 2147483647, 'Male', '2022-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` int(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `mobile` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `firstname`, `lastname`, `mobile`, `username`, `password`, `email`) VALUES
(1, 'narendra ', 'sonawane', 2147483647, 'admin@', '123', 'hgffghg@gmail.com'),
(123, 'dnyaneshvar', 'sonawane', 2147483647, 'himanshu@', '123', 'himanshu@12gmail.com'),
(7133, 'dnyaneshvar', 'jadhav', 2147483647, 'dnyanesh@', 'dnyanesh', 'dnyaneshja9783@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `validity`
--

CREATE TABLE `validity` (
  `id` int(200) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` int(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `Cdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `validity`
--

INSERT INTO `validity` (`id`, `firstname`, `lastname`, `contact`, `gender`, `Cdate`) VALUES
(2, 'himanshu', 'sonawane', 2147483647, 'Male', '2022-05-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caste`
--
ALTER TABLE `caste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dom`
--
ALTER TABLE `dom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nation`
--
ALTER TABLE `nation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noncreamy`
--
ALTER TABLE `noncreamy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `validity`
--
ALTER TABLE `validity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
