/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.14 : Database - suanming
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`suanming` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `suanming`;

/*Table structure for table `eb_admin` */

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

/*Data for the table `eb_admin` */

insert  into `eb_admin`(`id`,`username`,`password`,`status`,`note`,`reg_time`,`last_login_time`,`last_login_ip`,`update_time`,`real_name`) values (1,'admin','7fef6171469e80d32c0559f88b377245',1,'超级管理员',1380013800,NULL,NULL,1506394935,'管理员'),(14,'test','7fef6171469e80d32c0559f88b377245',1,'超级管理员',1380013800,NULL,NULL,1419047031,'管理员');

/*Table structure for table `eb_carousel` */

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

/*Data for the table `eb_carousel` */

insert  into `eb_carousel`(`id`,`title`,`sort`,`status`,`thumb`,`content`,`islink`,`cate_id`) values (1,'首页',0,1,'https://mini2.374628.com //uploads/image/20171019/20171019105319_52162.jpg','',0,0),(2,'首页广告',0,1,'https://mini2.374628.com //uploads/image/20171019/20171019105402_95583.jpg','',0,0),(3,'首页',0,1,'https://mini2.374628.com //uploads/image/20171019/20171019105421_58836.jpg','选择我们，是您一生的财富',1,0),(4,'加入我们',0,1,'https://mini2.374628.com //uploads/image/20171019/20171019150458_53464.jpg','',0,2),(5,'关于我们',0,1,'https://mini2.374628.com //uploads/image/20171019/20171019151252_36946.jpg','',0,1);

/*Table structure for table `eb_kefu` */

DROP TABLE IF EXISTS `eb_kefu`;

CREATE TABLE `eb_kefu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(15) DEFAULT '' COMMENT '客服电话',
  `inputtime` int(11) DEFAULT NULL,
  `lastinputtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

/*Data for the table `eb_kefu` */

insert  into `eb_kefu`(`id`,`phone`,`inputtime`,`lastinputtime`) values (1,'132256585562',1505899531,1506048142);

/*Table structure for table `eb_log` */

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

/*Data for the table `eb_log` */

insert  into `eb_log`(`id`,`admin_name`,`inputtime`,`typeid`,`tablename`,`cid`,`content`) values (1,'admin',1466576362,1,'author',1,'a:13:{s:2:\"id\";s:7:\"   2   \";s:4:\"name\";s:3:\"sss\";s:10:\"birthplace\";s:0:\"\";s:9:\"graduated\";s:0:\"\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:0:\"\";s:11:\"description\";s:0:\"\";s:7:\"content\";s:4:\"ssss\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";s:7:\"cate_id\";s:0:\"\";}'),(2,'admin',1466576433,1,'author',1,'a:13:{s:2:\"id\";s:3:\" 1 \";s:4:\"name\";s:2:\"ss\";s:10:\"birthplace\";s:0:\"\";s:9:\"graduated\";s:0:\"\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:7:\"cate_id\";s:5:\"52,51\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:53:\"/cnjm/uploads/image/20150714/20150714091452_57532.png\";s:11:\"description\";s:0:\"\";s:7:\"content\";s:0:\"\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";}'),(3,'admin',1466576543,1,'author',1,'a:13:{s:2:\"id\";s:3:\" 2 \";s:4:\"name\";s:3:\"sss\";s:10:\"birthplace\";s:0:\"\";s:9:\"graduated\";s:0:\"\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:0:\"\";s:11:\"description\";s:0:\"\";s:7:\"content\";s:4:\"ssss\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";s:7:\"cate_id\";s:0:\"\";}'),(4,'admin',1466576587,1,'author',2,'a:13:{s:2:\"id\";s:5:\"  2  \";s:4:\"name\";s:3:\"sss\";s:10:\"birthplace\";s:0:\"\";s:9:\"graduated\";s:0:\"\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:0:\"\";s:11:\"description\";s:0:\"\";s:7:\"content\";s:4:\"ssss\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";s:7:\"cate_id\";s:0:\"\";}'),(5,'admin',1466576965,2,'author',6,'a:12:{s:4:\"name\";s:3:\"111\";s:10:\"birthplace\";s:3:\"222\";s:9:\"graduated\";s:5:\"23323\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:0:\"\";s:11:\"description\";s:0:\"\";s:7:\"content\";s:0:\"\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";s:7:\"cate_id\";s:0:\"\";}'),(6,'admin',1466579944,1,'author',2,'a:13:{s:2:\"id\";s:3:\" 2 \";s:4:\"name\";s:3:\"sss\";s:10:\"birthplace\";s:0:\"\";s:9:\"graduated\";s:0:\"\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:7:\"cate_id\";s:2:\"55\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:0:\"\";s:11:\"description\";s:0:\"\";s:7:\"content\";s:4:\"ssss\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";}'),(7,'admin',1466580037,2,'author',7,'a:12:{s:4:\"name\";s:3:\"sss\";s:10:\"birthplace\";s:2:\"ss\";s:9:\"graduated\";s:0:\"\";s:6:\"gender\";s:1:\"0\";s:3:\"top\";s:1:\"0\";s:7:\"cate_id\";s:2:\"on\";s:5:\"thumb\";s:0:\"\";s:7:\"picture\";s:0:\"\";s:11:\"description\";s:2:\"ss\";s:7:\"content\";s:2:\"ss\";s:6:\"status\";s:1:\"1\";s:4:\"sort\";s:3:\"100\";}');

