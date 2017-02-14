# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.27)
# Database: insided1
# Generation Time: 2017-02-14 06:32:56 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table forum
# ------------------------------------------------------------

CREATE TABLE `forum` (
  `forum_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `forum_name` varchar(200) NOT NULL DEFAULT '' COMMENT 'main title',
  `forum_description` varchar(500) DEFAULT NULL COMMENT 'main description of the forum',
  `forum_created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'creation date',
  `forum_created_by` int(11) NOT NULL COMMENT 'who created it',
  `forum_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'last time was updated',
  `forum_updated_by` int(11) NOT NULL COMMENT 'who update it the last',
  PRIMARY KEY (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `forum` WRITE;
/*!40000 ALTER TABLE `forum` DISABLE KEYS */;

INSERT INTO `forum` (`forum_id`, `forum_name`, `forum_description`, `forum_created_at`, `forum_created_by`, `forum_updated_at`, `forum_updated_by`)
VALUES
	(1,'Main Forum\n','This is a rather simple example (tight on time) of a single forum app with a few threads','2016-02-12 21:23:05',1,'2017-02-13 05:54:22',0);

/*!40000 ALTER TABLE `forum` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table post
# ------------------------------------------------------------

CREATE TABLE `post` (
  `post_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) DEFAULT NULL,
  `post_title` varchar(200) DEFAULT NULL COMMENT 'main title',
  `post_comment` varchar(1000) DEFAULT NULL COMMENT 'comment made during creation',
  `post_image_link` varchar(1000) DEFAULT NULL COMMENT 'link to the main image',
  `post_created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'creation date',
  `post_created_by` int(11) NOT NULL COMMENT 'who created it',
  `post_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'last time was updated',
  `post_updated_by` int(11) NOT NULL COMMENT 'who updated it the last',
  `post_deleted_at` timestamp NULL DEFAULT NULL,
  `post_deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;

INSERT INTO `post` (`post_id`, `thread_id`, `post_title`, `post_comment`, `post_image_link`, `post_created_at`, `post_created_by`, `post_updated_at`, `post_updated_by`, `post_deleted_at`, `post_deleted_by`)
VALUES
	(1,1,'First pic ever posted','that','https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Singleton_UML_class_diagram.svg/440px-Singleton_UML_class_diagram.svg.png','2017-02-12 23:06:02',1,'2017-02-13 07:28:55',0,NULL,NULL),
	(2,1,'CRUD Generated','asd','http://www.yiiframework.com/forum/uploads/av-216676.png','2017-02-13 07:26:21',1,'2017-02-13 07:39:52',1,NULL,NULL),
	(16,1,'ads','','','2017-02-13 08:44:21',1,'2017-02-13 08:44:21',1,NULL,NULL),
	(17,1,'2','','','2017-02-13 08:48:07',1,'2017-02-13 08:48:07',1,NULL,NULL),
	(18,1,'1','1','1','2017-02-14 06:40:03',1,'2017-02-14 06:40:03',1,NULL,NULL);

/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table thread
# ------------------------------------------------------------

CREATE TABLE `thread` (
  `thread_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) DEFAULT NULL,
  `thread_name` varchar(100) NOT NULL DEFAULT '',
  `thread_comment` varchar(300) DEFAULT NULL,
  `thread_created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `thread_created_by` int(11) NOT NULL,
  `thread_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `thread_updated_by` int(11) NOT NULL,
  `thread_deleted_at` timestamp NULL DEFAULT NULL,
  `thread_deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`thread_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `thread` WRITE;
/*!40000 ALTER TABLE `thread` DISABLE KEYS */;

INSERT INTO `thread` (`thread_id`, `forum_id`, `thread_name`, `thread_comment`, `thread_created_at`, `thread_created_by`, `thread_updated_at`, `thread_updated_by`, `thread_deleted_at`, `thread_deleted_by`)
VALUES
	(1,1,'Desing Patterns','Welcome Users!. You may find here different UML class diagrams with UML patterns.\n\nAnd... that is all','2017-02-12 21:31:00',1,'2017-02-12 22:30:08',1,NULL,NULL),
	(2,1,'Other Design Pics','Just for the flavour','2017-02-12 22:27:00',1,'2017-02-12 22:30:13',1,NULL,NULL),
	(3,2,'This Thread should not be seen','Of a dead Forum\n','2017-02-12 22:27:00',1,'2017-02-12 22:30:16',1,NULL,NULL),
	(4,1,'Deleted Thread','just for showing off... :P','2017-02-12 22:27:56',1,'2017-02-12 22:30:34',1,'2017-02-12 22:30:25',1);

/*!40000 ALTER TABLE `thread` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
