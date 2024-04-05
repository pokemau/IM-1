-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 04:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtanecaf2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `acctid` int(11) NOT NULL,
  `emailadd` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`acctid`, `emailadd`, `username`, `password`, `usertype`) VALUES
(8, 'mau@gmail.com', 'mau', '$2y$10$9KAofBiuvtRy4Ef7KdbTYuQ/g9sYTXnOnaitce2IGZwYn7R3lDqCO', 'admin'),
(11, 'markbaring@gg.com', 'mark', '$2y$10$Q78AdLfFAFyXIlgLN..At.rBAlDScCw7hmJk8qXjV.I/e9ZGVOkfu', 'user'),
(12, 'rentil@emawil', 'markkkk', '$2y$10$70frcGApH62W76zUJt1Cb.OoWGmD.H4Ynw0NgQ.Fze61TYr8d7c2O', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbluserprofile`
--

CREATE TABLE `tbluserprofile` (
  `userid` int(5) NOT NULL,
  `birthday` date NOT NULL DEFAULT current_timestamp(),
  `displayname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluserprofile`
--

INSERT INTO `tbluserprofile` (`userid`, `birthday`, `displayname`) VALUES
(9, '2024-04-05', 'mau'),
(12, '2024-04-17', 'makr brrinnggg'),
(13, '2024-01-09', 'markar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`acctid`);

--
-- Indexes for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `acctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
