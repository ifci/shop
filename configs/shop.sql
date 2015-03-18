-- phpMyAdmin SQL Dump
-- version 4.2.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-03-16 23:31:18
-- 服务器版本： 5.7.4-m14
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `shop_admin`
--

CREATE TABLE IF NOT EXISTS `shop_admin` (
`id` tinyint(4) unsigned NOT NULL COMMENT '管理员ID',
  `username` varchar(20) NOT NULL COMMENT '管理员名称，唯一',
  `password` varchar(32) NOT NULL COMMENT '管理员密码',
  `Email` varchar(50) NOT NULL COMMENT '邮箱'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `shop_admin`
--

INSERT INTO `shop_admin` (`id`, `username`, `password`, `Email`) VALUES
(1, 'fcdcyy', 'a53ddfb9f2e5cce0eaa71ce8910e378c', 'fcdcyy@sina.cn');

-- --------------------------------------------------------

--
-- 表的结构 `shop_album`
--

CREATE TABLE IF NOT EXISTS `shop_album` (
`id` int(11) NOT NULL COMMENT '相册表ID',
  `pid` int(11) NOT NULL COMMENT '用户名',
  `albumPath` varchar(50) NOT NULL COMMENT '图片路径'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='相册表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `shop_cate`
--

CREATE TABLE IF NOT EXISTS `shop_cate` (
`id` smallint(5) unsigned NOT NULL COMMENT '分类ID',
  `cName` varchar(30) NOT NULL COMMENT '分类名称'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `shop_pro`
--

CREATE TABLE IF NOT EXISTS `shop_pro` (
`id` int(11) unsigned NOT NULL,
  `pName` varchar(50) NOT NULL COMMENT '商品名称',
  `pSn` varchar(50) NOT NULL COMMENT '商品货号',
  `pNum` smallint(6) NOT NULL DEFAULT '0' COMMENT '商品数量',
  `mPrice` decimal(10,2) NOT NULL COMMENT '市场价',
  `iPrice` decimal(10,2) NOT NULL COMMENT '网站价',
  `pDesc` text COMMENT '商品简介',
  `pImg` varchar(255) NOT NULL COMMENT '商品图片',
  `pubTime` int(10) unsigned NOT NULL COMMENT '商品上架时间',
  `isShow` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '商品是否上架',
  `isHot` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '热卖商品',
  `cId` int(11) NOT NULL COMMENT '所属分类id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `shop_user`
--

CREATE TABLE IF NOT EXISTS `shop_user` (
`id` int(10) unsigned NOT NULL COMMENT '用户ID',
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `sex` enum('男','女','保密') DEFAULT NULL COMMENT '性别',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `face` varchar(255) NOT NULL COMMENT '头像',
  `regTime` int(10) unsigned NOT NULL COMMENT '注册时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop_admin`
--
ALTER TABLE `shop_admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `shop_album`
--
ALTER TABLE `shop_album`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_cate`
--
ALTER TABLE `shop_cate`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_pro`
--
ALTER TABLE `shop_pro`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_user`
--
ALTER TABLE `shop_user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop_admin`
--
ALTER TABLE `shop_admin`
MODIFY `id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员ID',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shop_album`
--
ALTER TABLE `shop_album`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '相册表ID';
--
-- AUTO_INCREMENT for table `shop_cate`
--
ALTER TABLE `shop_cate`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类ID';
--
-- AUTO_INCREMENT for table `shop_pro`
--
ALTER TABLE `shop_pro`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shop_user`
--
ALTER TABLE `shop_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
