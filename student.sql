-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:8889
-- 產生時間： 2020 年 11 月 12 日 15:40
-- 伺服器版本： 5.7.26
-- PHP 版本： 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `student`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123456');

-- --------------------------------------------------------

--
-- 資料表結構 `stud`
--

CREATE TABLE `stud` (
  `stud_no` tinyint(3) UNSIGNED NOT NULL,
  `stud_name` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `stud_idno` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `stud_sex` enum('M','F') COLLATE utf8_unicode_ci NOT NULL,
  `stud_birthday` date NOT NULL,
  `stud_school` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `stud_department` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `stud_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `stud_address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `stud_photo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `stud_hits` mediumint(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `stud`
--

INSERT INTO `stud` (`stud_no`, `stud_name`, `stud_idno`, `stud_sex`, `stud_birthday`, `stud_school`, `stud_department`, `stud_phone`, `stud_address`, `stud_photo`, `stud_hits`) VALUES
(1, '林啟方', 'P122340348', 'M', '1981-01-28', '中央大學', '數學系', '0932895113', '臺中縣大里市永興路3巷21號', '林啟方.jpg', 2),
(2, '顏志全', 'P122709413', 'M', '1980-03-12', '東海大學', '經濟系', '0928950442', '雲林縣北港鎮公園路205巷43號', '顏志全.jpg', 2),
(3, '林正裕', 'P120859329', 'M', '1965-01-04', '臺灣工業技術學院', '工業管理技術系', '0921663180', '臺中市西區居仁街385號11樓', '林正裕.jpg', 1),
(4, '蔣春芳', 'B220287447', 'F', '1975-10-02', '東海大學', '統計系', '0989892992', '臺中縣太平市仁和街360號4樓', '蔣春芳.jpg', 2),
(5, '蔡惠佑', 'E120005418', 'M', '1970-07-20', '義守大學', '資管所', '0925103089', '高雄市三民區明誠一路21號12樓', '蔡惠佑.jpg', 2),
(6, '張巍立', 'R123457926', 'M', '1983-10-18', '嘉義大學', '畜產系', '0980816993', '臺中市南區五權南路78巷3-5號', '張巍立.jpg', 3),
(7, '楊雅蕙', 'I200161771', 'F', '1987-10-10', '中國醫藥大學', '生物醫學影像暨放射科學系', '0932628865', '臺中市西區華美街132巷2號', '楊雅蕙.jpg', 1),
(8, '陳炫開', 'N125076512', 'M', '1988-10-21', '淡江大學', '土木工程設施組', '0937305710', '彰化縣永靖鄉中山路2段28巷127號', '陳炫開.jpg', 2),
(9, '陳家貴', 'L122320554', 'M', '1976-10-12', '臺中技術學院附設專科進修學校', '商業文書科', '0912325387', '臺中縣清水鎮西社里中華路123號', '陳家貴.jpg', 1),
(10, '唐婉玲', 'B221929271', 'F', '1981-01-20', '嘉義大學', '初等教育系', '0910692449', '臺中市北屯區陳平路215巷16號', '唐婉玲.jpg', 3),
(11, '楊育仁', 'B122034377', 'M', '1984-12-10', '中原大學', '資訊工程系', '0932643820', '臺中市西區長春街125號7樓', '楊育仁.jpg', 2),
(12, '王宥茹', 'L220876301', 'F', '1970-12-12', '嶺東科技大學', '應用外語系', '0963430103', '臺中縣梧棲鎮永興路2段321巷35號', '王宥茹.jpg', 2),
(13, '賴嘉彬', 'B120385652', 'M', '1957-11-13', '臺中二中', '普通科', '0923987490', '臺中市西區日新街132號2樓', '賴嘉彬.jpg', 5),
(14, '景建德', 'J122005207', 'M', '1980-11-14', '萬能技術學院', '電子工程系', '0933261832', '新竹縣芎林鄉文山路142巷6弄19號', '景建德.jpg', 1),
(15, '葉祖德', 'S124835830', 'M', '1970-11-12', '東方工業專科學校', '電子工程科', '0931893432', '高雄縣大寮鄉琉球村黃厝路324-16號', '葉祖德.jpg', 3),
(16, '蘇鵬煌', 'L124121802', 'M', '1986-11-24', ' 大葉大學', '資訊工程系', '0921207893', '臺中縣沙鹿鎮鹿峰里中山路田尾巷321號', '蘇鵬煌.jpg', 2),
(17, '詹詠蘭', 'A228982290', 'F', '1992-12-29', '勤益科技大學', '工業工程與管理系', '0973135902', '臺中市西屯區臺中港路3段115巷9號', '詹詠蘭.jpg', 6),
(18, '曾寶方', 'T220990880', 'F', '1961-11-10', '東海大學', '經濟系', '0937240302', '臺中市西區大仁街156號6樓-2', '曾寶方.jpg', 2),
(19, '吳秀芳', 'Q220878561', 'F', '1969-08-15', '國防醫學院', '護理系', '0933645663', '高雄市鼓山區美術東四街18號2樓', '吳秀芳.jpg', 4),
(20, '邱清西', 'B120035113', 'M', '1970-09-15', '臺中高工', '汽修科', '09331145361', '臺中市西區民生路120號', '邱清西.jpg', 1),
(21, '郭耀慶', 'A124367778', 'M', '1977-05-03', '中國工商專校', '建築科', '0937012440', '臺中縣太平市中山路1段12-15號7樓', '郭耀慶.jpg', 12),
(22, '張祐輝', 'I100008781', 'M', '1983-07-21', '高苑技術學院', '土木工程系', '0916111985', '嘉義市上海路22號5樓-3', '張祐輝.jpg', 0),
(23, '楊麗雯', 'G220342451', 'F', '1967-06-21', '德明商專', '國貿科', '0916502449', '臺中市南屯區大業路431號3樓-1', '楊麗雯.jpg', 0),
(24, '郭乃祐', 'B121239650', 'M', '1973-04-21', '勤益技術學院', '電子工程系', '0918070771', '臺中市北區學士路231巷1-5號', '郭乃祐.jpg', 0),
(25, '周玉鈴', 'C220678371', 'F', '1965-12-11', '臺北商業技術學院附設空專', '資訊管理科', '0983650120', '臺中縣太平市新仁路1路134巷11弄14號', '周玉鈴.jpg', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`stud_no`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stud`
--
ALTER TABLE `stud`
  MODIFY `stud_no` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
