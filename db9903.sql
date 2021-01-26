-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-01-26 08:40:10
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db9903`
--

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` int(3) UNSIGNED NOT NULL,
  `year` int(4) UNSIGNED NOT NULL,
  `month` int(2) UNSIGNED NOT NULL,
  `day` int(2) UNSIGNED NOT NULL,
  `ondate` date DEFAULT NULL,
  `publish` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `rank` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `movie`
--

INSERT INTO `movie` (`id`, `name`, `level`, `length`, `year`, `month`, `day`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `sh`, `rank`) VALUES
(1, '院線片1', '輔導級', 100, 2021, 3, 6, '2021-03-06', '院線片1的發行商', '院線片1的導演', '03B01.mp4', '03B01.png', '院線片1 的劇情介紹院線片1 的劇情介紹院線片1 的劇情介紹院線片1 的劇情介紹院線片1 的劇情介紹院線片1 的劇情介紹院線片1 的劇情介紹院線片1 的劇情介紹院線片1 的劇情介紹院線片1 的劇情介紹', 1, 1),
(2, '院線片2', '保護級', 100, 2021, 3, 7, '2021-03-07', '院線片2的發行商', '院線片2的導演', '03B02.mp4', '03B02.png', '院線片2 的劇情介紹院線片2 的劇情介紹院線片2 的劇情介紹院線片2 的劇情介紹院線片2 的劇情介紹院線片2 的劇情介紹院線片2 的劇情介紹院線片2 的劇情介紹院線片2 的劇情介紹院線片2 的劇情介紹', 1, 2),
(3, '院線片3', '普遍級', 100, 2021, 3, 6, '2021-03-06', '院線片3的發行商', '院線片3的導演', '03B03.mp4', '03B03.png', '院線片3 的劇情介紹院線片3 的劇情介紹院線片3 的劇情介紹院線片3 的劇情介紹院線片3 的劇情介紹院線片3 的劇情介紹院線片3 的劇情介紹院線片3 的劇情介紹院線片3 的劇情介紹院線片3 的劇情介紹', 1, 3),
(4, '院線片4', '限制級', 100, 2021, 3, 5, '2021-03-05', '院線片4的發行商', '院線片4的導演', '03B04.mp4', '03B04.png', '院線片4 的劇情介紹院線片4 的劇情介紹院線片4 的劇情介紹院線片4 的劇情介紹院線片4 的劇情介紹院線片4 的劇情介紹院線片4 的劇情介紹院線片4 的劇情介紹院線片4 的劇情介紹院線片4 的劇情介紹', 1, 4),
(5, '院線片5', '保護級', 100, 2021, 3, 5, '2021-03-05', '院線片5的發行商', '院線片5的導演', '03B05.mp4', '03B05.png', '院線片5 的劇情介紹院線片5 的劇情介紹院線片5 的劇情介紹院線片5 的劇情介紹院線片5 的劇情介紹院線片5 的劇情介紹院線片5 的劇情介紹院線片5 的劇情介紹院線片5 的劇情介紹院線片5 的劇情介紹', 1, 5),
(6, '院線片6', '普遍級', 100, 2021, 3, 9, '2021-03-09', '院線片6的發行商', '院線片6的導演', '03B06.mp4', '03B06.png', '院線片6 的劇情介紹院線片6 的劇情介紹院線片6 的劇情介紹院線片6 的劇情介紹院線片6 的劇情介紹院線片6 的劇情介紹院線片6 的劇情介紹院線片6 的劇情介紹院線片6 的劇情介紹院線片6 的劇情介紹', 1, 6),
(7, '院線片7', '保護級', 100, 2021, 3, 9, '2021-03-09', '院線片7的發行商', '院線片7的導演', '03B07.mp4', '03B07.png', '院線片7 的劇情介紹院線片7 的劇情介紹院線片7 的劇情介紹院線片7 的劇情介紹院線片7 的劇情介紹院線片7 的劇情介紹院線片7 的劇情介紹院線片7 的劇情介紹院線片7 的劇情介紹院線片7 的劇情介紹', 1, 7),
(8, '院線片8', '保護級', 100, 2021, 3, 5, '2021-03-05', '院線片8的發行商', '院線片8的導演', '03B08.mp4', '03B08.png', '院線片8 的劇情介紹院線片8 的劇情介紹院線片8 的劇情介紹院線片8 的劇情介紹院線片8 的劇情介紹院線片8 的劇情介紹院線片8 的劇情介紹院線片8 的劇情介紹院線片8 的劇情介紹院線片8 的劇情介紹', 1, 8),
(9, '院線片9', '輔導級', 100, 2021, 3, 8, '2021-03-08', '院線片9的發行商', '院線片9的導演', '03B09.mp4', '03B09.png', '院線片9 的劇情介紹院線片9 的劇情介紹院線片9 的劇情介紹院線片9 的劇情介紹院線片9 的劇情介紹院線片9 的劇情介紹院線片9 的劇情介紹院線片9 的劇情介紹院線片9 的劇情介紹院線片9 的劇情介紹', 1, 9),
(10, '院線片10', '輔導級', 100, 2021, 3, 8, '2021-03-08', '院線片10的發行商', '院線片10的導演', '03B10.mp4', '03B10.png', '院線片10 的劇情介紹院線片10 的劇情介紹院線片10 的劇情介紹院線片10 的劇情介紹院線片10 的劇情介紹院線片10 的劇情介紹院線片10 的劇情介紹院線片10 的劇情介紹院線片10 的劇情介紹院線片10 的劇情介紹', 1, 10);

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `num` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `session` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seats` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qt` int(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `orders`
--

INSERT INTO `orders` (`id`, `num`, `movie`, `date`, `session`, `seats`, `qt`) VALUES
(15, '202101150001', '院線片5', '2021-01-15', '20:00~22:00', 'a:1:{i:0;i:1;}', 1),
(16, '202101150002', '院線片5', '2021-01-15', '20:00~22:00', 'a:1:{i:0;i:2;}', 1),
(17, '202101150003', '院線片4', '2021-01-15', '14:00~16:00', 'a:1:{i:0;i:3;}', 1),
(18, '202101150004', '院線片4', '2021-01-15', '14:00~16:00', 'a:1:{i:0;i:4;}', 1),
(19, '202101150005', '院線片2', '2021-01-15', '18:00~20:00', 'a:1:{i:0;i:5;}', 1),
(20, '202101150006', '院線片4', '2021-01-15', '18:00~20:00', 'a:1:{i:0;i:6;}', 1),
(21, '202101150007', '院線片5', '2021-01-15', '14:00~16:00', 'a:1:{i:0;i:7;}', 1),
(22, '202101150008', '院線片4', '2021-01-15', '18:00~20:00', 'a:1:{i:0;i:8;}', 1),
(23, '202101150009', '院線片2', '2021-01-15', '20:00~22:00', 'a:1:{i:0;i:9;}', 1),
(24, '202101150010', '院線片2', '2021-01-15', '16:00~18:00', 'a:1:{i:0;i:10;}', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `poster`
--

CREATE TABLE `poster` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL,
  `rank` int(11) UNSIGNED NOT NULL,
  `ani` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `poster`
--

INSERT INTO `poster` (`id`, `name`, `img`, `sh`, `rank`, `ani`) VALUES
(1, '預告片1', '03A01.jpg', 1, 1, 1),
(2, '預告片2', '03A02.jpg', 1, 2, 3),
(3, '預告片3', '03A03.jpg', 1, 3, 3),
(4, '預告片4', '03A04.jpg', 1, 4, 3),
(5, '預告片5', '03A05.jpg', 1, 5, 3),
(6, '預告片6', '03A06.jpg', 1, 6, 2),
(7, '預告片7', '03A07.jpg', 1, 7, 2),
(8, '預告片8', '03A08.jpg', 1, 8, 3),
(9, '預告片9', '03A09.jpg', 1, 9, 3);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `poster`
--
ALTER TABLE `poster`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
