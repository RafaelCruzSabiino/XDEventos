CREATE DATABASE  IF NOT EXISTS `procedo` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `procedo`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: procedo
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `procedo_usuario`
--

DROP TABLE IF EXISTS `procedo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `procedo_usuario` (
  `CODIGO` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `SENHA` varchar(255) NOT NULL,
  `CRIPTOGRAFIA` varchar(255) NOT NULL,
  `SEXO` char(1) NOT NULL,
  `TELEFONE` varchar(15) NOT NULL,
  `CIDADE` int NOT NULL,
  `SITUACAO` int NOT NULL,
  `DATA_ALTERACAO` datetime NOT NULL,
  `DATA_INSERCAO` datetime NOT NULL,
  PRIMARY KEY (`CODIGO`),
  KEY `fk_usuario_cidade` (`CIDADE`),
  CONSTRAINT `fk_usuario_cidade` FOREIGN KEY (`CIDADE`) REFERENCES `procedo_cidade` (`CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COMMENT='TABELA DE USUARIO.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procedo_usuario`
--

LOCK TABLES `procedo_usuario` WRITE;
/*!40000 ALTER TABLE `procedo_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `procedo_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-07 16:30:13
