CREATE TABLE `jthavisay_survey`.`survey` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Name` LONGTEXT NOT NULL,
  `Answer_1` LONGTEXT NOT NULL,
  `Answer_2` LONGTEXT NOT NULL,
  `Answer_3` LONGTEXT NOT NULL,
  `Created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));

  INSERT INTO survey 
        (Name, Answer_1, Answer_2, Answer_3)
  VALUES 
    ('Food', 'Pizza', 'Burger', 'Pasta'),
    ('Vacation Spot', 'Hawaii', 'Paris', 'Japan'),
    ('Test', 'Me', 'You', 'Us');