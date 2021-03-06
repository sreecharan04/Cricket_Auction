-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: cricket
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `auction_order`
--

DROP TABLE IF EXISTS `auction_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `auction_order` (
  `Bid_amount` int(11) NOT NULL,
  `Owner_Id_Fk` int(10) DEFAULT NULL,
  `Player_Id_Fk` int(10) DEFAULT NULL,
  `Bidding_Id` int(10) NOT NULL AUTO_INCREMENT,
  `datetime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Bidding_Id`),
  KEY `playerhub_idx` (`Player_Id_Fk`),
  KEY `auctionhub_idx` (`Owner_Id_Fk`),
  CONSTRAINT `auctionhub` FOREIGN KEY (`Owner_Id_Fk`) REFERENCES `owners` (`Owner_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `playerhub` FOREIGN KEY (`Player_Id_Fk`) REFERENCES `players` (`player_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auction_order`
--

LOCK TABLES `auction_order` WRITE;
/*!40000 ALTER TABLE `auction_order` DISABLE KEYS */;
INSERT INTO `auction_order` VALUES (110,7,6,209,'2018-11-06 09:00:14'),(120,2,6,210,'2018-11-06 09:00:57'),(130,7,6,211,'2018-11-06 09:01:30'),(60,22,1,212,'2018-11-07 06:30:23'),(70,22,2,213,'2018-11-07 06:30:27'),(110,22,9,214,'2018-11-07 06:30:31'),(50,22,5,215,'2018-11-07 06:30:34'),(40,22,13,216,'2018-11-07 06:30:37'),(40,22,11,217,'2018-11-07 06:30:41'),(40,22,7,218,'2018-11-07 06:30:56'),(110,22,12,219,'2018-11-07 06:31:01'),(50,22,125,220,'2018-11-07 06:31:04'),(110,22,18,221,'2018-11-07 06:31:08'),(40,22,17,222,'2018-11-07 06:31:13');
/*!40000 ALTER TABLE `auction_order` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-04 19:39:56
