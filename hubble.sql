CREATE DATABASE  IF NOT EXISTS `hubble` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `hubble`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: hubble
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `need_validation` tinyint(1) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workforce` int(11) NOT NULL,
  `creation` date NOT NULL,
  `picture` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_id` int(11) NOT NULL,
  `recruiter_id` int(11) DEFAULT NULL,
  `premium` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4FBF094F443707B0` (`field_id`),
  KEY `FK_4FBF094F156BE243` (`recruiter_id`),
  CONSTRAINT `FK_4FBF094F156BE243` FOREIGN KEY (`recruiter_id`) REFERENCES `recruiter` (`id`),
  CONSTRAINT `FK_4FBF094F443707B0` FOREIGN KEY (`field_id`) REFERENCES `field` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field`
--

DROP TABLE IF EXISTS `field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field`
--

LOCK TABLES `field` WRITE;
/*!40000 ALTER TABLE `field` DISABLE KEYS */;
INSERT INTO `field` VALUES (2,'Food & Environment'),(3,'Health'),(4,'Energy & Transport'),(5,'Aero Space'),(6,'Business'),(7,'Personal Branding'),(8,'Tech'),(9,'Machine & Maintenance'),(10,'Security');
/*!40000 ALTER TABLE `field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `need_validation` tinyint(1) NOT NULL,
  `duration` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_id` int(11) NOT NULL,
  `recruiter_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FBD8E0F8443707B0` (`field_id`),
  KEY `IDX_FBD8E0F8156BE243` (`recruiter_id`),
  KEY `IDX_FBD8E0F8979B1AD6` (`company_id`),
  CONSTRAINT `FK_FBD8E0F8156BE243` FOREIGN KEY (`recruiter_id`) REFERENCES `recruiter` (`id`),
  CONSTRAINT `FK_FBD8E0F8443707B0` FOREIGN KEY (`field_id`) REFERENCES `field` (`id`),
  CONSTRAINT `FK_FBD8E0F8979B1AD6` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job`
--

LOCK TABLES `job` WRITE;
/*!40000 ALTER TABLE `job` DISABLE KEYS */;
INSERT INTO `job` VALUES (2,0,'6 months mission','Orilla Planet','Nursery Plants Grower','2200 SC','Provide daily nursery oversight and management, communicating with staff regarding schedules and assignment of duties. Oversees overall nursery work flow. Nursery growers raise and sell plants, flowers, shrubs, and trees. Some plants are grown from seed in the nursery, outside in beds, or inside in greenhouses.','NurseryPlantsGrower.jpg',2,8,NULL),(3,1,'1 year mission','Tatooine Planet','Cyborg Psychologist','2000 SC','As advancing technology allows scientists to create increasingly elaborate synthetic organs and robotic limbs, more people will need to deal with living as part-machines. A Cyborg Psychologists is a mental health professionals who will specialize in helping people come to terms with living as cyborgs.','CyborgPsychologist.jpg',3,9,NULL),(4,1,'+1 year mission','The Moon','HyperLoop Mechanics','1700 SC','Through those past centuries, hyper loop mechanics has been developed and became the standard way to move around. But there is still some research to be done to improve the speed.','HyperLoopMechanics.jpg',5,9,NULL),(5,1,'1 year mission','Nibiru Planet','Quantum Machine Learning Analyst','1800 SC','Quantum computing is the future of computing, and machine learning is at the core of the ongoing AI revolution. When extremely fast computing is combined with self-learning algorithms, unimaginable levels of performance can be achieved, and business problems solved, that are computationally intractable with today’s supercomputers. Our mission is to take a quantum-assisted, AI-driven leap into the future. We are interested in building machine learning algorithms for currently envisioned quantum computing devices as well as quantum-inspired algorithms that can be implemented on today’s computers.','QuantumMachineLearningAnalyst.jpg',4,11,NULL),(6,1,'6 months mission','Neptune Planet','Digital Death Manager','3000 SC','This person makes sure that all information about you will be deleted once you are dead. In other words, he manages the community of the deceased in the same way that a community manager manages the community of a brand.','DigitalDeathManager.jpg',6,12,NULL),(7,1,'+1 year mission','Pandora Planet','Personal Memory Curator','1650 SC','As a personal memory curator, you will consult with patients and stakeholders to generate specifications for virtual reality experiences that bring a particular time, place or event to life. The ideal candidate will have a high degree of emotional intelligence to uncover lost memories and experiences, together with a solid grounding in virtual reality simulation techniques. Tailoring and managing the “advance memory statement” is a central requirement of the role.','PersonalMemoryCurator.jpg',7,11,NULL),(8,1,'+1 year mission','Theed, Naboo','Dream Specialist','5000 SC','Alternative energy sources are the only hope. Solar, wind and hydroelectric energy is already implemented a lot. The question is, which one is right for your home, your community and your city? An expert in all things energy and go from city to city around the world assessing the best sustainable energy source for each place.','DreamSpecialist.jpg',8,9,NULL),(9,1,'6 months mission','Mongo Planet','Space Garbage Designer','2400 SC','These designers will make careers out of perfecting the art of upcycling. Upcycling is a way to use trash to create new, better quality items. Garbage designers will see to it that upcycling attempts are efficient and successful, designing ways to make new items with very little waste. The requirements for this job will include a background in materials science and engineering, and with industrial design.','SpaceGarbageDesigner.jpg',9,12,NULL),(10,1,'6 months mission','Omega Nebula Station','SpaceShip Security Officer','2500 SC','The Ship Security Officer is appointed by the security company and the ship’s master to ensuring vessel security. As a Ship Security Officer, you are responsible to implementing and maintaining the ship security plan. This involves creating a concise flow of communication by liaising with the Company Ship Officer, as well as security officers from other ships, ports, port facilities and associated service providers.','SpaceShipSecurityOfficer.jpg',10,12,NULL);
/*!40000 ALTER TABLE `job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20180622091304'),('20180622091551'),('20180622100129'),('20180622140939'),('20180622142718'),('20180627080519'),('20180627080541'),('20180627080714');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profession`
--

DROP TABLE IF EXISTS `profession`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profession` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BA930D69443707B0` (`field_id`),
  CONSTRAINT `FK_BA930D69443707B0` FOREIGN KEY (`field_id`) REFERENCES `field` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profession`
--

LOCK TABLES `profession` WRITE;
/*!40000 ALTER TABLE `profession` DISABLE KEYS */;
/*!40000 ALTER TABLE `profession` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruiter`
--

DROP TABLE IF EXISTS `recruiter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recruiter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruiter`
--

LOCK TABLES `recruiter` WRITE;
/*!40000 ALTER TABLE `recruiter` DISABLE KEYS */;
INSERT INTO `recruiter` VALUES (8,'unilever','unilever',NULL,NULL),(9,'Total','Total',NULL,NULL),(11,'test','test',NULL,NULL),(12,'root','root',NULL,NULL);
/*!40000 ALTER TABLE `recruiter` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-28 18:24:40
