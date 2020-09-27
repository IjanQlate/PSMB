-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 06:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboardg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`, `nama`) VALUES
(1, 'a@a.com', 'abc123', 'Izwan Shah'),
(2, 'shahril@a.com', 'abc123', 'Sharil Hafiz'),
(3, 'latifah98', 'abc123', 'Cik Latifah'),
(4, 'haneezainudin', 'abc123', 'Puan Hanee'),
(5, 'megatfaisol', 'abc123', 'Encik Megat');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `publicationDate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `publicationDate`, `title`, `summary`, `content`) VALUES
(1, '2020-05-20', 'promo jun', 'jan promo', 'diskaun 40%'),
(2, '2020-05-13', 'hi', '12', 'test123'),
(3, '2020-05-15', 'test', 'forteen', '12345678910');

-- --------------------------------------------------------

--
-- Table structure for table `crecord`
--

CREATE TABLE `crecord` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `invois_no` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pNo` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Poskod` varchar(50) NOT NULL,
  `Bandar` varchar(50) NOT NULL,
  `Negeri` varchar(50) NOT NULL,
  `InstallTeam` varchar(50) NOT NULL,
  `installType` varchar(50) NOT NULL,
  `installDate` date NOT NULL,
  `Remark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crecord`
--

INSERT INTO `crecord` (`id`, `Nama`, `invois_no`, `email`, `pNo`, `Alamat`, `Poskod`, `Bandar`, `Negeri`, `InstallTeam`, `installType`, `installDate`, `Remark`) VALUES
(1, 'zaim', '', 'zaimhaziq1@gmail.com', '017670986723', '405 blok 10 jalan 4/2 seksyen 4', '43650', 'bandar baru bangi selangor', 'Selangor', 'UTRET Solution', 'ALARM SYSTEM', '2020-05-12', 'monitor no view'),
(2, 'aiman', 'inv3001', 'ai@man.com', '012334455678', '30 jalan 4/18', '43658', 'kajang', 'selangor', 'E&E Intech Solution', 'ACCESS DOOR SYSTEM', '2020-05-16', 'test 7:04'),
(3, 'ishak', '', 'sahak@gmail.com', '0124482347', 'lot 444 jalan enggang', '42800', 'ampang', 'selangor', 'E&E Intech Solution', 'ALARM SYSTEM', '2020-04-10', 'test sahakk'),
(4, 'Faris', '', '', '0133775301', 'No 43 lorong semarak', '42800', 'Klang', 'Selangor', 'UTRET Solution', 'CCTV', '2020-04-15', 'test 6:57'),
(14, 'aizat', '', 'aizat1@gmail.com', '0196789944', '411 flat seri murni', '32456', 'ipoh', 'perak', 'UTRET Solution', 'ALARM SYSTEM', '2020-05-29', 'cctv no view, no power led'),
(18, 'alif', '', 'alif@yahoo.com', '0182271023', '14 jalan 15/2h', '65880', 'kajang', 'selangor', 'ADMS Solution', 'ALARM SYSTEM', '2020-06-22', 'tukar isotec ke adms'),
(19, 'zaki', 'inv3003', 'zaki@ki.com', '0133775301', 'no 14 jalan 3', '43650', 'kajang', 'selangor', 'ADMS Solution', 'INTERCOM SYSTEM', '2020-06-22', ''),
(20, 'kamal', 'in3002', 'carl@gmail.com', '0172535101', 'jalan 4/2 taman sutera', '45000', 'jengka', 'pahang', 'E&E Intech Solution', 'INTERCOM SYSTEM', '2020-06-23', ''),
(21, 'farah', '', 'farah@gmail.com', '0176709867', 'no 14 jalan itik', '236677', 'manjung', 'perak', 'ISOTECH Solution', 'PABX SYSTEM', '2020-06-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `cID` int(11) NOT NULL,
  `Nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pNo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Alamat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Poskod` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Bandar` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Negeri` varchar(50) CHARACTER SET latin1 NOT NULL,
  `TimeDate` varchar(50) CHARACTER SET latin1 NOT NULL,
  `installType` varchar(50) CHARACTER SET latin1 NOT NULL,
  `installTime` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `custb`
--

CREATE TABLE `custb` (
  `tbID` int(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pNo` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Poskod` varchar(50) NOT NULL,
  `Bandar` varchar(50) NOT NULL,
  `Negeri` varchar(50) NOT NULL,
  `InstallTeam` varchar(50) NOT NULL,
  `installType` varchar(50) NOT NULL,
  `installDate` date NOT NULL,
  `Remark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custb`
--

INSERT INTO `custb` (`tbID`, `id`, `Nama`, `email`, `pNo`, `Alamat`, `Poskod`, `Bandar`, `Negeri`, `InstallTeam`, `installType`, `installDate`, `Remark`) VALUES
(39, '2', 'aiman', 'ai@man.com', '012334455678', '30 jalan 4/18', '43658', 'kajang', 'selangor', 'E&E Intech Solution', 'ACCESS DOOR SYSTEM', '0000-00-00', 'door cant lock'),
(40, '1', 'zaim', 'zaimhaziq1@gmail.com', '017670986723', '405 blok 10 jalan 4/2 seksyen 4', '43650', 'bandar baru bangi selangor', 'Selangor', 'UTRET Solution', 'ALARM SYSTEM', '0000-00-00', 'alarm cannot be armed'),
(41, '3', 'ishak', 'sahak@gmail.com', '0124482347', 'lot 444 jalan enggang', '42800', 'ampang', 'selangor', 'E&E Intech Solution', 'ALARM SYSTEM', '0000-00-00', 'test 1'),
(42, '3', 'ishak', 'sahak@gmail.com', '0124482347', 'lot 444 jalan enggang', '42800', 'ampang', 'selangor', 'E&E Intech Solution', 'ALARM SYSTEM', '0000-00-00', 'test 1'),
(43, '4', 'Faris', 'faris@a.com', '0133775301', 'No 43 lorong semarak', '42800', 'Klang', 'Selangor', 'UTRET Solution', 'CCTV', '0000-00-00', 'camera satu tidak berfungsi'),
(44, '14', 'aizat', 'aizat1@gmail.com', '0196789944', '411 flat seri murni', '32456', 'ipoh', 'perak', 'UTRET Solution', 'ALARM SYSTEM', '0000-00-00', 'alarm tidak berfungsi\r\n'),
(45, '18', 'alif', 'alif@yahoo.com', '0182271023', '14 jalan 15/2h', '65880', 'kajang', 'selangor', 'ADMS Solution', 'ALARM SYSTEM', '0000-00-00', 'siren tidak berbunyi'),
(46, '19', 'zaki', 'zaki@ki.com', '0133775301', 'no 14 jalan 3', '43650', 'kajang', 'selangor', 'ADMS Solution', 'INTERCOM SYSTEM', '0000-00-00', 'kokom di bilik utama tidak berfungsi'),
(47, '20', 'kamal', 'carl@gmail.com', '0172535101', 'jalan 4/2 taman sutera', '45000', 'jengka', 'pahang', 'E&E Intech Solution', 'INTERCOM SYSTEM', '0000-00-00', 'tiada suara'),
(48, '21', 'farah', 'farah@gmail.com', '0176709867', 'no 14 jalan itik', '236677', 'manjung', 'perak', 'ISOTECH Solution', 'PABX SYSTEM', '0000-00-00', 'telefon receptionist tidak berfungsi');

-- --------------------------------------------------------

--
-- Table structure for table `enq`
--

CREATE TABLE `enq` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `pno` varchar(75) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enq`
--

INSERT INTO `enq` (`id`, `name`, `email`, `pno`, `msg`) VALUES
(2, 'zaim', 'zaimhaziq1@gmail.com', '0176709867', 'test'),
(3, 'rahim', 'rahim1@hotmail.com', '0197885678', 'test 2'),
(23, 'iwan', 'iwan@hi.com', '0182271023', 'harga untuk 16 channel');

-- --------------------------------------------------------

--
-- Table structure for table `enq2`
--

CREATE TABLE `enq2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pno` int(15) NOT NULL,
  `adr` varchar(255) NOT NULL,
  `cty` varchar(255) NOT NULL,
  `st` varchar(255) NOT NULL,
  `pos` int(11) NOT NULL,
  `itn` varchar(255) NOT NULL,
  `quan` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enq2`
--

INSERT INTO `enq2` (`id`, `name`, `email`, `pno`, `adr`, `cty`, `st`, `pos`, `itn`, `quan`) VALUES
(352, 'iwan', 'iwan@a.com', 0, 'jalan 3', 'melaka', 'melaka', 12345, 'Pejabat', 'Tidak'),
(354, 'iwan', 'iwan@a.com', 0, 'jalan 3', 'melaka', 'melaka', 12345, 'Hotel', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `P_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `P_desc`) VALUES
(1, '4 CHANNEL CCTV', 'images/4CH.jpg', 1800.00, ''),
(2, '8 CHANNEL CCTV', 'images/8CH.jpg', 2950.00, ''),
(3, '16 CHANNEL CCTV', 'images/16CH.jpg', 4300.00, ''),
(4, 'Standalone Access Door', 'images/accessdoor.jpg', 550.00, ''),
(5, 'Standalone Bio-Time Access Door', 'images/fingerprint.jpg', 1750.00, ''),
(6, 'Audio Intercome (1 to 1)', 'images/1to1.jpg', 290.00, ''),
(7, 'Audio Intercome (1 to 2)', 'images/1to2.jpg', 450.00, ''),
(8, 'PABX NEC', 'images/PABX.jpg', 2950.00, ''),
(9, '4-Zone Alarm', 'images/alarm4.jpg', 2350.00, ''),
(10, '8-Zone Alarm', 'images/alarm8.jpg', 3250.00, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crecord`
--
ALTER TABLE `crecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `custb`
--
ALTER TABLE `custb`
  ADD PRIMARY KEY (`tbID`);

--
-- Indexes for table `enq`
--
ALTER TABLE `enq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enq2`
--
ALTER TABLE `enq2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crecord`
--
ALTER TABLE `crecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cust`
--
ALTER TABLE `cust`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custb`
--
ALTER TABLE `custb`
  MODIFY `tbID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `enq`
--
ALTER TABLE `enq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `enq2`
--
ALTER TABLE `enq2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
