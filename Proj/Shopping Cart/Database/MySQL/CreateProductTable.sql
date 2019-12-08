CREATE TABLE `jthavisay_shoppingcart`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `Description` VARCHAR(300) NOT NULL,
  `ImageRef` VARCHAR(45) NOT NULL,
  `Price` FLOAT NOT NULL,
  `Amount` INT NOT NULL,
  `Created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `Updated` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));

INSERT INTO product 
	(Name, Description, ImageRef, Price, Amount) 
VALUES 
	('Country of Laos', 'Geographical View of the Country Laos', 'LaoCountry.jpg', '1.99', '5'),
    ('Three-Head Elephant', 'Lao Symbol of Buddhist Origin', 'LaoElephant.jpg', '1.99', '5'),
    ('Lao Pestle & Mortar', 'Common cooking tool in Lao cuisine', 'LaoPestleMortar.jpg', '1.99', '5'),
    ('Laotian Woman', 'Cultured Laotian Woman', 'LaoWoman.jpg', '1.99', '5');