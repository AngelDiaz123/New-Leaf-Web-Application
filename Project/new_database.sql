# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: angelldiaz.com (MySQL 5.5.28-cll)
# Database: angelldi_newleaf
# Generation Time: 2013-02-21 11:03:24 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table goals
# ------------------------------------------------------------

DROP TABLE IF EXISTS `goals`;

CREATE TABLE `goals` (
  `u_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(50) unsigned NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `pounds_lost` int(11) DEFAULT NULL,
  PRIMARY KEY (`u_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `goals_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `m_id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(255) DEFAULT '',
  `email` varchar(100) DEFAULT '',
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`m_id`, `password`, `email`, `username`)
VALUES
	(1,'5f4dcc3b5aa765d61d8327deb882cf99','angel.l.diaz123@gmail.com','ted'),
	(2,'5f4dcc3b5aa765d61d8327deb882cf99','surferdie141@hotmail.com','angel'),
	(4,'4875b3210ffa9463be42c307d7e97c07','sean@sean.com','sean'),
	(6,'aa062e9b90f8245934f9399c280202d1','s@s.com','seansean');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
