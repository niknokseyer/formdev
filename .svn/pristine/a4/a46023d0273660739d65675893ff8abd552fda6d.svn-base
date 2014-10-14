CREATE DATABASE  IF NOT EXISTS `formdev` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `formdev`;
-- MySQL dump 10.13  Distrib 5.1.40, for Win32 (ia32)
--
-- Host: localhost    Database: formdev
-- ------------------------------------------------------
-- Server version	5.5.8

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
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `idprofile` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `batch` varchar(45) DEFAULT NULL,
  `course` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `hometown` varchar(45) DEFAULT NULL,
  `highschool` varchar(45) DEFAULT NULL,
  `verse` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idprofile`),
  KEY `FK_profile_1` (`iduser`),
  CONSTRAINT `FK_profile_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (1,3,'Batch 8A','BS CS ST','1990-04-02','Marikina','Marist School','Cor. 14:13');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcement` (
  `idannouncement` int(11) NOT NULL,
  `iduser` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `message` varchar(45) DEFAULT NULL,
  `datetime` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idannouncement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcement`
--

LOCK TABLES `announcement` WRITE;
/*!40000 ALTER TABLE `announcement` DISABLE KEYS */;
INSERT INTO `announcement` VALUES (1,'1','1','Hello','1');
/*!40000 ALTER TABLE `announcement` ENABLE KEYS */;
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
  `label` varchar(200) DEFAULT NULL,
  `group` varchar(45) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `access` varchar(45) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verse`
--

LOCK TABLES `verse` WRITE;
/*!40000 ALTER TABLE `verse` DISABLE KEYS */;
INSERT INTO `verse` VALUES (1,2,'Romans','1','27','And the men, instead of having normal sexual relations with women, burned with lust for each other. Men did shameful things with other men, and as a result of this sin, they suffered within themselves the penalty they deserved.','2007-08-30 20:55:48'),(2,2,'Romans','12','9','Don’t just pretend to love others. Really love them. Hate what is wrong. Hold tightly to what is good.','2007-08-30 20:55:48'),(3,2,'Romans','12','17','Never pay back evil with more evil. Do things in such a way that everyone can see you are honorable. 18 Do all that you can to live in peace with everyone.','2007-08-30 20:55:48'),(5,2,'Romans','2','18','Do all that you can to live in peace with everyone.','0000-00-00 00:00:00'),(6,2,'John','3','16','For God so loved the world that He gave His only Son that whoever who believes in Him shall not perish but have eternal life.','2011-04-26 04:03:28');
/*!40000 ALTER TABLE `verse` ENABLE KEYS */;
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
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'formdev','41b764d2ad52147c4c7dbd3a8b5afa2b','formdev@gmail.com','FORMDEV','FORMDEV'),(2,'gemiablaza','7d1c0a88bd5e99ca0935989b83276cda','gemi@gemi.co','Gemi','Ablaza'),(3,'niknokseyer','210ec41c67f1dcd7f578c0d0332202cf','niknokseyer@gmail.com','Nikko','Reyes'),(7,'sherie.yu','699990a62334f6867f7cb4bec91ffe30','sherie.yu@gmail.com','Sherie','Yu');
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
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `idrole` varchar(45) NOT NULL,
  `iduser` int(10) NOT NULL,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`idrole`),
  KEY `FK_user_role_1` (`iduser`),
  CONSTRAINT `FK_user_role_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES ('1',2,'2'),('2',2,'6'),('3',3,'3'),('4',3,'a');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-09-06  1:33:38
