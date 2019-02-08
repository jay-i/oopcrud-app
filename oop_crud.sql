-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `oop_crud` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `oop_crud`;

INSERT INTO `user` (`id`, `fname`, `lname`, `user_add`, `dob`, `email`) VALUES
(3,	'Richy',	'jay',	'califonia',	'2012-03-05',	'jay@hotmail.com'),
(5,	'john',	'bosco',	'cms',	'2019-01-07',	'bosco@example.com'),
(6,	'john',	'bosco',	'cms',	'2019-01-02',	'bosco@example.com'),
(7,	'Richy kay',	'jay',	'califonia',	'2012-03-05',	'jay@hotmail.com');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(250) NOT NULL,
  `user_add` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `fname`, `lname`, `dob`, `email`, `user_add`) VALUES
(4,	'josef',	'hyden',	'2018-07-10',	'hydenjosef@hotmail.com',	'Italy - Rome'),
(5,	'bill ',	'gates',	'2016-10-12',	'billgates@hotmail.com',	'California'),
(6,	'bosco',	'austin',	'2019-01-23',	'bosco@example.com',	'ikeja'),
(12,	'joy',	'james',	'2019-01-15',	'joyjames@hotmail.com',	'makurdi');

-- 2019-02-06 13:17:18
