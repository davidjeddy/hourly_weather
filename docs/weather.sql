-- MySQL Script generated by MySQL Workbench
-- Mon 08 May 2017 08:29:45 PM EDT
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Table `request`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `request` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip` VARCHAR(45) NOT NULL,
  `postal_code` VARCHAR(32) NOT NULL,
  `created_at` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `response`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `response` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `request_id` INT UNSIGNED NOT NULL,
  `response_body` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_response_request_idx` (`request_id` ASC),
  CONSTRAINT `fk_response_request`
    FOREIGN KEY (`request_id`)
    REFERENCES `request` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `weather`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `weather` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `response_id` INT UNSIGNED NOT NULL,
  `condition` VARCHAR(45) NULL,
  `pressure` DECIMAL NULL,
  `temperature` VARCHAR(45) NULL,
  `wind_dir` VARCHAR(5) NULL,
  `wind_speed` DECIMAL NULL,
  `humidity` VARCHAR(45) NULL,
  `created_at` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_weather_response1_idx` (`response_id` ASC),
  CONSTRAINT `fk_weather_response1`
    FOREIGN KEY (`response_id`)
    REFERENCES `response` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `error`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `error` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `response_id` INT UNSIGNED NOT NULL,
  `request_url` VARCHAR(45) NOT NULL,
  `response_code` INT NOT NULL,
  `response_body` VARCHAR(45) NOT NULL,
  `created_at` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_error_response1_idx` (`response_id` ASC),
  CONSTRAINT `fk_error_response1`
    FOREIGN KEY (`response_id`)
    REFERENCES `response` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;