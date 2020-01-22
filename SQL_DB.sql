-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `brankas`;
CREATE TABLE `brankas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) NOT NULL,
  `password_encrypt` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `brankas` (`id`, `username`, `password_encrypt`, `nama`, `kelas`, `email`, `tahun`) VALUES
(1,	'admin',	'w/UAdAtUvTXNvR621Q==',	'ADMINISTRATOR',	'-',	'-',	'-'),
(7,	'150701',	'kfUaLAtOvm/SuQ==',	'EDWIN SAMODRA PRATAM',	'13 tkj a',	'edwinsp001@gmail.com',	'2020');

-- 2020-01-22 03:08:46