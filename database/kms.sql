-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 04:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kms`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `title`, `message`, `date`, `user_id`) VALUES
(24, 'selam', 'demo demo', '2021-08-20 09:18:06', 42),
(25, 'Demo Feedback', 'demo', '2021-08-22 08:33:05', 48);

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` int(11) NOT NULL,
  `custom_id` varchar(100) NOT NULL DEFAULT 'KMSH/',
  `recordOfficerId` int(11) NOT NULL,
  `username` varchar(99) NOT NULL,
  `houseType` varchar(100) NOT NULL,
  `houseNumber` int(11) NOT NULL,
  `woreda` varchar(99) NOT NULL,
  `kebele` varchar(30) NOT NULL,
  `numberOfFamily` int(11) NOT NULL,
  `housePart` int(11) NOT NULL,
  `kareMeter` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'active',
  `registerDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `custom_id`, `recordOfficerId`, `username`, `houseType`, `houseNumber`, `woreda`, `kebele`, `numberOfFamily`, `housePart`, `kareMeter`, `status`, `registerDate`) VALUES
(4, 'KMSH/', 43, 'mulu12', 'የግል', 344, '1', '1', 10, 10, '4', 'active', '2021-08-20 09:29:34'),
(5, 'KMSH/', 16, 'mulu12', 'የግል', 3, '1', '1', 10, 10, '10', 'active', '2021-08-21 20:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `id_card`
--

CREATE TABLE `id_card` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `custom_id` varchar(50) NOT NULL DEFAULT 'KMSR/',
  `issue_date` date NOT NULL DEFAULT current_timestamp(),
  `expired_date` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `give_user_id` int(11) NOT NULL,
  `id_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `id_card`
--

