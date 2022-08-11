-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Ago-2022 às 05:00
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tattoo_studio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `idagenda` int(11) NOT NULL,
  `artista` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `turno` varchar(45) NOT NULL,
  `ocupado` binary(1) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `assunto` linestring DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` int(11) NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`iduser`, `nome`, `sobrenome`, `cpf`, `email`, `senha`, `tipo`) VALUES
(1, 'admin', 'admin', 0, 'admin', 'admin', 'admin'),
(2, 'Jonatas', 'rossetto', 2147483647, 'jonatas.rossetto@gmail.com', '1234', ''),
(3, 'jonatas', 'rossetto', 2147483647, 'jonatas.rossetto@gmail.com', '1234', ''),
(4, '', '', 2147483647, '', '', 'user'),
(5, '', '', 2147483647, 'jonatas.rossetto@gmail.com', '', 'user'),
(6, '', '', 2147483647, 'wefwefwe@wcsw', '', 'user'),
(7, 'OLÍVIA ', 'ROSSETTO', 2147483647, 'jonatas.rossetto@gmail.com', '1234', 'user'),
(8, 'teste34535', '', 2147483647, 'jonatas.rossetto@gmail.com', '', 'user');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idagenda`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `idagenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
