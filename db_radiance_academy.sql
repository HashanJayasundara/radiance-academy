/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - db_radiance_academy
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_radiance_academy` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_radiance_academy`;

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `rating` tinyint(3) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `contacts` */

/*Table structure for table `dance_classes` */

DROP TABLE IF EXISTS `dance_classes`;

CREATE TABLE `dance_classes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `class_name` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `dance_type` enum('Kandyan','Bollywood','Indian-classic') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dance_classes` */

insert  into `dance_classes`(`id`,`class_name`,`grade`,`dance_type`,`created_at`,`updated_at`) values 
(1,'Kandyan Dance Class','Intermediate','Kandyan','2025-05-01 14:53:10','2025-05-01 14:53:10');

/*Table structure for table `dance_classes_old` */

DROP TABLE IF EXISTS `dance_classes_old`;

CREATE TABLE `dance_classes_old` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dance_classes_old` */

/*Table structure for table `enrollments` */

DROP TABLE IF EXISTS `enrollments`;

CREATE TABLE `enrollments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `class_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `enrollments_user_id_foreign` (`user_id`),
  KEY `enrollments_class_id_foreign` (`class_id`),
  CONSTRAINT `enrollments_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `dance_classes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `enrollments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `enrollments` */

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_category` enum('Wedding','Birthday','Corporate','Private','Other') NOT NULL,
  `package_type` enum('Standard','Premium','Pro') NOT NULL,
  `num_dancers` int(11) NOT NULL,
  `status` enum('upcoming','finished') NOT NULL DEFAULT 'upcoming',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `events` */

insert  into `events`(`id`,`customer_name`,`event_location`,`event_date`,`event_time`,`event_category`,`package_type`,`num_dancers`,`status`,`created_at`,`updated_at`) values 
(1,'John Doe','Colombo','2025-06-15','14:00:00','Wedding','Premium',5,'upcoming','2025-05-01 14:53:10','2025-05-01 14:53:10');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `feedback` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_classes_table',1),
(2,'2014_10_12_000000_create_users_table',1),
(3,'2014_10_12_100000_create_password_reset_tokens_table',1),
(4,'2019_08_19_000000_create_failed_jobs_table',1),
(5,'2019_12_14_000001_create_personal_access_tokens_table',1),
(6,'2025_05_01_092313_create_contacts_table',1),
(7,'2025_05_01_092313_create_events_table',1),
(8,'2025_05_01_092314_create_dance_classes_table',1),
(9,'2025_05_01_092316_create_enrollments_table',1),
(10,'2025_05_01_092317_create_feedback_table',1);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `class_type` enum('Kandyan','Bollywood','Indian-classic') NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `role` enum('admin','student') NOT NULL DEFAULT 'student',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`telephone`,`email`,`grade`,`class_type`,`gender`,`role`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Admin User','0771234567','admin@example.com','Advanced','Kandyan','Male','admin','$2y$12$zX.b64BAdZvuT8YhTn7QxuozvCMnhQ7iOK9vyJ.FLUT/9cf0N/vN2',NULL,'2025-05-01 14:53:10','2025-05-01 14:53:10'),
(2,'Student User','0781234567','student@example.com','Beginner','Bollywood','Female','student','$2y$12$BfiYTPNyoOej7QrQIhLLcefYdcn4EhPzqLnVbQENf.7f6.XUQEa0y',NULL,'2025-05-01 14:53:11','2025-05-01 14:53:11');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
