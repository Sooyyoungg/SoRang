CREATE TABLE IF NOT EXISTS `team15`.`Nonalcohol` (
    `nonalc_no` INT(5) NOT NULL AUTO_INCREMENT,
    `nonalc_name` varchar(20) NOT NULL UNIQUE KEY,
    `nonalc_rank` INT(5) NOT NULL,
    `nonalc_exp` TEXT,
    `nonalc_origin` varchar(25),
    `hashtag1` varchar(20),
    `hashtag2` varchar(20),
    `hashtag3` varchar(20),
    `nonalc_score` FLOAT(5),
    `nonalc_img` varchar(255),
    PRIMARY KEY (`nonalc_no`),
    INDEX `nonalc_index` (`nonalc_no`, `nonalc_name`)
)