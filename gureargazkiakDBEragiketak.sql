CREATE TABLE `gureargazkiak`.`erabiltzaile` ( `NAN` INT NOT NULL , `Izena` VARCHAR(100) NOT NULL , `Abizena1` VARCHAR(100) NOT NULL , `Abizena2` VARCHAR(100) NULL , `Rola` VARCHAR(50) NOT NULL , `PerfilArgazki` MEDIUMBLOB NULL , PRIMARY KEY (`NAN`)) ENGINE = InnoDB;

CREATE TABLE `gureargazkiak`.`argazkia` ( `ArgazkiKod` INT NOT NULL AUTO_INCREMENT , `NAN` INT NOT NULL , `Izenb` VARCHAR(100) NULL , `Etiketa` VARCHAR(100) NOT NULL , `Mota` VARCHAR(100) NOT NULL , PRIMARY KEY (`ArgazkiKod`)) ENGINE = InnoDB; 

CREATE TABLE `gureargazkiak`.`baimena` ( `JabeaNAN` INT NULL , `ErabNAN` INT NULL , `ArgazkiKod` INT NULL , `Baimena` BOOLEAN NULL , PRIMARY KEY (`JabeaNAN`, `ErabNAN`, `ArgazkiKod`)) ENGINE = InnoDB; 

CREATE TABLE `gureargazkiak`.`argazkiaIkusKop` ( `ArgazkiKod` INT NOT NULL , `KopErregistratu` INT NOT NULL , `KopAnonimo` INT NOT NULL , PRIMARY KEY (`ArgazkiKod`)) ENGINE = InnoDB;

