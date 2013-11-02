ALTER TABLE `feedbacks` ADD `subject` INT NOT NULL AFTER `email` ,
ADD `mood` TINYINT( 1 ) NOT NULL AFTER `subject` ;
ALTER TABLE `feedbacks` CHANGE `subject` `subject` TEXT NOT NULL;
ALTER TABLE `feedbacks` CHANGE `mood` `mood` TINYINT( 1 ) NOT NULL DEFAULT '1';
