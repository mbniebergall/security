
USE `security`;

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(140) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(260) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO `user`
VALUES (
    NULL,
    'admin',
    1,
    MD5('password')
), (
    NULL,
    'guest',
    1,
    MD5('password12345')
), (
    NULL,
    'disableduser',
    0,
    MD5('letmein')
);
