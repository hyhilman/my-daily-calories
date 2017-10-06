-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: mdc_db
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_akun` int(11) NOT NULL,
  KEY `id_akun` (`id_akun`),
  CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (28);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `akun`
--

DROP TABLE IF EXISTS `akun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_akun`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `akun`
--

LOCK TABLES `akun` WRITE;
/*!40000 ALTER TABLE `akun` DISABLE KEYS */;
INSERT INTO `akun` VALUES (28,'admin','admin','admin@admin.com','admin'),(29,'hilman','123','hilman@asd','hilman'),(30,'2323','33','21322@2323','2332'),(31,'aksdjasd','asdkjh','asjkdh@aksjdh','asdasdk');
/*!40000 ALTER TABLE `akun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `makanan`
--

DROP TABLE IF EXISTS `makanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_makanan` varchar(50) NOT NULL,
  `kaloripergram` double NOT NULL,
  `jenis` varchar(20) NOT NULL,
  PRIMARY KEY (`id_makanan`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `makanan`
--

LOCK TABLES `makanan` WRITE;
/*!40000 ALTER TABLE `makanan` DISABLE KEYS */;
INSERT INTO `makanan` VALUES (1,'Nasi Putih',5.2,'karbohidrat'),(2,'Bihun Rebus',15.3,'karbohidrat'),(3,'Kentang Rebus',2.7,'karbohidrat'),(4,'Kwetiau Goreng',7.4,'karbohidrat'),(5,'Makaroni Rebus',2.7,'karbohidrat'),(6,'Mie Instan Rebus',15.4,'karbohidrat'),(7,'Nasi Merah',6.3,'karbohidrat'),(8,'Oatmeal',16.25,'karbohidrat'),(9,'Singkong Rebus Tanpa Kulit',5.5,'karbohidrat'),(10,'Talas Rebus',4.4,'karbohidrat'),(11,'Tepung Beras',15.2,'karbohidrat'),(12,'Tepung Maizena',15.25,'karbohidrat'),(13,'Waffle',12.2,'karbohidrat'),(14,'Mentega',36.9,'lemak'),(15,'Minyak Biji Canola',37,'lemak'),(16,'Minyak Ikan Gindara',37,'lemak'),(17,'Minyak Kelapa',37,'lemak'),(18,'Minyak Sayur',37,'lemak'),(19,'Minyak Zaitun',37,'lemak'),(20,'Santan Kelapa',33.1,'lemak'),(21,'Saus Salad Caesar, Kraft',32.8,'lemak'),(22,'Saus Salad Thousand Island, Kraft',30.5,'lemak'),(23,'Babat',3.5,'protein'),(24,'Bacon Babi Panggang',5.9,'protein'),(25,'Bakso Ikan Rebus',3.1,'protein'),(26,'Bebek Panggang Berkulit',12.9,'protein'),(27,'Bebek Panggang Tanpa Kulit',7.65,'protein'),(28,'Belut',9.4,'protein'),(29,'Buntut Sapi Masak',14.5,'protein'),(30,'Corned Beef Kaleng',8.05,'protein'),(31,'Cumi',2.9,'protein'),(32,'Cumi Goreng',11.6,'protein'),(33,'Dada Ayam Panggang Berkulit',9.15,'protein'),(34,'Dada Ayam Panggang Tanpa Kulit',6.6,'protein'),(35,'Gurita',2.9,'protein'),(36,'Ikan Salmon',7.6,'protein'),(37,'Keju Mozarella',12.7,'protein'),(38,'Kuning Telur',13.2,'protein'),(39,'Lidah Sapi Masak',12.9,'protein'),(40,'Lobster Rebus',4,'protein'),(41,'Paha Ayam Goreng Berkulit',9,'protein'),(42,'Pepperoni',16.75,'protein'),(43,'Putih Telur',1.9,'protein'),(44,'Salami',18,'protein'),(45,'Sosis Ayam',7.5,'protein'),(47,'Steak Rib Eye Panggang',10.7,'protein'),(48,'Steak Sirloin Panggang ',11.5,'protein'),(49,'Tahu Goreng',11.35,'protein'),(50,'Tahu Halus',2.3,'protein'),(51,'Telur Ayam Rebus',6.3,'protein'),(52,'Telur Goreng',6.8,'protein'),(53,'Udang',23,'protein'),(54,'Usus',11,'lemak');
/*!40000 ALTER TABLE `makanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `makanantersimpan`
--

DROP TABLE IF EXISTS `makanantersimpan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `makanantersimpan` (
  `id_makanan_tersimpan` int(11) NOT NULL AUTO_INCREMENT,
  `id_makanan` int(11) NOT NULL,
  `berat_makanan` double DEFAULT NULL,
  `id_akun` int(11) NOT NULL,
  PRIMARY KEY (`id_makanan_tersimpan`),
  KEY `id_makanan` (`id_makanan`),
  KEY `id_akun` (`id_akun`),
  CONSTRAINT `makanantersimpan_ibfk_1` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id_makanan`),
  CONSTRAINT `makanantersimpan_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `makanantersimpan`
--

LOCK TABLES `makanantersimpan` WRITE;
/*!40000 ALTER TABLE `makanantersimpan` DISABLE KEYS */;
/*!40000 ALTER TABLE `makanantersimpan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-03  9:12:55
