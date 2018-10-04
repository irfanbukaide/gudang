/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.1.36-MariaDB : Database - gudang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gudang` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gudang`;

/*Table structure for table `bahan` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `brg_id` int(11) NOT NULL AUTO_INCREMENT,
  `brg_data` mediumblob NOT NULL,
  `brg_kode` char(7) NOT NULL,
  `brg_fast` tinyint(1) NOT NULL DEFAULT '0',
  `brg_paloma` tinyint(1) NOT NULL DEFAULT '0',
  `brg_hrg_pokok` float(10,2) NOT NULL,
  `brg_hrg_jual` float(10,2) NOT NULL,
  `brg_status` enum('DISCONTINUE','AVAILABLE') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`brg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `bahan` */

insert  into `barang`(`brg_id`,`brg_data`,`brg_kode`,`brg_fast`,`brg_paloma`,`brg_hrg_pokok`,`brg_hrg_jual`,`brg_status`,`created_at`,`updated_at`,`deleted_at`) values 
(3,'','FAD',0,0,10000.00,10000.00,'AVAILABLE',NULL,NULL,NULL);

/*Table structure for table `bahan_keluar` */

DROP TABLE IF EXISTS `barang_keluar`;

CREATE TABLE `barang_keluar` (
  `klr_id` int(11) NOT NULL AUTO_INCREMENT,
  `klr_jmlah` int(3) DEFAULT NULL,
  `brg_id` int(11) NOT NULL,
  `rsl_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`klr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bahan_keluar` */

/*Table structure for table `bahan_masuk` */

DROP TABLE IF EXISTS `barang_masuk`;

CREATE TABLE `barang_masuk` (
  `msk_id` int(11) NOT NULL AUTO_INCREMENT,
  `brg_id` int(11) NOT NULL,
  `msk_bahan` int(3) NOT NULL DEFAULT '0',
  `msk_olah_rusak` int(3) NOT NULL DEFAULT '0',
  `msk_jahit_rusak` int(3) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`msk_id`),
  KEY `brg_id` (`brg_id`),
  CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`brg_id`) REFERENCES `barang` (`brg_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bahan_masuk` */

/*Table structure for table `bahan_retur` */

DROP TABLE IF EXISTS `barang_retur`;

CREATE TABLE `barang_retur` (
  `rtr_id` int(11) NOT NULL AUTO_INCREMENT,
  `rtr_jmlah` int(3) DEFAULT NULL,
  `brg_id` int(11) NOT NULL,
  `rsl_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`rtr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bahan_retur` */

/*Table structure for table `reseller` */

DROP TABLE IF EXISTS `reseller`;

CREATE TABLE `reseller` (
  `rsl_id` int(11) NOT NULL AUTO_INCREMENT,
  `rsl_nama` char(50) NOT NULL,
  `rsl_kontak` char(15) DEFAULT NULL,
  `rsl_email` char(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`rsl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `reseller` */

insert  into `reseller`(`rsl_id`,`rsl_nama`,`rsl_kontak`,`rsl_email`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'PT. Urang Aring','085311011013','funnyirfan321@gmail.com',NULL,NULL,NULL),
(2,'PT. Maxindo','08531221454','admin@maxindo.net.id',NULL,NULL,NULL);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_username` char(50) NOT NULL,
  `usr_password` char(50) NOT NULL,
  `usr_privileges` enum('WRITE','FULL') NOT NULL DEFAULT 'WRITE',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`usr_id`,`usr_username`,`usr_password`,`usr_privileges`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'hacker78yu','Endah123lo@','FULL',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
