-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `imdepartment`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `name` varchar(30) NOT NULL,
  `account` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `membership` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`name`, `account`, `password`, `membership`) VALUES
('吳少宇', '410402173', '1234', 'user'),
('翁靖翔', '410402410', '123', 'user'),
('rooter', 'root', '12345678', 'admin');

-- --------------------------------------------------------

--
-- 資料表結構 `announcement`
--

CREATE TABLE `announcement` (
  `num` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `short` varchar(30) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `announcement`
--

INSERT INTO `announcement` (`num`, `title`, `short`, `content`, `date`) VALUES
(1, '【公告】雅思官方校園考試~專案優惠！', '嗨同學們，煩惱雅思考試的時間、地點不方便配合嗎...', '報名最後 2 天，想要取得證照的同學不要錯過~<br>\r\n嗨同學們，煩惱雅思考試的時間、地點不方便配合嗎？<br>\r\n雅思考試中心即將在輔大校內合作辦理「雅思官方校園考試」<br>\r\n測驗類別為學術組紙筆考試(含口試)，讓大家就近在最熟悉的校園內就能參加考試、取得語言證照，並且趕上年底的姊妹校交換申請唷！<br>\r\n歡迎有興趣的同學報名~<br>\r\n【雅思官方校園考試】<br>\r\n類別：學術組紙筆考試<br>\r\n考試日期： 2022.12.17(六)<br>\r\n考試地點：濟時樓地下室 eSchool 空間<br>\r\n專案代碼：FJC2022 (折600元)<br>\r\n<br>\r\n報名網址：http://tw.ieltsasia.org/group<br>\r\n報名指南載點：https://reurl.cc/Ok4y3v<br>\r\n\r\nP.S 請各位同學依照線上報名系統指南至官網申請帳號後報名，線上報名程序完成並繳費後才算完成報名手續<br>\r\n\r\n承辦人：外教中心 徐瑋謙#3763<br> /fj03855@mail.fju.edu.tw', '2022-12-21'),
(2, '【公告】111學年度第2學期境外學生學伴計畫(Buddy Program)', '想要認識輔大的境外學生，卻不知道找什麼機會和他們接觸嗎？', '想要認識輔大的境外學生，卻不知道找什麼機會和他們接觸嗎？有滿腔熱血想幫忙身處異國的學子，卻不知該提供什麼樣的協助嗎？來來來 ~~~ 不管你會哪幾種語言，或是完全不會外語也無妨，加入「境外學生學伴計畫」，國際學生中心提供您完整的訓練，讓您成為境外學生的好伙伴！<br><br>\r\n\r\n※ 重要時程：<br>\r\n◎ 截止時間：2022.12.21 (三)下午4:30前完成線上登錄<br>\r\n◎ 線上登錄：<br>https://forms.gle/wXRF48o5mRtpBT7m9 <br>(請使用Google Chrome介面)\r\n<br>◎ 面試日期：2022.12.28 (三)、2023.1.4 (三)\r\n<br>◎ 錄取公告：2023.1.5 (四)\r\n<br>◎ 培訓日期：2023.1.6 (五)\r\n<br>◎ 111-2境外交換生開學說明會：<br>2023.2.15 (三)，學伴務必一同出席\r\n\r\n<br>※ 相關訊息及簡章下載，請至國際及兩岸教育處 → 國際學生中心 → 「最新消息」查詢。\r\n<br>※ 網站公告之相關訊息及所有簡章內容請務必詳閱後再提問。\r\n<br>※ 舊學伴續任請使用同一連結登錄申請。', '2022-11-20'),
(3, '【公告】填寫課程評量有機會抽IPHONE！！！', '填寫課程評量換冰券活動+抽獎活動', '本學期學生教學評量將於111年12月23日截止，拜託敬請同學踴躍填答。<br> <br>\r\n\r\n?填寫問卷連結：<br>https://assessment.fju.edu.tw/\r\n\r\n<br><br>填寫課程評量換冰券活動+抽獎活動，獎品包括頭獎IPHONE14、特別獎IPHONE SE、電競耳機、無線鍵盤滑鼠組、隨身碟、造型隨身碟等等\r\n<br>越早填答，抽獎機率越多，可以抽IPHONE喔~~\r\n<br>班級填答率越高，抽到大獎的機會越大....', '2022-10-07');

-- --------------------------------------------------------

--
-- 資料表結構 `calander`
--

CREATE TABLE `calander` (
  `cnum` varchar(30) NOT NULL,
  `ctime` varchar(30) NOT NULL,
  `ctitle` varchar(30) NOT NULL,
  `ctext` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `calander`
--

INSERT INTO `calander` (`cnum`, `ctime`, `ctitle`, `ctext`) VALUES
('01', '2022/09/01', '一日資管營', '想要認識大學生活或新同學嗎?快點來'),
('02', '2022/10/01', '制服趴', '就是喝酒'),
('03', '2022/11/11', '宿營', '快點來'),
('04', '2022/12/24', '拚酒比賽', '拚酒比賽'),
('05', '2023/01/01', '放假', '不要來');

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

CREATE TABLE `comment` (
  `user` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(100) NOT NULL,
  `num` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `comment`
--

INSERT INTO `comment` (`user`, `department`, `datetime`, `message`, `num`) VALUES
('Lucas', '資訊管理學系', '2022-12-21 13:29:18', '好想要抽IPHONE!!!', 3),
('Lucy', '資訊工程學系', '2022-12-22 01:20:37', '阿怎麼都沒有正妹\r\n到底誰會想要認識啦', 2),
('rooter', '資管一乙', '2023-01-06 04:24:47', '12312313', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `reservation`
--

CREATE TABLE `reservation` (
  `account` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rtime` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rtype` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 傾印資料表的資料 `reservation`
--

INSERT INTO `reservation` (`account`, `name`, `rtime`, `rtype`) VALUES
('root', 'rooter', '10:00~12:00', 'majang'),
('root', 'rooter', '12:00~14:00', 'majang');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account`);

--
-- 資料表索引 `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`num`);

--
-- 資料表索引 `calander`
--
ALTER TABLE `calander`
  ADD PRIMARY KEY (`cnum`);

--
-- 資料表索引 `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`account`,`rtime`),
  ADD KEY `account` (`account`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `announcement`
--
ALTER TABLE `announcement`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
