CREATE DATABASE  IF NOT EXISTS `schema_tcc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `schema_tcc`;
-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: schema_tcc
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `notas_criticos`
--

DROP TABLE IF EXISTS `notas_criticos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas_criticos` (
  `criticos` char(15) NOT NULL,
  `jogo` char(20) NOT NULL,
  `nota` float NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas_criticos`
--

LOCK TABLES `notas_criticos` WRITE;
/*!40000 ALTER TABLE `notas_criticos` DISABLE KEYS */;
INSERT INTO `notas_criticos` VALUES ('IGN','Starfield',5,'2023-11-25 21:24:40'),('Gamereactor','Starfield',4,'2023-11-25 21:24:40'),('GameMAG','Starfield',4,'2023-11-25 21:24:40');
/*!40000 ALTER TABLE `notas_criticos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas_usuarios`
--

DROP TABLE IF EXISTS `notas_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas_usuarios` (
  `usuario` char(15) NOT NULL,
  `jogo` char(20) NOT NULL,
  `nota` float NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas_usuarios`
--

LOCK TABLES `notas_usuarios` WRITE;
/*!40000 ALTER TABLE `notas_usuarios` DISABLE KEYS */;
INSERT INTO `notas_usuarios` VALUES ('Gustavo','Starfield',5,'2023-11-25 21:54:33'),('Angelo','Starfield',3,'2023-11-25 21:54:33'),('Carlos','Starfield',1,'2023-11-25 21:54:33');
/*!40000 ALTER TABLE `notas_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-28 16:27:00
