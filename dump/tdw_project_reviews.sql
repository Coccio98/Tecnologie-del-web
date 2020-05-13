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
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_product_id_foreign` (`product_id`),
  KEY `reviews_user_id_foreign` (`user_id`),
  CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,'There is a flaw that I just can\'t understand, nor tolerate.\r\n                           THE MAXIMUM VOLUME IS LOW!\r\n                           Only points in favor are style and comfort. But it wasn\'t what I personally was looking for',3,'2020-05-13 09:48:50',NULL,NULL,1,1),(2,'For the price they have, they are the best purchase you can make!\r\n                The cable is very durable and the audio is clear, they are comfortable to wear and not overly\r\n                warmed the ears, which other products I tried do.\r\n                Recommended to several people and all were enthusiastic about this product\r\n                After 2 years they have not yet given me a problem and feels very good!',5,'2020-05-13 09:48:50',NULL,NULL,1,2),(3,'Very good audio quality compared to the price paid. they are insulating and\r\n                emit a very clean sound. the volume at most does not break the eardrums, it does not feel muffled.',5,'2020-05-13 09:48:50',NULL,NULL,2,3),(4,'Really a great pc, fast in ignition and doing multiple things at once.\r\n                Large screen from which you can see good and good quality of the audio of the speakers.\r\n                It tends to heat up when used when attached to the charge, but other than that it\'s great for anything\r\n                you want to do.',5,'2020-05-13 09:48:50',NULL,NULL,3,1),(5,' The battery really lasts a lot even with many hours of screen.\r\n                Very fluid and with a nice screen. Cameras, for the price of the phone can be called great.\r\n                Upgrade to Android 10 expected. I recommend this phone to those who make common use and need a lot\r\n                of battery',5,'2020-05-13 09:48:50',NULL,NULL,5,1),(6,'As for display and speed it is a fantastic cell phone, too bad that it has several flaws:\r\n                first it really weighs a lot holding it, it has the headphone jack at the bottom which is very\r\n                uncomfortable both to keep it in your pocket and to make video calls, the notification LED is almost\r\n                invisible and monochrome, in addition the front camera in low light conditions applies a horrible yellow\r\n                filter that you can not remove in any way.',2,'2020-05-13 09:48:50',NULL,NULL,5,1),(7,'As for display and speed it is a fantastic cell phone, too bad that it has several flaws:\r\n                    first it really weighs a lot holding it, it has the headphone jack at the bottom which is very\r\n                    uncomfortable both to keep it in your pocket and to make video calls, the notification LED is almost\r\n                    invisible and monochrome, in addition the front camera in low light conditions applies a horrible yellow\r\n                    filter that you can not remove in any way.',3,'2020-05-13 09:48:50',NULL,NULL,6,1),(8,'As for display and speed it is a fantastic laptop, too bad that it has several flaws:\r\n                first it really weighs a lot holding it, it has the headphone jack at the bottom which is very\r\n                uncomfortable both to keep it in your pocket and to make video calls, the notification LED is almost\r\n                invisible and monochrome, in addition the front camera in low light conditions applies a horrible yellow\r\n                filter that you can not remove in any way.',1,'2020-05-13 09:48:50',NULL,NULL,7,1);
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
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
