CREATE TABLE `todo` (
  `idx` int(40) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) NOT NULL,
  `user_idx` int(40) DEFAULT NULL,
  PRIMARY KEY (`idx`)
);

-- checked는 나중에

INSERT INTO `todo` VALUES (1, 'hi', 16);
INSERT INTO `todo` VALUES (2, 'h2i', 16);

ALTER TABLE `board` ADD `user_idx` int(40) DEFAULT NULL;

CREATE TABLE `images` (
  `idx` int(40) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `imgurl` varchar(512) NOT NULL,
  `size` int NOT NULL,
  `board_id` int(40),
  PRIMARY KEY (`idx`)
);