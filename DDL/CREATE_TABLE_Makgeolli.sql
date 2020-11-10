CREATE TABLE IF NOT EXISTS `team15`.`Makgeolli` (
    `mak_no` INT(5) NOT NULL AUTO_INCREMENT,
    `mak_name` varchar(20) NOT NULL UNIQUE KEY,
    `mak_rank` INT(5) NOT NULL,
    `mak_exp` varchar(225),
    `mak_origin` varchar(25),
    `hashtag1` INT(5),
    `hashtag2` INT(5),
    `hashtag3` INT(5),
    `mak_score` FLOAT(5),
    `mak_img` varchar(255),
    PRIMARY KEY (`mak_no`),
    INDEX `mak_index` (`mak_no`, `mak_name`)
)