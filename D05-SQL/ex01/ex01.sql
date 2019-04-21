CREATE TABLE `db_pespalie`.`ft_table` 
(`id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
`login` VARCHAR(8) NOT NULL DEFAULT 'toto', 
`group` ENUM('staff', 'student', 'other') NOT NULL , 
`creation_date` DATE NOT NULL,
PRIMARY KEY (id)) 
ENGINE=INNODB