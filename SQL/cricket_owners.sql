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









/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `owners`
--

DROP TABLE IF EXISTS `owners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `owners` (
  `Owner_id` int(10) NOT NULL AUTO_INCREMENT,
  `Owner_Name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Purse_Left_InLakh` int(11) DEFAULT '6000',
  `Purse_Spent` int(11) DEFAULT '0',
  `Password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `profession` varchar(45) DEFAULT NULL,
  `phone` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `owners`
--

LOCK TABLES `owners` WRITE;
/*!40000 ALTER TABLE `owners` DISABLE KEYS */;
INSERT INTO `owners` VALUES (1,'Mukesh Ambhani',6000,0,'123@18O1','Indian','Bussinessmam','9949012352','1998-12-21','male'),(2,'Sharuk Khan',6000,0,'123@18O2','Indian','Bussinessmam','9949012352','1998-12-21','male'),(3,'Preity Zinta',6000,0,'123@18O3','Indian','Bussinessmam','9949012352','1998-12-21','male'),(4,'Vijay Maliya',6000,0,'123@18O4','Indian','Bussinessmam','9949012352','1998-12-21','male'),(5,'N Srinivasan',6000,0,'123@18O5','Indian','Bussinessmam','9949012352','1998-12-21','male'),(6,'GM Rao',6000,0,'123@18O6','Indian','Bussinessmam','9949012352','1998-12-21','male'),(7,'Raj_kundra',5870,130,'123@18O7','Indian','Bussinessmam','9949012352','1998-12-21','male'),(8,'Kalanthi Maravu',6000,0,'123@18O8','Indian','Bussinessmam','9949012352','1998-12-21','male'),(22,'king JAGADISH',5280,720,'jagadish2897','Indian','cricket','9441855713','1999-05-26','male');
/*!40000 ALTER TABLE `owners` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-04 19:39:58
