USE vragen;

CREATE TABLE `vragen`.`members`(
`id` int(11) NOT NULL AUTO_INCREMENT ,
`username` varchar(30) NOT NULL ,
`password` varchar(128) NOT NULL ,
`email` varchar(128) NOT NULL,
PRIMARY KEY (`id`) ,
UNIQUE KEY `username` (`username`)
) ENGINE = MYISAM DEFAULT CHARSET = utf8;

INSERT INTO `members` (`username`, `password`) VALUES (`myuser`, `mypassword`);

-- CREATE TABLE `vragen`.`vragen` (
-- `naam` text(100) NOT NULL,
-- `vraag` text(100) NOT NULL
-- );

INSERT INTO `vragen` (`vraag`) VALUES (`myvraag`);