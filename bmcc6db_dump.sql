-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: bmcc6db
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB

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
-- Table structure for table `activity`
--
DROP DATABASE [IF EXISTS] bmcc6db;
CREATE Database bmcc6db;
use bmcc6db;


DROP TABLE IF EXISTS `activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity` (
  `a_id` varchar(255) DEFAULT NULL,
  `a_date` date DEFAULT NULL,
  `a_time` time DEFAULT NULL,
  `a_event` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity`
--

LOCK TABLES `activity` WRITE;
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;
INSERT INTO `activity` VALUES ('kbyron@bmcc.cuny.edu','2019-02-24','06:15:00','register'),('admin@bmcc','2019-02-24','06:15:00','register'),('whoopi@gmail','2019-02-24','06:15:00','register'),('tiger@gmail','2019-02-24','06:15:00','register'),('bill@yahoo','2019-02-24','06:15:00','register'),('bill@yahoo','2019-02-24','06:20:00','login'),('bill@yahoo','2019-02-24','06:25:00','calc'),('bill@yahoo','2019-02-24','06:30:00','logout'),('kbyron@bmcc.cuny.edu','2020-05-01','12:13:29','login'),('kbyron@bmcc.cuny.edu','2020-05-01','12:13:49','calc'),('kbyron@bmcc.cuny.edu','2020-05-01','12:36:14','login'),('kbyron@bmcc.cuny.edu','2020-05-01','13:46:14','logout'),('dablas@yahoo','2020-05-01','15:43:27','register'),('kbyron@bmcc.cuny.edu','2020-05-01','15:48:07','login'),('kbyron@bmcc.cuny.edu','2020-05-01','15:49:28','logout'),('kbyron@bmcc.cuny.edu','2020-05-01','15:52:43','login'),('kbyron@bmcc.cuny.edu','2020-05-01','15:56:37','logout'),('kbyron@bmcc.cuny.edu','2020-05-02','08:43:58','login'),('kbyron@bmcc.cuny.edu','2020-05-02','12:17:59','login'),('kbyron@bmcc.cuny.edu','2020-05-03','09:01:54','login'),('kbyron@bmcc.cuny.edu','2020-05-03','09:08:31','logout'),('kbyron@bmcc.cuny.edu','2020-05-03','09:14:38','login-pw'),('kbyron@bmcc.cuny.edu','2020-05-03','10:33:52','logout'),('kbyron@bmcc.cuny.edu','2020-05-03','11:16:00','login-pw'),('kbyron@bmcc.cuny.edu','2020-05-09','06:34:17','login-pw'),('kbyron@bmcc.cuny.edu','2020-05-09','14:10:58','login-pw'),('kbyron@bmcc.cuny.edu','2020-05-10','09:36:19','login-pw'),('kbyron@bmcc.cuny.edu','2020-05-10','17:03:54','login-pw'),('kbyron@bmcc.cuny.edu','2020-05-11','09:28:27','login-pw'),('kbyron@bmcc.cuny.edu','2020-05-12','22:01:06','login-pw'),('kbyron@bmcc.cuny.edu','2020-05-29','07:44:07','login'),('kbyron@bmcc.cuny.edu','2020-05-29','14:55:46','logout'),('kbyron@bmcc.cuny.edu','2020-05-29','14:57:00','login'),('kbyron@bmcc.cuny.edu','2020-05-29','15:07:58','calc');
/*!40000 ALTER TABLE `activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campsite`
--

DROP TABLE IF EXISTS `campsite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campsite` (
  `cs_id` varchar(255) DEFAULT NULL,
  `cs_name` varchar(255) DEFAULT NULL,
  `cs_city` varchar(255) DEFAULT NULL,
  `cs_state` varchar(255) DEFAULT NULL,
  `cs_fee` decimal(9,2) DEFAULT NULL,
  `cs_capacity` int(11) DEFAULT NULL,
  `cs_usage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campsite`
--

LOCK TABLES `campsite` WRITE;
/*!40000 ALTER TABLE `campsite` DISABLE KEYS */;
INSERT INTO `campsite` VALUES ('C1','Cranberry Lake Campground','Lake Placid','NY',10.00,50,10),('C2','Watkins Glen State Park','Watkins Glen','NY',15.00,40,13),('C3','Cherry Plain State Park','Cherry Plain','NY',12.00,60,12),('C4','Saranac Lake Islands','Saranac Lake','NY',10.00,30,27),('C5','Letchworth State Park','Castile','NY',20.00,100,14);
/*!40000 ALTER TABLE `campsite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `c_id` varchar(255) DEFAULT NULL,
  `c_fname` varchar(255) DEFAULT NULL,
  `c_lname` varchar(255) DEFAULT NULL,
  `c_pw` varchar(255) DEFAULT NULL,
  `c_piclink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('admin@bmcc','ann','apple','3481d95f26325bf6e7ceb5e9aabd5e46d9df0bf6e9eabbe7d59e90f5d0aebc34','images/ann_pic.png'),('bill@yahoo','bill','grates','3481d95f26325bf6e7ceb5e9aabd5e46d9df0bf6e9eabbe7d59e90f5d0aebc34','images/bill_pic.jpg'),('kbyron@bmcc.cuny.edu','prof','byron','3481d95f26325bf6e7ceb5e9aabd5e46d9df0bf6e9eabbe7d59e90f5d0aebc34','images/prof_pic.jpg'),('whoopi@gmail','whoopi','goldstein','3481d95f26325bf6e7ceb5e9aabd5e46d9df0bf6e9eabbe7d59e90f5d0aebc34','images/whoopi_pic.jpg'),('tiger@gmail','tiger','wool','3481d95f26325bf6e7ceb5e9aabd5e46d9df0bf6e9eabbe7d59e90f5d0aebc34','images/tiger_pic.jpg'),('blahs@yahoo','bill','blahs','3481d95f26325bf6e7ceb5e9aabd5e46d9df0bf6e9eabbe7d59e90f5d0aebc34','images/dablas_pic.svg');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `r_cid` varchar(255) DEFAULT NULL,
  `r_csid` varchar(255) DEFAULT NULL,
  `r_arrival` date DEFAULT NULL,
  `r_stay` int(11) DEFAULT NULL,
  `r_charge` decimal(9,2) DEFAULT NULL,
  `r_date` date DEFAULT NULL,
  `r_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES ('admin@bmcc','C1','2020-10-24',2,20.00,'2020-05-01','12:13:29'),('admin@bmcc','C5','2021-02-24',3,60.00,'2020-05-01','12:13:29'),('kbyron@bmcc.cuny.edu','C2','2021-01-01',5,75.00,'2020-05-01','12:13:29'),('kbyron@bmcc.cuny.edu','C4','2021-02-02',2,20.00,'2020-05-01','13:04:29'),('kbyron@bmcc.cuny.edu','C4','2021-03-03',10,100.00,'2020-05-01','13:14:27'),('kbyron@bmcc.cuny.edu','C4','2020-09-16',4,40.00,'2020-05-01','15:54:30'),('kbyron@bmcc.cuny.edu','C2','2020-11-23',2,30.00,'2020-05-02','12:22:27');
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-29 20:21:28
