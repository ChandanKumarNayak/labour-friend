-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 11:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labourfriend`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `altphone` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `myimage` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `name`, `phone`, `altphone`, `password`, `code`, `myimage`) VALUES
(1, 'chandu134', '1998chandannayak@gmail.com', 'Chandan Kumar Nayak', '8455944781', '7978554807', 'chandu381144114', 'chandu@1872247398', 0x323031382d30362d31342d32302d30302d33392d3134392e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `hirer`
--

CREATE TABLE `hirer` (
  `id` int(255) NOT NULL,
  `hirer_username` varchar(500) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `signup_email` varchar(255) NOT NULL,
  `hirer_password` varchar(255) NOT NULL,
  `myimage` blob NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hirer`
--

INSERT INTO `hirer` (`id`, `hirer_username`, `phone`, `name`, `signup_email`, `hirer_password`, `myimage`, `purpose`, `amount`, `email`, `pid`, `status`) VALUES
(1, 'cc', '8455944781', 'Chandan Kumar Nayak', '', 'c', 0x636b6e2e706e67, 'Hirer Registration Fee', '20.00', '1998bachannayak@gmail.com', 'MOJO9111S05D77979777', 'Credit'),
(3, 'c', '8455944781', 'Chandan Kumar Nayak', 'cc@gmail.com', 'c', 0x6368616e64616e2e6a7067, '0', '0', '0', '0', '1'),
(4, 'a', '8455944781', 'Chandan Kumar Nayak', 'c@gmail.com', 'a', 0x30, '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `labourer`
--

CREATE TABLE `labourer` (
  `id` int(255) NOT NULL,
  `adhar_no` varchar(500) NOT NULL,
  `labourer_username` varchar(255) NOT NULL,
  `labourer_password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `myimage` blob NOT NULL,
  `phone` varchar(10) NOT NULL,
  `altphone` varchar(10) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `panchayat` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `form_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labourer`
--

INSERT INTO `labourer` (`id`, `adhar_no`, `labourer_username`, `labourer_password`, `name`, `myimage`, `phone`, `altphone`, `dob`, `work`, `gender`, `country`, `state`, `district`, `city`, `panchayat`, `status`, `form_status`) VALUES
(1, '777777777777', 'd', 'd', 'Chandan Kumar Nayak', 0x6b616269722e6a706567, '8455944781', '7978554806', '1998-07-02', 'Electrician', 'Male', 'India', 'Odisha', 'JagatSinghPur', 'Kujang', 'Biswali', '1', '1'),
(2, '888888888888', 'j', 'j', 'Chandan Kumar Nayak', 0x6368616e64752e6a7067, '8455944781', '7978554806', '1998-07-02', 'Labourer', 'Male', 'India', 'Odisha', 'JagatSinghPur', 'Kujang', 'Biswali', '1', '1'),
(4, '666666666666', 'g', 'g', '0', 0x30, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(5, '078569750913', 'Sunildas99', 'sunil@1999', '0', 0x30, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, '777777777788', 's', 's', '0', 0x30, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(255) NOT NULL,
  `work` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `work`) VALUES
(1, 'Carpenter (ବଢେଇ)'),
(2, 'Electrician (ଲାଇନ ଯନ୍ରୀ)'),
(3, 'House Painter (ରଂଗ ମୀସ୍ରୀ)'),
(4, 'Labourer (ଶ୍ରମିକ)'),
(5, 'Mason (ରାଜ ମୀସ୍ରୀ)'),
(6, 'Plumber (ପାଇପ ମୀସ୍ରୀ)'),
(7, 'Tile Setter (ଟାଇଲ ମୀସ୍ରୀ)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hirer`
--
ALTER TABLE `hirer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labourer`
--
ALTER TABLE `labourer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hirer`
--
ALTER TABLE `hirer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `labourer`
--
ALTER TABLE `labourer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
