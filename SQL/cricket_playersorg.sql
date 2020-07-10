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
-- Table structure for table `playersorg`
--

DROP TABLE IF EXISTS `playersorg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `playersorg` (
  `Player_Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Country` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Base_Price_Inlakh` int(11) NOT NULL,
  `matches` int(11) NOT NULL,
  `Innings_Played` int(11) NOT NULL,
  `Runs` int(11) NOT NULL,
  `Highest_Score` int(11) NOT NULL,
  `100s` int(11) NOT NULL,
  `50s` int(11) NOT NULL,
  `Bowling_econ` double NOT NULL,
  `Auction_Flag` int(11) NOT NULL DEFAULT '0',
  `Sold_Flag` int(11) NOT NULL DEFAULT '0',
  `Batting_hand` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'right',
  `bowling_style` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Fast',
  `Is_Batsmen` int(11) NOT NULL DEFAULT '1',
  `Is_Bowler` int(11) NOT NULL DEFAULT '1',
  `Team_Id_Fk` int(10) DEFAULT NULL,
  `price` int(11) DEFAULT '30',
  PRIMARY KEY (`Player_Id`),
  KEY `teamplayerforeign_idx` (`Team_Id_Fk`),
  CONSTRAINT `teamplayerforeign` FOREIGN KEY (`Team_Id_Fk`) REFERENCES `team` (`team_id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playersorg`
--

LOCK TABLES `playersorg` WRITE;
/*!40000 ALTER TABLE `playersorg` DISABLE KEYS */;
/*!40000 ALTER TABLE `playersorg` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-04 19:39:59
