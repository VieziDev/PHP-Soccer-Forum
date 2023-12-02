-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28/11/2023 às 01:21
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `soccer_forum_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Posts`
--

CREATE TABLE `Posts` (
  `post_id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `data_postagem` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Posts`
--

INSERT INTO `Posts` (`post_id`, `usuario_id`, `titulo`, `conteudo`, `data_postagem`) VALUES
(24, 5, 'A Ascensão dos Novos Talentos do Futebol Europeu', 'O cenário do futebol europeu está em constante evolução, e um dos aspectos mais empolgantes disso é a ascensão de novos talentos. Jogadores como Erling Haaland, Ansu Fati e Phil Foden estão não apenas brilhando em seus respectivos clubes, mas também redefinindo as expectativas para jovens atletas. Haaland, com seu físico imponente e faro de gol, tem deslumbrado na Bundesliga. Ansu Fati, apesar de suas lesões, mostra uma maturidade e técnica impressionantes no Barcelona. Já Phil Foden, sob a tutela de Pep Guardiola no Manchester City, tem se mostrado um meio-campista versátil e criativo. Esses jovens não são apenas promessas; eles já estão deixando sua marca no cenário mundial, prometendo uma nova era de excelência no futebol europeu.', '2023-11-27 22:44:46'),
(25, 5, 'Os Maiores Clássicos do Futebol Europeu e Suas Histórias', 'Os clássicos do futebol europeu são mais do que apenas jogos; são embates históricos carregados de paixão, rivalidade e tradição. O El Clásico entre Barcelona e Real Madrid transcende o esporte, simbolizando as tensões culturais e políticas da Espanha. Manchester United e Liverpool, dois dos clubes mais bem-sucedidos da Inglaterra, têm uma rivalidade que se baseia não apenas em sucessos no futebol, mas também nas raízes industriais e culturais das duas cidades. Na Itália, o Derby della Madonnina entre AC Milan e Inter Milan é um espetáculo de fervor e cor, refletindo a rica história do futebol italiano. Cada clássico é uma história viva, repleta de momentos memoráveis que se tornaram parte do folclore do futebol.', '2023-11-27 22:47:07'),
(26, 5, 'Táticas Inovadoras no Futebol Europeu Atual', 'O futebol moderno é um jogo de inovação tática, e alguns dos maiores arquitetos dessa mudança estão na Europa. Pep Guardiola, com seu foco em posse de bola e pressão alta, revolucionou a Premier League no Manchester City. Jürgen Klopp, através de seu \"futebol de heavy metal\" no Liverpool, trouxe intensidade e uma pressão implacável, mudando a dinâmica da liga inglesa. Thomas Tuchel, no Chelsea, demonstrou sua habilidade em adaptar suas táticas a diferentes adversários, mostrando uma flexibilidade que o destaca. Esses treinadores não apenas conquistaram títulos; eles influenciaram uma geração de treinadores e mudaram a maneira como o jogo é jogado.', '2023-11-27 22:47:42'),
(27, 4, 'A Evolução dos Campeonatos Europeus ao Longo das Décadas', 'As principais ligas europeias têm uma história rica e diversificada, tendo evoluído significativamente ao longo das décadas. A Premier League, por exemplo, transformou-se numa das ligas mais ricas e competitivas do mundo, atraindo talentos de todos os cantos do globo. A La Liga é conhecida por seu estilo técnico e tático, e tem sido o lar de alguns dos melhores jogadores da história, como Lionel Messi e Cristiano Ronaldo. A Bundesliga é admirada por sua gestão financeira sustentável e atmosfera incrível nos estádios. Além disso, a introdução de tecnologias como o VAR tem provocado debates sobre a pureza e a justiça do jogo, refletindo a constante evolução do futebol.', '2023-11-27 22:49:45'),
(28, 4, 'Histórias Inspiradoras de Superação no Futebol Europeu', 'O futebol europeu está repleto de histórias de superação que inspiram e emocionam. Uma das mais notáveis é a de Jamie Vardy, que subiu das ligas inferiores para se tornar um dos atacantes mais temidos da Premier League e um peça chave no surpreendente título do Leicester City em 2016. Outra história notável é a de Christian Eriksen, cuja carreira foi ameaçada por um colapso cardíaco em campo durante a Euro 2020. Sua incrível recuperação e retorno ao futebol profissional é um testemunho de sua resiliência e determinação. Estas histórias não apenas destacam o talento e a habilidade no campo, mas também a coragem e a força de caráter fora dele.', '2023-11-27 22:50:02');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Usuarios`
--

CREATE TABLE `Usuarios` (
  `usuario_id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Usuarios`
--

INSERT INTO `Usuarios` (`usuario_id`, `nome`, `email`, `senha`) VALUES
(1, 'matheus', 'matheusviezi@gmail.com', '$2y$10$BJK6xa0/i0vSLDL6bna0TuoGT2.PueXs1b8JPrYjrzOma/.TA6TDG'),
(2, 'eduardo', 'eduardo.simas@gmail.com', '$2y$10$XfGteP0DRfZPjRvduYmIveKjQJdaALiw5Y0pB0L3AWNUXXcB0/ES.'),
(3, 'liliane', 'liliane@viezi.com.br', '$2y$10$d/HsSJAyLhc6sTx1EQ3EQej6mkpO2x1YxSbZ1R2VnjoMsvxmcbBIO'),
(4, 'matheus viezi', 'matheusviezi@hotmail.com', '$2y$10$rgBFpMVIKp7SsP0ZSfl8j.vtL4u8B4ZtFBfPt8ihcu/wQHdNNOsSW'),
(5, 'alexandre viezi', 'alexandre@viezi.com.br', '$2y$10$gsoa7/.RGCLnTMqWCVuhz.06ZWJIgoMw59sqeNonA9rZ2y1khFpxS'),
(6, 'Allanis Guther Ferrarezi', 'allanisguther@hotmail.com', '$2y$10$tU6irNiMYHLOwKFRtmGIluhxkqe5QY7cDLxg22Un1/HYWEl7fZHNi'),
(7, 'maria eduarda', 'mariaeduarda@gmail.com', '$2y$10$CtqyerN/.aqZrBuWCgXZn.svXVIo1kak6YPaBxa8c.czHbb1QJCR2');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Posts`
--
ALTER TABLE `Posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `Posts`
--
ALTER TABLE `Posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `Usuarios` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
