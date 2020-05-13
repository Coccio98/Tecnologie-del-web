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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brand_id` bigint(20) unsigned NOT NULL,
  `score` tinyint(4) NOT NULL DEFAULT '0',
  `selling_number` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `products_brand_id_foreign` (`brand_id`),
  CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Sony MDR-ZX310 Cuffie On-Ear',25.00,'Sony MDR-ZX310 Cuffie, Blu','Le cuffie hanno un design leggero e pieghevole per la ottima portabilità per la tua musica.\r\n                                I padiglioni auricolari sono imbottiti per la ottima comodità di ascolto. Il cavo ha la lunghezza di 1.2 m.','Peso articolo	127 g\r\n                            Dimensioni prodotto	15 x 5 x 20 cm',10,'2020-05-13 07:48:50',NULL,1,4,5),(2,'Samsung Auricolari',5.99,'Samsung Originale Bianco EHS64AVFWE Auricolari/Cuffie/Vivavoce Kit/Cuffie Stereo 3.5 mm Microfono','Se perde il vecchio cuffie o hanno semplicemente smesso di funzionare? Non temete perché ora è possibile acquistare da un marchio nuovo paio di cuffie supportato da un connettore jack 3.5 mm.\r\n                                Se si desidera utilizzare come vivavoce kit o come cuffie mentre siete in viaggio per lavorare sul Bus, per l\' allenamento in palestra o semplicemente parlare al telefono.\r\n                                Cuffie progettate per adattarsi perfettamente all\' orecchio e fornire comfort e un\' ottima qualità del suono.\r\n                                gestisci le tue chiamate e musica con bottoni realizzato appositamente.\r\n                                Grazie al connettore jack 3.5 mm queste cuffie sono disponibili per l\' uso con qualsiasi altro dispositivo da 3.5 mm che permette di utilizzare in diversi dispositivi che possono avere nella vostra casa come iPad, tablet.\r\n                                Perfetto per la musica, pensati per te.','Peso articolo 18,1 g\r\n                            Numero modello articolo: EHS64AVFWE',0,'2020-05-13 07:48:50',NULL,2,5,12),(3,'HUAWEI MateBook D 15.6\" Laptop',649.00,'HUAWEI MateBook D 15.6\" Laptop, Processore AMD Ryzen 5 3500U, 8 GB RAM, 256 GB SSD, Schermo FullView 1080P FHD, Collaborazione multi-schermo, Sensore impronte digitali, Windows 10 Home, Argento','Design estetico:display fullview, con un rapporto schermo-corpo dell\' 87%.esperienza di visione immersiva offerta da un display antiriflesso con proporzioni 16:9.\r\n                                Corpo metallico con un tocco futuristicouno spessore di 16.9 mmtecnologia innovativa：amd ryzen5 3500u, con scheda grafica radeon vega 8le ventole shark fin 2.0 rendono la dissipazione del calore più silenziosa ed efficace.\r\n                                expandable storage with an ssd+hdd supports faster response speed and larger storagela memoria endibile con ssd+hdd supporta una velocità di risposta più elevata e una memoria più ampia.\r\n                                il caricabatterie USB-c compatto supporta la ricarica rapidaesperienza smart:collaborazione multi-schermo per facilitare il lavoro e la vita.\r\n                                sensore d\'impronte digitali per accensione e accesso velocidisplay certificato tüv rheinland per proteggere gli occhi riducendo la luce blufotocamera a scomparsa per un miglior controllo.','Peso articolo	2,3 Kg\r\n                            Dimensioni del collo	47,2 x 27,8 x 7 cm',30,'2020-05-13 07:48:50',NULL,3,5,23),(4,'Notebook Acer pc portatile',749.77,'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6\" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit','Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6\" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.\r\n                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.\r\n                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD','Peso articolo	191 g\r\n                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',6,'2020-05-13 07:48:50',NULL,4,0,12),(5,'Xiaomi Redmi Note 8',175.00,'Xiaomi Redmi Note 8 Smartphone,4GB 64GB Mobilephone,Schermo Intero Da 6,3\",Processore Octa Core Snapdragon 665,Quad Camera(48mp + 8mp + 2mp + 2mp) Versione Globale (Nero)','Processore a otto core Qualcomm Snapdragon 665\r\n                                Frequenza massima 2,0 GHz\r\n                                Processore grafico AdrenoTM 610\r\n                                Motore di intelligenza artificiale AIE di terza generazione Qualcomm','Peso articolo	458 g\r\n                            Dimensioni del collo	17,2 x 9 x 5,4 cm',5,'2020-05-13 07:48:50',NULL,5,4,7),(6,'Notebook Asus pc portatile',749.77,'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6\" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit','Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6\" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.\r\n                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.\r\n                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD','Peso articolo	191 g\r\n                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',6,'2020-05-13 07:48:50',NULL,3,3,24),(7,'Notebook Jessica',749.77,'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6\" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit','Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6\" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.\r\n                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.\r\n                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD','Peso articolo	191 g\r\n                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',6,'2020-05-13 07:48:50',NULL,3,1,1),(8,'Notebook Andrea',749.77,'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6\" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit','Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6\" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.\r\n                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.\r\n                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD','Peso articolo	191 g\r\n                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',6,'2020-05-13 07:48:50',NULL,3,0,1),(9,'Notebook Federico',749.77,'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6\" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit','Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6\" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.\r\n                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.\r\n                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD','Peso articolo	191 g\r\n                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',6,'2020-05-13 07:48:50',NULL,3,0,54);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-13 14:35:00
