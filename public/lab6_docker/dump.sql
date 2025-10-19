CREATE DATABASE IF NOT EXISTS `users_db` DEFAULT CHARACTER SET utf8;
USE `users_db`;
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `idx_username` (`username`),
  KEY `idx_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `users` VALUES 
(1,'admin','admin@example.com','482c811da5d5b4bc6d497ffa98491e38','2024-01-15 10:30:00'),
(2,'testuser','test@example.com','482c811da5d5b4bc6d497ffa98491e38','2024-01-15 11:45:00'),
(3,'demo','demo@example.com','482c811da5d5b4bc6d497ffa98491e38','2024-01-15 12:15:00');
