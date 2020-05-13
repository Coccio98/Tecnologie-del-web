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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (99,'2014_10_12_000000_create_users_table',1),(100,'2014_10_12_100000_create_password_resets_table',1),(101,'2016_01_01_000000_add_voyager_user_fields',1),(102,'2016_01_01_000000_create_data_types_table',1),(103,'2016_01_01_000000_create_pages_table',1),(104,'2016_01_01_000000_create_posts_table',1),(105,'2016_02_15_204651_create_categories_table',1),(106,'2016_05_19_173453_create_menu_table',1),(107,'2016_10_21_190000_create_roles_table',1),(108,'2016_10_21_190000_create_settings_table',1),(109,'2016_11_30_135954_create_permission_table',1),(110,'2016_11_30_141208_create_permission_role_table',1),(111,'2016_12_26_201236_data_types__add__server_side',1),(112,'2017_01_13_000000_add_route_to_menu_items_table',1),(113,'2017_01_14_005015_create_translations_table',1),(114,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(115,'2017_03_06_000000_add_controller_to_data_types_table',1),(116,'2017_04_11_000000_alter_post_nullable_fields_table',1),(117,'2017_04_21_000000_add_order_to_data_rows_table',1),(118,'2017_07_05_210000_add_policyname_to_data_types_table',1),(119,'2017_08_05_000000_add_group_to_settings_table',1),(120,'2017_11_26_013050_add_user_role_relationship',1),(121,'2017_11_26_015000_create_user_roles_table',1),(122,'2018_03_11_000000_add_user_settings',1),(123,'2018_03_14_000000_add_details_to_data_types_table',1),(124,'2018_03_16_000000_make_settings_value_nullable',1),(125,'2019_08_19_000000_create_failed_jobs_table',1),(126,'2020_03_29_143927_create_brands_table',1),(127,'2020_03_29_143928_create_products_table',1),(128,'2020_03_29_145905_create_stocks_table',1),(129,'2020_03_29_150254_create_images_table',1),(130,'2020_03_29_150331_create_showcases_table',1),(131,'2020_03_29_150429_create_product_categories_table',1),(132,'2020_03_29_150650_create_reviews_table',1),(133,'2020_04_01_101803_create_coupons_table',1),(134,'2020_04_01_112633_create_addresses_table',1),(135,'2020_04_01_112653_create_payment_methods_table',1),(136,'2020_04_01_112747_create_couriers_table',1),(137,'2020_04_01_112801_create_questions_table',1),(138,'2020_04_01_112853_create_answers_table',1),(139,'2020_04_01_113008_create_shippings_table',1),(140,'2020_04_01_113020_create_orders_table',1),(141,'2020_04_01_113021_create_display_table',1),(142,'2020_04_01_113022_create_redeem_table',1),(143,'2020_04_01_113023_create_billing_address_table',1),(144,'2020_04_01_113025_create_belong_table',1),(145,'2020_04_01_113026_create_wishlist_table',1),(146,'2020_04_01_113027_create_cart_table',1),(147,'2020_04_01_113028_create_compose_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-13 14:34:52
