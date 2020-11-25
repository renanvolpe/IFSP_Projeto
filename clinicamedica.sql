-- MySQL Script generated by MySQL Workbench
-- Mon Nov 23 23:20:30 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema clinicamedica
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema clinicamedica
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `clinicamedica` DEFAULT CHARACTER SET latin1 ;
USE `clinicamedica` ;

-- -----------------------------------------------------
-- Table `clinicamedica`.`tipousuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`tipousuario` (
  `idTipoUsuario` INT(3) NOT NULL,
  `descTipoUsuario` VARCHAR(120) NOT NULL,
  PRIMARY KEY (`descTipoUsuario`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicamedica`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`login` (
  `idPessoa` INT(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(120) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `idTipoUsuario` INT(11) NOT NULL,
  `tipousuario_descTipoUsuario` VARCHAR(120) NOT NULL,
  PRIMARY KEY (`idPessoa`),
  INDEX `fk_TipoUsuario` (`idTipoUsuario` ASC) VISIBLE,
  INDEX `fk_login_tipousuario1_idx` (`tipousuario_descTipoUsuario` ASC) VISIBLE)
ENGINE = MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicamedica`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`endereco` (
  `rua` VARCHAR(20) NOT NULL,
  `bairro` VARCHAR(20) NOT NULL,
  `numero` INT(11) NOT NULL,
  `estado` VARCHAR(20) NOT NULL,
  `cidade` VARCHAR(20) NOT NULL,
  `cep` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`cep`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicamedica`.`telefone`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`telefone` (
  `idTelefone` INT(20) NOT NULL,
  `ddd` INT(20) NOT NULL,
  `telefonePrincipal` VARCHAR(20) NOT NULL,
  `telefoneOpcional` VARCHAR(20) NULL DEFAULT NULL,
  PRIMARY KEY (`idTelefone`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicamedica`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`pessoa` (
  `idPessoa` INT(11) NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `cpf` VARCHAR(20) NOT NULL,
  `email` VARCHAR(120) NOT NULL,
  `dataNasc` DATE NOT NULL,
  `tipSanguineo` VARCHAR(20) NULL DEFAULT NULL,
  `foto` VARCHAR(100) NULL DEFAULT NULL,
  `endereco_cep` VARCHAR(20) NOT NULL,
  `telefone_idTelefone` INT(20) NOT NULL,
  `login_idPessoa` INT(11) NOT NULL,
  PRIMARY KEY (`cpf`, `idPessoa`),
  INDEX `fk_pessoa_endereco1_idx` (`endereco_cep` ASC) VISIBLE,
  INDEX `fk_pessoa_telefone1_idx` (`telefone_idTelefone` ASC) VISIBLE,
  INDEX `fk_pessoa_login1_idx` (`login_idPessoa` ASC) VISIBLE)
ENGINE = MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicamedica`.`medico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`medico` (
  `crm` VARCHAR(20) NOT NULL,
  `especialidade` VARCHAR(20) NOT NULL,
  `idPessoa` INT(11) NOT NULL,
  `cpf` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`crm`, `idPessoa`, `cpf`),
  INDEX `fk_Pessoa` (`idPessoa` ASC, `cpf` ASC) VISIBLE,
  CONSTRAINT `fk_Pessoa`
    FOREIGN KEY (`idPessoa` , `cpf`)
    REFERENCES `clinicamedica`.`pessoa` (`idPessoa` , `cpf`))
ENGINE = INNODB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicamedica`.`particular`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`particular` (
  `statusPagto` VARCHAR(25) NULL,
  `valor` FLOAT NOT NULL,
  PRIMARY KEY (`statusPagto`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicamedica`.`medicamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`medicamento` (
  `codMedicamento` INT NOT NULL,
  `laboratorio` VARCHAR(245) NULL,
  `nomeMedicamento` VARCHAR(245) NULL,
  `dosagem` FLOAT NULL,
  `laboratorio` VARCHAR(45) NULL,
  `receita` VARCHAR(255) NULL,
  PRIMARY KEY (`codMedicamento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinicamedica`.`tratamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`tratamento` (
  `cidTratamento` INT NOT NULL,
  `sintoma` VARCHAR(255) NULL,
  `duracao` DATETIME NULL,
  `medicamento_codMedicamento` INT NOT NULL,
  PRIMARY KEY (`cidTratamento`),
  INDEX `fk_tratamento_medicamento1_idx` (`medicamento_codMedicamento` ASC) VISIBLE,
  CONSTRAINT `fk_tratamento_medicamento1`
    FOREIGN KEY (`medicamento_codMedicamento`)
    REFERENCES `clinicamedica`.`medicamento` (`codMedicamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinicamedica`.`paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`paciente` (
  `idPessoa` INT(11) NULL,
  `convenio_idConvenio` INT(11) NOT NULL,
  `pessoa_cpf` VARCHAR(20) NOT NULL,
  `tratamento_cidTratamento` INT NOT NULL,
  INDEX `fk_paciente_convenio1_idx` (`convenio_idConvenio` ASC) VISIBLE,
  INDEX `fk_paciente_pessoa1_idx` (`pessoa_cpf` ASC) VISIBLE,
  INDEX `fk_paciente_tratamento1_idx` (`tratamento_cidTratamento` ASC) VISIBLE,
  CONSTRAINT `fk_paciente_convenio1`
    FOREIGN KEY (`convenio_idConvenio`)
    REFERENCES `clinicamedica`.`particular` (`statusPagto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_paciente_pessoa1`
    FOREIGN KEY (`pessoa_cpf`)
    REFERENCES `clinicamedica`.`pessoa` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_paciente_tratamento1`
    FOREIGN KEY (`tratamento_cidTratamento`)
    REFERENCES `clinicamedica`.`tratamento` (`cidTratamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB;


-- -----------------------------------------------------
-- Table `clinicamedica`.`statusatendimento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`statusatendimento` (
  `idStatusAt` INT(11) NOT NULL,
  `descStatusAt` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`descStatusAt`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicamedica`.`consulta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`consulta` (
  `idConsulta` INT(11) NOT NULL AUTO_INCREMENT,
  `nomePaciente` INT(11) NOT NULL,
  `nomeMedico` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `horario` DATE NOT NULL,
  `statusatendimento_descStatusAt` VARCHAR(30) NOT NULL,
  INDEX `fk_Medico` (`nomeMedico` ASC) VISIBLE,
  INDEX `fk_Paciente` (`nomePaciente` ASC) VISIBLE,
  INDEX `fk_consulta_statusatendimento1_idx` (`statusatendimento_descStatusAt` ASC) VISIBLE,
  CONSTRAINT `fk_Paciente`
    FOREIGN KEY (`nomePaciente`)
    REFERENCES `clinicamedica`.`paciente` (`idPessoa`),
  CONSTRAINT `fk_consulta_statusatendimento1`
    FOREIGN KEY (`statusatendimento_descStatusAt`)
    REFERENCES `clinicamedica`.`statusatendimento` (`descStatusAt`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB
AUTO_INCREMENT = 32
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clinicamedica`.`AdminTI`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinicamedica`.`AdminTI` (
  `pessoa_cpf` VARCHAR(20) NOT NULL,
  `pessoa_idPessoa` INT(11) NOT NULL,
  INDEX `fk_Admin T.I._pessoa1_idx` (`pessoa_cpf` ASC, `pessoa_idPessoa` ASC) VISIBLE,
  CONSTRAINT `fk_Admin T.I._pessoa1`
    FOREIGN KEY (`pessoa_cpf` , `pessoa_idPessoa`)
    REFERENCES `clinicamedica`.`pessoa` (`cpf` , `idPessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
