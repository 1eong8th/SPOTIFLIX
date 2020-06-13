-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 05:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sususu`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `Son_Id` varchar(10) NOT NULL,
  `Son_Name` varchar(40) DEFAULT NULL,
  `Son_Year` year(4) DEFAULT NULL,
  `Son_Lyric` varchar(1000) DEFAULT NULL,
  `Son_Long` time DEFAULT NULL,
  `Son_Address` varchar(100) DEFAULT NULL,
  `sing_id` varchar(10) DEFAULT NULL,
  `Acc_Email` varchar(40) NOT NULL,
  `Son_Pic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`Son_Pic`) VALUES
('https://img.mymusic.net.tw/mms/album/L/190/55190.jpg'),
('https://i.kfs.io/album/global/310226,0v1/fit/500x500.jpg'),
('https://i.kfs.io/album/global/6542696,1v1/fit/500x500.jpg'),
('https://i.kfs.io/album/tw/2527177,0v1/fit/500x500.jpg'),
('https://data.17jita.com/attachment/portal/201903/04/143759y946stvttwvvqtdp.jpg'),
('https://c-sf.smule.com/sf/s66/arr/0c/ac/c502b66b-83b8-4110-ba34-f75e9aa4a79a_512.jpg'),
('https://i1.sndcdn.com/artworks-000280071455-0mxjld-t500x500.jpg'),
('https://5b0988e595225.cdn.sohucs.com/images/20171102/bd46341f25c34f02af189cc7cf5bcded.jpeg'),
('https://i.ytimg.com/vi/BVpXUyXPKOg/hqdefault.jpg'),
('https://lastfm-img2.akamaized.net/i/u/300x300/d8a1602c6e25414d977e7ae8397e2c6f.png'),
('https://img.mymusic.net.tw/mms/album/L/342/342.jpg'),
('https://www.am1470.com/data/activities/1512363328-3.jpg'),
('https://i.kfs.io/album/global/11203226,2v1/fit/500x500.jpg'),
('https://dingyue.ws.126.net/2019/10/16/164c823b1ba742c3acf1485d8a0ecdce.jpeg'),
('https://i.kfs.io/album/global/31807520,0v1/fit/500x500.jpg'),
('https://i.ytimg.com/vi/8QxQeCNl2zo/hqdefault.jpg'),
('https://img.mymusic.net.tw/mms/album/L/410/277410.jpg'),
('https://www.jgospel.net/jgospel_media/120508/.jpg'),
('https://img.mymusic.net.tw/mms/album/L/288/540288.jpg'),
('https://i.ytimg.com/vi/sHNy8muYwdU/maxresdefault.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`Son_Id`),
  ADD KEY `sing_id` (`sing_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`sing_id`) REFERENCES `singer` (`sin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
