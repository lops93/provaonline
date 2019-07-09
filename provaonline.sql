-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jul-2019 às 23:30
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `provaonline`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `id` int(100) NOT NULL,
  `pergunta` varchar(1000) NOT NULL,
  `questao1` varchar(50) NOT NULL,
  `questao2` varchar(50) NOT NULL,
  `questao3` varchar(50) NOT NULL,
  `questao4` varchar(50) NOT NULL,
  `questao5` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `questaocerta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`id`, `pergunta`, `questao1`, `questao2`, `questao3`, `questao4`, `questao5`, `categoria`, `questaocerta`) VALUES
(1, 'Analise o código JavaScript a seguir. \r\n \r\nvar pessoa = {   nome: \"Carlos\",   sobreNome: \"Moreira\",   rg: 12125566,   nomeCompleto : function() {     return this.nome + \" \" + this.sobreNome;   } }; \r\n \r\nAnalise ainda o comando de atribuição a seguir. \r\n \r\ndocument.getElementById(\"34\").innerHTML=...; \r\n \r\nNo trecho pontilhado, a expressão que retorna corretamente a concatenação do nome com o sobrenome de pessoa é: ', '(A) pessoa.nomeCompleto() ', '(B) pessoa:nomeCompleto ', '(C) nomeCompleto() ', '(D) pessoa.nomeCompleto ', '(E) pessoa.nomecompleto ', 'Programação, Javascript, ', '(A) pessoa.nomeCompleto() ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
