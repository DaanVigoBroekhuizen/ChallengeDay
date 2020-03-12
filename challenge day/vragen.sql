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

CREATE TABLE `vragen`.`vragen` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`naam` text(100) NOT NULL,
`vraag` text(1000) NOT NULL,
PRIMARY KEY (`id`)
);

INSERT INTO `vragen` (`vraag`) VALUES (`myvraag`);