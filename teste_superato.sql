-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jan-2019 às 19:15
-- Versão do servidor: 10.1.37-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste_superato`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `prioridades`
--

CREATE TABLE `prioridades` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `prioridade` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `titulo`, `descricao`, `prioridade`) VALUES
(3, 'teste2', 'teste', 2),
(4, 'teste 3', 'teste', 3),
(5, 'teste 4', 'teste', 4),
(6, 'teste 5', 'teste', 5),
(7, 'teste 6', 'teste', 6),
(8, 'teste7', 'teste', 7),
(9, 'teste', 'teste', 8),
(10, 'teste 9', 'teste', 10),
(11, 'teste 5', '9', 11),
(12, 'teste 12', 'teste', 12),
(14, 'teste 555555', 'teste', 14),
(15, 'teste 3', '15', 15),
(16, 'teste 5', '16', 16),
(17, 'teste 6', '16', 16),
(18, 'teste', 'teste', 1),
(19, 'EWE', 'teste', 4),
(20, '3', 'teste', 44),
(21, 'teste', 'teste', 77),
(22, 'teste 5', '9', 34),
(23, 'teste 5t', 'teste', 44),
(24, 'teste', 'teste', 66);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prioridades`
--
ALTER TABLE `prioridades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prioridade` (`prioridade`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prioridades`
--
ALTER TABLE `prioridades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
