/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 100119
Source Host           : localhost:3306
Source Database       : montenegrouniformes

Target Server Type    : MYSQL
Target Server Version : 100119
File Encoding         : 65001

Date: 2017-10-14 00:06:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Uniformes', '2017-10-13 02:41:32', '2017-10-13 02:41:32');

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(1000) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for phinxlog
-- ----------------------------
DROP TABLE IF EXISTS `phinxlog`;
CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phinxlog
-- ----------------------------
INSERT INTO `phinxlog` VALUES ('20171012221929', 'CreateContacts', '2017-10-12 22:23:46', '2017-10-12 22:23:46', '0');
INSERT INTO `phinxlog` VALUES ('20171012230503', 'CreateContacts', '2017-10-12 23:06:51', '2017-10-12 23:06:51', '0');
INSERT INTO `phinxlog` VALUES ('20171012232211', 'CreateContacts', '2017-10-12 23:25:51', '2017-10-12 23:25:51', '0');
INSERT INTO `phinxlog` VALUES ('20171012233117', 'CreateContacts', '2017-10-12 23:31:22', '2017-10-12 23:31:22', '0');
INSERT INTO `phinxlog` VALUES ('20171013003809', 'CreateContacts', '2017-10-13 00:38:44', '2017-10-13 00:38:45', '0');
INSERT INTO `phinxlog` VALUES ('20171013021505', 'CreateUsers', '2017-10-13 02:17:20', '2017-10-13 02:17:21', '0');
INSERT INTO `phinxlog` VALUES ('20171013022009', 'CreateUsers', '2017-10-13 02:21:07', '2017-10-13 02:21:08', '0');
INSERT INTO `phinxlog` VALUES ('20171013023714', 'CreateCategories', '2017-10-13 02:38:12', '2017-10-13 02:38:12', '0');
INSERT INTO `phinxlog` VALUES ('20171013024236', 'CreateTags', '2017-10-13 02:43:28', '2017-10-13 02:43:28', '0');
INSERT INTO `phinxlog` VALUES ('20171013025216', 'CreatePosts', '2017-10-13 02:57:32', '2017-10-13 02:57:32', '0');
INSERT INTO `phinxlog` VALUES ('20171013025827', 'CreatePostsTags', '2017-10-13 02:59:14', '2017-10-13 02:59:15', '0');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `url` varchar(500) NOT NULL,
  `created_by` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`,`category_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


-- ----------------------------
-- Table structure for posts_tags
-- ----------------------------
DROP TABLE IF EXISTS `posts_tags`;
CREATE TABLE `posts_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`,`tag_id`),
  KEY `tag_id` (`tag_id`),
  CONSTRAINT `posts_tags_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `posts_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Pedro Santos', 'phmsanttos@gmail.com', '$2y$10$2kfPBk3NUGVx4hxqh310uOaRSrjEtR93o/gkA4fUrkF/alCgjhe8S', '2017-10-13 02:21:08', null);
