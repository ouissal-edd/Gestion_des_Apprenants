-- dans le site x on permet au client d effectuer q'une seul commande.
-- la comande peut etre effectuer par u ou plusieur client. 

-- Créer une nouvelle base de données

CREATE DATABASE IF NOT EXISTS `Shopping` ;

-- Créer une nouvelle table Client avec clée primaire
CREATE TABLE IF NOT EXISTS `shopping`.`client` (
  `idC` INTEGER NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(100) NOT NULL,
  `lastname` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idC`)
) 
-- Créer une nouvelle table Commande avec clée primaire et etranger

CREATE TABLE IF NOT EXISTS `shopping`.`commande` (
  `idCM` INTEGER NOT NULL AUTO_INCREMENT,
  `namecommande` VARCHAR(100) NOT NULL,
  `numerocommande` INTEGER(100) NOT NULL,
  PRIMARY KEY (`idCM`)
  FOREIGN KEY ('idC') REFERENCES client ('idC') 


-- Insert
INSERT INTO `commande`(`idCM`, `tarif`,`namecommande`, `numerocommande`, `idC`) VALUES (1,200,"chemise",111,1) 
INSERT INTO `commande`(`idCM`, `tarif`, `namecommande`, `numerocommande`, `idC`) VALUES (4,300,"chemise",333 ,4) 
INSERT INTO `commande`(`idCM`, `tarif`, `namecommande`, `numerocommande`, `idC`) VALUES (2,150,"pantalon",11221,2) 
INSERT INTO `client`(`idC`, `firstname`, `lastname`, `email`) VALUES (1,"ahmed","khakdi","kha@gmail.com")
INSERT INTO `client`(`idC`, `firstname`, `lastname`, `email`) VALUES (2,"karima","kh","MINI@gmail.com")
INSERT INTO `client`(`idC`, `firstname`, `lastname`, `email`) VALUES (4,"Lina","kh","jj@gmail.com")
INSERT INTO `client`(`idC`, `firstname`, `lastname`, `email`) VALUES (4,"Louna","huria","lna@gmail.com")

-- SQL SELECT

-- obtenir un colonne
SELECT firstname FROM client
-- obtenir plusieur colonnes
SELECT firstname, lastname FROM client
-- Obtenir toutes les colonnes d’un tableau
SELECT * FROM client
-- WHERE
SELECT * FROM client WHERE firstname = 'ahmed' 
-- Opérateurs AND et OR
SELECT * FROM commande WHERE namecommande = 'chemise' AND numerocommande =111 
SELECT * FROM client WHERE firstname = 'ahmed' OR lastname = 'kh' 

-- SQL GROUP BY / SUM
SELECT namecommande, SUM(tarif) FROM commande GROUP BY namecommande 


-- Order BY
SELECT *
FROM client
ORDER BY lastname

-- AS

SELECT tarif AS achat
FROM `commande`

-- limit et offset
SELECT * FROM client LIMIT 3 OFFSET 2

--UP Date
UPDATE client
SET lastname = 'kokari',
 firstname = 'lukari' 
WHERE idC = 2 

-- Delete
DELETE FROM `client` WHERE idC = 1

-- Drop DB
DROP DATABASE shopping

-- Alter table
-- Ajouter
ALTER TABLE client ADD panier Int
-- rennomer
ALTER TABLE client
CHANGE panier quantite INT

-- Jointure



-- creat index  il ps fonctionné
CREATE INDEX `firstname` ON `client`

-- fonction d'agregation
-- AVG
SELECT AVG(tarif) FROM commande
-- count
SELECT COUNT(idCM) FROM commande
-- max
SELECT MAX(tarif) FROM commande
-- min
SELECT MIN(tarif) FROM commande
--  fonction de chaine de caractere
-- Contact
SELECT idC, CONCAT(firstname, ' ', lastname) AS fullname, email 
FROM client
-- LENGTH
SELECT idC, firstname, LENGTH(firstname) AS firstname_length, email
FROM client