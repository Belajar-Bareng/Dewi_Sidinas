-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sidinas
DROP DATABASE IF EXISTS `sidinas`;
CREATE DATABASE IF NOT EXISTS `sidinas` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `sidinas`;

-- Dumping structure for table sidinas.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table sidinas.instansi
DROP TABLE IF EXISTS `instansi`;
CREATE TABLE IF NOT EXISTS `instansi` (
  `kode_gaji` char(10) NOT NULL,
  `nm_instansi` varchar(50) NOT NULL,
  `alamat_instansi` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_gaji`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table sidinas.kasubag
DROP TABLE IF EXISTS `kasubag`;
CREATE TABLE IF NOT EXISTS `kasubag` (
  `id_kasubag` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kasubag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table sidinas.login
DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` enum('Admin','User','Kasubag') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table sidinas.pengumuman
DROP TABLE IF EXISTS `pengumuman`;
CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `tgl_publikasi` date DEFAULT NULL,
  `isi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pengumuman`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table sidinas.surat_keluar
DROP TABLE IF EXISTS `surat_keluar`;
CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `id_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `kode_gaji` char(10) DEFAULT NULL,
  `nm_instansi` varchar(50) NOT NULL,
  `nm_pegawai` varchar(50) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `status` enum('Diterima','Belum Diterima') NOT NULL DEFAULT 'Diterima',
  PRIMARY KEY (`id_keluar`),
  KEY `FK_surat_keluar_instansi` (`kode_gaji`),
  CONSTRAINT `FK_surat_keluar_instansi` FOREIGN KEY (`kode_gaji`) REFERENCES `instansi` (`kode_gaji`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table sidinas.surat_masuk
DROP TABLE IF EXISTS `surat_masuk`;
CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `id_masuk` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `kode_gaji` char(10) DEFAULT NULL,
  `nm_instansi` varchar(50) NOT NULL,
  `nm_admin` varchar(50) NOT NULL DEFAULT '0',
  `nm_pengantar` varchar(50) NOT NULL,
  `status` enum('diterima','belum diterima') NOT NULL,
  PRIMARY KEY (`id_masuk`),
  KEY `FK_surat_masuk_instansi` (`kode_gaji`),
  CONSTRAINT `FK_surat_masuk_instansi` FOREIGN KEY (`kode_gaji`) REFERENCES `instansi` (`kode_gaji`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table sidinas.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` char(25) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` varchar(50) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `telp_user` char(50) NOT NULL,
  `kode_gaji` char(10) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `FK_user_instansi` (`kode_gaji`),
  CONSTRAINT `FK_user_instansi` FOREIGN KEY (`kode_gaji`) REFERENCES `instansi` (`kode_gaji`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
