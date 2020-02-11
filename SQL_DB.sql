-- Adminer 4.7.1 MySQL dump
-- Created By Edwin Samodra Pratama
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
  `dibuat_pada` timestamp NULL DEFAULT NULL,
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
  `dibuat_pada` timestamp NULL DEFAULT NULL,
  `terakhir_update` timestamp NULL DEFAULT NULL,
  `username` varchar(11) DEFAULT NULL,
  `password_encrypt` varchar(25) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tdata_user` (`id`, `dibuat_pada`, `terakhir_update`, `username`, `password_encrypt`, `nama`, `kelas`, `email`, `tahun`) VALUES
(1,	NULL,	NULL,	'admin',	'w/UAdAtUvTXNvR621Q==',	'ADMINISTRATOR',	'-',	'-',	0),
(7,	NULL,	NULL,	'150701',	'kfUaLAtOvm/SuQ==',	'EDWIN SAMODRA PRATAM',	'13 tkj a',	'edwinsp001@gmail.com',	2020),
(8,	NULL,	NULL,	'1670395',	'0P4eZAxZrzXKsg==',	'ROSYIDATUN NUR ROHMAH',	'13 TKJ A',	'rosyidatun.nur.rochmah@gm',	2020);

-- 2020-02-11 02:15:49