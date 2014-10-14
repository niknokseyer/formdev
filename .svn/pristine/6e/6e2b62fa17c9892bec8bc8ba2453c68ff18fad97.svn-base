CREATE DATABASE  IF NOT EXISTS `formdev` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `formdev`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: formdev
-- ------------------------------------------------------
-- Server version	5.5.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `faci_batch`
--

DROP TABLE IF EXISTS `faci_batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faci_batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faciid` int(11) DEFAULT NULL,
  `batchid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faci_batch`
--

LOCK TABLES `faci_batch` WRITE;
/*!40000 ALTER TABLE `faci_batch` DISABLE KEYS */;
INSERT INTO `faci_batch` VALUES (1,1,1),(2,2,2),(3,3,2),(4,4,1),(5,5,3),(6,6,3),(7,7,3),(8,8,4),(9,13,1),(10,14,1),(11,15,1),(12,16,1),(13,17,1),(14,18,1),(15,19,1),(16,20,2),(17,21,2),(18,22,2),(19,23,2),(20,24,2),(21,25,2),(22,26,2),(23,27,2),(24,28,2),(25,29,2),(26,30,3),(27,31,3),(28,32,3),(29,33,3),(30,34,3),(31,35,3),(32,36,3),(33,37,3),(34,38,3),(35,39,3),(36,40,4),(37,41,4),(38,42,4),(39,43,4),(40,44,4),(41,45,4),(42,46,4),(43,47,4),(44,48,4),(45,49,4),(46,50,4),(47,51,4),(48,52,4),(49,53,4),(50,54,4),(51,55,4),(52,56,4),(53,57,4),(54,58,4),(55,59,4),(56,60,4),(57,61,4),(58,62,4),(59,63,4),(60,64,4),(61,65,4),(62,66,4),(63,67,4),(64,68,4),(65,69,4),(66,70,4),(67,71,4),(68,72,4),(69,73,4),(70,74,4),(71,75,4),(72,76,4),(73,77,4),(74,78,4),(75,79,4),(76,80,3),(77,81,4),(78,82,6);
/*!40000 ALTER TABLE `faci_batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo` (
  `idphoto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idalbum` int(10) unsigned NOT NULL,
  `iduser` int(10) unsigned NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `url` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`idphoto`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
INSERT INTO `photo` VALUES (2,1,1,'2','IMG_1891.JPG','2011-12-12 00:07:00'),(3,1,1,'3','IMG_1892.JPG','2011-12-12 00:07:00'),(5,1,1,'5','IMG_1894.JPG','2011-12-12 00:07:00'),(8,1,1,'hello kitty!:)','IMG_1906.JPG','2011-12-12 12:03:00'),(9,1,1,'','IMG_1907.JPG','2011-12-12 12:03:00'),(10,1,1,'','IMG_1908.JPG','2011-12-12 12:03:00'),(11,1,1,'my collections:)','IMG_1913.JPG','2011-12-12 12:03:00'),(13,1,1,'dale!','IMG_1915.JPG','2011-12-12 12:03:00');
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` VALUES ('8b42ba4e9bb855ef05d22ac9ce02decd','0.0.0.0','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.142 Safari/535.19',1333727736,''),('ae29129119643e82224acbac86b200f3','0.0.0.0','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.142 Safari/535.19',1333727669,'a:8:{s:9:\"user_data\";s:0:\"\";s:6:\"iduser\";s:1:\"1\";s:8:\"username\";s:7:\"formdev\";s:9:\"firstname\";s:7:\"FORMDEV\";s:8:\"lastname\";s:0:\"\";s:13:\"is_authorized\";b:1;s:4:\"type\";s:11:\"Facilitator\";s:12:\"is_logged_in\";b:1;}'),('cd11fb58daf9453bc53cdbd9da746f11','0.0.0.0','Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)',1333723273,'');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `idfile` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `label` varchar(200) DEFAULT NULL,
  `path` varchar(200) DEFAULT NULL,
  `filename` varchar(200) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `access` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfile`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` VALUES (2,1,'Guidelines - Bible Study Leaders','http://localhost/formdev/downloads/','FORMDEV - Guidelines - Bible Study Leaders.doc','2011-09-27 20:53:43',1),(3,1,'Workbook Faci Guide','http://localhost/formdev/downloads/','FORMDEV - Workbook Faci Guide.pdf','2011-09-27 20:56:12',1),(6,1,'FORMDEV - Handbook','http://localhost/formdev/downloads/','FORMDEV - Handbook.pdf','2012-04-06 09:50:34',2),(7,1,'FORMDEV - Guidelines - Class Facis & Henchies','http://localhost/formdev/downloads/','FORMDEV - Guidelines - Class Facis  Henchies.pdf','2012-04-06 10:09:18',1),(8,1,'FORMDEV - Slides','http://localhost/formdev/downloads/','FORMDEV - Slides.ppt','2012-04-06 11:10:13',1);
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_committee_membership`
--

DROP TABLE IF EXISTS `tbl_committee_membership`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_committee_membership` (
  `faci` int(10) unsigned NOT NULL,
  `committee` int(10) unsigned NOT NULL,
  KEY `FK_tbl_committee_membership_1` (`faci`),
  KEY `FK_tbl_committee_membership_2` (`committee`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_committee_membership`
--

LOCK TABLES `tbl_committee_membership` WRITE;
/*!40000 ALTER TABLE `tbl_committee_membership` DISABLE KEYS */;
INSERT INTO `tbl_committee_membership` VALUES (10,4),(52,4),(11,4),(13,4),(1,5),(2,5),(3,5),(4,6),(5,2),(6,5),(7,5),(8,5),(9,6),(12,3),(14,5),(15,2),(16,5),(17,5),(18,6),(19,5),(20,2),(21,5),(22,3),(23,5),(24,5),(25,5),(26,5),(27,5),(28,5),(29,5),(30,5),(31,5),(32,5),(33,5),(34,3),(35,3),(36,1),(37,3),(38,2),(39,2),(40,2),(41,2),(42,6),(43,1),(44,3),(46,5),(47,3),(48,3),(49,1),(50,6),(51,1),(53,1),(54,1),(55,3),(56,3),(57,5),(58,3),(59,1),(60,2),(61,1),(62,2),(63,2),(64,2),(65,5),(66,2),(67,3),(68,1),(69,1),(70,1),(71,2),(72,4),(73,3),(74,1),(75,2),(76,3),(45,5),(77,6);
/*!40000 ALTER TABLE `tbl_committee_membership` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `idimages` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idimages`),
  KEY `FK_images_1` (`iduser`),
  CONSTRAINT `FK_images_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_roles`
--

DROP TABLE IF EXISTS `tbl_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_roles` (
  `role` varchar(100) NOT NULL,
  `level` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_roles`
--

LOCK TABLES `tbl_roles` WRITE;
/*!40000 ALTER TABLE `tbl_roles` DISABLE KEYS */;
INSERT INTO `tbl_roles` VALUES ('BS Leader',9),('Class Faci',6),('Class Henchie',6),('Committee Head',8),('Common User',1),('Formdev Head',10),('Monitoring Agent',7),('Monitoring Head',10),('Student Head',10);
/*!40000 ALTER TABLE `tbl_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_class`
--

DROP TABLE IF EXISTS `tbl_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section` varchar(45) NOT NULL,
  `schedule` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_class`
--

LOCK TABLES `tbl_class` WRITE;
/*!40000 ALTER TABLE `tbl_class` DISABLE KEYS */;
INSERT INTO `tbl_class` VALUES (1,'S17','Tuesday 9:40-11:10'),(2,'S18','Friday 9:40-11:10'),(3,'S19','Thursday 4:20-5:50'),(4,'S20','Monday 2:40-4:10'),(5,'S21','Monday 1:00-2:30'),(6,'S22','Monday 4:20-5:50');
/*!40000 ALTER TABLE `tbl_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `album` (
  `idalbum` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `iduser` int(10) unsigned NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`idalbum`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` VALUES (1,1,'My first album','testing the gallery','2011-12-12 00:07:00');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcement` (
  `idannouncement` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `role` varchar(45) DEFAULT NULL,
  `content` text,
  `datetime` datetime DEFAULT NULL,
  `title` varchar(45) NOT NULL,
  PRIMARY KEY (`idannouncement`),
  KEY `FK_user` (`iduser`),
  CONSTRAINT `FK_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcement`
--

LOCK TABLES `announcement` WRITE;
/*!40000 ALTER TABLE `announcement` DISABLE KEYS */;
INSERT INTO `announcement` VALUES (2,1,'lost again','at a loss on what to write','2011-09-22 08:18:06','The Very First'),(3,1,'...','Yeeeey','2011-09-22 08:18:37','My Second Announcement'),(4,1,'still don\'t know what the role is for','I hereby declare world peace!','2011-09-22 08:22:40','My Third Announcement'),(5,1,'Role','Content','2011-09-22 12:35:33','Title'),(6,1,'Role','Content','2011-09-22 12:35:40','Title'),(7,1,'Kung anu man','Aww it\'s not working :(','2011-11-07 15:00:01','TinyMCE is Working!'),(8,1,'Role','0','2011-11-07 15:21:56','Part Two');
/*!40000 ALTER TABLE `announcement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance` (
  `idattendance` int(11) NOT NULL,
  `idstudent` int(11) DEFAULT NULL,
  `orient` int(11) DEFAULT NULL,
  `intro` int(11) DEFAULT NULL,
  `ch1` int(11) DEFAULT NULL,
  `ch2` int(11) DEFAULT NULL,
  `ch3` int(11) DEFAULT NULL,
  `ch4` int(11) DEFAULT NULL,
  `ch5` int(11) DEFAULT NULL,
  `ch6` int(11) DEFAULT NULL,
  `ch7` int(11) DEFAULT NULL,
  `ch8` int(11) DEFAULT NULL,
  `brother` int(11) DEFAULT NULL,
  `outreach` int(11) DEFAULT NULL,
  `finals` int(11) DEFAULT NULL,
  PRIMARY KEY (`idattendance`),
  KEY `FK_attendance_1` (`idstudent`),
  CONSTRAINT `FK_attendance_1` FOREIGN KEY (`idstudent`) REFERENCES `student` (`idstudent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_transaction_types`
--

DROP TABLE IF EXISTS `tbl_transaction_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_transaction_types` (
  `transaction_type` varchar(45) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`transaction_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_transaction_types`
--

LOCK TABLES `tbl_transaction_types` WRITE;
/*!40000 ALTER TABLE `tbl_transaction_types` DISABLE KEYS */;
INSERT INTO `tbl_transaction_types` VALUES ('ABSR','Bible Study Report Add Request'),('ACAR','Class Attendance Report Add Request'),('ACMR','Committee Monitoring Report Add Request'),('AOAR','Outreach Attendance Report Add Request'),('USRP','User Password Recovery Request');
/*!40000 ALTER TABLE `tbl_transaction_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_class_reports`
--

DROP TABLE IF EXISTS `tbl_class_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_class_reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` date NOT NULL,
  `section` int(10) unsigned NOT NULL,
  `submitted_by` int(10) unsigned NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tbl_class_reports_1` (`submitted_by`),
  KEY `FK_tbl_class_reports_2` (`section`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_class_reports`
--

LOCK TABLES `tbl_class_reports` WRITE;
/*!40000 ALTER TABLE `tbl_class_reports` DISABLE KEYS */;
INSERT INTO `tbl_class_reports` VALUES (1,'2012-01-21 19:25:58','2012-01-05',3,36,''),(2,'2012-01-21 19:26:23','2012-01-09',5,63,''),(3,'2012-01-21 20:19:07','2012-01-12',3,36,'Hinatid po ni Josh A. yung tita niya sa airport :)'),(4,'2012-01-21 21:58:02','2012-01-16',1,59,''),(5,'2012-01-22 01:41:10','2012-01-09',6,44,''),(6,'2012-01-22 01:41:33','2012-01-16',6,44,''),(7,'2012-01-22 05:21:27','2012-01-06',2,48,''),(8,'2012-01-22 05:22:41','2012-01-13',2,48,''),(9,'2012-01-22 21:16:36','2012-01-09',4,34,'All present! :D'),(10,'2012-01-22 21:17:06','2012-01-16',4,34,'All present! :D'),(11,'2012-01-25 05:18:10','2012-01-24',1,59,''),(12,'2012-01-31 19:24:52','2012-01-30',6,44,''),(13,'2012-02-02 19:48:12','2012-01-20',2,48,''),(14,'2012-02-02 19:49:59','2012-01-27',2,48,''),(15,'2012-02-02 19:50:41','2012-02-03',2,48,''),(16,'2012-02-03 04:15:41','2012-01-30',5,63,''),(17,'2012-02-11 05:50:26','2012-02-10',2,48,''),(18,'2012-02-15 06:51:56','2012-02-06',5,63,''),(19,'2012-02-15 06:52:24','2012-02-13',5,63,''),(20,'2012-02-17 16:58:07','2012-02-06',6,44,''),(21,'2012-02-17 16:58:38','2012-02-13',6,44,'GK outreach orientation'),(22,'2012-02-19 02:24:54','2012-02-17',2,48,''),(23,'2012-02-20 05:22:44','2012-01-19',3,36,''),(24,'2012-02-20 05:23:18','2012-01-26',3,36,''),(25,'2012-02-20 05:23:54','2012-02-02',3,36,''),(26,'2012-02-20 05:24:37','2012-02-09',3,36,''),(27,'2012-02-20 05:25:04','2012-02-16',3,36,''),(29,'2012-02-20 07:58:17','2012-01-30',4,34,''),(30,'2012-02-20 07:59:23','2012-02-06',4,34,''),(31,'2012-02-20 08:00:40','2012-02-13',4,34,''),(32,'2012-02-20 08:02:12','2012-02-20',4,34,'Sherlo is in an interview at Makati for ADVANSE.\nMichael is not feeling well.'),(33,'2012-02-20 08:16:01','2012-02-07',1,59,''),(35,'2012-02-22 00:50:49','2012-01-16',5,63,''),(36,'2012-02-22 00:51:15','2012-02-20',5,63,''),(37,'2012-02-22 06:01:36','2012-02-21',1,59,''),(38,'2012-02-22 21:01:34','2012-02-20',6,44,''),(39,'2012-02-23 00:27:05','2012-01-31',1,42,''),(40,'2012-02-23 07:19:14','2012-01-10',1,59,''),(41,'2012-02-23 18:41:13','2012-02-24',2,48,'Ate Karen is excused because of a conference'),(42,'2012-02-23 21:18:41','2012-02-23',3,36,'Ivan - Thesis defense\nJann - ADVANSE (interview sa company)'),(43,'2012-02-27 04:40:45','2012-02-27',5,63,''),(44,'2012-02-29 22:54:32','2012-02-28',1,59,''),(45,'2012-03-06 04:11:47','2012-03-02',2,48,''),(46,'2012-03-06 21:18:05','2012-03-05',5,63,''),(47,'2012-03-08 17:30:01','2012-03-01',3,36,''),(48,'2012-03-08 17:31:22','2012-03-08',3,36,''),(49,'2012-03-09 02:25:42','2012-03-09',2,48,''),(50,'2012-03-14 06:40:16','2012-03-06',1,59,''),(51,'2012-03-14 06:41:02','2012-03-13',1,59,''),(53,'2012-03-17 15:33:31','2012-02-27',6,44,''),(54,'2012-03-17 15:34:02','2012-03-05',6,44,''),(55,'2012-03-17 15:36:15','2012-03-12',6,44,''),(56,'2012-03-17 15:55:50','2012-03-12',5,63,''),(57,'2012-03-17 17:13:00','2012-02-27',4,34,''),(58,'2012-03-17 17:13:31','2012-03-05',4,34,''),(59,'2012-03-17 17:13:58','2012-03-12',4,34,''),(60,'2012-03-17 18:26:32','2012-03-15',3,36,''),(61,'2012-03-17 20:21:55','2012-03-16',2,48,'Kyla - absent because she was sick');
/*!40000 ALTER TABLE `tbl_class_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_bs_leaders_attendance`
--

DROP TABLE IF EXISTS `tbl_bs_leaders_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_bs_leaders_attendance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member` varchar(45) NOT NULL,
  `1` tinyint(1) NOT NULL DEFAULT '0',
  `2` tinyint(1) NOT NULL DEFAULT '0',
  `3` tinyint(1) NOT NULL DEFAULT '0',
  `4` tinyint(1) NOT NULL DEFAULT '0',
  `5` tinyint(1) NOT NULL DEFAULT '0',
  `6` tinyint(1) NOT NULL DEFAULT '0',
  `7` tinyint(1) NOT NULL DEFAULT '0',
  `8` tinyint(1) NOT NULL DEFAULT '0',
  `9` tinyint(1) NOT NULL DEFAULT '0',
  `10` tinyint(1) NOT NULL DEFAULT '0',
  `11` tinyint(1) NOT NULL DEFAULT '0',
  `12` tinyint(1) NOT NULL DEFAULT '0',
  `13` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_bs_leaders_attendance`
--

LOCK TABLES `tbl_bs_leaders_attendance` WRITE;
/*!40000 ALTER TABLE `tbl_bs_leaders_attendance` DISABLE KEYS */;
INSERT INTO `tbl_bs_leaders_attendance` VALUES (1,'Doc Sison',1,1,0,0,0,0,0,0,0,0,0,0,0),(2,'Mc Miranda',1,1,0,0,0,0,0,0,0,0,0,0,0),(3,'Ac Miranda',1,1,0,0,0,0,0,0,0,0,0,0,0),(4,'Paolo Gervacio',1,1,0,0,0,0,0,0,0,0,0,0,0),(5,'Jenna Tardio',0,0,0,0,0,0,0,0,0,0,0,0,0),(6,'Jacats Catan',1,1,0,0,0,0,0,0,0,0,0,0,0),(7,'Chai Musni',1,1,0,0,0,0,0,0,0,0,0,0,0),(8,'Den Abad',1,1,0,0,0,0,0,0,0,0,0,0,0),(9,'Carlo Aragoncillo',1,1,0,0,0,0,0,0,0,0,0,0,0),(10,'Pat Lim',1,1,0,0,0,0,0,0,0,0,0,0,0),(11,'Nikko Reyes',1,1,0,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `tbl_bs_leaders_attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verse_app`
--

DROP TABLE IF EXISTS `verse_app`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verse_app` (
  `idverseapp` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idverse` int(10) unsigned NOT NULL,
  `application` varchar(500) DEFAULT NULL,
  `isVW` tinyint(1) NOT NULL DEFAULT '0',
  `seton` datetime NOT NULL,
  PRIMARY KEY (`idverseapp`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verse_app`
--

LOCK TABLES `verse_app` WRITE;
/*!40000 ALTER TABLE `verse_app` DISABLE KEYS */;
INSERT INTO `verse_app` VALUES (3,2,'I want this.',0,'0000-00-00 00:00:00'),(4,3,'0',1,'2012-04-07 00:31:00'),(5,6,'hey test ito',0,'0000-00-00 00:00:00'),(6,8,NULL,0,'0000-00-00 00:00:00'),(13,5,'This is the current verse of the week.',0,'0000-00-00 00:00:00'),(14,1,'Pray for others not only for yourself.',0,'2011-12-16 14:04:00');
/*!40000 ALTER TABLE `verse_app` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `idclass` int(11) NOT NULL,
  `academicyear` int(11) DEFAULT NULL,
  `term` int(11) DEFAULT NULL,
  `section` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idclass`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verse`
--

DROP TABLE IF EXISTS `verse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verse` (
  `idverse` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `book` varchar(45) DEFAULT NULL,
  `chapter` varchar(45) DEFAULT NULL,
  `verse` varchar(45) DEFAULT NULL,
  `text` varchar(500) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `faciapp` varchar(45) DEFAULT NULL,
  `idfaci` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idverse`),
  KEY `FK_verse_1` (`iduser`),
  CONSTRAINT `FK_verse_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verse`
--

LOCK TABLES `verse` WRITE;
/*!40000 ALTER TABLE `verse` DISABLE KEYS */;
INSERT INTO `verse` VALUES (1,2,'Psalm','10','17','You hear, O Lord, the desire of the afflicted; you encourage them, and you listen to their cry.','2011-12-08 00:00:00','Pray for others not only for yourself. :)',1),(2,2,'Romans','12','9','Don’t just pretend to love others. Really love them. Hate what is wrong. Hold tightly to what is good.','2007-08-30 20:55:48',NULL,2),(3,2,'Romans','12','17','Never pay back evil with more evil. Do things in such a way that everyone can see you are honorable. 18 Do all that you can to live in peace with everyone.','2007-08-30 20:55:48',NULL,3),(5,2,'Romans','2','18','Do all that you can to live in peace with everyone.','0000-00-00 00:00:00',':)',2),(6,2,'John','3','16','For God so loved the world that He gave His only Son that whoever who believes in Him shall not perish but have eternal life.','2011-04-26 04:03:28','memorable.',2);
/*!40000 ALTER TABLE `verse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_bs_attendance`
--

DROP TABLE IF EXISTS `tbl_bs_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_bs_attendance` (
  `report` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `faci` int(10) unsigned NOT NULL,
  `attendance` decimal(10,1) NOT NULL COMMENT '1=present, 0=absent, -1=excused, 0.5=late',
  KEY `FK_tbl_bs_attendance_1` (`report`),
  KEY `FK_tbl_bs_attendance_2` (`faci`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_bs_attendance`
--

LOCK TABLES `tbl_bs_attendance` WRITE;
/*!40000 ALTER TABLE `tbl_bs_attendance` DISABLE KEYS */;
INSERT INTO `tbl_bs_attendance` VALUES (1,10,1.0),(1,66,1.0),(1,67,1.0),(1,68,0.5),(1,71,1.0),(1,74,1.0),(2,10,1.0),(2,66,1.0),(2,67,1.0),(2,68,1.0),(2,71,1.0),(2,74,1.0),(3,4,1.0),(3,69,1.0),(3,70,1.0),(3,72,1.0),(3,73,1.0),(3,75,1.0),(3,76,1.0),(4,9,1.0),(4,20,0.5),(5,61,1.0),(4,22,1.0),(5,58,1.0),(5,53,1.0),(5,50,1.0),(5,62,1.0),(5,63,1.0),(6,4,1.0),(6,10,1.0),(6,9,1.0),(65,63,1.0),(6,18,1.0),(6,38,1.0),(6,33,1.0),(6,42,1.0),(6,50,1.0),(6,5,1.0),(7,4,1.0),(7,10,1.0),(7,9,1.0),(65,62,1.0),(7,18,1.0),(7,38,1.0),(7,33,1.0),(7,42,1.0),(7,50,1.0),(7,5,1.0),(8,9,1.0),(8,20,1.0),(8,22,0.0),(9,4,1.0),(9,10,1.0),(9,9,1.0),(65,61,1.0),(9,18,1.0),(9,38,1.0),(9,33,1.0),(9,42,1.0),(9,50,1.0),(9,5,1.0),(10,50,1.0),(10,53,-1.0),(10,58,1.0),(10,61,1.0),(10,62,1.0),(10,63,1.0),(11,10,1.0),(11,66,1.0),(11,67,1.0),(11,68,0.0),(11,71,1.0),(11,74,1.0),(12,13,1.0),(12,5,1.0),(12,11,1.0),(12,12,-1.0),(13,18,1.0),(13,32,0.0),(13,34,0.5),(13,35,-1.0),(13,36,1.0),(13,37,-1.0),(13,39,-1.0),(13,40,1.0),(13,54,-1.0),(14,18,1.0),(14,32,1.0),(14,34,1.0),(14,35,1.0),(14,36,1.0),(14,37,1.0),(14,39,1.0),(14,40,1.0),(14,54,1.0),(15,18,1.0),(15,32,1.0),(15,34,1.0),(15,35,1.0),(15,36,1.0),(15,37,1.0),(15,39,1.0),(15,40,0.0),(15,54,1.0),(16,4,1.0),(16,10,1.0),(16,9,1.0),(65,58,1.0),(16,18,1.0),(16,38,1.0),(16,33,1.0),(16,42,1.0),(16,50,-1.0),(16,5,1.0),(17,50,1.0),(17,53,1.0),(17,58,1.0),(17,61,1.0),(17,62,1.0),(17,63,1.0),(18,33,1.0),(18,44,1.0),(18,46,1.0),(18,47,1.0),(18,49,1.0),(18,52,1.0),(19,33,1.0),(19,44,1.0),(19,46,1.0),(19,47,1.0),(19,49,1.0),(19,52,1.0),(20,33,1.0),(20,44,1.0),(20,46,1.0),(20,47,1.0),(20,49,1.0),(20,52,1.0),(21,10,1.0),(21,66,1.0),(21,67,1.0),(21,68,1.0),(21,71,1.0),(21,74,1.0),(22,50,1.0),(22,53,1.0),(22,58,1.0),(22,61,-1.0),(22,62,1.0),(22,63,1.0),(23,38,1.0),(23,41,1.0),(23,43,1.0),(23,45,-1.0),(23,48,0.5),(23,51,0.5),(24,38,1.0),(24,41,1.0),(24,43,1.0),(24,45,-1.0),(24,48,1.0),(24,51,1.0),(25,38,-1.0),(25,41,1.0),(25,43,-1.0),(25,45,-1.0),(25,48,1.0),(25,51,1.0),(26,10,1.0),(26,66,1.0),(26,67,1.0),(26,68,1.0),(26,71,1.0),(26,74,1.0),(27,18,1.0),(27,32,1.0),(27,34,1.0),(27,35,1.0),(27,36,1.0),(27,37,-1.0),(27,39,1.0),(27,40,1.0),(27,54,1.0),(28,18,1.0),(28,32,0.0),(28,34,1.0),(28,35,0.0),(28,36,1.0),(28,37,1.0),(28,39,1.0),(28,40,0.0),(28,54,1.0),(29,50,1.0),(29,53,-1.0),(29,58,1.0),(29,61,1.0),(29,62,1.0),(29,63,-1.0),(30,4,1.0),(30,69,1.0),(30,70,1.0),(30,72,1.0),(30,73,1.0),(30,75,1.0),(30,76,-1.0),(31,4,1.0),(31,69,1.0),(31,70,1.0),(31,72,1.0),(31,73,1.0),(31,75,1.0),(31,76,-1.0),(32,4,1.0),(32,69,1.0),(32,70,1.0),(32,72,1.0),(32,73,1.0),(32,75,1.0),(32,76,1.0),(33,4,1.0),(33,69,1.0),(33,70,1.0),(33,72,1.0),(33,73,1.0),(33,75,1.0),(33,76,0.0),(34,38,1.0),(34,41,1.0),(34,43,1.0),(34,45,-1.0),(34,48,0.0),(34,51,1.0),(35,10,1.0),(35,66,1.0),(35,67,1.0),(35,68,0.0),(35,71,1.0),(35,74,1.0),(36,4,-1.0),(36,10,-1.0),(36,9,-1.0),(65,53,1.0),(36,18,-1.0),(36,38,-1.0),(36,33,-1.0),(36,42,1.0),(36,50,1.0),(36,5,-1.0),(36,43,1.0),(36,49,1.0),(37,4,1.0),(37,69,1.0),(37,70,-1.0),(37,72,-1.0),(37,73,-1.0),(37,75,1.0),(37,76,1.0),(38,38,1.0),(38,41,1.0),(38,43,1.0),(38,45,-1.0),(38,48,1.0),(38,51,1.0),(39,38,1.0),(39,41,1.0),(39,43,1.0),(39,45,-1.0),(39,48,0.0),(39,51,0.0),(40,9,1.0),(40,20,1.0),(40,22,0.5),(41,9,1.0),(41,20,1.0),(41,22,1.0),(42,9,1.0),(42,20,1.0),(42,22,0.0),(43,9,-1.0),(43,20,1.0),(43,22,1.0),(44,42,1.0),(44,55,1.0),(44,56,1.0),(44,59,-1.0),(44,60,1.0),(44,64,1.0),(45,42,1.0),(45,55,1.0),(45,56,1.0),(45,59,1.0),(45,60,1.0),(45,64,1.0),(46,42,1.0),(46,55,1.0),(46,56,1.0),(46,59,1.0),(46,60,1.0),(46,64,1.0),(47,42,1.0),(47,55,1.0),(47,56,1.0),(47,59,1.0),(47,60,1.0),(47,64,1.0),(48,42,1.0),(48,55,1.0),(48,56,1.0),(48,59,1.0),(48,60,1.0),(48,64,1.0),(49,42,1.0),(49,55,1.0),(49,56,-1.0),(49,59,-1.0),(49,60,1.0),(49,64,1.0),(50,33,1.0),(50,44,1.0),(50,46,1.0),(50,47,1.0),(50,49,1.0),(50,52,1.0),(51,33,1.0),(51,44,-1.0),(51,46,0.0),(51,47,1.0),(51,49,1.0),(51,52,1.0),(52,33,1.0),(52,44,1.0),(52,46,-1.0),(52,47,1.0),(52,49,1.0),(52,52,1.0),(53,38,1.0),(53,41,-1.0),(53,43,1.0),(53,45,-1.0),(53,48,1.0),(53,51,1.0),(54,10,1.0),(54,66,1.0),(54,67,1.0),(54,68,0.0),(54,71,1.0),(54,74,1.0),(55,18,1.0),(55,32,1.0),(55,34,1.0),(55,35,0.0),(55,36,1.0),(55,37,1.0),(55,39,1.0),(55,40,1.0),(55,54,1.0),(56,18,1.0),(56,32,1.0),(56,34,1.0),(56,35,1.0),(56,36,1.0),(56,37,1.0),(56,39,1.0),(56,40,1.0),(56,54,1.0),(57,50,1.0),(57,53,1.0),(57,58,1.0),(57,61,1.0),(57,62,1.0),(57,63,1.0),(58,4,1.0),(58,10,1.0),(58,9,1.0),(65,50,1.0),(58,18,1.0),(58,38,1.0),(58,33,1.0),(58,42,1.0),(58,50,1.0),(58,5,1.0),(58,43,1.0),(58,49,1.0),(59,38,1.0),(59,41,1.0),(59,43,1.0),(59,45,0.0),(59,48,0.0),(59,51,1.0),(60,10,1.0),(60,66,1.0),(60,67,1.0),(60,68,1.0),(60,71,1.0),(60,74,1.0),(61,13,1.0),(61,5,1.0),(61,11,1.0),(61,12,0.0),(62,33,1.0),(62,44,1.0),(62,46,1.0),(62,47,1.0),(62,49,1.0),(62,52,1.0),(63,33,1.0),(63,44,1.0),(63,46,1.0),(63,47,1.0),(63,49,1.0),(63,52,1.0),(64,18,1.0),(64,32,1.0),(64,34,1.0),(64,35,-1.0),(64,36,1.0),(64,37,1.0),(64,39,1.0),(64,40,1.0),(64,54,1.0),(66,10,1.0),(66,66,1.0),(66,67,1.0),(66,68,1.0),(66,71,-1.0),(66,74,-1.0),(67,4,1.0),(67,10,1.0),(67,9,1.0),(67,18,1.0),(67,38,1.0),(67,33,1.0),(67,42,1.0),(67,50,1.0),(67,5,1.0),(67,43,1.0),(67,49,1.0),(68,18,1.0),(68,32,1.0),(68,34,-1.0),(68,35,1.0),(68,36,1.0),(68,37,1.0),(68,39,1.0),(68,40,1.0),(68,54,1.0),(69,33,1.0),(69,44,1.0),(69,46,0.0),(69,47,1.0),(69,49,1.0),(69,52,1.0),(70,50,1.0),(70,53,-1.0),(70,58,1.0),(70,61,-1.0),(70,62,1.0),(70,63,1.0),(71,38,1.0),(71,41,0.0),(71,43,1.0),(71,45,0.0),(71,48,1.0),(71,51,0.0),(72,38,1.0),(72,41,1.0),(72,43,1.0),(72,45,0.0),(72,48,-1.0),(72,51,0.0),(73,4,1.0),(73,10,1.0),(73,9,1.0),(73,18,1.0),(73,38,1.0),(73,33,1.0),(73,42,1.0),(73,50,1.0),(73,5,-1.0),(73,43,1.0),(73,49,1.0),(74,10,1.0),(74,66,1.0),(74,67,-1.0),(74,68,-1.0),(74,71,1.0),(74,74,1.0);
/*!40000 ALTER TABLE `tbl_bs_attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `idrole` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `position` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`idrole`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,1,'a'),(2,3,'3');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_terms`
--

DROP TABLE IF EXISTS `tbl_terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_terms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `term` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_terms`
--

LOCK TABLES `tbl_terms` WRITE;
/*!40000 ALTER TABLE `tbl_terms` DISABLE KEYS */;
INSERT INTO `tbl_terms` VALUES (1,'Term 2 - S.Y. 2011-2012');
/*!40000 ALTER TABLE `tbl_terms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faciperclass`
--

DROP TABLE IF EXISTS `faciperclass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faciperclass` (
  `idfaciperclass` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idclass` int(11) DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfaciperclass`),
  KEY `FK_faciperclass_1` (`iduser`),
  KEY `FK_faciperclass_2` (`idclass`),
  CONSTRAINT `FK_faciperclass_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_faciperclass_2` FOREIGN KEY (`idclass`) REFERENCES `class` (`idclass`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faciperclass`
--

LOCK TABLES `faciperclass` WRITE;
/*!40000 ALTER TABLE `faciperclass` DISABLE KEYS */;
/*!40000 ALTER TABLE `faciperclass` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_outreach_attendance`
--

DROP TABLE IF EXISTS `tbl_outreach_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_outreach_attendance` (
  `report` int(10) unsigned NOT NULL,
  `faci` int(10) unsigned NOT NULL,
  `attendance` decimal(10,1) NOT NULL,
  KEY `FK_tbl_outreach_attendance_1` (`report`),
  KEY `FK_tbl_outreach_attendance_2` (`faci`),
  CONSTRAINT `FK_tbl_outreach_attendance_1` FOREIGN KEY (`report`) REFERENCES `tbl_outreach_reports` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_tbl_outreach_attendance_2` FOREIGN KEY (`faci`) REFERENCES `facilitators` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_outreach_attendance`
--

LOCK TABLES `tbl_outreach_attendance` WRITE;
/*!40000 ALTER TABLE `tbl_outreach_attendance` DISABLE KEYS */;
INSERT INTO `tbl_outreach_attendance` VALUES (3,4,1.0),(3,5,1.0),(3,6,-1.0),(3,9,-1.0),(3,10,1.0),(3,11,-1.0),(3,12,-1.0),(3,13,-1.0),(3,14,-1.0),(3,15,-1.0),(3,18,1.0),(3,20,1.0),(3,21,-1.0),(3,22,-1.0),(3,32,-1.0),(3,33,-1.0),(3,34,1.0),(3,35,1.0),(3,36,1.0),(3,37,1.0),(3,38,1.0),(3,39,1.0),(3,40,-1.0),(3,41,-1.0),(3,42,1.0),(3,43,1.0),(3,44,1.0),(3,45,-1.0),(3,46,-1.0),(3,47,1.0),(3,48,-1.0),(3,49,1.0),(3,50,1.0),(3,51,-1.0),(3,52,1.0),(3,53,-1.0),(3,54,1.0),(3,55,-1.0),(3,56,1.0),(3,58,1.0),(3,59,-1.0),(3,60,1.0),(3,61,1.0),(3,62,1.0),(3,63,-1.0),(3,64,-1.0),(3,66,-1.0),(3,67,-1.0),(3,68,-1.0),(3,69,1.0),(3,70,-1.0),(3,71,-1.0),(3,72,-1.0),(3,73,-1.0),(3,74,-1.0),(3,75,-1.0),(3,76,-1.0),(4,11,-1.0),(4,12,-1.0),(4,20,0.0),(4,22,0.0),(4,32,0.0),(4,34,1.0),(4,35,1.0),(4,36,1.0),(4,37,0.0),(4,39,1.0),(4,40,-1.0),(4,41,0.0),(4,44,1.0),(4,45,-1.0),(4,46,0.0),(4,47,1.0),(4,48,1.0),(4,51,0.0),(4,52,0.0),(4,53,1.0),(4,54,1.0),(4,55,1.0),(4,56,0.0),(4,58,0.0),(4,59,1.0),(4,60,0.0),(4,61,0.0),(4,62,0.0),(4,63,1.0),(4,64,1.0),(4,66,1.0),(4,67,1.0),(4,68,0.0),(4,69,1.0),(4,70,0.0),(4,71,0.0),(4,72,1.0),(4,73,1.0),(4,74,0.0),(4,75,1.0),(4,76,1.0),(5,11,-1.0),(5,12,-1.0),(5,20,1.0),(5,22,0.0),(5,32,0.0),(5,34,1.0),(5,35,0.0),(5,36,1.0),(5,37,0.0),(5,39,0.0),(5,40,-1.0),(5,41,0.0),(5,44,1.0),(5,45,-1.0),(5,46,1.0),(5,47,0.0),(5,48,1.0),(5,51,0.0),(5,52,1.0),(5,53,0.0),(5,54,0.0),(5,55,0.0),(5,56,1.0),(5,58,1.0),(5,59,0.0),(5,60,0.0),(5,61,0.0),(5,62,1.0),(5,63,0.0),(5,64,0.0),(5,66,1.0),(5,67,0.0),(5,68,0.0),(5,69,1.0),(5,70,1.0),(5,71,-1.0),(5,72,1.0),(5,73,1.0),(5,74,1.0),(5,75,1.0),(5,76,0.0),(6,4,1.0),(6,5,1.0),(6,6,-1.0),(6,9,1.0),(6,10,-1.0),(6,11,-1.0),(6,12,-1.0),(6,13,-1.0),(6,14,-1.0),(6,15,-1.0),(6,18,1.0),(6,20,-1.0),(6,21,-1.0),(6,22,-1.0),(6,32,-1.0),(6,33,1.0),(6,34,-1.0),(6,35,-1.0),(6,36,1.0),(6,37,-1.0),(6,38,1.0),(6,39,1.0),(6,40,-1.0),(6,41,1.0),(6,42,-1.0),(6,43,-1.0),(6,44,-1.0),(6,45,-1.0),(6,46,1.0),(6,47,1.0),(6,48,-1.0),(6,49,-1.0),(6,50,-1.0),(6,51,-1.0),(6,52,-1.0),(6,53,1.0),(6,54,1.0),(6,55,-1.0),(6,56,-1.0),(6,58,-1.0),(6,59,-1.0),(6,60,-1.0),(6,61,-1.0),(6,62,-1.0),(6,63,-1.0),(6,64,-1.0),(6,66,-1.0),(6,67,-1.0),(6,68,-1.0),(6,69,1.0),(6,70,1.0),(6,71,-1.0),(6,72,-1.0),(6,73,-1.0),(6,74,-1.0),(6,75,-1.0),(6,76,-1.0),(7,4,1.0),(7,5,-1.0),(7,6,-1.0),(7,9,-1.0),(7,10,1.0),(7,11,-1.0),(7,12,-1.0),(7,13,-1.0),(7,14,-1.0),(7,15,-1.0),(7,18,-1.0),(7,20,1.0),(7,21,-1.0),(7,22,1.0),(7,32,-1.0),(7,33,-1.0),(7,34,-1.0),(7,35,-1.0),(7,36,-1.0),(7,37,-1.0),(7,38,-1.0),(7,39,-1.0),(7,40,-1.0),(7,41,-1.0),(7,42,1.0),(7,43,-1.0),(7,44,1.0),(7,45,-1.0),(7,46,-1.0),(7,47,1.0),(7,48,-1.0),(7,49,1.0),(7,50,-1.0),(7,51,0.0),(7,52,-1.0),(7,53,-1.0),(7,54,-1.0),(7,55,-1.0),(7,56,1.0),(7,58,-1.0),(7,59,1.0),(7,60,-1.0),(7,61,1.0),(7,62,1.0),(7,63,-1.0),(7,64,-1.0),(7,66,-1.0),(7,67,-1.0),(7,68,-1.0),(7,69,1.0),(7,70,-1.0),(7,71,1.0),(7,72,1.0),(7,73,-1.0),(7,74,1.0),(7,75,-1.0),(7,76,-1.0),(8,4,1.0),(8,5,-1.0),(8,6,-1.0),(8,9,-1.0),(8,10,1.0),(8,11,-1.0),(8,12,-1.0),(8,13,-1.0),(8,14,1.0),(8,15,-1.0),(8,18,1.0),(8,20,1.0),(8,21,-1.0),(8,22,-1.0),(8,32,1.0),(8,33,1.0),(8,34,1.0),(8,35,-1.0),(8,36,-1.0),(8,37,1.0),(8,38,-1.0),(8,39,-1.0),(8,40,-1.0),(8,41,-1.0),(8,42,1.0),(8,43,1.0),(8,44,-1.0),(8,45,-1.0),(8,46,-1.0),(8,47,-1.0),(8,48,-1.0),(8,49,1.0),(8,50,1.0),(8,51,-1.0),(8,52,1.0),(8,53,-1.0),(8,54,-1.0),(8,55,1.0),(8,56,-1.0),(8,58,1.0),(8,59,-1.0),(8,60,1.0),(8,61,-1.0),(8,62,-1.0),(8,63,1.0),(8,64,1.0),(8,66,1.0),(8,67,1.0),(8,68,-1.0),(8,69,-1.0),(8,70,-1.0),(8,71,-1.0),(8,72,-1.0),(8,73,1.0),(8,74,-1.0),(8,75,1.0),(8,76,1.0);
/*!40000 ALTER TABLE `tbl_outreach_attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_class_attendance`
--

DROP TABLE IF EXISTS `tbl_class_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_class_attendance` (
  `report` int(10) unsigned NOT NULL,
  `faci` int(10) unsigned NOT NULL,
  `attendance` decimal(10,1) NOT NULL,
  KEY `FK_tbl_class_attendance_1` (`report`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_class_attendance`
--

LOCK TABLES `tbl_class_attendance` WRITE;
/*!40000 ALTER TABLE `tbl_class_attendance` DISABLE KEYS */;
INSERT INTO `tbl_class_attendance` VALUES (1,38,1.0),(1,36,1.0),(1,33,1.0),(1,39,1.0),(1,46,1.0),(1,47,1.0),(1,54,1.0),(1,55,1.0),(1,70,1.0),(1,69,1.0),(2,50,1.0),(2,63,1.0),(2,32,0.0),(2,40,0.0),(2,58,1.0),(2,60,1.0),(2,66,1.0),(2,67,1.0),(2,75,1.0),(2,14,1.0),(3,38,1.0),(3,36,1.0),(3,33,1.0),(3,39,0.5),(3,46,1.0),(3,47,1.0),(3,54,0.5),(3,55,-1.0),(3,70,1.0),(3,69,1.0),(4,42,1.0),(4,59,1.0),(4,4,1.0),(4,20,1.0),(4,22,1.0),(4,51,1.0),(4,68,1.0),(5,49,1.0),(5,44,1.0),(5,10,1.0),(5,37,1.0),(5,56,1.0),(5,61,1.0),(5,62,1.0),(5,71,1.0),(5,72,1.0),(5,74,1.0),(6,49,1.0),(6,44,1.0),(6,10,1.0),(6,37,1.0),(6,56,1.0),(6,61,1.0),(6,62,1.0),(6,71,1.0),(6,72,1.0),(6,74,1.0),(7,5,1.0),(7,48,1.0),(7,4,1.0),(7,9,1.0),(7,18,1.0),(7,41,1.0),(7,53,1.0),(8,5,1.0),(8,48,1.0),(8,4,1.0),(8,9,1.0),(8,18,1.0),(8,41,1.0),(8,53,1.0),(9,43,1.0),(9,34,1.0),(9,35,1.0),(9,52,1.0),(9,60,1.0),(9,64,1.0),(9,73,1.0),(9,76,1.0),(10,43,1.0),(10,34,1.0),(10,35,1.0),(10,52,1.0),(10,60,1.0),(10,64,1.0),(10,73,1.0),(10,76,1.0),(11,42,1.0),(11,59,0.5),(11,4,0.5),(11,20,1.0),(11,22,0.0),(11,51,1.0),(11,68,1.0),(12,49,1.0),(12,44,1.0),(12,10,1.0),(12,37,1.0),(12,56,1.0),(12,61,1.0),(12,62,1.0),(12,71,1.0),(12,72,1.0),(12,74,1.0),(13,5,1.0),(13,48,1.0),(13,4,1.0),(13,9,1.0),(13,18,-1.0),(13,41,1.0),(13,53,1.0),(14,5,1.0),(14,48,1.0),(14,4,1.0),(14,9,1.0),(14,18,1.0),(14,41,1.0),(14,53,1.0),(15,5,1.0),(15,48,0.5),(15,4,1.0),(15,9,1.0),(15,18,1.0),(15,41,1.0),(15,53,1.0),(16,50,1.0),(16,63,1.0),(16,32,0.5),(16,40,0.5),(16,58,1.0),(16,60,1.0),(16,66,1.0),(16,67,1.0),(16,75,1.0),(16,14,1.0),(17,5,1.0),(17,48,1.0),(17,4,1.0),(17,9,1.0),(17,18,1.0),(17,41,1.0),(17,53,1.0),(18,50,1.0),(18,63,1.0),(18,32,0.5),(18,40,1.0),(18,58,1.0),(18,60,1.0),(18,66,1.0),(18,67,1.0),(18,75,1.0),(18,14,0.5),(19,50,1.0),(19,63,1.0),(19,32,0.0),(19,40,1.0),(19,58,1.0),(19,60,1.0),(19,66,1.0),(19,67,1.0),(19,75,1.0),(19,14,0.0),(20,49,1.0),(20,44,1.0),(20,10,1.0),(20,37,1.0),(20,56,1.0),(20,61,1.0),(20,62,1.0),(20,71,1.0),(20,72,1.0),(20,74,1.0),(21,49,1.0),(21,44,1.0),(21,10,1.0),(21,37,1.0),(21,56,1.0),(21,61,1.0),(21,62,1.0),(21,71,1.0),(21,72,1.0),(21,74,1.0),(22,5,1.0),(22,48,0.0),(22,4,1.0),(22,9,1.0),(22,18,1.0),(22,41,1.0),(22,53,0.0),(23,38,1.0),(23,36,1.0),(23,33,1.0),(23,39,1.0),(23,46,1.0),(23,47,1.0),(23,54,1.0),(23,55,1.0),(23,70,1.0),(23,69,1.0),(24,38,0.0),(24,36,1.0),(24,33,0.5),(24,39,1.0),(24,46,1.0),(24,47,1.0),(24,54,1.0),(24,55,1.0),(24,70,1.0),(24,69,1.0),(25,38,1.0),(25,36,1.0),(25,33,1.0),(25,39,1.0),(25,46,1.0),(25,47,1.0),(25,54,1.0),(25,55,1.0),(25,70,1.0),(25,69,1.0),(26,38,1.0),(26,36,1.0),(26,33,1.0),(26,39,1.0),(26,46,1.0),(26,47,1.0),(26,54,1.0),(26,55,1.0),(26,70,1.0),(26,69,1.0),(27,38,1.0),(27,36,1.0),(27,33,1.0),(27,39,1.0),(27,46,1.0),(27,47,1.0),(27,54,1.0),(27,55,1.0),(27,70,1.0),(27,69,1.0),(42,38,1.0),(41,53,0.5),(41,41,-1.0),(41,18,1.0),(41,9,1.0),(41,4,1.0),(41,48,1.0),(41,5,1.0),(29,43,1.0),(29,34,1.0),(29,35,1.0),(29,52,1.0),(29,60,1.0),(29,64,1.0),(29,73,1.0),(29,76,1.0),(30,43,1.0),(30,34,1.0),(30,35,1.0),(30,52,1.0),(30,60,1.0),(30,64,1.0),(30,73,1.0),(30,76,1.0),(31,43,1.0),(31,34,1.0),(31,35,1.0),(31,52,1.0),(31,60,1.0),(31,64,1.0),(31,73,1.0),(31,76,0.0),(32,43,-1.0),(32,34,1.0),(32,35,-1.0),(32,52,1.0),(32,60,1.0),(32,64,1.0),(32,73,1.0),(32,76,1.0),(33,42,1.0),(33,59,0.0),(33,4,0.5),(33,20,1.0),(33,22,0.0),(33,51,0.5),(33,68,1.0),(42,55,1.0),(42,54,1.0),(42,47,-1.0),(42,46,-1.0),(42,39,1.0),(42,33,1.0),(42,36,1.0),(35,50,1.0),(35,63,1.0),(35,32,1.0),(35,40,1.0),(35,58,1.0),(35,60,1.0),(35,66,1.0),(35,67,1.0),(35,75,1.0),(35,14,1.0),(36,50,1.0),(36,63,1.0),(36,32,1.0),(36,40,1.0),(36,58,1.0),(36,60,1.0),(36,66,1.0),(36,67,1.0),(36,75,1.0),(36,14,1.0),(37,42,1.0),(37,59,1.0),(37,4,0.5),(37,20,1.0),(37,22,0.5),(37,51,0.5),(37,68,1.0),(38,49,1.0),(38,44,1.0),(38,10,1.0),(38,37,1.0),(38,56,1.0),(38,61,1.0),(38,62,1.0),(38,71,1.0),(38,72,1.0),(38,74,1.0),(39,42,1.0),(39,59,1.0),(39,4,1.0),(39,20,1.0),(39,22,1.0),(39,51,1.0),(39,68,1.0),(40,42,1.0),(40,59,0.0),(40,4,1.0),(40,20,1.0),(40,22,1.0),(40,51,1.0),(40,68,1.0),(42,70,1.0),(42,69,1.0),(43,50,1.0),(43,63,1.0),(43,32,-1.0),(43,40,1.0),(43,58,1.0),(43,60,1.0),(43,66,1.0),(43,67,1.0),(43,75,1.0),(43,14,0.0),(44,42,0.5),(44,59,1.0),(44,4,0.5),(44,20,1.0),(44,22,0.5),(44,51,0.0),(44,68,1.0),(45,5,1.0),(45,48,1.0),(45,4,0.5),(45,9,1.0),(45,18,1.0),(45,41,1.0),(45,53,0.5),(46,50,1.0),(46,63,1.0),(46,32,1.0),(46,40,0.5),(46,58,1.0),(46,60,1.0),(46,66,1.0),(46,67,1.0),(46,75,1.0),(46,14,0.0),(47,38,1.0),(47,36,1.0),(47,33,1.0),(47,39,1.0),(47,46,1.0),(47,47,1.0),(47,54,1.0),(47,55,1.0),(47,70,1.0),(47,69,1.0),(48,38,1.0),(48,36,1.0),(48,33,1.0),(48,39,1.0),(48,46,1.0),(48,47,1.0),(48,54,1.0),(48,55,1.0),(48,70,1.0),(48,69,1.0),(49,5,0.5),(49,48,1.0),(49,4,1.0),(49,9,1.0),(49,18,1.0),(49,41,-1.0),(49,53,1.0),(50,42,1.0),(50,59,-1.0),(50,4,0.5),(50,20,1.0),(50,22,1.0),(50,51,1.0),(50,68,1.0),(51,42,1.0),(51,59,1.0),(51,4,1.0),(51,20,1.0),(51,22,1.0),(51,51,1.0),(51,68,1.0),(61,53,1.0),(61,41,1.0),(61,18,1.0),(61,9,1.0),(61,4,1.0),(61,48,0.0),(61,5,1.0),(53,49,1.0),(53,44,1.0),(53,10,1.0),(53,37,1.0),(53,56,1.0),(53,61,1.0),(53,62,1.0),(53,71,1.0),(53,72,1.0),(53,74,1.0),(54,49,1.0),(54,44,1.0),(54,10,1.0),(54,37,1.0),(54,56,1.0),(54,61,1.0),(54,62,1.0),(54,71,1.0),(54,72,1.0),(54,74,1.0),(55,49,1.0),(55,44,1.0),(55,10,1.0),(55,37,1.0),(55,56,1.0),(55,61,1.0),(55,62,1.0),(55,71,1.0),(55,72,1.0),(55,74,1.0),(56,50,1.0),(56,63,1.0),(56,32,0.0),(56,40,1.0),(56,58,1.0),(56,60,1.0),(56,66,1.0),(56,67,1.0),(56,75,1.0),(56,14,1.0),(57,43,1.0),(57,34,0.5),(57,35,1.0),(57,52,1.0),(57,60,1.0),(57,64,1.0),(57,73,1.0),(57,76,1.0),(58,43,1.0),(58,34,1.0),(58,35,1.0),(58,52,1.0),(58,60,1.0),(58,64,1.0),(58,73,1.0),(58,76,1.0),(59,43,1.0),(59,34,1.0),(59,35,1.0),(59,52,1.0),(59,60,1.0),(59,64,1.0),(59,73,1.0),(59,76,1.0),(60,38,1.0),(60,36,1.0),(60,33,1.0),(60,39,1.0),(60,46,1.0),(60,47,1.0),(60,54,1.0),(60,55,1.0),(60,70,1.0),(60,69,1.0);
/*!40000 ALTER TABLE `tbl_class_attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `idprofile` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `iduser` int(10) DEFAULT NULL,
  `batch` float NOT NULL,
  `fullname` text NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `course` text NOT NULL,
  `hometown` text NOT NULL,
  `highschool` text NOT NULL,
  `hobbies_interests` text,
  `motto` text,
  `favorite_verse` text,
  `random_stuff` text,
  `formdev_is` text,
  `email` varchar(100) NOT NULL,
  `contact` bigint(11) unsigned zerofill NOT NULL,
  `expected_term_graduation` varchar(45) NOT NULL,
  PRIMARY KEY (`idprofile`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (1,NULL,7.2,'Dimaunahan, Ryan Samuel','Ryan','1989-09-19','Master of Science in Computer Science (previously Bachelor of Science in Computer Science with Specializations in Software Technology','Sampaloc, Manila (now residing in Las Pinas City)','Elizabeth Seton School Main','Reading books;\nWriting stories and comics;\nWatching tokusatsu, anime and other geeky stuff;\nListening to music;\nPlaying the guitar;\nPlaying video games and trading card games;\nPhotography;\nAnd many many more?','\"Words could mean a thousand things; pictures are worth a thousand words. Moments are wrought by thousands of pictures; lives are measured as thousands of moments. But a life worth living, if its truly worth living, gives worth to a thousand more.\"','1Corinthians 13:1-3','I always try to put a little bit of my identity in everything that I do.','Formdev is further proof that a God of Love exists.','dimaunahan.ryan@gmail.com',09052445599,'Term 1 A.Y. 2011-2012'),(2,NULL,7.3,'Mendoza, Mary Klindt Asuncion','Klindt/Keng','1991-01-09','BS-ICTM','Manila','Philippine Pasay Chung Hua Academy','-Reading (Sci-Fi, Mystery, General Fiction)\n-Watching movies and American series (Crime Drama, Sci-Fi, Supernatural, Sitcoms, Competitions)\n-Music\n-Shopping/Fashion\n\n','The purpose of life is a life of purpose.\n- Robert Byrne\n\nWhat lies behind us and what lies before us are tiny matters compared to what lies within us.\n- Oliver Wendell Holmes','\"For he chose us in him before the creation of the world to be holy and blameless in his sight. In love he predestined us to be adopted as his sons through Jesus Christ, in accordance with his pleasure and will -- to the praise of his glorious grace, which he has freely given us in the One he loves.\"\n\n-Ephesians 1:4-6','Creative writing is my frustration.\nMy favorite song is When You Believe by Mariah Carey and Whitney Houston.\nI prefer fruit juices than water.','FORMDEV helped me form my character, strengthen my faith and deepen my relationship with the Lord.','kamm_07@yahoo.com',09064208860,'Term 1 A.Y. 2011-2012'),(3,NULL,8.1,'Manangan, David C.','Dave','1989-04-12','Bachelor of Science in Computer Science (CS) with Specialization in Software Technology','Cainta, Rizal','Lourdes School of Mandaluyong','Running, playing guitar, walking on the beach, watching movies and listening to music.','We all have the God given right to be happy. ','Romans 6:2\n\"By no means! We are those who have died to sin; how can we live in it any longer?\"','While others are 1/2 chinese or 1/4 chinese, I am 1/16 chinese. ','a course in college that I kept on taking twice a year for three years straight... a course that I will be taking even after I graduate... a course that is leading me to Jesus.','david.manangan@delasalle.ph',09179848481,'Term 1  A.Y. 2011-2012'),(4,NULL,8.1,'Miranda, Miguel Cristobal B.','Mc','1990-11-13','Master of Science in Computer Science (previously Bachelor of Science in Computer Science with Specializations in Software Technology)','Manila','Manila Science High School','Programming! :P;\nWatching \"How I Met Your Mother\" and \"The Big Bang Theory\";\nReading books;\nPlaying badminton, basketball, soccer and chess;\nSwimming; and\nJust hanging out with friends','\"With God, nothing is impossible!\"','\"And whatever you ask in prayer, you will receive, if you have faith.\" (Matthew 21:22)','I really really really like Gadgets!! (they\'re so gadget-y, I\'m gonna dieeee!) :))','God\'s work in action! :)','mc.miranda@delasalle.ph',09054388862,'Term 2 A.Y. 2012-2013'),(5,3,8.1,'Reyes, Nikko Erick Lee','Nikko / Erick / Niknok / Nik','1990-04-02','Bachelor of Science in Computer Science with specialization in Software Technology','Provident Villages, Marikina City','Marist School, Marikina City','Travelling, chilling, eating, anything under the sun. :)','Pag gusto maraming paraan, pag ayaw maraming dahilan.','Love is patient, kind, without envy. It is not boastful or arrogant. It is not ill-mannered nor does it seek its own interest. Love overcomes anger and forgets offenses. It does not take delight in wrong, but rejoices in truth. Love excuses everything, believes all things, hopes all things, endures all things.- 1 Cor. 13 : 4 - 7','I already have a grandson at the age of 17.','a family that I won\'t regret being into. A family that will be with you in good times and bad times. A family that will help you walk with God.','nikkoreyes_42@yahoo.com',09178004290,'2012'),(6,NULL,8.1,'Tapel, Larisse Ann','Larisse','1990-11-23','MMA','Binan, Laguna','St. Paul College, Pasig','Books, Photography, Street dance, Movies ','Passion and satisfaction go hand in hand, and without them, any happiness is only temporary, because there\'s nothing to make it last.','He keeps me functioning each and every day. Without Him, I will be nothing. But, with Christ, He strengthens me.(Phil 4:13)','I love mint flavored chocolates, cupcakes and coffee.','FORMDEV for me is a blessing.','pollykit23@yahoo.com',09165781866,'-'),(7,NULL,8.2,'Boac, Ma. Clarissa','Lexis','2011-09-20','BS-ICTM','null','null','-','-','-','-','-','zidane_lex@yahoo.com',00000000000,'-'),(8,NULL,8.2,'Esperanza, Gena Claire Fineza ','Gena/Gena Claire/Ginaclurr/Shooting Star','1991-10-01','BS-ICTM turned MMG','Las Pi?as','Bloomfield Academy','Books, tumblr, more books, watching Asian dramas, fangirling, going to the beach','No one can make you feel inferior without your consent. - Eleanor Roosevelt','For I know the plans I have for you, declares the Lord, \"plans to prosper you and not to harm you, plans to give you hope and a future. Then you will call upon me and come and pray to me, and I will listen to you. You will seek me and find me when you seek me with all your heart.\" - Jeremiah 29:11-13','I like swimming even if I don\'t know how to swim, I love California Maki, and I\'m a pocketful of sunshine!','My spiritual family, and the best part of my college life <3','genaclaire11@yahoo.com/gena.esperanza@gmail.com',09064207345,'Term 2 A.Y. 2011-2012'),(9,NULL,8.2,'Gervacio, Paolo Miguel R.','Paolo','1991-01-05','BS CS-NE','Las Pi?as City','Elizabeth Seton School','Watching movies, watching sitcoms, water sports, motor sports, playing video games, playing the guitar','Getting your butt kicked today doesn\'t mean that tomorrow can\'t be a kick-butt day. (Gervacio, 2010)','-','I like saying \"hehe\". Hehe.','A chunk of God\'s ossum family. Hehe','paolomiguel07@yahoo.com; paologervacio@gmail.com',09156144501,'Term 3 A.Y. 2012-2013'),(10,NULL,8.2,'Miranda, Angelo Crisanto B.','AC','1990-11-13','Master of Science in Computer Science (previously Bachelor of Science in Computer Science with Specializations in Software Technology)','Manila','Manila Science High School','Programming, Playing different sports, and Watching TV Series and Movies','Always trust and follow God\'s will.','\"If you remain in me and my words in you, ask whatever you wish, and it will done for you.\" (John 15:7)','I Love YOU!!! :)','\"FORMDEV is Universal.\" (Miranda, A., 2010)','ac.miranda@delasalle.ph',09178131772,'Term 2 A.Y. 2011-2012'),(11,NULL,8.2,'Roa, Alexandra Marie Gumaru','Sandie','1989-03-27','CS-ST','Alabang','De La Salle Zobel','Reading, drawing, surfing the internet, playing video games','Come what may.','For where your treasure is, there your heart will be also. (Luke 12:34)','I love dogs!','one of a kind.','saanddiiee@yahoo.com',09283889006,'Term 1 A.Y. 2012-2013'),(12,NULL,8.2,'Tan, Brian Joseph P.','Bry','1988-12-13','BS-ICTM','Makati','Colegio San Agustin','Sci-Fi & Adventure Novels/Movies, Tv Series (Crime-Drama/Sci-Fi/Sitcom/Supernatural), RPG & MMORPG, Culinary Arts, Music, Anime/Manga, Gadgets','\'Tis a lesson you should heed,\nTry, try again.\nIf at first you don\'t succeed,\nTry, try again.\n\n                                 -William Edward Hickson','The Book of Wisdom 4:10-15 \"There were some who pleased God and were loved by Him, and while living among sinners were taken up. They were caught up so that evil might not change their understanding, or guile deceive their souls. For the fascination of wickedness obscures what is good, and roving desire perverts the innocent mind. Being perfected in a short time, they fulfilled long years; for their souls were pleasing to the Lord, therefore He took them quickly from the midst of wickedness. Yet the peoples saw and did not understand, to take such a thing to heart, that God\'s grace and mercy are with His elect, and that He watches over His Holy ones.\" ','I eat A LOT. ','the best thing that happened in my college life.','brianjosephtan@yahoo.com',09272014725,'Term 2 A.Y. 2011-2012'),(13,NULL,8.2,'Tardio, Jenna Karla','jenna','1989-07-18','bachelor of science in computer science major in instructional systems technology','Makati CIty','St Paul College Pasig','playing with nephew, dogs, watching TV, tweeting, sleeping, eating, loving nyahaha joke','Family comes First','Philippians 4:6 Don?t worry about anything; instead, pray about everything. Tell God what you need, and thank him for all he has done.','i am always masungit!!','what makes college life bearable <3','jennatardio@yahoo.com',09154375896,'Term 3 A.Y. 2011-2012'),(14,NULL,8.2,'Toyoda, Mitsuru Mike','Mike','2011-02-19','ECE','Project 8, Quezon City','St. Mary\'s College Quezon City','Long walks, jogging, keeping physically fit, planning, teaching, studying, talking about random stuff, mathematics','Hardwork breeds talent','For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life. \n\n- John 3:16','I am an amateur arcade person, I love to play rhythm games although I don\'t have the time to do so anymore.','a fun family','mikee_toyoda@yahoo.com',09152952172,'Term 3 A.Y. 2013-2014'),(15,NULL,9,'Ablaza, Geraldine','Gemi','1991-12-11','BS CS - ST','Las Pinas City','Elizabeth Seton School - Main','Watching anything (people watching included), photography, sleeping, eating :D','Please pass your papers. Finished or not finished.','\"However, I consider my life worth nothing to me; my only aim is to finish the race and complete the task the Lord Jesus has given me?the task of testifying to the good news of God?s grace.\" Acts 20:24\n\n','I am afraid of snakes (even pictures of them) or anything that crawls.','my family that resides in my heart.','gemi.ablaza@delasalle.ph',09161247023,'Term 1 A.Y. 2012- 2013'),(16,NULL,9,'Asoy, Camille R.','Cam','2011-11-27','BS-ICTM','-','PSHS-EVC','- Walking\n- Reading \n- Writing\n- Laughing\n- Listening to Music\n- Visual Arts\n- Cooking\n','You become responsible, forever, for what you have tamed. - Antoine de Saint-Exupery in The Little Prince','So then, just as you received Christ Jesus as Lord, continue to live your lives in him--rooted and built up to Him, strengthened in the faith as you were taught and overflowing with gratefulness. - Colossians 2:6-7','My oldest friend is a stuffed bear named Teddy--we\'ve been friends for about two decades now.','a surprising blessing from Him.','c_asoy@yahoo.com',09228355224,'2011'),(17,NULL,9,'Candano, Shaun Raphael Josef','Shaun','1990-01-06','Bachelor of Science in Computer Science with Specializations in Software Technology','Pasig City, Metro Manila','La Salle Green Hills','Bowling;\nTennis;\nSurfing the net;\nReading interesting books','?Impossible is Possible?','John 3:16-21','I like to organize things.','Formdev is family, friends, fun, learning and believing in God.','shaun_candano_09@yahoo.com',09209086355,'Term 3 A.Y. 2010-2011'),(18,NULL,9,'Catan, John Lawrence','Jacats','1991-06-24','CS-IST','Cainta,Rizal','Cainta Catholic College','playing computer games,reading novels and manga, watching t.v.,sleeping','Some succeed because they are destined to; most succeed because they are determined to.','2 Corinthians 12:9-10','I suck at basketball.Expect to lose when I am on your team. :))','FORMDEV for me is what renewed my faith in God. :)','lawrence_catan@yahoo.com, lawrence.catan@delasalle.ph',09179559593,'Term 1 A.Y. 2013-2014'),(19,NULL,9,'Clamor, George Anthony Alahan','Anjo','1989-07-06','Bachelor of Science in Computer Science with Specializations in Software Technology','Brisbane, Queensland','La Salle Green Hills','Playing football;\nPlaying basketball','?The way to conquer fear is to challenge it head on.?\n?You can?t be a hero if you?re afraid of dying.?','Psalms 27:1','I am ambidexterous; I?m supposed to be right handed, but then my parents thought that I was a leftie so they trained my left arm for writing.','Formdev is one word: LOVE.','gaclamor@gmail.com',09159826204,'Term 3 A.Y. 2010-2011'),(20,NULL,9,'Lachica, Joshua Daniel','Josh/Jude','1991-11-16','BS-CSST','Antipolo City','La Salle College Antipolo','Soccer, Basketball, Sports Games, uhh reading...and thats about it :D','Peace cannot be kept by force.\nIt can only be achieved by understanding.\n-Albert Einstein','Love is patient, love is kind and is not jealous; love does not brag and is not arrogant, does not act unbecomingly; it does not seek its own, is not provoked, does not take into account a wrong suffered, does not rejoice in unrighteousness, but rejoices with the truth; bears all things, believes all things, hopes all things, endures all things. Love never fails. \n\n- 1 Corinthians 13:4','uhh...hmm...i like collecting toys even though im too old for them :D','My Second Family','josh_lachica@yahoo.com',09266197374,'Term 1 A.Y. 2012-2013'),(21,NULL,9,'Lim, Valerie Mae','Vea','1990-10-02','BS-ICTM','Marikina City','St. Scholastica\'s Academy Marikina','Wathcing movies, facebook, twitter and tumblr, eating. :))','The worst mistake anyone can make is being too afraid to make one.','For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life. John 3:16','I love melted ice cream. In tagalog: tunaw na ice cream. :))','Family.','vea_kinse@yahoo.com',09277842797,'Term 2 A.Y. 2011-2012'),(22,NULL,9,'Lu, Mike','Mike','1989-01-12','CS-ST','San Juan','Xavier School','Animation, Movies, Computer Games','Inspiration does not come from the quote itself, but rather the person behind it.','Matthew 5:30 And if your right hand causes you to sin, cut it off and throw it away. It is better for you to lose one part of your body than for your whole body to go into hell.','I don\'t like giant insects','My way of escaping from school work.','deeds0l@yahoo.com',00007254827,'Term 1 A.Y. 2012-2013'),(23,NULL,9,'Orais, Cyrus Paul','TAYUT','1990-11-14','BS-ICTM','Merville, Paranaque','Don Bosco Technical Institute - Makati','Eating (Free Food), Surfin\' the Net, Tambay, Games(PC), FUN RUN! :) basketball, playing guitar, magsulat? Programming, multimedia stuffs, \n\nCommited to FORMDEV & Parish-Comission on Youth, Merville.','\"Love, It\'s like the wind. I can\'t... see it, but I feel it.\" \n- Jamie Elizabeth Sullivan (A Walk to Remeber)','\"For God did not send his Son into the world to condemn the world, but to save the world through him\" - John 3:17\n','All about in me is random. @_@\nKaya ko mag 360 reverse fade away dunk sa half court.\nKaya kong ipasok sa labas ung electric fan.\nPresident, SingleSinceBirthClub(SSBC).\n\nI\'m a dedicated, hard working, full of strussle person.','\"Not just a evolution, but a revolution of an Individual into a God-centered Community.\"\n','hypeman11@yahoo.com; orais.cyruspaul@gmail.com',09065172426,'Summer Term, AY2010-2011'),(24,NULL,9,'Pabillore, Jonathan A.','Jon','2011-09-20','BS CS-ST','null','null','-','-','-','-','-','jonathanpabillore@gmail.com',00000000000,'Term 1 A.Y. 2011-2012'),(25,NULL,9,'Pangilinan, Rae Marvin A.','Rae','1989-11-18','BS-CS-CSE','Caloocan City','Notre Dame of Greater Manila','watching movies, road tripping, computer games, drawing, playing different kinds of sports, ','Leave those past behind but as we move Forward bring the lessons it has brought your life. \n\nAng sarap simulan ng panibagong araw lalo na kung natapos ang kahapon na nakangiti ka :)','1 Timothy 2:1\n\"First of all, then, I urge you to offer petitions, prayers, intercessions, and expressions of thanks for all people, for kings, and for everyone who has authority, so that we might lead a quiet and peaceful life with all godliness and dignity.\"','\"One text away\" :))\n\"im weird and im proud :>\"','something that gives me the possibilities of unfolding what lies ahead.','rae.pangilinan@delasalle.ph',09166494475,'Term 3 A.Y. 2011-2012'),(26,NULL,9,'Quinto, Jarren James','Jar/Tiger','1989-11-07','BS CS-ST','Mandaluyong City','Lourdes School of Mandaluyong','Playing soccer\nPlaying basketball\n\"magpaulan\"\nsleeping','God has never given up on me, why should I give up on myself :D','Not only so, but we also rejoice in our sufferings, because we know that suffering produces perseverance; perseverance, character; and character hope. And hope does not disappoint us, because God has poured out his love into our heats by the Holy Spirit, whom he has given us (Rom 5: 3-5) ?','I like to program, alot.\nI\'m a shiftee from BS MTH-CAP\nI was born here, but raised at Singapore\nI can never be normal, always weird :D','a group of people where through faith and time, they will become more than a group. They\'ve become, a FAMILY','jarren.quinto@delasalle.ph',09275254174,'Term 1 A.Y. 2011-2012'),(27,NULL,9,'Teng, Grizelda','Zel','1991-11-07','Bachelor of Science in Computer Science with Specializations in Software Technology','Taguig','Chiang Kai Shek College Manila','Listening to music;\nWatching series/movies;\nHanging out with friends','?Love wins. Love always wins.?\n- Tuesdays with Morrie by Mitch Albom','Romans 5:3-5','I have weird arms. My attention span is short. I am a random person.','Formdev is the reason why I love college.','zel_teng@yahoo.com',09274775556,'Term 1 A.Y. 2011-2012'),(28,NULL,9,'Ylaya, Paolo Dominic H.','Mikey','1992-01-15','BS CS-ST','Las Pinas','Ateneo de Manila HS','playing tennis, basketball, badminton, playing the guitar, singing, dancing, beatboxing, drawing..','If at first you don\'t succeed, quality is the best policy..','\"Remain in me, as I remain in you. Just as a branch cannot bear fruit on its own unless it remains on the vine, so neither can you unless you remain in me.\"\n\nJohn 15:4','Ako ay may lobo...','like magic. It comes from within... :>','mikels233@gmail.com',09277590284,'Term 1 A.Y. 2011-2012'),(29,NULL,10.1,'Barrios, Ma. Katrina Carmela T.','KC','1991-07-16','CS-IST','Roxas City, Capiz','Capiz National High School - Special Science & Technology Class','Movies, music, food, cars, shopping, dancing','A man has only one lifetime, but history can remember him forever.','Psalm 91: 9 \n\n\"You have the Lord for your refuge; you have made the Most High your stronghold.\"','I will NEVER eat vegetables. :D','the backbone of my spiritual being.','kcbarrios@gmail.com',09177009098,'Term 3 A.Y. 2011-2012'),(30,NULL,10.1,'Iba?ez Jr., John Francis I.','John Boy','1991-01-14','BSCS-ST','Taguig','Immaculate Heart of Mary College','Tinkering Computers, Playing Basketball, Badminton, and Computer Games, Watching Movies','Our deepest fear is not that we are inadequate. Our deepest fear is that we are powerful beyond measure. It is our light, not our darkness that frightens us. We ask ourselves, who am I to be brilliant, gorgeous, talented, or fabulous? Actually, who are yo','John 1:14 - \"The Word became flesh and made his dwelling among us. We have seen his glory, the glory of the one and only Son, who came from the Father, full of grace and truth.\"','- I\'m random... :)\n- shy-type\n\nito talaga totally random... GWAPO! =))','Looooooooooooooooooove! :)','cloud_valentine14@yahoo.com',09064208893,'Term 1 A.Y. 2011-2012'),(31,NULL,10.1,'Pi?era, Rene Rose Tan','Rene','1991-12-27','BS-CS-ST','Quezon City','School of the Holy Spirit of Quezon City','Photography, Music, Drawing, Internet, Aliens, Ghosts, Sci-Fi Stuff','Be the best that you can be.','Do not get drunk on wine, which leads to debauchery. Instead, be filled with the Spirit. Ephesians 5:18','I sleep with the lights on because I\'m afraid of the dark.','an avenue to meet and grow with people who follow Christ.','renepinera@yahoo.com',09272340323,'Term 1 A.Y. 2012-2013'),(32,NULL,10.1,'Tan Sim, Eric Russell C.','Eric','1992-09-19','CS-NE','San Juan','Philippine Institute of Quezon City','Read novels, bug people, ponder on things, and mostly stare at nothingness','The early bird gets the worm, but the second mouse gets the cheese.','The Lord is my shepherd, I shall not be in want. Psalm 23:1\n*I actually like the whole chapter','I have an irrational hatred towards bean sprouts (toge). They look dull, taste dull, everything dull. Blech!\n\nI like rainy days. I feel secluded and warm whenever I stare out the window, only hearing the drops of rain fall to earth. The dark gray sky give','God\'s vessel of light to be shared out to the world. :)','e_russell2004@yahoo.com.au',00000000000,'2013'),(33,NULL,10.2,'Abad, Dennis Michael','Den','1993-04-03','CS-ST','Cavite','Don Bosco Technical Institute - Makati','Football\nBasket ball\nVolley ball\nVideo Games\nPlaying the guitar','There is always a meaning to a failed love','Therefore, if anyone is in Christ, the new creation has come: The old has gone, the new is here!\n\n[2 Corinthians 5:17]','I can rely on my nose if someone I\'m very familiar with is near.\nI sing the \"abc\" backwards. (zyx?)','Home','dennis_abad6@yahoo.com',09266853983,'Term 1 A.Y. 2012-2013'),(34,NULL,10.2,'Ablaza, Raus Kenneth','Ken','1992-11-07','CS - IST','Cavite','St. Andrew\'s School','- programming (though i\'m not that good at it, nerd -_-)\n- singing (yeah! :D)\n- doing random stuffs @_@','No crying over spilled milk..','So faith, hope, love remain, these three; but the greatest of these is love.\n\n-1 Corinthians 13:13','I am an OC (Obsessive-Compulsive) type of person.','a spice added to my life. :D','rauskenneth07@yahoo.com',09156015506,'Term 3 A.Y. 2012 - 2013'),(35,NULL,10.2,'Bo?on, Michael Louie','Michael','1993-01-15','Bachelor of Science in Computer Science with Specialization in Software Technology','Las Pi?as City','Don Carlo Cavina School','Video Gaming\nSprinting\nUltimate (sport)\nDrawing\nInterested in Chemistry and History\nPhoto Editing\nEating ;)\nListening to music','God deserves our best!','For to me, living means living for Christ, and dying is even better.\n? Philippians 1:21 (NLT)','I mix art with what I do.','FORMDEV is where I can know more about Christ, and make Him known to other people.','michael.bonon@gmail.com',09052309008,'Term 2 A.Y. 2012-2013'),(36,NULL,10.2,'Del Barrio, Jannah Therese','Jannah/Chana','1993-01-22','BS CS-ST','Bacoor, Cavite','Manila Science High School','eating lots of food =P~ \nfacebook-ing :)\n','?\"The uncertainties of the present always give way to the enchanted possibilities of the future\" -Gelsey Kirkland','Isaiah 41:10 \"fear not, for I am with you; be not dismayed, for I am your God; I will strengthen you, I will help you, I will uphold you with my righteous right hand.\"','i don\'t like bananas :P\nnatural yung pagcurl ng eyelashes ko :)','FORMDEV made me realize another side of life: the brighter one with God <3<3<3','jannahdb@gmail.com',09178370122,'Term 1 A.Y. 2012-2013'),(37,NULL,10.2,'Magdaong, Christian Kay Beltran','Tiano','1992-12-16','BS CS-NE','Daraga, Albay','Bicol University-High School','Watching Korean Series\nWatching Anime Series\nReading Manga\nDoing random computer stuff','Don\'t say, \"That\'s the way I am- it\'s my character \". It\'s your lack of character. Esto vir!- Be a man!','1 John 4:19 We love Him because HE first loved us.','Proud Bicolano!!','a new form of rest.','tiano_uragon@yahoo.com',09053347567,'Term 3 A.Y. 2012- 2013'),(38,NULL,10.2,'Musni, Charo Marie ','Chai','1993-03-20','BS CS-ST','Tabaco City, Albay','Tabaco National High School','Reading, Writing, Watching Series','Happiness is  a conscious choice, not an automatic response.','Hebrews 11:1 \"Now faith is being sure of what you hope for and  certain of what is unseen.\"','I only learned to eat red meat during my college sophomore year.\nI don\'t have double eye lids.\nI\'m from Bicol but i have never tasted Bicol express in my entire life.','God\'s love manifested in family.','i_am_chai93@yahoo.com.ph',09052309473,'Term 1 A.Y. 2012-2013'),(39,NULL,10.2,'Villena, Kedren Obinque','Ked','1993-01-06','BS-CS-ST','Muntinlupa','Southville International School and Colleges','Playing Computer Games, playing the guitar, sleeping.','Give your best and God will do the rest.','Matthew 6:33\n\"But seek first his kingdom and his righteousness, and all these things will be given to you as well.\"','random :)','a family composed of different people that all responded to God\'s call.','kedren_villena@yahoo.com',09065869247,'2012'),(40,NULL,10.2,'Yu, Sherie','Sherie','1990-06-15','MSCS ST','Philippines','Philippine Cultural College','Reading\nProgramming\nWatching anime\nPlaying piano','Experience is not what happens to you; it is what you do with what happens to you. - Aldous Huxley','I can do all thing through Christ who gives me strength. - Philippians 4:16','I love cheese. \nMy all time favorite anime is Fullmetal Alchemist Brotherhood.\nI don\'t like mayonnaise and the bun of siopao.','Awesome!!','sherie_yu@yahoo.com',09052306184,'Term 3 A.Y. 2011-2012'),(41,NULL,10.3,'Ang, Karen','Karen','1990-09-03','Master of Science in Computer Science (previously Bachelor of Science in Computer Science with Specializations in Software Technology)','QC','Uno High School','watching series, traveling, adventure, art','Smile.:)','Matthew 6-21: For where your treasure is, there your heart will be also.','I like to be an architect.\nI like to travel and also experience snow.\nI like to learn how to play the drums, guitar and piano.\nI want to learn play tennis.\nI have a pet fish.','a place to get to know God more.','karenang0903@yahoo.com',09178988928,'2012'),(42,NULL,10.3,'Aragoncillo, Jose Gian Carlo','Carlo','2011-08-09','BS CS-NE','Las Pinas','Don Bosco Technical College - Mandaluyong','Singing, computer games, hanging out with friends, FEAST(praise and worship), reading books/novels','There is no such thing as a problem without a Divine gift hidden within it. You have these problems because you need the gifts they carry within.','John 3:30 \"He must become greater; I must become less.\"','I can sing well only if I\'m singing praise songs. :P I guess God gave me this voice so I could worship Him. :) \n\nI know how to swim but I don\'t want to because of trauma. :|','FORMDEV for me is where I was born again as God\'s child. The FORMDEV community helped me to grow to who I am now. FORMDEV made me realize how everything can be close to perfect when I serve God.','aragoncillocarlo@yahoo.com',09172473038,'Term 3 A.Y. 2012-2013'),(43,NULL,10.3,'Cantos, Sherlo Yvan Leyco','Sherlo','1992-04-07','BS-CSST','Batangas City, Batangas','Saint Bridget College','-Listening to Music\n-Playing the Ukulele\n-Watching Movies\n-Cooking :)\n-Photography\n-Hanging out with friends','\"It is better to have bad breath than no breath at all\"\n-Humans are not perfect, but imperfection should not hinder us in living our life.','There is an appointed time for everything.  And there is a time for every event under heaven. A time to give birth, and a time to die; A time to plant, and a time to uproot what is planted. A time to kill, and a time to heal; A time to tear down, and a time to build up.  A time to weep, and a time to laugh; A time to mourn, and a time to dance.  A time to throw stones, and a time to gather stones; A time to embrace, and a time to shun embracing.  A time to search, and a time to give up as lost; A time to keep, and a time to throw away. A time to tear apart, and a time to sew together; A time to be silent, and a time to speak. A time to love, and a time to hate; A time for war, and a time for peace.','-i like sleeping on the floor\n-i collect shoes.\n-i like plain shirts.','God\'s gift in leading students to the right path.','yvan_cantos@yahoo.com.ph',09064391129,'Term 1 A.Y. 2012-2013 '),(44,NULL,10.3,'De Jesus, Marion Rafael D.','Ion','1991-09-08','BS CS-ST','3 Guilder St. Meralco Village, Taytay, Rizal','La Salle Green Hills','Soccer, Volleyball, piano, games, Fun/Marathon Runs','Live life to the fullest with no regrets','matthew 6: 19-21 ','avid gamer who finds a way to complete a game to 100% as much as possible. willing to accept any challenge in any game','family connected by faith in god and by the teachings of saint la salle. a one big family','mr_dr_dj@yahoo.com',09053407355,'Term 1  A.Y. 2012-2013'),(45,NULL,10.3,'Dela Cruz, Shannen Rose Bernardo','Sheng','1993-07-25','BS CS ST','Manila','Manila Cathedral School','Sketching, Drawing,  Reading Books, Playing Computer Games, Bonding with Friends, Family and Most of all, God','It\'s better to taste the bitterness of education that to taste the hardships of ignorance.','Corinthians 16:14 Do everything with love.','I like girls','FUN! and at the same time it helps my spiritual growth','shannenrose.delacruz@yahoo.com',09052964778,'Term 1 A.Y. 2012-2013'),(46,NULL,10.3,'Duka, Ivanhur','Ivan / Cholo','1992-08-02','BSCS-CSE','Manila','Paco Citizen Academy','reading manga, watching TV series, playing badminton, hanging out in the mall, eating a lot, surfing the net','It\'s gonna be ok in the end. If it\'s not ok, then it\'s not yet the end.','Acts 20:35 \"There is more happiness in giving than in receiving.\"','OC and vain','FORMDEV made me a true servant of God.','vanhur08021992@yahoo.com',09227538401,'2012'),(47,NULL,10.3,'Garcia, Jann','Jann','1992-10-17','BS CS-ST','Puerto Princesa City, Palawan','Palawan Hope Christian School','Badminton, reading, soccer, gaming, chess, biking, and going out.','Let us not live to regret, but live life to the fullest.','John 4:13 ','I\'m random. lol','A home that helps me grow further in spirit. :)','janngg56@yahoo.com',00000000000,'Term 3 A.Y. 2013-2014'),(48,NULL,10.3,'Iglesia, Kyla','Kyla','1992-06-10','Bachelor of Science in Computer Science with Specialization in Software Technology','Paranaque','Assumption College','Drawing, singing, crafts, music (my top two favorite bands: Paramore and Anberlin)','Strive for excellence, not perfection.','For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life. - John 3:16','I prefer eating fruits and veggies than junk food.\nI want to give God a hug, if it were possible.\nI always wanted to learn how to play the guitar, dance, do photography, and learn how to bake.\nSadly, whenever I bake, the cookies I make end up either deadl','A place to grow in God\'s love','kyla_iglesia234@yahoo.com',09158752406,'Term 1 A.Y. 2012-2013'),(49,NULL,10.3,'Jacinto, Daniel Joseph M.','DanJo','1992-06-18','Bachelor of Science degree in Computer Science with Specialization in Software Technology','Bi?an, Laguna','Caritas Don Bosco School','Studying at times,\nWatching Anime, sometimes movies,\nPlaying video games\nPlaying guitar\nFixing stuffs\nCycling around the neighborhood\nAnd many more :D','Those who do nothing make no mistakes. ','Remain united to me and I will remain united to you. A branch cannot bear fruit by itself; it can do only so if it remains in the vine. In the same way you cannot bear fruit unless your remain in me. (John 15:4)\n','I\'m striving in getting better in everything I do','a way to show how God changed our life, actions, and words by His unselfish and amazing love.','jacinto_dj18@yahoo.com',09228219248,'Term 1 A.Y. 2012-2013'),(50,NULL,10.3,'Lim, Patricia Anne','Pat','1992-11-29','BS CS-IST','Muntinlupa City','San Beda College Alabang','Surfing the Net, Reading books, Reading Blogs, Watching TV Series, Playing Flash games','Good things come to those who wait or \"No one can make you feel inferior without your consent\"','Be strong and courageous, do not be terrified, do not be discouraged for the Lord God is with you wherever you go - Joshua 1:9','People usually do not take me seriously because I am very bubbly. I\'m always laughing and I talk like I swallowed a loudspeaker.','God\'s way of making me understand and love Him more :)','tisha1129@yahoo.com',09266337323,'Term 3 A.Y. 2012-2013'),(51,NULL,10.3,'Ranoa, Michael Regnar J.','Reggy','2010-07-16','BS-CS IST','Pasig City','Lourdes School of Mandaluyong','Basketball, Sleeping, Doodle. :)','You can always give without love but you can\'t love without giving.','John 3:16 Luke 1: 3-4','Sabaw, Epal','Spiritual group that will help me a better person. :)','reggy_rulz029@yahoo.com',09163399086,'Term 3 A.Y. 2012-2013'),(52,NULL,10.3,'Yeung, Mary Czarinelle F.','Mary, Czari','1992-04-22','Bachelor of Science in Computer Science with Specializations in Software Technology','Binondo, Manila','Chiang Kai Shek College Manila','Art in general\nplaying the guitar\ndrawing\nreading books\nlistening to music\neating\nsleeping\nplaying volleyball\nblogging\npeople watching','Sing like no one\'s listening, love like you\'ve never been hurt, dance like nobody\'s watching, and live like its heaven on earth. -Mark Twain','For you know that when your faith is tested, your endurance has a chance to grow. -James 1:3\n\nI know the Lord is always with me. I will not be shaken for He is right beside me. -Psalm 16:8\n\nI can do all things through Christ who strengthens me. -Philippians 4:13','I can remember the most random and insignificant events that has happened in my life.\n\nPeople tell me that I look like a cat, an apple, a butchi, and a siopao. I am absolutely confused.','FORMDEV is a haven in the heartless world of CCS. ?','czarinelleyeung@yahoo.com',09229198893,'Term 1 A.Y. 2012-2013'),(53,NULL,11.1,'Almonguera, Janet','Janet','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(54,NULL,11.1,'Arlanza, Michael Angelo','Mikko','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(55,NULL,11.1,'Avecilla, Joshua','Joshua','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(56,NULL,11.1,'Cagampan, Bernadyn Reyes','Berna','1993-05-02','BS CS-ST','Manila','Manila Science High School','-','-','-','-','-','dyn.reyes@gmail.com',09153228398,'A.Y. 2013-2014 Term 1'),(57,NULL,11.1,'Cruz, Owen','Owen','2011-09-20','','','','-','-','-','-','-','-',00000000000,'-'),(58,NULL,11.1,'Kua, Edmon','Mon','2011-09-20','','','','-','-','-','-','-','-',00000000000,'-'),(59,NULL,11.1,'Lim, Chryzel','Chry','1990-07-24','BS CS-ST','Manila','Philadelphia High School','-','-','Matthew 21:22\n\nIf you believe you will receive whatever you ask for in prayer','-','-','chryzel_jane@yahoo.com',00000000000,'A.Y. 2012-2013 Term 1'),(60,NULL,11.1,'Magpayo, Erika Rhine','Erika','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(61,NULL,11.1,'Mahinay, Joy Luville','Joy','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(62,NULL,11.1,'Uy, Kyrstyn Kaizale','Kyrstyn','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(63,NULL,11.1,'Villafuerte, Celine','Celine','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-'),(64,NULL,11.1,'Villareal, Czarnin Harris','Czar','2011-09-20','null','null','null','-','-','-','-','-','-',00000000000,'-');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_bs_reports`
--

DROP TABLE IF EXISTS `tbl_bs_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_bs_reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date NOT NULL,
  `bs_group` int(10) unsigned NOT NULL,
  `submitted_by` int(10) unsigned NOT NULL,
  `remarks` text,
  PRIMARY KEY (`id`),
  KEY `FK_tbl_bs_reports_1` (`submitted_by`),
  KEY `FK_tbl_bs_reports_2` (`bs_group`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_bs_reports`
--

LOCK TABLES `tbl_bs_reports` WRITE;
/*!40000 ALTER TABLE `tbl_bs_reports` DISABLE KEYS */;
INSERT INTO `tbl_bs_reports` VALUES (1,'2012-01-20 16:32:59','2012-01-13',9,10,'First Meeting!'),(2,'2012-01-20 16:35:40','2012-01-20',9,10,''),(3,'2012-01-20 16:42:50','2012-01-17',8,4,'First Meeting!'),(4,'2012-01-20 16:51:05','2012-01-17',2,9,'Vea\'s taking her OJT.'),(5,'2012-01-21 01:12:45','2012-01-17',6,50,''),(6,'2012-01-22 19:06:52','2012-01-11',10,10,''),(7,'2012-01-22 19:07:11','2012-01-18',10,10,''),(8,'2012-01-24 06:20:53','2012-01-24',2,9,'Mike Lu informed me only on the day itself that he cannot attend due to an errand. He said he had to go to the airport to claim a bag/luggage that was left there.'),(9,'2012-01-25 07:09:32','2012-01-25',10,10,''),(10,'2012-01-25 08:34:57','2012-01-24',6,50,''),(11,'2012-01-27 08:47:16','2012-01-27',9,10,''),(12,'2012-01-29 06:30:50','2012-01-25',1,13,'Brian\'s OJT this term.\nMs Rhia was w us also.'),(13,'2012-01-30 22:55:08','2012-01-13',3,18,'1st BS of term!'),(14,'2012-01-30 22:56:07','2012-01-20',3,18,''),(15,'2012-01-30 22:56:34','2012-01-27',3,18,''),(16,'2012-02-01 18:56:58','2012-02-01',10,10,'Pat had an exam in OPERSYS.'),(17,'2012-02-02 06:00:07','2012-01-31',6,50,''),(18,'2012-02-05 04:52:32','2012-01-17',4,33,'Yvan was a guest'),(19,'2012-02-05 04:53:30','2012-01-31',4,33,'MC attended the fellowship part'),(20,'2012-02-05 04:56:00','2012-01-24',4,33,''),(21,'2012-02-06 16:12:02','2012-02-03',9,10,''),(22,'2012-02-08 07:53:42','2012-02-07',6,50,''),(23,'2012-02-09 06:10:13','2012-01-20',5,38,''),(24,'2012-02-09 06:13:00','2012-01-27',5,38,''),(25,'2012-02-09 06:14:00','2012-02-03',5,38,'Guests : Ate Mich, Josh, May :)'),(26,'2012-02-11 06:23:01','2012-02-10',9,10,'Joel Paman also attended.'),(27,'2012-02-14 06:44:05','2012-02-03',3,18,''),(28,'2012-02-14 06:46:04','2012-02-10',3,18,''),(29,'2012-02-14 06:53:43','2012-02-14',6,50,''),(30,'2012-02-18 20:03:29','2012-01-24',8,4,''),(31,'2012-02-18 20:04:02','2012-01-31',8,4,''),(32,'2012-02-18 20:04:33','2012-02-07',8,4,''),(33,'2012-02-18 20:04:56','2012-02-14',8,4,''),(34,'2012-02-18 20:41:47','2012-02-10',5,38,'With Ate Mich and Josh!'),(35,'2012-02-18 21:17:30','2012-02-17',9,10,'Joel was also there.'),(36,'2012-02-18 21:24:34','2012-02-08',10,10,'AC - interview with DDSG;\nOthers - class outreach'),(37,'2012-02-21 18:06:46','2012-02-21',8,4,''),(38,'2012-02-22 00:12:48','2012-01-13',5,38,'Pat was here!'),(39,'2012-02-22 00:13:49','2012-02-17',5,38,'Pat and Kuya Mc and Kuya AC and Josh were here!'),(40,'2012-02-22 01:00:55','2012-01-31',2,9,''),(41,'2012-02-22 01:01:46','2012-02-07',2,9,''),(42,'2012-02-22 01:02:03','2012-02-14',2,9,''),(43,'2012-02-22 01:02:54','2012-02-21',2,9,'Paolo had a project demo scheduled at the same time of the BS.'),(44,'2012-02-22 01:15:15','2012-01-11',7,42,''),(45,'2012-02-22 01:16:27','2012-01-18',7,42,''),(46,'2012-02-22 01:17:07','2012-01-25',7,42,''),(47,'2012-02-22 01:18:18','2012-02-01',7,42,''),(48,'2012-02-22 01:18:59','2012-02-08',7,42,''),(49,'2012-02-22 01:19:27','2012-02-22',7,42,''),(50,'2012-02-23 03:57:39','2012-02-21',4,33,'We had 3 guests, Mary\'s Arlon, Ked\'s Matthew, Kyrstyn\'s Kyle, and also Bro. Allen'),(51,'2012-03-04 21:07:02','2012-02-28',6,61,''),(52,'2012-02-23 03:58:47','2012-02-07',4,33,''),(53,'2012-02-24 03:04:56','2012-02-24',5,36,'With Pat and Ate Mich! Nasa ERDT presentation si Ate Karen :('),(54,'2012-02-24 06:45:17','2012-02-24',9,10,''),(55,'2012-02-25 22:38:21','2012-02-17',3,18,''),(56,'2012-02-25 22:39:30','2012-02-24',3,18,'Complete BS attendance after a long while :)'),(57,'2012-02-29 20:09:20','2012-02-28',6,50,''),(58,'2012-03-03 22:16:28','2012-02-29',10,10,''),(59,'2012-03-03 07:22:46','2012-03-02',5,38,'BS with CYA guests! :)'),(60,'2012-03-03 21:16:59','2012-03-02',9,10,'Joel was absent.'),(61,'2012-03-05 05:03:27','2012-02-22',1,13,''),(62,'2012-03-06 01:10:19','2012-02-28',4,33,''),(63,'2012-03-06 01:37:50','2012-03-06',4,33,''),(64,'2012-03-06 04:32:32','2012-03-02',3,18,''),(65,'2012-03-07 22:12:17','2012-03-06',6,50,''),(66,'2012-03-09 07:27:58','2012-03-09',9,10,'Eric and Mica had an exam in OPERSYS. Joel was also there.'),(67,'2012-03-10 08:18:02','2012-03-07',10,10,''),(68,'2012-03-12 23:30:12','2012-03-09',3,18,''),(69,'2012-03-13 03:34:15','2012-03-13',4,33,'We had Jose as a guest'),(70,'2012-03-14 06:14:01','2012-03-13',6,50,''),(71,'2012-03-14 06:40:08','2012-03-09',5,38,'Reggy :(((( With ate mich and joooosh :D'),(72,'2012-03-17 00:45:00','2012-03-16',5,38,'Kyla was sick :( With pat and carlo! :D;D'),(73,'2012-03-17 08:26:43','2012-03-14',10,10,''),(74,'2012-03-17 08:27:27','2012-03-16',9,10,'');
/*!40000 ALTER TABLE `tbl_bs_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_bs_group`
--

DROP TABLE IF EXISTS `tbl_bs_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_bs_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `book` varchar(45) NOT NULL,
  `schedule` text NOT NULL,
  `faculty` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_bs_group`
--

LOCK TABLES `tbl_bs_group` WRITE;
/*!40000 ALTER TABLE `tbl_bs_group` DISABLE KEYS */;
INSERT INTO `tbl_bs_group` VALUES (1,'Oldies 1','Genesis, Part 2','Wednesday 1:00-3:30','-'),(2,'Oldies 2','Genesis, Part 1','Tuesday 3:00-5:30','-'),(3,'Middies 1','Revelation','Friday 4:30-7:00','-'),(4,'Middies 2A','Short Letters','Tuesday 4:30-7:00','-'),(5,'Middies 2B','Short Letters','Friday 2:30-5:00','-'),(6,'Newbies 1A','Acts','Tuesday 6:00-8:30','-'),(7,'Newbies 1B','Acts','Wednesday 9:40-12:10','-'),(8,'Newbies 2A','John','Tuesday 6:00-8:30','Raymund Sison'),(9,'Newbies 2B','John','Friday 6:00-8:30','Raymund Sison'),(10,'BS Leaders','The Good and Beautiful LIFE','Wednesday 4:30-7:00','Raymund Sison');
/*!40000 ALTER TABLE `tbl_bs_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_roles_perms`
--

DROP TABLE IF EXISTS `acl_roles_perms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_roles_perms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idrole` int(11) NOT NULL,
  `idperm` int(11) NOT NULL,
  `value` tinyint(4) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idrole_UNIQUE` (`idrole`),
  UNIQUE KEY `idperm_UNIQUE` (`idperm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_roles_perms`
--

LOCK TABLES `acl_roles_perms` WRITE;
/*!40000 ALTER TABLE `acl_roles_perms` DISABLE KEYS */;
/*!40000 ALTER TABLE `acl_roles_perms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('839c6d41def995b667503277ca73b651','127.0.0.1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53',1316607890,'a:6:{s:6:\"iduser\";s:1:\"1\";s:8:\"username\";s:7:\"formdev\";s:9:\"firstname\";s:7:\"FORMDEV\";s:8:\"lastname\";s:7:\"FORMDEV\";s:17:\"upload_permission\";b:1;s:12:\"is_logged_in\";b:1;}');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_users` (
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'Common User',
  `user` int(10) unsigned NOT NULL,
  PRIMARY KEY (`username`),
  KEY `FK_tbl_users_1` (`user`),
  KEY `FK_tbl_users_2` (`role`),
  CONSTRAINT `FK_tbl_users_1` FOREIGN KEY (`user`) REFERENCES `facilitators` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_tbl_users_2` FOREIGN KEY (`role`) REFERENCES `tbl_roles` (`role`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES ('alexandra.roa','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Monitoring Agent',11),('bernadyn.cagampan','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Common User',56),('celine.villafuerte','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Class Henchie',63),('charo.musni','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','BS Leader',38),('chryzel.lim','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Class Henchie',59),('dennis.abad','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','BS Leader',33),('jannah.delbarrio','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Class Henchie',36),('jenna.tardio','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','BS Leader',13),('john.catan','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','BS Leader',18),('jose.aragoncillo','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','BS Leader',42),('joy.mahinay','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Common User',61),('karen.ang','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Common User',41),('kevin.panuelos','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Monitoring Agent',72),('kyla.iglesia','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Class Henchie',48),('kyrstyn.uy','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Common User',62),('marion.dejesus','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Class Henchie',44),('mary.yeung','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Monitoring Agent',52),('miguel.miranda','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Student Head',4),('monitoring_head','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Monitoring Head',10),('paolo.gervacio','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','BS Leader',9),('patricia.lim','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','BS Leader',50),('raus.ablaza','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Class Henchie',34),('raymund.sison','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Formdev Head',77),('sherie.yu','$2a$07$usesomesillystringforeBjGa5EVandlX04ogKPnXunT7cZs8r4i','Common User',40);
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_user_perms`
--

DROP TABLE IF EXISTS `acl_user_perms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_user_perms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idperm` int(11) NOT NULL,
  `value` tinyint(4) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_user_perms`
--

LOCK TABLES `acl_user_perms` WRITE;
/*!40000 ALTER TABLE `acl_user_perms` DISABLE KEYS */;
INSERT INTO `acl_user_perms` VALUES (1,1,1,1,'2011-11-02 21:55:48'),(2,1,2,1,'2011-11-02 21:55:48'),(11,1,3,1,'2011-11-02 21:55:48'),(12,1,4,1,'2011-11-02 21:55:48'),(13,1,5,1,'2011-11-02 21:55:48'),(14,1,6,1,'2011-11-02 21:55:48'),(15,1,7,1,'2011-11-02 21:55:48'),(16,1,8,1,'2011-11-02 21:55:48'),(17,1,9,1,'2011-11-02 21:55:48'),(18,1,10,1,'2011-11-02 21:55:48'),(19,1,11,1,'2011-12-13 01:01:01'),(20,1,12,1,'2011-12-13 01:01:01'),(21,1,13,1,'2011-12-13 01:01:01');
/*!40000 ALTER TABLE `acl_user_perms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `batches`
--

DROP TABLE IF EXISTS `batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year_label` varchar(45) DEFAULT NULL,
  `batchnumber` int(11) DEFAULT NULL,
  `startyear` int(11) DEFAULT NULL,
  `endyear` int(11) DEFAULT NULL,
  `batch_label` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batches`
--

LOCK TABLES `batches` WRITE;
/*!40000 ALTER TABLE `batches` DISABLE KEYS */;
INSERT INTO `batches` VALUES (1,'SY',1,1999,2001,'CLP'),(2,'SY',1,2001,2002,'FORMDEV'),(3,'SY',2,2002,2003,'FORMDEV'),(4,'SY',3,2003,2004,'FORMDEV'),(5,'SY',4,2004,2005,'FORMDEV'),(7,'SY',5,2005,2006,'FORMDEV'),(8,'SY',6,2006,2007,'FORMDEV'),(9,'SY',7,2007,2008,'FORMDEV'),(10,'SY',8,2008,2009,'FORMDEV'),(11,'SY',9,2009,2010,'FORMDEV'),(12,'SY',10,2010,2011,'FORMDEV'),(13,'SY',11,2011,2012,'FORMDEV');
/*!40000 ALTER TABLE `batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `previousfaci`
--

DROP TABLE IF EXISTS `previousfaci`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `previousfaci` (
  `idpreviousfaci` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idfaci` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpreviousfaci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `previousfaci`
--

LOCK TABLES `previousfaci` WRITE;
/*!40000 ALTER TABLE `previousfaci` DISABLE KEYS */;
/*!40000 ALTER TABLE `previousfaci` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `idprofile` int(11) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(80) NOT NULL,
  `firstname` varchar(80) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,NULL,'formdev','41b764d2ad52147c4c7dbd3a8b5afa2b','formdev@gmail.com','FORMDEV',''),(2,15,'gemi.ablaza','7d1c0a88bd5e99ca0935989b83276cda','gemi@gemi.co','Gemi','Ablaza'),(3,5,'nikko.reyes','210ec41c67f1dcd7f578c0d0332202cf','nikkoreyes_42@yahoo.com','Nikko','Reyes'),(7,40,'sherie.yu','699990a62334f6867f7cb4bec91ffe30','sherie.yu@gmail.com','Sherie','Yu');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `idstudent` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `finalgrade` varchar(45) DEFAULT NULL,
  `idClass` int(11) NOT NULL,
  PRIMARY KEY (`idstudent`,`idClass`),
  KEY `FK_student_1` (`idClass`),
  CONSTRAINT `FK_student_1` FOREIGN KEY (`idClass`) REFERENCES `class` (`idclass`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_perms`
--

DROP TABLE IF EXISTS `acl_perms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_perms` (
  `idperm` int(11) NOT NULL AUTO_INCREMENT,
  `perm_key` varchar(45) DEFAULT NULL,
  `perm_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idperm`),
  UNIQUE KEY `perm_key_UNIQUE` (`perm_key`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_perms`
--

LOCK TABLES `acl_perms` WRITE;
/*!40000 ALTER TABLE `acl_perms` DISABLE KEYS */;
INSERT INTO `acl_perms` VALUES (1,'pk_home_update','update home'),(2,'pk_about_update','update about'),(3,'pk_reflections_add','add reflection'),(4,'pk_reflections_update','update reflection'),(5,'pk_reflections_delete','delete reflection'),(6,'pk_announcements_add','add announcement'),(7,'pk_announcements_update','update announcement'),(8,'pk_announcements_delete','delete announcement'),(9,'pk_gallery','manage gallery'),(10,'pk_files','manage files'),(11,'pk_verse_edit','edit verse'),(12,'pk_verse_add','add verse'),(13,'pk_verse_setVW','manage the verse of the week'),(14,'pk_accounts','manage accounts');
/*!40000 ALTER TABLE `acl_perms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reflection`
--

DROP TABLE IF EXISTS `reflection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reflection` (
  `idreflection` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idreflection`),
  KEY `FK_reflection_1` (`iduser`),
  CONSTRAINT `FK_reflection_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reflection`
--

LOCK TABLES `reflection` WRITE;
/*!40000 ALTER TABLE `reflection` DISABLE KEYS */;
INSERT INTO `reflection` VALUES (1,2,'Today marks a very powerful, very significant event in human history. If you’re a Christian, you would know what today is. And yes, I know there are some who aren’t, and who might get turned off by this entry, but I really still wish to share this message with my friends and acquaintances, so please bear with me.\r\n\nThere’s this narrative that I really like to share with people who are interested or who question why I believe in Jesus Christ. It’s not a catch all defense or anything, I just find the narrative really really beautiful, and for me, it answers the question of why I believe in Christ really well. If you don’t mind, I’d like to share that narrative too, or at least the first half of it. I hope this would have an effect on you, reader, even if only a tiny little bit.\r\n\n\r\n\nSee, the story begins with justice and love, but mostly just love.\r\n\n\r\n\nDuring the time of creation, God told Adam and Eve not to partake of the fruit of good or evil, or else they will die (Genesis 3:3). Going against the will of the Father is sin, and this statement in Genesis 3:3 sets the consequence of sin to be death (the Father’s will at that time was only for them not to eat of the fruit, going against that would warrant death). For those who know the continuation if this story, you would know that the consequence was put into effect when Adam and Eve partook of the fruit, after the temptation of the serpent. They were sentenced to die when their time on Earth is up and they were banished from the garden of Eden (and in effect, from the presence of God, as while they were in the garden, they enjoyed God’s presence freely).\r\n\n\r\n\nWhether this story is real or not, the point behind it is that the consequence of sin has been set to death, and not the physical kind of death, but the spiritual. Spiritual death means eternal separation from God (which, if you recall, happened to Adam and Eve when they were banished from the garden). Thus we see a demonstration of God being just to His word, and a precedent of sin being been set.\r\n\n\r\n\nNow, we are all sinners; at one point in time, we have committed a sin, big or small. God and sin cannot co-exist together though (since God is all-good) , so it follows that we must be separated from God, and are doomed to be so. But you know what? God, in His infinite love, still wanted us to be with Him, even if we were sinners. He wanted us to enjoy His presence, to enjoy a life with Him that is devoid of sadness and pain. He could’ve easily thrown us away, with no way for redemption. He is God after all, the creator of everything. But still, He loved us so much that He wanted us to be with Him. God wanted us to be reconciled once again with Him and to enjoy His loving presence.\r\n\n\r\n\nBut what was God to do? He already said that the consequence of sin is death (a spiritual kind of death, which means eternal separation from Him, not just physical death). And since He is just, He has to follow the rule that He set. So what now?\r\n\n\r\n\nWell, He made a way. And in doing so, He displayed His magnificent love for all of us.\r\n\n\r\n\nHe had His Son, who was one with Him, turn into a fashion of one like us. He had His Son take on the form of a sinner like us, frail and weak. He entered into human history; an unprecedented move of One who is beyond history. And when His time had come, He took His Son and had Him sacrificed. He carried a cross He didn’t have to carry, led to Calvary where He was to be crucified; an ordeal He didn’t have to go through. And on the sixth hour, with long thick nails affixing Him to the cross (a pain so severe, they had to invent the word “excruciating” just to define it), battered and broken, weak and humiliated, He breathed His last. The God of all creation, humiliated in front of sinful man, willingly dying in their hands for everyone to see.\r\n\n\r\n\nAnd as He underwent all this, He took on all our sins, and He died with them. He did this to pay for the penalty of sin, the penalty of all our sins. He did this so we, the undeserving sinner, would not have to suffer the penalty of sin. He suffered the consequences of our sin for us, dying and disconnecting Himself from the Father in our steed. In doing so He became the perfect sacrifice.\r\n\n\r\n\nAnd in doing so, He made a way. A way back to God. A way to be reconnected once again with God. A way to be with God once again. He didn’t have to do this, but he did so because He loved us so much.\r\n\n\r\n\nSo today, on Good Friday, let us remember this wonderful sacrifice He made on the cross. Let us take time from our busy schedules to thank Him for and to remember what He did for us on this day. And let us eagerly await His return, when He comes full circle, on Easter, when He demonstrated His glorious triumph over death, granting us access to eternal life with Him and the Father.\r\n\n\r\n\nAmen.','2007-08-30 20:55:48','Good Friday'),(2,2,'test','2007-08-30 20:55:48','test');
/*!40000 ALTER TABLE `reflection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_outreach_reports`
--

DROP TABLE IF EXISTS `tbl_outreach_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_outreach_reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` date NOT NULL,
  `activity` varchar(45) NOT NULL,
  `submitted_by` int(10) unsigned NOT NULL,
  `remarks` text,
  PRIMARY KEY (`id`),
  KEY `FK_tbl_outreach_reports_1` (`submitted_by`),
  CONSTRAINT `FK_tbl_outreach_reports_1` FOREIGN KEY (`submitted_by`) REFERENCES `facilitators` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_outreach_reports`
--

LOCK TABLES `tbl_outreach_reports` WRITE;
/*!40000 ALTER TABLE `tbl_outreach_reports` DISABLE KEYS */;
INSERT INTO `tbl_outreach_reports` VALUES (3,'2012-02-22 07:02:33','2012-01-15','class_outreach',10,'FTK Outreach'),(4,'2012-02-23 23:05:06','2012-02-01','faci_outreach',36,''),(5,'2012-02-23 23:09:37','2012-01-25','faci_outreach',36,'Eric - no shorts kaya bumalik\nDanjo - present'),(6,'2012-02-23 23:15:11','2012-02-08','class_outreach',36,''),(7,'2012-02-23 23:19:43','2012-02-15','class_outreach',36,''),(8,'2012-02-23 23:26:00','2012-02-22','class_outreach',36,'');
/*!40000 ALTER TABLE `tbl_outreach_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `datetime` datetime DEFAULT NULL,
  `idtype` int(11) DEFAULT NULL,
  `summary` text,
  `url_title` varchar(200) DEFAULT NULL,
  `edited_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url_title_UNIQUE` (`url_title`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 DELAY_KEY_WRITE=1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,1,'Good Friday','<p>Today marks a very powerful, very significant event in human history. If you’re a Christian, you would know what today is. And yes, I know there are some who aren’t, and who might get turned off by this entry, but I really still wish to share this message with my friends and acquaintances, so please bear with me.</p><p>There’s this narrative that I really like to share with people who are interested or who question why I believe in Jesus Christ. It’s not a catch all defense or anything, I just find the narrative really really beautiful, and for me, it answers the question of why I believe in Christ really well. If you don’t mind, I’d like to share that narrative too, or at least the first half of it. I hope this would have an effect on you, reader, even if only a tiny little bit.</p><p>See, the story begins with justice and love, but mostly just love.</p><p>During the time of creation, God told Adam and Eve not to partake of the fruit of good or evil, or else they will die (Genesis 3:3). Going against the will of the Father is sin, and this statement in Genesis 3:3 sets the consequence of sin to be death (the Father’s will at that time was only for them not to eat of the fruit, going against that would warrant death). For those who know the continuation if this story, you would know that the consequence was put into effect when Adam and Eve partook of the fruit, after the temptation of the serpent. They were sentenced to die when their time on Earth is up and they were banished from the garden of Eden (and in effect, from the presence of God, as while they were in the garden, they enjoyed God’s presence freely).</p><p>Whether this story is real or not, the point behind it is that the consequence of sin has been set to death, and not the physical kind of death, but the spiritual. Spiritual death means eternal separation from God (which, if you recall, happened to Adam and Eve when they were banished from the garden). Thus we see a demonstration of God being just to His word, and a precedent of sin being been set.</p><p>Now, we are all sinners; at one point in time, we have committed a sin, big or small. God and sin cannot co-exist together though (since God is all-good) , so it follows that we must be separated from God, and are doomed to be so. But you know what? God, in His infinite love, still wanted us to be with Him, even if we were sinners. He wanted us to enjoy His presence, to enjoy a life with Him that is devoid of sadness and pain. He could’ve easily thrown us away, with no way for redemption. He is God after all, the creator of everything. But still, He loved us so much that He wanted us to be with Him. God wanted us to be reconciled once again with Him and to enjoy His loving presence.</p><p>But what was God to do? He already said that the consequence of sin is death (a spiritual kind of death, which means eternal separation from Him, not just physical death). And since He is just, He has to follow the rule that He set. So what now?</p><p>Well, He made a way. And in doing so, He displayed His magnificent love for all of us.</p><p>He had His Son, who was one with Him, turn into a fashion of one like us. He had His Son take on the form of a sinner like us, frail and weak. He entered into human history; an unprecedented move of One who is beyond history. And when His time had come, He took His Son and had Him sacrificed. He carried a cross He didn’t have to carry, led to Calvary where He was to be crucified; an ordeal He didn’t have to go through. And on the sixth hour, with long thick nails affixing Him to the cross (a pain so severe, they had to invent the word “excruciating” just to define it), battered and broken, weak and humiliated, He breathed His last. The God of all creation, humiliated in front of sinful man, willingly dying in their hands for everyone to see.</p><p>And as He underwent all this, He took on all our sins, and He died with them. He did this to pay for the penalty of sin, the penalty of all our sins. He did this so we, the undeserving sinner, would not have to suffer the penalty of sin. He suffered the consequences of our sin for us, dying and disconnecting Himself from the Father in our steed. In doing so He became the perfect sacrifice.</p><p>And in doing so, He made a way. A way back to God. A way to be reconnected once again with God. A way to be with God once again. He didn’t have to do this, but he did so because He loved us so much.</p><p>So today, on Good Friday, let us remember this wonderful sacrifice He made on the cross. Let us take time from our busy schedules to thank Him for and to remember what He did for us on this day. And let us eagerly await His return, when He comes full circle, on Easter, when He demonstrated His glorious triumph over death, granting us access to eternal life with Him and the Father.</p><p>Amen.</p>','2007-08-30 20:55:48',1,'<p>Today marks a very powerful, very significant event in human history. If you’re a Christian, you would know what today is. And yes, I know there are some who aren’t, and who might get turned off by this entry, but I really still wish to share this message with my friends and acquaintances, so please bear with me.</p>','good-friday','2007-08-30 20:55:48'),(2,1,'I\'m lost!','<p>I&rsquo;m lost!</p>\r\n\n<p>I&rsquo;m sure this may have happened to anyone. You are about to go somewhere but you don&rsquo;t have a map or anything to know if you are really going the right way. You have no idea where you are. Maybe panic will set in when you are feeling hopelessly lost. You can eventually go looking around and, maybe by some luck, get to your destination or meet someone that you can ask for directions.</p>\r\n\n<p>Sometimes life is like this. For me, everyday may be a struggle because even I myself feel that I am lost in my life. I am reminded by this because during our last bible study, someone asked what if you just relied on your own strengths and not on God. This may be applicable to one&rsquo;s life and it has made me think of what I may be doing with mine.</p>\r\n\n<p>Just as my story on being lost, we may rely solely on ourselves especially when we know we can do something about it without the help of anyone. We are proud of ourselves when everything that&rsquo;s happening around us is just fine but there will be a time when we did all that we could but we just can&rsquo;t make things right. We may ask help from people like our friends or family but even they cannot help us. As was discussed in our bible study, when there are trials or tasks that are seemingly impossible, only then would we rely on God. Someone in our bible study reasoned out that isn&rsquo;t all that we&rsquo;re doing is for God? But then, there are times when we do things and our minds are not set on God.</p>\r\n\n<p>For me, when I have my quiet time, I talk with God, usually, about my problems and when I don&rsquo;t really know what to do with them. When we are lost in our life, we may be feeling despair and think we cannot do anything, feeling utterly helpless. After talking with God about my problems, I feel an inner peace within me when I have trusted in him to help me carry my burdens and I don&rsquo;t forget to thank him for all he has done for me, even for the simple things like being able to look forward to a new day after a very hectic day, like for example yesterday or the past weeks.</p>\r\n\n<p>So just trust in God and let him be the light in the darkness that will guide you in your journey that is called life.</p>','2010-11-08 21:55:48',1,'<p>I&rsquo;m lost!</p>\r\n\n<p>I&rsquo;m sure this may have happened to anyone. You are about to go somewhere but you don&rsquo;t have a map or anything to know if you are really going the right way. You have no idea where you are. Maybe panic will set in when you are feeling hopelessly lost. You can eventually go looking around and, maybe by some luck, get to your destination or meet someone that you can ask for directions.','i\'m-lost!--1','2011-12-11 00:10:25'),(3,3,'I want to pray not I have to pray.','<p>Being Under Satan’s Yolk – This is one of the very few reasons why I always end up not studying, not reading, not programming or plainly not doing school works and most importantly, not being able to read the Bible and talk to God and pray. I am being under Satan’s yolk and as you’ve guessed it, being BUSY.</p><p>Fulfilling my tasks as God’s servant and everything that follows it is very tough. It came to a point that I have not been reading the Bible for a month or so, I guess. Yes, I have been praying but for me, there is a big difference in reading God’s word and reflecting on it afterwards. There are many instances that after a very long absence of the word of God then reading again, a certain verse or sometimes the whole passage just knows how to punch my heart and makes me say, “What did I do that held me not to read God’s word?” It really amazes me at times when even the smallest detail of the story or passage can actually hit me hard.</p><p>Praying is our way of communication with God. It is the only way we can talk to Him not like our friends where we can text, call and chat with them online, with God, we make the most intimate conversation. I still wonder why I can stand not talking to Him despite me being busy. At first, talking to Him was a great obligation or a duty. It was really a difficult shifting job but as time went by, I learned that prayer should be born out of passion and relationship and not an obligation or duty. It is an “I want to” versus “I have to”. I want to pray but not I have to pray.</p><p>We talk to our friends every day, get in touch with them, share experiences and get to have fun with them. Through all these, we learn to know each piece about them and most especially, we learn to listen to them because they know us well through the everyday exchange of conversations. Likewise, we can always do these to God and through these; we will not have a hard time listening to His voice and follow His will for us. There are times that we tend to be stubborn but like Jonah, the will of the Lord will forever be His will for us and it cannot be escaped.</p><p>Last thing I really miss in the absence of God’s word is also the absence of hope. The hope that the word of God brings is not the hope that we know but the assurance of the future—the assurance that He will always come and help us. In this present time of mine, I really need hope. I am now in the book of Hebrews and it was my returning book. After reading it, I suddenly felt relieved because of the said hope. The verse, “Since he himself has gone through suffering and testing, he is able to help us when we are being tested. (Heb 2:18)” just showed hope that He is ABLE to help us.</p><p>All these can be experienced when reading the word of God. There are still many things that are to be learned from reading but the most important thing is never neglecting this opportunity for us to pray and to talk to God. It may be a tough job at first but as time goes by, it will be tougher to get through life without reading His word.</p>','2010-11-02 21:55:48',1,'<p>Being Under Satan’s Yolk – This is one of the very few reasons why I always end up not studying, not reading, not programming or plainly not doing school works and most importantly, not being able to read the Bible and talk to God and pray. I am being under Satan’s yolk and as you’ve guessed it, being BUSY.</p>','i-want-to-pray-not-i-have-to-pray','2010-11-02 21:55:48'),(4,1,'About','<h2>\r\n\n	FORMDEV Mission</h2>\r\n\n<p>\r\n\n	The College of Computer Studies (CCS) has a special program and community called FORMDEV (Formation and Development), the mission of which is to proclaim and demonstrate the Lasallian and Gospel values of <strong>faith</strong>, <strong>zeal</strong>, and <strong>love</strong>, especially for one&#39;s <strong>community</strong> and for the <strong>poor</strong>.</p>\r\n\n<p>\r\n\n	A major component of the FORMDEV program is a 0.5-unit course, also called FORMDEV, offered to CCS freshmen. The goal of the FORMDEV course is two-pronged:</p>\r\n\n<ul>\r\n\n	<li>\r\n\n		<p>\r\n\n			To introduce CCS freshmen to the life and values of the Founder of the Brothers of the Christian Schools, St. John Baptist de la Salle; and</p>\r\n\n	</li>\r\n\n	<li>\r\n\n		<p>\r\n\n			To assist them in relating the life and values of St. La Salle to the life of Jesus and the values of God&rsquo;s Kingdom, and to their own lives, values, and dreams.</p>\r\n\n	</li>\r\n\n</ul>\r\n\n<h2>\r\n\n	History</h2>\r\n\n<p>\r\n\n	FORMDEV began, by God&rsquo;s grace, as the &quot;CLP&quot; group in SY 1999-2000. The group&rsquo;s objective was simple: to study the life of St. La Salle, with the hope that it would inspire the members of the group to be more Christ-like and more concerned about the plight of the poor.</p>\r\n\n<p>\r\n\n	The CLP group was originally composed of CCS faculty members led by the CCS dean, but it eventually grew to include students and co-academic personnel. When the group finished studying Br. Luke Salm&rsquo;s The Work is Yours in SY 2001-2002, the student members, in a meeting of the group with Br. Cecilio Hojilla at the Brothers&rsquo; House in DLS-Dasmarinas, unanimously suggested that all CCS students should have the same experience of getting to know St. La Salle and the members of the CCS community more deeply.</p>\r\n\n<p>\r\n\n	Preparations were then made to offer a course called FRMDEV1 (Formation and Development 1) to all CCS sophomores the following year.</p>\r\n\n<p>\r\n\n	FRMDEV1 was offered for the first time in SY 2002-2003, with more faculty than student facilitators.</p>\r\n\n<p>\r\n\n	Beginning SY 2003-2004, however, there have been more student facilitators than faculty, and the course and program began to be called FORMDEV.</p>\r\n\n','2011-11-02 21:55:48',4,'<h2>\r\n\n	FORMDEV Mission</h2>\r\n\n<p>\r\n\n	The College of Computer Studies (CCS) has a special program and community called FORMDEV (Formation and Development), the mission of which is to proclaim and demonstrate the Lasallian and Gospel values of <strong>faith</strong>, <strong>zeal</strong>, and <strong>love</strong>, especially for one&#39;s <strong>community</strong> and for the <strong>poor','home','2011-12-11 19:57:15'),(5,1,'Home','<p><strong>FORMDEV </strong>is a special <strong>program</strong> and <strong>community</strong> of volunteer faculty, staff, alumni, and students of the College of Computer Studies (CCS) of De La Salle University (DLSU). The mission of FORMDEV is to proclaim and demonstrate the Lasallian and Gospel values of <strong>faith</strong>, <strong>zeal</strong>, and <strong>love, especially for one&rsquo;s community and for the poor</strong>.</p>\r\n\n<p>In 2000, a group of CCS professors and students began meeting weekly to study the life of St. La Salle, believing that this would inspire them to be more Christ-like and more concerned about the plight of the poor. In 2001, when they finished studying Br. Luke Salm&rsquo;s biography of St. La Salle, The Work is Yours, the student members of the group unanimously felt that all CCS students should go through the same experience that they went through of getting to know Christ, St. La Salle, themselves, and other members of the CCS community more deeply. Thus, FORMDEV was born, and a 0.5-unit course, also called FORMDEV, was offered to CCS students in 2002. By God&rsquo;s grace, FORMDEV (the program, community, and course) continue to exist to this day.</p>\r\n\n<p>If you would like to know more about FORMDEV, we invite you to read the <a href=\"http://www.ccsformdev.com/downloads/FORMDEV%20-%20Handbook.pdf\" target=\"_blank\">FORMDEV Handbook</a>. It tells the story of FORMDEV, explains the Lasallian values that FORMDEV focuses on, specifies the duties of FORMDEV facis, and lists all the facis of FORMDEV, past and present.</p>\r\n\n','2011-11-02 21:55:48',3,'<p><strong>FORMDEV </strong>is a special <strong>program</strong> and <strong>community</strong> of volunteer faculty, staff, alumni, and students of the College of Computer Studies (CCS) of De La Salle University (DLSU). The mission of FORMDEV is to proclaim and demonstrate the Lasallian and Gospel values of <strong>faith</strong>, <strong>zeal</strong>, and <strong>love, especially for one&rsquo;s community and for the poor</strong>.','home5','2012-03-21 03:07:12'),(6,0,'In His Image and Likeness','<p>I have always wondered what it meant to be created &ldquo;in the image and likeness of God&rdquo; (paraphrased from Genesis 1:27). In my younger, more naive years, I used to think it meant that we all looked like God physically, and thought and acted in the same way too! It didn&rsquo;t help that the religion books used in my elementary (and even secondary) school instruction often depicted God as a bearded old man, floating among the clouds (sometimes it was just His head that was visible, sometimes He was shown in a funny robe). Actually, come to think of it, He looked kinda like Santa Claus without the red hat and robe, and kinda like Father Time too! (which I now know are both pagan symbols, sorry God XD)</p>\r\n\n<p>Upon taking up FORMDEV during my college undergraduate years (and reinforced by Bible studies after I actually joined the community), the idea of being created in God&rsquo;s &ldquo;image and likeness&rdquo; changed into something that might be a bit more accurate. During the time of the Bible&rsquo;s writing (the time of Moses, and until even the time of Jesus), the career choice of a son would be severely limited to what his Father&rsquo;s craft was. A stonecutter&rsquo;s son would inevitably become a stonecutter; a carpenter&rsquo;s son became a carpenter. Thus, the son became the &ldquo;image and likeness&rdquo; of his father, and while father and son tend to look alike physically, &ldquo;image and likeness&rdquo; pertained more to an unseen quality, an attribute passed down to the son from the father.</p>\r\n\n<p>For a long time, this became my understanding of Genesis 1:27, and for all intents and purposes, it&rsquo;s quite true. However, something was missing, something very important. I didn&rsquo;t pay too much attention to it at first, as I always thought I had more important things to do other than pondering Bible texts (again, forgive me Father). Today though, I had a much needed epiphany. I was reading John 5:1-24 today (The Bible in a Year reading for May 16, from the &ldquo;Our Daily Bread&rdquo;) and I happened upon a beautiful verse; call it the missing piece to the puzzle. It goes:</p>\r\n\n<p>&ldquo;Jesus gave them this answer: &lsquo;I tell you the truth, the Son can do nothing by himself; he can do only what he sees his Father is doing, because whatever the Father does the Son also does.&rsquo;&rdquo; (John 5:19)</p>\r\n\n<p>There is, of course, a multitude of ways to read this particular verse, but it struck a familiar chord in me. What does it really mean to be created &ldquo;in the image and likeness of God&rdquo;? What attributes of God should we learn to practice in our lives, the way sons in ancient Israel learned and practiced attributes of their fathers?</p>\r\n\n<p>And now I know the answer. All along it was Jesus Christ himself.</p>\r\n\n<p>In order for us to truly be &ldquo;in the image and likeness of God&rdquo;, we should learn to follow in the example of Jesus, who lived following &ldquo;what he sees his Father is doing&rdquo;. In order for us to truly live Genesis 1:27, we must allow God to form us to take on the characters of His son, for Jesus followed and lived in his Father&rsquo;s image and likeness (John 5:19). Galatians 5:22-24 (and a related verse in Ephesians 5:9) reveals some of the characters of Jesus, but more importantly, how to attain them.</p>\r\n\n<p>So how do we attain them?</p>\r\n\n<p>Simple! Just allow the Holy Spirit of God to work in you and to teach you. Just as how a young boy in ancient Israel would learn from his father the secrets of his father&rsquo;s trade, so must we allow God, through the Holy Spirit, to teach us the &ldquo;secrets&rdquo; of living a righteous life. Romans 8:28-29 further cements this fact, telling us that if we live according to the purpose God has set for us, He Himself will conform us into the likeness of his Son, the likeness of God Himself. Gradually, just by living in the purpose God has set for us, we become transformed into more Christ like beings.</p>\r\n\n<p>It&rsquo;s amazing how the realities of God all fit together. When we were young, we were taught fragments of this reality, each a gem on its own. But seeing these little realities merge together and make perfect absolute sense (and from different testaments too), it&rsquo;s just amazing! It comforts my spirit to see these little correspondences; it makes me feel at peace with my faith. I hope that, upon reading this simple reflection of mine, God&rsquo;s reality amazed you as well, and I hope that you will continue to be amazed as you discover more of God&rsquo;s realities.</p>\r\n\n<p>For now, I urge you to take Genesis 1:27 into heart in the light of John 5:19, and ask God to truly form us into His image and likeness, holding on to the promise of Romans 8:28-29, into the character of His son, Jesus Christ.</p>\r\n\n<p>Amen.</p>','2011-05-17 21:55:48',4,'','in-his-image-and-likeness','2011-12-10 17:58:23'),(22,1,'New World  Record','<p>I am pleased to inform you that <strong>Formdev</strong> has reached a <strong>New World Record</strong>!</p>','2011-12-09 16:44:49',2,'<p>I am pleased to inform you that <strong>Formdev</strong> has reached a <strong>New World Record</strong>!','new-world--record','2011-12-09 16:46:31'),(23,1,'Test','<p>This is my first test post.</p>\r\n\n','2012-03-21 02:59:44',1,'<p>This is my first test post.','test','2012-03-21 02:59:44'),(24,1,'New Announcement','<p>What kind of record is this?</p>\r\n\n','2012-03-21 03:10:41',2,'<p>What kind of record is this?','new-announcement','2012-03-21 03:10:41'),(25,1,'Long test.','<p>The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.</p>\r\n\n<p>&nbsp;</p>\r\n\n<p>The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.&nbsp;</p>\r\n\n','2012-03-21 03:11:44',2,'<p>The quick brown fox jumps over the lazy dog.&nbsp;The quick brown fox jumps over the lazy dog.</p>\r\n\n<p>&nbsp;','long-test','2012-03-21 03:11:44');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_monitoring_reports`
--

DROP TABLE IF EXISTS `tbl_monitoring_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_monitoring_reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` date NOT NULL,
  `committee` int(10) unsigned NOT NULL,
  `report` text NOT NULL,
  `submitted_by` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tbl_monitoring_reports_1` (`committee`),
  KEY `FK_tbl_monitoring_reports_2` (`submitted_by`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_monitoring_reports`
--

LOCK TABLES `tbl_monitoring_reports` WRITE;
/*!40000 ALTER TABLE `tbl_monitoring_reports` DISABLE KEYS */;
INSERT INTO `tbl_monitoring_reports` VALUES (1,'2012-01-20 18:44:25','2012-01-11',1,'Outreach CANCELLED!\r\n\r\nOutreach Attendance:\r\n Jannah\r\n Berna\r\n Kyrstyn\r\n Sheng\r\n Erika\r\n Pat \"bunso\"\r\n Mikko\r\n Kuya Brian\r\n Kevin\r\n Michael\r\n Danjo',10),(2,'2012-01-20 18:47:03','2012-01-15',1,'FTK 2012 Attendance:\r\nKed\r\nMary\r\nChai\r\nKen\r\nTiano\r\nMikko\r\nJannah\r\nKuya Nikko\r\nSherlo\r\nCarlo\r\nPat\r\nKyrstyn\r\nDanjo\r\nBerna\r\nIon\r\nKuya Josh\r\nJann\r\nTrish\r\nJoy\r\nErika\r\nMichael B.\r\nKuya AC\r\nKuya MC\r\nEdmon\r\n',10),(3,'2012-01-22 06:18:40','2012-01-22',3,'First Impression Cards were ready for all classes.',10),(4,'2012-01-24 20:42:23','2012-01-23',2,'Still no updated Verse of the Week (VOTW)posted in the bulletin board. However, a new VOTW has been posted in the website.',10),(5,'2012-02-04 19:06:42','2012-02-01',1,'Outreach Committee Plans were received promptly from Jannah.',10),(6,'2012-02-04 19:07:06','2012-02-05',2,'Communications Committee Plans were just acquired today.',10),(7,'2012-02-22 05:22:51','2012-02-03',2,'Activities collage - posted\nBible study schedule - not posted\n1st VOW & GTKYF - posted',52),(8,'2012-02-22 05:24:36','2012-02-17',2,'Official shirt design - no updates from designer',52),(9,'2012-02-22 05:25:10','2012-02-17',2,'Official shirt signup sheet - none yet because there is still no final design',52),(10,'2012-02-22 05:26:18','2011-12-21',3,'Purchase folders and yarns - completed\nMaking first impression cards - completed',52),(11,'2012-02-22 05:29:22','2012-01-25',3,'Purchase marble paper, tape, plastic bags of different sizes - completed\nprinting of cards - completed\nAll materials were already available before the first treasure bag activity',52),(12,'2012-02-22 05:31:36','2012-01-25',3,'The committee also provided 6 boxes for the treasure bag activity (not in their plans)',52),(13,'2012-02-22 05:35:45','2012-02-08',3,'Purchase scrunchies and masking tape - completed',52),(14,'2012-02-22 05:46:54','2012-02-17',2,'In the plans by this date only 2 facis should have been posted, but the bulletin board team exceeded expectations. They\'ve already posted 7 facis.\n\nAlthough they still need improvement in the posting of the VOWs. Only 2 VOWs have been posted so far.',52),(15,'2012-02-22 05:56:10','2012-01-18',3,'Revamping of blind man\'s quest (shortened to 10 minutes) - completed',52),(16,'2012-02-22 05:57:42','2012-01-18',3,'Device back-up plan for when it\'s raining (Amazing Race)',52),(17,'2012-02-24 01:53:44','2012-02-17',2,'Official shirt final design is ready. Still waiting for approval from Doc Sison.',52),(18,'2012-02-27 05:09:06','2012-02-27',2,'Official shirt ordered - not done. Shirt design still needs approval from Doc Sison.',52),(19,'2012-02-27 05:13:42','2012-02-24',2,'VOW+application & GTKYF not yet posted.',52),(20,'2012-03-01 20:11:53','2012-02-24',2,'new VOW(02-29) and GTKYF(03-01) posted',52),(21,'2012-03-01 20:19:09','2012-02-29',2,'Minutes of 1st GA should have been submitted by the end of Feb. status: no updates yet from Chai.',52),(22,'2012-03-01 22:34:32','2012-03-02',2,'1. Statement shirt finalized, but still no approval from Doc Sison. Therefore no sign up sheet made as well.',52),(23,'2012-03-06 19:12:10','2012-03-03',2,'1st GA minutes were emailed by Chai',52),(24,'2012-03-06 19:13:14','2012-03-01',3,'Materials were provided for the first dark night session (to last).',52);
/*!40000 ALTER TABLE `tbl_monitoring_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_roles`
--

DROP TABLE IF EXISTS `acl_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_roles` (
  `idrole` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(45) NOT NULL,
  PRIMARY KEY (`idrole`),
  UNIQUE KEY `role_name_UNIQUE` (`role_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_roles`
--

LOCK TABLES `acl_roles` WRITE;
/*!40000 ALTER TABLE `acl_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `acl_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_types`
--

DROP TABLE IF EXISTS `article_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_types` (
  `idarticletype` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idarticletype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_types`
--

LOCK TABLES `article_types` WRITE;
/*!40000 ALTER TABLE `article_types` DISABLE KEYS */;
INSERT INTO `article_types` VALUES (1,'Reflections',''),(2,'Announcements',NULL),(3,'Home',NULL),(4,'About',NULL);
/*!40000 ALTER TABLE `article_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_user_roles`
--

DROP TABLE IF EXISTS `acl_user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_user_roles` (
  `iduser` int(11) NOT NULL,
  `idrole` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  UNIQUE KEY `iduser_UNIQUE` (`iduser`),
  UNIQUE KEY `idrole_UNIQUE` (`idrole`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_user_roles`
--

LOCK TABLES `acl_user_roles` WRITE;
/*!40000 ALTER TABLE `acl_user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `acl_user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facilitators`
--

DROP TABLE IF EXISTS `facilitators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facilitators` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `batch` int(11) NOT NULL,
  `term` int(11) DEFAULT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `nickname` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `course` text NOT NULL,
  `hometown` text NOT NULL,
  `highschool` text NOT NULL,
  `hobbies_interests` text,
  `motto` text,
  `favorite_verse` text,
  `random_stuff` text,
  `formdev_is` text,
  `email` varchar(100) NOT NULL,
  `contact` bigint(11) unsigned zerofill NOT NULL,
  `expected_term_graduation` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facilitators`
--

LOCK TABLES `facilitators` WRITE;
/*!40000 ALTER TABLE `facilitators` DISABLE KEYS */;
INSERT INTO `facilitators` VALUES (1,7,NULL,'Ryan Samuel','Dimaunahan','Ryan','1989-09-19','Master of Science in Computer Science (previously Bachelor of Science in Computer Science with Specializations in Software Technology','Sampaloc, Manila (now residing in Las Pinas City)','Elizabeth Seton School Main','Reading books;\nWriting stories and comics;\nWatching tokusatsu, anime and other geeky stuff;\nListening to music;\nPlaying the guitar;\nPlaying video games and trading card games;\nPhotography;\nAnd many many more?','\"Words could mean a thousand things; pictures are worth a thousand words. Moments are wrought by thousands of pictures; lives are measured as thousands of moments. But a life worth living, if its truly worth living, gives worth to a thousand more.\"','1Corinthians 13:1-3','I always try to put a little bit of my identity in everything that I do.','Formdev is further proof that a God of Love exists.','dimaunahan.ryan@gmail.com',09052445599,'Alumni'),(2,7,NULL,'Mary Klindt Asuncion','Mendoza','Klindt/Keng','1991-01-09','BS-ICTM','Manila','Philippine Pasay Chung Hua Academy','-Reading (Sci-Fi, Mystery, General Fiction)\n-Watching movies and American series (Crime Drama, Sci-Fi, Supernatural, Sitcoms, Competitions)\n-Music\n-Shopping/Fashion\n\n','The purpose of life is a life of purpose.\n- Robert Byrne\n\nWhat lies behind us and what lies before us are tiny matters compared to what lies within us.\n- Oliver Wendell Holmes','\"For he chose us in him before the creation of the world to be holy and blameless in his sight. In love he predestined us to be adopted as his sons through Jesus Christ, in accordance with his pleasure and will -- to the praise of his glorious grace, which he has freely given us in the One he loves.\"\n\n-Ephesians 1:4-6','Creative writing is my frustration.\nMy favorite song is When You Believe by Mariah Carey and Whitney Houston.\nI prefer fruit juices than water.','FORMDEV helped me form my character, strengthen my faith and deepen my relationship with the Lord.','kamm_07@yahoo.com',09064208860,'Alumni'),(3,8,NULL,'David C.','Manangan','Dave','1989-04-12','Bachelor of Science in Computer Science (CS) with Specialization in Software Technology','Cainta, Rizal','Lourdes School of Mandaluyong','Running, playing guitar, walking on the beach, watching movies and listening to music.','We all have the God given right to be happy. ','Romans 6:2\n\"By no means! We are those who have died to sin; how can we live in it any longer?\"','While others are 1/2 chinese or 1/4 chinese, I am 1/16 chinese. ','a course in college that I kept on taking twice a year for three years straight... a course that I will be taking even after I graduate... a course that is leading me to Jesus.','david.manangan@delasalle.ph',09179848481,'Alumni'),(4,8,NULL,'Miguel Cristobal B.','Miranda','Mc','1990-11-13','Master of Science in Computer Science (previously Bachelor of Science in Computer Science with Specializations in Software Technology)','Manila','Manila Science High School','Programming! :P;\nWatching \"How I Met Your Mother\" and \"The Big Bang Theory\";\nReading books;\nPlaying badminton, basketball, soccer and chess;\nSwimming; and\nJust hanging out with friends','\"With God, nothing is impossible!\"','\"And whatever you ask in prayer, you will receive, if you have faith.\" (Matthew 21:22)','I really really really like Gadgets!! (they\'re so gadget-y, I\'m gonna dieeee!) :))','God\'s work in action! :)','mc.miranda@delasalle.ph',09054388862,'Term 2 A.Y. 2012-2013'),(5,8,2,'Nikko Erick','Reyes','Niknok','1990-04-02','Bachelor of Science in Computer Science with specialization in Software Technology','Provident Villages, Marikina City','Marist School, Marikina City','Travelling, chilling, eating, anything under the sun. :)','Pag gusto maraming paraan, pag ayaw maraming dahilan.','Love is patient, kind, without envy. It is not boastful or arrogant. It is not ill-mannered nor does it seek its own interest. Love overcomes anger and forgets offenses. It does not take delight in wrong, but rejoices in truth. Love excuses everything, believes all things, hopes all things, endures all things.- 1 Cor. 13 : 4 - 7','I already have a grandson at the age of 17.','A family that I won\'t regret being into. A family that will be with you in good times and bad times. A family that will help you walk with God.','nikkoreyes_42@yahoo.com',09178004290,'2012'),(6,8,NULL,'Larisse Ann','Tapel','Larisse','1990-11-23','MMA','Binan, Laguna','St. Paul College, Pasig','Books, Photography, Street dance, Movies ','Passion and satisfaction go hand in hand, and without them, any happiness is only temporary, because there\'s nothing to make it last.','He keeps me functioning each and every day. Without Him, I will be nothing. But, with Christ, He strengthens me.(Phil 4:13)','I love mint flavored chocolates, cupcakes and coffee.','FORMDEV for me is a blessing.','pollykit23@yahoo.com',09165781866,'-'),(7,8,NULL,'Ma. Clarissa','Boac','Lexis','1990-09-20','BS-ICTM','','','-','-','-','-','-','zidane_lex@yahoo.com',00000000000,'Alumni'),(8,8,NULL,'Gena Claire Fineza ','Esperanza','Gena/Gena Claire/Ginaclurr/Shooting Star','1991-10-01','BS-ICTM turned MMG','Las Pi?as','Bloomfield Academy','Books, tumblr, more books, watching Asian dramas, fangirling, going to the beach','No one can make you feel inferior without your consent. - Eleanor Roosevelt','For I know the plans I have for you, declares the Lord, \"plans to prosper you and not to harm you, plans to give you hope and a future. Then you will call upon me and come and pray to me, and I will listen to you. You will seek me and find me when you seek me with all your heart.\" - Jeremiah 29:11-13','I like swimming even if I don\'t know how to swim, I love California Maki, and I\'m a pocketful of sunshine!','My spiritual family, and the best part of my college life <3','genaclaire11@yahoo.com; gena.esperanza@gmail.com',09064207345,'Alumni'),(9,8,NULL,'Paolo Miguel R.','Gervacio','Paolo','1991-01-05','BS CS-NE','Las Pi?as City','Elizabeth Seton School','Watching movies, watching sitcoms, water sports, motor sports, playing video games, playing the guitar','Getting your butt kicked today doesn\'t mean that tomorrow can\'t be a kick-butt day. (Gervacio, 2010)','-','I like saying \"hehe\". Hehe.','A chunk of God\'s ossum family. Hehe','paolomiguel07@yahoo.com; paologervacio@gmail.com',09156144501,'Term 3 A.Y. 2012-2013'),(10,8,NULL,'Angelo Crisanto B.','Miranda','AC','1990-11-13','Master of Science in Computer Science (previously Bachelor of Science in Computer Science with Specializations in Software Technology)','Manila','Manila Science High School','Programming, Playing different sports, and Watching TV Series and Movies','Always trust and follow God\'s will.','\"If you remain in me and my words in you, ask whatever you wish, and it will done for you.\" (John 15:7)','I Love YOU!!! :)','\"FORMDEV is Universal.\" (Miranda, A., 2010)','ac.miranda@delasalle.ph; angelo.miranda@live.com.ph',09178131772,'Term 2 A.Y. 2011-2012'),(11,8,NULL,'Alexandra Marie Gumaru','Roa','Sandie','1989-03-27','CS-ST','Alabang','De La Salle Zobel','Reading, drawing, surfing the internet, playing video games','Come what may.','For where your treasure is, there your heart will be also. (Luke 12:34)','I love dogs!','one of a kind.','saanddiiee@yahoo.com',09283889006,'Term 1 A.Y. 2012-2013'),(12,8,NULL,'Brian Joseph P.','Tan','Bry','1988-12-13','BS-ICTM','Makati','Colegio San Agustin','Sci-Fi & Adventure Novels/Movies, Tv Series (Crime-Drama/Sci-Fi/Sitcom/Supernatural), RPG & MMORPG, Culinary Arts, Music, Anime/Manga, Gadgets','\'Tis a lesson you should heed,\nTry, try again.\nIf at first you don\'t succeed,\nTry, try again.\n\n                                 -William Edward Hickson','The Book of Wisdom 4:10-15 \"There were some who pleased God and were loved by Him, and while living among sinners were taken up. They were caught up so that evil might not change their understanding, or guile deceive their souls. For the fascination of wickedness obscures what is good, and roving desire perverts the innocent mind. Being perfected in a short time, they fulfilled long years; for their souls were pleasing to the Lord, therefore He took them quickly from the midst of wickedness. Yet the peoples saw and did not understand, to take such a thing to heart, that God\'s grace and mercy are with His elect, and that He watches over His Holy ones.\" ','I eat A LOT. ','the best thing that happened in my college life.','brianjosephtan@yahoo.com',09272014725,'Term 2 A.Y. 2011-2012'),(13,8,NULL,'Jenna Karla','Tardio','Jenna','1989-07-18','bachelor of science in computer science major in instructional systems technology','Makati CIty','St Paul College Pasig','playing with nephew, dogs, watching TV, tweeting, sleeping, eating, loving nyahaha joke','Family comes First','Philippians 4:6 Don?t worry about anything; instead, pray about everything. Tell God what you need, and thank him for all he has done.','i am always masungit!!','what makes college life bearable <3','jennatardio@yahoo.com',09154375896,'Term 3 A.Y. 2011-2012'),(14,8,NULL,'Mitsuru Mike','Toyoda','Mike T.','1991-02-19','ECE','Project 8, Quezon City','St. Mary\'s College Quezon City','Long walks, jogging, keeping physically fit, planning, teaching, studying, talking about random stuff, mathematics','Hardwork breeds talent','For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life. \n\n- John 3:16','I am an amateur arcade person, I love to play rhythm games although I don\'t have the time to do so anymore.','a fun family','mikee_toyoda@yahoo.com',09152952172,'Term 3 A.Y. 2013-2014'),(15,9,NULL,'Geraldine','Ablaza','Gemi','1991-12-11','BS CS - ST','Las Pinas City','Elizabeth Seton School - Main','Watching anything (people watching included), photography, sleeping, eating :D','Please pass your papers. Finished or not finished.','\"However, I consider my life worth nothing to me; my only aim is to finish the race and complete the task the Lord Jesus has given me?the task of testifying to the good news of God?s grace.\" Acts 20:24\n\n','I am afraid of snakes (even pictures of them) or anything that crawls.','my family that resides in my heart.','gemi.ablaza@delasalle.ph',09161247023,'Term 1 A.Y. 2012-2013'),(16,9,NULL,'Camille R.','Asoy','Cam','1990-11-27','BS-ICTM','-','PSHS-EVC','- Walking\n- Reading \n- Writing\n- Laughing\n- Listening to Music\n- Visual Arts\n- Cooking\n','You become responsible, forever, for what you have tamed. - Antoine de Saint-Exupery in The Little Prince','So then, just as you received Christ Jesus as Lord, continue to live your lives in him--rooted and built up to Him, strengthened in the faith as you were taught and overflowing with gratefulness. - Colossians 2:6-7','My oldest friend is a stuffed bear named Teddy--we\'ve been friends for about two decades now.','a surprising blessing from Him.','c_asoy@yahoo.com',09228355224,'Alumni'),(17,9,NULL,'Candano, Shaun Raphael Josef',NULL,'Shaun','1990-01-06','Bachelor of Science in Computer Science with Specializations in Software Technology','Pasig City, Metro Manila','La Salle Green Hills','Bowling;\nTennis;\nSurfing the net;\nReading interesting books','?Impossible is Possible?','John 3:16-21','I like to organize things.','Formdev is family, friends, fun, learning and believing in God.','shaun_candano_09@yahoo.com',09209086355,'Alumni'),(18,9,NULL,'Catan, John Lawrence',NULL,'Jacats','1991-06-24','CS-IST','Cainta,Rizal','Cainta Catholic College','playing computer games,reading novels and manga, watching t.v.,sleeping','Some succeed because they are destined to; most succeed because they are determined to.','2 Corinthians 12:9-10','I suck at basketball.Expect to lose when I am on your team. :))','FORMDEV for me is what renewed my faith in God. :)','lawrence_catan@yahoo.com; lawrence.catan@delasalle.ph',09179559593,'Term 1 A.Y. 2013-2014'),(19,9,NULL,'Clamor, George Anthony Alahan',NULL,'Anjo','1989-07-06','Bachelor of Science in Computer Science with Specializations in Software Technology','Brisbane, Queensland','La Salle Green Hills','Playing football;\nPlaying basketball','?The way to conquer fear is to challenge it head on.?\n?You can?t be a hero if you?re afraid of dying.?','Psalms 27:1','I am ambidexterous; I?m supposed to be right handed, but then my parents thought that I was a leftie so they trained my left arm for writing.','Formdev is one word: LOVE.','gaclamor@gmail.com',09159826204,'Alumni'),(20,9,NULL,'Lachica, Joshua Daniel',NULL,'Josh/Jude','1991-11-16','BS-CSST','Antipolo City','La Salle College Antipolo','Soccer, Basketball, Sports Games, uhh reading...and thats about it :D','Peace cannot be kept by force.\nIt can only be achieved by understanding.\n-Albert Einstein','Love is patient, love is kind and is not jealous; love does not brag and is not arrogant, does not act unbecomingly; it does not seek its own, is not provoked, does not take into account a wrong suffered, does not rejoice in unrighteousness, but rejoices with the truth; bears all things, believes all things, hopes all things, endures all things. Love never fails. \n\n- 1 Corinthians 13:4','uhh...hmm...i like collecting toys even though im too old for them :D','My Second Family','josh_lachica@yahoo.com',09266197374,'Term 1 A.Y. 2012-2013'),(21,9,NULL,'Lim, Valerie Mae',NULL,'Vea','1990-10-02','BS-ICTM','Marikina City','St. Scholastica\'s Academy Marikina','Wathcing movies, facebook, twitter and tumblr, eating. :))','The worst mistake anyone can make is being too afraid to make one.','For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life. John 3:16','I love melted ice cream. In tagalog: tunaw na ice cream. :))','Family.','vea_kinse@yahoo.com',09277842797,'Term 2 A.Y. 2011-2012'),(22,9,NULL,'Lu, Mike',NULL,'Mike L.','1989-01-12','CS-ST','San Juan','Xavier School','Animation, Movies, Computer Games','Inspiration does not come from the quote itself, but rather the person behind it.','Matthew 5:30 And if your right hand causes you to sin, cut it off and throw it away. It is better for you to lose one part of your body than for your whole body to go into hell.','I don\'t like giant insects','My way of escaping from school work.','deeds0l@yahoo.com',09064209259,'Term 1 A.Y. 2012-2013'),(23,9,NULL,'Orais, Cyrus Paul',NULL,'TAYUT','1990-11-14','BS-ICTM','Merville, Paranaque','Don Bosco Technical Institute - Makati','Eating (Free Food), Surfin\' the Net, Tambay, Games(PC), FUN RUN! :) basketball, playing guitar, magsulat? Programming, multimedia stuffs, \n\nCommited to FORMDEV & Parish-Comission on Youth, Merville.','\"Love, It\'s like the wind. I can\'t... see it, but I feel it.\" \n- Jamie Elizabeth Sullivan (A Walk to Remeber)','\"For God did not send his Son into the world to condemn the world, but to save the world through him\" - John 3:17\n','All about in me is random. @_@\nKaya ko mag 360 reverse fade away dunk sa half court.\nKaya kong ipasok sa labas ung electric fan.\nPresident, SingleSinceBirthClub(SSBC).\n\nI\'m a dedicated, hard working, full of strussle person.','\"Not just a evolution, but a revolution of an Individual into a God-centered Community.\"\n','hypeman11@yahoo.com; orais.cyruspaul@gmail.com',09065172426,'Alumni'),(24,9,NULL,'Pabillore, Jonathan A.',NULL,'Jon','1991-09-20','BS CS-ST','','','-','-','-','-','-','jonathanpabillore@gmail.com',00000000000,'Alumni'),(25,9,NULL,'Pangilinan, Rae Marvin A.',NULL,'Rae','1989-11-18','BS-CS-CSE','Caloocan City','Notre Dame of Greater Manila','watching movies, road tripping, computer games, drawing, playing different kinds of sports, ','Leave those past behind but as we move Forward bring the lessons it has brought your life. \n\nAng sarap simulan ng panibagong araw lalo na kung natapos ang kahapon na nakangiti ka :)','1 Timothy 2:1\n\"First of all, then, I urge you to offer petitions, prayers, intercessions, and expressions of thanks for all people, for kings, and for everyone who has authority, so that we might lead a quiet and peaceful life with all godliness and dignity.\"','\"One text away\" :))\n\"im weird and im proud :>\"','something that gives me the possibilities of unfolding what lies ahead.','rae.pangilinan@delasalle.ph',09166494475,'SH - Term 3 A.Y. 2011-2012'),(26,9,NULL,'Quinto, Jarren James',NULL,'Jar/Tiger','1989-11-07','BS CS-ST','Mandaluyong City','Lourdes School of Mandaluyong','Playing soccer\nPlaying basketball\n\"magpaulan\"\nsleeping','God has never given up on me, why should I give up on myself :D','Not only so, but we also rejoice in our sufferings, because we know that suffering produces perseverance; perseverance, character; and character hope. And hope does not disappoint us, because God has poured out his love into our heats by the Holy Spirit, whom he has given us (Rom 5: 3-5) ?','I like to program, alot.\nI\'m a shiftee from BS MTH-CAP\nI was born here, but raised at Singapore\nI can never be normal, always weird :D','a group of people where through faith and time, they will become more than a group. They\'ve become, a FAMILY','jarren.quinto@delasalle.ph',09275254174,'Alumni'),(27,9,NULL,'Teng, Grizelda',NULL,'Zel','1991-11-07','Bachelor of Science in Computer Science with Specializations in Software Technology','Taguig','Chiang Kai Shek College Manila','Listening to music;\nWatching series/movies;\nHanging out with friends','?Love wins. Love always wins.?\n- Tuesdays with Morrie by Mitch Albom','Romans 5:3-5','I have weird arms. My attention span is short. I am a random person.','Formdev is the reason why I love college.','zel_teng@yahoo.com',09274775556,'Alumni'),(28,9,NULL,'Ylaya, Paolo Dominic H.',NULL,'Mikey','1992-01-15','BS CS-ST','Las Pinas','Ateneo de Manila HS','playing tennis, basketball, badminton, playing the guitar, singing, dancing, beatboxing, drawing..','If at first you don\'t succeed, quality is the best policy..','\"Remain in me, as I remain in you. Just as a branch cannot bear fruit on its own unless it remains on the vine, so neither can you unless you remain in me.\"\n\nJohn 15:4','Ako ay may lobo...','like magic. It comes from within... :>','mikels233@gmail.com',09277590284,'Alumni'),(29,10,NULL,'Barrios, Ma. Katrina Carmela T.',NULL,'KC','1991-07-16','CS-IST','Roxas City, Capiz','Capiz National High School - Special Science & Technology Class','Movies, music, food, cars, shopping, dancing','A man has only one lifetime, but history can remember him forever.','Psalm 91: 9 \n\n\"You have the Lord for your refuge; you have made the Most High your stronghold.\"','I will NEVER eat vegetables. :D','the backbone of my spiritual being.','kcbarrios@gmail.com',09177009098,'SH - Term 3 A.Y. 2011-2012'),(30,10,NULL,'Ibañez Jr., John Francis I.',NULL,'John Boy','1991-01-14','BSCS-ST','Taguig','Immaculate Heart of Mary College','Tinkering Computers, Playing Basketball, Badminton, and Computer Games, Watching Movies','Our deepest fear is not that we are inadequate. Our deepest fear is that we are powerful beyond measure. It is our light, not our darkness that frightens us. We ask ourselves, who am I to be brilliant, gorgeous, talented, or fabulous? Actually, who are yo','John 1:14 - \"The Word became flesh and made his dwelling among us. We have seen his glory, the glory of the one and only Son, who came from the Father, full of grace and truth.\"','- I\'m random... :)\n- shy-type\n\nito talaga totally random... GWAPO! =))','Looooooooooooooooooove! :)','cloud_valentine14@yahoo.com',09064208893,'Alumni'),(31,10,NULL,'Piñera, Rene Rose Tan',NULL,'Rene','1991-12-27','BS-CS-ST','Quezon City','School of the Holy Spirit of Quezon City','Photography, Music, Drawing, Internet, Aliens, Ghosts, Sci-Fi Stuff','Be the best that you can be.','Do not get drunk on wine, which leads to debauchery. Instead, be filled with the Spirit. Ephesians 5:18','I sleep with the lights on because I\'m afraid of the dark.','an avenue to meet and grow with people who follow Christ.','renepinera@yahoo.com',09272340323,'SH - Term 1 A.Y. 2012-2013'),(32,10,NULL,'Tan Sim, Eric Russell C.',NULL,'Eric T. S.','1992-09-19','CS-NE','San Juan','Philippine Institute of Quezon City','Read novels, bug people, ponder on things, and mostly stare at nothingness','The early bird gets the worm, but the second mouse gets the cheese.','The Lord is my shepherd, I shall not be in want. Psalm 23:1\n*I actually like the whole chapter','I have an irrational hatred towards bean sprouts (toge). They look dull, taste dull, everything dull. Blech!\n\nI like rainy days. I feel secluded and warm whenever I stare out the window, only hearing the drops of rain fall to earth. The dark gray sky give','God\'s vessel of light to be shared out to the world. :)','e_russell2004@yahoo.com.au',00000000000,'2013'),(33,10,NULL,'Abad, Dennis Michael',NULL,'Den','1993-04-03','CS-ST','Cavite','Don Bosco Technical Institute - Makati','Football\nBasket ball\nVolley ball\nVideo Games\nPlaying the guitar','There is always a meaning to a failed love','Therefore, if anyone is in Christ, the new creation has come: The old has gone, the new is here!\n\n[2 Corinthians 5:17]','I can rely on my nose if someone I\'m very familiar with is near.\nI sing the \"abc\" backwards. (zyx?)','Home','dennis_abad6@yahoo.com',09266853983,'Term 1 A.Y. 2012-2013'),(34,10,NULL,'Ablaza, Raus Kenneth',NULL,'Ken/Raus','1992-11-07','CS - IST','Cavite','St. Andrew\'s School','- programming (though i\'m not that good at it, nerd -_-)\n- singing (yeah! :D)\n- doing random stuffs @_@','No crying over spilled milk..','So faith, hope, love remain, these three; but the greatest of these is love.\n\n-1 Corinthians 13:13','I am an OC (Obsessive-Compulsive) type of person.','a spice added to my life. :D','rauskenneth07@yahoo.com',09156015506,'Term 3 A.Y. 2012-2013'),(35,10,NULL,'Boñon, Michael Louie',NULL,'Michael','1993-01-15','Bachelor of Science in Computer Science with Specialization in Software Technology','Las Pi?as City','Don Carlo Cavina School','Video Gaming\nSprinting\nUltimate (sport)\nDrawing\nInterested in Chemistry and History\nPhoto Editing\nEating ;)\nListening to music','God deserves our best!','For to me, living means living for Christ, and dying is even better.\n? Philippians 1:21 (NLT)','I mix art with what I do.','FORMDEV is where I can know more about Christ, and make Him known to other people.','michael.bonon@gmail.com',09052309008,'Term 2 A.Y. 2012-2013'),(36,10,NULL,'Del Barrio, Jannah Therese',NULL,'Jannah/Chana','1993-01-22','BS CS-ST','Bacoor, Cavite','Manila Science High School','eating lots of food =P~ \nfacebook-ing :)\n','?\"The uncertainties of the present always give way to the enchanted possibilities of the future\" -Gelsey Kirkland','Isaiah 41:10 \"fear not, for I am with you; be not dismayed, for I am your God; I will strengthen you, I will help you, I will uphold you with my righteous right hand.\"','i don\'t like bananas :P\nnatural yung pagcurl ng eyelashes ko :)','FORMDEV made me realize another side of life: the brighter one with God <3<3<3','jannahdb@gmail.com',09178370122,'Term 1 A.Y. 2012-2013'),(37,10,NULL,'Magdaong, Christian Kay Beltran',NULL,'Tiano','1992-12-16','BS CS-NE','Daraga, Albay','Bicol University-High School','Watching Korean Series\nWatching Anime Series\nReading Manga\nDoing random computer stuff','Don\'t say, \"That\'s the way I am- it\'s my character \". It\'s your lack of character. Esto vir!- Be a man!','1 John 4:19 We love Him because HE first loved us.','Proud Bicolano!!','a new form of rest.','tiano_uragon@yahoo.com',09053347567,'Term 3 A.Y. 2012-2013'),(38,10,NULL,'Musni, Charo Marie ',NULL,'Chai','1993-03-20','BS CS-ST','Tabaco City, Albay','Tabaco National High School','Reading, Writing, Watching Series','Happiness is  a conscious choice, not an automatic response.','Hebrews 11:1 \"Now faith is being sure of what you hope for and  certain of what is unseen.\"','I only learned to eat red meat during my college sophomore year.\nI don\'t have double eye lids.\nI\'m from Bicol but i have never tasted Bicol express in my entire life.','God\'s love manifested in family.','i_am_chai93@yahoo.com.ph',09052309473,'Term 1 A.Y. 2012-2013'),(39,10,NULL,'Villena, Kedren Obinque',NULL,'Ked','1993-01-06','BS-CS-ST','Muntinlupa','Southville International School and Colleges','Playing Computer Games, playing the guitar, sleeping.','Give your best and God will do the rest.','Matthew 6:33\n\"But seek first his kingdom and his righteousness, and all these things will be given to you as well.\"','random :)','a family composed of different people that all responded to God\'s call.','kedren_villena@yahoo.com',09065869247,'2012'),(40,10,NULL,'Yu, Sherie',NULL,'Sherie','1990-06-15','MSCS ST','Philippines','Philippine Cultural College','Reading\nProgramming\nWatching anime\nPlaying piano','Experience is not what happens to you; it is what you do with what happens to you. - Aldous Huxley','I can do all thing through Christ who gives me strength. - Philippians 4:16','I love cheese. \nMy all time favorite anime is Fullmetal Alchemist Brotherhood.\nI don\'t like mayonnaise and the bun of siopao.','Awesome!!','sherie_yu@yahoo.com',09052306184,'Term 3 A.Y. 2011-2012'),(41,10,NULL,'Ang, Karen',NULL,'Karen','1990-09-03','Master of Science in Computer Science (previously Bachelor of Science in Computer Science with Specializations in Software Technology)','QC','Uno High School','watching series, traveling, adventure, art','Smile.:)','Matthew 6-21: For where your treasure is, there your heart will be also.','I like to be an architect.\nI like to travel and also experience snow.\nI like to learn how to play the drums, guitar and piano.\nI want to learn play tennis.\nI have a pet fish.','a place to get to know God more.','karenang0903@yahoo.com',09178988928,'Term 3 A.Y. 2011-2012'),(42,10,NULL,'Aragoncillo, Jose Gian Carlo',NULL,'Carlo','1992-08-09','BS CS-NE','Las Pinas','Don Bosco Technical College - Mandaluyong','Singing, computer games, hanging out with friends, FEAST(praise and worship), reading books/novels','There is no such thing as a problem without a Divine gift hidden within it. You have these problems because you need the gifts they carry within.','John 3:30 \"He must become greater; I must become less.\"','I can sing well only if I\'m singing praise songs. :P I guess God gave me this voice so I could worship Him. :) \n\nI know how to swim but I don\'t want to because of trauma. :|','FORMDEV for me is where I was born again as God\'s child. The FORMDEV community helped me to grow to who I am now. FORMDEV made me realize how everything can be close to perfect when I serve God.','aragoncillocarlo@yahoo.com',09172473038,'Term 3 A.Y. 2012-2013'),(43,10,NULL,'Cantos, Sherlo Yvan Leyco',NULL,'Sherlo','1992-04-07','BS-CSST','Batangas City, Batangas','Saint Bridget College','-Listening to Music\n-Playing the Ukulele\n-Watching Movies\n-Cooking :)\n-Photography\n-Hanging out with friends','\"It is better to have bad breath than no breath at all\"\n-Humans are not perfect, but imperfection should not hinder us in living our life.','There is an appointed time for everything.  And there is a time for every event under heaven. A time to give birth, and a time to die; A time to plant, and a time to uproot what is planted. A time to kill, and a time to heal; A time to tear down, and a time to build up.  A time to weep, and a time to laugh; A time to mourn, and a time to dance.  A time to throw stones, and a time to gather stones; A time to embrace, and a time to shun embracing.  A time to search, and a time to give up as lost; A time to keep, and a time to throw away. A time to tear apart, and a time to sew together; A time to be silent, and a time to speak. A time to love, and a time to hate; A time for war, and a time for peace.','-i like sleeping on the floor\n-i collect shoes.\n-i like plain shirts.','God\'s gift in leading students to the right path.','yvan_cantos@yahoo.com.ph',09064391129,'Term 1 A.Y. 2012-2013 '),(44,10,NULL,'De Jesus, Marion Rafael D.',NULL,'Ion','1991-09-08','BS CS-ST','3 Guilder St. Meralco Village, Taytay, Rizal','La Salle Green Hills','Soccer, Volleyball, piano, games, Fun/Marathon Runs','Live life to the fullest with no regrets','matthew 6: 19-21 ','avid gamer who finds a way to complete a game to 100% as much as possible. willing to accept any challenge in any game','family connected by faith in god and by the teachings of saint la salle. a one big family','mr_dr_dj@yahoo.com',09053407355,'Term 1 A.Y. 2012-2013'),(45,10,NULL,'Dela Cruz, Shannen Rose Bernardo',NULL,'Sheng','1993-07-25','BS CS ST','Manila','Manila Cathedral School','Sketching, Drawing,  Reading Books, Playing Computer Games, Bonding with Friends, Family and Most of all, God','It\'s better to taste the bitterness of education that to taste the hardships of ignorance.','Corinthians 16:14 Do everything with love.','I like girls','FUN! and at the same time it helps my spiritual growth','shannenrose.delacruz@yahoo.com',09052964778,'Term 1 A.Y. 2012-2013'),(46,10,NULL,'Duka, Ivanhur',NULL,'Ivan / Cholo','1992-08-02','BSCS-CSE','Manila','Paco Citizen Academy','reading manga, watching TV series, playing badminton, hanging out in the mall, eating a lot, surfing the net','It\'s gonna be ok in the end. If it\'s not ok, then it\'s not yet the end.','Acts 20:35 \"There is more happiness in giving than in receiving.\"','OC and vain','FORMDEV made me a true servant of God.','vanhur08021992@yahoo.com',09227538401,'2012'),(47,10,NULL,'Garcia, Jann',NULL,'Jann','1992-10-17','BS CS-ST','Puerto Princesa City, Palawan','Palawan Hope Christian School','Badminton, reading, soccer, gaming, chess, biking, and going out.','Let us not live to regret, but live life to the fullest.','John 4:13 ','I\'m random. lol','A home that helps me grow further in spirit. :)','janngg56@yahoo.com',00000000000,'Term 3 A.Y. 2013-2014'),(48,10,NULL,'Iglesia, Kyla',NULL,'Kyla','1992-06-10','Bachelor of Science in Computer Science with Specialization in Software Technology','Paranaque','Assumption College','Drawing, singing, crafts, music (my top two favorite bands: Paramore and Anberlin)','Strive for excellence, not perfection.','For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life. - John 3:16','I prefer eating fruits and veggies than junk food.\nI want to give God a hug, if it were possible.\nI always wanted to learn how to play the guitar, dance, do photography, and learn how to bake.\nSadly, whenever I bake, the cookies I make end up either deadl','A place to grow in God\'s love','kyla_iglesia234@yahoo.com',09158752406,'Term 1 A.Y. 2012-2013'),(49,10,NULL,'Jacinto, Daniel Joseph M.',NULL,'DanJo','1992-06-18','Bachelor of Science degree in Computer Science with Specialization in Software Technology','Bi?an, Laguna','Caritas Don Bosco School','Studying at times,\nWatching Anime, sometimes movies,\nPlaying video games\nPlaying guitar\nFixing stuffs\nCycling around the neighborhood\nAnd many more :D','Those who do nothing make no mistakes. ','Remain united to me and I will remain united to you. A branch cannot bear fruit by itself; it can do only so if it remains in the vine. In the same way you cannot bear fruit unless your remain in me. (John 15:4)\n','I\'m striving in getting better in everything I do','a way to show how God changed our life, actions, and words by His unselfish and amazing love.','jacinto_dj18@yahoo.com',09228219248,'Term 1 A.Y. 2012-2013'),(50,10,NULL,'Lim, Patricia Anne',NULL,'Pat','1992-11-29','BS CS-IST','Muntinlupa City','San Beda College Alabang','Surfing the Net, Reading books, Reading Blogs, Watching TV Series, Playing Flash games','Good things come to those who wait or \"No one can make you feel inferior without your consent\"','Be strong and courageous, do not be terrified, do not be discouraged for the Lord God is with you wherever you go - Joshua 1:9','People usually do not take me seriously because I am very bubbly. I\'m always laughing and I talk like I swallowed a loudspeaker.','God\'s way of making me understand and love Him more :)','tisha1129@yahoo.com',09266337323,'Term 3 A.Y. 2012-2013'),(51,10,NULL,'Ranoa, Michael Regnar J.',NULL,'Reggy','1992-07-16','BS-CS IST','Pasig City','Lourdes School of Mandaluyong','Basketball, Sleeping, Doodle. :)','You can always give without love but you can\'t love without giving.','John 3:16 Luke 1: 3-4','Sabaw, Epal','Spiritual group that will help me a better person. :)','reggy_rulz029@yahoo.com',09163399086,'Term 3 A.Y. 2012-2013'),(52,10,NULL,'Yeung, Mary Czarinelle F.',NULL,'Mary, Czari','1992-04-22','Bachelor of Science in Computer Science with Specializations in Software Technology','Binondo, Manila','Chiang Kai Shek College Manila','Art in general\nplaying the guitar\ndrawing\nreading books\nlistening to music\neating\nsleeping\nplaying volleyball\nblogging\npeople watching','Sing like no one\'s listening, love like you\'ve never been hurt, dance like nobody\'s watching, and live like its heaven on earth. -Mark Twain','For you know that when your faith is tested, your endurance has a chance to grow. -James 1:3\n\nI know the Lord is always with me. I will not be shaken for He is right beside me. -Psalm 16:8\n\nI can do all things through Christ who strengthens me. -Philippians 4:13','I can remember the most random and insignificant events that has happened in my life.\n\nPeople tell me that I look like a cat, an apple, a butchi, and a siopao. I am absolutely confused.','FORMDEV is a haven in the heartless world of CCS. ?','czarinelleyeung@yahoo.com',09229198893,'Term 1 A.Y. 2012-2013'),(53,11,NULL,'Almonguera, Janet',NULL,'Janet','1992-06-03','','','','-','-','-','-','-','jialmonguera@yahoo.com',09165426914,'-'),(54,11,NULL,'Arlanza, Michael Angelo',NULL,'Mikko','1992-03-20','','','','-','-','-','-','-','mikko_arlanza@yahoo.com',00000000000,'-'),(55,11,NULL,'Avecilla, Joshua',NULL,'Joshua','1993-01-13','','','','-','-','-','-','-','josh_lionheart15@yahoo.com.ph',09273052790,'-'),(56,11,NULL,'Cagampan, Bernadyn Reyes',NULL,'Berna','1993-05-02','BS CS-ST','Manila','Manila Science High School','-','-','-','-','-','dyn.reyes@gmail.com',09153228398,'Term 1 A.Y. 2013-2014'),(57,11,NULL,'Cruz, Owen',NULL,'Owen','1993-06-24','','','','-','-','-','-','-','owncruz@gmail.com',09065090621,'SH - Term 1 A.Y. 2011-2012'),(58,11,NULL,'Kua, Edmon',NULL,'Mon','1992-09-30','','','','-','-','-','-','-','edmonkua@yahoo.com.ph',09177396368,'-'),(59,11,NULL,'Lim, Chryzel',NULL,'Chry','1990-07-24','BS CS-ST','Manila','Philadelphia High School','-','-','Matthew 21:22\n\nIf you believe you will receive whatever you ask for in prayer','-','-','chryzel_jane@yahoo.com',00000000000,'Term 1 A.Y. 2012-2013'),(60,11,NULL,'Magpayo, Erika Rhine',NULL,'Erika','1993-06-15','','','','-','-','-','-','-','erikarhine15@gmail.com; erikarhine@yahoo.com.ph',09053232560,'-'),(61,11,NULL,'Mahinay, Joy Luville',NULL,'Joy','1993-11-15','BS CS-NE','','','-','-','-','-','-','luville_mahinay@yahoo.com; nadjame13@yahoo.com',09228776591,'-'),(62,11,NULL,'Uy, Kyrstyn Kaizale',NULL,'Kyrstyn','1993-11-09','','','','-','-','-','-','-','kryzl_chizzle0910@yahoo.com',09278705086,'-'),(63,11,NULL,'Villafuerte, Celine',NULL,'Celine','1993-08-23','','','','-','-','-','-','-','selinnv@yahoo.com; clnvillafuerte@gmail.com',09162944530,'-'),(64,11,NULL,'Villareal, Czarnin Harris',NULL,'Czar','1993-06-23','','','','-','-','-','-','-','czarvill_harris@rocketmail.com',00000000000,'-'),(65,10,NULL,'Aban, Vic Roland',NULL,'Vic','1990-08-17','BS CS-ST','Las Pinas','Elizabeth Seton School','-','-','-','-','-','vic_exo@yahoo.com',09174992793,'Alumni'),(66,11,NULL,'Banogon, Jemalyn',NULL,'Jema','2012-01-19','CS','-','-','-','-','-','-','-','-',00000000000,'-'),(67,11,NULL,'Ching, Raven',NULL,'Raven','2012-01-19','CS','-','-','-','-','-','-','-','-',00000000000,'-'),(68,11,NULL,'Corpuz, Arvin',NULL,'Noy','2012-01-19','CS','-','-','-','-','-','-','-','-',00000000000,'-'),(69,11,NULL,'Eugenio, Patricia Anne',NULL,'Trish','2012-01-19','CS','-','-','-','-','-','-','-','-',00000000000,'-'),(70,11,NULL,'Magat, Dawrin',NULL,'Darwin','2012-01-19','CS','-','-','-','-','-','-','-','-',00000000000,'-'),(71,11,NULL,'Marquez, Eric',NULL,'Eric M.','2012-01-19','CS','-','-','-','-','-','-','-','-',00000000000,'-'),(72,11,NULL,'Panuelos, Kevin',NULL,'Kevin','2012-01-19','CS','-','-','-','-','-','-','-','-',00000000000,'-'),(73,11,NULL,'Paras, Raiza',NULL,'Raiza','2012-01-19','CS','-','-','-','-','-','-','-','-',00000000000,'-'),(74,11,NULL,'Tiu, Mica',NULL,'Mica','2012-01-19','CS','-','-','-','-','-','-','-','-',00000000000,'-'),(75,11,NULL,'Wang, Joyce',NULL,'Joyce','2012-01-19','CS','-','-','-','-','-','-','-','-',00000000000,'-'),(76,11,NULL,'Young, Hazel Anne',NULL,'Hazel','2012-01-19','CS','-','-','-','-','-','-','-','-',00000000000,'-'),(77,1,NULL,'Sison, Raymund',NULL,'Doc','2012-01-19','Phd','-','-','-','-','-','-','-','-',00000000000,'Alumni');
/*!40000 ALTER TABLE `facilitators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_bs_faci`
--

DROP TABLE IF EXISTS `tbl_bs_faci`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_bs_faci` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `faci` int(10) unsigned NOT NULL,
  `bs_group` int(10) unsigned NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'BS Member',
  PRIMARY KEY (`id`),
  KEY `FK_tbl_bs_leader_1` (`faci`),
  KEY `FK_tbl_bs_leader_2` (`bs_group`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_bs_faci`
--

LOCK TABLES `tbl_bs_faci` WRITE;
/*!40000 ALTER TABLE `tbl_bs_faci` DISABLE KEYS */;
INSERT INTO `tbl_bs_faci` VALUES (1,13,1,'BS Leader'),(2,5,1,'BS Member'),(3,11,1,'BS Member'),(4,12,1,'BS Member'),(5,9,2,'BS Leader'),(6,20,2,'BS Member'),(8,22,2,'BS Member'),(9,18,3,'BS Leader'),(10,32,3,'BS Member'),(11,34,3,'BS Member'),(12,35,3,'BS Member'),(13,36,3,'BS Member'),(14,37,3,'BS Member'),(15,39,3,'BS Member'),(16,40,3,'BS Member'),(17,54,3,'BS Member'),(18,33,4,'BS Leader'),(19,44,4,'BS Member'),(20,46,4,'BS Member'),(21,47,4,'BS Member'),(22,49,4,'BS Member'),(23,52,4,'BS Member'),(24,38,5,'BS Leader'),(25,41,5,'BS Member'),(26,43,5,'BS Member'),(27,45,5,'BS Member'),(28,48,5,'BS Member'),(29,51,5,'BS Member'),(30,50,6,'BS Leader'),(31,53,6,'BS Member'),(32,58,6,'BS Member'),(33,61,6,'BS Member'),(34,62,6,'BS Member'),(35,63,6,'BS Member'),(36,42,7,'BS Leader'),(37,55,7,'BS Member'),(38,56,7,'BS Member'),(39,59,7,'BS Member'),(40,60,7,'BS Member'),(41,64,7,'BS Member'),(42,4,8,'BS Leader'),(43,69,8,'BS Member'),(44,70,8,'BS Member'),(45,72,8,'BS Member'),(46,73,8,'BS Member'),(47,75,8,'BS Member'),(48,76,8,'BS Member'),(49,10,9,'BS Leader'),(50,66,9,'BS Member'),(51,67,9,'BS Member'),(52,68,9,'BS Member'),(53,71,9,'BS Member'),(54,74,9,'BS Member'),(55,4,10,'BS Member'),(56,10,10,'BS Member'),(57,9,10,'BS Member'),(59,18,10,'BS Member'),(60,38,10,'BS Member'),(61,33,10,'BS Member'),(62,42,10,'BS Member'),(63,50,10,'BS Member'),(64,5,10,'BS Member'),(65,43,10,'BS Member'),(66,49,10,'BS Member');
/*!40000 ALTER TABLE `tbl_bs_faci` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_committees`
--

DROP TABLE IF EXISTS `tbl_committees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_committees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_committees`
--

LOCK TABLES `tbl_committees` WRITE;
/*!40000 ALTER TABLE `tbl_committees` DISABLE KEYS */;
INSERT INTO `tbl_committees` VALUES (1,'Outreach Committee'),(2,'Communications Committee'),(3,'Instructional Materials Committee'),(4,'Monitoring Committee'),(5,'No Committee'),(6,'BS Leaders');
/*!40000 ALTER TABLE `tbl_committees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workbook`
--

DROP TABLE IF EXISTS `workbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workbook` (
  `idworkbook` int(11) NOT NULL,
  `idstudent` int(11) DEFAULT NULL,
  `ch1` int(11) DEFAULT NULL,
  `ch2` int(11) DEFAULT NULL,
  `ch3` int(11) DEFAULT NULL,
  `ch4` int(11) DEFAULT NULL,
  `ch5` int(11) DEFAULT NULL,
  `ch6` int(11) DEFAULT NULL,
  `ch7` int(11) DEFAULT NULL,
  `ch8` int(11) DEFAULT NULL,
  `finals` int(11) DEFAULT NULL,
  PRIMARY KEY (`idworkbook`),
  KEY `FK_workbook_1` (`idstudent`),
  CONSTRAINT `FK_workbook_1` FOREIGN KEY (`idstudent`) REFERENCES `student` (`idstudent`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workbook`
--

LOCK TABLES `workbook` WRITE;
/*!40000 ALTER TABLE `workbook` DISABLE KEYS */;
/*!40000 ALTER TABLE `workbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_transactions`
--

DROP TABLE IF EXISTS `tbl_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_transactions` (
  `transaction_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_type` varchar(45) NOT NULL,
  `date_requested` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_processed` datetime DEFAULT NULL,
  `report_of_group` varchar(100) DEFAULT NULL,
  `requested_by` int(10) unsigned DEFAULT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'PENDING',
  PRIMARY KEY (`transaction_id`),
  KEY `FK_tbl_transactions_1` (`transaction_type`),
  KEY `FK_tbl_transactions_2` (`requested_by`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_transactions`
--

LOCK TABLES `tbl_transactions` WRITE;
/*!40000 ALTER TABLE `tbl_transactions` DISABLE KEYS */;
INSERT INTO `tbl_transactions` VALUES (2,'ABSR','2012-01-20 16:32:59','2012-01-21 00:32:59','Newbies 2B',10,'Complete'),(3,'ABSR','2012-01-20 16:35:40','2012-01-21 00:35:40','Newbies 2B',10,'Complete'),(4,'ABSR','2012-01-20 16:42:50','2012-01-21 00:42:50','Newbies 2A',4,'Complete'),(5,'ABSR','2012-01-20 16:51:05','2012-01-21 00:51:05','Oldies 2',9,'Complete'),(6,'ACMR','2012-01-20 18:44:25','2012-01-21 02:44:25','Outreach Committee',10,'Complete'),(7,'ACMR','2012-01-20 18:47:03','2012-01-21 02:47:03','Outreach Committee',10,'Complete'),(8,'ABSR','2012-01-21 01:12:45','2012-01-21 09:12:45','Newbies 1A',50,'Complete'),(9,'ACAR','2012-01-21 19:25:58','2012-01-22 03:25:58','S19',36,'Complete'),(10,'ACAR','2012-01-21 19:26:23','2012-01-22 03:26:23','S21',63,'Complete'),(11,'ACAR','2012-01-21 20:19:07','2012-01-22 04:19:07','S19',36,'Complete'),(12,'ACAR','2012-01-21 21:58:02','2012-01-22 05:58:02','S17',59,'Complete'),(13,'ACAR','2012-01-22 01:41:10','2012-01-22 09:41:10','S22',44,'Complete'),(14,'ACAR','2012-01-22 01:41:33','2012-01-22 09:41:33','S22',44,'Complete'),(15,'ACAR','2012-01-22 05:21:27','2012-01-22 13:21:27','S18',48,'Complete'),(16,'ACAR','2012-01-22 05:22:41','2012-01-22 13:22:41','S18',48,'Complete'),(17,'ACMR','2012-01-22 06:48:40','2012-01-22 14:48:40','Intructional Materials Committee',10,'Complete'),(18,'ABSR','2012-01-22 19:06:52','2012-01-23 03:06:52','BS Leaders',10,'Complete'),(19,'ABSR','2012-01-22 19:07:11','2012-01-23 03:07:11','BS Leaders',10,'Complete'),(20,'ACAR','2012-01-22 21:16:36','2012-01-23 05:16:36','S20',34,'Complete'),(21,'ACAR','2012-01-22 21:17:06','2012-01-23 05:17:06','S20',34,'Complete'),(22,'ABSR','2012-01-24 06:20:53','2012-01-24 14:20:53','Oldies 2',9,'Complete'),(23,'ACMR','2012-01-24 20:42:23','2012-01-24 23:41:19','Communications Committee',10,'Completed'),(24,'ACAR','2012-01-25 05:18:10','2012-01-25 08:17:08','S17',59,'Completed'),(25,'ABSR','2012-01-25 07:09:33','2012-01-25 10:08:30','BS Leaders',10,'Completed'),(26,'ABSR','2012-01-25 08:34:57','2012-01-25 11:33:55','Newbies 1A',50,'Completed'),(27,'ABSR','2012-01-27 08:47:16','2012-01-27 11:46:18','Newbies 2B',10,'Completed'),(28,'ABSR','2012-01-29 06:30:50','2012-01-29 09:29:56','Oldies 1',13,'Completed'),(29,'ABSR','2012-01-30 22:55:08','2012-01-31 01:54:17','Middies 1',18,'Completed'),(30,'ABSR','2012-01-30 22:56:07','2012-01-31 01:55:17','Middies 1',18,'Completed'),(31,'ABSR','2012-01-30 22:56:34','2012-01-31 01:55:43','Middies 1',18,'Completed'),(32,'ACAR','2012-01-31 19:24:52','2012-01-31 22:24:03','S22',44,'Completed'),(33,'ABSR','2012-02-01 18:56:58','2012-02-01 21:56:12','BS Leaders',10,'Completed'),(34,'ABSR','2012-02-02 06:00:07','2012-02-02 08:59:21','Newbies 1A',50,'Completed'),(35,'ACAR','2012-02-02 19:48:12','2012-02-02 22:47:27','S18',48,'Completed'),(36,'ACAR','2012-02-02 19:49:59','2012-02-02 22:49:14','S18',48,'Completed'),(37,'ACAR','2012-02-02 19:50:41','2012-02-02 22:49:56','S18',48,'Completed'),(38,'ACAR','2012-02-03 04:15:41','2012-02-03 07:14:57','S21',63,'Completed'),(39,'ACMR','2012-02-04 19:06:43','2012-02-04 22:06:02','Outreach Committee',10,'Completed'),(40,'ACMR','2012-02-04 19:07:06','2012-02-04 22:06:25','Communications Committee',10,'Completed'),(41,'ABSR','2012-02-05 04:52:32','2012-02-05 07:51:52','Middies 2A',33,'Completed'),(42,'ABSR','2012-02-05 04:53:30','2012-02-05 07:52:50','Middies 2A',33,'Completed'),(43,'ABSR','2012-02-05 04:56:00','2012-02-05 07:55:20','Middies 2A',33,'Completed'),(44,'ABSR','2012-02-06 16:12:02','2012-02-06 19:11:26','Newbies 2B',10,'Completed'),(45,'ABSR','2012-02-08 07:53:42','2012-02-08 10:53:08','Newbies 1A',50,'Completed'),(46,'ABSR','2012-02-09 06:10:13','2012-02-09 09:10:51','Middies 2B',38,'Completed'),(47,'ABSR','2012-02-09 06:13:00','2012-02-09 09:13:39','Middies 2B',38,'Completed'),(48,'ABSR','2012-02-09 06:14:01','2012-02-09 09:14:39','Middies 2B',38,'Completed'),(49,'ACAR','2012-02-11 05:50:26','2012-02-11 08:51:09','S18',48,'Completed'),(50,'ABSR','2012-02-11 06:23:01','2012-02-11 09:23:44','Newbies 2B',10,'Completed'),(51,'ABSR','2012-02-14 06:44:06','2012-02-14 09:44:54','Middies 1',18,'Completed'),(52,'ABSR','2012-02-14 06:46:04','2012-02-14 09:46:52','Middies 1',18,'Completed'),(53,'ABSR','2012-02-14 06:53:43','2012-02-14 09:54:32','Newbies 1A',50,'Completed'),(54,'USRP','2012-02-15 06:27:29','2012-02-15 09:28:00',NULL,63,'Completed'),(55,'ACAR','2012-02-15 06:51:56','2012-02-15 09:52:46','S21',63,'Completed'),(56,'ACAR','2012-02-15 06:52:24','2012-02-15 09:53:14','S21',63,'Completed'),(57,'ACAR','2012-02-17 16:58:07','2012-02-17 19:59:02','S22',44,'Completed'),(58,'ACAR','2012-02-17 16:58:38','2012-02-17 19:59:32','S22',44,'Completed'),(59,'ABSR','2012-02-18 20:03:29','2012-02-18 23:04:25','Newbies 2A',4,'Completed'),(60,'ABSR','2012-02-18 20:04:02','2012-02-18 23:04:59','Newbies 2A',4,'Completed'),(61,'ABSR','2012-02-18 20:04:33','2012-02-18 23:05:30','Newbies 2A',4,'Completed'),(62,'ABSR','2012-02-18 20:04:56','2012-02-18 23:05:52','Newbies 2A',4,'Completed'),(63,'USRP','2012-02-18 20:23:35','2012-02-18 23:39:55',NULL,38,'Completed'),(64,'ABSR','2012-02-18 20:41:47','2012-02-18 23:42:43','Middies 2B',38,'Completed'),(65,'ABSR','2012-02-18 21:17:30','2012-02-19 00:18:26','Newbies 2B',10,'Completed'),(66,'ABSR','2012-02-18 21:24:34','2012-02-19 00:25:31','BS Leaders',10,'Completed'),(67,'ACAR','2012-02-19 02:24:54','2012-02-19 05:25:51','S18',48,'Completed'),(68,'USRP','2012-02-20 03:37:22','2012-02-20 08:20:35',NULL,36,'Completed'),(69,'ACAR','2012-02-20 05:22:44','2012-02-20 08:23:43','S19',36,'Completed'),(70,'ACAR','2012-02-20 05:23:18','2012-02-20 08:24:17','S19',36,'Completed'),(71,'ACAR','2012-02-20 05:23:54','2012-02-20 08:24:53','S19',36,'Completed'),(72,'ACAR','2012-02-20 05:24:37','2012-02-20 08:25:36','S19',36,'Completed'),(73,'ACAR','2012-02-20 05:25:04','2012-02-20 08:26:02','S19',36,'Completed'),(74,'ACAR','2012-02-20 07:57:23','2012-02-20 10:58:22','S20',34,'Completed'),(75,'ACAR','2012-02-20 07:58:17','2012-02-20 10:59:16','S20',34,'Completed'),(76,'ACAR','2012-02-20 07:59:23','2012-02-20 11:00:22','S20',34,'Completed'),(77,'ACAR','2012-02-20 08:00:40','2012-02-20 11:01:39','S20',34,'Completed'),(78,'ACAR','2012-02-20 08:02:12','2012-02-20 11:03:11','S20',34,'Completed'),(79,'ACAR','2012-02-20 08:16:01','2012-02-20 11:17:00','S17',59,'Completed'),(80,'ACAR','2012-02-20 08:16:57','2012-02-20 11:17:56','S17',59,'Completed'),(81,'ABSR','2012-02-21 18:06:46','2012-02-21 21:07:47','Newbies 2A',4,'Completed'),(82,'ABSR','2012-02-22 00:12:48','2012-02-22 03:13:49','Middies 2B',38,'Completed'),(83,'ABSR','2012-02-22 00:13:49','2012-02-22 03:14:50','Middies 2B',38,'Completed'),(84,'ACAR','2012-02-22 00:50:49','2012-02-22 03:51:51','S21',63,'Completed'),(85,'ABSR','2012-02-22 01:00:55','2012-02-22 04:01:56','Oldies 2',9,'Completed'),(86,'ABSR','2012-02-22 01:01:46','2012-02-22 04:02:47','Oldies 2',9,'Completed'),(87,'ABSR','2012-02-22 01:02:03','2012-02-22 04:03:05','Oldies 2',9,'Completed'),(88,'ABSR','2012-02-22 01:02:55','2012-02-22 04:03:56','Oldies 2',9,'Completed'),(89,'ABSR','2012-02-22 01:15:15','2012-02-22 04:16:16','Newbies 1B',42,'Completed'),(90,'ABSR','2012-02-22 01:16:27','2012-02-22 04:17:29','Newbies 1B',42,'Completed'),(91,'ABSR','2012-02-22 01:17:08','2012-02-22 04:18:09','Newbies 1B',42,'Completed'),(92,'ABSR','2012-02-22 01:18:18','2012-02-22 04:19:20','Newbies 1B',42,'Completed'),(93,'ABSR','2012-02-22 01:18:59','2012-02-22 04:20:00','Newbies 1B',42,'Completed'),(94,'ABSR','2012-02-22 01:19:27','2012-02-22 04:20:28','Newbies 1B',42,'Completed'),(95,'ACMR','2012-02-22 05:22:51','2012-02-22 08:23:53','Communications Committee',52,'Completed'),(96,'ACMR','2012-02-22 05:24:36','2012-02-22 08:25:38','Communications Committee',52,'Completed'),(97,'ACMR','2012-02-22 05:25:10','2012-02-22 08:26:12','Communications Committee',52,'Completed'),(98,'ACMR','2012-02-22 05:26:18','2012-02-22 08:27:19','Instructional Materials Committee',52,'Completed'),(99,'ACMR','2012-02-22 05:29:22','2012-02-22 08:30:24','Instructional Materials Committee',52,'Completed'),(100,'ACMR','2012-02-22 05:31:36','2012-02-22 08:32:37','Instructional Materials Committee',52,'Completed'),(101,'ACMR','2012-02-22 05:35:45','2012-02-22 08:36:47','Instructional Materials Committee',52,'Completed'),(102,'ACMR','2012-02-22 05:46:54','2012-02-22 08:47:56','Communications Committee',52,'Completed'),(103,'ACMR','2012-02-22 05:56:10','2012-02-22 08:57:11','Instructional Materials Committee',52,'Completed'),(104,'ACMR','2012-02-22 05:57:42','2012-02-22 08:58:44','Instructional Materials Committee',52,'Completed'),(105,'ACAR','2012-02-22 06:01:36','2012-02-22 09:02:38','S17',59,'Completed'),(106,'AOAR','2012-02-22 07:02:33','2012-02-22 10:03:35','2012-01-15',10,'Completed'),(107,'ABSR','2012-03-04 20:24:12','2012-03-05 04:24:12','Oldies 1',10,'Completed'),(108,'ABSR','2012-03-04 21:07:10','2012-03-05 05:07:10','Newbies 1A',61,'Completed'),(109,'ABSR','2012-02-23 03:57:39','2012-02-23 06:58:43','Middies 2A',33,'Completed'),(110,'ABSR','2012-02-23 03:58:12','2012-02-23 06:59:16','Middies 2A',33,'Completed'),(111,'ABSR','2012-02-23 03:58:47','2012-02-23 06:59:51','Middies 2A',33,'Completed'),(112,'ACAR','2012-02-23 07:19:14','2012-02-23 10:20:18','S17',59,'Completed'),(113,'ACAR','2012-02-23 18:41:13','2012-02-23 21:42:18','S18',48,'Completed'),(114,'ACAR','2012-02-23 21:18:41','2012-02-24 00:19:46','S19',36,'Completed'),(115,'AOAR','2012-02-23 23:05:06','2012-02-24 02:06:11','2012-02-01',36,'Completed'),(116,'AOAR','2012-02-23 23:09:37','2012-02-24 02:10:42','2012-01-25',36,'Completed'),(117,'AOAR','2012-02-23 23:15:12','2012-02-24 02:16:17','2012-02-08',36,'Completed'),(118,'AOAR','2012-02-23 23:19:43','2012-02-24 02:20:48','2012-02-15',36,'Completed'),(119,'AOAR','2012-02-23 23:26:01','2012-02-24 02:27:06','2012-02-22',36,'Completed'),(120,'ACMR','2012-02-24 01:53:45','2012-02-24 04:54:50','Communications Committee',52,'Completed'),(121,'ABSR','2012-02-24 03:04:56','2012-02-24 06:06:02','Middies 2B',36,'Completed'),(122,'ABSR','2012-02-24 06:45:17','2012-02-24 09:46:23','Newbies 2B',10,'Completed'),(123,'ABSR','2012-02-25 22:38:21','2012-02-26 01:39:30','Middies 1',18,'Completed'),(124,'ABSR','2012-02-25 22:39:30','2012-02-26 01:40:39','Middies 1',18,'Completed'),(125,'ACAR','2012-02-27 04:40:45','2012-02-27 07:41:56','S21',63,'Completed'),(126,'ACMR','2012-02-27 05:09:06','2012-02-27 08:10:17','Communications Committee',52,'Completed'),(127,'ACMR','2012-02-27 05:13:42','2012-02-27 08:14:53','Communications Committee',52,'Completed'),(128,'USRP','2012-02-29 20:07:48','2012-02-29 23:26:08',NULL,56,'Completed'),(129,'ABSR','2012-02-29 20:09:20','2012-02-29 23:10:36','Newbies 1A',50,'Completed'),(130,'ABSR','2012-02-29 20:19:52','2012-02-29 23:21:08','BS Leaders',10,'Completed'),(131,'ACAR','2012-02-29 22:54:32','2012-03-01 01:55:47','S17',59,'Completed'),(132,'ACMR','2012-03-01 20:11:53','2012-03-01 23:13:10','Communications Committee',52,'Completed'),(133,'ACMR','2012-03-01 20:19:09','2012-03-01 23:20:27','Communications Committee',52,'Completed'),(134,'ACMR','2012-03-01 22:34:32','2012-03-02 01:35:49','Communications Committee',52,'Completed'),(135,'ABSR','2012-03-03 07:22:46','2012-03-03 10:24:06','Middies 2B',38,'Completed'),(136,'ABSR','2012-03-03 21:16:59','2012-03-04 00:18:20','Newbies 2B',10,'Completed'),(137,'ABSR','2012-03-05 05:03:27','2012-03-05 08:04:50','Oldies 1',13,'Completed'),(138,'ABSR','2012-03-06 01:10:19','2012-03-06 04:11:42','Middies 2A',33,'Completed'),(139,'ABSR','2012-03-06 01:37:51','2012-03-06 04:39:15','Middies 2A',33,'Completed'),(140,'ACAR','2012-03-06 04:11:47','2012-03-06 07:13:11','S18',48,'Completed'),(141,'ABSR','2012-03-06 04:32:32','2012-03-06 07:33:56','Middies 1',18,'Completed'),(142,'ACMR','2012-03-06 19:12:10','2012-03-06 22:13:36','Communications Committee',52,'Completed'),(143,'ACMR','2012-03-06 19:13:14','2012-03-06 22:14:40','Instructional Materials Committee',52,'Completed'),(144,'ACAR','2012-03-06 21:18:05','2012-03-07 00:19:31','S21',63,'Completed'),(145,'ABSR','2012-03-07 22:12:17','2012-03-08 01:13:45','Newbies 1A',50,'Completed'),(146,'ACAR','2012-03-08 17:30:01','2012-03-08 20:31:30','S19',36,'Completed'),(147,'ACAR','2012-03-08 17:31:22','2012-03-08 20:32:51','S19',36,'Completed'),(148,'ACAR','2012-03-09 02:25:42','2012-03-09 05:27:12','S18',48,'Completed'),(149,'ABSR','2012-03-09 07:27:58','2012-03-09 10:29:29','Newbies 2B',10,'Completed'),(150,'ABSR','2012-03-10 08:18:02','2012-03-10 11:19:34','BS Leaders',10,'Completed'),(151,'ABSR','2012-03-12 23:30:12','2012-03-13 03:31:48','Middies 1',18,'Completed'),(152,'ABSR','2012-03-13 03:34:15','2012-03-13 07:35:51','Middies 2A',33,'Completed'),(153,'ABSR','2012-03-14 06:14:01','2012-03-14 10:15:39','Newbies 1A',50,'Completed'),(154,'ABSR','2012-03-14 06:40:09','2012-03-14 10:41:47','Middies 2B',38,'Completed'),(155,'ACAR','2012-03-14 06:40:16','2012-03-14 10:41:55','S17',59,'Completed'),(156,'ACAR','2012-03-14 06:41:02','2012-03-14 10:42:40','S17',59,'Completed'),(157,'ABSR','2012-03-17 00:45:00','2012-03-17 04:46:43','Middies 2B',38,'Completed'),(158,'ABSR','2012-03-17 08:26:44','2012-03-17 12:28:26','BS Leaders',10,'Completed'),(159,'ABSR','2012-03-17 08:27:27','2012-03-17 12:29:10','Newbies 2B',10,'Completed'),(161,'ACAR','2012-03-17 15:33:31','2012-03-17 19:35:14','S22',44,'Completed'),(162,'ACAR','2012-03-17 15:34:02','2012-03-17 19:35:45','S22',44,'Completed'),(163,'ACAR','2012-03-17 15:36:15','2012-03-17 19:37:58','S22',44,'Completed'),(164,'ACAR','2012-03-17 15:55:50','2012-03-17 19:57:33','S21',63,'Completed'),(165,'ACAR','2012-03-17 17:13:00','2012-03-17 21:14:43','S20',34,'Completed'),(166,'ACAR','2012-03-17 17:13:31','2012-03-17 21:15:14','S20',34,'Completed'),(167,'ACAR','2012-03-17 17:13:58','2012-03-17 21:15:41','S20',34,'Completed'),(168,'ACAR','2012-03-17 18:26:32','2012-03-17 22:28:15','S19',36,'Completed'),(169,'ACAR','2012-03-17 20:21:55','2012-03-18 00:23:38','S18',48,'Completed');
/*!40000 ALTER TABLE `tbl_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_class_faci`
--

DROP TABLE IF EXISTS `tbl_class_faci`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_class_faci` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `faci` int(10) unsigned NOT NULL,
  `class` int(10) unsigned NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'Group Faci',
  PRIMARY KEY (`id`),
  KEY `FK_tbl_class_faci_1` (`faci`),
  KEY `FK_tbl_class_faci_2` (`class`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_class_faci`
--

LOCK TABLES `tbl_class_faci` WRITE;
/*!40000 ALTER TABLE `tbl_class_faci` DISABLE KEYS */;
INSERT INTO `tbl_class_faci` VALUES (1,42,1,'Class Faci'),(2,59,1,'Class Henchie'),(3,4,1,'Group Faci'),(4,20,1,'Group Faci'),(5,22,1,'Group Faci'),(6,51,1,'Group Faci'),(7,68,1,'Group Faci'),(8,5,2,'Class Faci'),(9,48,2,'Class Henchie'),(10,4,2,'Group Faci'),(11,9,2,'Group Faci'),(12,18,2,'Group Faci'),(13,41,2,'Group Faci'),(14,53,2,'Group Faci'),(15,38,3,'Class Faci'),(16,36,3,'Class Henchie'),(17,33,3,'Group Faci'),(18,39,3,'Group Faci'),(19,46,3,'Group Faci'),(20,47,3,'Group Faci'),(21,54,3,'Group Faci'),(22,55,3,'Group Faci'),(23,70,3,'Group Faci'),(24,69,3,'Group Faci'),(25,43,4,'Class Faci'),(26,34,4,'Class Henchie'),(27,35,4,'Group Faci'),(28,52,4,'Group Faci'),(29,60,4,'Group Faci'),(30,64,4,'Group Faci'),(31,73,4,'Group Faci'),(32,76,4,'Group Faci'),(33,50,5,'Class Faci'),(34,63,5,'Class Henchie'),(35,32,5,'Group Faci'),(36,40,5,'Group Faci'),(37,58,5,'Group Faci'),(38,60,5,'Group Faci'),(39,66,5,'Group Faci'),(40,67,5,'Group Faci'),(41,75,5,'Group Faci'),(42,49,6,'Class Faci'),(43,44,6,'Class Henchie'),(44,10,6,'Group Faci'),(45,37,6,'Group Faci'),(46,56,6,'Group Faci'),(47,61,6,'Group Faci'),(48,62,6,'Group Faci'),(49,71,6,'Group Faci'),(50,72,6,'Group Faci'),(51,74,6,'Group Faci'),(52,14,5,'Group Faci');
/*!40000 ALTER TABLE `tbl_class_faci` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactnumber`
--

DROP TABLE IF EXISTS `contactnumber`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactnumber` (
  `idcontactnumber` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `number` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcontactnumber`),
  KEY `FK_contactnumber_1` (`iduser`),
  CONSTRAINT `FK_contactnumber_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactnumber`
--

LOCK TABLES `contactnumber` WRITE;
/*!40000 ALTER TABLE `contactnumber` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactnumber` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-04-07  0:46:51
CREATE DATABASE  IF NOT EXISTS `formdev_monitoring` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `formdev_monitoring`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: formdev_monitoring
-- ------------------------------------------------------
-- Server version	5.5.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-04-07  0:46:51