/*Table structure for table `eb_mcarousel` */

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

/*Data for the table `eb_mcarousel` */

/*Table structure for table `eb_mconfig` */

DROP TABLE IF EXISTS `eb_mconfig`;

CREATE TABLE `eb_mconfig` (
  `id` int(11) NOT NULL,
  `coverImg` varchar(255) DEFAULT NULL,
  `shifoukaiqi` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `eb_mconfig` */

insert  into `eb_mconfig`(`id`,`coverImg`,`shifoukaiqi`) values (1,'/uploads/image/20171024/20171024093736_98687.png','开启');

/*Table structure for table `eb_menu` */

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

/*Data for the table `eb_menu` */

/*Table structure for table `eb_message` */

DROP TABLE IF EXISTS `eb_message`;

CREATE TABLE `eb_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT '留言名字',
  `phone` varchar(16) DEFAULT NULL COMMENT '电话',
  `content` text COMMENT '留言内容',
  `inputtime` int(16) NOT NULL,
  `state` int(1) DEFAULT '1' COMMENT '阅读状态 1：未读 2：已读',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `eb_message` */

insert  into `eb_message`(`id`,`name`,`phone`,`content`,`inputtime`,`state`) values (1,'你好',NULL,'./images/1.jpg',1514107608,1);

/*Table structure for table `eb_notice` */

DROP TABLE IF EXISTS `eb_notice`;

CREATE TABLE `eb_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) DEFAULT NULL COMMENT '分类id',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `hide` varchar(255) DEFAULT '0' COMMENT '0不隐藏，1隐藏',
  `retui` int(3) DEFAULT '0' COMMENT '热销推荐',
  `thumb` varchar(255) DEFAULT NULL COMMENT '预览图',
  `file` varchar(500) DEFAULT NULL COMMENT '文件',
  `begin` int(11) DEFAULT NULL COMMENT '开始时间',
  `closure` int(11) DEFAULT NULL COMMENT '结束时间',
  `inputtime` int(11) DEFAULT NULL COMMENT '插入时间',
  `extra` text,
  `advantage` text,
  `note1` varchar(255) DEFAULT NULL,
  `note2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='新闻公告';

/*Data for the table `eb_notice` */

insert  into `eb_notice`(`id`,`cate_id`,`title`,`content`,`hide`,`retui`,`thumb`,`file`,`begin`,`closure`,`inputtime`,`extra`,`advantage`,`note1`,`note2`) values (1,1,'得得得',NULL,'0',0,'http://woksmcf.com/uploads/image/20171225/20171225014537_64797.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,1,'好运来',NULL,'0',0,'/uploads/image/20171225/20171225032432_62838.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `eb_notice_cate` */

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='新闻公告分类';

/*Data for the table `eb_notice_cate` */

insert  into `eb_notice_cate`(`id`,`cate_id`,`name`,`content`,`hide`,`pid`,`sort`,`banner`,`onepages`) values (1,NULL,'二维码',NULL,'0',0,0,0,0);

/*Table structure for table `eb_refund` */

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

/*Data for the table `eb_refund` */

insert  into `eb_refund`(`id`,`order_id`,`order_sn`,`user_id`,`price`,`post_time`,`note`,`status`) values (235,NULL,'',0,'10.00',NULL,NULL,0);

/*Table structure for table `eb_regions` */

DROP TABLE IF EXISTS `eb_regions`;

CREATE TABLE `eb_regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `sort` int(10) unsigned DEFAULT '50',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=369 DEFAULT CHARSET=utf8;

