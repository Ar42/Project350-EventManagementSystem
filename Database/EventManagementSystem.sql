-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 10:56 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE `cc` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `availibility` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `extra_facilities` varchar(255) NOT NULL,
  `avg_exp` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `pp1` varchar(255) NOT NULL,
  `pp2` varchar(255) NOT NULL,
  `pp3` varchar(255) NOT NULL,
  `pp4` varchar(255) NOT NULL,
  `pp5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cc`
--

INSERT INTO `cc` (`id`, `name`, `email`, `mobile`, `address`, `availibility`, `capacity`, `extra_facilities`, `avg_exp`, `pp`, `pp1`, `pp2`, `pp3`, `pp4`, `pp5`) VALUES
(1, '', '', '', '', '', 0, '', '', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png'),
(2, 'asdf', '', '', '', '', 0, '', '', 'upload/Screenshot (112).png', 'upload/Screenshot (112).png', 'upload/Screenshot (112).png', 'upload/Screenshot (112).png', 'upload/Screenshot (112).png', 'upload/Screenshot (112).png'),
(3, 'a', 'a@a', 'a', 'a', 'a', 0, '', '', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png'),
(4, 'aa', 'a2@W', '12', 'W', 'W', 0, 'W', '123', 'upload/DSC_0243-1.JPG', 'upload/DSC_0243-1.JPG', 'upload/DSC_0243-1.JPG', 'upload/DSC_0243-1.JPG', 'upload/DSC_0243-1.JPG', 'upload/DSC_0243-1.JPG'),
(5, 'Avanti', 'avnti@gmail.com', '01982334455', 'bidyamoyi school opposite', 'yes', 50, 'you acn celebrate parties', '300', 'upload/IMG_20180317_205859.jpg', 'upload/DSC_0241.JPG', 'upload/DSC_0241.JPG', 'upload/Screenshot_2018-12-30-19-12-04-489_com.miui.gallery.png', 'upload/Screenshot_2019-01-03-03-48-21-585_com.miui.gallery.png', 'upload/DSC_0239.JPG'),
(6, 'Arran', 'a@b', '01987112321', 'aknaknaknak', 'no', 90, 'none', '490/-', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205812.jpg', 'upload/Screenshot_2018-12-30-19-12-04-489_com.miui.gallery.png', 'upload/Screenshot_2019-01-03-03-48-21-585_com.miui.gallery.png', 'upload/IMG_gyhx2c.jpg'),
(7, 'a', 'a@a', 'a', 'Ganginarpar Road, Mymensingh', 'yes', 67, 'We arrange Parties Also', '300/-', 'upload/Screenshot (118).png', 'upload/Screenshot (118).png', 'upload/Screenshot (107).png', 'upload/Screenshot (115).png', 'upload/Screenshot (118).png', 'upload/Screenshot (121).png'),
(8, 'CfC', 'cfc_official@gmail.com', '01987238819', 'Ganginarpar Road, Mymensingh', 'yes', 60, 'none', '200/-', 'upload/Screenshot (112).png', 'upload/Screenshot (113).png', 'upload/Screenshot (118).png', 'upload/Screenshot (119).png', 'upload/Screenshot (112).png', 'upload/Screenshot (113).png'),
(9, 'KFC', 'KFC@gmail.com', '01978223452', 'Ganginarpar Road, Mymensingh', 'No', 35, 'None', '240/-', 'upload/Screenshot (118).png', 'upload/Screenshot (107).png', 'upload/Screenshot (114).png', 'upload/Screenshot (114).png', 'upload/Screenshot (121).png', 'upload/Screenshot (115).png'),
(10, 'SpiceClub', 'SpiceClub@yahoo.com', '017331287300', 'C.K. Ghosh Road, Mymensingh.', 'yes', 70, 'We provide services for birthday parties and rag days also', '250/-', 'upload/download (7).jpg', 'upload/download (4).jpg', 'upload/download (2).jpg', 'upload/download (3).jpg', 'upload/download (5).jpg', 'upload/download (6).jpg'),
(11, 'Sarinda', 'Sarinda@gmail.com', '01651998091', 'C.K. Ghosh Road, Mymensingh', 'yes', 60, 'We arrange parties also', '200/-', 'upload/Screenshot (118).png', 'upload/Screenshot (109).png', 'upload/Screenshot (119).png', 'upload/Screenshot (122).png', 'upload/Screenshot (107).png', 'upload/Screenshot (114).png'),
(13, 'RFC', 'rfc_official@gmail.com', '01923198110', 'Natun Bazar Road, Mymensingh.', 'YES', 20, 'None', '130/-', 'upload/download (2).jpg', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `di` varchar(255) NOT NULL,
  `accessories` varchar(255) NOT NULL,
  `earlier_works` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `pp0` varchar(255) NOT NULL,
  `pp1` varchar(255) NOT NULL,
  `pp2` varchar(255) NOT NULL,
  `pp3` varchar(255) NOT NULL,
  `pp4` varchar(255) NOT NULL,
  `pp5` varchar(255) NOT NULL,
  `pp6` varchar(255) NOT NULL,
  `pp7` varchar(255) NOT NULL,
  `pp8` varchar(255) NOT NULL,
  `pp9` varchar(255) NOT NULL,
  `pp10` varchar(255) NOT NULL,
  `pp11` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`id`, `username`, `age`, `mobile`, `email`, `address`, `experience`, `di`, `accessories`, `earlier_works`, `pp`, `pp0`, `pp1`, `pp2`, `pp3`, `pp4`, `pp5`, `pp6`, `pp7`, `pp8`, `pp9`, `pp10`, `pp11`) VALUES
(1, 'a', 0, '', '', '', '', '', '', '', 'upload/DSC_0239.JPG', 'upload/', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG', 'upload/DSC_0239.JPG'),
(2, 'aa', 0, '', '', '', '', '', '', '', 'upload/IMG_20180317_205859.jpg', 'upload/', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg'),
(3, 'viper', 0, '', '', '', '', '', '', '', 'upload/IMG_20180317_205621.jpg', 'upload/', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg', 'upload/IMG_20180317_205621.jpg'),
(4, 'Syed Rafid', 23, '01872881020', 'Boyan@yahoo.com', 'Mymensingh', 'Modeling Photography', 'Canon-80D', 'prime lense', 'supa', 'upload/download (7).jpg', 'upload/download (7).jpg', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/'),
(5, 'Mr_Jax', 27, '01544673890', 'Mr_Jax@gmail.com', 'Dhaka', 'Wild Life Photography', 'Canon-90D', 'None', 'None', 'upload/download (7).jpg', 'upload/download (5).jpg', 'upload/download (2).jpg', 'upload/download (1).jpg', 'upload/download (3).jpg', 'upload/download (6).jpg', 'upload/images (3).jpg', 'upload/download.jpg', 'upload/images (1).jpg', 'upload/download (2).jpg', 'upload/download (5).jpg', 'upload/download (4).jpg', 'upload/images (2).jpg'),
(6, 'SpiceClub', 12, '1', '1@s', '1', '1', '11', '1', '1', 'upload/download (4).jpg', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/', 'upload/');

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `di` varchar(255) NOT NULL,
  `accessories` varchar(255) NOT NULL,
  `earlier_works` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photography`
--

INSERT INTO `photography` (`id`, `username`, `age`, `mobile`, `email`, `address`, `experience`, `di`, `accessories`, `earlier_works`, `pp`) VALUES
(1, '', 0, '', '', '', '', '', '', '', 'upload/e3.jpg'),
(2, '', 0, '', '', '', '', 'aa', '', '', 'upload/e2.jpg'),
(3, 'Mystic', 1, '11', 'a@b', 'aa', 'aa', 'aa', 'aa', 'aaaaaaaaaa', 'upload/bg1.jpg'),
(6, 'Ar Nob', 22, '019292992992', 'a@n', 'ss', 's', 's', 's', 's', 'upload/DSC_0002.JPG'),
(8, '', 0, '', '', '', '', '', '', '', 'upload/Screenshot (111).png'),
(9, 'aaa', 0, 'aaa', 'a@a', 'a', 'a', 'a', 'a', 'a', 'upload/IMG_20180317_205621.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `password`, `cpassword`) VALUES
(1, 'viper', '$2y$10$FBmubeV5KL7KiCBCg34/Vuox1pwkYZdhN6pypAd0XggV.ynLdR3A6', '$2y$10$25LxZ1TMxxUvncm/pxXTmep8DllyBEXOYPXKjvcEZ3jKl1jaeQtLC'),
(2, 'venom', '$2y$10$N0cFqEUOVXk8tFB3a.qMauQWgTdlfnizknOzD6IZBokqkxbJDf5Ku', '$2y$10$X1i8oeBFuwxI3uXyUjFlJuSfyJlnVkG7A5ogZSYQnqu6ceaQGIgCG'),
(3, 'boyan', '$2y$10$QIrFb5cmlxMUwJtg6xFYmuVwZQEu7hmlElGSY4b5gBhnFvSfmItGm', '$2y$10$93cqNVSIH4t79uvNytXztepXgHF0JW29BXM.wOtbQTXSuT8bSlQK2'),
(4, 'ar', '$2y$10$.m4x8caLJ050XotWXFqVr.WX1hEc4ls6qBkaXO9I5mfKdl1c3lWZu', '$2y$10$cWr4ryiquE5hATC69EYud.eKcU3U.CJx.K1/4N/bnTnmaqdCZmrpy'),
(5, 'koko', '$2y$10$Q3IH5qBBHdOV8S5Xtgh4vekqJ1vWegccduy5f5x5gIMYbhudRDs4q', '$2y$10$FWe5WytItE7G8p.lPbmBxe8QKf2FqOe35PK3sOex8TCzcsxIwdPcG'),
(6, 'SpiceClub', '$2y$10$QLCFSIVcUg.CLl9CW5nJOOTALcU67UIM/UL/RQHXw03aaTkzVxyAC', '$2y$10$hzzCavDXUDaySt/j6afBo.zL79IwLA7ZdzlAHodvHfZeadeYr./5e'),
(7, 'Sarinda', '$2y$10$aPwIV/bxbcxpfvo9k0qQe.kEEZRfcsCWO8wu0xrog.uRKbUfDTFiu', '$2y$10$T4J/2NGX4T7oxIPlwK.AfuVpjApq9/qRgiAr5N2Jt/IUNobuQ9WE6'),
(8, 'Syed Rafid', '$2y$10$gjT0csJxsOBKfnweNajBwOGG2Gf2VXm2/nUobuap4Q.Yt/prCnxdG', '$2y$10$hwOkBOAMoA97QelrUOLPeetZJCZVFO5Zj5CFePvg9A879vx0mdIS2'),
(9, 'Circuit House', '$2y$10$6OrhO4aY80xgWeWTqjuEYuXviTH9CA7X9W2Hn75iRBvnz.Bj1DLsG', '$2y$10$zk8XZWMgdN1VG3AvGqR6AO0BDeYPFJWW2eh6OG.ZmGq1DVYEdbmxq'),
(10, 'Mr_Jax', '$2y$10$AKOulhHcCKR1h6qUyHWwye609EEyy9l3ijUQwtpJ3395iJUvZ8hzq', '$2y$10$qrvkYdGUjznNiFn.boz7xeMTJt57pGdc7y2U5BC8H2YOUMA7T8ihq'),
(11, 'RFC', '$2y$10$TVuxI8ul48fWBQt.NqzP0ug2ZPE9I/xuE0WVkBFtp1A8UublCFGC6', '$2y$10$ba7EW1suj7onDav5iiovkeXPaekXHALWH.S5dk8ttccNa6iOOsv/W');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `availibility` varchar(255) NOT NULL,
  `offers` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `pp1` varchar(255) NOT NULL,
  `pp2` varchar(255) NOT NULL,
  `pp3` varchar(255) NOT NULL,
  `pp4` varchar(255) NOT NULL,
  `pp5` varchar(255) NOT NULL,
  `pp6` varchar(255) NOT NULL,
  `pp7` varchar(255) NOT NULL,
  `pp8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `email`, `mobile`, `address`, `availibility`, `offers`, `capacity`, `pp`, `pp1`, `pp2`, `pp3`, `pp4`, `pp5`, `pp6`, `pp7`, `pp8`) VALUES
(1, 'aaa', '', '', '', '', '', 0, 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png', 'upload/Screenshot (108).png'),
(2, 'qqq', 'qqq@a', 'qqq', 'q', 'q', '', 0, 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png', 'upload/Screenshot (109).png'),
(3, 'aa', 'a@s', '11', 'aa', 'a', 'aaa', 0, 'upload/DSC_0241.JPG', 'upload/DSC_0241.JPG', 'upload/DSC_0241.JPG', 'upload/DSC_0241.JPG', 'upload/DSC_0241.JPG', 'upload/DSC_0241.JPG', 'upload/DSC_0241.JPG', 'upload/DSC_0241.JPG', 'upload/DSC_0241.JPG'),
(4, 'SpiceClub', 'SpiceclubRestaurant@gmail.com', '01341908871', 'C.K. Ghosh Road Mymensingh', 'Yes', '5%off', 40, 'upload/download (2).jpg', 'upload/download (3).jpg', 'upload/download.jpg', 'upload/images (1).jpg', 'upload/talha.jpg', 'upload/download.jpg', 'upload/download (4).jpg', 'upload/download (1).jpg', 'upload/download (7).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `availibility` varchar(255) NOT NULL,
  `avg_exp` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `pp1` varchar(255) NOT NULL,
  `pp2` varchar(255) NOT NULL,
  `pp3` varchar(255) NOT NULL,
  `pp4` varchar(255) NOT NULL,
  `pp5` varchar(255) NOT NULL,
  `pp6` varchar(255) NOT NULL,
  `pp7` varchar(255) NOT NULL,
  `pp8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id`, `name`, `email`, `mobile`, `address`, `availibility`, `avg_exp`, `capacity`, `pp`, `pp1`, `pp2`, `pp3`, `pp4`, `pp5`, `pp6`, `pp7`, `pp8`) VALUES
(1, 'qqq', '', '', '', '', '', 0, 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg', 'upload/IMG_20180317_205859.jpg'),
(2, 'a', '11@a', '11', '111', '11', '1', 1, 'upload/Screenshot (118).png', 'upload/Screenshot (115).png', 'upload/Screenshot (119).png', 'upload/Screenshot (110).png', 'upload/Screenshot (112).png', 'upload/Screenshot (107).png', 'upload/Screenshot (122).png', 'upload/Screenshot (115).png', 'upload/Screenshot (118).png'),
(3, 'Circuit House', 'Circuit_House@yahoo.com', '01552989878', 'Town Hall, Mymensingh.', 'No', 'No Idea approximated ', 130, 'upload/s9.jpg', 'upload/s1.jpg', 'upload/s7.jpg', 'upload/s2.jpg', 'upload/s6.jpg', 'upload/s3.jpg', 'upload/s8.jpg', 'upload/s4.jpg', 'upload/s5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cc`
--
ALTER TABLE `cc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photography`
--
ALTER TABLE `photography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cc`
--
ALTER TABLE `cc`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photography`
--
ALTER TABLE `photography`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
