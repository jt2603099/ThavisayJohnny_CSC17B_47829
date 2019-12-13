CREATE TABLE `jthavisay_shoppingcart`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `UserID` VARCHAR(45) NOT NULL,
  `Password` LONGTEXT NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isAdmin` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`));

INSERT INTO user 
	(UserID, Password, Email, isAdmin) 
VALUES 
	('admin', '$2y$10$QxQbbYjfQ1Gby3pgDLSSg.T5kp6LwfmyYathgNVklIiicfeuhv5Be', 'admin@admin.com', '1'),
    ('user', '$2y$10$J5DSJtXxkwNaCVcXy/0WZ.b54f1duxFbvJZkfNGKDi4oO6mxLzmUy', 'user@user.com', '0');