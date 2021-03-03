CREATE TABLE `todo` (
  `idx` int(40) NOT NULL AUTO_INCREMENT,
  `todo` varchar(100) NOT NULL,
  `user_idx` int(40) DEFAULT NULL,
  PRIMARY KEY (`idx`)
);

-- checked는 나중에