-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jan-2021 às 07:07
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

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
  `id` int(11) NOT NULL,
  `title` varchar(220) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'Tutorial PagSeguro', '#FFD700', '2019-05-21 15:00:00', '2019-05-21 16:00:00'),
(2, 'Tutorial FullCalendar editar detalhes do evento', '#0071c5', '2019-05-30 15:00:00', '2019-05-30 00:00:00'),
(3, 'Tutorial FullCalendar Visualizar detalhes do evento', '#0071c5', '2019-05-23 15:00:00', '2019-05-23 16:00:00'),
(4, 'Reuniao 3', '#40e0d0', '2019-05-17 17:00:00', '2019-05-17 18:00:00'),
(5, 'Reuniao 4', '#0071c5', '2019-05-17 15:00:00', '2019-05-17 16:00:00'),
(6, 'Reuniao 5', '#FFD700', '2019-05-17 13:00:00', '2019-05-17 14:00:00'),
(7, 'Reuniao 6', '#0071c5', '2019-05-17 11:00:00', '2019-05-17 12:00:00'),
(8, 'Reuniao 7', '#40e0d0', '2019-05-17 09:00:00', '2019-05-17 10:00:00'),
(9, 'Tutorial', '#228B22', '2019-09-12 00:00:00', '2019-09-13 00:00:00'),
(10, 'Tutorial 2', '#FF4500', '2019-09-13 15:10:10', '2019-09-13 17:15:15'),
(11, 'ReuniÃ£o 15', '#436EEE', '2019-10-09 15:30:00', '2019-10-09 17:00:00'),
(13, 'Apresentação projeto', '#0071c5', '2021-01-07 08:00:00', '2021-01-07 09:00:00'),
(14, 'Entrega', '#FFD700', '2021-01-08 09:00:00', '2021-01-08 10:00:00'),
(15, 'Apresentação projeto', '#FFD700', '2021-01-08 10:00:00', '2021-01-08 11:00:00'),
(16, 'Luis', '#FFD700', '2021-01-08 10:00:00', '2021-01-08 11:00:00'),
(17, 'marco', '#8B4513', '2021-01-08 11:00:00', '2021-01-08 12:00:00'),
(18, 'joao', '#FF4500', '2021-01-08 12:00:00', '2021-01-08 13:00:00'),
(19, 'aberto', '#228B22', '2021-01-09 08:00:00', '2021-01-09 09:00:00'),
(20, 'Luis', '#8B0000', '2021-01-09 07:00:00', '2021-01-09 08:00:00'),
(21, 'marco', '#A020F0', '2021-01-09 08:01:00', '2021-01-09 09:00:00'),
(44, 'Luis', '#FFD700', '2021-01-14 00:00:00', '2021-01-14 00:00:00'),
(43, 'Luis', '#FFD700', '2021-01-14 00:00:00', '2021-01-14 00:00:00'),
(42, 'Apresentação projeto', '#FFD700', '2021-01-14 00:00:00', '2021-01-14 00:00:00'),
(25, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(26, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(27, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(28, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(29, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(30, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(31, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(32, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(33, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(34, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(35, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(36, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(37, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(38, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(39, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(40, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(41, 'Apresentação projeto', '#0071c5', '2021-01-13 08:00:00', '2021-01-13 09:00:00'),
(45, 'Luis', '#FFD700', '2021-01-14 00:00:00', '2021-01-14 00:00:00'),
(46, 'Luis', '#FFD700', '2021-01-14 00:00:00', '2021-01-14 00:00:00'),
(47, 'Luis', '#FFD700', '2021-01-14 00:00:00', '2021-01-14 00:00:00'),
(48, 'Luis', '#FFD700', '2021-01-14 00:00:00', '2021-01-14 00:00:00'),
(49, 'Luis', '#FFD700', '2021-01-14 00:00:00', '2021-01-14 00:00:00'),
(50, 'Luis', '#FFD700', '2021-01-14 00:00:00', '2021-01-14 00:00:00'),
(51, 'joao paulo', '#8B0000', '2021-01-15 08:00:00', '2021-01-15 09:00:00'),
(52, 'Luis ', '#8B0000', '2021-01-07 07:00:00', '2021-01-07 08:00:00'),
(53, 'joao', '#8B0000', '2021-01-22 08:00:00', '2021-01-22 09:00:00'),
(54, 'Luis', '#8B0000', '2021-01-22 08:00:00', '2021-01-22 08:00:00'),
(55, 'Apresentação projeto', '#FF4500', '2021-01-22 15:00:00', '2021-01-22 16:00:00'),
(56, 'Apresentação projeto', '#FF4500', '2021-01-22 15:00:00', '2021-01-22 16:00:00'),
(57, 'Apresentação projeto', '#FF4500', '2021-01-22 15:00:00', '2021-01-22 16:00:00'),
(58, 'Apresentação projeto', '#FF4500', '2021-01-22 15:00:00', '2021-01-22 16:00:00'),
(59, 'Apresentação projeto', '#FF4500', '2021-01-22 15:00:00', '2021-01-22 16:00:00'),
(60, 'Apresentação projeto', '#FF4500', '2021-01-22 15:00:00', '2021-01-22 16:00:00'),
(61, 'Apresentação projeto', '#FF4500', '2021-01-22 15:00:00', '2021-01-22 16:00:00'),
(62, 'Apresentação projeto', '#FF4500', '2021-01-22 15:00:00', '2021-01-22 16:00:00'),
(63, 'Apresentação projeto', '#FF4500', '2021-01-22 15:00:00', '2021-01-22 16:00:00'),
(64, 'Apresentação projeto', '#FF4500', '2021-01-06 00:00:00', '2021-01-06 00:00:00'),
(65, 'Apresentação projeto', '#FFD700', '2021-01-07 08:00:00', '2021-01-07 09:00:00'),
(66, 'Apresentação projeto', '#FFD700', '2021-01-07 08:00:00', '2021-01-07 09:00:00'),
(67, 'Apresentação projeto', '#FFD700', '2021-01-07 08:00:00', '2021-01-07 09:00:00'),
(68, 'Apresentação projeto', '#FFD700', '2021-01-07 08:00:00', '2021-01-07 09:00:00'),
(69, 'Apresentação projeto', '#0071c5', '2020-12-30 00:00:00', '2020-12-31 00:00:00'),
(70, 'Luis', '#228B22', '2021-01-16 00:00:00', '2021-01-16 00:00:00'),
(71, 'jj', '#FFD700', '2020-12-28 01:00:00', '2020-12-28 02:00:00'),
(72, '', '', '2020-12-28 01:00:00', '2020-12-28 02:00:00'),
(73, 'ssssssssssss', '#A020F0', '2021-02-01 01:00:00', '2021-02-01 02:00:00'),
(74, '', '', '2020-12-28 00:00:00', '2020-12-29 00:00:00'),
(75, '', '', '2021-01-14 00:00:00', '2021-01-15 00:00:00'),
(76, '', '', '2021-01-07 00:00:00', '2021-01-08 00:00:00'),
(77, '', '', '2020-12-27 00:00:00', '2020-12-28 00:00:00'),
(78, '', '', '2021-01-14 00:00:00', '2021-01-15 00:00:00'),
(79, '', '', '2020-12-30 00:00:00', '2020-12-31 00:00:00'),
(80, '', '', '2020-12-28 01:00:00', '2020-12-28 02:00:00'),
(81, '', '', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(82, '', '', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(83, '', '', '2020-12-28 00:00:00', '2020-12-29 00:00:00'),
(84, '', '', '2020-12-28 00:00:00', '2020-12-29 00:00:00'),
(85, '', '', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(86, '', '', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(87, '', '', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(88, '', '', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(89, '', '', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(90, '', '', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(91, '', '', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(92, '', '', '2020-12-30 00:00:00', '2020-12-31 00:00:00'),
(93, 'jj', '#FFD700', '2020-12-30 00:00:00', '2020-12-31 00:00:00'),
(94, '', '', '2020-12-28 00:00:00', '2020-12-29 00:00:00'),
(95, '', '', '2020-12-28 00:00:00', '2020-12-29 00:00:00'),
(96, '', '', '2021-01-14 00:00:00', '2021-01-15 00:00:00'),
(97, '', '', '2021-01-14 00:00:00', '2021-01-15 00:00:00'),
(98, '', '', '2021-01-14 00:00:00', '2021-01-15 00:00:00'),
(99, '', '', '2021-01-14 00:00:00', '2021-01-15 00:00:00'),
(100, '', '', '2020-12-30 00:00:00', '2020-12-31 00:00:00'),
(101, '', '', '2020-12-30 00:00:00', '2020-12-31 00:00:00'),
(102, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(103, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(104, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(105, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(106, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(107, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(108, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(109, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(110, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(111, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(112, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(113, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(114, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(115, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(116, 'wwww', '#FFD700', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(117, '', '', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(118, '', '', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(119, '', '', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(120, '', '', '2021-02-04 00:00:00', '2021-02-04 00:30:00'),
(121, '', '', '2020-07-30 00:00:00', '2020-07-31 00:00:00'),
(122, '', '', '2020-12-29 00:00:00', '2020-12-30 00:00:00'),
(123, '', '', '2021-01-07 00:00:00', '2021-01-08 00:00:00'),
(124, '', '', '2021-01-11 00:00:00', '2021-01-12 00:00:00'),
(125, 'Apresentação projeto', '#0071c5', '2021-12-31 09:00:00', '2021-01-31 10:00:00'),
(126, 'Apresentação projeto', '#FFD700', '2021-01-31 00:00:00', '2021-01-31 00:00:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`idEndereco`, `rua`, `bairro`, `complemento`, `cidade`, `estado`, `numero`, `cep`) VALUES
(1, 'teste', 'rua 3', '', 'taubatÃ©', 'mt', '123', '12012121'),
(2, 'teste', 'rua 3', '', 'taubatÃ©', 'mt', '123', '12012121');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `privilegio` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idLogin`, `login`, `senha`, `privilegio`) VALUES
(1, 'rr@rr', '123', 'paciente'),
(2, 'rr@rr', '123', 'paciente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `idMedico` int(11) NOT NULL,
  `crm` varchar(10) NOT NULL,
  `especialidade` varchar(45) NOT NULL,
  `pessoa_idPessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `tipoSanguineo` varchar(3) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `dataNascimento` datetime NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `pessoa_idPessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`tipoSanguineo`, `sexo`, `dataNascimento`, `idPaciente`, `pessoa_idPessoa`) VALUES
('O+', 'M', '1999-04-27 00:00:00', 1, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`idPessoa`, `cpf`, `nome`, `endereco_idEndereco`, `telefone_idTelefone`, `login_idLogin`) VALUES
(1, '123', 'Renan Pereira Volpe', 2, 2, 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `telefone`
--

INSERT INTO `telefone` (`idTelefone`, `tel1`, `tel2`, `cel1`, `cel2`) VALUES
(1, '123', '123', '123', '123'),
(2, '123', '123', '123', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idConsulta`,`agenda_idAgenda`),
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
  ADD PRIMARY KEY (`idPessoa`,`login_idLogin`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

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
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `idMedico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `idPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `telefone`
--
ALTER TABLE `telefone`
  MODIFY `idTelefone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

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
