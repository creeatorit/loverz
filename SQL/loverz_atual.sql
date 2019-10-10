-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 10/10/2019 às 15:44
-- Versão do servidor: 5.7.27-0ubuntu0.18.04.1
-- Versão do PHP: 7.3.9-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loverz`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `casas`
--

CREATE TABLE `casas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `observacoes` varchar(5000) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `termos` tinyint(1) NOT NULL DEFAULT '1',
  `nivel` tinyint(1) NOT NULL DEFAULT '2',
  `dt_cadastro` date NOT NULL,
  `hr_cadastro` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `dt_hr_postagem` datetime NOT NULL,
  `post_text` text NOT NULL,
  `post_multimidia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `posts`
--

INSERT INTO `posts` (`id`, `usuario_id`, `dt_hr_postagem`, `post_text`, `post_multimidia`) VALUES
(1, 3, '2019-09-11 03:07:26', 'Teste', '-'),
(2, 1, '2019-09-11 03:20:29', 'Teste 2', '-'),
(3, 1, '2019-09-12 14:38:54', 'Teste novo 2', '-'),
(4, 1, '2019-09-12 14:41:27', 'Teste Novo 3', '-'),
(5, 1, '2019-09-12 23:06:22', 'Teste Novo 4', ''),
(6, 1, '2019-09-12 23:06:46', 'teste novo 5', ''),
(7, 1, '2019-09-12 23:07:43', 'teste novo 6', ''),
(8, 1, '2019-09-12 23:09:04', 'teste novo 7', ''),
(9, 1, '2019-09-12 23:11:43', 'teste novo 8', ''),
(10, 1, '2019-09-12 23:13:19', 'teste novo 9', ''),
(11, 1, '2019-09-12 23:13:32', 'teste novo 10', ''),
(12, 1, '2019-09-12 23:19:15', 'teste novo 11', ''),
(13, 1, '2019-09-12 23:20:22', 'teste novo 12', ''),
(14, 1, '2019-09-12 23:21:33', 'teste novo 13', ''),
(15, 1, '2019-09-12 23:22:54', 'teste nvo 14', ''),
(16, 3, '2019-09-17 16:45:26', 'teste 1111', ''),
(17, 1, '2019-09-27 15:04:12', 'TESTE AGORA 27/09', ''),
(18, 1, '2019-10-04 22:33:10', 'vai', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `local_nascimento` varchar(100) DEFAULT NULL,
  `estado_civil` varchar(50) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `sexo` enum('"M"','"F"') DEFAULT NULL,
  `senha` varchar(32) NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `sobre` varchar(255) DEFAULT NULL,
  `profissao` varchar(100) DEFAULT NULL,
  `nivel` int(2) DEFAULT '1',
  `cod_confirmacao` varchar(32) DEFAULT NULL,
  `confirmado` tinyint(1) DEFAULT '0',
  `website` varchar(150) DEFAULT NULL,
  `link_facebook` varchar(150) DEFAULT NULL,
  `link_twitter` varchar(150) DEFAULT NULL,
  `link_instagram` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `email`, `telefone`, `nascimento`, `local_nascimento`, `estado_civil`, `foto`, `sexo`, `senha`, `status`, `sobre`, `profissao`, `nivel`, `cod_confirmacao`, `confirmado`, `website`, `link_facebook`, `link_twitter`, `link_instagram`, `created_at`) VALUES
(5, 'Administrador', NULL, 'admin@loverz.com.br', NULL, NULL, NULL, NULL, NULL, NULL, '202cb962ac59075b964b07152d234b70', 0, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, '2019-10-10 18:35:51'),
(6, 'Rafael', 'Jeferson', 'rafa.jefer@gmail.com', '11 97053-9847', '1994-06-04', NULL, NULL, NULL, NULL, 'd70ca3583600bb0f2af3bfaa3360b38d', 0, NULL, '', 1, NULL, 0, 'www.rafael.com.br', NULL, NULL, NULL, '2019-10-10 18:36:19'),
(7, 'Rafael', 'Jeferson', 'rafa.jefer@gmail.com', '', '0000-00-00', NULL, NULL, NULL, NULL, '', 0, NULL, '', 1, NULL, 0, NULL, NULL, NULL, NULL, '2019-10-10 18:38:12');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `casas`
--
ALTER TABLE `casas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
