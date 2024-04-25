-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-04-18 08:06
-- 서버 버전: 10.4.28-MariaDB
-- PHP 버전: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `project_beauty`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `class_list`
--

CREATE TABLE `class_list` (
  `Num` int(11) NOT NULL,
  `className` varchar(30) NOT NULL,
  `classSub` varchar(100) DEFAULT NULL,
  `classThumbnail` varchar(300) DEFAULT NULL,
  `classStartDate` date DEFAULT NULL,
  `classEndDate` date DEFAULT NULL,
  `classExpose` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='강의목록';

--
-- 테이블의 덤프 데이터 `class_list`
--

INSERT INTO `class_list` (`Num`, `className`, `classSub`, `classThumbnail`, `classStartDate`, `classEndDate`, `classExpose`) VALUES
(1, '미용기초', '기초반', NULL, '2024-04-18', '2024-06-18', 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `class_list`
--
ALTER TABLE `class_list`
  ADD PRIMARY KEY (`Num`),
  ADD KEY `className` (`className`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `class_list`
--
ALTER TABLE `class_list`
  MODIFY `Num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
