-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema tcc
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tcc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tcc` DEFAULT CHARACTER SET latin1 ;
USE `tcc` ;

-- -----------------------------------------------------
-- Table `tcc`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`usuario` (
  `username` VARCHAR(16) NOT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `passwd` VARCHAR(32) NOT NULL,
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `isadm` TINYINT(4) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `tcc`.`markers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`markers` (
  `idmarkers` INT(11) NOT NULL AUTO_INCREMENT,
  `idcriador` INT(11) NULL DEFAULT NULL,
  `info` VARCHAR(255) NOT NULL,
  `img` CHAR(255) NULL DEFAULT NULL,
  `titulo` VARCHAR(45) NOT NULL,
  `dimean` DATETIME NOT NULL,
  `rampa` TINYINT(3) UNSIGNED NULL DEFAULT NULL,
  `pisotatil` TINYINT(3) UNSIGNED NULL DEFAULT NULL,
  `cheked` TINYINT(3) UNSIGNED NOT NULL,
  `brawl` TINYINT(3) UNSIGNED NULL DEFAULT NULL,
  `lat` DOUBLE NOT NULL,
  `lon` DOUBLE NOT NULL,
  PRIMARY KEY (`idmarkers`),
  INDEX `idcriador` (`idcriador` ASC) VISIBLE,
  CONSTRAINT `idcriador`
    FOREIGN KEY (`idcriador`)
    REFERENCES `tcc`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
