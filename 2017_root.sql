-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 17-03-10 12:47
-- 서버 버전: 10.1.19-MariaDB
-- PHP 버전: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `2017_root`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board_free`
--

CREATE TABLE `board_free` (
  `b_no` int(10) UNSIGNED NOT NULL,
  `b_title` varchar(100) NOT NULL,
  `b_content` text NOT NULL,
  `b_date` datetime NOT NULL,
  `b_hit` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `b_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board_free`
--

INSERT INTO `board_free` (`b_no`, `b_title`, `b_content`, `b_date`, `b_hit`, `b_id`) VALUES
(42, '하하', '하하', '2017-02-27 06:50:55', 0, '으앍'),
(52, 'adsd', 'asfsdfsf              ', '2017-03-02 19:28:50', 0, '정승리'),
(53, '반갑습니다', '안녕하세요', '2017-03-02 20:09:25', 0, '정승리'),
(54, '양한님', '통뼈', '2017-03-03 01:31:42', 0, '정승리'),
(55, 'asdasd', 'asdsd', '2017-03-07 07:23:05', 0, '정승리');

-- --------------------------------------------------------

--
-- 테이블 구조 `log`
--

CREATE TABLE `log` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `log_answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `question`
--

CREATE TABLE `question` (
  `que_name` varchar(100) NOT NULL,
  `answer` text NOT NULL,
  `score` int(11) NOT NULL DEFAULT '300',
  `addta` int(11) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `question`
--

INSERT INTO `question` (`que_name`, `answer`, `score`, `addta`) VALUES
('Crypto1', 'MD5_d3crypt', 310, 10),
('Crypto2', 'This is Flag @_@', 310, 10),
('Crypto3', 'ASCII!', 310, 10),
('Crypto4', 'fun_crypto!', 310, 10),
('Forensic1', 'Have @ Nice DaY :)', 310, 10),
('Forensic2', 'Very_VEry_2Asy', 310, 10),
('Forensic3', 'im yours', 310, 10),
('Forensic4', '김일성경기장', 310, 10),
('MISC1', 'ZzangHacker_SeulGi', 310, 10),
('MISC2', '5earching_M3_!', 310, 10);

-- --------------------------------------------------------

--
-- 테이블 구조 `succ`
--

CREATE TABLE `succ` (
  `name` varchar(30) NOT NULL,
  `student_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `checkanswer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `user_imf`
--

CREATE TABLE `user_imf` (
  `email` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `student_number` varchar(8) NOT NULL,
  `name` varchar(10) NOT NULL,
  `major` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `user_imf`
--

INSERT INTO `user_imf` (`email`, `passwd`, `phone`, `student_number`, `name`, `major`) VALUES
('sodas789@naver.com', '4991338qw', '010-3334-5942', '30517', '정승리', '유비쿼터스');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board_free`
--
ALTER TABLE `board_free`
  ADD PRIMARY KEY (`b_no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board_free`
--
ALTER TABLE `board_free`
  MODIFY `b_no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
