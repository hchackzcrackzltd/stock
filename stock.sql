-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 07:00 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `goodissue`
--

CREATE TABLE `goodissue` (
  `docnum` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'เลขเอกสาร',
  `date` date NOT NULL COMMENT 'วันที่',
  `remarks` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'หมายเหตุ',
  `branch` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'สาขา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goodissue`
--

INSERT INTO `goodissue` (`docnum`, `date`, `remarks`, `branch`) VALUES
('SHO1701001', '2017-03-05', 'asdwww', 'HO');

-- --------------------------------------------------------

--
-- Table structure for table `goodissue_item`
--

CREATE TABLE `goodissue_item` (
  `docnum` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รหัสเอกสาร',
  `code_item` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รหัสสินค้า',
  `quantity` int(9) NOT NULL COMMENT 'จำนวนสินค้า',
  `uom` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'หน่วยนับ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goodreceipt`
--

CREATE TABLE `goodreceipt` (
  `docnum` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รหัสเอกสาร',
  `date` date NOT NULL COMMENT 'วันที่เอกสาร',
  `remarks` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'หมายเหตุ',
  `branch` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'สาขา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goodreceipt`
--

INSERT INTO `goodreceipt` (`docnum`, `date`, `remarks`, `branch`) VALUES
('RHO1701001', '2017-03-05', 'wdasd', 'HO');

-- --------------------------------------------------------

--
-- Table structure for table `goodreceipt_item`
--

CREATE TABLE `goodreceipt_item` (
  `docnum` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_item` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(9) NOT NULL,
  `uom` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goodreceipt_item`
--

INSERT INTO `goodreceipt_item` (`docnum`, `code_item`, `quantity`, `uom`) VALUES
('RHO1701001', '1', 5, 'ลัง');

-- --------------------------------------------------------

--
-- Table structure for table `itemmaster`
--

CREATE TABLE `itemmaster` (
  `code` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รหัสสินค้า',
  `descript` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `on_hand` int(9) NOT NULL,
  `ordered` int(9) NOT NULL,
  `commit` int(9) NOT NULL,
  `pack_size` int(9) NOT NULL,
  `uom` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itemmaster`
--

INSERT INTO `itemmaster` (`code`, `descript`, `status`, `on_hand`, `ordered`, `commit`, `pack_size`, `uom`, `branch`) VALUES
('1', 'ssdfsdf', 'aa', 12, 1, 1, 1, 'aa', 'ss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itemmaster`
--
ALTER TABLE `itemmaster`
  ADD PRIMARY KEY (`code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
