-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2016 at 07:40 PM
-- Server version: 5.6.28-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `church_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `pass_recovery` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `status` varchar(10) NOT NULL,
  `is_delete` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_on` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`, `pass_recovery`, `phone`, `email`, `status`, `is_delete`, `is_active`, `created_on`) VALUES
(1, 'phish', 'admin', 'chrrZ9D1JaWqs', 'admin', '0272781696', 'asamoah@phish.com', '1', 0, 1, '2016-05-22 00:39:41'),
(4, 'EMMANUEL BOAT', 'fish', 'chnFz11Xi..Lg', 'boating', '0245621365', 'boatinc14@yahoo.com', '1', 0, 1, '2016-05-30 09:28:20'),
(5, 'PERRY', 'perry', 'ch53CSy.KwAA2', 'perry', '0245632145', 'terrhayes@gmail.com', '2', 0, 1, '2016-05-30 11:44:33'),
(6, 'JESUS CHRIST', 'admin_Jesus', 'chojYUlfh3SyM', 'Jesus_is_Lord', '1000000000', 'christ@heaven.com', '1', 0, 1, '2016-05-30 16:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
`album_id` int(5) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(80) NOT NULL,
  `is_delete` int(1) NOT NULL,
  `created_on` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `title`, `description`, `is_delete`, `created_on`) VALUES
(1, 'Football', 'This is the football competition held on May 18, 2016', 0, '2016-05-21 14:34:28'),
(2, 'Volley Ball', 'The is a volley ball game during socialising', 0, '2016-05-21 15:02:16'),
(3, 'Movies', 'This is a snapshot of all videoes ', 0, '2016-05-21 15:53:33'),
(4, 'Congress', 'The Binniel Congress held always at the Chapel ', 0, '2016-05-21 21:47:00'),
(5, 'Conference', 'This is an Annual programme held to bring people together', 0, '2016-05-21 21:47:51'),
(6, 'Service', 'This is an Album of pic taken during normal service\r\n', 0, '2016-05-21 21:48:33'),
(7, 'reDesign', 'this is a design', 0, '2016-05-30 03:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`gallery_id` int(5) NOT NULL,
  `image` varchar(50) NOT NULL,
  `album_id` varchar(5) DEFAULT NULL,
  `is_delete` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_on` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `image`, `album_id`, `is_delete`, `is_active`, `created_on`) VALUES
(1, 'mathsmagic.jpg', '1', 0, 1, '2016-05-21 15:00:16'),
(2, '0-1-2014 - 1.jpg', '1', 0, 1, '2016-05-21 15:00:36'),
(3, 'sate.jpg', '1', 0, 1, '2016-05-21 15:01:28'),
(4, 'think.jpg', '1', 0, 1, '2016-05-21 15:01:28'),
(5, '1+1.jpg', '2', 0, 1, '2016-05-21 15:02:45'),
(6, '2014 - 1.jpg', '2', 0, 1, '2016-05-21 15:50:06'),
(7, 'pi.jpg', '2', 0, 1, '2016-05-21 15:50:06'),
(8, 'mime.jpg', '2', 0, 1, '2016-05-21 15:50:06'),
(9, 'jedi.jpg', '2', 0, 1, '2016-05-21 15:50:06'),
(10, 'hi.jpg', '1', 0, 1, '2016-05-21 15:51:28'),
(11, 'hi22.jpg', '1', 0, 1, '2016-05-21 15:51:28'),
(12, 'shot0004.png', '3', 0, 1, '2016-05-21 15:54:07'),
(13, 'shot0003.png', '3', 0, 1, '2016-05-21 15:54:07'),
(14, 'shot0002.png', '3', 0, 1, '2016-05-21 15:54:07'),
(15, 'new nay.png', '5', 1, 1, '2016-05-29 12:18:39'),
(16, 'unnamed6.jpg', '6', 0, 1, '2016-05-29 12:19:33'),
(17, 'Bodom1.jpg', '5', 0, 1, '2016-05-29 12:21:32'),
(18, 'djabaw1.jpg', '5', 0, 1, '2016-05-29 12:21:32'),
(19, 'images (16).jpg', '5', 0, 1, '2016-05-29 12:21:32'),
(20, 'beeds.jpg', '4', 0, 1, '2016-05-29 12:22:54'),
(21, 'images_(16).jpg', '3', 0, 1, '2016-05-29 12:27:05'),
(22, 'adinkra.jpg', '6', 0, 1, '2016-05-29 12:28:06'),
(23, 'yaa_asent.jpg', '5', 0, 1, '2016-05-29 12:31:21'),
(24, 'hand_beed.jpg', '5', 0, 1, '2016-05-29 12:32:12'),
(25, 'more_bbeeds.jpg', '5', 0, 1, '2016-05-29 12:32:12'),
(26, 'think.jpg', '5', 0, 1, '2016-05-30 04:03:49'),
(27, 'sate', '4', 1, 1, '2016-05-30 04:08:55'),
(28, 'sate', '4', 1, 1, '2016-05-30 04:09:42'),
(29, 'picture_4.png', '2', 0, 1, '2016-05-30 04:10:00'),
(30, '1+1.jpg', '5', 0, 1, '2016-05-30 04:11:59'),
(31, 'webcam-toy-photo2.jpg', '5', 0, 1, '2016-05-30 04:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`msg_id` int(5) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(400) NOT NULL,
  `created_on` varchar(30) NOT NULL,
  `is_delete` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `sender`, `email`, `phone`, `message`, `created_on`, `is_delete`) VALUES
