-- MySQL Script generated by MySQL Workbench
-- 12/17/16 14:56:52
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`tb_categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tb_categoria` (
  `id_categ` INT NOT NULL COMMENT '',
  `nombre` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id_categ`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tb_ingrediente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tb_ingrediente` (
  `id_ingediente` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` VARCHAR(45) NULL COMMENT '',
  `precio` DECIMAL(5,2) NULL COMMENT '',
  `id_categ` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id_ingediente`)  COMMENT '',
  INDEX `fk_tb_ingrediente_tb_categoria_idx` (`id_categ` ASC)  COMMENT '',
  CONSTRAINT `fk_tb_ingrediente_tb_categoria`
    FOREIGN KEY (`id_categ`)
    REFERENCES `mydb`.`tb_categoria` (`id_categ`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tb_mesero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tb_mesero` (
  `id_mesero` INT NOT NULL COMMENT '',
  `nombre` VARCHAR(45) NULL COMMENT '',
  `app` VARCHAR(45) NULL COMMENT '',
  `apm` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id_mesero`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tb_venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tb_venta` (
  `id_venta` INT NOT NULL COMMENT '',
  `fecha` TIMESTAMP(0) NULL COMMENT '',
  `total` DECIMAL(5,2) NULL COMMENT '',
  PRIMARY KEY (`id_venta`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tb_administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tb_administrador` (
  `id_administrador` INT NOT NULL COMMENT '',
  `nombre` VARCHAR(45) NULL COMMENT '',
  `app` VARCHAR(45) NULL COMMENT '',
  `apm` VARCHAR(45) NULL COMMENT '',
  `pass` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id_administrador`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tb_venta_ingrediente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tb_venta_ingrediente` (
  `id_venta` INT NOT NULL COMMENT '',
  `id_ingediente` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id_venta`, `id_ingediente`)  COMMENT '',
  INDEX `fk_tb_venta_has_tb_ingrediente_tb_ingrediente1_idx` (`id_ingediente` ASC)  COMMENT '',
  INDEX `fk_tb_venta_has_tb_ingrediente_tb_venta1_idx` (`id_venta` ASC)  COMMENT '',
  CONSTRAINT `fk_tb_venta_has_tb_ingrediente_tb_venta1`
    FOREIGN KEY (`id_venta`)
    REFERENCES `mydb`.`tb_venta` (`id_venta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_venta_has_tb_ingrediente_tb_ingrediente1`
    FOREIGN KEY (`id_ingediente`)
    REFERENCES `mydb`.`tb_ingrediente` (`id_ingediente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