/*Data for the table `eb_regions` */

insert  into `eb_regions`(`id`,`pid`,`name`,`sort`) values (1,0,'北京市',1),(2,0,'上海市',2),(3,0,'天津市',3),(4,0,'重庆市',4),(5,0,'河北省',5),(6,5,'石家庄市',6),(7,5,'邯郸市',7),(8,5,'邢台市',8),(9,5,'保定市',9),(10,5,'张家口市',10),(11,5,'承德市',11),(12,5,'廊坊市',12),(13,5,'唐山市',13),(14,5,'秦皇岛市',14),(15,5,'沧州市',15),(16,5,'衡水市',16),(17,0,'山西省',17),(18,17,'太原市',18),(19,17,'大同市',19),(20,17,'阳泉市',20),(21,17,'长治市',21),(22,17,'晋城市',22),(23,17,'朔州市',23),(24,17,'吕梁市',24),(25,17,'忻州市',25),(26,17,'晋中市',26),(27,17,'临汾市',27),(28,17,'运城市',28),(29,0,'辽宁省',29),(30,29,'沈阳市',30),(31,29,'大连市',31),(32,29,'鞍山市',32),(33,29,'抚顺市',33),(34,29,'本溪市',34),(35,29,'丹东市',35),(36,29,'锦州市',36),(37,29,'营口市',37),(38,29,'阜新市',38),(39,29,'辽阳市',39),(40,29,'盘锦市',40),(41,29,'铁岭市',41),(42,29,'朝阳市',42),(43,29,'葫芦岛市',43),(44,0,'吉林省',44),(45,44,'长春市',45),(46,44,'吉林市',46),(47,44,'四平市',47),(48,44,'辽源市',48),(49,44,'通化市',49),(50,44,'白山市',50),(51,44,'白城市',51),(52,44,'延边市',52),(53,0,'黑龙江省',53),(54,53,'哈尔滨市',54),(55,53,'齐齐哈尔市',55),(56,53,'牡丹江市',56),(57,53,'佳木斯市',57),(58,53,'大庆市',58),(59,53,'绥化市',59),(60,53,'鹤岗市',60),(61,53,'鸡西市',61),(62,53,'黑河市',62),(63,53,'双鸭山市',63),(64,53,'伊春市',64),(65,53,'七台河市',65),(66,53,'大兴安岭市',66),(67,0,'江苏省',67),(68,67,'南京市',68),(69,67,'镇江市',69),(70,67,'苏州市',70),(71,67,'南通市',71),(72,67,'扬州市',72),(73,67,'盐城市',73),(74,67,'徐州市',74),(75,67,'连云港市',75),(76,67,'常州市',76),(77,67,'无锡市',77),(78,67,'宿迁市',78),(79,67,'泰州市',79),(80,67,'淮安市',80),(81,0,'浙江省',81),(82,81,'杭州市',82),(83,81,'宁波市',83),(84,81,'温州市',84),(85,81,'嘉兴市',85),(86,81,'湖州市',86),(87,81,'绍兴市',87),(88,81,'金华市',88),(89,81,'衢州市',89),(90,81,'舟山市',90),(91,81,'台州市',91),(92,81,'丽水市',92),(93,0,'安徽省',93),(94,93,'合肥市',94),(95,93,'芜湖市',95),(96,93,'蚌埠市',96),(97,93,'马鞍山市',97),(98,93,'淮北市',98),(99,93,'铜陵市',99),(100,93,'安庆市',100),(101,93,'黄山市',101),(102,93,'滁州市',102),(103,93,'宿州市',103),(104,93,'池州市',104),(105,93,'淮南市',105),(106,93,'巢湖市',106),(107,93,'阜阳市',107),(108,93,'六安市',108),(109,93,'宣城市',109),(110,93,'亳州市',110),(111,0,'福建省',111),(112,111,'福州市',112),(113,111,'厦门市',113),(114,111,'莆田市',114),(115,111,'三明市',115),(116,111,'泉州市',116),(117,111,'漳州市',117),(118,111,'南平市',118),(119,111,'龙岩市',119),(120,111,'宁德市',120),(121,0,'江西省',121),(122,121,'南昌市',122),(123,121,'景德镇市',123),(124,121,'九江市',124),(125,121,'鹰潭市',125),(126,121,'萍乡市',126),(127,121,'新馀市',127),(128,121,'赣州市',128),(129,121,'吉安市',129),(130,121,'宜春市',130),(131,121,'抚州市',131),(132,121,'上饶市',132),(133,0,'山东省',133),(134,133,'济南市',134),(135,133,'淄博市',135),(136,133,'枣庄市',136),(137,133,'东营市',137),(138,133,'烟台市',138),(139,133,'潍坊市',139),(140,133,'济宁市',140),(141,133,'泰安市',141),(142,133,'威海市',142),(143,133,'日照市',143),(144,133,'莱芜市',144),(145,133,'临沂市',145),(146,133,'德州市',146),(147,133,'聊城市',147),(148,133,'滨州市',148),(149,133,'菏泽市',149),(150,0,'河南省',150),(151,150,'郑州市',151),(152,150,'开封市',152),(153,150,'洛阳市',153),(154,150,'平顶山市',154),(155,150,'安阳市',155),(156,150,'鹤壁市',156),(157,150,'新乡市',157),(158,150,'焦作市',158),(159,150,'濮阳市',159),(160,150,'许昌市',160),(161,150,'漯河市',161),(162,150,'三门峡市',162),(163,150,'南阳市',163),(164,150,'商丘市',164),(165,150,'信阳市',165),(166,150,'周口市',166),(167,150,'驻马店市',167),(168,150,'济源市',168),(169,0,'湖北省',169),(170,169,'武汉市',170),(171,169,'鄂州市',171),(172,169,'宜昌市',172),(173,169,'荆州市',173),(174,169,'襄樊市',174),(175,169,'黄石市',175),(176,169,'荆门市',176),(177,169,'黄冈市',177),(178,169,'十堰市',178),(179,169,'恩施市',179),(180,169,'潜江市',180),(181,169,'天门市',181),(182,169,'仙桃市',182),(183,169,'随州市',183),(184,169,'咸宁市',184),(185,169,'孝感市',185),(186,0,'湖南省',186),(187,186,'长沙市',187),(188,186,'常德市',188),(189,186,'株洲市',189),(190,186,'湘潭市',190),(191,186,'衡阳市',191),(192,186,'岳阳市',192),(193,186,'邵阳市',193),(194,186,'益阳市',194),(195,186,'娄底市',195),(196,186,'怀化市',196),(197,186,'郴州市',197),(198,186,'永州市',198),(199,186,'湘西市',199),(200,186,'张家界市',200),(201,0,'广东省',201),(202,201,'广州市',202),(203,201,'深圳市',203),(204,201,'珠海市',204),(205,201,'汕头市',205),(206,201,'东莞市',206),(207,201,'中山市',207),(208,201,'佛山市',208),(209,201,'韶关市',209),(210,201,'江门市',210),(211,201,'湛江市',211),(212,201,'茂名市',212),(213,201,'肇庆市',213),(214,201,'惠州市',214),(215,201,'梅州市',215),(216,201,'汕尾市',216),(217,201,'河源市',217),(218,201,'阳江市',218),(219,201,'清远市',219),(220,201,'潮州市',220),(221,201,'揭阳市',221),(222,201,'云浮市',222),(223,0,'甘肃省',223),(224,223,'兰州市',224),(225,223,'嘉峪关市',225),(226,223,'金昌市',226),(227,223,'白银市',224),(228,223,'天水市',228),(229,223,'酒泉市',229),(230,223,'张掖市',230),(231,223,'武威市',231),(232,223,'定西市',232),(233,223,'陇南市',233),(234,223,'平凉市',234),(235,223,'庆阳市',235),(236,223,'临夏市',236),(237,223,'甘南市',237),(238,0,'陕西省',238),(239,238,'西安市',239),(240,238,'宝鸡市',240),(241,238,'咸阳市',241),(242,238,'铜川市',242),(243,238,'渭南市',243),(244,238,'延安市',244),(245,238,'榆林市',245),(246,238,'汉中市',246),(247,238,'安康市',247),(248,238,'商洛市',248),(249,0,'内蒙古',249),(250,249,'呼和浩特市',250),(251,249,'包头市',251),(252,249,'乌海市',252),(253,249,'集宁市',253),(254,249,'通辽市',254),(255,249,'赤峰市',255),(256,249,'呼伦贝尔盟',255),(257,249,'阿拉善盟',255),(258,249,'哲里木盟',255),(259,249,'兴安盟',255),(260,249,'乌兰察布盟',255),(261,249,'锡林郭勒盟',255),(262,249,'巴彦淖尔盟',255),(263,249,'伊克昭盟',255),(264,0,'广西',255),(265,264,'南宁市',255),(266,264,'柳州市',255),(267,264,'桂林市',255),(268,264,'梧州市',255),(269,264,'北海市',255),(270,264,'防城港市',255),(271,264,'钦州市',255),(272,264,'贵港市',255),(273,264,'玉林市',255),(274,264,'贺州市',255),(275,264,'百色市',255),(276,264,'河池市',255),(277,0,'四川省',255),(278,277,'成都市',255),(279,277,'绵阳市',255),(280,277,'德阳市',255),(281,277,'自贡市',255),(282,277,'攀枝花市',255),(283,277,'广元市',255),(284,277,'内江市',255),(285,277,'乐山市',255),(286,277,'南充市',255),(287,277,'宜宾市',255),(288,277,'广安市',255),(289,277,'达川市',255),(290,277,'雅安市',255),(291,277,'眉山市',255),(292,277,'甘孜市',255),(293,277,'凉山市',255),(294,277,'泸州市',255),(295,0,'贵州省',255),(296,295,'贵阳市',255),(297,295,'六盘水市',255),(298,295,'遵义市',255),(299,295,'安顺市',255),(300,295,'铜仁市',255),(301,295,'黔西南市',255),(302,295,'毕节市',255),(303,295,'黔东南市',255),(304,295,'黔南市',255),(305,0,'云南省',255),(306,305,'昆明市',255),(307,305,'大理市',255),(308,305,'曲靖市',255),(309,305,'玉溪市',255),(310,305,'昭通市',255),(311,305,'楚雄市',255),(312,305,'红河市',255),(313,305,'文山市',255),(314,305,'思茅市',255),(315,305,'西双版纳市',255),(316,305,'保山市',255),(317,305,'德宏市',255),(318,305,'丽江市',255),(319,305,'怒江市',255),(320,305,'迪庆市',255),(321,305,'临沧市',255),(322,0,'西藏',255),(323,322,'拉萨市',255),(324,322,'日喀则市',255),(325,322,'山南市',255),(326,322,'林芝市',255),(327,322,'昌都市',255),(328,322,'阿里市',255),(329,322,'那曲市',255),(330,0,'海南省',255),(331,330,'海口市',255),(332,330,'三亚市',255),(333,0,'宁夏',255),(334,333,'银川市',255),(335,333,'石嘴山市',255),(336,333,'吴忠市',255),(337,333,'固原市',255),(338,0,'青海省',255),(339,338,'西宁市',255),(340,338,'海东市',255),(341,338,'海南市',255),(342,338,'海北市',255),(343,338,'玉树市',255),(344,338,'果洛市',255),(345,338,'海西市',255),(346,338,'黄南市',255),(347,0,'新疆',255),(348,347,'乌鲁木齐市',255),(349,347,'石河子市',255),(350,347,'克拉玛依市',255),(351,347,'伊犁市',255),(352,347,'巴音郭勒市',255),(353,347,'昌吉市',255),(354,347,'克孜勒苏柯尔克孜市',255),(355,347,'博尔塔拉市',255),(356,347,'吐鲁番市',255),(357,347,'哈密市',255),(358,347,'喀什市',255),(359,347,'和田市',255),(360,347,'阿克苏市',255),(361,0,'香港',255),(362,0,'澳门',255),(363,0,'台湾省',255),(364,202,'天河区',50),(365,202,'白云区',50),(366,202,'番禺区',50),(367,202,'荔湾区',50),(368,202,'黄浦区',50);

/*Table structure for table `eb_title` */

DROP TABLE IF EXISTS `eb_title`;

CREATE TABLE `eb_title` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `eb_title` */

insert  into `eb_title`(`id`,`title`) values (1,'庆易贷款');

/*Table structure for table `eb_unit` */

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

/*Data for the table `eb_unit` */

/*Table structure for table `eb_user` */

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `eb_user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
