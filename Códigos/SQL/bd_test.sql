-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2019 às 06:14
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cpf` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cpf`, `nome`, `telefone`, `email`) VALUES
(1, 'nomeCliente', 4123, '123123'),
(5, 'Carlos', 3124123, '3213121'),
(7, 'marcus', 3124123, '3124123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `cpf` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `cargo` varchar(25) NOT NULL,
  `login` varchar(25) NOT NULL,
  `senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`cpf`, `nome`, `cargo`, `login`, `senha`) VALUES
(1, 'joao', 'triste', '321', 31231243);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `marca` varchar(25) NOT NULL,
  `preco` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `quantidade`, `marca`, `preco`) VALUES
(2, 'De palha', 20, 'Are', '10'),
(4, 'batata', 1, '3123', '3'),
(5, 'Carro', 13, 'Nissan', '2'),
(7, 'Agua Com GÃ¡s', 14, 'Nestle', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `idvend` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `qntprod` int(11) NOT NULL,
  `idvendedor` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`idvend`, `idproduto`, `qntprod`, `idvendedor`, `idcliente`, `data`) VALUES
(12, 2, 4, 1, 1, '2019-12-06 04:07:56'),
(13, 4, 2, 1, 1, '2019-12-06 04:39:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`idvend`),
  ADD KEY `idproduto` (`idproduto`),
  ADD KEY `idvendedor` (`idvendedor`),
  ADD KEY `idcliente` (`idcliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `idvend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `vendas_ibfk_3` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`cpf`),
  ADD CONSTRAINT `vendas_ibfk_4` FOREIGN KEY (`idvendedor`) REFERENCES `funcionarios` (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
