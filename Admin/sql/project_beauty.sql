-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 24-06-24 07:35
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
-- 테이블 구조 `admin_account`
--

CREATE TABLE `admin_account` (
  `Num` int(11) NOT NULL,
  `Admin_ID` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `Admin_PW` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='관리자계졍';

--
-- 테이블의 덤프 데이터 `admin_account`
--

INSERT INTO `admin_account` (`Num`, `Admin_ID`, `Admin_PW`) VALUES
(1, 'admin', '$2y$10$daXheUb6wJfGTOjnuCicxOXLpwHuUbeRooiZl3QMfstqouiAH62Ji');

-- --------------------------------------------------------

--
-- 테이블 구조 `class_list`
--

CREATE TABLE `class_list` (
  `Num` int(11) NOT NULL,
  `className` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `classSub` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `classThumbnail` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `classStartDate` date DEFAULT NULL,
  `classEndDate` date DEFAULT NULL,
  `classExpose` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='강의목록';

-- --------------------------------------------------------

--
-- 테이블 구조 `contest_list`
--

CREATE TABLE `contest_list` (
  `Num` int(11) NOT NULL,
  `contestName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `contestSub` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `contestImg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `contestExpose` int(11) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `popup_list`
--

CREATE TABLE `popup_list` (
  `Num` int(11) NOT NULL,
  `popup_Title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `popup_Link` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `popup_Img` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `popupStart_Date` date DEFAULT NULL,
  `popupEnd_Date` date DEFAULT NULL,
  `popup_Show` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `popup_list`
--

INSERT INTO `popup_list` (`Num`, `popup_Title`, `popup_Link`, `popup_Img`, `popupStart_Date`, `popupEnd_Date`, `popup_Show`) VALUES
(0, '첫팝업', '', 'popupSample3.png', '2024-05-09', '2024-05-31', 1);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`Num`),
  ADD KEY `Num` (`Num`);

--
-- 테이블의 인덱스 `class_list`
--
ALTER TABLE `class_list`
  ADD PRIMARY KEY (`Num`),
  ADD KEY `className` (`className`);

--
-- 테이블의 인덱스 `contest_list`
--
ALTER TABLE `contest_list`
  ADD PRIMARY KEY (`Num`);

--
-- 테이블의 인덱스 `popup_list`
--
ALTER TABLE `popup_list`
  ADD PRIMARY KEY (`Num`) USING BTREE;

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `Num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `class_list`
--
ALTER TABLE `class_list`
  MODIFY `Num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 테이블의 AUTO_INCREMENT `contest_list`
--
ALTER TABLE `contest_list`
  MODIFY `Num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
