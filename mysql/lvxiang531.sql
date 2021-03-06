-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018-05-03 12:28:36
-- 服务器版本： 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lvxiang`
--

-- --------------------------------------------------------

--
-- 表的结构 `admins`
--

CREATE TABLE `admins` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `token` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员账户';

--
-- 转存表中的数据 `admins`
--

INSERT INTO `admins` (`username`, `password`, `token`) VALUES
('admin', 'admin', '5d519384ebf2c862e0fd16779e09004e6096b14d');

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `price` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `tags` varchar(64) DEFAULT NULL,
  `types` varchar(64) DEFAULT NULL,
  `start` varchar(32) NOT NULL,
  `destination` varchar(32) NOT NULL,
  `day` int(11) NOT NULL,
  `description` varchar(256) NOT NULL,
  `picture` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品';

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `title`, `price`, `date`, `tags`, `types`, `start`, `destination`, `day`, `description`, `picture`) VALUES
(3, '这是一个测试哈哈哈', 1233, '2017-11-29 10:00:00', '你知道吗', '2', '杭州', '纽约', 8, '不可描述', '9fbce18463e6ada5e6d10e4d0321ef429e741d46.jpg'),
(4, '这是第二个测试', 7, '2017-11-30 00:00:00', '哈哈,好帅啊', '3', '北京', '深圳', 8, '程序猿的旅程', '20171125/3641033dfb1d58614167154b7bbe1b1c.jpg'),
(11, '测试一下哈，新版本', 3400, '2017-12-13 17:00:00', '哈哈,测试', '1', '宁波', '南宁', 7, '这是一段描述', 'f054824214c913b5a99416aa12f6bcb1eed80612.jpg'),
(12, '测试新版本', 4500, '2017-12-14 17:00:00', '', '3', '宁波', '南宁', 14, '这是一段描述', '51e57093ef7d486f1462c9d637894da61c9b990d.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `goodtotag`
--

CREATE TABLE `goodtotag` (
  `id` int(11) NOT NULL,
  `goodId` int(11) NOT NULL,
  `tagId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='商品标签映射表';

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `content` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `title`, `content`) VALUES
(1, '网站最新功能看这里', '网站最新功能看这里网站最新功能看这里网站最新功能看这里'),
(2, '靠谱点评标准升级啦！', '靠谱点评标准升级啦！靠谱点评标准升级啦！靠谱点评标准升级啦！\n'),
(3, '评选最佳驴友记的标准新鲜出炉啦！！！', '评选最佳驴友记的标准新鲜出炉啦！！！'),
(4, '第四个', '4444'),
(5, '第五个', '5555555');

-- --------------------------------------------------------

--
-- 表的结构 `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `picture` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `picture`
--

INSERT INTO `picture` (`id`, `picture`) VALUES
(4, '00c7c073f1ae9dda9e62cedd5cce292e57db3737.jpg'),
(5, '7c4507481dfc6ca9ebc1b6e663b168ea93e3f3a3.jpg'),
(6, 'e355a36e3ccf2ae3f4cfc7aee8e18bb720e4f3cd.jpg'),
(7, '4cd727e9161b5c78ffd3bb69d50de6302a253bcd.jpg'),
(8, 'c7d3ab5846579eb31b4b96ab3e1462e3e1110e9d.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tagName` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='标签';

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL,
  `token` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phone`, `email`, `address`, `token`) VALUES
(1, '1', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', 'df97a8b5dad1bc018b01c81ecfbc3f3470bc3624'),
(2, '2', 'e10adc3949ba59abbe56e057f20f883e', '13333333333', '382347276@qq.com', '树人', '323bbe05ecdfdb9ed6697ee7d1d363c24d4f3402'),
(3, 'zzz', 'b1444fb0c07653567ad325aa25d4e37a', '18268825904', '18268825904@163.com', '浙江慈溪', '09e6a2d0dffbfa9d731f06396b04ee5b4213bf76'),
(4, 'zyn', '202cb962ac59075b964b07152d234b70', '', '', '', 'd64ca95e4d5470086799a6a7cd96ea96af34dd77'),
(22, 'zhengyanna', 'c4ca4238a0b923820dcc509a6f75849b', '18888287823', '', '', '318f8c9822d39732992c921479a1ebfa0e14a49b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `admin_username_uindex` (`username`),
  ADD UNIQUE KEY `admin_token_uindex` (`token`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `goods_id_uindex` (`id`);

--
-- Indexes for table `goodtotag`
--
ALTER TABLE `goodtotag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用表AUTO_INCREMENT `goodtotag`
--
ALTER TABLE `goodtotag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
