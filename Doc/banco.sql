-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Mar-2022 às 00:24
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_produtos`
--

CREATE TABLE `imagem_produtos` (
  `id_img` int(255) NOT NULL,
  `id_produto` int(255) NOT NULL,
  `imagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imagem_produtos`
--

INSERT INTO `imagem_produtos` (`id_img`, `id_produto`, `imagem`) VALUES
(1, 1, '-.png'),
(2, 2, '-Produto 1'),
(3, 3, '-Produto 1'),
(4, 4, '-Produto 1'),
(5, 5, '-Produto 1'),
(6, 6, '-Produto 1'),
(7, 7, '-Produto 2'),
(8, 8, '-Produto 2'),
(9, 9, '-Produto 2'),
(10, 10, '-Produto 2'),
(11, 11, '-Produto 2'),
(12, 12, '-produto 3'),
(13, 13, '-produto 3'),
(14, 14, '-produto 3'),
(15, 15, '-produto 3'),
(16, 16, '-produto 3'),
(17, 17, '-produto 4'),
(18, 18, '-produto 4'),
(19, 19, '-produto 4'),
(20, 20, '-produto 4'),
(21, 21, '-produto 4'),
(22, 22, '-Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(255) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `ativado` varchar(10) NOT NULL,
  `destaque` varchar(10) NOT NULL,
  `situacao` varchar(10) NOT NULL,
  `descricao` varchar(2000) NOT NULL,
  `video` varchar(200) NOT NULL,
  `custo` float NOT NULL,
  `venda` float NOT NULL,
  `promocional` float NOT NULL,
  `sku` varchar(50) NOT NULL,
  `ean` varchar(20) NOT NULL,
  `ncm` int(10) NOT NULL,
  `estoque` varchar(10) NOT NULL,
  `quant_estoque` int(255) NOT NULL,
  `acao_estoque` varchar(100) NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `comprimento` float NOT NULL,
  `largura` float NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `title_ceo` varchar(200) NOT NULL,
  `descricao_ceo` varchar(500) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `ativado`, `destaque`, `situacao`, `descricao`, `video`, `custo`, `venda`, `promocional`, `sku`, `ean`, `ncm`, `estoque`, `quant_estoque`, `acao_estoque`, `peso`, `altura`, `comprimento`, `largura`, `categoria`, `marca`, `title_ceo`, `descricao_ceo`, `url`) VALUES
(2, 'Produto 1', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(3, 'Produto 1', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(4, 'Produto 1', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(5, 'Produto 1', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(6, 'Produto 1', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(7, 'Produto 2', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(8, 'Produto 2', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(9, 'Produto 2', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(10, 'Produto 2', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(11, 'Produto 2', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(12, 'produto 3', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(13, 'produto 3', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(14, 'produto 3', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(15, 'produto 3', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(16, 'produto 3', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(17, 'produto 4', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(18, 'produto 4', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(19, 'produto 4', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(20, 'produto 4', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(21, 'produto 4', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url'),
(22, 'Teste', 'ativado', '', 'usado', '', '', 0, 0, 0, '', '', 0, '', 0, 'nada', 0, 0, 0, 0, 'Categoria', 'Marca', '', '', 'https://site.com.br/url');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imagem_produtos`
--
ALTER TABLE `imagem_produtos`
  ADD PRIMARY KEY (`id_img`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imagem_produtos`
--
ALTER TABLE `imagem_produtos`
  MODIFY `id_img` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
