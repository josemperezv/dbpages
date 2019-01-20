
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2017 at 01:11 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a4547983_tephros`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `email` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE,
  UNIQUE KEY `email` (`email`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` VALUES('josemperezv@gmail.com', '2016-05-01', '08:09:40');
INSERT INTO `registered` VALUES('ordep90s@gmail.com', '2016-05-01', '08:40:20');
INSERT INTO `registered` VALUES('davidsenabre@gmail.com', '2016-05-10', '12:07:48');
INSERT INTO `registered` VALUES('osmar26@hotmail.com', '2016-05-10', '01:01:09');
INSERT INTO `registered` VALUES('emilio.j.m.1992@gmail.com', '2016-05-10', '07:45:17');
INSERT INTO `registered` VALUES('nexos_12@hotmail.com', '2016-05-11', '07:43:49');
INSERT INTO `registered` VALUES('paez24_07@hotmail.com', '2016-05-24', '10:28:23');
INSERT INTO `registered` VALUES('donstagg1@gmail.com', '2016-12-30', '08:21:54');
INSERT INTO `registered` VALUES('lordpyrosis@yahoo.com', '2016-12-30', '08:22:11');
INSERT INTO `registered` VALUES('paulwilson4media@gmail.com', '2016-12-30', '08:22:29');
INSERT INTO `registered` VALUES('wolfang.oficial@gmail.com', '2016-12-30', '08:22:43');
INSERT INTO `registered` VALUES('th3_r3ap3r@hotmail.com', '2016-12-30', '09:29:19');
