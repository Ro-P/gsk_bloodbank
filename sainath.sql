-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 11:18 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sainath`
--

-- --------------------------------------------------------

--
-- Table structure for table `adv_rej`
--

CREATE TABLE `adv_rej` (
  `patient1` varchar(255) NOT NULL,
  `pbarcode` varchar(255) NOT NULL,
  `bbarcode1` varchar(255) NOT NULL,
  `patient2` varchar(255) NOT NULL,
  `reqno` varchar(255) NOT NULL,
  `bbarcode2` varchar(255) NOT NULL,
  `component` varchar(255) NOT NULL,
  `fs_date` varchar(255) NOT NULL,
  `fe_date` varchar(255) NOT NULL,
  `voltrans` varchar(255) NOT NULL,
  `natofreac` varchar(255) NOT NULL,
  `crobs` varchar(255) NOT NULL,
  `fuia` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adv_rej`
--

INSERT INTO `adv_rej` (`patient1`, `pbarcode`, `bbarcode1`, `patient2`, `reqno`, `bbarcode2`, `component`, `fs_date`, `fe_date`, `voltrans`, `natofreac`, `crobs`, `fuia`, `remarks`) VALUES
('5', '5', '5', '5', '5', '5', '5', '0005-10-05', '0005-10-05', '5', '5', '5', '5', '5'),
('2', '2', '2', '22', '2', '2', '2', '2019-02-02', '2019-02-02', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `db_roll`
--

CREATE TABLE `db_roll` (
  `id_roll` int(255) NOT NULL,
  `roll_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_roll`
--

INSERT INTO `db_roll` (`id_roll`, `roll_name`) VALUES
(1, 'assistant'),
(2, 'accounts'),
(3, 'employees');

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `user_id` int(25) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `post` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`user_id`, `uname`, `upass`, `name`, `mail`, `post`) VALUES
(1, 'gsk@123', 'gsk', 'gsk bloodbank', 'gskbloodbank@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pat_samp_rej`
--

CREATE TABLE `pat_samp_rej` (
  `hhno` int(255) NOT NULL,
  `vno` int(255) NOT NULL,
  `reqno` int(255) NOT NULL,
  `accno` int(255) NOT NULL,
  `uhid` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `req_date` varchar(255) NOT NULL,
  `sampbar` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat_samp_rej`
--

INSERT INTO `pat_samp_rej` (`hhno`, `vno`, `reqno`, `accno`, `uhid`, `pname`, `req_date`, `sampbar`, `remarks`) VALUES
(11, 1, 1, 1, '1', '1', '2019-10-01', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `recipient_bbtable`
--

CREATE TABLE `recipient_bbtable` (
  `donor_sr` varchar(255) NOT NULL,
  `reqr` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `c1` varchar(255) NOT NULL,
  `uu1` varchar(255) NOT NULL,
  `bgrp1` varchar(255) NOT NULL,
  `x1` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `dd1` varchar(255) NOT NULL,
  `dt1` varchar(255) NOT NULL,
  `rr1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipient_bbtable`
--

INSERT INTO `recipient_bbtable` (`donor_sr`, `reqr`, `time`, `c1`, `uu1`, `bgrp1`, `x1`, `s1`, `dd1`, `dt1`, `rr1`) VALUES
('m', 'm', 'm', '', '', '', '', '', '', '', ''),
('m', 'm', 'm', '', '', '', '', '', '', '', ''),
('+654', '', '', '', '', '', '', '', '', '', ''),
('+654', '252', '222', '', '', '', '', '', '', '', ''),
('m', 'm', 'm', '', '', '', '', '', '', '', ''),
('m', 'm', 'm', '', '', '', '', '', '', '', ''),
('19205', '1525', '4:32', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', ''),
('m', 'm', 'm', '', '', '', '', '', '', '', ''),
('p', 'p', 'p', 'RBC', '5', 'O+', 'No', 'Java assignment1.docx', '2019-09-14', '11:59', 'nthing'),
('6', '6', '6', '1', '1', '1', '1', '5994.jpg', '0001-01-01', '01:01', '1'),
('123', '15:01', '24', 'ABC', '10', 'B+', 'abc', '5994.jpg', '0555-05-05', '05:55', '55'),
('123', '15:01', '24', 'ABC', '10', 'B+', 'abc', '5994.jpg', '0555-05-05', '05:55', '55'),
('123', '15:01', '24', 'ABC', '10', 'B+', 'abc', '5994.jpg', '0555-05-05', '05:55', '55'),
('m', '', '', '', '', '', '', '', '', '', ''),
('m', '', '', '', '', '', '', '', '', '', ''),
('m', '', '', '', '', '', '', '', '', '', ''),
('m', '', '', '', '', '', '', '', '', '', ''),
('m', '', '', '', '', '', '', '', '', '', ''),
('m', '', '', '', '', '', '', '', '', '', ''),
('m', '', '', '', '', '', '', '', '', '', ''),
('m', '', '', '', '', '', '', '', '', '', ''),
('m', '', '', '', '', '', '', '', '', '', ''),
('m', '', '', '', '', '', '', '', '', '', ''),
('m', '', '', '', '', '', '', '', '', '', ''),
('5', '5', '5', '1', '1', '1', '1', 'index.php', '0001-01-01', '01:01', '1'),
('5', '5', '5', '5', '5', '5', '5', '1.html', '0005-05-05', '05:05', '5'),
('99', '99', '99', '99', '99', '99', '99', '1.html', '0009-09-09', '09:59', '9'),
('88', '88', '88', '88', '88', '88', '88', '1.html', '0008-08-08', '08:08', '8'),
('5', '5', '5', '1', '1', '1', '1', 'Certificate.jpg', '0001-01-01', '01:01', '1'),
('ww', 'ww', 'ww', '56', '56', '56', '56', '10.jpg', '0005-06-05', '05:06', '56'),
('', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `recipient_details`
--

CREATE TABLE `recipient_details` (
  `rec_id` int(255) NOT NULL,
  `type_of_req` varchar(255) NOT NULL,
  `bgrp` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `transfusion` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `hb` varchar(255) NOT NULL,
  `gms_dl` varchar(255) NOT NULL,
  `history` varchar(255) NOT NULL,
  `reaction` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipient_details`
--

INSERT INTO `recipient_details` (`rec_id`, `type_of_req`, `bgrp`, `patient_name`, `age`, `sex`, `transfusion`, `diagnosis`, `hb`, `gms_dl`, `history`, `reaction`, `date`) VALUES
(1, '', '', '  ', 'm', '', 'm', 'm', 'm', 'm', 'm', 'm', '2019-09-19 06:00:10'),
(2, '', 'on', 'm m m', 'm', 'Male', 'm', 'm', 'm', 'm', 'm', '', '2019-09-19 06:00:10'),
(3, '', 'on', 'm m m', 'm', 'Male', 'm', 'm', 'm', 'm', 'm', 'm', '2019-09-19 06:00:10'),
(4, '', 'B+', 'abc pqr xyz', '15', 'Male', 'nthing', 'nthing', 'nthing', 'nthing', 'nthing', 'nthing', '2019-09-19 06:00:10'),
(5, '', 'A+', 'm m m', '55', 'Male', 'm', 'm', 'm', 'm', 'm', 'm', '2019-09-19 06:00:10'),
(6, '', '', 'm m m', 'm', '', 'm', 'm', 'm', 'm', 'm', 'm', '2019-09-19 06:00:10'),
(7, '', 'B+', 'Rohit  Pagote', '20', 'Male', 'a', 'b', 'c', 'd', 'e', 'f', '2019-09-19 06:00:10'),
(8, '', '', 'm m m', 'm', '', 'm', 'm', 'm', 'm', 'm', 'm', '2019-09-19 06:00:10'),
(9, '', '', 'm m m', 'm', '', 'm', 'm', 'm', 'm', 'm', 'm', '2019-09-19 06:00:10'),
(10, '', '', 'p p p', 'p', '', 'p', 'p', 'p', 'p', 'p', 'p', '2019-09-19 06:00:10'),
(11, '', '', 'm m m', 'm', '', 'm', 'm', 'm', 'm', 'mm', 'm', '2019-09-19 06:00:10'),
(12, '', '', 'r r r', 'r', 'Male', 'r', 'r', 'r', 'r', 'r', 'r', '2019-09-19 06:00:10'),
(13, '', '', 'r r r', 'r', 'Male', 'r', 'r', 'r', 'r', 'r', 'r', '2019-09-19 06:00:10'),
(14, '', '', 'r r r', 'r', 'Male', 'r', 'r', 'r', 'r', 'r', 'r', '2019-09-19 06:00:10'),
(15, '', 'A-', 'm m m', 'm', '', 'm', 'm', 'm', 'mm', 'm', 'm', '2019-09-19 06:00:10'),
(16, '', 'A-', 'm m m', 'm', '', 'm', 'm', 'm', 'mm', 'm', 'm', '2019-09-19 06:00:10'),
(17, '', 'A-', 'm m m', 'm', '', 'm', 'm', 'm', 'mm', 'm', 'm', '2019-09-19 06:00:10'),
(18, '', 'A-', 'm m m', 'm', '', 'm', 'm', 'm', 'mm', 'm', 'm', '2019-09-19 06:00:10'),
(19, '', 'A-', 'm m m', 'm', '', 'm', 'm', 'm', 'mm', 'm', 'm', '2019-09-19 06:00:10'),
(20, '', 'A-', 'm m m', 'm', '', 'm', 'm', 'm', 'mm', 'm', 'm', '2019-09-19 06:00:10'),
(21, '', 'A-', 'm m m', 'm', '', 'm', 'm', 'm', 'mm', 'm', 'm', '2019-09-19 06:00:10'),
(22, '', 'A-', 'm m m', 'm', '', 'm', 'm', 'm', 'mm', 'm', 'm', '2019-09-19 06:00:10'),
(23, '', 'A-', 'm m m', 'm', '', 'm', 'm', 'm', 'mm', 'm', 'm', '2019-09-19 06:00:10'),
(24, '', 'A-', 'm m m', 'm', '', 'm', 'm', 'm', 'mm', 'm', 'm', '2019-09-19 06:00:10'),
(25, '', 'A-', 'm m m', 'm', '', 'm', 'm', 'm', 'mm', 'm', 'm', '2019-09-19 06:00:10'),
(26, '', '', 'n n n', 'n', '', 'n', 'n', 'n', 'n', 'n', 'n', '2019-09-19 06:00:10'),
(27, '', '', 'h h h', 'h', '', 'h', 'h', 'h', 'h', 'h', 'h', '2019-09-19 10:26:52'),
(28, '', '', 'ABC PQR XYZ', '20', 'Male', 'nill', 'nill', 'nill', 'nill', 'nill', 'nill', '2019-09-19 10:38:44'),
(29, '', 'B+', 'ABC PQR XYZ', '20', 'Male', 'nill', 'nill', 'nill', 'nill', 'nill', 'nill', '2019-09-19 10:40:45'),
(30, '', 'B+', 'Rohit Deepak Pagote', '20', 'Male', '4', '4', '4', '4', '4', '4', '2019-10-10 11:22:11'),
(31, '', '', '1 1 1', '1', '', '1', '1', '1', '1', '1', '1', '2019-10-11 07:55:21'),
(32, 'urgent', 'B+', 'r d p', '20', '', '', '', '', '', '', '', '2019-10-11 08:14:17'),
(33, 'Rush', 'B+', 'R D P', '20', '', '', '', '', '', '', '', '2019-10-11 08:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `recipient_reqtable`
--

CREATE TABLE `recipient_reqtable` (
  `recipient_bbtable_id` int(255) NOT NULL,
  `recipient_id` int(255) NOT NULL,
  `u1` varchar(255) NOT NULL,
  `u2` varchar(255) NOT NULL,
  `u3` varchar(255) NOT NULL,
  `u4` varchar(255) NOT NULL,
  `u5` varchar(255) NOT NULL,
  `u6` varchar(255) NOT NULL,
  `u7` varchar(255) NOT NULL,
  `d1` varchar(255) NOT NULL,
  `d2` varchar(255) NOT NULL,
  `d3` varchar(255) NOT NULL,
  `d4` varchar(255) NOT NULL,
  `d5` varchar(255) NOT NULL,
  `d6` varchar(255) NOT NULL,
  `d7` varchar(255) NOT NULL,
  `t1` varchar(255) NOT NULL,
  `t2` varchar(255) NOT NULL,
  `t3` varchar(255) NOT NULL,
  `t4` varchar(255) NOT NULL,
  `t5` varchar(255) NOT NULL,
  `t6` varchar(255) NOT NULL,
  `t7` varchar(255) NOT NULL,
  `r1` varchar(255) NOT NULL,
  `r2` varchar(255) NOT NULL,
  `r3` varchar(255) NOT NULL,
  `r4` varchar(255) NOT NULL,
  `r5` varchar(255) NOT NULL,
  `r6` varchar(255) NOT NULL,
  `r7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipient_reqtable`
--

INSERT INTO `recipient_reqtable` (`recipient_bbtable_id`, `recipient_id`, `u1`, `u2`, `u3`, `u4`, `u5`, `u6`, `u7`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`) VALUES
(1, 1, '1', '1', '1', '1', '1', '1', '1', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '01:01', '01:01', '01:01', '01:01', '01:01', '01:01', '01:01', '1', '1', '1', '1', '1', '1', '1'),
(2, 2, '1', '2', '3', '4', '5', '6', '7', '0001-01-01', '0002-02-02', '0003-03-03', '0004-04-04', '0005-05-05', '0006-06-06', '0007-07-07', '01:01', '02:02', '03:03', '04:04', '05:05', '06:06', '07:07', '1', '2', '3', '4', '5', '6', '7'),
(3, 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 4, '78', '45', '78', '2', '', '12', '1', '2019-09-12', '2019-09-12', '2019-09-12', '2019-09-12', '2019-09-12', '2019-09-12', '2019-09-12', '11:11', '11:11', '11:11', '11:11', '11:11', '11:11', '11:11', '11', '11', '11', '11', '', '11', '11'),
(5, 5, '3', '3', '3', '3', '3', '3', '3', '0003-03-03', '0003-03-03', '0003-03-03', '0003-03-03', '0003-03-03', '0003-03-03', '0003-03-03', '03:03', '03:03', '03:03', '03:03', '03:03', '03:03', '03:03', '3', '3', '3', '3', '3', '3', '3'),
(6, 6, '55555', '5', '5', '5', '5', '5', '5', '0005-05-05', '0005-05-05', '0005-05-05', '0005-05-05', '0005-05-05', '0005-05-05', '0005-05-05', '05:05', '05:05', '05:05', '05:05', '05:05', '05:05', '05:05', '5', '5', '5', '5', '5', '5', '5'),
(7, 25, 'm', '2', '2', '222', '44', '44', '4', '275760-05-04', '0044-02-02', '0044-02-02', '0222-02-04', '0002-02-04', '0002-02-04', '2222-04-04', '22:22', '02:02', '22:22', '04:22', '04:22', '04:22', '04:22', '2', '22', '2', '4', '4', '4', '4'),
(8, 26, '1', '1', '1', '1', '1', '1', '1', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '01:01', '01:01', '01:01', '01:01', '01:01', '01:01', '01:01', '1', '1', '1', '1', '1', '1', '1'),
(9, 27, '1', '1', '1', '1', '1', '1', '1', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '01:01', '01:01', '01:01', '01:01', '01:01', '01:01', '01:01', '1', '1', '1', '1', '1', '1', '1'),
(10, 28, '1', '1', '1', '1', '1', '1', '1', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '01:01', '01:01', '01:01', '01:01', '01:01', '01:01', '01:01', '1', '1', '1', '1', '1', '1', '1'),
(11, 29, '1', '1', '1', '1', '1', '1', '1', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '01:01', '01:01', '01:01', '01:01', '01:01', '01:01', '01:01', '1', '1', '1', '1', '1', '1', '1'),
(12, 30, '1', '1', '1', '1', '1', '1', '1', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '0001-01-01', '01:01', '01:01', '01:01', '01:01', '01:01', '01:01', '01:01', '1', '1', '1', '1', '1', '1', '1'),
(13, 31, '5', '5', '5', '5', '5', '5', '5', '0005-05-05', '0005-05-05', '0005-05-05', '0005-05-05', '0005-05-05', '0005-05-05', '0005-05-05', '05:05', '05:05', '05:05', '05:05', '05:05', '05:05', '05:05', '5', '5', '5', '5', '5', '5', '5'),
(14, 32, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 33, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `blood_gr` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `occ` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `email`, `address`, `pin`, `age`, `phone_no`, `blood_gr`, `sex`, `occ`, `dob`, `date`) VALUES
(24, 'Deepraj', 'deeprajchouhan761@gmail.com', '', '440013', '21', '', 'B-', 'Male', 'Developer', '1998-03-27', '2019-09-07 06:40:39'),
(25, 'Ashish Khandelwal', 'gskbloodbank@gmail.com', '', '440024', '42', '', 'O+', 'Male', 'doctor', '1977-07-28', '2019-09-07 07:33:28'),
(26, 'Gagana', 'gagna@g.co', '', '440013', '21', '', 'O+', 'Female', 'Student', '1999-04-21', '2019-09-07 09:01:33'),
(27, '', 'rohitpagote12@gmail.com', '', '', '', '', '', '', '', '', '2019-09-11 06:01:58'),
(28, 'K K K', 'rohitpagote12@gmail.com', '', '9854', '5', '', '', '', 'SD', '0687-03-12', '2019-09-11 06:35:13'),
(29, 'Rohit  Pagote', 'rohitpagote12@gmail.com', '', '440017', '19', '', 'on', 'Male', 'Student', '2018-09-12', '2019-09-11 06:38:58'),
(30, 'fghj fghjkl ghjk', 'rohitpagote12@gmail.com', 'fghjk', '9841', '5', '', 'on', 'Male', 'stunk', '6984-03-12', '2019-09-11 06:40:51'),
(31, 'a a a', 'rohitpagote12@gmail.com', 'fghjk', '987', '', '', '', '', '', '', '2019-09-11 06:44:39'),
(32, 'q q q', 'rohitpagote12@gmail.com', 'e', '1', '1', '', '', '', '1', '0011-11-11', '2019-09-11 07:23:49'),
(33, 'w w w', 'rohitpagote12@gmail.com', 'mm', '1', '1', '', '', '', '1', '0001-11-11', '2019-09-11 07:24:17'),
(34, 'm m m', 'rohitpagote12@gmail.com', 'm', '1', '1', '', '', '', '111', '0011-11-11', '2019-09-11 07:57:02'),
(35, 'm m m', 'rohitpagote12@gmail.com', 'm', '1', '1', '', '', '', '11', '0001-11-11', '2019-09-11 07:57:35'),
(36, 'm m m', 'rohitpagote12@gmail.com', 'm', '45', '45', '', '', '', '', '', '2019-09-11 09:12:12'),
(37, 'qer a a', 'rohitpagote12@gmail.com', 'kk', '78', '89', '', '', '', '', '', '2019-09-11 09:16:06'),
(38, 'm m m', 'rohitpagote12@gmail.com', 'm', '123654', '56', '', 'on', 'Female', 'sdfghj', '0654-03-12', '2019-09-11 10:00:52'),
(39, 'Deepraj  chouhan', 'poonamparate123@gmail.com', '456321', '789654', '23', '', 'on', 'Male', 'developer', '6544-03-12', '2019-09-12 07:27:29'),
(40, 'm m m', 'rohitpagote12@gmail.com', 'jhgfd', '440014', '55', '', '', '', '1254', '0011-11-11', '2019-09-12 07:31:44'),
(41, '  ', '', '', '', '', '', '', '', '', '', '2019-09-12 10:25:10'),
(42, '  ', '', '', '', '', '', '', '', '', '', '2019-09-12 10:37:50'),
(43, '  ', '', '', '', '', '', '', '', '', '', '2019-09-12 11:17:14'),
(44, '  ', '', '', '', '', '', '', '', '', '', '2019-09-13 05:16:39'),
(45, 'm m m', 'rohitpagote12@gmail.com', 'm', '440014', '55', '', 'on', 'Male', 'sdfg', '0011-11-11', '2019-09-13 11:37:11'),
(46, 'Rohit bbbb Parate', 'rohitpagote12@gmail.com', 'lnnn', '123654', '45', '', 'on', 'Female', '12', '1111-11-11', '2019-09-16 06:32:54'),
(47, 'Rohit D. Pagote', 'rohitpagote12@gmail.com', 'abc', '440017', '20', '', 'on', 'Male', 'student', '1999-09-12', '2019-09-16 06:36:05'),
(48, 'rohit D pagote', 'rohitpagote12@gmail.com', 'm', '456110', '45', '', 'A+', 'Male', '12', '65478-03-12', '2019-09-16 06:54:24'),
(49, 'm m m', 'poonamparate123@gmail.com', 'pooo', '123654', '19', '', 'A-', 'Female', '12', '0022-02-11', '2019-09-16 06:57:28'),
(50, 'Rohit Deepak Pagote', 'rohitpagote12@gmail.com', 'H.no 1433/1582,new mangalwari near shastri agarbatti factory,Binaki,Nagpur-17', '440017', '20', '', 'B+', 'Male', 'Student', '1999-09-12', '2019-10-10 11:20:10'),
(51, 'Rohit Deepak Pagote', 'rohitpagote12@gmail.com', 'H.no 1433/1582,new mangalwari near shastri agarbatti factory,Binaki,Nagpur-17', '440017', '20', '', 'B+', 'Male', 'student', '1999-09-12', '2019-10-10 11:26:55'),
(52, 'Rohit Deepak Pagote', 'rohitpagote12@gmail.com', 'H.no 1433/1582,new mangalwari near shastri agarbatti factory,Binaki,Nagpur-17', '440017', '20', '', 'B+', 'Male', 'Student', '1999-09-12', '2019-10-10 11:43:05'),
(53, 'Rohit Deepak Pagote', 'rohitp.cse@sbjit.edu.in', 'ABC', '440017', '20', '9075241833', 'B+', 'Male', 'Student', '1999-09-12', '2019-10-10 12:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_medical`
--

CREATE TABLE `user_medical` (
  `id` int(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `bp` varchar(255) NOT NULL,
  `hb` varchar(255) NOT NULL,
  `pulse` varchar(255) NOT NULL,
  `temp` varchar(255) NOT NULL,
  `resp` varchar(255) NOT NULL,
  `sys_exam` varchar(255) NOT NULL,
  `venipuncture` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_medical`
--

INSERT INTO `user_medical` (`id`, `weight`, `bp`, `hb`, `pulse`, `temp`, `resp`, `sys_exam`, `venipuncture`, `other`, `user_id`) VALUES
(23, '69', '71', '6.8', '80', '98', '22', 'yes', 'yes', 'nill', 24),
(24, '75', '130/86', '86', '78', '98.6', '18', 'NAD', 'Normal', 'Nil', 25),
(25, '68', '120/80', '13', '80', '98', '12', 'NAD', 'Normal', 'nil', 26),
(26, '', '', '', '', '', '', '', '', '', 27),
(27, '1', '2', '3', '4', '5', '6', 'fghj', 'ghjk', 'ghj', 28),
(28, '1', '2', '3', '4', '5', '6', 'nad', 'normal', 'nill', 29),
(29, '1', '2', '3', '4', '5', '6', 'nad', 'normal', 'nill', 30),
(30, '', '', '', '', '', '', '', '', '', 31),
(31, '', '', '', '', '', '', '', '', '', 32),
(32, '', '', '', '', '', '', '', '', '', 33),
(33, '', '', '', '', '', '', '', '', '', 34),
(34, '', '', '', '', '', '', '', '', '', 35),
(35, '', '', '', '', '', '', '', '', '', 36),
(36, '', '', '', '', '', '', '', '', '', 37),
(37, '2', '2', '2', '2', '2', '2', '2', '2', '2', 38),
(38, '78', '67', '67', '67', '6', '76', 'nil ', 'b=nad ', 'normal', 39),
(39, '1', '1', '1', '1', '1', '1', '1', '1', '1', 40),
(40, '', '', '', '', '', '', '', '', '', 41),
(41, '', '', '', '', '', '', '', '', '', 42),
(42, '', '', '', '', '', '', '', '', '', 43),
(43, '', '', '', '', '', '', '', '', '', 44),
(44, '22', '2', '2', '2', '2', '2', '2', '2', '2', 45),
(45, '55', '56 89', '568', '569', '569', '56', 'nad', 'nil', 'noraml', 46),
(46, '55', '31/12', '55', '44', '98', '40', 'NAD', 'Normal', 'Nil', 47),
(47, '12', '12/1', '2', '12', '1', '21', '2', '12', '1', 48),
(48, '45', '45/4', '4', '4', '4', '44', '4', '44', '4', 49),
(49, '1', '1/1', '1', '1', '1', '1', '1', '1', '1', 50),
(50, '5', '5/5', '5', '5', '5', '5', '5', '5', '5', 51),
(51, '1', '1/1', '1', '1', '1', '1', '1', '1', '1', 52),
(52, '55', '32/98', '56', '56', '56', '56', '56', '56', '56', 53);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_roll`
--
ALTER TABLE `db_roll`
  ADD PRIMARY KEY (`id_roll`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `post` (`post`);

--
-- Indexes for table `recipient_details`
--
ALTER TABLE `recipient_details`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `recipient_reqtable`
--
ALTER TABLE `recipient_reqtable`
  ADD PRIMARY KEY (`recipient_bbtable_id`),
  ADD KEY `rec_id` (`recipient_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_medical`
--
ALTER TABLE `user_medical`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_roll`
--
ALTER TABLE `db_roll`
  MODIFY `id_roll` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recipient_details`
--
ALTER TABLE `recipient_details`
  MODIFY `rec_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `recipient_reqtable`
--
ALTER TABLE `recipient_reqtable`
  MODIFY `recipient_bbtable_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user_medical`
--
ALTER TABLE `user_medical`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_user`
--
ALTER TABLE `db_user`
  ADD CONSTRAINT `db_user_ibfk_1` FOREIGN KEY (`post`) REFERENCES `db_roll` (`id_roll`);

--
-- Constraints for table `recipient_reqtable`
--
ALTER TABLE `recipient_reqtable`
  ADD CONSTRAINT `recipient_reqtable_ibfk_1` FOREIGN KEY (`recipient_id`) REFERENCES `recipient_details` (`rec_id`);

--
-- Constraints for table `user_medical`
--
ALTER TABLE `user_medical`
  ADD CONSTRAINT `user_medical_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
