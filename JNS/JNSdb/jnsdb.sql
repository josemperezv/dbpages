/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100133
Source Host           : localhost:3306
Source Database       : jnsdb

Target Server Type    : MYSQL
Target Server Version : 100133
File Encoding         : 65001

Date: 2019-03-22 15:40:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_article
-- ----------------------------
DROP TABLE IF EXISTS `tbl_article`;
CREATE TABLE `tbl_article` (
  `art_id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `art_name` varchar(64) NOT NULL,
  `art_price` float(12,2) NOT NULL DEFAULT '0.00',
  `art_min_word_count` int(10) NOT NULL,
  `art_min_pages` int(10) NOT NULL,
  `is_deleted` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_article
-- ----------------------------
INSERT INTO `tbl_article` VALUES ('1', 'Article Writing', '15.00', '300', '0', '0');
INSERT INTO `tbl_article` VALUES ('2', 'Blog Writing', '10.00', '300', '0', '0');
INSERT INTO `tbl_article` VALUES ('3', 'Website Writing', '10.00', '300', '0', '0');
INSERT INTO `tbl_article` VALUES ('4', 'Social Media Content', '10.00', '100', '0', '0');
INSERT INTO `tbl_article` VALUES ('5', 'Email & Newsletters', '7.50', '300', '0', '0');
INSERT INTO `tbl_article` VALUES ('6', 'E-Books', '50.00', '2000', '0', '0');
INSERT INTO `tbl_article` VALUES ('7', 'Creative Writing', '25.00', '300', '0', '0');
INSERT INTO `tbl_article` VALUES ('8', 'Technical Writing', '30.00', '300', '0', '0');
INSERT INTO `tbl_article` VALUES ('9', 'Product Descriptions', '20.00', '300', '0', '0');
INSERT INTO `tbl_article` VALUES ('10', 'Product Reviews', '20.00', '300', '0', '0');
INSERT INTO `tbl_article` VALUES ('11', 'Resumes & Cover Letters', '10.00', '0', '0', '0');
INSERT INTO `tbl_article` VALUES ('12', 'Copywriting', '30.00', '300', '0', '0');

-- ----------------------------
-- Table structure for tbl_order
-- ----------------------------
DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE `tbl_order` (
  `order_id` int(32) NOT NULL AUTO_INCREMENT,
  `user_id` int(12) NOT NULL,
  `art_id` int(12) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_order
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(120) DEFAULT NULL,
  `user_lastname` varchar(120) DEFAULT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_email` varchar(120) NOT NULL,
  `password` char(64) NOT NULL,
  `is_deleted` int(1) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `edited_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`,`user_email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
