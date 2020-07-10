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
-- Table structure for table `auction_hub`
--

DROP TABLE IF EXISTS `auction_hub`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `auction_hub` (
  `Current_Highest_Bid_Inlakh` int(11) NOT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `Bidding_id` int(10) NOT NULL AUTO_INCREMENT,
  `Owner_Id_Fk` int(10) DEFAULT NULL,
  `Player_Id_Fk` int(10) DEFAULT NULL,
  PRIMARY KEY (`Bidding_id`),
  UNIQUE KEY `Bidding_id` (`Bidding_id`),
  KEY `playerhub_idx` (`Player_Id_Fk`),
  KEY `ownerhub_idx` (`Owner_Id_Fk`),
  CONSTRAINT `hubowner` FOREIGN KEY (`Owner_Id_Fk`) REFERENCES `owners` (`Owner_id`),
  CONSTRAINT `hubplayer` FOREIGN KEY (`Player_Id_Fk`) REFERENCES `playersorg` (`player_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auction_hub`
--

LOCK TABLES `auction_hub` WRITE;
/*!40000 ALTER TABLE `auction_hub` DISABLE KEYS */;
/*!40000 ALTER TABLE `auction_hub` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-04 19:39:55