(1, 'KWAME ASAMOAH', 'kboat14@outlook.com', '0272781696', 'i''m the programmer and i''m testing my code', '2016-05-28 23:16:32', 0),
(2, 'KWAME ASAMOAH', 'kboat14@outlook.com', '0272781696', 'i''m the programmer and i''m testing my code', '2016-05-28 23:17:16', 0),
(3, 'KWAME ASAMOAH', 'kboat14@outlook.com', '0272781696', 'i''m the programmer and i''m testing my code', '2016-05-28 23:17:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prayer`
--

CREATE TABLE IF NOT EXISTS `prayer` (
`pry_id` int(5) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `created_on` varchar(30) NOT NULL,
  `is_delete` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prayer`
--

INSERT INTO `prayer` (`pry_id`, `sender`, `email`, `phone`, `title`, `message`, `created_on`, `is_delete`) VALUES
(1, 'ASAMOAH', 'boatinc14@out.com', '0215785412', 'exams', 'i want you to help me pray concerning my upcoming exams', '2016-05-30 10:46:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
`prog_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `leader` varchar(70) NOT NULL,
  `description` varchar(400) NOT NULL,
  `location` varchar(50) NOT NULL,
  `created_on` varchar(30) NOT NULL,
  `date_of_event` varchar(30) NOT NULL,
  `time_of_event` varchar(30) NOT NULL,
  `is_delete` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`prog_id`, `name`, `leader`, `description`, `location`, `created_on`, `date_of_event`, `time_of_event`, `is_delete`) VALUES
(1, 'ENCOUNTER WITH SAM', 'Rev. Perry', 'An Open Heaven Event, you can''t miss it', 'Old Laundry', '2016-05-22 12:30:28', '2016-05-31', '06:55', 0),
(2, 'FIRST ALL-NIGHT', 'Papa Sam', 'The first all night programme of the semester', 'Queens Hall', '2016-05-22 13:37:59', '2016-06-08', '17:17', 0),
(3, 'CONFESSSION', 'DR. ASAMOAH', 'An understanding of the need for confessions', 'Queen Hall', '2016-05-28 17:46:50', '2016-05-25', '05:20', 0),
(4, 'OPEN HEAVENS', 'RGC', ' A time of praise, worship and adoration', 'Old Laundry', '2016-05-30 04:27:27', '2016-06-04', '17:30', 0),
(5, 'DFD', 'DFD', 'dfd', 'Dfd', '2016-06-07 16:04:08', '2016-06-08', '17:07', 0),
(6, 'PRAISES', 'RGC', 'praiese', 'Church', '2016-06-10 14:33:56', '2016-06-12', '14:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `spotlight`
--

CREATE TABLE IF NOT EXISTS `spotlight` (
`spot_id` int(5) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_delete` int(1) NOT NULL,
  `created_on` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spotlight`
--

INSERT INTO `spotlight` (`spot_id`, `title`, `image`, `description`, `is_active`, `is_delete`, `created_on`) VALUES
(1, 'Geek', 'geek-optometrist.png', 'the geek stuff', 1, 0, '2016-05-20 19:22:19'),
(2, 'Try', '1-1-2014 - 1.jpg', 'try your hands on this', 1, 0, '2016-05-20 19:34:51'),
(3, 'Desktop', 'ghpAVSu.jpg', 'this is a cool pic for me desktop', 1, 0, '2016-05-21 10:17:05'),
(4, 'Start', '14 - 1.jpg', 'This is a funny Star Wars animation', 1, 0, '2016-05-21 10:28:13'),
(5, 'Interesting', 'funn.jpg', 'An intersting Farmer', 1, 0, '2016-05-21 10:32:42'),
(6, 'Coder', 'programmer jokes.jpg', 'Only a coder will understand', 1, 0, '2016-05-21 13:14:59'),
(7, 'Trigonometry', 'trigonometry.jpg', 'this is a trigonometry equation for u to solve', 1, 0, '2016-05-21 13:35:00'),
(8, 'Test Rum', 'shot0002.png', 'this is a run on the new system', 1, 0, '2016-05-30 03:28:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
 ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `prayer`
--
ALTER TABLE `prayer`
 ADD PRIMARY KEY (`pry_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
 ADD PRIMARY KEY (`prog_id`);

--
-- Indexes for table `spotlight`
--
ALTER TABLE `spotlight`
 ADD PRIMARY KEY (`spot_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
MODIFY `album_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `gallery_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `msg_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `prayer`
--
ALTER TABLE `prayer`
MODIFY `pry_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
MODIFY `prog_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `spotlight`
--
ALTER TABLE `spotlight`
MODIFY `spot_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
