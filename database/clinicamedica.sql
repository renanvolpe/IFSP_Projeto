-- MySQL Script generated by MySQL Workbench
-- 01/04/21 21:31:43
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema clinicamedica
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema clinicamedica
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `clinicamedica` DEFAULT CHARACTER SET utf8 ;
USE `clinicamedica` ;

-- -----------------------------------------------------
-- Table `clinicamedica`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`endereco` (
  `idEndereco` INT NOT NULL AUTO_INCREMENT,
  `rua` VARCHAR(45) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `complemento` VARCHAR(45) NULL,
  `cidade` VARCHAR(20) NOT NULL,
  `estado` VARCHAR(20) NOT NULL,
  `numero` VARCHAR(10) NOT NULL,
  `cep` VARCHAR(8) NOT NULL,
  PRIMARY KEY (`idEndereco`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinicamedica`.`telefone`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`telefone` (
  `idTelefone` INT NOT NULL AUTO_INCREMENT,
  `tel1` VARCHAR(11) NOT NULL,
  `tel2` VARCHAR(11) NULL,
  `cel1` VARCHAR(11) NOT NULL,
  `cel2` VARCHAR(11) NULL,
  PRIMARY KEY (`idTelefone`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinicamedica`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`login` (
  `idLogin` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(20) NOT NULL,
  `senha` VARCHAR(20) NOT NULL,
  `privilegio` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`idLogin`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinicamedica`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`pessoa` (
  `idPessoa` INT NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(150) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `endereco_idEndereco` INT NOT NULL,
  `telefone_idTelefone` INT NOT NULL,
  `login_idLogin` INT NOT NULL,
  PRIMARY KEY (`idPessoa`, `login_idLogin`),
  INDEX `fk_pessoa_endereco1_idx` (`endereco_idEndereco` ASC),
  INDEX `fk_pessoa_telefone1_idx` (`telefone_idTelefone` ASC),
  INDEX `fk_pessoa_login1_idx` (`login_idLogin` ASC),
  CONSTRAINT `fk_pessoa_endereco1`
    FOREIGN KEY (`endereco_idEndereco`)
    REFERENCES `clinicamedica`.`endereco` (`idEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pessoa_telefone1`
    FOREIGN KEY (`telefone_idTelefone`)
    REFERENCES `clinicamedica`.`telefone` (`idTelefone`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pessoa_login1`
    FOREIGN KEY (`login_idLogin`)
    REFERENCES `clinicamedica`.`login` (`idLogin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinicamedica`.`medico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`medico` (
  `idMedico` INT NOT NULL AUTO_INCREMENT,
  `crm` VARCHAR(10) NOT NULL,
  `especialidade` VARCHAR(45) NOT NULL,
  `pessoa_idPessoa` INT NOT NULL,
  PRIMARY KEY (`idMedico`),
  INDEX `fk_medico_pessoa1_idx` (`pessoa_idPessoa` ASC),
  CONSTRAINT `fk_medico_pessoa1`
    FOREIGN KEY (`pessoa_idPessoa`)
    REFERENCES `clinicamedica`.`pessoa` (`idPessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinicamedica`.`paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`paciente` (
  `tipoSanguineo` VARCHAR(3) NOT NULL,
  `sexo` VARCHAR(1) NOT NULL,
  `dataNascimento` DATETIME NOT NULL,
  `idPaciente` INT NOT NULL AUTO_INCREMENT,
  `pessoa_idPessoa` INT NOT NULL,
  PRIMARY KEY (`idPaciente`),
  INDEX `fk_paciente_pessoa1_idx` (`pessoa_idPessoa` ASC),
  CONSTRAINT `fk_paciente_pessoa1`
    FOREIGN KEY (`pessoa_idPessoa`)
    REFERENCES `clinicamedica`.`pessoa` (`idPessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinicamedica`.`agenda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`agenda` (
  `idAgenda` INT NOT NULL AUTO_INCREMENT,
  `horario` DATETIME NOT NULL,
  `dia` DATE NOT NULL,
  `pessoa_idPessoa` INT NOT NULL,
  PRIMARY KEY (`idAgenda`),
  INDEX `fk_agenda_pessoa1_idx` (`pessoa_idPessoa` ASC),
  CONSTRAINT `fk_agenda_pessoa1`
    FOREIGN KEY (`pessoa_idPessoa`)
    REFERENCES `clinicamedica`.`pessoa` (`idPessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinicamedica`.`consulta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`consulta` (
  `idConsulta` INT NOT NULL AUTO_INCREMENT,
  `realizada` TINYINT(1) NOT NULL,
  `sintoma` VARCHAR(245) NULL,
  `tratamento` VARCHAR(245) NULL,
  `observacao` VARCHAR(245) NULL,
  `agenda_idAgenda` INT NOT NULL,
  PRIMARY KEY (`idConsulta`, `agenda_idAgenda`),
  INDEX `fk_consulta_agenda1_idx` (`agenda_idAgenda` ASC),
  CONSTRAINT `fk_consulta_agenda1`
    FOREIGN KEY (`agenda_idAgenda`)
    REFERENCES `clinicamedica`.`agenda` (`idAgenda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
