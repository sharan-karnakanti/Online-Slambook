-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: slambook
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin'),(2,'sharan','1234');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `finfo`
--

DROP TABLE IF EXISTS `finfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `finfo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adrper` text,
  `adrcur` text,
  `aim` varchar(255) DEFAULT NULL,
  `fcolor` varchar(50) DEFAULT NULL,
  `ffood` varchar(50) DEFAULT NULL,
  `factor` varchar(50) DEFAULT NULL,
  `factress` varchar(50) DEFAULT NULL,
  `fmovie` varchar(50) DEFAULT NULL,
  `fsong` varchar(50) DEFAULT NULL,
  `ourf` text,
  `ftp` varchar(50) DEFAULT NULL,
  `ideal` varchar(50) DEFAULT NULL,
  `aboutme` text,
  `status` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `lastupdated` text,
  `added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `finfo`
--

LOCK TABLES `finfo` WRITE;
/*!40000 ALTER TABLE `finfo` DISABLE KEYS */;
INSERT INTO `finfo` VALUES (1,'Sharan','1234567890','sharan@example.com','Permanent Address 1','Current Address 1','To be a successful person','Blue','Pizza','Actor1','Actress1','Movie1','Song1','Our friendship is valuable.','Photography','Ideal1','About me content 1','Single','1995-01-01',NULL,'2024-07-05 10:01:46'),(2,'Madhu','0987654321','madhu@example.com','Permanent Address 2','Current Address 2','To travel the world','Green','Burger','Actor2','Actress2','Movie2','Song2','Our friendship is like family.','Reading','Ideal2','About me content 2','Married','1996-02-02',NULL,'2024-07-05 10:01:47'),(3,'Dathu','1122334455','dathu@example.com','Permanent Address 3','Current Address 3','To start a business','Red','Sushi','Actor3','Actress3','Movie3','Song3','Our friendship is forever.','Traveling','Ideal3','About me content 3','In a relationship','1997-03-03',NULL,'2024-07-05 10:01:47'),(4,'Manish','6677889900','manish@example.com','Permanent Address 4','Current Address 4','To become a scientist','Yellow','Pasta','Actor4','Actress4','Movie4','Song4','Our friendship is special.','Gaming','Ideal4','About me content 4','Single','1998-04-04',NULL,'2024-07-05 10:01:47'),(5,'Adithya','5566778899','adithya@example.com','Permanent Address 5','Current Address 5','To write a book','Purple','Steak','Actor5','Actress5','Movie5','Song5','Our friendship is inspiring.','Writing','Ideal5','About me content 5','Engaged','1999-05-05',NULL,'2024-07-05 10:01:47'),(6,'pravalika','73t23783',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-07-05 10:51:54'),(7,'snow anna','36478138',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-07-05 11:03:55'),(8,'john','36741',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-07-05 12:32:38'),(9,'lavanya','65378443',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-07-05 12:43:45'),(10,'lavanya','65378443',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2024-07-05 12:46:10');
/*!40000 ALTER TABLE `finfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fname`
--

DROP TABLE IF EXISTS `fname`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fname` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `lkey` varchar(11) NOT NULL,
  `added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fname`
--

LOCK TABLES `fname` WRITE;
/*!40000 ALTER TABLE `fname` DISABLE KEYS */;
INSERT INTO `fname` VALUES (1,'Sharan','1234567890','12345678','2024-07-05 10:19:09'),(2,'Madhu','0987654321','87654321','2024-07-05 10:19:09'),(3,'Dathu','1122334455','23456789','2024-07-05 10:19:09'),(4,'Manish','6677889900','34567890','2024-07-05 10:19:09'),(5,'Adithya','5566778899','45678901','2024-07-05 10:19:09'),(6,'pravalika','73t23783','4040410134','2024-07-05 10:51:54'),(7,'snow anna','36478138','7686816550','2024-07-05 11:03:55'),(8,'john','36741','6755937384','2024-07-05 12:32:38'),(9,'lavanya','65378443','1573623734','2024-07-05 12:43:45'),(10,'lavanya','65378443','3245915927','2024-07-05 12:46:10');
/*!40000 ALTER TABLE `fname` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-05 19:03:42
