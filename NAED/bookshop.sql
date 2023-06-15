-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 01:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL,
  `bookcode` varchar(255) NOT NULL,
  `booktitle` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `yearofpub` year(4) NOT NULL,
  `quantityavailable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `bookcode`, `booktitle`, `author`, `isbn`, `publisher`, `yearofpub`, `quantityavailable`) VALUES
(1, '232', 'How to be a millionaire', 'Hillary', '1234567', 'African Fep Publishers', 2022, 3);

-- --------------------------------------------------------

--
-- Table structure for table `booksgiven`
--

CREATE TABLE `booksgiven` (
  `bookid` int(11) NOT NULL,
  `booktitle` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `recepient` varchar(255) NOT NULL,
  `dateofdespatch` datetime NOT NULL,
  `quantityavailable` int(11) NOT NULL,
  `quantitygiven` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookstock`
--

CREATE TABLE `bookstock` (
  `bookid` int(11) NOT NULL,
  `booktitle` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `quantityavailable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
