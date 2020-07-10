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
-- Table structure for table `playernew`
--

DROP TABLE IF EXISTS `playernew`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `playernew` (
  `Player_Id` int(11) NOT NULL DEFAULT '0',
  `Country` varchar(50) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Base_Price_Inlakh` int(11) DEFAULT NULL,
  `matches` int(11) DEFAULT NULL,
  `Innings_Played` int(11) DEFAULT NULL,
  `Runs` int(11) DEFAULT NULL,
  `Highest_Score` int(11) DEFAULT NULL,
  `100s` int(11) DEFAULT NULL,
  `50s` int(11) DEFAULT NULL,
  `Bowling econ` double DEFAULT NULL,
  `Auction_Flag` int(11) DEFAULT '0',
  `Sold_Flag` int(11) DEFAULT '0',
  `bowling_style` varchar(20) DEFAULT 'fast',
  `Is_Batsmen` int(11) DEFAULT '1',
  `Is_Bowler` int(11) DEFAULT '1',
  `price` int(11) DEFAULT '30',
  `Team_Id_Fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playernew`
--

LOCK TABLES `playernew` WRITE;
/*!40000 ALTER TABLE `playernew` DISABLE KEYS */;
INSERT INTO `playernew` VALUES (3,NULL,'Nathan Rimmington',30,23,8,33,24,0,0,7.24,0,0,'Fast',0,1,30,NULL),(4,NULL,'Rilee Rossouw',30,20,20,343,65,0,1,0,0,0,'Medium',1,0,30,NULL),(5,NULL,'Robert Frylinck',30,25,22,213,32,0,0,7.5,0,0,'Fast',0,1,30,NULL),(6,NULL,'Travis Birt',30,45,43,820,58,0,2,0,0,0,'Spin',1,0,30,NULL),(7,NULL,'George Bailey',30,32,28,714,60,0,5,12,0,0,'Spin',1,0,30,NULL),(8,NULL,'Johan van der Wath',30,78,57,672,48,0,0,7.65,0,0,'Spin',1,1,30,NULL),(9,NULL,'Luke Pomersbasch',30,35,33,623,79,0,2,0,0,0,'Medium',1,0,30,NULL),(10,NULL,'Moises Henriques',30,40,35,549,51,0,1,8.5,0,0,'Medium',1,1,30,NULL),(11,NULL,'Roelof van der Merwe',30,59,41,721,89,0,5,7.2,0,0,'Spin',1,1,30,NULL),(12,NULL,'Michael Klinger',30,30,29,690,78,0,4,0,0,0,'Medium',1,0,30,NULL),(13,NULL,'Andrew McDonald',30,62,55,1267,96,0,8,7.73,0,0,'Spin',1,1,30,NULL),(14,NULL,'Michael Lumb',30,103,103,2161,124,1,12,10.83,0,0,'Medium',1,0,30,NULL),(15,NULL,'Suraj Randiv',30,29,8,43,20,0,0,7.18,0,0,'Spin',0,1,30,NULL),(16,NULL,'Thisara Perera',30,40,30,209,24,0,0,7.34,0,0,'Fast',0,1,30,NULL),(17,NULL,'Rusty Theron',30,50,18,71,24,0,0,6.99,0,0,'Fast',0,1,30,NULL),(18,NULL,'Alfonso Thomas',30,104,33,173,30,0,0,7.26,0,0,'Fast',0,1,30,NULL),(19,NULL,'Ben Hilfenhaus',30,21,9,28,7,0,0,7.09,0,0,'Fast',0,1,30,NULL),(20,NULL,'Colin Ingram',30,32,31,686,84,0,4,0,0,0,'Medium',1,0,30,NULL),(21,NULL,'Dimitri Mascarenhas',30,81,71,1045,57,0,3,7.02,0,0,'Spin',1,1,30,NULL),(22,NULL,'James Franklin',30,72,64,1531,90,0,6,8.22,0,0,'Fast',1,1,30,NULL),(23,NULL,'Jerome Taylor',30,35,15,70,16,0,0,7.51,0,0,'Medium',0,1,30,NULL),(24,NULL,'Matthew Wade',30,27,22,349,80,0,2,0,0,0,'Fast',1,0,30,NULL),(25,NULL,'Nathan McCullum',30,73,59,989,76,0,3,6.97,0,0,'Spin',1,1,30,NULL),(26,NULL,'Nuwan Kulasekara',30,31,22,155,30,0,0,7.67,0,0,'Fast',0,1,30,NULL),(27,NULL,'Wriddhiman Saha',30,56,43,747,85,0,3,0,0,0,'Medium',1,0,30,NULL),(28,NULL,'Clint McKay',30,31,16,122,21,0,0,8.25,0,0,'Spin',0,1,30,NULL),(29,NULL,'Faf du Plessis',30,43,38,692,78,0,3,7.11,0,0,'Medium',1,1,30,NULL),(30,NULL,'Manan Vohra',30,45,38,676,68,0,4,0,0,0,'Medium',1,0,30,NULL),(31,NULL,'Charl Langeveldt',30,83,18,64,13,0,0,7.23,0,0,'Spin',0,1,30,NULL),(32,NULL,'Jesse Ryder',30,52,51,1088,86,0,8,8.06,0,0,'Spin',1,0,30,NULL),(33,NULL,'Joginder Sharma',30,41,22,224,35,0,0,8.05,0,0,'Spin',0,1,30,NULL),(34,NULL,'Ryan ten Doeschate',30,107,93,1843,102,1,4,7.97,0,0,'Fast',1,1,30,NULL),(35,NULL,'Wayne Parnell',30,42,16,101,16,0,0,7.05,0,0,'Medium',0,1,30,NULL),(36,NULL,'Davy Jacobs',30,61,58,1313,74,0,6,14,0,0,'Spin',1,0,30,NULL),(37,NULL,'Dwayne Bravo',30,87,72,1317,70,0,8,8.23,0,0,'Spin',1,1,30,NULL),(38,NULL,'Owais Shah',30,115,109,2842,80,0,15,8.11,0,0,'Medium',1,0,30,NULL),(39,NULL,'Scott Styris',30,120,112,2481,106,1,9,7.53,0,0,'Fast',1,1,30,NULL),(40,NULL,'Steven Smith',30,41,32,417,35,0,0,7.41,0,0,'Spin',1,1,30,NULL),(41,NULL,'Ajit Agarkar',30,48,27,229,39,0,0,8.3,0,0,'Medium',0,1,30,NULL),(42,NULL,'Sudeep Tyagi',30,14,2,2,2,0,0,7.44,0,0,'Medium',0,1,30,NULL),(43,NULL,'Jaidev Unadkat',30,14,2,2,2,0,0,7.44,0,0,'Fast',0,1,30,NULL),(44,NULL,'Paul Collingwood',30,67,58,973,79,0,6,7.06,0,0,'Spin',1,1,30,NULL),(45,NULL,'Naman Ojha',30,53,53,1016,94,0,5,0,0,0,'Medium',1,0,30,NULL),(46,NULL,'Tim Paine',30,26,22,379,71,0,2,0,0,0,'Fast',1,0,30,NULL),(47,NULL,'Manpreet Gony',30,39,18,152,34,0,0,7.75,0,0,'Spin',0,1,30,NULL),(48,NULL,'Parthiv Patel',30,58,56,1028,57,0,4,0,0,0,'Medium',1,0,30,NULL),(49,NULL,'Aaron Finch',30,30,27,824,93,0,6,5.68,0,0,'Fast',1,0,30,NULL),(50,NULL,'Amit Mishra',30,67,39,402,49,0,0,6.81,0,0,'Spin',1,1,30,NULL),(51,NULL,'Callum Ferguson',30,34,31,566,71,0,3,0,0,0,'Medium',1,0,30,NULL),(52,NULL,'JP Duminy',30,100,96,2415,99,0,16,7.56,0,0,'Fast',1,1,30,NULL),(53,NULL,'Shaun Tait',30,62,20,87,14,0,0,7.67,0,0,'Fast',0,1,30,NULL),(54,NULL,'Shikhar Dhawan',30,59,58,1411,95,0,10,5.5,0,0,'Medium',1,0,30,NULL),(55,NULL,'Brad Haddin',30,36,34,576,54,0,2,0,0,0,'Spin',1,0,30,NULL),(56,NULL,'Ryan Harris',30,51,29,179,31,0,0,7.47,0,0,'Fast',0,1,30,NULL),(57,NULL,'Eoin Morgan',30,79,72,1584,85,0,7,0,0,0,'Medium',1,0,30,NULL),(58,NULL,'James Hopes',30,60,52,1151,71,0,10,8.44,0,0,'Spin',1,1,30,NULL),(59,NULL,'Ashok Dinda',30,50,11,25,19,0,0,6.94,0,0,'Fast',0,1,30,NULL),(60,NULL,'Brett Lee',30,55,29,235,48,0,0,7.19,0,0,'Medium',0,1,30,NULL),(61,NULL,'Murali Kartik',30,97,28,223,28,0,0,6.65,0,0,'Spin',0,1,30,NULL),(62,NULL,'Shaun Marsh',30,56,55,2135,115,2,16,6.5,0,0,'Fast',1,0,30,NULL),(63,NULL,'Stuart Broad',30,45,14,45,10,0,0,6.75,0,0,'Medium',0,1,30,NULL),(64,NULL,'Ambati Rayudu',30,25,25,491,78,0,3,0,0,0,'Spin',1,0,30,NULL),(65,NULL,'Brad Hodge',30,127,124,3690,106,2,24,7.56,0,0,'Fast',1,1,30,NULL),(66,NULL,'Michael Hussey',30,60,52,1633,116,1,11,5,0,0,'Medium',1,0,30,NULL),(67,NULL,'Shakib Al Hasan',30,40,36,432,47,0,0,6.63,0,0,'Spin',1,1,30,NULL),(68,NULL,'Ishant Sharma',30,58,19,45,9,0,0,7.67,0,0,'Fast',0,1,30,NULL),(69,NULL,'Brendon McCullum',30,112,111,3073,158,3,15,0,0,0,'Medium',1,0,30,NULL),(70,NULL,'Manoj Tiwary',30,60,54,1350,75,0,8,7.27,0,0,'Spin',1,0,30,NULL),(71,NULL,'Morne Morkel',30,56,17,76,16,0,0,7.05,0,0,'Fast',0,1,30,NULL),(72,NULL,'Vinay Kumar',30,64,33,235,25,0,0,7.88,0,0,'Medium',0,1,30,NULL),(73,NULL,'Albie Morkel',30,154,126,2259,71,0,6,8.02,0,0,'Spin',1,1,30,NULL),(74,NULL,'Graeme Smith',30,79,79,2258,105,1,11,9.25,0,0,'Fast',1,0,30,NULL),(75,NULL,'L Balaji',30,56,12,27,15,0,0,7.91,0,0,'Medium',0,1,30,NULL),(76,NULL,'Lasith Malinga',30,88,24,76,27,0,0,6.71,0,0,'Spin',0,1,30,NULL),(77,NULL,'Pragyan Ojha',30,67,19,32,11,0,0,6.96,0,0,'Fast',0,1,30,NULL),(78,NULL,'Rahul Dravid',30,66,59,1530,75,0,7,0,0,0,'Medium',1,0,30,NULL),(79,NULL,'RP Singh',30,78,36,93,18,0,0,7.49,0,0,'Spin',0,1,30,NULL),(80,NULL,'Colin Munro',30,70,47,692,57,0,1,6.15,0,0,'Spin',1,1,30,NULL),(81,NULL,'Dirk Nannes',30,117,17,42,12,0,0,7.06,0,0,'Spin',0,1,30,NULL),(82,NULL,'Kevin Pietersen',30,62,61,1733,79,0,9,7.87,0,0,'Fast',1,0,30,NULL),(83,NULL,'Tillakaratne Dilshan',30,88,85,1873,96,0,13,7.11,0,0,'Medium',1,0,30,NULL),(84,NULL,'Cheteshwar Pujara',30,25,17,304,45,0,0,0,0,0,'Spin',1,0,30,NULL),(85,NULL,'Doug Bollinger',30,48,4,23,16,0,0,7.37,0,0,'Fast',0,1,30,NULL),(86,NULL,'Kumar Sangakkara',30,95,91,2583,94,0,17,0,0,0,'Medium',1,0,30,NULL),(87,NULL,'Munaf Patel',30,48,10,37,23,0,0,7.33,0,0,'Spin',0,1,30,NULL),(88,NULL,'Venugopal Rao',30,61,55,1072,71,0,6,8.63,0,0,'Fast',1,0,30,NULL),(89,NULL,'David Warner',30,105,105,2836,107,1,18,0,0,0,'Fast',1,0,30,NULL),(90,NULL,'Abhishek Nayar',30,46,38,653,57,0,1,8.66,0,0,'Spin',1,0,30,NULL),(91,NULL,'Praveen Kumar',30,69,38,342,76,0,1,7.6,0,0,'Medium',1,1,30,NULL),(92,NULL,'Andrew Symonds',30,89,81,2115,117,2,12,8.03,0,0,'Spin',1,1,30,NULL),(93,NULL,'Ashish Nehra',30,42,11,49,22,0,0,7.48,0,0,'Fast',0,1,30,NULL),(94,NULL,'R Ashwin',30,52,15,52,11,0,0,6.28,0,0,'Medium',0,1,30,NULL),(95,NULL,'S Badrinath',30,83,68,1525,71,0,12,7.33,0,0,'Spin',1,0,30,NULL),(96,NULL,'Adam Gilchrist',30,82,82,2156,109,3,11,0,0,0,'Medium',1,0,30,NULL),(97,NULL,'Daniel Christian',30,64,53,692,54,0,1,7.98,0,0,'Fast',1,1,30,NULL),(98,NULL,'Dinesh Karthik',30,86,75,1466,90,0,6,5,0,0,'Spin',1,0,30,NULL),(99,NULL,'Kieron Pollard',30,112,97,1990,89,0,9,7.91,0,0,'Medium',1,1,30,NULL),(100,NULL,'M Vijay ',30,61,59,1598,127,1,9,4,0,0,'Spin',1,0,30,NULL),(101,NULL,'Piyush Chawla',30,72,41,396,33,0,0,7.47,0,0,'Fast',1,1,30,NULL),(102,NULL,'Sreesanth',30,53,17,72,19,0,0,8.33,0,0,'Medium',0,1,30,NULL),(103,NULL,'Zaheer Khan',30,75,33,157,26,0,0,7.72,0,0,'Spin',0,1,30,NULL),(104,NULL,'Angelo Mathews',30,54,46,857,65,0,3,7.97,0,0,'Fast',1,1,30,NULL),(105,NULL,'Johan Botha',30,91,69,934,67,0,2,5.99,0,0,'Medium',1,1,30,NULL),(106,NULL,'Ravindra Jadeja',30,54,43,832,47,0,0,7.34,0,0,'Spin',1,1,30,NULL),(107,NULL,'Ross Taylor',30,114,107,2788,111,1,14,9.03,0,0,'Fast',1,0,30,NULL),(108,NULL,'AB de Villiers',30,88,81,1911,105,1,11,0,0,0,'Medium',1,0,30,NULL),(109,NULL,'Cameron White',30,94,89,2064,141,2,10,9.03,0,0,'Spin',1,1,30,NULL),(110,NULL,'Jacques Kallis',30,82,81,2402,89,0,21,7.89,0,0,'Medium',1,1,30,NULL),(111,NULL,'Muttiah Muralitharan',30,94,25,57,11,0,0,6.35,0,0,'Medium',0,1,30,NULL),(112,NULL,'Dale Steyn',30,83,22,87,22,0,0,6.78,0,0,'Fast',0,1,30,NULL),(113,NULL,'Harbhajan Singh',30,86,48,523,49,0,0,6.66,0,0,'Medium',1,1,30,NULL),(114,NULL,'Shane Watson ',30,66,63,1715,97,0,14,7.23,0,0,'Spin',1,1,30,NULL),(115,NULL,'Suresh Raina ',30,88,85,2527,101,1,18,7.03,0,0,'Fast',1,1,30,NULL),(116,NULL,'David Hussey',30,155,150,3897,100,1,22,7.39,0,0,'Medium',1,1,30,NULL),(117,NULL,'Mahela Jayawardene',30,103,100,2525,110,2,16,7.13,0,0,'Spin',1,0,30,NULL),(118,NULL,'Saurabh Tiwary',30,50,44,1017,69,0,5,0,0,0,'Fast',1,0,30,NULL),(119,NULL,'MS Dhoni ',30,95,85,2090,73,0,9,0,0,0,'Medium',1,0,30,NULL),(120,NULL,'Sachin Tendulkar',30,60,60,2069,100,1,13,7.93,0,0,'Spin',1,0,30,NULL),(121,NULL,'Shane Warne ',30,58,31,210,34,0,0,7.21,0,0,'Medium',0,1,30,NULL),(122,NULL,'Virat Kohli ',30,79,70,1714,76,0,7,8.52,0,0,'Fast',1,0,30,NULL),(123,NULL,'Virender Sehwag ',30,77,76,2033,119,1,13,8.07,0,0,'Spin',1,0,30,NULL),(124,NULL,'Yuvraj Singh',30,93,90,2130,71,0,12,7.25,0,0,'Medium',1,1,30,NULL),(125,NULL,'Irfan Pathan',30,83,67,968,60,0,1,7.65,0,0,'Fast',1,1,30,NULL),(126,NULL,'Rohit Sharma',30,97,91,2417,101,1,15,7.44,0,0,'Spin',1,1,30,NULL),(127,NULL,'Robin Uthappa',30,93,87,1816,68,0,7,0,0,0,'Fast',1,0,30,NULL),(128,NULL,'Yusuf Pathan',30,90,82,1824,100,1,9,7.46,0,0,'Medium',1,1,30,NULL),(129,NULL,'Gautam Gambhir',30,87,85,2222,86,0,17,0,0,0,'Fast',1,0,30,NULL),(130,NULL,'David_Willey',30,10,5,90,25,0,0,7.13,0,0,'Spin',1,1,30,NULL);
/*!40000 ALTER TABLE `playernew` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-04 19:39:57
