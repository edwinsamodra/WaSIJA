-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tdata_barang`;
CREATE TABLE `tdata_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dibuat_pada` timestamp NULL DEFAULT NULL,
  `terakhir_update` timestamp NULL DEFAULT NULL,
  `kode_barang` varchar(20) DEFAULT NULL,
  `nama_barang` varchar(20) DEFAULT NULL,
  `spesifikasi` varchar(50) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `sumber_barang` varchar(10) DEFAULT NULL,
  `sumber_dana` varchar(10) DEFAULT NULL,
  `kondisi` varchar(1) DEFAULT NULL,
  `ruang` varchar(5) DEFAULT NULL,
  `jenis` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tdata_barang` (`id`, `dibuat_pada`, `terakhir_update`, `kode_barang`, `nama_barang`, `spesifikasi`, `qty`, `harga`, `ket`, `sumber_barang`, `sumber_dana`, `kondisi`, `ruang`, `jenis`) VALUES
(1,	NULL,	NULL,	'13JKA',	'mous',	'wireless',	100,	'3000',	NULL,	'BOS',	'BOS',	't',	'gudan',	'datang');

DROP TABLE IF EXISTS `tdata_peminjaman`;
CREATE TABLE `tdata_peminjaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dibuat_pada` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `terakhir_update` timestamp NULL DEFAULT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `kelas` varchar(8) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `nama_barang` varchar(40) DEFAULT NULL,
  `spesifikasi` varchar(50) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `tanggal_pinjam` timestamp NULL DEFAULT NULL,
  `tanggal_kembali` timestamp NULL DEFAULT NULL,
  `approval` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tdata_user`;
CREATE TABLE `tdata_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) NOT NULL,
  `password_encrypt` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `kode` int(1) NOT NULL DEFAULT '3' COMMENT '1=admin, 2=guru, 3=siswa',
  `created_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tdata_user` (`id`, `username`, `password_encrypt`, `nama`, `kelas`, `email`, `kode`, `created_date`, `last_update`) VALUES
(1,	'admin',	'w/UAdAtUvTXNvR621Q==',	'ADMINISTRATOR',	'-',	'-',	1,	'2020-02-19 08:24:29',	'0000-00-00 00:00:00'),
(7,	'150701',	'kfUaLAtOvm/SuQ==',	'EDWIN SAMODRA PRATAM',	'13 tkj a',	'edwinsp001@gmail.com',	1,	'2020-02-19 08:24:29',	'0000-00-00 00:00:00'),
(8,	'1670395',	'k6NeKVAL+Xk=',	'ROSYIDATUN NUR ROHMAH',	'13 TKJ A',	'trial@gmail.com',	1,	'2020-02-19 08:24:29',	'0000-00-00 00:00:00'),
(9,	'160391',	'k6NeKVAL',	'COBA',	'10 SIJA',	'a@mail.com',	3,	'2020-02-19 08:24:29',	'0000-00-00 00:00:00'),
(10,	'1670396',	'0fAfdBxSoC4=',	'SARIYONO I',	'13 TKJ A',	's@m.c',	2,	'2020-02-25 07:40:37',	'2020-02-25 07:40:37');

DROP TABLE IF EXISTS `tsidemenu`;
CREATE TABLE `tsidemenu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(20) NOT NULL,
  `menu_link` varchar(30) NOT NULL,
  `menu_title` varchar(15) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(10) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(10) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2020-02-25 07:42:02
