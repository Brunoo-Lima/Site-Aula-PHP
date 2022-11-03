-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Nov-2022 às 03:14
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hoteldatabase`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(240) NOT NULL,
  `cli_email` varchar(240) NOT NULL,
  `cli_senha` int(120) NOT NULL,
  `cli_sexo` varchar(80) NOT NULL,
  `cli_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cli_id`, `cli_nome`, `cli_email`, `cli_senha`, `cli_sexo`, `cli_image`) VALUES
(1, 'Miguel', 'linkmiguel@live.com', 123456, 'masc', NULL),
(2, 'Miguel Estevão Brasil Yañez Marques', 'extevao09@gmail.com', 123456, 'masc', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hotel`
--

CREATE TABLE `hotel` (
  `hot_id` int(11) NOT NULL,
  `hot_nome` varchar(240) NOT NULL,
  `hot_logradouro` varchar(240) NOT NULL,
  `hot_numero` int(5) NOT NULL,
  `hot_bairro` varchar(240) NOT NULL,
  `hot_cep` int(8) NOT NULL,
  `hot_cidade` varchar(100) NOT NULL,
  `hot_uf` varchar(100) NOT NULL,
  `hot_image` varchar(200) DEFAULT NULL,
  `hot_wifi` tinyint(1) NOT NULL,
  `hot_cafe` tinyint(1) NOT NULL,
  `hot_pet` tinyint(1) NOT NULL,
  `hot_preco` double NOT NULL,
  `hot_nota` double NOT NULL,
  `hot_descricao` varchar(200) NOT NULL,
  `hot_comodidades` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`hot_comodidades`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `hotel`
--

INSERT INTO `hotel` (`hot_id`, `hot_nome`, `hot_logradouro`, `hot_numero`, `hot_bairro`, `hot_cep`, `hot_cidade`, `hot_uf`, `hot_image`, `hot_wifi`, `hot_cafe`, `hot_pet`, `hot_preco`, `hot_nota`, `hot_descricao`, `hot_comodidades`) VALUES
(1, 'Hotel em Bahamas 5 noites', 'Alameda José das Dores', 4123, 'Bairro Bom', 1918919, 'SP', 'SP', 'https://images.unsplash.com/photo-1597466599360-3b9775841aec?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8b3JsYW5kb3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60', 0, 1, 1, 1250, 9.8, 'É um Hotel 5 estrelas, ficando próximo aos principais centros turisticos!', '{\r\n\"comodidades\": [\"Serviço de arrumação diário\",\"Na praia\",\"Restaurantes e 2 bares/lounges\",\"Piscina externa\",\"Terraço na cobertura\",\"Academia\",\"Sauna seca\",\"Sauna a vapor\",\"Barracas de praia grátis\",\"Guarda-sóis\",\"Espreguiçadeiras\",\"Toalhas de praia\"]\r\n}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `cli_id` int(11) NOT NULL,
  `hot_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `res_data_entrada` date NOT NULL,
  `res_data_saida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`cli_id`, `hot_id`, `res_id`, `res_data_entrada`, `res_data_saida`) VALUES
(1, 1, 18, '2022-11-23', '2022-11-26'),
(1, 1, 19, '2022-11-23', '2022-11-26'),
(2, 1, 25, '2022-12-08', '2022-12-08'),
(1, 1, 26, '2022-11-01', '2022-11-01'),
(1, 1, 27, '2022-11-01', '2022-11-03'),
(1, 1, 203, '2022-12-08', '2022-12-08');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_id`);

--
-- Índices para tabela `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hot_id`);

--
-- Índices para tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `cli_id` (`cli_id`),
  ADD KEY `hot_id` (`hot_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`cli_id`) REFERENCES `cliente` (`cli_id`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`hot_id`) REFERENCES `hotel` (`hot_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
