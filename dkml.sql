-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2015 at 10:09 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dkml`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ajinkya', '1a81a0cb7e373cf17827b2fccc57a99b'),
(2, 'jainam', '6b175ebafc1a3fc8da8456430e09ac33'),
(3, 'kushal', '6ec44a1207a3d9506418c034679087b6');

-- --------------------------------------------------------

--
-- Table structure for table `broadcast`
--

CREATE TABLE IF NOT EXISTS `broadcast` (
  `time` varchar(40) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `broadcast`
--

INSERT INTO `broadcast` (`time`, `id`, `name`, `text`) VALUES
('2014:12:02 18:09:32', 4, '', 'good night everyone'),
('2014:12:02 18:40:01', 4, '', 'new one'),
('2014:12:02 20:10:26', 4, '', 'it works. chill guys. '),
('2014:12:02 20:12:35', 4, '', 'ashish here'),
('2014:12:02 20:12:48', 2, '', 'saswata here'),
('2014:12:03 03:39:46', 6, '', 'Good Morning students'),
('2014:12:03 03:54:15', 6, '', 'Good morning again!!!'),
('2014:12:03 03:54:54', 2, '', 'READY FOR THE PRESENTATION?'),
('2014:12:03 04:38:01', 4, '', 'project time'),
('2014:12:03 06:11:23', 4, '', 'heLLO EVERYONE'),
('2015:03:08 18:30:31', 4, '', 'tyrtyrty');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `studid` int(100) NOT NULL,
  `teacherid` int(100) NOT NULL,
  `q1` int(11) DEFAULT '3',
  `q2` int(11) DEFAULT '3',
  `q3` int(11) DEFAULT '3',
  `q4` int(11) DEFAULT '3',
  `q5` int(11) DEFAULT '3',
  `q6` int(11) DEFAULT '3',
  `q7` int(11) DEFAULT '3',
  `q8` int(11) DEFAULT '3',
  `q9` int(11) DEFAULT '3',
  `q10` int(11) DEFAULT '3',
  `q11` int(11) DEFAULT '3',
  `q12` int(11) DEFAULT '3',
  `q13` int(11) DEFAULT '3',
  `q14` int(11) DEFAULT '3',
  `q15` int(11) DEFAULT '3',
  `comment` varchar(100) NOT NULL DEFAULT 'NO COMMENTS',
  `reply` varchar(100) NOT NULL,
  `replyornot` int(11) NOT NULL DEFAULT '0',
  `anonymous` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`date`, `studid`, `teacherid`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `comment`, `reply`, `replyornot`, `anonymous`) VALUES
('2014-12-01 11:53:20', 14, 6, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'good man', 'Thank you!!', 0, 1),
('2014-12-02 17:42:05', 19, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'good', '', 0, 0),
('2014-12-02 20:35:54', 19, 6, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '', '', 0, 0),
('2014-12-02 21:40:22', 25, 4, 4, 2, 5, 2, 5, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'good conceptual understanding.', '', 0, 0),
('2014-12-03 00:55:12', 19, 6, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '', '', 0, 1),
('2014-12-03 00:56:58', 19, 6, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '', '', 0, 1),
('2014-12-03 02:06:47', 19, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '', '', 0, 1),
('2014-12-03 02:54:49', 19, 6, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '', '', 0, 1),
('2014-12-03 08:28:36', 19, 2, 4, 2, 5, 2, 4, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'Thank you for the time sir...', '', 0, 0),
('2014-12-03 08:56:20', 27, 4, 3, 4, 3, 2, 3, 3, 4, 3, 5, 3, 3, 3, 4, 3, 2, 'clarity of concepts', 'THANKS', 0, 0),
('2014-12-03 10:39:15', 19, 6, 3, 5, 2, 4, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'HELLO PROF', '', 0, 0),
('2014-12-03 10:39:42', 19, 10, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'GOOD', '', 0, 1),
('2014-12-03 23:20:49', 29, 9, 1, 5, 2, 2, 1, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `rollno` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `question` varchar(40) NOT NULL,
  `answer` varchar(40) NOT NULL,
  `abuse` int(11) DEFAULT '0',
  `logintime` varchar(40) NOT NULL DEFAULT '00:00:00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `rollno`, `password`, `question`, `answer`, `abuse`, `logintime`) VALUES
(5, 'dhruva', 130101046, '10df32ee3509ec6024bb8260472e267e', 'q1', 'dhruv', 0, '2014-12-02 21:36:04'),
(6, 'test123456', 130101034, 'c06db68e819be6ec3d26c6038d8e8d1f', 'q1', 'test12345', 0, '2014-12-02 21:36:04'),
(7, 'rajat', 130123049, '32434a5b6bc28eca937e5e36dc0f22ac', 'q1', 'rajat', 0, '2014-12-02 21:36:04'),
(8, 'test', 130101034, 'c06db68e819be6ec3d26c6038d8e8d1f', 'q1', 'testagain', 0, '2014-12-02 21:36:04'),
(9, 'sdsdfsdfsdf', 2147483647, 'b857eed5c9405c1f2b98048aae506792', 'q1', '44444', 0, '2014-12-02 21:36:04'),
(10, 'dfgdfgdfgdfg', 0, '45dd9abbacf37b2049c446fc6186e27d', 'q1', 'dfgdfg', 0, '2014-12-02 21:36:04'),
(11, 'saurabh', 130123035, '1e118a664688626d40464e20f9fb7f45', 'q2', 'saswata', 0, '2014-12-02 21:36:04'),
(12, 'jhjkde', 0, '149a47d5eb84af5027d7f7096d01ff58', 'q1', 'kushal', 0, '2014-12-02 21:36:04'),
(13, 'gkjejk', 0, '149a47d5eb84af5027d7f7096d01ff58', 'q1', 'kudsh', 0, '2014-12-02 21:36:04'),
(14, 'jainam2', 13012354, 'd27d320c27c3033b7883347d8beca317', 'q1', 'jainam2', 0, '2014-12-02 21:36:04'),
(15, 'jainam3', 2147483647, 'bae5e3208a3c700e3db642b6631e95b9', 'q1', 'jainam', 0, '2014-12-02 21:36:04'),
(16, 'jainam4', 234234, 'f638f4354ff089323d1a5f78fd8f63ca', 'q1', 'jainam4', 0, '2014-12-02 21:36:04'),
(19, 'jainam', 130101025, '6b175ebafc1a3fc8da8456430e09ac33', 'q1', 'jainam', 0, '2015:03:23 09:57:40'),
(25, 'ram', 130101046, '311cd7834804c9154789dc4adc344c62', 'q1', 'ram', 1, '2014:12:03 03:54:59'),
(27, 'ajinkya', 130101004, '5f4dcc3b5aa765d61d8327deb882cf99', 'q3', 'Allahabad', 1, '2014:12:03 04:38:09'),
(28, 'kushal', 130101056, '149a47d5eb84af5027d7f7096d01ff58', 'q1', 'kushal', 0, '2014:12:03 04:24:25'),
(29, 'piyush', 130108012, '25d55ad283aa400af464c76d713c07ad', 'q4', 'qwerty', 0, '2015:03:08 18:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacherid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `new` int(11) NOT NULL DEFAULT '0',
  `theoryorlab` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`teacherid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherid`, `name`, `username`, `password`, `course`, `new`, `theoryorlab`) VALUES
(1, 'Santosh Biswas', 'santosh', '587c57365b54e8283fd6b1ac24acf29d', 'CS221-Digital Design', 0, 1),
(2, 'Saswata Shannigrahi', 'saswata', '0e8e15e3280a33e835f3cf0546b4f8b3', 'CS201-Data Structures', 0, 1),
(3, 'Hemangee Kapoor', 'hemangee', '7020ad5dfd81229d5898ad2943d765c2', 'CS221-Digital Design', 0, 1),
(4, 'Ashish Anand', 'ashish', '7b69ad8a8999d4ca7c42b8a729fb0ffd', 'CS202-Discrete Mathematics', 0, 1),
(5, 'G. Sajith', 'sajith', 'cc6896d13649ecb838250295766dfe04', 'CS202-Discrete Mathematics', 0, 1),
(6, 'Pratyoosh Kumar', 'pratyoosh', '062b8e0fe3fb05560a4c3b85e7857e60', 'MA201-Mathematics III', 0, 1),
(7, 'Swaroop Nandan Bora', 'swaroop', '00a4454af95a28e8a23f1f30e60893a4', 'MA201-Mathematics III', 0, 1),
(8, 'Jitendra Swain', 'jitendra', 'ff997e9777bf64e396c52c99e834603d', 'MA201-Mathematics III', 0, 1),
(9, 'Rajen Kumar Sinha', 'rajen', '2f0515a08adcb1abd5818f6cb4916dc1', 'MA201-Mathematics III', 0, 1),
(10, 'Rashmi Dutta Baruah', 'rashmi', '0ce4ff80e8a029c19abaa08a2019a980', 'CS210-Data Structures Lab', 0, 1),
(11, 'Arnab Sarkar', 'arnab', 'bf9ea75bd1d06d64c834e63a7e1ef0cf', 'CS210-Data Structures Lab', 0, 1),
(19, 'Kushal Chawla', 'kushal', '6ec44a1207a3d9506418c034679087b6', 'Algorithm', 1, 1),
(20, 'Ajinkya', 'ajinkya', '1a81a0cb7e373cf17827b2fccc57a99b', 'Algorithm', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
