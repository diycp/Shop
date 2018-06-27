/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : shopp

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-06-13 23:16:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '父类',
  `name` varchar(30) DEFAULT NULL COMMENT '分类名称',
  `gid` int(10) DEFAULT '0' COMMENT '子类',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('2', '干果', '0');
INSERT INTO `category` VALUES ('3', '肉干', '0');
INSERT INTO `category` VALUES ('4', '薯片', '0');
INSERT INTO `category` VALUES ('5', '糖果', '0');
INSERT INTO `category` VALUES ('6', '果冻', '0');
INSERT INTO `category` VALUES ('7', '豆干', '0');
INSERT INTO `category` VALUES ('8', '泡面', '0');
INSERT INTO `category` VALUES ('24', '猪肉', '3');
INSERT INTO `category` VALUES ('25', '饼干', '0');
INSERT INTO `category` VALUES ('26', '坚果', '2');
INSERT INTO `category` VALUES ('27', '腰果', '2');
INSERT INTO `category` VALUES ('28', '乐事', '4');
INSERT INTO `category` VALUES ('29', '薯愿', '4');

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goid` int(10) NOT NULL COMMENT '商品id',
  `gname` varchar(50) NOT NULL COMMENT '商品名',
  `gid` varchar(10) NOT NULL DEFAULT '' COMMENT '规格id',
  `photo` varchar(255) NOT NULL COMMENT '图片',
  `minphoto` varchar(255) NOT NULL COMMENT '缩略图',
  `price` float(10,2) NOT NULL COMMENT '价格',
  `number` int(10) NOT NULL COMMENT '库存',
  `shelf` enum('no','yes') NOT NULL DEFAULT 'no' COMMENT '是否上架',
  `groom` enum('no','yes') NOT NULL DEFAULT 'no' COMMENT '是否推荐',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('10', '1001', '猪脚', '3', '\\uploads\\a\\20180522\\8857eef0997b9c19a5344083343f545e.jpg', '\\uploads\\a\\thumb\\8857eef0997b9c19a5344083343f545e.jpg', '23.00', '199', 'yes', 'yes');
INSERT INTO `goods` VALUES ('11', '1002', '夏威夷果', '2', '\\uploads\\a\\20180522\\1b95c681b9e0b4898d5cb5097bffef85.jpg', '\\uploads\\a\\thumb\\1b95c681b9e0b4898d5cb5097bffef85.jpg', '33.00', '111', 'yes', 'yes');
INSERT INTO `goods` VALUES ('12', '1003', '烤肉味', '4', '\\uploads\\a\\20180522\\8c9c886f4ff7ca51397070e59aa14d9c.jpg', '\\uploads\\a\\thumb\\8c9c886f4ff7ca51397070e59aa14d9c.jpg', '33.00', '111', 'yes', 'yes');

-- ----------------------------
-- Table structure for `member`
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `phone` varchar(20) DEFAULT NULL COMMENT '手机号',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `name` varchar(255) DEFAULT NULL COMMENT '用户名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('3', '572779486@qq.com', '17819180328', 'e10adc3949ba59abbe56e057f20f883e', '张三');
INSERT INTO `member` VALUES ('9', null, '17819180328', 'e10adc3949ba59abbe56e057f20f883e', null);

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(10) NOT NULL,
  `o_id` int(10) DEFAULT NULL COMMENT '订单号',
  `g_name` varchar(30) DEFAULT NULL COMMENT '商品名',
  `gid` varchar(10) DEFAULT NULL COMMENT '规格',
  `price` float(10,2) DEFAULT NULL COMMENT '价格',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------
