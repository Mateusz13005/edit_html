-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Maj 2022, 22:17
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `edytor`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `polecenia`
--

CREATE TABLE `polecenia` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `wartosc` text COLLATE utf8mb4_polish_ci NOT NULL,
  `znacznik` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `polecenia`
--

INSERT INTO `polecenia` (`id`, `nazwa`, `wartosc`, `znacznik`) VALUES
(1, 'br', '<br>', '<br>'),
(2, 'h1', '<h1>', '<h1></h1>'),
(3, 'h2', '<h2>', '<h2></h2>'),
(4, 'h3', '<h3>', '<h3></h3>'),
(5, 'h4', '<h4>', '<h4></h4>'),
(6, 'h5', '<h5>', '<h5></h5>'),
(7, 'h6', '<h6>', '<h6></h6>'),
(8, 'section', '<section>', '<section></section>'),
(9, 'article', '<article>', '<article></article>'),
(10, 'aside', '<aside>', '<aside></aside>'),
(11, 'header', '<header>', '<header></header>'),
(12, 'footer', '<footer>', '<footer></footer>'),
(13, 'nav', '<nav>', '<nav></nav>'),
(14, 'main', '<main>', '<main></main>'),
(15, 'p', '<p>', '<p></p>');

--
-- Indeksy dla zrzutÃ³w tabel
--

--
-- Indeksy dla tabeli `polecenia`
--
ALTER TABLE `polecenia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `polecenia`
--
ALTER TABLE `polecenia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
