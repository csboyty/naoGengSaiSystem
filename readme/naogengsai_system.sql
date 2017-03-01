# MySQL-Front 5.1  (Build 3.57)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: naogengsai_system
# ------------------------------------------------------
# Server version 5.5.25a

DROP DATABASE IF EXISTS `naogengsai_system`;
CREATE DATABASE `naogengsai_system` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `naogengsai_system`;

#
# Source for table base_info
#

DROP TABLE IF EXISTS `base_info`;
CREATE TABLE `base_info` (
  `patient_id` varchar(32) NOT NULL DEFAULT '',
  `info` longtext,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table base_info
#
LOCK TABLES `base_info` WRITE;
/*!40000 ALTER TABLE `base_info` DISABLE KEYS */;

INSERT INTO `base_info` VALUES ('00001','{\"info\":\"{\\\"jiu\\\":[\\\"\\u767d\\u9152\\\"],\\\"jiuLiang\\\":\\\"100-500ml\\\",\\\"xiYan\\\":\\\"\\u5438\\u70df\\\",\\\"tiYu\\\":\\\"\\u5426\\\",\\\"gaoXueYa\\\":\\\"\\u6709\\u4f46\\u672a\\u89c4\\u5f8b\\u6cbb\\u7597\\\",\\\"xinZanBing\\\":\\\"\\u6709\\u4f46\\u672a\\u89c4\\u5f8b\\u6cbb\\u7597\\\",\\\"tangNiaoBing\\\":\\\"\\u6709\\u4f46\\u672a\\u89c4\\u5f8b\\u6cbb\\u7597\\\",\\\"xueZhiYiChang\\\":\\\"\\u6709\\u4f46\\u672a\\u89c4\\u5f8b\\u6cbb\\u7597\\\",\\\"naoQueXue\\\":\\\"\\u6709\\u4f46\\u672a\\u89c4\\u5f8b\\u6cbb\\u7597\\\",\\\"xueYa\\\":\\\"1\\\",\\\"kongFuXueTang\\\":\\\"2\\\",\\\"tangHua\\\":\\\"3\\\"}\",\"xueChangGui\":\"{\\\"xueChangGuiwbc\\\":\\\"1\\\",\\\"xueChangGuiN\\\":\\\"2\\\",\\\"xueChangGuipt\\\":\\\"3\\\",\\\"xueChangGuiHB\\\":\\\"4\\\"}\",\"ganGongNeng\":\"{\\\"ganGongNengALT\\\":\\\"1\\\",\\\"ganGongNengAST\\\":\\\"2\\\",\\\"ganGongNengBaiDanBai\\\":\\\"3\\\"}\",\"shenGongNeng\":\"{\\\"shenGongNengBUN\\\":\\\"1\\\",\\\"shenGongNengCr\\\":\\\"2\\\",\\\"shenGongNengUA\\\":\\\"3\\\"}\",\"xueZhi\":\"{\\\"xueZhiLDL\\\":\\\"1\\\",\\\"xueZhiHDL\\\":\\\"5\\\",\\\"xueZhiTG\\\":\\\"3\\\",\\\"xueZhiCHO\\\":\\\"4\\\",\\\"xueZhiApoA1\\\":\\\"6\\\",\\\"xueZhiApoB\\\":\\\"7\\\",\\\"xueZhiLPA\\\":\\\"8\\\"}\"}');
/*!40000 ALTER TABLE `base_info` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table impact_data
#

DROP TABLE IF EXISTS `impact_data`;
CREATE TABLE `impact_data` (
  `patient_id` varchar(32) NOT NULL DEFAULT '0',
  `info` text,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table impact_data
#
LOCK TABLES `impact_data` WRITE;
/*!40000 ALTER TABLE `impact_data` DISABLE KEYS */;

INSERT INTO `impact_data` VALUES ('00001','{\"TCD\":\"{\\\"LMCA\\\":[\\\"1\\\",\\\"1\\\"],\\\"LACA\\\":[\\\"2\\\",\\\"2\\\"],\\\"LPCA2\\\":[\\\"3\\\",\\\"3\\\"],\\\"LVA\\\":[\\\"4\\\",\\\"4\\\"],\\\"RMCA\\\":[\\\"5\\\",\\\"5\\\"],\\\"RACA\\\":[\\\"6\\\",\\\"6\\\"],\\\"RPCA2\\\":[\\\"7\\\",\\\"7\\\"],\\\"RVA\\\":[\\\"8\\\",\\\"8\\\"],\\\"BA\\\":[\\\"9\\\",\\\"9\\\"]}\",\"caiChao\":\"{\\\"number\\\":\\\"100001\\\",\\\"neiMoHou\\\":\\\"100\\\",\\\"banKuaiShu\\\":\\\"1\\\",\\\"banKuaiXingZhi\\\":\\\"\\u4f4e\\\"}\",\"MRA\":\"{\\\"number\\\":\\\"132222\\\",\\\"willis\\\":\\\"\\u5b8c\\u6574 willis\\u73af\\u5404\\u4e2a\\u8840\\u7ba1\\u5747\\u5b58\\u5728\\\",\\\"luNeiDongMaiKuanZha\\\":\\\"2\\\"}\",\"CT\":\"{\\\"number\\\":\\\"34444\\\",\\\"chuXueDian\\\":\\\"\\u4e18\\u8111\\u51fa\\u8840\\\"}\",\"other\":\"{\\\"yanDongMaiYingHua\\\":\\\"1\\u7ea7\\u3000\\u5c0f\\u52a8\\u8109\\u5149\\u53cd\\u5c04\\u589e\\u5bbd\\uff0c\\u6709\\u8f7b\\u5ea6\\u6216\\u65e0\\u52a8\\u9759\\u8109\\u4ea4\\u53c9\\u538b\\u8feb\\u5f81\\u3002\\\",\\\"dongMaiYingHua\\\":\\\"\\u4e2d\\u52a8\\u8109\\\",\\\"bingYinFenXing\\\":\\\"\\u8840\\u7ba1\\u6dc0\\u7c89\\u6837\\u53d8\\\"}\"}');
/*!40000 ALTER TABLE `impact_data` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table patient_info
#

DROP TABLE IF EXISTS `patient_info`;
CREATE TABLE `patient_info` (
  `id` varchar(32) NOT NULL DEFAULT '0' COMMENT '用户编号',
  `disease_type` varchar(32) NOT NULL DEFAULT '',
  `doctor` varchar(32) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `disease_date` date DEFAULT NULL COMMENT '发病时间',
  `AD` varchar(32) DEFAULT NULL COMMENT '住院号',
  `address` varchar(32) DEFAULT NULL,
  `tel` varchar(32) DEFAULT NULL,
  `fullname` varchar(32) DEFAULT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `age` int(11) DEFAULT '0',
  `height` varchar(8) DEFAULT NULL,
  `weight` varchar(8) DEFAULT NULL,
  `waist` varchar(8) DEFAULT NULL,
  `hip` varchar(8) DEFAULT NULL,
  `BMI` varchar(8) DEFAULT NULL COMMENT '体重指数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table patient_info
#
LOCK TABLES `patient_info` WRITE;
/*!40000 ALTER TABLE `patient_info` DISABLE KEYS */;

INSERT INTO `patient_info` VALUES ('00001','脑梗塞','小王','2016-12-31','2016-12-01','20121222','daxxfadf','12222/422333','小李','男',45,'160','56','80','80','243444');
/*!40000 ALTER TABLE `patient_info` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table user
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT '',
  `role` varchar(12) NOT NULL DEFAULT 'USER',
  `auth_key` varchar(32) NOT NULL DEFAULT '',
  `fullname` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Dumping data for table user
#
LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` VALUES (2,'super_admin','$2y$13$xeZCUNWFePqVsFG/g7oWgu5vM2a/teY3x5un1uNSFnUxzGSW8S6Vy','SUPER_ADMIN','ft_9Jmc5JerGFqzwZSppx73an-FbVVHr','超级管理员');
INSERT INTO `user` VALUES (10,'test1','$2y$13$BLYeiMZukOrIM0QmXnb68eIQdVs9vbpMcn7vZtU05IFgm6860DczW','ADMIN','Bk4tzquPcht7_efaaZeiC1PdzaLmSvwf','测试用户');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

#
#  Foreign keys for table base_info
#

ALTER TABLE `base_info`
ADD CONSTRAINT `base_info_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_info` (`id`) ON DELETE CASCADE;

#
#  Foreign keys for table impact_data
#

ALTER TABLE `impact_data`
ADD CONSTRAINT `impact_data_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_info` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;


/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
