-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table schop.prekes
DROP TABLE IF EXISTS `prekes`;
CREATE TABLE IF NOT EXISTS `prekes` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `description` text,
  `weight` decimal(10,2) DEFAULT NULL,
  `color` text,
  UNIQUE KEY `ID` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=556 DEFAULT CHARSET=utf8;

-- Dumping data for table schop.prekes: 5 rows
DELETE FROM `prekes`;
/*!40000 ALTER TABLE `prekes` DISABLE KEYS */;
INSERT INTO `prekes` (`id`, `name`, `price`, `description`, `weight`, `color`) VALUES
	(1, 'Bananai', 1.10, '3', NULL, NULL),
	(2, 'sokoladas', 1.70, '5', NULL, NULL),
	(3, 'mandarinai', 1.50, '4', NULL, NULL),
	(4, 'batonas', 1.00, '3', NULL, NULL),
	(5, 'pienas', 1.30, '2', NULL, NULL);
/*!40000 ALTER TABLE `prekes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
