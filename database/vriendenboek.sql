-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 02, 2017 at 08:54 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vriendenboek`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `uuid` varchar(60) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(60) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`uuid`, `username`, `password`, `status`, `timestamp`, `role`) VALUES
('124ef0b1-2f2f-4ae5-bb84-a58bf27dc8ba', 'erik@erik.nl', '$2y$10$eKN0w/FABEK8YYXMNvupAunZxkAiFD8EkVnPjNQT.PrGxheL9UnMm', 1, '2017-03-06 08:51:32', '1,2,3,99'),
('773c289f-d44e-43f5-beb3-4d41c3cf21d1', 'theo@theo.nl', '$2y$10$BH7oRKTp7AZDu57ouHJfROGW3SHbdIHzfTl2LHSxxjzjpE9NJXg3e', 1, '2017-03-06 08:51:32', '1'),
('a28e56f3-2674-4a0a-97f6-299c19b941b1', 'hayley@paramore.nl', '$2y$10$Ynvxu.qXn/RLAN1fUrZlDuQ6lPKebrtaxiGksnZX3Jy5ysEiVRSeO', 1, '2017-03-06 08:51:32', '1,2'),
('c734c110-36a4-4da3-b0be-ff39119968d6', 'mudi@mudi.nl', '$2y$10$NQpEUKOLHVwRXMRzmtnXnOl37njOosSkFFJ8DpH7yDCPkpyoYvWHu', 1, '2017-03-06 08:51:32', '1,3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`uuid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
