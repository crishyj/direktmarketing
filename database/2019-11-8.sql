-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.3.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table jobplatform.adwords
CREATE TABLE IF NOT EXISTS `adwords` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `list1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `list2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `list3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jobplatform.adwords: ~1 rows (approximately)
/*!40000 ALTER TABLE `adwords` DISABLE KEYS */;
INSERT IGNORE INTO `adwords` (`id`, `title`, `desc`, `list1`, `list2`, `list3`, `created_at`, `updated_at`) VALUES
	(1, 'Finden Sie Ihren Anbieter für Postadressen', 'Beschreiben Sie unverbindlich Ihr Projekt oder Ihren Bedarf an Adressen und holen Sie sich Angebote von Deutschlands besten Direktmarketingunternehmen', ' Erhalten Sie durchschnittlich 5 Angebote für Ihre Kampagne', ' Im Schnitt erhalten Sie innerhalb von 72 Stunden 3 Angebote - insgesamt durchschnittlich 6 Angebote', ' Wählen Sie den Dienstleister Ihres Vertrauens - im Schnitt sind die Angebote 24% günstiger als am freien Markt.', '2019-11-07 18:01:58', '2019-11-07 18:01:58');
/*!40000 ALTER TABLE `adwords` ENABLE KEYS */;

-- Dumping structure for table jobplatform.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` int(11) NOT NULL DEFAULT 0,
  `email_marketing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `callcenter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_Address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `germany` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `austria` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `switzerland` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_personal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_group_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verfy_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jobplatform.customers: ~0 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT IGNORE INTO `customers` (`id`, `name`, `email`, `phone`, `company`, `budget`, `email_marketing`, `callcenter`, `postal_Address`, `germany`, `austria`, `switzerland`, `supplier_company`, `supplier_personal`, `title`, `target_group_desc`, `email_verified`, `verfy_code`, `created_at`, `updated_at`) VALUES
	(1, 'Denis', 'rudolph.denis@yahoo.com', '1786095516', 'DenisRUss', 0, '1\r\n', NULL, NULL, '1\r\n', NULL, NULL, NULL, '1', 'Coaching\r\n', 'Hallo ich verkaufe ein Coaching in dem man B2B kon...\r\n', NULL, '301726\r\n', '2019-11-08 02:03:32', '2019-11-08 02:03:35'),
	(2, 'Denis', 'rudolph.denis@yahoo.com\r\n', '1786095516\r\n', 'DenisRUss\r\n', 0, '1\r\n', NULL, NULL, '1', NULL, NULL, NULL, '1', 'Coaching\r\n', 'Hallo ich verkaufe ein Coaching in dem man B2B kon...\r\n', NULL, '197220\r\n', NULL, NULL),
	(3, 'AR ImmoInvest GmbH\r\n\r\n\r\n', 'info@ar-immoinvest.de\r\n\r\n\r\n', '06081 99466430\r\n\r\n\r\n', 'Investor\r\n\r\n\r\n', 0, NULL, NULL, '1', '1', NULL, NULL, NULL, '1', 'Kaufe Haus von Privat\r\n\r\n\r\n', 'Region Hessen Geburtsjahr Hauseigentum…', NULL, '686813\r\n\r\n\r\n', NULL, NULL);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for table jobplatform.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jobplatform.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table jobplatform.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jobplatform.migrations: ~6 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_10_29_132500_create_customers_table', 1),
	(5, '2019_11_01_143105_create_suppliers_table', 1),
	(6, '2019_11_07_151608_create_adwords_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table jobplatform.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jobplatform.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table jobplatform.suppliers
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jobplatform.suppliers: ~0 rows (approximately)
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;

-- Dumping structure for table jobplatform.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table jobplatform.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$EVUSCsNUg4kNSY7OHThc4.M/eueS6E0c49WWzdfOveseXa08AYyIC', '1', NULL, '2019-11-07 18:01:58', '2019-11-07 18:01:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
