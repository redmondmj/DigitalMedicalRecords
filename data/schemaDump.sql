/*CREATE DATABASE  IF NOT EXISTS `cachahlthrec_tables` !40100 DEFAULT CHARACTER SET utf8 */;
/*USE `cachahlthrec_tables`*/;
-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: cachahlthrec_tables
-- ------------------------------------------------------
-- Server version	5.7.19-log

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
-- Table structure for table `lu_dispensary`
--

DROP TABLE IF EXISTS `lu_dispensary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lu_dispensary` (
  `DispLineNum` int(10) NOT NULL,
  `Dispensary` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`DispLineNum`),
  UNIQUE KEY `LU_DispensaryDispensary` (`Dispensary`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lu_dispensary`
--

LOCK TABLES `lu_dispensary` WRITE;
/*!40000 ALTER TABLE `lu_dispensary` DISABLE KEYS */;
INSERT INTO `lu_dispensary` VALUES (1,'Bugola'),(2,'Bugorola'),(3,'Bukondo'),(4,'Buzegwe'),(5,'Gallu'),(6,'Hamukoko'),(7,'Hamuyebe'),(8,'Igalla'),(9,'Kabuhinzi'),(10,'Kagunguli'),(11,'Kaseni'),(12,'Kazilankanda'),(13,'Kigara'),(14,'Muhula'),(15,'Mukunu'),(16,'Muluseni'),(17,'Muriti'),(18,'Murutilima'),(19,'Ukara');
/*!40000 ALTER TABLE `lu_dispensary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lu_village`
--

DROP TABLE IF EXISTS `lu_village`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lu_village` (
  `VLineNum` int(10) NOT NULL,
  `Village` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`VLineNum`),
  UNIQUE KEY `Village` (`Village`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lu_village`
--

LOCK TABLES `lu_village` WRITE;
/*!40000 ALTER TABLE `lu_village` DISABLE KEYS */;
INSERT INTO `lu_village` VALUES (1,'Bugola'),(2,'Bugorola'),(3,'Bukondo'),(4,'Buzegwe'),(5,'Gallu'),(6,'Hamukoko'),(7,'Hamuyebe'),(8,'Igalla'),(9,'Kabuhinzi'),(10,'Kagunguli'),(11,'Kaseni'),(12,'Kazilankanda'),(13,'Kigara'),(14,'Muhula'),(15,'Mukunu'),(16,'Muluseni'),(17,'Muriti'),(18,'Murutilima'),(19,'Ukara');
/*!40000 ALTER TABLE `lu_village` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_demog`
--

DROP TABLE IF EXISTS `tbl_demog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_demog` (
  `DemogLineNum` int(10) NOT NULL,
  `ChartNum` int(10) DEFAULT NULL,
  `PatientFirstName` varchar(100) DEFAULT NULL,
  `PatientLastName` varchar(100) DEFAULT NULL,
  `PtVillage` varchar(200) DEFAULT NULL,
  `Male` tinyint(1) NOT NULL,
  `Female` tinyint(1) NOT NULL,
  PRIMARY KEY (`DemogLineNum`),
  UNIQUE KEY `ChartNum` (`ChartNum`),
  KEY `LU_VillageTbl_Demog` (`PtVillage`),
  KEY `PatientName` (`PatientFirstName`),
  KEY `PatientLastName` (`PatientLastName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_demog`
--

LOCK TABLES `tbl_demog` WRITE;
/*!40000 ALTER TABLE `tbl_demog` DISABLE KEYS */;
INSERT INTO `tbl_demog` VALUES (1,1,'Donald','Duck','Bugorola',1,0),(4,2,'Minnie','Mouse','Gallu',0,1),(5,3,'Alfred','Newman','Mukunu',1,0),(6,4,'Warren','Meek','Hamukoko',1,0),(17,5,'Elizabeth','Good','Gallu',0,1),(18,6,'john','redmond','Hamuyebe',1,0);
/*!40000 ALTER TABLE `tbl_demog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_visit`
--

DROP TABLE IF EXISTS `tbl_visit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_visit` (
  `TXLineNum` int(10) NOT NULL,
  `ChartNum` int(10) DEFAULT NULL,
  `DemogLineNum` int(10) DEFAULT NULL,
  `VisitDate` datetime DEFAULT NULL,
  `VisitTime` datetime DEFAULT NULL,
  `VisitMonth` varchar(6) DEFAULT NULL,
  `VisDispensary` varchar(50) DEFAULT NULL,
  `Testing` tinyint(1) NOT NULL,
  `TestingComplete` tinyint(1) NOT NULL,
  `MED` tinyint(1) NOT NULL,
  `MedComplete` tinyint(1) NOT NULL,
  `GYN` tinyint(1) NOT NULL,
  `GynComplete` tinyint(1) NOT NULL,
  `OPHT` tinyint(1) NOT NULL,
  `OphtComplete` tinyint(1) NOT NULL,
  `DENT` tinyint(1) NOT NULL,
  `DentComplete` tinyint(1) NOT NULL,
  `VenDis` tinyint(1) NOT NULL,
  `VComplete` tinyint(1) NOT NULL,
  `PtAge` int(10) DEFAULT NULL,
  `PtWeight(KG)` double DEFAULT NULL,
  `Temperature` int(10) DEFAULT NULL,
  `BloodPress` varchar(50) DEFAULT NULL,
  `Glucose` int(10) DEFAULT NULL,
  `HeartRate` int(10) DEFAULT NULL,
  `PregYes` tinyint(1) NOT NULL,
  `PregNo` tinyint(1) NOT NULL,
  `BreastFeedYes` tinyint(1) NOT NULL,
  `BreastFeedNo` tinyint(1) NOT NULL,
  `VTest` tinyint(1) NOT NULL,
  `VResPos` tinyint(1) NOT NULL,
  `MalariaTest` tinyint(1) NOT NULL,
  `MalariaResPos` tinyint(1) NOT NULL,
  `SyphilisTest` tinyint(1) NOT NULL,
  `SyphResPos` tinyint(1) NOT NULL,
  `TyphTest` tinyint(1) NOT NULL,
  `TyphResPos` tinyint(1) NOT NULL,
  `UrineTest` tinyint(1) NOT NULL,
  `UrLeucTest` tinyint(1) NOT NULL,
  `UrLeucResPos` tinyint(1) NOT NULL,
  `UrRBCTest` tinyint(1) NOT NULL,
  `UrRBCResPos` tinyint(1) NOT NULL,
  `UrGlucoseTest` tinyint(1) NOT NULL,
  `UrGlucResPos` tinyint(1) NOT NULL,
  `UrNitritesTest` tinyint(1) NOT NULL,
  `UrNitriteResPos` tinyint(1) NOT NULL,
  `PregnancyTest` tinyint(1) NOT NULL,
  `PregResPos` tinyint(1) NOT NULL,
  `ChiefComplaint` varchar(250) DEFAULT NULL,
  `Assessment` longtext,
  `LastHIVTest` varchar(50) DEFAULT NULL,
  `LastPZQTx` varchar(50) DEFAULT NULL,
  `LastWormTx` varchar(50) DEFAULT NULL,
  `LastVitA` varchar(50) DEFAULT NULL,
  `PrevMeds` longtext,
  `DX_Healthy` tinyint(1) NOT NULL,
  `DX_NoTreatment` tinyint(1) NOT NULL,
  `DX_MSK` tinyint(1) NOT NULL,
  `DX_+` tinyint(1) NOT NULL,
  `DX_++` tinyint(1) NOT NULL,
  `DX_+++` tinyint(1) NOT NULL,
  `DX_Worms` tinyint(1) NOT NULL,
  `DX_Asthma` tinyint(1) NOT NULL,
  `DX_Bronchitis` tinyint(1) NOT NULL,
  `DX_Pneumonia` tinyint(1) NOT NULL,
  `DX_Cough` tinyint(1) NOT NULL,
  `DX_Malaria` tinyint(1) NOT NULL,
  `DX_Schisto` tinyint(1) NOT NULL,
  `DX_Typhoid` tinyint(1) NOT NULL,
  `DX_Gerd` tinyint(1) NOT NULL,
  `DX_PUD` tinyint(1) NOT NULL,
  `DX_Diarrhea` tinyint(1) NOT NULL,
  `DX_DiarrheaBloody` tinyint(1) NOT NULL,
  `DX_DiarrheaWatery` tinyint(1) NOT NULL,
  `DX_Hypertension` tinyint(1) NOT NULL,
  `DX_Diabetes` tinyint(1) NOT NULL,
  `DX_Constipation` tinyint(1) NOT NULL,
  `DX_PID` tinyint(1) NOT NULL,
  `DX_STI` tinyint(1) NOT NULL,
  `DX_Syphilis` tinyint(1) NOT NULL,
  `DX_Topical` tinyint(1) NOT NULL,
  `DX_TopicalDescrip` varchar(200) DEFAULT NULL,
  `DX_Other` tinyint(1) NOT NULL,
  `DX_OtherDescrip` varchar(200) DEFAULT NULL,
  `WeeksPregnant` double DEFAULT NULL,
  `RegANCYes` tinyint(1) NOT NULL,
  `RegANCNo` tinyint(1) NOT NULL,
  `PrevIPTpYes` tinyint(1) NOT NULL,
  `PrevIPTpNever` tinyint(1) NOT NULL,
  `LastIPTpGT1MonYes` tinyint(1) NOT NULL,
  `LastIPTpGT1MonNo` tinyint(1) NOT NULL,
  `ClinicalAnemiaYes` tinyint(1) NOT NULL,
  `ClinicalAnemiaNo` tinyint(1) NOT NULL,
  `SulfadarSP500/25Tabs3` tinyint(1) NOT NULL,
  `SulfadarSP500/25Tabs6` tinyint(1) NOT NULL,
  `SulfadarSP500/25Tabs9` tinyint(1) NOT NULL,
  `Rx_Paracetamol` tinyint(1) NOT NULL,
  `Rx_BenzPen` tinyint(1) NOT NULL,
  `Rx_Ceftriaxone` tinyint(1) NOT NULL,
  `Rx_Kit_PCM` tinyint(1) NOT NULL,
  `Rx_Kit_Pregnancy` tinyint(1) NOT NULL,
  `Rx_ALU_3/7` tinyint(1) NOT NULL,
  `Rx_ALU_1x2` tinyint(1) NOT NULL,
  `Rx_ALU_2x2` tinyint(1) NOT NULL,
  `Rx_ALU_3x2` tinyint(1) NOT NULL,
  `Rx_ALU_4x2` tinyint(1) NOT NULL,
  `Rx_PUD` tinyint(1) NOT NULL,
  `Rx_PZQ` tinyint(1) NOT NULL,
  `Rx_PZQ_Tabs` int(10) DEFAULT NULL,
  `OtherRX` longtext,
  `SP_PatInit` varchar(5) DEFAULT NULL,
  `SP_PatGender` varchar(1) DEFAULT NULL,
  `SP_PatPreg` tinyint(1) NOT NULL,
  `SP_PatNumMonths` int(10) DEFAULT NULL,
  `SP_PatBF` tinyint(1) NOT NULL,
  `SP_PatMTZ` varchar(50) DEFAULT NULL,
  `SP_PatDoxy` varchar(50) DEFAULT NULL,
  `SP_PatAmox` varchar(50) DEFAULT NULL,
  `SP_Par1Init` varchar(5) DEFAULT NULL,
  `SP_Par1Gender` varchar(1) DEFAULT NULL,
  `SP_Par1Preg` tinyint(1) NOT NULL,
  `SP_Par1NumMonths` int(10) DEFAULT NULL,
  `SP_Par1BF` tinyint(1) NOT NULL,
  `SP_Par1MTZ` varchar(50) DEFAULT NULL,
  `SP_Par1Doxy` varchar(50) DEFAULT NULL,
  `SP_Par1Amox` varchar(50) DEFAULT NULL,
  `SP_Par2Init` varchar(5) DEFAULT NULL,
  `SP_Par2Gender` varchar(1) DEFAULT NULL,
  `SP_Par2Preg` tinyint(1) NOT NULL,
  `SP_Par2NumMonths` int(10) DEFAULT NULL,
  `SP_Par2BF` tinyint(1) NOT NULL,
  `SP_Par2MTZ` varchar(50) DEFAULT NULL,
  `SP_Par2Doxy` varchar(50) DEFAULT NULL,
  `SP_Par2Amox` varchar(50) DEFAULT NULL,
  `SP_Par3Init` varchar(5) DEFAULT NULL,
  `SP_Par3Gender` varchar(1) DEFAULT NULL,
  `SP_Par3Preg` tinyint(1) NOT NULL,
  `SP_Par3NumMonths` int(10) DEFAULT NULL,
  `SP_Par3BF` tinyint(1) NOT NULL,
  `SP_Par3MTZ` varchar(50) DEFAULT NULL,
  `SP_Par3Doxy` varchar(50) DEFAULT NULL,
  `SP_Par3Amox` varchar(50) DEFAULT NULL,
  `FollowUp` longtext,
  `RetToMissYes` tinyint(1) NOT NULL,
  `RetToDisp` int(10) DEFAULT NULL,
  `Education` longtext,
  `Practitioners` varchar(100) DEFAULT NULL,
  `Ref_TB` tinyint(1) NOT NULL,
  `Ref_Surgery` tinyint(1) NOT NULL,
  `Ref_Hospital` tinyint(1) NOT NULL,
  `RXNum` varchar(50) DEFAULT NULL,
  `NumPregnancies` int(10) DEFAULT NULL,
  `NumLiveBirth` int(10) DEFAULT NULL,
  `NumAbortion` int(10) DEFAULT NULL,
  `NumLivingChild` int(10) DEFAULT NULL,
  `LastPeriod` varchar(20) DEFAULT NULL,
  `FirstEntryDate` datetime DEFAULT NULL,
  PRIMARY KEY (`TXLineNum`),
  KEY `ChartNum` (`ChartNum`),
  KEY `Tbl_DemogTbl_Visit` (`DemogLineNum`),
  KEY `LU_DispensaryTbl_Visit` (`VisDispensary`),
  KEY `Tbl_VisitDispensary` (`VisDispensary`),
  KEY `DemogLineNum` (`DemogLineNum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_visit`
--

LOCK TABLES `tbl_visit` WRITE;
/*!40000 ALTER TABLE `tbl_visit` DISABLE KEYS */;
INSERT INTO `tbl_visit` VALUES (2,1,1,'2017-08-10 00:00:00','1899-12-30 01:14:00','201708','Bugorola',0,0,0,0,0,0,0,0,0,0,0,0,25,60,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'Feeling sick',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,0,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2017-08-10 01:13:49'),(3,3,5,'2017-08-13 00:00:00','1899-12-30 17:17:00','201708','Mukunu',1,1,1,1,0,0,0,0,1,1,0,0,46,62,35,'70/120',5,74,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'Not feeling well','Examined him. Malnourished. Infected cut to left knee','Unknown','Unknown','Unknown','Unknown','Unknown',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,0,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,'Bandage for cut. Arrangement to see nurse',0,NULL,NULL,'Dr. Num One',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2017-08-13 17:16:55'),(4,3,5,'2017-08-15 00:00:00','1899-12-30 13:38:00','201708','Mukunu',1,0,1,0,0,0,0,0,0,0,0,0,46,62,36,'73/130',6,76,0,0,0,0,1,0,1,0,1,0,1,0,1,0,0,0,0,1,1,1,0,0,0,'Uncomfortable','Examined him. Malnourished. Still infected cut to left knee',NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,1,'Infection',NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,'Bandage for cut. Arrangement to see nurse',0,NULL,NULL,'Dr. Num One',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2017-08-15 13:38:00'),(5,4,6,'2017-08-16 00:00:00','1899-12-30 15:24:00','201708','Bukondo',0,0,1,1,0,0,0,0,1,0,1,1,54,100,37,'120/80',NULL,64,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'sore back','farmer\r\nmoderate lower back pain\r\nshould get education on proper bending\r\nr22 aerobic infection',NULL,NULL,NULL,NULL,NULL,0,0,1,0,1,0,0,1,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,0,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,1,6,'MTZ200 x 3 x 5/7\r\naminophylline 200mg x3 x 10/7',NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,0,NULL,NULL,'wm',0,0,0,'5',NULL,NULL,NULL,NULL,NULL,'2017-08-17 15:20:07'),(6,5,17,'2017-08-21 00:00:00','1899-12-30 21:36:00','201708','Hamukoko',0,0,1,0,0,0,0,0,0,0,0,0,29,55,37,'120/80',NULL,NULL,0,1,0,1,1,1,1,1,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,'wkhkddk;d;kh','khdalkdaskhdsakhdlk',NULL,NULL,NULL,NULL,NULL,0,0,0,0,1,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,0,0,0,NULL,0,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,0,1,0,0,0,1,0,0,NULL,NULL,NULL,NULL,0,NULL,0,'10',NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,0,0,0,NULL,6,4,2,NULL,NULL,'2017-08-21 21:34:44'),(7,5,17,'2017-08-21 00:00:00','1899-12-30 21:19:00','201708',NULL,0,0,0,0,0,0,0,0,0,0,1,0,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,1,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,0,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,0,NULL,0,'10','14',NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,1,7,NULL,NULL,1,1,1,'15',NULL,NULL,NULL,NULL,NULL,'2017-08-21 21:48:15'),(8,6,18,'2017-09-15 00:00:00','1899-12-30 17:30:00','201709','Igalla',1,1,1,1,1,1,1,1,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,NULL,'this is a test',NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,0,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,NULL,0,NULL,0,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2017-09-30 22:06:17');
/*!40000 ALTER TABLE `tbl_visit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'cachahlthrec_tables'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-30 23:27:42
