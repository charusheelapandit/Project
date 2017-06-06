-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 07:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jansevadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bachat_gat_info`
--

CREATE TABLE `bachat_gat_info` (
  `sr_no` int(11) NOT NULL,
  `bg_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bachat_gat_info`
--

INSERT INTO `bachat_gat_info` (`sr_no`, `bg_id`, `name`) VALUES
(3, 1, 'bachat gat 1'),
(4, 2, 'bachat gat 2');

-- --------------------------------------------------------

--
-- Table structure for table `loan-mem`
--

CREATE TABLE `loan-mem` (
  `lm_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `loan_from(bg_id)` int(11) NOT NULL,
  `loan_amount` int(11) NOT NULL,
  `reason` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Sr` int(11) NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '12345'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Sr`, `username`, `password`) VALUES
(1, 'test1', '12345'),
(2, 'test2', '12345'),
(3, 'test3', '12345'),
(4, 'test4', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE `member_info` (
  `m_id` int(11) NOT NULL,
  `fname` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` int(12) NOT NULL,
  `mob_no` int(12) NOT NULL,
  `bg_id` int(11) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `maritial_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `pan_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `adar_no` int(20) NOT NULL,
  `vote_id` tinyint(1) NOT NULL,
  `pan` tinyint(1) NOT NULL,
  `gov_id` tinyint(1) NOT NULL,
  `driving_lic` tinyint(1) NOT NULL,
  `emp_id` tinyint(1) NOT NULL,
  `gram_id` tinyint(1) NOT NULL,
  `sal_slip` tinyint(1) NOT NULL,
  `in_tax` tinyint(1) NOT NULL,
  `hou_tax` tinyint(1) NOT NULL,
  `ele_bill` tinyint(1) NOT NULL,
  `bank_state` tinyint(1) NOT NULL,
  `emp_letter` tinyint(1) NOT NULL,
  `adar_card` tinyint(1) NOT NULL,
  `salaried` tinyint(1) NOT NULL,
  `self_emp` tinyint(1) NOT NULL,
  `business` tinyint(1) NOT NULL,
  `student` tinyint(1) NOT NULL,
  `retired` tinyint(1) NOT NULL,
  `agri` tinyint(1) NOT NULL,
  `other` tinyint(1) NOT NULL,
  `nom_fname` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nom_mname` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nom_lname` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `rel_nom` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nom_add` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mem_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_info`
--

INSERT INTO `member_info` (`m_id`, `fname`, `mname`, `lname`, `gender`, `address`, `contact_no`, `mob_no`, `bg_id`, `scheme_id`, `date`, `amount_paid`, `maritial_status`, `dob`, `pan_no`, `adar_no`, `vote_id`, `pan`, `gov_id`, `driving_lic`, `emp_id`, `gram_id`, `sal_slip`, `in_tax`, `hou_tax`, `ele_bill`, `bank_state`, `emp_letter`, `adar_card`, `salaried`, `self_emp`, `business`, `student`, `retired`, `agri`, `other`, `nom_fname`, `nom_mname`, `nom_lname`, `rel_nom`, `nom_add`, `mem_status`) VALUES
(5, '', '', 'Patil', '', '', 0, 0, 0, 2, '0000-00-00', 0, '', '0000-00-00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', 0),
(10, '', '', 'Raskar', '', '', 0, 0, 0, 3, '0000-00-00', 0, '', '0000-00-00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member_owner`
--

CREATE TABLE `member_owner` (
  `m_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_owner`
--

INSERT INTO `member_owner` (`m_id`, `owner_id`) VALUES
(1, 2),
(1, 2),
(2, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `member_scheme`
--

CREATE TABLE `member_scheme` (
  `id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `scheme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_scheme`
--

INSERT INTO `member_scheme` (`id`, `m_id`, `scheme`) VALUES
(1, 5, 2),
(2, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `scheme_id` int(11) NOT NULL,
  `scheme_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `amount` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`scheme_id`, `scheme_name`, `duration`, `amount`) VALUES
(1, 'Scheme 1', 5, 100),
(2, 'Scheme 2', 5, 500),
(3, 'Scheme 3', 5, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `scheme_amount`
--

CREATE TABLE `scheme_amount` (
  `id` int(11) NOT NULL,
  `scheme` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `share_ID` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `scheme_ID` int(11) NOT NULL,
  `receipt_no` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `share_amount` int(11) NOT NULL,
  `date` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rem_share_amount` int(11) NOT NULL,
  `rem_penalty_amount` int(11) NOT NULL,
  `amt_paid_sofar` int(11) DEFAULT NULL,
  `month` int(3) DEFAULT NULL,
  `penalty_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`share_ID`, `m_id`, `scheme_ID`, `receipt_no`, `share_amount`, `date`, `rem_share_amount`, `rem_penalty_amount`, `amt_paid_sofar`, `month`, `penalty_amount`) VALUES
(33, 5, 2, '10', 100, '1994', 400, 400, 100, NULL, NULL),
(34, 5, 2, '20', 200, '1994', 700, 700, 300, NULL, NULL),
(35, 10, 3, '123', 500, '1993', 500, 500, 500, NULL, NULL),
(36, 10, 3, '124', 200, '1993', 1300, 1300, 700, NULL, NULL),
(37, 5, 2, '701', 500, '1987', 2200, 850, 800, NULL, NULL),
(38, 5, 2, '702', 500, '1987', 7500, 1200, 1300, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bachat_gat_info`
--
ALTER TABLE `bachat_gat_info`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `sr_no` (`sr_no`),
  ADD KEY `bg_id` (`bg_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `member_info`
--
ALTER TABLE `member_info`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `member_owner`
--
ALTER TABLE `member_owner`
  ADD KEY `m_id` (`m_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `member_scheme`
--
ALTER TABLE `member_scheme`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scheme` (`scheme`);

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`scheme_id`);

--
-- Indexes for table `scheme_amount`
--
ALTER TABLE `scheme_amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`share_ID`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `m_id_2` (`m_id`),
  ADD KEY `scheme_ID` (`scheme_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bachat_gat_info`
--
ALTER TABLE `bachat_gat_info`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member_scheme`
--
ALTER TABLE `member_scheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `scheme_amount`
--
ALTER TABLE `scheme_amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `share_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `member_scheme`
--
ALTER TABLE `member_scheme`
  ADD CONSTRAINT `member_scheme_ibfk_1` FOREIGN KEY (`scheme`) REFERENCES `scheme` (`scheme_id`);

--
-- Constraints for table `share`
--
ALTER TABLE `share`
  ADD CONSTRAINT `share_ibfk_1` FOREIGN KEY (`scheme_ID`) REFERENCES `scheme` (`scheme_id`),
  ADD CONSTRAINT `share_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `member_info` (`m_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
