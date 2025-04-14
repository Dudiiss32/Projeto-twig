-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/04/2025 às 05:06
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `3info`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `compras`
--

INSERT INTO `compras` (`id`, `item`) VALUES
(3, 'maç'),
(4, 'maça'),
(5, 'dawda');

-- --------------------------------------------------------

--
-- Estrutura para tabela `compromissos`
--

CREATE TABLE `compromissos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `compromissos`
--

INSERT INTO `compromissos` (`id`, `titulo`, `data`) VALUES
(1, 'dadawdaww', '2025-04-16'),
(2, 'aaaaaaaaaa', '2025-04-01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'admin', '$2y$10$hFs66LC6qTKfPh41opqo5Ok4lt1StCZcZO/6KukqxSzKLWzRG/lW.'),
(2, 'admin', '$2y$10$xCsVGwn6N.9cHxWM5yaat.7S9lVx.MYcteX8572x6xOsIdx1ccfIa'),
(3, 'duda', '$2y$10$svW8dSpqGKlEHuozTYy/Euvh9Z8kGmInvhvs.kig5YLfEJXCvvyci'),
(4, 'duda', '$2y$10$RlTo9QB1CD.rE4PrOoYMweCJqxBr1T0ajm7/qWLO7FP3RG7TkUr1W'),
(5, 'duda', '$2y$10$g1w8txQw8uymCG4ywF1kBejddBM6jiEDjbDxKzGhbdeldvCdOKtrO'),
(6, 'duda', '$2y$10$37u22sdaoBR5SzQPosqBv.eZcFMnK1jvbc9xGQoiH3uvydrm44CqS'),
(7, 'dudiiss', '$2y$10$nKitDHlQqH1Ndp7jVgRGGuSF1gqZJb11CVPTgD/xjCvcBe8iqZgOm'),
(8, 'dudiiss', '$2y$10$SAdlLSCGmLj3QOm2We2mYetNbq6bnp.aUyVuBoRmC8JJxEBsfzdtC'),
(9, 'dudiiss', '$2y$10$HxlBVf8lZtUUIFHmwsiTK.Yq.MXqlL2K8vlwPYm6ZEraMAzhv/GU6'),
(10, 'aaa', '$2y$10$B2sMsEZecp12i4REKwIufuURWzJYjF3IXcywaIivHXwhP26WLW5C6');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `compromissos`
--
ALTER TABLE `compromissos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `compromissos`
--
ALTER TABLE `compromissos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
