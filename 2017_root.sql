-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 17-03-16 15:31
-- 서버 버전: 10.1.16-MariaDB
-- PHP 버전: 5.6.24

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
(53, '반갑습니다', '안녕하세요 ', '2017-03-02 20:09:25', 0, '정승리'),
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

--
-- 테이블의 덤프 데이터 `log`
--

INSERT INTO `log` (`id`, `name`, `time`, `log_answer`) VALUES
('30517', '정승리', '2017-03-13 10:05:44', '5earching_M3_!'),
('10101', '정짱맨', '2017-03-13 10:08:16', '5earching_M3_!'),
('10101', '정짱맨', '2017-03-13 10:18:19', '5earching_M3_!'),
('10101', '정짱맨', '2017-03-13 10:18:27', '5earching_M3_!'),
('30517', '정승리', '2017-03-13 10:19:55', '5earching_M3_!'),
('10101', '정짱맨', '2017-03-13 10:20:31', '5earching_M3_!'),
('30517', '정승리', '2017-03-13 10:26:12', '5earching_M3_!'),
('10101', '정짱맨', '2017-03-13 10:29:38', '5earching_M3_!'),
('30517', '정승리', '2017-03-13 10:42:20', '5earching_M3_!'),
('30517', '정승리', '2017-03-13 10:42:36', '5earching_M3_!'),
('10101', '정짱맨', '2017-03-13 10:43:24', '5earching_M3_!'),
('30517', '정승리', '2017-03-15 07:01:44', 'MD5_d3crypt'),
('10101', '정짱맨', '2017-03-15 07:02:36', 'This is Flag @_@'),
('10101', '정짱맨', '2017-03-15 07:09:14', 'MD5_d3crypt'),
('30517', '정승리', '2017-03-15 07:09:36', 'This is Flag @_@');

-- --------------------------------------------------------

--
-- 테이블 구조 `question`
--

CREATE TABLE `question` (
  `que_name` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL,
  `answer` text NOT NULL,
  `score` int(11) NOT NULL DEFAULT '300'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `question`
--

INSERT INTO `question` (`que_name`, `category`, `answer`, `score`) VALUES
('What_is_it', 'Crypto', 'MD5_d3crypt', 240),
('베이비64', 'Crypto', 'This is Flag @_@', 240);

-- --------------------------------------------------------

--
-- 테이블 구조 `sub_string`
--

CREATE TABLE `sub_string` (
  `idx` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `string` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `sub_string`
--

INSERT INTO `sub_string` (`idx`, `name`, `string`) VALUES
(54, '정승리', 'ad'),
(54, '정승리', 'asdsad');

-- --------------------------------------------------------

--
-- 테이블 구조 `succ`
--

CREATE TABLE `succ` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `checkanswer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `succ`
--

INSERT INTO `succ` (`name`, `email`, `student_id`, `score`, `checkanswer`) VALUES
('정짱맨', 'poptsa@naver.com', 10101, 540, ',베이비64,What_is_it'),
('정승리', 'sodas789@naver.com', 30517, 540, ',What_is_it,베이비64');

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
('sodas789@naver.com', '4991338qw', '010-3334-5942', '30517', '정승리', '유비쿼터스'),
('poptsa@naver.com', '4991338qw', '010-2202-7474', '10101', '정짱맨', '유비쿼터스'),
('root@gmail.com', 'root', '010-1231-1232', '12232', '황주', '유비쿼터스');

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
