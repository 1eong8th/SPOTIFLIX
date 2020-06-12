-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-06-11 17:29:02
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `sususu`
--

-- --------------------------------------------------------

--
-- 資料表結構 `movie_actor`
--

CREATE TABLE `movie_actor` (
  `actor_id` varchar(10) NOT NULL,
  `actor_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `movie_actor`
--

INSERT INTO `movie_actor` (`actor_id`, `actor_name`) VALUES
('A000000001', 'Taissa Farmiga'),
('A000000002', 'Vera Ann Farmiga'),
('A000000003', 'Patrick Joseph Wilson'),
('A000000004', 'Annabelle Frances Wallis'),
('A000000005', 'Talitha Eliana Bateman'),
('A000000006', 'Liam John Neeson'),
('A000000007', 'Jesse Adam Eisenberg'),
('A000000008', '柳承龍'),
('A000000009', 'Rebel Melanie Elizabeth Wilson'),
('A000000010', '二階堂富美');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `movie_actor`
--
ALTER TABLE `movie_actor`
  ADD PRIMARY KEY (`actor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
