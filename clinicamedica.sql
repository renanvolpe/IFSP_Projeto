-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jan-2021 às 04:17
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clinicamedica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `idAgenda` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `title` varchar(220) NOT NULL,
  `color` varchar(10) NOT NULL,
  `paciente_idPaciente` int(11) NOT NULL,
  `medico_idMedico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `idConsulta` int(11) NOT NULL,
  `realizada` tinyint(1) NOT NULL,
  `sintoma` varchar(245) DEFAULT NULL,
  `tratamento` varchar(245) DEFAULT NULL,
  `observacao` varchar(245) DEFAULT NULL,
  `agenda_idAgenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `idEndereco` int(11) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `cep` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`idEndereco`, `rua`, `bairro`, `complemento`, `cidade`, `estado`, `numero`, `cep`) VALUES
(1, 'rua1', 'bairro1', '', 'cidade1', 'estado1', 'numero1', 'cep1'),
(2, 'teste', 'te', 'teste', 'te', 'teste', 'teste', 'te');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `privilegio` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idLogin`, `login`, `senha`, `privilegio`) VALUES
(1, 'admin@admin', 'admin0123', 'administrador'),
(2, 'ZeroTwo@02', 'Darling', 'paciente'),
(3, 'teste@gmail.com', 'teste', 'paciente'),
(4, 'te@gmail', 'te', 'paciente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `idMedico` int(11) NOT NULL,
  `crm` varchar(10) NOT NULL,
  `especialidade` varchar(45) NOT NULL,
  `pessoa_idPessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`idMedico`, `crm`, `especialidade`, `pessoa_idPessoa`) VALUES
(1, 'crm123', 'urologista', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `idPaciente` int(11) NOT NULL,
  `tipoSanguineo` varchar(3) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `dataNascimento` datetime NOT NULL,
  `pessoa_idPessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`idPaciente`, `tipoSanguineo`, `sexo`, `dataNascimento`, `pessoa_idPessoa`) VALUES
(1, 'A+', 'F', '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `idPessoa` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `endereco_idEndereco` int(11) NOT NULL,
  `telefone_idTelefone` int(11) NOT NULL,
  `login_idLogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`idPessoa`, `cpf`, `nome`, `endereco_idEndereco`, `telefone_idTelefone`, `login_idLogin`) VALUES
(1, 'cpf', 'Bakugou', 1, 1, 1),
(2, 'cpf2', 'ZeroTwo', 1, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `idTelefone` int(11) NOT NULL,
  `tel1` varchar(11) NOT NULL,
  `tel2` varchar(11) DEFAULT NULL,
  `cel1` varchar(11) NOT NULL,
  `cel2` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `telefone`
--

INSERT INTO `telefone` (`idTelefone`, `tel1`, `tel2`, `cel1`, `cel2`) VALUES
(1, 'tel1', '', 'cel1', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idAgenda`),
  ADD KEY `fk_agenda_paciente1_idx` (`paciente_idPaciente`),
  ADD KEY `fk_agenda_medico1_idx` (`medico_idMedico`);

--
-- Índices para tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idConsulta`),
  ADD KEY `fk_consulta_agenda1_idx` (`agenda_idAgenda`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idEndereco`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`idMedico`),
  ADD KEY `fk_medico_pessoa1_idx` (`pessoa_idPessoa`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPaciente`),
  ADD KEY `fk_paciente_pessoa1_idx` (`pessoa_idPessoa`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`idPessoa`),
  ADD KEY `fk_pessoa_endereco1_idx` (`endereco_idEndereco`),
  ADD KEY `fk_pessoa_telefone1_idx` (`telefone_idTelefone`),
  ADD KEY `fk_pessoa_login1_idx` (`login_idLogin`);

--
-- Índices para tabela `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`idTelefone`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `idAgenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idConsulta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idEndereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `idMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `idPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `telefone`
--
ALTER TABLE `telefone`
  MODIFY `idTelefone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `fk_agenda_medico1` FOREIGN KEY (`medico_idMedico`) REFERENCES `medico` (`idMedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agenda_paciente1` FOREIGN KEY (`paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `fk_consulta_agenda1` FOREIGN KEY (`agenda_idAgenda`) REFERENCES `agenda` (`idAgenda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `fk_medico_pessoa1` FOREIGN KEY (`pessoa_idPessoa`) REFERENCES `pessoa` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_paciente_pessoa1` FOREIGN KEY (`pessoa_idPessoa`) REFERENCES `pessoa` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD CONSTRAINT `fk_pessoa_endereco1` FOREIGN KEY (`endereco_idEndereco`) REFERENCES `endereco` (`idEndereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pessoa_login1` FOREIGN KEY (`login_idLogin`) REFERENCES `login` (`idLogin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pessoa_telefone1` FOREIGN KEY (`telefone_idTelefone`) REFERENCES `telefone` (`idTelefone`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
