-- MySQL dump 10.13  Distrib 5.5.9, for Win32 (x86)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	5.1.41

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
-- Current Database: `mydb`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `mydb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mydb`;

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcement` (
  `idannouncement` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `message` varchar(45) DEFAULT NULL,
  `datetime` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idannouncement`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcement`
--

LOCK TABLES `announcement` WRITE;
/*!40000 ALTER TABLE `announcement` DISABLE KEYS */;
INSERT INTO `announcement` VALUES (1,'2','2',NULL,'2011-05-24 12:41:38');
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
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `idfile` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `restriction` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idfile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
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
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `idprofile` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `batch` varchar(45) DEFAULT NULL,
  `course` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `hometown` varchar(45) DEFAULT NULL,
  `highschool` varchar(45) DEFAULT NULL,
  `verse` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idprofile`),
  KEY `FK_profile_1` (`iduser`),
  CONSTRAINT `FK_profile_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reflection`
--

LOCK TABLES `reflection` WRITE;
/*!40000 ALTER TABLE `reflection` DISABLE KEYS */;
INSERT INTO `reflection` VALUES (14,2,'post<br />\r\n<br />\n\r<br />\n<br />\nhaha',NULL,'post'),(15,2,'<p>hello</p>',NULL,'haha'),(16,2,'<p>1</p>\n\n<p>2</p>',NULL,'hehe'),(17,2,'<p>gemi</p>\n\n\n\n<p>gemi</p>',NULL,'gemi'),(18,2,'<p>FORMDEV is a special program and community of volunteer faculty, staff, alumni, and students of the College of Computer Studies (CCS) of De La Salle University (DLSU). The mission of FORMDEV is to proclaim and demonstrate the Lasallian and Gospel values of faith, zeal, and love, especially for one’s community and for the poor.</p>\n\n\n\n<p>In 2000, a group of CCS professors and students began meeting weekly to study the life of St. La Salle, believing that this would inspire them to be more Christ-like and more concerned about the plight of the poor. In 2001, when they finished studying Br. Luke Salm’s biography of St. La Salle, The Work is Yours, the student members of the group unanimously felt that all CCS students should go through the same experience that they went through of getting to know Christ, St. La Salle, themselves, and other members of the CCS community more deeply. Thus, FORMDEV was born, and a 0.5-unit course, also called FORMDEV, was offered to CCS students in 2002. By God’s grace, FORMDEV (the program, community, and course) continue to exist to this day.</p>\n\n<p>&nbsp;</p>\n\n<p>If you would like to know more about FORMDEV, we invite you to read the FORMDEV Handbook (which can be downloaded here). It tells the story of FORMDEV, explains the Lasallian values that FORMDEV focuses on, specifies the duties of FORMDEV facis, and lists all the facis of FORMDEV, past and present.</p>',NULL,'formdev'),(19,2,'<p>gemi</p>\n\n\n\n<p>haha</p>',NULL,'gemi');
/*!40000 ALTER TABLE `reflection` ENABLE KEYS */;
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
  PRIMARY KEY (`idstudent`,`idClass`) USING BTREE,
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
-- Table structure for table `subtable_user_role`
--

DROP TABLE IF EXISTS `subtable_user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subtable_user_role` (
  `userId` int(10) NOT NULL,
  `role` varchar(200) NOT NULL,
  KEY `FK_user_role_1` (`userId`),
  CONSTRAINT `FK_user_role_1` FOREIGN KEY (`userId`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subtable_user_role`
--

LOCK TABLES `subtable_user_role` WRITE;
/*!40000 ALTER TABLE `subtable_user_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `subtable_user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'gemiablaza','gemi','gemi@gemi.co','gemi','gemi','1');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
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
  `message` varchar(500) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`idverse`),
  KEY `FK_verse_1` (`iduser`),
  CONSTRAINT `FK_verse_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verse`
--

LOCK TABLES `verse` WRITE;
/*!40000 ALTER TABLE `verse` DISABLE KEYS */;
INSERT INTO `verse` VALUES (2,2,'Luke','12','9','Dont just pretend to love others. Really love them. Hate what is wrong. Hold tightly to what is good.','2007-08-30 20:55:48'),(3,2,'Romans','12','17','Never pay back evil with more evil. Do things in such a way that everyone can see you are honorable. 18 Do all that you can to live in peace with everyone.','2007-08-30 20:55:48'),(5,2,'Romans','2','18','Do all that you can to live in peace with everyone.','0000-00-00 00:00:00'),(6,2,'John','3','16','For God so loved the world that He gave His only Son that whoever who believes in Him shall not perish but have eternal life.','2011-04-26 04:03:28'),(17,2,'Romans','1','27','And the men, instead of having normal sexual relations with women, burned with lust for each other. Men did shameful things with other men, and as a result of this sin, they suffered within themselves the penalty they deserved','2011-05-01 12:13:25');
/*!40000 ALTER TABLE `verse` ENABLE KEYS */;
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-05-24 20:45:42
