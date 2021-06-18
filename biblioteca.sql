-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 18-Jun-2021 às 05:25
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `biblioteca`
--
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categorias`
--

CREATE TABLE IF NOT EXISTS `tb_categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `cat_descricao` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tb_categorias`
--

INSERT INTO `tb_categorias` (`id_categoria`, `cat_descricao`) VALUES
(1, 'Infantil'),
(2, 'ComÃ©dia'),
(3, 'FicÃ§Ã£o'),
(4, 'Romance'),
(6, 'Drama'),
(7, 'AcadÃªmico'),
(8, 'Terror');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_emprestimos`
--

CREATE TABLE IF NOT EXISTS `tb_emprestimos` (
  `id_emprestimo` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario_emp` int(11) NOT NULL,
  `id_livro_emprestado` int(11) NOT NULL,
  PRIMARY KEY (`id_emprestimo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_emprestimos`
--

INSERT INTO `tb_emprestimos` (`id_emprestimo`, `id_usuario_emp`, `id_livro_emprestado`) VALUES
(2, 5, 6),
(3, 6, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livros`
--

CREATE TABLE IF NOT EXISTS `tb_livros` (
  `id_livro` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(80) CHARACTER SET latin1 NOT NULL,
  `autor` varchar(40) CHARACTER SET latin1 NOT NULL,
  `tema` varchar(40) CHARACTER SET latin1 NOT NULL,
  `data_pub` date NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `qtd_copias` int(11) NOT NULL,
  PRIMARY KEY (`id_livro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tb_livros`
--

INSERT INTO `tb_livros` (`id_livro`, `titulo`, `autor`, `tema`, `data_pub`, `id_categoria`, `qtd_copias`) VALUES
(1, 'Como eu era antes de vocÃª', 'Jojo Moyes', 'Diversos', '2013-04-09', 6, 8),
(4, 'Harry Potter e a Pedra Filosofal', 'J. K. Rowling ', 'Harry Potter', '2000-04-07', 3, 5),
(6, 'Dom Casmurro', 'Machado de Assis', 'ClÃ¡ssicos', '1899-12-26', 4, 20),
(7, 'It: A coisa', 'Stephen King', 'PalhaÃ§os', '2014-06-24', 8, 12),
(8, 'A cidade e as Serras', 'EÃ§a de QueirÃ³s', 'ClÃ¡ssicos', '1901-05-20', 4, 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) CHARACTER SET latin1 NOT NULL,
  `genero` char(1) CHARACTER SET latin1 NOT NULL,
  `data_nasc` date NOT NULL,
  `escolaridade` varchar(40) CHARACTER SET latin1 NOT NULL,
  `endereco` varchar(80) CHARACTER SET latin1 NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(80) CHARACTER SET latin1 NOT NULL,
  `bairro` varchar(80) CHARACTER SET latin1 NOT NULL,
  `cidade` varchar(80) CHARACTER SET latin1 NOT NULL,
  `estado` char(2) CHARACTER SET latin1 NOT NULL,
  `telefone` char(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nome`, `genero`, `data_nasc`, `escolaridade`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `telefone`, `email`) VALUES
(3, 'Antonio Dias', 'M', '2000-05-01', 'Ensino MÃ©dio', 'Rua das Palmas', 143, '', 'Jardineira', 'SÃ£o Paulo', 'se', '(11) 92222-2222', 'teste@teste'),
(4, 'JoÃ£o Carlos da Silva', 'M', '1999-06-08', 'Ensino Superior', 'Rua Laranja', 42, '3333', 'LimÃ£o', 'SÃ£o Paulo', 'sp', '+55 (11) 91111-1111', 'joao@teste.com'),
(5, 'Lara dos Santos', 'F', '1989-05-31', 'PÃ³s GraduaÃ§Ã£o', 'Rua Pedra SabÃ£o', 1524, 'bloco 2', 'Bairro das Folhas', 'Rio de Janeiro', 'rj', '+ 55 (21) 93333-3333', 'lara@email.com'),
(6, 'Arthur Reis de Oliveira Neto', 'M', '1994-12-15', 'Ensino Superior', 'Rua das Flores', 1000, '', 'Bairro dos FerroviÃ¡rios', 'PEDRA BRANCA DO AMAPARI', 'ap', '+ 55 (96) 94444-4444', 'arthurreis25@email.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
