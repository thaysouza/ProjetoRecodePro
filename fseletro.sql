-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Out-2020 às 01:32
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fseletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `idproduto` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `valor` float NOT NULL,
  `quantidade` int(10) DEFAULT NULL,
  `valortotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`idproduto`, `nome`, `endereco`, `telefone`, `produto`, `valor`, `quantidade`, `valortotal`) VALUES
(1, 'tamiris souza', 'rua das flores', '2222-4444', 'geladeira', 6.389, 2, 12.778),
(2, 'roberto silva', 'rua oliveira', '4444-5555', 'geladeira', 6.389, 1, 6.389),
(3, 'Aluicio da silva', 'rua um', '5555-5555', 'geladeira', 6.389, 1, 6.389),
(4, 'pedro henrique', 'rua carlos muiranda', '2222-2222', 'geladeira', 6.389, 1, 6.389),
(5, 'luciana vitoria', 'rua euclides coelho', '7778-89655', 'Lavadora', 2179.9, 1, 2179.9),
(6, 'camila santos', 'rua dos estrados', '4562-85590', 'lavadora', 2179.9, 1, 2179.9),
(7, 'Amanda aparecida', 'rua estrela de belem', '5896-8695', 'microondas', 436.05, 1, 436.05),
(8, 'leticia moraes', 'rua camargo', '4444-5555', 'Fogão', 1129, 3, 3.387),
(9, 'tauan da silva', 'rua ipoema', '7896-1236', 'Fogão', 1129, 3, 3.387),
(10, 'sabrina ferreira', 'rua laranjeira', '7896-1236', 'lava-louças', 2799.9, 1, 2799.9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `precofinal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idproduto`, `categoria`, `descricao`, `imagem`, `preco`, `precofinal`) VALUES
(1, 'Geladeira', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', './img/geladeira1.jpeg', 6389, 5019),
(2, 'Geladeira', 'Geladeira Frost Free Brastemp Branca 375 litros', './img/geladeira2.jpeg', 2068.6, 1910.9),
(3, 'Geladeira', 'Geladeira Frost Free Consul Prata 340 litros', './img/geladeira3.jpeg', 2199.9, 2069),
(4, 'Fogão', 'Fogão 4 Bocas Consul Inox com mesa de Vidro', './img/fogao1.jpeg', 1200, 1129),
(5, 'Fogão', 'Fogão de Piso 4 Bocas Atlas Monaco com Acendimento Automâtico', './img/fogao2.jpeg', 600, 519.7),
(6, 'Microodas', 'Micro-ondas Consul 32 Litros Inox 220V', './img/microondas1.jpeg', 580, 409.88),
(7, 'Microodas', 'microondas 25L Espelhado Philco 220V', './img/microondas2.jpeg', 508.7, 464.53),
(8, 'Microodas', 'Forno Microondas Electrolux 20L Branco', './img/microondas3.jpeg', 549, 436.05),
(9, 'Lava-louças', 'Lava-louças Electrolux Inox com 10 Serviços', './img/lava louças1.jpeg', 3599, 2799.9),
(10, 'Lava-louças', 'Lava louça Compacta 8 Serviços Branca 127V Brastemp', './img/lava louças2.jpeg', 1970.5, 1730.61),
(11, 'Lavadora', 'Lavadora de Roupas Brastemp 11kg com Turbo Performance Branca', './img/maquina1.jpeg', 1699, 1214.1),
(12, 'Lavadora', 'Lavadora de Roupas Philco Inverter 12KG', './img/maquina2.jpeg', 2399.9, 2179.9);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
