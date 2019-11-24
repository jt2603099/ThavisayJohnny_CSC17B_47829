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
-- Table structure for table `jthavisay_entity_author`
--

DROP TABLE IF EXISTS `jthavisay_entity_author`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_entity_author` (
  `author_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_entity_author`
--

LOCK TABLES `jthavisay_entity_author` WRITE;
/*!40000 ALTER TABLE `jthavisay_entity_author` DISABLE KEYS */;
INSERT INTO `jthavisay_entity_author` VALUES (1,'Gerald, Fitz'),(2,'William, Robert'),(3,'Ford, Harry'),(4,'MacDonald, Don'),(5,'Truffle, Larry'),(6,'Nixon, Steve');
/*!40000 ALTER TABLE `jthavisay_entity_author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jthavisay_entity_book`
--

DROP TABLE IF EXISTS `jthavisay_entity_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_entity_book` (
  `book_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `ISBN-10` int(10) DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_entity_book`
--

LOCK TABLES `jthavisay_entity_book` WRITE;
/*!40000 ALTER TABLE `jthavisay_entity_book` DISABLE KEYS */;
INSERT INTO `jthavisay_entity_book` VALUES (1,'Walk to the Moon',1934150381,'2019-01-12'),(2,'Dance to the Crowd',1147423647,'2013-02-15'),(3,'Mathematics: How It Began',1147483647,'2004-05-29'),(4,'Intro to Basic Physics',1547483647,'2001-06-21'),(5,'Not Harry Potter',1205225114,'1999-11-01'),(6,'Meaning of Life',1147483647,'2006-08-01');
/*!40000 ALTER TABLE `jthavisay_entity_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jthavisay_entity_publisher`
--

DROP TABLE IF EXISTS `jthavisay_entity_publisher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_entity_publisher` (
  `publisher_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`publisher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_entity_publisher`
--

LOCK TABLES `jthavisay_entity_publisher` WRITE;
/*!40000 ALTER TABLE `jthavisay_entity_publisher` DISABLE KEYS */;
INSERT INTO `jthavisay_entity_publisher` VALUES (1,'Book Inc.'),(2,'Written in the Stars'),(3,'The Write Way'),(4,'Paperclip Inc.');
/*!40000 ALTER TABLE `jthavisay_entity_publisher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jthavisay_enum_subject`
--

DROP TABLE IF EXISTS `jthavisay_enum_subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_enum_subject` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `enum_subject` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_enum_subject`
--

LOCK TABLES `jthavisay_enum_subject` WRITE;
/*!40000 ALTER TABLE `jthavisay_enum_subject` DISABLE KEYS */;
INSERT INTO `jthavisay_enum_subject` VALUES (1,'Fiction'),(2,'Math'),(3,'Science'),(4,'Physical Science');
/*!40000 ALTER TABLE `jthavisay_enum_subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jthavisay_xref_book_author`
--

DROP TABLE IF EXISTS `jthavisay_xref_book_author`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_xref_book_author` (
  `xref_book_author_id` int(10) NOT NULL AUTO_INCREMENT,
  `book_id` int(10) DEFAULT NULL,
  `author_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_book_author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_xref_book_author`
--

LOCK TABLES `jthavisay_xref_book_author` WRITE;
/*!40000 ALTER TABLE `jthavisay_xref_book_author` DISABLE KEYS */;
INSERT INTO `jthavisay_xref_book_author` VALUES (1,1,1),(2,2,1),(3,3,2),(4,4,4),(5,5,5),(6,6,6);
/*!40000 ALTER TABLE `jthavisay_xref_book_author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jthavisay_xref_book_publisher`
--

DROP TABLE IF EXISTS `jthavisay_xref_book_publisher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_xref_book_publisher` (
  `xref_book_publisher_id` int(10) NOT NULL AUTO_INCREMENT,
  `book_id` int(10) DEFAULT NULL,
  `publisher_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_book_publisher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_xref_book_publisher`
--

LOCK TABLES `jthavisay_xref_book_publisher` WRITE;
/*!40000 ALTER TABLE `jthavisay_xref_book_publisher` DISABLE KEYS */;
INSERT INTO `jthavisay_xref_book_publisher` VALUES (1,1,3),(2,2,3),(3,3,1),(4,4,1),(5,5,4),(6,6,2);
/*!40000 ALTER TABLE `jthavisay_xref_book_publisher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jthavisay_xref_book_subject`
--

DROP TABLE IF EXISTS `jthavisay_xref_book_subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_xref_book_subject` (
  `xref_book_subject_id` int(10) NOT NULL AUTO_INCREMENT,
  `book_id` int(10) DEFAULT NULL,
  `subject_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_book_subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_xref_book_subject`
--

LOCK TABLES `jthavisay_xref_book_subject` WRITE;
/*!40000 ALTER TABLE `jthavisay_xref_book_subject` DISABLE KEYS */;
INSERT INTO `jthavisay_xref_book_subject` VALUES (1,1,1),(2,2,1),(3,3,2),(4,4,3),(5,5,1),(6,6,4);
/*!40000 ALTER TABLE `jthavisay_jthavisay_entity_bookxref_book_subject` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-23 22:43:27
