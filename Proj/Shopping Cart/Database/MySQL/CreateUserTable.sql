CREATE TABLE `jthavisay_shoppingcart`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `UserID` VARCHAR(45) NOT NULL,
  `Password` LONGTEXT NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));
