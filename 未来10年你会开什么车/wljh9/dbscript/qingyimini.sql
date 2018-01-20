/*
Navicat MySQL Data Transfer

Source Server         : 庆易
Source Server Version : 50547
Source Host           : 120.76.147.191:3306
Source Database       : qingyimini

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-10-24 13:29:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `eb_admin`
-- ----------------------------
DROP TABLE IF EXISTS `eb_admin`;
CREATE TABLE `eb_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `note` varchar(255) DEFAULT NULL,
  `reg_time` int(11) DEFAULT NULL,
  `last_login_time` int(11) DEFAULT NULL,
  `last_login_ip` varchar(30) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `real_name` varchar(40) DEFAULT NULL COMMENT '真实姓名',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE,
  KEY `id_2` (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eb_admin
-- ----------------------------
INSERT INTO `eb_admin` VALUES ('1', 'admin', '7fef6171469e80d32c0559f88b377245', '1', '超级管理员', '1380013800', null, null, '1506394935', '管理员');
INSERT INTO `eb_admin` VALUES ('14', 'test', '7fef6171469e80d32c0559f88b377245', '1', '超级管理员', '1380013800', null, null, '1419047031', '管理员');

-- ----------------------------
-- Table structure for `eb_carousel`
-- ----------------------------
DROP TABLE IF EXISTS `eb_carousel`;
CREATE TABLE `eb_carousel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `content` text,
  `islink` tinyint(1) DEFAULT '0' COMMENT '是否跳转',
  `cate_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eb_carousel
-- ----------------------------
INSERT INTO `eb_carousel` VALUES ('1', '首页', '0', '1', 'https://mini2.374628.com //uploads/image/20171019/20171019105319_52162.jpg', '', '0', '0');
INSERT INTO `eb_carousel` VALUES ('2', '首页广告', '0', '1', 'https://mini2.374628.com //uploads/image/20171019/20171019105402_95583.jpg', '', '0', '0');
INSERT INTO `eb_carousel` VALUES ('3', '首页', '0', '1', 'https://mini2.374628.com //uploads/image/20171019/20171019105421_58836.jpg', '选择我们，是您一生的财富', '1', '0');
INSERT INTO `eb_carousel` VALUES ('4', '加入我们', '0', '1', 'https://mini2.374628.com //uploads/image/20171019/20171019150458_53464.jpg', '', '0', '2');
INSERT INTO `eb_carousel` VALUES ('5', '关于我们', '0', '1', 'https://mini2.374628.com //uploads/image/20171019/20171019151252_36946.jpg', '', '0', '1');

-- ----------------------------
-- Table structure for `eb_kefu`
-- ----------------------------
DROP TABLE IF EXISTS `eb_kefu`;
CREATE TABLE `eb_kefu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(15) DEFAULT '' COMMENT '客服电话',
  `inputtime` int(11) DEFAULT NULL,
  `lastinputtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of eb_kefu
-- ----------------------------
INSERT INTO `eb_kefu` VALUES ('1', '132256585562', '1505899531', '1506048142');

-- ----------------------------
-- Table structure for `eb_log`
-- ----------------------------
DROP TABLE IF EXISTS `eb_log`;
CREATE TABLE `eb_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(32) NOT NULL,
  `inputtime` int(11) DEFAULT NULL,
  `typeid` int(1) DEFAULT NULL,
  `tablename` varchar(32) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eb_log
-- ----------------------------
INSERT INTO `eb_log` VALUES ('1', 'admin', '1466576362', '1', 'author', '1', 'a:13:{s:2:\"id\";s:7:\"   2   \";s:4:\"name\";s:3:\"sss\";s:10:\"birthplace\";s:0:\"\";s:9:\"graduated\";s:0:\"\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:0:\"\";s:11:\"description\";s:0:\"\";s:7:\"content\";s:4:\"ssss\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";s:7:\"cate_id\";s:0:\"\";}');
INSERT INTO `eb_log` VALUES ('2', 'admin', '1466576433', '1', 'author', '1', 'a:13:{s:2:\"id\";s:3:\" 1 \";s:4:\"name\";s:2:\"ss\";s:10:\"birthplace\";s:0:\"\";s:9:\"graduated\";s:0:\"\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:7:\"cate_id\";s:5:\"52,51\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:53:\"/cnjm/uploads/image/20150714/20150714091452_57532.png\";s:11:\"description\";s:0:\"\";s:7:\"content\";s:0:\"\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";}');
INSERT INTO `eb_log` VALUES ('3', 'admin', '1466576543', '1', 'author', '1', 'a:13:{s:2:\"id\";s:3:\" 2 \";s:4:\"name\";s:3:\"sss\";s:10:\"birthplace\";s:0:\"\";s:9:\"graduated\";s:0:\"\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:0:\"\";s:11:\"description\";s:0:\"\";s:7:\"content\";s:4:\"ssss\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";s:7:\"cate_id\";s:0:\"\";}');
INSERT INTO `eb_log` VALUES ('4', 'admin', '1466576587', '1', 'author', '2', 'a:13:{s:2:\"id\";s:5:\"  2  \";s:4:\"name\";s:3:\"sss\";s:10:\"birthplace\";s:0:\"\";s:9:\"graduated\";s:0:\"\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:0:\"\";s:11:\"description\";s:0:\"\";s:7:\"content\";s:4:\"ssss\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";s:7:\"cate_id\";s:0:\"\";}');
INSERT INTO `eb_log` VALUES ('5', 'admin', '1466576965', '2', 'author', '6', 'a:12:{s:4:\"name\";s:3:\"111\";s:10:\"birthplace\";s:3:\"222\";s:9:\"graduated\";s:5:\"23323\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:0:\"\";s:11:\"description\";s:0:\"\";s:7:\"content\";s:0:\"\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";s:7:\"cate_id\";s:0:\"\";}');
INSERT INTO `eb_log` VALUES ('6', 'admin', '1466579944', '1', 'author', '2', 'a:13:{s:2:\"id\";s:3:\" 2 \";s:4:\"name\";s:3:\"sss\";s:10:\"birthplace\";s:0:\"\";s:9:\"graduated\";s:0:\"\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:7:\"cate_id\";s:2:\"55\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:0:\"\";s:11:\"description\";s:0:\"\";s:7:\"content\";s:4:\"ssss\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";}');
INSERT INTO `eb_log` VALUES ('7', 'admin', '1466580037', '2', 'author', '7', 'a:12:{s:4:\"name\";s:3:\"sss\";s:10:\"birthplace\";s:2:\"ss\";s:9:\"graduated\";s:0:\"\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:7:\"cate_id\";s:2:\"on\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:0:\"\";s:11:\"description\";s:2:\"ss\";s:7:\"content\";s:2:\"ss\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";}');

-- ----------------------------
-- Table structure for `eb_mcarousel`
-- ----------------------------
DROP TABLE IF EXISTS `eb_mcarousel`;
CREATE TABLE `eb_mcarousel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of eb_mcarousel
-- ----------------------------

-- ----------------------------
-- Table structure for `eb_mconfig`
-- ----------------------------
DROP TABLE IF EXISTS `eb_mconfig`;
CREATE TABLE `eb_mconfig` (
  `id` int(11) NOT NULL,
  `coverImg` varchar(255) DEFAULT NULL,
  `shifoukaiqi` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eb_mconfig
-- ----------------------------
INSERT INTO `eb_mconfig` VALUES ('1', '/uploads/image/20171024/20171024093736_98687.png', '开启');

-- ----------------------------
-- Table structure for `eb_menu`
-- ----------------------------
DROP TABLE IF EXISTS `eb_menu`;
CREATE TABLE `eb_menu` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(4) unsigned DEFAULT '0',
  `name` varchar(30) NOT NULL,
  `idstr` varchar(20) NOT NULL COMMENT '模块标识',
  `url` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `sort` tinyint(3) DEFAULT NULL,
  `group` varchar(30) DEFAULT NULL,
  `hide` tinyint(2) DEFAULT '0' COMMENT '是否隐藏',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eb_menu
-- ----------------------------

-- ----------------------------
-- Table structure for `eb_message`
-- ----------------------------
DROP TABLE IF EXISTS `eb_message`;
CREATE TABLE `eb_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT '留言名字',
  `phone` varchar(16) NOT NULL COMMENT '电话',
  `content` text COMMENT '留言内容',
  `inputtime` int(11) NOT NULL,
  `state` int(1) DEFAULT '1' COMMENT '阅读状态 1：未读 2：已读',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eb_message
-- ----------------------------
INSERT INTO `eb_message` VALUES ('1', 'test', '123456', '测试', '1505973624', '2');
INSERT INTO `eb_message` VALUES ('2', 'test', '123456', '测试', '1505974161', '2');
INSERT INTO `eb_message` VALUES ('4', 'dsf', 'sdfs', 'sdfs', '1505979279', '1');
INSERT INTO `eb_message` VALUES ('5', '的方法', '吊顶灯', '是的vv科技部那你还呢', '1505985577', '2');
INSERT INTO `eb_message` VALUES ('6', 'fg', 'fg', 'dfgd', '1506046532', '2');
INSERT INTO `eb_message` VALUES ('7', '发放给的', '分隔符', '梵蒂冈', '1506046764', '2');
INSERT INTO `eb_message` VALUES ('8', '55', '55', '55', '1506050054', '2');
INSERT INTO `eb_message` VALUES ('9', '123', '123', 'gggg', '1506059061', '2');
INSERT INTO `eb_message` VALUES ('10', 'lyl', '123456789', '66666666666', '1506059078', '2');
INSERT INTO `eb_message` VALUES ('11', 'qq', '223', '23', '1506240031', '2');

-- ----------------------------
-- Table structure for `eb_notice`
-- ----------------------------
DROP TABLE IF EXISTS `eb_notice`;
CREATE TABLE `eb_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) DEFAULT NULL COMMENT '分类id',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `hide` varchar(255) DEFAULT '0' COMMENT '0不隐藏，1隐藏',
  `thumb` varchar(255) DEFAULT NULL COMMENT '预览图',
  `begin` int(11) DEFAULT NULL COMMENT '开始时间',
  `closure` int(11) DEFAULT NULL COMMENT '结束时间',
  `inputtime` int(11) DEFAULT NULL COMMENT '插入时间',
  `extra` text,
  `advantage` text,
  `note1` varchar(255) DEFAULT NULL,
  `note2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='新闻公告';

-- ----------------------------
-- Records of eb_notice
-- ----------------------------
INSERT INTO `eb_notice` VALUES ('1', '1', '关于我们', '庆易贷款,专做广州贷款,与多家银行合作经营,贷款,微粒贷,房贷,车贷款;庆易贷款随时为你准备周转金', '0', 'https://mini2.374628.com //uploads/image/20171019/20171019144426_44425.jpg', null, null, null, null, '', null, null);
INSERT INTO `eb_notice` VALUES ('2', '4', '核心团队', '<p>\r\n	<img src=\"https://mini2.374628.com /uploads/image/20171019/20171019151829_76063.jpg\" alt=\"\" /> \r\n</p>', '0', '', null, null, null, null, '<p>\r\n	<br />\r\n</p>', null, null);
INSERT INTO `eb_notice` VALUES ('4', '2', '商务合作', '<span>资金及时雨，泓申辅助您，您身边的24小时资金便利店”泓申金服资产管理有限公司（以下简称“泓申金服”）致力提供专业的小额信贷金融信息服务，一方面通过落地的方式面对面地为有小额借款需求的个人提供金融信息服务，同时向资金供给方提供小额信贷技术（包括但不限于客户开发、调查核实、信用审核、贷后管理等工作）。泓申金服是一家资产管理公司，主要经营房产抵押借款、过桥垫资赎楼及不良资产处置。目前泓申金服旗下控股公司拥有融资租赁、保理、担保，小贷，典当等金融牌照。</span><br />\r\n<span>泓申金服致力于打造金融市场最优质的资产端。以个人房产抵押贷款债权为基础，为各大传统机构提供优质的底层资产。资产安全性高、规模获客力强，从前端的全方位移动大数据风控到中端贷后风险预检和后端发行不良地产处置基金已经形成系统的管控流程。</span><br />\r\n<p>\r\n	2016年1月，获得华映资本数千万Pre-A轮融资。仅仅3个月后又完成香港上市公司天鸽互动（HK01980）和华映资本联合注资2亿元A轮融资。泓申金服已跻身市值近10亿的一线金融独角兽之列，成为同行业中一支口碑、影响力蒸蒸日上的新兴力量。&nbsp;\r\n</p>\r\n<br />', '0', 'https://mini2.374628.com //uploads/image/20171019/20171019144444_88118.jpg', null, null, null, null, '<p>\r\n	<span>岗位：渠道主管</span><br />\r\n<br />\r\n<span>岗位描述：</span><br />\r\n<span>1. 负责房产抵押贷款、过桥垫资、产品营销推广，开发新客户或渠道，并进行客户关系维护；</span><br />\r\n<span>2. 根据一线工作了解到的客户反馈, 向公司提出产品及流程优化建议。</span><br />\r\n<br />\r\n<span>岗位要求：</span><br />\r\n<span>1. 具有良好的沟通表达能力和抗压性；</span><br />\r\n<span>2. 具有较强的判断能力、人际沟通协调能力、计划与执行能力；</span><br />\r\n<span>3. 具备高度的工作热情，热爱销售岗位及金融行业；</span><br />\r\n<span>4. 工作细致、严谨，并具有战略前瞻性思维；</span><br />\r\n<span>5. 有相关经验或客户资源者优先！</span><br />\r\n<br />\r\n<span>欢迎有梦想，想进步的人加入！</span>\r\n</p>', null, null);
INSERT INTO `eb_notice` VALUES ('5', '5', '联系我们', '<p>\r\n	手机：18042896752\r\n</p>\r\n<p>\r\n	电话：020-\r\n</p>\r\n<p>\r\n	地址：广州\r\n</p>', '0', 'https://mini2.374628.com //uploads/image/20171019/20171019112144_95671.jpeg', null, null, null, null, null, null, null);
INSERT INTO `eb_notice` VALUES ('21', '3', '微粒贷', '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">文章内容</span>', '0', 'https://mini2.374628.com //uploads/image/20171021/20171021095306_25886.jpg', null, null, null, null, '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">产品优势</span>', '凭手机微粒贷加身份证即可申请', '');
INSERT INTO `eb_notice` VALUES ('20', '3', '银行流水贷', '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">文章内容</span>', '0', 'https://mini2.374628.com //uploads/image/20171021/20171021095242_77195.jpg', null, null, null, null, '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">产品优势</span>', '每月银行流水大于1000即可申请', '');
INSERT INTO `eb_notice` VALUES ('19', '3', '汽车分期', '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">文章内容</span>', '0', 'https://mini2.374628.com //uploads/image/20171021/20171021095216_42654.jpg', null, null, null, null, '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">产品优势</span>', '只要有招行信用卡或建行信用卡即可', '');
INSERT INTO `eb_notice` VALUES ('18', '3', '全国房产抵押贷款', '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">文章内容</span>', '0', 'https://mini2.374628.com //uploads/image/20171021/20171021095146_97102.jpg', null, null, null, null, '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">产品优势</span>', '最高5000万，利息低至3厘', '');
INSERT INTO `eb_notice` VALUES ('17', '3', '黑名单贷款', '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">文章内容</span>', '0', 'https://mini2.374628.com //uploads/image/20171021/20171021095117_77041.jpg', null, null, null, null, '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">产品优势</span>', '广州本地人或者自己，父母名下有房产即可申请', '');
INSERT INTO `eb_notice` VALUES ('15', '3', '无抵押信用贷款', '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">文章内容</span>', '0', 'https://mini2.374628.com //uploads/image/20171021/20171021095016_42904.jpg', null, null, null, null, '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\"><span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">产品优势</span></span>', '只需个税，代发2000以上，社保公积金其中一样即可申请，利息', '');
INSERT INTO `eb_notice` VALUES ('16', '3', '大额网贷公证贷款', '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">文章内容</span>', '0', 'https://mini2.374628.com //uploads/image/20171021/20171021095049_88266.jpg', null, null, null, null, '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">产品优势</span>', '就算房产做了二押，无空间无房产证，只需要有照片或复印件即可', '');
INSERT INTO `eb_notice` VALUES ('14', '3', '月供房无抵押信用贷', '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">文章内容</span>', '0', 'https://mini2.374628.com //uploads/image/20171021/20171021094644_63800.jpg', null, null, null, null, '<span style=\"color:#656D78;font-family:&quot;font-size:15px;font-weight:bold;background-color:#FFFFFF;\">产品优势</span>', '全国月供房无抵押信用贷款抵押或按揭月供0月起即可申请', '');

-- ----------------------------
-- Table structure for `eb_notice_cate`
-- ----------------------------
DROP TABLE IF EXISTS `eb_notice_cate`;
CREATE TABLE `eb_notice_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `hide` varchar(255) DEFAULT '0' COMMENT '0不隐藏，1隐藏',
  `pid` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  `banner` int(1) DEFAULT '0',
  `onepages` tinyint(1) DEFAULT '0' COMMENT '是否单页 1是 0 否',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='新闻公告分类';

-- ----------------------------
-- Records of eb_notice_cate
-- ----------------------------
INSERT INTO `eb_notice_cate` VALUES ('1', null, '关于我们', null, '0', '0', '0', '1', '1');
INSERT INTO `eb_notice_cate` VALUES ('2', null, '加入我们', null, '0', '0', '0', '1', '1');
INSERT INTO `eb_notice_cate` VALUES ('3', null, '贷款产品', null, '0', '0', '0', '0', '0');
INSERT INTO `eb_notice_cate` VALUES ('4', null, '核心团队', null, '0', '0', '0', '0', '0');
INSERT INTO `eb_notice_cate` VALUES ('5', null, '联系我们', null, '0', '0', '0', '1', '0');

-- ----------------------------
-- Table structure for `eb_refund`
-- ----------------------------
DROP TABLE IF EXISTS `eb_refund`;
CREATE TABLE `eb_refund` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `order_id` int(10) unsigned DEFAULT NULL,
  `order_sn` varchar(30) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `post_time` int(10) unsigned DEFAULT NULL COMMENT '申请日期',
  `note` varchar(255) DEFAULT NULL COMMENT '退款说明',
  `status` tinyint(1) DEFAULT '0' COMMENT '处理状态：\r\n0未处理\r\n1已处理',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='退款表';

-- ----------------------------
-- Records of eb_refund
-- ----------------------------
INSERT INTO `eb_refund` VALUES ('235', null, '', '0', '10.00', null, null, '0');

-- ----------------------------
-- Table structure for `eb_regions`
-- ----------------------------
DROP TABLE IF EXISTS `eb_regions`;
CREATE TABLE `eb_regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `sort` int(10) unsigned DEFAULT '50',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=369 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eb_regions
-- ----------------------------
INSERT INTO `eb_regions` VALUES ('1', '0', '北京市', '1');
INSERT INTO `eb_regions` VALUES ('2', '0', '上海市', '2');
INSERT INTO `eb_regions` VALUES ('3', '0', '天津市', '3');
INSERT INTO `eb_regions` VALUES ('4', '0', '重庆市', '4');
INSERT INTO `eb_regions` VALUES ('5', '0', '河北省', '5');
INSERT INTO `eb_regions` VALUES ('6', '5', '石家庄市', '6');
INSERT INTO `eb_regions` VALUES ('7', '5', '邯郸市', '7');
INSERT INTO `eb_regions` VALUES ('8', '5', '邢台市', '8');
INSERT INTO `eb_regions` VALUES ('9', '5', '保定市', '9');
INSERT INTO `eb_regions` VALUES ('10', '5', '张家口市', '10');
INSERT INTO `eb_regions` VALUES ('11', '5', '承德市', '11');
INSERT INTO `eb_regions` VALUES ('12', '5', '廊坊市', '12');
INSERT INTO `eb_regions` VALUES ('13', '5', '唐山市', '13');
INSERT INTO `eb_regions` VALUES ('14', '5', '秦皇岛市', '14');
INSERT INTO `eb_regions` VALUES ('15', '5', '沧州市', '15');
INSERT INTO `eb_regions` VALUES ('16', '5', '衡水市', '16');
INSERT INTO `eb_regions` VALUES ('17', '0', '山西省', '17');
INSERT INTO `eb_regions` VALUES ('18', '17', '太原市', '18');
INSERT INTO `eb_regions` VALUES ('19', '17', '大同市', '19');
INSERT INTO `eb_regions` VALUES ('20', '17', '阳泉市', '20');
INSERT INTO `eb_regions` VALUES ('21', '17', '长治市', '21');
INSERT INTO `eb_regions` VALUES ('22', '17', '晋城市', '22');
INSERT INTO `eb_regions` VALUES ('23', '17', '朔州市', '23');
INSERT INTO `eb_regions` VALUES ('24', '17', '吕梁市', '24');
INSERT INTO `eb_regions` VALUES ('25', '17', '忻州市', '25');
INSERT INTO `eb_regions` VALUES ('26', '17', '晋中市', '26');
INSERT INTO `eb_regions` VALUES ('27', '17', '临汾市', '27');
INSERT INTO `eb_regions` VALUES ('28', '17', '运城市', '28');
INSERT INTO `eb_regions` VALUES ('29', '0', '辽宁省', '29');
INSERT INTO `eb_regions` VALUES ('30', '29', '沈阳市', '30');
INSERT INTO `eb_regions` VALUES ('31', '29', '大连市', '31');
INSERT INTO `eb_regions` VALUES ('32', '29', '鞍山市', '32');
INSERT INTO `eb_regions` VALUES ('33', '29', '抚顺市', '33');
INSERT INTO `eb_regions` VALUES ('34', '29', '本溪市', '34');
INSERT INTO `eb_regions` VALUES ('35', '29', '丹东市', '35');
INSERT INTO `eb_regions` VALUES ('36', '29', '锦州市', '36');
INSERT INTO `eb_regions` VALUES ('37', '29', '营口市', '37');
INSERT INTO `eb_regions` VALUES ('38', '29', '阜新市', '38');
INSERT INTO `eb_regions` VALUES ('39', '29', '辽阳市', '39');
INSERT INTO `eb_regions` VALUES ('40', '29', '盘锦市', '40');
INSERT INTO `eb_regions` VALUES ('41', '29', '铁岭市', '41');
INSERT INTO `eb_regions` VALUES ('42', '29', '朝阳市', '42');
INSERT INTO `eb_regions` VALUES ('43', '29', '葫芦岛市', '43');
INSERT INTO `eb_regions` VALUES ('44', '0', '吉林省', '44');
INSERT INTO `eb_regions` VALUES ('45', '44', '长春市', '45');
INSERT INTO `eb_regions` VALUES ('46', '44', '吉林市', '46');
INSERT INTO `eb_regions` VALUES ('47', '44', '四平市', '47');
INSERT INTO `eb_regions` VALUES ('48', '44', '辽源市', '48');
INSERT INTO `eb_regions` VALUES ('49', '44', '通化市', '49');
INSERT INTO `eb_regions` VALUES ('50', '44', '白山市', '50');
INSERT INTO `eb_regions` VALUES ('51', '44', '白城市', '51');
INSERT INTO `eb_regions` VALUES ('52', '44', '延边市', '52');
INSERT INTO `eb_regions` VALUES ('53', '0', '黑龙江省', '53');
INSERT INTO `eb_regions` VALUES ('54', '53', '哈尔滨市', '54');
INSERT INTO `eb_regions` VALUES ('55', '53', '齐齐哈尔市', '55');
INSERT INTO `eb_regions` VALUES ('56', '53', '牡丹江市', '56');
INSERT INTO `eb_regions` VALUES ('57', '53', '佳木斯市', '57');
INSERT INTO `eb_regions` VALUES ('58', '53', '大庆市', '58');
INSERT INTO `eb_regions` VALUES ('59', '53', '绥化市', '59');
INSERT INTO `eb_regions` VALUES ('60', '53', '鹤岗市', '60');
INSERT INTO `eb_regions` VALUES ('61', '53', '鸡西市', '61');
INSERT INTO `eb_regions` VALUES ('62', '53', '黑河市', '62');
INSERT INTO `eb_regions` VALUES ('63', '53', '双鸭山市', '63');
INSERT INTO `eb_regions` VALUES ('64', '53', '伊春市', '64');
INSERT INTO `eb_regions` VALUES ('65', '53', '七台河市', '65');
INSERT INTO `eb_regions` VALUES ('66', '53', '大兴安岭市', '66');
INSERT INTO `eb_regions` VALUES ('67', '0', '江苏省', '67');
INSERT INTO `eb_regions` VALUES ('68', '67', '南京市', '68');
INSERT INTO `eb_regions` VALUES ('69', '67', '镇江市', '69');
INSERT INTO `eb_regions` VALUES ('70', '67', '苏州市', '70');
INSERT INTO `eb_regions` VALUES ('71', '67', '南通市', '71');
INSERT INTO `eb_regions` VALUES ('72', '67', '扬州市', '72');
INSERT INTO `eb_regions` VALUES ('73', '67', '盐城市', '73');
INSERT INTO `eb_regions` VALUES ('74', '67', '徐州市', '74');
INSERT INTO `eb_regions` VALUES ('75', '67', '连云港市', '75');
INSERT INTO `eb_regions` VALUES ('76', '67', '常州市', '76');
INSERT INTO `eb_regions` VALUES ('77', '67', '无锡市', '77');
INSERT INTO `eb_regions` VALUES ('78', '67', '宿迁市', '78');
INSERT INTO `eb_regions` VALUES ('79', '67', '泰州市', '79');
INSERT INTO `eb_regions` VALUES ('80', '67', '淮安市', '80');
INSERT INTO `eb_regions` VALUES ('81', '0', '浙江省', '81');
INSERT INTO `eb_regions` VALUES ('82', '81', '杭州市', '82');
INSERT INTO `eb_regions` VALUES ('83', '81', '宁波市', '83');
INSERT INTO `eb_regions` VALUES ('84', '81', '温州市', '84');
INSERT INTO `eb_regions` VALUES ('85', '81', '嘉兴市', '85');
INSERT INTO `eb_regions` VALUES ('86', '81', '湖州市', '86');
INSERT INTO `eb_regions` VALUES ('87', '81', '绍兴市', '87');
INSERT INTO `eb_regions` VALUES ('88', '81', '金华市', '88');
INSERT INTO `eb_regions` VALUES ('89', '81', '衢州市', '89');
INSERT INTO `eb_regions` VALUES ('90', '81', '舟山市', '90');
INSERT INTO `eb_regions` VALUES ('91', '81', '台州市', '91');
INSERT INTO `eb_regions` VALUES ('92', '81', '丽水市', '92');
INSERT INTO `eb_regions` VALUES ('93', '0', '安徽省', '93');
INSERT INTO `eb_regions` VALUES ('94', '93', '合肥市', '94');
INSERT INTO `eb_regions` VALUES ('95', '93', '芜湖市', '95');
INSERT INTO `eb_regions` VALUES ('96', '93', '蚌埠市', '96');
INSERT INTO `eb_regions` VALUES ('97', '93', '马鞍山市', '97');
INSERT INTO `eb_regions` VALUES ('98', '93', '淮北市', '98');
INSERT INTO `eb_regions` VALUES ('99', '93', '铜陵市', '99');
INSERT INTO `eb_regions` VALUES ('100', '93', '安庆市', '100');
INSERT INTO `eb_regions` VALUES ('101', '93', '黄山市', '101');
INSERT INTO `eb_regions` VALUES ('102', '93', '滁州市', '102');
INSERT INTO `eb_regions` VALUES ('103', '93', '宿州市', '103');
INSERT INTO `eb_regions` VALUES ('104', '93', '池州市', '104');
INSERT INTO `eb_regions` VALUES ('105', '93', '淮南市', '105');
INSERT INTO `eb_regions` VALUES ('106', '93', '巢湖市', '106');
INSERT INTO `eb_regions` VALUES ('107', '93', '阜阳市', '107');
INSERT INTO `eb_regions` VALUES ('108', '93', '六安市', '108');
INSERT INTO `eb_regions` VALUES ('109', '93', '宣城市', '109');
INSERT INTO `eb_regions` VALUES ('110', '93', '亳州市', '110');
INSERT INTO `eb_regions` VALUES ('111', '0', '福建省', '111');
INSERT INTO `eb_regions` VALUES ('112', '111', '福州市', '112');
INSERT INTO `eb_regions` VALUES ('113', '111', '厦门市', '113');
INSERT INTO `eb_regions` VALUES ('114', '111', '莆田市', '114');
INSERT INTO `eb_regions` VALUES ('115', '111', '三明市', '115');
INSERT INTO `eb_regions` VALUES ('116', '111', '泉州市', '116');
INSERT INTO `eb_regions` VALUES ('117', '111', '漳州市', '117');
INSERT INTO `eb_regions` VALUES ('118', '111', '南平市', '118');
INSERT INTO `eb_regions` VALUES ('119', '111', '龙岩市', '119');
INSERT INTO `eb_regions` VALUES ('120', '111', '宁德市', '120');
INSERT INTO `eb_regions` VALUES ('121', '0', '江西省', '121');
INSERT INTO `eb_regions` VALUES ('122', '121', '南昌市', '122');
INSERT INTO `eb_regions` VALUES ('123', '121', '景德镇市', '123');
INSERT INTO `eb_regions` VALUES ('124', '121', '九江市', '124');
INSERT INTO `eb_regions` VALUES ('125', '121', '鹰潭市', '125');
INSERT INTO `eb_regions` VALUES ('126', '121', '萍乡市', '126');
INSERT INTO `eb_regions` VALUES ('127', '121', '新馀市', '127');
INSERT INTO `eb_regions` VALUES ('128', '121', '赣州市', '128');
INSERT INTO `eb_regions` VALUES ('129', '121', '吉安市', '129');
INSERT INTO `eb_regions` VALUES ('130', '121', '宜春市', '130');
INSERT INTO `eb_regions` VALUES ('131', '121', '抚州市', '131');
INSERT INTO `eb_regions` VALUES ('132', '121', '上饶市', '132');
INSERT INTO `eb_regions` VALUES ('133', '0', '山东省', '133');
INSERT INTO `eb_regions` VALUES ('134', '133', '济南市', '134');
INSERT INTO `eb_regions` VALUES ('135', '133', '淄博市', '135');
INSERT INTO `eb_regions` VALUES ('136', '133', '枣庄市', '136');
INSERT INTO `eb_regions` VALUES ('137', '133', '东营市', '137');
INSERT INTO `eb_regions` VALUES ('138', '133', '烟台市', '138');
INSERT INTO `eb_regions` VALUES ('139', '133', '潍坊市', '139');
INSERT INTO `eb_regions` VALUES ('140', '133', '济宁市', '140');
INSERT INTO `eb_regions` VALUES ('141', '133', '泰安市', '141');
INSERT INTO `eb_regions` VALUES ('142', '133', '威海市', '142');
INSERT INTO `eb_regions` VALUES ('143', '133', '日照市', '143');
INSERT INTO `eb_regions` VALUES ('144', '133', '莱芜市', '144');
INSERT INTO `eb_regions` VALUES ('145', '133', '临沂市', '145');
INSERT INTO `eb_regions` VALUES ('146', '133', '德州市', '146');
INSERT INTO `eb_regions` VALUES ('147', '133', '聊城市', '147');
INSERT INTO `eb_regions` VALUES ('148', '133', '滨州市', '148');
INSERT INTO `eb_regions` VALUES ('149', '133', '菏泽市', '149');
INSERT INTO `eb_regions` VALUES ('150', '0', '河南省', '150');
INSERT INTO `eb_regions` VALUES ('151', '150', '郑州市', '151');
INSERT INTO `eb_regions` VALUES ('152', '150', '开封市', '152');
INSERT INTO `eb_regions` VALUES ('153', '150', '洛阳市', '153');
INSERT INTO `eb_regions` VALUES ('154', '150', '平顶山市', '154');
INSERT INTO `eb_regions` VALUES ('155', '150', '安阳市', '155');
INSERT INTO `eb_regions` VALUES ('156', '150', '鹤壁市', '156');
INSERT INTO `eb_regions` VALUES ('157', '150', '新乡市', '157');
INSERT INTO `eb_regions` VALUES ('158', '150', '焦作市', '158');
INSERT INTO `eb_regions` VALUES ('159', '150', '濮阳市', '159');
INSERT INTO `eb_regions` VALUES ('160', '150', '许昌市', '160');
INSERT INTO `eb_regions` VALUES ('161', '150', '漯河市', '161');
INSERT INTO `eb_regions` VALUES ('162', '150', '三门峡市', '162');
INSERT INTO `eb_regions` VALUES ('163', '150', '南阳市', '163');
INSERT INTO `eb_regions` VALUES ('164', '150', '商丘市', '164');
INSERT INTO `eb_regions` VALUES ('165', '150', '信阳市', '165');
INSERT INTO `eb_regions` VALUES ('166', '150', '周口市', '166');
INSERT INTO `eb_regions` VALUES ('167', '150', '驻马店市', '167');
INSERT INTO `eb_regions` VALUES ('168', '150', '济源市', '168');
INSERT INTO `eb_regions` VALUES ('169', '0', '湖北省', '169');
INSERT INTO `eb_regions` VALUES ('170', '169', '武汉市', '170');
INSERT INTO `eb_regions` VALUES ('171', '169', '鄂州市', '171');
INSERT INTO `eb_regions` VALUES ('172', '169', '宜昌市', '172');
INSERT INTO `eb_regions` VALUES ('173', '169', '荆州市', '173');
INSERT INTO `eb_regions` VALUES ('174', '169', '襄樊市', '174');
INSERT INTO `eb_regions` VALUES ('175', '169', '黄石市', '175');
INSERT INTO `eb_regions` VALUES ('176', '169', '荆门市', '176');
INSERT INTO `eb_regions` VALUES ('177', '169', '黄冈市', '177');
INSERT INTO `eb_regions` VALUES ('178', '169', '十堰市', '178');
INSERT INTO `eb_regions` VALUES ('179', '169', '恩施市', '179');
INSERT INTO `eb_regions` VALUES ('180', '169', '潜江市', '180');
INSERT INTO `eb_regions` VALUES ('181', '169', '天门市', '181');
INSERT INTO `eb_regions` VALUES ('182', '169', '仙桃市', '182');
INSERT INTO `eb_regions` VALUES ('183', '169', '随州市', '183');
INSERT INTO `eb_regions` VALUES ('184', '169', '咸宁市', '184');
INSERT INTO `eb_regions` VALUES ('185', '169', '孝感市', '185');
INSERT INTO `eb_regions` VALUES ('186', '0', '湖南省', '186');
INSERT INTO `eb_regions` VALUES ('187', '186', '长沙市', '187');
INSERT INTO `eb_regions` VALUES ('188', '186', '常德市', '188');
INSERT INTO `eb_regions` VALUES ('189', '186', '株洲市', '189');
INSERT INTO `eb_regions` VALUES ('190', '186', '湘潭市', '190');
INSERT INTO `eb_regions` VALUES ('191', '186', '衡阳市', '191');
INSERT INTO `eb_regions` VALUES ('192', '186', '岳阳市', '192');
INSERT INTO `eb_regions` VALUES ('193', '186', '邵阳市', '193');
INSERT INTO `eb_regions` VALUES ('194', '186', '益阳市', '194');
INSERT INTO `eb_regions` VALUES ('195', '186', '娄底市', '195');
INSERT INTO `eb_regions` VALUES ('196', '186', '怀化市', '196');
INSERT INTO `eb_regions` VALUES ('197', '186', '郴州市', '197');
INSERT INTO `eb_regions` VALUES ('198', '186', '永州市', '198');
INSERT INTO `eb_regions` VALUES ('199', '186', '湘西市', '199');
INSERT INTO `eb_regions` VALUES ('200', '186', '张家界市', '200');
INSERT INTO `eb_regions` VALUES ('201', '0', '广东省', '201');
INSERT INTO `eb_regions` VALUES ('202', '201', '广州市', '202');
INSERT INTO `eb_regions` VALUES ('203', '201', '深圳市', '203');
INSERT INTO `eb_regions` VALUES ('204', '201', '珠海市', '204');
INSERT INTO `eb_regions` VALUES ('205', '201', '汕头市', '205');
INSERT INTO `eb_regions` VALUES ('206', '201', '东莞市', '206');
INSERT INTO `eb_regions` VALUES ('207', '201', '中山市', '207');
INSERT INTO `eb_regions` VALUES ('208', '201', '佛山市', '208');
INSERT INTO `eb_regions` VALUES ('209', '201', '韶关市', '209');
INSERT INTO `eb_regions` VALUES ('210', '201', '江门市', '210');
INSERT INTO `eb_regions` VALUES ('211', '201', '湛江市', '211');
INSERT INTO `eb_regions` VALUES ('212', '201', '茂名市', '212');
INSERT INTO `eb_regions` VALUES ('213', '201', '肇庆市', '213');
INSERT INTO `eb_regions` VALUES ('214', '201', '惠州市', '214');
INSERT INTO `eb_regions` VALUES ('215', '201', '梅州市', '215');
INSERT INTO `eb_regions` VALUES ('216', '201', '汕尾市', '216');
INSERT INTO `eb_regions` VALUES ('217', '201', '河源市', '217');
INSERT INTO `eb_regions` VALUES ('218', '201', '阳江市', '218');
INSERT INTO `eb_regions` VALUES ('219', '201', '清远市', '219');
INSERT INTO `eb_regions` VALUES ('220', '201', '潮州市', '220');
INSERT INTO `eb_regions` VALUES ('221', '201', '揭阳市', '221');
INSERT INTO `eb_regions` VALUES ('222', '201', '云浮市', '222');
INSERT INTO `eb_regions` VALUES ('223', '0', '甘肃省', '223');
INSERT INTO `eb_regions` VALUES ('224', '223', '兰州市', '224');
INSERT INTO `eb_regions` VALUES ('225', '223', '嘉峪关市', '225');
INSERT INTO `eb_regions` VALUES ('226', '223', '金昌市', '226');
INSERT INTO `eb_regions` VALUES ('227', '223', '白银市', '224');
INSERT INTO `eb_regions` VALUES ('228', '223', '天水市', '228');
INSERT INTO `eb_regions` VALUES ('229', '223', '酒泉市', '229');
INSERT INTO `eb_regions` VALUES ('230', '223', '张掖市', '230');
INSERT INTO `eb_regions` VALUES ('231', '223', '武威市', '231');
INSERT INTO `eb_regions` VALUES ('232', '223', '定西市', '232');
INSERT INTO `eb_regions` VALUES ('233', '223', '陇南市', '233');
INSERT INTO `eb_regions` VALUES ('234', '223', '平凉市', '234');
INSERT INTO `eb_regions` VALUES ('235', '223', '庆阳市', '235');
INSERT INTO `eb_regions` VALUES ('236', '223', '临夏市', '236');
INSERT INTO `eb_regions` VALUES ('237', '223', '甘南市', '237');
INSERT INTO `eb_regions` VALUES ('238', '0', '陕西省', '238');
INSERT INTO `eb_regions` VALUES ('239', '238', '西安市', '239');
INSERT INTO `eb_regions` VALUES ('240', '238', '宝鸡市', '240');
INSERT INTO `eb_regions` VALUES ('241', '238', '咸阳市', '241');
INSERT INTO `eb_regions` VALUES ('242', '238', '铜川市', '242');
INSERT INTO `eb_regions` VALUES ('243', '238', '渭南市', '243');
INSERT INTO `eb_regions` VALUES ('244', '238', '延安市', '244');
INSERT INTO `eb_regions` VALUES ('245', '238', '榆林市', '245');
INSERT INTO `eb_regions` VALUES ('246', '238', '汉中市', '246');
INSERT INTO `eb_regions` VALUES ('247', '238', '安康市', '247');
INSERT INTO `eb_regions` VALUES ('248', '238', '商洛市', '248');
INSERT INTO `eb_regions` VALUES ('249', '0', '内蒙古', '249');
INSERT INTO `eb_regions` VALUES ('250', '249', '呼和浩特市', '250');
INSERT INTO `eb_regions` VALUES ('251', '249', '包头市', '251');
INSERT INTO `eb_regions` VALUES ('252', '249', '乌海市', '252');
INSERT INTO `eb_regions` VALUES ('253', '249', '集宁市', '253');
INSERT INTO `eb_regions` VALUES ('254', '249', '通辽市', '254');
INSERT INTO `eb_regions` VALUES ('255', '249', '赤峰市', '255');
INSERT INTO `eb_regions` VALUES ('256', '249', '呼伦贝尔盟', '255');
INSERT INTO `eb_regions` VALUES ('257', '249', '阿拉善盟', '255');
INSERT INTO `eb_regions` VALUES ('258', '249', '哲里木盟', '255');
INSERT INTO `eb_regions` VALUES ('259', '249', '兴安盟', '255');
INSERT INTO `eb_regions` VALUES ('260', '249', '乌兰察布盟', '255');
INSERT INTO `eb_regions` VALUES ('261', '249', '锡林郭勒盟', '255');
INSERT INTO `eb_regions` VALUES ('262', '249', '巴彦淖尔盟', '255');
INSERT INTO `eb_regions` VALUES ('263', '249', '伊克昭盟', '255');
INSERT INTO `eb_regions` VALUES ('264', '0', '广西', '255');
INSERT INTO `eb_regions` VALUES ('265', '264', '南宁市', '255');
INSERT INTO `eb_regions` VALUES ('266', '264', '柳州市', '255');
INSERT INTO `eb_regions` VALUES ('267', '264', '桂林市', '255');
INSERT INTO `eb_regions` VALUES ('268', '264', '梧州市', '255');
INSERT INTO `eb_regions` VALUES ('269', '264', '北海市', '255');
INSERT INTO `eb_regions` VALUES ('270', '264', '防城港市', '255');
INSERT INTO `eb_regions` VALUES ('271', '264', '钦州市', '255');
INSERT INTO `eb_regions` VALUES ('272', '264', '贵港市', '255');
INSERT INTO `eb_regions` VALUES ('273', '264', '玉林市', '255');
INSERT INTO `eb_regions` VALUES ('274', '264', '贺州市', '255');
INSERT INTO `eb_regions` VALUES ('275', '264', '百色市', '255');
INSERT INTO `eb_regions` VALUES ('276', '264', '河池市', '255');
INSERT INTO `eb_regions` VALUES ('277', '0', '四川省', '255');
INSERT INTO `eb_regions` VALUES ('278', '277', '成都市', '255');
INSERT INTO `eb_regions` VALUES ('279', '277', '绵阳市', '255');
INSERT INTO `eb_regions` VALUES ('280', '277', '德阳市', '255');
INSERT INTO `eb_regions` VALUES ('281', '277', '自贡市', '255');
INSERT INTO `eb_regions` VALUES ('282', '277', '攀枝花市', '255');
INSERT INTO `eb_regions` VALUES ('283', '277', '广元市', '255');
INSERT INTO `eb_regions` VALUES ('284', '277', '内江市', '255');
INSERT INTO `eb_regions` VALUES ('285', '277', '乐山市', '255');
INSERT INTO `eb_regions` VALUES ('286', '277', '南充市', '255');
INSERT INTO `eb_regions` VALUES ('287', '277', '宜宾市', '255');
INSERT INTO `eb_regions` VALUES ('288', '277', '广安市', '255');
INSERT INTO `eb_regions` VALUES ('289', '277', '达川市', '255');
INSERT INTO `eb_regions` VALUES ('290', '277', '雅安市', '255');
INSERT INTO `eb_regions` VALUES ('291', '277', '眉山市', '255');
INSERT INTO `eb_regions` VALUES ('292', '277', '甘孜市', '255');
INSERT INTO `eb_regions` VALUES ('293', '277', '凉山市', '255');
INSERT INTO `eb_regions` VALUES ('294', '277', '泸州市', '255');
INSERT INTO `eb_regions` VALUES ('295', '0', '贵州省', '255');
INSERT INTO `eb_regions` VALUES ('296', '295', '贵阳市', '255');
INSERT INTO `eb_regions` VALUES ('297', '295', '六盘水市', '255');
INSERT INTO `eb_regions` VALUES ('298', '295', '遵义市', '255');
INSERT INTO `eb_regions` VALUES ('299', '295', '安顺市', '255');
INSERT INTO `eb_regions` VALUES ('300', '295', '铜仁市', '255');
INSERT INTO `eb_regions` VALUES ('301', '295', '黔西南市', '255');
INSERT INTO `eb_regions` VALUES ('302', '295', '毕节市', '255');
INSERT INTO `eb_regions` VALUES ('303', '295', '黔东南市', '255');
INSERT INTO `eb_regions` VALUES ('304', '295', '黔南市', '255');
INSERT INTO `eb_regions` VALUES ('305', '0', '云南省', '255');
INSERT INTO `eb_regions` VALUES ('306', '305', '昆明市', '255');
INSERT INTO `eb_regions` VALUES ('307', '305', '大理市', '255');
INSERT INTO `eb_regions` VALUES ('308', '305', '曲靖市', '255');
INSERT INTO `eb_regions` VALUES ('309', '305', '玉溪市', '255');
INSERT INTO `eb_regions` VALUES ('310', '305', '昭通市', '255');
INSERT INTO `eb_regions` VALUES ('311', '305', '楚雄市', '255');
INSERT INTO `eb_regions` VALUES ('312', '305', '红河市', '255');
INSERT INTO `eb_regions` VALUES ('313', '305', '文山市', '255');
INSERT INTO `eb_regions` VALUES ('314', '305', '思茅市', '255');
INSERT INTO `eb_regions` VALUES ('315', '305', '西双版纳市', '255');
INSERT INTO `eb_regions` VALUES ('316', '305', '保山市', '255');
INSERT INTO `eb_regions` VALUES ('317', '305', '德宏市', '255');
INSERT INTO `eb_regions` VALUES ('318', '305', '丽江市', '255');
INSERT INTO `eb_regions` VALUES ('319', '305', '怒江市', '255');
INSERT INTO `eb_regions` VALUES ('320', '305', '迪庆市', '255');
INSERT INTO `eb_regions` VALUES ('321', '305', '临沧市', '255');
INSERT INTO `eb_regions` VALUES ('322', '0', '西藏', '255');
INSERT INTO `eb_regions` VALUES ('323', '322', '拉萨市', '255');
INSERT INTO `eb_regions` VALUES ('324', '322', '日喀则市', '255');
INSERT INTO `eb_regions` VALUES ('325', '322', '山南市', '255');
INSERT INTO `eb_regions` VALUES ('326', '322', '林芝市', '255');
INSERT INTO `eb_regions` VALUES ('327', '322', '昌都市', '255');
INSERT INTO `eb_regions` VALUES ('328', '322', '阿里市', '255');
INSERT INTO `eb_regions` VALUES ('329', '322', '那曲市', '255');
INSERT INTO `eb_regions` VALUES ('330', '0', '海南省', '255');
INSERT INTO `eb_regions` VALUES ('331', '330', '海口市', '255');
INSERT INTO `eb_regions` VALUES ('332', '330', '三亚市', '255');
INSERT INTO `eb_regions` VALUES ('333', '0', '宁夏', '255');
INSERT INTO `eb_regions` VALUES ('334', '333', '银川市', '255');
INSERT INTO `eb_regions` VALUES ('335', '333', '石嘴山市', '255');
INSERT INTO `eb_regions` VALUES ('336', '333', '吴忠市', '255');
INSERT INTO `eb_regions` VALUES ('337', '333', '固原市', '255');
INSERT INTO `eb_regions` VALUES ('338', '0', '青海省', '255');
INSERT INTO `eb_regions` VALUES ('339', '338', '西宁市', '255');
INSERT INTO `eb_regions` VALUES ('340', '338', '海东市', '255');
INSERT INTO `eb_regions` VALUES ('341', '338', '海南市', '255');
INSERT INTO `eb_regions` VALUES ('342', '338', '海北市', '255');
INSERT INTO `eb_regions` VALUES ('343', '338', '玉树市', '255');
INSERT INTO `eb_regions` VALUES ('344', '338', '果洛市', '255');
INSERT INTO `eb_regions` VALUES ('345', '338', '海西市', '255');
INSERT INTO `eb_regions` VALUES ('346', '338', '黄南市', '255');
INSERT INTO `eb_regions` VALUES ('347', '0', '新疆', '255');
INSERT INTO `eb_regions` VALUES ('348', '347', '乌鲁木齐市', '255');
INSERT INTO `eb_regions` VALUES ('349', '347', '石河子市', '255');
INSERT INTO `eb_regions` VALUES ('350', '347', '克拉玛依市', '255');
INSERT INTO `eb_regions` VALUES ('351', '347', '伊犁市', '255');
INSERT INTO `eb_regions` VALUES ('352', '347', '巴音郭勒市', '255');
INSERT INTO `eb_regions` VALUES ('353', '347', '昌吉市', '255');
INSERT INTO `eb_regions` VALUES ('354', '347', '克孜勒苏柯尔克孜市', '255');
INSERT INTO `eb_regions` VALUES ('355', '347', '博尔塔拉市', '255');
INSERT INTO `eb_regions` VALUES ('356', '347', '吐鲁番市', '255');
INSERT INTO `eb_regions` VALUES ('357', '347', '哈密市', '255');
INSERT INTO `eb_regions` VALUES ('358', '347', '喀什市', '255');
INSERT INTO `eb_regions` VALUES ('359', '347', '和田市', '255');
INSERT INTO `eb_regions` VALUES ('360', '347', '阿克苏市', '255');
INSERT INTO `eb_regions` VALUES ('361', '0', '香港', '255');
INSERT INTO `eb_regions` VALUES ('362', '0', '澳门', '255');
INSERT INTO `eb_regions` VALUES ('363', '0', '台湾省', '255');
INSERT INTO `eb_regions` VALUES ('364', '202', '天河区', '50');
INSERT INTO `eb_regions` VALUES ('365', '202', '白云区', '50');
INSERT INTO `eb_regions` VALUES ('366', '202', '番禺区', '50');
INSERT INTO `eb_regions` VALUES ('367', '202', '荔湾区', '50');
INSERT INTO `eb_regions` VALUES ('368', '202', '黄浦区', '50');

-- ----------------------------
-- Table structure for `eb_title`
-- ----------------------------
DROP TABLE IF EXISTS `eb_title`;
CREATE TABLE `eb_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eb_title
-- ----------------------------
INSERT INTO `eb_title` VALUES ('1', '庆易贷款');

-- ----------------------------
-- Table structure for `eb_unit`
-- ----------------------------
DROP TABLE IF EXISTS `eb_unit`;
CREATE TABLE `eb_unit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `sort` int(11) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eb_unit
-- ----------------------------

-- ----------------------------
-- Table structure for `eb_user`
-- ----------------------------
DROP TABLE IF EXISTS `eb_user`;
CREATE TABLE `eb_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(32) DEFAULT NULL,
  `openid` varchar(100) DEFAULT NULL COMMENT '微信用户对应公众号唯一id',
  `nickname` varchar(100) DEFAULT NULL COMMENT '微信昵称',
  `avatars` varchar(255) DEFAULT NULL COMMENT '用户头像,对应微信headimgurl',
  `gender` int(1) DEFAULT '0' COMMENT '性别，0-保密；1-男；2-女',
  `city` varchar(50) DEFAULT NULL COMMENT '城市,对应微信city',
  `birthday` date DEFAULT NULL COMMENT '生日,1900-12-12',
  `phone` varchar(50) DEFAULT NULL,
  `regions` int(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `reg_time` int(10) DEFAULT NULL,
  `last_login_time` int(10) unsigned DEFAULT NULL,
  `last_login_ip` varchar(15) DEFAULT NULL,
  `remark` varchar(30) DEFAULT NULL COMMENT '微信用户备注名',
  `language` varchar(8) DEFAULT NULL COMMENT '语言',
  `province` varchar(32) DEFAULT NULL COMMENT '省',
  `country` varchar(32) DEFAULT NULL COMMENT '国家',
  PRIMARY KEY (`id`),
  UNIQUE KEY `openid` (`openid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eb_user
-- ----------------------------
INSERT INTO `eb_user` VALUES ('1', null, null, '淋', 'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83er9KoiaAzA68W56WlzJZtVTEfadAlku7OXN3xbiaZ0o7ctcoaTRpCibqxHNRfmxYu12ESC5wNebRRYvQ/0', '2', '', null, null, null, '1', '1508142910', '1508142910', null, null, 'zh_CN', '', 'Andorra');
INSERT INTO `eb_user` VALUES ('2', null, null, '华仔', 'https://wx.qlogo.cn/mmopen/vi_32/1xJwuMWRltiaVmRzP4w6A6LIpYyicTKr3fJM3jSdqsNR8WBRs2O7WoxeupTAs6oEceoUqbjE1riaM47tS2ibdic3Jyg/0', '1', 'Guangzhou', null, null, null, '1', '1508250394', '1508250394', null, null, 'zh_CN', 'Guangdong', 'China');
INSERT INTO `eb_user` VALUES ('3', null, null, '李洪', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJS0vVzOxJBerH6uG1UdJ39FKX8MicWtu7pcYgmlIoAicLWoiard16UfT8iaaic5LVdSDJWIJJib2cwRATA/0', '1', 'Guangzhou', null, null, null, '1', '1508313651', '1508313651', null, null, 'zh_CN', 'Guangdong', 'China');
INSERT INTO `eb_user` VALUES ('4', null, null, '柒号科技', 'https://wx.qlogo.cn/mmopen/vi_32/Y2icoqHESf05mYZicaCCoA23awibLZia9vZkjfrjmuntqHP9uOvhQicBrQGTA8nTVrVsRDWxjv0fPTuSL6Gf3hQhkxg/0', '1', 'Nanjing', null, null, null, '1', '1508299760', '1508299760', null, null, 'zh_CN', 'Jiangsu', 'China');
INSERT INTO `eb_user` VALUES ('5', null, null, 'rdgztest_QIKGVW', '', '0', '', null, null, null, '1', '1506322215', '1506322215', null, null, 'zh_CN', '', '');
INSERT INTO `eb_user` VALUES ('6', null, null, 'rdgztest_XDGFFF', '', '0', '', null, null, null, '1', '1508144535', '1508144535', null, null, 'zh_CN', '', '');
INSERT INTO `eb_user` VALUES ('7', null, null, 'rdgztest_ZCYPDF', '', '0', '', null, null, null, '1', '1508203067', '1508203067', null, null, 'zh_CN', '', '');
INSERT INTO `eb_user` VALUES ('8', null, null, 'Hong', 'https://wx.qlogo.cn/mmopen/vi_32/OuEQCn9hFGuaJxM8azqfSvicw2qS38RJ79icGStLSicqhjzJJwZeE9ERI0an3VRftNw8OmRFqhTYrbIuscziaibKYYQ/0', '1', '', null, null, null, '1', '1508218757', '1508218757', null, null, 'zh_CN', 'Cordoba', 'Argentina');
INSERT INTO `eb_user` VALUES ('9', null, null, 'A@侠', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIZsIJl08iafzLQrwgvOJAWQmGu8kswURKhZSs9t4JkoAgTDcwxicHibbKrZRsosvk0HRUUsQ13XO9TA/0', '1', 'Guangzhou', null, null, null, '1', '1508218829', '1508218829', null, null, 'zh_CN', 'Guangdong', 'China');
INSERT INTO `eb_user` VALUES ('10', null, null, '柒号软件~潘世秋', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIjZt9Lku4DyvgIUVqiaFcOkA2Xmu5bRdBS0zDQs4ZJNibogb0icwVgtpqLtBHxkIHEDQMcokicVIgSBg/0', '1', 'Nanjing', null, null, null, '1', '1508311539', '1508311539', null, null, 'zh_CN', 'Jiangsu', 'CN');
INSERT INTO `eb_user` VALUES ('11', null, null, '叶柔h', 'https://wx.qlogo.cn/mmopen/vi_32/8d5Jl1NtdSHE1Kdk9PnvEiaL5IhaSDk9RbcqSBHggARoP16qMVTHHicOwXs7DeoC4M1FX7meRibzTEiaicibuEmSj55g/0', '1', 'Guangzhou', null, null, null, '1', '1508222845', '1508222845', null, null, 'zh_CN', 'Guangdong', 'China');
INSERT INTO `eb_user` VALUES ('12', null, null, '胡武浩', 'https://wx.qlogo.cn/mmopen/vi_32/l41xgMUg8xFGPICSkzT3k1iabiagtbCULbGsdBLia1TeKIlNRNVAaOVMPKB6D36oFHtePYK9VVJsqCdfzJBHeBKicA/0', '1', 'Guangzhou', null, null, null, '1', '1508222876', '1508222876', null, null, 'zh_CN', 'Guangdong', 'China');
INSERT INTO `eb_user` VALUES ('13', null, null, '林大帅', 'https://wx.qlogo.cn/mmopen/vi_32/rl2AobLp8fu19CPUDvbGeIxt9ibefIwaGGRCHCRaFYLCk8d9j0icX6VmxlFGCibCryCemK0stKNpMsT9qgGdGzfjw/0', '1', 'Guangzhou', null, null, null, '1', '1508224889', '1508224889', null, null, 'zh_CN', 'Guangdong', 'China');
INSERT INTO `eb_user` VALUES ('14', null, null, '杜瑞兴 玄易堂 调理 隐态病 疑难病', 'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83epIEO8sv6ibZBC4yHX2Th7nS99KgrbgWGBHwvrqQluPedknib8mibZK2sicB4P2Z0u2mmp1shAwkpQEqA/0', '1', 'Baodi', null, null, null, '1', '1508308566', '1508308566', null, null, 'zh_CN', 'Tianjin', 'China');
INSERT INTO `eb_user` VALUES ('15', null, null, '小咪咪', '', '0', '', null, null, null, '1', '1508236993', '1508236993', null, null, 'zh_HK', '', '');
INSERT INTO `eb_user` VALUES ('16', null, null, 'fly', 'https://wx.qlogo.cn/mmopen/vi_32/2bmJXcMvzL7WIvaxj0sSUvkbuAV9QFZicqaCEZWyR7J4JKoeT576XZfKHbBGBROLPIuCvVz0H8kHvjNgEJIxVaA/0', '1', 'Guangzhou', null, null, null, '1', '1508302121', '1508302121', null, null, 'zh_CN', 'Guangdong', 'CN');
