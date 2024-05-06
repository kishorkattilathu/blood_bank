/*
SQLyog Community v13.1.8 (64 bit)
MySQL - 10.4.22-MariaDB : Database - blood_bank
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blood_bank` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `blood_bank`;

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `admin_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admins` */

insert  into `admins`(`admin_id`,`admin_name`,`admin_email`,`admin_phone`,`admin_address`,`admin_password`,`created_at`,`updated_at`) values 
(2,'admin1','admin1@gmail.com','879563132','Thrissur','123','2023-12-06 16:44:00','2024-02-25 16:00:33');

/*Table structure for table `bank_complaints` */

DROP TABLE IF EXISTS `bank_complaints`;

CREATE TABLE `bank_complaints` (
  `customer_complaint_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_complaint_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_complaint_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_bank_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_bank_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_message` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_message_reply` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_complaint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `bank_complaints` */

insert  into `bank_complaints`(`customer_complaint_id`,`customer_complaint_name`,`customer_complaint_email`,`customer_bank_name`,`customer_bank_email`,`customer_message`,`bank_message_reply`,`created_at`,`updated_at`) values 
(1,'Mithun','mithun@gmail.com','Public Bank','public_bank@gmail.com','its slow','we will look into it','2024-02-27 14:30:37','2024-02-27 14:39:23'),
(2,'Mithun','mithun@gmail.com','Public Bank','public_bank@gmail.com','when it will be fixed','asap','2024-02-27 14:31:08','2024-02-27 14:41:17'),
(3,'Deepak','deepak@gmail.com','Ahaliya Blood Bank','ahaliyabloodbank@gmail.com','please guide me','Pending','2024-02-27 17:35:38','2024-02-27 17:35:38');

/*Table structure for table `banks` */

DROP TABLE IF EXISTS `banks`;

CREATE TABLE `banks` (
  `bank_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_address` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_image` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documents` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `banks` */

insert  into `banks`(`bank_id`,`bank_name`,`bank_email`,`bank_address`,`bank_phone`,`bank_type`,`bank_image`,`documents`,`bank_password`,`bank_status`,`created_at`,`updated_at`) values 
(1,'Ahaliya Blood Bank','ahaliyabloodbank@gmail.com','Ahalia Foundation and Eye Hospital, Kuruppam Rd, Mission Quarters, Kuruppam, Punkunnam, Thrissur, Kerala 678557','9876543210','Bank','1702358391.jpg','1702358391.png','123','Approved','2023-12-12 18:49:51','2024-01-17 14:00:38'),
(2,'Jubilee Mission Blood Bank','jubileemissionblood@gmail.com','Fathima Nagar, Mahatma Nagar, Nellikunnu, Thrissur, Kerala 680006','4563153123','Bank','1702358509.jpg','1702358509.jpg','123','Approved','2023-12-12 18:51:49','2023-12-12 18:56:22'),
(3,'IMA Blood Bank Complex & Research Centre | Thrissur','imablood@gmail.com','H66G+HH9, padukkad rd, near All India Radio Station, Mannumkad, Ramavarmapuram, Thrissur, Kerala 680631','8796454532','Bank','1702358618.jpg','1702358618.png','123','Approved','2023-12-12 18:53:38','2023-12-12 18:56:23'),
(4,'West Fort Hospital Blood Bank Thrissur','westforthospital@gmail.com','Hospital, W Fort Rd, West Fort, Agraharam, Punkunnam, Thrissur, Kerala 680004','8754123','Bank','1702358710.jpg','1702358710.jpg','123','Approved','2023-12-12 18:55:10','2023-12-12 18:56:25'),
(5,'new bank','new_bank@gmail.com','new bank','98797673r6','Bank','1708784206.png','1708784206.png','123','Rejected','2024-02-24 14:16:46','2024-02-26 11:25:31'),
(6,'New Blood Bank','new_blood_bank@gmail.com','Thrissur 453,Aswini junction','7086788778','Admin','1708883215.jpg','1708883215.jpg','123','Approved','2024-02-25 17:46:55','2024-02-25 17:46:55'),
(7,'Indian Blood Bank','indian_blood_bank@gmail.com','Thrissur 453,Aswini junction','7086788778','Bank','1708944086.jpg','1708944086.jpg','123','Approved','2024-02-26 10:41:26','2024-02-26 11:25:37'),
(8,'Public Bank','public_bank@gmail.com','Thrissur 453,Aswini junction','7086788778','Bank','1708954887.jpg','1708954887.jpg','123','Approved','2024-02-26 13:41:27','2024-02-26 14:33:50'),
(9,'Public Bank','public_bank1@gmail.com','Thrissur 453,Aswini junction','7086788778','Bank','1708954973.jpg','1708954973.jpg','123','Pending','2024-02-26 13:42:53','2024-02-26 13:42:53');

/*Table structure for table `bookings` */

DROP TABLE IF EXISTS `bookings`;

CREATE TABLE `bookings` (
  `booking_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `booking_bank_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_bank_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_customer_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_customer_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_customer_phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_customer_blood` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_donor_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_donor_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_donor_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_donor_blood` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `bookings` */

insert  into `bookings`(`booking_id`,`booking_bank_id`,`booking_bank_email`,`booking_customer_id`,`booking_customer_email`,`booking_customer_phone`,`booking_customer_blood`,`booking_donor_id`,`booking_donor_name`,`booking_donor_email`,`booking_donor_blood`,`booking_status`,`payment_status`,`created_at`,`updated_at`) values 
(2,'3','imablood@gmail.com','1','mithun@gmail.com','789785656','A+','5','Laxmi','laxmi@gmail.com','O-','Approved','Paid','2023-12-12 19:10:59','2023-12-12 19:27:58'),
(4,'1','ahaliyabloodbank@gmail.com','1','mithun@gmail.com','789785656','A+','2','Dileep','dileep@gmail.com','A-','Pending','Pending','2023-12-13 06:15:53','2023-12-13 06:22:52'),
(5,'1','ahaliyabloodbank@gmail.com','1','mithun@gmail.com','789785656','A+','1','Rajesh','rajesh@gmail.com','A+','Approved','Paid','2023-12-13 06:18:00','2023-12-13 06:56:17'),
(6,'1','ahaliyabloodbank@gmail.com','2','ram@gmail.com','781123543','AB-','3','Deepa','deepa@gmail.com','B+','Rejected','Pending','2024-01-17 13:39:32','2024-01-17 14:13:13'),
(8,'3','imablood@gmail.com','2','ram@gmail.com','781123543','AB-','5','Laxmi','laxmi@gmail.com','O-','Approved','Paid','2024-01-17 14:17:44','2024-01-17 14:40:56'),
(9,'3','imablood@gmail.com','1','mithun@gmail.com','789785656','A+','4','Roopesh','roopesh@gmail.com','O+','Approved','Paid','2024-01-17 17:22:00','2024-01-17 17:24:00'),
(10,'1','ahaliyabloodbank@gmail.com','1','mithun@gmail.com','789785656','A+','3','Deepa','deepa@gmail.com','B+','Approved','Pending','2024-01-18 10:41:46','2024-01-18 10:42:38'),
(11,'8','public_bank@gmail.com','1','mithun@gmail.com','789785656','A+','9','Mahesh','mahesh@gmail.com','A+','Approved','Pending','2024-02-26 16:31:07','2024-02-26 17:23:44'),
(12,'8','public_bank@gmail.com','1','mithun@gmail.com','789785656','A+','9','Mahesh','mahesh@gmail.com','A+','Rejected','Pending','2024-02-26 16:57:49','2024-02-26 17:23:49'),
(13,'1','ahaliyabloodbank@gmail.com','1','mithun@gmail.com','789785656','A+','6','Kavya','kavya@gmail.com','B+','Pending','Pending','2024-02-27 12:04:07','2024-02-27 12:04:07'),
(14,'1','ahaliyabloodbank@gmail.com','2','ram@gmail.com','781123543','AB-','6','Kavya','kavya@gmail.com','B+','Pending','Pending','2024-02-27 12:14:26','2024-02-27 12:14:26'),
(16,'1','ahaliyabloodbank@gmail.com','3','deepak@gmail.com','67687867','B-','6','Kavya','kavya@gmail.com','B+','Approved','Paid','2024-02-27 17:22:21','2024-02-27 17:24:25');

/*Table structure for table `complaints` */

DROP TABLE IF EXISTS `complaints`;

CREATE TABLE `complaints` (
  `complaint_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `complaint_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complaint_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complaint_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_reply` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `complaints` */

insert  into `complaints`(`complaint_id`,`complaint_name`,`complaint_email`,`complaint_type`,`message`,`message_reply`,`created_at`,`updated_at`) values 
(1,'Ahaliya Blood Bank','ahaliyabloodbank@gmail.com','Bank','hi i have a complaint','ok','2023-12-12 19:00:13','2024-01-17 17:11:43'),
(2,'Ahaliya Blood Bank','ahaliyabloodbank@gmail.com','Bank','hi','hie','2024-01-17 14:16:21','2024-02-25 16:16:08'),
(3,'Public Bank','public_bank@gmail.com','Bank','hi website is not working properly','ok','2024-02-26 17:41:11','2024-02-27 14:27:31'),
(4,'Public Bank','public_bank@gmail.com','Bank','hi','Pending','2024-02-27 13:32:20','2024-02-27 13:32:20'),
(5,'Public Bank','public_bank@gmail.com','Bank','hi website is not working properly','Pending','2024-02-27 13:38:43','2024-02-27 13:38:43'),
(6,'Deepak','deepak@gmail.com','Customer','i have a suggestion','Pending','2024-02-27 17:35:00','2024-02-27 17:35:00');

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `customer_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_blood` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fitness_doc` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_proof` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customers` */

insert  into `customers`(`customer_id`,`cust_name`,`cust_email`,`cust_phone`,`cust_address`,`cust_blood`,`fitness_doc`,`id_proof`,`password`,`created_at`,`updated_at`) values 
(1,'Mithun','mithun@gmail.com','789785656','Kunnamkulam thrissur DT','A+','1702359584.png','1702359584.jpg','123','2023-12-12 19:09:44','2023-12-12 19:09:44'),
(2,'Ram1','ram@gmail.com','781123543','Thrissur','AB-','1702363679.jpg','1702363679.jpg','123','2023-12-12 20:17:59','2023-12-12 20:18:59'),
(3,'Deepak','deepak@gmail.com','67687867','Thrissur 567,Near Kila','B-','1709054382.jpg','1709054382.png','123','2024-02-27 17:19:42','2024-02-27 17:38:50');

/*Table structure for table `donors` */

DROP TABLE IF EXISTS `donors`;

CREATE TABLE `donors` (
  `donor_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `donor_bank_id` int(11) NOT NULL,
  `donor_bank_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documents` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donation_status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`donor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `donors` */

insert  into `donors`(`donor_id`,`donor_bank_id`,`donor_bank_email`,`donor_name`,`donor_email`,`gender`,`phone`,`bank`,`location`,`blood`,`documents`,`type`,`status`,`donation_status`,`created_at`,`updated_at`) values 
(1,1,'ahaliyabloodbank@gmail.com','Rajesh','rajesh@gmail.com','Male','9876543210','Ahaliya Blood Bank','Thrissur','A+','1702358892.jpg','Bank','Approved','Unavailable','2023-12-12 18:58:12','2024-02-27 17:21:30'),
(2,1,'ahaliyabloodbank@gmail.com','Dileep','dileep@gmail.com','Male','4563153123','Ahaliya Blood Bank','Shornur','A-','1702358959.jpg','Bank','Approved','Unavailable','2023-12-12 18:59:19','2023-12-13 06:31:06'),
(3,1,'ahaliyabloodbank@gmail.com','Deepa','deepa@gmail.com','Female','4563153123','Ahaliya Blood Bank','Shornur','B+','1702358996.jpg','Bank','Approved','Unavailable','2023-12-12 18:59:56','2024-01-18 10:42:38'),
(4,3,'imablood@gmail.com','Roopesh','roopesh@gmail.com','Male','4563153123','IMA Blood Bank Complex & Research Centre | Thrissur','Kolkata','O+','1702359294.jpg','Bank','Approved','Unavailable','2023-12-12 19:04:54','2024-01-17 17:23:05'),
(5,3,'imablood@gmail.com','Laxmi','laxmi@gmail.com','Female','8796454532','IMA Blood Bank Complex & Research Centre | Thrissur','Thrissur','O-','1702359337.jpg','Bank','Approved','Unavailable','2023-12-12 19:05:37','2024-01-17 14:18:57'),
(6,1,'ahaliyabloodbank@gmail.com','Kavya','kavya@gmail.com','Female','7864513123','Ahaliya Blood Bank','Thrissur','B+','1702444257.jpg','Bank','Approved','Unavailable','2023-12-13 05:10:57','2024-02-27 17:23:36'),
(9,8,'public_bank@gmail.com','Mahesh','mahesh@gmail.com','Male','745476342','Public Bank','Thrissur','A+','1708960842.jpg','Bank','Approved','Unavailable','2024-02-26 15:20:42','2024-02-26 17:23:44');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_11_15_072611_create_customers_table',1),
(6,'2023_11_16_063812_create_admins_table',2),
(7,'2023_11_17_034328_create_banks_table',3),
(8,'2023_11_20_053233_create_donors_table',4),
(9,'2023_11_27_210405_create_bookings_table',5),
(10,'2023_11_29_103656_create_payments_table',6),
(11,'2023_12_01_044911_create_complaints_table',7),
(12,'2023_12_04_063925_create_bank_complaints_table',8);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `payment_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `holder_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_month` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_year` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_customer_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_customer_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `payments` */

insert  into `payments`(`payment_id`,`holder_name`,`card_number`,`cvv`,`expiry_month`,`expiry_year`,`amount`,`payment_customer_id`,`payment_customer_email`,`created_at`,`updated_at`) values 
(1,'Mithun S','87654312312','123','mar','2026','500','1','mithun@gmail.com','2023-12-12 19:27:58','2023-12-12 19:27:58'),
(2,'Ram','8453121','123','nov','2027','500','2','ram@gmail.com','2023-12-12 20:23:33','2023-12-12 20:23:33'),
(3,'Mithun S','98746513203','210','jul','2025','500','1','mithun@gmail.com','2023-12-13 06:56:17','2023-12-13 06:56:17'),
(4,'Ram','68358756892587','123','jan','2025','500','2','ram@gmail.com','2024-01-17 14:40:56','2024-01-17 14:40:56'),
(5,'agg','5252666464','123','jan','2025','500','1','mithun@gmail.com','2024-01-17 17:24:00','2024-01-17 17:24:00'),
(6,'Deepak','576567576567576','456','jan','2029','500','3','deepak@gmail.com','2024-02-27 17:24:25','2024-02-27 17:24:25');

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
