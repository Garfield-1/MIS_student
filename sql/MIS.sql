-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: 120.78.226.194:3306
-- Generation Time: 2022-06-21 01:44:34
-- 服务器版本： 5.6.51
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MIS`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin-id` int(20) NOT NULL,
  `realname` varchar(20) DEFAULT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `pwd` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `certificate`
--

CREATE TABLE IF NOT EXISTS `certificate` (
  `certificate_name` varchar(40) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `source` varchar(30) DEFAULT NULL,
  `score` char(5) DEFAULT NULL,
  `authorities` varchar(100) DEFAULT '无'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `certificate`
--

INSERT INTO `certificate` (`certificate_name`, `type`, `source`, `score`, `authorities`) VALUES
('“1+X”财务数字化应用职业技能等级证书 (高级)', '资格证书', '新道科技股份有限公司', '3', 'https://www.seentao.com/'),
('“1+X”财务数字化应用职业技能等级证书 (中级)', '资格证书', '新道科技股份有限公司', '2', 'https://www.seentao.com/'),
('“1+X”业财一体信息化应用职业技能等级 证书（高级）', '资格证书', '新道科技股份有限公司', '3', 'https://www.seentao.com/'),
('“1+X”业财一体信息化应用职业技能等级 证书（中级）', '资格证书', '新道科技股份有限公司', '2', 'https://www.seentao.com/'),
('3dmax 培训合格证', '资格证书', '学院、劳动部', '1', '无'),
('AFP 金融理财师认证证书', '资格证书', '国际金融理财标准委员会', '6', '无'),
('AutoCAD 建筑设计', '资格证书', '工信部', '2', 'https://www.autodesk.com.cn/training'),
('AutoCAD 培训合格证', '资格证书', '学院、劳动部', '1', 'https://www.autodesk.com.cn/training'),
('BIM 建模师', '资格证书', '人力资源部/工信部', '2', 'https://www.autodesk.com.cn/training'),
('CCNA', '资格证书', 'Cisco', '2', '无'),
('CET-4', '资格证书', '国家考试中心', '2', 'https://cet.neea.edu.cn/'),
('CET-6', '资格证书', '国家考试中心', '3', 'https://cet.neea.edu.cn/'),
('CFA 注册金融分析师', '资格证书', '注册金融分析师协会', '8', '无'),
('CFP 国际金融理财师认证证书', '资格证书', '国际金融理财标准委员会', '8', '无'),
('CFTM 注册金融科技管理师', '资格证书', '国际金融管理学会', '6', '无'),
('CFT 金融科技证书', '资格证书', '亚洲金融科技师学会', '8', '无'),
('CIFA 国际货运代理从业人员岗位专业证书', '资格证书', '中国国际货运代理协会', '2', '无'),
('CoreDraw 培训合格证', '资格证书', '学院、劳动部', '1', '无'),
('FRM 金融风险管理师认证证书', '资格证书', '全球风险管理专业人士协 会', '8', '无'),
('HCIA 华为认证 ICT 初级工程师', '资格证书', '华为', '2', 'https://edu.huaweicloud.com/training/aie.html'),
('HCIP 华为认证 ICT 高级工程师', '资格证书', '华为', '3', 'https://edu.huaweicloud.com/training/aie.html'),
('HCIE 华为认证 ICT 专家', '资格证书', '华为', '4', 'https://edu.huaweicloud.com/training/aie.html'),
('NCRE（全国计算机等级考试）二级', '资格证书', '教育部考试中心', '2', 'https://ncre.neea.edu.cn/'),
('NCRE（全国计算机等级考试）三级', '资格证书', '教育部考试中心', '2', 'https://ncre.neea.edu.cn/'),
('NCRE（全国计算机等级考试）一级', '资格证书', '教育部考试中心', '1', 'https://ncre.neea.edu.cn/'),
('Photo shop 培训合格证', '资格证书', '学院、劳动部', '1', '无'),
('Pro.E 培训合格证', '资格证书', '教育部', '1', 'http://www.moe.gov.cn/'),
('RHCSA 红帽认证系统管理员', '资格证书', '红帽', '2', '无'),
('RHCE 红帽认证工程师', '资格证书', '红帽', '2', '无'),
('Solideworks 设计认证（高级）', '资格证书', '学院、国家认证', '2', '无'),
('Solideworks 设计认证（中级）', '资格证书', '学院、国家认证', '1', '无'),
('安全员', '资格证书', '陕西省建设厅', '2', '无'),
('半导体集成电路工艺技术', '资格证书', '工业和信息化部', '2', '无'),
('材料员', '资格证书', '陕西省建设厅', '2', '无'),
('测量员', '资格证书', '陕西省建设厅', '2', '无'),
('程序员', '资格证书', '工业和信息化部教育与考 试中心', '2', '无'),
('出版专业资格证', '资格证书', '人事部和新闻总署', '2', '无'),
('初级网络管理员', '资格证书', '人事部', '2', '无'),
('导游资格证', '资格证书', '陕西省旅游局', '2', '无'),
('电子商务技术员', '资格证书', '工业和信息化部教育与考 试中心', '2', '无'),
('广告专业技术岗位资格证书', '资格证书', '陕西省劳动局', '2', '无'),
('国际汉语教师职业资格证', '资格证书', '国际汉语教师协会（ICA)', '2', '无'),
('国际贸易从业技能综合实训合格证书', '资格证书', '中国国际贸易学会', '2', '无'),
('会计专业技术人员职业资格初级证书', '资格证书', '人力资源和社会保障部、 财政部', '2', '无'),
('机动车驾驶证', '资格证书', '市公安局交通警察支队', '3', '无'),
('监理员', '资格证书', '陕西省建设厅', '2', '无'),
('剑桥国际商务英语证书', '资格证书', '教育部考试中心和英国剑 桥大学考试委员会', '4', 'http://www.moe.gov.cn/'),
('教师资格证', '资格证书', '陕西省教委', '2', '无'),
('金蝶 ERP 认证证书', '资格证书', '金蝶科技有限公司', '2', 'https://www.kingdee.com/company/'),
('经济专业技术人员职业资格初级证书', '资格证书', '人力资源和社会保障部', '2', '无'),
('跨境电子商务师', '资格证书', '工业和信息化部教育与考 试中心', '2', '无'),
('理财规划师（职业资格三级）', '资格证书', '理财规划师专业委员会', '2', '无'),
('美国注册管理会计师(CMA)考试合格', '资格证书', '美国管理会计师协会', '5', '无'),
('秘书资格证', '资格证书', '陕西省劳动局', '1', 'http://rst.shaanxi.gov.cn/home.asp'),
('普通话合格证', '资格证书', '陕西省普通话测试中心', '1', 'http://www.moe.gov.cn/'),
('期货从业人员资格证书', '资格证书', '中国期货业协会', '2', '无'),
('嵌入式系统设计师', '资格证书', '工业和信息化部教育与考 试中心', '2', '无'),
('全国跨境电商操作专员证书', '资格证书', '中国国际贸易学会', '2', '无'),
('全国跨境电商运营与推广师岗位证书', '资格证书', '中国国际贸易学会', '2', '无'),
('全媒体运营师', '资格证书', '国家广播电视总局广播影 视人才交流中心', '2', '无'),
('人力资源管理师', '资格证书', '中国就业培训技术指导中 心', '2', 'http://chinajob.mohrss.gov.cn/gywm/'),
('人力资源三级资格证书', '资格证书', '国家人力资源和社会保障 部', '2', '无'),
('软件设计师', '资格证书', '工业和信息化部教育与考试中心', '2', '无'),
('审计专业技术人员职业资格初级证书', '资格证书', '人力资源和社会保障部、审计署', '2', '无'),
(' 施工员', '资格证书', '陕西省建设厅', '2', '无'),
('市场调查与分析专业技能证书（CRA）', '资格证书', '中国商业统计学会', '2', '无'),
('市场营销师', '资格证书', '劳动部', '2', '无'),
('室内设计及空间表现', '资格证书', '工信部', '2', '无'),
('数据库系统工程师', '资格证书', '工业和信息化部教育与考试中心', '2', 'https://www.miiteec.org.cn/'),
('数控编程培训证', '资格证书', '劳动部', '2', '无'),
('统计专业技术人员职业资格初级证书', '资格证书', '国家统计局、人力资源和 社会保障部', '2', '无'),
('土木工程绘图员', '资格证书', '陕西省建设厅', '1', '无'),
('网络编辑员/助理网络编辑师', '资格证书', '劳动和社会保障部职业技 能鉴定中心', '2', '无'),
('网络工程师', '资格证书', '工业和信息化部教育与考 试中心', '2', '无'),
('网络视听主播', '资格证书', '国家广播电视总局广播影 视人才交流中心', '2', '无'),
('系统集成项目管理工程师', '资格证书', '工业和信息化部教育与考 试中心', '2', '无'),
('信息系统管理工程师', '资格证书', '工业和信息化部教育与考 试中心', '2', '无'),
('信息系统运行管理员', '资格证书', '工业和信息化部教育与考 试中心', '2', '无'),
('银行业专业人员职业资格（初级）', '资格证书', '人力资源和社会保障部、 中国银行业协会', '2', '无'),
('用友 ERP 财务—供应链一体化应用认证证书', '资格证书', '用友新道科技有限公司', '2', '无'),
('预算员上岗证', '资格证书', '陕西省建设厅', '2', '无'),
('造价员', '资格证书', '陕西省建设厅', '2', '无'),
('证券业从业人员资格证书', '资格证书', '中国证券业协会', '2', '无'),
('质检员', '资格证书', '陕西省建设厅', '2', '无'),
('中国管理会计师（MAT）初级', '资格证书', '中国总会计师协会', '2', '无'),
('中国市场营销策划师资格证书', '资格证书', '中国市场学会', '2', '无'),
('中国银行业金融科技师（CFT）', '资格证书', '中国银行业协会', '2', '无'),
('中级网络管理员', '资格证书', ' 人事部', '2.5', '无'),
('资产评估师', '资格证书', '财政部、人力资源和社会 保障部、中国资产评估协 会', '2', '无'),
('资料员', '资格证书', '陕西省建设厅', '2', '无'),
('创业培训证书', '资格证书', '陕西省人社厅/西安市人社 局', '1', '无'),
('就业培训证书', '资格证书', '陕西省人社厅/西安市人社 局', '1', '无');

-- --------------------------------------------------------

--
-- 表的结构 `existing`
--

CREATE TABLE IF NOT EXISTS `existing` (
  `certificate-name` char(20) NOT NULL,
  `student-name` char(20) DEFAULT NULL,
  `id` varchar(20) DEFAULT NULL,
  `teacher-name` char(30) DEFAULT NULL,
  `score` char(5) DEFAULT NULL,
  `state` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `guide`
--

CREATE TABLE IF NOT EXISTS `guide` (
  `teamcher-name` char(10) NOT NULL,
  `certificate-name` char(20) DEFAULT NULL,
  `student-id` varchar(10) DEFAULT NULL,
  `student-name` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` char(15) NOT NULL,
  `stu_name` varchar(10) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `stu_profession` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`student_id`, `stu_name`, `email`, `stu_profession`) VALUES
('B18060117', '张三', '26@163.com', '计算机科学与技术');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` varchar(10) NOT NULL DEFAULT '0',
  `realname` varchar(20) DEFAULT NULL,
  `job_title` varchar(20) DEFAULT NULL,
  `email` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `realname`, `job_title`, `email`) VALUES
('Z002', '李四', '副教授', '2@163.com');

-- --------------------------------------------------------

--
-- 表的结构 `total`
--

CREATE TABLE IF NOT EXISTS `total` (
  `certificate_name` varchar(40) DEFAULT NULL,
  `student_id` char(10) DEFAULT NULL,
  `student_name` char(10) DEFAULT NULL,
  `certificate_num` varchar(40) NOT NULL,
  `tutor` varchar(10) DEFAULT NULL,
  `state` varchar(5) NOT NULL DEFAULT '已审核'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `total`
--

INSERT INTO `total` (`certificate_name`, `student_id`, `student_name`, `certificate_num`, `tutor`, `state`) VALUES
('AutoCAD 建筑设计', 'B18060117', '张三', '45654654651', '无', '未审核');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `userpwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户登录注册表';

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`username`, `userpwd`) VALUES
('root', 'root');

-- --------------------------------------------------------

--
-- 表的结构 `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `userpwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user_reg`
--

INSERT INTO `user_reg` (`username`, `userpwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `user_stu`
--

CREATE TABLE IF NOT EXISTS `user_stu` (
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `userpwd` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user_stu`
--

INSERT INTO `user_stu` (`username`, `userpwd`) VALUES
('B18060114', '060114');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin-id`);

--
-- Indexes for table `existing`
--
ALTER TABLE `existing`
  ADD PRIMARY KEY (`certificate-name`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`teamcher-name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`certificate_num`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
