-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 30-Mar-2020 às 14:48
-- Versão do servidor: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Dabase: `books`
--
-- create database books;
-- use books;
-- --------------------------------------------------------

--
-- Estrutura da tabela `authors`
--


CREATE TABLE `logins` (
  `Mail` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `logins` (`Mail`, `Senha`) VALUES
('teste@gmail.com', '123mudar'),
('teste02@gmail.com', '123mudar');

--
-- Indexes for dumped tables
--

create table `figurinhas` (
  `ID` varchar (3) not NULL,
  `Nome` varchar (25) NOT null,
  `Selecao` varchar (30) not null
) ENGINE=InnoDB DEFAULT charset=latin1;


-- Indexes for table `authors`
--
-- ALTER TABLE `authors`
--  ADD PRIMARY KEY (`authorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
-- ALTER TABLE `authors`
-- MODIFY `authorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
