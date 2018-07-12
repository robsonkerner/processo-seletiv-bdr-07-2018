-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2018 at 01:57 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atividade4`
--

-- --------------------------------------------------------

--
-- Table structure for table `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `prioridade` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarefas`
--

INSERT INTO `tarefas` (`id`, `titulo`, `descricao`, `prioridade`) VALUES
(1, 'Tarefa13', 'Realizar atividade1', 5),
(2, 'Tarefa2', 'Realizar atividade2', 3),
(3, 'Tarefa3', 'Realizar atividade3', 2),
(4, 'Tarefa4', 'Realizar atividade4', 1),
(5, 'Tarefa5', 'Realizar atividade5', 2),
(6, 'Tarefa6', 'Realizar atividade6', 3),
(7, 'Tarefa7', 'Realizar atividade7', 4),
(8, 'Tarefa8', 'Realizar atividade8', 3),
(9, 'Tarefa9', 'Realizar atividade9', 2),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;