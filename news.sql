/*
Navicat MySQL Data Transfer

Source Server         : xhz
Source Server Version : 50714
Source Host           : 127.0.0.1:3306
Source Database       : news

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-07-29 09:22:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '新闻ID',
  `title` varchar(50) DEFAULT NULL COMMENT '新闻标题',
  `content` text COMMENT '新闻内容',
  `brief` varchar(100) DEFAULT NULL COMMENT '简介',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `author` varchar(255) DEFAULT NULL COMMENT '添加人，作者',
  `sort` varchar(255) DEFAULT NULL,
  `news_big_img` varchar(255) DEFAULT NULL COMMENT '大图',
  `news_small_img` varchar(255) DEFAULT NULL COMMENT '小图',
  `is_top` tinyint(3) DEFAULT '0' COMMENT '是否头条显示，1，代表置顶显示',
  `is_rotaion` tinyint(3) DEFAULT '0' COMMENT '是否轮播显示。1，代表轮播显示。默认0',
  `title_color` varchar(255) DEFAULT NULL COMMENT '标题颜色',
  `cate_id` int(11) DEFAULT NULL COMMENT '分类id',
  `del_flag` tinyint(1) DEFAULT '0' COMMENT '0未删除，1删除',
  `view` int(11) DEFAULT '0' COMMENT '浏览量',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('11', '热6', '676', '如一日', '1501461558', 'root', null, null, '/Public/Uploads/2017-07-27/5979d6e2c34ba.jpg', '1', '0', '闰土一人一套人', '1', '0', '0', '5343');
INSERT INTO `news` VALUES ('12', '56757', '78', '567576', '1501164558', 'root', null, null, '/Public/Uploads/2017-07-27/5979d70c44409.jpg', '1', '0', '5467', '1', '0', '0', '4534');
INSERT INTO `news` VALUES ('13', '同一天', '&lt;p style=&quot;text-align: center;&quot;&gt;让他一人&lt;img src=&quot;/ueditor/php/upload/image/20170727/1501157372505408.png&quot; title=&quot;1501157372505408.png&quot; alt=&quot;截取字符串分割.PNG&quot; width=&quot;712&quot; height=&quot;246&quot; style=&quot;width: 712px; height: 246px;&quot;/&gt;&lt;/p&gt;&lt;p&gt;兔兔他他&lt;/p&gt;', '', '1507161554', 'root', null, null, '/Public/Uploads/2017-07-27/5979d6e2c34ba.jpg', '0', '1', '', '2', '0', '0', '5445');
INSERT INTO `news` VALUES ('14', '5656', '&lt;p&gt;					&lt;/p&gt;&lt;p&gt;\r\n					ytuy&lt;img src=&quot;/ueditor/php/upload/image/20170728/1501233977126083.png&quot; title=&quot;1501233977126083.png&quot; alt=&quot;QQ.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170728/1501233989118630.jpg&quot; style=&quot;&quot; title=&quot;1501233989118630.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170728/1501233989113354.png&quot; style=&quot;&quot; title=&quot;1501233989113354.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170728/1501233989371020.png&quot; style=&quot;&quot; title=&quot;1501233989371020.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;				&lt;/p&gt;', '565', '1501161558', 'root', null, '/Public/Uploads/2017-07-28/597ae1e5878d2.jpg', '/Public/Uploads/2017-07-28/small_597ae1e5878d2.jpg', '1', '1', '5657', '8', '0', '0', '1501233997');
INSERT INTO `news` VALUES ('17', '657865', '&lt;p&gt;tyutyu&lt;/p&gt;uy', '67868', '1501161558', 'root', null, null, '/Public/Uploads/2017-07-27/5979e83ae47da.jpg', '1', '1', '67867', '4', '0', '0', '7557');
INSERT INTO `news` VALUES ('34', 'ghfjgj', 'ttyuty', 'gfjgj', '1501222588', 'root', null, '/Public/Uploads/2017-07-28/597ae1ce47ade.jpg', '/Public/Uploads/2017-07-28/small_597ae1ce47ade.jpg', '1', '0', '#00CCCC', '5', '0', '0', '1501225422');
INSERT INTO `news` VALUES ('35', 'cat', 'yutyut', '7897cat ', '1501222822', 'root', null, '/Public/Uploads/2017-07-28/597ae1a4ebf91.jpg', '/Public/Uploads/2017-07-28/small_597ae1a4ebf91.jpg', '1', '0', '#00FF66', '8', '0', '0', '1501226837');
INSERT INTO `news` VALUES ('36', 'tyutu', '&lt;p&gt;tyt&lt;/p&gt;', 'tyty', '1501223139', 'root', null, './Public/Uploads/2017-07-28/597ae1585cb08.jpg', '/Public/Uploads/2017-07-28/small_597ae1585cb08.jpg', '0', '0', '#00CC66', '5', '0', '0', '1501225304');
INSERT INTO `news` VALUES ('37', 'fghfg', 'tyutuy', 'fhgf', '1501223195', 'root', null, '/Public/Uploads/2017-07-28/597ae1bccedd4.jpg', '/Public/Uploads/2017-07-28/small_597ae1bccedd4.jpg', '1', '0', '#009999', '4', '0', '0', '1501225404');
INSERT INTO `news` VALUES ('38', 'trty', '&lt;p&gt;\r\n					tuy				&lt;/p&gt;', 'rtyrty', '1501223241', 'root', null, '/Public/Uploads/2017-07-28/597b1898a60d5.png', '/Public/Uploads/2017-07-28/small_597b1898a60d5.png', '1', '0', '#339999', '5', '0', '0', '1501239448');
INSERT INTO `news` VALUES ('39', '877788', 'tyutyu', '88777788', null, 'root', null, '/Public/Uploads/2017-07-28/597ae799cdfba.jpg', '/Public/Uploads/2017-07-28/small_597ae799cdfba.jpg', '1', '0', '#FF6699', '1', '0', '0', '1501226905');
INSERT INTO `news` VALUES ('40', '999999999', 'ttyu', '999999', null, 'root', null, null, null, '1', '0', '#0066FF', null, '0', '0', '1501223736');
INSERT INTO `news` VALUES ('41', '999996666', '&lt;p&gt;uiujklhj&lt;/p&gt;', '9999666', null, 'root', null, '/Public/Uploads/2017-07-28/597adbbbb65df.jpg', '/Public/Uploads/2017-07-28/small_597adbbbb65df.jpg', '0', '1', '#FF0000', null, '0', '0', '1501223867');
INSERT INTO `news` VALUES ('42', 'test', '&lt;p&gt;rdrd&lt;/p&gt;', 'rdrd', '1501225719', 'root', null, '/Public/Uploads/2017-07-28/597ae2f7b2a4f.jpg', '/Public/Uploads/2017-07-28/small_597ae2f7b2a4f.jpg', '1', '0', '#0066CC', '3', '0', '0', '0');
INSERT INTO `news` VALUES ('43', 'test111', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20170728/1501225806221441.jpg&quot; title=&quot;1501225806221441.jpg&quot; alt=&quot;31954-106.jpg&quot; width=&quot;1765&quot; height=&quot;783&quot; style=&quot;width: 1765px; height: 783px;&quot;/&gt;&lt;/p&gt;', '11111111111', '1501225817', 'root', null, '/Public/Uploads/2017-07-28/597ae359b66f8.jpg', '/Public/Uploads/2017-07-28/small_597ae359b66f8.jpg', '1', '0', '#000099', '3', '0', '0', '0');
INSERT INTO `news` VALUES ('44', 'top', 'tuytuyt', 'toptoptoptop', '1501226984', 'root', null, '/Public/Uploads/2017-07-28/597ae7e880b90.jpg', '/Public/Uploads/2017-07-28/small_597ae7e880b90.jpg', '1', '0', '#00FF33', '6', '0', '0', '1501227034');
INSERT INTO `news` VALUES ('45', '5555', '&lt;p style=&quot;text-align: center;&quot;&gt;rtrtyrtyrtrtfghfgfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffhrtyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy&lt;img src=&quot;/ueditor/php/upload/image/20170728/1501227331852502.jpg&quot; title=&quot;1501227331852502.jpg&quot; alt=&quot;77304b27a963841a.jpg&quot; width=&quot;398&quot; height=&quot;312&quot; style=&quot;width: 398px; height: 312px; float: right;&quot;/&gt;fghf&lt;/p&gt;', '5555555', '1501227426', 'root', null, '/Public/Uploads/2017-07-28/597ae9a2ad9db.jpg', '/Public/Uploads/2017-07-28/small_597ae9a2ad9db.jpg', '1', '0', '#000000', '1', '0', '0', '0');
INSERT INTO `news` VALUES ('46', '太阳', '&lt;p&gt;&amp;nbsp;头谭茹殷&lt;/p&gt;', '体育', '1501231201', 'root', null, null, null, '0', '0', '#006699', '-1', '0', '0', '0');
INSERT INTO `news` VALUES ('49', '4545', '&lt;p&gt;4545456&lt;/p&gt;', '45454', '1501238205', 'root', null, null, null, '1', '0', '#000033', '3', '0', '0', '0');
INSERT INTO `news` VALUES ('51', '2222', '&lt;p&gt;222&lt;/p&gt;', '222', '1501239350', 'root', null, '/Public/Uploads/2017-07-28/597b18370a130.png', '/Public/Uploads/2017-07-28/small_597b18370a130.png', '1', '0', '#003399', '2', '0', '0', '0');
