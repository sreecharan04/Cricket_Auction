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
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `players` (
  `Player_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Country` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Base_Price_Inlakh` int(11) DEFAULT '30',
  `matches` int(11) DEFAULT NULL,
  `Innings_Played` int(11) DEFAULT NULL,
  `Runs` int(11) DEFAULT NULL,
  `Highest_Score` int(11) DEFAULT NULL,
  `100s` int(11) DEFAULT NULL,
  `50s` int(11) DEFAULT NULL,
  `Bowling_econ` double DEFAULT NULL,
  `Auction_Flag` int(11) DEFAULT '0',
  `Sold_Flag` int(11) DEFAULT '0',
  `bowling_style` varchar(20) DEFAULT 'fast',
  `Is_Batsmen` int(11) DEFAULT '1',
  `Is_Bowler` int(11) DEFAULT '1',
  `price` int(11) DEFAULT '0',
  `Team_Id_Fk` int(11) DEFAULT NULL,
  PRIMARY KEY (`Player_Id`),
  KEY `playerforeign` (`Team_Id_Fk`),
  CONSTRAINT `playerforeign` FOREIGN KEY (`Team_Id_Fk`) REFERENCES `team` (`team_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `players`
--

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
INSERT INTO `players` VALUES (1,'India','Aiden Blizzard',50,40,40,817,89,0,2,10,2,1,'Medium',1,0,60,20),(2,'India','Jonathan Vandiar',60,40,18,356,71,0,3,0,2,1,'Medium',1,0,70,20),(3,'India','Nathan Rimmington',100,23,8,33,24,0,0,7.24,0,0,'Fast',0,1,0,NULL),(5,'India','Robert Frylinck',40,25,22,213,32,0,0,7.5,2,1,'Fast',0,1,50,20),(6,'India','Travis Birt',100,45,43,820,58,0,2,0,2,1,'Spin',1,0,130,7),(7,'India','George Bailey',30,32,28,714,60,0,5,12,2,1,'Spin',1,0,40,20),(8,'India','Johan van der Wath',60,78,57,672,48,0,0,7.65,0,0,'Spin',1,1,0,NULL),(9,'India','Luke Pomersbasch',100,35,33,623,79,0,2,0,2,1,'Medium',1,0,110,20),(10,'India','Moises Henriques',40,40,35,549,51,0,1,8.5,0,0,'Medium',1,1,0,NULL),(11,'India','Roelof van der Merwe',30,59,41,721,89,0,5,7.2,2,1,'Spin',1,1,40,20),(12,'India','Michael Klinger',100,30,29,690,78,0,4,0,2,1,'Medium',1,0,110,20),(13,'India','Andrew McDonald',30,62,55,1267,96,0,8,7.73,2,1,'Spin',1,1,40,20),(14,'India','Michael Lumb',60,103,103,2161,124,1,12,10.83,0,0,'Medium',1,0,0,NULL),(15,'India','Suraj Randiv',40,29,8,43,20,0,0,7.18,0,0,'Spin',0,1,0,NULL),(16,'India','Thisara Perera',60,40,30,209,24,0,0,7.34,0,0,'Fast',0,1,0,NULL),(17,'India','Rusty Theron',30,50,18,71,24,0,0,6.99,2,1,'Fast',0,1,40,20),(18,'India','Alfonso Thomas',100,104,33,173,30,0,0,7.26,2,1,'Fast',0,1,110,20),(19,'India','Ben Hilfenhaus',30,21,9,28,7,0,0,7.09,0,0,'Fast',0,1,0,NULL),(20,'India','Colin Ingram',40,32,31,686,84,0,4,0,0,0,'Medium',1,0,0,NULL),(21,'India','Dimitri Mascarenhas',100,81,71,1045,57,0,3,7.02,0,0,'Spin',1,1,0,NULL),(22,'India','James Franklin',60,72,64,1531,90,0,6,8.22,0,0,'Fast',1,1,0,NULL),(23,'India','Jerome Taylor',30,35,15,70,16,0,0,7.51,2,0,'Medium',0,1,0,NULL),(24,'India','Matthew Wade',100,27,22,349,80,0,2,0,0,0,'Fast',1,0,0,NULL),(25,'India','Nathan McCullum',40,73,59,989,76,0,3,6.97,0,0,'Spin',1,1,0,NULL),(26,'India','Nuwan Kulasekara',60,31,22,155,30,0,0,7.67,0,0,'Fast',0,1,0,NULL),(27,'India','Wriddhiman Saha',100,56,43,747,85,0,3,0,0,0,'Medium',1,0,0,NULL),(28,'India','Clint McKay',60,31,16,122,21,0,0,8.25,0,0,'Spin',0,1,0,NULL),(29,'India','Faf du Plessis',30,43,38,692,78,0,3,7.11,0,0,'Medium',1,1,0,NULL),(30,'India','Manan Vohra',40,45,38,676,68,0,4,0,0,0,'Medium',1,0,0,NULL),(31,'India','Charl Langeveldt',30,83,18,64,13,0,0,7.23,0,0,'Spin',0,1,0,NULL),(32,'India','Jesse Ryder',60,52,51,1088,86,0,8,8.06,0,0,'Spin',1,0,0,NULL),(33,'India','Joginder Sharma',100,41,22,224,35,0,0,8.05,0,0,'Spin',0,1,0,NULL),(34,'India','Ryan ten Doeschate',60,107,93,1843,102,1,4,7.97,0,0,'Fast',1,1,0,NULL),(35,'India','Wayne Parnell',40,42,16,101,16,0,0,7.05,0,0,'Medium',0,1,0,NULL),(36,'India','Davy Jacobs',100,61,58,1313,74,0,6,14,0,0,'Spin',1,0,0,NULL),(37,'India','Dwayne Bravo',30,87,72,1317,70,0,8,8.23,0,0,'Spin',1,1,0,NULL),(38,'India','Owais Shah',60,115,109,2842,80,0,15,8.11,0,0,'Medium',1,0,0,NULL),(39,'India','Scott Styris',100,120,112,2481,106,1,9,7.53,0,0,'Fast',1,1,0,NULL),(40,'India','Steven Smith',40,41,32,417,35,0,0,7.41,0,0,'Spin',1,1,0,NULL),(41,'India','Ajit Agarkar',30,48,27,229,39,0,0,8.3,0,0,'Medium',0,1,0,NULL),(42,'India','Sudeep Tyagi',100,14,2,2,2,0,0,7.44,0,0,'Medium',0,1,0,NULL),(43,'India','Jaidev Unadkat',30,14,2,2,2,0,0,7.44,0,0,'Fast',0,1,0,NULL),(44,'India','Paul Collingwood',60,67,58,973,79,0,6,7.06,0,0,'Spin',1,1,0,NULL),(45,'India','Naman Ojha',40,53,53,1016,94,0,5,0,0,0,'Medium',1,0,0,NULL),(46,'India','Tim Paine',60,26,22,379,71,0,2,0,0,0,'Fast',1,0,0,NULL),(47,'India','Manpreet Gony',30,39,18,152,34,0,0,7.75,0,0,'Spin',0,1,0,NULL),(48,'India','Parthiv Patel',100,58,56,1028,57,0,4,0,0,0,'Medium',1,0,0,NULL),(49,'India','Aaron Finch',30,30,27,824,93,0,6,5.68,0,0,'Fast',1,0,0,NULL),(50,'India','Amit Mishra',40,67,39,402,49,0,0,6.81,0,0,'Spin',1,1,0,NULL),(51,'India','Callum Ferguson',100,34,31,566,71,0,3,0,0,0,'Medium',1,0,0,NULL),(52,'India','JP Duminy',60,100,96,2415,99,0,16,7.56,0,0,'Fast',1,1,0,NULL),(53,'India','Shaun Tait',30,62,20,87,14,0,0,7.67,0,0,'Fast',0,1,0,NULL),(54,'India','Shikhar Dhawan',100,59,58,1411,95,0,10,5.5,0,0,'Medium',1,0,0,NULL),(55,'India','Brad Haddin',40,36,34,576,54,0,2,0,0,0,'Spin',1,0,0,NULL),(56,'India','Ryan Harris',60,51,29,179,31,0,0,7.47,0,0,'Fast',0,1,0,NULL),(57,'India','Eoin Morgan',100,79,72,1584,85,0,7,0,0,0,'Medium',1,0,0,NULL),(58,'India','James Hopes',60,60,52,1151,71,0,10,8.44,0,0,'Spin',1,1,0,NULL),(59,'India','Ashok Dinda',30,50,11,25,19,0,0,6.94,0,0,'Fast',0,1,0,NULL),(60,'India','Brett Lee',40,55,29,235,48,0,0,7.19,0,0,'Medium',0,1,0,NULL),(61,'India','Murali Kartik',30,97,28,223,28,0,0,6.65,0,0,'Spin',0,1,0,NULL),(62,'India','Shaun Marsh',60,56,55,2135,115,2,16,6.5,0,0,'Fast',1,0,0,NULL),(63,'India','Stuart Broad',100,45,14,45,10,0,0,6.75,0,0,'Medium',0,1,0,NULL),(64,'India','Ambati Rayudu',60,25,25,491,78,0,3,0,0,0,'Spin',1,0,0,NULL),(65,'India','Brad Hodge',40,127,124,3690,106,2,24,7.56,0,0,'Fast',1,1,0,NULL),(66,'India','Michael Hussey',100,60,52,1633,116,1,11,5,0,0,'Medium',1,0,0,NULL),(67,'India','Shakib Al Hasan',30,40,36,432,47,0,0,6.63,0,0,'Spin',1,1,0,NULL),(68,'India','Ishant Sharma',60,58,19,45,9,0,0,7.67,0,0,'Fast',0,1,0,NULL),(69,'India','Brendon McCullum',100,112,111,3073,158,3,15,0,0,0,'Medium',1,0,0,NULL),(70,'India','Manoj Tiwary',40,60,54,1350,75,0,8,7.27,0,0,'Spin',1,0,0,NULL),(71,'India','Morne Morkel',30,56,17,76,16,0,0,7.05,0,0,'Fast',0,1,0,NULL),(72,'India','Vinay Kumar',100,64,33,235,25,0,0,7.88,0,0,'Medium',0,1,0,NULL),(73,'India','Albie Morkel',30,154,126,2259,71,0,6,8.02,0,0,'Spin',1,1,0,NULL),(74,'India','Graeme Smith',60,79,79,2258,105,1,11,9.25,0,0,'Fast',1,0,0,NULL),(75,'India','L Balaji',40,56,12,27,15,0,0,7.91,0,0,'Medium',0,1,0,NULL),(76,'India','Lasith Malinga',60,88,24,76,27,0,0,6.71,0,0,'Spin',0,1,0,NULL),(77,'India','Pragyan Ojha',30,67,19,32,11,0,0,6.96,0,0,'Fast',0,1,0,NULL),(78,'India','Rahul Dravid',100,66,59,1530,75,0,7,0,0,0,'Medium',1,0,0,NULL),(79,'India','RP Singh',30,78,36,93,18,0,0,7.49,0,0,'Spin',0,1,0,NULL),(80,'India','Colin Munro',40,70,47,692,57,0,1,6.15,0,0,'Spin',1,1,0,NULL),(81,'India','Dirk Nannes',100,117,17,42,12,0,0,7.06,0,0,'Spin',0,1,0,NULL),(82,'India','Kevin Pietersen',60,62,61,1733,79,0,9,7.87,0,0,'Fast',1,0,0,NULL),(83,'India','Tillakaratne Dilshan',30,88,85,1873,96,0,13,7.11,0,0,'Medium',1,0,0,NULL),(84,'India','Cheteshwar Pujara',100,25,17,304,45,0,0,0,0,0,'Spin',1,0,0,NULL),(85,'India','Doug Bollinger',40,48,4,23,16,0,0,7.37,0,0,'Fast',0,1,0,NULL),(86,'India','Kumar Sangakkara',60,95,91,2583,94,0,17,0,0,0,'Medium',1,0,0,NULL),(87,'India','Munaf Patel',100,48,10,37,23,0,0,7.33,0,0,'Spin',0,1,0,NULL),(88,'India','Venugopal Rao',60,61,55,1072,71,0,6,8.63,0,0,'Fast',1,0,0,NULL),(89,'India','David Warner',30,105,105,2836,107,1,18,0,0,0,'Fast',1,0,0,NULL),(90,'India','Abhishek Nayar',40,46,38,653,57,0,1,8.66,0,0,'Spin',1,0,0,NULL),(91,'India','Praveen Kumar',30,69,38,342,76,0,1,7.6,0,0,'Medium',1,1,0,NULL),(92,'India','Andrew Symonds',60,89,81,2115,117,2,12,8.03,0,0,'Spin',1,1,0,NULL),(93,'India','Ashish Nehra',100,42,11,49,22,0,0,7.48,0,0,'Fast',0,1,0,NULL),(94,'India','R Ashwin',60,52,15,52,11,0,0,6.28,0,0,'Medium',0,1,0,NULL),(95,'India','S Badrinath',40,83,68,1525,71,0,12,7.33,0,0,'Spin',1,0,0,NULL),(96,'India','Adam Gilchrist',100,82,82,2156,109,3,11,0,0,0,'Medium',1,0,0,NULL),(97,'India','Daniel Christian',30,64,53,692,54,0,1,7.98,0,0,'Fast',1,1,0,NULL),(98,'India','Dinesh Karthik',60,86,75,1466,90,0,6,5,0,0,'Spin',1,0,0,NULL),(99,'India','Kieron Pollard',100,112,97,1990,89,0,9,7.91,0,0,'Medium',1,1,0,NULL),(100,'India','M Vijay ',40,61,59,1598,127,1,9,4,0,0,'Spin',1,0,0,NULL),(101,'India','Piyush Chawla',30,72,41,396,33,0,0,7.47,0,0,'Fast',1,1,0,NULL),(102,'India','Sreesanth',100,53,17,72,19,0,0,8.33,0,0,'Medium',0,1,0,NULL),(103,'India','Zaheer Khan',30,75,33,157,26,0,0,7.72,0,0,'Spin',0,1,0,NULL),(104,'India','Angelo Mathews',60,54,46,857,65,0,3,7.97,0,0,'Fast',1,1,0,NULL),(105,'India','Johan Botha',40,91,69,934,67,0,2,5.99,0,0,'Medium',1,1,0,NULL),(106,'India','Ravindra Jadeja',60,54,43,832,47,0,0,7.34,0,0,'Spin',1,1,0,NULL),(107,'India','Ross Taylor',30,114,107,2788,111,1,14,9.03,0,0,'Fast',1,0,0,NULL),(108,'India','AB de Villiers',100,88,81,1911,105,1,11,0,0,0,'Medium',1,0,0,NULL),(109,'India','Cameron White',30,94,89,2064,141,2,10,9.03,0,0,'Spin',1,1,0,NULL),(110,'India','Jacques Kallis',40,82,81,2402,89,0,21,7.89,0,0,'Medium',1,1,0,NULL),(111,'India','Muttiah Muralitharan',100,94,25,57,11,0,0,6.35,0,0,'Medium',0,1,0,NULL),(112,'India','Dale Steyn',60,83,22,87,22,0,0,6.78,0,0,'Fast',0,1,0,NULL),(113,'India','Harbhajan Singh',30,86,48,523,49,0,0,6.66,0,0,'Medium',1,1,0,NULL),(114,'India','Shane Watson ',100,66,63,1715,97,0,14,7.23,0,0,'Spin',1,1,0,NULL),(115,'India','Suresh Raina ',40,88,85,2527,101,1,18,7.03,0,0,'Fast',1,1,0,NULL),(116,'India','David Hussey',60,155,150,3897,100,1,22,7.39,0,0,'Medium',1,1,0,NULL),(117,'India','Mahela Jayawardene',100,103,100,2525,110,2,16,7.13,0,0,'Spin',1,0,0,NULL),(118,'India','Saurabh Tiwary',60,50,44,1017,69,0,5,0,0,0,'Fast',1,0,0,NULL),(119,'India','MS Dhoni ',30,95,85,2090,73,0,9,0,0,0,'Medium',1,0,0,NULL),(120,'India','Sachin Tendulkar',40,60,60,2069,100,1,13,7.93,0,0,'Spin',1,0,0,NULL),(121,'India','Shane Warne ',30,58,31,210,34,0,0,7.21,0,0,'Medium',0,1,0,NULL),(122,'India','Virat Kohli ',60,79,70,1714,76,0,7,8.52,0,0,'Fast',1,0,0,NULL),(123,'India','Virender Sehwag ',100,77,76,2033,119,1,13,8.07,0,0,'Spin',1,0,0,NULL),(124,'India','Yuvraj Singh',60,93,90,2130,71,0,12,7.25,0,0,'Medium',1,1,0,NULL),(125,'India','Irfan Pathan',40,83,67,968,60,0,1,7.65,2,1,'Fast',1,1,50,20),(126,'India','Rohit Sharma',100,97,91,2417,101,1,15,7.44,0,0,'Spin',1,1,0,NULL),(127,'India','Robin Uthappa',30,93,87,1816,68,0,7,0,0,0,'Fast',1,0,0,NULL),(128,'India','Yusuf Pathan',60,90,82,1824,100,1,9,7.46,0,0,'Medium',1,1,0,NULL),(129,'India','Gautam Gambhir',100,87,85,2222,86,0,17,0,0,0,'Fast',1,0,0,NULL),(130,'India','David_Willey',40,10,5,90,25,0,0,7.13,0,0,'Spin',1,1,0,NULL);
/*!40000 ALTER TABLE `players` ENABLE KEYS */;
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
