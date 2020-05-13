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
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2020-05-13 07:48:24','2020-05-13 07:48:24','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,13,'2020-05-13 07:48:24','2020-05-13 09:03:20','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2020-05-13 07:48:24','2020-05-13 07:48:24','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2020-05-13 07:48:24','2020-05-13 07:48:24','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,15,'2020-05-13 07:48:24','2020-05-13 09:03:20',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,1,'2020-05-13 07:48:24','2020-05-13 09:00:55','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,2,'2020-05-13 07:48:24','2020-05-13 09:00:55','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2020-05-13 07:48:24','2020-05-13 09:00:55','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2020-05-13 07:48:24','2020-05-13 09:00:55','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,14,'2020-05-13 07:48:24','2020-05-13 09:03:20','voyager.settings.index',NULL),(14,1,'Hooks','','_self','voyager-hook',NULL,5,5,'2020-05-13 07:48:25','2020-05-13 09:00:55','voyager.hooks',NULL),(15,1,'Coupons','','_self','voyager-ticket',NULL,NULL,10,'2020-05-13 07:53:35','2020-05-13 09:03:20','voyager.coupons.index',NULL),(16,1,'Products','','_self','voyager-bag',NULL,NULL,4,'2020-05-13 07:55:46','2020-05-13 09:01:57','voyager.products.index',NULL),(17,1,'Stocks','','_self','voyager-treasure',NULL,NULL,5,'2020-05-13 07:56:42','2020-05-13 09:03:19','voyager.stocks.index',NULL),(18,1,'Showcases','','_self','voyager-shop',NULL,NULL,9,'2020-05-13 07:57:28','2020-05-13 09:03:20','voyager.showcases.index',NULL),(19,1,'Product Categories','','_self','voyager-categories',NULL,NULL,7,'2020-05-13 07:58:19','2020-05-13 09:03:20','voyager.product-categories.index',NULL),(20,1,'Brands','','_self','voyager-diamond',NULL,NULL,8,'2020-05-13 07:59:42','2020-05-13 09:03:20','voyager.brands.index',NULL),(21,1,'Images','','_self','voyager-photos',NULL,NULL,6,'2020-05-13 08:00:12','2020-05-13 09:03:20','voyager.images.index',NULL),(22,1,'Orders','','_self','voyager-receipt',NULL,NULL,11,'2020-05-13 08:20:35','2020-05-13 09:03:20','voyager.orders.index',NULL),(25,1,'Couriers','','_self','voyager-truck',NULL,NULL,12,'2020-05-13 08:58:37','2020-05-13 09:03:20','voyager.couriers.index',NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-13 14:34:51
