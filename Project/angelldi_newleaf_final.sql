# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: angelldiaz.com (MySQL 5.5.28-cll)
# Database: angelldi_newleaf
# Generation Time: 2013-03-02 19:18:49 +0000
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
  `pounds_lost` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`u_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `goals` WRITE;
/*!40000 ALTER TABLE `goals` DISABLE KEYS */;

INSERT INTO `goals` (`u_id`, `user_id`, `pounds_lost`, `date`)
VALUES
	(4,1,210,'2013-02-20'),
	(5,1,200,'2013-02-23'),
	(6,1,190,'2013-02-25'),
	(7,1,210,'2013-02-28'),
	(8,1,180,'2013-01-23'),
	(9,1,100,'2013-03-01'),
	(10,1,150,'2013-05-01'),
	(11,1,200,'2013-08-01'),
	(12,1,130,'2013-12-01'),
	(23,0,0,'0000-00-00'),
	(24,0,0,'0000-00-00'),
	(25,0,1,'2013-02-23'),
	(27,1,150,'2013-03-02'),
	(28,1,170,'2013-03-02');

/*!40000 ALTER TABLE `goals` ENABLE KEYS */;
UNLOCK TABLES;


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
	(1,'5f4dcc3b5aa765d61d8327deb882cf99','you@you.com','User'),
	(4,'4875b3210ffa9463be42c307d7e97c07','sean@sean.com','sean'),
	(6,'aa062e9b90f8245934f9399c280202d1','s@s.com','seansean'),
	(14,'827ccb0eea8a706c4c34a16891f84e7b','sean3@sean.com','scasey3'),
	(15,'71159f3e7fffcac13ff9670c78c0a2de','this@me.com','This'),
	(16,'827ccb0eea8a706c4c34a16891f84e7b','test12w3@gmail.com','test12345'),
	(18,'827ccb0eea8a706c4c34a16891f84e7b','user@user.com','user'),
	(19,'827ccb0eea8a706c4c34a16891f84e7b','user34@user.com','user31'),
	(20,'b0e88941e3f2dac6094a0555fad83922','email@test','test');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
