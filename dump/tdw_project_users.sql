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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'Alessia','Rossi','alessiarossi@gmail.com','users/default.png','34535',NULL,'$2y$10$cH0oCM7Q47wbIXyvqMUl2.k9HhFJRx9D5HG6YWNN2y8ByR5rjuNFq',NULL,'{\"locale\":\"en\"}',NULL,'2020-05-13 09:34:33'),(2,NULL,'Francesco','Di Giuseppe','francesco@gmail.com','users/default.png','',NULL,'$2y$10$BS0vd/BS60ESmM4fTqjk/.8fvLXNRr5hI2egXEE1DVJMhZvCB/JcG',NULL,NULL,NULL,NULL),(3,NULL,'Giulia','Bianchi','giuliabianchi@gmail.com','users/default.png','',NULL,'$2y$10$tvf/tSwHzPE28EOxMkBkkO9u2jUoWR1tfhqCxgdB.xULmHB7s4lcC',NULL,NULL,NULL,NULL),(4,NULL,'Marta','Di renzo','marta@gmail.com','users/default.png','',NULL,'$2y$10$3LQ1BHUvwqbvBIn6rn6PsuYex9G7GWXFOr5JSx7/7emoylHhTtU6q',NULL,NULL,NULL,NULL),(5,NULL,'Alessio','Franchi','alessio@gmail.com','users/default.png','',NULL,'$2y$10$e2KiuIIFivp8pn6lL4sfAulASgX6XK1GTwdJ5c0g3wjdb87jIk7x6',NULL,NULL,NULL,NULL),(6,NULL,'Giovanni','Di Marco','giovanni@gmail.com','users/default.png','',NULL,'$2y$10$HxlrhcmSjEIYU6yvPfNdI.ZmRX1B2IdCQILnvYAnoVPTMskx8ussy',NULL,NULL,NULL,NULL),(7,1,'Admin','','admin@admin.com','users/default.png','',NULL,'$2y$10$lLeOiBySL0SrxR4Oc0f1suxoGz7YCUK2BE7wn2ksjSEHYW0VBstfS',NULL,NULL,'2020-05-13 07:49:26','2020-05-13 07:49:26');
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

-- Dump completed on 2020-05-13 14:34:54
