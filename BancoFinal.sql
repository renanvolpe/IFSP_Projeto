-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jan-2021 às 03:42
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
-- Banco de dados: `calendario`
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
(70, 'Luis', '#228B22', '2021-01-16 00:00:00', '2021-01-16 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
