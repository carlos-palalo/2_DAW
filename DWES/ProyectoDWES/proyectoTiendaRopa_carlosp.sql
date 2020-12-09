-- MySQL Script generated by MySQL Workbench
-- Mon Dec  7 21:30:03 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema proyectoTiendaRopa_carlosp
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `proyectoTiendaRopa_carlosp` ;

-- -----------------------------------------------------
-- Schema proyectoTiendaRopa_carlosp
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `proyectoTiendaRopa_carlosp` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `proyectoTiendaRopa_carlosp` ;

-- -----------------------------------------------------
-- Table `proyectoTiendaRopa_carlosp`.`Proveedor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proyectoTiendaRopa_carlosp`.`Proveedor` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `proyectoTiendaRopa_carlosp`.`Proveedor` (
  `id_proveedor` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `tlf` INT(9) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_proveedor`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  UNIQUE INDEX `tlf_UNIQUE` (`tlf` ASC) VISIBLE)
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `proyectoTiendaRopa_carlosp`.`Producto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proyectoTiendaRopa_carlosp`.`Producto` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `proyectoTiendaRopa_carlosp`.`Producto` (
  `id_producto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `talla` VARCHAR(3) NOT NULL,
  `precio_Original` DOUBLE NOT NULL,
  `pvp` DOUBLE NOT NULL,
  `cantidad` INT(100) NOT NULL,
  `marca` VARCHAR(45) NOT NULL,
  `sexo` ENUM("H", "M") NOT NULL,
  `categoria` VARCHAR(45) NOT NULL,
  `fecha_proveedor` DATETIME NOT NULL,
  `id_proveedor` INT NOT NULL,
  PRIMARY KEY (`id_producto`),
  INDEX `fk_Producto_Proveedor1_idx` (`id_proveedor` ASC) VISIBLE,
  CONSTRAINT `fk_Producto_Proveedor1`
    FOREIGN KEY (`id_proveedor`)
    REFERENCES `proyectoTiendaRopa_carlosp`.`Proveedor` (`id_proveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `proyectoTiendaRopa_carlosp`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proyectoTiendaRopa_carlosp`.`Usuario` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `proyectoTiendaRopa_carlosp`.`Usuario` (
  `id_Usuario` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(40) NOT NULL,
  `tipo` ENUM("admin", "normal") NOT NULL,
  `tlf` INT(9) NULL DEFAULT 0,
  `fecha_creacion` DATETIME NOT NULL,
  PRIMARY KEY (`id_Usuario`),
  UNIQUE INDEX `tlf_UNIQUE` (`tlf` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `proyectoTiendaRopa_carlosp`.`Cesta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proyectoTiendaRopa_carlosp`.`Cesta` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `proyectoTiendaRopa_carlosp`.`Cesta` (
  `id_Cesta` INT NOT NULL AUTO_INCREMENT,
  `id_producto` INT NOT NULL,
  `cantidad` INT NOT NULL,
  PRIMARY KEY (`id_Cesta`, `id_producto`),
  INDEX `fk_Cesta_Producto1_idx` (`id_producto` ASC) VISIBLE,
  CONSTRAINT `fk_Cesta_Producto1`
    FOREIGN KEY (`id_producto`)
    REFERENCES `proyectoTiendaRopa_carlosp`.`Producto` (`id_producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `proyectoTiendaRopa_carlosp`.`Pedido`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `proyectoTiendaRopa_carlosp`.`Pedido` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `proyectoTiendaRopa_carlosp`.`Pedido` (
  `num_pedido` INT NOT NULL AUTO_INCREMENT,
  `fecha_compra` DATETIME NOT NULL,
  `precio_final` DOUBLE NOT NULL,
  `destino` VARCHAR(45) NOT NULL,
  `metodo_pago` ENUM("contrareembolso", "tarjeta") NOT NULL,
  `numTarjeta` VARCHAR(45) NULL DEFAULT 0,
  `fecha_entrega` DATETIME NULL,
  `id_Usuario` INT NOT NULL,
  `id_Cesta` INT NOT NULL,
  PRIMARY KEY (`num_pedido`),
  INDEX `fk_Pedido_Usuario1_idx` (`id_Usuario` ASC) VISIBLE,
  INDEX `fk_Pedido_Cesta1_idx` (`id_Cesta` ASC) VISIBLE,
  CONSTRAINT `fk_Pedido_Usuario1`
    FOREIGN KEY (`id_Usuario`)
    REFERENCES `proyectoTiendaRopa_carlosp`.`Usuario` (`id_Usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_Cesta1`
    FOREIGN KEY (`id_Cesta`)
    REFERENCES `proyectoTiendaRopa_carlosp`.`Cesta` (`id_Cesta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- INSERT `proyectoTiendaRopa_carlosp`.`Usuario`
-- -----------------------------------------------------

INSERT INTO USUARIO (email, username, password, tipo, tlf, fecha_creacion) VALUES("ana@gmail.com", "ana", sha1("Ana12345"), "normal", 123456789, sysdate());
INSERT INTO USUARIO (email, username, password, tipo, tlf, fecha_creacion) VALUES("jose@gmail.com", "jose", sha1("Jose12345"), "normal", 789456123, sysdate());
INSERT INTO USUARIO (email, username, password, tipo, tlf, fecha_creacion) VALUES("admin@gmail.com", "admin", sha1("Admin12345"), "admin", 456789123, sysdate());
INSERT INTO USUARIO (email, username, password, tipo, tlf, fecha_creacion) VALUES("laura@gmail.com", "laura", sha1("Laura12345"), "normal", 321654987, sysdate());

-- -----------------------------------------------------
-- INSERT `proyectoTiendaRopa_carlosp`.`Proveedor`
-- -----------------------------------------------------

INSERT INTO PROVEEDOR (nombre, direccion, tlf, email) VALUES ("Proveedor ADIDAS", "C\ Inventada 1",999999999,"adidas@gmail.com");
INSERT INTO PROVEEDOR (nombre, direccion, tlf, email) VALUES ("Proveedor NIKE", "C\ Inventada 2",888888888,"nike@gmail.com");
INSERT INTO PROVEEDOR (nombre, direccion, tlf, email) VALUES ("Proveedor DECATHLON", "C\ Inventada 3",777777777,"decathlon@gmail.com");
INSERT INTO PROVEEDOR (nombre, direccion, tlf, email) VALUES ("Proveedor JACK & JONES", "C\ Inventada 4",666666666,"jack&jones@gmail.com");

-- -----------------------------------------------------
-- INSERT `proyectoTiendaRopa_carlosp`.`Producto`
-- -----------------------------------------------------

INSERT INTO PRODUCTO (nombre, talla, precio_Original, pvp, cantidad, marca, sexo, categoria, fecha_proveedor, id_Proveedor) VALUES ("Camiseta", "L", 8, 10, 10, "ADIDAS", "H", "Camisetas", sysdate(), 1);
INSERT INTO PRODUCTO (nombre, talla, precio_Original, pvp, cantidad, marca, sexo, categoria, fecha_proveedor, id_Proveedor) VALUES ("Pantalon", "M", 15.58, 20, 10, "NIKE", "M", "Pantalones", sysdate(), 2);
INSERT INTO PRODUCTO (nombre, talla, precio_Original, pvp, cantidad, marca, sexo, categoria, fecha_proveedor, id_Proveedor) VALUES ("Chaqueta", "3XL", 25, 35, 10, "DECATHLON", "M", "Chaquetas", sysdate(), 3);
INSERT INTO PRODUCTO (nombre, talla, precio_Original, pvp, cantidad, marca, sexo, categoria, fecha_proveedor, id_Proveedor) VALUES ("Cazadora", "XL", 40.75, 60, 10, "JACK & JONES", "H", "Cazadoras", sysdate(), 4);

-- -----------------------------------------------------
-- INSERT `proyectoTiendaRopa_carlosp`.`Cesta`
-- -----------------------------------------------------

INSERT INTO CESTA (id_Cesta, cantidad, id_Producto) VALUES (1, 2, 1);
INSERT INTO CESTA (id_Cesta, cantidad, id_Producto) VALUES (1, 1, 2);
INSERT INTO CESTA (id_Cesta, cantidad, id_Producto) VALUES (2, 3, 3);
INSERT INTO CESTA (id_Cesta, cantidad, id_Producto) VALUES (2, 1, 4);
INSERT INTO CESTA (id_Cesta, cantidad, id_Producto) VALUES (3, 1, 2);
INSERT INTO CESTA (id_Cesta, cantidad, id_Producto) VALUES (4, 2, 1);
INSERT INTO CESTA (id_Cesta, cantidad, id_Producto) VALUES (4, 3, 3);
INSERT INTO CESTA (id_Cesta, cantidad, id_Producto) VALUES (4, 4, 2);
INSERT INTO CESTA (id_Cesta, cantidad, id_Producto) VALUES (5, 2, 4);

-- -----------------------------------------------------
-- INSERT `proyectoTiendaRopa_carlosp`.`Pedido`
-- -----------------------------------------------------

INSERT INTO PEDIDO (fecha_compra, precio_final, destino, metodo_pago, numTarjeta, fecha_entrega, id_Usuario, id_Cesta) VALUES (sysdate(), 40, "C/ Pedido 1", "contrareembolso", null, null, 1, 1);
INSERT INTO PEDIDO (fecha_compra, precio_final, destino, metodo_pago, numTarjeta, fecha_entrega, id_Usuario, id_Cesta) VALUES (sysdate(), 165, "C/ Pedido 2", "contrareembolso", null, date_add(sysdate(), INTERVAL 3 DAY), 2, 2);
INSERT INTO PEDIDO (fecha_compra, precio_final, destino, metodo_pago, numTarjeta, fecha_entrega, id_Usuario, id_Cesta) VALUES (sysdate(), 20, "C/ Pedido 3", "tarjeta", "4940190000370787", date_add(sysdate(), INTERVAL 5 DAY), 3, 3);
INSERT INTO PEDIDO (fecha_compra, precio_final, destino, metodo_pago, numTarjeta, fecha_entrega, id_Usuario, id_Cesta) VALUES (sysdate(), 205, "C/ Pedido 4", "tarjeta", "4940190000370787", null, 4, 4);
INSERT INTO PEDIDO (fecha_compra, precio_final, destino, metodo_pago, numTarjeta, fecha_entrega, id_Usuario, id_Cesta) VALUES (sysdate(), 120, "C/ Pedido 5", "tarjeta", "4940190000370787", null, 1, 5);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
