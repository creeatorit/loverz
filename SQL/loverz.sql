-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/10/2019 às 17:11
-- Versão do servidor: 10.3.16-MariaDB
-- Versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `termos` tinyint(1) NOT NULL DEFAULT 1,
  `nivel` tinyint(1) NOT NULL DEFAULT 2,
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
-- Despejando dados para a tabela `posts`
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
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `nascimento` date NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tipo` tinyint(1) NOT NULL DEFAULT 1,
  `sexo` varchar(2) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `observacoes` varchar(5000) NOT NULL,
  `motivo_bloqueio` varchar(5000) NOT NULL,
  `termos` tinyint(1) NOT NULL DEFAULT 1,
  `nivel` int(1) NOT NULL DEFAULT 1,
  `hr_cadastro` time NOT NULL,
  `dt_cadastro` date NOT NULL,
  `cod_confirmacao` varchar(10) NOT NULL,
  `confirmado` tinyint(1) NOT NULL DEFAULT 1,
  `solicitacoes_amizade` varchar(3) NOT NULL,
  `visualizar_postagem` varchar(3) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `sobre` varchar(5000) NOT NULL,
  `link_facebook` varchar(200) NOT NULL,
  `link_twitter` varchar(200) NOT NULL,
  `link_instagram` varchar(200) NOT NULL,
  `interesses` text NOT NULL,
  `curte_vezes` text NOT NULL,
  `curte_sempre` text NOT NULL,
  `nao_curte` text NOT NULL,
  `proposta` text NOT NULL,
  `perfil_completo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `apelido`, `email`, `telefone`, `nascimento`, `foto`, `tipo`, `sexo`, `senha`, `status`, `observacoes`, `motivo_bloqueio`, `termos`, `nivel`, `hr_cadastro`, `dt_cadastro`, `cod_confirmacao`, `confirmado`, `solicitacoes_amizade`, `visualizar_postagem`, `cep`, `bairro`, `cidade`, `estado`, `sobre`, `link_facebook`, `link_twitter`, `link_instagram`, `interesses`, `curte_vezes`, `curte_sempre`, `nao_curte`, `proposta`, `perfil_completo`) VALUES
(1, 'Administrador', 'Loverz', 'admin', 'admin@loverz.com.br', '', '0000-00-00', 'default.jpg', 2, '', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, '', '', 1, 100, '14:44:42', '2019-09-02', '15710', 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2),
(2, 'Carlos', 'Eduardo', 'fantoxi', 'eduardo@dotmidia.com.br', '(41) 99999-9999', '1980-01-01', 'avatar_18476.jpg', 1, 'MA', 'dea742e166979027ae70b28e0a9006fb1010e760', 1, 'NA', 'NA', 1, 1, '00:03:55', '2019-09-07', '20750', 2, 'TD', 'TD', 'BRA', '', 'Curitiba', 'ParanÃ¡', 'Teste Sobre Mim', 'NA', 'NA', 'NA', 'Interesses', 'Curto', 'Curto', 'NÃ£o Curto', 'Minha proposta', 2),
(3, 'FÃ¡bio', 'Vieira', 'fabioovieira', 'fabioovieira86@gmail.com', '(41) 99282-3979', '1986-10-16', 'avatar_15945.jpg', 1, 'MA', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'NA', 'NA', 1, 1, '18:57:12', '2019-09-10', '13172', 2, 'TD', 'TD', '82110-190', 'Pilarzinho', 'Curitiba', 'PR', 'Teste sobre', 'www.facebook.com', 'www.twitter.com', 'www.instagram.com', '', '', '', '', '', 2),
(4, '', '', '', 'fabio.vieira@softwall.com.br', '', '0000-00-00', 'default.jpg', 1, '', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, '', '', 1, 1, '22:29:57', '2019-10-04', '12072', 1, 'TD', 'TD', '', '', '', '', '', '', '', '', '', '', '', '', '', 1);

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
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
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
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
