-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: aims
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.37-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `payment_mode` varchar(45) NOT NULL,
  `amount_paid` double NOT NULL,
  `balance` double NOT NULL,
  `detail` varchar(200) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='This table is for the accounting records of the administrator';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES (1,1,'Internet Bill','Cash',200,20,'Recharge Card',0,'2019-06-10 19:30:00'),(2,1,'Light Bill','Cash',100,40,'Paid at sunyani office',1,'2019-06-10 19:52:32'),(3,1,'Light Bill','Cash',300,100,'Paid at sunyani office',1,'2019-06-10 19:52:46'),(4,1,'Smart Bill','Cash',100,9,'Paid at sunyani office',1,'2019-06-17 04:33:07'),(5,1,'School fees','Mobile Money',1600,0,'Paid at mtn office',0,'2019-06-17 05:47:46');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `foreman_staff_id` int(11) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date_event` date NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='This comments refer to the foreman''s staff';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,3,'Absent from work','stubborn heart','2019-07-03',0,'2019-07-11 22:54:48'),(2,3,'Absent from work','no comment','2019-07-04',1,'2019-07-11 22:59:07');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consumer`
--

DROP TABLE IF EXISTS `consumer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consumer` (
  `consumer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`consumer_id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Also knows as Buyers';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consumer`
--

LOCK TABLES `consumer` WRITE;
/*!40000 ALTER TABLE `consumer` DISABLE KEYS */;
INSERT INTO `consumer` VALUES (1,'Aboabo Constructions','aboabo@gmail.com','aboabo','0246024707','East Legon',0,'2019-06-10 00:23:00'),(2,'AB Constructions','','','0553295012','P.O.Box 12',1,'2019-06-10 00:24:01'),(3,'OA Construction','','','0546534662','Fiapre',1,'2019-06-10 00:32:00'),(4,'Real Palour','','','0243114184','P.O.Box 12, P.o.box 12',1,'2019-06-17 06:27:38'),(5,'Regi Emmanuel Ltd','regi@gmail.com','regi','0246024707','Tema',0,'2019-07-12 17:54:33');
/*!40000 ALTER TABLE `consumer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consumer_activity`
--

DROP TABLE IF EXISTS `consumer_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consumer_activity` (
  `consumer_activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `consumer_id` int(11) NOT NULL,
  `amount_recieved` double NOT NULL,
  `amount_sent` double NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `prev_balance` double NOT NULL,
  `current_balance` double NOT NULL,
  `date_sent` date NOT NULL,
  `bill_no` varchar(100) NOT NULL,
  `party_name` varchar(100) NOT NULL,
  `container_no` varchar(100) NOT NULL,
  `pieces` int(11) NOT NULL,
  `cbm` double NOT NULL,
  `average_cft` double NOT NULL,
  `net_cbm` double NOT NULL,
  `price` double NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`consumer_activity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Buyers activity';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consumer_activity`
--

LOCK TABLES `consumer_activity` WRITE;
/*!40000 ALTER TABLE `consumer_activity` DISABLE KEYS */;
INSERT INTO `consumer_activity` VALUES (1,9,1,2000,1000,'Cash',0,1000,'2019-07-04','','','',0,0,0,0,0,1,'2019-07-12 21:53:34'),(2,9,1,0,500,'Cash',1000,500,'2019-07-17','','','',0,0,0,0,0,1,'2019-07-12 22:01:44'),(3,9,1,0,400,'Cash',1000,600,'2019-07-18','','','',0,0,0,0,0,1,'2019-07-12 22:02:18'),(4,9,1,7000,6841.8,'Cash',1000,1158.2,'2019-08-07','06575757','OSWAL LUMBERS','BA 123 SNSN ',791,26.09,1.16,25.34,270,1,'2019-08-12 15:27:03'),(5,9,1,8000,4606.92,'Cash',1000,4393.08,'2019-08-06','06575757','OSWAL LUMBERS','BA 123 SNSN ',100,23.67,1.15,22.92,201,0,'2019-08-12 15:35:47');
/*!40000 ALTER TABLE `consumer_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foreman_staff`
--

DROP TABLE IF EXISTS `foreman_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foreman_staff` (
  `foreman_staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`foreman_staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='The entries work under the foreman';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foreman_staff`
--

LOCK TABLES `foreman_staff` WRITE;
/*!40000 ALTER TABLE `foreman_staff` DISABLE KEYS */;
INSERT INTO `foreman_staff` VALUES (1,5,'Asamoah Gyan','0246024707',1,'2019-07-11 22:44:22'),(2,5,'Oliver Boamah','0553295012',1,'2019-07-11 22:46:54'),(3,5,'Adams Jemima','0553295012',0,'2019-07-11 22:47:49'),(4,5,'Ohene Adjei','0243114184',1,'2019-07-11 22:48:53'),(5,5,'Real Palour','fggf',1,'2019-07-11 23:36:59');
/*!40000 ALTER TABLE `foreman_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forestry`
--

DROP TABLE IF EXISTS `forestry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forestry` (
  `forestry_activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `permit_area` varchar(100) NOT NULL,
  `date_issue` date NOT NULL,
  `date_expire` date NOT NULL,
  `convergence` varchar(100) NOT NULL,
  `cost_convergence` double NOT NULL,
  `cost_permit` double NOT NULL,
  `amount_recieved` double NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`forestry_activity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forestry`
--

LOCK TABLES `forestry` WRITE;
/*!40000 ALTER TABLE `forestry` DISABLE KEYS */;
INSERT INTO `forestry` VALUES (1,8,'Fiapre','2019-06-13','2019-06-29','Some data',200,400,600,0,'2019-06-28 15:19:03'),(2,8,'Fiapre UENR','2019-06-06','2019-06-28','Some data',200,401,601,0,'2019-06-28 15:21:34'),(3,8,'Fiapre','2019-06-13','2019-07-05','Some data',4,6,10,0,'2019-06-28 15:56:51'),(4,8,'Fiapre UENR','2019-06-12','2019-06-07','Some data',1,1,2,0,'2019-06-28 18:26:30');
/*!40000 ALTER TABLE `forestry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_expenses`
--

DROP TABLE IF EXISTS `home_expenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_expenses` (
  `expense_id` int(11) NOT NULL AUTO_INCREMENT,
  `accountant_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `amount` double NOT NULL,
  `date_transaction` date NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`expense_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_expenses`
--

LOCK TABLES `home_expenses` WRITE;
/*!40000 ALTER TABLE `home_expenses` DISABLE KEYS */;
INSERT INTO `home_expenses` VALUES (1,9,'Oliver Boamah','House Rent',3000,'2019-08-01',1,'2019-08-06 03:28:24'),(2,9,'Oliver Boamah','Bills',1200,'2019-08-01',0,'2019-08-06 03:32:50');
/*!40000 ALTER TABLE `home_expenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loading`
--

DROP TABLE IF EXISTS `loading`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loading` (
  `loading_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `container_no` varchar(45) NOT NULL,
  `seal_no` varchar(45) NOT NULL,
  `material_type` varchar(100) NOT NULL,
  `num_total_logs` int(11) NOT NULL,
  `num_logs` int(11) NOT NULL,
  `balance_logs` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`loading_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loading`
--

LOCK TABLES `loading` WRITE;
/*!40000 ALTER TABLE `loading` DISABLE KEYS */;
/*!40000 ALTER TABLE `loading` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_bend`
--

DROP TABLE IF EXISTS `log_bend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_bend` (
  `log_bend_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_info_id` int(11) NOT NULL,
  `range` varchar(45) NOT NULL,
  `num_logs` int(11) NOT NULL,
  `price` double NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`log_bend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_bend`
--

LOCK TABLES `log_bend` WRITE;
/*!40000 ALTER TABLE `log_bend` DISABLE KEYS */;
INSERT INTO `log_bend` VALUES (1,1,'45 - 50',0,0,0),(2,1,'51 - 60',0,5,0),(3,1,'61 - 70',0,7,0),(4,1,'71 - 80',1,12,12),(5,1,'81 - 90',0,16,0),(6,1,'91 - 100',0,22,0),(7,1,'101 - 110',0,24,0),(8,1,'110 UP',0,30,0),(9,2,'45 - 50',0,0,0),(10,2,'51 - 60',1,5,5),(11,2,'61 - 70',0,7,0),(12,2,'71 - 80',0,12,0),(13,2,'81 - 90',0,16,0),(14,2,'91 - 100',0,22,0),(15,2,'101 - 110',0,24,0),(16,2,'110 UP',0,30,0),(17,3,'45 - 50',0,0,0),(18,3,'51 - 60',0,5,0),(19,3,'61 - 70',0,7,0),(20,3,'71 - 80',0,12,0),(21,3,'81 - 90',0,16,0),(22,3,'91 - 100',0,22,0),(23,3,'101 - 110',0,24,0),(24,3,'110 UP',0,30,0),(25,4,'45 - 50',0,0,0),(26,4,'51 - 60',0,5,0),(27,4,'61 - 70',0,7,0),(28,4,'71 - 80',0,12,0),(29,4,'81 - 90',0,16,0),(30,4,'91 - 100',0,22,0),(31,4,'101 - 110',0,24,0),(32,4,'110 UP',0,30,0),(33,5,'45 - 50',0,0,0),(34,5,'51 - 60',0,5,0),(35,5,'61 - 70',0,7,0),(36,5,'71 - 80',0,12,0),(37,5,'81 - 90',0,16,0),(38,5,'91 - 100',0,22,0),(39,5,'101 - 110',1,24,24),(40,5,'110 UP',0,30,0),(41,6,'45 - 50',0,0,0),(42,6,'51 - 60',0,5,0),(43,6,'61 - 70',0,7,0),(44,6,'71 - 80',0,12,0),(45,6,'81 - 90',0,16,0),(46,6,'91 - 100',0,22,0),(47,6,'101 - 110',1,24,24),(48,6,'110 UP',0,30,0),(49,7,'45 - 50',0,0,0),(50,7,'51 - 60',0,5,0),(51,7,'61 - 70',0,7,0),(52,7,'71 - 80',1,12,12),(53,7,'81 - 90',0,16,0),(54,7,'91 - 100',0,22,0),(55,7,'101 - 110',0,24,0),(56,7,'110 UP',0,30,0),(57,8,'45 - 50',0,0,0),(58,8,'51 - 60',0,5,0),(59,8,'61 - 70',0,7,0),(60,8,'71 - 80',1,12,12),(61,8,'81 - 90',0,16,0),(62,8,'91 - 100',0,22,0),(63,8,'101 - 110',0,24,0),(64,8,'110 UP',0,30,0),(65,9,'45 - 50',0,0,0),(66,9,'51 - 60',0,5,0),(67,9,'61 - 70',1,7,7),(68,9,'71 - 80',0,12,0),(69,9,'81 - 90',0,16,0),(70,9,'91 - 100',0,22,0),(71,9,'101 - 110',0,24,0),(72,9,'110 UP',0,30,0),(73,10,'45 - 50',0,0,0),(74,10,'51 - 60',0,5,0),(75,10,'61 - 70',0,7,0),(76,10,'71 - 80',0,12,0),(77,10,'81 - 90',0,16,0),(78,10,'91 - 100',0,22,0),(79,10,'101 - 110',0,24,0),(80,10,'110 UP',0,30,0),(81,11,'45 - 50',0,0,0),(82,11,'51 - 60',0,0,0),(83,11,'61 - 70',0,0,0),(84,11,'71 - 80',0,0,0),(85,11,'81 - 90',0,0,0),(86,11,'91 - 100',0,0,0),(87,11,'101 - 110',0,0,0),(88,11,'110 UP',0,0,0),(89,12,'45 - 50',0,0,0),(90,12,'51 - 60',0,0,0),(91,12,'61 - 70',0,0,0),(92,12,'71 - 80',0,0,0),(93,12,'81 - 90',0,0,0),(94,12,'91 - 100',0,0,0),(95,12,'101 - 110',0,0,0),(96,12,'110 UP',0,0,0),(97,13,'45 - 50',0,10,0),(98,13,'51 - 60',0,10,0),(99,13,'61 - 70',0,10,0),(100,13,'71 - 80',0,10,0),(101,13,'81 - 90',0,10,0),(102,13,'91 - 100',0,10,0),(103,13,'101 - 110',0,10,0),(104,13,'110 UP',0,10,0),(105,14,'45 - 50',0,10,0),(106,14,'51 - 60',0,10,0),(107,14,'61 - 70',0,10,0),(108,14,'71 - 80',0,10,0),(109,14,'81 - 90',0,10,0),(110,14,'91 - 100',0,10,0),(111,14,'101 - 110',0,10,0),(112,14,'110 UP',0,10,0),(113,15,'45 - 50',0,10,0),(114,15,'51 - 60',0,10,0),(115,15,'61 - 70',0,10,0),(116,15,'71 - 80',0,10,0),(117,15,'81 - 90',0,10,0),(118,15,'91 - 100',0,10,0),(119,15,'101 - 110',0,10,0),(120,15,'110 UP',0,10,0),(121,16,'45 - 50',0,10,0),(122,16,'51 - 60',0,10,0),(123,16,'61 - 70',0,10,0),(124,16,'71 - 80',0,10,0),(125,16,'81 - 90',0,10,0),(126,16,'91 - 100',0,10,0),(127,16,'101 - 110',0,10,0),(128,16,'110 UP',0,10,0),(129,17,'45 - 50',0,12.8,0),(130,17,'51 - 60',0,12.8,0),(131,17,'61 - 70',0,12.8,0),(132,17,'71 - 80',0,12.8,0),(133,17,'81 - 90',0,12.8,0),(134,17,'91 - 100',0,12.8,0),(135,17,'101 - 110',0,12.8,0),(136,17,'111 - 120',0,12.8,0),(137,17,'121 - 130',0,12.8,0),(138,17,'131 - 140',0,12.8,0),(139,17,'141 - 150',0,12.8,0),(140,17,'151 UP',0,12.8,0),(141,18,'45 - 50',0,12.8,0),(142,18,'51 - 60',0,12.8,0),(143,18,'61 - 70',0,12.8,0),(144,18,'71 - 80',0,12.8,0),(145,18,'81 - 90',0,12.8,0),(146,18,'91 - 100',0,12.8,0),(147,18,'101 - 110',0,12.8,0),(148,18,'111 - 120',0,12.8,0),(149,18,'121 - 130',0,12.8,0),(150,18,'131 - 140',0,12.8,0),(151,18,'141 - 150',0,12.8,0),(152,18,'151 UP',0,12.8,0),(153,19,'45 - 50',0,12.8,0),(154,19,'51 - 60',1,12.8,12.8),(155,19,'61 - 70',0,12.8,0),(156,19,'71 - 80',1,12.8,12.8),(157,19,'81 - 90',0,12.8,0),(158,19,'91 - 100',0,12.8,0),(159,19,'101 - 110',0,12.8,0),(160,19,'111 - 120',0,12.8,0),(161,19,'121 - 130',0,12.8,0),(162,19,'131 - 140',0,12.8,0),(163,19,'141 - 150',0,12.8,0),(164,19,'151 UP',0,12.8,0),(165,20,'45 - 50',0,12.8,0),(166,20,'51 - 60',0,12.8,0),(167,20,'61 - 70',0,12.8,0),(168,20,'71 - 80',0,12.8,0),(169,20,'81 - 90',0,12.8,0),(170,20,'91 - 100',1,12.8,12.8),(171,20,'101 - 110',0,12.8,0),(172,20,'111 - 120',0,12.8,0),(173,20,'121 - 130',0,12.8,0),(174,20,'131 - 140',0,12.8,0),(175,20,'141 - 150',0,12.8,0),(176,20,'151 UP',0,12.8,0);
/*!40000 ALTER TABLE `log_bend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_feet`
--

DROP TABLE IF EXISTS `log_feet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_feet` (
  `log_feet_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_info_id` int(11) NOT NULL,
  `range` varchar(45) NOT NULL,
  `num_logs` int(11) NOT NULL,
  `price` double NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`log_feet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_feet`
--

LOCK TABLES `log_feet` WRITE;
/*!40000 ALTER TABLE `log_feet` DISABLE KEYS */;
INSERT INTO `log_feet` VALUES (1,1,'45 - 50',0,2,0),(2,1,'51 - 60',0,3,0),(3,1,'61 - 70',0,4,0),(4,1,'71 - 80',0,5,0),(5,1,'81 - 90',0,11,0),(6,1,'91 - 100',0,12,0),(7,1,'101 - 110',0,14,0),(8,1,'110 UP',0,16,0),(9,2,'45 - 50',0,2,0),(10,2,'51 - 60',0,3,0),(11,2,'61 - 70',0,4,0),(12,2,'71 - 80',0,5,0),(13,2,'81 - 90',0,11,0),(14,2,'91 - 100',0,12,0),(15,2,'101 - 110',0,14,0),(16,2,'110 UP',1,16,16),(17,3,'45 - 50',0,2,0),(18,3,'51 - 60',0,3,0),(19,3,'61 - 70',0,4,0),(20,3,'71 - 80',0,5,0),(21,3,'81 - 90',0,11,0),(22,3,'91 - 100',2,12,24),(23,3,'101 - 110',0,14,0),(24,3,'110 UP',0,16,0),(25,4,'45 - 50',0,2,0),(26,4,'51 - 60',0,3,0),(27,4,'61 - 70',0,4,0),(28,4,'71 - 80',0,5,0),(29,4,'81 - 90',0,11,0),(30,4,'91 - 100',0,12,0),(31,4,'101 - 110',0,14,0),(32,4,'110 UP',0,16,0),(33,5,'45 - 50',0,2,0),(34,5,'51 - 60',0,3,0),(35,5,'61 - 70',0,4,0),(36,5,'71 - 80',0,5,0),(37,5,'81 - 90',0,11,0),(38,5,'91 - 100',0,12,0),(39,5,'101 - 110',1,14,14),(40,5,'110 UP',1,16,16),(41,6,'45 - 50',0,2,0),(42,6,'51 - 60',0,3,0),(43,6,'61 - 70',0,4,0),(44,6,'71 - 80',1,5,5),(45,6,'81 - 90',0,11,0),(46,6,'91 - 100',0,12,0),(47,6,'101 - 110',0,14,0),(48,6,'110 UP',0,16,0),(49,7,'45 - 50',0,2,0),(50,7,'51 - 60',0,3,0),(51,7,'61 - 70',0,4,0),(52,7,'71 - 80',1,5,5),(53,7,'81 - 90',0,11,0),(54,7,'91 - 100',0,12,0),(55,7,'101 - 110',0,14,0),(56,7,'110 UP',0,16,0),(57,8,'45 - 50',0,2,0),(58,8,'51 - 60',0,3,0),(59,8,'61 - 70',0,4,0),(60,8,'71 - 80',1,5,5),(61,8,'81 - 90',0,11,0),(62,8,'91 - 100',0,12,0),(63,8,'101 - 110',0,14,0),(64,8,'110 UP',0,16,0),(65,9,'45 - 50',0,2,0),(66,9,'51 - 60',0,3,0),(67,9,'61 - 70',1,4,4),(68,9,'71 - 80',0,5,0),(69,9,'81 - 90',0,11,0),(70,9,'91 - 100',0,12,0),(71,9,'101 - 110',0,14,0),(72,9,'110 UP',0,16,0),(73,10,'45 - 50',0,2,0),(74,10,'51 - 60',0,3,0),(75,10,'61 - 70',0,4,0),(76,10,'71 - 80',0,5,0),(77,10,'81 - 90',0,11,0),(78,10,'91 - 100',0,12,0),(79,10,'101 - 110',0,14,0),(80,10,'110 UP',0,16,0),(81,11,'45 - 50',0,23,0),(82,11,'51 - 60',0,23,0),(83,11,'61 - 70',0,23,0),(84,11,'71 - 80',0,23,0),(85,11,'81 - 90',0,23,0),(86,11,'91 - 100',0,23,0),(87,11,'101 - 110',0,23,0),(88,11,'110 UP',0,23,0),(89,12,'45 - 50',0,23,0),(90,12,'51 - 60',0,23,0),(91,12,'61 - 70',0,23,0),(92,12,'71 - 80',0,23,0),(93,12,'81 - 90',0,23,0),(94,12,'91 - 100',0,23,0),(95,12,'101 - 110',0,23,0),(96,12,'110 UP',0,23,0),(97,13,'45 - 50',0,23,0),(98,13,'51 - 60',0,23,0),(99,13,'61 - 70',0,23,0),(100,13,'71 - 80',0,23,0),(101,13,'81 - 90',0,23,0),(102,13,'91 - 100',0,23,0),(103,13,'101 - 110',0,23,0),(104,13,'110 UP',0,23,0),(105,14,'45 - 50',0,23,0),(106,14,'51 - 60',0,23,0),(107,14,'61 - 70',0,23,0),(108,14,'71 - 80',0,23,0),(109,14,'81 - 90',0,23,0),(110,14,'91 - 100',0,23,0),(111,14,'101 - 110',0,23,0),(112,14,'110 UP',0,23,0),(113,15,'45 - 50',0,23,0),(114,15,'51 - 60',0,23,0),(115,15,'61 - 70',0,23,0),(116,15,'71 - 80',0,23,0),(117,15,'81 - 90',0,23,0),(118,15,'91 - 100',0,23,0),(119,15,'101 - 110',0,23,0),(120,15,'110 UP',0,23,0),(121,16,'45 - 50',0,23,0),(122,16,'51 - 60',0,23,0),(123,16,'61 - 70',0,23,0),(124,16,'71 - 80',0,23,0),(125,16,'81 - 90',0,23,0),(126,16,'91 - 100',0,23,0),(127,16,'101 - 110',0,23,0),(128,16,'110 UP',0,23,0),(129,17,'45 - 50',0,30.3,0),(130,17,'51 - 60',0,30.3,0),(131,17,'61 - 70',0,30.3,0),(132,17,'71 - 80',0,30.3,0),(133,17,'81 - 90',0,30.3,0),(134,17,'91 - 100',0,30.31,0),(135,17,'101 - 110',0,30.34,0),(136,17,'111 - 120',0,30.36,0),(137,17,'121 - 130',0,30.38,0),(138,17,'131 - 140',0,30.42,0),(139,17,'141 - 150',0,30.46,0),(140,17,'151 UP',0,30.51,0),(141,18,'45 - 50',0,30.3,0),(142,18,'51 - 60',0,30.3,0),(143,18,'61 - 70',0,30.3,0),(144,18,'71 - 80',0,30.3,0),(145,18,'81 - 90',0,30.3,0),(146,18,'91 - 100',0,30.31,0),(147,18,'101 - 110',0,30.34,0),(148,18,'111 - 120',0,30.36,0),(149,18,'121 - 130',0,30.38,0),(150,18,'131 - 140',0,30.42,0),(151,18,'141 - 150',0,30.46,0),(152,18,'151 UP',0,30.51,0),(153,19,'45 - 50',0,30.3,0),(154,19,'51 - 60',0,30.3,0),(155,19,'61 - 70',0,30.3,0),(156,19,'71 - 80',0,30.3,0),(157,19,'81 - 90',1,30.3,30.3),(158,19,'91 - 100',1,30.31,30.31),(159,19,'101 - 110',0,30.34,0),(160,19,'111 - 120',0,30.36,0),(161,19,'121 - 130',0,30.38,0),(162,19,'131 - 140',0,30.42,0),(163,19,'141 - 150',0,30.46,0),(164,19,'151 UP',0,30.51,0),(165,20,'45 - 50',0,30.3,0),(166,20,'51 - 60',0,30.3,0),(167,20,'61 - 70',0,30.3,0),(168,20,'71 - 80',0,30.3,0),(169,20,'81 - 90',0,30.3,0),(170,20,'91 - 100',1,30.31,30.31),(171,20,'101 - 110',0,30.34,0),(172,20,'111 - 120',0,30.36,0),(173,20,'121 - 130',0,30.38,0),(174,20,'131 - 140',0,30.42,0),(175,20,'141 - 150',0,30.46,0),(176,20,'151 UP',0,30.51,0);
/*!40000 ALTER TABLE `log_feet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_info`
--

DROP TABLE IF EXISTS `log_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_info` (
  `log_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_contact` varchar(40) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date_of_stock` date NOT NULL,
  `num_straight` int(11) NOT NULL,
  `num_bend` int(11) NOT NULL,
  `num_feet` int(11) NOT NULL,
  `total_logs` int(11) NOT NULL,
  `amount_straight` double NOT NULL,
  `amount_bend` double NOT NULL,
  `amount_feet` double NOT NULL,
  `total_amount` double NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_info`
--

LOCK TABLES `log_info` WRITE;
/*!40000 ALTER TABLE `log_info` DISABLE KEYS */;
INSERT INTO `log_info` VALUES (9,5,'Prince','0245678901','Bechem Sawmill','2019-06-28',1,1,1,3,15,7,4,26,0,'2019-06-28 17:53:57'),(10,5,'Jon Germain','02345676512','Bechem Sawmill','2019-07-02',6,1,1,8,0,0,0,0,1,'2019-07-03 19:48:55'),(11,5,'Jon Germain','02345676512','Fiapre Sawmill','2019-07-24',6,1,1,8,42,0,0,42,1,'2019-07-04 03:23:00'),(12,5,'Jon Germain','02345676512','Fiapre Sawmill','2019-07-24',6,1,1,8,42,0,0,42,1,'2019-07-04 03:26:06'),(13,5,'Jon Germain','02345676512','Fiapre Sawmill','2019-07-01',6,1,1,8,42,0,0,42,0,'2019-07-04 03:33:49'),(14,5,'Jon Germain','02345676512','Fiapre Sawmill','2019-07-18',0,0,0,0,0,0,0,0,0,'2019-07-04 03:48:04'),(15,5,'fgg','fgfgg','Fiapre Sawmill','2019-07-16',4,0,0,4,0,0,0,0,0,'2019-07-04 03:55:34'),(16,5,'Jon Germain','fgfgg','Fiapre Sawmill','2019-07-24',1,0,0,1,12,0,0,12,0,'2019-07-04 03:56:39'),(17,5,'Cristiano Ronaldo','02345676512','Fiapre Sawmill','2019-07-25',6,0,0,6,21,0,0,21,1,'2019-07-10 22:01:14'),(18,5,'Cristiano Ronaldo','02345676512','Fiapre Sawmill','2019-07-04',6,0,0,6,21,0,0,21,0,'2019-07-10 22:05:03'),(19,5,'Cristiano Ronaldo','02345676512','Fiapre Sawmill','2019-07-03',4,2,3,9,42,25.6,60.61,128.21,0,'2019-07-10 22:10:44'),(20,5,'Cristiano Ronaldo','02345676512','Fiapre Sawmill','2019-07-11',2,1,1,4,21,12.8,30.31,64.11,0,'2019-07-11 23:39:43');
/*!40000 ALTER TABLE `log_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_straight`
--

DROP TABLE IF EXISTS `log_straight`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_straight` (
  `log_straight_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_info_id` int(11) NOT NULL,
  `range` varchar(45) NOT NULL,
  `num_logs` int(11) NOT NULL,
  `price` double NOT NULL,
  `amount` double NOT NULL,
  PRIMARY KEY (`log_straight_id`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_straight`
--

LOCK TABLES `log_straight` WRITE;
/*!40000 ALTER TABLE `log_straight` DISABLE KEYS */;
INSERT INTO `log_straight` VALUES (1,1,'45 - 50',0,0,0),(2,1,'51 - 60',0,10,0),(3,1,'61 - 70',1,15,15),(4,1,'71 - 80',0,25,0),(5,1,'81 - 90',0,32,0),(6,1,'91 - 100',1,40,40),(7,1,'101 - 110',0,48,0),(8,1,'110 UP',0,60,0),(9,2,'45 - 50',2,0,0),(10,2,'51 - 60',0,10,0),(11,2,'61 - 70',0,15,0),(12,2,'71 - 80',0,25,0),(13,2,'81 - 90',0,32,0),(14,2,'91 - 100',0,40,0),(15,2,'101 - 110',0,48,0),(16,2,'110 UP',0,60,0),(17,3,'45 - 50',0,0,0),(18,3,'51 - 60',0,10,0),(19,3,'61 - 70',0,15,0),(20,3,'71 - 80',0,25,0),(21,3,'81 - 90',0,32,0),(22,3,'91 - 100',0,40,0),(23,3,'101 - 110',0,48,0),(24,3,'110 UP',0,60,0),(25,4,'45 - 50',0,0,0),(26,4,'51 - 60',0,10,0),(27,4,'61 - 70',0,15,0),(28,4,'71 - 80',0,25,0),(29,4,'81 - 90',0,32,0),(30,4,'91 - 100',0,40,0),(31,4,'101 - 110',0,48,0),(32,4,'110 UP',0,60,0),(33,5,'45 - 50',1,0,0),(34,5,'51 - 60',0,10,0),(35,5,'61 - 70',0,15,0),(36,5,'71 - 80',0,25,0),(37,5,'81 - 90',0,32,0),(38,5,'91 - 100',0,40,0),(39,5,'101 - 110',1,48,48),(40,5,'110 UP',0,60,0),(41,6,'45 - 50',0,0,0),(42,6,'51 - 60',1,10,10),(43,6,'61 - 70',0,15,0),(44,6,'71 - 80',0,25,0),(45,6,'81 - 90',0,32,0),(46,6,'91 - 100',0,40,0),(47,6,'101 - 110',0,48,0),(48,6,'110 UP',0,60,0),(49,7,'45 - 50',0,0,0),(50,7,'51 - 60',1,10,10),(51,7,'61 - 70',0,15,0),(52,7,'71 - 80',0,25,0),(53,7,'81 - 90',0,32,0),(54,7,'91 - 100',0,40,0),(55,7,'101 - 110',0,48,0),(56,7,'110 UP',0,60,0),(57,8,'45 - 50',0,0,0),(58,8,'51 - 60',1,10,10),(59,8,'61 - 70',0,15,0),(60,8,'71 - 80',0,25,0),(61,8,'81 - 90',0,32,0),(62,8,'91 - 100',0,40,0),(63,8,'101 - 110',0,48,0),(64,8,'110 UP',0,60,0),(65,9,'45 - 50',0,0,0),(66,9,'51 - 60',0,10,0),(67,9,'61 - 70',1,15,15),(68,9,'71 - 80',0,25,0),(69,9,'81 - 90',0,32,0),(70,9,'91 - 100',0,40,0),(71,9,'101 - 110',0,48,0),(72,9,'110 UP',0,60,0),(73,10,'45 - 50',0,0,0),(74,10,'51 - 60',0,10,0),(75,10,'61 - 70',0,15,0),(76,10,'71 - 80',0,25,0),(77,10,'81 - 90',0,32,0),(78,10,'91 - 100',0,40,0),(79,10,'101 - 110',0,48,0),(80,10,'110 UP',0,60,0),(81,11,'45 - 50',0,12,0),(82,11,'51 - 60',0,21,0),(83,11,'61 - 70',0,12,0),(84,11,'71 - 80',0,12,0),(85,11,'81 - 90',0,21,0),(86,11,'91 - 100',0,12,0),(87,11,'101 - 110',0,21,0),(88,11,'110 UP',0,12,0),(89,12,'45 - 50',0,12,0),(90,12,'51 - 60',1,21,21),(91,12,'61 - 70',0,12,0),(92,12,'71 - 80',0,12,0),(93,12,'81 - 90',1,21,21),(94,12,'91 - 100',0,12,0),(95,12,'101 - 110',0,21,0),(96,12,'110 UP',0,12,0),(97,13,'45 - 50',0,12,0),(98,13,'51 - 60',1,21,21),(99,13,'61 - 70',0,12,0),(100,13,'71 - 80',0,12,0),(101,13,'81 - 90',1,21,21),(102,13,'91 - 100',0,12,0),(103,13,'101 - 110',0,21,0),(104,13,'110 UP',0,12,0),(105,14,'45 - 50',0,12,0),(106,14,'51 - 60',0,21,0),(107,14,'61 - 70',0,12,0),(108,14,'71 - 80',0,12,0),(109,14,'81 - 90',0,21,0),(110,14,'91 - 100',0,12,0),(111,14,'101 - 110',0,21,0),(112,14,'110 UP',0,12,0),(113,15,'45 - 50',0,12,0),(114,15,'51 - 60',0,21,0),(115,15,'61 - 70',0,12,0),(116,15,'71 - 80',0,12,0),(117,15,'81 - 90',0,21,0),(118,15,'91 - 100',0,12,0),(119,15,'101 - 110',0,21,0),(120,15,'110 UP',0,12,0),(121,16,'45 - 50',1,12,12),(122,16,'51 - 60',0,21,0),(123,16,'61 - 70',0,12,0),(124,16,'71 - 80',0,12,0),(125,16,'81 - 90',0,21,0),(126,16,'91 - 100',0,12,0),(127,16,'101 - 110',0,21,0),(128,16,'110 UP',0,12,0),(129,17,'45 - 50',0,10.5,0),(130,17,'51 - 60',1,10.5,10.5),(131,17,'61 - 70',0,10.5,0),(132,17,'71 - 80',0,10.5,0),(133,17,'81 - 90',1,10.5,10.5),(134,17,'91 - 100',0,10.5,0),(135,17,'101 - 110',0,10.5,0),(136,17,'111 - 120',0,10.5,0),(137,17,'121 - 130',0,10.5,0),(138,17,'131 - 140',0,10.5,0),(139,17,'141 - 150',0,10.5,0),(140,17,'151 UP',0,10.5,0),(141,18,'45 - 50',0,10.5,0),(142,18,'51 - 60',1,10.5,10.5),(143,18,'61 - 70',0,10.5,0),(144,18,'71 - 80',0,10.5,0),(145,18,'81 - 90',1,10.5,10.5),(146,18,'91 - 100',0,10.5,0),(147,18,'101 - 110',0,10.5,0),(148,18,'111 - 120',0,10.5,0),(149,18,'121 - 130',0,10.5,0),(150,18,'131 - 140',0,10.5,0),(151,18,'141 - 150',0,10.5,0),(152,18,'151 UP',0,10.5,0),(153,19,'45 - 50',0,10.5,0),(154,19,'51 - 60',0,10.5,0),(155,19,'61 - 70',1,10.5,10.5),(156,19,'71 - 80',0,10.5,0),(157,19,'81 - 90',0,10.5,0),(158,19,'91 - 100',1,10.5,10.5),(159,19,'101 - 110',0,10.5,0),(160,19,'111 - 120',1,10.5,10.5),(161,19,'121 - 130',0,10.5,0),(162,19,'131 - 140',0,10.5,0),(163,19,'141 - 150',1,10.5,10.5),(164,19,'151 UP',0,10.5,0),(165,20,'45 - 50',0,10.5,0),(166,20,'51 - 60',0,10.5,0),(167,20,'61 - 70',0,10.5,0),(168,20,'71 - 80',0,10.5,0),(169,20,'81 - 90',0,10.5,0),(170,20,'91 - 100',2,10.5,21),(171,20,'101 - 110',0,10.5,0),(172,20,'111 - 120',0,10.5,0),(173,20,'121 - 130',0,10.5,0),(174,20,'131 - 140',0,10.5,0),(175,20,'141 - 150',0,10.5,0),(176,20,'151 UP',0,10.5,0);
/*!40000 ALTER TABLE `log_straight` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `other_expenses`
--

DROP TABLE IF EXISTS `other_expenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `other_expenses` (
  `expense_id` int(11) NOT NULL AUTO_INCREMENT,
  `accountant_id` int(11) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `reciever` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `amount` double NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `date_transaction` date NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`expense_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `other_expenses`
--

LOCK TABLES `other_expenses` WRITE;
/*!40000 ALTER TABLE `other_expenses` DISABLE KEYS */;
INSERT INTO `other_expenses` VALUES (1,9,'Wayne Rooney','Kwadwo Asamoah','Purchase handsome cream',1200,'Cash','2019-08-02',1,'2019-08-06 03:48:03'),(2,9,'Wayne Rooney','Kwadwo Asamoah','Purchase handsome cream',1200,'Cash','2019-08-02',0,'2019-08-06 03:51:47');
/*!40000 ALTER TABLE `other_expenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `package` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `recorder_id` int(11) NOT NULL,
  `foreman_id` int(11) NOT NULL,
  `container_no` varchar(100) NOT NULL,
  `seal_no` varchar(100) NOT NULL,
  `num_pieces` int(11) NOT NULL,
  `total_cbm` double NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `package`
--

LOCK TABLES `package` WRITE;
/*!40000 ALTER TABLE `package` DISABLE KEYS */;
INSERT INTO `package` VALUES (24,9,4,'BA 123 SNSN ','BA 123 SNSN QB',4,0.0139375,1,'2019-07-06 03:25:26'),(25,9,12,'BA 123 SNSN ','BA 123 SNSN QB',1,0.034514375,0,'2019-07-06 04:29:26');
/*!40000 ALTER TABLE `package` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `package2`
--

DROP TABLE IF EXISTS `package2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `package2` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `accountant_id` int(11) NOT NULL,
  `container_no` varchar(100) NOT NULL,
  `seal_no` varchar(100) NOT NULL,
  `truck_no` varchar(100) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `driver_license_no` varchar(100) NOT NULL,
  `driver_phone` varchar(20) NOT NULL,
  `loading_place` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `package2`
--

LOCK TABLES `package2` WRITE;
/*!40000 ALTER TABLE `package2` DISABLE KEYS */;
INSERT INTO `package2` VALUES (1,9,'BA 123 SNSN ','435543','3534544','Mensah Daneil','QS 123 SNSN ','0553295012','Sunyani','2019-08-08',1,'2019-08-06 07:23:08'),(2,9,'BA 123 SNSN ','435543','BA 200 100','Mensah Daneil','QS 123 SNSN ','0553295012','Sunyani','2019-08-05',0,'2019-08-06 10:06:13');
/*!40000 ALTER TABLE `package2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `package2_item`
--

DROP TABLE IF EXISTS `package2_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `package2_item` (
  `package_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) NOT NULL,
  `width` double NOT NULL,
  `thickness` double NOT NULL,
  `length` double NOT NULL,
  `num_pieces` int(11) NOT NULL,
  `price` double NOT NULL,
  `cft` double NOT NULL,
  `cbm` double NOT NULL,
  `total_price` double NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`package_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `package2_item`
--

LOCK TABLES `package2_item` WRITE;
/*!40000 ALTER TABLE `package2_item` DISABLE KEYS */;
INSERT INTO `package2_item` VALUES (1,0,512,4,4,7,100,398.22222222222,11.276291157362,1127.6291157362,1,'2019-08-06 11:36:22'),(2,0,512,8,7,6,411,1194.6666666667,33.828873472085,13903.666997027,1,'2019-08-06 11:49:51'),(3,0,512,333,3,3,3,10656,301.74146963047,905.22440889141,1,'2019-08-06 11:53:49'),(4,0,512,2,2,2,2,28.444444444444,0.80544936838297,1.6108987367659,1,'2019-08-06 11:55:03'),(5,0,512,4,4,4,4,227.55555555556,6.4435949470637,25.774379788255,1,'2019-08-06 11:58:46'),(6,0,512,4,4,4,4,227.55555555556,6.4435949470637,25.774379788255,1,'2019-08-06 12:07:17'),(7,0,512,121,1,1,1,430.22222222222,12.182421696792,12.182421696792,1,'2019-08-06 12:07:51'),(8,0,512,121,1,1,1,430.22222222222,12.182421696792,12.182421696792,1,'2019-08-06 12:11:23'),(9,0,512,121,1,1,1,430.22222222222,12.182421696792,12.182421696792,1,'2019-08-06 12:44:34'),(10,0,512,121,1,1,1,430.22222222222,12.182421696792,12.182421696792,1,'2019-08-06 12:44:38'),(11,0,512,121,1,1,1,430.22222222222,12.182421696792,12.182421696792,1,'2019-08-06 12:46:51'),(12,2,200,121,1,1,100,168.05555555556,4.7587584753095,475.87584753095,1,'2019-08-06 12:46:57'),(13,2,512,121,12,1,1,5162.6666666667,146.18906036151,146.18906036151,1,'2019-08-06 12:47:44');
/*!40000 ALTER TABLE `package2_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `package_item`
--

DROP TABLE IF EXISTS `package_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `package_item` (
  `package_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) NOT NULL,
  `length` double NOT NULL,
  `girth` double NOT NULL,
  `cbm_net` double NOT NULL,
  PRIMARY KEY (`package_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `package_item`
--

LOCK TABLES `package_item` WRITE;
/*!40000 ALTER TABLE `package_item` DISABLE KEYS */;
INSERT INTO `package_item` VALUES (29,24,230,20,0.00575),(30,24,230,20,0.00575),(31,24,220,10,0.001375),(32,24,175,10,0.00109375),(33,25,230,49,0.034514375);
/*!40000 ALTER TABLE `package_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL AUTO_INCREMENT,
  `recorder_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `currency` varchar(45) NOT NULL,
  `payment_mode` varchar(45) NOT NULL,
  `date_paid` date NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`salary_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary`
--

LOCK TABLES `salary` WRITE;
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
INSERT INTO `salary` VALUES (1,9,1,1,1000,'Ghana Cedis','Cash','2019-07-01',0,'2019-07-02 18:21:42'),(2,9,1,9,2000,'Ghana Cedis','Cash','2019-07-11',0,'2019-07-02 18:42:57'),(3,9,1,1,2000,'Ghana Cedis','Cash','2019-08-01',0,'2019-08-04 04:09:55'),(4,9,1,1,600,'Indian Rupees','Cash','2019-08-01',0,'2019-08-04 04:19:58');
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sawmill`
--

DROP TABLE IF EXISTS `sawmill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sawmill` (
  `sawmill_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sawmill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sawmill`
--

LOCK TABLES `sawmill` WRITE;
/*!40000 ALTER TABLE `sawmill` DISABLE KEYS */;
INSERT INTO `sawmill` VALUES (1,'Fiapre Sawmill',1,'2019-07-03 21:26:51'),(2,'Fiapre Sawmill',1,'2019-07-03 21:32:50'),(3,'Dormaa Sawmill',0,'2019-07-04 03:32:54'),(4,'Fiapre Sawmill',0,'2019-07-10 17:04:16');
/*!40000 ALTER TABLE `sawmill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sawmill_price`
--

DROP TABLE IF EXISTS `sawmill_price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sawmill_price` (
  `sawmill_price_id` int(11) NOT NULL AUTO_INCREMENT,
  `sawmill_id` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `p1` double NOT NULL,
  `p2` double NOT NULL,
  `p3` double NOT NULL,
  `p4` double NOT NULL,
  `p5` double NOT NULL,
  `p6` double NOT NULL,
  `p7` double NOT NULL,
  `p8` double NOT NULL,
  `p9` double NOT NULL,
  `p10` double NOT NULL,
  `p11` double NOT NULL,
  `p12` double NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sawmill_price_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sawmill_price`
--

LOCK TABLES `sawmill_price` WRITE;
/*!40000 ALTER TABLE `sawmill_price` DISABLE KEYS */;
INSERT INTO `sawmill_price` VALUES (3,'2','straight',10.5,10.5,10.5,10.5,10.5,10.5,10.5,10.5,0,0,0,0,0),(5,'2','feet',23,23,23,23,23,23,23,23,0,0,0,0,0),(6,'2','bend',10,10,10,10,10,10,10,10,0,0,0,0,0),(7,'4','straight',10.5,10.5,10.5,10.5,10.5,10.5,10.5,10.5,10.5,10.5,10.5,10.5,0),(8,'3','bend',10.5,10.5,10.5,340.5,340.5,340.5,340.5,340.5,340.5,340.5,340.5,580.5,0),(9,'34','bend',12.8,12.8,12.8,12.8,12.8,12.8,12.8,12.8,12.8,12.8,12.8,12.8,0),(10,'4','bend',12.8,12.8,12.8,12.8,12.8,12.8,12.8,12.8,12.8,12.8,12.8,12.8,0),(11,'4','feet',30.3,30.3,30.3,30.3,30.3,30.31,30.34,30.36,30.38,30.42,30.46,30.51,0);
/*!40000 ALTER TABLE `sawmill_price` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipping`
--

DROP TABLE IF EXISTS `shipping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipping` (
  `shipping_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `combined_container` varchar(45) NOT NULL,
  `container_no` varchar(100) NOT NULL,
  `seal_no` varchar(100) NOT NULL,
  `weight` double NOT NULL,
  `buyer_name` varchar(100) NOT NULL,
  `num_pieces` int(11) NOT NULL,
  `cbm` double NOT NULL,
  `buyer_cbm` double NOT NULL,
  `shipping_charge` double NOT NULL,
  `delivery_date` date NOT NULL,
  `draft_bill_no` varchar(100) DEFAULT NULL,
  `local_charge` double NOT NULL,
  `freight` double NOT NULL,
  `obl` varchar(100) DEFAULT NULL,
  `obl_no` varchar(100) DEFAULT NULL,
  `courier` varchar(100) NOT NULL,
  `date_shipping` date NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`shipping_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipping`
--

LOCK TABLES `shipping` WRITE;
/*!40000 ALTER TABLE `shipping` DISABLE KEYS */;
INSERT INTO `shipping` VALUES (1,13,'1','BA 123 SNSN ','BA 34 SNSN ',2,'Oliver Boamah',8,2,2,3997,'2019-07-03','123',750,100,'Greater','34 GH 12','Done','2019-07-01',1,'2019-07-08 17:52:54');
/*!40000 ALTER TABLE `shipping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `date_employed` date NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'uploads/user/user.png',
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,'admin@yahoo.com','admin','Sharuk Khan','0552356520','Indian','Main Office','Manager','2019-06-13','uploads/user/user.png',0,'2019-06-08 22:47:58'),(4,'eddles5.ob@gmail.com','admin','Oliver Boamah','0246024707','Ghanaian','Main Office','Foreman','2019-06-17','uploads/user/user.png',0,'2019-06-09 00:42:44'),(5,'sparrowpaul@yahoo.com','sparrow','Sparrow Paul','0246024707','Ghanaian','Fiapre Sawmill','Foreman','2019-06-04','uploads/user/user.png',0,'2019-06-09 01:30:53'),(6,'obonty18@gmail.com','maristas','Jefferson Boamah','0549591123','Ghanaian','Main Office','Foreman','2019-06-17','uploads/user/user.png',0,'2019-06-17 05:40:24'),(7,'yeboah@yahoo.com','yeboah','Yeboah Murdoch','0546534662','Ghanaian','Main Office','Transport','2019-06-01','uploads/user/user.png',0,'2019-06-17 19:34:48'),(8,'emma@yahoo.com','emma','Emmanuel Botchway','0553295012','Ghanaian','Main Office','Forestry','2019-04-28','uploads/user/user.png',0,'2019-06-28 14:38:54'),(9,'richmond@yahoo.com','richmond','Richmond Sarfo','0246024707','Ghanaian','Main Office','Accountant','2019-07-01','uploads/user/user.png',0,'2019-07-02 16:44:27'),(10,'brown_belinda@yahoo.com','dada','Oliver Boamah','0553295012','Ghanaian','Main Office','Accountant','2019-07-18','uploads/user/user.png',0,'2019-07-04 01:06:05'),(11,'brown_belinda90d0@yahoo.com','as','Oliver Boamah','0553295012','Ghanaian','Main Office','Foreman','2019-07-17','uploads/user/user.png',0,'2019-07-04 05:08:18'),(12,'john@yahoo.com','dada','John Afoyese','0553295012','Ghanaian','Dormaa Sawmill','Foreman','2019-07-11','uploads/user/user.png',0,'2019-07-04 05:30:14'),(13,'richard@yahoo.com','richard','Richard Hendricks','0553295012','Ghanaian','Main Office','Shipping','2019-06-30','uploads/user/user.png',0,'2019-07-08 16:43:49'),(14,'jackson@yahoo.com','jackson','Micheal Jackson','0553295012','Ghanaian','Others','Others','2019-08-01','uploads/user/user.png',0,'2019-08-04 04:00:35');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff_account`
--

DROP TABLE IF EXISTS `staff_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff_account` (
  `staff_account_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_transaction_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `payment_mode` varchar(45) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`staff_account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Holds information about accounting for each money recieved by staff from the office.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff_account`
--

LOCK TABLES `staff_account` WRITE;
/*!40000 ALTER TABLE `staff_account` DISABLE KEYS */;
INSERT INTO `staff_account` VALUES (5,16,4,300,'Cash','Smart Bill','paid at santasi market','2019-06-26 18:02:42',0);
/*!40000 ALTER TABLE `staff_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff_transaction`
--

DROP TABLE IF EXISTS `staff_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff_transaction` (
  `staff_transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `recorder_id` int(11) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `balance` double NOT NULL DEFAULT '0',
  `payment_mode` varchar(45) NOT NULL,
  `accountable` tinyint(4) NOT NULL DEFAULT '1',
  `date_sent` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`staff_transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COMMENT='Stores information about monies dispatched to staff which they will be held accountable.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff_transaction`
--

LOCK TABLES `staff_transaction` WRITE;
/*!40000 ALTER TABLE `staff_transaction` DISABLE KEYS */;
INSERT INTO `staff_transaction` VALUES (15,9,'Sharuhk Khan',4,500,0,'Cash',0,'0000-00-00','2019-06-26 16:54:57',1),(16,9,'Sharuhk Khan',4,500,500,'Cash',1,'0000-00-00','2019-06-26 16:56:38',1),(17,9,'Sharuhk Khan',9,260,0,'Mobile Money',1,'2019-07-10','2019-07-02 17:27:53',1),(18,9,'Sharuhk Khan',9,200,0,'Cash',1,'2019-07-12','2019-07-02 18:46:26',0),(19,9,'Sharuhk Khan',1110,344,0,'Cash',1,'2019-06-30','2019-07-04 04:17:13',1);
/*!40000 ALTER TABLE `staff_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `supplier_rep` varchar(100) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `girth_start` int(11) NOT NULL,
  `girth_end` int(11) NOT NULL,
  `num_bend` int(11) NOT NULL,
  `num_short_len` int(11) NOT NULL,
  `num_full_len` int(11) NOT NULL,
  `price_bend` double NOT NULL,
  `price_short_len` double NOT NULL,
  `price_full_len` double NOT NULL,
  `amount` double NOT NULL,
  `date_of_stock` date NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Also known as Buying';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
INSERT INTO `stock` VALUES (1,1,'Mensah',1,41,50,10,2,2,7,6,15,112,'2019-06-21',0,'2019-06-10 00:55:20'),(2,1,'Prince',1,50,56,1,12,9,4,8,10,190,'2019-06-20',1,'2019-06-10 03:06:31'),(3,1,'Mensah',6,10,40,15,8,20,200,150,600,16200,'2019-06-03',0,'2019-06-17 06:29:45');
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` VALUES (1,'Forestry Commission','0244378129','Kumawu',0,'2019-06-09 23:10:55'),(2,'Jumanji Constructions','0246024707','Berlin Top',1,'2019-06-09 23:57:55'),(4,'Jumanji Constructions','0246024707','Berlin Top',1,'2019-06-10 00:06:36'),(5,'Dyan Travet T&G','0243674350','Pakyi No. 2',1,'2019-06-17 05:44:57'),(6,'Obonty Airways','0549591125','Atasemanso',0,'2019-06-17 06:26:18');
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `consumer_rep` varchar(100) NOT NULL,
  `consumer_id` int(11) NOT NULL,
  `amount_usd` double NOT NULL,
  `currency` varchar(45) NOT NULL,
  `amount_local` double NOT NULL,
  `payment_location` varchar(100) NOT NULL,
  `payment_mode` varchar(45) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction`
--

LOCK TABLES `transaction` WRITE;
/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transport`
--

DROP TABLE IF EXISTS `transport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transport` (
  `transport_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `credit` double DEFAULT NULL,
  `date_credit` date DEFAULT NULL,
  `credit_paid_by` varchar(100) DEFAULT NULL,
  `balance` double DEFAULT NULL,
  `picking_place` varchar(100) DEFAULT NULL,
  `shipping_line` varchar(100) DEFAULT NULL,
  `container_no` varchar(100) DEFAULT NULL,
  `container_no2` varchar(100) DEFAULT NULL,
  `offloading_place` varchar(100) DEFAULT NULL,
  `road_expenses` double DEFAULT NULL,
  `truck_no` varchar(100) DEFAULT NULL,
  `driver_name` varchar(100) DEFAULT NULL,
  `driver_no` varchar(100) DEFAULT NULL,
  `driver_license_no` varchar(100) DEFAULT NULL,
  `loading_place` varchar(100) DEFAULT NULL,
  `total_tpt` double DEFAULT NULL,
  `advance` double DEFAULT NULL,
  `payment_mode` varchar(100) DEFAULT NULL,
  `delivery` varchar(100) DEFAULT NULL,
  `total_expenses` double DEFAULT NULL,
  `date_loading` date DEFAULT NULL,
  `container_pickup_fee` double DEFAULT NULL,
  `seal_no` varchar(100) DEFAULT NULL,
  `seal_no2` varchar(100) DEFAULT NULL,
  `tpt_name` varchar(100) DEFAULT NULL,
  `commission` double DEFAULT NULL,
  `date_advance` date DEFAULT NULL,
  `after_loading` double DEFAULT NULL,
  `date_delivery` date DEFAULT NULL,
  `balance_left` double DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `extra_payment` double DEFAULT NULL,
  `balance_left_paid_by` varchar(100) DEFAULT NULL,
  `driver_name2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`transport_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transport`
--

LOCK TABLES `transport` WRITE;
/*!40000 ALTER TABLE `transport` DISABLE KEYS */;
INSERT INTO `transport` VALUES (1,7,3535,'2019-07-03','John Legend',198,'Sunyani','Tema Harbour','BA 123 ER','BA 209 BQSP ','Accra',200,'BA 200 100','Kwesi Arthur','053 123 1234','QS 123 SNSN ','Fiapre',455,4555,'Cash','Tema Habour',1000,'2019-07-05',300,'BA 34 SNSN ','25 POL 34','poly',70,'2019-07-01',43,'2019-07-19',50,1,'2019-07-09 01:34:22',10,'Sharukh khan','Samuel'),(2,7,400,'2019-07-04','John Legend',200,'Sunyani','Tema Harbour','BA 123 ER','BA 209 BQSP ','Accra',56,'BA 200 100','Kwesi Arthur','053 123 1234','QS 123 SNSN ','Fiapre',455,300,'Cash','Lapaz',2000,'2019-07-10',30,'BA 34 SNSN ','25 POL 34','poly',30,'2019-07-02',100,'2019-07-18',60,0,'2019-07-09 02:10:49',200,'Sharukh khan','Samuel');
/*!40000 ALTER TABLE `transport` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-04  4:02:39
