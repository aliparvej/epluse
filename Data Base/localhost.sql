-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2020 at 06:23 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epulseline`
--
CREATE DATABASE `epulseline` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `epulseline`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admid`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `ansid` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) NOT NULL,
  `patid` int(11) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`ansid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`ansid`, `qid`, `patid`, `answer`, `date`) VALUES
(1, 1, 1, '', '2019-08-10'),
(2, 1, 1, '', '2019-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE IF NOT EXISTS `tbl_appointment` (
  `appid` int(11) NOT NULL AUTO_INCREMENT,
  `docid` int(11) NOT NULL,
  `patid` int(11) NOT NULL,
  `doa` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appid`, `docid`, `patid`, `doa`, `status`, `date`) VALUES
(1, 1, 1, '1200-12-12', 'N', '2019-08-03'),
(2, 4, 1, '5555-02-05', 'Y', '2019-08-03'),
(3, 3, 1, '2001-10-12', 'Y', '2019-08-04'),
(4, 1, 1, '2019-12-10', 'Y', '2019-08-04'),
(5, 1, 1, '2019-08-21', 'Y', '2019-08-08'),
(6, 1, 3, '', 'Y', '2019-08-08'),
(7, 3, 3, '2019-08-19', 'Y', '2019-08-08'),
(8, 5, 3, '2019-08-11', 'Y', '2019-08-08'),
(9, 4, 3, '2019-08-28', 'Y', '2019-08-08'),
(10, 3, 3, '2019-08-09', 'Y', '2019-08-08'),
(11, 2, 3, '2019-08-13', 'Y', '2019-08-08'),
(12, 6, 3, '2019-08-21', 'Y', '2019-08-08'),
(13, 2, 1, '2019-08-13', 'Y', '2019-08-08'),
(14, 2, 2, '', 'Y', '2019-08-09'),
(15, 4, 1, '2019-08-13', 'Y', '2019-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `conid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `massage` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`conid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`conid`, `name`, `email`, `mobile`, `massage`, `date`) VALUES
(1, 'manish', 'manish60638@gmail.com', '78945622', 'Hello', '2019-08-09'),
(2, 'manish', 'manish60638@gmail.com', '7388305101', ' Kaise ho', '2019-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE IF NOT EXISTS `tbl_doctor` (
  `docid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `fees` varchar(10) NOT NULL,
  `timing` varchar(10) NOT NULL,
  `speciality` varchar(60) NOT NULL,
  `address` varchar(150) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`docid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`docid`, `name`, `fname`, `gender`, `email`, `password`, `mobile`, `fees`, `timing`, `speciality`, `address`, `filename`, `date`) VALUES
(1, 'Mahendra ', 'Mahendra bhandari', 'male', 'mahendra@gmail.com', '123', '7388305101', '2500', '2pm', 'Physican', 'only on home', 'Bhandari_Mahendra_6529.jpg', '2019-08-04 02:39:18'),
(2, 'Dr. P.C. Reddy', 'fname', 'male', 'reddy@gmail.com', '1234', '788305101', '2500', '1pm', 'Surgan', ' home', 'dr.pcreddy.png', '2019-08-04 02:40:30'),
(3, 'Dr. Naresh', 'fname', 'male', 'naresh@gmail.com', '234', '7388305101', '3000', '3pm', 'Eye specilisit', 'home', 'drnaresh.jpg', '2019-08-04 02:41:33'),
(4, 'Dr. Ashok Johari', 'fname', 'male', 'johari@gmail.com', '456', '7388305101', '3000', '5pm', 'Neuro Surgan', ' home', 'Ashok N. Johari.png', '2019-08-04 02:43:03'),
(5, 'Dr. K.K. Handa', 'fname', 'male', 'handa@gmail.com', '852', '7388305101', '3200', '10am', 'Ortho Peditaion', ' home', 'K.K. Handa.jpg', '2019-08-04 02:44:24'),
(6, 'Dr. D KK.', 'fname', 'male', 'dk@gm', '456', '738830510', '2600', '9am', 'Physican', ' home', 'D.K Gupta.png', '2019-08-04 02:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feedid` int(11) NOT NULL AUTO_INCREMENT,
  `patid` int(10) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`feedid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedid`, `patid`, `feedback`, `date`) VALUES
(1, 1, 'Wow nice one!', '2019-08-04'),
(2, 1, 'Good job.', '2019-08-04'),
(3, 1, 'This is very good site.', '2019-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE IF NOT EXISTS `tbl_patient` (
  `patid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` varchar(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`patid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`patid`, `name`, `fname`, `gender`, `age`, `email`, `password`, `mobile`, `address`, `pincode`, `date`) VALUES
(1, 'rohan', 'father', 'male', '20', 'ram@gmail.com', '321', '7388305101', 'home', '223562', '2019-08-01 13:25:52'),
(2, 'shyam', 'f', '', '', '', '', '', ' ', '', '2019-08-01 13:26:06'),
(3, 'shyam', 'fname', 'male', '20', 'shyam@gmail.com', '142', '1222121212', 'At home', '233655', '2019-08-01 13:26:43'),
(4, 'mohan', 'fname', 'male', '12', 'mohan@gmail.com', '1233', '12321', ' home', '1234565', '2019-08-02 13:45:26'),
(5, 'Lav Yadav', '', '', '', 'lavyadav@gmail.com', '', '7905912409', ' lahiuwefh vuhwr wpuf wiu udh wru.aidhs iuweh diuh rehas uahivd auglef .', '', '2019-08-07 13:21:46'),
(6, 'manish', '', '', '', 'manish60638@gmail.com', '', '7388305101', ' hello', '', '2019-08-09 14:29:27'),
(7, 'Parvej Ali', 'C.S.E 3rd year', 'male', '18', '', '', '5555555555555', ' 3dsvvvvv', '3223232', '2020-09-03 00:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE IF NOT EXISTS `tbl_question` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `patid` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`qid`, `patid`, `question`, `date`) VALUES
(1, 1, 'who are you?', '2019-08-09');
