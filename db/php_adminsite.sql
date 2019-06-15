/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : php_adminsite

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-06-15 11:22:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `kullanicilar`
-- ----------------------------
DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_administer` int(1) NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of kullanicilar
-- ----------------------------
INSERT INTO `kullanicilar` VALUES ('5', '0', 'myuser', 'mustafaegebozkaya555@gmail.com', '4c41fa59101c629256d20f45d9f9e9d6', '2019-06-13 00:00:14');
INSERT INTO `kullanicilar` VALUES ('6', '0', 'adminphpsite', 'mustafaegebo5@gmail.com', 'f3debf6230a533eb4e4716d33e2cf8d5', '2019-06-13 00:53:48');
INSERT INTO `kullanicilar` VALUES ('7', '0', 'adminphp', 'bozkaya555@gmail.com', '9c51ce65390fa56cca6e075a6a3de035', '2019-06-13 01:01:38');
INSERT INTO `kullanicilar` VALUES ('8', '0', 'admin', 'salih@yahoo.com', '1b0a61812c047db5bd6fe2d623e000d6', '2019-06-13 01:10:01');

-- ----------------------------
-- Table structure for `sitebilgileri`
-- ----------------------------
DROP TABLE IF EXISTS `sitebilgileri`;
CREATE TABLE `sitebilgileri` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `skey` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `svalue` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `skey` (`skey`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of sitebilgileri
-- ----------------------------
INSERT INTO `sitebilgileri` VALUES ('5', 'pagetitle', 'Coffee Break a Blog Category Flat Bootstarp responsive Website Template', '2019-06-07 17:53:57');
INSERT INTO `sitebilgileri` VALUES ('6', 'admin_hometitle', 'Pooled Admin Panel Category Flat Bootstrap Responsive Web Template', '2019-06-07 17:53:57');

-- ----------------------------
-- Table structure for `user_images`
-- ----------------------------
DROP TABLE IF EXISTS `user_images`;
CREATE TABLE `user_images` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(100) NOT NULL,
  `is_administer` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_images
-- ----------------------------
