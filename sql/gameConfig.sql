/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.6.33-0ubuntu0.14.04.1-log : Database - jyhd
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `jyhd`;

/*Table structure for table `game_reschange_action` */

DROP TABLE IF EXISTS `game_reschange_action`;

CREATE TABLE `game_reschange_action` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `playerid` bigint(20) unsigned DEFAULT NULL,
  `account_type` tinyint(4) DEFAULT NULL,
  `os_type` tinyint(4) DEFAULT NULL,
  `login_channel` varchar(64) DEFAULT NULL,
  `reg_channel` varchar(64) DEFAULT NULL,
  `game_ver` varchar(24) DEFAULT NULL,
  `itemid` int(11) DEFAULT NULL,
  `add_num` int(11) DEFAULT NULL,
  `cur_num` int(11) DEFAULT NULL,
  `reason` tinyint(4) DEFAULT NULL,
  `opt_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53018 DEFAULT CHARSET=utf8;

/*Data for the table `game_reschange_action` */
