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
-- Table structure for table `jthavisay_entity_assignment`
--

DROP TABLE IF EXISTS `jthavisay_entity_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_entity_assignment` (
  `assignment_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_entity_assignment`
--

LOCK TABLES `jthavisay_entity_assignment` WRITE;
/*!40000 ALTER TABLE `jthavisay_entity_assignment` DISABLE KEYS */;
INSERT INTO `jthavisay_entity_assignment` VALUES (1,'Polynomials #1-4'),(2,'Quantum Homework #1-9'),(3,'Synthetic Division #1-4'),(4,'More Polynomials #1-4'),(5,'Quantum Mechanics pt.2 #1-4'),(6,'Cardoid Graphing #1-5 odd');
/*!40000 ALTER TABLE `jthavisay_entity_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jthavisay_entity_course`
--

DROP TABLE IF EXISTS `jthavisay_entity_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_entity_course` (
  `course_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `section_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_entity_course`
--

LOCK TABLES `jthavisay_entity_course` WRITE;
/*!40000 ALTER TABLE `jthavisay_entity_course` DISABLE KEYS */;
INSERT INTO `jthavisay_entity_course` VALUES (1,'Pre-Calculus',12323),(2,'History',12324),(3,'Gym',12325),(4,'Quantum Mechanics',12326),(5,'Assistant Teacher',12327),(6,'Tennis',12328);
/*!40000 ALTER TABLE `jthavisay_entity_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jthavisay_entity_instructor`
--

DROP TABLE IF EXISTS `jthavisay_entity_instructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_entity_instructor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `instructor_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_entity_instructor`
--

LOCK TABLES `jthavisay_entity_instructor` WRITE;
/*!40000 ALTER TABLE `jthavisay_entity_instructor` DISABLE KEYS */;
INSERT INTO `jthavisay_entity_instructor` VALUES (1,'Cruz, James',1214321),(2,'Blatvia, Forsen',1264312),(3,'Brown, Jordan',1215412),(4,'Lannister, Chain',1221231),(5,'Ego, Ian',1241251),(6,'Jeopardy, Daisy',1241231);
/*!40000 ALTER TABLE `jthavisay_entity_instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jthavisay_entity_student`
--

DROP TABLE IF EXISTS `jthavisay_entity_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_entity_student` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `student_id` mediumint(7) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_entity_student`
--

LOCK TABLES `jthavisay_entity_student` WRITE;
/*!40000 ALTER TABLE `jthavisay_entity_student` DISABLE KEYS */;
INSERT INTO `jthavisay_entity_student` VALUES (1,'Waters, Crystal',2314213),(2,'Johnson, Jack',2331531),(3,'Sheppard, Amy',2311431),(4,'Gonzales, Samantha',2323145),(5,'White, Derek',2353123),(6,'Nguyen, Kevin',2351232);
/*!40000 ALTER TABLE `jthavisay_entity_student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jthavisay_term_dept`
--

DROP TABLE IF EXISTS `jthavisay_term_dept`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_term_dept` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `enum_term` varchar(50) DEFAULT NULL,
  `enum_dept` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_term_dept`
--

LOCK TABLES `jthavisay_term_dept` WRITE;
/*!40000 ALTER TABLE `jthavisay_term_dept` DISABLE KEYS */;
INSERT INTO `jthavisay_term_dept` VALUES (1,'Fall','Math'),(2,'Fall','Science'),(3,'Fall','Math'),(4,'Fall','Physical Education'),(5,'Fall','Science'),(6,'Fall','Math');
/*!40000 ALTER TABLE `jthavisay_term_dept` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jthavisay_xref_assignment_student`
--

DROP TABLE IF EXISTS `jthavisay_xref_assignment_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_xref_assignment_student` (
  `xref_assignment_student_id` int(10) NOT NULL AUTO_INCREMENT,
  `assignment_id` int(10) DEFAULT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`xref_assignment_student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_xref_assignment_student`
--

LOCK TABLES `jthavisay_xref_assignment_student` WRITE;
/*!40000 ALTER TABLE `jthavisay_xref_assignment_student` DISABLE KEYS */;
INSERT INTO `jthavisay_xref_assignment_student` VALUES (1,1,'3'),(2,2,'4'),(3,4,'3'),(4,1,'2'),(5,6,'5'),(6,1,'1');
/*!40000 ALTER TABLE `jthavisay_xref_assignment_student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jthavisay_xref_course_assignment`
--

DROP TABLE IF EXISTS `jthavisay_xref_course_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_xref_course_assignment` (
  `xref_course_assignment_id` int(10) NOT NULL AUTO_INCREMENT,
  `course_id` int(10) DEFAULT NULL,
  `assignment_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_course_assignment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_xref_course_assignment`
--

LOCK TABLES `jthavisay_xref_course_assignment` WRITE;
/*!40000 ALTER TABLE `jthavisay_xref_course_assignment` DISABLE KEYS */;
INSERT INTO `jthavisay_xref_course_assignment` VALUES (1,1,2),(2,1,4),(3,1,6),(4,1,3),(5,4,2),(6,4,5);
/*!40000 ALTER TABLE `jthavisay_xref_course_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jthavisay_xref_instructor_course`
--

DROP TABLE IF EXISTS `jthavisay_xref_instructor_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jthavisay_xref_instructor_course` (
  `xref_instructor_course_id` int(10) NOT NULL AUTO_INCREMENT,
  `instructor_id` int(10) DEFAULT NULL,
  `course_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_instructor_course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jthavisay_xref_instructor_course`
--

LOCK TABLES `jthavisay_xref_instructor_course` WRITE;
/*!40000 ALTER TABLE `jthavisay_xref_instructor_course` DISABLE KEYS */;
INSERT INTO `jthavisay_xref_instructor_course` VALUES (1,2,1),(2,2,1),(3,3,2),(4,3,2),(5,3,1),(6,4,4);
/*!40000 ALTER TABLE `jthavisay_xref_instructor_course` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-23 22:51:13
