-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Out-2021 às 02:52
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `syscadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `dtnascimento` date DEFAULT NULL,
  `Endereco` varchar(255) DEFAULT NULL,
  `Telefone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `cpf`, `dtnascimento`, `Endereco`, `Telefone`) VALUES
(1, 'Joaquim Manuel', 'joaquim@gmail.com', '747.627.720-11', '1978-04-06', 'Avenida Joaquim Ferreira Souto 524', '(11) 95814-6827'),
(2, 'Andressa Araujo', 'andressa@gmail.com', '239.238.750-88', '1995-10-12', 'Rua do Posto 52', '(11) 94585-1458'),
(5, 'Rebecca Alves', 'rebecca@gmail.com', '28000800', '2000-08-05', 'Rua Castelo, avenida francisca', '(11)98070-4502'),
(6, 'Sarah Fier', 'sarah@gmail.com', '892.720.020-95', '1966-08-05', 'Rua Shadyside, avenida goode', '(13) 98531-2857'),
(7, 'Karina Lima', 'karina@gmail.com', '409.895.320-03', '2005-02-21', 'Rua Sabará, Recanto dos Vinhais', '(11) 93265-2534'),
(8, 'Sabrina Maria', 'sasa@gmail.com', '408.792.330-44', '1999-02-08', 'Avenida Rodoviária, s/n ', '(35) 98975-3550'),
(9, 'Geovanna Andrade', 'gio@gmail.com', '046.015.060-00', '1998-11-20', 'Rua Machado 255, centro', '(19) 99700-1827'),
(10, 'Marcos Sabrino', 'mark@gmail.com', '589.678.540-21', '2000-09-28', 'Estrada Principal, s/n, Alfredo Chaves', '(51) 92485-3314'),
(11, 'Julio Roberto ', 'julioroberts@gmail.com', '624.061.900-05', '1987-12-15', 'Praça Sebastião Marinho de Paula 95', '(87) 90433-6058'),
(12, 'Leandro Reginaldo', 'lele@gmail.com', '567.616.050-08', '1992-06-25', 'Rua Planalto, Ponte Seca 255', '(11) 95997-6430'),
(13, 'Mario Sales', 'mario@gmail.com', '605.210.680-88', '1975-03-08', 'Rua Mauricio Allain 122', '(47) 92702-9564'),
(14, 'Vanessa Buena', 'vanebue@gmail.com', '222.569.960-77', '2003-04-30', 'Rua Cândido José de Oliveira 96', '(14) 98486-9684'),
(15, 'Marcia Silva', 'marcinha@gmail.com', '024.678.570-50', '1975-06-20', 'Rua Aparecido Arthur Toni', '(11) 91752-7989'),
(16, 'Hannah Miller', 'hannah@gmail.com', '828.181.101-30', '1975-08-20', 'Parque Residencial Funada, Presidente Prudente 504', '(60) 99928-8937'),
(17, 'João Augusto', 'joao@gmail.com', '241.933.011-09', '1988-12-28', 'Rua Daniel de Oliveira Carvalho 140', '(28) 90362-4124');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
