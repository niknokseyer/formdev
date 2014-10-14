SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `formdev` ;
CREATE SCHEMA IF NOT EXISTS `formdev` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `formdev` ;

-- -----------------------------------------------------
-- Table `formdev`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`user` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`user` (
  `iduser` INT NOT NULL ,
  `username` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `firstname` VARCHAR(45) NULL ,
  `lastname` VARCHAR(45) NULL ,
  `type` VARCHAR(45) NULL ,
  PRIMARY KEY (`iduser`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `formdev`.`previousfaci`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`previousfaci` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`previousfaci` (
  `idpreviousfaci` INT NOT NULL ,
  `iduser` INT NULL ,
  `idfaci` INT NULL ,
  PRIMARY KEY (`idpreviousfaci`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `formdev`.`contactnumber`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`contactnumber` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`contactnumber` (
  `idcontactnumber` INT NOT NULL ,
  `iduser` INT NULL ,
  `number` VARCHAR(45) NULL ,
  `type` VARCHAR(45) NULL ,
  PRIMARY KEY (`idcontactnumber`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `formdev`.`file`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`file` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`file` (
  `idfile` INT NOT NULL ,
  `iduser` INT NULL ,
  `type` VARCHAR(45) NULL ,
  `url` VARCHAR(45) NULL ,
  `datetime` DATETIME NULL ,
  `restriction` VARCHAR(45) NULL ,
  PRIMARY KEY (`idfile`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `formdev`.`verse`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`verse` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`verse` (
  `idverse` INT NOT NULL ,
  `iduser` INT NULL ,
  `book` VARCHAR(45) NULL ,
  `chapter` VARCHAR(45) NULL ,
  `verse` VARCHAR(45) NULL ,
  `message` VARCHAR(45) NULL ,
  `datetime` DATETIME NULL ,
  PRIMARY KEY (`idverse`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `formdev`.`announcement`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`announcement` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`announcement` (
  `idannouncement` INT NOT NULL ,
  `iduser` VARCHAR(45) NULL ,
  `type` VARCHAR(45) NULL ,
  `message` VARCHAR(45) NULL ,
  `datetime` VARCHAR(45) NULL ,
  PRIMARY KEY (`idannouncement`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `formdev`.`reflection`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`reflection` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`reflection` (
  `idreflection` INT NOT NULL ,
  `iduser` INT NULL ,
  `message` VARCHAR(45) NULL ,
  `datetime` DATETIME NULL ,
  PRIMARY KEY (`idreflection`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `formdev`.`profile`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`profile` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`profile` (
  `idprofile` INT NOT NULL ,
  `iduser` VARCHAR(45) NULL ,
  `batch` VARCHAR(45) NULL ,
  `course` VARCHAR(45) NULL ,
  `birthdate` DATE NULL ,
  `hometown` VARCHAR(45) NULL ,
  `highschool` VARCHAR(45) NULL ,
  `verse` VARCHAR(45) NULL ,
  PRIMARY KEY (`idprofile`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `formdev`.`class`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`class` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`class` (
  `idclass` INT NOT NULL ,
  `academicyear` INT NULL ,
  `term` INT NULL ,
  `section` VARCHAR(45) NULL ,
  PRIMARY KEY (`idclass`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `formdev`.`faciperclass`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`faciperclass` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`faciperclass` (
  `idfaciperclass` INT NOT NULL ,
  `iduser` INT NULL ,
  `idclass` INT NULL ,
  `group` INT NULL ,
  PRIMARY KEY (`idfaciperclass`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `formdev`.`student`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`student` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`student` (
  `idstudent` INT NOT NULL ,
  `firstname` VARCHAR(45) NULL ,
  `lastname` VARCHAR(45) NULL ,
  `group` INT NULL ,
  `gender` VARCHAR(45) NULL ,
  `finalgrade` VARCHAR(45) NULL ,
  PRIMARY KEY (`idstudent`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `formdev`.`attendance`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`attendance` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`attendance` (
  `idattendance` INT NOT NULL ,
  `idstudent` INT NULL ,
  `orient` INT NULL ,
  `intro` INT NULL ,
  `ch1` INT NULL ,
  `ch2` INT NULL ,
  `ch3` INT NULL ,
  `ch4` INT NULL ,
  `ch5` INT NULL ,
  `ch6` INT NULL ,
  `ch7` INT NULL ,
  `ch8` INT NULL ,
  `brother` INT NULL ,
  `outreach` INT NULL ,
  `finals` INT NULL ,
  PRIMARY KEY (`idattendance`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `formdev`.`workbook`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`workbook` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`workbook` (
  `idworkbook` INT NOT NULL ,
  `idstudent` INT NULL ,
  `ch1` INT NULL ,
  `ch2` INT NULL ,
  `ch3` INT NULL ,
  `ch4` INT NULL ,
  `ch5` INT NULL ,
  `ch6` INT NULL ,
  `ch7` INT NULL ,
  `ch8` INT NULL ,
  `finals` INT NULL ,
  PRIMARY KEY (`idworkbook`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `formdev`.`images`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `formdev`.`images` ;

CREATE  TABLE IF NOT EXISTS `formdev`.`images` (
  `idimages` INT NOT NULL ,
  `iduser` INT NULL ,
  `type` VARCHAR(45) NULL ,
  `url` VARCHAR(45) NULL ,
  PRIMARY KEY (`idimages`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
