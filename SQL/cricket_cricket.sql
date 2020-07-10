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
-- Table structure for table `cricket`
--

DROP TABLE IF EXISTS `cricket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cricket` (
  `Player_Id` int(11) DEFAULT NULL,
  `Name` text,
  `Team` text,
  `Team_Id` text,
  `Base_Price_Inlakh` int(11) DEFAULT NULL,
  `matches` int(11) DEFAULT NULL,
  `Innings_Played` int(11) DEFAULT NULL,
  `Runs` int(11) DEFAULT NULL,
  `Highest_Score` int(11) DEFAULT NULL,
  `100s` int(11) DEFAULT NULL,
  `50s` int(11) DEFAULT NULL,
  `Bowling econ` double DEFAULT NULL,
  `Auction_Flag` int(11) DEFAULT NULL,
  `Sold_Flag` int(11) DEFAULT NULL,
  `bowling_Style` text,
  `Is_Batsmen` int(11) DEFAULT NULL,
  `Is-Bowler` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cricket`
--

LOCK TABLES `cricket` WRITE;
/*!40000 ALTER TABLE `cricket` DISABLE KEYS */;
INSERT INTO `cricket` VALUES (1,'Aiden Blizzard','Australia','NULL',30,40,40,817,89,0,2,10,0,0,'Medium',1,0),(2,'Jonathan Vandiar','South Africa','NULL',30,40,18,356,71,0,3,0,0,0,'Medium',1,0),(3,'Nathan Rimmington','Australia','NULL',30,23,8,33,24,0,0,7.24,0,0,'Fast',0,1),(4,'Rilee Rossouw','South Africa','NULL',30,20,20,343,65,0,1,0,0,0,'Medium',1,0),(5,'Robert Frylinck','South Africa','NULL',30,25,22,213,32,0,0,7.5,0,0,'Fast',0,1),(6,'Travis Birt','Australia','NULL',30,45,43,820,58,0,2,0,0,0,'Spin',1,0),(7,'George Bailey','Australia','NULL',30,32,28,714,60,0,5,12,0,0,'Spin',1,0),(8,'Johan van der Wath','South Africa','NULL',30,78,57,672,48,0,0,7.65,0,0,'Spin',1,1),(9,'Luke Pomersbasch','Australia','NULL',30,35,33,623,79,0,2,0,0,0,'Medium',1,0),(10,'Moises Henriques','Australia','NULL',30,40,35,549,51,0,1,8.5,0,0,'Medium',1,1),(11,'Roelof van der Merwe','South Africa','NULL',30,59,41,721,89,0,5,7.2,0,0,'Spin',1,1),(12,'Michael Klinger','Australia','NULL',30,30,29,690,78,0,4,0,0,0,'Medium',1,0),(13,'Andrew McDonald','Australia','NULL',30,62,55,1267,96,0,8,7.73,0,0,'Spin',1,1),(14,'Michael Lumb','England','NULL',30,103,103,2161,124,1,12,10.83,0,0,'Medium',1,0),(15,'Suraj Randiv','Sri Lanka','NULL',30,29,8,43,20,0,0,7.18,0,0,'Spin',0,1),(16,'Thisara Perera','Sri Lanka','NULL',30,40,30,209,24,0,0,7.34,0,0,'Fast',0,1),(17,'Rusty Theron','South Africa','NULL',30,50,18,71,24,0,0,6.99,0,0,'Fast',0,1),(18,'Alfonso Thomas','South Africa','NULL',30,104,33,173,30,0,0,7.26,0,0,'Fast',0,1),(19,'Ben Hilfenhaus','Australia','NULL',30,21,9,28,7,0,0,7.09,0,0,'Fast',0,1),(20,'Colin Ingram','South Africa','NULL',30,32,31,686,84,0,4,0,0,0,'Medium',1,0),(21,'Dimitri Mascarenhas','England','NULL',30,81,71,1045,57,0,3,7.02,0,0,'Spin',1,1),(22,'James Franklin','New Zealand','NULL',30,72,64,1531,90,0,6,8.22,0,0,'Fast',1,1),(23,'Jerome Taylor','West Indies','NULL',30,35,15,70,16,0,0,7.51,0,0,'Medium',0,1),(24,'Matthew Wade','Australia','NULL',30,27,22,349,80,0,2,0,0,0,'Fast',1,0),(25,'Nathan McCullum','New Zealand','NULL',30,73,59,989,76,0,3,6.97,0,0,'Spin',1,1),(26,'Nuwan Kulasekara','Sri Lanka','NULL',30,31,22,155,30,0,0,7.67,0,0,'Fast',0,1),(27,'Wriddhiman Saha','India','NULL',30,56,43,747,85,0,3,0,0,0,'Medium',1,0),(28,'Clint McKay','Australia','NULL',30,31,16,122,21,0,0,8.25,0,0,'Spin',0,1),(29,'Faf du Plessis','South Africa','NULL',30,43,38,692,78,0,3,7.11,0,0,'Medium',1,1),(30,'Manan Vohra','India','NULL',30,45,38,676,68,0,4,0,0,0,'Medium',1,0),(31,'Charl Langeveldt','South Africa','NULL',30,83,18,64,13,0,0,7.23,0,0,'Spin',0,1),(32,'Jesse Ryder','New Zealand','NULL',30,52,51,1088,86,0,8,8.06,0,0,'Spin',1,0),(33,'Joginder Sharma','India','NULL',30,41,22,224,35,0,0,8.05,0,0,'Spin',0,1),(34,'Ryan ten Doeschate','Netherlands','NULL',30,107,93,1843,102,1,4,7.97,0,0,'Fast',1,1),(35,'Wayne Parnell','South Africa','NULL',30,42,16,101,16,0,0,7.05,0,0,'Medium',0,1),(36,'Davy Jacobs','South Africa','NULL',30,61,58,1313,74,0,6,14,0,0,'Spin',1,0),(37,'Dwayne Bravo','West Indies','NULL',30,87,72,1317,70,0,8,8.23,0,0,'Spin',1,1),(38,'Owais Shah','England','NULL',30,115,109,2842,80,0,15,8.11,0,0,'Medium',1,0),(39,'Scott Styris','New Zealand','NULL',30,120,112,2481,106,1,9,7.53,0,0,'Fast',1,1),(40,'Steven Smith','Australia','NULL',30,41,32,417,35,0,0,7.41,0,0,'Spin',1,1),(41,'Ajit Agarkar','India','NULL',30,48,27,229,39,0,0,8.3,0,0,'Medium',0,1),(42,'Sudeep Tyagi','India','NULL',30,14,2,2,2,0,0,7.44,0,0,'Medium',0,1),(43,'Jaidev Unadkat','India','NULL',30,14,2,2,2,0,0,7.44,0,0,'Fast',0,1),(44,'Paul Collingwood','England','NULL',30,67,58,973,79,0,6,7.06,0,0,'Spin',1,1),(45,'Naman Ojha','India','NULL',30,53,53,1016,94,0,5,0,0,0,'Medium',1,0),(46,'Tim Paine','Australia','NULL',30,26,22,379,71,0,2,0,0,0,'Fast',1,0),(47,'Manpreet Gony','India','NULL',30,39,18,152,34,0,0,7.75,0,0,'Spin',0,1),(48,'Parthiv Patel','India','NULL',30,58,56,1028,57,0,4,0,0,0,'Medium',1,0),(49,'Aaron Finch','Australia','NULL',30,30,27,824,93,0,6,5.68,0,0,'Fast',1,0),(50,'Amit Mishra','India','NULL',30,67,39,402,49,0,0,6.81,0,0,'Spin',1,1),(51,'Callum Ferguson','Australia','NULL',30,34,31,566,71,0,3,0,0,0,'Medium',1,0),(52,'JP Duminy','South Africa','NULL',30,100,96,2415,99,0,16,7.56,0,0,'Fast',1,1),(53,'Shaun Tait','Australia','NULL',30,62,20,87,14,0,0,7.67,0,0,'Fast',0,1),(54,'Shikhar Dhawan','India','NULL',30,59,58,1411,95,0,10,5.5,0,0,'Medium',1,0),(55,'Brad Haddin','Australia','NULL',30,36,34,576,54,0,2,0,0,0,'Spin',1,0),(56,'Ryan Harris','Australia','NULL',30,51,29,179,31,0,0,7.47,0,0,'Fast',0,1),(57,'Eoin Morgan','England','NULL',30,79,72,1584,85,0,7,0,0,0,'Medium',1,0),(58,'James Hopes','Australia','NULL',30,60,52,1151,71,0,10,8.44,0,0,'Spin',1,1),(59,'Ashok Dinda','India','NULL',30,50,11,25,19,0,0,6.94,0,0,'Fast',0,1),(60,'Brett Lee','Australia','NULL',30,55,29,235,48,0,0,7.19,0,0,'Medium',0,1),(61,'Murali Kartik','India','NULL',30,97,28,223,28,0,0,6.65,0,0,'Spin',0,1),(62,'Shaun Marsh','Australia','NULL',30,56,55,2135,115,2,16,6.5,0,0,'Fast',1,0),(63,'Stuart Broad','England','NULL',30,45,14,45,10,0,0,6.75,0,0,'Medium',0,1),(64,'Ambati Rayudu','India','NULL',30,25,25,491,78,0,3,0,0,0,'Spin',1,0),(65,'Brad Hodge','Australia','NULL',30,127,124,3690,106,2,24,7.56,0,0,'Fast',1,1),(66,'Michael Hussey','Australia','NULL',30,60,52,1633,116,1,11,5,0,0,'Medium',1,0),(67,'Shakib Al Hasan','Bangladesh','NULL',30,40,36,432,47,0,0,6.63,0,0,'Spin',1,1),(68,'Ishant Sharma','India','NULL',30,58,19,45,9,0,0,7.67,0,0,'Fast',0,1),(69,'Brendon McCullum','New Zealand','NULL',30,112,111,3073,158,3,15,0,0,0,'Medium',1,0),(70,'Manoj Tiwary','India','NULL',30,60,54,1350,75,0,8,7.27,0,0,'Spin',1,0),(71,'Morne Morkel','South Africa','NULL',30,56,17,76,16,0,0,7.05,0,0,'Fast',0,1),(72,'Vinay Kumar','India','NULL',30,64,33,235,25,0,0,7.88,0,0,'Medium',0,1),(73,'Albie Morkel','South Africa','NULL',30,154,126,2259,71,0,6,8.02,0,0,'Spin',1,1),(74,'Graeme Smith','South Africa','NULL',30,79,79,2258,105,1,11,9.25,0,0,'Fast',1,0),(75,'L Balaji','India','NULL',30,56,12,27,15,0,0,7.91,0,0,'Medium',0,1),(76,'Lasith Malinga','Sri Lanka','NULL',30,88,24,76,27,0,0,6.71,0,0,'Spin',0,1),(77,'Pragyan Ojha','India','NULL',30,67,19,32,11,0,0,6.96,0,0,'Fast',0,1),(78,'Rahul Dravid','India','NULL',30,66,59,1530,75,0,7,0,0,0,'Medium',1,0),(79,'RP Singh','India','NULL',30,78,36,93,18,0,0,7.49,0,0,'Spin',0,1),(80,'Colin Munro','New Zealand','NULL',30,70,47,692,57,0,1,6.15,0,0,'Spin',1,1),(81,'Dirk Nannes','Australia','NULL',30,117,17,42,12,0,0,7.06,0,0,'Spin',0,1),(82,'Kevin Pietersen','England','NULL',30,62,61,1733,79,0,9,7.87,0,0,'Fast',1,0),(83,'Tillakaratne Dilshan','Sri Lanka','NULL',30,88,85,1873,96,0,13,7.11,0,0,'Medium',1,0),(84,'Cheteshwar Pujara','India','NULL',30,25,17,304,45,0,0,0,0,0,'Spin',1,0),(85,'Doug Bollinger','Australia','NULL',30,48,4,23,16,0,0,7.37,0,0,'Fast',0,1),(86,'Kumar Sangakkara','Sri Lanka','NULL',30,95,91,2583,94,0,17,0,0,0,'Medium',1,0),(87,'Munaf Patel','India','NULL',30,48,10,37,23,0,0,7.33,0,0,'Spin',0,1),(88,'Venugopal Rao','India','NULL',30,61,55,1072,71,0,6,8.63,0,0,'Fast',1,0),(89,'David Warner','Australia','NULL',30,105,105,2836,107,1,18,0,0,0,'Fast',1,0),(90,'Abhishek Nayar','India','NULL',30,46,38,653,57,0,1,8.66,0,0,'Spin',1,0),(91,'Praveen Kumar','India','NULL',30,69,38,342,76,0,1,7.6,0,0,'Medium',1,1),(92,'Andrew Symonds','Australia','NULL',30,89,81,2115,117,2,12,8.03,0,0,'Spin',1,1),(93,'Ashish Nehra','India','NULL',30,42,11,49,22,0,0,7.48,0,0,'Fast',0,1),(94,'R Ashwin','India','NULL',30,52,15,52,11,0,0,6.28,0,0,'Medium',0,1),(95,'S Badrinath','India','NULL',30,83,68,1525,71,0,12,7.33,0,0,'Spin',1,0),(96,'Adam Gilchrist','Australia','NULL',30,82,82,2156,109,3,11,0,0,0,'Medium',1,0),(97,'Daniel Christian','Australia','NULL',30,64,53,692,54,0,1,7.98,0,0,'Fast',1,1),(98,'Dinesh Karthik','India','NULL',30,86,75,1466,90,0,6,5,0,0,'Spin',1,0),(99,'Kieron Pollard','West Indies','NULL',30,112,97,1990,89,0,9,7.91,0,0,'Medium',1,1),(100,'M Vijay ','India','NULL',30,61,59,1598,127,1,9,4,0,0,'Spin',1,0),(101,'Piyush Chawla','India','NULL',30,72,41,396,33,0,0,7.47,0,0,'Fast',1,1),(102,'Sreesanth','India','NULL',30,53,17,72,19,0,0,8.33,0,0,'Medium',0,1),(103,'Zaheer Khan','India','NULL',30,75,33,157,26,0,0,7.72,0,0,'Spin',0,1),(104,'Angelo Mathews','Sri Lanka','NULL',30,54,46,857,65,0,3,7.97,0,0,'Fast',1,1),(105,'Johan Botha','South Africa','NULL',30,91,69,934,67,0,2,5.99,0,0,'Medium',1,1);
/*!40000 ALTER TABLE `cricket` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-04 19:39:54