INSERT INTO `id_card` (`id`, `user_id`, `custom_id`, `issue_date`, `expired_date`, `status`, `give_user_id`, `id_image`) VALUES
(23, 13, 'KMSR/', '2021-08-20', '2021-08-25', 'active', 2, 'c.JPG'),
(24, 15, 'KMSR/', '2021-08-22', '2021-08-17', 'active', 2, 'avd.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `request_id_card`
--

CREATE TABLE `request_id_card` (
  `id` int(11) NOT NULL,
  `resident_username` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_id_card`
--

INSERT INTO `request_id_card` (`id`, `resident_username`, `title`, `description`, `date`, `status`, `message`) VALUES
(4, 'mulu12', 'ጉዳዮ መታውቂያ  ስልመጥየቅ ይሆናል', 'renewal Id Card', '2021-08-20', 'pending', 'hey'),
(5, 'ayele', 'ጉዳዮ መታውቂያ  ስልመጥየቅ ይሆናል', 'New Id Card', '2021-08-22', 'pending', 'sene na');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `id` int(11) NOT NULL,
  `custom_id` varchar(100) NOT NULL DEFAULT 'KMSR/',
  `residentUsername` varchar(30) NOT NULL,
  `recordOfficerId` int(11) NOT NULL,
  `userPhoto` varchar(255) NOT NULL,
  `firstName` varchar(99) NOT NULL,
  `nationality` varchar(99) NOT NULL,
  `woreda` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `kebele` varchar(10) NOT NULL,
  `birthDate` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `houseNumber` int(11) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `motherFullName` varchar(200) NOT NULL,
  `fatherFullName` varchar(200) NOT NULL,
  `levelOfEducation` varchar(200) NOT NULL,
  `profession` varchar(200) NOT NULL,
  `maritalStatus` varchar(200) NOT NULL,
  `emergencyFamilyName` varchar(200) NOT NULL,
  `emergencyFamilyNumber` int(11) NOT NULL,
  `city` varchar(200) NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(55) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`id`, `custom_id`, `residentUsername`, `recordOfficerId`, `userPhoto`, `firstName`, `nationality`, `woreda`, `region`, `kebele`, `birthDate`, `gender`, `houseNumber`, `phoneNumber`, `motherFullName`, `fatherFullName`, `levelOfEducation`, `profession`, `maritalStatus`, `emergencyFamilyName`, `emergencyFamilyNumber`, `city`, `createdDate`, `status`) VALUES
(14, 'KMSR/', 'mulu12', 16, '19-SEO-tips-to-double-search-traffic-.jpg', 'Mulu Temsesgen Aynalem', 'Ethiopia', 'wereda 8', 'Addis Abeba', '03', '2021-08-05', 'male', 56, 911309125, 'abel berhanu', 'abel berhanu', 'Elementary', 'Programmer', 'Unmarried', 'abel berha', 911309125, 'bekur subcity', '2021-08-21 19:47:10', 'active'),
(15, 'KMSR/', 'elsa12', 7, 'collabration.png', 'Elsa Berhanu Akirso', 'Ethiopia', 'wereda 8', 'Addis Abeba', '03', '1990-08-03', 'male', 67, 911309125, 'abel berhanu', 'abel berhanu', 'Elementary', 'Programmer', 'Unmarried', 'abel berhanu', 911309125, 'bekur subcity', '2021-08-22 07:50:55', 'active'),
(16, 'KMSR/', 'azalech', 7, 'avd.PNG', 'Azalech Woldemariyam Tezera', 'Ethiopia', '1', 'Addis Abeba', '1', '2021-08-04', 'male', 34, 911309125, 'abel berhanu', 'abel berhanu', 'Elementary', 'Programmer', 'Unmarried', 'abel berha', 911309125, 'bekur subcity', '2021-08-22 08:10:08', 'active'),
(17, 'KMSR/', 'tesema', 7, 'code.PNG', 'tesema Woldemariyam Tezera', 'Ethiopia', '1', 'Addis Abeba', '1', '2021-08-04', 'male', 34, 911309125, 'abel berhanu', 'abel berhanu', 'Elementary', 'Programmer', 'Unmarried', 'abel berha', 911309125, 'bekur subcity', '2021-08-22 08:10:18', 'active'),
(18, 'KMSR/', 'ayele', 7, 'code.PNG', 'ayele Woldemariyam Tezera', 'Ethiopia', '1', 'Addis Abeba', '1', '2021-08-04', 'male', 34, 911309125, 'abel berhanu', 'abel berhanu', 'Junior Secondary', 'Programmer', 'Married', 'abel berha', 911309125, 'bekur subcity', '2021-08-22 08:10:33', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `transform_list`
--

CREATE TABLE `transform_list` (
  `id` int(11) NOT NULL,
  `resident_username` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `transformKebel` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'off',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transform_list`
--

INSERT INTO `transform_list` (`id`, `resident_username`, `title`, `description`, `transformKebel`, `status`, `date`) VALUES
(10, 'mulu12', 'ጉዳዮ መሽኛ ስልመጥየቅ ይሆናል', 'be himem mikinyatt sefer meker felge neber ena tebaberugnbe himem mikinyatt sefer meker felge neber ena tebaberugnbe himem mikinyatt sefer meker felge neber ena tebaberugnbe himem mikinyatt sefer meker felge neber ena tebaberugnbe himem mikinyatt sefer meker felge neber ena tebaberugn', 'Kebel Four', 'accepted', '2021-08-20 09:26:24'),
(11, 'ayele', 'ጉዳዮ መሽኛ ስልመጥየቅ ይሆናል', 'melkek felge neber', 'Kebel nine', 'pending', '2021-08-22 08:31:40');

-- --------------------------------------------------------
--
-- Table structure for table `birthregistration`
--

CREATE TABLE IF NOT EXISTS `birthregistration` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `constant` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `date_of_birth` datetime NOT NULL DEFAULT current_timestamp(),
  `Place_of_birth` varchar(100) NOT NULL,
  `zone` varchar(100) NOT NULL,
  `wereda` varchar(100) NOT NULL,
  `kebele` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `motherfullname` varchar(100) NOT NULL,
  `mothercitzn` varchar(100) NOT NULL,
  `fatherfulnam` varchar(100) NOT NULL,
  `fatherctznship` varchar(100) NOT NULL,
  `child_photo` varchar(100) NOT NULL,
  `custom_id` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100001 ;

--
-- Dumping data for table `birthregistration`
--

INSERT INTO `birthregistration` (`id`, `custom_id`, `constant`, `fullname`, `sex`, `date_of_birth`, `Place_of_birth`, `zone`, `wereda`, `kebele`, `nationality`, `motherfullname`, `mothercitzn`, `fatherfulnam`, `fatherctznship`, `child_photo`, `date`) VALUES
(100000,'KMRS/4/5', 12321, 'haben awta chew', 'male', '12/2/2009', 'shbrera', 'south wollo', 'kombolcha', 1, 'ethiopian', 'zufan kahsay aznagn', 'ethiop', 'awtachew deg', 'ethiopian', 'chil.jpg', '2017-06-06');

-- --------------------------------------------------------
--
-- Table structure for table `deathregistration`
--
CREATE TABLE IF NOT EXISTS `deathregistration` (
  `death_id` int(100) NOT NULL AUTO_INCREMENT,
  `constant` int(100) NOT NULL,
  `birthid` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `zon` varchar(100) NOT NULL,
  `wereda` varchar(100) NOT NULL,
  `kebele` int(100) NOT NULL,
  `age` int(100) NOT NULL,
  `titile_name` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `case_of_death` varchar(100) NOT NULL,
  `place_of_death` varchar(100) NOT NULL,
  `dethdate` varchar(100) NOT NULL,
  `rfullname` varchar(100) NOT NULL,
  `recregion` varchar(100) NOT NULL,
  `reczone` varchar(100) NOT NULL,
  `recwereda` varchar(100) NOT NULL,
  `reckebele` int(100) NOT NULL,
  `recphone` int(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`death_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100006 ;

--
-- Dumping data for table `deathregistration`
--
INSERT INTO `deathregistration` (`death_id`, `constant`, `birthid`, `fname`, `sex`, `zon`, `wereda`, `kebele`, `age`, `titile_name`, `citizenship`, `case_of_death`, `place_of_death`, `dethdate`, `date`) VALUES
(100000, 12321, 245, 'charless', 'male', 'south', 'kombolcha', 2, '12/7/2017', 'shambel', 'ethio', 'car', 'kombo', '2/3/2008', '2017-06-13');

-- --------------------------------------------------------
--
-- Table structure for table `new`
--

CREATE TABLE IF NOT EXISTS `new` (
  `NewsId` varchar(15) DEFAULT NULL,
  `Subject` varchar(15) DEFAULT NULL,
  `NewsContent` varchar(50) DEFAULT NULL,
  `TimesOfSent` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `new` (`NewsId`, `Subject`, `NewsContent`, `TimesOfSent`) VALUES
('12', 'About Sanitatio', 'There is sanitation program on tomorrow', '');

-- --------------------------------------------------------
--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `custom_id` varchar(200) NOT NULL,
  `fullName` varchar(140) NOT NULL,
  `phoneNumber` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `nationality` varchar(99) NOT NULL,
  `woreda` varchar(99) NOT NULL,
  `kebele` varchar(99) NOT NULL,
  `role` varchar(99) NOT NULL,
  `jobLocation` varchar(100) NOT NULL,
  `userPhoto` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `custom_id`, `fullName`, `phoneNumber`, `age`, `nationality`, `woreda`, `kebele`, `role`, `jobLocation`, `userPhoto`, `username`, `password`, `date`, `status`) VALUES
(2, 'KMSE/', 'abebe berhanu', '0911309125', 34, 'Ethiopia', 'wereda 8', '03 ', 'chairMan', 'Kebel One', 'avatar.png', 'abel', 'a6cd39ee5b1d8276f6bc716b3f7881b7', '2021-06-28 19:10:28', 'active'),
(4, 'KMSE/', 'Ashenafi Tewelde General', '0911309125', 50, 'Ethiopia', 'wereda 8', '09 ', 'systemadministrator', 'Kebel One', '404 error.PNG', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2021-06-30 11:47:20', 'active'),
(7, 'KMSE/', 'Elsa Berhanu Akirso', '094562174', 50, 'Ethiopia', 'woreda 12', '24', 'recordOfficer', 'Kebel nine', 'quiz.PNG', 'record', 'de17f0f24b49f8364187891f8550ffbb', '2021-06-30 16:16:53', 'active'),
(42, 'KMSR/', 'Mulu Temsesgen Aynalem', '0911309125', 34, 'Ethiopia', '1', '1', 'resident', 'Kebel Three', '2059316224mulu12.png', 'mulu12', '83ea320ba57309f60570177a292a5066', '2021-08-20 09:17:06', 'active'),
(43, 'KMSE/', 'Record Two', '0911309125', 34, 'Ethiopia', '1', '1', 'recordOfficer', 'Kebel Four', '102224623record12.jpg', 'record12', 'e131daf79bd50716b74fa250baec63c5', '2021-08-20 09:19:26', 'active'),
(44, 'KMSE/', 'Selam Tefera', '0911309125', 12, 'Ethiopia', '1', '1', 'recordOfficer', 'Kebel One', '689375124selam1.png', 'selam1', 'ea28414aff1cf6ad599ad74dc7c14599', '2021-08-22 07:48:40', 'active'),
(45, 'KMSR/', 'Elsa Berhanu Akirso', '0911309125', 34, 'Ethiopia', '1', '1', 'resident', 'Kebel One', '2057869724elsa12.jfif', 'elsa12', 'bdfd25f523f7c07a101c7e1d8a84e9ef', '2021-08-22 07:49:34', 'active'),
(46, 'KMSR/', 'Azalech Woldemariyam Tezera', '0966527596', 345656, 'Ethiopia', '1', '1', 'resident', 'Kebel One', '1648003271azalech.png', 'azalech', '5a7a278d910b178baa08f8b15bc4a5ef', '2021-08-22 08:06:58', 'active'),
(47, 'KMSR/', 'tesema Woldemariyam Tezera', '0966527596', 345656, 'Ethiopia', '1', '1', 'resident', 'Kebel One', '851719613tesema.png', 'tesema', '117f971a42cc5ae64303202adefa8cb2', '2021-08-22 08:07:38', 'active'),
(48, 'KMSR/', 'ayele Woldemariyam Tezera', '0966527596', 345656, 'Ethiopia', '1', '1', 'resident', 'Kebel One', '1999133512ayele.png', 'ayele', '58202679591c0864fb693acc8535a659', '2021-08-22 08:07:57', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_card`
--
ALTER TABLE `id_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_id_card`
--
ALTER TABLE `request_id_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transform_list`
--
ALTER TABLE `transform_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `id_card`
--
ALTER TABLE `id_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `request_id_card`
--
ALTER TABLE `request_id_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transform_list`
--
ALTER TABLE `transform_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
