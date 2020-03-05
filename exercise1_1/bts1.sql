-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-03-04 13:08:31
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `bts1`
--

-- --------------------------------------------------------

--
-- 表的结构 `bts_group`
--

CREATE TABLE `bts_group` (
  `Img` varchar(100) NOT NULL,
  `Name` text NOT NULL,
  `Birthday` date NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `bts_group`
--

INSERT INTO `bts_group` (`Img`, `Name`, `Birthday`, `Description`) VALUES
('images/1.jpg', 'BTS', '2013-06-13', 'Team work make dream work'),
('images/2.jpg', 'Jin', '1992-12-04', 'The most handsome man in the group.'),
('images/3.jpg', 'J-hope', '1994-02-18', 'The main dancer that hoping to bring hope to people.'),
('images/4.jpg', 'V', '1995-12-30', 'Good at singing and belong in vocal line in the group.'),
('images/5.jpg', 'Jung Kook', '1997-09-01', 'He is the youngest member of the team, also a very attractive member, is recognized as ACE.'),
('images/6.jpg', 'SUGA', '1993-03-09', 'A very powerful rapper, once an underground rapper.'),
('images/7.jpg', 'RM', '1994-09-12', 'Leader of BTS, my favorite member.'),
('images/8.jpg', 'Jimin', '1995-10-13', 'He is a crucial dancer with high-pitched voice in the group.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
