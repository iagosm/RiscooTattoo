-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Ago-2022 às 17:26
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
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

CREATE TABLE `formulario` (
  `idtatuador` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `estilo` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `foto` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pele` varchar(15) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tatuador` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `idade` int(3) NOT NULL,
  `dthora` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `formulario`
--

INSERT INTO `formulario` (`idtatuador`, `nome`, `estilo`, `sexo`, `foto`, `telefone`, `pele`, `estado`, `tatuador`, `email`, `idade`, `dthora`) VALUES
(1, 'rafael', 'dyreye', 'm', 'foto1.jpg', '', '', '', '', '', 0, '0000-00-00'),
(2, 'jorge', 'tribal', 'masculino', 'foto2.jpg', '', '', '', '', '', 0, '0000-00-00'),
(3, 'sophia', 'tribal', 'feminino', 'foto3.jpg', '', '', '', '', '', 0, '0000-00-00'),
(4, 'eduardo', 'maori', 'masculino', 'foto4.jpg', '', '', '', '', '', 0, '0000-00-00'),
(5, 'iraci', 'tribal', 'feminino', 'foto5.jpg', '', '', '', '', '', 0, '0000-00-00'),
(6, 'safira', 'tribal', 'feminino', 'foto6.jpg', '', '', '', '', '', 0, '0000-00-00'),
(7, 'pietro', 'realismo', 'masculino', 'foto7.jpg', '', '', '', '', '', 0, '0000-00-00'),
(9, 'jorge santiago', 'old', 'm', '', '', '', '', '', '', 0, '0000-00-00'),
(10, 'rafael', 'trtibal', 'm', '', '', '', '', '', '', 0, '0000-00-00'),
(11, 'jorge', 'trtibal', 'm', '', '', '', '', '', '', 0, '0000-00-00'),
(12, 'jorge santiago', 'ba', 'm', '', '7193545622', '', 'rj', 'ce', 'jorgeeduardo3101@gmail.com', 0, '0000-00-00'),
(13, 'iago', 'ce', 'm', '', '12313131', 'ce', 'rj', 'ba', 'aa@gmail.com', 0, '0000-00-00'),
(14, 'iago', 'ce', 'm', '', '12313131', 'ce', 'rj', 'ba', 'aa@gmail.com', 0, '0000-00-00'),
(15, 'iago', 'ce', 'f', '', '71981831009', 'ce', 'ce', 'ce', 'iagosousa@gmail.com', 0, '0000-00-00'),
(16, 'iago', 'sp', 'm', '', '71981831009', 'ba', 'ce', 'ba', 'iagosousa@gmail.com', 0, '0000-00-00'),
(17, 'iago', 'sp', 'm', '', '71981831009', 'ba', 'ce', 'ce', 'iagosousa@gmail.com', 0, '0000-00-00'),
(18, 'iago', 'sp', 'm', '', '71981831009', 'ba', 'ce', 'ce', 'iagosousa@gmail.com', 0, '0000-00-00'),
(19, 'iago', 'rj', 'm', '', '71981831009', 'ba', 'sp', 'ba', 'iagosousa@gmail.com', 0, '0000-00-00'),
(20, 'iago', 'rj', 'm', '', '71981831009', 'ba', 'sp', 'ba', 'iagosousa@gmail.com', 0, '0000-00-00'),
(21, 'teste2', 'ce', 'm', '', '9999999', 'ba', 'sp', 'rj', 'teste@gmail.com', 0, '0000-00-00'),
(22, 'teste2', 'ce', 'm', '', '9999999', 'ba', 'sp', 'rj', 'teste@gmail.com', 0, '0000-00-00'),
(23, 'teste3', 'ce', 'o', '', '1234567', 'ba', 'ce', 'ba', 'teste1@gmail.com', 0, '0000-00-00'),
(24, 'jorge santiago', 'ba', 'o', '', '71981831009', 'ba', 'sp', 'ce', 'dsg@dshfjkhdf', 0, '0000-00-00'),
(25, 'jorge santiago', 'ba', 'o', '', '71981831009', 'ba', 'sp', 'ce', 'dsg@dshfjkhdf', 0, '0000-00-00'),
(26, 'jorge santiago', 'ba', 'o', '', '71981831009', 'ba', 'sp', 'ce', 'dsg@dshfjkhdf', 0, '0000-00-00'),
(27, 'jorge santiago', 'ba', 'o', '', '71981831009', 'ba', 'sp', 'ce', 'dsg@dshfjkhdf', 0, '0000-00-00'),
(28, 'jorge', 'ce', 'o', '', '71981831009', 'ba', 'rj', 'ce', 'jorgeeduardo3101@gmail.com', 0, '2022-08-24'),
(29, 'jorge', 'ce', 'o', '', '71981831009', 'ba', 'rj', 'ce', 'jorgeeduardo3101@gmail.com', 0, '2022-08-24'),
(30, 'jorge', 'ce', 'o', '', '71981831009', 'ba', 'rj', 'ce', 'jorgeeduardo3101@gmail.com', 0, '2022-08-24'),
(31, 'jorge', 'ce', 'o', '', '71981831009', 'ba', 'rj', 'ce', 'jorgeeduardo3101@gmail.com', 0, '2022-08-24'),
(32, 'jorge', 'ce', 'o', '', '71981831009', 'ba', 'rj', 'ce', 'jorgeeduardo3101@gmail.com', 0, '2022-08-24'),
(33, 'jorge', 'ce', 'o', '', '71981831009', 'ba', 'rj', 'ce', 'jorgeeduardo3101@gmail.com', 0, '2022-08-24'),
(34, 'jorge', 'ce', 'o', '', '71981831009', 'ba', 'rj', 'ce', 'jorgeeduardo3101@gmail.com', 0, '2022-08-24'),
(35, 'jorge', 'ce', 'o', '', '71981831009', 'ba', 'rj', 'ce', 'jorgeeduardo3101@gmail.com', 0, '2022-08-24'),
(36, 'jorge santiago', 'ba', 'o', '', '71981831009', 'ba', 'sp', 'ce', 'dsg@dshfjkhdf', 0, '0000-00-00'),
(37, 'jorge santiago', 'ba', 'o', '', '71981831009', 'ba', 'sp', 'ce', 'dsg@dshfjkhdf', 0, '0000-00-00'),
(38, 'jorge santiago', 'ba', 'o', '', '71981831009', 'ba', 'sp', 'ce', 'dsg@dshfjkhdf', 0, '0000-00-00'),
(39, 'jorge santiago', 'ba', 'o', '', '71981831009', 'ba', 'sp', 'ce', 'dsg@dshfjkhdf', 0, '0000-00-00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`idtatuador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formulario`
--
ALTER TABLE `formulario`
  MODIFY `idtatuador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
