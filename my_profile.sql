/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.4.14-MariaDB : Database - my_profile
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `messages` */

insert  into `messages`(`id`,`name`,`email`,`message`) values 
('0377d988eede9e47104836912f9fdcd1','banu','banu@gmail.com','eleh kntl'),
('31cc233a112c076046efbf22fa71f053','banu','banu@gmail.com','yahoooooo'),
('71657be8bd4903f402fb35867c2a100a','banu','banu@gmail.com','eleh kntl'),
('71705b41767770d01b024e4199a43aab','banu','banu@gmail.com','yahoooooo'),
('743d961bc233d65d09c797f5af604592','banubadboy','banubadboy@gmail.com','sekai wa warana datte'),
('921936417a3cf87ddf85a1c923cc48dc','riski','riskiawaliya@gmail.com','iilih khintil hehe'),
('92ecf2b4b045504fdb18017cc6d98093','banu','banu@gmail.com','nothing'),
('a42e4a5359d41a0e8ce89f5e23ba5919','banu','banu@gmail.com','banu ganteng '),
('aabcfe358022f82b931ec26bb198f585','awasd','asda@gmail.com','asdasdsadasd'),
('b28f0bfbd94262fcd1c197e2e7149c57','banu','banubadboy@yahoo.co.id','i should stay at home'),
('d0f0a7784396883e98a857e8d552b5d3','banu','banubadboy@yahoo.co.id','can you kiss me more?'),
('d1b786648747502fc1cd6f4e95ce89c0','banu','banutriyantoko@gmail.com','Esth anget gelas gede'),
('d28b1598698af240c0ee916072936131','banu','bau@gmail.com','esteh anget'),
('d3d84e271ca12941885aa4ca0e02316a','banu','banuboy@yahoo.com','can we meet in the real world?'),
('d5367d8d9426ac00995b93476b3e2707','banu','banutriyantoko@gmail.com','hehe yah hahaha'),
('e3d2e81216a5c206aa01841601f45e96','hliya','heliya@gmail.com','hello there'),
('ee774cbd87cafdd93a964c2bef49d80e','banu','banu@gmail.com','eleh kntl'),
('f239f7445ca8fd9776c2a511da9a636a','banu','banu@gmail.com','yahoooooo'),
('f6bb3450cb6872022fa549f8d131c5cb','banu','banu@gmail.com','eleh kntl'),
('fca213a5bc93ca01ab83dcc3ecd0701c','riski','riskiawaliya@gmail.com','iilih khintil hehe');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
