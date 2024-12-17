-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 10:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproject267`
--
CREATE DATABASE IF NOT EXISTS `dbproject267` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbproject267`;

-- --------------------------------------------------------

--
-- Table structure for table `tbbook`
--

CREATE TABLE `tbbook` (
  `bookid` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `booktypeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbbooktype`
--

CREATE TABLE `tbbooktype` (
  `booktypeid` int(11) NOT NULL,
  `booktypname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbroom`
--

CREATE TABLE `tbroom` (
  `roomid` int(11) NOT NULL,
  `roomname` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `roomtypeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbroom`
--

INSERT INTO `tbroom` (`roomid`, `roomname`, `detail`, `roomtypeid`) VALUES
(1, '101', 'มีแต่ห้องไม่มีของ', 3),
(2, '102', 'มีของแต่ไม่มีห้องอยู่', 3),
(3, '103', 'ห้องติดสถานีรภไฟ', 1),
(4, '104', 'ติดร้านเจ๊แหม่ม', 1),
(5, '105', 'พักได้ 40k-50kคน', 2),
(6, '106', 'ทำเนียนขาว', 1),
(19, '123', 'ไม่บอก', 3),
(20, '405', '888', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbroomtype`
--

CREATE TABLE `tbroomtype` (
  `roomtypeid` int(11) NOT NULL,
  `roomtypename` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbroomtype`
--

INSERT INTO `tbroomtype` (`roomtypeid`, `roomtypename`, `price`) VALUES
(1, 'รัชดา บูทีค โฮเทล', 1200),
(2, 'โฮม สุขุมวิท34 กรุงเทพฯ - แบรนด์ในเครือบันยัน กรุ๊', 2000),
(3, 'แบรนด์ในเครือบันยันกรุ๊ป', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `tbstudent`
--

CREATE TABLE `tbstudent` (
  `stdid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbstudent`
--

INSERT INTO `tbstudent` (`stdid`, `firstname`, `lastname`, `email`, `address`) VALUES
(1, 'Pklio', 'zeed', '', '107/20 คู้บอน 27 เขตบางเขน จ.กรุงเทพม'),
(2, 'ิboom', 'zed', '', '107/20 คู้บอน 28 เขตบางเขน จ.กรุงเทพม'),
(3, 'bg', 'kg', '', '10/20 คู้บอน 29 เขตบางเขน จ.กรุงเทพม'),
(4, 'jcb', 'k', '', '17/20 คู้บอน 30 เขตบางเขน จ.กรุงเทพม'),
(5, 'opl', 'lll', '', '7/20 คู้บอน 31 เขตบางเขน จ.กรุงเทพม'),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, 'dasdsd', '', '', 'ddddd'),
(12, 'dasdsd', '', '', 'hgh'),
(13, 'dasdsd', '', '', 'hgh'),
(14, 'dasdsd', '', '', 'hgh'),
(15, 'dasdsd', '', '', 'dsdddd'),
(16, 'dasdsd', '', '', 'dsdddd'),
(17, 'dasdsd', '', '', '22'),
(18, '101', '', '', '20'),
(19, '101', '', '', '20'),
(20, '101', '', '', 'dd'),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `fullName`, `emailAddress`, `city`, `country`, `created_at`) VALUES
(3, 'Nitipong', 'Aoom@gmail.com', 'Ayutthaya', 'Thailand', '0000-00-00 00:00:00'),
(4, 'Nitipong', 'Aoom@gmail.com', 'Ayutthaya', 'Thailand', '0000-00-00 00:00:00'),
(5, 'Nitipong', 'Aoomg@gmail.com', 'Ayutthaya', 'Thailand', '0000-00-00 00:00:00'),
(6, 'Nitipong', 'Aoomkung@gmail.com', 'Ayutthaya', 'Thailand', '2024-12-06 14:34:07'),
(7, 'Nitipong', 'Aoomkung2556@gmail.com', 'Ayutthaya', 'Thailand', '2024-12-06 14:43:30'),
(8, 'Nitipong', 'Aoomkung2547@gmail.com', 'Ayutthaya', 'Thailand', '2024-12-06 14:49:45'),
(9, 'Nitipong', 'Aoomg2547@gmail.com', 'Ayutthaya', 'Thailand', '2024-12-06 14:53:03'),
(10, 'Nitipong', 'Aoom2547@gmail.com', 'Ayutthaya', 'Thailand', '2024-12-06 14:53:57'),
(11, 'Nitipong', 'Aoom2556@gmail.com', 'Ayutthaya', 'Thailand', '2024-12-06 14:57:12'),
(12, 'Nitipong', 'Aoomgkung@gmail.com', 'Ayutthaya', 'Thailand', '2024-12-06 14:57:44'),
(13, 'Nitipong', 'Aoomgkungkub@gmail.com', 'Ayutthaya', 'Thailand', '2024-12-06 16:23:31'),
(14, 'Nitipong9', 'Aoomkung9@gmail.com', 'Ayutthaya', 'Thailand', '2024-12-06 16:24:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbook`
--
ALTER TABLE `tbbook`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `tbbooktype`
--
ALTER TABLE `tbbooktype`
  ADD PRIMARY KEY (`booktypeid`);

--
-- Indexes for table `tbroom`
--
ALTER TABLE `tbroom`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `tbroomtype`
--
ALTER TABLE `tbroomtype`
  ADD PRIMARY KEY (`roomtypeid`);

--
-- Indexes for table `tbstudent`
--
ALTER TABLE `tbstudent`
  ADD PRIMARY KEY (`stdid`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbbook`
--
ALTER TABLE `tbbook`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbbooktype`
--
ALTER TABLE `tbbooktype`
  MODIFY `booktypeid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbroom`
--
ALTER TABLE `tbroom`
  MODIFY `roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbroomtype`
--
ALTER TABLE `tbroomtype`
  MODIFY `roomtypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbstudent`
--
ALTER TABLE `tbstudent`
  MODIFY `stdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
