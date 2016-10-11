-- MySQL dump 10.13  Distrib 5.6.31, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: argentum
-- ------------------------------------------------------
-- Server version	5.6.31-0ubuntu0.15.10.1

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
-- Table structure for table `casas`
--

DROP TABLE IF EXISTS `casas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `uri_img` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casas`
--

LOCK TABLES `casas` WRITE;
/*!40000 ALTER TABLE `casas` DISABLE KEYS */;
INSERT INTO `casas` VALUES (2,'Grant ','/casa.jpg'),(3,'Normal','/normal.jpg'),(4,'Casa Avant Garden','1473948765_P_img_espectacular.jpg');
/*!40000 ALTER TABLE `casas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casas_secciones`
--

DROP TABLE IF EXISTS `casas_secciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casas_secciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `casa_id` int(11) NOT NULL,
  `seccione_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `casas_secciones_casas_id_fk` (`casa_id`),
  KEY `casas_secciones_secciones_id_fk` (`seccione_id`),
  CONSTRAINT `casas_secciones_casas_id_fk` FOREIGN KEY (`casa_id`) REFERENCES `casas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `casas_secciones_secciones_id_fk` FOREIGN KEY (`seccione_id`) REFERENCES `secciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casas_secciones`
--

LOCK TABLES `casas_secciones` WRITE;
/*!40000 ALTER TABLE `casas_secciones` DISABLE KEYS */;
INSERT INTO `casas_secciones` VALUES (1,2,4),(2,2,3),(4,3,4),(5,4,3),(6,4,4),(8,4,9),(9,2,9),(10,3,9);
/*!40000 ALTER TABLE `casas_secciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `uri_img` varchar(50) NOT NULL,
  `seccione_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imagenes_secciones_id_fk` (`seccione_id`),
  CONSTRAINT `imagenes_secciones_id_fk` FOREIGN KEY (`seccione_id`) REFERENCES `secciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES (1,'Hola','1473705671_P_img_espectacular.jpg',3);
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lote_estados`
--

DROP TABLE IF EXISTS `lote_estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lote_estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lote_estados`
--

LOCK TABLES `lote_estados` WRITE;
/*!40000 ALTER TABLE `lote_estados` DISABLE KEYS */;
INSERT INTO `lote_estados` VALUES (1,'Disponible'),(2,'Vendido');
/*!40000 ALTER TABLE `lote_estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lotes`
--

DROP TABLE IF EXISTS `lotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `metros2` float NOT NULL,
  `lote_estado_id` int(11) NOT NULL,
  `seccione_id` int(11) DEFAULT NULL,
  `num_lote` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lotes_lote_estados_id_fk` (`lote_estado_id`),
  KEY `lotes_secciones_id_fk` (`seccione_id`),
  CONSTRAINT `lotes_lote_estados_id_fk` FOREIGN KEY (`lote_estado_id`) REFERENCES `lote_estados` (`id`),
  CONSTRAINT `lotes_secciones_id_fk` FOREIGN KEY (`seccione_id`) REFERENCES `secciones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lotes`
--

LOCK TABLES `lotes` WRITE;
/*!40000 ALTER TABLE `lotes` DISABLE KEYS */;
INSERT INTO `lotes` VALUES (2,246,1,4,3),(3,245,2,9,1),(4,245,1,9,1);
/*!40000 ALTER TABLE `lotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicaciones`
--

DROP TABLE IF EXISTS `publicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) NOT NULL,
  `texto` varchar(100) DEFAULT NULL,
  `uri_img` varchar(40) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `liga` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicaciones`
--

LOCK TABLES `publicaciones` WRITE;
/*!40000 ALTER TABLE `publicaciones` DISABLE KEYS */;
INSERT INTO `publicaciones` VALUES (13,'Nace ciudad Argentum','','1473702495_P_img_espectacular.jpg','1473714952_P_noticia_576071c4c7174.pdf',2,NULL),(24,'Nace ciudad Argentum','nada','1473777586_P_mejores-nombres-perros.jpg','1473711759_P_noticia_576071c4c7174.pdf',2,'www.argentum.com'),(29,'Nace ciudad Argentum','','1473780042_P_img_espectacular.jpg','1473780108_P_noticia_576071c4c7174.pdf',2,'www.argentum.com');
/*!40000 ALTER TABLE `publicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seccione_estados`
--

DROP TABLE IF EXISTS `seccione_estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seccione_estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seccione_estados`
--

LOCK TABLES `seccione_estados` WRITE;
/*!40000 ALTER TABLE `seccione_estados` DISABLE KEYS */;
INSERT INTO `seccione_estados` VALUES (3,'Entrega inmediata'),(4,'Preventa');
/*!40000 ALTER TABLE `seccione_estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seccione_visibilidades`
--

DROP TABLE IF EXISTS `seccione_visibilidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seccione_visibilidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seccione_visibilidades`
--

LOCK TABLES `seccione_visibilidades` WRITE;
/*!40000 ALTER TABLE `seccione_visibilidades` DISABLE KEYS */;
INSERT INTO `seccione_visibilidades` VALUES (1,'Galeria'),(2,'Proyectos'),(3,'Ambos');
/*!40000 ALTER TABLE `seccione_visibilidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `secciones`
--

DROP TABLE IF EXISTS `secciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `secciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri_img_ubicacion` varchar(50) NOT NULL,
  `uri_img` varchar(50) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `uri_img_conjunto` varchar(50) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `seccione_estado_id` int(11) DEFAULT NULL,
  `seccione_visibilidade_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `secciones_seccione_estados_id_fk` (`seccione_estado_id`),
  KEY `secciones_seccione_visibilidades_id_fk` (`seccione_visibilidade_id`),
  CONSTRAINT `secciones_seccione_estados_id_fk` FOREIGN KEY (`seccione_estado_id`) REFERENCES `seccione_estados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `secciones_seccione_visibilidades_id_fk` FOREIGN KEY (`seccione_visibilidade_id`) REFERENCES `seccione_visibilidades` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secciones`
--

LOCK TABLES `secciones` WRITE;
/*!40000 ALTER TABLE `secciones` DISABLE KEYS */;
INSERT INTO `secciones` VALUES (3,'/ubicacion.jpg','/muestra.jpg','Residencial','/conjunto.jpg','Residencial PeÃ±asquito',3,3),(4,'1473879174_P_un-gato-bebe-433 (1).jpg','1473879193_P_img_espectacular.jpg','Residencial','1473879157_P_mejores-nombres-perros.jpg','Torre Parroquia',3,2),(9,'1473956751_P_un-gato-bebe-433 (1).jpg','1473956751_P_img_espectacular.jpg','Residencial','1473956751_P_mejores-nombres-perros.jpg','Residencial PeÃ±asquito',3,1);
/*!40000 ALTER TABLE `secciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'argentum_admin','$2a$10$t94yGpIH00LxzAdWj0c.ceHiQPhUxqnlne0vzImRru39n8fwgObMa','admin','2016-09-08 22:53:42','2016-09-08 22:57:41');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-22 14:28:49
