-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.51b-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema formdev
--

CREATE DATABASE IF NOT EXISTS formdev;
USE formdev;

--
-- Definition of table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
CREATE TABLE `announcement` (
  `idannouncement` int(11) NOT NULL,
  `iduser` varchar(45) default NULL,
  `role` varchar(45) default NULL,
  `message` varchar(45) default NULL,
  `datetime` varchar(45) default NULL,
  PRIMARY KEY  (`idannouncement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `announcement`
--

/*!40000 ALTER TABLE `announcement` DISABLE KEYS */;
INSERT INTO `announcement` (`idannouncement`,`iduser`,`role`,`message`,`datetime`) VALUES 
 (1,'1','1','Hello','1');
/*!40000 ALTER TABLE `announcement` ENABLE KEYS */;


--
-- Definition of table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE `attendance` (
  `idattendance` int(11) NOT NULL,
  `idstudent` int(11) default NULL,
  `orient` int(11) default NULL,
  `intro` int(11) default NULL,
  `ch1` int(11) default NULL,
  `ch2` int(11) default NULL,
  `ch3` int(11) default NULL,
  `ch4` int(11) default NULL,
  `ch5` int(11) default NULL,
  `ch6` int(11) default NULL,
  `ch7` int(11) default NULL,
  `ch8` int(11) default NULL,
  `brother` int(11) default NULL,
  `outreach` int(11) default NULL,
  `finals` int(11) default NULL,
  PRIMARY KEY  (`idattendance`),
  KEY `FK_attendance_1` (`idstudent`),
  CONSTRAINT `FK_attendance_1` FOREIGN KEY (`idstudent`) REFERENCES `student` (`idstudent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;


--
-- Definition of table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `idclass` int(11) NOT NULL,
  `academicyear` int(11) default NULL,
  `term` int(11) default NULL,
  `section` varchar(45) default NULL,
  PRIMARY KEY  (`idclass`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

/*!40000 ALTER TABLE `class` DISABLE KEYS */;
/*!40000 ALTER TABLE `class` ENABLE KEYS */;


--
-- Definition of table `contactnumber`
--

DROP TABLE IF EXISTS `contactnumber`;
CREATE TABLE `contactnumber` (
  `idcontactnumber` int(11) NOT NULL,
  `iduser` int(11) default NULL,
  `number` varchar(45) default NULL,
  `type` varchar(45) default NULL,
  PRIMARY KEY  (`idcontactnumber`),
  KEY `FK_contactnumber_1` (`iduser`),
  CONSTRAINT `FK_contactnumber_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactnumber`
--

/*!40000 ALTER TABLE `contactnumber` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactnumber` ENABLE KEYS */;


--
-- Definition of table `faciperclass`
--

DROP TABLE IF EXISTS `faciperclass`;
CREATE TABLE `faciperclass` (
  `idfaciperclass` int(11) NOT NULL,
  `iduser` int(11) default NULL,
  `idclass` int(11) default NULL,
  `group` int(11) default NULL,
  PRIMARY KEY  (`idfaciperclass`),
  KEY `FK_faciperclass_1` (`iduser`),
  KEY `FK_faciperclass_2` (`idclass`),
  CONSTRAINT `FK_faciperclass_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_faciperclass_2` FOREIGN KEY (`idclass`) REFERENCES `class` (`idclass`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faciperclass`
--

/*!40000 ALTER TABLE `faciperclass` DISABLE KEYS */;
/*!40000 ALTER TABLE `faciperclass` ENABLE KEYS */;


--
-- Definition of table `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `idfile` int(11) NOT NULL,
  `iduser` int(11) default NULL,
  `label` varchar(200) default NULL,
  `group` varchar(45) default NULL,
  `url` varchar(200) default NULL,
  `datetime` datetime default NULL,
  `access` varchar(45) default NULL,
  PRIMARY KEY  (`idfile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `file`
--

/*!40000 ALTER TABLE `file` DISABLE KEYS */;
/*!40000 ALTER TABLE `file` ENABLE KEYS */;


--
-- Definition of table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `idimages` int(11) NOT NULL,
  `iduser` int(11) default NULL,
  `type` varchar(45) default NULL,
  `url` varchar(45) default NULL,
  PRIMARY KEY  (`idimages`),
  KEY `FK_images_1` (`iduser`),
  CONSTRAINT `FK_images_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;


--
-- Definition of table `previousfaci`
--

DROP TABLE IF EXISTS `previousfaci`;
CREATE TABLE `previousfaci` (
  `idpreviousfaci` int(11) NOT NULL,
  `iduser` int(11) default NULL,
  `idfaci` int(11) default NULL,
  PRIMARY KEY  (`idpreviousfaci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `previousfaci`
--

/*!40000 ALTER TABLE `previousfaci` DISABLE KEYS */;
/*!40000 ALTER TABLE `previousfaci` ENABLE KEYS */;


--
-- Definition of table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `idprofile` int(11) NOT NULL auto_increment,
  `iduser` int(11) NOT NULL,
  `batch` varchar(45) default NULL,
  `course` varchar(45) default NULL,
  `birthdate` date default NULL,
  `hometown` varchar(45) default NULL,
  `highschool` varchar(45) default NULL,
  `verse` varchar(45) default NULL,
  PRIMARY KEY  (`idprofile`),
  KEY `FK_profile_1` (`iduser`),
  CONSTRAINT `FK_profile_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` (`idprofile`,`iduser`,`batch`,`course`,`birthdate`,`hometown`,`highschool`,`verse`) VALUES 
 (1,3,'Batch 8A','BS CS ST','1990-04-02','Marikina','Marist School','Cor. 14:13');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;


--
-- Definition of table `reflection`
--

DROP TABLE IF EXISTS `reflection`;
CREATE TABLE `reflection` (
  `idreflection` int(11) NOT NULL auto_increment,
  `iduser` int(11) default NULL,
  `message` varchar(5000) default NULL,
  `datetime` datetime default NULL,
  `title` varchar(200) default NULL,
  PRIMARY KEY  (`idreflection`),
  KEY `FK_reflection_1` (`iduser`),
  CONSTRAINT `FK_reflection_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reflection`
--

/*!40000 ALTER TABLE `reflection` DISABLE KEYS */;
INSERT INTO `reflection` (`idreflection`,`iduser`,`message`,`datetime`,`title`) VALUES 
 (1,2,'Today marks a very powerful, very significant event in human history. If you’re a Christian, you would know what today is. And yes, I know there are some who aren’t, and who might get turned off by this entry, but I really still wish to share this message with my friends and acquaintances, so please bear with me.\r\n\nThere’s this narrative that I really like to share with people who are interested or who question why I believe in Jesus Christ. It’s not a catch all defense or anything, I just find the narrative really really beautiful, and for me, it answers the question of why I believe in Christ really well. If you don’t mind, I’d like to share that narrative too, or at least the first half of it. I hope this would have an effect on you, reader, even if only a tiny little bit.\r\n\n\r\n\nSee, the story begins with justice and love, but mostly just love.\r\n\n\r\n\nDuring the time of creation, God told Adam and Eve not to partake of the fruit of good or evil, or else they will die (Genesis 3:3). Going against the will of the Father is sin, and this statement in Genesis 3:3 sets the consequence of sin to be death (the Father’s will at that time was only for them not to eat of the fruit, going against that would warrant death). For those who know the continuation if this story, you would know that the consequence was put into effect when Adam and Eve partook of the fruit, after the temptation of the serpent. They were sentenced to die when their time on Earth is up and they were banished from the garden of Eden (and in effect, from the presence of God, as while they were in the garden, they enjoyed God’s presence freely).\r\n\n\r\n\nWhether this story is real or not, the point behind it is that the consequence of sin has been set to death, and not the physical kind of death, but the spiritual. Spiritual death means eternal separation from God (which, if you recall, happened to Adam and Eve when they were banished from the garden). Thus we see a demonstration of God being just to His word, and a precedent of sin being been set.\r\n\n\r\n\nNow, we are all sinners; at one point in time, we have committed a sin, big or small. God and sin cannot co-exist together though (since God is all-good) , so it follows that we must be separated from God, and are doomed to be so. But you know what? God, in His infinite love, still wanted us to be with Him, even if we were sinners. He wanted us to enjoy His presence, to enjoy a life with Him that is devoid of sadness and pain. He could’ve easily thrown us away, with no way for redemption. He is God after all, the creator of everything. But still, He loved us so much that He wanted us to be with Him. God wanted us to be reconciled once again with Him and to enjoy His loving presence.\r\n\n\r\n\nBut what was God to do? He already said that the consequence of sin is death (a spiritual kind of death, which means eternal separation from Him, not just physical death). And since He is just, He has to follow the rule that He set. So what now?\r\n\n\r\n\nWell, He made a way. And in doing so, He displayed His magnificent love for all of us.\r\n\n\r\n\nHe had His Son, who was one with Him, turn into a fashion of one like us. He had His Son take on the form of a sinner like us, frail and weak. He entered into human history; an unprecedented move of One who is beyond history. And when His time had come, He took His Son and had Him sacrificed. He carried a cross He didn’t have to carry, led to Calvary where He was to be crucified; an ordeal He didn’t have to go through. And on the sixth hour, with long thick nails affixing Him to the cross (a pain so severe, they had to invent the word “excruciating” just to define it), battered and broken, weak and humiliated, He breathed His last. The God of all creation, humiliated in front of sinful man, willingly dying in their hands for everyone to see.\r\n\n\r\n\nAnd as He underwent all this, He took on all our sins, and He died with them. He did this to pay for the penalty of sin, the penalty of all our sins. He did this so we, the undeserving sinner, would not have to suffer the penalty of sin. He suffered the consequences of our sin for us, dying and disconnecting Himself from the Father in our steed. In doing so He became the perfect sacrifice.\r\n\n\r\n\nAnd in doing so, He made a way. A way back to God. A way to be reconnected once again with God. A way to be with God once again. He didn’t have to do this, but he did so because He loved us so much.\r\n\n\r\n\nSo today, on Good Friday, let us remember this wonderful sacrifice He made on the cross. Let us take time from our busy schedules to thank Him for and to remember what He did for us on this day. And let us eagerly await His return, when He comes full circle, on Easter, when He demonstrated His glorious triumph over death, granting us access to eternal life with Him and the Father.\r\n\n\r\n\nAmen.','2007-08-30 20:55:48','Good Friday'),
 (2,2,'test','2007-08-30 20:55:48','test');
/*!40000 ALTER TABLE `reflection` ENABLE KEYS */;


--
-- Definition of table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `idrole` varchar(45) NOT NULL,
  `iduser` int(10) NOT NULL,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY  (`idrole`),
  KEY `FK_user_role_1` (`iduser`),
  CONSTRAINT `FK_user_role_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`idrole`,`iduser`,`role`) VALUES 
 ('1',2,'2'),
 ('2',2,'6'),
 ('3',3,'3'),
 ('4',3,'a');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;


--
-- Definition of table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL default '0',
  `ip_address` varchar(16) NOT NULL default '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text NOT NULL,
  PRIMARY KEY  (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`) VALUES 
 ('839c6d41def995b667503277ca73b651','127.0.0.1','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53',1316607890,'a:6:{s:6:\"iduser\";s:1:\"1\";s:8:\"username\";s:7:\"formdev\";s:9:\"firstname\";s:7:\"FORMDEV\";s:8:\"lastname\";s:7:\"FORMDEV\";s:17:\"upload_permission\";b:1;s:12:\"is_logged_in\";b:1;}');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;


--
-- Definition of table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `idstudent` int(11) NOT NULL,
  `firstname` varchar(45) default NULL,
  `lastname` varchar(45) default NULL,
  `group` int(11) default NULL,
  `gender` varchar(45) default NULL,
  `finalgrade` varchar(45) default NULL,
  `idClass` int(11) NOT NULL,
  PRIMARY KEY  (`idstudent`,`idClass`),
  KEY `FK_student_1` (`idClass`),
  CONSTRAINT `FK_student_1` FOREIGN KEY (`idClass`) REFERENCES `class` (`idclass`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;


--
-- Definition of table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `iduser` int(11) NOT NULL auto_increment,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  PRIMARY KEY  (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`iduser`,`username`,`password`,`email`,`firstname`,`lastname`) VALUES 
 (1,'formdev','41b764d2ad52147c4c7dbd3a8b5afa2b','formdev@gmail.com','FORMDEV','FORMDEV'),
 (2,'gemiablaza','7d1c0a88bd5e99ca0935989b83276cda','gemi@gemi.co','Gemi','Ablaza'),
 (3,'niknokseyer','210ec41c67f1dcd7f578c0d0332202cf','niknokseyer@gmail.com','Nikko','Reyes'),
 (7,'sherie.yu','699990a62334f6867f7cb4bec91ffe30','sherie.yu@gmail.com','Sherie','Yu');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;


--
-- Definition of table `verse`
--

DROP TABLE IF EXISTS `verse`;
CREATE TABLE `verse` (
  `idverse` int(11) NOT NULL auto_increment,
  `iduser` int(11) default NULL,
  `book` varchar(45) default NULL,
  `chapter` varchar(45) default NULL,
  `verse` varchar(45) default NULL,
  `text` varchar(500) default NULL,
  `datetime` datetime default NULL,
  `faciapp` varchar(45) default NULL,
  `reflection` varchar(45) default NULL,
  PRIMARY KEY  (`idverse`),
  KEY `FK_verse_1` (`iduser`),
  CONSTRAINT `FK_verse_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `verse`
--

/*!40000 ALTER TABLE `verse` DISABLE KEYS */;
INSERT INTO `verse` (`idverse`,`iduser`,`book`,`chapter`,`verse`,`text`,`datetime`,`faciapp`,`reflection`) VALUES 
 (1,2,'Romans','1','27','And the men, instead of having normal sexual relations with women, burned with lust for each other. Men did shameful things with other men, and as a result of this sin, they suffered within themselves the penalty they deserved.','2007-08-30 20:55:48',NULL,''),
 (2,2,'Romans','12','9','Don’t just pretend to love others. Really love them. Hate what is wrong. Hold tightly to what is good.','2007-08-30 20:55:48',NULL,''),
 (3,2,'Romans','12','17','Never pay back evil with more evil. Do things in such a way that everyone can see you are honorable. 18 Do all that you can to live in peace with everyone.','2007-08-30 20:55:48',NULL,''),
 (5,2,'Romans','2','18','Do all that you can to live in peace with everyone.','0000-00-00 00:00:00',NULL,''),
 (6,2,'John','3','16','For God so loved the world that He gave His only Son that whoever who believes in Him shall not perish but have eternal life.','2011-04-26 04:03:28',NULL,'');
/*!40000 ALTER TABLE `verse` ENABLE KEYS */;


--
-- Definition of table `verse_app`
--

DROP TABLE IF EXISTS `verse_app`;
CREATE TABLE `verse_app` (
  `idverseapp` int(10) unsigned NOT NULL auto_increment,
  `idverse` int(10) unsigned NOT NULL,
  `application` varchar(45) NOT NULL,
  PRIMARY KEY  (`idverseapp`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verse_app`
--

/*!40000 ALTER TABLE `verse_app` DISABLE KEYS */;
INSERT INTO `verse_app` (`idverseapp`,`idverse`,`application`) VALUES 
 (1,1,'this is the past verse of the week.'),
 (2,6,'this is the current verse of the week.');
/*!40000 ALTER TABLE `verse_app` ENABLE KEYS */;


--
-- Definition of table `workbook`
--

DROP TABLE IF EXISTS `workbook`;
CREATE TABLE `workbook` (
  `idworkbook` int(11) NOT NULL,
  `idstudent` int(11) default NULL,
  `ch1` int(11) default NULL,
  `ch2` int(11) default NULL,
  `ch3` int(11) default NULL,
  `ch4` int(11) default NULL,
  `ch5` int(11) default NULL,
  `ch6` int(11) default NULL,
  `ch7` int(11) default NULL,
  `ch8` int(11) default NULL,
  `finals` int(11) default NULL,
  PRIMARY KEY  (`idworkbook`),
  KEY `FK_workbook_1` (`idstudent`),
  CONSTRAINT `FK_workbook_1` FOREIGN KEY (`idstudent`) REFERENCES `student` (`idstudent`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workbook`
--

/*!40000 ALTER TABLE `workbook` DISABLE KEYS */;
/*!40000 ALTER TABLE `workbook` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
