-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Mar-2019 às 19:45
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE `iflix`;
USE `iflix`;

--
-- Database: `iflix`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `Nome` varchar(40) NOT NULL,
  `Genero` varchar(20) NOT NULL,
  `Descricao` varchar(1000) NOT NULL,
  `Temporadas` tinyint(2) NOT NULL,
  `Imagem` tinyint(3) NOT NULL,
  `Valor` decimal(10,0) NOT NULL,
  `Modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `series`
--

INSERT INTO `series` (`id`, `Nome`, `Genero`, `Descricao`, `Temporadas`, `Imagem`, `Valor`, `Modified`) VALUES
(1, 'Dexter', 'Crime', 'Dexter Morgan (Michael C. Hall) é adotado aos três anos de idade por Harry Morgan (James Remar) e Doris (Kathrin Middleton), depois de ter se tornado órfão. Após detectar sua tendência homicida, o pai de Dexter decide ensinar a ele um código no intuito de canalizar a raiva do filho para situações mais propícias à violência. Nesta nova lógica, Dexter deve matar apenas assassinos de pessoas inocentes com a condição de provar sua culpa. Ele inicia o desenvolvimento de diversas estratégias usando se', 8, 3, '25', '2019-03-03 16:02:55'),
(2, 'Breaking Bad', 'Drama', 'Walter White (Bryan Cranston) é um professor de química na casa dos 50 anos que trabalha em uma escola secundária no Novo México, descobre que tem câncer terminal decide ganhar dinheiro rapidamente para sua família. Walter usa seu conhecimento de química para fazer e vender metanfetamina, uma droga sintética. Ele conta com a ajuda do ex-aluno e pequeno traficante Jesse (Aaron Paul) e enfrenta vários desafios, incluindo o fato de seu concunhado ser um importante nome dentro da Agência Anti-Drogas', 5, 2, '19', '2019-03-02 18:18:11'),
(4, 'Narcos', 'Crime', '\'No final da década de 1970, Pablo Escobar (Wagner Moura) não é mais considerado apenas um traficante. Seu nome circula pelas delegacias da Colômbia e também dos Estados Unidos como o traficantes de drogas mais perigoso do momento. Enquanto isso, Escobar continua construindo seu império e enriquece cada vez mais com seus negócios ilegais.', 3, 4, '20', '2019-03-03 18:18:47'),
(5, 'Game of Thrones', 'Fantasia', 'Situada nos continentes fictícios de Westeros e Essos, a série centra-se no Trono de Ferro dos Sete Reinos e segue um enredo de alianças e conflitos entre as famílias nobres dinásticas, seja competindo para reivindicar o trono ou lutando pela independência do trono. ', 7, 5, '50', '2019-03-03 18:26:35'),
(6, 'Supernatural', 'Fantasia', '\'Desde que era pequeno, Sam Winchester (Jared Padalecki) tentava escapar do próprio passado. Após a misteriosa morte de Mary (Samantha Smith), o pai de Sam passou a procurar vingança contra as forças do mal que mataram a esposa, destruindo qualquer ser maligno que cruze o seu caminho. Ao contrário de Sam, Dean (Jensen Ackles), irmão mais velho, sempre quis seguir os passos do pai. Sam está determinado a se livrar do \\\"negócio da família\\\", mas sua vida está prestes a tomar os rumos que ele não desejava, quando ele fica sem escolhas a não ser unir-se ao irmão.', 14, 6, '38', '2019-03-03 18:28:36'),
(7, 'The Walking Dead', 'Fantasia', 'Baseado na história em quadrinhos escrita por Robert Kirkman, este drama potente e visceral retrata a vida nos Estados Unidos pós-apocalíptico. Um grupo de sobreviventes, liderado pelo policial Rick Grimes, segue viajando em busca de uma nova moradia segura e distante dos mortos-vivos. A pressão para permanecerem vivos e lutarem pela sobrevivência faz com que muitos do grupo sejam submetidos às mais profundas formas de crueldade humana. Rick acaba descobrindo que o tão assustador desespero pela subsistência pode ser ainda mais fatal do que os próprios mortos-vivos que os rodeiam.', 9, 7, '28', '2019-03-03 18:30:43'),
(8, 'Fear the Walking Dead', 'Fantasia', 'Ambientada em Los Angeles, a série mostra o começo do apocalipse zumbi e a temível desintegração da sociedade pelos olhos de uma família disfuncional, que precisa se unir para tentar sobreviver ao caos do fim dos tempos.', 4, 8, '21', '2019-03-03 18:36:15'),
(9, 'The Last Kingdom ', 'Acao', 'A história acompanha o jovem Uhtred, um nobre que perdeu os pais em um dos ataques viquingues. Levado e criado por eles, Uhtred cresce e se torna um guerreiro. Mais tarde, ele parte com a missão de conquistar as terras onde nasceu. Enquanto isso, o Rei Alfredo enfrenta problemas políticos e religiosos para unificar os reinos e transformá-lo no que hoje é a Inglaterra. ', 3, 9, '14', '2019-03-03 18:37:04'),
(10, 'Vikings', 'Acao', 'Ragnar Lothbrok (Travis Fimmel) é o maior guerreiro da sua era. Lider de seu bando, com seus irmãos e sua família, ele ascende ao poder e torna-se Rei da Noruega, além de guerreiro implacável, Ragnar segue as tradições nórdicas e é devoto dos deuses, as lendas contam que ele descende diretamente de Odin, o deus da guerra.', 6, 10, '32', '2019-03-03 18:38:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
