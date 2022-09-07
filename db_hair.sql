-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 11:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hair`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadastro_usuario`
--

CREATE TABLE `cadastro_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `cpf_usuario` varchar(25) NOT NULL,
  `email_usuario` varchar(255) NOT NULL,
  `telefone_usuario` varchar(11) NOT NULL,
  `senha_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cadastro_usuario`
--

INSERT INTO `cadastro_usuario` (`id_usuario`, `nome_usuario`, `cpf_usuario`, `email_usuario`, `telefone_usuario`, `senha_usuario`) VALUES
(9, 'Daniel', '46955022830', 'daniel@gmail.com', '13982122022', '123'),
(10, 'Moises', '12345678910', 'moises@gmail.com', '13740249199', '123'),
(11, 'Fabio', '24643798370', 'fabio@gmail.com', '13819318539', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
