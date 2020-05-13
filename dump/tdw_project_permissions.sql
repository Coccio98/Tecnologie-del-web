-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: tdw_project
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2020-05-13 07:48:24','2020-05-13 07:48:24'),(2,'browse_bread',NULL,'2020-05-13 07:48:24','2020-05-13 07:48:24'),(3,'browse_database',NULL,'2020-05-13 07:48:24','2020-05-13 07:48:24'),(4,'browse_media',NULL,'2020-05-13 07:48:24','2020-05-13 07:48:24'),(5,'browse_compass',NULL,'2020-05-13 07:48:24','2020-05-13 07:48:24'),(6,'browse_menus','menus','2020-05-13 07:48:24','2020-05-13 07:48:24'),(7,'read_menus','menus','2020-05-13 07:48:24','2020-05-13 07:48:24'),(8,'edit_menus','menus','2020-05-13 07:48:24','2020-05-13 07:48:24'),(9,'add_menus','menus','2020-05-13 07:48:24','2020-05-13 07:48:24'),(10,'delete_menus','menus','2020-05-13 07:48:24','2020-05-13 07:48:24'),(11,'browse_roles','roles','2020-05-13 07:48:24','2020-05-13 07:48:24'),(12,'read_roles','roles','2020-05-13 07:48:24','2020-05-13 07:48:24'),(13,'edit_roles','roles','2020-05-13 07:48:24','2020-05-13 07:48:24'),(14,'add_roles','roles','2020-05-13 07:48:24','2020-05-13 07:48:24'),(15,'delete_roles','roles','2020-05-13 07:48:24','2020-05-13 07:48:24'),(16,'browse_users','users','2020-05-13 07:48:24','2020-05-13 07:48:24'),(17,'read_users','users','2020-05-13 07:48:24','2020-05-13 07:48:24'),(18,'edit_users','users','2020-05-13 07:48:24','2020-05-13 07:48:24'),(19,'add_users','users','2020-05-13 07:48:24','2020-05-13 07:48:24'),(20,'delete_users','users','2020-05-13 07:48:24','2020-05-13 07:48:24'),(21,'browse_settings','settings','2020-05-13 07:48:24','2020-05-13 07:48:24'),(22,'read_settings','settings','2020-05-13 07:48:24','2020-05-13 07:48:24'),(23,'edit_settings','settings','2020-05-13 07:48:24','2020-05-13 07:48:24'),(24,'add_settings','settings','2020-05-13 07:48:24','2020-05-13 07:48:24'),(25,'delete_settings','settings','2020-05-13 07:48:24','2020-05-13 07:48:24'),(26,'browse_categories','categories','2020-05-13 07:48:24','2020-05-13 07:48:24'),(27,'read_categories','categories','2020-05-13 07:48:24','2020-05-13 07:48:24'),(28,'edit_categories','categories','2020-05-13 07:48:24','2020-05-13 07:48:24'),(29,'add_categories','categories','2020-05-13 07:48:24','2020-05-13 07:48:24'),(30,'delete_categories','categories','2020-05-13 07:48:24','2020-05-13 07:48:24'),(31,'browse_posts','posts','2020-05-13 07:48:25','2020-05-13 07:48:25'),(32,'read_posts','posts','2020-05-13 07:48:25','2020-05-13 07:48:25'),(33,'edit_posts','posts','2020-05-13 07:48:25','2020-05-13 07:48:25'),(34,'add_posts','posts','2020-05-13 07:48:25','2020-05-13 07:48:25'),(35,'delete_posts','posts','2020-05-13 07:48:25','2020-05-13 07:48:25'),(36,'browse_pages','pages','2020-05-13 07:48:25','2020-05-13 07:48:25'),(37,'read_pages','pages','2020-05-13 07:48:25','2020-05-13 07:48:25'),(38,'edit_pages','pages','2020-05-13 07:48:25','2020-05-13 07:48:25'),(39,'add_pages','pages','2020-05-13 07:48:25','2020-05-13 07:48:25'),(40,'delete_pages','pages','2020-05-13 07:48:25','2020-05-13 07:48:25'),(41,'browse_hooks',NULL,'2020-05-13 07:48:25','2020-05-13 07:48:25'),(42,'browse_coupons','coupons','2020-05-13 07:53:35','2020-05-13 07:53:35'),(43,'read_coupons','coupons','2020-05-13 07:53:35','2020-05-13 07:53:35'),(44,'edit_coupons','coupons','2020-05-13 07:53:35','2020-05-13 07:53:35'),(45,'add_coupons','coupons','2020-05-13 07:53:35','2020-05-13 07:53:35'),(46,'delete_coupons','coupons','2020-05-13 07:53:35','2020-05-13 07:53:35'),(47,'browse_products','products','2020-05-13 07:55:46','2020-05-13 07:55:46'),(48,'read_products','products','2020-05-13 07:55:46','2020-05-13 07:55:46'),(49,'edit_products','products','2020-05-13 07:55:46','2020-05-13 07:55:46'),(50,'add_products','products','2020-05-13 07:55:46','2020-05-13 07:55:46'),(51,'delete_products','products','2020-05-13 07:55:46','2020-05-13 07:55:46'),(52,'browse_stocks','stocks','2020-05-13 07:56:42','2020-05-13 07:56:42'),(53,'read_stocks','stocks','2020-05-13 07:56:42','2020-05-13 07:56:42'),(54,'edit_stocks','stocks','2020-05-13 07:56:42','2020-05-13 07:56:42'),(55,'add_stocks','stocks','2020-05-13 07:56:42','2020-05-13 07:56:42'),(56,'delete_stocks','stocks','2020-05-13 07:56:42','2020-05-13 07:56:42'),(57,'browse_showcases','showcases','2020-05-13 07:57:28','2020-05-13 07:57:28'),(58,'read_showcases','showcases','2020-05-13 07:57:28','2020-05-13 07:57:28'),(59,'edit_showcases','showcases','2020-05-13 07:57:28','2020-05-13 07:57:28'),(60,'add_showcases','showcases','2020-05-13 07:57:28','2020-05-13 07:57:28'),(61,'delete_showcases','showcases','2020-05-13 07:57:28','2020-05-13 07:57:28'),(62,'browse_product_categories','product_categories','2020-05-13 07:58:19','2020-05-13 07:58:19'),(63,'read_product_categories','product_categories','2020-05-13 07:58:19','2020-05-13 07:58:19'),(64,'edit_product_categories','product_categories','2020-05-13 07:58:19','2020-05-13 07:58:19'),(65,'add_product_categories','product_categories','2020-05-13 07:58:19','2020-05-13 07:58:19'),(66,'delete_product_categories','product_categories','2020-05-13 07:58:19','2020-05-13 07:58:19'),(67,'browse_brands','brands','2020-05-13 07:59:42','2020-05-13 07:59:42'),(68,'read_brands','brands','2020-05-13 07:59:42','2020-05-13 07:59:42'),(69,'edit_brands','brands','2020-05-13 07:59:42','2020-05-13 07:59:42'),(70,'add_brands','brands','2020-05-13 07:59:42','2020-05-13 07:59:42'),(71,'delete_brands','brands','2020-05-13 07:59:42','2020-05-13 07:59:42'),(72,'browse_images','images','2020-05-13 08:00:12','2020-05-13 08:00:12'),(73,'read_images','images','2020-05-13 08:00:12','2020-05-13 08:00:12'),(74,'edit_images','images','2020-05-13 08:00:12','2020-05-13 08:00:12'),(75,'add_images','images','2020-05-13 08:00:12','2020-05-13 08:00:12'),(76,'delete_images','images','2020-05-13 08:00:12','2020-05-13 08:00:12'),(77,'browse_orders','orders','2020-05-13 08:20:35','2020-05-13 08:20:35'),(78,'read_orders','orders','2020-05-13 08:20:35','2020-05-13 08:20:35'),(79,'edit_orders','orders','2020-05-13 08:20:35','2020-05-13 08:20:35'),(80,'add_orders','orders','2020-05-13 08:20:35','2020-05-13 08:20:35'),(81,'delete_orders','orders','2020-05-13 08:20:35','2020-05-13 08:20:35'),(82,'browse_couriers','couriers','2020-05-13 08:58:37','2020-05-13 08:58:37'),(83,'read_couriers','couriers','2020-05-13 08:58:37','2020-05-13 08:58:37'),(84,'edit_couriers','couriers','2020-05-13 08:58:37','2020-05-13 08:58:37'),(85,'add_couriers','couriers','2020-05-13 08:58:37','2020-05-13 08:58:37'),(86,'delete_couriers','couriers','2020-05-13 08:58:37','2020-05-13 08:58:37');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-13 14:34:58
