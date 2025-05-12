-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/05/2025 às 15:52
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `curso` varchar(25) NOT NULL,
  `serie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `curso`, `serie`) VALUES
(1, 'Almir Camolesi', 'ADS', 3),
(2, 'Samuel Camolesi', 'Games Digitais', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `emprestimo`
--

DROP TABLE IF EXISTS `emprestimo`;
CREATE TABLE `emprestimo` (
  `id` int(11) NOT NULL,
  `aluno` int(11) NOT NULL,
  `livro` int(11) NOT NULL,
  `dataemp` date NOT NULL,
  `datadev` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `emprestimo`
--

INSERT INTO `emprestimo` (`id`, `aluno`, `livro`, `dataemp`, `datadev`) VALUES
(1, 1, 2, '2025-05-12', '0000-00-00'),
(2, 2, 1, '2025-05-12', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

DROP TABLE IF EXISTS `livro`;
CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(35) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `valor` float NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`id`, `titulo`, `genero`, `valor`, `status`) VALUES
(1, 'Poeira em Alto Mar', 'Ficção', 50, 'L'),
(2, 'Introdução a MySQL', 'Tecnologia', 67.57, 'O');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emprestimo_aluno` (`aluno`),
  ADD KEY `emprestimo_livro` (`livro`);

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `emprestimo_aluno` FOREIGN KEY (`aluno`) REFERENCES `aluno` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `emprestimo_livro` FOREIGN KEY (`livro`) REFERENCES `livro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
